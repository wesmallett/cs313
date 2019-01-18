<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8"/>
        <title>Homework</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <a href="assignments.html">Assignments<a/>
        <img src='family.jpeg'/>
        <div id="about-me">
        <p>My name is Wes Mallett and this is my homepage! I live in Herriman, UT and I enjoy working with my hands - really any project my wife gives me. Together, my wife and I have 2 girls and we love doing anything outdoors. Below is a small php function I wrote to change the time to different timezones.</P>
    
        </div>
        <div id="timezone-selection">
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
        </div>

        <div id='time'>
        <?php 
        if(isset($_GET['timezone'])){
            date_default_timezone_set($_GET["timezone"]);
            echo "<p>The time in " . $_GET["timezone"] ." is: <br><br>" . date("h:i:sa")."</p>";
        }else{
            date_default_timezone_set("America/Denver");
            echo "<p>The time in America/Denver is: <br><br>" . date("h:i:sa")."</p>";
        }
        ?>
        </div>
    </body>
</html>