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
 * Plugin version info
 *
 * @package    tool
 * @subpackage timezoneimport
 * @copyright  2011 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

//XTEC ************ MODIFICAT - To let access only to xtecadmin user
//2012.05.23  @sarjona
if ( $hassiteconfig && get_protected_agora() ) { 
//************ ORIGINAL
/*
if ($hassiteconfig) {
*/
//************ FI
    $ADMIN->add('location', new admin_externalpage('tooltimezoneimport', get_string('updatetimezones', 'tool_timezoneimport'), "$CFG->wwwroot/$CFG->admin/tool/timezoneimport/index.php"));
}

