<?php

/**
 * vendedorController
 */
class vendedorController extends vendedor
{

    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Vista principal de los controladores.
     * Principalmente casi siempre se retorna una vista con una tabla para mostrar todos los registros. (Esto depende de la necesidad del cliente)
     */
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/vendedor/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * Esta función retorna una vista con un formulario.
     */
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        echo 'function create';
    }

    /**
     * Esta función se encarga de validar y almacenar en la base de datos la informacion enviada desde un formulario.
     */
    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        echo parent::registers($_POST) ? header('location: ?controller=index#coment') : 'Error en el comentario';
    }
    /**
     * stores
     *
     * @return void
     */
    public function stores()
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=index##exampleModalCenter') : 'Error en el registro';
    }

    /**
     * Esta función retorna una vista con un formulario con valores definidos de un registro especifico.
     */
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
    }

    /**
     * Esta función se encarga de validar y actualizar en la base de datos la información de un registro especifico.
     */
    /**
     * update
     *
     * @return void
     */
    public function update()
    {
    }

    /**
     * Esta funcion se encarga de borrar un registro especifico en la base de datos.
     */
    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        echo parent::delete_register($_GET) ? header('location: ?controller=index#coment') : 'Error al borrar la publicacion';
    }
    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    }
}
