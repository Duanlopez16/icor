<?php
//Herencia
/**
 * productos
 */
class productos extends Database
{

    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM producto where id_esta = 1");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * alls
     *
     * @return void
     */
    public function alls()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM producto where id_esta = 2");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * register
     *
     * @param  mixed $data
     * @return void
     */
    public function register($data)
    {
        try {
            $result = parent::connect()->prepare("INSERT INTO producto (Nombre,Cantidad,Ubicacion,Id_pro,imagen) VALUES (?,?,?,?,?)");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Id_pro'], PDO::PARAM_STR);
            $result->bindParam(5, $data['imagen'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Location:?controller=producto" . $e->getMessage());
        }
    }

    /**
     * find
     *
     * @param  mixed $Id_prod
     * @return void
     */
    public function find($Id_prod)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM producto WHERE Id_prod = ?");
            $result->bindParam(1, $Id_prod, PDO::PARAM_INT);
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
            $result = parent::connect()->prepare("UPDATE producto SET Nombre = ?, Cantidad = ?, Ubicacion = ?, Id_pro = ?, observacion=? WHERE Id_prod = ?");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Id_pro'], PDO::PARAM_INT);
            $result->bindParam(5, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['Id_prod'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("location:?controller=producto" . $e->getMessage());
        }
    }
    /**
     * update_registers
     *
     * @param  mixed $data
     * @return void
     */
    public function update_registers($data)
    {
        try {
            $result = parent::connect()->prepare("UPDATE producto SET Nombre = ?, Cantidad = ?, Ubicacion = ?, Id_pro = ? , observacion=?, id_esta = ? WHERE Id_prod = ?");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Id_pro'], PDO::PARAM_INT);
            $result->bindParam(5, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['id_esta'], PDO::PARAM_INT);
            $result->bindParam(7, $data['Id_prod'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("location:?controller=producto" . $e->getMessage());
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
            $result = parent::connect()->prepare("DELETE FROM producto WHERE Id_prod = ?");
            $result->bindParam(1, $data['Id_prod'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("location:?controller=producto " . $e->getMessage());
        }
    }
}
