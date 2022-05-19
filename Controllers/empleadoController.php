<?php

/**
 * empleadoController
 */
class empleadoController extends empleado
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
    }
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/empleado/index.php';
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
        require_once 'views/empleado/vista.php';
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
        require_once 'views/empleado/create.php';
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
        $url_path = 'assets/registro/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location:?controller=empleado') : 'Error en el registro';
    }


    //consultar y luego mostrar la informacion en el formulario    
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $empleado = parent::find($_GET['id_regis']);
        require_once 'views/layouts/header.php';
        require_once 'views/empleado/edit.php';
        require_once 'views/empleado/formu.php';
        require_once 'views/empleado/termi.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * edi
     *
     * @return void
     */
    public function edi()
    {
        $empleado = parent::find($_GET['id_regis']);
        require_once 'views/layouts/header.php';
        require_once 'views/empleado/edi.php';
        require_once 'views/empleado/formu.php';
        require_once 'views/empleado/termi.php';
        require_once 'views/layouts/footer.php';
    }
    /**
     * edits
     *
     * @return void
     */
    public function edits()
    {
        $empleado = parent::find($_GET['id_regis']);
        require_once 'views/layouts/header.php';
        require_once 'views/empleado/edits.php';
        require_once 'views/empleado/formu.php';
        require_once 'views/empleado/termis.php';
        require_once 'views/layouts/footer.php';
    }
    /**
     * editd
     *
     * @return void
     */
    public function editd()
    {
        $empleado = parent::find($_GET['id_regis']);
        require_once 'views/layouts/header.php';
        require_once 'views/empleado/editd.php';
        require_once 'views/empleado/formu.php';
        require_once 'views/empleado/termid.php';
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
        echo parent::update_register($_POST) ? header('location:?controller=empleado') : 'Error ';
    }
    public function updates()
    {
        echo parent::update_register($_POST) ? header('location:?controller=empleado&method=vista') : 'Error ';
    }
    /**
     * liqui
     *
     * @return void
     */
    public function liqui()
    {
        echo parent::update_registers($_POST) ? header('location:?controller=empleado&method=vista') : 'Error ';
    }
    /**
     * liquis
     *
     * @return void
     */
    public function liquis()
    {
        echo parent::update_registers($_POST) ? header('location:?controller=empleado') : 'Error ';
    }


    //
    //public function delete(){
    // echo parent::delete_register($_GET) ? header('location: ?controller=empleado') : 'Error al borrar la publicacion';

    //}

}
