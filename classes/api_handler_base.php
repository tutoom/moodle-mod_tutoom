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
use Closure;

/**
 * Base class for API handlers with shared response processing logic.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class api_handler_base {
    /**
     * Handle API response with standardized error handling.
     *
     * @param api_response $response The API response object.
     * @param Closure $successcallback Callback to execute on success, receives response data and results object.
     * @return stdClass Results object with either success data or error.
     */
    protected static function handle_api_response(api_response $response, Closure $successcallback): stdClass {
        $results = new stdClass();

        if ($response->success) {
            // Execute success callback, passing response data and results object.
            $successcallback($response->data, $results);
        } else {
            // Standardized error handling - error object already contains statuscode from error_handler.
            $results->error = $response->error;
        }

        return $results;
    }
}
