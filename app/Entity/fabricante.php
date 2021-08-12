<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Fabricante{
	public $id;
	public $nome;
	public $descricao;
	public $ativo;


	public function cadastrar(){
		$obDatabase = new Database('fabricante');
		$this->id = $obDatabase->insert([
			'nome' => $this->nome,
			'descricao' => $this->descricao,
			'ativo' => $this->ativo
		]);

		return true;
	}

	public function atualizar(){
		return (new Database('fabricante'))->update('id = '.$this->id,[
			'nome' => $this->nome,
			'descricao' => $this->descricao,
			'ativo' => $this->ativo
		]);
	}

	public function excluir(){
		return (new Database('fabricante'))->delete('id = '.$this->id);
	}

	public static function getFabricantes($where = null, $order = null, $limit = null){
		return (new Database('fabricante'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
	}

	public static function getQuantidadeFabricantes($where = null){
		return (new Database('fabricante'))->select($where,null,null,'COUNT(*) as qtd')->fetchObject()->qtd;
	}

	public static function getFabricante($id){
		return (new Database('fabricante'))->select('id = '.$id)->fetchObject(self::class);
	}
}