<?php
/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 17.11.13
 * Time: 20:30
 */
?>
<form>
    <fieldset>
        <legend>График</legend>
        <label>Шаг</label>
        <input id="h-input" type="text" value="1.2">
        <label>x(t)</label>
        <input id="x-input" type="text" value="8">
        <label>Количество точек</label>
        <input id="maxi-input" type="text" value="50">
        <label>Функция</label>
        <input id="y-input" class="span5" type="text" value="z1 - 5*z2 - 12*z3 + 36*(z3 + h * (x - z1 - 16*z2 - 83*z3)/140)">
        <span class="help-block">Example: z1 - 5*z2 - 12*z3 + 36*(z3 + h * (x - z1 - 16*z2 - 83*z3)/140)</span>
        <label>Z3</label>
        <input id="z-input" class="span5" type="text" value="z3 + h * (x - z1 - 16*z2 - 83*z3)/140">
        <row class="span12"><button type="button" class="btn" onClick="drawChart()">Submit</button></row>
    </fieldset>
</form>


<div id="chart_div" class="span4" style=".width: 900px; .height: 500px;"></div>

<canvas id="myChart" width="1170" height="400"></canvas>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);


    var ctx = $("#myChart").get(0).getContext("2d");
    //var myNewChart = new Chart(ctx);


    function drawChart() {
        var z1 = 0;
        var z2 = 0;
        var z3 = 0;
        var h = document.getElementById('h-input').value;
        var x = document.getElementById('x-input').value;
        var maxi = document.getElementById('maxi-input').value;
        var y = eval(document.getElementById('y-input').value);//z1 - 5*z2 - 12*z3 + 36*(z3 + h * (x - z1 - 16*z2 - 83*z3)/140);
        var arr = [['i', 'y']];
        var arr2 = {
            labels : [],
            datasets: [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : []
                }
            ]
        };
        for (var i=0; i<maxi; i++){
            z1 = z1 + h * z2;
            z2 = z2 + h * z3;
            z3 = eval(document.getElementById('z-input').value);;
            y = eval(document.getElementById('y-input').value);
            //arr.push([i, y]);
            arr2.datasets[0].data.push(y);
            arr2.labels.push(i+1);
        }

        console.log(arr2);
        //var data = google.visualization.arrayToDataTable(arr);

        var options = {
            title: y
    };

    // var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    // chart.draw(data, options);

    options = {
        bezierCurve : false,
        pointDot : false
    };
    data = arr2;
    new Chart(ctx).Line(data,options);
    }

    var randomSearch = function() {};


</script>
