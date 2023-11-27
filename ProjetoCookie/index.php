<?php
// Verifica se o usuário já está logado
if (isset($_COOKIE['user_id'])) {
    header("Location: profile.php");
    exit();
}

// Verifica se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se as chaves "username" e "password" estão definidas no array $_POST
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verifica as credenciais (substitua isso com seu próprio sistema de autenticação)
    $valid_username = 'user';
    $valid_password = 'password';

    if ($username === $valid_username && $password === $valid_password) {
        // Cria um cookie com o ID do usuário e define a expiração para 30 segundos
        $user_id = 1; 
        setcookie('user_id', $user_id, time() + 30, '/'); // cookie válido por 30 segundos
        header("Location: profile.php");
        exit();
    } else {
        $error_message = "Credenciais inválidas!";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Login</title>
</head>
<body>
  <div class="main-login">
    <div class="left-login">
      <h1>Sorveteria, Faça login<br>E entre para o nosso time</h1>
      <img src="img/imagem.png" class="left-login-image" alt="Sorvete">
    </div>
    <div class="right-login">
      <div class="card-login">
      <h1>Login</h1>
        <?php if (isset($error_message)) {; ?>
          <p><?php echo $error_message; ?></p>
        <?php } ;?>
        <form method="post" action="index.php">
          <div class="textfield">
            <label for="username">Usuário:</label>
            <input type="text" name="username" placeholdeer="Usuário" required>
          </div> 
          <div class="textfield">
            <label for="password">Senha:</label>
            <input type="password" name="password" placeholdeer="Senha" required>
          </div>
          <br>
          <input type="submit" value="Login" class="btn-login">
        </form>
      </div>
    </div>
  </div>
</body>
</html>