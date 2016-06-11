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
        <link href="../../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../../libs/css/Personal.css" />
    </head>
    <body>
        <?php
        include '../../web_components/bootstrap_navbar_submitter.html';
        ?>
        <div class="container">


            <form class="form-horizontal" role="form">

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question 1 :</label>
                        <label class="control-label">Whats your name?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class="text-right col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 2 :</label>
                        <label class="control-label" >Whats your gender?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Male</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">Female</label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question 3 : </label>
                        <label class="control-label">Tell us about your childhood.Did you have many friends? What cartoon did you like the most?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"></label>
                        <div class="text-right col-sm-10">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Question 4 :</label>
                        <label class="control-label">Did you have a pet?</label>
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
                        <label class="control-label">Is the following following statement correct: 4+4=7</label>
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
                        <label class="control-label">Which fruit did you like the most compared to others?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            <select class="form-control" >
                                <option>Apple</option>
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
                        <label class="control-label">Indicate any medical conditions you may have (Select all that apply):</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class=" col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox">Diabetes </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Arthritis</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Asthma</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Parkinson's</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Murmur </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Other</label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-body panel-default">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Question : </label>
                        <label class="control-label">Do you have any comments, questions or concerns?</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"></label>
                        <div class="text-right col-sm-10">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div><button type="button" class="btn btn-block btn-primary">Save and Submit</button></div>
            </form>
        </div>

    </body>
</html>
