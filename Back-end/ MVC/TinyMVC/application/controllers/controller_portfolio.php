<?php
/**
 * Created by PhpStorm.
 * User: aleksandrmyronov
 * Date: 28.08.17
 * Time: 16:42
 */

class Controller_Portfolio extends Controller
{
    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.phtml', 'template_view.php', $data);
    }
}