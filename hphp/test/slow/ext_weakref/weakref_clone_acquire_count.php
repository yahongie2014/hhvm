<?php

// Source php weakref extension
<<__EntryPoint>>
function main_weakref_clone_acquire_count() {
$o = new StdClass;
$wr1 = new WeakRef($o);
$wr1->acquire();
$wr2 = clone $wr1;
$wr2->release();
unset($o);
var_dump($wr1->valid());
var_dump($wr2->valid());
$wr1->release();
var_dump($wr1->valid());
var_dump($wr2->valid());
}
