<?php
namespace prices\retail\controller;
use prices\retail\model as model;

class controller {
  public function execute() {
	  
	  
	/*$o = new \StdClass;access the standard php methods
	var_dump($o);*/

    switch ($_GET['action']) {
    case 'showItem' :
      $item = new model\Item();
      require "prices/retail/utility/format.php";//doesn't autoinclude due being a function
      require "prices/retail/view/item.php";//make this a class it would auto include, it's presented as HTML
      break;
    }
  }
}
?>