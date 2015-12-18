<?
	$graph_height=200;
	$days=7;	//total number of groups
 
	// define each group as an array
	$stats['visits']=array();
	$stats['unique']=array();
	$stats['direct']=array();
	$stats['external']=array();	
	$stats['page']=array();
 
 
	$bar_width=5;		//width of bar in pixels
	$bar_gap=2;			//gap between adjacent bars
	$interval_gap=40;	//gap between groups
 
	$total_bars=5;		// Will be equal to number of bars in each group
	$interval_width=($bar_width * $total_bars)+($bar_gap * ($total_bars-1));
 
	//width of the graph will be calculated dynamically
	$graph_width=($interval_width+$interval_gap)*$days + $interval_gap ;
 
	// these values will be displayed at the bottom as the graph legend
	$week_days=array('mon','tue','wed','thu','fri','sat','sun');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP CSS Graph</title>
<style>
.bar1{
	width:<?=$bar_width ?>px;
	background-color:#A55541;
	float:left;
}
.bar2{
	width:<?=$bar_width ?>px;
	background-color:#CA804F;
	float:left;
}
.bar3{
	width:<?=$bar_width ?>px;
	background-color:#CCB426;
	float:left;
}
.bar4{
	width:<?=$bar_width ?>px;
	background-color:#8EA439;
	float:left;
}
.bar5{
	width:<?=$bar_width ?>px;
	background-color:#70883E;
	float:left;
}
.gap{
	width:<?=$bar_gap ?>px;
	float:left;
}
.space{
	width:<?=$interval_gap ?>px;
	float:left;
}
</style>
</head>

<body>
	<div style="border:solid 1px #e1e1e1; background-color:#fafafa; height:<?=$graph_height ?>px; width:<?=$graph_width ?>px; padding-top:20px;">
        <div style="height:<?=$graph_height ?>px;" class="space"></div>    
<?
 
	for($i=0;$i<$days;$i++){
		// randomly assign values to each array 
		$stats['visits'][]=200 + rand(1,100);
		$stats['unique'][]=100 + rand(1,100);
		$stats['direct'][]=50 + rand(1,50);
		$stats['external'][]=50 + rand(1,50);
		$stats['page'][]=200 + rand(1,50);
 
	}
 
	$max_visits=max($stats['visits']);
	$max_unique=max($stats['unique']);
	$max_direct=max($stats['direct']);
	$max_external=max($stats['external']);
	$max_page=max($stats['page']);	
 
 
 
	$max=max($max_visits,$max_unique,$max_direct,$max_external,$max_page);
	$ratio=$graph_height/$max;	//ratio will be used to make sure that bars never go beyond graph height
 
	for($i=0;$i<$days;$i++){
 
		$visits=$stats['visits'][$i];
		$unique=$stats['unique'][$i];
		$direct=$stats['direct'][$i];
		$external=$stats['external'][$i];
		$page=$stats['page'][$i];
 
		$visits_height=intval($visits*$ratio);	// adjust the bar height according to the bar height
		$unique_height=intval($unique*$ratio);
		$direct_height=intval($direct*$ratio);
		$external_height=intval($external*$ratio);
		$page_height=intval($page*$ratio);
 
		$visits_margin=$graph_height-$visits_height;	// as Height of Graph = Top Margin + Height of Bar
		$unique_margin=$graph_height-$unique_height;
		$direct_margin=$graph_height-$direct_height;
		$external_margin=$graph_height-$external_height;
		$page_margin=$graph_height-$page_height;
 
 ?>
		<div style="height:<?=$visits_height ?>px; margin-top:<?=$visits_margin ?>px;" class="bar1"></div>
        <div style="height:<?=$graph_height ?>px;" class="gap"></div>

		<div style="height:<?=$unique_height ?>px; margin-top:<?=$unique_margin ?>px;" class="bar2"></div>
        <div style="height:<?=$graph_height ?>px;" class="gap"></div>

		<div style="height:<?=$direct_height ?>px; margin-top:<?=$direct_margin ?>px;" class="bar3"></div>
        <div style="height:<?=$graph_height ?>px;" class="gap"></div>

		<div style="height:<?=$external_height ?>px; margin-top:<?=$external_margin ?>px;" class="bar4"></div>
        <div style="height:<?=$graph_height ?>px;" class="gap"></div>

		<div style="height:<?=$page_height ?>px; margin-top:<?=$page_margin ?>px;" class="bar5"></div>

        <div style="height:<?=$graph_height ?>px;" class="space"></div>
        
<?	} ?>
		<div style="clear:both;"></div>
	</div>
	<div style="height:15px; background-color:#8c8c8c; width:<?=$graph_width ?>px; color:#FFF; border:solid 1px #666;">
		<div style="height:<?=$graph_height ?>px;" class="space"></div>
		<?	for($i=0;$i<$days;$i++){ ?>
			<div style="width:<?=$interval_width ?>px; text-align:center; float:left; font-size:9px; font-family:Verdana, Geneva, sans-serif;"><?=$week_days[$i] ?></div>
			<div style="height:<?=$graph_height ?>px;" class="space"></div>
		<? } ?>
		</div>
	</div>
</body>
</html>