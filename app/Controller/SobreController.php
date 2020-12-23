<?php

    class SobreController extends Controller{

        public function index(){

            $this->render('sobre', ['value'=>'Tudo sobre este modulo']);

        }

    }