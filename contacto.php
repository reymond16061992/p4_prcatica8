<?php
require_once('conexion.php');

class Contacto
{
	public $nombre;
	public $telefono;
	public $celular;
	public $domicilio;
	public $colonia;
	public $cp;
    public function encontrarTodos()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM contacto";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $resultado[] = $row;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }
    
    public function nuevo()
    {
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "INSERT INTO `contacto` ".
                "(`nombre`, `telefono`, `celular`,`direccion`,`colonia`,`cp`) ".
                "VALUES ".
		"('$this->nombre','$this->telefono','$this->celular','$this->domicilio','$this->colonia','$this->cp');";
	   
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
  public function eliminarID($id)
    {
        try
        {
          
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
	    }
	    
            $sql = "DELETE FROM `contacto` WHERE `id`='".$id."';";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
	    return $resultado;
	    
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    public function EditarID($id)
    {
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "UPDATE  `contacto` SET  `nombre` = '$this->nombre',".
             "`telefono` =  '$this->telefono',".
             "`celular` =  '$this->celular',".
             "`direccion` =  '$this->domicilio',".
             "`colonia` =  '$this->colonia',".
             "`cp` =  '$this->cp' WHERE  `id` ='".$id."'";
  
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
  public function seleccionarID($id)
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
	    $sql =  "SELECT * FROM contacto WHERE id='".$id."'";
	    
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     $resultado=$result->fetch_assoc();
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }
}


 ?>
