<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function nextPage($param, $blockCustom, &$vendorUrl){
        if(strlen($param['nextUri'])>0){
             $vendorUrl = $blockCustom['vendorUrl'] . $param['nextUri'];
        }

        return '{}';
    }
}