<?php
	require 'connect.php';
	session_start();
	$prod_id= $_SESSION['prod_id'];
	$fb_id= $_SESSION['fb_id'];
	if(isset($_POST['name']) && isset($_POST['author']) && isset($_POST["edition"]) && isset($_POST['book_type']) && isset($_POST['other_item1']) && isset($_POST['sell_reason']) && isset($_POST['other_item2']) && isset($_POST['location']) && isset($_POST['other_item3']) && isset($_POST['info'])){
		echo "string";
		if($_POST['book_type']=='Other1'){
			if(!empty($_POST['other_item1'])){
				$other_item1= $_POST['other_item1'];
			}
		}else{
			$other_item1= '';
		}
		if($_POST['sell_reason']=='Other2'){
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
	// $other_item1= $_POST['other_item1'];
	// 	$other_item2= $_POST['other_item2'];
	// 	$other_item3= $_POST['other_item3'];
		$name= $_POST['name'];
		$author= $_POST["author"];
		$edition= $_POST['edition'];
		$book_type= $_POST['book_type'];
		$sell_reason= $_POST['sell_reason'];
		$location= $_POST['location'];
		
		$info= $_POST['info'];
		if(!empty($name) && !empty($author) && !empty($edition) && !empty($book_type) && !empty($sell_reason) && !empty($location) && !empty($info)){
				echo 'd';
				$query="INSERT INTO book VALUES  ('','$prod_id','$fb_id','$name','$author','$edition','$book_type','$other_item1','$sell_reason','$other_item2','$location','$other_item3','$info')";
				$query_run = mysqli_query($con,$query);

				if($query_run){
					header('Location: sell_thankspage.php');
					echo "Congratulations item added";
					echo $prod_id;
					}
				}else{
					echo mysqli_error($con);
					//echo "string";
				}
			
	}else{
		echo 'error';
	}
	
?>