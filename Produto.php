<?php

class Produto
{
    // Propriedades privadas
    private $nome;
    private $precoCompra;
    private $precoVenda;


    // Método público para definir os valores das propriedades
    public function setDados($nome, $precoCompra)
    {
        $this->nome = $nome;
        $this->precoCompra = $precoCompra;
        $this->calculaPrecoVenda();
    }

    // Método privado para calcular o preço de venda (30% maior que o preço de compra)
    private function calculaPrecoVenda()
    {
        $this->precoVenda = $this->precoCompra * 1.30;
    }

    // Métodos públicos para obter os valores das propriedades
    public function getNome()
    {
        return $this->nome;
    }

    public function getPrecoCompra()
    {
        return $this->precoCompra;
    }

    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>

<body>

    <form action="" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label for="precoCompra">Preço de Compra:</label>
        <input type="text" name="precoCompra" required>
        <br><br>

        <input type="submit" value="Cadastrar Produto">
    </form>


</body>

</html>