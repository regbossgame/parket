<?
include "cook_life.php";

include "conf_bd.php";

include "fire.php";
if ($ok==1){


if ((isset($_SESSION["log"]))&&($_SESSION['adm']>0)){

echo "<a href='admin.php'>� �������</a>\n";

$modif=$_GET['bd'];
if ($modif=='images'){
	echo "<h2>����� �������� �����</h2>\n";
}

if ($modif=='slides'){
	echo "<h2>������� ����� (����)</h2>\n";
}


if ($modif=='images2'){
	echo "<h2>Wiki ���� ��������</h2>\n";
}


echo "<form enctype='multipart/form-data' action='upload1.php' method='post'>
<input type='hidden' name='MAX_FILE_SIZE' value='9990000'>
<input type='hidden' name='mod' value='".$modif."'>
<font class='txtc'>���������<br>����������:</font>
<br><input name='userfile' type='file'\">
<input type='submit' value='���������'>
</form>\n";

echo "<form action='powerimas.php' method='POST'>\n";

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
	//$slid[]=$sFileName;
	if ($_GET['bd']!='slides'){echo "<div style='float:left;border:1px solid;'><br>";}else{echo "<div style='border:1px solid;'><br>";}
	echo "�������<input type='checkbox' name='ima_".$i."' value='".$modif."/".$sFileName."'/>
	<input type='text' onclick='this.select();' value='".$hostname."/".$modif."/".$sFileName."' style='width:320px;'/><br><a href='#' onclick=\"delka('".$modif."/".$sFileName."');\" style='position:absolute;background:#FFFFFF;'>[�������]</a>
	<img src=\"".$modif."/".$sFileName."?rnd=".rand(100000,9999999)."\" width=";
	if ($_GET['bd']=='slides'){echo "350";}else{echo "280";}
	echo "px border=1/></div>\n";
	} 
	} 
	closedir ($dDir); 

echo "<input type='hidden' name='cou' value='".$i."'/>
<div style='float:left;'><hr><input type='submit' value='�������� ��������� �������' name='sub0'/><br></div>
<br>
</form>";
	
// ������� ���������� ������ 
//$kslides=count($slides); 
}else{echo "�� �����!";}
}

include "delka.php";
?>