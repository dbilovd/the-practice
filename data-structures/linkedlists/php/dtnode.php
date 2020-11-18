<?php

class DTNode {
	/**
	 * Data
	 * 
	 * @var mixed
	 */
	public $data;

	/**
	 * Next node
	 * 
	 * @var DTNode
	 */
	public $nextNode = null;

	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct($data, $nextNode = null)
	{
		$this->data = $data;
		$this->nextNode = $nextNode;
	}

	/**
	 * Update the next node pointed to
	 *
	 * @var DTNode Node instance to point to
	 * @return void 
	 */
	public function setNextNode($node)
	{
		$this->nextNode = $node;
	}
}
