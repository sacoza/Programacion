<?php
  namespace Daw\model;
  use mysqli;
  class BD{
    private $server;
    private $user;
    private $pass;
    private $db;
    //conector
    private $conector;

    function __construct(){
      $this->server="localhost";
      $this->user="root";
      $this->pass="";
      $this->db="juegos";
    }
    function conectar(){
      $conectorTmp= new mysqli($this->server,$this->user,$this->pass,$this->db);
      if ($conectorTmp->connect_errno) {
        $this->conector=false;
      }
      else {
        $this->conector=$conectorTmp;
      }
    }
    /**
     * Get the value of Server
     *
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set the value of Server
     *
     * @param mixed server
     *
     * @return self
     */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }
    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }
    /**
     * Set the value of Pass
     *
     * @param mixed pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }
    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }
    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }
    /**
     * Get the value of Conector
     *
     * @return mixed
     */
    public function getConector()
    {
        return $this->conector;
    }
    /**
     * Set the value of Conector
     *
     * @param mixed conector
     *
     * @return self
     */
    public function setConector($conector)
    {
        $this->conector = $conector;
        return $this;
    }
    /**
     * Get the value of Config
     *
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Set the value of Config
     *
     * @param mixed config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }
}
 ?>
