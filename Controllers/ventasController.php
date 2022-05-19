<?php

/**
 * ventasController
 */
class ventasController extends ventas
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
        require_once 'views/ventas/index.php';
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
        require_once 'views/ventas/create.php';
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
        echo parent::register($_POST) ? header('location: ?controller=ventas') : 'location: ?controller=ventas';
    }

    //consultar y luego mostrar la informacion en el formulario    
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $factura = parent::find($_GET['Id_factura']);
        require_once 'views/layouts/header.php';
        require_once 'views/ventas/edit.php';
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
        echo parent::update_register($_POST) ? header('location:?controller=ventas') : 'Error ';
    }


    //    
    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        echo parent::delete_register($_GET) ? header('location: ?controller=ventas') : 'Error al borrar la factura';
    }
}
