<?php
function addTitle ($person1, $person2, $person3, $person4) {
  echo "Mr. $person1 ,Mr. $person2 ,Mr. $person3 ,Mr. $person4 ,";
}
addTitle('aliah','aliah','aliah','aliah');
function changeSpacesWith ($str, $to) {
$ganti = str_replace(" ", $to , $str);
echo $ganti;
}
changeSpacesWith ("\naliah iskandar","+");
function cutString ($str) {
echo "\n$str[0]$str[1]$str[2]$str[3]$str[4]$str[5]";
}
cutString("Aliah Iskandar");
?>