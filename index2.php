<?php
#$token = "1069781985:AAGSkPcrfK52v3AK1ZP_znDVh6NxSviB1VA"
#$chat = "-353093420"
#https://api.telegram.org/bot1069781985:AAGSkPcrfK52v3AK1ZP_znDVh6NxSviB1VA/sendMessage?chat_id=-353093420&text=Omega+LUL
if(isset($_POST['button'])){
    $first = $_POST['first'];
    echo "<script language='JavaScript' type='text/javascript'>fetch('https://api.telegram.org/bot1069781985:AAGSkPcrfK52v3AK1ZP_znDVh6NxSviB1VA/sendMessage?chat_id=-353093420&text=$first')</script>";
} 
?>
<!DOCTYPE html>
<html>
<head><title>Telegram</title></head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="first">
    <button type="submit" name="button" formmethod="post">Send Message</button>
</form>
</body>
</html>