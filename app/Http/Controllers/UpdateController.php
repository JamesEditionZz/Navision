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
        $Pcs = $request->input('fixPcs');
        $Price = $request->input('fixPrice');
        $Category = $request->input('fixCategory');

        if ($Pcs == "0") {
            $Pcs = "0.00";
        }elseif ($Price == "0") {
            $Price = "0.00";
        }

        if ($ItemNo && $Customer) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'Customer' => $Customer
            ]);
        } elseif ($ItemNo && $Pcs) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'PcsAfter' => $Pcs
            ]);
        } elseif ($ItemNo && $Price) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'PriceAfter' => $Price
            ]);
        } elseif ($ItemNo && $Category) {
            DB::table('dataother')->where('Item No', $ItemNo)->update([
                'Category' => $Category
            ]);
        }

        return response()->json();
    }
}
