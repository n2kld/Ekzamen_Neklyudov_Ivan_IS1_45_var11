<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<form action="action.php" method="POST">
    <input type="text" name="login" required>
    <input type="password" name="password" required>
    <button type="submit">Войти</button>
</form>
<script>
    function togglePassword() {
        var passwordInput = document.querySelector('input[name="password"]');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
         else {
            passwordInput.type = "password";
        }
    }
</script>
</body>
</html>