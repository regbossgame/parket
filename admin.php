<?
include "cook_life.php";

include "conf_bd.php";

$kpos=-1;
if ((isset($_SESSION["log"]))&&($_SESSION['adm']>0)){

echo "<h1>�������</h1> <a href='index.html'>�� ����</a>
<ul>
<li><a href='adm_str.php'>������������� ��������</a></li>
<li><a href='adm_img.php?bd=images'>����� ���� ��������</a></li>
<li><a href='adm_docs.php'>���� ����������</a></li>


<li><a href='ref.php' target='_blank'>���������� ���� ����</a></li>


</ul>";
/*

<li><a href='adm_img.php?bd=slides'>�������</a></li>
<li><a href='adm_bg.php'>��� (���������)</a></li>
<li><a href='adm_img.php?bd=imgs'>����� ���� ��������</a></li>
<li><a href='adm_csv.php'>������� ����</a></li>
<li><a href='adm_docs.php'>���� ����������</a></li>

</ul>";

*/
//<li><a href='adm1.php'>�������� �������� � ������� (�� ������)</a></li>
//<li><a href='up_im.php'>���������� �������� �� FTP</a></li>

}else{HEADER("LOCATION: loginka.php");}



?>