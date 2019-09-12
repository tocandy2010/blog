<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RecommendService;

class IndexController extends Controller
{
    protected $user;
    protected $goods;

    //透過 DI 注入 Repository
    public function __construct(RecommendService $recommendService)
    {
        $this->recommendService = $recommendService;
    }

    public function index(Request $request)
    {
        return $this->recommendService->get();
    }
}