<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
                    <div class="card-body shadow" style="width:500px;">
                    <div class="card-title" style="color:blue;font-size:larger;">Registration</div>
               <div> <?= \Config\Services::validation()->listErrors() ?></div>
                <form action="/register" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= old('name') ?>" required >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="organization" placeholder="Organization" value="<?= old('organization') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="designation" placeholder="Designation" value="<?= old('designation') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= old('email') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?= old('mobile') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?= old('password') ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>&nbsp;&nbsp;
                    <a href="login">Already have an account</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
