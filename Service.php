<?php

class Service
{
    private $client;

    public function __construct()
    {
        $this->client = new SoapClient("http://localhost:8000/alunows?wsdl");
    }

    public function inserir(StdClass $obj): void
    {
        $params = [
            "aluno" => [
                "id" => 0,
                "nome" => $obj->nome,
                "media" => $obj->media,
                "faltas" => $obj->faltas
            ]
        ];
        
        try {
            $this->client->__soapCall("inserir", [$params]);
        } catch(Exception $ex) {
            echo $ex->getMessage();exit;
        }
    }

    public function alterar(StdClass $obj): void
    {
        $params = [
            "aluno" => [
                "id" => $obj->id,
                "nome" => $obj->nome,
                "media" => $obj->media,
                "faltas" => $obj->faltas
            ]
        ];
        
        try {
            $this->client->__soapCall("alterar", [$params]);
        }  catch(Exception $ex) {
            echo $ex->getMessage();exit;
        }
    }

    public function remover(int $id): void
    {
        $params = [
            "id" => $id
        ];
        
        try {
            $this->client->__soapCall("remover", [$params]);
        } catch(Exception $ex) {
            echo $ex->getMessage();exit;
        }
    }

    public function listar(): array
    {
        try {
            $result = $this->client->__soapCall("listar", []);
        } catch(Exception $ex) {
            echo $ex->getMessage();exit;
        }
        return $result->return;
    }
}