<?php
$otp=rand(000000,999999);
?>
<form action="otp.php" method="POST">
    <input type="number" name="otp" placeholder="Enter OTP" required>
    <input type="hidden" name="otp" value="<?php echo $otp;?>">
    <button type="submit">submit</button>
</form>