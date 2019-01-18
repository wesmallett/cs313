<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8"/>
        <title>Homework</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="scripts.js"></script>
    </head>
    <body>
        <div>
        <p>My name is Wes Mallett and this is my homepage! I live in Herriman, UT and I enjoy working with my hands - really any project my wife gives me. </P>
    
        </div>
        <p>Click a timezone to change the time:</p>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/Los_Angeles">
        </form>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/New_York">
        </form>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/Chicago">
        </form>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/Denver">
        </form>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/Phoenix">
        </form>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/Anchorage">
        </form>
        <form action="index.php" method="get" class="timezone-button">
            <input type="submit" name="timezone" value="America/Honolulu">
        </form>

        <div id='time'>
        <?php 
        if(isset($_GET['timezone'])){
            date_default_timezone_set($_GET["timezone"]);
            echo "The time in " . $_GET["timezone"] ." is " . date("h:i:sa");
        }else{
            date_default_timezone_set("America/Denver");
            echo "The time in America/Denver is " . date("h:i:sa");
        }
        ?>
        </div>
    </body>
</html>