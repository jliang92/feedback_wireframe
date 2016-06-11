<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="libs/css/Personal.css" />
    </head>
    <body>
        <?php
        include 'web_components/bootstrap_navbar.html';
        ?>
        <div class="container">
            <div id="login_form" class="panel panel-body panel-default">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Username:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10"> 
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel panel-default">
               <div class="panel panel-body ">  
                    Preview one of the following:
                
                    <a href="web_pages/recipient/recipient_home.php" class="btn btn-block btn-info">Recipient</a>
                    <a href="web_pages/submitter/submitter_home.php" class="btn btn-block btn-info">Submitter</a>
                </div>
            </div>
        </div>
        <script>
             $(document).ready(function () {
                // will show the create product form
                
                $('#log_out').hide();
                
            });
        </script>
    </body>
</html>
