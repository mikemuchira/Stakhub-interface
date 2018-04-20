<?php
if(isset($_FILES["uploadfile"]["name"])){
        $name = $_FILES["uploadfile"]["name"];
        $ext  = @end(explode(".", $name));

             $new_image = '';
             
             $path = '/home/cyber-root/server-uploads/'.$name;
               
           if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $path)) {
              
          header('Location: ../index.php?page=upload-success');
              
    }else{
          header('Location: ../index.php?page=upload-warning');
      }
      
    }
?> 