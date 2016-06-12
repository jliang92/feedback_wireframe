<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Survey Statistics</title>
        <link href="../libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="../libs/js/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../libs/js/canvasJs/jquery.canvasjs.min.js"></script>

        <script src="../libs/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../libs/css/bootstrap/docs-assets/js/holder.js"></script>
        <link rel="stylesheet" href="../libs/css/Personal.css" />
    </head>
    <body>
        <?php
        include '../web_components/bootstrap_navbar_logged_in.html';
        ?>
        <div class="container">
            <div class="form-group">

                <div class="row">
                    <div class="col-md-2"> 
                        <label class="control-label" for="timepoints">Survey Title:</label>
                    </div>
                    <div class="col-md-4">  
                        <label class="control-label" for="timepoints">Survey about Sam Sung</label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> 
                        <label class="control-label" for="timepoints">Number of participants for timepoint:</label>
                    </div>
                    <div class="col-md-4">  
                        <label class="control-label" for="timepoints">100</label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> 
                        <label class="control-label" for="timepoints">Select a timepoint:</label>
                    </div>
                    <div class="col-md-2">  
                        <select id="timepoints" class="form-control">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=10>All</option>
                        </select>                
                    </div>
                </div>

            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div>
                        <div id="container_2" style="height: 300px; width: 100%;"></div>
                        Whats up

                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div >
                        <div id="container_4" style="height: 300px; width: 100%;"></div>
                        Whats up

                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div >
                        <div id="container_5" style="height: 300px; width: 100%;"></div>
                        Whats up

                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div >
                        <div id="container_6" style="height: 300px; width: 100%;"></div>
                        Whats up

                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                function create_chart_2() {
                    //Better to construct options first and then pass it as a parameter
                    var vals = [];
                    for (i = 0; i < 2; i++) {
                        var r_val = Math.floor((Math.random() * 50) + 10);
                        vals[i] = r_val;
                    }
                    var options = {
                        title: {
                            text: "Question 2: Do you enjoy working with me?"
                        },
                        animationEnabled: true,
                        data: [
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "Yes", y: vals[0]},
                                    {label: "No", y: vals[1]}

                                ]
                            }
                        ]
                    };

                    $("#container_2").CanvasJSChart(options);
                }

                function create_chart_4() {
                    var vals = [];
                    for (i = 0; i < 2; i++) {
                        var r_val = Math.floor((Math.random() * 50) + 10);
                        vals[i] = r_val;
                    }
                    //Better to construct options first and then pass it as a parameter
                    var options = {
                        title: {
                            text: "Question 4: Did we ever fight?"
                        },
                        animationEnabled: true,
                        data: [
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "Yes", y: vals[0]},
                                    {label: "No", y: vals[1]}
                                ]
                            }
                        ]
                    };

                    $("#container_4").CanvasJSChart(options);
                }

                function create_chart_5() {
                    var vals = [];
                    for (i = 0; i < 2; i++) {
                        var r_val = Math.floor((Math.random() * 50) + 10);
                        vals[i] = r_val;
                    }
                    //Better to construct options first and then pass it as a parameter
                    var options = {
                        title: {
                            text: "Question 5: Is the following following statement correct: I'm very bad at managing my time."
                        },
                        animationEnabled: true,
                        data: [
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "True", y: vals[0]},
                                    {label: "False", y: vals[1]}
                                ]
                            }
                        ]
                    };

                    $("#container_5").CanvasJSChart(options);
                }

                function create_chart_6() {
                    var vals = [];
                    for (i = 0; i < 6; i++) {
                        var r_val = Math.floor((Math.random() * 50) + 10);
                        vals[i] = r_val;
                    }
                    //Better to construct options first and then pass it as a parameter
                    var options = {
                        title: {
                            text: "Question 6: Which fruit would you throw at me?"
                        },
                        animationEnabled: true,
                        data: [
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "Pineapple", y: vals[0]},
                                    {label: "Orange", y: vals[1]},
                                    {label: "Strawberry", y: vals[2]},
                                    {label: "Cherry", y: vals[3]},
                                    {label: "Honey Dew", y: vals[4]},
                                    {label: "Watermelon", y: vals[5]}

                                ]
                            }
                        ]
                    };

                    $("#container_6").CanvasJSChart(options);
                }

                $("#timepoints").change(function () {
                    render_charts();
                });
                
                function render_charts() {
                    create_chart_2();
                    create_chart_4();
                    create_chart_5();
                    create_chart_6();
                }
                render_charts();
            });
        </script>
    </body>
</html>
