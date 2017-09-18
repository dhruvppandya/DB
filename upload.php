
<?php

if(isset($_POST['submit'])){
	
	include'connect.php';
	
	$filename = $_FILES['fileupload']['name'];
	$filename1 = $_FILES['file1']['name'];
	$filetmp = $_FILES['fileupload']['tmp_name'];
	$filetmp1 = $_FILES['file1']['tmp_name'];
	$filesize = $_FILES['fileupload']['size'];
	$file_basename = basename($_FILES['fileupload']['name']);
	$file_basename1 = basename($_FILES['file1']['name']);
	
	$dir = "upload/";
	$final_dir = $dir.$file_basename;
	$final_dir1 = $dir.$file_basename1;
	
	




/* image_name= "$file_basename";
	image_path ="$file_dir";

*/
	  

	$terminated=$_POST['deli'];//get the value of terminated character from a form with post method
	$file_type=$_FILES['file1']['type'];//get file type of selected file to read
		$allow_type=array('text/plain');//allow only file that have extesion with .txt
		$fieldall="";
		if(in_array($file_type,$allow_type)){//check if selected file type is match to the allow file type we have defined
		move_uploaded_file($filetmp1,"$dir".$filename1);
		  $file=fopen("$dir".$filename1,"r") or die ("Unable to open file!");//open file to read
		 while(!feof($file)){
	$line = fgets($file);
	$values=str_replace($terminated,"','",$line);
	$select_query = "INSERT	INTO image_table(image_name,image_link,target_name,target_MAC,target_IP) VALUES('$file_basename','$final_dir','$values')";
		$selected = mysqli_query($connect,$select_query);
		echo(move_uploaded_file($filetmp,$final_dir));
		if($filesize > 1024000){
			echo("Greater then expected");
			}
				







/*if($selected){
	
	echo("Operation successful");
	
	}
else{
	echo("No No No ...");
	}*/

		
		/*$file_type=$_FILES['file1']['type'];//get file type of selected file to read
		$allow_type=array('text/plain');//allow only file that have extesion with .txt
		$fieldall="";
		if(in_array($file_type,$allow_type)){//check if selected file type is match to the allow file type we have defined
		  $file=fopen("$dir".$filename1,"r") or die ("Unable to open file!");//open file to read
	
		  while(!feof($file)){//check if not yet end of files while reading data
		  $line = fgets($file);//get data from selected file
		  /*for($i=0;$i<=count($str)-1;$i++){
			$val[$i] = ",'".$str[$i]."'";
			if($i==0){
				$fieldf = substr($val[$i],-(strlen($val[$i])-1));
				$sql1="insert into upload_test(name) values($fieldf)";//query string
			}else{
				$fieldall=$val[$i];
				$sql="insert into upload_test(address,phone) values($fieldall)";//query string
				echo $fieldall;
			}
			
		  }*/
		/* $values=str_replace($terminated,"','",$line);//we use str_replace to replace the character we want to terminated to seperate the table columns
		  $sql="insert into image_table(target_name,target_MAC,target_IP) values('$values')";//query string
		  $select3 = mysqli_query($connect,$sql);//execute query insert data to database */
		}
		fclose($file);//close the file after read
		unlink("$dir".$filename1);//delete selected file after read to free up space
		//or you can move it to backup table is fine
		}
		
		else{
			echo "Please select only text file(.txt file is recomended)!";	
			//if file type doesn't allow we will return this message
	
		}
		
		
		
		
	}

?>



