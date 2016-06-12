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
           <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
                            <h4 id="modal_title" class="modal-title">Log In</h4>
                        </div>
                        <form class="form-horizontal" action="web_pages/home.php" role="form">
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
                                <div  id="confirm_password" class="form-group">
                                    <label class="control-label col-md-4" for="pwd">Confirm Password:</label>
                                    <div class="col-sm-6"> 
                                        <input type="password" class="form-control" id="confirm_pwd" placeholder="Re-enter password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"><button id="login" type="submit" class="btn btn-default">Log In</button></div>
                                    <div class="col-md-3">
                                        <button id="display_signup" type="button" class="btn btn-default">Sign Up</button>
                                        <button id="submit_signup" type="submit" class="btn btn-default">Done</button>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <script>
            $(document).ready(function () {
                // will show the create product form
                $('#myModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#myModal').modal('show');
                $('#log_out').hide();

                $("#display_signup").show();
                $("#submit_signup").hide();
                $("#confirm_password").hide();

                $("#display_signup").click(function () {
                    $("#display_signup").hide();
                    $("#submit_signup").show();
                    $("#login").hide();
                    $("#confirm_password").show();
$("#modal_title").text("Sign Up");

                });

            });
        </script>
    </body>
</html>
