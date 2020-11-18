<?php

class DTList {
	/**
	 * Head pointer
	 * 
	 * @var Node
	 */
	public $head;

	/**
	 * Set the node being pointed to by the head
	 *
	 * @var DTNode Node to be pointed to by head
	 * @return void
	 */
	public function setHead(DTNode $node)
	{
		$this->head = $node;
	}

	/**
	 * Add a node to the front of the list
	 *
	 * @var DTNode Node to add to the front of the list
	 * @return void
	 */
	public function addToFront(DTNode $node)
	{
		// Set the new node's pointer to point to the current head node
		if ($this->head) {
			$node->setNextNode($this->head);
		}

		// Set the head node to point to the current node
		$this->setHead($node);
	}

	/**
	 * Return element at the front of our list
	 *
	 * @return DTNode Node at front position
	 */
	public function fetchFrontElement()
	{
		return $this->head;
	}

	/**
	 * Remove element at the front of our list
	 *
	 * @return void 
	 */
	public function removeFrontElement()
	{
		$currentFrontElement = $this->head;
		$newFrontNode = $currentFrontElement->nextNode;
		$this->setHead($newFrontNode);
		$currentFrontElement->setNextNode(null);
		unset($currentFrontElement);
	}

	/**
	 * Add element to the back of the list
	 *
	 * @var DTNode Element to add to the end of our list
	 * @return void
	 */
	public function addToBack(DTNode $node)
	{
		$lastNode = $this->fetchFrontElement();

		if (!$lastNode) {
			$this->addToFront($node);
			return;
		}

		// Loop through lists until you find a node without a next node
		while ($lastNode->nextNode) {
			$lastNode = $lastNode->nextNode;
		}

		// Set new node as next node on that element
		$lastNode->setNextNode($node);
	}

	/**
	 * Return element at the end of the list
	 *
	 * @return DTNode Node at the end of the list
	 */
	public function fetchBackElement()
	{
		// Loop through lists until you find a node without a next node
		$lastNode = $this->fetchFrontElement();
		while ($lastNode->nextNode) {
			$lastNode = $lastNode->nextNode;
		}
		
		return $lastNode;
	}

	/**
	 * Remove element at the end of the list
	 *
	 * @return void
	 */
	public function removeBackElement()
	{
		// Get last node and the node before it.
		// ... we can use the same loop to get both node by maintaining the previous nodes
		$beforeLastNode = false;
		$lastNode = $this->fetchFrontElement();
		while ($lastNode->nextNode) {
			$beforeLastNode = $lastNode;
			$lastNode = $lastNode->nextNode;
		}

		// Set next node pointer of node before last node as node
		$beforeLastNode->setNextNode(null);
		// Unset last node
		unset($lastNode);
	}

	/**
	 * Find a node in the list that has the data being searched for
	 *
	 * @return DTNode|boolean DTNode if element is found or false if not
	 */
	public function find($data)
	{
		// Set search result as false
		$found = false;
		// Begin searching from the front of the list
		$currentSearchNode = $this->fetchFrontElement();

		// Keep on running search until we have:
		// ...1. Found an element or
		// ...2. Ran out of elements to search
		while (!$found && $currentSearchNode->nextNode) {
			// Check if current element we're searching matches our result
			$found = $currentSearchNode->data == $data;
			// If our search if false for the current node, proceed to check the node our
			// ... current node points to.
			if (!$found) {
				$currentSearchNode = $currentSearchNode->nextNode;
			}
		}

		return $found ? $currentSearchNode : $found;
	}

	/**
	 * Remove an element matching the search provided
	 *
	 * @param mixed $data Data to search for in our list
	 * @return void 
	 */
	public function remove($data)
	{
		$foundMatchingNode = false;
		$nodeBeforeFoundNode = false;
		$currentSearchNode = $this->fetchFrontElement();

		while (!$foundMatchingNode && $currentSearchNode->nextNode) {
			$foundMatchingNode = $currentSearchNode->data == $data;
			if (!$foundMatchingNode) {
				$nodeBeforeFoundNode = $currentSearchNode;
				$currentSearchNode = $currentSearchNode->nextNode;
			}
		}

		if (!$foundMatchingNode) {
			return false;
		}

		$nodeBeforeFoundNode->setNextNode(
			$currentSearchNode->nextNode
		);
		unset($currentSearchNode);
	}

	/**
	 * Check if list empty
	 *
	 * @return boolean True if the list is empty, false if it isn't
	 */
	public function isEmpty()
	{
		return $this->head ? false : true;
	}

	/**
	 * Add a node before another node matching search term
	 *
	 * @param DTNode $node New node to add
	 * @param mixed $data Data to use in searching for node to add
	 * @return boolean If operation was successful return true else return false
	 */
	public function addBeforeNode(DTNode $node, $data)
	{
		$foundAMatchingNode = false;
		$nodeBeforeFoundNode = false;
		$currentSearchNode = $this->fetchFrontElement();

		while (!$foundAMatchingNode && $currentSearchNode->nextNode) {
			$foundAMatchingNode = $currentSearchNode->data == $data;
			if(!$foundAMatchingNode) {
				$nodeBeforeFoundNode = $currentSearchNode;
				$currentSearchNode = $currentSearchNode->nextNode;
			}
		}

		if (!$foundAMatchingNode) {
			return false;
		}

		$node->setNextNode($currentSearchNode);
		$nodeBeforeFoundNode->setNextNode($node);

		return true;
	}

	/**
	 * Add a node AFTER another node matching search term
	 *
	 * @param DTNode $node New node to add
	 * @param mixed $data Data to use in searching for node to add
	 * @return boolean If operation was successful return true else return false
	 */
	public function addAfterNode(DTNode $node, $data)
	{
		$foundAMatchingNode = false;
		$currentSearchNode = $this->fetchFrontElement();

		while (!$foundAMatchingNode && $currentSearchNode->nextNode) {
			$foundAMatchingNode = $currentSearchNode->data == $data;
			if(!$foundAMatchingNode) {
				$currentSearchNode = $currentSearchNode->nextNode;
			}
		}

		if (!$foundAMatchingNode) {
			return false;
		}

		$node->setNextNode($currentSearchNode->nextNode);
		$currentSearchNode->setNextNode($node);

		return true;
	}
}