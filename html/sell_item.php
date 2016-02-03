<?php
	require 'connect.php';
	session_start();

	function http_upload(){
		$ctrue=0;
		$cfalse=0;
		for($i=0;$i<count($_FILES['uploaded_image']['name']);$i++){
			if(is_uploaded_file($_FILES['uploaded_image']['tmp_name'][$i])){
				$ctrue++;
			}else{
				$cfalse++;
			}
		}
		if($ctrue==count($_FILES['uploaded_image']['name'])){
			return true;
		}else{
			return false;
		}
	}

	$fb_id= $_SESSION['fb_id'];
	if(isset($_POST['item']) && isset($_POST['other_item']) && isset($_FILES["uploaded_image"]) && isset($_POST['offered_price']) && isset($_POST['market_price']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['link']) && isset($_POST['negotiable'])){
		if($_POST['item']=='Other'){
			if(!empty($_POST['other_item'])){
				$other_item= $_POST['other_item'];
			}
		}else{
			$other_item= '';
		}
		$item= $_POST['item'];
		$uploaded_image= $_FILES["uploaded_image"];
		$offered_price= $_POST['offered_price'];
		$market_price= $_POST['market_price'];
		$month= $_POST['month'];
		$year= $_POST['year'];
		$link= $_POST['link'];
		$negotiable= $_POST['negotiable'];
		if(!empty($item) && !empty($_FILES["uploaded_image"]) && !empty($offered_price) && !empty($market_price) && !empty($month) && !empty($year) && !empty($link) && !empty($negotiable)){
			if(http_upload()){
				$allowed_ext= array('gif','jpg','jpeg','png','bmp');
				$allowed_type= array('image/jpg','image/jpeg','image/pjpeg','image/gif','image/png','image/x-png','image/bmp');
				$count= count($uploaded_image['name']);
				$count_moved=0;
				//echo 'a';
				$target_path= array();
				$type= array();
				$tmp_name= array();
				for ($i=0; $i < $count; $i++) { 					
					$ext= explode('.', $uploaded_image['name'][$i]);
					$last_ext= end($ext);
					$type[$i]= $uploaded_image['type'][$i];
					$tmp_name[$i]= $uploaded_image['tmp_name'][$i];
					
					if(in_array($last_ext, $allowed_ext) && in_array($type[$i], $allowed_type)){
						$imagename= $fb_id.date('H-i-s-d-m-Y').'.'.$last_ext;
						$target_path[$i]= $imagename;
						$loc = getcwd().'\img'.'\\'.$imagename;;
						if(move_uploaded_file($tmp_name[$i], 'img'.'\\'.$target_path[$i])){
							$count_moved++;
							
						}
					}
				}
			}if($count_moved==$count){
				$uploaded_image_all= implode(',', $target_path);
				$query="INSERT INTO items_basic (prod_id, fb_id, item, other_item, uploaded_image, offered_price, market_price, month, year, link, negotiable) VALUES  ('','$fb_id','$item','$other_item','$uploaded_image_all','$offered_price','$market_price','$month','$year','$link','$negotiable')";
				$query_run = mysqli_query($con,$query);

				if($query_run){
					echo "Congratulations item added";
					$_SESSION['prod_id']=mysqli_insert_id($con);
					$_SESSION['item']= $item;

					switch ($item) {
						case 'Book':
							header('Location: book.php');
							//echo $loc;
							break;
						case 'Mobile':
							header('Location: mobile,tablet.php');
							break;
						case 'Tablet':
							header('Location: mobile,tablet.php');
							break;
						case 'Laptop':
							header('Location: laptop.php');
							break;
						case 'Headphones':
							header('Location: headphones.php');
							break;
						case 'Charger':
							header('Location: headphones.php');
							break;
						case 'Powerbank':
							header('Location: headphones.php');
							break;
						case 'Cycle':
							header('Location: cycles.php');
							break;
						case 'Camera':
							header('Location: headphones.php');
							break;
						case 'Calculator':
							header('Location: headphones.php');
							break;
						case 'Furniture':
							header('Location: furniture.php');
							break;
						case 'Sports Equipment':
							header('Location: sportsequipment.php');
							break;
						case 'Musical Instrument':
							header('Location: musicalinstruments.php');
							break;
						case 'Other':
							header('Location: others.php');
							break;
									
					}
				}else{
					echo mysqli_error($con);
				}
			}
		}
	}else{
		
	}
	
?>