<?php
echo("<h3>Short FileName read</h3>");
$filename = explode(".",$_REQUEST["file"])[0].".php";
if($_REQUEST["file"] && (pathinfo($_REQUEST["file"])['extension']) == "php"){
		if(substr(md5($_REQUEST["file"]),0,8) == substr(md5("developers_mod_v7499.php"),0,8)) {
			echo("<pre>".htmlentities(file_get_contents($filename))."</pre>");
	}
}
else
{
echo("select file");
}
?>

<html>
<form>
<input type="text" name="file">
<input type="submit">
</form>
</html>
