<?php

class Services extends Controller {
    public function index()
    {
    
        $this->view('service/index');
        $this->view('templates/footer');
     
    }
}