<?
$path=dirname(dirname(dirname(__FILE__)));
file_put_contents("master.zip", 
    file_get_contents("https://github.com/developandplay/chat/archive/master.zip")
);
$zip = new ZipArchive;
$res = $zip->open("master.zip");
if ($res === TRUE) {
  $files = glob($path); // get all file names
  foreach($files as $file){ // iterate files
    if(is_file($file))
      unlink($file); // delete file
  }
  $zip->extractTo($path);
  $zip->close();
  unlink("master.zip");
  echo 'Update successfull!';
} else {
  echo 'Update failded!';
}
?>
