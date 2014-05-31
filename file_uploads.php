<?php


$upload_errors = array(
    UPLOAD_ERR_OK => "Upload was successful.",
    UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize in php.ini.",
    UPLOAD_ERR_FORM_SIZE => "Larger than MAX_FILE_SIZE in form.",
    UPLOAD_ERR_PARTIAL => "Partial upload.",
    UPLOAD_ERR_NO_FILE => "No file.",
    UPLOAD_ERR_NO_TMP_DIR => "No temp directory.",
    UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
    UPLOAD_ERR_EXTENSION => "File upload stopped by extension."
);

$error = $_FILES['file_upload']['error'];
$message = $upload_errors[$error];

echo "<pre>";
print_r($_FILES['file_upload']);
echo "</pre><hr>";
echo $message;

if(isset($_POST['submit'])){
    $temp_file = $_FILES['file_upload']['tmp_name'];
    $tagert_file = basename($_FILES['file_upload']['name']);
    $upload_dir = "uploads";
    
    if(move_uploaded_file($temp_file, $upload_dir.'/'.$tagert_file)){
       $message = "File uploaded successfully."; 
    }
    else{
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error]; 
    }
}

?>

<html>
<?php if(!empty($message)) {echo "<p>{$message}</p>";} ?>
<form action="file_uploads.php" enctype="multipart/form-data" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <input type="file" name="file_upload" />
    <input type="submit" name="submit" value="Upload" />
    
</form></html>