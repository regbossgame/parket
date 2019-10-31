<?
function htmlSubstr($html, $length)
{
    $out = '';
    $arr = preg_split('/(<.+?>|&#?\\w+;)/s', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    $tagStack = array();
    for($i = 0, $l = 0; $i < count($arr); $i++) {
        if( $i & 1 ) {
            if( substr($arr[$i], 0, 2) == '</' ) {
                array_pop($tagStack);
            } elseif( $arr[$i][0] == '&' ) {
                $l++;
            } elseif( substr($arr[$i], -2) != '/>' ) {
                array_push($tagStack, $arr[$i]);
            }
            $out .= $arr[$i];
        } else {
            if( ($l += strlen($arr[$i])) >= $length ) {
                $out .= substr($arr[$i], 0, $length - $l + strlen($arr[$i]));
                break;
            } else {
                $out .= $arr[$i];
            }
        }
    }
    while( ($tag = array_pop($tagStack)) !== NULL ) {
        $out .= '</' . strtok(substr($tag, 1), " \t>") . '>';
    }
    return $out;
}


function obrez($str,$kolko){

$str=str_replace("   "," ",$str);
$str=str_replace("  "," ",$str);
$str=str_replace("  "," ",$str);
$str=str_replace("  "," ",$str);


$rm="";
for ($ij=0;$ij<($kolko-2);$ij++){

$rm.=$str[$ij];
}
if (strlen($str)>=$kolko){$rm.="..";}

return $rm;
}


function trans($str)
{
    $tr = array(
        "À"=>"A","Á"=>"B","Â"=>"V","Ã"=>"G",
        "Ä"=>"D","Å"=>"E","¨"=>"IO","Æ"=>"J","Ç"=>"Z","È"=>"I",
        "É"=>"Y","Ê"=>"K","Ë"=>"L","Ì"=>"M","Í"=>"N",
        "Î"=>"O","Ï"=>"P","Ð"=>"R","Ñ"=>"S","Ò"=>"T",
        "Ó"=>"U","Ô"=>"F","Õ"=>"H","Ö"=>"TS","×"=>"CH",
        "Ø"=>"SH","Ù"=>"SCH","Ú"=>"","Û"=>"YI","Ü"=>"",
        "Ý"=>"E","Þ"=>"YU","ß"=>"YA","à"=>"a","á"=>"b",
        "â"=>"v","ã"=>"g","ä"=>"d","å"=>"e","¸"=>"io","æ"=>"j",
        "ç"=>"z","è"=>"i","é"=>"y","ê"=>"k","ë"=>"l",
        "ì"=>"m","í"=>"n","î"=>"o","ï"=>"p","ð"=>"r",
        "ñ"=>"s","ò"=>"t","ó"=>"u","ô"=>"f","õ"=>"h",
        "ö"=>"ts","÷"=>"ch","ø"=>"sh","ù"=>"sch","ú"=>"y",
        "û"=>"yi","ü"=>"","ý"=>"e","þ"=>"yu","ÿ"=>"ya",
		"¹"=>"Num","+"=>"Plus","&"=>"And"
    );
	$str=strtr($str,$tr);
//	$str = preg_replace('~[^-a-z0-9_]+~u', '_', $str);
	$str = str_replace('""', '"', $str);
	$str = str_replace('"', '-', $str);
	$str = str_replace("''", "'", $str);
	$str = str_replace("'", '-', $str);
	
	
	$str = str_replace('|', '-', $str);
	$str = str_replace('%', '-', $str);
	$str = str_replace('*', '-', $str);
	$str = str_replace('?', '-', $str);
	$str = str_replace('#', '-', $str);
	$str = str_replace('<', '-', $str);
	$str = str_replace('>', '-', $str);
	$str = str_replace('`', '-', $str);	
	$str = str_replace('@', '-', $str);
	$str = str_replace(':', '-', $str);
	$str = str_replace(';', '-', $str);
	$str = str_replace('^', '-', $str);
	$str = str_replace('.', '-', $str);
	$str = str_replace(',', '-', $str);
	$str = str_replace('=', '-', $str);
	$str = str_replace('»', '-', $str);
	$str = str_replace('«', '-', $str);
	$str = str_replace('!', '', $str);
	
	
	
	
	$str = str_replace('  ', '-', $str);
	$str = str_replace('/', '-', $str);
	$str=str_replace("\\", "-", $str);
	
	$str = str_replace(' ', '-', $str);
	//$str = str_replace('.', '-', $str);
	$str = str_replace(',', '-', $str);
	$str = str_replace('(', '-', $str);
	$str = str_replace(')', '-', $str);

	
	$str = str_replace("---", '-', $str);
	$str = str_replace("--", '-', $str);
	$str = str_replace("--", '-', $str);
	$str = str_replace("--", '-', $str);

	$str = str_replace("_-", '_', $str);
	$str = str_replace("-_", '_', $str);
	$str = str_replace("___", '_', $str);
	$str = str_replace("__", '_', $str);
	$str = str_replace("__", '_', $str);
	
	

	//$str=preg_match("/^[A-z]+$/ui", $str);
	
    $str = trim($str, "-");
    return $str;
    
}
?>