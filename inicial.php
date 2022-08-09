<?php
class SimpleClass
{
    // declaração de propriedade
    public $var = 'um valor padrão';

    // declaração de método
    public function displayVar() 
    {
        echo $this->var;
    }
}


//posso usar o public ou não, usar o var ou não
class Produto
{
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;
}


?>
