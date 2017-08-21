<?php
use Pimple\Container;

$container = new Container();

/**
 * Configurações de Conexão com o Banco de Dados
 **/
$container['dsn'] = "mysql:host=localhost;dbname=test_oo";
$container['user'] = "root";
$container['pass'] = "root";