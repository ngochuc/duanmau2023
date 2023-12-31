
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="js/chuc.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php?act=home"><img src="upload/logo.png" alt="" height="80px" width="auto" style="margin-left: 50%;"></a>

            </div>
            <nav class="stroke">
                <ul>
                    <li><a href="index.php?act=home">Home</a></li>
                    <li><a href="index.php?act=shopall">Shop all</a></li>
                    <li><a href="index.php?act=mobile">Mobile phones</a></li>
                    <li><a href="index.php?act=laptop">Laptop</a></li>
                    <li><a href="index.php?act=tablet">Tablet</a></li>
                </ul>
            </nav>
            <div class="loginhome">
                <div class="cart" onclick="cart()"><i class="fa-solid fa-cart-shopping"></i></div>
                <a href="index.php?act=infouser" class="presonal" style="padding-left: 15px;"><i class="fa-solid fa-user"></i></a>
                <a href="view/logout.php"><?php echo $islogin ?></a>
            </div>
        </header>
       