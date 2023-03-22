<?php

namespace App;

interface StackInterface
{

    public function push(mixed ...$elems); 
    public function isEmpty();
    public function top();
    public function pop();
    public function copy();
    public function __toString();
}