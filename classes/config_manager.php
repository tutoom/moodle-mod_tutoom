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

use mod_tutoom\local\config;
use stdClass;

/**
 * Configuration manager singleton.
 *
 * @package   mod_tutoom
 * @copyright 2025 onwards, Tutoom Inc.
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class config_manager {
    /** @var config_manager Singleton instance */
    private static $instance = null;

    /** @var stdClass Moodle config */
    private $config;

    /** @var array Default options */
    private $options;

    /**
     * Private constructor for singleton.
     */
    private function __construct() {
        $this->config = get_config("mod_tutoom");
        $this->options = config::get_options();
    }

    /**
     * Get singleton instance.
     *
     * @return config_manager
     */
    public static function get_instance(): config_manager {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Get API URL.
     *
     * @return string
     */
    public function get_api_url(): string {
        return $this->options["tutoom_backend_api_url"];
    }

    /**
     * Get API secret key.
     *
     * @return string
     */
    public function get_api_key(): string {
        return $this->config->api_secret_key ?? '';
    }

    /**
     * Check if activity logs are enabled.
     *
     * @return bool
     */
    public function is_activity_logs_enabled(): bool {
        return $this->config->activity_logs === "1";
    }

    /**
     * Check if recording auto-start is enabled.
     *
     * @return bool
     */
    public function is_recording_auto_start_enabled(): bool {
        return $this->config->recording_auto_start === "1";
    }

    /**
     * Get moderator role value.
     *
     * @return int
     */
    public function get_moderator_role(): int {
        return $this->options["moderator_role"];
    }

    /**
     * Get viewer role value.
     *
     * @return int
     */
    public function get_viewer_role(): int {
        return $this->options["viewer_role"];
    }
}
