<?
include "cook_life.php";

include "conf_bd.php";

include "fire.php";
if ($ok==1){


if ((isset($_SESSION["log"]))&&($_SESSION['adm']>0)){
$modif="docs";
echo "<a href='admin.php'>� �������</a>\n";

echo "<h1>���������</h1><form enctype='multipart/form-data' action='upload2.php' method='post'>
<input type='hidden' name='MAX_FILE_SIZE' value='9500000'>
<input type='hidden' name='mod' value='".$modif."'>
<font class='txtc'>���������<br>��������:</font>
<br><input name='userfile' type='file'\">
<input type='submit' value='���������'>
</form>";



	$sPath = $modif.'/'; 
	$dDir = opendir($sPath); // ��������� ����������, $dDir - ���������� 
	//$aFileList = array(); // ������ � ������� ����� ���������� ����� ������ 
	$i=0;
	// ���� ���������� ���������� 
	while ($sFileName=readdir($dDir)) 
	{ 
	if ($sFileName!='.' && $sFileName!='..') 
	{ 
	$i++;
	echo "<div>$i) <input type='text' onclick='this.select();' value='".$modif."/".$sFileName."' style='width:320px;'/><br>[<a href='#' onclick=\"delka('".$modif."/".$sFileName."');\">X</a>] - <a href='".$modif."/".$sFileName."' target='_blank'>'".$sFileName."'</a></div><br>\n";
	} 
	} 
	closedir ($dDir); 

// ������� ���������� ������ 
//$kslides=count($slides); 
}else{echo "�� �����!";}
}

include "delka.php";

?>