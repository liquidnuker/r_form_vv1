<?php 
class Uploader {
  function uploadImage($file, $folder) {
    $path = $folder;
    $path = $path . basename( $file['name']);
    if(move_uploaded_file($file['tmp_name'], $path)) {
      echo "The file ".  basename( $file['name']).
      " has been uploaded";

      // dimensions
      $dimensions = getimagesize($path);
      echo "width" . $dimensions[0] . "height" . $dimensions[1]; 

      // size
      echo filesize($path); // ok
      // echo FileSizeConvert(filesize($path)); 
    } else {
      echo "There was an error uploading the file";
    }
  } 
}

?>