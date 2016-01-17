<?php
	require '../connect.php';
	if(isset($_POST['cat']) && isset($_POST['subcat'])){
		$cat= mysqli_real_escape_string($con, $_POST['cat']);
		$subcat= mysqli_real_escape_string($con, $_POST['subcat']);

		if(!empty($cat) && !empty($subcat)){
			$query= "SELECT * FROM items WHERE cat='$cat' && subcat='$subcat'";
			$query_run= mysqli_query($con,$query);
			if($query_run){
				$mysqli_num_rows= mysqli_num_rows($query_run);
				if($mysqli_num_rows!=0){
					$details= array();
					$details= mysqli_fetch_all($query_run);
					echo json_encode($details);
				}
			}else{

			}
		}
	}
?>