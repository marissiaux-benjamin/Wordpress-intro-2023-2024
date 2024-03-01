<?php

add_filter('', '');

function dw_asset(string $file):string{
    return get_template_directory_uri().'/public/'.$file;
}