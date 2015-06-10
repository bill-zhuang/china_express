<?php

function getExpressInfo($express_code)
{
    $request_url = 'http://www.kuaidi100.com/query';
    $method = 'GET';
    $express_company = getExpressCompanyName($express_code);
    if ($express_company !== false)
    {
        $param = array('type' => $express_company, 'postid' => $express_code);
        $json_data = sendRequestByCurl($request_url, $param, $method);
        $decode_data = json_decode($json_data, true);
        if ($decode_data['message'] == 'ok')
        {
            return $decode_data['data'];
        }
    }

    return false;
}

function getExpressCompanyName($express_code)
{
    $request_url = 'http://www.kuaidi100.com/autonumber/auto';
    $param = array('num' => $express_code);
    $method = 'GET';

    $json_data = sendRequestByCurl($request_url, $param, $method);
    $decode_data = json_decode($json_data, true);
    if (!empty($decode_data))
    {
        return $decode_data[0]['comCode'];
    }

    return false;
}

function sendRequestByCurl($request_url, array $data, $method = 'POST')
{
    $ch = curl_init();
    if (strtolower($method) == 'get')
    {
        curl_setopt($ch, CURLOPT_URL, $request_url . '?' . http_build_query($data));
    }
    else
    {
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    return $result;
}