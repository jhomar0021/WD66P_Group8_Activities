<?php

  $item1 = 100;
  $item2 = 200;
  $item3 = 300;
  

echo getTotalStock(2,$item1);
echo getTotalStock(2,$item1);
echo getTotalStock(2,$item1);
echo getTotalStock(2,$item2);
echo getTotalStock(5,$item3);

function getTotalStock($qty,$item){
  global $item1;
  global $item2;
  global $item3;
  
    if ($item == $item1){
      $item1 = $item - $qty;
  
      echo "item 1 - ($qty) qty | Remaining stocks = $item1";
      echo "\n";
    }
    else if ($item == $item2){
      $item2 = $item - $qty;
  
      echo "item 2 - ($qty) qty | Remaining stocks = $item2";
      echo "\n";
    }
    else if ($item == $item3){
      $item3 = $item - $qty;
  
      echo "item 3 - ($qty) qty | Remaining stocks = $item3";
      echo "\n";
    }
    else {
      echo "No Changes";
      echo "\n";
    }
    
}

?>