<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome Recipient</title>
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
                <div class="panel-heading panel-info">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
                This is the panel to view all the surveys that you created/manage.
                Only the title will be shown, clicking the title shows the whole survey with questions and choices
                <ul>
                    <li><a href="entire_survey.php">Survey about Jimmy Cricket</a></li>
                </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading panel-info">Submitted Responses</div>
                <div class="panel-body">Panel Content</div>
                <ul>
                    <li><a href="survey_stats.php">Survey about Sam Sung</a></li>
                    <li><a href="survey_stats.php">Survey about Mike Roe Soft</a></li>
                    <li><a href="survey_stats.php">Survey about Noah Kia</a></li>

                </ul>
            </div>
        </div>

    </body>
</html>
