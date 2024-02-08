<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NetworkServices;

class ServiceInfoController extends Controller
{

    private $services;

    public function __construct()
    {
        $this->services = new NetworkServices();
        $this->services->getAccessToken();
        $this->services->setHeaders();
    }

    public function getServiceInfo(Request $request)
    {
        $id = $request->route()->parameter('serviceID');
        $data = $this->services->getServiceInfo($id);

        return view('info', ['serviceInfo' => $data]);
    }


}
