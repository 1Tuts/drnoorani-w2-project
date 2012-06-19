<?php 
	get_header();
	
?>

<div class="container contact">
    <div class="w24 us">
    
		<div class="mail w11 ">
            <div class="title w10"><span>ارتباط باما</span></div>
                <form class="frm" action="mail.php" method="post" name="frm_mail">
                    <table border="1">
                        <tr><td><input name="email" type="text" value="ایمیل" size="64"/></td></tr>
                        <tr><td><input name="subject" type="text" value="عنوان" size="64"/></td></tr>
                        <tr><td><textarea cols="50" rows="11" name="msg">پیام</textarea></td></tr>
                        <tr>
                        <td><input type="submit" value="ارسال ایمیل" class="ok"><input type="submit" value="تنظیم مجدد"></td>
                        </tr>
                    </table>
                </form>
            </div>
            
            
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
    
    </div>
</div>

</body>
</html>