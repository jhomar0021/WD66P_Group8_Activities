<?php
  $item1 = 100;
  $item2 = 200;
  $item3 = 300;
  
	echo getGroceryItem("Item 1", 3, $item1);
	echo getGroceryItem("Item 1", 5, $item1); 
	echo getGroceryItem("Item 2", 5, $item2); 
	echo getGroceryItem("Item 1", 50, $item1); 
	echo getGroceryItem("Item 3", 5, $item3);

	
	function getGroceryItem($item, $qty, $stockqty){
	  global $item1, $item2, $item3;
	  if ($stockqty == $item1){
	    $stockqty = $item1 - $qty;
	    $item1 = $stockqty;
	    return "$item - ($qty) qty | Remaining Stocks = $stockqty \n";
	  }
	  if ($stockqty == $item2){
	    $stockqty = $item2 - $qty;
	    $item2 = $stockqty;
	    return "$item - ($qty) qty | Remaining Stocks = $stockqty \n";
	  }
	  if ($stockqty == $item3){
	    $stockqty = $item3 - $qty;
	    $item3 = $stockqty;
	    return "$item - ($qty) qty | Remaining Stocks = $stockqty \n";
	  }
	  
	}
?>