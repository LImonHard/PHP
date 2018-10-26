
<form method="get" action="index.php">
<input type="text" value="" name="name">
<input type="submit" name="but" value="Жми">
</form>
<?php 
if ( isset($_GET['but']) )
{
	$data=$_GET;

$pic='ПРиВет '.$data['name'].'<br><img src="bg.jpg" alt="">';
echo $pic;
 echo "string";


}
?>