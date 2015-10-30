<?php
/**
 * @package    glFusion CMS
 *
 * @copyright   Copyright (C) 2014 by the following authors
 *              Mark R. Evans          mark AT glfusion DOT org
 *
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own!');
}

class autotag_uikitlogin extends BaseAutotag {

    function autotag_uikitlogin()
    {
        global $_AUTOTAGS;

        $this->description = $_AUTOTAGS['uikitlogin']['description'];
    }

    function parse($p1, $p2='', $fulltag)
    {
        global $_CONF, $LANG01, $LANG04;

        $retval = '';

        if ( COM_isAnonUser() ) {
            $options = array(
                'hide_forgotpw_link' => false,
                'form_action'        => $_CONF['site_url'].'/users.php',
            );
            $options['title']   = $LANG04[65]; // log in to {site_name}
            $options['message'] = $LANG04[66]; // please enter your user name and password below

            $retval .= '<div class="uk-navbar-content uk-navbar-flip uk-hidden-small">';
            $retval .= '<button class="uk-button uk-button-success" type="button" data-uk-modal="{target:\'#modalOpen\'}">'.$LANG01[58].'</button></div>';
            $retval .= '<div id="modalOpen" class="uk-modal">';
            $retval .= '<div class="uk-modal-dialog uk-modal-dialog-medium"><a href="#" class="uk-modal-close uk-close"></a>';
            $retval .= SEC_loginForm($options);
            $retval .= '</div></div>';
        } else {
            $retval .= '<ul class="uk-navbar-nav tm-navbar-nav uk-navbar-flip">';
            $retval .= '<li class="uk-parent uk-hidden-small" data-uk-dropdown>';
            $retval .= '<a href="#">My Account&nbsp;<i class="uk-icon-caret-down"></i></a>';
            $retval .= '<div class="uk-dropdown tm-dropdown uk-dropdown-navbar">';
            $retval .= '<ul class="uk-nav uk-nav-navbar tm-nav-navbar">';
            $userMenu = getUserMenu();
            foreach ($userMenu as $option) {
                $retval .= '<li><a href="'.$option['url'].'">'.$option['label'].'</a></li>';
            }
            $retval .= '</ul></div></li></ul>';
        }
        return $retval;
    }
}
?>