<?php

class Usuario{
  private $id;
  private $nombre;
  private $apellidos;
  private $email;
  private $password;
  private $rol;
  private $imagen;
  private $db;

  public function __construct(){
    //Conexión base de datos
    $this->db = Database::connect();
  }

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;

    return $this;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $this->db->real_escape_string($nombre);

    return $this;
  }

  public function getApellidos(){
    return $this->apellidos;
  }

  public function setApellidos($apellidos){
    $this->apellidos = $this->db->real_escape_string($apellidos);

    return $this;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $this->db->real_escape_string($email);

    return $this;
  }

  public function getPassword(){
    return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
  }

  public function setPassword($password){
    $this->password = $password;

    return $this;
  }

  public function getRol(){
    return $this->rol;
  }

  public function setRol($rol){
    $this->rol = $rol;

    return $this;
  }

  public function getImagen(){
    return $this->imagen;
  }

  public function setImagen($imagen){
    $this->imagen = $imagen;

    return $this;
  }

  public function save(){
    $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function login(){
    $result = false;
    $email = $this->email;
    $password = $this->password;

    //Comprobar si existe el usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = $this->db->query($sql);

    if ($login && $login->num_rows == 1) {
      $usuario = $login->fetch_object();

      //Verificar contraseña
      $verify = password_verify($password, $usuario->password);

      if ($verify) {
        $result = $usuario;
      }
    }
    return $result;
  }

}

 ?>
