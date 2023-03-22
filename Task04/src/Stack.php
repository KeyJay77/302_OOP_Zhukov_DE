<?php
namespace App;

class Stack implements StackInterface
{
    public $list = array();

    public function __construct(mixed...$elems)
    {
        $this->push(...$elems);
    }

    public function push(mixed...$elems)
    {
        foreach ($elems as $i => $elem) {
            $this->list[] = $elem;
        }
    }

    public function pop()
    {
        return array_pop($this->list);
    }

    public function top()
    {
        $top_tier = count($this->list);
        $top_tier -= 1;
        return $this->list[$top_tier];

    }

    public function isEmpty()
    {
        if (count($this->list) == 0) {
            echo 'Стэк пуст' . PHP_EOL;
            return true;
        } else {
            echo 'Стэк не пуст' . PHP_EOL;
            return false;
        }

    }

    public function copy()
    {
        $copy = new Stack();
        foreach ($this->list as $i => $elem) {
            $copy->push($elem);
        }
        return $copy;
    }

    public function __toString()
    {
        if ($this->list) {
            $reverse = array_reverse($this->list);
            $string = '[';
            foreach ($reverse as $elem) {
                $string .= $elem . '->';
            }
            $string = substr($string, 0, -2) . ']';
            return $string;
        } else {
            return "[]";
        }
    }


}
