<?php
    class HomesController extends AppController{
        var $layout = 'custom_home_layout';
        function index(){
            $this->set('title_for_layout', 'Publisher HomePage');
        }
        function view(){

        }
    }
