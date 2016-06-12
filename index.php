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
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click to Proceed</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Log In</h4>
                        </div><form class="form-horizontal" action="web_pages/home.php" role="form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="email">Email:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="email" placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="pwd">Password:</label>
                                    <div class="col-sm-6"> 
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Log In</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
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
