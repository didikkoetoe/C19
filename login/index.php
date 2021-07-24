<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Login</h2>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger text-center" role="alert">
                Username / Password Salah !
            </div>
        <?php endif; ?>

        <form action="" method="POST" class="form">
            <div class="mb-3">
                <label for="username" class="form-label">Username : </label>
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                    <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password : </label>
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Ingat Saya
                    </label>
                </div>
            </div>

            <a href="../index.php" class="btn btn-primary">Login</a>
            <a href="signup.php" class="btn btn-success px-5 float-end">Sign Up</a>
        </form>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>