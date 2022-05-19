<?php

/**
 * securityController
 */
class securityController extends Security
{

    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        $login = parent::validateLogin($_POST['correo']);

        if (!is_object($login)) return header('location:?controller=index');

        if (password_verify($_POST['contrasena'], $login->contrasena)) {

            $_SESSION['login'] = $login;

            if ($_SESSION['login']->Id_cargo == 1) {
                return header('Location:?controller=admin');
            } else if ($_SESSION['login']->Id_cargo == 2) {
                return header('location:?controller=vendedor');
            } else if ($_SESSION['login']->Id_cargo == 4) {
                return header('location:?controller=cliente');
            }
        }
        return header('location:?controller=index');
    }

    /**
     * logout
     *
     * @return void
     */
    public function logout()
    {
        unset($_SESSION['login']);
        session_destroy();
        header('location:?controller=index');
    }
}
