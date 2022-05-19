<?php

/**
 * usuarioController
 */
class usuarioController extends usuario
{
    //Mostrar toda la informacion    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        Security::verifyUser();
        //        die('hola');
    }
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/index.php';
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
        require_once 'views/usuario/vista.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model    
    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=usuario') : 'location: ?controller=usuario';
    }

    //consultar y luego mostrar la informacion en el formulario    
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $usuario = parent::find($_GET['id_regis']);
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model    
    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        echo parent::update_register($_POST) ? header('location:?controller=usuario') : 'Error ';
    }

    /**
     * updates
     *
     * @return void
     */
    public function updates()
    {
        echo parent::updates_register($_POST) ? header('location:?controller=usuario') : 'location: ?controller=admin';
    }

    /**
     * updated
     *
     * @return void
     */
    public function updated()
    {
        echo parent::updates_register($_POST) ? header('location: ?controller=usuario&method=vista') : 'location: ?controller=admin';
    }

    //
    // public function delete(){
    //   echo parent::delete_register($_GET) ? header('location: ?controller=usuario') : 'Error al borrar la publicacion';
    //
    //  }

}
