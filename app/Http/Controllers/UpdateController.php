<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function updateCategory(Request $request){
        $ItemNo = $request->input('ItemNo');
        $category = $request->input('category');

        return response()->json($ItemNo);
    }
}
