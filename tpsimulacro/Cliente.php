<?php

class Cliente {
    private $nombreInt;
    private $apellidoInt;
    private $estadoBajaInt;
    private $tipoDocumentoInt;
    private $numeroDocumentoInt;
         public function __construct($nombreExt,$apellidoExt,$estadoBajaExt,$tipoDocumentoExt,$numeroDocumentoExt)
         {
             $this->nombreInt = $nombreExt;
             $this->apellidoInt = $apellidoExt;
             $this->estadoBajaInt = $estadoBajaExt;
             $this->tipoDocumentoInt = $tipoDocumentoExt;
             $this->numeroDocumentoInt = $numeroDocumentoExt;
         }
 
 
 
 
 
    /**
     * Get the value of nombreInt
     */ 
    public function getNombreInt()
    {
       return $this->nombreInt;
    }
 
    /**
     * Set the value of nombreInt
     *
     * @return  self
     */ 
    public function setNombreInt($nombreInt)
    {
       $this->nombreInt = $nombreInt;
 
       return $this;
    }
 
    /**
     * Get the value of apellidoInt
     */ 
    public function getApellidoInt()
    {
       return $this->apellidoInt;
    }
 
    /**
     * Set the value of apellidoInt
     *
     * @return  self
     */ 
    public function setApellidoInt($apellidoInt)
    {
       $this->apellidoInt = $apellidoInt;
 
       return $this;
    }
 
    /**
     * Get the value of estadoBajaInt
     */ 
    public function getEstadoBajaInt()
    {
       return $this->estadoBajaInt;
    }
 
    /**
     * Set the value of estadoBajaInt
     *
     * @return  self
     */ 
    public function setEstadoBajaInt($estadoBajaInt)
    {
       $this->estadoBajaInt = $estadoBajaInt;
 
       return $this;
    }
 
    /**
     * Get the value of tipoDocumentoInt
     */ 
    public function getTipoDocumentoInt()
    {
       return $this->tipoDocumentoInt;
    }
 
    /**
     * Set the value of tipoDocumentoInt
     *
     * @return  self
     */ 
    public function setTipoDocumentoInt($tipoDocumentoInt)
    {
       $this->tipoDocumentoInt = $tipoDocumentoInt;
 
       return $this;
    }
 
    /**
     * Get the value of numeroDocumentoInt
     */ 
    public function getNumeroDocumentoInt()
    {
       return $this->numeroDocumentoInt;
    }
 
    /**
     * Set the value of numeroDocumentoInt
     *
     * @return  self
     */ 
    public function setNumeroDocumentoInt($numeroDocumentoInt)
    {
       $this->numeroDocumentoInt = $numeroDocumentoInt;
 
       return $this;
    }
    public function __toString()
    {
        return " datos cliente:
nombre: {$this->nombreInt}
apellido: {$this->apellidoInt}
estado: {$this->estadoBajaInt}
tipo de documento: {$this->tipoDocumentoInt}
numero de documento: {$this->numeroDocumentoInt}
";
    }



}


 