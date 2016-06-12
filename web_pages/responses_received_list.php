<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Survey about Sam Sung</title>
        <link href="../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../libs/css/Personal.css" />
        <style>
            .scrollable{
                overflow: scroll;
            }
        </style>
    </head>
    <body>
        <?php
        include '../web_components/bootstrap_navbar_logged_in.html';
        ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading panel-info"><h2 class="text-center">Data Source: Survey About Sam Sung</h2></div>
                <div class="panel-body">
                    <div class="row">
                        <a href="survey_stats.php"><span class="btn btn-primary pull-right">Stats</span></a>
                    </div>
                    <div class="scrollable">
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Survey ID</th>
                            <th>Name</th>
                            <th>User ID</th>
                            <th>Date Submitted</th>
                            <th>Q2</th>
                            <th>Q4</th>
                            <th>Q5</th>
                            <th>Q6</th>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Anonymous</td>
                            <td>123as4567s</td>
                            <td>6/12/2016</td>
                            <td>no</td>
                            <td>yes</td>
                            <td>false</td>
                            <td>pineapple</td>


                        </tr>
                        <tr>
                            <td>4</td>
                            <td>George Lazenby</td>
                            <td>4</td>
                            <td>6/12/2016</td>
                            <td>yes</td>
                            <td>no</td>
                            <td>true</td>
                            <td>orange</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Jamie Bard</td>
                            <td>8</td>
                            <td>6/12/2016</td>
                            <td>no</td>
                            <td>no</td>
                            <td>false</td>
                            <td>cherry</td>
                        </tr>

                    </table></div>
                </div>
            </div>

        </div>

    </body>
</html>
