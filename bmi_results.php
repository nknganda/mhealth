<?php echo '<?xml version="1.0"?'.'>';?>
<?php
$weight=$_GET['weight'];
$height=$_GET['height'];
$bmi=(($weight * 703) / ($height * $height));
?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.3//EN" "http://www.wapforum.org/DTD/wml13.dtd">
<wml>
<card id="rsults" title="Results">
 <p>
 	BMI: <?php echo $bmi; ?>
 </p>
</card>
</wml>
