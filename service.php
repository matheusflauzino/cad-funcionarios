<?php

//Services Container

//serviço de conexão
$container['conn'] = function ($c) {
	return new \Source\Conn($c['dsn'], $c['user'], $c['pass']);
};

//serviço do objeto empresa
$container['empresa'] = function () {
	return new \Source\Empresa;
};

//serviço da empresa
$container['ServiceEmpresa'] = function ($c) {
	return new \Source\ServiceEmpresa($c['conn'], $c['empresa']);
};