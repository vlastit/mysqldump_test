<?php
function power($x){

  if($x === 1){
    return $x;
  }

  return $x * power($x-1);

}

echo "\n". power(4);