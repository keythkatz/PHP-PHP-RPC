# PHP-PHP-RPC
PHP to PHP RPC on Prairie

* Copy RpcClient.php to wherever you want to call from
* From anywhere in your client:

```php
  $client = new RpcClient("path.to.server", "randomKeyToUseForAuth");
  $client->doSomething($optional, $vars); // This calls doSomething() on the server
```
* On the server, RpcController.php, change the key to whatever you set and optionally add more to allow more than one valid key
* In RpcServer.php, change doSomething to any function name and signature, and do whatever with it. Keep it private so it doesn't clog up your IDE.
