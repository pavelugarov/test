<?php  
header('Content-type: text/html; charset=windows-1251');
$str = urldecode($_GET['string']);
$str = iconv("UTF-8", "WINDOWS-1251", $str);
echo getPalindromes($str);
function getPalindromes($str) {
	$result = null;
	$minStringLengthPalindrom = 3;
	$maxStringLengthPalindrom = strlen($str);
	for ($s=$minStringLengthPalindrom; $s<=$maxStringLengthPalindrom; $s++) {
		for ($i=0; $i<strlen($str)-$s+1; $i++) {
			$curString = substr($str, $i, $s);
			if (isPalindrom($curString)) {
				$result .= "/$curString"; 				
			}
		}
	}
	if (is_null($result)) $result = "No palindroms";
	return $result;
}
function isPalindrom($str) {
	return strcmp(strrev($str), $str) == 0; 
}	
?>
