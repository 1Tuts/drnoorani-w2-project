<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>dr noorani</title>
</head>

<body>
<?php
	if ( isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg']) ){
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];
		if( @mail('dr noorani@gmail.com',$subject,"\n" .$msg,"From:info@user.com\r\nReply-To:".$mail) ){
			echo '<h1 style="text-align:center;">Your massage has been sent. Please be patient for the answer. thank you!</h1>';
		}else{
			echo '<h1 style="text-align:center;">Your massage has not been sent. Please fill the form again. thank you!</h1>';
		}
	}
?>


</body>
</html>