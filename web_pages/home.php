<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link href="../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../libs/css/Personal.css" />
    </head>
    <body>
        <?php
        include '../web_components/bootstrap_navbar_logged_in.html';
        ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading panel-info">Recipient</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="create_survey.php">Create a survey</a></li>
                        <li><a href="send_surveys.php">Send a survey</a></li>
                        <li><a href="my_surveys.php">View submitted responses</a></li>
                    </ul>
                </div>
            </div>
            
             <div class="panel panel-default">
                <div class="panel-heading panel-info">Submitter</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="new_surveys.php">Take a survey</a></li>
                        <li><a href="new_surveys.php">Browse surveys</a></li>
                        <li><a href="my_completed_surveys.php">View my completed surveys</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>
