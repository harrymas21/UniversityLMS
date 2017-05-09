 <?php
include("libchart/libchart/classes/libchart.php");
require("utility.php");
//header("Content-type:image/png");
$rows=ExecuteQuery("select * from material_uploads where added_by='35'");
$chart=new VerticalBarChart(500,300);
$dataset=new XYDataSet();
while ($row = mysql_fetch_array($rows))
	{
$dataset->addPoint(new Point($row['unit_name'],$row['rating']));
//$dataset->addPoint(new Point("Feb 2005",321));
//$dataset->addPoint(new Point("March 2005",442));
//$dataset->addPoint(new Point("April 2005",711));
	}
	$chart->setDataSet($dataset);
$chart->setTitle("Ratings on your material uploads");
$chart->render('libchart/statistics.png');
?>