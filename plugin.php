<?php
/*
Plugin Name: Send "X-Robots-Tag: index" header on redirection
Description: just as the name says
Version: 0.1
Author: Ozh
*/

yourls_add_filter( 'robots_tag_header', 'ozh_send_robots_tag_header_index_instead_please' );

function ozh_send_robots_tag_header_index_instead_please() {
    return 'index';
}
