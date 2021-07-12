<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\My\Helper\CacheHelper;

use App\My\Service\TestService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function index (Request $input, $num)
    {
        $result = $this->testService->getFizzBuzz($num);
        return $result;
    }
}
