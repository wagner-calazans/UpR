<!doctype html>
<html>
    <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146798211-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146798211-1');
</script>
        <meta name="Autor" content="Leandro M. Barbosa" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <title>[ UNIPOSRIO ]</title>
        <link rel="icon" href="images/icone.bmp" type="image/x-icon" />
        <link rel="shortcut icon" href="images/icone.bmp" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="styles/page.css"/>
        <link rel="stylesheet" type="text/css" href="styles/menuh.css"/>
        <link rel="stylesheet" type="text/css" href="styles/switch.css"/>
		<script type="text/javascript" src="functions/page.js"></script>
        <?php
            include("configuracoes/_configuracoes.php");
            include("functions/menu.php");
            include("functions/functions.php");
            require("classes/_PHPMailer/class.phpmailer.php");
	    session_start();
	    setcookie("ck_authorized", "true", 0, "/");
        ?>
    </head>
    <body>
        <div id="divAlertSobra" onclick="fecharJanela()"></div>
        <!-- <div align="center" style="background:url('images/background_03.png') fixed bottom 5% right 5% no-repeat;"> -->
            <?php
                include('layout/header.php');
                include('layout/body.php');
                include('layout/footer.php');						
            ?>
        <!-- </div> -->
        <div id="divAlert"><span class="close"  style="cursor: pointer" onclick="fecharJanela()">&times;</span><p><?php echo $msg ; ?></p></div>
    </body>
</html>