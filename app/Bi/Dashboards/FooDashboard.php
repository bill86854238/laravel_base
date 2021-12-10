<?php

namespace App\Bi\Dashboards;

use LaravelBi\LaravelBi\Dashboard;

class FooDashboard extends Dashboard
{

    public $model  = App\FooModel::class;
    public $uriKey = 'fooDashboard';
    public $name   = 'FooDashboard';

    public function filters()
    {
        return [
            
        ];
    }

    public function widgets()
    {
        return [
            
        ];
    }
}
