<?php require_once '../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen</title>
    <?php require_once '../components/head.php'; ?>
</head>

<body>

    <?php require_once '../components/header.php'; ?>

    <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <div style="height: 300px; background: #ededed; display: flex; justify-content: center; align-items: center; color: #666666;">(hier komen de storingsmeldingen)</div>
    </div>

</body>

</html>
