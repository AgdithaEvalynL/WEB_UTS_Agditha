<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="login.css?v2" rel="stylesheet">


<div class="container">
<div class="row">
    <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
        <div class="panel border bg-white">
            <div class="panel-heading">
                    <h1 class="pt-3 font-weight-bold">Regist as USER</h1>
            </div>
            <div class="login">
                <form action="" method='post'>
                    <label for="username" >username</label>
                        <div class="form-group py-2">
                            <div class="input-field"> 
                                <span class="far fa-user p-2"></span> 
                                <input type="text" name="username"  id="username" placeholder="username" required>
                            </div>
                        </div>
                    <label for="password">password</label>
                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span> 
                                <input type="password" name="password" id="password" placeholder="password"><br>
                            </div>
                        </div>
                    <label for="password">confirm password</label>
                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span> 
                                <input type="password" name="confirm" id="confirm" placeholder="confirm password"><br>
                            </div>
                        </div>
                        <br>
                        <p>sudah punya akun? 
                        <a href="LoginUser.php"> Login</a>
                        </p>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mt-3">Submit</button> 
                </form>
            </div>       
    </div>
</div>
</div>
</div>

</body>
</html>

<?php
    require 'koneksi.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm=$_POST['confirm'];

        // cek username telah digunakan atau belom
        $user = $conn->query("SELECT * FROM akun WHERE username='$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
            alert('username telah digunakan silakan gunakan username lain');
            </script>";
        } else{
            // konfirmasi password uda bener atau belom
            if ($password == $confirm){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO akun(username,psw)
                VALUES ('$username', '$password')";
                $result = $conn->query($query);

                if($result){
                    echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href='LoginUser.php'; 
                    </script>";
                }
                else {
                    echo "<script>
                    alert('Registrasi Gagal');
                    </script>";
                }
            } else {
                echo "<script>
                alert('konfirmasi pw salah!');
                </script>";
            }
        }
    }

?>