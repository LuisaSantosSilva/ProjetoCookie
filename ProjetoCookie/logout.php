<?php
// Expira o cookie e redireciona para a página de login
setcookie('user_id', '', time() - 3600, '/');
header("Location: index.php");
exit();
?>
