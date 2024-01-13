<?php
//Acessa classe em outro arquivo
require_once 'Products.php';

class Sale extends Products{
// Atributos classe "Sale(Venda) que extende a classe Products(produtos)"
    private $qtdSale;
    private $discount;

// Construtor da classe
    public function __construct($qtdSale, $discount, $name, $price, $qtd) {
        parent::__construct($name, $price, $qtd);
        $this->qtdSale = 0;
        $this->discount = 0;
    }

// Metodo para iniciar uma venda
    public function setVenda($data) {

// Verificar se o produto está cadastrado
        if($this->getProducts()['name'] !== $data['name']) {
            echo "O produto não esta cadastrado";
            return;
        }

// Verificar se há estoque do produto
        if($this->getProducts()['qtd'] < $data['qtd']) {
            echo "Produto sem estoque";
            return;
        }

// Iniciar venda 
        $this->qtdSale = $data['qtd'];
        $this->discount = $data['discount'];
        echo "Venda realizada com sucesso";

// Atualizar o estoque
        $this->qtd -= $this->qtdSale;
    }

//Metodo para informar a ultima venda e estoque atual do produto
    public function getVenda() {
        return [
            'name' => $this->getProducts()['name'],
            'price' => $this->getProducts()['price'],
            'qtdSale' => $this->qtdSale,
            'discount' => $this->discount,
            'qtd' => $this->getProducts()['qtd']
            ];
    }


}
?>