<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/service.php';

//print_r($container['conn']);

//print_r($container['empresa']);
/*
$container['empresa']
->setId(3)
->setNome('Empresa de Tal')
->setCnpj('999.999.999/9999-99')
->setEndereco('Rua Mecia Figueiredo')
->setRamo('Comercio');*/

#echo $container['ServiceEmpresa']->update();
#echo $container['ServiceEmpresa']->delete(2);

echo '<pre>';
print_r($container['ServiceEmpresa']->list());
echo '</pre>';
