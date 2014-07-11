<?php
	include "application/libraries/libchart/classes/libchart.php";

	$chart = new VerticalBarChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Jan 2013",$jan));
	$dataSet->addPoint(new Point("Feb 2013",$feb));
	$dataSet->addPoint(new Point("March 2013",$mar));
	$dataSet->addPoint(new Point("April 2013",$app));
	$dataSet->addPoint(new Point("May 2013", 1200));
	$dataSet->addPoint(new Point("June 2013", 1500));
	$dataSet->addPoint(new Point("July 2013", 2600));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Selling Report");
	$chart->render("images/report/barchart.png");
?>
	<p align="center" class="bar_chart"><img alt="Vertical bars chart" src="<?php echo base_url();?>images/report/barchart.png" style="border: 1px solid gray;"/></p>
