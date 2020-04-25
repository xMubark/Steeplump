<?php
$fullname = $_POST['fullname']; //هذا الكود الخاص بتعريف مدخل الاسم بالكامل
$number =  $_POST['number'];
$send = "yousfmefreh@gmail.com";//دالة خاصة بالبريد الذي سوف يتم الارسال له
$msg .="-----بيانات المريض-----\r\n";
$msg .="الاسم | ".$fullname."\r\n\r";
$msg .=" رقم المدني  | ".$number."\r\r\n " ;
$header = 'Extra-theme' . "\r\n\r";
mail($send,$subject,$msg,$header);
echo "<META http-equiv=\"refresh\" content=\"0;URL=call.html\">";