<?php 
require_once "Pessoa.php";

class Funcionario extends Pessoa{
    protected $salario;
    public $registro;


    public function alteraSalario($valor){
        if($this->salario>$valor){
              echo "não teve alteração no salario.<br>";
        } else {
            $this->salario = $valor;
            echo "Salario alterado<br>";
        }
        $this->mostraSalario();
    }

    public function mostraSalario(){
        echo 'R$'.$this->salario.'<br>';
    }
}