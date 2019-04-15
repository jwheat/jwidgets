<?php

saveResults();

function getResult($url, $file)
{
    if (!function_exists('curl_init')) {
        throw new Exception('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_HEADER, false);
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    //curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    $result = curl_exec($ch);
    if ($error = curl_error($ch)) {
        throw new \Exception('CURL Error: ' . $error);
    }

    curl_close($ch);
    if ($result === false) {
        throw new Exception('curl_exec error');
    }

    file_put_contents($file, $result);

    if ($result == '') {
        throw new Exception('Empty result');
    }
    $array = json_decode($result, true);
    if ($array == null) {
        throw new Exception('Invalid JSON');
    }
    if (isset($array['error_message'])) {
        throw new Exception($array['error_message']);
    }
    if (!isset($array['status'])) {
        throw new Exception('No status field');
    }
    if ($array['status'] != 'OK') {
        throw new Exception($array['status']);
    }

    sleep(2);

    return $array;
}//getResult

function saveResults()
{
    $url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=AIzaSyCsW2JSv3VVK7_chuu9Zq59LnZ3HSID8FY';
    $params = '&location=40.157517,-76.9874426&radius=11200&types=lodging';
    $page = 1;
    while ($params != '') {
        $str = $url . $params;
        print $str . '<br>';
        $result = getResult($str, $page . '.json');
        //echo $page . '<br>';
        $params = '';
        ++$page;
        if (isset($result['next_page_token'])) {
            $params = '&location=40.157517,-76.9874426&radius=11200&types=lodging&pagetoken=' . $result['next_page_token'];
        }
    }
}//saveResults
