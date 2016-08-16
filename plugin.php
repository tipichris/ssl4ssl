<?php
/*
Plugin Name: SSL for SSL
Plugin URI: https://github.com/tipichris/ssl4ssl
Description: Create SSL short links for SSL urls
Version: 0.1
Author: Chris Hastie
Author URI: http://www.oak-wood.co.uk
*/

/* Release History:
*
*/


/* need to filter...
table_add_row_cell_array
add_new_link
*/

yourls_add_filter( 'add_new_link', 'ssl4ssl_filter_new_link' );
function ssl4ssl_filter_new_link(  $return, $url, $keyword, $title ) {
    if (yourls_get_protocol($url) == 'https://') {
        $return['shorturl'] = yourls_set_url_scheme($return['shorturl'], 'https');
    }
    return $return;
}

yourls_add_filter('table_add_row_cell_array', 'ssl4ssl_filter_row_cells');
function ssl4ssl_filter_row_cells($cells, $keyword, $url, $title, $ip, $clicks, $timestamp) {
    if (yourls_get_protocol($url) == 'https://') {
        $cells['keyword']['shorturl'] = yourls_set_url_scheme($cells['keyword']['shorturl'] , 'https');
    }
    return $cells;
}

yourls_add_filter( 'yourls_link', 'ssl4ssl_filter_yourls_link');
function ssl4ssl_filter_yourls_link($link, $keyword) {
    $url = yourls_get_keyword_longurl($keyword);
    if (yourls_get_protocol($url) == 'https://') {
        $link = yourls_set_url_scheme($link, 'https');
    }
    return $link;
}
