<?php

class Controller_Product extends Controller {
    
    function action_index() {
        $this->view->generate('product_view.php', 'template_view.php');
    }

}