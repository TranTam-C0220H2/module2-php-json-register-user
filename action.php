<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
include 'function.php';
if (empty($name)||empty($email)||empty($phone)) {
    echo 'Yeu cau dien day du thong tin';
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    saveDataJSON('data.json', $name, $email, $phone);
} else {
    echo 'email khong dung dinh dang.';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach (loadRegistrations('data.json') as $index => $registration): ?>
        <tr>
            <td><?php echo $index;?></td>
            <td><?php echo $registration -> name;?></td>
            <td><?php echo $registration -> email;?></td>
            <td><?php echo $registration -> phone;?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
