<?php
// +--------------------------------------------------------------------------+
// | Site Tailor Plugin - glFusion CMS                                        |
// +--------------------------------------------------------------------------+
// | mysql_install.php                                                        |
// |                                                                          |
// | Installation SQL                                                         |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Copyright (C)  2008 by the following authors:                            |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+


$_SQL['st_config'] = "CREATE TABLE {$_TABLES['st_config']} (
  `id` int(11) NOT NULL auto_increment,
  `config_name` varchar(255) default NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `config_name` (`config_name`)
) TYPE=MyISAM;";

$_SQL['st_menus'] = "CREATE TABLE {$_TABLES['st_menus']} (
  `id` int(11) NOT NULL auto_increment,
  `menu_name` varchar(64) NOT NULL,
  `menu_type` tinyint(4) NOT NULL,
  `menu_active` tinyint(3) NOT NULL,
  `group_id` mediumint(9) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `menu_name` (`menu_name`)
) TYPE=MyISAM;";

$_SQL['st_menus_config'] = "CREATE TABLE {$_TABLES['st_menus_config']} (
  `id` int(11) NOT NULL auto_increment,
  `menu_id` int(11) NOT NULL,
  `conf_name` varchar(64) NOT NULL,
  `conf_value` varchar(64) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `Config` (`menu_id`,`conf_name`),
  KEY `menu_id` (`menu_id`)
) TYPE=MyISAM;";

$_SQL['st_menu_elements'] = "CREATE TABLE {$_TABLES['st_menu_elements']} (
    `id` int(11) NOT NULL auto_increment,
    `pid` int(11) NOT NULL,
    `menu_id` int(11) NOT NULL default '0',
    `element_label` varchar(255) NOT NULL,
    `element_type` int(11) NOT NULL,
    `element_subtype` varchar(255) NOT NULL,
    `element_order` int(11) NOT NULL,
    `element_active` tinyint(4) NOT NULL,
    `element_url` varchar(255) NOT NULL,
    `element_target` varchar(255) NOT NULL,
    `group_id` mediumint(9) NOT NULL,
    PRIMARY KEY( `id` ),
    INDEX ( `pid` )
) TYPE=MyISAM;";

// default st configuration
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_config']} (`config_name`, `config_value`) VALUES ('use_graphic_logo','0'),('display_site_slogan','1'),('logo_name','logo1234.png');";

// default menus
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus']} VALUES(1, 'navigation', 1, 1, 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus']} VALUES(2, 'footer', 2, 1, 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus']} VALUES(3, 'block', 3, 1, 2);";

// navigation color defaults
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'main_menu_bg_color', '#151515');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'main_menu_hover_bg_color', '#3667c0');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'main_menu_text_color', '#CCCCCC');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'main_menu_hover_text_color', '#FFFFFF');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'submenu_text_color', '#FFFFFF');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'submenu_hover_text_color', '#679EF1');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'submenu_background_color', '#151515');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'submenu_hover_bg_color', '#333333');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'submenu_highlight_color', '#333333');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'submenu_shadow_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'use_images', '1');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'menu_bg_filename', 'menu_bg.gif');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'menu_hover_filename', 'menu_hover_bg.gif');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'menu_parent_filename', 'menu_parent.png');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(1, 'menu_alignment', '1');";

// footer menu color defaults
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'main_menu_bg_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'main_menu_hover_bg_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'main_menu_text_color', '#3677c0');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'main_menu_hover_text_color', '#679ef1');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'submenu_text_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'submenu_hover_text_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'submenu_background_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'submenu_hover_bg_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'submenu_highlight_color', '#999999');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'submenu_shadow_color', '#000000');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'menu_alignment', '0');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(2, 'use_images', '0');";

// block menu color defaults
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'main_menu_bg_color', '#DDDDDD');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'main_menu_hover_bg_color', '#BBBBBB');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'main_menu_text_color', '#0000ff');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'main_menu_hover_text_color', '#FFFFFF');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'submenu_text_color', '#0000FF');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'submenu_hover_text_color', '#FFFFFF');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'submenu_background_color', '#DDDDDD');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'submenu_hover_bg_color', '#BBBBBB');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'submenu_highlight_color', '#999999');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'submenu_shadow_color', '#999999');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'menu_alignment', '1');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'use_images', '1');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'menu_bg_filename', 'menu_bg.gif');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'menu_hover_filename', 'menu_hover_bg.gif');";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menus_config']} (`menu_id`, `conf_name`, `conf_value`) VALUES(3, 'menu_parent_filename', 'vmenu_parent.gif');";

// default navigation menu elements
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Home',2,'0',10,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Contribute',2,'1',20,1,'','',13);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Search',2,'4',30,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Directory',2,'2',40,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Topics',3,'3',50,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Plugins',3,'5',60,1,'','',2);";
//$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Widgets',1,'',70,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Typography',5,'typography',80,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Site Stats',2,'5',90,1,'','',2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'My Account',3,'1',100,1,'','',13);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES (0,1,'Admins Only',3,'2',110,1,'','',1);";

// default footer menu elements
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 2, 'Home',       2, '0',                             10, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 2, 'Contribute', 2, '1',                             30, 1, '', '', 13);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 2, 'Search',     2, '4',                             20, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 2, 'Site Stats', 2, '5',                             40, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 2, 'Contact Us', 6, '%site_url%/profiles.php?uid=2', 50, 1, '%site_url%/profiles.php?uid=2', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 2, 'Top', 6, '#top', 60, 1, '#top', '', 2);";

// default block menu elements
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'Home', 2, '0', 10, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'Downloads', 4, 'filemgmt', 20, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'Forums', 4, 'forum', 30, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'Topic Menu', 3, '3', 40, 1, '', '', 2);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'User Menu', 3, '1', 50, 1, '', '', 13);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'Admin Options', 3, '2', 60, 1, '', '', 1);";
$_SQL_DEF[] = "INSERT INTO {$_TABLES['st_menu_elements']} (`pid`, `menu_id`, `element_label`, `element_type`, `element_subtype`, `element_order`, `element_active`, `element_url`, `element_target`, `group_id`) VALUES(0, 3, 'Logout', 6, '%site_url%/users.php?mode=logout', 70, 1, '%site_url%/users.php?mode=logout', '', 13);";
?>