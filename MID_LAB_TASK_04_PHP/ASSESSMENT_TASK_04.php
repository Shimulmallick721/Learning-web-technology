<?php
      $n1=12;
      $n2=28;
      $n3=44;
      if($n1>$n2 && $n1>$n3){
        echo $n1;
      }
      else{
        if($n2>$n1 && $n2>$n3){
          echo $n2;
        }
        else
          echo $n3;
      }
?>