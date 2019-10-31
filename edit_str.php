<?
include "cook_life.php";

include "conf_bd.php";

include "fire.php";
if ($ok==1){
$str=$_GET['str'];
$txt=file_get_contents($str);
echo "<a href='adm_str.php'>Назад</a><br>
<form action='edit_opis.php' method='POST'>
<input type='text' name='fn1' value='$str'/>
<textarea name='txt1' id='txt1' style='width:900px;height:700px;'>$txt</textarea>

</form><h3><a href='ref.php' target='_blanc'>Пересчитать сайт!</a></h3>";

include "tiny.php";


}
?>