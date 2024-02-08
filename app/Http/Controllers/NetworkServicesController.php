<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NetworkServices;

class NetworkServicesController extends Controller
{

    private $services;

    public function __construct()
    {
        $this->services = new NetworkServices();
        $this->services->getAccessToken();
        $this->services->setHeaders();
    }

    public function allServicesList()
    {
        $data = $this->services->getAllServices();
        return view('list', ['allServices' => $data]);
    }

}
