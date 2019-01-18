<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8"/>
        <title>Homework</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="scripts.js"></script>
    </head>
    <body>
        Here is the current time:
        <form action="index.php" method="get">
            <input type="submit" name="timezone" value="America/Los_Angeles">
        </form>
        <form action="show_time.php" method="get">
            <input type="submit" name="timezone" value="America/New_York">
        </form>
        <form action="show_time.php" method="get">
            <input type="submit" name="timezone" value="America/Chicago">
        </form>
        <form action="show_time.php" method="get">
            <input type="submit" name="timezone" value="America/Denver">
        </form>
        <form action="show_time.php" method="get">
            <input type="submit" name="timezone" value="America/Phoenix">
        </form>
        <form action="show_time.php" method="get">
            <input type="submit" name="timezone" value="America/Anchorage">
        </form>
        <form action="show_time.php" method="get">
            <input type="submit" name="timezone" value="America/Honolulu">
        </form>

        <?php 
        if(isset($_GET['timezone']){
            date_default_timezone_set($_GET["timezone"]);
            echo "The time in " . $_GET["timezone"] ." is " . date("h:i:sa")
        }else{
            date_default_timezone_set("America/Denver");
            echo "The time in America/Denver is " . date("h:i:sa")
        }
        ?>
    </body>
</html>