<?php

include('dtlist.php');

class DTListWithTail extends DTList
{
	/**
	 * Tail pointer
	 * 
	 * @var Node
	 */
	public $tail;

	/**
	 * Set the node being pointed to by the TAIL
	 *
	 * @param DTNode Node to be pointed to by tail
	 * @return void
	 */
	public function setTail(DTNode $node)
	{
		$this->tail = $node;
	}

	/**
	 * Add a node to the front of the list
	 *
	 * @param mixed $data Data to add to the front of the list
	 * @return void
	 */
	public function addToFront($data)
	{
		$node = new DTNode($data);

		if ($this->head) {
			$node->setNextNode($this->head);
		}

		$setAsTailNode = $this->isEmpty();

		$this->setHead($node);

		if ($setAsTailNode) {
			$this->setTail($node);
		}
	}

	/**
	 * Remove an element matching the search provided
	 *
	 * @param mixed $data Data to search for in our list
	 * @return void 
	 */
	public function remove($data)
	{
		$currentSearchNode = $this->fetchFrontElement();

		$foundMatchingNode = $currentSearchNode ? $currentSearchNode->data == $data : false;
		$nodeBeforeFoundNode = false;

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

		if ($nodeBeforeFoundNode) {
			$nodeBeforeFoundNode->setNextNode(
				$currentSearchNode->nextNode
			);
		}

		if ($this->tail == $currentSearchNode) {
			$this->tail = $nodeBeforeFoundNode;
		}

		unset($currentSearchNode);
	}

}
