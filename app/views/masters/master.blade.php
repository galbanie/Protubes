<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="Ressources/Images/favicon.ico">
        <link rel="icon" type="image/gif" href="Ressources/Images/animated_favicon1.gif">
        
        <link rel="stylesheet" type="text/css" href="css/Base/base.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/Base/style.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/Base/header.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/Base/main.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/Base/pagination.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/Base/footer.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/protubes-theme/jquery-ui-1.10.3.custom.min.css" media="all"/>
        
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="js/protubes-jquery.js" type="text/javascript"></script>
        <script src="js/protubes.js" type="text/javascript"></script>
        <!--script type="text/javascript" src="Scripts/upload.js"></script-->
        <title></title>
    </head>
    <body>
        <header>
            <!-- Logo-->
            <div id="logo">
                <a href="index.php">
                    <img alt="Protubes." src="Ressources/Images/Logo/Logo-Protubes.png" />
                </a>
            </div>
            
            <div id="barreRecherche">
                <form method="get" action="">
                    <input type="search" name="search_query" />
                    <input id="btnSearchBarreRecherche" type="submit" value=""/>
                </form>
            </div>
            
            <div id="btn-uploadVideo">
                <form method="get" action="">
                    <input type="hidden" name="page" value="upload" />
                    <input type="submit" value="" />
                </form>
            </div>
            
            <div id="btn-espaceMembre">
                
            </div>
        </header>
        <div id="global">
            <div id="principal">
               
               <hr class="clearfloatBoth" />
            </div>
        </div>
        <footer>
            <div id="div-langue">
                <form method="post" action="">
                    <input type="hidden" name="lang" value="fr" />
                    <input class="btn-lang-fr" type="submit" value=""/>
                </form>
                <form method="post" action="">
                    <input type="hidden" name="lang" value="en" />
                    <input class="btn-lang-en" type="submit" value=""/>
                </form>
            </div>
            <div class="footer-div">
                <p id="footercopy">
                    <a href="http://www.galbaniestudios.com">Galbanie Studios</a> Tous droits réservés.
                </p>
            </div>
        </footer>
    </body>
</html>