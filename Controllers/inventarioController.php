<?php

/**
 * inventarioController
 */
class inventarioController extends inventario
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
        require_once 'views/inventario/index.php';
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
        require_once 'views/inventario/vista.php';
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
        require_once 'views/inventario/create.php';
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
        echo parent::register($_POST) ? header('location: ?controller=inventario') : 'location: ?controller=inventario';
    }

    //consultar y luego mostrar la informacion en el formulario    
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $inventario = parent::find($_GET['Id_inve']);
        require_once 'views/layouts/header.php';
        require_once 'views/inventario/edit.php';
        require_once 'views/inventario/formu.php';
        require_once 'views/inventario/termi.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * edits
     *
     * @return void
     */
    public function edits()
    {
        $inventario = parent::find($_GET['Id_inve']);
        require_once 'views/layouts/header.php';
        require_once 'views/inventario/edits.php';
        require_once 'views/inventario/formu.php';
        require_once 'views/inventario/termis.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * editd
     *
     * @return void
     */
    public function editd()
    {
        $inventario = parent::find($_GET['Id_inve']);
        require_once 'views/layouts/header.php';
        require_once 'views/inventario/editd.php';
        require_once 'views/inventario/formu.php';
        require_once 'views/inventario/termid.php';
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
        echo parent::update_register($_POST) ? header('location:?controller=inventario') : 'Error ';
    }

    /**
     * updates
     *
     * @return void
     */
    public function updates()
    {
        echo parent::update_registers($_POST) ? header('location:?controller=inventario&method=vista') : 'Error ';
    }

    /**
     * updated
     *
     * @return void
     */
    public function updated()
    {
        echo parent::update_registers($_POST) ? header('location:?controller=inventario') : 'Error ';
    }


    //
    public function delete()
    {
        echo parent::delete_register($_GET) ? header('location: ?controller=inventario') : 'Error al borrar la publicacion';
    }
}
