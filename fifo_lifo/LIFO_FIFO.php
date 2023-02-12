<?php

interface Pushable {
  public function push($item);
  public function pop();
  public function isEmpty();
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

  public function isEmpty() {
    return empty($this->queue);
  }
}

$stack = new LIFO();
$queue = new FIFO();

$Pushable = [$stack, $queue];

foreach ($Pushable as $c) {
  $c->push(1);
  $c->push(2);
  $c->push(3);

  while (!$c->isEmpty()) {
    echo $c->pop() . PHP_EOL;
  }

  echo PHP_EOL;
}