<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Information</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Edit Information</h2>
    </div>

    <form method="post" action="login.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="input-group">
            <?php if ($update == true) : ?>
                <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
            <?php else : ?>
                <button class="btn" type="submit" name="save">Save</button>
            <?php endif ?>
        </div>
    </form>
</body>

</html>