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
                        <label class="control-label" for="timepoints">Survey about Sam Sung</label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> 
                        <label class="control-label" for="timepoints">Number of participants for timepoint:</label>
                    </div>
                    <div class="col-md-4">  
                        <label class="control-label" for="timepoints">258</label>

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
                    <div id="timepoint_content">
                        <div id="c_container" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {

                //Better to construct options first and then pass it as a parameter
                var options = {
                    title: {
                        text: "Scores"
                    },
                    animationEnabled: true,
                    data: [
                        {
                            type: "column", //change it to line, area, bar, pie, etc
                            dataPoints: [
                                {x: 1, y: 10},
                                {x: 2, y: 11},
                                {x: 3, y: 14},
                                {x: 4, y: 16},
                                {x: 5, y: 19},
                                {x: 6, y: 15},
                                {x: 7, y: 12},
                                {x: 8, y: 10}
                            ]
                        }
                    ]
                };

                $("#c_container").CanvasJSChart(options);
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
                            text: "Scores"
                        },
                        animationEnabled: true,
                        data: [
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "Saudi", y: vals[0]},
                                    {label: "Santa Teresa", y: vals[1]},
                                    {label: "thor",y: vals[2]},
                                    {label: "a", y: vals[3]},
                                    {label: "b", y: vals[4]},
                                    {label: "c", y: vals[5]},
                                    {label: "d", y: vals[7]},
                                    {label: "e", y: vals[6]}
                                ]
                            },
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "Saudi", y: vals[1]},
                                    {label: "Santa Teresa", y: vals[3]},
                                    {label: "thor",y: vals[4]},
                                    {label: "a", y: vals[2]},
                                    {label: "b", y: vals[5]},
                                    {label: "c", y: vals[7]},
                                    {label: "d", y: vals[6]},
                                    {label: "e", y: vals[0]}
                                ]
                            },
                            {
                                type: "column", //change it to line, area, bar, pie, etc
                                dataPoints: [
                                    {label: "Saudi", y: vals[3]},
                                    {label: "Santa Teresa", y: vals[6]},
                                    {label: "thor",y: vals[7]},
                                    {label: "a", y: vals[5]},
                                    {label: "b", y: vals[4]},
                                    {label: "c", y: vals[2]},
                                    {label: "d", y: vals[0]},
                                    {label: "e", y: vals[1]}
                                ]
                            }
                        ]
                    };
                    $("#c_container").CanvasJSChart(options);

                });
            });
        </script>
    </body>
</html>
