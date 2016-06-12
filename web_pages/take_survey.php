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
            <div class="panel panel-default">
                <div class="panel-heading panel-info"><h2 class="text-center">Survey Title: Survey about Daniel Craig</h2></div>
                
            </div>

            <form class="form-horizontal" action="home.php" role="form">

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question 1 :</label>
                        <label class="control-label">What is something you like about me?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            <input type="text" class="form-control">
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
                            <div class="radio">
                                <label><input type="radio" name="optradio">Yes</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">No</label>
                            </div>

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
                            <textarea class="form-control" rows="5"></textarea>
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
                            <div class="radio">
                                <label><input type="radio" name="optradio">Yes</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">No</label>
                            </div>

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
                            <select class="form-control" >
                                <option>True</option>
                                <option >False</option>
                            </select>

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
                            <select class="form-control" >
                                <option>Pineapple</option>
                                <option>Orange</option>
                                <option>Cherry</option>
                                <option>Strawberry</option>
                                <option>Honey Dew</option>
                                <option>Watermelon</option>
                            </select>

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
                            <div class="checkbox">
                                <label><input type="checkbox">Mean</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Nice</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Organized</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Athletic</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Bookworm</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Team player</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Condescending</label>
                            </div>

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
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div class=" text-center">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"><button type="submit" class=" btn btn-block btn-primary">Submit</button></div>                    
                   
                    <div class="col-md-3"><button id="anonymous_submission" type="submit" class=" btn btn-block btn-primary">Submit as Anonymous</button></div>
                   
                </div>

            </form>
        </div>

        <script>
        $(document).ready(function(){
            $("#anonymous_submission").click(function(){
                alert("You have selected to submit your survey anonymously.");
            });
        });
        </script>
    </body>
</html>
