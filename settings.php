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
 * Configuration settings for local_examguard.
 *
 * @package    local_examguard
 * @copyright  2024 onwards University College London {@link https://www.ucl.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Alex Yeung <k.yeung@ucl.ac.uk>
 */

defined('MOODLE_INTERNAL') || die();

$settings = new admin_settingpage('local_examguard_settings', new lang_string('pluginname', 'local_examguard'));
$ADMIN->add('localplugins', $settings);

if ($ADMIN->fulltree) {
    // General settings.
    $settings->add(new admin_setting_heading('local_examguard_general_settings',
        get_string('settings:generalsettingsheader', 'local_examguard'),
        ''
    ));
    // Setting to enable/disable the plugin.
    $settings->add(new admin_setting_configcheckbox(
        'local_examguard/enabled',
        get_string('settings:enable', 'local_examguard'),
        get_string('settings:enable:desc', 'local_examguard'),
        '1'
    ));
}
