<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function UpdateItemNo(Request $request)
    {
        $ItemNo = $request->input('itemNo');
        $Customer = $request->input('fixCustomer');
        $UnitCost = $request->input('fixAvg');
        $Pcs = $request->input('fixPcs');
        $Price = $request->input('fixPrice');
        $Category = $request->input('fixCategory');

        if ($UnitCost) {
            $UnitCost = number_format($UnitCost, 2);
        }elseif($Pcs){
            $Pcs = number_format($Pcs, 2);
        }elseif ($Price) {
            $Price = number_format($Price, 2);
        }
        
        if ($ItemNo && $Customer) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'Customer' => $Customer
            ]);
        }
        elseif ($ItemNo && $UnitCost) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'PriceAvg' => $UnitCost
            ]);
        }
        elseif ($ItemNo && $Pcs) {
                DB::table('dataother')->where('Item No', $ItemNo)->update([
                'PcsAfter' => $Pcs
                ]);
        }
        elseif ($ItemNo && $Price) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'PriceAfter' => $Price
            ]);
        }
        elseif ($ItemNo && $Category) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'Category' => $Category
            ]);
        }
        return response()->json();
    }
}