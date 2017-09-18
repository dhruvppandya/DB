<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='text.css' rel='stylesheet' type='text/css'>
<title>Image transactions</title>
<!--<style>
	.imageform{
	
		border:2px solid;
		padding:35px solid;
		width:80%;
		height:20%;
		
	}

</style> !-->
	
 <div class="form-style-10">
<h1 align="center">Imagebook <span> An Exploit Directory </span></h1>   
</head>

<body>
<form  class="imageform" action="upload.php" method="post" name="readfile"  enctype="multipart/form-data">
 


		<table cellpadding="10" align="center" rules="all" frame="box">
			<tr>
				<td colspan="2">
					<h3>
						<table cellpadding="10" align="center" rules="all" frame="box">
			<tr>
				<td colspan="2">
					<div class="section"><span>1</span>Upload Your Image Here</div>
    <div class="inner-wrap">
<label>Upload Image File Here(<1MB)<br><br /><input type="file" name="fileupload" /></br></label>

				</td>
			</tr>
			<tr>
					</h3>
				</td>
			</tr>
			<tr>
				<td>
                <div class="section"><span>2</span>Upload Detail TXT file</div>
    <div class="inner-wrap">
<label for="txt-file">Open File(*.txt):<br><br /><input type="file" name="file1" /></br></label>
					
				</td>
				
			</tr>
			<tr valign="top">
				<td>
                <div class="section"><span>3</span>Select TXT categorization</div>
    <div class="inner-wrap">
					<label>Field Terminated By:</label><br /><!--what character to terminate as column into table-->
				
				
					<input type="radio" name="deli" value=";" />Simicolum<br /><!--terminated by simicolum-->
					<input type="radio" name="deli" value="	" />Tab<br /><!--terminated by tab-->
					<input type="radio" name="deli" value="," />Comma<br /><!--terminated by comma-->
					<input type="radio" name="deli" value="|" />Herizontal Bar<br /><!--terminated by herizontal bar-->
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
                 <div class="button-section">
     
					<input type="submit" name="submit" value="Submit"><!--button to submit the form to read data from the file-->
				</td>
			</tr>
		</table>
		</form>

</body>
</html>
 