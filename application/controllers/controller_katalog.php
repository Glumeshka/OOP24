<?php
class Controller_Katalog extends Controller 
{ 
    function action_index() 
    { 
        $this->view->generate('katalog_view.php', 'template_view.php'); 
    } 
}