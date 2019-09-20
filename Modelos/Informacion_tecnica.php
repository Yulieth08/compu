<?php

/**
 * Created by PhpStorm.
 * User: CAPACITACION-PC
 * Date: 16/6/2017
 * Time: 14:49
 */
require_once('db_abstract_class.php');

class Informacion_tecnica extends db_abstract_class
{
    private $Id_Informacion_Tecnica;
    private $Alimentacion;
    private $Insumos;
    private $Voltaje;
    private $Frecuencia;
    private $Corriente;
    private $Humedad_Relativa;
    private $Capacidad;
    private $Bateria;
    private $Temperatura;
    private $Instalaciones;
    private $Tecnologia;
    private $Personal;
    private $Calibracion;
    private $Periocidad;
    private $Uso;
    private $FechaInsert;


    public function __construct($info_tecnica_data=array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($info_tecnica_data)>1){ //
            foreach ($info_tecnica_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->Id_Informacion_Tecnica = "";
            $this->Alimentacion = "";
            $this->Insumos = "";
            $this->Voltaje = "";
            $this->Frecuencia = "";
            $this->Corriente = "";
            $this->Humedad_Relativa = "";
            $this->Capacidad = "";
            $this->Bateria = "";
            $this->Temperatura = "";
            $this->Tecnologia = "";
            $this->Personal = "";
            $this->Calibracion = "";
            $this->Periocidad = "";
            $this->Uso = "";
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
    public function getIdInformacionTecnica(): string
    {
        return $this->Id_Informacion_Tecnica;
    }

    /**
     * @param string $Id_Informacion_Tecnica
     */
    public function setIdInformacionTecnica(string $Id_Informacion_Tecnica): void
    {
        $this->Id_Informacion_Tecnica = $Id_Informacion_Tecnica;
    }

    /**
     * @return string
     */
    public function getAlimentacion(): string
    {
        return $this->Alimentacion;
    }

    /**
     * @param string $Alimentacion
     */
    public function setAlimentacion(string $Alimentacion): void
    {
        $this->Alimentacion = $Alimentacion;
    }

    /**
     * @return string
     */
    public function getInsumos(): string
    {
        return $this->Insumos;
    }

    /**
     * @param string $Insumos
     */
    public function setInsumos(string $Insumos): void
    {
        $this->Insumos = $Insumos;
    }

    /**
     * @return string
     */
    public function getVoltaje(): string
    {
        return $this->Voltaje;
    }

    /**
     * @param string $Voltaje
     */
    public function setVoltaje(string $Voltaje): void
    {
        $this->Voltaje = $Voltaje;
    }

    /**
     * @return string
     */
    public function getFrecuencia(): string
    {
        return $this->Frecuencia;
    }

    /**
     * @param string $Frecuencia
     */
    public function setFrecuencia(string $Frecuencia): void
    {
        $this->Frecuencia = $Frecuencia;
    }

    /**
     * @return string
     */
    public function getCorriente(): string
    {
        return $this->Corriente;
    }

    /**
     * @param string $Corriente
     */
    public function setCorriente(string $Corriente): void
    {
        $this->Corriente = $Corriente;
    }

    /**
     * @return string
     */
    public function getHumedadRelativa(): string
    {
        return $this->Humedad_Relativa;
    }

    /**
     * @param string $Humedad_Relativa
     */
    public function setHumedadRelativa(string $Humedad_Relativa): void
    {
        $this->Humedad_Relativa = $Humedad_Relativa;
    }

    /**
     * @return string
     */
    public function getCapacidad(): string
    {
        return $this->Capacidad;
    }

    /**
     * @param string $Capacidad
     */
    public function setCapacidad(string $Capacidad): void
    {
        $this->Capacidad = $Capacidad;
    }

    /**
     * @return string
     */
    public function getBateria(): string
    {
        return $this->Bateria;
    }

    /**
     * @param string $Bateria
     */
    public function setBateria(string $Bateria): void
    {
        $this->Bateria = $Bateria;
    }

    /**
     * @return string
     */
    public function getTemperatura(): string
    {
        return $this->Temperatura;
    }

    /**
     * @param string $Temperatura
     */
    public function setTemperatura(string $Temperatura): void
    {
        $this->Temperatura = $Temperatura;
    }

    /**
     * @return mixed
     */
    public function getInstalaciones()
    {
        return $this->Instalaciones;
    }

    /**
     * @param mixed $Instalaciones
     */
    public function setInstalaciones($Instalaciones): void
    {
        $this->Instalaciones = $Instalaciones;
    }

    /**
     * @return string
     */
    public function getTecnologia(): string
    {
        return $this->Tecnologia;
    }

    /**
     * @param string $Tecnologia
     */
    public function setTecnologia(string $Tecnologia): void
    {
        $this->Tecnologia = $Tecnologia;
    }

    /**
     * @return string
     */
    public function getPersonal(): string
    {
        return $this->Personal;
    }

    /**
     * @param string $Personal
     */
    public function setPersonal(string $Personal): void
    {
        $this->Personal = $Personal;
    }

    /**
     * @return string
     */
    public function getCalibracion(): string
    {
        return $this->Calibracion;
    }

    /**
     * @param string $Calibracion
     */
    public function setCalibracion(string $Calibracion): void
    {
        $this->Calibracion = $Calibracion;
    }

    /**
     * @return string
     */
    public function getPeriocidad(): string
    {
        return $this->Periocidad;
    }

    /**
     * @param string $Periocidad
     */
    public function setPeriocidad(string $Periocidad): void
    {
        $this->Periocidad = $Periocidad;
    }

    /**
     * @return string
     */
    public function getUso(): string
    {
        return $this->Uso;
    }

    /**
     * @param string $Uso
     */
    public function setUso(string $Uso): void
    {
        $this->Uso = $Uso;
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
            $getrow = $Persona->getRow("SELECT * FROM persona WHERE idPersona =?", array($id));
            $Persona->idPersona = $getrow['idPersona'];
            $Persona->Tipo_Documento = $getrow['Tipo_Documento'];
            $Persona->Documento = $getrow['Documento'];
            $Persona->Nombres = $getrow['Nombres'];
            $Persona->Apellidos = $getrow['Apellidos'];
            $Persona->Telefono = $getrow['Telefono'];
            $Persona->Direccion = $getrow['Direccion'];
            $Persona->Correo = $getrow['Correo'];
            $Persona->Foto = $getrow['Foto'];
            $Persona->NRP = $getrow['NRP'];
            $Persona->Fecha_Registro = $getrow['Fecha_Registro'];
            $Persona->Profesion = $getrow['Profesion'];
            $Persona->Usuario = $getrow['Usuario'];
            $Persona->Contrasena = $getrow['Contrasena'];
            $Persona->Tipo_Usuario = $getrow['Tipo_Usuario'];
            $Persona->Observaciones = $getrow['Observaciones'];
            $Persona->Estado = $getrow['Estado'];
            $Persona->relEspecialidades = $Persona->obtenerEspecialidades($getrow['idPersona']);
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
            $Persona->idPersona = $valor['idPersona'];
            $Persona->Tipo_Documento = $valor['Tipo_Documento'];
            $Persona->Documento = $valor['Documento'];
            $Persona->Nombres = $valor['Nombres'];
            $Persona->Apellidos = $valor['Apellidos'];
            $Persona->Telefono = $valor['Telefono'];
            $Persona->Direccion = $valor['Direccion'];
            $Persona->Correo = $valor['Correo'];
            $Persona->Foto = $valor['Foto'];
            $Persona->NRP = $valor['NRP'];
            $Persona->Fecha_Registro = $valor['Fecha_Registro'];
            $Persona->Profesion = $valor['Profesion'];
            $Persona->Usuario = $valor['Usuario'];
            $Persona->Contrasena = $valor['Contrasena'];
            $Persona->Tipo_Usuario = $valor['Tipo_Usuario'];
            $Persona->Observaciones = $valor['Observaciones'];
            $Persona->Estado = $valor['Estado'];
            $Persona->relEspecialidades = $Persona->obtenerEspecialidades($valor['idPersona']);
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
        $this->insertRow("INSERT INTO persona VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?)", array(
                $this->Tipo_Documento,
                $this->Documento,
                $this->Nombres,
                $this->Apellidos,
                $this->Telefono,
                $this->Direccion,
                $this->Correo,
                $this->Foto,
                $this->NRP,
                $this->Profesion,
                $this->Usuario,
                $this->Contrasena,
                $this->Tipo_Usuario,
                $this->Observaciones,
                $this->Estado,
            )
        );

        if($this->relEspecialidades != "" and !empty($this->relEspecialidades) and isset($this->relEspecialidades)){
            $this->idPersona = $this->getLastId();
            $this->asociarEspecialidad();
        }
        $this->Disconnect();
    }

    public function editar()
    {
        $this->updateRow("UPDATE persona SET Tipo_Documento = ?, Documento = ?, Nombres = ?, Apellidos = ?, Telefono = ?, Direccion = ?, Correo = ?, Foto = ?, NRP = ?, Fecha_Registro = NOW(), Profesion = ?, Usuario = ?, Contrasena = ?, Tipo_Usuario = ?, Observaciones = ?, Estado = ? WHERE idPersona = ?", array(
            $this->Tipo_Documento,
            $this->Documento,
            $this->Nombres,
            $this->Apellidos,
            $this->Telefono,
            $this->Direccion,
            $this->Correo,
            $this->Foto,
            $this->NRP,
            $this->Profesion,
            $this->Usuario,
            $this->Contrasena,
            $this->Tipo_Usuario,
            $this->Observaciones,
            $this->Estado,
            $this->idPersona,
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }

    public function eliminarEspecialidad($idPersona, $idEspecialidad)
    {
        $idPersona = (!empty($idPersona) && isset($idPersona)) ? $idPersona : $this->idPersona;
        $idEspecialidad = (!empty($idEspecialidad) && isset($idEspecialidad)) ? $idEspecialidad : $this->relEspecialidades->getIdEspecialidad();

        $this->deleteRow("DELETE FROM persona_has_especialidad WHERE Especialidad = ? AND Persona = ?", array(
                $idEspecialidad,
                $idPersona,
            )
        );
        $this->Disconnect();
    }

    public function asociarEspecialidad($IdPersona=0, $IdEspecialidad=0){
        $IdPersona = (!empty($IdPersona) && isset($IdPersona)) ? $IdPersona : $this->idPersona;
        $IdEspecialidad = (!empty($IdEspecialidad) && isset($IdEspecialidad)) ? $IdEspecialidad : $this->relEspecialidades->getIdEspecialidad();

        $this->insertRow("INSERT INTO persona_has_especialidad VALUES (?, ?)", array(
                $IdEspecialidad,
                $IdPersona,
            )
        );
        $this->Disconnect();
    }

    public function obtenerEspecialidades($IdPersona){
        $arrEspecialidades = array();
        $tmp = new Persona();
        $getrows = $tmp->getRows("SELECT * FROM persona_has_especialidad WHERE Persona = ".$IdPersona.";");
        foreach ($getrows as $valor) {
            $Especialidad = Especialidad::buscarForId($valor['Especialidad']);
            $Especialidad->Disconnect();
            array_push($arrEspecialidades, $Especialidad);
        }
        $tmp->Disconnect();
        return $arrEspecialidades;
    }

    public function Login($Usuario, $Contraseña){
        $tmp = new Persona();
        $resultPersonas = $tmp->getRows("SELECT * FROM persona WHERE Usuario = '$Usuario'");
        if(count($resultPersonas) >= 1){
            $getrows = $tmp->getRows("SELECT * FROM persona WHERE Usuario = '$Usuario' AND Contrasena = '$Contraseña'");
            if(count($getrows) >= 1){
                foreach ($getrows as $valor) {
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