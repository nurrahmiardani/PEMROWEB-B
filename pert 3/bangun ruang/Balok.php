<?php 
    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;

        public function setPanjang ($pan){
            $this->panjang = $pan;
            
        }
        public function getPanjang(){
            return $this->panjang;
        }

        public function getLebar(){
            return $this->lebar;
        }

        public function getTinggi(){
            return $this->tinggi;
        }
        
        public function setLebar ($leb){
            $this->lebar = $leb;
        }
        public function setTinggi ($ting){
            $this->tinggi = $ting;
        }

        public function getLuas(){
            $luas = 2*(($this->panjang*$this->tinggi)+($this->panjang*$this->tinggi)+($this->tinggi*$this->lebar));
            return $luas;
        }

        public function getVolume(){
            $volum = ($this->panjang*$this->tinggi*$this->lebar);
            return $volum;
        }
    }

?>