<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!--   
    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework"> -->

    

    <link href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css" rel="stylesheet">

    <title>Duplicate SL FOUND!!</title>

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
          action="duplicatefile.php">
        <span class="mif-files-empty mif-4x place-right" style="margin-top: -10px;"></span>
        <h2 class="text-light">Duplicate Found!</h2>
        <hr class="thin mt-4 mb-4 bg-white">
        <p class="text-light">You have submitted same SL this week. Are you trying
            to replace the previous SL? Or you want to submit as another SL?
        </p>
        <p class="text-light" style="font-size:12px;">
            NOTE: Save as New SL will still replace the current SL if submitted in the same day as the
            previous SL.
        </p>
        <div class="form-group mt-10">
            <input type="submit" class="button primary" id="replace" name="replace" value="Replace The SL" />
            <input type="submit" class="button alert place-right" id="savenew" name="savenew" value="Save as New SL" />
        </div>
    </form>
    <?php
    error_reporting(0);
    session_start();
    if(isset($_POST['replace'])) { 
        $_SESSION["status"] = "replace";
        echo "<script>document.location.href='./jadiceritanyauploading'</script>";
    } 
    else if(isset($_POST['savenew'])) {
        $_SESSION["status"] = "savenew";
        echo "<script>document.location.href='./jadiceritanyauploading'</script>";
    } 
    ?>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
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