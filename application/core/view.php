<?php

class View {
    function generate($viewContent, $viewTemplate, $data = null) {

        include "application/views/".$viewTemplate; // Поключаем основной шаблон страниц

    }
}

