<?php
namespace Source;

/**
 * Classe Empresa
 * @author Matheus Flauzino
 * @version 0.0.1
 */
class Empresa implements EmpresaInterface {
	private $id;
	private $cnpj;
	private $nome;
	private $endereco;
	private $ramo;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 *
	 * @return self
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCnpj() {
		return $this->cnpj;
	}

	/**
	 * @param mixed $cnpj
	 *
	 * @return self
	 */
	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @param mixed $nome
	 *
	 * @return self
	 */
	public function setNome($nome) {
		$this->nome = $nome;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}

	/**
	 * @param mixed $endereco
	 *
	 * @return self
	 */
	public function setEndereco($endereco) {
		$this->endereco = $endereco;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRamo() {
		return $this->ramo;
	}

	/**
	 * @param mixed $ramo
	 *
	 * @return self
	 */
	public function setRamo($ramo) {
		$this->ramo = $ramo;

		return $this;
	}
}