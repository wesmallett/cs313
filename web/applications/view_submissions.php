<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Application Submissions</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $('.view_overview').click(function(){
                    $.ajax({
                    data:{'id': $(this).val()},
                    type: 'post',
                    success: function(output){
                        location.href='submission_overview.php';
                    }
                    });
                });
            });
        </script>
    </head>

    <body>
    <?php include_once '../navbar.php'?>
    <h1>Application Submissions</h1>
    <form action="addSubmission.php">
        <input type="submit" value="Add New Application"/>
    </form>
    <table>
    <tr>
        <th></th>
        <th>Status</th>
        <th>Company</th>
        <th>Position</th>
        <th>Submission Date</th>
        <th>Requested Salary</th>
        <th>Link to Job</th>
    </tr>
    <?php
    $submissions = getAllAppSubmissions($db);
    foreach($submissions as $submission){
        ?>
        <tr>
        <td><form action="submission_overview.php" method="GET">
        <input type="hidden" id=submissionId value="<?=$submission['submissionId']?>"/>
        <input type="submit" id="view_overview" name="insert" value="View" />
        </form></td>
        <td><?=$submission['status']?></td>
        <td><?=$submission['company']?></td>
        <td><?=$submission['jobtitle']?></td>
        <td><?=$submission['submissiondate']?></td>
        <td><?=$submission['salaryrequested']?></td>
        <td><a href='http://<?=$submission['linktojobposting']?>' target='_blank'><?=$submission['linktojobposting']?></a></td>
        </tr>
    <?php
    }
    ?>
    </table>
    <?php 

    ?>
    </body>
</html>