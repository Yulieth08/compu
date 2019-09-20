<?php

/**
 * Created by PhpStorm.
 * User: CAPACITACION-PC
 * Date: 16/6/2017
 * Time: 14:49
 */
require_once('db_abstract_class.php');

class Persona extends db_abstract_class
{
    private $IdPersona;
    private $Documento_P;
    private $Nombre_P;
    private $Apellido_P;
    private $Telefono_P;
    private $Direcccion_P;
    private $Rh_P;
    private $Rol_P;
    private $Emai_P;
    private $Contraseña_P;
    private $FechaInsert;




    public function __construct($persona_data=array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($persona_data)>1){ //
            foreach ($persona_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->IdPersona = "";
            $this->Documento_P = "";
            $this->Nombre_P = "";
            $this->Apellido_P = "";
            $this->Telefono_P = "";
            $this->Direcccion_P = "";
            $this->Rh_P = "";
            $this->Rol_P = "";
            $this->Emai_P = "";
            $this->Contraseña_P = "";
            $this->FechaInsert = "";

        }
    }

    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
//        unset($this);
    }

    /**
     * @return string
     */
    public function getIdPersona(): string
    {
        return $this->IdPersona;
    }

    /**
     * @param string $IdPersona
     */
    public function setIdPersona(string $IdPersona): void
    {
        $this->IdPersona = $IdPersona;
    }

    /**
     * @return string
     */
    public function getDocumentoP(): string
    {
        return $this->Documento_P;
    }

    /**
     * @param string $Documento_P
     */
    public function setDocumentoP(string $Documento_P): void
    {
        $this->Documento_P = $Documento_P;
    }

    /**
     * @return string
     */
    public function getNombreP(): string
    {
        return $this->Nombre_P;
    }

    /**
     * @param string $Nombre_P
     */
    public function setNombreP(string $Nombre_P): void
    {
        $this->Nombre_P = $Nombre_P;
    }

    /**
     * @return string
     */
    public function getApellidoP(): string
    {
        return $this->Apellido_P;
    }

    /**
     * @param string $Apellido_P
     */
    public function setApellidoP(string $Apellido_P): void
    {
        $this->Apellido_P = $Apellido_P;
    }

    /**
     * @return string
     */
    public function getTelefonoP(): string
    {
        return $this->Telefono_P;
    }

    /**
     * @param string $Telefono_P
     */
    public function setTelefonoP(string $Telefono_P): void
    {
        $this->Telefono_P = $Telefono_P;
    }

    /**
     * @return string
     */
    public function getDirecccionP(): string
    {
        return $this->Direcccion_P;
    }

    /**
     * @param string $Direcccion_P
     */
    public function setDirecccionP(string $Direcccion_P): void
    {
        $this->Direcccion_P = $Direcccion_P;
    }

    /**
     * @return string
     */
    public function getRhP(): string
    {
        return $this->Rh_P;
    }

    /**
     * @param string $Rh_P
     */
    public function setRhP(string $Rh_P): void
    {
        $this->Rh_P = $Rh_P;
    }

    /**
     * @return string
     */
    public function getRolP(): string
    {
        return $this->Rol_P;
    }

    /**
     * @param string $Rol_P
     */
    public function setRolP(string $Rol_P): void
    {
        $this->Rol_P = $Rol_P;
    }

    /**
     * @return string
     */
    public function getEmaiP(): string
    {
        return $this->Emai_P;
    }

    /**
     * @param string $Emai_P
     */
    public function setEmaiP(string $Emai_P): void
    {
        $this->Emai_P = $Emai_P;
    }

    /**
     * @return string
     */
    public function getContraseñaP(): string
    {
        return $this->Contraseña_P;
    }

    /**
     * @param string $Contraseña_P
     */
    public function setContraseñaP(string $Contraseña_P): void
    {
        $this->Contraseña_P = $Contraseña_P;
    }

    /**
     * @return string
     */
    public function getFechaInsert(): string
    {
        return $this->FechaInsert;
    }

    /**
     * @param string $FechaInsert
     */
    public function setFechaInsert(string $FechaInsert): void
    {
        $this->FechaInsert = $FechaInsert;
    }



    public static function buscarForId($id)
    {
        $Persona = new Persona();
        if ($id > 0){
            $getrow = $Persona->getRow("SELECT * FROM persona WHERE IdPersona =?", array($id));
            $Persona->IdPersona = $getrow['IdPersona'];
            $Persona->Documento_P = $getrow['Documento_P'];
            $Persona->Nombre_P = $getrow['Nombre_P'];
            $Persona->Apellido_P = $getrow['Apellido_P'];
            $Persona->Telefono_P = $getrow['Telefono_P'];
            $Persona->Direcccion_P = $getrow['Direcccion_P'];
            $Persona->Rh_P = $getrow['Rh_P'];
            $Persona->Rol_P = $getrow['Rol_P'];
            $Persona->Emai_P = $getrow['Emai_P'];
            $Persona->Contraseña_P = $getrow['Contraseña_P'];
            $Persona->FechaInsert = $getrow['FechaInsert'];
            $Persona->Disconnect();
            return $Persona;
        }else{
            $Persona->Disconnect();
            unset($Persona);
            return NULL;
        }
    }

    public static function buscar($query)
    {
        $arrPersonas = array();
        $tmp = new Persona();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Persona = new Persona();

            $Persona->IdPersona = $valor['IdPersona'];
            $Persona->Documento_P = $valor['Documento_P'];
            $Persona->Nombre_P = $valor['Nombre_P'];
            $Persona->Apellido_P = $valor['Apellido_P'];
            $Persona->Telefono_P = $valor['Telefono_P'];
            $Persona->Direcccion_P = $valor['Direcccion_P'];
            $Persona->Rh_P = $valor['Rh_P'];
            $Persona->Rol_P = $valor['Rol_P'];
            $Persona->Emai_P = $valor['Emai_P'];
            $Persona->Contraseña_P = $valor['Contraseña_P'];
            $Persona->FechaInsert = $valor['FechaInsert'];
            $Persona->Disconnect();
            array_push($arrPersonas, $Persona);
        }
        $tmp->Disconnect();
        return $arrPersonas;
    }

    public static function getAll()
    {
        return Persona::buscar("SELECT * FROM persona");
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO persona VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())", array(
                $this->Documento_P,
                $this->Nombre_P,
                $this->Apellido_P,
                $this->Telefono_P,
                $this->Direcccion_P,
                $this->Rh_P,
                $this->Rol_P,
                $this->Emai_P,
                $this->Contraseña_P,
                $this->FechaInsert,
             )
        );

        $this->Disconnect();
    }

    public function editar()
    {
        $this->updateRow("UPDATE persona SET Documento_P = ?, Nombre_P = ?, Apellido_P = ?, Telefono_P = ?, Direcccion_P = ?, Rh_P = ?, Rol_P = ?, Emai_P = ?, Contraseña_P = ?, FechaInsert = NOW() WHERE IdPersona = ?", array(
            $this->Documento_P,
            $this->Nombre_P,
            $this->Apellido_P,
            $this->Telefono_P,
            $this->Direcccion_P,
            $this->Rh_P,
            $this->Rol_P,
            $this->Emai_P,
            $this->Contraseña_P,
            $this->IdPersona,
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }





    public function Login($Emai_P, $Contraseña_P){
        $tmp = new Persona();
        $resultPersonas = $tmp->getRows("SELECT * FROM persona WHERE Emai_P = '$Emai_P'");
        if(count($resultPersonas) >= 1){
            $getrows = $tmp->getRows("SELECT * FROM persona WHERE Emai_P = '$Emai_P' AND Contraseña_P = '$Contraseña_P'");
            if(count($getrows) >= 1){                foreach ($getrows as $valor) {
                    $resultPersonas = new Persona($valor);
                    return $resultPersonas;
                }
            }else{
                return "Contraseña Incorrecta";
            }
        }else{
            return "Usuario Incorrecto";
        }

        $tmp->Disconnect();
        return null;
    }

}