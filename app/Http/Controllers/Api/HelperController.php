<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HelperController extends Controller
{
    public function __construct()
    {
        //sleep(5);
    }

    public function index(Request $request)
    {
        $action = $request->get('action') ?? '';

        switch ($action) {
            case 'getCategoryWithSubCategory':
                return $this->$action();
                break;
            
            default:
                return response()->json(['message' => 'Action not found'], 400);    
                break;
        }
    }

    private function getCategoryWithSubCategory()
    {
        return response()->json(['categories' => Category::with('subcategory')->get()], 200);
    }

}
