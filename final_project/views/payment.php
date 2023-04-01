<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="a.js"></script>
    <title>Document</title>
</head>
<body>
    <a href="./dashboard.php">Dashboard</a>
    <a href="../controllers/logout.php">Logout</a>
    <h2>Add a payment method</h2>

        <form action="a.php" method="get" onsubmit="validateAndSubmit(this); return false;">
            Card number: <input type="text" name="card_number">
            <span id="err1"></span>
            <br><br>

            Card Name: <input type="text" name="card_name">
            <span id="err2"></span>
            <br><br>

            Expiry date: <input type="date" id="birthday" name="expiry" size="15" /> <br />
            <span id="err3"></span>
            <br><br>

            CVV: <input type="password" name="cvv">
            <span id="err4"></span>
            <br><br>
            <input hidden type="text" name="username" value="<?php echo$_SESSION["username"] ?>" />
            <input type="submit" name="submit">
        </form>

        <p id="msg"></p>

</body>
</html>