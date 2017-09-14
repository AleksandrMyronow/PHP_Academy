<?php
/**
 * Created by PhpStorm.
 * User: aleksandrmyronov
 * Date: 28.08.17
 * Time: 16:41
 */

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.phtml', 'template_view.phtml');
    }
}