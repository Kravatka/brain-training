<?php

declare(strict_types=1);

namespace MergeTwoSortedLists;

class Solution {
    /**
     * @param ListNode|null $list1
     * @param ListNode|null $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2): ListNode
    {
        if ($list1 == null) {
            return $list2;
        }
        if ($list2 == null) {
            return $list1;
        }

        if ($list1->val < $list2->val) {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);
            return $list1;
        } else {
            $list2->next = $this->mergeTwoLists($list1, $list2->next);
            return $list2;
        }
    }
}

$s = new Solution();
$listNode = new ListNode();
$list1 = $listNode->createTestData([1,2,4]);
$list2 = $listNode->createTestData([1,3,4]);
var_dump($s->mergeTwoLists($list1, $list2));

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    public function createTestData(array $values): ListNode
    {
        $data = [];
        $count = 0;

        foreach ($values as $value) {
            $list = new ListNode();
            $list->val = $value;
            $list->next = null;
            $data[] = $list;

            if (isset($data[$count-1])) {
                $data[$count-1]->next = $list;
            }

            $count++;
        }

        return $data[0];
    }
}