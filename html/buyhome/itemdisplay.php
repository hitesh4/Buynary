<?php
	require '../connect.php';
	if(isset($_POST['cat']) && isset($_POST['subcat'])){
		$cat= mysqli_real_escape_string($con, $_POST['cat']);
		$subcat= mysqli_real_escape_string($con, $_POST['subcat']);

		if(!empty($cat) && !empty($subcat)){
			$query= "SELECT * FROM $cat WHERE subcat='$subcat'";
			$query_run= mysqli_query($con,$query);
			if($query_run){
				$mysqli_num_rows= mysqli_num_rows($query_run);
				if($mysqli_num_rows!=0){
					$details= array();
					$details= mysqli_fetch_all($query_run);
					$prod_id_app= array_column($details, 1);
					$prod_id_count= count($prod_id_app);
					$final_details= array();
					for ($i=0; $i < $prod_id_count; $i++) { 
						$query_data= "SELECT * FROM items_basic WHERE prod_id='$prod_id_app[$i]'";
						$query_data_run= mysqli_query($con,$query_data);
						if($query_data_run){
							$mysqli_num_rows_data= mysqli_num_rows($query_data_run);
							if($mysqli_num_rows_data!=0 && $mysqli_num_rows_data==1){
								$final_details[$i]= mysqli_fetch_all($query_data_run);
							}
							
						}
					}
					echo json_encode(array($final_details,$details,));
				}
			}else{

			}
		}
	}
?>