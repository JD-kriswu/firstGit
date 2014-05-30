<?php


abstract class flex_hash{

	public abstract function _hash($hashKey);

}


class md5Hash extends flex_hash{

	public function _hash($hashKey){

		return substr(md5($hashKey), 0,8);
	}
}


class crc32Hash extends flex_hash{

	public function _hash($hashKey){
		return substr(crc32($hashKey), 0,8)
	}
}

class ConstentHash{



	public function __construct(){

		
	}
	$vcount ;

	$targetToPosition = array();

	/**default md5*/
	public function getHashValueByMethod($method = 'md5',$hashKey){

		if(empty($method)|| empty($hashKey)){

			return false;
		}

		if($method == 'crc32'){

			return 
		}
	}



}
?>
