<?
include "cook_life.php";

include "conf_bd.php";

include "fire.php";
if ($ok==1){


if ((isset($_SESSION["log"]))&&($_SESSION['adm']>0)){

echo "<a href='admin.php'>� �������</a>\n";

$modif="content";

	$sPath = $modif.'/'; 
	$dDir = opendir($sPath); // ��������� ����������, $dDir - ���������� 
	//$aFileList = array(); // ������ � ������� ����� ���������� ����� ������ 
	$i=0;
	echo "<ul>";
	// ���� ���������� ���������� 
	while ($sFileName=readdir($dDir)) 
	{ 
	if ($sFileName!='.' && $sFileName!='..') 
	{ 
	$i++;
	echo "<li><a href='edit_str.php?str=".$modif."/".$sFileName."'>".$sFileName."</a></li>";
	} 
	} 
	closedir ($dDir); 
echo "</ul>";
// ������� ���������� ������ 
//$kslides=count($slides); 
}else{echo "�� �����!";}
}

include "delka.php";

?>