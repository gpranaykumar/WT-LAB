<?php
 $file=fopen("d://output.txt","w");
 fwrite($file,"here we do WT Programs");
 fclose($file);
 echo "Successfully completed","<br>";
 
 $file=fopen("d://output.txt","r");
 $content=fread($file, filesize("d://output.txt"));
 echo $content;
 fclose($file);
 echo "Successfully completed","<br>";
 
 $file=fopen("d://output2.txt","a");
 fwrite($file,"This is program");
 fclose($file);
 echo "Successfully completed","<br>";
 
 $status = unlink("d://output.txt");
 if($status)
  {
   echo "File is deleted";
  }
   else
  {
    echo "File is not found";
  }
?>

output:
Successfully completed
here we do WT Programs Successfully completed
Successfully completed
File is deleted
