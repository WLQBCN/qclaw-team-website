<?php
/**
 * 微信JSSDK签名接口
 * 用于生成微信分享所需的签名
 */

// 配置微信公众号信息
define('APPID', 'your_appid_here');  // 替换为你的公众号AppID
define('APPSECRET', 'your_appsecret_here');  // 替换为你的公众号AppSecret

// 获取access_token
function getAccessToken() {
    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . APPID . "&secret=" . APPSECRET;
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data['access_token'];
}

// 获取jsapi_ticket
function getJsApiTicket($access_token) {
    $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=" . $access_token;
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data['ticket'];
}

// 生成签名
function generateSign($ticket, $nonceStr, $timestamp, $url) {
    $string = "jsapi_ticket=$ticket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
    return sha1($string);
}

// 主逻辑
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$url = isset($_GET['url']) ? $_GET['url'] : '';

if (empty($url)) {
    echo json_encode(['error' => 'url参数缺失']);
    exit;
}

try {
    // 生成随机字符串
    $nonceStr = md5(uniqid(mt_rand(), true));
    
    // 生成时间戳
    $timestamp = time();
    
    // 获取access_token（实际项目中应该缓存）
    $access_token = getAccessToken();
    
    // 获取jsapi_ticket
    $ticket = getJsApiTicket($access_token);
    
    // 生成签名
    $signature = generateSign($ticket, $nonceStr, $timestamp, $url);
    
    // 返回配置
    echo json_encode([
        'appId' => APPID,
        'timestamp' => $timestamp,
        'nonceStr' => $nonceStr,
        'signature' => $signature,
        'url' => $url
    ]);
    
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>