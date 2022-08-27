<?php
$str1 = 'Đào tạo lập trình';
$str2 = ' PHP';
//Nối và hiẻn thị
echo $str1.$str2.'<br/>';
$str = $str1.$str2;
echo $str;
echo '<br/>';
$str = 'Trung tâm '.$str1.$str2;
echo $str;
echo '<br/>';

$str = "Trung tâm $str1 tại Hà Nội";
echo $str;
echo '<br/>';
echo '<br/>';
$url = 'https://www.facebook.com/';
$htmlOutput = '<a href="'.$url.'"> <img src="https://image.thanhnien.vn/w2048/Uploaded/2022/tmuitb/2022_08_10/2-203.jpg" alt=""></a>
';
echo $htmlOutput;