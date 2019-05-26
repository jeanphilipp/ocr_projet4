<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'; ?>
    <title>Blog de Jean Forteroche !</title>
</head>

<body>
<?php include_once 'views/includes/header.php'; ?>

<table>
    <tr>
        <th>Id :</th>
        <th>Pseudo :</th>
    </tr>

    <?php foreach($allUsers as $user){ ?>
        <tr>
            <td>
                <?= $user->getIdUser(); ?>
            </td>
            <td>
                <?= $user->getPseudo(); ?>
            </td>
        </tr>
  <?php  } ?>
</table>

<?php include_once 'views/includes/private' ?>

</body>
</html>