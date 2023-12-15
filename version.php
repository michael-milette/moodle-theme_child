<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * @package   theme_child
 * @copyright 2023 TNG Consulting Inc. <www.tngconsulting.ca>
 * @copyright 2016 Damyon Wiese
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

$plugin->version = 20231212001; // This is the version of the plugin.
$plugin->release   = '0.1.0';
$plugin->maturity  = MATURITY_ALPHA;
// This is the version of Moodle this plugin requires.
$plugin->requires = 2022041900; // Moodle 4.0 or later.
// This is the component name of the plugin. It always starts with 'theme_' for themes and should match the name of the folder.
$plugin->component = 'theme_child';
// This is a list of plugins, this plugin depends on (and their versions).
$plugin->dependencies = [
    'theme_boost' => 2016102100,
];
