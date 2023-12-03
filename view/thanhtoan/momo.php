<?php

/*
    0919100100
1	NGUYEN VAN A	9704 0000 0000 0018	03/07	OTP	Thành công
2	NGUYEN VAN A	9704 0000 0000 0026	03/07	OTP	Thẻ bị khóa
3	NGUYEN VAN A	9704 0000 0000 0034	03/07	OTP	Nguồn tiền không đủ
4	NGUYEN VAN A	9704 0000 0000 0042	03/07	OTP	Hạn mức thẻ
*/
header('Content-type: text/html; charset=utf-8');


function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}


$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán qua MoMo";
$amount = $_SESSION['tong'];
$orderId = $_SESSION['madonhang'];
$redirectUrl = "http://localhost:3000/index.php?act=ttthanhcong";
$ipnUrl = "http://localhost:3000/index.php?act=ttthanhcong";
$extraData = "";


// if (!empty($_POST)) {
//     $partnerCode = $_POST["partnerCode"];
//     $accessKey = $_POST["accessKey"];
//     $serectkey = $_POST["secretKey"];
//     $orderId = $_POST["orderId"]; // Mã đơn hàng
//     $orderInfo = $_POST["orderInfo"];
//     $amount = $_POST["amount"];
//     $ipnUrl = $_POST["ipnUrl"];
//     $redirectUrl = $_POST["redirectUrl"];
//     $extraData = $_POST["extraData"];

    $requestId = time() . "";
    $requestType = "payWithATM";
    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    header('Location: ' . $jsonResult['payUrl']);
// }
?>