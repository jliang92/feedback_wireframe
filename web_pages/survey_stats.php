<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                        <label class="control-label" for="timepoints">Survey about George Lazenby</label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> 
                        <label class="control-label" for="timepoints">Select a timepoint:</label>
                    </div>
                    <div class="col-md-4">  
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
                    <div id="timepoint_content">
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {

                //Better to construct options first and then pass it as a parameter
                var options = {
                    title: {
                        text: "Column Chart using jQuery Plugin"
                    },
                    animationEnabled: true,
                    data: [
                        {
                            type: "column", //change it to line, area, bar, pie, etc
                            dataPoints: [
                                {x: 10, y: 10},
                                {x: 20, y: 11},
                                {x: 30, y: 14},
                                {x: 40, y: 16},
                                {x: 50, y: 19},
                                {x: 60, y: 15},
                                {x: 70, y: 12},
                                {x: 80, y: 10}
                            ]
                        }
                    ]
                };

                $("#chartContainer").CanvasJSChart(options);
                $("#timepoints").change(function () {
                    //   var selectedVal = $(this).find(':selected').val();
                    var vals = [];
                    for (i = 0; i < 8; i++) {
                        var r_val = Math.floor((Math.random() * 20) + 10);
                        vals[i] = r_val;
                    }

                    for (i = 0; i < 8; i++) {
                        var r_val = Math.floor((Math.random() * 15) + 10);
                        vals[i] += r_val;
                    }



                    var options = {
                        title: {
                            text: "Score"
                        },
                        animationEnabled: true,
                        data: [
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {x: "1a", y: vals[0]},
                                    {x: "4b", y: vals[1]},
                                    {x: 6, y: vals[2]},
                                    {x: 8, y: vals[3]},
                                    {x: 10, y: vals[4]},
                                    {x: 12, y: vals[5]},
                                    {x: 14, y: vals[6]},
                                    {x: 16, y: vals[7]}
                                ]
                            }
                        ]
                    };
                    $("#chartContainer").CanvasJSChart(options);

                });
            });
        </script>
    </body>
</html>
