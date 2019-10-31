<?
include "cook_life.php";

include "conf_bd.php";

include "fire.php";
if ($ok==1){


if ((isset($_SESSION["log"]))&&($_SESSION['adm']>0)){

echo "<a href='admin.php'>в админку</a>\n";

$modif="content";

	$sPath = $modif.'/'; 
	$dDir = opendir($sPath); // открываем директорию, $dDir - дескриптор 
	//$aFileList = array(); // массив в который будем записывать имена файлов 
	$i=0;
	echo "<ul>";
	// цикл считывания директории 
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
// подсчет количества файлов 
//$kslides=count($slides); 
}else{echo "Не вошёл!";}
}

include "delka.php";

?>