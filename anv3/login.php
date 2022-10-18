<!DOCTYPE html>
    <?php
        if(isset($_POST["signin"])) {
            // GANTI VALUE uname DENGAN USERNAME DAN VALUE passw DENGAN PASSWORD YANG DIINGINKAN :D
            // Boleh ganti string/pesan pada script alert sesuai keinginan kalian. Bisa pake \n kek di C++
          if($_POST["uname"] == "pptibca5" && $_POST["passw"] == "ab5olute")
            echo '<script>location.href="anniversolute/email/";</script>'; //sebaiknya jangan diganti, kalo mau ganti isi nya, buka file email.php di folder yg sama
        else 
            echo '<script>alert("Hey Coba Kau Baca Lagi itu clue! \n\nSilahkan coba lagi");</script>';
        }
          
    ?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    
    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <title>LOGIN DULU Y</title>

    <style>
        .login-form {
            width: 350px;
            height: auto;
            top: 50%;
            margin-top: -160px;
        }
    </style>
</head>
<body class="h-vh-100 bg-brandColor2">

    <form class="login-form bg-white p-6 mx-auto border bd-default win-shadow"
        method="POST"
          action="">
        <span class="mif-mail mif-4x place-right" style="margin-top: -10px;"></span>
        <h2 class="text-light">Login to Continue</h2>
        <hr class="thin mt-4 mb-4 bg-white">
        <div class="form-group">
            <input type="text" id="uname" name="uname" data-role="input" data-prepend="<span class='mif-envelop'>" placeholder="Username" data-validate="required email">
        </div>
        <div class="form-group">
            <input type="password" id="passw" name="passw" data-role="input" data-prepend="<span class='mif-key'>" placeholder="Password" data-validate="required minlength=6">
        </div>
        <div class="form-group mt-10">
            <input type="submit" class="button primary" name="signin" value="SIGN IN"/>
        </div>
    </form>

    <script src="../../metro/js/metro.js"></script>
    <script>
        function invalidForm(){
            var form  = $(this);
            form.addClass("ani-ring");
            setTimeout(function(){
                form.removeClass("ani-ring");
            }, 1000);
        }

        function validateForm(){
            $(".login-form").animate({
                opacity: 0
            });
        }
    </script>

</body>
</html>