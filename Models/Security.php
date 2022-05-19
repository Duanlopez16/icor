<?php

/**
 * Security
 */
class Security extends Database
{

    /**
     * validateLogin
     *
     * @param  mixed $correo
     * @return void
     */
    public function validateLogin($correo)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM  registro WHERE correo = ?");
            $result->bindParam(1, $correo, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * verifyUser
     *
     * @return void
     */
    public static function verifyUser()
    {
        if (!isset($_SESSION['login'])) header('location:?controller=index');
    }
    //    
    /**
     * verifyRole
     *
     * @param  mixed $role
     * @return void
     */
    public function verifyRole($role)
    {
        if (!$role == $_SESSION['login']['Id_cargo']) header('location:?controller=index');
    }
}
