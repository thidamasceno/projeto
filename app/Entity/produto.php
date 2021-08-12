<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Produto{

	public $id;
	public $nome;
	public $fabricante;
	public $preco;
	public $quantidade;
	public $ativo;
	public $data;


	public function cadastrar(){

		$this->data = date('Y-m-d H:i:s');
		$obDatabase = new Database('produto');
		$this->id = $obDatabase->insert([
											'nome' 			=> $this->nome,
											'fabricante'    => $this->fabricante,
											'preco' 		=> $this->preco,
											'quantidade'    => $this->quantidade,
											'ativo' 		=> $this->ativo,
											'data' 			=> $this->data
										]);
		return true;
	}

	public function atualizar(){
		return (new Database('produto'))->update('id = '.$this->id,[
											'nome' 			=> $this->nome,
											'fabricante'    => $this->fabricante,
											'preco' 		=> $this->preco,
											'quantidade'	=> $this->quantidade,
											'ativo' 		=> $this->ativo,
											'data' 			=> $this->data
																	]);
	}

	public function excluir(){
		return (new Database('produto'))->delete('id = '.$this->id);
	}

	public static function getProdutos($where = null, $order = null, $limit = null){
		return (new Database('produto'))->select($where,$order,$limit)
				->fetchAll(PDO::FETCH_CLASS,self::class);
	}

	public static function getQuantidadeProdutos($where = null){
		return (new Database('produto'))->select($where,null,null,'COUNT(*) as qtd')->fetchObject()->qtd;
	}

	public static function getProduto($id){
		return (new Database('produto'))->select('id = '.$id)
											->fetchObject(self::class);
	}
}
