<?php

class MainController { // la classe parent 
    protected $view;
    protected $id;
    protected $data;// empêche de mod les données de view par un autre dev que soi
    
    public function render() { 
        $data = $this->data;
        require __DIR__.'/../views/front/layouts/header.phtml';
        require __DIR__."/../views/front/partials/".$this->view.".phtml"; // this fait ref à une des propriete protected
        require __DIR__.'/../views/front/layouts/footer.phtml';
    }
    
    public function getView() { // un getter retourne tjs la valeur de la propriete
        return $this->view;
    }
    
    public function setView($View) { // permet de mod la vue
        $this->view = $View  ;
    }
    
    public function getData() {
        return $this->data;
    }
    
    public function setData($data) {
        $this->data = $data;
    }

    public function getPosts($limit) {
        return $this->post;
    }
}

?>