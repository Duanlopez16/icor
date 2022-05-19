<?php
//Herencia
/**
 * comen
 */
class comen extends Database
{

    /// public function alls(){
    //      try{
    //        $result = parent::connect()->prepare("SELECT * FROM publicaciones  ORDER BY id DESC");
    //      $result->execute();
    //    return $result->fetchAll();
    //}catch(Exception $e){
    //   die($e->getMessage());
    /// }
    ///}    
    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM comentarios ORDER BY id_co DESC LIMIT 6");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * ale
     *
     * @return void
     */
    public function ale()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM comentarios ORDER BY id_co DESC LIMIT 6, 1000");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * registers
     *
     * @param  mixed $data
     * @return void
     */
    public function registers($data)
    {
        try {
            $result = parent::connect()->prepare("INSERT INTO comentario (nombre_usu,comentario) VALUES (?,?)");
            $result->bindParam(1, $data['nombre_usu'], PDO::PARAM_STR);
            $result->bindParam(2, $data['comentario'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Location:?controller=index" . $e->getMessage());
        }
    }

    /**
     * find
     *
     * @param  mixed $id_co
     * @return void
     */
    public function find($id_co)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM comentarios WHERE id_co = ?");
            $result->bindParam(1, $id_co, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * update_register
     *
     * @param  mixed $data
     * @return void
     */
    public function update_register($data)
    {
        try {
            $result = parent::connect()->prepare("UPDATE comentarios SET respuesta = ? WHERE id_co = ?");
            $result->bindParam(1, $data['respuesta'], PDO::PARAM_STR);
            $result->bindParam(2, $data['id_co'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("location:?controller=admin " . $e->getMessage());
        }
    }
    /**
     * updates_register
     *
     * @param  mixed $datas
     * @return void
     */
    public function updates_register($datas)
    {
        try {
            $result = parent::connect()->prepare("UPDATE comentarios SET id_esta = ? WHERE id_co = ?");
            $result->bindParam(1, $datas['id_esta'], PDO::PARAM_STR);
            $result->bindParam(2, $datas['id_co'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("location:?controller=admin " . $e->getMessage());
        }
    }

    /**
     * delete_register
     *
     * @param  mixed $data
     * @return void
     */
    public function delete_register($data)
    {
        try {
            $result = parent::connect()->prepare("DELETE FROM comentarios WHERE id_co = ?");
            $result->bindParam(1, $data['id_co'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("location:?controller=admin " . $e->getMessage());
        }
    }
}
