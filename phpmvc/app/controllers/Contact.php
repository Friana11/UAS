<?php

class Contact extends Controller {
    public function index()
    {
    
        $this->view('contact/index');
        $this->view('templates/footer');
     
    }
}