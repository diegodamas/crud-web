<?php

    class Controller {

        private function _render($folder, $viewName, $viewData = []) {
            if(file_exists('app/View/'.$folder.'/'.$viewName.'.php')) {
                extract($viewData);
                $render = fn($vN, $vD = []) => $this->renderPartial($vN, $vD);
                require 'app/View/'.$folder.'/'.$viewName.'.php';
            }
        }

        private function renderPartial($viewName, $viewData = []) {
            $this->_render('templates', $viewName, $viewData);
        }

        public function render($viewName, $viewData = []) {
            $this->_render('pages', $viewName, $viewData);
        }

    }