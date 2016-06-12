<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send Surveys</title>
        <link href="../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../libs/css/Personal.css" />

        <!-- Ignite UI Required Combined CSS Files -->
        <link href="http://cdn-na.infragistics.com/igniteui/2016.1/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
        <link href="http://cdn-na.infragistics.com/igniteui/2016.1/latest/css/structure/infragistics.css" rel="stylesheet" />

        <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>


        <!-- Ignite UI Required Combined JavaScript Files -->
        <script src="http://cdn-na.infragistics.com/igniteui/2016.1/latest/js/infragistics.core.js"></script>
        <script src="http://cdn-na.infragistics.com/igniteui/2016.1/latest/js/infragistics.lob.js"></script>

    </head>
    <body>
        <?php
        include '../web_components/bootstrap_navbar_logged_in.html';
        ?>
        <div class="container">

            <form class="form-horizontal" role="form">


                <div class="panel panel-default">
                    <div class="panel-heading panel-info">Select survey takers:</div>
                    <div class="panel-body">

                        <div id="participants_bank" class="multiselect">
                            <label> <input type="checkbox" name="option[]" />Jeremy Smith</label>
                            <label> <input type="checkbox" name="option[]" />Jennifer Fillion</label>
                            <label> <input type="checkbox" name="option[]" />Nathan James</label>
                            <label> <input type="checkbox" name="option[]" />Harold Jordan</label>
                            <label> <input type="checkbox" name="option[]" />Andy Fesser</label>
                            <label> <input type="checkbox" name="option[]" />Gina Sampson</label>
                            <label> <input type="checkbox" name="option[]" />Seth Stein</label>
                            <label> <input type="checkbox" name="option[]" />June Lee</label>
                            <label> <input type="checkbox" name="option[]" />Yuna Park</label>
                            <label> <input type="checkbox" name="option[]" />Monica Gellar</label>
                            <label> <input type="checkbox" name="option[]" />Rachel Green</label>

                        </div>

                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading panel-info">Select survey to send and Enter the timepoint:</div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-8">  
                                <select id="survey_bank" class="form-control" >
                                    <option>Survey about Sam Wilson</option>
                                  
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select id="timepoint_descriptions" class="form-control">
                                    <option> First Quarter 2016</option>
                                    <option> Second Quarter 2016</option>
                                    <option> Third Quarter 2016</option>
                                    <option> Fourth Quarter 2016</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-primary" data-placement="bottom" title="Sends Survey to survey takers.">Send</button>
            </form>
        </div>
        <script>
            $(document).ready(function () {


            });
        </script>

    </body>
</html>
