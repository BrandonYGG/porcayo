
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="validar.php"  method="post">
        <h1 class="title">Login</h1>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="usuario" type="text" name="username" id="username" required>
        </label>
        <label>
            <i class="fa-solid fa-lock"></i>
            <input placeholder="contraseña" type="password" name="password" id="password" required>
        </label>
            <input class="btn" type="submit" value="Iniciar Sesión">
</body>
</html>