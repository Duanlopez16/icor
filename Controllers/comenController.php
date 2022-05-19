<?php

/**
 * comenController
 */
class comenController extends comen
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
        echo parent::registers($_POST) ? header('location: ?controller=index') : 'Error en el registro';
    }
    //consultar y luego mostrar la informacion en el formulario    
    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $comen = parent::find($_GET['id_co']);
        require_once 'views/layouts/header.php';
        require_once 'views/comen/edit.php';
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
        echo parent::update_register($_POST) ? header('location: ?controller=admin') : 'location: ?controller=admin';
    }

    /**
     * updates
     *
     * @return void
     */
    public function updates()
    {
        echo parent::updates_register($_POST) ? header('location: ?controller=admin') : 'location: ?controller=admin';
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
