<?php
// Verifica se o usuário está logado
if (!isset($_COOKIE['user_id'])) {
    header("Location: index.php");
    exit();
}

// Atualiza o valor do cookie
$new_user_id = 2; // Substituindo pelo novo ID do usuário
setcookie('user_id', $new_user_id, time() + 3600, '/'); // cookie válido por 1 hora

header("Location: profile.php");
exit();
?>
