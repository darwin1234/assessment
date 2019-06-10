<?php 
//API KEY MtNfr9rEWkRsxkc71IdtDBAp7E2p8GSy

class Proxy {
	
	private $homeDepotData;
	function __construct($url, $proxy)
	{
		$this->execute($url, $proxy);
	}
	public function execute($url, $proxy){
		
			$ip = explode(':' , $proxy);
			$ch = curl_init();
			//  Initiate curl
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_PROXY,$ip[0]);
			curl_setopt($ch, CURLOPT_PROXYPORT,$ip[1]);
	
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			//curl_setopt($ch, CURLOPT_HEADER, 1);

			
			// Execute
			$result=curl_exec($ch);
			// Closing
			curl_close($ch);

			$this->homeDepotData = $result;
			
			

	}
	
	public function getData(){
		return $this->homeDepotData;
	}
}