<?php

class RpcController {
	public static function handleRequest($name){
		$key = $_POST['key'];
		$args = $_POST['args'];

		$server = new RpcServer();
		$server->addKey("oK4EhqgDip71Fjo2sJTo6iv27ikG0GHK");
		$server->handleRequest($key, $name, unserialize($args));
	}
}