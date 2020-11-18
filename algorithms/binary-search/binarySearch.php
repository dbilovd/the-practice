<?php

function binarySearch($target, $arr) {
  $minIndex = 0;
  $maxIndex = count($arr);

  while($minIndex <= $maxIndex) {
    $middleIndex = floor($minIndex + ($maxIndex - $minIndex) / 2);
    
    if ($arr[$middleIndex] == $target) {
      return $middleIndex;
    } elseif ($arr[$middleIndex] < $target) {
      $minIndex = $middleIndex + 1;
    } else {
      $maxIndex = $middleIndex - 1;
    }
  }

  return false;
}

function binarySearchWithRecursion($target, $arr, $minIndex = 0, $maxIndex = false) {
  $maxIndex = $maxIndex ?: count($arr);

  if ($minIndex > $maxIndex) {
    return false;
  }

  $middleIndex = floor($minIndex + ($maxIndex - $minIndex) / 2);
  if ($arr[$middleIndex] == $target) {
    return $middleIndex;
  } elseif ($arr[$middleIndex] > $target) {
    return binarySearchWithRecursion($target, $arr, $minIndex, $middleIndex - 1);
  } else {
    return binarySearchWithRecursion($target, $arr, $middleIndex + 1, $maxIndex);
  }
}

