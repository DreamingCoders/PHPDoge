<?php 
namespace Doge;

/**
 * Compiler interface
 * 
 * @package phpdoge
 */
 
interface Compiler {
    
    /**
     * @param array $grammar
     */
    public function __construct ($grammar);
    
    /**
     * @param array $tokens
     * @return string
     */
    public function compile ($tokens);
    $tokens = isset($_POST['tokens']);
}


if(!$tokens){
  echo"Foobar";
}
