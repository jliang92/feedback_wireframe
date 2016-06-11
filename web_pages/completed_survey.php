<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taking Survey</title>
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


            <form class="form-horizontal" role="form">

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question 1 :</label>
                        <label class="control-label">What is something you like about me?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            Your sense of humor
                        </div>
                    </div>
                </div>

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 2 :</label>
                        <label class="control-label" >Do you enjoy working with me?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            Yes

                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question 3 : </label>
                        <label class="control-label">Tell me about a time when I was very mean to you.</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"></label>
                        <div class=" col-sm-10">
                               About 4 months ago, you started a rumor about me. The rumor was that I was involved with Nancy in HR. It wasn't true. Til this day , I still can't look Nancy in the eye without feeling awkward.
                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 4 :</label>
                        <label class="control-label">Did we ever fight?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            Yes

                        </div>
                    </div>
                </div>

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 5 :</label>
                        <label class="control-label">Is the following following statement correct: I'm very bad at managing my time.</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            False

                        </div>
                    </div>
                </div>

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 6 :</label>
                        <label class="control-label">Which fruit would you throw at me?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            Honey Dew
                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 7 :</label>
                        <label class="control-label">How would you describe me? (Select all that apply):</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                                <label>Mean</label>
                                <label>Athletic</label>
                                <label>Team player</label>
                                <label>>Condescending</label>
                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question 8: </label>
                        <label class="control-label">Do you have any comments, questions or concerns?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"></label>
                        <div class="col-sm-10">
                            No comment.
                        </div>
                    </div>
                </div>
                
            </form>
        </div>

    </body>
</html>
