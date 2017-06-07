<?php

namespace Core;

use SebastianBergmann\Comparator\DateTimeComparator;

if (!defined('RAPID_IN')) exit('No direct script access allowed');

/**
 * Custom Model
 */
class CustomModel
{
    public static function getNotifications($param, &$blockCustom, $vendorUrl, $apiVersion)
    {

        $clientSetup = [];

        $timestamp = time();
        $hash = hash_hmac('sha256', $timestamp . 'GET' . str_replace('https://api.coinbase.com', '', $vendorUrl), $param['secretKey']);
        $clientSetup['headers'] = [
            'CB-ACCESS-KEY' => $param['apiKey'],
            'CB-ACCESS-SIGN' => $hash,
            'CB-ACCESS-TIMESTAMP' => $timestamp,
            'CB-VERSION' => $apiVersion,
            'Content-Type' => 'application/json',
        ];

        return $clientSetup;
    }

    public static function getSingleNotification($param, &$blockCustom, $vendorUrl, $apiVersion)
    {

        $clientSetup = [];

        $timestamp = time();
        $hash = hash_hmac('sha256', $timestamp . 'GET' . str_replace('https://api.coinbase.com', '', $vendorUrl), $param['secretKey']);
        $clientSetup['headers'] = [
            'CB-ACCESS-KEY' => $param['apiKey'],
            'CB-ACCESS-SIGN' => $hash,
            'CB-ACCESS-TIMESTAMP' => $timestamp,
            'CB-VERSION' => $apiVersion,
            'Content-Type' => 'application/json',
        ];

        return $clientSetup;
    }

    public static function nextPage($param, $blockCustom, &$vendorUrl, $apiVersion)
    {
        if (strlen($param['nextUri']) > 0) {
            $vendorUrl = $blockCustom['vendorUrl'] . $param['nextUri'];
        }

        return '{}';
    }

    public static function getSpotPrice($param, $blockCustom, &$vendorUrl, $apiVersion)
    {

        if(!empty($param['date'])){
            $dateTime = new \DateTime($param['date']);
            $param['date'] = $dateTime->format(['Y-m-d']);
        }
        return $param;
    }
}