<?php

namespace App\Controllers\Klub;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KlubController extends BaseController
{
    public function index()
    {
        // Dasboard Klub

        return view('klub/dashboard_klub');
    }
}