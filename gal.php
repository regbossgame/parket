<?

$dDir = opendir($sPath); // ��������� ����������, $dDir - ���������� 
//$aFileList = array(); // ������ � ������� ����� ���������� ����� ������ 

// ���� ���������� ���������� 
while ($sFileName=readdir($dDir)) 
{ 
if (($sFileName!='.') && ($sFileName!='..') && ((strpos($sFileName,".jpg")>0) || (strpos($sFileName,".JPG")>0)))
{ 
$txt.='<a href="'.$sPath.''.$sFileName.'" rel="lightbox[plants]"><img src="'.$sPath.'mini/'.$sFileName.'" width=159px height=120px " /></a>';
$txt.="\n";
} 
} 

closedir ($dDir); 

//if ($sFileName==""){$sPath="res";$sFileName="nofoto.jpg";}

?>

