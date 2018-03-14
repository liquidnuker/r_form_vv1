<?php 
require "./vendor/gump.class.php";
// var_dump($_FILES);
// var_dump($_POST);
// echo $_FILES['f_file']['name']; 

// $validator = new GUMP();

// // Set the data
// $_POST = array(
//   'email' => $_POST['f_email'],
// );

// $_FILES = array(
//   'file' => $_FILES['f_file'],
// ); 

// // You don't have to sanitize, but it's safest to do so.
// // $_POST = $validator->sanitize($_POST); 
// $_POST = $validator->sanitize(array_merge($_POST,$_FILES)); 

// // Let's define the rules and filters
// $rules = array(
//   'email' => 'required|valid_email',
//   'file' => 'required_file|extension,png;jpg'
// );

// $filters = array(
//   'email' => 'trim|sanitize_email',
// );

// $_POST = $validator->filter($_POST, $filters);

// // You can run filter() or validate() first
// $validated = $validator->validate(
//   $_POST, $rules
// );

// // Check if validation was successful
// if($validated === TRUE) {
//   echo "Successful Validation\n\n";
//   print_r($_POST); // You can now use POST data safely
//   // echo $_POST['email'];
//   // echo $_POST['file']['name'];
  
//   exit;
// } else {
//   echo "invalid"; 
//   print_r($_POST); 
    
//   print_r($validated); // Shows all the rules that failed along with the data
// }

// upload,...
// if(!empty($_FILES['f_file'])) {
//   $path = "./uploads/";
//   $path = $path . basename( $_FILES['f_file']['name']);
//   if(move_uploaded_file($_FILES['f_file']['tmp_name'], $path)) {
//     echo "The file ".  basename( $_FILES['f_file']['name']).
//     " has been uploaded";

//     // dimensions
//     $dimensions = getimagesize($path);
//     echo "width" . $dimensions[0] . "height" . $dimensions[1]; 

//     // size
//     echo filesize($path); // ok
//     // echo FileSizeConvert(filesize($path)); 

//   } else {
//     echo "There was an error uploading the file";
//   }
// }





?>