<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Surveys</title>
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
            <h2 class="text-center">My Surveys</h2>
            
            
            
            <div class="panel panel-default">
                <div class="panel-heading panel-info">Completed Surveys</div>
                <div class="panel-body">
                    <ul>

                        <li><a href="completed_survey.php">Survey about Jimmy Cricket</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading panel-info">Your new surveys:</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="take_survey.php">Survey about Daniel Craig</a></li>
                        

                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading panel-info">Responses Received</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="responses_received_list.php">Survey about Sam Sung</a></li>


                    </ul></div>
            </div>
            
        </div>

    </body>
</html>
