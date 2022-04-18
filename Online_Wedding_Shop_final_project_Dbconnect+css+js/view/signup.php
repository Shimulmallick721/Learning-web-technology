<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/formstyle.css">

</head>

<body>
    <script src="../js/reg.js"></script>

    <h1>Welcome To Online Wedding Shop!</h1>
     <form method="post" action="../controller/reg.php" name="myForm" onsubmit ="return validateForm()">


        <div class="formdesign" id="username">
            Username: <input type="text" name="username" required><b><span class="formerrorcheck"> </span></b>
        </div>

        <div class="formdesign" id="email">
            Email: <input type="email" name="email" required><b><span class="formerrorcheck"> </span></b>
        </div>
        <div class="formdesign" id="password">
            Password: <input type="password" name="password" required><b><span class="formerrorcheck"> </span></b>
        </div>

        <div class="formdesign" id="repass">
            Confirm<br>Password: <input type="password" name="repass" required><b><span class="formerrorcheck"></span></b>
        </div>

        <input  class="but" type="submit" value="Submit">

    </form>
                            <a href="login.php">Login </a>

</body>

</html>