<?php 
namespace Doge;

if(isset($_POST['tokens'])){
 $tokens = htmlentities($_POST['tokens']);
}else{
 exit();
}
