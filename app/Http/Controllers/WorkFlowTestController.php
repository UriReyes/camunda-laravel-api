<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Camunda\Http\ProcessDefinitionClient;

class WorkFlowTestController extends Controller
{
    public function index()
    {
        $variables = ['title' => ['value' => 'Sample Title', 'type' => 'string']];

        $instance = ProcessDefinitionClient::find('Process_0kjw12u:1:27b29a50-3e73-11ec-8ba2-0242ac110002');
        dd($instance);
    }
}
