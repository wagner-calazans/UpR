<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FusionCharts</title>
</head>
<script src="PHPChartsWrapper/js/fusioncharts.js"></script>
<body>
<?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
include("PHPChartsWrapper/fusioncharts.php");
// Create the chart - Column 2D Chart with data given in constructor parameter 
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
$columnChart = new FusionCharts("mscombi3d", "ex3", "800", 400, "chart-1", "json", '{
    "chart": {
        "caption": "Visits from search engines",
        "showvalues": "0",
        "plotgradientcolor": "",
        "formatnumberscale": "0",
        "showplotborder": "0",
        "palettecolors": "#FD9927,#FECE2F,#9DCD3F,#CECD42,#64D3D1",
        "canvaspadding": "0",
        "bgcolor": "FFFFFF",
        "showalternatehgridcolor": "0",
        "divlinecolor": "CCCCCC",
        "showcanvasborder": "0",
        "legendborderalpha": "0",
        "legendshadow": "0",
        "interactivelegend": "0",
        "showpercentvalues": "1",
        "showsum": "1",
        "canvasborderalpha": "0",
        "showborder": "0"
    },
    "categories": [
        {
            "category": [
                {
                    "label": "Jan"
                },
                {
                    "label": "Feb"
                },
                {
                    "label": "Mar"
                },
                {
                    "label": "Apr"
                },
                {
                    "label": "May"
                },
                {
                    "label": "Jun"
                },
                {
                    "label": "Jul"
                },
                {
                    "label": "Aug"
                },
                {
                    "label": "Sep"
                },
                {
                    "label": "Oct"
                },
                {
                    "label": "Nov"
                },
                {
                    "label": "Dec"
                }
            ]
        }
    ],
    "dataset": [
        {
            "seriesname": "Google",
            "renderas": "Area",
            "data": [
                {
                    "value": "5040"
                },
                {
                    "value": "4794"
                },
                {
                    "value": "5026"
                },
                {
                    "value": "5341"
                },
                {
                    "value": "4800"
                },
                {
                    "value": "4507"
                },
                {
                    "value": "5701"
                },
                {
                    "value": "4671"
                },
                {
                    "value": "4980"
                },
                {
                    "value": "4041"
                },
                {
                    "value": "3813"
                },
                {
                    "value": "3691"
                }
            ]
        },
        {
            "seriesname": "Yahoo",
            "renderas": "Area",
            "data": [
                {
                    "value": "1200"
                },
                {
                    "value": "1124"
                },
                {
                    "value": "1006"
                },
                {
                    "value": "921"
                },
                {
                    "value": "1500"
                },
                {
                    "value": "1007"
                },
                {
                    "value": "921"
                },
                {
                    "value": "971"
                },
                {
                    "value": "1080"
                },
                {
                    "value": "1041"
                },
                {
                    "value": "1113"
                },
                {
                    "value": "1091"
                }
            ]
        },
        {
            "seriesname": "MSN",
            "renderas": "Area",
            "data": [
                {
                    "value": "400"
                },
                {
                    "value": "524"
                },
                {
                    "value": "606"
                },
                {
                    "value": "421"
                },
                {
                    "value": "500"
                },
                {
                    "value": "707"
                },
                {
                    "value": "621"
                },
                {
                    "value": "471"
                },
                {
                    "value": "680"
                },
                {
                    "value": "441"
                },
                {
                    "value": "713"
                },
                {
                    "value": "491"
                }
            ]
        },
        {
            "seriesname": "Others",
            "renderas": "Area",
            "data": [
                {
                    "value": "765"
                },
                {
                    "value": "571"
                },
                {
                    "value": "532"
                },
                {
                    "value": "411"
                },
                {
                    "value": "500"
                },
                {
                    "value": "407"
                },
                {
                    "value": "421"
                },
                {
                    "value": "551"
                },
                {
                    "value": "600"
                },
                {
                    "value": "541"
                },
                {
                    "value": "613"
                },
                {
                    "value": "591"
                }
            ]
        }
    ]
}');
// Render the chart
$columnChart->render();
?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>

</body>
</html>