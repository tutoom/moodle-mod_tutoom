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

global $CFG;
require_once($CFG->libdir . '/filelib.php');

use curl;
use stdClass;

/**
 * API client for Tutoom backend communication.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class api_client {
    /** @var string API base URL */
    private $apiurl;

    /** @var string API secret key */
    private $apikey;

    /** @var curl Curl instance */
    private $curl;

    /**
     * Constructor.
     */
    public function __construct() {
        $configmanager = config_manager::get_instance();
        $this->apiurl = $configmanager->get_api_url();
        $this->apikey = $configmanager->get_api_key();
        $this->curl = new curl();
    }

    /**
     * Set request headers.
     *
     * @return void
     */
    private function set_headers() {
        $this->curl->setHeader([
            'Authorization: Bearer ' . $this->apikey,
            'Content-Type: application/json',
        ]);
    }

    /**
     * Handle API response and convert to standardized format.
     *
     * @param string $response Raw response
     * @return api_response
     */
    private function handle_response(string $response): api_response {
        $info = $this->curl->get_info();
        $httpcode = (int)$info['http_code'];

        // Handle 204 No Content - success with no body.
        if ($httpcode === 204) {
            return api_response::success(new \stdClass(), $httpcode);
        }

        $jsonresponse = json_decode($response);

        // Check for JSON decode errors.
        if (json_last_error() !== JSON_ERROR_NONE) {
            debugging('JSON decode error: ' . json_last_error_msg(), DEBUG_DEVELOPER);
            $error = error_handler::handle_api_error(null, $httpcode);
            return api_response::error($httpcode, $error);
        }

        // Validate HTTP status code.
        if ($httpcode >= 200 && $httpcode < 300) {
            return api_response::success($jsonresponse, $httpcode);
        }

        // Handle error response with user-friendly messages.
        $error = error_handler::handle_api_error($jsonresponse, $httpcode);
        return api_response::error($httpcode, $error);
    }

    /**
     * Send GET request.
     *
     * @param string $endpoint API endpoint (e.g., "rooms/123")
     * @param array $params Query parameters
     * @return api_response
     */
    public function get(string $endpoint, array $params = []): api_response {
        $this->set_headers();
        $url = $this->apiurl . $endpoint;
        $response = $this->curl->get($url, $params);
        return $this->handle_response($response);
    }

    /**
     * Send POST request.
     *
     * @param string $endpoint API endpoint
     * @param array $data Request body
     * @return api_response
     */
    public function post(string $endpoint, array $data): api_response {
        $this->set_headers();
        $url = $this->apiurl . $endpoint;
        $response = $this->curl->post($url, json_encode($data));
        return $this->handle_response($response);
    }

    /**
     * Send DELETE request.
     *
     * @param string $endpoint API endpoint
     * @return api_response
     */
    public function delete(string $endpoint): api_response {
        $this->set_headers();
        $url = $this->apiurl . $endpoint;
        $response = $this->curl->delete($url);
        return $this->handle_response($response);
    }
}
