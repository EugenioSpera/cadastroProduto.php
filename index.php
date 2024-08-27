<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'Produto.php';

    // Obtendo os dados do formulário
    $nome = $_POST['nome'];
    $precoCompra = $_POST['precoCompra'];    

    // Criando uma instância da classe Produto e definindo os dados
    $produto = new Produto();
    $produto->setDados($nome, $precoCompra);

    // Exibindo os dados do produto
    echo "<h2>Dados do Produto Cadastrado:</h2>";
    echo "Nome: " . $produto->getNome() . "<br>";
    echo "Preço de Compra: R$ " . number_format($produto->getPrecoCompra(), 2, ',', '.') . "<br>";
    echo "Preço de Venda: R$ " . number_format($produto->getPrecoVenda(), 2, ',', '.') . "<br>";    
}
?>