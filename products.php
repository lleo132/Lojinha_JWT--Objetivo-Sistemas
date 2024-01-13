<?php

//Lojinha JWT - Desafio Objetivo Sistemas

class Products {
// Atributos classe Products
    private $name;
    private $price;
    protected $qtd;

// Construtor da classe
    public function __construct($name, $price, $qtd){
        $this->name = $name;
        $this->price = $price;
        $this->qtd = $qtd;
    }

// Metodo para criar um produto
    public function setProducts($data) {
        $this->name = $data['name'];
        $this->price = $data['Price'];
        $this->qtd = $data['Qtd'];
    }

// Metodo para buscar um produto
    public function getProducts(){
        return[
            'name' => $this->name,
            'price' => $this->price,
            'qtd' => $this->qtd
        ];
    }

}

?>