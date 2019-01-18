 <html>
     <body>
     <?php
        date_default_timezone_set($_GET["timezone"]);
        echo date("h:i:sa")
        ?>
    </body>
</html>