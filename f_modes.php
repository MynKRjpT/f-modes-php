<?php

//This is use for see or read the file
// readfile("abc.txt");


//To open file in mode--Open , file pointer
 $fptr = fopen("abc.txt" , "r");




 //open file line by line or one line by fgets mode
//  echo fgets($fptr);


 //open fulll file fgets loop method
// while($a=fgets($fptr)){
//     echo $a;
// }




//to open file in read mode --file pointer
// while($a=fread($fptr , filesize("abc.txt"))){
//     echo $a;
//     break;
// }


// open file in one character by getc method
// echo fgetc($fptr);



//to open full file in getc mode --
while($a = fgetc($fptr)){
    echo $a;

}
fclose($fptr);

?>


