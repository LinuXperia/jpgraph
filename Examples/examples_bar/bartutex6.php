<?php

/**
 * JPGraph v3.6.15
 */
require_once __DIR__ . '/../../vendor/autoload.php';
use Amenadiel\JpGraph\Graph;
use Amenadiel\JpGraph\Plot;

// new Graph\Graph with a drop shadow
$graph = new Graph\Graph(300, 200, 'auto');
$graph->SetShadow();

// Some data
$databary = [];
$databarx = [];
$months   = $graph->gDateLocale->GetShortMonth();
srand((float) microtime() * 1000000);
for ($i = 0; $i < 25; ++$i) {
    $databary[] = rand(1, 50);
    $databarx[] = $months[$i % 12];
}
// Use a "text" X-scale
$graph->SetScale('textlin');

// Specify X-labels
$graph->xaxis->SetTickLabels($databarx);
$graph->xaxis->SetTextLabelInterval(3);

// Hide the tick marks
$graph->xaxis->HideTicks();

// Set title and subtitle
$graph->title->Set('Bar tutorial example 6');

// Use built in font
$graph->title->SetFont(FF_FONT1, FS_BOLD);

// Create the bar plot
$b1 = new Plot\BarPlot($databary);
$b1->SetLegend('Temperature');
$b1->SetWidth(0.4);

// The order the plots are added determines who's ontop
$graph->Add($b1);

// Finally output the  image
$graph->Stroke();
