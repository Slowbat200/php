<?php

interface Pushable {
  public function push(mixed $item);
  public function pop(): mixed;

}

class LIFO implements Pushable {
  private $stack;

  public function __construct() {
    $this->stack = [];
  }

  public function push($item) {
    array_push($this->stack, $item);
  }

  public function pop() {
    return array_pop($this->stack);
  }

  public function isEmpty() {
    return empty($this->stack);
  }
}

class FIFO implements Pushable {
  private $queue;

  public function __construct() {
    $this->queue = [];
  }

  public function push($item) {
    array_push($this->queue, $item);
  }

  public function pop() {
    return array_shift($this->queue);
  }
}

$stack = new LIFO();
$queue = new FIFO();

$pushable = [$stack, $queue];

foreach ($pushable as $c) {
  $c->push(1);
  $c->push(2);
  $c->push(3);

  while (!$c->isEmpty()) {
    echo $c->pop() . PHP_EOL;
  }

  echo PHP_EOL;
}