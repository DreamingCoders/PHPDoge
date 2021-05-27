<?php
//require

$globalConnection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'password');

//pdo oo connection to database
class sqlmain{

}

class shibesql extends sqlmain{
pubic function shibeSql(){ //experimental approach. those who fork please look into the security aspects of this function
return $globalConnection;
}
//$globalConnection

//$globalConnection->exec('INSERT INTO `very` VALUES (1, "somevalue"');


}

}

$walletId = md5(uniqid("param"));

shibeSql()->prepare("SELECT * FROM `wallets` WHERE `id` = :id");
shibeSql()->bindParam(":id", $walletId, PDO::PARAM_INT);
  shibeSql()->execute();

?>
