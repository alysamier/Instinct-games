<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>

    <title>Profile | Instinct Games</title>
</head>
<body>
    <?php include("includes/nav.php");
    ?>
    <div class="space">

    </div>
    <div class="wrapper" style="background-color:#1b1b1b;">
        <h1 class="ta-c heded">PROFILE</h1>
        <div class="myprofile">
            <div class="profiledata">
            <input type="text" class="cus-input" placeholder="UserName"><br>
            <input type="text" class="cus-input" placeholder="Email"><br>
            <input type="text" class="cus-input" placeholder="Password"><br>
            <input type="text" class="cus-input" placeholder="Address"><br>
            <input type="text" class="cus-input" placeholder="MobilePhone"><br>
            <div class="update-btn">
                <input type="button" class="button1 editedd" value="UPDATE" style="box-shadow: 0 0 15px #30593D;">
            </div>
            </div>
            <div class="upload">
                <div class="uploadcontainer">
                    <div class="uploadbutton">
                    <input type="button" style="margin-top: 40%;" class="button1 editedd" value="Upload A Pic." style="box-shadow: 0 0 15px #30593D;">

                    </div>
                </div>

            </div>
            
        </div>
    </div>

    <?php include("includes/footer.php");
    ?>
</body>
</html>