<?php

/**
 * adminController
 */
class adminController extends admin
{
    //Mostrar toda la informacion
    public function __construct()
    {
        Security::verifyUser();
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/admin/index.php';
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
        require_once 'views/admin/create.php';
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

        $nomimg = $_FILES['link']['name'];
        $num = date("GHs");
        $nombreimg = $num . $nomimg;
        $archivo = $_FILES['link']['tmp_name'];
        $ruta = "assets";

        $ruta = $ruta . "/" . $nombreimg;

        move_uploaded_file($archivo, $ruta);

        $_POST['rutas'] = $ruta;

        $important = preg_replace('/\s+/', '', $_POST['title']);

        $_POST['important'] = $important;


        echo parent::register($_POST) ? header('location: ?controller=admin') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario      
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
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
        echo parent::update_register($_POST) ? header('location: ?controller=admin') : 'Error al borrar la publicacion';
    }

    //    
    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        echo parent::delete_register($_GET) ? header('location: ?controller=admin') : 'Error al borrar la publicacion';
    }
}
