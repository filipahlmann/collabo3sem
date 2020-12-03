<?php

function setup_menus() {
    register_nav_menu("footer-menu", __("footer Menu"));
    register_nav_menu("header2-menu", __("header2 Menu"));
    register_nav_menu("header-menu", __("header Menu"));

}

add_action("init", "setup_menus");

?>