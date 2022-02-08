<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini adalah Controller Coba dengan Method Index";
    }

    public function about()
    {
        echo "Matur Nuwun <br>";
        echo "Nama saya $this->nama";
    }
}
