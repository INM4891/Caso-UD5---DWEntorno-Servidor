<?php

//Creamos la clase Dado
class Dado { 

    //Creamos los atributos de la clase Dado con acceso Privado
    private $minNumDado;
    private $maxNumDado;

    //Creamos su método constructor
    public function Dado($minNumDado, $maxNumDado){
        $this->minNumDado = $minNumDado;
        $this->maxNumDado = $maxNumDado;

      }

    //Creamos los métodos getters y setters
    public function get_minNumDado(){
        return $this->minNumDado;
    }

    public function get_maxNumDado(){
        return $this->maxNumDado;
    }

    public function set_minNumDado($minNumDado){
      $this->minNumDado = $minNumDado;
    }

    public function set_maxNumDado($maxNumDado){
      $this->maxNumDado = $maxNumDado;
    }
    // Creamos la función tirar Dados y usamos la función rand para  generar el número aleatorio que almacenamos en la variable jugada
    public function tirar_Dados(){
      $jugada = rand($this->get_minNumDado(), $this->get_maxNumDado());
      return $jugada;

    }
}
 ?>













?>