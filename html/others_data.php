<?php
	require 'connect.php';
	session_start();
	$prod_id= $_SESSION['prod_id'];
	$fb_id= $_SESSION['fb_id'];
	//echo 'as';
	if(isset($_POST['sell_reason']) && isset($_POST['other_item1']) && isset($_POST['location']) && isset($_POST['other_item2']) && isset($_POST['negatives']) && isset($_POST['info'])){
		if($_POST['sell_reason']=='Other1'){
			if(!empty($_POST['other_item1'])){
				$other_item1= $_POST['other_item1'];
			}
		}else{
			$other_item1= '';
		}
		if($_POST['location']=='Other2'){
			if(!empty($_POST['other_item2'])){
				$other_item2= $_POST['other_item2'];
			}
		}else{
			$other_item2= '';
		}
	// if(1){
		//echo "string";
	// 	$other_item1= $_POST['other_item1'];
	// 	$other_item2= $_POST['other_item2'];
		$sell_reason= $_POST['sell_reason'];
		$location= $_POST['location'];
		$negatives= $_POST['negatives'];
		$info= $_POST['info'];
		if(!empty($sell_reason) && !empty($location) && !empty($negatives) && !empty($info)){
				//echo $other_item2;

				// write code to check if prod_id aleady exist.(IMP)

				$query="INSERT INTO other VALUES  ('','$prod_id','$fb_id','$sell_reason','$other_item1','$location','$other_item2','$negatives','$info')";
				$query_run = mysqli_query($con,$query);

				if($query_run){
					header('Location: sell_thankspage.php');
					echo "Congratulations item added";
					//echo $prod_id;
					}
				}else{
					echo mysqli_error($con);
					//echo "string";
				}
			
	}else{
		
	}
	
?>