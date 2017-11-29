




<?php

$name = $_POST['user-name']; // label + id ['user-name']
$phone - $_POST['phone-number'];
$street = $_POST['street'];
$house = $_POST['house'];
$building = $_POST['building'];
$appartment = $_POST['appartment'];
$floor = $_POST['floor'];
$area = $_POST['text-area'];
$change = $_POST['change'];
$card = $_POST['by-card'];


$disturb = $_POST['dont-disturb']; // 1 или null 
$disturb = isset($disturb) ? 'НЕТ' : 'ДА'; 

$money = $_POST['change'];
$money = isset($money) ? 'НЕТ' : 'ДА'; 

$credit = $_POST['by-card'];
$credit = isset($credit) ? 'НЕТ' : 'ДА'; 

$mail__message = "

<html>
<head>
<title>Order</title>
</head>
<body>  
<h2>Order</h2>

<ul>

<li>Имя:' . $name . '</li>
<li>Номер телефона:' . $phone .'</li>
<li>Улица: ' . $street . '</li>
<li>Дом: ' . $house . '</li>
<li>Корпус: ' . $building . '</li>
<li>Квартира: ' . $appartment . '</li>
<li>Этаж: ' . $floor . '</li>
<li>Форма: ' . $area . '</li>
<li>Сдача: ' .  $change .' </li>
<li>Кредитная карта: ' . $card . '</li>
<li>Перезванивать: ' . $disturb . '</li>

</ul>
</body>

</html> ";


$headers = "From: Pavel Dzemidovich <dubstr1@gmail.com>\r\n".
"MIME-Version: 1.0" . "\r\n" .
"Content-type: text/html; charset=UTF-8" . "\r\n";

$mail = mail('dubstr1@gmail.com', 'order', $mail__message, $headers);

if ($mail) {
    $data['status'] = "OK";
    $data['mes'] = "Mail sent";

}else {
    $data['status'] = "NO";
    $data['mes'] = "Error";
}

header('Content-type:application/json;charset=utf-8');
echo json_encode ($data);
?>