<?php

require 'functions.php';

if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        header('location: login.php');
        echo "
            <script>
                alert('Registrasi Berhasil');
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registrasi Akun</title>
    <style type="text/css">
    body {
        background-color: #192a56;
        align-items: center;
        justify-content: center;
        display: grid;
    }

    .main-login {
        margin: 150px;
        width: auto;
        height: auto;
        background-color: #f5f6fa;
        padding: 15px 25px 50px 25px;
        border-radius: 20px;

    }

    .main-login-header {
        text-align: center;
        font-family: 'Times New Roman';
        border-bottom: 2px solid #8395a7;
        margin-bottom: 10px;
    }

    .input {
        width: 350px;
        padding: 4px;
        margin-bottom: 10px;
        border: 2px solid #8395a7;
        border-radius: 5px;
    }

    button {
        width: 90px;
        padding: 4px;
        margin-left: 260px;
        margin-top: 10px;
        background-color: #192a56;
        border: 2px solid #8395a7;
        color: black;
        border-radius: 5px;
    }

    .table-form {
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;

    }

    .account {
        float: left;
        font-size: 16px;
    }

    .create-account {
        color: #2e86de;
    }
    </style>
</head>

<body>
    <div class="main-login">
        <div class="main-login-header">
            <h1>Registration</h1>
        </div>

        <div class="main-login-form">
            <form action="" method="post">
                <table class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                    </tr>
                    <tr>
                        <td><input class="input" type="text" name="nama_lengkap" id="nama_lengkap"
                                placeholder="Input your name" required autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Username / Email</td>
                    </tr>
                    <tr>
                        <td><input class="input" type="text" name="username" id="username"
                                placeholder="Input your username" required autocomplete="off"></td>
                    <tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td><input class="input" type="password" name="password" id="password"
                                placeholder="Input your password" required></td>
                    </tr>
                    <tr>
                        <td>Konfirmasi Password</td>
                    </tr>
                    <tr>
                        <td><input class="input" type="password" name="password2" id="password2"
                                placeholder="Input your verif password" required></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-label-group">
                                <select class=" form-control input" name="role">
                                    <option value="Admin" disabled>Admin</option>
                                    <option value="Customer" selected>Customer</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="account">
                        <td>Already have an account ? <a class="create-account" href="login.php">Login</a></td>
                    </tr>
                    <tr>
                        <td><button class="btn text-light" type="submit" name="registrasi">Sign up</button></td>
                    </tr>


                </table>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>