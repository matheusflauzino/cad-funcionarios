<?php
namespace Source;

interface ServiceEmpresaInterface {
	public function list();
	public function find($id);
	public function save();
	public function update();
	public function delete($id);
}
