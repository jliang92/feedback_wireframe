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
        <link href="../../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../../libs/css/Personal.css" />
    </head>
    <body>
        <?php
        include '../../web_components/bootstrap_navbar_recipient.html';
        ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading panel-info">What do you want to do today?</div>
                <div class="panel-body">
                    <ul>
                        <li>Create a survey</li>
                        <li>Edit a survey</li>
                        <li>Review survey</li>
                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>
