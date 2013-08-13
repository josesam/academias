<?php
/* 
 * Aplica la formula para generar el valor
 * final de cada equipo que esta siendo cotizado
 * @author Jose Sambrano
 * 
 */

class Formula{
    private $valor_constante=0.3398;
    private $porcentaje_constante=0.0525;
    private $iva=1.12;
    private $valor_constante_exterior=1.4;
    private $utilidad;
    private $tipoproveedor;
    private $cantidad;
    private $costo;
    private $comisionVenta;
    private $comisionAreaTecnica;
    private $comisionTarjeta;


    public function __construct(){
        /// Cargar de la parametrizacion los valores constantes

        
    }
    /*
     * Asigna el valor de la utilidad pasada desde el formulario
     * para aplicar la formula
     * @$var float
     */
    public  function setUtilidad($var){
        $this->utilidad=(isset ($var))? (float)$var/100 : 0 ;
    }
    /*
     * Asigna el valor del tipo de Proveedor pasada desde el formulario
     * para aplicar la formula
     * @$var string
     */
    public function setTipoProveedor($var){
        $this->tipoproveedor=$var;
    }
    
    /*
     * Asigna el valor de la cantidad pasada desde el formulario
     * para aplicar la formula
     * @$var int
     */
    public function setCantidad($var){
        $this->cantidad=(isset ($var))? (int)$var : 0 ;
        
    }

    /*
     * Asigna el valor del costo pasado desde el formulario
     * para aplicar la formula
     * @$var float
     */
    public function setCosto($var){
        $this->costo=(isset ($var))? (float)$var : 0 ;

    }
    /*
     * Asigna el valor de la comision Venta pasada desde el formulario
     * para aplicar la formula
     * @$var float
     */
    public function setComisionVenta($var){
        $this->comisionVenta=(isset ($var))? (float)$var/100 : 0 ;

    }
    /*
     * Asigna el valor de la comision area tecnica pasada desde el formulario
     * para aplicar la formula
     * @$var float
     */
    public function setComisionAreaTecnica($var){
        $this->comisionAreaTecnica=(isset ($var))? (float)$var/100 : 0 ;

    }
    /*
     * Asigna el valor de la comision tarjeta pasada desde el formulario
     * para aplicar la formula
     * @$var float
     */
    public function setComisionTarjeta($var){
        $this->comisionTarjeta=(isset ($var))? (float)$var/100 : 0 ;
    }


    public function aplicarFormula(){
        $valorTotal=0;
        $costo_total=($this->cantidad*$this->costo);
        $suma_comision=$this->comisionAreaTecnica+$this->comisionVenta;
        $resta_comision=$this->comisionVenta+$this->utilidad+$this->comisionAreaTecnica+$this->porcentaje_constante;
        $multi_valores=$this->valor_constante-$this->comisionTarjeta*$this->iva;
        if(strtoupper(trim($this->tipoproveedor))==trim('LOCAL')){
            if(($this->utilidad<=25)&&($this->utilidad>0)){
               $valorTotal=$costo_total/(1-$resta_comision-($suma_comision)*$multi_valores);
               $valorTotal=($valorTotal==0)? $costo_total : $valorTotal;


               $respuesta[0]['respuesta']=true;
               $respuesta[0]['valor']=round($valorTotal,2);
            }else{
                $valorTotal=($valorTotal==0)? $costo_total : $valorTotal;
                $respuesta[0]['respuesta']=false;
                $respuesta[0]['valor']=$valorTotal;
            }
            
        }else{

            if(($this->utilidad<=25)&&($this->utilidad>0)){

                $valorTotal=($costo_total*$this->valor_constante_exterior)/(1-$resta_comision-($suma_comision)*$multi_valores);
                $valorTotal=($valorTotal==0)? $costo_total : $valorTotal;
                $respuesta[0]['respuesta']=true;
                $respuesta[0]['valor']=round($valorTotal,2);
            }else{
                $valorTotal=($valorTotal==0)? $costo_total : $valorTotal;
                $respuesta[0]['respuesta']=false;
                $respuesta[0]['valor']=$valorTotal;
                $valorTotal=0;

            }

        }
        return $respuesta;
        
    }


}
?>
