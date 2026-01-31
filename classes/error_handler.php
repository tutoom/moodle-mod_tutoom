<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_tutoom;

defined('MOODLE_INTERNAL') || die;

use stdClass;

/**
 * Centralized error handler for Tutoom API errors.
 *
 * Maps Tutoom API error codes to user-friendly messages with recovery suggestions.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class error_handler {
    /** @var string Authentication error type */
    const TYPE_AUTHENTICATION = 'authentication';

    /** @var string Authorization error type */
    const TYPE_AUTHORIZATION = 'authorization';

    /** @var string Validation error type */
    const TYPE_VALIDATION = 'validation';

    /** @var string Not found error type */
    const TYPE_NOT_FOUND = 'not_found';

    /** @var string Rate limit error type */
    const TYPE_RATE_LIMIT = 'rate_limit';

    /** @var string Server error type */
    const TYPE_SERVER = 'server';

    /** @var string Network error type */
    const TYPE_NETWORK = 'network';

    /** @var string Unknown error type */
    const TYPE_UNKNOWN = 'unknown';

    /**
     * Create a standardized error response from API error.
     *
     * @param stdClass|null $apierror API error object (code, message, requestId)
     * @param int $httpcode HTTP status code
     * @return stdClass Error response with user-friendly message and recovery suggestions
     */
    public static function handle_api_error(?stdClass $apierror, int $httpcode): stdClass {
        $error = new stdClass();

        if ($apierror && isset($apierror->code)) {
            $errorinfo = self::get_error_info($apierror->code, $httpcode);
            $error->code = $apierror->code;
            $error->message = $errorinfo->message;
            $error->suggestion = $errorinfo->suggestion;
            $error->type = $errorinfo->type;
            $error->retryable = $errorinfo->retryable;
            $error->requestid = $apierror->requestId ?? null;
        } else {
            $errorinfo = self::get_error_info_by_httpcode($httpcode);
            $error->code = 'HTTP_' . $httpcode;
            $error->message = $errorinfo->message;
            $error->suggestion = $errorinfo->suggestion;
            $error->type = $errorinfo->type;
            $error->retryable = $errorinfo->retryable;
            $error->requestid = null;
        }

        $error->statuscode = $httpcode;

        return $error;
    }

    /**
     * Get error information by error code.
     *
     * @param string $code Error code from Tutoom API
     * @param int $httpcode HTTP status code
     * @return stdClass Error information
     */
    private static function get_error_info(string $code, int $httpcode): stdClass {
        $info = new stdClass();

        switch ($code) {
            // Authentication errors (401).
            case 'UNAUTHORIZED':
                $info->message = get_string('error_unauthorized', 'mod_tutoom');
                $info->suggestion = get_string('error_unauthorized_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_AUTHENTICATION;
                $info->retryable = false;
                break;

            // Authorization errors (403).
            case 'FORBIDDEN':
                $info->message = get_string('error_forbidden', 'mod_tutoom');
                $info->suggestion = get_string('error_forbidden_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_AUTHORIZATION;
                $info->retryable = false;
                break;

            case 'NO_ACTIVE_SUBSCRIPTION':
                $info->message = get_string('error_no_subscription', 'mod_tutoom');
                $info->suggestion = get_string('error_no_subscription_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_AUTHORIZATION;
                $info->retryable = false;
                break;

            case 'MAX_CONCURRENT_ROOMS_REACHED':
                $info->message = get_string('error_max_rooms', 'mod_tutoom');
                $info->suggestion = get_string('error_max_rooms_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_AUTHORIZATION;
                $info->retryable = false;
                break;

            case 'SUBSCRIPTION_INACTIVE':
                $info->message = get_string('error_subscription_inactive', 'mod_tutoom');
                $info->suggestion = get_string('error_subscription_inactive_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_AUTHORIZATION;
                $info->retryable = false;
                break;

            // Validation errors (400).
            case 'VALIDATION_ERROR':
                $info->message = get_string('error_validation', 'mod_tutoom');
                $info->suggestion = get_string('error_validation_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_VALIDATION;
                $info->retryable = false;
                break;

            case 'INVALID_IDEMPOTENCY_KEY':
                $info->message = get_string('error_invalid_idempotency', 'mod_tutoom');
                $info->suggestion = get_string('error_invalid_idempotency_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_VALIDATION;
                $info->retryable = false;
                break;

            // Resource not found (404).
            case 'NOT_FOUND':
            case 'ROOM_NOT_FOUND':
                $info->message = get_string('error_room_not_found', 'mod_tutoom');
                $info->suggestion = get_string('error_room_not_found_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_NOT_FOUND;
                $info->retryable = false;
                break;

            case 'RECORDING_NOT_FOUND':
                $info->message = get_string('error_recording_not_found', 'mod_tutoom');
                $info->suggestion = get_string('error_recording_not_found_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_NOT_FOUND;
                $info->retryable = false;
                break;

            // Rate limiting (429).
            case 'RATE_LIMIT_EXCEEDED':
                $info->message = get_string('error_rate_limit', 'mod_tutoom');
                $info->suggestion = get_string('error_rate_limit_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_RATE_LIMIT;
                $info->retryable = true;
                break;

            // Server errors (500).
            case 'INTERNAL_ERROR':
                $info->message = get_string('error_internal', 'mod_tutoom');
                $info->suggestion = get_string('error_internal_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_SERVER;
                $info->retryable = true;
                break;

            case 'TOKEN_CREATION_FAILED':
                $info->message = get_string('error_token_failed', 'mod_tutoom');
                $info->suggestion = get_string('error_token_failed_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_SERVER;
                $info->retryable = true;
                break;

            // Service unavailable (503).
            case 'SERVICE_UNAVAILABLE':
                $info->message = get_string('error_service_unavailable', 'mod_tutoom');
                $info->suggestion = get_string('error_service_unavailable_suggestion', 'mod_tutoom');
                $info->type = self::TYPE_SERVER;
                $info->retryable = true;
                break;

            default:
                return self::get_error_info_by_httpcode($httpcode);
        }

        return $info;
    }

    /**
     * Get error information by HTTP status code (fallback when no error code is provided).
     *
     * @param int $httpcode HTTP status code
     * @return stdClass Error information
     */
    private static function get_error_info_by_httpcode(int $httpcode): stdClass {
        $info = new stdClass();

        if ($httpcode === 0) {
            // Network error - no response received.
            $info->message = get_string('error_network', 'mod_tutoom');
            $info->suggestion = get_string('error_network_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_NETWORK;
            $info->retryable = true;
        } else if ($httpcode === 401) {
            $info->message = get_string('error_unauthorized', 'mod_tutoom');
            $info->suggestion = get_string('error_unauthorized_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_AUTHENTICATION;
            $info->retryable = false;
        } else if ($httpcode === 403) {
            $info->message = get_string('error_forbidden', 'mod_tutoom');
            $info->suggestion = get_string('error_forbidden_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_AUTHORIZATION;
            $info->retryable = false;
        } else if ($httpcode === 404) {
            $info->message = get_string('error_not_found', 'mod_tutoom');
            $info->suggestion = get_string('error_not_found_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_NOT_FOUND;
            $info->retryable = false;
        } else if ($httpcode === 429) {
            $info->message = get_string('error_rate_limit', 'mod_tutoom');
            $info->suggestion = get_string('error_rate_limit_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_RATE_LIMIT;
            $info->retryable = true;
        } else if ($httpcode >= 500) {
            $info->message = get_string('error_server', 'mod_tutoom');
            $info->suggestion = get_string('error_server_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_SERVER;
            $info->retryable = true;
        } else {
            $info->message = get_string('error_unknown', 'mod_tutoom');
            $info->suggestion = get_string('error_unknown_suggestion', 'mod_tutoom');
            $info->type = self::TYPE_UNKNOWN;
            $info->retryable = false;
        }

        return $info;
    }

    /**
     * Format error for display to user.
     *
     * @param stdClass $error Error object from handle_api_error()
     * @param bool $includesuggestion Include recovery suggestion
     * @return string Formatted error message
     */
    public static function format_error_message(stdClass $error, bool $includesuggestion = true): string {
        $message = $error->message;

        if ($includesuggestion && !empty($error->suggestion)) {
            $message .= ' ' . $error->suggestion;
        }

        if (!empty($error->requestid)) {
            $message .= ' ' . get_string('error_request_id', 'mod_tutoom', $error->requestid);
        }

        return $message;
    }

    /**
     * Check if an error is retryable.
     *
     * @param stdClass $error Error object from handle_api_error()
     * @return bool True if the error can be retried
     */
    public static function is_retryable(stdClass $error): bool {
        return $error->retryable ?? false;
    }

    /**
     * Get suggested wait time before retry based on error type.
     *
     * @param stdClass $error Error object
     * @param int $attempt Retry attempt number (0-based)
     * @return int Wait time in seconds
     */
    public static function get_retry_delay(stdClass $error, int $attempt = 0): int {
        if (!self::is_retryable($error)) {
            return 0;
        }

        // Exponential backoff: 2^attempt seconds.
        $delay = pow(2, $attempt);

        // Cap at 60 seconds.
        return min($delay, 60);
    }
}
