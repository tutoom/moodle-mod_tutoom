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
 * Standardized API response wrapper.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class api_response {
    /** @var bool Success status */
    public $success;

    /** @var mixed Response data */
    public $data;

    /** @var mixed Error information */
    public $error;

    /** @var int HTTP status code */
    public $httpcode;

    /**
     * Create success response.
     *
     * @param mixed $data Response data
     * @param int $httpcode HTTP status code
     * @return api_response
     */
    public static function success($data, int $httpcode): api_response {
        $response = new self();
        $response->success = true;
        $response->data = $data;
        $response->httpcode = $httpcode;
        $response->error = null;
        return $response;
    }

    /**
     * Create error response.
     *
     * @param int $httpcode HTTP status code
     * @param mixed $error Error information
     * @return api_response
     */
    public static function error(int $httpcode, $error): api_response {
        $response = new self();
        $response->success = false;
        $response->error = is_string($error) ? (object)['message' => $error] : $error;
        $response->httpcode = $httpcode;
        $response->data = null;
        return $response;
    }
}
