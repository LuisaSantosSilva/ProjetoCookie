<?php
// Verifica se o usuário está logado
if (!isset($_COOKIE['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_COOKIE['user_id'];
$user_info = array(
    'username' => 'user',
    'email' => 'user@example.com'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Perfil</title>
</head>
<body>

    <div class="right-login">
      <div class="card-login">
      <h2>Perfil do Usuário</h2><br>
        <p>ID do Usuário:<?php echo $user_id; ?></p><br>
        <p>Nome de Usuário:<?php echo $user_info['username']; ?></p><br>
        <p>Email: <?php echo $user_info['email']; ?></p><br>

        <!-- formulário para atualizar o cookie -->
        <form method="post" action="update_cookie.php">
            <input type="submit" value="Atualizar Cookie" class="btn-css">
        </form><br>
        <!-- formulário para excluir o cookie -->
        <form method="post" action="logout.php">
            <input type="submit" value="Logout" class="btn-css">
        </form>
     </div>
    </div>
</body>
</html>
