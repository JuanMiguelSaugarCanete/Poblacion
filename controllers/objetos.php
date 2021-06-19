<?php 
    
    class ciudadanos{
        public $nombre;
        public $voto=1;
        public $riqueza=1000;
        
        //metodos set
        public function setnombre($nombre){
            $this->nombre=$nombre;
        }
        public function setvoto($voto){
            $this->voto=$voto;
        }
        public function setedad($riqueza){
            $this->riqueza=$riqueza;
        }
        
        //metodos get
        public function getnombre(){
            return $this->nombre;
        }
        public function getvoto(){
            return $this->voto;
        }
        public function getriqueza(){
            return $this->riqueza;
        }

        
        public function mostrarinfociudadanos(ciudadanos $objeto, $aleatorio){
                $inf =  '<div class="card" style="width: 28rem;">
                            <img src="http://localhost/poblacion/assets/img/imagenespersonas/ciudadanos/'.$aleatorio.'.jpg" class="card-img-top" >
                        <div class="card-body">
                        <h2 class="card-title">'.$objeto->getnombre().'</h2>
                        <p class="card-text">
                            Voto:'.$objeto->getvoto().'
                        </p>
                        <p class="card-text">
                            Riqueza:'.$objeto->getriqueza().'
                        </p>
                            </div>
                        </div>';
            return $inf;
        }
        
    }
    class concejal extends ciudadanos{
        public $poder= 2;
        public $patrimonio= 500;

        public function __construct(){
            $this -> poder;
            $this -> patrimonio;
        }
        //metodos set
        public function setpoder($poder){
            $this->poder=$poder;
        }
        public function setpatrimonio($patrimonio){
            $this->patrimonio=$patrimonio;
        }
        //metodos get
        public function getpoder(){
            return $this->poder;
        }
        public function getpatrimonio(){
            return $this->patrimonio;
        }

        public function mostrarinfoconcejal(concejal $objeto, $aleatorio){
            $inf =  '<div class="card" style="width: 28rem;">
                            <img src="http://localhost/poblacion/assets/img/imagenespersonas/concejales/'.$aleatorio.'.jpg" class="card-img-top" >
                        <div class="card-body">
                        <h2 class="card-title">'.$objeto->getnombre().'</h2>
                        <p class="card-text">
                            Voto:'.$objeto->getvoto().'
                        </p>
                        <p class="card-text">
                            Riqueza:'.$objeto->getriqueza().'
                        </p>
                        <p class="card-text">
                        Poder:'.$objeto->getpoder().'
                        </p>
                        <p class="card-text">
                            Patrimonio:'.$objeto->getpatrimonio().'
                        </p>
                            </div>
                        </div>';
            return $inf;

        }
    }
    class tendero extends ciudadanos{
        public $utilidad= 4;
        public function __construct(){
            $this -> utilidad;
        }
        //metodos set
        public function setutilidad($utilidad){
            $this->utilidad=$utilidad;
        }
        //metodos get
        public function getutilidad(){
            return $this->utilidad;
        }
        public function mostrarinfotendero(tendero $objeto, $aleatorio){
            $inf =  '<div class="card" style="width: 28rem;">
                            <img src="http://localhost/poblacion/assets/img/imagenespersonas/tenderos/'.$aleatorio.'.jpg" class="card-img-top" >
                        <div class="card-body">
                        <h2 class="card-title">'.$objeto->getnombre().'</h2>
                        <p class="card-text">
                            Voto:'.$objeto->getvoto().'
                        </p>
                        <p class="card-text">
                            Riqueza:'.$objeto->getriqueza().'
                        </p>
                        <p class="card-text">
                            Patrimonio:'.$objeto->getutilidad().'
                        </p>
                            </div>
                        </div>';
            return $inf;

        }
    }
    class policia extends ciudadanos{
        public $seguridad = 5;

        public function __construct(){
            $this -> seguridad;
        }
        //metodos set
        public function setplaca($seguridad){
            $this->seguridad=$seguridad;
        }
        //metodos get
        public function getseguridad(){
            return $this->seguridad;
        }
    
        public function mostrarinfopolicia(policia $objeto, $aleatorio){
            $inf =  '<div class="card" style="width: 28rem;">
                            <img src="http://localhost/poblacion/assets/img/imagenespersonas/policias/'.$aleatorio.'.jpg" class="card-img-top" >
                        <div class="card-body">
                        <h2 class="card-title">'.$objeto->getnombre().'</h2>
                        <p class="card-text">
                            Voto:'.$objeto->getvoto().'
                        </p>
                        <p class="card-text">
                            Riqueza:'.$objeto->getriqueza().'
                        </p>
                        <p class="card-text">
                        Seguridad:'.$objeto->getseguridad().'
                        </p>
                        
                            </div>
                        </div>';

            return $inf;

        }

    }
    
    





?>