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
            <div  class="panel panel-default">
                <div class="panel-heading panel-info"><h2 class="text-center">Create a Survey</h2></div>
                <div class="panel-body">
                    <div id="directions"></div>
                    <ul>
                        <li>Enter the survey's title and number of timepoints desired.</li>
                        <li>Click Create Survey to start the process.</li>
                        <li>Select question type and fill in the fields.</li>
                        <li>You may chose to add/remove more choices for the questions.</li>
                        <li>Click Save Question before moving on to create the next question.</li>
                        <li>The entire survey will not be saved unless you click the Save and Submit button.</li>
                       
                    </ul>
                    
                    <div class="row form-group">
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Enter title" required>
                </div>
                <div class="col-md-3">
                    <input type="number"  class="form-control" placeholder="Enter number of timepoints" required>
                </div>
                <div class="col-md-2">
                    <button id="start_create_survey" class="btn btn-block btn-primary" data-placement="bottom" title="Click to start making the survey">Create Survey</button>
                </div>

            </div>
                    
                    
                    <form id="selection_" role="form">
                    <div class="form-group">

                        <label for="ddrp1">Select answer type:</label>
                        <select id="ddrp1" multiple class="form-control" >
                            <option value="binary_1">True/False</option>
                            <option value="binary_2">Yes/No</option>
                            <option value="small_text_box">Small text box</option>
                            <option value="large_text_box">Large text box</option>
                            <option value="dropdown">Multiple choice(drop down)</option>
                            <option value="radio_buttons">Multiple choice(radio buttons)</option>
                            <option value="check_boxes">Check boxes(multiple selections)</option>
                        </select>
                    </div>
                </form>
                    
                </div>
            </div>

            


            

            <div>
                <div  id="form_create_form" class="panel panel-body panel-default">
                    <form id="create_question" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-2" for="question">Question:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" placeholder="Enter question"  rows="5" id="question"></textarea>
                            </div>
                        </div>



                    </form>
                    <div>
                        <button type="button" id="add_choice" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add Another Field</button>
                        <br><br>
                        <button type="button" id="save_question" class="btn btn-primary">Save Question</button>

                    </div>

                </div>


                <div>   
                    <button id="submit_button" type="submit" class="btn btn-block btn-primary" data-placement="bottom" title="Save and Create Survey">Save and Submit</button>
                    <br><br>

                </div>
                <div id="saved_questions" class="panel panel-body panel-default">
                    After clicking save question, saved questions gets rendered in this panel


                </div>

            </div>  
        </div>
        <script>

            $(document).ready(function () {
                var question_count = 1;
                var choice_count = 1;
                function hide_form() {
                    $("#form_create_form").hide();
                    $("#save").hide();
                    $("#submit_button").hide();
                    $("#selection_").hide();
                }

                function get_text_input_field() {
                    return "<div class=\"form-group\"><label class=\"control-label col-md-2\">Choice:</label><div class=\"col-md-9\"><input type=\"text\" class=\"form-control\" name=\"choice[]\" placeholder=\"Enter choice\"></div><div class=\"col-md-1\"><button id=\"remove_button\" type=\"button\" class=\"btn\"><span class=\"glyphicon glyphicon-remove\"></span></button></div></div>";
                }
                function clear_form() {
                    $("#question").val("");
                    $('input[name^="choice"]').each(function () {
                        /*here we remove all the input text fields, not text area*/

                    });
                }
                function append_question() {
                    var question = $("#question").val();
                    alert(question);
                    var field_wrapper = "<div name=\"question[]\" id=\"question" + question_count + "\"/>";
                    var question_label = "<label name=\"question_text\ value=\"" + question + "\"/>" + question;
                    question_count++;
                    $(field_wrapper).append(question_label);

                    $('input[name^="choice"]').each(function () {

                        var choice_label = "";
                        alert($(this).val());
                        choice_count++;
                    });



                    $("#saved_question").append(field_wrapper);
                    clear_form();
                }

                $("#ddrp1").change(function () {
                    var selectedVal = $(this).find(':selected').val();
                    if (selectedVal == "dropdown" || selectedVal == "radio_buttons" || selectedVal == "check_boxes") {
                        $("#add_choice").show();
                    } else {
                        $("#add_choice").hide();
                    }
                    hide_form();
                    $("#form_create_form").show();
                    $("#selection_").show();
                    $("#save").show();
                    $("#submit_button").show(); //needs a counter of some sort to only show submit button if at least 1 question has been made

                });
                $("#start_create_survey").click(function () {
                    $("#start_create_survey").hide();
                    $("#directions").hide();
                    $("#selection_").show();
                });
                $("#add_choice").click(function () {
                    $("#create_question").append(get_text_input_field());
                });
                $(".glyphicon glyphicon-remove").click(function () {
                    alert("clicked");
                });
                $("#remove_button").click(function () {
                    alert("clicked");
                });
                $("#save_question").click(function () {
                    append_question();
                });
                hide_form();
            });
        </script>
    </body>
</html>
