<?php

//Services Container

$container['conn'] = function ($c) {
	return new \Source\Conn($c['dsn'], $c['user'], $c['pass']);
};