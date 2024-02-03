<?php


// to open a file in write this will overwrite the old file or start from begining
//  $fptr = fopen("abc2.txt" , "w");

//  fwrite($fptr , "This is first \n");
//  fwrite($fptr , "This is second \n");
//  fwrite($fptr , "This is first \n");
 
$fptr = fopen("abc2.txt" , "a");
fwrite($fptr , "This is appended data");
fclose($fptr);

?>