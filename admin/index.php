<?php

session_start();
if(isset($_SESSION['pseudo'])) {
	$pseudo = $_SESSION['pseudo'];
	$id_user = $_SESSION['id_user'];
} else {
	header('location:views/member_view.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
</head>

<body>

<h1>ADMIN</h1>

<p>
Bonjour <?= $pseudo; ?>. <br />
Votre identifiant est <?= $id_user; ?>
</p>
<p>
<a href="projet4/views/logout.php">Se déconnecter</a>
</p>

</body>
</html>