<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHPlot</title>
</head>
<body>
	<?php
require('phpChart/phpChart.php');
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14, 8, 1)),'basic_chart');
$pc->set_animate(true);
$pc->set_title(array('text'=>'Grafico UNIPOSRio-Física'));
$pc->draw(); 
   ?>
</body>
</html>