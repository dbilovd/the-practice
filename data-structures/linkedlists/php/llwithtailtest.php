<?php declare(strict_types=1);

include('dtlistwithtail.php');
include('dtnode.php');

use PHPUnit\Framework\TestCase;

class LLWithTailTest extends TestCase
{
	/** @test */
	public function nodes_can_be_added_to_the_front_of_the_list()
	{
		$list = new DTListWithTail();
		$list->addToFront(5);
		$this->assertEquals($list->fetchFrontElement()->data, 5);

		$list->addToFront(15);
		$this->assertEquals($list->fetchFrontElement()->data, 15);
	}

	/** @test */
	public function the_tail_and_head_points_to_the_same_node_if_theres_only_one_node_in_list()
	{
		$list = new DTListWithTail();
		$list->addToFront(10);

		$this->assertEquals($list->tail, $list->head);
	}

	/** @test */
	public function the_tail_and_head_points_to_different_nodes_if_theres_more_than_one_node_in_list()
	{
		$list = new DTListWithTail();
		$list->addToFront(10);
		$list->addToFront(15);

		$this->assertFalse($list->tail == $list->head);
	}

	/** @test */
	public function the_tail_points_to_null_in_a_new_list()
	{
		$list = new DTListWithTail();
		$this->assertEquals($list->tail, null);
	}

	/** @test */
	public function the_tail_points_to_null_if_the_only_node_in_the_list_is_removed()
	{
		$list = new DTListWithTail();
		$list->addToFront(10);

		$list->remove(10);
		$this->assertEquals($list->tail, null);
	}
}
