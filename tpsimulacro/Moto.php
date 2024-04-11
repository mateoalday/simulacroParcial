<?php



class Moto {
   private $codigoInt;
   private $costoInt;
   private $anioFabricacionInt;
   private $descripcionInt;
   private $porcentajeIncrementoAnualInt;
   private $estadoVentasInt;
     public function __construct($codigoExt,$costoExt,$anioFabricacionExt,$descripcionExt,$porcentajeIncrementoAnualExt,$estadoVentaExt)
     {
        $this-> codigoInt = $codigoExt;
        $this-> costoInt = $costoExt;
        $this-> anioFabricacionInt = $anioFabricacionExt; 
        $this-> descripcionInt = $descripcionExt;
        $this-> porcentajeIncrementoAnualInt = $porcentajeIncrementoAnualExt;
        $this-> estadoVentasInt = $estadoVentaExt;

     }







   /**
    * Get the value of codigoInt
    */ 
   public function getCodigo()
   {
      return $this->codigoInt;
   }

   /**
    * Set the value of codigoInt
    *
    * @return  self
    */ 
   public function setCodigo($codigoInt)
   {
      $this->codigoInt = $codigoInt;

      return $this;
   }

   /**
    * Get the value of costoInt
    */ 
   public function getCosto()
   {
      return $this->costoInt;
   }

   /**
    * Set the value of costoInt
    *
    * @return  self
    */ 
   public function setCosto($costoInt)
   {
      $this->costoInt = $costoInt;

      return $this;
   }

   /**
    * Get the value of anioFabricacionInt
    */ 
   public function getAnioFabricacion()
   {
      return $this->anioFabricacionInt;
   }

   /**
    * Set the value of anioFabricacionInt
    *
    * @return  self
    */ 
   public function setAnioFabricacion($anioFabricacionInt)
   {
      $this->anioFabricacionInt = $anioFabricacionInt;

      return $this;
   }

   /**
    * Get the value of descripcionInt
    */ 
   public function getDescripcion()
   {
      return $this->descripcionInt;
   }

   /**
    * Set the value of descripcionInt
    *
    * @return  self
    */ 
   public function setDescripcion($descripcionInt)
   {
      $this->descripcionInt = $descripcionInt;

      return $this;
   }

   /**
    * Get the value of porcentajeIncrementoAnualInt
    */ 
   public function getPorcentajeIncrementoAnual()
   {
      return $this->porcentajeIncrementoAnualInt;
   }

   /**
    * Set the value of porcentajeIncrementoAnualInt
    *
    * @return  self
    */ 
   public function setPorcentajeIncrementoAnual($porcentajeIncrementoAnualInt)
   {
      $this->porcentajeIncrementoAnualInt = $porcentajeIncrementoAnualInt;

      return $this;
   }

   

  
   /**
    * Get the value of estadoVentasInt
    */ 
   public function getEstadoVentas()
   {
      return $this->estadoVentasInt;
   }

   /**
    * Set the value of estadoVentasInt
    *
    * @return  self
    */ 
   public function setEstadoVentas($estadoVentasInt)
   {
      $this->estadoVentasInt = $estadoVentasInt;

      return $this;
   }

   public function darPrecioVenta()
   {
    $venta=-1;
    if($this->getEstadoVentas() != false){
       $venta=$this->getCosto() + $this->getCosto()*((2024-$this->getAnioFabricacion())*$this->getPorcentajeIncrementoAnual());


    }
    return $venta;


   }
   public function __toString()
   {
    return "datos motos;
    codigo:{$this->getCodigo()}
    costo:{$this->getCosto()}
    
    anio de fabricacion: {$this->getAnioFabricacion()}
    descripcion: {$this->getDescripcion()}
    porcentaje incremento anual: {$this->getPorcentajeIncrementoAnual()}
    estado de venta: {$this->getEstadoVentas()}
        ";

   }


}