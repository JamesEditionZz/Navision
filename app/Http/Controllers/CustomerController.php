<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function DataCustomer(){

        $ItemNoDC1 = DB::table('item_all')
            ->select(
                'dataother.Item No as Item_No',
                'dataother.PriceAvg',
                'dataother.PcsAfter',
                'dataother.PriceAfter',
                'po.Quantity as Po_Quantity',
                'Neg.Quantity as Neg_Quantity',
                'purchase.Quantity as purchase_Quantity',
                'purchase.Cost Amount (Actual) as purchase_Cost',
                'returncuses.Quantity as returncuses_Quantity',
                'คืนของs.Quantity as returnitem_Quantity',
                'item_stock.Quantity as item_stock_Quantity',
                'item_stock.Amount as item_stock_Amount',
                'a71__f1_fg_bu02s.Quantity as a7f1fgbu02s_Quantity',
                'a72__f2_fg_bu10s.Quantity as a7f2fgbu10s_Quantity',
                'a73__f2_th_bu05s.Quantity as a7f2thbu05s_Quantity',
                'a74__f2_de_bu10s.Quantity as a7f2debu10s_Quantity',
                'a75__f2_ex_bu11s.Quantity as a7f2exbu11s_Quantity',
                'a76__f2_tw_bu04s.Quantity as a7f2twbu04s_Quantity',
                'a77__f2_tw_bu07s.Quantity as a7f2twbu07s_Quantity',
                'a78__f2_ce_bu10s.Quantity as a7f2cebu10s_Quantity',
                'a81__f1_fg_bu02s.Quantity as a8f1fgbu02s_Quantity',
                'a82__f2_fg_bu10s.Quantity as a8f2fgbu10s_Quantity',
                'a83__f2_th_bu05s.Quantity as a8f2thbu05s_Quantity',
                'a84__f2_de_bu10s.Quantity as a8f2debu10s_Quantity',
                'a85__f2_ex_bu11s.Quantity as a8f2exbu11s_Quantity',
                'a86__f2_tw_bu04s.Quantity as a8f2twbu04s_Quantity',
                'a87__f2_tw_bu07s.Quantity as a8f2twbu07s_Quantity',
                'a88__f2_ce_bu10s.Quantity as a8f2cebu10s_Quantity',
                'dc1_s.Quantity as dc1_s_Quantity',
                'dcp_s.Quantity as dcp_s_Quantity',
                'dcy_s.Quantity as dcy_s_Quantity',
                'dex_s.Quantity as dex_s_Quantity',
            )
            ->leftjoin('dataother', 'item_all.No', 'dataother.Item No')
            ->leftJoin('po', 'item_all.No', 'po.Item No')
            ->leftJoin('neg', 'item_all.No', 'neg.Item No')
            ->leftJoin('purchase', 'item_all.No', 'purchase.Item No')
            ->leftJoin('returncuses', 'item_all.No', 'returncuses.Item No')
            ->leftJoin('คืนของs', 'item_all.No', 'คืนของs.Item No')
            ->leftJoin('item_stock', 'item_all.No', 'item_stock.Item No')
            ->leftJoin('a71__f1_fg_bu02s', 'item_all.No', 'a71__f1_fg_bu02s.Item No')
            ->leftJoin('a72__f2_fg_bu10s', 'item_all.No', 'a72__f2_fg_bu10s.Item No')
            ->leftJoin('a73__f2_th_bu05s', 'item_all.No', 'a73__f2_th_bu05s.Item No')
            ->leftJoin('a74__f2_de_bu10s', 'item_all.No', 'a74__f2_de_bu10s.Item No')
            ->leftJoin('a75__f2_ex_bu11s', 'item_all.No', 'a75__f2_ex_bu11s.Item No')
            ->leftJoin('a76__f2_tw_bu04s', 'item_all.No', 'a76__f2_tw_bu04s.Item No')
            ->leftJoin('a77__f2_tw_bu07s', 'item_all.No', 'a77__f2_tw_bu07s.Item No')
            ->leftJoin('a78__f2_ce_bu10s', 'item_all.No', 'a78__f2_ce_bu10s.Item No')
            ->leftJoin('a81__f1_fg_bu02s', 'item_all.No', 'a81__f1_fg_bu02s.Item No')
            ->leftJoin('a82__f2_fg_bu10s', 'item_all.No', 'a82__f2_fg_bu10s.Item No')
            ->leftJoin('a83__f2_th_bu05s', 'item_all.No', 'a83__f2_th_bu05s.Item No')
            ->leftJoin('a84__f2_de_bu10s', 'item_all.No', 'a84__f2_de_bu10s.Item No')
            ->leftJoin('a85__f2_ex_bu11s', 'item_all.No', 'a85__f2_ex_bu11s.Item No')
            ->leftJoin('a86__f2_tw_bu04s', 'item_all.No', 'a86__f2_tw_bu04s.Item No')
            ->leftJoin('a87__f2_tw_bu07s', 'item_all.No', 'a87__f2_tw_bu07s.Item No')
            ->leftJoin('a88__f2_ce_bu10s', 'item_all.No', 'a88__f2_ce_bu10s.Item No')
            ->leftJoin('dc1_s', 'item_all.No', 'dc1_s.Item No')
            ->leftJoin('dcp_s', 'item_all.No', 'dcp_s.Item No')
            ->leftJoin('dcy_s', 'item_all.No', 'dcy_s.Item No')
            ->leftJoin('dex_s', 'item_all.No', 'dex_s.Item No')
            ->where('dataother.Customer', '=', 'DC1')
            ->where(function ($query){
                $query->where('dataother.Item No', 'LIKE', 'AS%')
                ->orWhere('dataother.Item No', 'LIKE', 'RM%')
                ->orWhere('dataother.Item No', 'LIKE', 'RMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'FN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SFN%')
                ->orWhere('dataother.Item No', 'LIKE', 'LN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SLN%')
                ->orWhere('dataother.Item No', 'LIKE', 'MT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'NT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SNT%')
                ->orWhere('dataother.Item No', 'LIKE', 'TW%')
                ->orWhere('dataother.Item No', 'LIKE', 'STW%');
            })
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoDCY = DB::table('item_all')
            ->select(
                'dataother.Item No as Item_No',
                'dataother.PriceAvg',
                'dataother.PcsAfter',
                'dataother.PriceAfter',
                'po.Quantity as Po_Quantity',
                'Neg.Quantity as Neg_Quantity',
                'purchase.Quantity as purchase_Quantity',
                'purchase.Cost Amount (Actual) as purchase_Cost',
                'returncuses.Quantity as returncuses_Quantity',
                'คืนของs.Quantity as returnitem_Quantity',
                'item_stock.Quantity as item_stock_Quantity',
                'item_stock.Amount as item_stock_Amount',
                'a71__f1_fg_bu02s.Quantity as a7f1fgbu02s_Quantity',
                'a72__f2_fg_bu10s.Quantity as a7f2fgbu10s_Quantity',
                'a73__f2_th_bu05s.Quantity as a7f2thbu05s_Quantity',
                'a74__f2_de_bu10s.Quantity as a7f2debu10s_Quantity',
                'a75__f2_ex_bu11s.Quantity as a7f2exbu11s_Quantity',
                'a76__f2_tw_bu04s.Quantity as a7f2twbu04s_Quantity',
                'a77__f2_tw_bu07s.Quantity as a7f2twbu07s_Quantity',
                'a78__f2_ce_bu10s.Quantity as a7f2cebu10s_Quantity',
                'a81__f1_fg_bu02s.Quantity as a8f1fgbu02s_Quantity',
                'a82__f2_fg_bu10s.Quantity as a8f2fgbu10s_Quantity',
                'a83__f2_th_bu05s.Quantity as a8f2thbu05s_Quantity',
                'a84__f2_de_bu10s.Quantity as a8f2debu10s_Quantity',
                'a85__f2_ex_bu11s.Quantity as a8f2exbu11s_Quantity',
                'a86__f2_tw_bu04s.Quantity as a8f2twbu04s_Quantity',
                'a87__f2_tw_bu07s.Quantity as a8f2twbu07s_Quantity',
                'a88__f2_ce_bu10s.Quantity as a8f2cebu10s_Quantity',
                'dc1_s.Quantity as dc1_s_Quantity',
                'dcp_s.Quantity as dcp_s_Quantity',
                'dcy_s.Quantity as dcy_s_Quantity',
                'dex_s.Quantity as dex_s_Quantity',
            )
            ->leftjoin('dataother', 'item_all.No', 'dataother.Item No')
            ->leftJoin('po', 'item_all.No', 'po.Item No')
            ->leftJoin('neg', 'item_all.No', 'neg.Item No')
            ->leftJoin('purchase', 'item_all.No', 'purchase.Item No')
            ->leftJoin('returncuses', 'item_all.No', 'returncuses.Item No')
            ->leftJoin('คืนของs', 'item_all.No', 'คืนของs.Item No')
            ->leftJoin('item_stock', 'item_all.No', 'item_stock.Item No')
            ->leftJoin('a71__f1_fg_bu02s', 'item_all.No', 'a71__f1_fg_bu02s.Item No')
            ->leftJoin('a72__f2_fg_bu10s', 'item_all.No', 'a72__f2_fg_bu10s.Item No')
            ->leftJoin('a73__f2_th_bu05s', 'item_all.No', 'a73__f2_th_bu05s.Item No')
            ->leftJoin('a74__f2_de_bu10s', 'item_all.No', 'a74__f2_de_bu10s.Item No')
            ->leftJoin('a75__f2_ex_bu11s', 'item_all.No', 'a75__f2_ex_bu11s.Item No')
            ->leftJoin('a76__f2_tw_bu04s', 'item_all.No', 'a76__f2_tw_bu04s.Item No')
            ->leftJoin('a77__f2_tw_bu07s', 'item_all.No', 'a77__f2_tw_bu07s.Item No')
            ->leftJoin('a78__f2_ce_bu10s', 'item_all.No', 'a78__f2_ce_bu10s.Item No')
            ->leftJoin('a81__f1_fg_bu02s', 'item_all.No', 'a81__f1_fg_bu02s.Item No')
            ->leftJoin('a82__f2_fg_bu10s', 'item_all.No', 'a82__f2_fg_bu10s.Item No')
            ->leftJoin('a83__f2_th_bu05s', 'item_all.No', 'a83__f2_th_bu05s.Item No')
            ->leftJoin('a84__f2_de_bu10s', 'item_all.No', 'a84__f2_de_bu10s.Item No')
            ->leftJoin('a85__f2_ex_bu11s', 'item_all.No', 'a85__f2_ex_bu11s.Item No')
            ->leftJoin('a86__f2_tw_bu04s', 'item_all.No', 'a86__f2_tw_bu04s.Item No')
            ->leftJoin('a87__f2_tw_bu07s', 'item_all.No', 'a87__f2_tw_bu07s.Item No')
            ->leftJoin('a88__f2_ce_bu10s', 'item_all.No', 'a88__f2_ce_bu10s.Item No')
            ->leftJoin('dc1_s', 'item_all.No', 'dc1_s.Item No')
            ->leftJoin('dcp_s', 'item_all.No', 'dcp_s.Item No')
            ->leftJoin('dcy_s', 'item_all.No', 'dcy_s.Item No')
            ->leftJoin('dex_s', 'item_all.No', 'dex_s.Item No')
            ->where('dataother.Customer', '=', 'DCY')
            ->where(function ($query){
                $query->where('dataother.Item No', 'LIKE', 'AS%')
                ->orWhere('dataother.Item No', 'LIKE', 'RM%')
                ->orWhere('dataother.Item No', 'LIKE', 'RMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'FN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SFN%')
                ->orWhere('dataother.Item No', 'LIKE', 'LN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SLN%')
                ->orWhere('dataother.Item No', 'LIKE', 'MT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'NT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SNT%')
                ->orWhere('dataother.Item No', 'LIKE', 'TW%')
                ->orWhere('dataother.Item No', 'LIKE', 'STW%');
            })
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoDCP = DB::table('item_all')
            ->select(
                'dataother.Item No as Item_No',
                'dataother.PriceAvg',
                'dataother.PcsAfter',
                'dataother.PriceAfter',
                'po.Quantity as Po_Quantity',
                'Neg.Quantity as Neg_Quantity',
                'purchase.Quantity as purchase_Quantity',
                'purchase.Cost Amount (Actual) as purchase_Cost',
                'returncuses.Quantity as returncuses_Quantity',
                'คืนของs.Quantity as returnitem_Quantity',
                'item_stock.Quantity as item_stock_Quantity',
                'item_stock.Amount as item_stock_Amount',
                'a71__f1_fg_bu02s.Quantity as a7f1fgbu02s_Quantity',
                'a72__f2_fg_bu10s.Quantity as a7f2fgbu10s_Quantity',
                'a73__f2_th_bu05s.Quantity as a7f2thbu05s_Quantity',
                'a74__f2_de_bu10s.Quantity as a7f2debu10s_Quantity',
                'a75__f2_ex_bu11s.Quantity as a7f2exbu11s_Quantity',
                'a76__f2_tw_bu04s.Quantity as a7f2twbu04s_Quantity',
                'a77__f2_tw_bu07s.Quantity as a7f2twbu07s_Quantity',
                'a78__f2_ce_bu10s.Quantity as a7f2cebu10s_Quantity',
                'a81__f1_fg_bu02s.Quantity as a8f1fgbu02s_Quantity',
                'a82__f2_fg_bu10s.Quantity as a8f2fgbu10s_Quantity',
                'a83__f2_th_bu05s.Quantity as a8f2thbu05s_Quantity',
                'a84__f2_de_bu10s.Quantity as a8f2debu10s_Quantity',
                'a85__f2_ex_bu11s.Quantity as a8f2exbu11s_Quantity',
                'a86__f2_tw_bu04s.Quantity as a8f2twbu04s_Quantity',
                'a87__f2_tw_bu07s.Quantity as a8f2twbu07s_Quantity',
                'a88__f2_ce_bu10s.Quantity as a8f2cebu10s_Quantity',
                'dc1_s.Quantity as dc1_s_Quantity',
                'dcp_s.Quantity as dcp_s_Quantity',
                'dcy_s.Quantity as dcy_s_Quantity',
                'dex_s.Quantity as dex_s_Quantity',
            )
            ->leftjoin('dataother', 'item_all.No', 'dataother.Item No')
            ->leftJoin('po', 'item_all.No', 'po.Item No')
            ->leftJoin('neg', 'item_all.No', 'neg.Item No')
            ->leftJoin('purchase', 'item_all.No', 'purchase.Item No')
            ->leftJoin('returncuses', 'item_all.No', 'returncuses.Item No')
            ->leftJoin('คืนของs', 'item_all.No', 'คืนของs.Item No')
            ->leftJoin('item_stock', 'item_all.No', 'item_stock.Item No')
            ->leftJoin('a71__f1_fg_bu02s', 'item_all.No', 'a71__f1_fg_bu02s.Item No')
            ->leftJoin('a72__f2_fg_bu10s', 'item_all.No', 'a72__f2_fg_bu10s.Item No')
            ->leftJoin('a73__f2_th_bu05s', 'item_all.No', 'a73__f2_th_bu05s.Item No')
            ->leftJoin('a74__f2_de_bu10s', 'item_all.No', 'a74__f2_de_bu10s.Item No')
            ->leftJoin('a75__f2_ex_bu11s', 'item_all.No', 'a75__f2_ex_bu11s.Item No')
            ->leftJoin('a76__f2_tw_bu04s', 'item_all.No', 'a76__f2_tw_bu04s.Item No')
            ->leftJoin('a77__f2_tw_bu07s', 'item_all.No', 'a77__f2_tw_bu07s.Item No')
            ->leftJoin('a78__f2_ce_bu10s', 'item_all.No', 'a78__f2_ce_bu10s.Item No')
            ->leftJoin('a81__f1_fg_bu02s', 'item_all.No', 'a81__f1_fg_bu02s.Item No')
            ->leftJoin('a82__f2_fg_bu10s', 'item_all.No', 'a82__f2_fg_bu10s.Item No')
            ->leftJoin('a83__f2_th_bu05s', 'item_all.No', 'a83__f2_th_bu05s.Item No')
            ->leftJoin('a84__f2_de_bu10s', 'item_all.No', 'a84__f2_de_bu10s.Item No')
            ->leftJoin('a85__f2_ex_bu11s', 'item_all.No', 'a85__f2_ex_bu11s.Item No')
            ->leftJoin('a86__f2_tw_bu04s', 'item_all.No', 'a86__f2_tw_bu04s.Item No')
            ->leftJoin('a87__f2_tw_bu07s', 'item_all.No', 'a87__f2_tw_bu07s.Item No')
            ->leftJoin('a88__f2_ce_bu10s', 'item_all.No', 'a88__f2_ce_bu10s.Item No')
            ->leftJoin('dc1_s', 'item_all.No', 'dc1_s.Item No')
            ->leftJoin('dcp_s', 'item_all.No', 'dcp_s.Item No')
            ->leftJoin('dcy_s', 'item_all.No', 'dcy_s.Item No')
            ->leftJoin('dex_s', 'item_all.No', 'dex_s.Item No')
            ->where('dataother.Customer', '=', 'DCP')
            ->where(function ($query){
                $query->where('dataother.Item No', 'LIKE', 'AS%')
                ->orWhere('dataother.Item No', 'LIKE', 'RM%')
                ->orWhere('dataother.Item No', 'LIKE', 'RMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'FN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SFN%')
                ->orWhere('dataother.Item No', 'LIKE', 'LN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SLN%')
                ->orWhere('dataother.Item No', 'LIKE', 'MT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'NT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SNT%')
                ->orWhere('dataother.Item No', 'LIKE', 'TW%')
                ->orWhere('dataother.Item No', 'LIKE', 'STW%');
            })
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoDEX = DB::table('item_all')
            ->select(
                'dataother.Item No as Item_No',
                'dataother.PriceAvg',
                'dataother.PcsAfter',
                'dataother.PriceAfter',
                'po.Quantity as Po_Quantity',
                'Neg.Quantity as Neg_Quantity',
                'purchase.Quantity as purchase_Quantity',
                'purchase.Cost Amount (Actual) as purchase_Cost',
                'returncuses.Quantity as returncuses_Quantity',
                'คืนของs.Quantity as returnitem_Quantity',
                'item_stock.Quantity as item_stock_Quantity',
                'item_stock.Amount as item_stock_Amount',
                'a71__f1_fg_bu02s.Quantity as a7f1fgbu02s_Quantity',
                'a72__f2_fg_bu10s.Quantity as a7f2fgbu10s_Quantity',
                'a73__f2_th_bu05s.Quantity as a7f2thbu05s_Quantity',
                'a74__f2_de_bu10s.Quantity as a7f2debu10s_Quantity',
                'a75__f2_ex_bu11s.Quantity as a7f2exbu11s_Quantity',
                'a76__f2_tw_bu04s.Quantity as a7f2twbu04s_Quantity',
                'a77__f2_tw_bu07s.Quantity as a7f2twbu07s_Quantity',
                'a78__f2_ce_bu10s.Quantity as a7f2cebu10s_Quantity',
                'a81__f1_fg_bu02s.Quantity as a8f1fgbu02s_Quantity',
                'a82__f2_fg_bu10s.Quantity as a8f2fgbu10s_Quantity',
                'a83__f2_th_bu05s.Quantity as a8f2thbu05s_Quantity',
                'a84__f2_de_bu10s.Quantity as a8f2debu10s_Quantity',
                'a85__f2_ex_bu11s.Quantity as a8f2exbu11s_Quantity',
                'a86__f2_tw_bu04s.Quantity as a8f2twbu04s_Quantity',
                'a87__f2_tw_bu07s.Quantity as a8f2twbu07s_Quantity',
                'a88__f2_ce_bu10s.Quantity as a8f2cebu10s_Quantity',
                'dc1_s.Quantity as dc1_s_Quantity',
                'dcp_s.Quantity as dcp_s_Quantity',
                'dcy_s.Quantity as dcy_s_Quantity',
                'dex_s.Quantity as dex_s_Quantity',
            )
            ->leftjoin('dataother', 'item_all.No', 'dataother.Item No')
            ->leftJoin('po', 'item_all.No', 'po.Item No')
            ->leftJoin('neg', 'item_all.No', 'neg.Item No')
            ->leftJoin('purchase', 'item_all.No', 'purchase.Item No')
            ->leftJoin('returncuses', 'item_all.No', 'returncuses.Item No')
            ->leftJoin('คืนของs', 'item_all.No', 'คืนของs.Item No')
            ->leftJoin('item_stock', 'item_all.No', 'item_stock.Item No')
            ->leftJoin('a71__f1_fg_bu02s', 'item_all.No', 'a71__f1_fg_bu02s.Item No')
            ->leftJoin('a72__f2_fg_bu10s', 'item_all.No', 'a72__f2_fg_bu10s.Item No')
            ->leftJoin('a73__f2_th_bu05s', 'item_all.No', 'a73__f2_th_bu05s.Item No')
            ->leftJoin('a74__f2_de_bu10s', 'item_all.No', 'a74__f2_de_bu10s.Item No')
            ->leftJoin('a75__f2_ex_bu11s', 'item_all.No', 'a75__f2_ex_bu11s.Item No')
            ->leftJoin('a76__f2_tw_bu04s', 'item_all.No', 'a76__f2_tw_bu04s.Item No')
            ->leftJoin('a77__f2_tw_bu07s', 'item_all.No', 'a77__f2_tw_bu07s.Item No')
            ->leftJoin('a78__f2_ce_bu10s', 'item_all.No', 'a78__f2_ce_bu10s.Item No')
            ->leftJoin('a81__f1_fg_bu02s', 'item_all.No', 'a81__f1_fg_bu02s.Item No')
            ->leftJoin('a82__f2_fg_bu10s', 'item_all.No', 'a82__f2_fg_bu10s.Item No')
            ->leftJoin('a83__f2_th_bu05s', 'item_all.No', 'a83__f2_th_bu05s.Item No')
            ->leftJoin('a84__f2_de_bu10s', 'item_all.No', 'a84__f2_de_bu10s.Item No')
            ->leftJoin('a85__f2_ex_bu11s', 'item_all.No', 'a85__f2_ex_bu11s.Item No')
            ->leftJoin('a86__f2_tw_bu04s', 'item_all.No', 'a86__f2_tw_bu04s.Item No')
            ->leftJoin('a87__f2_tw_bu07s', 'item_all.No', 'a87__f2_tw_bu07s.Item No')
            ->leftJoin('a88__f2_ce_bu10s', 'item_all.No', 'a88__f2_ce_bu10s.Item No')
            ->leftJoin('dc1_s', 'item_all.No', 'dc1_s.Item No')
            ->leftJoin('dcp_s', 'item_all.No', 'dcp_s.Item No')
            ->leftJoin('dcy_s', 'item_all.No', 'dcy_s.Item No')
            ->leftJoin('dex_s', 'item_all.No', 'dex_s.Item No')
            ->where('dataother.Customer', '<>', 'DC1')
            ->where('dataother.Customer', '<>', 'DCY')
            ->where('dataother.Customer', '<>', 'DCP')
            ->where(function ($query){
                $query->where('dataother.Item No', 'LIKE', 'AS%')
                ->orWhere('dataother.Item No', 'LIKE', 'RM%')
                ->orWhere('dataother.Item No', 'LIKE', 'RMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'FN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SFN%')
                ->orWhere('dataother.Item No', 'LIKE', 'LN%')
                ->orWhere('dataother.Item No', 'LIKE', 'SLN%')
                ->orWhere('dataother.Item No', 'LIKE', 'MT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SMT%')
                ->orWhere('dataother.Item No', 'LIKE', 'NT%')
                ->orWhere('dataother.Item No', 'LIKE', 'SNT%')
                ->orWhere('dataother.Item No', 'LIKE', 'TW%')
                ->orWhere('dataother.Item No', 'LIKE', 'STW%');
            })
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDC1 = 0;
        $Price_AfterDC1 = 0;
        $Po_PcsDC1 = 0;
        $Po_PriceDC1 = 0;
        $Neg_PcsDC1 = 0;
        $Neg_PriceDC1 = 0;
        $Purchase_PcsDC1 = 0;
        $Purchase_PriceDC1 = 0;
        $BackChange_PcsDC1 = 0;
        $BackChange_PriceDC1 = 0;
        $ReciveTranfer_PcsDC1 = 0;
        $ReciveTranfer_PriceDC1 = 0;
        $ReturnItem_PCSDC1 = 0;
        $ReturnItem_PriceDC1 = 0;
        $AllIn_PcsDC1 = 0;
        $AllIn_PriceDC1 = 0;
        $SendSale_PcsDC1 = 0;
        $SendSale_PriceDC1 = 0;
        $ReciveTranOut_PcsDC1 = 0;
        $ReciveTranOut_PriceDC1 = 0;
        $ReturnStore_PcsDC1 = 0;
        $ReturnStore_PriceDC1 = 0;
        $AllOut_PcsDC1 = 0;
        $AllOut_PriceDC1 = 0;
        $Calculate_PcsDC1 = 0;
        $Calculate_PriceDC1 = 0;
        $NewCalculate_PcsDC1 = 0;
        $NewCalculate_PriceDC1 = 0;
        $Diff_PcsDC1 = 0;
        $Diff_PriceDC1 = 0;
        $NewTotal_PcsDC1 = 0;
        $NewTotal_PriceDC1 = 0;
        $NewTotalDiff_NavDC1 = 0;
        $NewTotalDiff_CalDC1 = 0;
        $a7f1fgbu02s_PcsDC1 = 0;
        $a7f1fgbu02s_PriceDC1 = 0;
        $a7f2fgbu10s_PcsDC1 = 0;
        $a7f2fgbu10s_PriceDC1 = 0;
        $a7f2thbu05s_PcsDC1 = 0;
        $a7f2thbu05s_PriceDC1 = 0;
        $a7f2debu10s_PcsDC1 = 0;
        $a7f2debu10s_PriceDC1 = 0;
        $a7f2exbu11s_PcsDC1 = 0;
        $a7f2exbu11s_PriceDC1 = 0;
        $a7f2twbu04s_PcsDC1 = 0;
        $a7f2twbu04s_PriceDC1 = 0;
        $a7f2twbu07s_PcsDC1 = 0;
        $a7f2twbu07s_PriceDC1 = 0;
        $a7f2cebu10s_PcsDC1 = 0;
        $a7f2cebu10s_PriceDC1 = 0;
        $a8f1fgbu02s_PcsDC1 = 0;
        $a8f1fgbu02s_PriceDC1 = 0;
        $a8f2fgbu10s_PcsDC1 = 0;
        $a8f2fgbu10s_PriceDC1 = 0;
        $a8f2thbu05s_PcsDC1 = 0;
        $a8f2thbu05s_PriceDC1 = 0;
        $a8f2debu10s_PcsDC1 = 0;
        $a8f2debu10s_PriceDC1 = 0;
        $a8f2exbu11s_PcsDC1 = 0;
        $a8f2exbu11s_PriceDC1 = 0;
        $a8f2twbu04s_PcsDC1 = 0;
        $a8f2twbu04s_PriceDC1 = 0;
        $a8f2twbu07s_PcsDC1 = 0;
        $a8f2twbu07s_PriceDC1 = 0;
        $a8f2cebu10s_PcsDC1 = 0;
        $a8f2cebu10s_PriceDC1 = 0;
        $DC1_PcsDC1 = 0;
        $DC1_PriceDC1 = 0;
        $DCP_PcsDC1 = 0;
        $DCP_PriceDC1 = 0;
        $DCY_PcsDC1 = 0;
        $DCY_PriceDC1 = 0;
        $DEX_PcsDC1 = 0;
        $DEX_PriceDC1 = 0;

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDCY = 0;
        $Price_AfterDCY = 0;
        $Po_PcsDCY = 0;
        $Po_PriceDCY = 0;
        $Neg_PcsDCY = 0;
        $Neg_PriceDCY = 0;
        $Purchase_PcsDCY = 0;
        $Purchase_PriceDCY = 0;
        $BackChange_PcsDCY = 0;
        $BackChange_PriceDCY = 0;
        $ReciveTranfer_PcsDCY = 0;
        $ReciveTranfer_PriceDCY = 0;
        $ReturnItem_PCSDCY = 0;
        $ReturnItem_PriceDCY = 0;
        $AllIn_PcsDCY = 0;
        $AllIn_PriceDCY = 0;
        $SendSale_PcsDCY = 0;
        $SendSale_PriceDCY = 0;
        $ReciveTranOut_PcsDCY = 0;
        $ReciveTranOut_PriceDCY = 0;
        $ReturnStore_PcsDCY = 0;
        $ReturnStore_PriceDCY = 0;
        $AllOut_PcsDCY = 0;
        $AllOut_PriceDCY = 0;
        $Calculate_PcsDCY = 0;
        $Calculate_PriceDCY = 0;
        $NewCalculate_PcsDCY = 0;
        $NewCalculate_PriceDCY = 0;
        $Diff_PcsDCY = 0;
        $Diff_PriceDCY = 0;
        $NewTotal_PcsDCY = 0;
        $NewTotal_PriceDCY = 0;
        $NewTotalDiff_NavDCY = 0;
        $NewTotalDiff_CalDCY = 0;
        $a7f1fgbu02s_PcsDCY = 0;
        $a7f1fgbu02s_PriceDCY = 0;
        $a7f2fgbu10s_PcsDCY = 0;
        $a7f2fgbu10s_PriceDCY = 0;
        $a7f2thbu05s_PcsDCY = 0;
        $a7f2thbu05s_PriceDCY = 0;
        $a7f2debu10s_PcsDCY = 0;
        $a7f2debu10s_PriceDCY = 0;
        $a7f2exbu11s_PcsDCY = 0;
        $a7f2exbu11s_PriceDCY = 0;
        $a7f2twbu04s_PcsDCY = 0;
        $a7f2twbu04s_PriceDCY = 0;
        $a7f2twbu07s_PcsDCY = 0;
        $a7f2twbu07s_PriceDCY = 0;
        $a7f2cebu10s_PcsDCY = 0;
        $a7f2cebu10s_PriceDCY = 0;
        $a8f1fgbu02s_PcsDCY = 0;
        $a8f1fgbu02s_PriceDCY = 0;
        $a8f2fgbu10s_PcsDCY = 0;
        $a8f2fgbu10s_PriceDCY = 0;
        $a8f2thbu05s_PcsDCY = 0;
        $a8f2thbu05s_PriceDCY = 0;
        $a8f2debu10s_PcsDCY = 0;
        $a8f2debu10s_PriceDCY = 0;
        $a8f2exbu11s_PcsDCY = 0;
        $a8f2exbu11s_PriceDCY = 0;
        $a8f2twbu04s_PcsDCY = 0;
        $a8f2twbu04s_PriceDCY = 0;
        $a8f2twbu07s_PcsDCY = 0;
        $a8f2twbu07s_PriceDCY = 0;
        $a8f2cebu10s_PcsDCY = 0;
        $a8f2cebu10s_PriceDCY = 0;
        $DC1_PcsDCY = 0;
        $DC1_PriceDCY = 0;
        $DCP_PcsDCY = 0;
        $DCP_PriceDCY = 0;
        $DCY_PcsDCY = 0;
        $DCY_PriceDCY = 0;
        $DEX_PcsDCY = 0;
        $DEX_PriceDCY = 0;

         /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDCP = 0;
        $Price_AfterDCP = 0;
        $Po_PcsDCP = 0;
        $Po_PriceDCP = 0;
        $Neg_PcsDCP = 0;
        $Neg_PriceDCP = 0;
        $Purchase_PcsDCP = 0;
        $Purchase_PriceDCP = 0;
        $BackChange_PcsDCP = 0;
        $BackChange_PriceDCP = 0;
        $ReciveTranfer_PcsDCP = 0;
        $ReciveTranfer_PriceDCP = 0;
        $ReturnItem_PCSDCP = 0;
        $ReturnItem_PriceDCP = 0;
        $AllIn_PcsDCP = 0;
        $AllIn_PriceDCP = 0;
        $SendSale_PcsDCP = 0;
        $SendSale_PriceDCP = 0;
        $ReciveTranOut_PcsDCP = 0;
        $ReciveTranOut_PriceDCP = 0;
        $ReturnStore_PcsDCP = 0;
        $ReturnStore_PriceDCP = 0;
        $AllOut_PcsDCP = 0;
        $AllOut_PriceDCP = 0;
        $Calculate_PcsDCP = 0;
        $Calculate_PriceDCP = 0;
        $NewCalculate_PcsDCP = 0;
        $NewCalculate_PriceDCP = 0;
        $Diff_PcsDCP = 0;
        $Diff_PriceDCP = 0;
        $NewTotal_PcsDCP = 0;
        $NewTotal_PriceDCP = 0;
        $NewTotalDiff_NavDCP = 0;
        $NewTotalDiff_CalDCP = 0;
        $a7f1fgbu02s_PcsDCP = 0;
        $a7f1fgbu02s_PriceDCP = 0;
        $a7f2fgbu10s_PcsDCP = 0;
        $a7f2fgbu10s_PriceDCP = 0;
        $a7f2thbu05s_PcsDCP = 0;
        $a7f2thbu05s_PriceDCP = 0;
        $a7f2debu10s_PcsDCP = 0;
        $a7f2debu10s_PriceDCP = 0;
        $a7f2exbu11s_PcsDCP = 0;
        $a7f2exbu11s_PriceDCP = 0;
        $a7f2twbu04s_PcsDCP = 0;
        $a7f2twbu04s_PriceDCP = 0;
        $a7f2twbu07s_PcsDCP = 0;
        $a7f2twbu07s_PriceDCP = 0;
        $a7f2cebu10s_PcsDCP = 0;
        $a7f2cebu10s_PriceDCP = 0;
        $a8f1fgbu02s_PcsDCP = 0;
        $a8f1fgbu02s_PriceDCP = 0;
        $a8f2fgbu10s_PcsDCP = 0;
        $a8f2fgbu10s_PriceDCP = 0;
        $a8f2thbu05s_PcsDCP = 0;
        $a8f2thbu05s_PriceDCP = 0;
        $a8f2debu10s_PcsDCP = 0;
        $a8f2debu10s_PriceDCP = 0;
        $a8f2exbu11s_PcsDCP = 0;
        $a8f2exbu11s_PriceDCP = 0;
        $a8f2twbu04s_PcsDCP = 0;
        $a8f2twbu04s_PriceDCP = 0;
        $a8f2twbu07s_PcsDCP = 0;
        $a8f2twbu07s_PriceDCP = 0;
        $a8f2cebu10s_PcsDCP = 0;
        $a8f2cebu10s_PriceDCP = 0;
        $DC1_PcsDCP = 0;
        $DC1_PriceDCP = 0;
        $DCP_PcsDCP = 0;
        $DCP_PriceDCP = 0;
        $DCY_PcsDCP = 0;
        $DCY_PriceDCP = 0;
        $DEX_PcsDCP = 0;
        $DEX_PriceDCP = 0;

         /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDEX = 0;
        $Price_AfterDEX = 0;
        $Po_PcsDEX = 0;
        $Po_PriceDEX = 0;
        $Neg_PcsDEX = 0;
        $Neg_PriceDEX = 0;
        $Purchase_PcsDEX = 0;
        $Purchase_PriceDEX = 0;
        $BackChange_PcsDEX = 0;
        $BackChange_PriceDEX = 0;
        $ReciveTranfer_PcsDEX = 0;
        $ReciveTranfer_PriceDEX = 0;
        $ReturnItem_PCSDEX = 0;
        $ReturnItem_PriceDEX = 0;
        $AllIn_PcsDEX = 0;
        $AllIn_PriceDEX = 0;
        $SendSale_PcsDEX = 0;
        $SendSale_PriceDEX = 0;
        $ReciveTranOut_PcsDEX = 0;
        $ReciveTranOut_PriceDEX = 0;
        $ReturnStore_PcsDEX = 0;
        $ReturnStore_PriceDEX = 0;
        $AllOut_PcsDEX = 0;
        $AllOut_PriceDEX = 0;
        $Calculate_PcsDEX = 0;
        $Calculate_PriceDEX = 0;
        $NewCalculate_PcsDEX = 0;
        $NewCalculate_PriceDEX = 0;
        $Diff_PcsDEX = 0;
        $Diff_PriceDEX = 0;
        $NewTotal_PcsDEX = 0;
        $NewTotal_PriceDEX = 0;
        $NewTotalDiff_NavDEX = 0;
        $NewTotalDiff_CalDEX = 0;
        $a7f1fgbu02s_PcsDEX = 0;
        $a7f1fgbu02s_PriceDEX = 0;
        $a7f2fgbu10s_PcsDEX = 0;
        $a7f2fgbu10s_PriceDEX = 0;
        $a7f2thbu05s_PcsDEX = 0;
        $a7f2thbu05s_PriceDEX = 0;
        $a7f2debu10s_PcsDEX = 0;
        $a7f2debu10s_PriceDEX = 0;
        $a7f2exbu11s_PcsDEX = 0;
        $a7f2exbu11s_PriceDEX = 0;
        $a7f2twbu04s_PcsDEX = 0;
        $a7f2twbu04s_PriceDEX = 0;
        $a7f2twbu07s_PcsDEX = 0;
        $a7f2twbu07s_PriceDEX = 0;
        $a7f2cebu10s_PcsDEX = 0;
        $a7f2cebu10s_PriceDEX = 0;
        $a8f1fgbu02s_PcsDEX = 0;
        $a8f1fgbu02s_PriceDEX = 0;
        $a8f2fgbu10s_PcsDEX = 0;
        $a8f2fgbu10s_PriceDEX = 0;
        $a8f2thbu05s_PcsDEX = 0;
        $a8f2thbu05s_PriceDEX = 0;
        $a8f2debu10s_PcsDEX = 0;
        $a8f2debu10s_PriceDEX = 0;
        $a8f2exbu11s_PcsDEX = 0;
        $a8f2exbu11s_PriceDEX = 0;
        $a8f2twbu04s_PcsDEX = 0;
        $a8f2twbu04s_PriceDEX = 0;
        $a8f2twbu07s_PcsDEX = 0;
        $a8f2twbu07s_PriceDEX = 0;
        $a8f2cebu10s_PcsDEX = 0;
        $a8f2cebu10s_PriceDEX = 0;
        $DC1_PcsDEX = 0;
        $DC1_PriceDEX = 0;
        $DCP_PcsDEX = 0;
        $DCP_PriceDEX = 0;
        $DCY_PcsDEX = 0;
        $DCY_PriceDEX = 0;
        $DEX_PcsDEX = 0;
        $DEX_PriceDEX = 0;

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoDC1 as $DC1) {
            if ($DC1->PcsAfter > 0 && $DC1->PriceAfter > 0) {
                $NumberDC1 = ($DC1->PriceAfter / $DC1->PcsAfter);
            }else{
                $NumberDC1 = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterDC1 = $DC1->PcsAfter;
            $Pcs_AfterDC1 = $Pcs_AfterDC1 + $PCSAfterDC1;

            $PriceAfterDC1 = $DC1->PriceAfter;
            $Price_AfterDC1 = $Price_AfterDC1 + $PriceAfterDC1;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsDC1 = $DC1->Po_Quantity;
            $Po_PcsDC1 = $Po_PcsDC1 + $PoPcsDC1;

            $PoPriceDC1 = $DC1->PriceAvg * $DC1->Po_Quantity;
            $Po_PriceDC1 = $Po_PriceDC1 + $PoPriceDC1;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsDC1 = $DC1->Neg_Quantity;
            $Neg_PcsDC1 = $Neg_PcsDC1 + $NegPcsDC1;


            $NegPriceDC1 = $NumberDC1 * $DC1->Neg_Quantity;
            $Neg_PriceDC1 = $Neg_PriceDC1 + $NegPriceDC1;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsDC1 = $PCSAfterDC1 + $PoPcsDC1 + $NegPcsDC1;
            $BackChange_PcsDC1 = $BackChange_PcsDC1 + $BackChangePcsDC1;

            $BackChangePriceDC1 = $PriceAfterDC1 + $PoPriceDC1 + $NegPriceDC1;
            $BackChange_PriceDC1 = $BackChange_PriceDC1 + $BackChangePriceDC1;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsDC1 = $DC1->purchase_Quantity;
            $Purchase_PcsDC1 = $Purchase_PcsDC1 + $PurchasePcsDC1;

            $PurchasePriceDC1 = $DC1->purchase_Cost;
            $Purchase_PriceDC1 = $Purchase_PriceDC1 + $PurchasePriceDC1;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsDC1 = $DC1->a7f1fgbu02s_Quantity + $DC1->a7f2fgbu10s_Quantity + $DC1->a7f2thbu05s_Quantity + $DC1->a7f2debu10s_Quantity + $DC1->a7f2exbu11s_Quantity + $DC1->a7f2twbu04s_Quantity + $DC1->a7f2twbu07s_Quantity + $DC1->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsDC1 = $ReciveTranfer_PcsDC1 + $ReciveTranferPcsDC1;

            $ReciveTranferPriceDC1 = $ReciveTranferPcsDC1 * $DC1->PriceAvg;
            $ReciveTranfer_PriceDC1 = $ReciveTranfer_PriceDC1 + $ReciveTranferPriceDC1;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityDC1 = $DC1->returncuses_Quantity;
            $ReturnItem_PCSDC1 = $ReturnItem_PCSDC1 + $ReturnItemQuantityDC1;

            $ReturnItemPriceDC1 = $ReturnItemQuantityDC1 * $NumberDC1;
            $ReturnItem_PriceDC1 = $ReturnItem_PriceDC1 + $ReturnItemPriceDC1;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsDC1 = $DC1->purchase_Quantity + $ReciveTranferPcsDC1 + $ReturnItemQuantityDC1;
            $AllIn_PcsDC1 = $AllIn_PcsDC1 + $AllInPcsDC1;

            $AllInPriceDC1 = $PurchasePriceDC1 + $ReciveTranferPriceDC1 + $ReturnItemPriceDC1;
            $AllIn_PriceDC1 = $AllIn_PriceDC1 + $AllInPriceDC1;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsDC1 = $DC1->dc1_s_Quantity + $DC1->dcp_s_Quantity + $DC1->dcy_s_Quantity + $DC1->dex_s_Quantity;
            $SendSale_PcsDC1 = $SendSale_PcsDC1 + $SendSalePcsDC1;

            if ($BackChangePcsDC1 > 0 && $AllInPcsDC1 > 0) {
                $SendSalePriceDC1 = (($AllInPriceDC1 + $BackChangePriceDC1) / ($AllInPcsDC1 + $BackChangePcsDC1)) * $SendSalePcsDC1;
                $SendSale_PriceDC1 = $SendSale_PriceDC1 + $SendSalePriceDC1;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsDC1 = $DC1->a8f1fgbu02s_Quantity + $DC1->a8f2fgbu10s_Quantity + $DC1->a8f2thbu05s_Quantity + $DC1->a8f2debu10s_Quantity + $DC1->a8f2exbu11s_Quantity + $DC1->a8f2twbu04s_Quantity + $DC1->a8f2twbu07s_Quantity + $DC1->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsDC1 = $ReciveTranOut_PcsDC1 + $ReciveTranOutPcsDC1;

            if ($AllInPcsDC1 > 0 && $BackChangePcsDC1 > 0) {
                $ReciveTranOutPriceDC1 = (($AllInPriceDC1 + $BackChangePriceDC1) / ($AllInPcsDC1 + $BackChangePcsDC1)) * $ReciveTranOutPcsDC1;
                $ReciveTranOut_PriceDC1 = $ReciveTranOut_PriceDC1 + $ReciveTranOutPriceDC1;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsDC1 = $DC1->returnitem_Quantity;
            $ReturnStore_PcsDC1 = $ReturnStore_PcsDC1 + $ReturnStorePcsDC1;

            if ($AllInPcsDC1 > 0 && $BackChangePcsDC1 > 0) {
                $ReturnStorePriceDC1 = (($AllInPriceDC1 + $BackChangePriceDC1) / ($AllInPcsDC1 + $BackChangePcsDC1)) * $ReturnStorePcsDC1;
                $ReturnStore_PriceDC1 = $ReturnStore_PriceDC1 + $ReturnStorePriceDC1;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsDC1 = $ReturnStorePcsDC1 + $ReciveTranOutPcsDC1 + $SendSalePcsDC1;
            $AllOut_PcsDC1 = $AllOut_PcsDC1 + $AllOutPcsDC1;

            $AllOutPriceDC1 = $SendSale_PriceDC1 + $ReciveTranOut_PriceDC1 + $ReturnStore_PriceDC1;
            $AllOut_PriceDC1 = $AllOut_PriceDC1 + $AllOutPriceDC1;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsDC1 = $BackChangePcsDC1 + $AllInPcsDC1 + $AllOutPcsDC1;
            $Calculate_PcsDC1 = $Calculate_PcsDC1 + $CalculatePcsDC1;

            $CalculatePriceDC1 = $BackChangePriceDC1 + $AllInPriceDC1 + $AllOutPriceDC1;
            $Calculate_PriceDC1 = $Calculate_PriceDC1 + $CalculatePriceDC1;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsDC1 = $DC1->item_stock_Quantity;
            $NewCalculate_PcsDC1 = $NewCalculate_PcsDC1 + $NewCalculatePcsDC1;

            $NewCalculatePriceDC1 = $DC1->item_stock_Amount;
            $NewCalculate_PriceDC1 = $NewCalculate_PriceDC1 + $NewCalculatePriceDC1;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsDC1 = $NewCalculatePcsDC1 - $CalculatePcsDC1;
            $Diff_PcsDC1 = $Diff_PcsDC1 + $DiffPcsDC1;

            $DiffPriceDC1 = $NewCalculatePriceDC1 - $CalculatePriceDC1;
            $Diff_PriceDC1 = $Diff_PriceDC1 + $DiffPriceDC1;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsDC1 = $CalculatePcsDC1;
            $NewTotal_PcsDC1 = $NewTotal_PcsDC1 + $CalculatePcsDC1;

            $NewTotalPriceDC1 = $NewTotalPcsDC1 * $DC1->PriceAvg;
            $NewTotal_PriceDC1 = $NewTotal_PriceDC1 + $NewTotalPriceDC1;

            $NewTotalDiffNavDC1 = $NewTotalPriceDC1 - $NewCalculatePriceDC1;
            $NewTotalDiff_NavDC1 = $NewTotalDiff_NavDC1 + $NewTotalDiffNavDC1;

            $NewTotalDiffCalDC1 = $NewTotalPriceDC1 - $CalculatePriceDC1;
            $NewTotalDiff_CalDC1 = $NewTotalDiff_CalDC1 + $NewTotalDiffCalDC1;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsDC1 = $DC1->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsDC1 = $a7f1fgbu02s_PcsDC1 + $a7f1fgbu02sPcsDC1;

            $a7f1fgbu02sPriceDC1 = $a7f1fgbu02sPcsDC1 * $DC1->PriceAvg;
            $a7f1fgbu02s_PriceDC1 = $a7f1fgbu02s_PriceDC1 + $a7f1fgbu02sPriceDC1;

            $a7f2fgbu10sPcsDC1 = $DC1->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsDC1 = $a7f2fgbu10s_PcsDC1 + $a7f2fgbu10sPcsDC1;

            $a7f2fgbu10sPriceDC1 = $a7f2fgbu10sPcsDC1 * $DC1->PriceAvg;
            $a7f2fgbu10s_PriceDC1 = $a7f2fgbu10s_PriceDC1 + $a7f2fgbu10sPriceDC1;

            $a7f2thbu05sPcsDC1 = $DC1->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsDC1 = $a7f2thbu05s_PcsDC1 + $a7f2thbu05sPcsDC1;

            $a7f2thbu05sPriceDC1 = $a7f2thbu05sPcsDC1 * $DC1->PriceAvg;
            $a7f2thbu05s_PriceDC1 = $a7f2thbu05s_PriceDC1 + $a7f2thbu05sPriceDC1;

            $a7f2debu10sPcsDC1 = $DC1->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsDC1 = $a7f2debu10s_PcsDC1 + $a7f2debu10sPcsDC1;

            $a7f2debu10sPriceDC1 = $a7f2debu10sPcsDC1 * $DC1->PriceAvg;
            $a7f2debu10s_PriceDC1 = $a7f2debu10s_PriceDC1 + $a7f2debu10sPriceDC1;

            $a7f2exbu11sPcsDC1 = $DC1->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsDC1 = $a7f2exbu11s_PcsDC1 + $a7f2exbu11sPcsDC1;

            $a7f2exbu11sPriceDC1 = $a7f2exbu11sPcsDC1 * $DC1->PriceAvg;
            $a7f2exbu11s_PriceDC1 = $a7f2exbu11s_PriceDC1 + $a7f2exbu11sPriceDC1;

            $a7f2twbu04sPcsDC1 = $DC1->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsDC1 = $a7f2twbu04s_PcsDC1 + $a7f2twbu04sPcsDC1;

            $a7f2twbu04sPriceDC1 = $a7f2twbu04sPcsDC1 * $DC1->PriceAvg;
            $a7f2twbu04s_PriceDC1 = $a7f2twbu04s_PriceDC1 + $a7f2twbu04sPriceDC1;

            $a7f2twbu07sPcsDC1 = $DC1->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsDC1 = $a7f2twbu07s_PcsDC1 + $a7f2twbu07sPcsDC1;

            $a7f2twbu07sPriceDC1 = $a7f2twbu07sPcsDC1 * $DC1->PriceAvg;
            $a7f2twbu07s_PriceDC1 = $a7f2twbu07s_PriceDC1 + $a7f2twbu07sPriceDC1;

            $a7f2cebu10sPcsDC1 = $DC1->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsDC1 = $a7f2cebu10s_PcsDC1 + $a7f2cebu10sPcsDC1;

            $a7f2cebu10sPriceDC1 = $a7f2cebu10sPcsDC1 * $DC1->PriceAvg;
            $a7f2cebu10s_PriceDC1 = $a7f2cebu10s_PriceDC1 + $a7f2cebu10sPriceDC1;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsDC1 = $DC1->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsDC1 = $a8f1fgbu02s_PcsDC1 + $a8f1fgbu02sPcsDC1;

            $a8f1fgbu02sPriceDC1 = $a8f1fgbu02sPcsDC1 * $NumberDC1;
            $a8f1fgbu02s_PriceDC1 = $a8f1fgbu02s_PriceDC1 + $a8f1fgbu02sPriceDC1;

            $a8f2fgbu10sPcsDC1 = $DC1->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsDC1 = $a8f2fgbu10s_PcsDC1 + $a8f2fgbu10sPcsDC1;

            $a8f2fgbu10sPriceDC1 = $a8f2fgbu10sPcsDC1 * $NumberDC1;
            $a8f2fgbu10s_PriceDC1 = $a8f2fgbu10s_PriceDC1 + $a8f2fgbu10sPriceDC1;

            $a8f2thbu05sPcsDC1 = $DC1->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsDC1 = $a8f2thbu05s_PcsDC1 + $a8f2thbu05sPcsDC1;

            $a8f2thbu05sPriceDC1 = $a8f2thbu05sPcsDC1 * $NumberDC1;
            $a8f2thbu05s_PriceDC1 = $a8f2thbu05s_PriceDC1 + $a8f2thbu05sPriceDC1;

            $a8f2debu10sPcsDC1 = $DC1->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsDC1 = $a8f2debu10s_PcsDC1 + $a8f2debu10sPcsDC1;

            $a8f2debu10sPriceDC1 = $a8f2debu10sPcsDC1 * $NumberDC1;
            $a8f2debu10s_PriceDC1 = $a8f2debu10s_PriceDC1 + $a8f2debu10sPriceDC1;

            $a8f2exbu11sPcsDC1 = $DC1->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsDC1 = $a8f2exbu11s_PcsDC1 + $a8f2exbu11sPcsDC1;

            $a8f2exbu11sPriceDC1 = $a8f2exbu11sPcsDC1 * $NumberDC1;
            $a8f2exbu11s_PriceDC1 = $a8f2exbu11s_PriceDC1 + $a8f2exbu11sPriceDC1;

            $a8f2twbu04sPcsDC1 = $DC1->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsDC1 = $a8f2twbu04s_PcsDC1 + $a8f2twbu04sPcsDC1;

            $a8f2twbu04sPriceDC1 = $a8f2twbu04sPcsDC1 * $NumberDC1;
            $a8f2twbu04s_PriceDC1 = $a8f2twbu04s_PriceDC1 + $a8f2twbu04sPriceDC1;

            $a8f2twbu07sPcsDC1 = $DC1->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsDC1 = $a8f2twbu07s_PcsDC1 + $a8f2twbu07sPcsDC1;

            $a8f2twbu07sPriceDC1 = $a8f2twbu07sPcsDC1 * $NumberDC1;
            $a8f2twbu07s_PriceDC1 = $a8f2twbu07s_PriceDC1 + $a8f2twbu07sPriceDC1;

            $a8f2cebu10sPcsDC1 = $DC1->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsDC1 = $a8f2cebu10s_PcsDC1 + $a8f2cebu10sPcsDC1;

            $a8f2cebu10sPriceDC1 = $a8f2cebu10sPcsDC1 * $NumberDC1;
            $a8f2cebu10s_PriceDC1 = $a8f2cebu10s_PriceDC1 + $a8f2cebu10sPriceDC1;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsDC1 = $DC1->dc1_s_Quantity;
            $DC1_PcsDC1 = $DC1_PcsDC1 + $DC1PcsDC1;

            $DC1PriceDC1 = $DC1PcsDC1 * $NumberDC1;
            $DC1_PriceDC1 = $DC1_PriceDC1 + $DC1PriceDC1;

            $DCPPcsDC1 = $DC1->dcp_s_Quantity;
            $DCP_PcsDC1 = $DCP_PcsDC1 + $DCPPcsDC1;

            $DCPPriceDC1 = $DCPPcsDC1 * $NumberDC1;
            $DCP_PriceDC1 = $DCP_PriceDC1 + $DCPPriceDC1;

            $DCYPcsDC1 = $DC1->dcy_s_Quantity;
            $DCY_PcsDC1 = $DCY_PcsDC1 + $DCYPcsDC1;

            $DCYPriceDC1 = $DCYPcsDC1 * $NumberDC1;
            $DCY_PriceDC1 = $DCY_PriceDC1 + $DCYPriceDC1;

            $DEXPcsDC1 = $DC1->dex_s_Quantity;
            $DEX_PcsDC1 = $DEX_PcsDC1 + $DEXPcsDC1;

            $DEXPriceDC1 = $DEXPcsDC1 * $NumberDC1;
            $DEX_PriceDC1 = $DEX_PriceDC1 + $DEXPriceDC1;
        }

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoDCY as $DCY) {
            if ($DCY->PcsAfter > 0 && $DCY->PriceAfter > 0) {
                $NumberDCY = ($DCY->PriceAfter / $DCY->PcsAfter);
            }else{
                $NumberDCY = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterDCY = $DCY->PcsAfter;
            $Pcs_AfterDCY = $Pcs_AfterDCY + $PCSAfterDCY;

            $PriceAfterDCY = $DCY->PriceAfter;
            $Price_AfterDCY = $Price_AfterDCY + $PriceAfterDCY;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsDCY = $DCY->Po_Quantity;
            $Po_PcsDCY = $Po_PcsDCY + $PoPcsDCY;

            $PoPriceDCY = $DCY->PriceAvg * $DCY->Po_Quantity;
            $Po_PriceDCY = $Po_PriceDCY + $PoPriceDCY;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsDCY = $DCY->Neg_Quantity;
            $Neg_PcsDCY = $Neg_PcsDCY + $NegPcsDCY;


            $NegPriceDCY = $NumberDCY * $DCY->Neg_Quantity;
            $Neg_PriceDCY = $Neg_PriceDCY + $NegPriceDCY;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsDCY = $PCSAfterDCY + $PoPcsDCY + $NegPcsDCY;
            $BackChange_PcsDCY = $BackChange_PcsDCY + $BackChangePcsDCY;

            $BackChangePriceDCY = $PriceAfterDCY + $PoPriceDCY + $NegPriceDCY;
            $BackChange_PriceDCY = $BackChange_PriceDCY + $BackChangePriceDCY;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsDCY = $DCY->purchase_Quantity;
            $Purchase_PcsDCY = $Purchase_PcsDCY + $PurchasePcsDCY;

            $PurchasePriceDCY = $DCY->purchase_Cost;
            $Purchase_PriceDCY = $Purchase_PriceDCY + $PurchasePriceDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsDCY = $DCY->a7f1fgbu02s_Quantity + $DCY->a7f2fgbu10s_Quantity + $DCY->a7f2thbu05s_Quantity + $DCY->a7f2debu10s_Quantity + $DCY->a7f2exbu11s_Quantity + $DCY->a7f2twbu04s_Quantity + $DCY->a7f2twbu07s_Quantity + $DCY->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsDCY = $ReciveTranfer_PcsDCY + $ReciveTranferPcsDCY;

            $ReciveTranferPriceDCY = $ReciveTranferPcsDCY * $DCY->PriceAvg;
            $ReciveTranfer_PriceDCY = $ReciveTranfer_PriceDCY + $ReciveTranferPriceDCY;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityDCY = $DCY->returncuses_Quantity;
            $ReturnItem_PCSDCY = $ReturnItem_PCSDCY + $ReturnItemQuantityDCY;

            $ReturnItemPriceDCY = $ReturnItemQuantityDCY * $NumberDCY;
            $ReturnItem_PriceDCY = $ReturnItem_PriceDCY + $ReturnItemPriceDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsDCY = $DCY->purchase_Quantity + $ReciveTranferPcsDCY + $ReturnItemQuantityDCY;
            $AllIn_PcsDCY = $AllIn_PcsDCY + $AllInPcsDCY;

            $AllInPriceDCY = $PurchasePriceDCY + $ReciveTranferPriceDCY + $ReturnItemPriceDCY;
            $AllIn_PriceDCY = $AllIn_PriceDCY + $AllInPriceDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsDCY = $DCY->dc1_s_Quantity + $DCY->dcp_s_Quantity + $DCY->dcy_s_Quantity + $DCY->dex_s_Quantity;
            $SendSale_PcsDCY = $SendSale_PcsDCY + $SendSalePcsDCY;

            if ($BackChangePcsDCY > 0 && $AllInPcsDCY > 0) {
                $SendSalePriceDCY = (($AllInPriceDCY + $BackChangePriceDCY) / ($AllInPcsDCY + $BackChangePcsDCY)) * $SendSalePcsDCY;
                $SendSale_PriceDCY = $SendSale_PriceDCY + $SendSalePriceDCY;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsDCY = $DCY->a8f1fgbu02s_Quantity + $DCY->a8f2fgbu10s_Quantity + $DCY->a8f2thbu05s_Quantity + $DCY->a8f2debu10s_Quantity + $DCY->a8f2exbu11s_Quantity + $DCY->a8f2twbu04s_Quantity + $DCY->a8f2twbu07s_Quantity + $DCY->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsDCY = $ReciveTranOut_PcsDCY + $ReciveTranOutPcsDCY;

            if ($AllInPcsDCY > 0 && $BackChangePcsDCY > 0) {
                $ReciveTranOutPriceDCY = (($AllInPriceDCY + $BackChangePriceDCY) / ($AllInPcsDCY + $BackChangePcsDCY)) * $ReciveTranOutPcsDCY;
                $ReciveTranOut_PriceDCY = $ReciveTranOut_PriceDCY + $ReciveTranOutPriceDCY;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsDCY = $DCY->returnitem_Quantity;
            $ReturnStore_PcsDCY = $ReturnStore_PcsDCY + $ReturnStorePcsDCY;

            if ($AllInPcsDCY > 0 && $BackChangePcsDCY > 0) {
                $ReturnStorePriceDCY = (($AllInPriceDCY + $BackChangePriceDCY) / ($AllInPcsDCY + $BackChangePcsDCY)) * $ReturnStorePcsDCY;
                $ReturnStore_PriceDCY = $ReturnStore_PriceDCY + $ReturnStorePriceDCY;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsDCY = $ReturnStorePcsDCY + $ReciveTranOutPcsDCY + $SendSalePcsDCY;
            $AllOut_PcsDCY = $AllOut_PcsDCY + $AllOutPcsDCY;

            $AllOutPriceDCY = $SendSale_PriceDCY + $ReciveTranOut_PriceDCY + $ReturnStore_PriceDCY;
            $AllOut_PriceDCY = $AllOut_PriceDCY + $AllOutPriceDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsDCY = $BackChangePcsDCY + $AllInPcsDCY + $AllOutPcsDCY;
            $Calculate_PcsDCY = $Calculate_PcsDCY + $CalculatePcsDCY;

            $CalculatePriceDCY = $BackChangePriceDCY + $AllInPriceDCY + $AllOutPriceDCY;
            $Calculate_PriceDCY = $Calculate_PriceDCY + $CalculatePriceDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsDCY = $DCY->item_stock_Quantity;
            $NewCalculate_PcsDCY = $NewCalculate_PcsDCY + $NewCalculatePcsDCY;

            $NewCalculatePriceDCY = $DCY->item_stock_Amount;
            $NewCalculate_PriceDCY = $NewCalculate_PriceDCY + $NewCalculatePriceDCY;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsDCY = $NewCalculatePcsDCY - $CalculatePcsDCY;
            $Diff_PcsDCY = $Diff_PcsDCY + $DiffPcsDCY;

            $DiffPriceDCY = $NewCalculatePriceDCY - $CalculatePriceDCY;
            $Diff_PriceDCY = $Diff_PriceDCY + $DiffPriceDCY;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsDCY = $CalculatePcsDCY;
            $NewTotal_PcsDCY = $NewTotal_PcsDCY + $CalculatePcsDCY;

            $NewTotalPriceDCY = $NewTotalPcsDCY * $DCY->PriceAvg;
            $NewTotal_PriceDCY = $NewTotal_PriceDCY + $NewTotalPriceDCY;

            $NewTotalDiffNavDCY = $NewTotalPriceDCY - $NewCalculatePriceDCY;
            $NewTotalDiff_NavDCY = $NewTotalDiff_NavDCY + $NewTotalDiffNavDCY;

            $NewTotalDiffCalDCY = $NewTotalPriceDCY - $CalculatePriceDCY;
            $NewTotalDiff_CalDCY = $NewTotalDiff_CalDCY + $NewTotalDiffCalDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsDCY = $DCY->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsDCY = $a7f1fgbu02s_PcsDCY + $a7f1fgbu02sPcsDCY;

            $a7f1fgbu02sPriceDCY = $a7f1fgbu02sPcsDCY * $DCY->PriceAvg;
            $a7f1fgbu02s_PriceDCY = $a7f1fgbu02s_PriceDCY + $a7f1fgbu02sPriceDCY;

            $a7f2fgbu10sPcsDCY = $DCY->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsDCY = $a7f2fgbu10s_PcsDCY + $a7f2fgbu10sPcsDCY;

            $a7f2fgbu10sPriceDCY = $a7f2fgbu10sPcsDCY * $DCY->PriceAvg;
            $a7f2fgbu10s_PriceDCY = $a7f2fgbu10s_PriceDCY + $a7f2fgbu10sPriceDCY;

            $a7f2thbu05sPcsDCY = $DCY->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsDCY = $a7f2thbu05s_PcsDCY + $a7f2thbu05sPcsDCY;

            $a7f2thbu05sPriceDCY = $a7f2thbu05sPcsDCY * $DCY->PriceAvg;
            $a7f2thbu05s_PriceDCY = $a7f2thbu05s_PriceDCY + $a7f2thbu05sPriceDCY;

            $a7f2debu10sPcsDCY = $DCY->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsDCY = $a7f2debu10s_PcsDCY + $a7f2debu10sPcsDCY;

            $a7f2debu10sPriceDCY = $a7f2debu10sPcsDCY * $DCY->PriceAvg;
            $a7f2debu10s_PriceDCY = $a7f2debu10s_PriceDCY + $a7f2debu10sPriceDCY;

            $a7f2exbu11sPcsDCY = $DCY->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsDCY = $a7f2exbu11s_PcsDCY + $a7f2exbu11sPcsDCY;

            $a7f2exbu11sPriceDCY = $a7f2exbu11sPcsDCY * $DCY->PriceAvg;
            $a7f2exbu11s_PriceDCY = $a7f2exbu11s_PriceDCY + $a7f2exbu11sPriceDCY;

            $a7f2twbu04sPcsDCY = $DCY->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsDCY = $a7f2twbu04s_PcsDCY + $a7f2twbu04sPcsDCY;

            $a7f2twbu04sPriceDCY = $a7f2twbu04sPcsDCY * $DCY->PriceAvg;
            $a7f2twbu04s_PriceDCY = $a7f2twbu04s_PriceDCY + $a7f2twbu04sPriceDCY;

            $a7f2twbu07sPcsDCY = $DCY->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsDCY = $a7f2twbu07s_PcsDCY + $a7f2twbu07sPcsDCY;

            $a7f2twbu07sPriceDCY = $a7f2twbu07sPcsDCY * $DCY->PriceAvg;
            $a7f2twbu07s_PriceDCY = $a7f2twbu07s_PriceDCY + $a7f2twbu07sPriceDCY;

            $a7f2cebu10sPcsDCY = $DCY->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsDCY = $a7f2cebu10s_PcsDCY + $a7f2cebu10sPcsDCY;

            $a7f2cebu10sPriceDCY = $a7f2cebu10sPcsDCY * $DCY->PriceAvg;
            $a7f2cebu10s_PriceDCY = $a7f2cebu10s_PriceDCY + $a7f2cebu10sPriceDCY;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsDCY = $DCY->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsDCY = $a8f1fgbu02s_PcsDCY + $a8f1fgbu02sPcsDCY;

            $a8f1fgbu02sPriceDCY = $a8f1fgbu02sPcsDCY * $NumberDCY;
            $a8f1fgbu02s_PriceDCY = $a8f1fgbu02s_PriceDCY + $a8f1fgbu02sPriceDCY;

            $a8f2fgbu10sPcsDCY = $DCY->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsDCY = $a8f2fgbu10s_PcsDCY + $a8f2fgbu10sPcsDCY;

            $a8f2fgbu10sPriceDCY = $a8f2fgbu10sPcsDCY * $NumberDCY;
            $a8f2fgbu10s_PriceDCY = $a8f2fgbu10s_PriceDCY + $a8f2fgbu10sPriceDCY;

            $a8f2thbu05sPcsDCY = $DCY->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsDCY = $a8f2thbu05s_PcsDCY + $a8f2thbu05sPcsDCY;

            $a8f2thbu05sPriceDCY = $a8f2thbu05sPcsDCY * $NumberDCY;
            $a8f2thbu05s_PriceDCY = $a8f2thbu05s_PriceDCY + $a8f2thbu05sPriceDCY;

            $a8f2debu10sPcsDCY = $DCY->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsDCY = $a8f2debu10s_PcsDCY + $a8f2debu10sPcsDCY;

            $a8f2debu10sPriceDCY = $a8f2debu10sPcsDCY * $NumberDCY;
            $a8f2debu10s_PriceDCY = $a8f2debu10s_PriceDCY + $a8f2debu10sPriceDCY;

            $a8f2exbu11sPcsDCY = $DCY->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsDCY = $a8f2exbu11s_PcsDCY + $a8f2exbu11sPcsDCY;

            $a8f2exbu11sPriceDCY = $a8f2exbu11sPcsDCY * $NumberDCY;
            $a8f2exbu11s_PriceDCY = $a8f2exbu11s_PriceDCY + $a8f2exbu11sPriceDCY;

            $a8f2twbu04sPcsDCY = $DCY->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsDCY = $a8f2twbu04s_PcsDCY + $a8f2twbu04sPcsDCY;

            $a8f2twbu04sPriceDCY = $a8f2twbu04sPcsDCY * $NumberDCY;
            $a8f2twbu04s_PriceDCY = $a8f2twbu04s_PriceDCY + $a8f2twbu04sPriceDCY;

            $a8f2twbu07sPcsDCY = $DCY->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsDCY = $a8f2twbu07s_PcsDCY + $a8f2twbu07sPcsDCY;

            $a8f2twbu07sPriceDCY = $a8f2twbu07sPcsDCY * $NumberDCY;
            $a8f2twbu07s_PriceDCY = $a8f2twbu07s_PriceDCY + $a8f2twbu07sPriceDCY;

            $a8f2cebu10sPcsDCY = $DCY->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsDCY = $a8f2cebu10s_PcsDCY + $a8f2cebu10sPcsDCY;

            $a8f2cebu10sPriceDCY = $a8f2cebu10sPcsDCY * $NumberDCY;
            $a8f2cebu10s_PriceDCY = $a8f2cebu10s_PriceDCY + $a8f2cebu10sPriceDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsDCY = $DCY->dc1_s_Quantity;
            $DC1_PcsDCY = $DC1_PcsDCY + $DC1PcsDCY;

            $DC1PriceDCY = $DC1PcsDCY * $NumberDCY;
            $DC1_PriceDCY = $DC1_PriceDCY + $DC1PriceDCY;

            $DCPPcsDCY = $DCY->dcp_s_Quantity;
            $DCP_PcsDCY = $DCP_PcsDCY + $DCPPcsDCY;

            $DCPPriceDCY = $DCPPcsDCY * $NumberDCY;
            $DCP_PriceDCY = $DCP_PriceDCY + $DCPPriceDCY;

            $DCYPcsDCY = $DCY->dcy_s_Quantity;
            $DCY_PcsDCY = $DCY_PcsDCY + $DCYPcsDCY;

            $DCYPriceDCY = $DCYPcsDCY * $NumberDCY;
            $DCY_PriceDCY = $DCY_PriceDCY + $DCYPriceDCY;

            $DEXPcsDCY = $DCY->dex_s_Quantity;
            $DEX_PcsDCY = $DEX_PcsDCY + $DEXPcsDCY;

            $DEXPriceDCY = $DEXPcsDCY * $NumberDCY;
            $DEX_PriceDCY = $DEX_PriceDCY + $DEXPriceDCY;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoDCP as $DCP) {
            if ($DCP->PcsAfter > 0 && $DCP->PriceAfter > 0) {
                $NumberDCP = ($DCP->PriceAfter / $DCP->PcsAfter);
            }else{
                $NumberDCP = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterDCP = $DCP->PcsAfter;
            $Pcs_AfterDCP = $Pcs_AfterDCP + $PCSAfterDCP;

            $PriceAfterDCP = $DCP->PriceAfter;
            $Price_AfterDCP = $Price_AfterDCP + $PriceAfterDCP;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsDCP = $DCP->Po_Quantity;
            $Po_PcsDCP = $Po_PcsDCP + $PoPcsDCP;

            $PoPriceDCP = $DCP->PriceAvg * $DCP->Po_Quantity;
            $Po_PriceDCP = $Po_PriceDCP + $PoPriceDCP;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsDCP = $DCP->Neg_Quantity;
            $Neg_PcsDCP = $Neg_PcsDCP + $NegPcsDCP;


            $NegPriceDCP = $NumberDCP * $DCP->Neg_Quantity;
            $Neg_PriceDCP = $Neg_PriceDCP + $NegPriceDCP;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsDCP = $PCSAfterDCP + $PoPcsDCP + $NegPcsDCP;
            $BackChange_PcsDCP = $BackChange_PcsDCP + $BackChangePcsDCP;

            $BackChangePriceDCP = $PriceAfterDCP + $PoPriceDCP + $NegPriceDCP;
            $BackChange_PriceDCP = $BackChange_PriceDCP + $BackChangePriceDCP;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsDCP = $DCP->purchase_Quantity;
            $Purchase_PcsDCP = $Purchase_PcsDCP + $PurchasePcsDCP;

            $PurchasePriceDCP = $DCP->purchase_Cost;
            $Purchase_PriceDCP = $Purchase_PriceDCP + $PurchasePriceDCP;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsDCP = $DCP->a7f1fgbu02s_Quantity + $DCP->a7f2fgbu10s_Quantity + $DCP->a7f2thbu05s_Quantity + $DCP->a7f2debu10s_Quantity + $DCP->a7f2exbu11s_Quantity + $DCP->a7f2twbu04s_Quantity + $DCP->a7f2twbu07s_Quantity + $DCP->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsDCP = $ReciveTranfer_PcsDCP + $ReciveTranferPcsDCP;

            $ReciveTranferPriceDCP = $ReciveTranferPcsDCP * $DCP->PriceAvg;
            $ReciveTranfer_PriceDCP = $ReciveTranfer_PriceDCP + $ReciveTranferPriceDCP;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityDCP = $DCP->returncuses_Quantity;
            $ReturnItem_PCSDCP = $ReturnItem_PCSDCP + $ReturnItemQuantityDCP;

            $ReturnItemPriceDCP = $ReturnItemQuantityDCP * $NumberDCP;
            $ReturnItem_PriceDCP = $ReturnItem_PriceDCP + $ReturnItemPriceDCP;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsDCP = $DCP->purchase_Quantity + $ReciveTranferPcsDCP + $ReturnItemQuantityDCP;
            $AllIn_PcsDCP = $AllIn_PcsDCP + $AllInPcsDCP;

            $AllInPriceDCP = $PurchasePriceDCP + $ReciveTranferPriceDCP + $ReturnItemPriceDCP;
            $AllIn_PriceDCP = $AllIn_PriceDCP + $AllInPriceDCP;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsDCP = $DCP->dc1_s_Quantity + $DCP->dcp_s_Quantity + $DCP->dcy_s_Quantity + $DCP->dex_s_Quantity;
            $SendSale_PcsDCP = $SendSale_PcsDCP + $SendSalePcsDCP;

            if ($BackChangePcsDCP > 0 && $AllInPcsDCP > 0) {
                $SendSalePriceDCP = (($AllInPriceDCP + $BackChangePriceDCP) / ($AllInPcsDCP + $BackChangePcsDCP)) * $SendSalePcsDCP;
                $SendSale_PriceDCP = $SendSale_PriceDCP + $SendSalePriceDCP;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsDCP = $DCP->a8f1fgbu02s_Quantity + $DCP->a8f2fgbu10s_Quantity + $DCP->a8f2thbu05s_Quantity + $DCP->a8f2debu10s_Quantity + $DCP->a8f2exbu11s_Quantity + $DCP->a8f2twbu04s_Quantity + $DCP->a8f2twbu07s_Quantity + $DCP->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsDCP = $ReciveTranOut_PcsDCP + $ReciveTranOutPcsDCP;

            if ($AllInPcsDCP > 0 && $BackChangePcsDCP > 0) {
                $ReciveTranOutPriceDCP = (($AllInPriceDCP + $BackChangePriceDCP) / ($AllInPcsDCP + $BackChangePcsDCP)) * $ReciveTranOutPcsDCP;
                $ReciveTranOut_PriceDCP = $ReciveTranOut_PriceDCP + $ReciveTranOutPriceDCP;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsDCP = $DCP->returnitem_Quantity;
            $ReturnStore_PcsDCP = $ReturnStore_PcsDCP + $ReturnStorePcsDCP;

            if ($AllInPcsDCP > 0 && $BackChangePcsDCP > 0) {
                $ReturnStorePriceDCP = (($AllInPriceDCP + $BackChangePriceDCP) / ($AllInPcsDCP + $BackChangePcsDCP)) * $ReturnStorePcsDCP;
                $ReturnStore_PriceDCP = $ReturnStore_PriceDCP + $ReturnStorePriceDCP;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsDCP = $ReturnStorePcsDCP + $ReciveTranOutPcsDCP + $SendSalePcsDCP;
            $AllOut_PcsDCP = $AllOut_PcsDCP + $AllOutPcsDCP;

            $AllOutPriceDCP = $SendSale_PriceDCP + $ReciveTranOut_PriceDCP + $ReturnStore_PriceDCP;
            $AllOut_PriceDCP = $AllOut_PriceDCP + $AllOutPriceDCP;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsDCP = $BackChangePcsDCP + $AllInPcsDCP + $AllOutPcsDCP;
            $Calculate_PcsDCP = $Calculate_PcsDCP + $CalculatePcsDCP;

            $CalculatePriceDCP = $BackChangePriceDCP + $AllInPriceDCP + $AllOutPriceDCP;
            $Calculate_PriceDCP = $Calculate_PriceDCP + $CalculatePriceDCP;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsDCP = $DCP->item_stock_Quantity;
            $NewCalculate_PcsDCP = $NewCalculate_PcsDCP + $NewCalculatePcsDCP;

            $NewCalculatePriceDCP = $DCP->item_stock_Amount;
            $NewCalculate_PriceDCP = $NewCalculate_PriceDCP + $NewCalculatePriceDCP;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsDCP = $NewCalculatePcsDCP - $CalculatePcsDCP;
            $Diff_PcsDCP = $Diff_PcsDCP + $DiffPcsDCP;

            $DiffPriceDCP = $NewCalculatePriceDCP - $CalculatePriceDCP;
            $Diff_PriceDCP = $Diff_PriceDCP + $DiffPriceDCP;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsDCP = $CalculatePcsDCP;
            $NewTotal_PcsDCP = $NewTotal_PcsDCP + $CalculatePcsDCP;

            $NewTotalPriceDCP = $NewTotalPcsDCP * $DCP->PriceAvg;
            $NewTotal_PriceDCP = $NewTotal_PriceDCP + $NewTotalPriceDCP;

            $NewTotalDiffNavDCP = $NewTotalPriceDCP - $NewCalculatePriceDCP;
            $NewTotalDiff_NavDCP = $NewTotalDiff_NavDCP + $NewTotalDiffNavDCP;

            $NewTotalDiffCalDCP = $NewTotalPriceDCP - $CalculatePriceDCP;
            $NewTotalDiff_CalDCP = $NewTotalDiff_CalDCP + $NewTotalDiffCalDCP;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsDCP = $DCP->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsDCP = $a7f1fgbu02s_PcsDCP + $a7f1fgbu02sPcsDCP;

            $a7f1fgbu02sPriceDCP = $a7f1fgbu02sPcsDCP * $DCP->PriceAvg;
            $a7f1fgbu02s_PriceDCP = $a7f1fgbu02s_PriceDCP + $a7f1fgbu02sPriceDCP;

            $a7f2fgbu10sPcsDCP = $DCP->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsDCP = $a7f2fgbu10s_PcsDCP + $a7f2fgbu10sPcsDCP;

            $a7f2fgbu10sPriceDCP = $a7f2fgbu10sPcsDCP * $DCP->PriceAvg;
            $a7f2fgbu10s_PriceDCP = $a7f2fgbu10s_PriceDCP + $a7f2fgbu10sPriceDCP;

            $a7f2thbu05sPcsDCP = $DCP->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsDCP = $a7f2thbu05s_PcsDCP + $a7f2thbu05sPcsDCP;

            $a7f2thbu05sPriceDCP = $a7f2thbu05sPcsDCP * $DCP->PriceAvg;
            $a7f2thbu05s_PriceDCP = $a7f2thbu05s_PriceDCP + $a7f2thbu05sPriceDCP;

            $a7f2debu10sPcsDCP = $DCP->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsDCP = $a7f2debu10s_PcsDCP + $a7f2debu10sPcsDCP;

            $a7f2debu10sPriceDCP = $a7f2debu10sPcsDCP * $DCP->PriceAvg;
            $a7f2debu10s_PriceDCP = $a7f2debu10s_PriceDCP + $a7f2debu10sPriceDCP;

            $a7f2exbu11sPcsDCP = $DCP->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsDCP = $a7f2exbu11s_PcsDCP + $a7f2exbu11sPcsDCP;

            $a7f2exbu11sPriceDCP = $a7f2exbu11sPcsDCP * $DCP->PriceAvg;
            $a7f2exbu11s_PriceDCP = $a7f2exbu11s_PriceDCP + $a7f2exbu11sPriceDCP;

            $a7f2twbu04sPcsDCP = $DCP->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsDCP = $a7f2twbu04s_PcsDCP + $a7f2twbu04sPcsDCP;

            $a7f2twbu04sPriceDCP = $a7f2twbu04sPcsDCP * $DCP->PriceAvg;
            $a7f2twbu04s_PriceDCP = $a7f2twbu04s_PriceDCP + $a7f2twbu04sPriceDCP;

            $a7f2twbu07sPcsDCP = $DCP->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsDCP = $a7f2twbu07s_PcsDCP + $a7f2twbu07sPcsDCP;

            $a7f2twbu07sPriceDCP = $a7f2twbu07sPcsDCP * $DCP->PriceAvg;
            $a7f2twbu07s_PriceDCP = $a7f2twbu07s_PriceDCP + $a7f2twbu07sPriceDCP;

            $a7f2cebu10sPcsDCP = $DCP->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsDCP = $a7f2cebu10s_PcsDCP + $a7f2cebu10sPcsDCP;

            $a7f2cebu10sPriceDCP = $a7f2cebu10sPcsDCP * $DCP->PriceAvg;
            $a7f2cebu10s_PriceDCP = $a7f2cebu10s_PriceDCP + $a7f2cebu10sPriceDCP;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsDCP = $DCP->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsDCP = $a8f1fgbu02s_PcsDCP + $a8f1fgbu02sPcsDCP;

            $a8f1fgbu02sPriceDCP = $a8f1fgbu02sPcsDCP * $NumberDCP;
            $a8f1fgbu02s_PriceDCP = $a8f1fgbu02s_PriceDCP + $a8f1fgbu02sPriceDCP;

            $a8f2fgbu10sPcsDCP = $DCP->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsDCP = $a8f2fgbu10s_PcsDCP + $a8f2fgbu10sPcsDCP;

            $a8f2fgbu10sPriceDCP = $a8f2fgbu10sPcsDCP * $NumberDCP;
            $a8f2fgbu10s_PriceDCP = $a8f2fgbu10s_PriceDCP + $a8f2fgbu10sPriceDCP;

            $a8f2thbu05sPcsDCP = $DCP->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsDCP = $a8f2thbu05s_PcsDCP + $a8f2thbu05sPcsDCP;

            $a8f2thbu05sPriceDCP = $a8f2thbu05sPcsDCP * $NumberDCP;
            $a8f2thbu05s_PriceDCP = $a8f2thbu05s_PriceDCP + $a8f2thbu05sPriceDCP;

            $a8f2debu10sPcsDCP = $DCP->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsDCP = $a8f2debu10s_PcsDCP + $a8f2debu10sPcsDCP;

            $a8f2debu10sPriceDCP = $a8f2debu10sPcsDCP * $NumberDCP;
            $a8f2debu10s_PriceDCP = $a8f2debu10s_PriceDCP + $a8f2debu10sPriceDCP;

            $a8f2exbu11sPcsDCP = $DCP->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsDCP = $a8f2exbu11s_PcsDCP + $a8f2exbu11sPcsDCP;

            $a8f2exbu11sPriceDCP = $a8f2exbu11sPcsDCP * $NumberDCP;
            $a8f2exbu11s_PriceDCP = $a8f2exbu11s_PriceDCP + $a8f2exbu11sPriceDCP;

            $a8f2twbu04sPcsDCP = $DCP->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsDCP = $a8f2twbu04s_PcsDCP + $a8f2twbu04sPcsDCP;

            $a8f2twbu04sPriceDCP = $a8f2twbu04sPcsDCP * $NumberDCP;
            $a8f2twbu04s_PriceDCP = $a8f2twbu04s_PriceDCP + $a8f2twbu04sPriceDCP;

            $a8f2twbu07sPcsDCP = $DCP->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsDCP = $a8f2twbu07s_PcsDCP + $a8f2twbu07sPcsDCP;

            $a8f2twbu07sPriceDCP = $a8f2twbu07sPcsDCP * $NumberDCP;
            $a8f2twbu07s_PriceDCP = $a8f2twbu07s_PriceDCP + $a8f2twbu07sPriceDCP;

            $a8f2cebu10sPcsDCP = $DCP->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsDCP = $a8f2cebu10s_PcsDCP + $a8f2cebu10sPcsDCP;

            $a8f2cebu10sPriceDCP = $a8f2cebu10sPcsDCP * $NumberDCP;
            $a8f2cebu10s_PriceDCP = $a8f2cebu10s_PriceDCP + $a8f2cebu10sPriceDCP;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsDCP = $DCP->dc1_s_Quantity;
            $DC1_PcsDCP = $DC1_PcsDCP + $DC1PcsDCP;

            $DC1PriceDCP = $DC1PcsDCP * $NumberDCP;
            $DC1_PriceDCP = $DC1_PriceDCP + $DC1PriceDCP;

            $DCPPcsDCP = $DCP->dcp_s_Quantity;
            $DCP_PcsDCP = $DCP_PcsDCP + $DCPPcsDCP;

            $DCPPriceDCP = $DCPPcsDCP * $NumberDCP;
            $DCP_PriceDCP = $DCP_PriceDCP + $DCPPriceDCP;

            $DCYPcsDCP = $DCP->dcy_s_Quantity;
            $DCY_PcsDCP = $DCY_PcsDCP + $DCYPcsDCP;

            $DCYPriceDCP = $DCYPcsDCP * $NumberDCP;
            $DCY_PriceDCP = $DCY_PriceDCP + $DCYPriceDCP;

            $DEXPcsDCP = $DCP->dex_s_Quantity;
            $DEX_PcsDCP = $DEX_PcsDCP + $DEXPcsDCP;

            $DEXPriceDCP = $DEXPcsDCP * $NumberDCP;
            $DEX_PriceDCP = $DEX_PriceDCP + $DEXPriceDCP;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoDEX as $DEX) {
            if ($DEX->PcsAfter > 0 && $DEX->PriceAfter > 0) {
                $NumberDEX = ($DEX->PriceAfter / $DEX->PcsAfter);
            }else{
                $NumberDEX = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterDEX = $DEX->PcsAfter;
            $Pcs_AfterDEX = $Pcs_AfterDEX + $PCSAfterDEX;

            $PriceAfterDEX = $DEX->PriceAfter;
            $Price_AfterDEX = $Price_AfterDEX + $PriceAfterDEX;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsDEX = $DEX->Po_Quantity;
            $Po_PcsDEX = $Po_PcsDEX + $PoPcsDEX;

            $PoPriceDEX = $DEX->PriceAvg * $DEX->Po_Quantity;
            $Po_PriceDEX = $Po_PriceDEX + $PoPriceDEX;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsDEX = $DEX->Neg_Quantity;
            $Neg_PcsDEX = $Neg_PcsDEX + $NegPcsDEX;


            $NegPriceDEX = $NumberDEX * $DEX->Neg_Quantity;
            $Neg_PriceDEX = $Neg_PriceDEX + $NegPriceDEX;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsDEX = $PCSAfterDEX + $PoPcsDEX + $NegPcsDEX;
            $BackChange_PcsDEX = $BackChange_PcsDEX + $BackChangePcsDEX;

            $BackChangePriceDEX = $PriceAfterDEX + $PoPriceDEX + $NegPriceDEX;
            $BackChange_PriceDEX = $BackChange_PriceDEX + $BackChangePriceDEX;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsDEX = $DEX->purchase_Quantity;
            $Purchase_PcsDEX = $Purchase_PcsDEX + $PurchasePcsDEX;

            $PurchasePriceDEX = $DEX->purchase_Cost;
            $Purchase_PriceDEX = $Purchase_PriceDEX + $PurchasePriceDEX;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsDEX = $DEX->a7f1fgbu02s_Quantity + $DEX->a7f2fgbu10s_Quantity + $DEX->a7f2thbu05s_Quantity + $DEX->a7f2debu10s_Quantity + $DEX->a7f2exbu11s_Quantity + $DEX->a7f2twbu04s_Quantity + $DEX->a7f2twbu07s_Quantity + $DEX->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsDEX = $ReciveTranfer_PcsDEX + $ReciveTranferPcsDEX;

            $ReciveTranferPriceDEX = $ReciveTranferPcsDEX * $DEX->PriceAvg;
            $ReciveTranfer_PriceDEX = $ReciveTranfer_PriceDEX + $ReciveTranferPriceDEX;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityDEX = $DEX->returncuses_Quantity;
            $ReturnItem_PCSDEX = $ReturnItem_PCSDEX + $ReturnItemQuantityDEX;

            $ReturnItemPriceDEX = $ReturnItemQuantityDEX * $NumberDEX;
            $ReturnItem_PriceDEX = $ReturnItem_PriceDEX + $ReturnItemPriceDEX;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsDEX = $DEX->purchase_Quantity + $ReciveTranferPcsDEX + $ReturnItemQuantityDEX;
            $AllIn_PcsDEX = $AllIn_PcsDEX + $AllInPcsDEX;

            $AllInPriceDEX = $PurchasePriceDEX + $ReciveTranferPriceDEX + $ReturnItemPriceDEX;
            $AllIn_PriceDEX = $AllIn_PriceDEX + $AllInPriceDEX;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsDEX = $DEX->dc1_s_Quantity + $DEX->dcp_s_Quantity + $DEX->dcy_s_Quantity + $DEX->dex_s_Quantity;
            $SendSale_PcsDEX = $SendSale_PcsDEX + $SendSalePcsDEX;

            if ($BackChangePcsDEX > 0 && $AllInPcsDEX > 0) {
                $SendSalePriceDEX = (($AllInPriceDEX + $BackChangePriceDEX) / ($AllInPcsDEX + $BackChangePcsDEX)) * $SendSalePcsDEX;
                $SendSale_PriceDEX = $SendSale_PriceDEX + $SendSalePriceDEX;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsDEX = $DEX->a8f1fgbu02s_Quantity + $DEX->a8f2fgbu10s_Quantity + $DEX->a8f2thbu05s_Quantity + $DEX->a8f2debu10s_Quantity + $DEX->a8f2exbu11s_Quantity + $DEX->a8f2twbu04s_Quantity + $DEX->a8f2twbu07s_Quantity + $DEX->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsDEX = $ReciveTranOut_PcsDEX + $ReciveTranOutPcsDEX;

            if ($AllInPcsDEX > 0 && $BackChangePcsDEX > 0) {
                $ReciveTranOutPriceDEX = (($AllInPriceDEX + $BackChangePriceDEX) / ($AllInPcsDEX + $BackChangePcsDEX)) * $ReciveTranOutPcsDEX;
                $ReciveTranOut_PriceDEX = $ReciveTranOut_PriceDEX + $ReciveTranOutPriceDEX;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsDEX = $DEX->returnitem_Quantity;
            $ReturnStore_PcsDEX = $ReturnStore_PcsDEX + $ReturnStorePcsDEX;

            if ($AllInPcsDEX > 0 && $BackChangePcsDEX > 0) {
                $ReturnStorePriceDEX = (($AllInPriceDEX + $BackChangePriceDEX) / ($AllInPcsDEX + $BackChangePcsDEX)) * $ReturnStorePcsDEX;
                $ReturnStore_PriceDEX = $ReturnStore_PriceDEX + $ReturnStorePriceDEX;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsDEX = $ReturnStorePcsDEX + $ReciveTranOutPcsDEX + $SendSalePcsDEX;
            $AllOut_PcsDEX = $AllOut_PcsDEX + $AllOutPcsDEX;

            $AllOutPriceDEX = $SendSale_PriceDEX + $ReciveTranOut_PriceDEX + $ReturnStore_PriceDEX;
            $AllOut_PriceDEX = $AllOut_PriceDEX + $AllOutPriceDEX;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsDEX = $BackChangePcsDEX + $AllInPcsDEX + $AllOutPcsDEX;
            $Calculate_PcsDEX = $Calculate_PcsDEX + $CalculatePcsDEX;

            $CalculatePriceDEX = $BackChangePriceDEX + $AllInPriceDEX + $AllOutPriceDEX;
            $Calculate_PriceDEX = $Calculate_PriceDEX + $CalculatePriceDEX;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsDEX = $DEX->item_stock_Quantity;
            $NewCalculate_PcsDEX = $NewCalculate_PcsDEX + $NewCalculatePcsDEX;

            $NewCalculatePriceDEX = $DEX->item_stock_Amount;
            $NewCalculate_PriceDEX = $NewCalculate_PriceDEX + $NewCalculatePriceDEX;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsDEX = $NewCalculatePcsDEX - $CalculatePcsDEX;
            $Diff_PcsDEX = $Diff_PcsDEX + $DiffPcsDEX;

            $DiffPriceDEX = $NewCalculatePriceDEX - $CalculatePriceDEX;
            $Diff_PriceDEX = $Diff_PriceDEX + $DiffPriceDEX;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsDEX = $CalculatePcsDEX;
            $NewTotal_PcsDEX = $NewTotal_PcsDEX + $CalculatePcsDEX;

            $NewTotalPriceDEX = $NewTotalPcsDEX * $DEX->PriceAvg;
            $NewTotal_PriceDEX = $NewTotal_PriceDEX + $NewTotalPriceDEX;

            $NewTotalDiffNavDEX = $NewTotalPriceDEX - $NewCalculatePriceDEX;
            $NewTotalDiff_NavDEX = $NewTotalDiff_NavDEX + $NewTotalDiffNavDEX;

            $NewTotalDiffCalDEX = $NewTotalPriceDEX - $CalculatePriceDEX;
            $NewTotalDiff_CalDEX = $NewTotalDiff_CalDEX + $NewTotalDiffCalDEX;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsDEX = $DEX->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsDEX = $a7f1fgbu02s_PcsDEX + $a7f1fgbu02sPcsDEX;

            $a7f1fgbu02sPriceDEX = $a7f1fgbu02sPcsDEX * $DEX->PriceAvg;
            $a7f1fgbu02s_PriceDEX = $a7f1fgbu02s_PriceDEX + $a7f1fgbu02sPriceDEX;

            $a7f2fgbu10sPcsDEX = $DEX->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsDEX = $a7f2fgbu10s_PcsDEX + $a7f2fgbu10sPcsDEX;

            $a7f2fgbu10sPriceDEX = $a7f2fgbu10sPcsDEX * $DEX->PriceAvg;
            $a7f2fgbu10s_PriceDEX = $a7f2fgbu10s_PriceDEX + $a7f2fgbu10sPriceDEX;

            $a7f2thbu05sPcsDEX = $DEX->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsDEX = $a7f2thbu05s_PcsDEX + $a7f2thbu05sPcsDEX;

            $a7f2thbu05sPriceDEX = $a7f2thbu05sPcsDEX * $DEX->PriceAvg;
            $a7f2thbu05s_PriceDEX = $a7f2thbu05s_PriceDEX + $a7f2thbu05sPriceDEX;

            $a7f2debu10sPcsDEX = $DEX->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsDEX = $a7f2debu10s_PcsDEX + $a7f2debu10sPcsDEX;

            $a7f2debu10sPriceDEX = $a7f2debu10sPcsDEX * $DEX->PriceAvg;
            $a7f2debu10s_PriceDEX = $a7f2debu10s_PriceDEX + $a7f2debu10sPriceDEX;

            $a7f2exbu11sPcsDEX = $DEX->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsDEX = $a7f2exbu11s_PcsDEX + $a7f2exbu11sPcsDEX;

            $a7f2exbu11sPriceDEX = $a7f2exbu11sPcsDEX * $DEX->PriceAvg;
            $a7f2exbu11s_PriceDEX = $a7f2exbu11s_PriceDEX + $a7f2exbu11sPriceDEX;

            $a7f2twbu04sPcsDEX = $DEX->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsDEX = $a7f2twbu04s_PcsDEX + $a7f2twbu04sPcsDEX;

            $a7f2twbu04sPriceDEX = $a7f2twbu04sPcsDEX * $DEX->PriceAvg;
            $a7f2twbu04s_PriceDEX = $a7f2twbu04s_PriceDEX + $a7f2twbu04sPriceDEX;

            $a7f2twbu07sPcsDEX = $DEX->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsDEX = $a7f2twbu07s_PcsDEX + $a7f2twbu07sPcsDEX;

            $a7f2twbu07sPriceDEX = $a7f2twbu07sPcsDEX * $DEX->PriceAvg;
            $a7f2twbu07s_PriceDEX = $a7f2twbu07s_PriceDEX + $a7f2twbu07sPriceDEX;

            $a7f2cebu10sPcsDEX = $DEX->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsDEX = $a7f2cebu10s_PcsDEX + $a7f2cebu10sPcsDEX;

            $a7f2cebu10sPriceDEX = $a7f2cebu10sPcsDEX * $DEX->PriceAvg;
            $a7f2cebu10s_PriceDEX = $a7f2cebu10s_PriceDEX + $a7f2cebu10sPriceDEX;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsDEX = $DEX->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsDEX = $a8f1fgbu02s_PcsDEX + $a8f1fgbu02sPcsDEX;

            $a8f1fgbu02sPriceDEX = $a8f1fgbu02sPcsDEX * $NumberDEX;
            $a8f1fgbu02s_PriceDEX = $a8f1fgbu02s_PriceDEX + $a8f1fgbu02sPriceDEX;

            $a8f2fgbu10sPcsDEX = $DEX->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsDEX = $a8f2fgbu10s_PcsDEX + $a8f2fgbu10sPcsDEX;

            $a8f2fgbu10sPriceDEX = $a8f2fgbu10sPcsDEX * $NumberDEX;
            $a8f2fgbu10s_PriceDEX = $a8f2fgbu10s_PriceDEX + $a8f2fgbu10sPriceDEX;

            $a8f2thbu05sPcsDEX = $DEX->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsDEX = $a8f2thbu05s_PcsDEX + $a8f2thbu05sPcsDEX;

            $a8f2thbu05sPriceDEX = $a8f2thbu05sPcsDEX * $NumberDEX;
            $a8f2thbu05s_PriceDEX = $a8f2thbu05s_PriceDEX + $a8f2thbu05sPriceDEX;

            $a8f2debu10sPcsDEX = $DEX->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsDEX = $a8f2debu10s_PcsDEX + $a8f2debu10sPcsDEX;

            $a8f2debu10sPriceDEX = $a8f2debu10sPcsDEX * $NumberDEX;
            $a8f2debu10s_PriceDEX = $a8f2debu10s_PriceDEX + $a8f2debu10sPriceDEX;

            $a8f2exbu11sPcsDEX = $DEX->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsDEX = $a8f2exbu11s_PcsDEX + $a8f2exbu11sPcsDEX;

            $a8f2exbu11sPriceDEX = $a8f2exbu11sPcsDEX * $NumberDEX;
            $a8f2exbu11s_PriceDEX = $a8f2exbu11s_PriceDEX + $a8f2exbu11sPriceDEX;

            $a8f2twbu04sPcsDEX = $DEX->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsDEX = $a8f2twbu04s_PcsDEX + $a8f2twbu04sPcsDEX;

            $a8f2twbu04sPriceDEX = $a8f2twbu04sPcsDEX * $NumberDEX;
            $a8f2twbu04s_PriceDEX = $a8f2twbu04s_PriceDEX + $a8f2twbu04sPriceDEX;

            $a8f2twbu07sPcsDEX = $DEX->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsDEX = $a8f2twbu07s_PcsDEX + $a8f2twbu07sPcsDEX;

            $a8f2twbu07sPriceDEX = $a8f2twbu07sPcsDEX * $NumberDEX;
            $a8f2twbu07s_PriceDEX = $a8f2twbu07s_PriceDEX + $a8f2twbu07sPriceDEX;

            $a8f2cebu10sPcsDEX = $DEX->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsDEX = $a8f2cebu10s_PcsDEX + $a8f2cebu10sPcsDEX;

            $a8f2cebu10sPriceDEX = $a8f2cebu10sPcsDEX * $NumberDEX;
            $a8f2cebu10s_PriceDEX = $a8f2cebu10s_PriceDEX + $a8f2cebu10sPriceDEX;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsDEX = $DEX->dc1_s_Quantity;
            $DC1_PcsDEX = $DC1_PcsDEX + $DC1PcsDEX;

            $DC1PriceDEX = $DC1PcsDEX * $NumberDEX;
            $DC1_PriceDEX = $DC1_PriceDEX + $DC1PriceDEX;

            $DCPPcsDEX = $DEX->dcp_s_Quantity;
            $DCP_PcsDEX = $DCP_PcsDEX + $DCPPcsDEX;

            $DCPPriceDEX = $DCPPcsDEX * $NumberDEX;
            $DCP_PriceDEX = $DCP_PriceDEX + $DCPPriceDEX;

            $DCYPcsDEX = $DEX->dcy_s_Quantity;
            $DCY_PcsDEX = $DCY_PcsDEX + $DCYPcsDEX;

            $DCYPriceDEX = $DCYPcsDEX * $NumberDEX;
            $DCY_PriceDEX = $DCY_PriceDEX + $DCYPriceDEX;

            $DEXPcsDEX = $DEX->dex_s_Quantity;
            $DEX_PcsDEX = $DEX_PcsDEX + $DEXPcsDEX;

            $DEXPriceDEX = $DEXPcsDEX * $NumberDEX;
            $DEX_PriceDEX = $DEX_PriceDEX + $DEXPriceDEX;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDC1 = number_format($Pcs_AfterDC1, 0);
        $Price_AfterDC1 = number_format($Price_AfterDC1, 0);
        $Po_PcsDC1 = number_format($Po_PcsDC1, 0);
        $Po_PriceDC1 = number_format($Po_PriceDC1, 0);
        $Neg_PcsDC1 = number_format($Neg_PcsDC1, 0);
        $Neg_PriceDC1 = number_format($Neg_PriceDC1, 0);
        $BackChange_PcsDC1 = number_format($BackChange_PcsDC1, 0);
        $BackChange_PriceDC1 = number_format($BackChange_PriceDC1, 0);
        $Purchase_PcsDC1 = number_format($Purchase_PcsDC1, 0);
        $Purchase_PriceDC1 = number_format($Purchase_PriceDC1, 0);
        $ReciveTranfer_PcsDC1 = number_format($ReciveTranfer_PcsDC1, 0);
        $ReciveTranfer_PriceDC1 = number_format($ReciveTranfer_PriceDC1, 0);
        $ReturnItem_PCSDC1 = number_format($ReturnItem_PCSDC1, 0);
        $ReturnItem_PriceDC1 = number_format($ReturnItem_PriceDC1, 0);
        $AllIn_PcsDC1 = number_format($AllIn_PcsDC1, 0);
        $AllIn_PriceDC1 = number_format($AllIn_PriceDC1, 0);
        $SendSale_PcsDC1 = number_format($SendSale_PcsDC1, 0);
        $SendSale_PriceDC1 = number_format($SendSale_PriceDC1, 0);
        $ReciveTranOut_PcsDC1 = number_format($ReciveTranOut_PcsDC1, 0);
        $ReciveTranOut_PriceDC1 = number_format($ReciveTranOut_PriceDC1, 0);
        $ReturnStore_PcsDC1 = number_format($ReturnStore_PcsDC1, 0);
        $ReturnStore_PriceDC1 = number_format($ReturnStore_PriceDC1, 0);
        $AllOut_PcsDC1 = number_format($AllOut_PcsDC1, 0);
        $AllOut_PriceDC1 = number_format($AllOut_PriceDC1, 0);
        $Calculate_PcsDC1 = number_format($Calculate_PcsDC1, 0);
        $Calculate_PriceDC1 = number_format($Calculate_PriceDC1, 0);
        $NewCalculate_PcsDC1 = number_format($NewCalculate_PcsDC1, 0);
        $NewCalculate_PriceDC1 = number_format($NewCalculate_PriceDC1, 0);
        $Diff_PcsDC1 = number_format($Diff_PcsDC1, 0);
        $Diff_PriceDC1 = number_format($Diff_PriceDC1, 0);
        $NewTotal_PcsDC1 = number_format($NewTotal_PcsDC1, 0);
        $NewTotal_PriceDC1 = number_format($NewTotal_PriceDC1, 0);
        $NewTotalDiff_NavDC1 = number_format($NewTotalDiff_NavDC1, 0);
        $NewTotalDiff_CalDC1 = number_format($NewTotalDiff_CalDC1, 0);
        $a7f1fgbu02s_PcsDC1 = number_format($a7f1fgbu02s_PcsDC1, 0);
        $a7f1fgbu02s_PriceDC1 = number_format($a7f1fgbu02s_PriceDC1, 0);
        $a7f2fgbu10s_PcsDC1 = number_format($a7f2fgbu10s_PcsDC1, 0);
        $a7f2fgbu10s_PriceDC1 = number_format($a7f2fgbu10s_PriceDC1, 0);
        $a7f2thbu05s_PcsDC1 = number_format($a7f2thbu05s_PcsDC1, 0);
        $a7f2thbu05s_PriceDC1 = number_format($a7f2thbu05s_PriceDC1, 0);
        $a7f2debu10s_PcsDC1 = number_format($a7f2debu10s_PcsDC1, 0);
        $a7f2debu10s_PriceDC1 = number_format($a7f2debu10s_PriceDC1, 0);
        $a7f2exbu11s_PcsDC1 = number_format($a7f2exbu11s_PcsDC1, 0);
        $a7f2exbu11s_PriceDC1 = number_format($a7f2exbu11s_PriceDC1, 0);
        $a7f2twbu04s_PcsDC1 = number_format($a7f2twbu04s_PcsDC1, 0);
        $a7f2twbu04s_PriceDC1 = number_format($a7f2twbu04s_PriceDC1, 0);
        $a7f2twbu07s_PcsDC1 = number_format($a7f2twbu07s_PcsDC1, 0);
        $a7f2twbu07s_PriceDC1 = number_format($a7f2twbu07s_PriceDC1, 0);
        $a7f2cebu10s_PcsDC1 = number_format($a7f2cebu10s_PcsDC1, 0);
        $a7f2cebu10s_PriceDC1 = number_format($a7f2cebu10s_PriceDC1, 0);
        $a8f1fgbu02s_PcsDC1 = number_format($a8f1fgbu02s_PcsDC1, 0);
        $a8f1fgbu02s_PriceDC1 = number_format($a8f1fgbu02s_PriceDC1, 0);
        $a8f2fgbu10s_PcsDC1 = number_format($a8f2fgbu10s_PcsDC1, 0);
        $a8f2fgbu10s_PriceDC1 = number_format($a8f2fgbu10s_PriceDC1, 0);
        $a8f2thbu05s_PcsDC1 = number_format($a8f2thbu05s_PcsDC1, 0);
        $a8f2thbu05s_PriceDC1 = number_format($a8f2thbu05s_PriceDC1, 0);
        $a8f2debu10s_PcsDC1 = number_format($a8f2debu10s_PcsDC1, 0);
        $a8f2debu10s_PriceDC1 = number_format($a8f2debu10s_PriceDC1, 0);
        $a8f2exbu11s_PcsDC1 = number_format($a8f2exbu11s_PcsDC1, 0);
        $a8f2exbu11s_PriceDC1 = number_format($a8f2exbu11s_PriceDC1, 0);
        $a8f2twbu04s_PcsDC1 = number_format($a8f2twbu04s_PcsDC1, 0);
        $a8f2twbu04s_PriceDC1 = number_format($a8f2twbu04s_PriceDC1, 0);
        $a8f2twbu07s_PcsDC1 = number_format($a8f2twbu07s_PcsDC1, 0);
        $a8f2twbu07s_PriceDC1 = number_format($a8f2twbu07s_PriceDC1, 0);
        $a8f2cebu10s_PcsDC1 = number_format($a8f2cebu10s_PcsDC1, 0);
        $a8f2cebu10s_PriceDC1 = number_format($a8f2cebu10s_PriceDC1, 0);
        $DC1_PcsDC1 = number_format($DC1_PcsDC1, 0);
        $DC1_PriceDC1 = number_format($DC1_PriceDC1, 0);
        $DCP_PcsDC1 = number_format($DCP_PcsDC1, 0);
        $DCP_PriceDC1 = number_format($DCP_PriceDC1, 0);
        $DCY_PcsDC1 = number_format($DCY_PcsDC1, 0);
        $DCY_PriceDC1 = number_format($DCY_PriceDC1, 0);
        $DEX_PcsDC1 = number_format($DEX_PcsDC1, 0);
        $DEX_PriceDC1 = number_format($DEX_PriceDC1, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDCY = number_format($Pcs_AfterDCY, 0);
        $Price_AfterDCY = number_format($Price_AfterDCY, 0);
        $Po_PcsDCY = number_format($Po_PcsDCY, 0);
        $Po_PriceDCY = number_format($Po_PriceDCY, 0);
        $Neg_PcsDCY = number_format($Neg_PcsDCY, 0);
        $Neg_PriceDCY = number_format($Neg_PriceDCY, 0);
        $BackChange_PcsDCY = number_format($BackChange_PcsDCY, 0);
        $BackChange_PriceDCY = number_format($BackChange_PriceDCY, 0);
        $Purchase_PcsDCY = number_format($Purchase_PcsDCY, 0);
        $Purchase_PriceDCY = number_format($Purchase_PriceDCY, 0);
        $ReciveTranfer_PcsDCY = number_format($ReciveTranfer_PcsDCY, 0);
        $ReciveTranfer_PriceDCY = number_format($ReciveTranfer_PriceDCY, 0);
        $ReturnItem_PCSDCY = number_format($ReturnItem_PCSDCY, 0);
        $ReturnItem_PriceDCY = number_format($ReturnItem_PriceDCY, 0);
        $AllIn_PcsDCY = number_format($AllIn_PcsDCY, 0);
        $AllIn_PriceDCY = number_format($AllIn_PriceDCY, 0);
        $SendSale_PcsDCY = number_format($SendSale_PcsDCY, 0);
        $SendSale_PriceDCY = number_format($SendSale_PriceDCY, 0);
        $ReciveTranOut_PcsDCY = number_format($ReciveTranOut_PcsDCY, 0);
        $ReciveTranOut_PriceDCY = number_format($ReciveTranOut_PriceDCY, 0);
        $ReturnStore_PcsDCY = number_format($ReturnStore_PcsDCY, 0);
        $ReturnStore_PriceDCY = number_format($ReturnStore_PriceDCY, 0);
        $AllOut_PcsDCY = number_format($AllOut_PcsDCY, 0);
        $AllOut_PriceDCY = number_format($AllOut_PriceDCY, 0);
        $Calculate_PcsDCY = number_format($Calculate_PcsDCY, 0);
        $Calculate_PriceDCY = number_format($Calculate_PriceDCY, 0);
        $NewCalculate_PcsDCY = number_format($NewCalculate_PcsDCY, 0);
        $NewCalculate_PriceDCY = number_format($NewCalculate_PriceDCY, 0);
        $Diff_PcsDCY = number_format($Diff_PcsDCY, 0);
        $Diff_PriceDCY = number_format($Diff_PriceDCY, 0);
        $NewTotal_PcsDCY = number_format($NewTotal_PcsDCY, 0);
        $NewTotal_PriceDCY = number_format($NewTotal_PriceDCY, 0);
        $NewTotalDiff_NavDCY = number_format($NewTotalDiff_NavDCY, 0);
        $NewTotalDiff_CalDCY = number_format($NewTotalDiff_CalDCY, 0);
        $a7f1fgbu02s_PcsDCY = number_format($a7f1fgbu02s_PcsDCY, 0);
        $a7f1fgbu02s_PriceDCY = number_format($a7f1fgbu02s_PriceDCY, 0);
        $a7f2fgbu10s_PcsDCY = number_format($a7f2fgbu10s_PcsDCY, 0);
        $a7f2fgbu10s_PriceDCY = number_format($a7f2fgbu10s_PriceDCY, 0);
        $a7f2thbu05s_PcsDCY = number_format($a7f2thbu05s_PcsDCY, 0);
        $a7f2thbu05s_PriceDCY = number_format($a7f2thbu05s_PriceDCY, 0);
        $a7f2debu10s_PcsDCY = number_format($a7f2debu10s_PcsDCY, 0);
        $a7f2debu10s_PriceDCY = number_format($a7f2debu10s_PriceDCY, 0);
        $a7f2exbu11s_PcsDCY = number_format($a7f2exbu11s_PcsDCY, 0);
        $a7f2exbu11s_PriceDCY = number_format($a7f2exbu11s_PriceDCY, 0);
        $a7f2twbu04s_PcsDCY = number_format($a7f2twbu04s_PcsDCY, 0);
        $a7f2twbu04s_PriceDCY = number_format($a7f2twbu04s_PriceDCY, 0);
        $a7f2twbu07s_PcsDCY = number_format($a7f2twbu07s_PcsDCY, 0);
        $a7f2twbu07s_PriceDCY = number_format($a7f2twbu07s_PriceDCY, 0);
        $a7f2cebu10s_PcsDCY = number_format($a7f2cebu10s_PcsDCY, 0);
        $a7f2cebu10s_PriceDCY = number_format($a7f2cebu10s_PriceDCY, 0);
        $a8f1fgbu02s_PcsDCY = number_format($a8f1fgbu02s_PcsDCY, 0);
        $a8f1fgbu02s_PriceDCY = number_format($a8f1fgbu02s_PriceDCY, 0);
        $a8f2fgbu10s_PcsDCY = number_format($a8f2fgbu10s_PcsDCY, 0);
        $a8f2fgbu10s_PriceDCY = number_format($a8f2fgbu10s_PriceDCY, 0);
        $a8f2thbu05s_PcsDCY = number_format($a8f2thbu05s_PcsDCY, 0);
        $a8f2thbu05s_PriceDCY = number_format($a8f2thbu05s_PriceDCY, 0);
        $a8f2debu10s_PcsDCY = number_format($a8f2debu10s_PcsDCY, 0);
        $a8f2debu10s_PriceDCY = number_format($a8f2debu10s_PriceDCY, 0);
        $a8f2exbu11s_PcsDCY = number_format($a8f2exbu11s_PcsDCY, 0);
        $a8f2exbu11s_PriceDCY = number_format($a8f2exbu11s_PriceDCY, 0);
        $a8f2twbu04s_PcsDCY = number_format($a8f2twbu04s_PcsDCY, 0);
        $a8f2twbu04s_PriceDCY = number_format($a8f2twbu04s_PriceDCY, 0);
        $a8f2twbu07s_PcsDCY = number_format($a8f2twbu07s_PcsDCY, 0);
        $a8f2twbu07s_PriceDCY = number_format($a8f2twbu07s_PriceDCY, 0);
        $a8f2cebu10s_PcsDCY = number_format($a8f2cebu10s_PcsDCY, 0);
        $a8f2cebu10s_PriceDCY = number_format($a8f2cebu10s_PriceDCY, 0);
        $DC1_PcsDCY = number_format($DC1_PcsDCY, 0);
        $DC1_PriceDCY = number_format($DC1_PriceDCY, 0);
        $DCP_PcsDCY = number_format($DCP_PcsDCY, 0);
        $DCP_PriceDCY = number_format($DCP_PriceDCY, 0);
        $DCY_PcsDCY = number_format($DCY_PcsDCY, 0);
        $DCY_PriceDCY = number_format($DCY_PriceDCY, 0);
        $DEX_PcsDCY = number_format($DEX_PcsDCY, 0);
        $DEX_PriceDCY = number_format($DEX_PriceDCY, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDCP = number_format($Pcs_AfterDCP, 0);
        $Price_AfterDCP = number_format($Price_AfterDCP, 0);
        $Po_PcsDCP = number_format($Po_PcsDCP, 0);
        $Po_PriceDCP = number_format($Po_PriceDCP, 0);
        $Neg_PcsDCP = number_format($Neg_PcsDCP, 0);
        $Neg_PriceDCP = number_format($Neg_PriceDCP, 0);
        $BackChange_PcsDCP = number_format($BackChange_PcsDCP, 0);
        $BackChange_PriceDCP = number_format($BackChange_PriceDCP, 0);
        $Purchase_PcsDCP = number_format($Purchase_PcsDCP, 0);
        $Purchase_PriceDCP = number_format($Purchase_PriceDCP, 0);
        $ReciveTranfer_PcsDCP = number_format($ReciveTranfer_PcsDCP, 0);
        $ReciveTranfer_PriceDCP = number_format($ReciveTranfer_PriceDCP, 0);
        $ReturnItem_PCSDCP = number_format($ReturnItem_PCSDCP, 0);
        $ReturnItem_PriceDCP = number_format($ReturnItem_PriceDCP, 0);
        $AllIn_PcsDCP = number_format($AllIn_PcsDCP, 0);
        $AllIn_PriceDCP = number_format($AllIn_PriceDCP, 0);
        $SendSale_PcsDCP = number_format($SendSale_PcsDCP, 0);
        $SendSale_PriceDCP = number_format($SendSale_PriceDCP, 0);
        $ReciveTranOut_PcsDCP = number_format($ReciveTranOut_PcsDCP, 0);
        $ReciveTranOut_PriceDCP = number_format($ReciveTranOut_PriceDCP, 0);
        $ReturnStore_PcsDCP = number_format($ReturnStore_PcsDCP, 0);
        $ReturnStore_PriceDCP = number_format($ReturnStore_PriceDCP, 0);
        $AllOut_PcsDCP = number_format($AllOut_PcsDCP, 0);
        $AllOut_PriceDCP = number_format($AllOut_PriceDCP, 0);
        $Calculate_PcsDCP = number_format($Calculate_PcsDCP, 0);
        $Calculate_PriceDCP = number_format($Calculate_PriceDCP, 0);
        $NewCalculate_PcsDCP = number_format($NewCalculate_PcsDCP, 0);
        $NewCalculate_PriceDCP = number_format($NewCalculate_PriceDCP, 0);
        $Diff_PcsDCP = number_format($Diff_PcsDCP, 0);
        $Diff_PriceDCP = number_format($Diff_PriceDCP, 0);
        $NewTotal_PcsDCP = number_format($NewTotal_PcsDCP, 0);
        $NewTotal_PriceDCP = number_format($NewTotal_PriceDCP, 0);
        $NewTotalDiff_NavDCP = number_format($NewTotalDiff_NavDCP, 0);
        $NewTotalDiff_CalDCP = number_format($NewTotalDiff_CalDCP, 0);
        $a7f1fgbu02s_PcsDCP = number_format($a7f1fgbu02s_PcsDCP, 0);
        $a7f1fgbu02s_PriceDCP = number_format($a7f1fgbu02s_PriceDCP, 0);
        $a7f2fgbu10s_PcsDCP = number_format($a7f2fgbu10s_PcsDCP, 0);
        $a7f2fgbu10s_PriceDCP = number_format($a7f2fgbu10s_PriceDCP, 0);
        $a7f2thbu05s_PcsDCP = number_format($a7f2thbu05s_PcsDCP, 0);
        $a7f2thbu05s_PriceDCP = number_format($a7f2thbu05s_PriceDCP, 0);
        $a7f2debu10s_PcsDCP = number_format($a7f2debu10s_PcsDCP, 0);
        $a7f2debu10s_PriceDCP = number_format($a7f2debu10s_PriceDCP, 0);
        $a7f2exbu11s_PcsDCP = number_format($a7f2exbu11s_PcsDCP, 0);
        $a7f2exbu11s_PriceDCP = number_format($a7f2exbu11s_PriceDCP, 0);
        $a7f2twbu04s_PcsDCP = number_format($a7f2twbu04s_PcsDCP, 0);
        $a7f2twbu04s_PriceDCP = number_format($a7f2twbu04s_PriceDCP, 0);
        $a7f2twbu07s_PcsDCP = number_format($a7f2twbu07s_PcsDCP, 0);
        $a7f2twbu07s_PriceDCP = number_format($a7f2twbu07s_PriceDCP, 0);
        $a7f2cebu10s_PcsDCP = number_format($a7f2cebu10s_PcsDCP, 0);
        $a7f2cebu10s_PriceDCP = number_format($a7f2cebu10s_PriceDCP, 0);
        $a8f1fgbu02s_PcsDCP = number_format($a8f1fgbu02s_PcsDCP, 0);
        $a8f1fgbu02s_PriceDCP = number_format($a8f1fgbu02s_PriceDCP, 0);
        $a8f2fgbu10s_PcsDCP = number_format($a8f2fgbu10s_PcsDCP, 0);
        $a8f2fgbu10s_PriceDCP = number_format($a8f2fgbu10s_PriceDCP, 0);
        $a8f2thbu05s_PcsDCP = number_format($a8f2thbu05s_PcsDCP, 0);
        $a8f2thbu05s_PriceDCP = number_format($a8f2thbu05s_PriceDCP, 0);
        $a8f2debu10s_PcsDCP = number_format($a8f2debu10s_PcsDCP, 0);
        $a8f2debu10s_PriceDCP = number_format($a8f2debu10s_PriceDCP, 0);
        $a8f2exbu11s_PcsDCP = number_format($a8f2exbu11s_PcsDCP, 0);
        $a8f2exbu11s_PriceDCP = number_format($a8f2exbu11s_PriceDCP, 0);
        $a8f2twbu04s_PcsDCP = number_format($a8f2twbu04s_PcsDCP, 0);
        $a8f2twbu04s_PriceDCP = number_format($a8f2twbu04s_PriceDCP, 0);
        $a8f2twbu07s_PcsDCP = number_format($a8f2twbu07s_PcsDCP, 0);
        $a8f2twbu07s_PriceDCP = number_format($a8f2twbu07s_PriceDCP, 0);
        $a8f2cebu10s_PcsDCP = number_format($a8f2cebu10s_PcsDCP, 0);
        $a8f2cebu10s_PriceDCP = number_format($a8f2cebu10s_PriceDCP, 0);
        $DC1_PcsDCP = number_format($DC1_PcsDCP, 0);
        $DC1_PriceDCP = number_format($DC1_PriceDCP, 0);
        $DCP_PcsDCP = number_format($DCP_PcsDCP, 0);
        $DCP_PriceDCP = number_format($DCP_PriceDCP, 0);
        $DCY_PcsDCP = number_format($DCY_PcsDCP, 0);
        $DCY_PriceDCP = number_format($DCY_PriceDCP, 0);
        $DEX_PcsDCP = number_format($DEX_PcsDCP, 0);
        $DEX_PriceDCP = number_format($DEX_PriceDCP, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterDEX = number_format($Pcs_AfterDEX, 0);
        $Price_AfterDEX = number_format($Price_AfterDEX, 0);
        $Po_PcsDEX = number_format($Po_PcsDEX, 0);
        $Po_PriceDEX = number_format($Po_PriceDEX, 0);
        $Neg_PcsDEX = number_format($Neg_PcsDEX, 0);
        $Neg_PriceDEX = number_format($Neg_PriceDEX, 0);
        $BackChange_PcsDEX = number_format($BackChange_PcsDEX, 0);
        $BackChange_PriceDEX = number_format($BackChange_PriceDEX, 0);
        $Purchase_PcsDEX = number_format($Purchase_PcsDEX, 0);
        $Purchase_PriceDEX = number_format($Purchase_PriceDEX, 0);
        $ReciveTranfer_PcsDEX = number_format($ReciveTranfer_PcsDEX, 0);
        $ReciveTranfer_PriceDEX = number_format($ReciveTranfer_PriceDEX, 0);
        $ReturnItem_PCSDEX = number_format($ReturnItem_PCSDEX, 0);
        $ReturnItem_PriceDEX = number_format($ReturnItem_PriceDEX, 0);
        $AllIn_PcsDEX = number_format($AllIn_PcsDEX, 0);
        $AllIn_PriceDEX = number_format($AllIn_PriceDEX, 0);
        $SendSale_PcsDEX = number_format($SendSale_PcsDEX, 0);
        $SendSale_PriceDEX = number_format($SendSale_PriceDEX, 0);
        $ReciveTranOut_PcsDEX = number_format($ReciveTranOut_PcsDEX, 0);
        $ReciveTranOut_PriceDEX = number_format($ReciveTranOut_PriceDEX, 0);
        $ReturnStore_PcsDEX = number_format($ReturnStore_PcsDEX, 0);
        $ReturnStore_PriceDEX = number_format($ReturnStore_PriceDEX, 0);
        $AllOut_PcsDEX = number_format($AllOut_PcsDEX, 0);
        $AllOut_PriceDEX = number_format($AllOut_PriceDEX, 0);
        $Calculate_PcsDEX = number_format($Calculate_PcsDEX, 0);
        $Calculate_PriceDEX = number_format($Calculate_PriceDEX, 0);
        $NewCalculate_PcsDEX = number_format($NewCalculate_PcsDEX, 0);
        $NewCalculate_PriceDEX = number_format($NewCalculate_PriceDEX, 0);
        $Diff_PcsDEX = number_format($Diff_PcsDEX, 0);
        $Diff_PriceDEX = number_format($Diff_PriceDEX, 0);
        $NewTotal_PcsDEX = number_format($NewTotal_PcsDEX, 0);
        $NewTotal_PriceDEX = number_format($NewTotal_PriceDEX, 0);
        $NewTotalDiff_NavDEX = number_format($NewTotalDiff_NavDEX, 0);
        $NewTotalDiff_CalDEX = number_format($NewTotalDiff_CalDEX, 0);
        $a7f1fgbu02s_PcsDEX = number_format($a7f1fgbu02s_PcsDEX, 0);
        $a7f1fgbu02s_PriceDEX = number_format($a7f1fgbu02s_PriceDEX, 0);
        $a7f2fgbu10s_PcsDEX = number_format($a7f2fgbu10s_PcsDEX, 0);
        $a7f2fgbu10s_PriceDEX = number_format($a7f2fgbu10s_PriceDEX, 0);
        $a7f2thbu05s_PcsDEX = number_format($a7f2thbu05s_PcsDEX, 0);
        $a7f2thbu05s_PriceDEX = number_format($a7f2thbu05s_PriceDEX, 0);
        $a7f2debu10s_PcsDEX = number_format($a7f2debu10s_PcsDEX, 0);
        $a7f2debu10s_PriceDEX = number_format($a7f2debu10s_PriceDEX, 0);
        $a7f2exbu11s_PcsDEX = number_format($a7f2exbu11s_PcsDEX, 0);
        $a7f2exbu11s_PriceDEX = number_format($a7f2exbu11s_PriceDEX, 0);
        $a7f2twbu04s_PcsDEX = number_format($a7f2twbu04s_PcsDEX, 0);
        $a7f2twbu04s_PriceDEX = number_format($a7f2twbu04s_PriceDEX, 0);
        $a7f2twbu07s_PcsDEX = number_format($a7f2twbu07s_PcsDEX, 0);
        $a7f2twbu07s_PriceDEX = number_format($a7f2twbu07s_PriceDEX, 0);
        $a7f2cebu10s_PcsDEX = number_format($a7f2cebu10s_PcsDEX, 0);
        $a7f2cebu10s_PriceDEX = number_format($a7f2cebu10s_PriceDEX, 0);
        $a8f1fgbu02s_PcsDEX = number_format($a8f1fgbu02s_PcsDEX, 0);
        $a8f1fgbu02s_PriceDEX = number_format($a8f1fgbu02s_PriceDEX, 0);
        $a8f2fgbu10s_PcsDEX = number_format($a8f2fgbu10s_PcsDEX, 0);
        $a8f2fgbu10s_PriceDEX = number_format($a8f2fgbu10s_PriceDEX, 0);
        $a8f2thbu05s_PcsDEX = number_format($a8f2thbu05s_PcsDEX, 0);
        $a8f2thbu05s_PriceDEX = number_format($a8f2thbu05s_PriceDEX, 0);
        $a8f2debu10s_PcsDEX = number_format($a8f2debu10s_PcsDEX, 0);
        $a8f2debu10s_PriceDEX = number_format($a8f2debu10s_PriceDEX, 0);
        $a8f2exbu11s_PcsDEX = number_format($a8f2exbu11s_PcsDEX, 0);
        $a8f2exbu11s_PriceDEX = number_format($a8f2exbu11s_PriceDEX, 0);
        $a8f2twbu04s_PcsDEX = number_format($a8f2twbu04s_PcsDEX, 0);
        $a8f2twbu04s_PriceDEX = number_format($a8f2twbu04s_PriceDEX, 0);
        $a8f2twbu07s_PcsDEX = number_format($a8f2twbu07s_PcsDEX, 0);
        $a8f2twbu07s_PriceDEX = number_format($a8f2twbu07s_PriceDEX, 0);
        $a8f2cebu10s_PcsDEX = number_format($a8f2cebu10s_PcsDEX, 0);
        $a8f2cebu10s_PriceDEX = number_format($a8f2cebu10s_PriceDEX, 0);
        $DC1_PcsDEX = number_format($DC1_PcsDEX, 0);
        $DC1_PriceDEX = number_format($DC1_PriceDEX, 0);
        $DCP_PcsDEX = number_format($DCP_PcsDEX, 0);
        $DCP_PriceDEX = number_format($DCP_PriceDEX, 0);
        $DCY_PcsDEX = number_format($DCY_PcsDEX, 0);
        $DCY_PriceDEX = number_format($DCY_PriceDEX, 0);
        $DEX_PcsDEX = number_format($DEX_PcsDEX, 0);
        $DEX_PriceDEX = number_format($DEX_PriceDEX, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////


        $Data = [
            $Pcs_AfterDC1,
            $Price_AfterDC1,
            $Pcs_AfterDC1,
            $Price_AfterDC1,
            $Po_PcsDC1,
            $Po_PriceDC1,
            $Neg_PcsDC1,
            $Neg_PriceDC1,
            $BackChange_PcsDC1,
            $BackChange_PriceDC1,
            $Purchase_PcsDC1,
            $Purchase_PriceDC1,
            $ReciveTranfer_PcsDC1,
            $ReciveTranfer_PriceDC1,
            $ReturnItem_PCSDC1,
            $ReturnItem_PriceDC1,
            $AllIn_PcsDC1,
            $AllIn_PriceDC1,
            $SendSale_PcsDC1,
            $SendSale_PriceDC1,
            $ReciveTranOut_PcsDC1,
            $ReciveTranOut_PriceDC1,
            $ReturnStore_PcsDC1,
            $ReturnStore_PriceDC1,
            $AllOut_PcsDC1,
            $AllOut_PriceDC1,
            $Calculate_PcsDC1,
            $Calculate_PriceDC1,
            $NewCalculate_PcsDC1,
            $NewCalculate_PriceDC1,
            $Diff_PcsDC1,
            $Diff_PriceDC1,
            $NewTotal_PcsDC1,
            $NewTotal_PriceDC1,
            $NewTotalDiff_NavDC1,
            $NewTotalDiff_CalDC1,
            $a7f1fgbu02s_PcsDC1,
            $a7f1fgbu02s_PriceDC1,
            $a7f2fgbu10s_PcsDC1,
            $a7f2fgbu10s_PriceDC1,
            $a7f2thbu05s_PcsDC1,
            $a7f2thbu05s_PriceDC1,
            $a7f2debu10s_PcsDC1,
            $a7f2debu10s_PriceDC1,
            $a7f2exbu11s_PcsDC1,
            $a7f2exbu11s_PriceDC1,
            $a7f2twbu04s_PcsDC1,
            $a7f2twbu04s_PriceDC1,
            $a7f2twbu07s_PcsDC1,
            $a7f2twbu07s_PriceDC1,
            $a7f2cebu10s_PcsDC1,
            $a7f2cebu10s_PriceDC1,
            $a8f1fgbu02s_PcsDC1,
            $a8f1fgbu02s_PriceDC1,
            $a8f2fgbu10s_PcsDC1,
            $a8f2fgbu10s_PriceDC1,
            $a8f2thbu05s_PcsDC1,
            $a8f2thbu05s_PriceDC1,
            $a8f2debu10s_PcsDC1,
            $a8f2debu10s_PriceDC1,
            $a8f2exbu11s_PcsDC1,
            $a8f2exbu11s_PriceDC1,
            $a8f2twbu04s_PcsDC1,
            $a8f2twbu04s_PriceDC1,
            $a8f2twbu07s_PcsDC1,
            $a8f2twbu07s_PriceDC1,
            $a8f2cebu10s_PcsDC1,
            $a8f2cebu10s_PriceDC1,
            $DC1_PcsDC1,
            $DC1_PriceDC1,
            $DCP_PcsDC1,
            $DCP_PriceDC1,
            $DCY_PcsDC1,
            $DCY_PriceDC1,
            $DEX_PcsDC1,
            $DEX_PriceDC1,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterDCY,
            $Price_AfterDCY,
            $Pcs_AfterDCY,
            $Price_AfterDCY,
            $Po_PcsDCY,
            $Po_PriceDCY,
            $Neg_PcsDCY,
            $Neg_PriceDCY,
            $BackChange_PcsDCY,
            $BackChange_PriceDCY,
            $Purchase_PcsDCY,
            $Purchase_PriceDCY,
            $ReciveTranfer_PcsDCY,
            $ReciveTranfer_PriceDCY,
            $ReturnItem_PCSDCY,
            $ReturnItem_PriceDCY,
            $AllIn_PcsDCY,
            $AllIn_PriceDCY,
            $SendSale_PcsDCY,
            $SendSale_PriceDCY,
            $ReciveTranOut_PcsDCY,
            $ReciveTranOut_PriceDCY,
            $ReturnStore_PcsDCY,
            $ReturnStore_PriceDCY,
            $AllOut_PcsDCY,
            $AllOut_PriceDCY,
            $Calculate_PcsDCY,
            $Calculate_PriceDCY,
            $NewCalculate_PcsDCY,
            $NewCalculate_PriceDCY,
            $Diff_PcsDCY,
            $Diff_PriceDCY,
            $NewTotal_PcsDCY,
            $NewTotal_PriceDCY,
            $NewTotalDiff_NavDCY,
            $NewTotalDiff_CalDCY,
            $a7f1fgbu02s_PcsDCY,
            $a7f1fgbu02s_PriceDCY,
            $a7f2fgbu10s_PcsDCY,
            $a7f2fgbu10s_PriceDCY,
            $a7f2thbu05s_PcsDCY,
            $a7f2thbu05s_PriceDCY,
            $a7f2debu10s_PcsDCY,
            $a7f2debu10s_PriceDCY,
            $a7f2exbu11s_PcsDCY,
            $a7f2exbu11s_PriceDCY,
            $a7f2twbu04s_PcsDCY,
            $a7f2twbu04s_PriceDCY,
            $a7f2twbu07s_PcsDCY,
            $a7f2twbu07s_PriceDCY,
            $a7f2cebu10s_PcsDCY,
            $a7f2cebu10s_PriceDCY,
            $a8f1fgbu02s_PcsDCY,
            $a8f1fgbu02s_PriceDCY,
            $a8f2fgbu10s_PcsDCY,
            $a8f2fgbu10s_PriceDCY,
            $a8f2thbu05s_PcsDCY,
            $a8f2thbu05s_PriceDCY,
            $a8f2debu10s_PcsDCY,
            $a8f2debu10s_PriceDCY,
            $a8f2exbu11s_PcsDCY,
            $a8f2exbu11s_PriceDCY,
            $a8f2twbu04s_PcsDCY,
            $a8f2twbu04s_PriceDCY,
            $a8f2twbu07s_PcsDCY,
            $a8f2twbu07s_PriceDCY,
            $a8f2cebu10s_PcsDCY,
            $a8f2cebu10s_PriceDCY,
            $DC1_PcsDCY,
            $DC1_PriceDCY,
            $DCP_PcsDCY,
            $DCP_PriceDCY,
            $DCY_PcsDCY,
            $DCY_PriceDCY,
            $DEX_PcsDCY,
            $DEX_PriceDCY,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterDCP,
            $Price_AfterDCP,
            $Pcs_AfterDCP,
            $Price_AfterDCP,
            $Po_PcsDCP,
            $Po_PriceDCP,
            $Neg_PcsDCP,
            $Neg_PriceDCP,
            $BackChange_PcsDCP,
            $BackChange_PriceDCP,
            $Purchase_PcsDCP,
            $Purchase_PriceDCP,
            $ReciveTranfer_PcsDCP,
            $ReciveTranfer_PriceDCP,
            $ReturnItem_PCSDCP,
            $ReturnItem_PriceDCP,
            $AllIn_PcsDCP,
            $AllIn_PriceDCP,
            $SendSale_PcsDCP,
            $SendSale_PriceDCP,
            $ReciveTranOut_PcsDCP,
            $ReciveTranOut_PriceDCP,
            $ReturnStore_PcsDCP,
            $ReturnStore_PriceDCP,
            $AllOut_PcsDCP,
            $AllOut_PriceDCP,
            $Calculate_PcsDCP,
            $Calculate_PriceDCP,
            $NewCalculate_PcsDCP,
            $NewCalculate_PriceDCP,
            $Diff_PcsDCP,
            $Diff_PriceDCP,
            $NewTotal_PcsDCP,
            $NewTotal_PriceDCP,
            $NewTotalDiff_NavDCP,
            $NewTotalDiff_CalDCP,
            $a7f1fgbu02s_PcsDCP,
            $a7f1fgbu02s_PriceDCP,
            $a7f2fgbu10s_PcsDCP,
            $a7f2fgbu10s_PriceDCP,
            $a7f2thbu05s_PcsDCP,
            $a7f2thbu05s_PriceDCP,
            $a7f2debu10s_PcsDCP,
            $a7f2debu10s_PriceDCP,
            $a7f2exbu11s_PcsDCP,
            $a7f2exbu11s_PriceDCP,
            $a7f2twbu04s_PcsDCP,
            $a7f2twbu04s_PriceDCP,
            $a7f2twbu07s_PcsDCP,
            $a7f2twbu07s_PriceDCP,
            $a7f2cebu10s_PcsDCP,
            $a7f2cebu10s_PriceDCP,
            $a8f1fgbu02s_PcsDCP,
            $a8f1fgbu02s_PriceDCP,
            $a8f2fgbu10s_PcsDCP,
            $a8f2fgbu10s_PriceDCP,
            $a8f2thbu05s_PcsDCP,
            $a8f2thbu05s_PriceDCP,
            $a8f2debu10s_PcsDCP,
            $a8f2debu10s_PriceDCP,
            $a8f2exbu11s_PcsDCP,
            $a8f2exbu11s_PriceDCP,
            $a8f2twbu04s_PcsDCP,
            $a8f2twbu04s_PriceDCP,
            $a8f2twbu07s_PcsDCP,
            $a8f2twbu07s_PriceDCP,
            $a8f2cebu10s_PcsDCP,
            $a8f2cebu10s_PriceDCP,
            $DC1_PcsDCP,
            $DC1_PriceDCP,
            $DCP_PcsDCP,
            $DCP_PriceDCP,
            $DCY_PcsDCP,
            $DCY_PriceDCP,
            $DEX_PcsDCP,
            $DEX_PriceDCP,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterDEX,
            $Price_AfterDEX,
            $Pcs_AfterDEX,
            $Price_AfterDEX,
            $Po_PcsDEX,
            $Po_PriceDEX,
            $Neg_PcsDEX,
            $Neg_PriceDEX,
            $BackChange_PcsDEX,
            $BackChange_PriceDEX,
            $Purchase_PcsDEX,
            $Purchase_PriceDEX,
            $ReciveTranfer_PcsDEX,
            $ReciveTranfer_PriceDEX,
            $ReturnItem_PCSDEX,
            $ReturnItem_PriceDEX,
            $AllIn_PcsDEX,
            $AllIn_PriceDEX,
            $SendSale_PcsDEX,
            $SendSale_PriceDEX,
            $ReciveTranOut_PcsDEX,
            $ReciveTranOut_PriceDEX,
            $ReturnStore_PcsDEX,
            $ReturnStore_PriceDEX,
            $AllOut_PcsDEX,
            $AllOut_PriceDEX,
            $Calculate_PcsDEX,
            $Calculate_PriceDEX,
            $NewCalculate_PcsDEX,
            $NewCalculate_PriceDEX,
            $Diff_PcsDEX,
            $Diff_PriceDEX,
            $NewTotal_PcsDEX,
            $NewTotal_PriceDEX,
            $NewTotalDiff_NavDEX,
            $NewTotalDiff_CalDEX,
            $a7f1fgbu02s_PcsDEX,
            $a7f1fgbu02s_PriceDEX,
            $a7f2fgbu10s_PcsDEX,
            $a7f2fgbu10s_PriceDEX,
            $a7f2thbu05s_PcsDEX,
            $a7f2thbu05s_PriceDEX,
            $a7f2debu10s_PcsDEX,
            $a7f2debu10s_PriceDEX,
            $a7f2exbu11s_PcsDEX,
            $a7f2exbu11s_PriceDEX,
            $a7f2twbu04s_PcsDEX,
            $a7f2twbu04s_PriceDEX,
            $a7f2twbu07s_PcsDEX,
            $a7f2twbu07s_PriceDEX,
            $a7f2cebu10s_PcsDEX,
            $a7f2cebu10s_PriceDEX,
            $a8f1fgbu02s_PcsDEX,
            $a8f1fgbu02s_PriceDEX,
            $a8f2fgbu10s_PcsDEX,
            $a8f2fgbu10s_PriceDEX,
            $a8f2thbu05s_PcsDEX,
            $a8f2thbu05s_PriceDEX,
            $a8f2debu10s_PcsDEX,
            $a8f2debu10s_PriceDEX,
            $a8f2exbu11s_PcsDEX,
            $a8f2exbu11s_PriceDEX,
            $a8f2twbu04s_PcsDEX,
            $a8f2twbu04s_PriceDEX,
            $a8f2twbu07s_PcsDEX,
            $a8f2twbu07s_PriceDEX,
            $a8f2cebu10s_PcsDEX,
            $a8f2cebu10s_PriceDEX,
            $DC1_PcsDEX,
            $DC1_PriceDEX,
            $DCP_PcsDEX,
            $DCP_PriceDEX,
            $DCY_PcsDEX,
            $DCY_PriceDEX,
            $DEX_PcsDEX,
            $DEX_PriceDEX,

            ///////////////////////////
            ///////////////////////////

        ];

        return response()->json($Data);
    }
}
