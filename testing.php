<?php 

	if(isset($_POST['read'])){//check if button have been click or not
		mysql_connect('localhost','root','') or die('could not connect to database'.mysql_error());//connection to database server
		//mysql_connect(servername,username,password)
		mysql_select_db('image');//select database
		//mysql_select_db(databasename);
		$terminated=$_POST['deli'];//get the value of terminated character from a form with post method
		$file_type=$_FILES['file1']['type'];//get file type of selected file to read
		$allow_type=array('text/plain');//allow only file that have extesion with .txt
		$fieldall="";
		if(in_array($file_type,$allow_type)){//check if selected file type is match to the allow file type we have defined
		  move_uploaded_file($_FILES['file1']['tmp_name'],"files/".$_FILES['file1']['name']);//move file to specifice directory to be read 
		  $file=fopen("files/".$_FILES['file1']['name'],"r") or die ("Unable to open file!");//open file to read
		  $tru="truncate table image_table";//query string to truncate table(clear all data from table) 
		  mysql_query($tru) or die(mysql_error());//execute query to delete all data from table
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
		  $values=str_replace($terminated,"','",$line);//we use str_replace to replace the character we want to terminated to seperate the table columns
		  $sql="insert into upload_test values('$values')";//query string
		  mysql_query($sql);//execute query insert data to database
		}
		fclose($file);//close the file after read
		unlink("files/".$_FILES['file1']['name']);//delete selected file after read to free up space
		//or you can move it to backup table is fine
		}else{
			echo "Please select only text file(.txt file is recomended)!";	
			//if file type doesn't allow we will return this message
		}
	}
?>
