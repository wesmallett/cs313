 <html>
     <body>

     <?php
        date_default_timezone_set($_GET["timezone"]);
        echo "The time in " . $_GET["timezone"] ." is " . date("h:i:sa")
        ?>
    </body>
</html>