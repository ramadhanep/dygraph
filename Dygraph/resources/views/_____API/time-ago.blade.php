<?php

function timeAgo($time_ago){
date_default_timezone_set("Asia/Jakarta");
$cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
	echo "$seconds detik yang lalu";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		echo "1 menit yang lalu";
	}
	else{
		echo "$minutes menit yang lalu";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		echo "1 jam yang lalu";
	}else{
		echo "$hours jam yang lalu";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "1 hari yang lalu";
	}else{
		echo "$days hari yang lalu";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		echo "1 minggu yang lalu";
	}else{
		echo "$weeks minggu yang lalu";
	}
}
//Months
else if($months <=12){
	if($months==1){
		echo "1 bulan yang lalu";
	}else{
		echo "$months bulan yang lalu";
	}
}
//Years
else{
	if($years==1){
		echo "1 tahun yang lalu";
	}else{
		echo "$years tahun yang lalu";
	}
}
}

?>