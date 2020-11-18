<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include('binarySearch.php');

class BinarySearchTest extends TestCase
{

  /** @test */
  public function returns19_when71IsSearchedInArrayOfPrimesNumbers()
  {
    $arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $search = 71;
    $expectedIndex = 19;
    $this->assertEquals(binarySearch(71, $arr), $expectedIndex);
    $this->assertEquals(binarySearchWithRecursion($search, $arr), $expectedIndex);
  }

  /** @test */
  public function returns4_when11IsSearchedInArrayOfPrimesNumbers()
  {
    $arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $search = 11;
    $expectedIndex = 4;
    $this->assertEquals(binarySearch($search, $arr), $expectedIndex);
    $this->assertEquals(binarySearchWithRecursion($search, $arr), $expectedIndex);
  }

  /** @test */
  public function returnsFalse_when20IsSearchedInArrayOfPrimesNumbers()
  {
    $arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $search = 20;
    $expectedIndex = false;
    $this->assertEquals(binarySearch($search, $arr), $expectedIndex);
    $this->assertEquals(binarySearchWithRecursion($search, $arr), $expectedIndex);
  }
}
