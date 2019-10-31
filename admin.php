<?
include "cook_life.php";

include "conf_bd.php";

$kpos=-1;
if ((isset($_SESSION["log"]))&&($_SESSION['adm']>0)){

echo "<h1>Админка</h1> <a href='index.html'>на сайт</a>
<ul>
<li><a href='adm_str.php'>Редактировать страницы</a></li>
<li><a href='adm_img.php?bd=images'>Общая база картинок</a></li>
<li><a href='adm_docs.php'>База документов</a></li>


<li><a href='ref.php' target='_blank'>Просчитать весь сайт</a></li>


</ul>";
/*

<li><a href='adm_img.php?bd=slides'>Галерея</a></li>
<li><a href='adm_bg.php'>Фон (бэкграунд)</a></li>
<li><a href='adm_img.php?bd=imgs'>Общая база картинок</a></li>
<li><a href='adm_csv.php'>Верхнее меню</a></li>
<li><a href='adm_docs.php'>База документов</a></li>

</ul>";

*/
//<li><a href='adm1.php'>добавить картинки к объекту (по номеру)</a></li>
//<li><a href='up_im.php'>добавились картинки по FTP</a></li>

}else{HEADER("LOCATION: loginka.php");}



?>