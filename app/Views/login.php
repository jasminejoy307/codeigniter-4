<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .errors li {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="min-height: 600px;">
            <div class="card">
                <div class="card-content">
                    <div class="card-body shadow" style="width:300px;">
                    <div class="card-title" style="color:blue;font-size:larger;">Login</div>
                <?php if(isset($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <div> <?= \Config\Services::validation()->listErrors() ?></div>
                <form action="/login" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
                </div>
                </div>
                </div>
</body>
</html>
