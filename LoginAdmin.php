<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB DITA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="login.css?v2" rel="stylesheet">
</head>

<body > 
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Login as ADMIN</h3>
                </div>
                <div class="panel-body p-3">
                    <?php
                        session_start();
                        $username = 'ditaevalin';
                        $password = 'admin';
                            if (isset($_POST['submit'])) {
                                if ($_POST['username'] == $username && $_POST['password'] == $password){
                                    //Membuat Session
                                    $_SESSION["username"] = $username;
                                    echo "Anda Berhasil Login $username";
                                    /*Jika Ingin Pindah Ke Halaman Lain*/
                                    header("Location: admin.php");
                                
                                } else {
                                    // Tampilkan Pesan Error
                                    display_login_form();
                                    echo '<p>Username Atau Password Tidak Benar</p>';
                                }
                            }
                            else { 
                                display_login_form();
                            }
                            
                            function display_login_form(){ ?>
                              <div class="login">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
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
                                <div>
                                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                                </div>    
                                 </form>
                              </div>
                            <?php }
                    ?>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                    <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
</body>
</html>