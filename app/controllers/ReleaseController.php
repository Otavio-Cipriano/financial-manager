<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\model\Release;
use app\services\ReleaseService;

class ReleaseController extends Controller{

    public function index(Request $request, Response $response){
        $releases = ReleaseService::load();
        $response->send(json_encode($releases));
    }

    public function store(Request $request, Response $response){
        $fields = (object) $request->body;
        // $release = new Release($fields->type, $fields->category, $fields->date, $fields->briefing, $fields-)
        // ReleaseService::create()
        echo json_encode($fields);
    }

    public function detail(Request $request, Response $response){
        $fields = (object) $request->body;
        $release = ReleaseService::findById($fields->id);
        echo json_encode($release);
    }

    public function delete(Request $request, Response $response){
        $fields = (object) $request->body;
        // $release = new Release($fields->type, $fields->category, $fields->date, $fields->briefing, $fields-)
        // ReleaseService::create()
        echo json_encode($fields);
    }
}