<?php
require_once('proxy.php');

@$keyword =  strip_tags($_POST['keyword']);
if(!empty($keyword)){
	$d = new Proxy("https://api.homedepot.com/SearchNav/v2/pages/search?channel=mobileconsumer&key=MtNfr9rEWkRsxkc71IdtDBAp7E2p8GSy&keyword=$keyword","65.115.61.3:3128");
}else{
	$d = new Proxy("https://api.homedepot.com/SearchNav/v2/pages/search?channel=mobileconsumer&key=MtNfr9rEWkRsxkc71IdtDBAp7E2p8GSy&keyword=iphone","65.115.61.3:3128");
}
	
echo $d->getData();


?>

