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
 * Cohort related management functions, this file needs to be included manually.
 *
 * @package    core_cohort
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function local_testimonial_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload) {
    global $DB, $CFG,$USER;
 //   require_login();
//if(isloggedin() && $USER->auth !=''){
    $fullpath = "/{$context->id}/local_testimonial/$filearea/{$args[0]}/{$args[1]}";

    $fs = get_file_storage();
    if (!$file = $fs->get_file_by_hash(sha1($fullpath)) or $file->is_directory()) {
        return false;
    }
    send_stored_file($file, 0, 0, false); 
 /*   }else{
	return false;
	
	}*/
}

/******* correction for login *
function local_testimonial_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload) {
    global $DB, $CFG,$USER;
    require_login();
if(isloggedin() && $USER->auth !=''){
    $fullpath = "/{$context->id}/local_testimonial/$filearea/{$args[0]}/{$args[1]}";

    $fs = get_file_storage();
    if (!$file = $fs->get_file_by_hash(sha1($fullpath)) or $file->is_directory()) {
        return false;
    }
    send_stored_file($file, 0, 0, false); 
    }else{
	return false;
	
	}
}


*/