<?php

class Venta {
   private $numeroVentaInt;
   private $fechaVentaInt;
   private $objClienteInt;
   private $coleccionMotosInt;
   private $precioFinalInt;

     public function __construct($numeroVentaExt,$fechaVentaExt,$objClienteExt,$coleccionMotosExt,$precioFinalExt)
     {
        $this->numeroVentaInt = $numeroVentaExt;
        $this->fechaVentaInt  = $fechaVentaExt;
        $this->objClienteInt = $objClienteExt;
        $this->coleccionMotosInt = $coleccionMotosExt;
        $this->precioFinalInt = $precioFinalExt;
     }






   /**
    * Get the value of numeroVentaInt
    */ 
   public function getNumeroVentaInt()
   {
      return $this->numeroVentaInt;
   }

   /**
    * Set the value of numeroVentaInt
    *
    * @return  self
    */ 
   public function setNumeroVentaInt($numeroVentaInt)
   {
      $this->numeroVentaInt = $numeroVentaInt;

      return $this;
   }

   /**
    * Get the value of fechaVentaInt
    */ 
   public function getFechaVentaInt()
   {
      return $this->fechaVentaInt;
   }

   /**
    * Set the value of fechaVentaInt
    *
    * @return  self
    */ 
   public function setFechaVentaInt($fechaVentaInt)
   {
      $this->fechaVentaInt = $fechaVentaInt;

      return $this;
   }

   /**
    * Get the value of objClienteInt
    */ 
   public function getObjClienteInt()
   {
      return $this->objClienteInt;
   }

   /**
    * Set the value of objClienteInt
    *
    * @return  self
    */ 
   public function setObjClienteInt($objClienteInt)
   {
      $this->objClienteInt = $objClienteInt;

      return $this;
   }

   /**
    * Get the value of coleccionMotosInt
    */ 
   public function getColeccionMotosInt()
   {
      return $this->coleccionMotosInt;
   }

   /**
    * Set the value of coleccionMotosInt
    *
    * @return  self
    */ 
   public function setColeccionMotosInt($coleccionMotosInt)
   {
      $this->coleccionMotosInt = $coleccionMotosInt;

      return $this;
   }

   /**
    * Get the value of precioFinalInt
    */ 
   public function getPrecioFinalInt()
   {
      return $this->precioFinalInt;
   }

   /**
    * Set the value of precioFinalInt
    *
    * @return  self
    */ 
   public function setPrecioFinalInt($precioFinalInt)
   {
      $this->precioFinalInt = $precioFinalInt;

      return $this;
   }
   public function incorporarMoto($objMoto)
   {
   if ($objMoto->getEstadoVenta() !=false ){
    $this->setPrecioFinalInt($objMoto->getCosto());
    $this->setColeccionMotosInt(array_push($this->getColeccionMotosInt(),$objMoto));


   }

   }
   public function __toString()
   {
    return "datos venta
    numero: {$this->getNumeroVentaInt()}
    fecha: {$this->getPrecioFinalInt()}
objeto cliente: {$this->getObjClienteInt()}
coleccion de motos: {$this->getColeccionMotosInt()}
precio final: {$this->getPrecioFinalInt()}
";
    
    
    
   }



}



