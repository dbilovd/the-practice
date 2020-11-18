<?php

include('dtlist.php');
include('dtnode.php');

$list = new DTList();

// $node7 = new DTNode(7);
// $node10 = new DTNode(10);
// $node4 = new DTNode(4);
// $node13 = new DTNode(13);

// $node7->setNextNode($node10);
// $node10->setNextNode($node4);
// $node4->setNextNode($node13);

// $list->setHead($node7);


// Add to front
$list->addToFront(new DTNode(10));
$list->addToFront(new DTNode(7));
$list->addToFront(new DTNode(13));
print_r($list);

// Set front
// $frontElement = $list->fetchFrontElement();
// $frontElementIs13 = $frontElement->data == 13;
// var_dump($frontElementIs13);

// remove from front
// $list->removeFrontElement();
// $frontElement = $list->fetchFrontElement();
// $frontElementIsNot13 = $frontElement->data == 13;
// $frontElementIs7 = $frontElement->data == 7;
// var_dump($frontElementIs7);
// var_dump($frontElementIsNot13);

// Add to back of list
// $list->addToBack(
// 	new DTNode(50)
// );
// $backmostElement = $list->fetchBackElement();
// $backElementIsNot13 = $backmostElement->data != 13;
// $backElementIs50 = $backmostElement->data == 50;
// var_dump($backElementIsNot13);
// var_dump($backElementIs50);

// $list->addToBack(
// 	new DTNode(100)
// );
// $backmostElement = $list->fetchBackElement();
// $backElementIsNot50 = $backmostElement->data != 50;
// $backElementIs100 = $backmostElement->data == 100;
// var_dump($backElementIsNot50);
// var_dump($backElementIs100);

// Remove from end of list
// $list->addToBack(new DTNode(30));
// $list->addToBack(new DTNode(35));
// $backmostElement = $list->fetchBackElement();
// var_dump($backmostElement->data == 35);
// $list->removeBackElement();
// $backmostElement = $list->fetchBackElement();
// var_dump($backmostElement->data == 30);

/**
 * Search for node within our list
 */
// $list->addToBack(new DTNode(98));
// $list->addToBack(new DTNode(67));
// $list->addToBack(new DTNode(45));
// $list->addToBack(new DTNode(23));
// $list->addToBack(new DTNode(10));

// $element45ExistsInOurList = $list->find(45);
// $element54DoesNotExist = $list->find(54);
// var_dump($element45ExistsInOurList !== false);
// var_dump($element54DoesNotExist === false);

/**
 * Search for node within our list and remove that node
 */
// $list->addToBack(new DTNode(98));
// $list->addToBack(new DTNode(67));
// $list->addToBack(new DTNode(45));
// $list->addToBack(new DTNode(23));
// $list->addToBack(new DTNode(10));

// $element45ExistsInOurList = $list->find(45);
// var_dump($element45ExistsInOurList !== false);
// $list->remove(45);
// $element45ExistsInOurList = $list->find(45);
// var_dump($element45ExistsInOurList === false);

/**
 * Search for node within our list and remove that node
 */
// $listIsEmpty = $list->isEmpty();
// var_dump($listIsEmpty === true);

// $list->addToBack(new DTNode(98));

// $listIsEmpty = $list->isEmpty();
// var_dump($listIsEmpty === false);

/**
 * Search for node within our list and remove that node
 */
// $list->addToBack(new DTNode(98));
// $list->addToBack(new DTNode(67));
// $list->addToBack(new DTNode(45));

// $list->addBeforeNode(new DTNode(89), 67);
// $node98 = $list->find(98);
// var_dump($node98->nextNode->data == 89);
// $node89 = $list->find(89);
// var_dump($node89->nextNode->data == 67);

/**
 * Search for node within our list and remove that node
 */
// $list->addToBack(new DTNode(98));
// $list->addToBack(new DTNode(67));
// $list->addToBack(new DTNode(45));

// $list->addAfterNode(new DTNode(89), 67);
// $node67 = $list->find(67);
// var_dump($node67->nextNode->data == 89);
// $node89 = $list->find(89);
// var_dump($node89->nextNode->data == 45);

// Show results
// echo print_r($list);