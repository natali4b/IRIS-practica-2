<?php
session_start();

require_once('DL/database.php');
require_once('helpers/valida.php');

class UsuarisBL {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function altaUsuari($email, $password, $username) {
        $error = 0;

        $email = sanitizeEmail($email);
        $password = sanitizePassword($password);
        $username = sanitizeUsername($username);

        if (validaEmail($email) && validaPassword($password) && validaUsername($username)) {
            if (!$this->db->insertUser($email, $password, $username)) {
                $error = $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error al registrar en la base de datos";
            }
        } else {
            $error = $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en la validación de datos";
        }

        return $error;
    }

    public function llistaUsuaris() {
        return $this->db->getAll();
    }
}
?>
