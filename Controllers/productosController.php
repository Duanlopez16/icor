<?php

/**
 * productosController
 */
class productosController extends productos
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
        require_once 'views/productos/index.php';
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
        require_once 'views/productos/vista.php';
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
        require_once 'views/productos/create.php';
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

        $url_path = 'assets/images' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        echo parent::register($_POST) ? header('location:?controller=productos') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario    
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $producto = parent::find($_GET['Id_prod']);
        require_once 'views/layouts/header.php';
        require_once 'views/productos/edit.php';
        require_once 'views/productos/formu.php';
        require_once 'views/productos/termi.php';
        require_once 'views/layouts/footer.php';
    }
    /**
     * edits
     *
     * @return void
     */
    public function edits()
    {
        $producto = parent::find($_GET['Id_prod']);
        require_once 'views/layouts/header.php';
        require_once 'views/productos/edits.php';
        require_once 'views/productos/formu.php';
        require_once 'views/productos/termis.php';
        require_once 'views/layouts/footer.php';
    }
    /**
     * editd
     *
     * @return void
     */
    public function editd()
    {
        $producto = parent::find($_GET['Id_prod']);
        require_once 'views/layouts/header.php';
        require_once 'views/productos/editd.php';
        require_once 'views/productos/formu.php';
        require_once 'views/productos/termid.php';
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
        echo parent::update_register($_POST) ? header('location:?controller=productos') : 'Error ';
    }

    /**
     * updates
     *
     * @return void
     */
    public function updates()
    {
        echo parent::update_registers($_POST) ? header('location:?controller=productos') : 'Error ';
    }

    /**
     * updated
     *
     * @return void
     */
    public function updated()
    {
        echo parent::update_registers($_POST) ? header('location:?controller=productos&method=vista') : 'Error ';
    }
    //    
    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        echo parent::delete_register($_GET) ? header('location: ?controller=productos') : 'Error al borrar la publicacion';
    }
}
