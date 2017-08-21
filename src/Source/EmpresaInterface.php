<?php
namespace Source;

interface EmpresaInterface {

	public function getId();
	public function setId($id);
	public function getCnpj();
	public function setCnpj($cnpj);
	public function getNome();
	public function setNome($nome);
	public function getEndereco();
	public function setEndereco($endereco);
	public function getRamo();
	public function setRamo($ramo);

}