<?php

class Empresa{
   private $denominacionInt;
   private $direccionInt;
   private $coleccionClientesInt;
   private $coleccionMotosInt;
   private $coleccionVentasInt;

      public function __construct($denominacionExt,$direccionExt,$coleccionClientesExt,$coleccionMotosExt,$coleccionVentasExt)
      {
        $this->denominacionInt = $denominacionExt;
        $this->direccionInt = $direccionExt;
        $this->coleccionClientesInt = $coleccionClientesExt;
        $this->coleccionMotosInt = $coleccionMotosExt;
        $this->coleccionVentasInt = $coleccionVentasExt;
        
      }





   /**
    * Get the value of denominacionInt
    */ 
   public function getDenominacionInt()
   {
      return $this->denominacionInt;
   }

   /**
    * Set the value of denominacionInt
    *
    * @return  self
    */ 
   public function setDenominacionInt($denominacionInt)
   {
      $this->denominacionInt = $denominacionInt;

      return $this;
   }

   /**
    * Get the value of direccionInt
    */ 
   public function getDireccionInt()
   {
      return $this->direccionInt;
   }

   /**
    * Set the value of direccionInt
    *
    * @return  self
    */ 
   public function setDireccionInt($direccionInt)
   {
      $this->direccionInt = $direccionInt;

      return $this;
   }

   /**
    * Get the value of coleccionClientesInt
    */ 
   public function getColeccionClientesInt()
   {
      return $this->coleccionClientesInt;
   }

   /**
    * Set the value of coleccionClientesInt
    *
    * @return  self
    */ 
   public function setColeccionClientesInt($coleccionClientesInt)
   {
      $this->coleccionClientesInt = $coleccionClientesInt;

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
    * Get the value of coleccionVentasInt
    */ 
   public function getColeccionVentasInt()
   {
      return $this->coleccionVentasInt;
   }

   /**
    * Set the value of coleccionVentasInt
    *
    * @return  self
    */ 
   public function setColeccionVentasInt($coleccionVentasInt)
   {
      $this->coleccionVentasInt = $coleccionVentasInt;

      return $this;
   }
   public function retornarMoto($codigoMoto)
   {
       $i=0;
       $objRetorno = null;
       do{
           if ( $this->getColeccionMotosInt()[$i]->getCodigo() == $codigoMoto){
               $objRetorno = $this->getColeccionMotosInt()[$i];
           } else {
               $i++;
           }
       } while ( $i < count($this->getColeccionMotosInt()) && $this->getColeccionMotosInt()[$i]->getCodigo() != $codigoMoto );

       return $objRetorno;
   }

   public function registrarVenta($colCodigosMoto, $objCliente)
   {
       $importeFinal = 0;
       $ColeccionVentas = [];
       foreach ($colCodigosMoto as $codigo) {  
           $objMotoCodigoIgual = $this->retornarMoto($codigo);
           if ($objMotoCodigoIgual != null && $objMotoCodigoIgual->getEstadoVenta() != false && $objCliente->getEstadoBajaInt() != false){
               $this->setColeccionVentasInt(array_push($ColeccionVentas, [$this->retornarMoto($codigo),$objCliente]));
               $importeFinal += $objMotoCodigoIgual->getCosto();
           }
       }
       return $importeFinal;
   }

   public function retornarVentasXCliente($tipo, $numDoc){
       foreach ($this->getColeccionVentasInt() as $coleccionVenta){
           if ($coleccionVenta[1]->getTipoDocumentoInt() == $tipo && $coleccionVenta[1]->getNumeroDocumentoInt() == $numDoc){
               print_r($coleccionVenta[1]);
           }
       }
   }

   public function __toString()
   {
       return "datos empresa:
denominacion: {$this->getDenominacionInt()}
direccion: {$this->getDireccionInt()}
coleccion de clientes: {$this->getColeccionClientesInt()}
coleccion de motos: {$this->getColeccionMotosInt()} 
coleccion de ventas: {$this->getColeccionVentasInt()}
";

   }




}




