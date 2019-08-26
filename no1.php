<?php
$nilai="20";
if($nilai>=80 && $nilai<=100){
echo "A";
}
else if($nilai>=65 && $nilai<=79){
 echo "B";
 }
else if($nilai>=50 && $nilai <=64){
echo "C";
}
else if($nilai>=35 && $nilai<=49){
  echo "D";
}
else if($nilai>=0 && $nilai <=35){
echo "E";
}
else{
  echo"Masukkan angka dengan benar";
}
	
?>