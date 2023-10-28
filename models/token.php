<?php

// Classe Metier

class Token
{

    private $id;
    private $token_user;
    private $token;
    private $data_recover;
    


    public function __construct($id,$token_user,$token,$data_recover )
    {

        $this->id = $id;
        $this->token_user = $token_user;
        $this->token = $token;
        $this->data_recover = $data_recover;        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getToken_user()
    {
        return $this->token_user;
    }

    public function setToken_user($token_user)
    {
        $this->token_user = $token_user;
    }
    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getData_recover()
    {
        return $this->data_recover;
    }

    public function setData_recover($data_recover)
    {
        $this->data_recover = $data_recover;
    }

   

}