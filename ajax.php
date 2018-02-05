<?php 
if (isset($_POST['filename'])) {
    if(is_file("listafile/".$_POST['filename'])){
       if (unlink("listafile/".$_POST['filename'])) {
         echo "success";
       }
     }else{
        echo "there is no file found (". $_POST['filename'].")";
    }
}
?>