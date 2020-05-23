<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }
    public function aboutAction()
    {
        $users = \App\Models\User::getAll();
        print_r($users);

        View::renderTemplate('Home/about.html',
            [
                'name'    => 'Dave',
                'colours' => ['red', 'green', 'blue','k']
            ]
        );
    }
    public function contactAction()
    {
        header('Optimizer: MiladKarimi');
        $result = [];
        $result['Error'] = 'kk';
        $myJSON = json_encode($result, JSON_UNESCAPED_UNICODE);
        echo $myJSON;
    }
}
