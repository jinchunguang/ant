<?php
use ZPHP\Common\Route;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>扫码登录</title>
</head>
<body>
<form action="<?= Route::makeUrl('qrcode', 'check') ?>" method="post">
    <p><label>请输入姓名：</label><input type="text" name="name"></p>
    <p>
        <input type="hidden" name="code" value="<?= $data['code'] ?>">
        <input type="submit" value="登录">
    </p>
</form>
</body>
</html>