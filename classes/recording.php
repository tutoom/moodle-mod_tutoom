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
 * Class to describe Tutoom Recordings.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class recording extends api_handler_base {
    /**
     * Return list of recordings. It can return empty list too.
     *
     * @param string $groupid Unique identifier: siteidentifier.courseid.instanceid
     * @param int $page
     * @return stdClass
     */
    public static function get_recordings(string $groupid, int $page = 1): stdClass {
        $params = [
            'page' => $page,
            'pageSize' => '5',
            'groupId' => $groupid,
        ];

        $client = new api_client();
        $response = $client->get("recordings", $params);

        return self::handle_api_response($response, function ($data, $results) {
            $recordings = $data->data ?? [];

            // Add timezone-aware formatted dates to each recording.
            $processedrecordings = array_map(function($recording) {
                if (isset($recording->createdAt)) {
                    $timestamp = strtotime($recording->createdAt);
                    $recording->formattedDate = userdate($timestamp, '%b %d, %Y');
                    $recording->formattedTime = userdate($timestamp, '%I:%M %p');
                } else {
                    $recording->formattedDate = '';
                    $recording->formattedTime = '';
                }
                return $recording;
            }, $recordings);

            $results->recordings = $processedrecordings;
            $results->totalRecords = $data->totalCount ?? 0;
            $results->pageSize = $data->pageSize ?? 5;
            $results->totalPages = $data->totalPages ?? 0;
            $results->page = $data->page ?? 1;
        });
    }

    /**
     * Generate a url to connect to a tutoom recording playback.
     *
     * @param string $recordingid
     * @return stdClass
     */
    public static function join_playback(string $recordingid): stdClass {
        global $USER;

        $params = [
            'userName' => fullname($USER),
            'externalUserId' => $USER->id,
        ];

        $client = new api_client();
        $response = $client->post("recordings/$recordingid/tokens", $params);

        return self::handle_api_response($response, function ($data, $results) {
            $results->joinurl = $data->playbackUrl ?? '';
        });
    }
}
