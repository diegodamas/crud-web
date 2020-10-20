<?php

    class ErroController extends Controller{

        public function index(){

            $this->render('erro', ['erro' => 'Erro na requisição']);

        }
    }