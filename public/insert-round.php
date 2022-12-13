<?php
$mysqli = new mysqli('localhost', 'root', '140691', 'ypl_finish');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    exit;
} 

date_default_timezone_set('Asia/Kolkata');
$datetime = date('Y-m-d H:i:s');

for ($i=1; $i < 8; $i++) { 
	$getState = $mysqli->query("SELECT * FROM age_group order by id asc ");
	while ($row = $getState->fetch_assoc()) {
	    $pdfname = '1'.$i.$row['activity_id'].$row['id'].'.pdf';
	    
	    $sql = $mysqli->query(" insert into syllabus (league_id, round_id, activity_id, age_group_id, is_active, created_at, syllabus) values (1, '".$i."', '".$row['activity_id']."', '".$row['id']."', 1, '".$datetime."', '".$pdfname."') ");

		if (@$sql == true) {
			echo "insert into syllabus (league_id, round_id, activity_id, age_group_id, is_active, created_at, syllabus) values (1, '".$i."', '".$row['activity_id']."', '".$row['id']."', 1, '".$datetime."', '".$pdfname."'  )";	
		}else{
			echo "fail";
		}

		
	    echo "<br>";
	}	
}


?>
