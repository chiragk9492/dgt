<?php

namespace App\Http\Controllers\API;
use App\Helpers\ApiResponse;

use App\Http\Controllers\Controller;
use App\Models\DisplayImages;

class UserController extends Controller
{
    public function getImages()
    {
        try {
            
            $images = DisplayImages::select('image','type','text','subtext')->get()->groupBy('type');

            return ApiResponse::success($images);

        } catch (\Exception $e) {

            return ApiResponse::error($e->getMessage());
        }
        
    }
}
