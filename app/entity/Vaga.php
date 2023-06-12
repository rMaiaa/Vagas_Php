<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga{
    /**
    * identificador único da vaga
    * @var integer
    */
    public $id;

    /**
    * Titulo da vaga
    * @var string
    */
    public $titulo;

    /**
    * Descricação da vaga
    * @var string
    */
    public $descricao;

    /**
    * Define se a vaga é ativa
    * @var string(s/n)
    */
    public $ativo;

    /**
    * identificador único da vaga
    * @var string
    */
    public $data;

    /**
    * Método para cadastrar uma nova vaga 
    * @return boolean
    */
    public function cadastrar(){
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');
        
        //INSERIR A VAGA NO BANCO
        $obDatabase = new Database('vagas');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;
        //ATRIBUIR O ID DA VAGA NA INSTÂNCIA

        //RETORNAR SUCESSO
    }
}