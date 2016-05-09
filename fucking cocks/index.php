<?php
	  function autoLoader($className) {
	    include 'classes/'. $className. '.php';
	  }
	  spl_autoload_register('autoLoader');
	  $app = new app;
	?>