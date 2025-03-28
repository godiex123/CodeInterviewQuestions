<?php

namespace PHP;

class SingleNode
{
    public function __construct(
        public mixed $data,
        public ?SingleNode $next
    ) {}
}

class DoubleNode
{
    public function __construct(
        public mixed $data,
        public ?DoubleNode $next,
        public ?DoubleNode $previous
    ) {}
}