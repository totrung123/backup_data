<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <form method="post" action="dangki.php" class="form">

        <h2>Đăng ký thành viên</h2>
        < Username: <input type="text" name="username" value="" required><br>

            Password: <input type="text" name="password" value="" required /><br>

            Email: <input type="email" name="email" value="" required /><br>

            Phone: <input type="text" name="phone" value="" required /><br>
            < <input type="submit" name="dangky" value="Đăng Ký" />

            <?php require 'xuly-dangki.php';
            ?>
    </form>

</body>

</html>