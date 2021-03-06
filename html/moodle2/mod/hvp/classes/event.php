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

/**
 * The mod_hvp event logger, makes it easy to track events throughout
 * the H5P system.
 *
 * @package    mod_hvp
 * @copyright  2016 Joubel AS
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_hvp;
defined('MOODLE_INTERNAL') || die();

class event extends \H5PEventBase {
    private $user;

     /**
      * Adds event type, h5p library and timestamp to event before saving it.
      *
      * @param string $type Name of event type
      * @param string $sub_type Name of event sub type
      * @param string $content_id Identifier for content affected by the event
      * @param string $content_title Content title (makes it easier to know which content was deleted etc.)
      * @param string $library_name Name of the library affected by the event
      * @param string $library_version Library version
      */
    function __construct($type, $sub_type = NULL, $content_id = NULL, $content_title = NULL, $library_name = NULL, $library_version = NULL) {
        global $USER;

        // Track the who initiated the event
        $this->user = $USER->id;

        parent::__construct($type, $sub_type, $content_id, $content_title, $library_name, $library_version);
    }

    /**
     * Store the event.
     *
     * @return int Event ID
     */
    protected function save() {
        global $DB;

        // Get data in array format without NULL values
        $data = $this->getDataArray();

        // Add user
        $data['user_id'] = $this->user;

        return $DB->insert_record('hvp_events', $data);
    }

    /**
     * Count the number of events.
     */
    protected function saveStats() {
        global $DB;
        $type = $this->type . ' ' . $this->sub_type;

        // Grab current counter to check if it exists
        $id = $DB->get_field_sql(
            "SELECT id
               FROM {hvp_counters}
              WHERE type = ?
                AND library_name = ?
                AND library_version = ?",
            array($type, $this->library_name, $this->library_version)
        );

        if ($id === false) {
            // No counter found, insert new one
            $DB->insert_record('hvp_counters', array(
                'type' => $type,
                'library_name' => $this->library_name,
                'library_version' => $this->library_version,
                'num' => 1
            ));
        }
        else {
            // Update num+1
            $DB->execute(
                "UPDATE {hvp_counters}
                    SET num = num + 1
                  WHERE id = ?",
                array($id)
            );
        }
    }
}
