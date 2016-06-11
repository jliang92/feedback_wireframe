<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Survey</title>
        <link href="../../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../../libs/css/Personal.css" />
    </head>
    <body>
        <?php
        include '../../web_components/bootstrap_navbar.html';
        ?>
        <div class="container">
            <div class="panel panel-body panel-default">
                   <button id="start_create_survey" class="btn btn-block btn-primary" data-placement="bottom" title="Click to start making the survey">Create Survey</button>
                  
                <form id="selection_" role="form">
                    <div class="form-group">

                        <label for="ddrp1">Select answer type:</label>
                        <select id="ddrp1" multiple class="form-control" >
                            <option value="binary_1">True/False</option>
                            <option value="binary_2">Yes/No</option>
                            <option value="dropdown">Multiple choice(drop down)</option>
                            <option value="radio_buttons">Multiple choice(radio buttons)</option>
                            <option value="small_text_box">Small text box</option>
                            <option value="large_text_box">Large text box</option>
                            <option value="check_boxes">Check boxes(multiple selections)</option>
                        </select>
                    </div>
                </form>
            </div>
            <div>   
                    <button id="submit_button" type="submit" class="btn btn-block btn-primary" data-placement="bottom" title="Save and Create Survey">Submit</button>
                    <br><br>
                </div>
            <div  id="binary_1" class="panel panel-body panel-default">
                True False question
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Username:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>



                </form>
            </div>
            <div  id="binary_2" class="panel panel-body panel-default">
                Yes No Question
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Question:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>

                </form>
            </div>
            <div  id="dropdown" class="panel panel-body panel-default">
                Question with drop down
                
               
                <form id="ddform" class="form-horizontal" role="form"> 
                    <div><button type="button" id="dd_add" class="btn btn-circle btn-primary"><span class="glyphicon glyphicon-plus"></span></button></div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Question:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                    
                   

                </form>
            </div>
            <div  id="radio_buttons" class="panel panel-body panel-default">
                Question with radio buttons
                <form id="rbform" class="form-horizontal" role="form">
                     <div><button type="button" id="rb_add" class="btn btn-circle btn-primary"><span class="glyphicon glyphicon-plus"></span></button></div>
                   
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Question:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                </form>

            </div>
            <div  id="small_text_box" class="panel panel-body panel-default">
                question with text box
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Question:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                </form>
            </div>
            <div  id="large_text_box" class="panel panel-body panel-default">
                Question with text area
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Question:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                </form>
            </div>
            <div  id="check_boxes" class="panel panel-body panel-default">
                Question with check boxes
                <form id="cb_form" class="form-horizontal" role="form">
                     <div><button type="button" id="cb_add" class="btn btn-circle btn-primary"><span class="glyphicon glyphicon-plus"></span></button></div>
                   
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Question:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="question" placeholder="Enter question">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="question">Choice:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="choice" placeholder="Enter choice">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>

            $(document).ready(function () {
                function hide_all_forms() {
                    $("#binary_1").hide();
                    $("#binary_2").hide();
                    $("#dropdown").hide();
                    $("#radio_buttons").hide();
                    $("#small_text_box").hide();
                    $("#large_text_box").hide();
                    $("#check_boxes").hide();
                }

                $("#ddrp1").change(function () {
                    // jQuery
                    var selectedVal = $(this).find(':selected').val();
                    hide_all_forms();
                    $("#" + selectedVal).show();

                });
                $("#start_create_survey").click(function () {
                    // jQuery
                   $("#selection_").show();
                   $("#start_create_survey").hide();
                   $("#submit_button").show();
                });
                
                $("#dd_add").click(function(){
                    $("#ddform").append('<div class="form-group"><label class="control-label col-sm-2" for="question">Choice:</label><div class="col-sm-10"> <input type="text" class="form-control" name="choice" placeholder="Enter choice"></div></div>');
                });
                
                 $("#rb_add").click(function(){
                    $("#rbform").append('<div class="form-group"><label class="control-label col-sm-2" for="question">Choice:</label><div class="col-sm-10"> <input type="text" class="form-control" name="choice" placeholder="Enter choice"></div></div>');
                });
                
                 $("#cb_add").click(function(){
                    $("#cbform").append('<div class="form-group"><label class="control-label col-sm-2" for="question">Choice:</label><div class="col-sm-10"> <input type="text" class="form-control" name="choice" placeholder="Enter choice"></div></div>');
                });
                
                $("#submit_button").hide();
                $("#selection_").hide();
                hide_all_forms();
            });
        </script>
    </body>
</html>
