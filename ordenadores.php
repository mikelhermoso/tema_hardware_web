<?php 
    $lang = $_GET['lang'];
    if ($lang == "en") {
        require('strings/strings_en.php'); 
    } else {
        require('strings/strings_es.php'); 
    }
?>
<html>
    <head>
        <title>tema_hardware_web</title>
        <link REL=StyleSheet HREF="css/style.css">
        <link REL=StyleSheet HREF="css/ordenadores/styleHeaderOrd.css">
        <link REL=StyleSheet HREF="css/ordenadores/styleOrdenadores.css">
        <link REL=StyleSheet HREF="css/styleNav.css">
        <link REL=StyleSheet HREF="css/styleNoticias.css">
        <link REL=StyleSheet HREF="css/styleNosotros.css">
        <link REL=StyleSheet HREF="css/styleContacto.css">
        <link REL=StyleSheet HREF="css/styleFooter.css">
        <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet"> 
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smoove/0.2.6/jquery.smoove.min.js"></script>
    </head>
    
    <header>
        <?php include 'layouts/ordenadores/headerOrd.php';?>
    </header>
    <body>
        <?php include 'layouts/ordenadores/ordenadores.php';?>
    </body>
    
    <footer>
       <?php include 'layouts/footer.php';?> 
    </footer>
</html>