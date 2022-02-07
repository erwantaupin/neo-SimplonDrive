<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c45c6f75e4.js" crossorigin="anonymous"></script>
    <title>header</title>
</head>
<body>
    <div class="barretop"></div>
    <div class="header">
        <div class="logo-page">
        </div>
        <div class="navbar">
            <li class="nav">
                <a class="nav-link" href="index.php">
                    <h3><i class="fas fa-home" aria-hidden="true"></i> ACCUEIL</h3>
                </a>
            </li>
            <li class="nav">
                <div class="dropdown">
                    <button id="bboutique" onclick="window.location.href = 'boutique.php';"><h3><i class="fas fa-shopping-basket"></i> BOUTIQUE</h3></button>
                    <div class="dropdown-content">
                        <a href="boutique-viandes.php"><h4>Viandes</h4></a><br>
                        <a href="boutique-legumes.php"><h4>legumes</h4></a><br>
                        <a href="boutique-desserts.php"><h4>Desserts</h4></a>
                    </div>
                </div>
            </li>
            <li class="nav">
                <a class="nav-link" href="contact.php">
                    <h3><i class="fas fa-address-book" aria-hidden="true"></i> CONTACT</h3>
                </a>
            </li>
        </div>
    </div>
</body>
</html>