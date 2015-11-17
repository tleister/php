<?php
if (isset($_POST['submit'])){
$myfile = fopen("files/test.txt", "w+") or die ("Something went wrong");
$data = $_POST['data'] . "\n";
fwrite($myfile,$data );
}
?>



<form method="post" action="fileappend.php">
File: <select name="filename">
<?php
$folder = "files/";
$filelist = scandir($folder);
foreach ($filelist as $val){
	echo "<option value ='$val'>$val</option>";
	echo"<br>";
}
?>
<select>
Data:<input type="text" name="data">
<br>
<input type="submit" name="submit" value="submit">
</form>