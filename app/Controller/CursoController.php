<?php

    class CursoController extends Controller{

        public function index(){

            echo 'Lista';

        }

        public function create(){

            $this->render('create');

        }

        public function insert(){

            echo 'oi';

        }

    }