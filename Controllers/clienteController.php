<?php

/**
 * clienteController
 */
class clienteController extends cliente
{
    //Mostrar toda la informacion
    //public function __construct()
    //{
    //  Security::verifyUser();
    //        die('hola');
    //}

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/cliente/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * vista
     *
     * @return void
     */
    public function vista()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/cliente/vista.php';
        require_once 'views/layouts/footer.php';
    }
}
