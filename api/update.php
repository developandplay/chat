<?
file_put_contents("master.zip", 
    file_get_contents("https://github.com/developandplay/chat/archive/master.zip")
);
$zip = new ZipArchive;
$res = $zip->open("master.zip");
if ($res === TRUE) {
  $zip->extractTo(dirname(__FILE__),2);
  $zip->close();
  unlink("master.zip");
  echo 'Update successfull!';
} else {
  echo 'Update failded!';
}
?>
