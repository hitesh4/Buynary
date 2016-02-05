<?php
	require 'connect.php';
	session_start();
	$prod_id= $_SESSION['prod_id'];
	$fb_id= $_SESSION['fb_id'];
	$item= $_SESSION['item'];
	//echo 'as';
	if(isset($_POST['product']) && isset($_POST['other_item1']) && isset($_POST['name']) && isset($_POST['bill']) && isset($_POST['sell_reason']) && isset($_POST['other_item2']) && isset($_POST['location']) && isset($_POST['other_item3']) && isset($_POST['negatives']) && isset($_POST['info'])){
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
		if($_POST['location']=='Other3'){
			if(!empty($_POST['other_item3'])){
				$other_item3= $_POST['other_item3'];
			}
		}else{
			$other_item3= '';
		}
	// if(1){
		//echo "string";
	// 	$other_item1= $_POST['other_item1'];
	// 	$other_item2= $_POST['other_item2'];
		$name= $_POST['name'];
		$product= $_POST["product"];
		$bill= $_POST['bill'];
		$sell_reason= $_POST['sell_reason'];
		$location= $_POST['location'];
		$negatives= $_POST['negatives'];
		$info= $_POST['info'];
		if(!empty($name) && !empty($product) && !empty($bill) && !empty($sell_reason) && !empty($location) && !empty($negatives) && !empty($info)){
				//echo $other_item2;

				// write code to check if prod_id aleady exist.(IMP)

				$query="INSERT INTO furniture_music VALUES  ('','$prod_id','$fb_id','$product','$other_item1','$name','$item','$bill','$sell_reason','$other_item2','$location','$other_item3','$negatives','$info')";
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