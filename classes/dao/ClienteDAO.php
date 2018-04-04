<?php


class ClienteDAO {
    
    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::conectar();
    }
    
    public function inserir(Cliente $cliente) {
        $sql = "insert into clientes (nome) value ('{$cliente->getNome()}')";
        return mysqli_query($this->conexao, $sql);
    }
    
    public function remover(Cliente $cliente) {
        $sql = "delete from clientes where id={$cliente->getId()}";
        return mysqli_query($this->conexao, $sql);
    }
    
    public function editar(Cliente $cliente) {
        $sql = "update clientes set nome={$cliente->getNome()} where id={$cliente->getId()}";
        return mysqly_query($this->conexao, $sql);
    }

    public function listarTodos() {
        $clientes = array();
        $sql = "select * from clientes";
        $resultado = mysqli_query($this->conexao, $sql);
        while ($cliente_array = mysqli_fetch_assoc($resultado)) {
            $cliente = new Cliente();
            $cliente->setId($cliente_array['id']);
            $cliente->setNome($cliente_array['nome']);
            array_push($clientes, $cliente);
        }
        return $clientes;
    }
    
    public function buscarPorId($id) {
        
    }
    
}
