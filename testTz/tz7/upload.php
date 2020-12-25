<?php
if(isset($_FILES['file'])) 
{
  if ($_FILES['file']['name'] !== '' && $_FILES['file']['error'] == 0) 
  {
    try 
    {
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fi = finfo_open(FILEINFO_MIME_TYPE);
      $mime = (string) finfo_file($fi, $fileTmpName);

      if (strpos($mime, 'text/plain') === false) 
        die('Можно загружать только изображения с расширениями json');

      if (!move_uploaded_file($fileTmpName, __DIR__ . '/upload/'.$_FILES['file']['name'])) 
      {
          throw new Exception('При загрузке изображения произошла ошибка на сервере!');
      }

      $file = 'upload/'.$_FILES['file']['name'];
      
      $data = file_get_contents($file);

      echo json_encode($data, JSON_FORCE_OBJECT);
    } 
    catch (Exception $e) 
    {
      die($e->getMessage());     
    }
  }
}
 
