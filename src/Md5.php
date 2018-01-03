<?php
namespace Xdms\Md5;
class Md5{
	public function make( $password){
		return md5(md5($password));
	}
	public function check( $password,$value){
		return md5(md5($password)) === $value;
	}
}   
?>
