<?php
namespace Source;
/**
 *
 */
class ServiceEmpresa implements ServiceEmpresaInterface {

	private $db;
	private $empresa;

	function __construct(ConnInterface $db, EmpresaInterface $empresa) {
		$this->db = $db->connect();
		$this->empresa = $empresa;
	}

	public function list() {
		$query = "select * from empresas";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($id) {
		$query = "select * from empresas where id=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

	public function save() {
		$query = "INSERT INTO `empresas` (`cnpj`, `nome`, `endereco`, `ramo`) VALUES (:cnpj, :nome, :endereco, :ramo);";
		$stmt = $this->db->prepare($query);

		$stmt->bindValue(":cnpj", $this->empresa->getCnpj());
		$stmt->bindValue(":nome", $this->empresa->getNome());
		$stmt->bindValue(":endereco", $this->empresa->getEndereco());
		$stmt->bindValue(":ramo", $this->empresa->getRamo());

		$stmt->execute();
		return $this->db->lastInsertId();

	}

	public function update() {

		$query = "UPDATE `empresas` SET `cnpj`=:cnpj, `nome`=:nome, `endereco`=:endereco, `ramo`=:ramo WHERE id=:id";
		$stmt = $this->db->prepare($query);

		$stmt->bindValue(":cnpj", $this->empresa->getCnpj());
		$stmt->bindValue(":nome", $this->empresa->getNome());
		$stmt->bindValue(":endereco", $this->empresa->getEndereco());
		$stmt->bindValue(":ramo", $this->empresa->getRamo());
		$stmt->bindValue(":id", $this->empresa->getId());
		return $stmt->execute();

	}

	public function delete($id) {
		$query = "Delete from `empresas` WHERE `id`=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":id", $id);
		$ret = $stmt->execute();
		return $ret;
	}

}