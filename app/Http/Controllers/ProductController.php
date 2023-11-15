<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function DataProduct()
    {
        $ItemNoNT = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'NT%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoMT = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'MT%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoTW = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'TW%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoLN = DB::table('item_all')
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
            ->Where('dataother.Item No', 'LIKE', 'LN%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoAS = DB::table('item_all')
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
            ->where(function ($query) {
                $query->where('dataother.Item No', 'LIKE', 'AS%')
                    ->orWhere('dataother.Item No', 'LIKE', 'RMT%')
                    ->orWhere('dataother.Item No', 'LIKE', 'RM%');
            })
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoSTW = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'STW%')
            ->get();

            //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoSLN = DB::table('item_all')
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
        ->where('dataother.Item No', 'LIKE', 'SLN%')
        ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoSFN = DB::table('item_all')
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
            ->Where('dataother.Item No', 'LIKE', 'SFN%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoSMT = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'SMT%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoSNT = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'SNT%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoNTDCY = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'NT%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoTWDCY = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'TW%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $ItemNoSNTDCY = DB::table('item_all')
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
            ->where('dataother.Item No', 'LIKE', 'SNT%')
            ->get();

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT = 0;
        $Price_AfterNT = 0;
        $Po_PcsNT = 0;
        $Po_PriceNT = 0;
        $Neg_PcsNT = 0;
        $Neg_PriceNT = 0;
        $Purchase_PcsNT = 0;
        $Purchase_PriceNT = 0;
        $BackChange_PcsNT = 0;
        $BackChange_PriceNT = 0;
        $ReciveTranfer_PcsNT = 0;
        $ReciveTranfer_PriceNT = 0;
        $ReturnItem_PCSNT = 0;
        $ReturnItem_PriceNT = 0;
        $AllIn_PcsNT = 0;
        $AllIn_PriceNT = 0;
        $SendSale_PcsNT = 0;
        $SendSale_PriceNT = 0;
        $ReciveTranOut_PcsNT = 0;
        $ReciveTranOut_PriceNT = 0;
        $ReturnStore_PcsNT = 0;
        $ReturnStore_PriceNT = 0;
        $AllOut_PcsNT = 0;
        $AllOut_PriceNT = 0;
        $Calculate_PcsNT = 0;
        $Calculate_PriceNT = 0;
        $NewCalculate_PcsNT = 0;
        $NewCalculate_PriceNT = 0;
        $Diff_PcsNT = 0;
        $Diff_PriceNT = 0;
        $NewTotal_PcsNT = 0;
        $NewTotal_PriceNT = 0;
        $NewTotalDiff_NavNT = 0;
        $NewTotalDiff_CalNT = 0;
        $a7f1fgbu02s_PcsNT = 0;
        $a7f1fgbu02s_PriceNT = 0;
        $a7f2fgbu10s_PcsNT = 0;
        $a7f2fgbu10s_PriceNT = 0;
        $a7f2thbu05s_PcsNT = 0;
        $a7f2thbu05s_PriceNT = 0;
        $a7f2debu10s_PcsNT = 0;
        $a7f2debu10s_PriceNT = 0;
        $a7f2exbu11s_PcsNT = 0;
        $a7f2exbu11s_PriceNT = 0;
        $a7f2twbu04s_PcsNT = 0;
        $a7f2twbu04s_PriceNT = 0;
        $a7f2twbu07s_PcsNT = 0;
        $a7f2twbu07s_PriceNT = 0;
        $a7f2cebu10s_PcsNT = 0;
        $a7f2cebu10s_PriceNT = 0;
        $a8f1fgbu02s_PcsNT = 0;
        $a8f1fgbu02s_PriceNT = 0;
        $a8f2fgbu10s_PcsNT = 0;
        $a8f2fgbu10s_PriceNT = 0;
        $a8f2thbu05s_PcsNT = 0;
        $a8f2thbu05s_PriceNT = 0;
        $a8f2debu10s_PcsNT = 0;
        $a8f2debu10s_PriceNT = 0;
        $a8f2exbu11s_PcsNT = 0;
        $a8f2exbu11s_PriceNT = 0;
        $a8f2twbu04s_PcsNT = 0;
        $a8f2twbu04s_PriceNT = 0;
        $a8f2twbu07s_PcsNT = 0;
        $a8f2twbu07s_PriceNT = 0;
        $a8f2cebu10s_PcsNT = 0;
        $a8f2cebu10s_PriceNT = 0;
        $DC1_PcsNT = 0;
        $DC1_PriceNT = 0;
        $DCP_PcsNT = 0;
        $DCP_PriceNT = 0;
        $DCY_PcsNT = 0;
        $DCY_PriceNT = 0;
        $DEX_PcsNT = 0;
        $DEX_PriceNT = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT = 0;
        $Price_AfterMT = 0;
        $Po_PcsMT = 0;
        $Po_PriceMT = 0;
        $Neg_PcsMT = 0;
        $Neg_PriceMT = 0;
        $Purchase_PcsMT = 0;
        $Purchase_PriceMT = 0;
        $BackChange_PcsMT = 0;
        $BackChange_PriceMT = 0;
        $ReciveTranfer_PcsMT = 0;
        $ReciveTranfer_PriceMT = 0;
        $ReturnItem_PCSMT = 0;
        $ReturnItem_PriceMT = 0;
        $AllIn_PcsMT = 0;
        $AllIn_PriceMT = 0;
        $SendSale_PcsMT = 0;
        $SendSale_PriceMT = 0;
        $ReciveTranOut_PcsMT = 0;
        $ReciveTranOut_PriceMT = 0;
        $ReturnStore_PcsMT = 0;
        $ReturnStore_PriceMT = 0;
        $AllOut_PcsMT = 0;
        $AllOut_PriceMT = 0;
        $Calculate_PcsMT = 0;
        $Calculate_PriceMT = 0;
        $NewCalculate_PcsMT = 0;
        $NewCalculate_PriceMT = 0;
        $Diff_PcsMT = 0;
        $Diff_PriceMT = 0;
        $NewTotal_PcsMT = 0;
        $NewTotal_PriceMT = 0;
        $NewTotalDiff_NavMT = 0;
        $NewTotalDiff_CalMT = 0;
        $a7f1fgbu02s_PcsMT = 0;
        $a7f1fgbu02s_PriceMT = 0;
        $a7f2fgbu10s_PcsMT = 0;
        $a7f2fgbu10s_PriceMT = 0;
        $a7f2thbu05s_PcsMT = 0;
        $a7f2thbu05s_PriceMT = 0;
        $a7f2debu10s_PcsMT = 0;
        $a7f2debu10s_PriceMT = 0;
        $a7f2exbu11s_PcsMT = 0;
        $a7f2exbu11s_PriceMT = 0;
        $a7f2twbu04s_PcsMT = 0;
        $a7f2twbu04s_PriceMT = 0;
        $a7f2twbu07s_PcsMT = 0;
        $a7f2twbu07s_PriceMT = 0;
        $a7f2cebu10s_PcsMT = 0;
        $a7f2cebu10s_PriceMT = 0;
        $a8f1fgbu02s_PcsMT = 0;
        $a8f1fgbu02s_PriceMT = 0;
        $a8f2fgbu10s_PcsMT = 0;
        $a8f2fgbu10s_PriceMT = 0;
        $a8f2thbu05s_PcsMT = 0;
        $a8f2thbu05s_PriceMT = 0;
        $a8f2debu10s_PcsMT = 0;
        $a8f2debu10s_PriceMT = 0;
        $a8f2exbu11s_PcsMT = 0;
        $a8f2exbu11s_PriceMT = 0;
        $a8f2twbu04s_PcsMT = 0;
        $a8f2twbu04s_PriceMT = 0;
        $a8f2twbu07s_PcsMT = 0;
        $a8f2twbu07s_PriceMT = 0;
        $a8f2cebu10s_PcsMT = 0;
        $a8f2cebu10s_PriceMT = 0;
        $DC1_PcsMT = 0;
        $DC1_PriceMT = 0;
        $DCP_PcsMT = 0;
        $DCP_PriceMT = 0;
        $DCY_PcsMT = 0;
        $DCY_PriceMT = 0;
        $DEX_PcsMT = 0;
        $DEX_PriceMT = 0;


        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW = 0;
        $Price_AfterTW = 0;
        $Po_PcsTW = 0;
        $Po_PriceTW = 0;
        $Neg_PcsTW = 0;
        $Neg_PriceTW = 0;
        $Purchase_PcsTW = 0;
        $Purchase_PriceTW = 0;
        $BackChange_PcsTW = 0;
        $BackChange_PriceTW = 0;
        $ReciveTranfer_PcsTW = 0;
        $ReciveTranfer_PriceTW = 0;
        $ReturnItem_PCSTW = 0;
        $ReturnItem_PriceTW = 0;
        $AllIn_PcsTW = 0;
        $AllIn_PriceTW = 0;
        $SendSale_PcsTW = 0;
        $SendSale_PriceTW = 0;
        $ReciveTranOut_PcsTW = 0;
        $ReciveTranOut_PriceTW = 0;
        $ReturnStore_PcsTW = 0;
        $ReturnStore_PriceTW = 0;
        $AllOut_PcsTW = 0;
        $AllOut_PriceTW = 0;
        $Calculate_PcsTW = 0;
        $Calculate_PriceTW = 0;
        $NewCalculate_PcsTW = 0;
        $NewCalculate_PriceTW = 0;
        $Diff_PcsTW = 0;
        $Diff_PriceTW = 0;
        $NewTotal_PcsTW = 0;
        $NewTotal_PriceTW = 0;
        $NewTotalDiff_NavTW = 0;
        $NewTotalDiff_CalTW = 0;
        $a7f1fgbu02s_PcsTW = 0;
        $a7f1fgbu02s_PriceTW = 0;
        $a7f2fgbu10s_PcsTW = 0;
        $a7f2fgbu10s_PriceTW = 0;
        $a7f2thbu05s_PcsTW = 0;
        $a7f2thbu05s_PriceTW = 0;
        $a7f2debu10s_PcsTW = 0;
        $a7f2debu10s_PriceTW = 0;
        $a7f2exbu11s_PcsTW = 0;
        $a7f2exbu11s_PriceTW = 0;
        $a7f2twbu04s_PcsTW = 0;
        $a7f2twbu04s_PriceTW = 0;
        $a7f2twbu07s_PcsTW = 0;
        $a7f2twbu07s_PriceTW = 0;
        $a7f2cebu10s_PcsTW = 0;
        $a7f2cebu10s_PriceTW = 0;
        $a8f1fgbu02s_PcsTW = 0;
        $a8f1fgbu02s_PriceTW = 0;
        $a8f2fgbu10s_PcsTW = 0;
        $a8f2fgbu10s_PriceTW = 0;
        $a8f2thbu05s_PcsTW = 0;
        $a8f2thbu05s_PriceTW = 0;
        $a8f2debu10s_PcsTW = 0;
        $a8f2debu10s_PriceTW = 0;
        $a8f2exbu11s_PcsTW = 0;
        $a8f2exbu11s_PriceTW = 0;
        $a8f2twbu04s_PcsTW = 0;
        $a8f2twbu04s_PriceTW = 0;
        $a8f2twbu07s_PcsTW = 0;
        $a8f2twbu07s_PriceTW = 0;
        $a8f2cebu10s_PcsTW = 0;
        $a8f2cebu10s_PriceTW = 0;
        $DC1_PcsTW = 0;
        $DC1_PriceTW = 0;
        $DCP_PcsTW = 0;
        $DCP_PriceTW = 0;
        $DCY_PcsTW = 0;
        $DCY_PriceTW = 0;
        $DEX_PcsTW = 0;
        $DEX_PriceTW = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterLN = 0;
        $Price_AfterLN = 0;
        $Po_PcsLN = 0;
        $Po_PriceLN = 0;
        $Neg_PcsLN = 0;
        $Neg_PriceLN = 0;
        $Purchase_PcsLN = 0;
        $Purchase_PriceLN = 0;
        $BackChange_PcsLN = 0;
        $BackChange_PriceLN = 0;
        $ReciveTranfer_PcsLN = 0;
        $ReciveTranfer_PriceLN = 0;
        $ReturnItem_PCSLN = 0;
        $ReturnItem_PriceLN = 0;
        $AllIn_PcsLN = 0;
        $AllIn_PriceLN = 0;
        $SendSale_PcsLN = 0;
        $SendSale_PriceLN = 0;
        $ReciveTranOut_PcsLN = 0;
        $ReciveTranOut_PriceLN = 0;
        $ReturnStore_PcsLN = 0;
        $ReturnStore_PriceLN = 0;
        $AllOut_PcsLN = 0;
        $AllOut_PriceLN = 0;
        $Calculate_PcsLN = 0;
        $Calculate_PriceLN = 0;
        $NewCalculate_PcsLN = 0;
        $NewCalculate_PriceLN = 0;
        $Diff_PcsLN = 0;
        $Diff_PriceLN = 0;
        $NewTotal_PcsLN = 0;
        $NewTotal_PriceLN = 0;
        $NewTotalDiff_NavLN = 0;
        $NewTotalDiff_CalLN = 0;
        $a7f1fgbu02s_PcsLN = 0;
        $a7f1fgbu02s_PriceLN = 0;
        $a7f2fgbu10s_PcsLN = 0;
        $a7f2fgbu10s_PriceLN = 0;
        $a7f2thbu05s_PcsLN = 0;
        $a7f2thbu05s_PriceLN = 0;
        $a7f2debu10s_PcsLN = 0;
        $a7f2debu10s_PriceLN = 0;
        $a7f2exbu11s_PcsLN = 0;
        $a7f2exbu11s_PriceLN = 0;
        $a7f2twbu04s_PcsLN = 0;
        $a7f2twbu04s_PriceLN = 0;
        $a7f2twbu07s_PcsLN = 0;
        $a7f2twbu07s_PriceLN = 0;
        $a7f2cebu10s_PcsLN = 0;
        $a7f2cebu10s_PriceLN = 0;
        $a8f1fgbu02s_PcsLN = 0;
        $a8f1fgbu02s_PriceLN = 0;
        $a8f2fgbu10s_PcsLN = 0;
        $a8f2fgbu10s_PriceLN = 0;
        $a8f2thbu05s_PcsLN = 0;
        $a8f2thbu05s_PriceLN = 0;
        $a8f2debu10s_PcsLN = 0;
        $a8f2debu10s_PriceLN = 0;
        $a8f2exbu11s_PcsLN = 0;
        $a8f2exbu11s_PriceLN = 0;
        $a8f2twbu04s_PcsLN = 0;
        $a8f2twbu04s_PriceLN = 0;
        $a8f2twbu07s_PcsLN = 0;
        $a8f2twbu07s_PriceLN = 0;
        $a8f2cebu10s_PcsLN = 0;
        $a8f2cebu10s_PriceLN = 0;
        $DC1_PcsLN = 0;
        $DC1_PriceLN = 0;
        $DCP_PcsLN = 0;
        $DCP_PriceLN = 0;
        $DCY_PcsLN = 0;
        $DCY_PriceLN = 0;
        $DEX_PcsLN = 0;
        $DEX_PriceLN = 0;


        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS = 0;
        $Price_AfterAS = 0;
        $Po_PcsAS = 0;
        $Po_PriceAS = 0;
        $Neg_PcsAS = 0;
        $Neg_PriceAS = 0;
        $Purchase_PcsAS = 0;
        $Purchase_PriceAS = 0;
        $BackChange_PcsAS = 0;
        $BackChange_PriceAS = 0;
        $ReciveTranfer_PcsAS = 0;
        $ReciveTranfer_PriceAS = 0;
        $ReturnItem_PCSAS = 0;
        $ReturnItem_PriceAS = 0;
        $AllIn_PcsAS = 0;
        $AllIn_PriceAS = 0;
        $SendSale_PcsAS = 0;
        $SendSale_PriceAS = 0;
        $ReciveTranOut_PcsAS = 0;
        $ReciveTranOut_PriceAS = 0;
        $ReturnStore_PcsAS = 0;
        $ReturnStore_PriceAS = 0;
        $AllOut_PcsAS = 0;
        $AllOut_PriceAS = 0;
        $Calculate_PcsAS = 0;
        $Calculate_PriceAS = 0;
        $NewCalculate_PcsAS = 0;
        $NewCalculate_PriceAS = 0;
        $Diff_PcsAS = 0;
        $Diff_PriceAS = 0;
        $NewTotal_PcsAS = 0;
        $NewTotal_PriceAS = 0;
        $NewTotalDiff_NavAS = 0;
        $NewTotalDiff_CalAS = 0;
        $a7f1fgbu02s_PcsAS = 0;
        $a7f1fgbu02s_PriceAS = 0;
        $a7f2fgbu10s_PcsAS = 0;
        $a7f2fgbu10s_PriceAS = 0;
        $a7f2thbu05s_PcsAS = 0;
        $a7f2thbu05s_PriceAS = 0;
        $a7f2debu10s_PcsAS = 0;
        $a7f2debu10s_PriceAS = 0;
        $a7f2exbu11s_PcsAS = 0;
        $a7f2exbu11s_PriceAS = 0;
        $a7f2twbu04s_PcsAS = 0;
        $a7f2twbu04s_PriceAS = 0;
        $a7f2twbu07s_PcsAS = 0;
        $a7f2twbu07s_PriceAS = 0;
        $a7f2cebu10s_PcsAS = 0;
        $a7f2cebu10s_PriceAS = 0;
        $a8f1fgbu02s_PcsAS = 0;
        $a8f1fgbu02s_PriceAS = 0;
        $a8f2fgbu10s_PcsAS = 0;
        $a8f2fgbu10s_PriceAS = 0;
        $a8f2thbu05s_PcsAS = 0;
        $a8f2thbu05s_PriceAS = 0;
        $a8f2debu10s_PcsAS = 0;
        $a8f2debu10s_PriceAS = 0;
        $a8f2exbu11s_PcsAS = 0;
        $a8f2exbu11s_PriceAS = 0;
        $a8f2twbu04s_PcsAS = 0;
        $a8f2twbu04s_PriceAS = 0;
        $a8f2twbu07s_PcsAS = 0;
        $a8f2twbu07s_PriceAS = 0;
        $a8f2cebu10s_PcsAS = 0;
        $a8f2cebu10s_PriceAS = 0;
        $DC1_PcsAS = 0;
        $DC1_PriceAS = 0;
        $DCP_PcsAS = 0;
        $DCP_PriceAS = 0;
        $DCY_PcsAS = 0;
        $DCY_PriceAS = 0;
        $DEX_PcsAS = 0;
        $DEX_PriceAS = 0;


        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSTW = 0;
        $Price_AfterSTW = 0;
        $Po_PcsSTW = 0;
        $Po_PriceSTW = 0;
        $Neg_PcsSTW = 0;
        $Neg_PriceSTW = 0;
        $Purchase_PcsSTW = 0;
        $Purchase_PriceSTW = 0;
        $BackChange_PcsSTW = 0;
        $BackChange_PriceSTW = 0;
        $ReciveTranfer_PcsSTW = 0;
        $ReciveTranfer_PriceSTW = 0;
        $ReturnItem_PCSSTW = 0;
        $ReturnItem_PriceSTW = 0;
        $AllIn_PcsSTW = 0;
        $AllIn_PriceSTW = 0;
        $SendSale_PcsSTW = 0;
        $SendSale_PriceSTW = 0;
        $ReciveTranOut_PcsSTW = 0;
        $ReciveTranOut_PriceSTW = 0;
        $ReturnStore_PcsSTW = 0;
        $ReturnStore_PriceSTW = 0;
        $AllOut_PcsSTW = 0;
        $AllOut_PriceSTW = 0;
        $Calculate_PcsSTW = 0;
        $Calculate_PriceSTW = 0;
        $NewCalculate_PcsSTW = 0;
        $NewCalculate_PriceSTW = 0;
        $Diff_PcsSTW = 0;
        $Diff_PriceSTW = 0;
        $NewTotal_PcsSTW = 0;
        $NewTotal_PriceSTW = 0;
        $NewTotalDiff_NavSTW = 0;
        $NewTotalDiff_CalSTW = 0;
        $a7f1fgbu02s_PcsSTW = 0;
        $a7f1fgbu02s_PriceSTW = 0;
        $a7f2fgbu10s_PcsSTW = 0;
        $a7f2fgbu10s_PriceSTW = 0;
        $a7f2thbu05s_PcsSTW = 0;
        $a7f2thbu05s_PriceSTW = 0;
        $a7f2debu10s_PcsSTW = 0;
        $a7f2debu10s_PriceSTW = 0;
        $a7f2exbu11s_PcsSTW = 0;
        $a7f2exbu11s_PriceSTW = 0;
        $a7f2twbu04s_PcsSTW = 0;
        $a7f2twbu04s_PriceSTW = 0;
        $a7f2twbu07s_PcsSTW = 0;
        $a7f2twbu07s_PriceSTW = 0;
        $a7f2cebu10s_PcsSTW = 0;
        $a7f2cebu10s_PriceSTW = 0;
        $a8f1fgbu02s_PcsSTW = 0;
        $a8f1fgbu02s_PriceSTW = 0;
        $a8f2fgbu10s_PcsSTW = 0;
        $a8f2fgbu10s_PriceSTW = 0;
        $a8f2thbu05s_PcsSTW = 0;
        $a8f2thbu05s_PriceSTW = 0;
        $a8f2debu10s_PcsSTW = 0;
        $a8f2debu10s_PriceSTW = 0;
        $a8f2exbu11s_PcsSTW = 0;
        $a8f2exbu11s_PriceSTW = 0;
        $a8f2twbu04s_PcsSTW = 0;
        $a8f2twbu04s_PriceSTW = 0;
        $a8f2twbu07s_PcsSTW = 0;
        $a8f2twbu07s_PriceSTW = 0;
        $a8f2cebu10s_PcsSTW = 0;
        $a8f2cebu10s_PriceSTW = 0;
        $DC1_PcsSTW = 0;
        $DC1_PriceSTW = 0;
        $DCP_PcsSTW = 0;
        $DCP_PriceSTW = 0;
        $DCY_PcsSTW = 0;
        $DCY_PriceSTW = 0;
        $DEX_PcsSTW = 0;
        $DEX_PriceSTW = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSLN = 0;
        $Price_AfterSLN = 0;
        $Po_PcsSLN = 0;
        $Po_PriceSLN = 0;
        $Neg_PcsSLN = 0;
        $Neg_PriceSLN = 0;
        $Purchase_PcsSLN = 0;
        $Purchase_PriceSLN = 0;
        $BackChange_PcsSLN = 0;
        $BackChange_PriceSLN = 0;
        $ReciveTranfer_PcsSLN = 0;
        $ReciveTranfer_PriceSLN = 0;
        $ReturnItem_PCSSLN = 0;
        $ReturnItem_PriceSLN = 0;
        $AllIn_PcsSLN = 0;
        $AllIn_PriceSLN = 0;
        $SendSale_PcsSLN = 0;
        $SendSale_PriceSLN = 0;
        $ReciveTranOut_PcsSLN = 0;
        $ReciveTranOut_PriceSLN = 0;
        $ReturnStore_PcsSLN = 0;
        $ReturnStore_PriceSLN = 0;
        $AllOut_PcsSLN = 0;
        $AllOut_PriceSLN = 0;
        $Calculate_PcsSLN = 0;
        $Calculate_PriceSLN = 0;
        $NewCalculate_PcsSLN = 0;
        $NewCalculate_PriceSLN = 0;
        $Diff_PcsSLN = 0;
        $Diff_PriceSLN = 0;
        $NewTotal_PcsSLN = 0;
        $NewTotal_PriceSLN = 0;
        $NewTotalDiff_NavSLN = 0;
        $NewTotalDiff_CalSLN = 0;
        $a7f1fgbu02s_PcsSLN = 0;
        $a7f1fgbu02s_PriceSLN = 0;
        $a7f2fgbu10s_PcsSLN = 0;
        $a7f2fgbu10s_PriceSLN = 0;
        $a7f2thbu05s_PcsSLN = 0;
        $a7f2thbu05s_PriceSLN = 0;
        $a7f2debu10s_PcsSLN = 0;
        $a7f2debu10s_PriceSLN = 0;
        $a7f2exbu11s_PcsSLN = 0;
        $a7f2exbu11s_PriceSLN = 0;
        $a7f2twbu04s_PcsSLN = 0;
        $a7f2twbu04s_PriceSLN = 0;
        $a7f2twbu07s_PcsSLN = 0;
        $a7f2twbu07s_PriceSLN = 0;
        $a7f2cebu10s_PcsSLN = 0;
        $a7f2cebu10s_PriceSLN = 0;
        $a8f1fgbu02s_PcsSLN = 0;
        $a8f1fgbu02s_PriceSLN = 0;
        $a8f2fgbu10s_PcsSLN = 0;
        $a8f2fgbu10s_PriceSLN = 0;
        $a8f2thbu05s_PcsSLN = 0;
        $a8f2thbu05s_PriceSLN = 0;
        $a8f2debu10s_PcsSLN = 0;
        $a8f2debu10s_PriceSLN = 0;
        $a8f2exbu11s_PcsSLN = 0;
        $a8f2exbu11s_PriceSLN = 0;
        $a8f2twbu04s_PcsSLN = 0;
        $a8f2twbu04s_PriceSLN = 0;
        $a8f2twbu07s_PcsSLN = 0;
        $a8f2twbu07s_PriceSLN = 0;
        $a8f2cebu10s_PcsSLN = 0;
        $a8f2cebu10s_PriceSLN = 0;
        $DC1_PcsSLN = 0;
        $DC1_PriceSLN = 0;
        $DCP_PcsSLN = 0;
        $DCP_PriceSLN = 0;
        $DCY_PcsSLN = 0;
        $DCY_PriceSLN = 0;
        $DEX_PcsSLN = 0;
        $DEX_PriceSLN = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSFN = 0;
        $Price_AfterSFN = 0;
        $Po_PcsSFN = 0;
        $Po_PriceSFN = 0;
        $Neg_PcsSFN = 0;
        $Neg_PriceSFN = 0;
        $Purchase_PcsSFN = 0;
        $Purchase_PriceSFN = 0;
        $BackChange_PcsSFN = 0;
        $BackChange_PriceSFN = 0;
        $ReciveTranfer_PcsSFN = 0;
        $ReciveTranfer_PriceSFN = 0;
        $ReturnItem_PCSSFN = 0;
        $ReturnItem_PriceSFN = 0;
        $AllIn_PcsSFN = 0;
        $AllIn_PriceSFN = 0;
        $SendSale_PcsSFN = 0;
        $SendSale_PriceSFN = 0;
        $ReciveTranOut_PcsSFN = 0;
        $ReciveTranOut_PriceSFN = 0;
        $ReturnStore_PcsSFN = 0;
        $ReturnStore_PriceSFN = 0;
        $AllOut_PcsSFN = 0;
        $AllOut_PriceSFN = 0;
        $Calculate_PcsSFN = 0;
        $Calculate_PriceSFN = 0;
        $NewCalculate_PcsSFN = 0;
        $NewCalculate_PriceSFN = 0;
        $Diff_PcsSFN = 0;
        $Diff_PriceSFN = 0;
        $NewTotal_PcsSFN = 0;
        $NewTotal_PriceSFN = 0;
        $NewTotalDiff_NavSFN = 0;
        $NewTotalDiff_CalSFN = 0;
        $a7f1fgbu02s_PcsSFN = 0;
        $a7f1fgbu02s_PriceSFN = 0;
        $a7f2fgbu10s_PcsSFN = 0;
        $a7f2fgbu10s_PriceSFN = 0;
        $a7f2thbu05s_PcsSFN = 0;
        $a7f2thbu05s_PriceSFN = 0;
        $a7f2debu10s_PcsSFN = 0;
        $a7f2debu10s_PriceSFN = 0;
        $a7f2exbu11s_PcsSFN = 0;
        $a7f2exbu11s_PriceSFN = 0;
        $a7f2twbu04s_PcsSFN = 0;
        $a7f2twbu04s_PriceSFN = 0;
        $a7f2twbu07s_PcsSFN = 0;
        $a7f2twbu07s_PriceSFN = 0;
        $a7f2cebu10s_PcsSFN = 0;
        $a7f2cebu10s_PriceSFN = 0;
        $a8f1fgbu02s_PcsSFN = 0;
        $a8f1fgbu02s_PriceSFN = 0;
        $a8f2fgbu10s_PcsSFN = 0;
        $a8f2fgbu10s_PriceSFN = 0;
        $a8f2thbu05s_PcsSFN = 0;
        $a8f2thbu05s_PriceSFN = 0;
        $a8f2debu10s_PcsSFN = 0;
        $a8f2debu10s_PriceSFN = 0;
        $a8f2exbu11s_PcsSFN = 0;
        $a8f2exbu11s_PriceSFN = 0;
        $a8f2twbu04s_PcsSFN = 0;
        $a8f2twbu04s_PriceSFN = 0;
        $a8f2twbu07s_PcsSFN = 0;
        $a8f2twbu07s_PriceSFN = 0;
        $a8f2cebu10s_PcsSFN = 0;
        $a8f2cebu10s_PriceSFN = 0;
        $DC1_PcsSFN = 0;
        $DC1_PriceSFN = 0;
        $DCP_PcsSFN = 0;
        $DCP_PriceSFN = 0;
        $DCY_PcsSFN = 0;
        $DCY_PriceSFN = 0;
        $DEX_PcsSFN = 0;
        $DEX_PriceSFN = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSMT = 0;
        $Price_AfterSMT = 0;
        $Po_PcsSMT = 0;
        $Po_PriceSMT = 0;
        $Neg_PcsSMT = 0;
        $Neg_PriceSMT = 0;
        $Purchase_PcsSMT = 0;
        $Purchase_PriceSMT = 0;
        $BackChange_PcsSMT = 0;
        $BackChange_PriceSMT = 0;
        $ReciveTranfer_PcsSMT = 0;
        $ReciveTranfer_PriceSMT = 0;
        $ReturnItem_PCSSMT = 0;
        $ReturnItem_PriceSMT = 0;
        $AllIn_PcsSMT = 0;
        $AllIn_PriceSMT = 0;
        $SendSale_PcsSMT = 0;
        $SendSale_PriceSMT = 0;
        $ReciveTranOut_PcsSMT = 0;
        $ReciveTranOut_PriceSMT = 0;
        $ReturnStore_PcsSMT = 0;
        $ReturnStore_PriceSMT = 0;
        $AllOut_PcsSMT = 0;
        $AllOut_PriceSMT = 0;
        $Calculate_PcsSMT = 0;
        $Calculate_PriceSMT = 0;
        $NewCalculate_PcsSMT = 0;
        $NewCalculate_PriceSMT = 0;
        $Diff_PcsSMT = 0;
        $Diff_PriceSMT = 0;
        $NewTotal_PcsSMT = 0;
        $NewTotal_PriceSMT = 0;
        $NewTotalDiff_NavSMT = 0;
        $NewTotalDiff_CalSMT = 0;
        $a7f1fgbu02s_PcsSMT = 0;
        $a7f1fgbu02s_PriceSMT = 0;
        $a7f2fgbu10s_PcsSMT = 0;
        $a7f2fgbu10s_PriceSMT = 0;
        $a7f2thbu05s_PcsSMT = 0;
        $a7f2thbu05s_PriceSMT = 0;
        $a7f2debu10s_PcsSMT = 0;
        $a7f2debu10s_PriceSMT = 0;
        $a7f2exbu11s_PcsSMT = 0;
        $a7f2exbu11s_PriceSMT = 0;
        $a7f2twbu04s_PcsSMT = 0;
        $a7f2twbu04s_PriceSMT = 0;
        $a7f2twbu07s_PcsSMT = 0;
        $a7f2twbu07s_PriceSMT = 0;
        $a7f2cebu10s_PcsSMT = 0;
        $a7f2cebu10s_PriceSMT = 0;
        $a8f1fgbu02s_PcsSMT = 0;
        $a8f1fgbu02s_PriceSMT = 0;
        $a8f2fgbu10s_PcsSMT = 0;
        $a8f2fgbu10s_PriceSMT = 0;
        $a8f2thbu05s_PcsSMT = 0;
        $a8f2thbu05s_PriceSMT = 0;
        $a8f2debu10s_PcsSMT = 0;
        $a8f2debu10s_PriceSMT = 0;
        $a8f2exbu11s_PcsSMT = 0;
        $a8f2exbu11s_PriceSMT = 0;
        $a8f2twbu04s_PcsSMT = 0;
        $a8f2twbu04s_PriceSMT = 0;
        $a8f2twbu07s_PcsSMT = 0;
        $a8f2twbu07s_PriceSMT = 0;
        $a8f2cebu10s_PcsSMT = 0;
        $a8f2cebu10s_PriceSMT = 0;
        $DC1_PcsSMT = 0;
        $DC1_PriceSMT = 0;
        $DCP_PcsSMT = 0;
        $DCP_PriceSMT = 0;
        $DCY_PcsSMT = 0;
        $DCY_PriceSMT = 0;
        $DEX_PcsSMT = 0;
        $DEX_PriceSMT = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNT = 0;
        $Price_AfterSNT = 0;
        $Po_PcsSNT = 0;
        $Po_PriceSNT = 0;
        $Neg_PcsSNT = 0;
        $Neg_PriceSNT = 0;
        $Purchase_PcsSNT = 0;
        $Purchase_PriceSNT = 0;
        $BackChange_PcsSNT = 0;
        $BackChange_PriceSNT = 0;
        $ReciveTranfer_PcsSNT = 0;
        $ReciveTranfer_PriceSNT = 0;
        $ReturnItem_PCSSNT = 0;
        $ReturnItem_PriceSNT = 0;
        $AllIn_PcsSNT = 0;
        $AllIn_PriceSNT = 0;
        $SendSale_PcsSNT = 0;
        $SendSale_PriceSNT = 0;
        $ReciveTranOut_PcsSNT = 0;
        $ReciveTranOut_PriceSNT = 0;
        $ReturnStore_PcsSNT = 0;
        $ReturnStore_PriceSNT = 0;
        $AllOut_PcsSNT = 0;
        $AllOut_PriceSNT = 0;
        $Calculate_PcsSNT = 0;
        $Calculate_PriceSNT = 0;
        $NewCalculate_PcsSNT = 0;
        $NewCalculate_PriceSNT = 0;
        $Diff_PcsSNT = 0;
        $Diff_PriceSNT = 0;
        $NewTotal_PcsSNT = 0;
        $NewTotal_PriceSNT = 0;
        $NewTotalDiff_NavSNT = 0;
        $NewTotalDiff_CalSNT = 0;
        $a7f1fgbu02s_PcsSNT = 0;
        $a7f1fgbu02s_PriceSNT = 0;
        $a7f2fgbu10s_PcsSNT = 0;
        $a7f2fgbu10s_PriceSNT = 0;
        $a7f2thbu05s_PcsSNT = 0;
        $a7f2thbu05s_PriceSNT = 0;
        $a7f2debu10s_PcsSNT = 0;
        $a7f2debu10s_PriceSNT = 0;
        $a7f2exbu11s_PcsSNT = 0;
        $a7f2exbu11s_PriceSNT = 0;
        $a7f2twbu04s_PcsSNT = 0;
        $a7f2twbu04s_PriceSNT = 0;
        $a7f2twbu07s_PcsSNT = 0;
        $a7f2twbu07s_PriceSNT = 0;
        $a7f2cebu10s_PcsSNT = 0;
        $a7f2cebu10s_PriceSNT = 0;
        $a8f1fgbu02s_PcsSNT = 0;
        $a8f1fgbu02s_PriceSNT = 0;
        $a8f2fgbu10s_PcsSNT = 0;
        $a8f2fgbu10s_PriceSNT = 0;
        $a8f2thbu05s_PcsSNT = 0;
        $a8f2thbu05s_PriceSNT = 0;
        $a8f2debu10s_PcsSNT = 0;
        $a8f2debu10s_PriceSNT = 0;
        $a8f2exbu11s_PcsSNT = 0;
        $a8f2exbu11s_PriceSNT = 0;
        $a8f2twbu04s_PcsSNT = 0;
        $a8f2twbu04s_PriceSNT = 0;
        $a8f2twbu07s_PcsSNT = 0;
        $a8f2twbu07s_PriceSNT = 0;
        $a8f2cebu10s_PcsSNT = 0;
        $a8f2cebu10s_PriceSNT = 0;
        $DC1_PcsSNT = 0;
        $DC1_PriceSNT = 0;
        $DCP_PcsSNT = 0;
        $DCP_PriceSNT = 0;
        $DCY_PcsSNT = 0;
        $DCY_PriceSNT = 0;
        $DEX_PcsSNT = 0;
        $DEX_PriceSNT = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterNTDCY = 0;
        $Price_AfterNTDCY = 0;
        $Po_PcsNTDCY = 0;
        $Po_PriceNTDCY = 0;
        $Neg_PcsNTDCY = 0;
        $Neg_PriceNTDCY = 0;
        $Purchase_PcsNTDCY = 0;
        $Purchase_PriceNTDCY = 0;
        $BackChange_PcsNTDCY = 0;
        $BackChange_PriceNTDCY = 0;
        $ReciveTranfer_PcsNTDCY = 0;
        $ReciveTranfer_PriceNTDCY = 0;
        $ReturnItem_PCSNTDCY = 0;
        $ReturnItem_PriceNTDCY = 0;
        $AllIn_PcsNTDCY = 0;
        $AllIn_PriceNTDCY = 0;
        $SendSale_PcsNTDCY = 0;
        $SendSale_PriceNTDCY = 0;
        $ReciveTranOut_PcsNTDCY = 0;
        $ReciveTranOut_PriceNTDCY = 0;
        $ReturnStore_PcsNTDCY = 0;
        $ReturnStore_PriceNTDCY = 0;
        $AllOut_PcsNTDCY = 0;
        $AllOut_PriceNTDCY = 0;
        $Calculate_PcsNTDCY = 0;
        $Calculate_PriceNTDCY = 0;
        $NewCalculate_PcsNTDCY = 0;
        $NewCalculate_PriceNTDCY = 0;
        $Diff_PcsNTDCY = 0;
        $Diff_PriceNTDCY = 0;
        $NewTotal_PcsNTDCY = 0;
        $NewTotal_PriceNTDCY = 0;
        $NewTotalDiff_NavNTDCY = 0;
        $NewTotalDiff_CalNTDCY = 0;
        $a7f1fgbu02s_PcsNTDCY = 0;
        $a7f1fgbu02s_PriceNTDCY = 0;
        $a7f2fgbu10s_PcsNTDCY = 0;
        $a7f2fgbu10s_PriceNTDCY = 0;
        $a7f2thbu05s_PcsNTDCY = 0;
        $a7f2thbu05s_PriceNTDCY = 0;
        $a7f2debu10s_PcsNTDCY = 0;
        $a7f2debu10s_PriceNTDCY = 0;
        $a7f2exbu11s_PcsNTDCY = 0;
        $a7f2exbu11s_PriceNTDCY = 0;
        $a7f2twbu04s_PcsNTDCY = 0;
        $a7f2twbu04s_PriceNTDCY = 0;
        $a7f2twbu07s_PcsNTDCY = 0;
        $a7f2twbu07s_PriceNTDCY = 0;
        $a7f2cebu10s_PcsNTDCY = 0;
        $a7f2cebu10s_PriceNTDCY = 0;
        $a8f1fgbu02s_PcsNTDCY = 0;
        $a8f1fgbu02s_PriceNTDCY = 0;
        $a8f2fgbu10s_PcsNTDCY = 0;
        $a8f2fgbu10s_PriceNTDCY = 0;
        $a8f2thbu05s_PcsNTDCY = 0;
        $a8f2thbu05s_PriceNTDCY = 0;
        $a8f2debu10s_PcsNTDCY = 0;
        $a8f2debu10s_PriceNTDCY = 0;
        $a8f2exbu11s_PcsNTDCY = 0;
        $a8f2exbu11s_PriceNTDCY = 0;
        $a8f2twbu04s_PcsNTDCY = 0;
        $a8f2twbu04s_PriceNTDCY = 0;
        $a8f2twbu07s_PcsNTDCY = 0;
        $a8f2twbu07s_PriceNTDCY = 0;
        $a8f2cebu10s_PcsNTDCY = 0;
        $a8f2cebu10s_PriceNTDCY = 0;
        $DC1_PcsNTDCY = 0;
        $DC1_PriceNTDCY = 0;
        $DCP_PcsNTDCY = 0;
        $DCP_PriceNTDCY = 0;
        $DCY_PcsNTDCY = 0;
        $DCY_PriceNTDCY = 0;
        $DEX_PcsNTDCY = 0;
        $DEX_PriceNTDCY = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterTWDCY = 0;
        $Price_AfterTWDCY = 0;
        $Po_PcsTWDCY = 0;
        $Po_PriceTWDCY = 0;
        $Neg_PcsTWDCY = 0;
        $Neg_PriceTWDCY = 0;
        $Purchase_PcsTWDCY = 0;
        $Purchase_PriceTWDCY = 0;
        $BackChange_PcsTWDCY = 0;
        $BackChange_PriceTWDCY = 0;
        $ReciveTranfer_PcsTWDCY = 0;
        $ReciveTranfer_PriceTWDCY = 0;
        $ReturnItem_PCSTWDCY = 0;
        $ReturnItem_PriceTWDCY = 0;
        $AllIn_PcsTWDCY = 0;
        $AllIn_PriceTWDCY = 0;
        $SendSale_PcsTWDCY = 0;
        $SendSale_PriceTWDCY = 0;
        $ReciveTranOut_PcsTWDCY = 0;
        $ReciveTranOut_PriceTWDCY = 0;
        $ReturnStore_PcsTWDCY = 0;
        $ReturnStore_PriceTWDCY = 0;
        $AllOut_PcsTWDCY = 0;
        $AllOut_PriceTWDCY = 0;
        $Calculate_PcsTWDCY = 0;
        $Calculate_PriceTWDCY = 0;
        $NewCalculate_PcsTWDCY = 0;
        $NewCalculate_PriceTWDCY = 0;
        $Diff_PcsTWDCY = 0;
        $Diff_PriceTWDCY = 0;
        $NewTotal_PcsTWDCY = 0;
        $NewTotal_PriceTWDCY = 0;
        $NewTotalDiff_NavTWDCY = 0;
        $NewTotalDiff_CalTWDCY = 0;
        $a7f1fgbu02s_PcsTWDCY = 0;
        $a7f1fgbu02s_PriceTWDCY = 0;
        $a7f2fgbu10s_PcsTWDCY = 0;
        $a7f2fgbu10s_PriceTWDCY = 0;
        $a7f2thbu05s_PcsTWDCY = 0;
        $a7f2thbu05s_PriceTWDCY = 0;
        $a7f2debu10s_PcsTWDCY = 0;
        $a7f2debu10s_PriceTWDCY = 0;
        $a7f2exbu11s_PcsTWDCY = 0;
        $a7f2exbu11s_PriceTWDCY = 0;
        $a7f2twbu04s_PcsTWDCY = 0;
        $a7f2twbu04s_PriceTWDCY = 0;
        $a7f2twbu07s_PcsTWDCY = 0;
        $a7f2twbu07s_PriceTWDCY = 0;
        $a7f2cebu10s_PcsTWDCY = 0;
        $a7f2cebu10s_PriceTWDCY = 0;
        $a8f1fgbu02s_PcsTWDCY = 0;
        $a8f1fgbu02s_PriceTWDCY = 0;
        $a8f2fgbu10s_PcsTWDCY = 0;
        $a8f2fgbu10s_PriceTWDCY = 0;
        $a8f2thbu05s_PcsTWDCY = 0;
        $a8f2thbu05s_PriceTWDCY = 0;
        $a8f2debu10s_PcsTWDCY = 0;
        $a8f2debu10s_PriceTWDCY = 0;
        $a8f2exbu11s_PcsTWDCY = 0;
        $a8f2exbu11s_PriceTWDCY = 0;
        $a8f2twbu04s_PcsTWDCY = 0;
        $a8f2twbu04s_PriceTWDCY = 0;
        $a8f2twbu07s_PcsTWDCY = 0;
        $a8f2twbu07s_PriceTWDCY = 0;
        $a8f2cebu10s_PcsTWDCY = 0;
        $a8f2cebu10s_PriceTWDCY = 0;
        $DC1_PcsTWDCY = 0;
        $DC1_PriceTWDCY = 0;
        $DCP_PcsTWDCY = 0;
        $DCP_PriceTWDCY = 0;
        $DCY_PcsTWDCY = 0;
        $DCY_PriceTWDCY = 0;
        $DEX_PcsTWDCY = 0;
        $DEX_PriceTWDCY = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNTDCY = 0;
        $Price_AfterSNTDCY = 0;
        $Po_PcsSNTDCY = 0;
        $Po_PriceSNTDCY = 0;
        $Neg_PcsSNTDCY = 0;
        $Neg_PriceSNTDCY = 0;
        $Purchase_PcsSNTDCY = 0;
        $Purchase_PriceSNTDCY = 0;
        $BackChange_PcsSNTDCY = 0;
        $BackChange_PriceSNTDCY = 0;
        $ReciveTranfer_PcsSNTDCY = 0;
        $ReciveTranfer_PriceSNTDCY = 0;
        $ReturnItem_PCSSNTDCY = 0;
        $ReturnItem_PriceSNTDCY = 0;
        $AllIn_PcsSNTDCY = 0;
        $AllIn_PriceSNTDCY = 0;
        $SendSale_PcsSNTDCY = 0;
        $SendSale_PriceSNTDCY = 0;
        $ReciveTranOut_PcsSNTDCY = 0;
        $ReciveTranOut_PriceSNTDCY = 0;
        $ReturnStore_PcsSNTDCY = 0;
        $ReturnStore_PriceSNTDCY = 0;
        $AllOut_PcsSNTDCY = 0;
        $AllOut_PriceSNTDCY = 0;
        $Calculate_PcsSNTDCY = 0;
        $Calculate_PriceSNTDCY = 0;
        $NewCalculate_PcsSNTDCY = 0;
        $NewCalculate_PriceSNTDCY = 0;
        $Diff_PcsSNTDCY = 0;
        $Diff_PriceSNTDCY = 0;
        $NewTotal_PcsSNTDCY = 0;
        $NewTotal_PriceSNTDCY = 0;
        $NewTotalDiff_NavSNTDCY = 0;
        $NewTotalDiff_CalSNTDCY = 0;
        $a7f1fgbu02s_PcsSNTDCY = 0;
        $a7f1fgbu02s_PriceSNTDCY = 0;
        $a7f2fgbu10s_PcsSNTDCY = 0;
        $a7f2fgbu10s_PriceSNTDCY = 0;
        $a7f2thbu05s_PcsSNTDCY = 0;
        $a7f2thbu05s_PriceSNTDCY = 0;
        $a7f2debu10s_PcsSNTDCY = 0;
        $a7f2debu10s_PriceSNTDCY = 0;
        $a7f2exbu11s_PcsSNTDCY = 0;
        $a7f2exbu11s_PriceSNTDCY = 0;
        $a7f2twbu04s_PcsSNTDCY = 0;
        $a7f2twbu04s_PriceSNTDCY = 0;
        $a7f2twbu07s_PcsSNTDCY = 0;
        $a7f2twbu07s_PriceSNTDCY = 0;
        $a7f2cebu10s_PcsSNTDCY = 0;
        $a7f2cebu10s_PriceSNTDCY = 0;
        $a8f1fgbu02s_PcsSNTDCY = 0;
        $a8f1fgbu02s_PriceSNTDCY = 0;
        $a8f2fgbu10s_PcsSNTDCY = 0;
        $a8f2fgbu10s_PriceSNTDCY = 0;
        $a8f2thbu05s_PcsSNTDCY = 0;
        $a8f2thbu05s_PriceSNTDCY = 0;
        $a8f2debu10s_PcsSNTDCY = 0;
        $a8f2debu10s_PriceSNTDCY = 0;
        $a8f2exbu11s_PcsSNTDCY = 0;
        $a8f2exbu11s_PriceSNTDCY = 0;
        $a8f2twbu04s_PcsSNTDCY = 0;
        $a8f2twbu04s_PriceSNTDCY = 0;
        $a8f2twbu07s_PcsSNTDCY = 0;
        $a8f2twbu07s_PriceSNTDCY = 0;
        $a8f2cebu10s_PcsSNTDCY = 0;
        $a8f2cebu10s_PriceSNTDCY = 0;
        $DC1_PcsSNTDCY = 0;
        $DC1_PriceSNTDCY = 0;
        $DCP_PcsSNTDCY = 0;
        $DCP_PriceSNTDCY = 0;
        $DCY_PcsSNTDCY = 0;
        $DCY_PriceSNTDCY = 0;
        $DEX_PcsSNTDCY = 0;
        $DEX_PriceSNTDCY = 0;


        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoNT as $NT) {
            if ($NT->PcsAfter > 0 && $NT->PriceAfter > 0) {
                $NumberNT = ($NT->PriceAfter / $NT->PcsAfter);
            }else{
                $NumberNT = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterNT = $NT->PcsAfter;
            $Pcs_AfterNT = $Pcs_AfterNT + $PCSAfterNT;

            $PriceAfterNT = $NT->PriceAfter;
            $Price_AfterNT = $Price_AfterNT + $PriceAfterNT;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsNT = $NT->Po_Quantity;
            $Po_PcsNT = $Po_PcsNT + $PoPcsNT;

            $PoPriceNT = $NT->PriceAvg * $NT->Po_Quantity;
            $Po_PriceNT = $Po_PriceNT + $PoPriceNT;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsNT = $NT->Neg_Quantity;
            $Neg_PcsNT = $Neg_PcsNT + $NegPcsNT;


            $NegPriceNT = $NumberNT * $NT->Neg_Quantity;
            $Neg_PriceNT = $Neg_PriceNT + $NegPriceNT;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsNT = $PCSAfterNT + $PoPcsNT + $NegPcsNT;
            $BackChange_PcsNT = $BackChange_PcsNT + $BackChangePcsNT;

            $BackChangePriceNT = $PriceAfterNT + $PoPriceNT + $NegPriceNT;
            $BackChange_PriceNT = $BackChange_PriceNT + $BackChangePriceNT;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsNT = $NT->purchase_Quantity;
            $Purchase_PcsNT = $Purchase_PcsNT + $PurchasePcsNT;

            $PurchasePriceNT = $NT->purchase_Cost;
            $Purchase_PriceNT = $Purchase_PriceNT + $PurchasePriceNT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsNT = $NT->a7f1fgbu02s_Quantity + $NT->a7f2fgbu10s_Quantity + $NT->a7f2thbu05s_Quantity + $NT->a7f2debu10s_Quantity + $NT->a7f2exbu11s_Quantity + $NT->a7f2twbu04s_Quantity + $NT->a7f2twbu07s_Quantity + $NT->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsNT = $ReciveTranfer_PcsNT + $ReciveTranferPcsNT;

            $ReciveTranferPriceNT = $ReciveTranferPcsNT * $NT->PriceAvg;
            $ReciveTranfer_PriceNT = $ReciveTranfer_PriceNT + $ReciveTranferPriceNT;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityNT = $NT->returncuses_Quantity;
            $ReturnItem_PCSNT = $ReturnItem_PCSNT + $ReturnItemQuantityNT;

            $ReturnItemPriceNT = $ReturnItemQuantityNT * $NumberNT;
            $ReturnItem_PriceNT = $ReturnItem_PriceNT + $ReturnItemPriceNT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsNT = $NT->purchase_Quantity + $ReciveTranferPcsNT + $ReturnItemQuantityNT;
            $AllIn_PcsNT = $AllIn_PcsNT + $AllInPcsNT;

            $AllInPriceNT = $PurchasePriceNT + $ReciveTranferPriceNT + $ReturnItemPriceNT;
            $AllIn_PriceNT = $AllIn_PriceNT + $AllInPriceNT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsNT = $NT->dc1_s_Quantity + $NT->dcp_s_Quantity + $NT->dcy_s_Quantity + $NT->dex_s_Quantity;
            $SendSale_PcsNT = $SendSale_PcsNT + $SendSalePcsNT;

            if ($BackChangePcsNT > 0 && $AllInPcsNT > 0) {
                $SendSalePriceNT = (($AllInPriceNT + $BackChangePriceNT) / ($AllInPcsNT + $BackChangePcsNT)) * $SendSalePcsNT;
                $SendSale_PriceNT = $SendSale_PriceNT + $SendSalePriceNT;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsNT = $NT->a8f1fgbu02s_Quantity + $NT->a8f2fgbu10s_Quantity + $NT->a8f2thbu05s_Quantity + $NT->a8f2debu10s_Quantity + $NT->a8f2exbu11s_Quantity + $NT->a8f2twbu04s_Quantity + $NT->a8f2twbu07s_Quantity + $NT->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsNT = $ReciveTranOut_PcsNT + $ReciveTranOutPcsNT;

            if ($AllInPcsNT > 0 && $BackChangePcsNT > 0) {
                $ReciveTranOutPriceNT = (($AllInPriceNT + $BackChangePriceNT) / ($AllInPcsNT + $BackChangePcsNT)) * $ReciveTranOutPcsNT;
                $ReciveTranOut_PriceNT = $ReciveTranOut_PriceNT + $ReciveTranOutPriceNT;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsNT = $NT->returnitem_Quantity;
            $ReturnStore_PcsNT = $ReturnStore_PcsNT + $ReturnStorePcsNT;

            if ($AllInPcsNT > 0 && $BackChangePcsNT > 0) {
                $ReturnStorePriceNT = (($AllInPriceNT + $BackChangePriceNT) / ($AllInPcsNT + $BackChangePcsNT)) * $ReturnStorePcsNT;
                $ReturnStore_PriceNT = $ReturnStore_PriceNT + $ReturnStorePriceNT;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsNT = $ReturnStorePcsNT + $ReciveTranOutPcsNT + $SendSalePcsNT;
            $AllOut_PcsNT = $AllOut_PcsNT + $AllOutPcsNT;

            $AllOutPriceNT = $SendSale_PriceNT + $ReciveTranOut_PriceNT + $ReturnStore_PriceNT;
            $AllOut_PriceNT = $AllOut_PriceNT + $AllOutPriceNT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsNT = $BackChangePcsNT + $AllInPcsNT + $AllOutPcsNT;
            $Calculate_PcsNT = $Calculate_PcsNT + $CalculatePcsNT;

            $CalculatePriceNT = $BackChangePriceNT + $AllInPriceNT + $AllOutPriceNT;
            $Calculate_PriceNT = $Calculate_PriceNT + $CalculatePriceNT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsNT = $NT->item_stock_Quantity;
            $NewCalculate_PcsNT = $NewCalculate_PcsNT + $NewCalculatePcsNT;

            $NewCalculatePriceNT = $NT->item_stock_Amount;
            $NewCalculate_PriceNT = $NewCalculate_PriceNT + $NewCalculatePriceNT;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsNT = $NewCalculatePcsNT - $CalculatePcsNT;
            $Diff_PcsNT = $Diff_PcsNT + $DiffPcsNT;

            $DiffPriceNT = $NewCalculatePriceNT - $CalculatePriceNT;
            $Diff_PriceNT = $Diff_PriceNT + $DiffPriceNT;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsNT = $CalculatePcsNT;
            $NewTotal_PcsNT = $NewTotal_PcsNT + $CalculatePcsNT;

            $NewTotalPriceNT = $NewTotalPcsNT * $NT->PriceAvg;
            $NewTotal_PriceNT = $NewTotal_PriceNT + $NewTotalPriceNT;

            $NewTotalDiffNavNT = $NewTotalPriceNT - $NewCalculatePriceNT;
            $NewTotalDiff_NavNT = $NewTotalDiff_NavNT + $NewTotalDiffNavNT;

            $NewTotalDiffCalNT = $NewTotalPriceNT - $CalculatePriceNT;
            $NewTotalDiff_CalNT = $NewTotalDiff_CalNT + $NewTotalDiffCalNT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsNT = $NT->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsNT = $a7f1fgbu02s_PcsNT + $a7f1fgbu02sPcsNT;

            $a7f1fgbu02sPriceNT = $a7f1fgbu02sPcsNT * $NT->PriceAvg;
            $a7f1fgbu02s_PriceNT = $a7f1fgbu02s_PriceNT + $a7f1fgbu02sPriceNT;

            $a7f2fgbu10sPcsNT = $NT->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsNT = $a7f2fgbu10s_PcsNT + $a7f2fgbu10sPcsNT;

            $a7f2fgbu10sPriceNT = $a7f2fgbu10sPcsNT * $NT->PriceAvg;
            $a7f2fgbu10s_PriceNT = $a7f2fgbu10s_PriceNT + $a7f2fgbu10sPriceNT;

            $a7f2thbu05sPcsNT = $NT->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsNT = $a7f2thbu05s_PcsNT + $a7f2thbu05sPcsNT;

            $a7f2thbu05sPriceNT = $a7f2thbu05sPcsNT * $NT->PriceAvg;
            $a7f2thbu05s_PriceNT = $a7f2thbu05s_PriceNT + $a7f2thbu05sPriceNT;

            $a7f2debu10sPcsNT = $NT->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsNT = $a7f2debu10s_PcsNT + $a7f2debu10sPcsNT;

            $a7f2debu10sPriceNT = $a7f2debu10sPcsNT * $NT->PriceAvg;
            $a7f2debu10s_PriceNT = $a7f2debu10s_PriceNT + $a7f2debu10sPriceNT;

            $a7f2exbu11sPcsNT = $NT->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsNT = $a7f2exbu11s_PcsNT + $a7f2exbu11sPcsNT;

            $a7f2exbu11sPriceNT = $a7f2exbu11sPcsNT * $NT->PriceAvg;
            $a7f2exbu11s_PriceNT = $a7f2exbu11s_PriceNT + $a7f2exbu11sPriceNT;

            $a7f2twbu04sPcsNT = $NT->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsNT = $a7f2twbu04s_PcsNT + $a7f2twbu04sPcsNT;

            $a7f2twbu04sPriceNT = $a7f2twbu04sPcsNT * $NT->PriceAvg;
            $a7f2twbu04s_PriceNT = $a7f2twbu04s_PriceNT + $a7f2twbu04sPriceNT;

            $a7f2twbu07sPcsNT = $NT->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsNT = $a7f2twbu07s_PcsNT + $a7f2twbu07sPcsNT;

            $a7f2twbu07sPriceNT = $a7f2twbu07sPcsNT * $NT->PriceAvg;
            $a7f2twbu07s_PriceNT = $a7f2twbu07s_PriceNT + $a7f2twbu07sPriceNT;

            $a7f2cebu10sPcsNT = $NT->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsNT = $a7f2cebu10s_PcsNT + $a7f2cebu10sPcsNT;

            $a7f2cebu10sPriceNT = $a7f2cebu10sPcsNT * $NT->PriceAvg;
            $a7f2cebu10s_PriceNT = $a7f2cebu10s_PriceNT + $a7f2cebu10sPriceNT;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsNT = $NT->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsNT = $a8f1fgbu02s_PcsNT + $a8f1fgbu02sPcsNT;

            $a8f1fgbu02sPriceNT = $a8f1fgbu02sPcsNT * $NumberNT;
            $a8f1fgbu02s_PriceNT = $a8f1fgbu02s_PriceNT + $a8f1fgbu02sPriceNT;

            $a8f2fgbu10sPcsNT = $NT->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsNT = $a8f2fgbu10s_PcsNT + $a8f2fgbu10sPcsNT;

            $a8f2fgbu10sPriceNT = $a8f2fgbu10sPcsNT * $NumberNT;
            $a8f2fgbu10s_PriceNT = $a8f2fgbu10s_PriceNT + $a8f2fgbu10sPriceNT;

            $a8f2thbu05sPcsNT = $NT->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsNT = $a8f2thbu05s_PcsNT + $a8f2thbu05sPcsNT;

            $a8f2thbu05sPriceNT = $a8f2thbu05sPcsNT * $NumberNT;
            $a8f2thbu05s_PriceNT = $a8f2thbu05s_PriceNT + $a8f2thbu05sPriceNT;

            $a8f2debu10sPcsNT = $NT->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsNT = $a8f2debu10s_PcsNT + $a8f2debu10sPcsNT;

            $a8f2debu10sPriceNT = $a8f2debu10sPcsNT * $NumberNT;
            $a8f2debu10s_PriceNT = $a8f2debu10s_PriceNT + $a8f2debu10sPriceNT;

            $a8f2exbu11sPcsNT = $NT->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsNT = $a8f2exbu11s_PcsNT + $a8f2exbu11sPcsNT;

            $a8f2exbu11sPriceNT = $a8f2exbu11sPcsNT * $NumberNT;
            $a8f2exbu11s_PriceNT = $a8f2exbu11s_PriceNT + $a8f2exbu11sPriceNT;

            $a8f2twbu04sPcsNT = $NT->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsNT = $a8f2twbu04s_PcsNT + $a8f2twbu04sPcsNT;

            $a8f2twbu04sPriceNT = $a8f2twbu04sPcsNT * $NumberNT;
            $a8f2twbu04s_PriceNT = $a8f2twbu04s_PriceNT + $a8f2twbu04sPriceNT;

            $a8f2twbu07sPcsNT = $NT->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsNT = $a8f2twbu07s_PcsNT + $a8f2twbu07sPcsNT;

            $a8f2twbu07sPriceNT = $a8f2twbu07sPcsNT * $NumberNT;
            $a8f2twbu07s_PriceNT = $a8f2twbu07s_PriceNT + $a8f2twbu07sPriceNT;

            $a8f2cebu10sPcsNT = $NT->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsNT = $a8f2cebu10s_PcsNT + $a8f2cebu10sPcsNT;

            $a8f2cebu10sPriceNT = $a8f2cebu10sPcsNT * $NumberNT;
            $a8f2cebu10s_PriceNT = $a8f2cebu10s_PriceNT + $a8f2cebu10sPriceNT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsNT = $NT->dc1_s_Quantity;
            $DC1_PcsNT = $DC1_PcsNT + $DC1PcsNT;

            $DC1PriceNT = $DC1PcsNT * $NumberNT;
            $DC1_PriceNT = $DC1_PriceNT + $DC1PriceNT;

            $DCPPcsNT = $NT->dcp_s_Quantity;
            $DCP_PcsNT = $DCP_PcsNT + $DCPPcsNT;

            $DCPPriceNT = $DCPPcsNT * $NumberNT;
            $DCP_PriceNT = $DCP_PriceNT + $DCPPriceNT;

            $DCYPcsNT = $NT->dcy_s_Quantity;
            $DCY_PcsNT = $DCY_PcsNT + $DCYPcsNT;

            $DCYPriceNT = $DCYPcsNT * $NumberNT;
            $DCY_PriceNT = $DCY_PriceNT + $DCYPriceNT;

            $DEXPcsNT = $NT->dex_s_Quantity;
            $DEX_PcsNT = $DEX_PcsNT + $DEXPcsNT;

            $DEXPriceNT = $DEXPcsNT * $NumberNT;
            $DEX_PriceNT = $DEX_PriceNT + $DEXPriceNT;

        }

        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoMT as $MT) {
            if ($MT->PcsAfter > 0 && $MT->PriceAfter > 0) {
                $NumberMT = ($MT->PriceAfter / $MT->PcsAfter);
            }else{
                $NumberMT = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterMT = $MT->PcsAfter;
            $Pcs_AfterMT = $Pcs_AfterMT + $PCSAfterMT;

            $PriceAfterMT = $MT->PriceAfter;
            $Price_AfterMT = $Price_AfterMT + $PriceAfterMT;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsMT = $MT->Po_Quantity;
            $Po_PcsMT = $Po_PcsMT + $PoPcsMT;

            $PoPriceMT = $MT->PriceAvg * $MT->Po_Quantity;
            $Po_PriceMT = $Po_PriceMT + $PoPriceMT;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsMT = $MT->Neg_Quantity;
            $Neg_PcsMT = $Neg_PcsMT + $NegPcsMT;


            $NegPriceMT = $NumberMT * $MT->Neg_Quantity;
            $Neg_PriceMT = $Neg_PriceMT + $NegPriceMT;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsMT = $PCSAfterMT + $PoPcsMT + $NegPcsMT;
            $BackChange_PcsMT = $BackChange_PcsMT + $BackChangePcsMT;

            $BackChangePriceMT = $PriceAfterMT + $PoPriceMT + $NegPriceMT;
            $BackChange_PriceMT = $BackChange_PriceMT + $BackChangePriceMT;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsMT = $MT->purchase_Quantity;
            $Purchase_PcsMT = $Purchase_PcsMT + $PurchasePcsMT;

            $PurchasePriceMT = $MT->purchase_Cost;
            $Purchase_PriceMT = $Purchase_PriceMT + $PurchasePriceMT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsMT = $MT->a7f1fgbu02s_Quantity + $MT->a7f2fgbu10s_Quantity + $MT->a7f2thbu05s_Quantity + $MT->a7f2debu10s_Quantity + $MT->a7f2exbu11s_Quantity + $MT->a7f2twbu04s_Quantity + $MT->a7f2twbu07s_Quantity + $MT->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsMT = $ReciveTranfer_PcsMT + $ReciveTranferPcsMT;

            $ReciveTranferPriceMT = $ReciveTranferPcsMT * $MT->PriceAvg;
            $ReciveTranfer_PriceMT = $ReciveTranfer_PriceMT + $ReciveTranferPriceMT;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityMT = $MT->returncuses_Quantity;
            $ReturnItem_PCSMT = $ReturnItem_PCSMT + $ReturnItemQuantityMT;

            $ReturnItemPriceMT = $ReturnItemQuantityMT * $NumberMT;
            $ReturnItem_PriceMT = $ReturnItem_PriceMT + $ReturnItemPriceMT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsMT = $MT->purchase_Quantity + $ReciveTranferPcsMT + $ReturnItemQuantityMT;
            $AllIn_PcsMT = $AllIn_PcsMT + $AllInPcsMT;

            $AllInPriceMT = $PurchasePriceMT + $ReciveTranferPriceMT + $ReturnItemPriceMT;
            $AllIn_PriceMT = $AllIn_PriceMT + $AllInPriceMT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsMT = $MT->dc1_s_Quantity + $MT->dcp_s_Quantity + $MT->dcy_s_Quantity + $MT->dex_s_Quantity;
            $SendSale_PcsMT = $SendSale_PcsMT + $SendSalePcsMT;

            if ($BackChangePcsMT > 0 && $AllInPcsMT > 0) {
                $SendSalePriceMT = (($AllInPriceMT + $BackChangePriceMT) / ($AllInPcsMT + $BackChangePcsMT)) * $SendSalePcsMT;
                $SendSale_PriceMT = $SendSale_PriceMT + $SendSalePriceMT;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsMT = $MT->a8f1fgbu02s_Quantity + $MT->a8f2fgbu10s_Quantity + $MT->a8f2thbu05s_Quantity + $MT->a8f2debu10s_Quantity + $MT->a8f2exbu11s_Quantity + $MT->a8f2twbu04s_Quantity + $MT->a8f2twbu07s_Quantity + $MT->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsMT = $ReciveTranOut_PcsMT + $ReciveTranOutPcsMT;

            if ($AllInPcsMT > 0 && $BackChangePcsMT > 0) {
                $ReciveTranOutPriceMT = (($AllInPriceMT + $BackChangePriceMT) / ($AllInPcsMT + $BackChangePcsMT)) * $ReciveTranOutPcsMT;
                $ReciveTranOut_PriceMT = $ReciveTranOut_PriceMT + $ReciveTranOutPriceMT;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsMT = $MT->returnitem_Quantity;
            $ReturnStore_PcsMT = $ReturnStore_PcsMT + $ReturnStorePcsMT;

            if ($AllInPcsMT > 0 && $BackChangePcsMT > 0) {
                $ReturnStorePriceMT = (($AllInPriceMT + $BackChangePriceMT) / ($AllInPcsMT + $BackChangePcsMT)) * $ReturnStorePcsMT;
                $ReturnStore_PriceMT = $ReturnStore_PriceMT + $ReturnStorePriceMT;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsMT = $ReturnStorePcsMT + $ReciveTranOutPcsMT + $SendSalePcsMT;
            $AllOut_PcsMT = $AllOut_PcsMT + $AllOutPcsMT;

            $AllOutPriceMT = $SendSale_PriceMT + $ReciveTranOut_PriceMT + $ReturnStore_PriceMT;
            $AllOut_PriceMT = $AllOut_PriceMT + $AllOutPriceMT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsMT = $BackChangePcsMT + $AllInPcsMT + $AllOutPcsMT;
            $Calculate_PcsMT = $Calculate_PcsMT + $CalculatePcsMT;

            $CalculatePriceMT = $BackChangePriceMT + $AllInPriceMT + $AllOutPriceMT;
            $Calculate_PriceMT = $Calculate_PriceMT + $CalculatePriceMT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsMT = $MT->item_stock_Quantity;
            $NewCalculate_PcsMT = $NewCalculate_PcsMT + $NewCalculatePcsMT;

            $NewCalculatePriceMT = $MT->item_stock_Amount;
            $NewCalculate_PriceMT = $NewCalculate_PriceMT + $NewCalculatePriceMT;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsMT = $NewCalculatePcsMT - $CalculatePcsMT;
            $Diff_PcsMT = $Diff_PcsMT + $DiffPcsMT;

            $DiffPriceMT = $NewCalculatePriceMT - $CalculatePriceMT;
            $Diff_PriceMT = $Diff_PriceMT + $DiffPriceMT;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsMT = $CalculatePcsMT;
            $NewTotal_PcsMT = $NewTotal_PcsMT + $CalculatePcsMT;

            $NewTotalPriceMT = $NewTotalPcsMT * $MT->PriceAvg;
            $NewTotal_PriceMT = $NewTotal_PriceMT + $NewTotalPriceMT;

            $NewTotalDiffNavMT = $NewTotalPriceMT - $NewCalculatePriceMT;
            $NewTotalDiff_NavMT = $NewTotalDiff_NavMT + $NewTotalDiffNavMT;

            $NewTotalDiffCalMT = $NewTotalPriceMT - $CalculatePriceMT;
            $NewTotalDiff_CalMT = $NewTotalDiff_CalMT + $NewTotalDiffCalMT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsMT = $MT->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsMT = $a7f1fgbu02s_PcsMT + $a7f1fgbu02sPcsMT;

            $a7f1fgbu02sPriceMT = $a7f1fgbu02sPcsMT * $MT->PriceAvg;
            $a7f1fgbu02s_PriceMT = $a7f1fgbu02s_PriceMT + $a7f1fgbu02sPriceMT;

            $a7f2fgbu10sPcsMT = $MT->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsMT = $a7f2fgbu10s_PcsMT + $a7f2fgbu10sPcsMT;

            $a7f2fgbu10sPriceMT = $a7f2fgbu10sPcsMT * $MT->PriceAvg;
            $a7f2fgbu10s_PriceMT = $a7f2fgbu10s_PriceMT + $a7f2fgbu10sPriceMT;

            $a7f2thbu05sPcsMT = $MT->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsMT = $a7f2thbu05s_PcsMT + $a7f2thbu05sPcsMT;

            $a7f2thbu05sPriceMT = $a7f2thbu05sPcsMT * $MT->PriceAvg;
            $a7f2thbu05s_PriceMT = $a7f2thbu05s_PriceMT + $a7f2thbu05sPriceMT;

            $a7f2debu10sPcsMT = $MT->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsMT = $a7f2debu10s_PcsMT + $a7f2debu10sPcsMT;

            $a7f2debu10sPriceMT = $a7f2debu10sPcsMT * $MT->PriceAvg;
            $a7f2debu10s_PriceMT = $a7f2debu10s_PriceMT + $a7f2debu10sPriceMT;

            $a7f2exbu11sPcsMT = $MT->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsMT = $a7f2exbu11s_PcsMT + $a7f2exbu11sPcsMT;

            $a7f2exbu11sPriceMT = $a7f2exbu11sPcsMT * $MT->PriceAvg;
            $a7f2exbu11s_PriceMT = $a7f2exbu11s_PriceMT + $a7f2exbu11sPriceMT;

            $a7f2twbu04sPcsMT = $MT->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsMT = $a7f2twbu04s_PcsMT + $a7f2twbu04sPcsMT;

            $a7f2twbu04sPriceMT = $a7f2twbu04sPcsMT * $MT->PriceAvg;
            $a7f2twbu04s_PriceMT = $a7f2twbu04s_PriceMT + $a7f2twbu04sPriceMT;

            $a7f2twbu07sPcsMT = $MT->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsMT = $a7f2twbu07s_PcsMT + $a7f2twbu07sPcsMT;

            $a7f2twbu07sPriceMT = $a7f2twbu07sPcsMT * $MT->PriceAvg;
            $a7f2twbu07s_PriceMT = $a7f2twbu07s_PriceMT + $a7f2twbu07sPriceMT;

            $a7f2cebu10sPcsMT = $MT->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsMT = $a7f2cebu10s_PcsMT + $a7f2cebu10sPcsMT;

            $a7f2cebu10sPriceMT = $a7f2cebu10sPcsMT * $MT->PriceAvg;
            $a7f2cebu10s_PriceMT = $a7f2cebu10s_PriceMT + $a7f2cebu10sPriceMT;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsMT = $MT->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsMT = $a8f1fgbu02s_PcsMT + $a8f1fgbu02sPcsMT;

            $a8f1fgbu02sPriceMT = $a8f1fgbu02sPcsMT * $NumberMT;
            $a8f1fgbu02s_PriceMT = $a8f1fgbu02s_PriceMT + $a8f1fgbu02sPriceMT;

            $a8f2fgbu10sPcsMT = $MT->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsMT = $a8f2fgbu10s_PcsMT + $a8f2fgbu10sPcsMT;

            $a8f2fgbu10sPriceMT = $a8f2fgbu10sPcsMT * $NumberMT;
            $a8f2fgbu10s_PriceMT = $a8f2fgbu10s_PriceMT + $a8f2fgbu10sPriceMT;

            $a8f2thbu05sPcsMT = $MT->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsMT = $a8f2thbu05s_PcsMT + $a8f2thbu05sPcsMT;

            $a8f2thbu05sPriceMT = $a8f2thbu05sPcsMT * $NumberMT;
            $a8f2thbu05s_PriceMT = $a8f2thbu05s_PriceMT + $a8f2thbu05sPriceMT;

            $a8f2debu10sPcsMT = $MT->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsMT = $a8f2debu10s_PcsMT + $a8f2debu10sPcsMT;

            $a8f2debu10sPriceMT = $a8f2debu10sPcsMT * $NumberMT;
            $a8f2debu10s_PriceMT = $a8f2debu10s_PriceMT + $a8f2debu10sPriceMT;

            $a8f2exbu11sPcsMT = $MT->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsMT = $a8f2exbu11s_PcsMT + $a8f2exbu11sPcsMT;

            $a8f2exbu11sPriceMT = $a8f2exbu11sPcsMT * $NumberMT;
            $a8f2exbu11s_PriceMT = $a8f2exbu11s_PriceMT + $a8f2exbu11sPriceMT;

            $a8f2twbu04sPcsMT = $MT->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsMT = $a8f2twbu04s_PcsMT + $a8f2twbu04sPcsMT;

            $a8f2twbu04sPriceMT = $a8f2twbu04sPcsMT * $NumberMT;
            $a8f2twbu04s_PriceMT = $a8f2twbu04s_PriceMT + $a8f2twbu04sPriceMT;

            $a8f2twbu07sPcsMT = $MT->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsMT = $a8f2twbu07s_PcsMT + $a8f2twbu07sPcsMT;

            $a8f2twbu07sPriceMT = $a8f2twbu07sPcsMT * $NumberMT;
            $a8f2twbu07s_PriceMT = $a8f2twbu07s_PriceMT + $a8f2twbu07sPriceMT;

            $a8f2cebu10sPcsMT = $MT->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsMT = $a8f2cebu10s_PcsMT + $a8f2cebu10sPcsMT;

            $a8f2cebu10sPriceMT = $a8f2cebu10sPcsMT * $NumberMT;
            $a8f2cebu10s_PriceMT = $a8f2cebu10s_PriceMT + $a8f2cebu10sPriceMT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsMT = $MT->dc1_s_Quantity;
            $DC1_PcsMT = $DC1_PcsMT + $DC1PcsMT;

            $DC1PriceMT = $DC1PcsMT * $NumberMT;
            $DC1_PriceMT = $DC1_PriceMT + $DC1PriceMT;

            $DCPPcsMT = $MT->dcp_s_Quantity;
            $DCP_PcsMT = $DCP_PcsMT + $DCPPcsMT;

            $DCPPriceMT = $DCPPcsMT * $NumberMT;
            $DCP_PriceMT = $DCP_PriceMT + $DCPPriceMT;

            $DCYPcsMT = $MT->dcy_s_Quantity;
            $DCY_PcsMT = $DCY_PcsMT + $DCYPcsMT;

            $DCYPriceMT = $DCYPcsMT * $NumberMT;
            $DCY_PriceMT = $DCY_PriceMT + $DCYPriceMT;

            $DEXPcsMT = $MT->dex_s_Quantity;
            $DEX_PcsMT = $DEX_PcsMT + $DEXPcsMT;

            $DEXPriceMT = $DEXPcsMT * $NumberMT;
            $DEX_PriceMT = $DEX_PriceMT + $DEXPriceMT;

        }

        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoTW as $TW) {
            if ($TW->PcsAfter > 0 && $TW->PriceAfter > 0) {
                $NumberTW = ($TW->PriceAfter / $TW->PcsAfter);
            }else{
                $NumberTW = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterTW = $TW->PcsAfter;
            $Pcs_AfterTW = $Pcs_AfterTW + $PCSAfterTW;

            $PriceAfterTW = $TW->PriceAfter;
            $Price_AfterTW = $Price_AfterTW + $PriceAfterTW;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsTW = $TW->Po_Quantity;
            $Po_PcsTW = $Po_PcsTW + $PoPcsTW;

            $PoPriceTW = $TW->PriceAvg * $TW->Po_Quantity;
            $Po_PriceTW = $Po_PriceTW + $PoPriceTW;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsTW = $TW->Neg_Quantity;
            $Neg_PcsTW = $Neg_PcsTW + $NegPcsTW;


            $NegPriceTW = $NumberTW * $TW->Neg_Quantity;
            $Neg_PriceTW = $Neg_PriceTW + $NegPriceTW;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsTW = $PCSAfterTW + $PoPcsTW + $NegPcsTW;
            $BackChange_PcsTW = $BackChange_PcsTW + $BackChangePcsTW;

            $BackChangePriceTW = $PriceAfterTW + $PoPriceTW + $NegPriceTW;
            $BackChange_PriceTW = $BackChange_PriceTW + $BackChangePriceTW;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsTW = $TW->purchase_Quantity;
            $Purchase_PcsTW = $Purchase_PcsTW + $PurchasePcsTW;

            $PurchasePriceTW = $TW->purchase_Cost;
            $Purchase_PriceTW = $Purchase_PriceTW + $PurchasePriceTW;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsTW = $TW->a7f1fgbu02s_Quantity + $TW->a7f2fgbu10s_Quantity + $TW->a7f2thbu05s_Quantity + $TW->a7f2debu10s_Quantity + $TW->a7f2exbu11s_Quantity + $TW->a7f2twbu04s_Quantity + $TW->a7f2twbu07s_Quantity + $TW->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsTW = $ReciveTranfer_PcsTW + $ReciveTranferPcsTW;

            $ReciveTranferPriceTW = $ReciveTranferPcsTW * $TW->PriceAvg;
            $ReciveTranfer_PriceTW = $ReciveTranfer_PriceTW + $ReciveTranferPriceTW;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityTW = $TW->returncuses_Quantity;
            $ReturnItem_PCSTW = $ReturnItem_PCSTW + $ReturnItemQuantityTW;

            $ReturnItemPriceTW = $ReturnItemQuantityTW * $NumberTW;
            $ReturnItem_PriceTW = $ReturnItem_PriceTW + $ReturnItemPriceTW;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsTW = $TW->purchase_Quantity + $ReciveTranferPcsTW + $ReturnItemQuantityTW;
            $AllIn_PcsTW = $AllIn_PcsTW + $AllInPcsTW;

            $AllInPriceTW = $PurchasePriceTW + $ReciveTranferPriceTW + $ReturnItemPriceTW;
            $AllIn_PriceTW = $AllIn_PriceTW + $AllInPriceTW;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsTW = $TW->dc1_s_Quantity + $TW->dcp_s_Quantity + $TW->dcy_s_Quantity + $TW->dex_s_Quantity;
            $SendSale_PcsTW = $SendSale_PcsTW + $SendSalePcsTW;

            if ($BackChangePcsTW > 0 && $AllInPcsTW > 0) {
                $SendSalePriceTW = (($AllInPriceTW + $BackChangePriceTW) / ($AllInPcsTW + $BackChangePcsTW)) * $SendSalePcsTW;
                $SendSale_PriceTW = $SendSale_PriceTW + $SendSalePriceTW;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsTW = $TW->a8f1fgbu02s_Quantity + $TW->a8f2fgbu10s_Quantity + $TW->a8f2thbu05s_Quantity + $TW->a8f2debu10s_Quantity + $TW->a8f2exbu11s_Quantity + $TW->a8f2twbu04s_Quantity + $TW->a8f2twbu07s_Quantity + $TW->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsTW = $ReciveTranOut_PcsTW + $ReciveTranOutPcsTW;

            if ($AllInPcsTW > 0 && $BackChangePcsTW > 0) {
                $ReciveTranOutPriceTW = (($AllInPriceTW + $BackChangePriceTW) / ($AllInPcsTW + $BackChangePcsTW)) * $ReciveTranOutPcsTW;
                $ReciveTranOut_PriceTW = $ReciveTranOut_PriceTW + $ReciveTranOutPriceTW;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsTW = $TW->returnitem_Quantity;
            $ReturnStore_PcsTW = $ReturnStore_PcsTW + $ReturnStorePcsTW;

            if ($AllInPcsTW > 0 && $BackChangePcsTW > 0) {
                $ReturnStorePriceTW = (($AllInPriceTW + $BackChangePriceTW) / ($AllInPcsTW + $BackChangePcsTW)) * $ReturnStorePcsTW;
                $ReturnStore_PriceTW = $ReturnStore_PriceTW + $ReturnStorePriceTW;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsTW = $ReturnStorePcsTW + $ReciveTranOutPcsTW + $SendSalePcsTW;
            $AllOut_PcsTW = $AllOut_PcsTW + $AllOutPcsTW;

            $AllOutPriceTW = $SendSale_PriceTW + $ReciveTranOut_PriceTW + $ReturnStore_PriceTW;
            $AllOut_PriceTW = $AllOut_PriceTW + $AllOutPriceTW;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsTW = $BackChangePcsTW + $AllInPcsTW + $AllOutPcsTW;
            $Calculate_PcsTW = $Calculate_PcsTW + $CalculatePcsTW;

            $CalculatePriceTW = $BackChangePriceTW + $AllInPriceTW + $AllOutPriceTW;
            $Calculate_PriceTW = $Calculate_PriceTW + $CalculatePriceTW;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsTW = $TW->item_stock_Quantity;
            $NewCalculate_PcsTW = $NewCalculate_PcsTW + $NewCalculatePcsTW;

            $NewCalculatePriceTW = $TW->item_stock_Amount;
            $NewCalculate_PriceTW = $NewCalculate_PriceTW + $NewCalculatePriceTW;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsTW = $NewCalculatePcsTW - $CalculatePcsTW;
            $Diff_PcsTW = $Diff_PcsTW + $DiffPcsTW;

            $DiffPriceTW = $NewCalculatePriceTW - $CalculatePriceTW;
            $Diff_PriceTW = $Diff_PriceTW + $DiffPriceTW;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsTW = $CalculatePcsTW;
            $NewTotal_PcsTW = $NewTotal_PcsTW + $CalculatePcsTW;

            $NewTotalPriceTW = $NewTotalPcsTW * $TW->PriceAvg;
            $NewTotal_PriceTW = $NewTotal_PriceTW + $NewTotalPriceTW;

            $NewTotalDiffNavTW = $NewTotalPriceTW - $NewCalculatePriceTW;
            $NewTotalDiff_NavTW = $NewTotalDiff_NavTW + $NewTotalDiffNavTW;

            $NewTotalDiffCalTW = $NewTotalPriceTW - $CalculatePriceTW;
            $NewTotalDiff_CalTW = $NewTotalDiff_CalTW + $NewTotalDiffCalTW;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsTW = $TW->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsTW = $a7f1fgbu02s_PcsTW + $a7f1fgbu02sPcsTW;

            $a7f1fgbu02sPriceTW = $a7f1fgbu02sPcsTW * $TW->PriceAvg;
            $a7f1fgbu02s_PriceTW = $a7f1fgbu02s_PriceTW + $a7f1fgbu02sPriceTW;

            $a7f2fgbu10sPcsTW = $TW->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsTW = $a7f2fgbu10s_PcsTW + $a7f2fgbu10sPcsTW;

            $a7f2fgbu10sPriceTW = $a7f2fgbu10sPcsTW * $TW->PriceAvg;
            $a7f2fgbu10s_PriceTW = $a7f2fgbu10s_PriceTW + $a7f2fgbu10sPriceTW;

            $a7f2thbu05sPcsTW = $TW->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsTW = $a7f2thbu05s_PcsTW + $a7f2thbu05sPcsTW;

            $a7f2thbu05sPriceTW = $a7f2thbu05sPcsTW * $TW->PriceAvg;
            $a7f2thbu05s_PriceTW = $a7f2thbu05s_PriceTW + $a7f2thbu05sPriceTW;

            $a7f2debu10sPcsTW = $TW->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsTW = $a7f2debu10s_PcsTW + $a7f2debu10sPcsTW;

            $a7f2debu10sPriceTW = $a7f2debu10sPcsTW * $TW->PriceAvg;
            $a7f2debu10s_PriceTW = $a7f2debu10s_PriceTW + $a7f2debu10sPriceTW;

            $a7f2exbu11sPcsTW = $TW->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsTW = $a7f2exbu11s_PcsTW + $a7f2exbu11sPcsTW;

            $a7f2exbu11sPriceTW = $a7f2exbu11sPcsTW * $TW->PriceAvg;
            $a7f2exbu11s_PriceTW = $a7f2exbu11s_PriceTW + $a7f2exbu11sPriceTW;

            $a7f2twbu04sPcsTW = $TW->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsTW = $a7f2twbu04s_PcsTW + $a7f2twbu04sPcsTW;

            $a7f2twbu04sPriceTW = $a7f2twbu04sPcsTW * $TW->PriceAvg;
            $a7f2twbu04s_PriceTW = $a7f2twbu04s_PriceTW + $a7f2twbu04sPriceTW;

            $a7f2twbu07sPcsTW = $TW->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsTW = $a7f2twbu07s_PcsTW + $a7f2twbu07sPcsTW;

            $a7f2twbu07sPriceTW = $a7f2twbu07sPcsTW * $TW->PriceAvg;
            $a7f2twbu07s_PriceTW = $a7f2twbu07s_PriceTW + $a7f2twbu07sPriceTW;

            $a7f2cebu10sPcsTW = $TW->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsTW = $a7f2cebu10s_PcsTW + $a7f2cebu10sPcsTW;

            $a7f2cebu10sPriceTW = $a7f2cebu10sPcsTW * $TW->PriceAvg;
            $a7f2cebu10s_PriceTW = $a7f2cebu10s_PriceTW + $a7f2cebu10sPriceTW;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsTW = $TW->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsTW = $a8f1fgbu02s_PcsTW + $a8f1fgbu02sPcsTW;

            $a8f1fgbu02sPriceTW = $a8f1fgbu02sPcsTW * $NumberTW;
            $a8f1fgbu02s_PriceTW = $a8f1fgbu02s_PriceTW + $a8f1fgbu02sPriceTW;

            $a8f2fgbu10sPcsTW = $TW->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsTW = $a8f2fgbu10s_PcsTW + $a8f2fgbu10sPcsTW;

            $a8f2fgbu10sPriceTW = $a8f2fgbu10sPcsTW * $NumberTW;
            $a8f2fgbu10s_PriceTW = $a8f2fgbu10s_PriceTW + $a8f2fgbu10sPriceTW;

            $a8f2thbu05sPcsTW = $TW->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsTW = $a8f2thbu05s_PcsTW + $a8f2thbu05sPcsTW;

            $a8f2thbu05sPriceTW = $a8f2thbu05sPcsTW * $NumberTW;
            $a8f2thbu05s_PriceTW = $a8f2thbu05s_PriceTW + $a8f2thbu05sPriceTW;

            $a8f2debu10sPcsTW = $TW->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsTW = $a8f2debu10s_PcsTW + $a8f2debu10sPcsTW;

            $a8f2debu10sPriceTW = $a8f2debu10sPcsTW * $NumberTW;
            $a8f2debu10s_PriceTW = $a8f2debu10s_PriceTW + $a8f2debu10sPriceTW;

            $a8f2exbu11sPcsTW = $TW->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsTW = $a8f2exbu11s_PcsTW + $a8f2exbu11sPcsTW;

            $a8f2exbu11sPriceTW = $a8f2exbu11sPcsTW * $NumberTW;
            $a8f2exbu11s_PriceTW = $a8f2exbu11s_PriceTW + $a8f2exbu11sPriceTW;

            $a8f2twbu04sPcsTW = $TW->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsTW = $a8f2twbu04s_PcsTW + $a8f2twbu04sPcsTW;

            $a8f2twbu04sPriceTW = $a8f2twbu04sPcsTW * $NumberTW;
            $a8f2twbu04s_PriceTW = $a8f2twbu04s_PriceTW + $a8f2twbu04sPriceTW;

            $a8f2twbu07sPcsTW = $TW->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsTW = $a8f2twbu07s_PcsTW + $a8f2twbu07sPcsTW;

            $a8f2twbu07sPriceTW = $a8f2twbu07sPcsTW * $NumberTW;
            $a8f2twbu07s_PriceTW = $a8f2twbu07s_PriceTW + $a8f2twbu07sPriceTW;

            $a8f2cebu10sPcsTW = $TW->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsTW = $a8f2cebu10s_PcsTW + $a8f2cebu10sPcsTW;

            $a8f2cebu10sPriceTW = $a8f2cebu10sPcsTW * $NumberTW;
            $a8f2cebu10s_PriceTW = $a8f2cebu10s_PriceTW + $a8f2cebu10sPriceTW;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsTW = $TW->dc1_s_Quantity;
            $DC1_PcsTW = $DC1_PcsTW + $DC1PcsTW;

            $DC1PriceTW = $DC1PcsTW * $NumberTW;
            $DC1_PriceTW = $DC1_PriceTW + $DC1PriceTW;

            $DCPPcsTW = $TW->dcp_s_Quantity;
            $DCP_PcsTW = $DCP_PcsTW + $DCPPcsTW;

            $DCPPriceTW = $DCPPcsTW * $NumberTW;
            $DCP_PriceTW = $DCP_PriceTW + $DCPPriceTW;

            $DCYPcsTW = $TW->dcy_s_Quantity;
            $DCY_PcsTW = $DCY_PcsTW + $DCYPcsTW;

            $DCYPriceTW = $DCYPcsTW * $NumberTW;
            $DCY_PriceTW = $DCY_PriceTW + $DCYPriceTW;

            $DEXPcsTW = $TW->dex_s_Quantity;
            $DEX_PcsTW = $DEX_PcsTW + $DEXPcsTW;

            $DEXPriceTW = $DEXPcsTW * $NumberTW;
            $DEX_PriceTW = $DEX_PriceTW + $DEXPriceTW;

        }

        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoLN as $LN) {
            if ($LN->PcsAfter > 0 && $LN->PriceAfter > 0) {
                $NumberLN = ($LN->PriceAfter / $LN->PcsAfter);
            }else{
                $NumberLN = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterLN = $LN->PcsAfter;
            $Pcs_AfterLN = $Pcs_AfterLN + $PCSAfterLN;

            $PriceAfterLN = $LN->PriceAfter;
            $Price_AfterLN = $Price_AfterLN + $PriceAfterLN;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsLN = $LN->Po_Quantity;
            $Po_PcsLN = $Po_PcsLN + $PoPcsLN;

            $PoPriceLN = $LN->PriceAvg * $LN->Po_Quantity;
            $Po_PriceLN = $Po_PriceLN + $PoPriceLN;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsLN = $LN->Neg_Quantity;
            $Neg_PcsLN = $Neg_PcsLN + $NegPcsLN;


            $NegPriceLN = $NumberLN * $LN->Neg_Quantity;
            $Neg_PriceLN = $Neg_PriceLN + $NegPriceLN;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsLN = $PCSAfterLN + $PoPcsLN + $NegPcsLN;
            $BackChange_PcsLN = $BackChange_PcsLN + $BackChangePcsLN;

            $BackChangePriceLN = $PriceAfterLN + $PoPriceLN + $NegPriceLN;
            $BackChange_PriceLN = $BackChange_PriceLN + $BackChangePriceLN;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsLN = $LN->purchase_Quantity;
            $Purchase_PcsLN = $Purchase_PcsLN + $PurchasePcsLN;

            $PurchasePriceLN = $LN->purchase_Cost;
            $Purchase_PriceLN = $Purchase_PriceLN + $PurchasePriceLN;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsLN = $LN->a7f1fgbu02s_Quantity + $LN->a7f2fgbu10s_Quantity + $LN->a7f2thbu05s_Quantity + $LN->a7f2debu10s_Quantity + $LN->a7f2exbu11s_Quantity + $LN->a7f2twbu04s_Quantity + $LN->a7f2twbu07s_Quantity + $LN->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsLN = $ReciveTranfer_PcsLN + $ReciveTranferPcsLN;

            $ReciveTranferPriceLN = $ReciveTranferPcsLN * $LN->PriceAvg;
            $ReciveTranfer_PriceLN = $ReciveTranfer_PriceLN + $ReciveTranferPriceLN;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityLN = $LN->returncuses_Quantity;
            $ReturnItem_PCSLN = $ReturnItem_PCSLN + $ReturnItemQuantityLN;

            $ReturnItemPriceLN = $ReturnItemQuantityLN * $NumberLN;
            $ReturnItem_PriceLN = $ReturnItem_PriceLN + $ReturnItemPriceLN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsLN = $LN->purchase_Quantity + $ReciveTranferPcsLN + $ReturnItemQuantityLN;
            $AllIn_PcsLN = $AllIn_PcsLN + $AllInPcsLN;

            $AllInPriceLN = $PurchasePriceLN + $ReciveTranferPriceLN + $ReturnItemPriceLN;
            $AllIn_PriceLN = $AllIn_PriceLN + $AllInPriceLN;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsLN = $LN->dc1_s_Quantity + $LN->dcp_s_Quantity + $LN->dcy_s_Quantity + $LN->dex_s_Quantity;
            $SendSale_PcsLN = $SendSale_PcsLN + $SendSalePcsLN;

            if ($BackChangePcsLN > 0 && $AllInPcsLN > 0) {
                $SendSalePriceLN = (($AllInPriceLN + $BackChangePriceLN) / ($AllInPcsLN + $BackChangePcsLN)) * $SendSalePcsLN;
                $SendSale_PriceLN = $SendSale_PriceLN + $SendSalePriceLN;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsLN = $LN->a8f1fgbu02s_Quantity + $LN->a8f2fgbu10s_Quantity + $LN->a8f2thbu05s_Quantity + $LN->a8f2debu10s_Quantity + $LN->a8f2exbu11s_Quantity + $LN->a8f2twbu04s_Quantity + $LN->a8f2twbu07s_Quantity + $LN->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsLN = $ReciveTranOut_PcsLN + $ReciveTranOutPcsLN;

            if ($AllInPcsLN > 0 && $BackChangePcsLN > 0) {
                $ReciveTranOutPriceLN = (($AllInPriceLN + $BackChangePriceLN) / ($AllInPcsLN + $BackChangePcsLN)) * $ReciveTranOutPcsLN;
                $ReciveTranOut_PriceLN = $ReciveTranOut_PriceLN + $ReciveTranOutPriceLN;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsLN = $LN->returnitem_Quantity;
            $ReturnStore_PcsLN = $ReturnStore_PcsLN + $ReturnStorePcsLN;

            if ($AllInPcsLN > 0 && $BackChangePcsLN > 0) {
                $ReturnStorePriceLN = (($AllInPriceLN + $BackChangePriceLN) / ($AllInPcsLN + $BackChangePcsLN)) * $ReturnStorePcsLN;
                $ReturnStore_PriceLN = $ReturnStore_PriceLN + $ReturnStorePriceLN;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsLN = $ReturnStorePcsLN + $ReciveTranOutPcsLN + $SendSalePcsLN;
            $AllOut_PcsLN = $AllOut_PcsLN + $AllOutPcsLN;

            $AllOutPriceLN = $SendSale_PriceLN + $ReciveTranOut_PriceLN + $ReturnStore_PriceLN;
            $AllOut_PriceLN = $AllOut_PriceLN + $AllOutPriceLN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsLN = $BackChangePcsLN + $AllInPcsLN + $AllOutPcsLN;
            $Calculate_PcsLN = $Calculate_PcsLN + $CalculatePcsLN;

            $CalculatePriceLN = $BackChangePriceLN + $AllInPriceLN + $AllOutPriceLN;
            $Calculate_PriceLN = $Calculate_PriceLN + $CalculatePriceLN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsLN = $LN->item_stock_Quantity;
            $NewCalculate_PcsLN = $NewCalculate_PcsLN + $NewCalculatePcsLN;

            $NewCalculatePriceLN = $LN->item_stock_Amount;
            $NewCalculate_PriceLN = $NewCalculate_PriceLN + $NewCalculatePriceLN;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsLN = $NewCalculatePcsLN - $CalculatePcsLN;
            $Diff_PcsLN = $Diff_PcsLN + $DiffPcsLN;

            $DiffPriceLN = $NewCalculatePriceLN - $CalculatePriceLN;
            $Diff_PriceLN = $Diff_PriceLN + $DiffPriceLN;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsLN = $CalculatePcsLN;
            $NewTotal_PcsLN = $NewTotal_PcsLN + $CalculatePcsLN;

            $NewTotalPriceLN = $NewTotalPcsLN * $LN->PriceAvg;
            $NewTotal_PriceLN = $NewTotal_PriceLN + $NewTotalPriceLN;

            $NewTotalDiffNavLN = $NewTotalPriceLN - $NewCalculatePriceLN;
            $NewTotalDiff_NavLN = $NewTotalDiff_NavLN + $NewTotalDiffNavLN;

            $NewTotalDiffCalLN = $NewTotalPriceLN - $CalculatePriceLN;
            $NewTotalDiff_CalLN = $NewTotalDiff_CalLN + $NewTotalDiffCalLN;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsLN = $LN->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsLN = $a7f1fgbu02s_PcsLN + $a7f1fgbu02sPcsLN;

            $a7f1fgbu02sPriceLN = $a7f1fgbu02sPcsLN * $LN->PriceAvg;
            $a7f1fgbu02s_PriceLN = $a7f1fgbu02s_PriceLN + $a7f1fgbu02sPriceLN;

            $a7f2fgbu10sPcsLN = $LN->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsLN = $a7f2fgbu10s_PcsLN + $a7f2fgbu10sPcsLN;

            $a7f2fgbu10sPriceLN = $a7f2fgbu10sPcsLN * $LN->PriceAvg;
            $a7f2fgbu10s_PriceLN = $a7f2fgbu10s_PriceLN + $a7f2fgbu10sPriceLN;

            $a7f2thbu05sPcsLN = $LN->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsLN = $a7f2thbu05s_PcsLN + $a7f2thbu05sPcsLN;

            $a7f2thbu05sPriceLN = $a7f2thbu05sPcsLN * $LN->PriceAvg;
            $a7f2thbu05s_PriceLN = $a7f2thbu05s_PriceLN + $a7f2thbu05sPriceLN;

            $a7f2debu10sPcsLN = $LN->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsLN = $a7f2debu10s_PcsLN + $a7f2debu10sPcsLN;

            $a7f2debu10sPriceLN = $a7f2debu10sPcsLN * $LN->PriceAvg;
            $a7f2debu10s_PriceLN = $a7f2debu10s_PriceLN + $a7f2debu10sPriceLN;

            $a7f2exbu11sPcsLN = $LN->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsLN = $a7f2exbu11s_PcsLN + $a7f2exbu11sPcsLN;

            $a7f2exbu11sPriceLN = $a7f2exbu11sPcsLN * $LN->PriceAvg;
            $a7f2exbu11s_PriceLN = $a7f2exbu11s_PriceLN + $a7f2exbu11sPriceLN;

            $a7f2twbu04sPcsLN = $LN->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsLN = $a7f2twbu04s_PcsLN + $a7f2twbu04sPcsLN;

            $a7f2twbu04sPriceLN = $a7f2twbu04sPcsLN * $LN->PriceAvg;
            $a7f2twbu04s_PriceLN = $a7f2twbu04s_PriceLN + $a7f2twbu04sPriceLN;

            $a7f2twbu07sPcsLN = $LN->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsLN = $a7f2twbu07s_PcsLN + $a7f2twbu07sPcsLN;

            $a7f2twbu07sPriceLN = $a7f2twbu07sPcsLN * $LN->PriceAvg;
            $a7f2twbu07s_PriceLN = $a7f2twbu07s_PriceLN + $a7f2twbu07sPriceLN;

            $a7f2cebu10sPcsLN = $LN->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsLN = $a7f2cebu10s_PcsLN + $a7f2cebu10sPcsLN;

            $a7f2cebu10sPriceLN = $a7f2cebu10sPcsLN * $LN->PriceAvg;
            $a7f2cebu10s_PriceLN = $a7f2cebu10s_PriceLN + $a7f2cebu10sPriceLN;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsLN = $LN->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsLN = $a8f1fgbu02s_PcsLN + $a8f1fgbu02sPcsLN;

            $a8f1fgbu02sPriceLN = $a8f1fgbu02sPcsLN * $NumberLN;
            $a8f1fgbu02s_PriceLN = $a8f1fgbu02s_PriceLN + $a8f1fgbu02sPriceLN;

            $a8f2fgbu10sPcsLN = $LN->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsLN = $a8f2fgbu10s_PcsLN + $a8f2fgbu10sPcsLN;

            $a8f2fgbu10sPriceLN = $a8f2fgbu10sPcsLN * $NumberLN;
            $a8f2fgbu10s_PriceLN = $a8f2fgbu10s_PriceLN + $a8f2fgbu10sPriceLN;

            $a8f2thbu05sPcsLN = $LN->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsLN = $a8f2thbu05s_PcsLN + $a8f2thbu05sPcsLN;

            $a8f2thbu05sPriceLN = $a8f2thbu05sPcsLN * $NumberLN;
            $a8f2thbu05s_PriceLN = $a8f2thbu05s_PriceLN + $a8f2thbu05sPriceLN;

            $a8f2debu10sPcsLN = $LN->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsLN = $a8f2debu10s_PcsLN + $a8f2debu10sPcsLN;

            $a8f2debu10sPriceLN = $a8f2debu10sPcsLN * $NumberLN;
            $a8f2debu10s_PriceLN = $a8f2debu10s_PriceLN + $a8f2debu10sPriceLN;

            $a8f2exbu11sPcsLN = $LN->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsLN = $a8f2exbu11s_PcsLN + $a8f2exbu11sPcsLN;

            $a8f2exbu11sPriceLN = $a8f2exbu11sPcsLN * $NumberLN;
            $a8f2exbu11s_PriceLN = $a8f2exbu11s_PriceLN + $a8f2exbu11sPriceLN;

            $a8f2twbu04sPcsLN = $LN->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsLN = $a8f2twbu04s_PcsLN + $a8f2twbu04sPcsLN;

            $a8f2twbu04sPriceLN = $a8f2twbu04sPcsLN * $NumberLN;
            $a8f2twbu04s_PriceLN = $a8f2twbu04s_PriceLN + $a8f2twbu04sPriceLN;

            $a8f2twbu07sPcsLN = $LN->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsLN = $a8f2twbu07s_PcsLN + $a8f2twbu07sPcsLN;

            $a8f2twbu07sPriceLN = $a8f2twbu07sPcsLN * $NumberLN;
            $a8f2twbu07s_PriceLN = $a8f2twbu07s_PriceLN + $a8f2twbu07sPriceLN;

            $a8f2cebu10sPcsLN = $LN->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsLN = $a8f2cebu10s_PcsLN + $a8f2cebu10sPcsLN;

            $a8f2cebu10sPriceLN = $a8f2cebu10sPcsLN * $NumberLN;
            $a8f2cebu10s_PriceLN = $a8f2cebu10s_PriceLN + $a8f2cebu10sPriceLN;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsLN = $LN->dc1_s_Quantity;
            $DC1_PcsLN = $DC1_PcsLN + $DC1PcsLN;

            $DC1PriceLN = $DC1PcsLN * $NumberLN;
            $DC1_PriceLN = $DC1_PriceLN + $DC1PriceLN;

            $DCPPcsLN = $LN->dcp_s_Quantity;
            $DCP_PcsLN = $DCP_PcsLN + $DCPPcsLN;

            $DCPPriceLN = $DCPPcsLN * $NumberLN;
            $DCP_PriceLN = $DCP_PriceLN + $DCPPriceLN;

            $DCYPcsLN = $LN->dcy_s_Quantity;
            $DCY_PcsLN = $DCY_PcsLN + $DCYPcsLN;

            $DCYPriceLN = $DCYPcsLN * $NumberLN;
            $DCY_PriceLN = $DCY_PriceLN + $DCYPriceLN;

            $DEXPcsLN = $LN->dex_s_Quantity;
            $DEX_PcsLN = $DEX_PcsLN + $DEXPcsLN;

            $DEXPriceLN = $DEXPcsLN * $NumberLN;
            $DEX_PriceLN = $DEX_PriceLN + $DEXPriceLN;

        }
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoAS as $AS) {
            if ($AS->PcsAfter > 0 && $AS->PriceAfter > 0) {
                $NumberAS = ($AS->PriceAfter / $AS->PcsAfter);
            }else{
                $NumberAS = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterAS = $AS->PcsAfter;
            $Pcs_AfterAS = $Pcs_AfterAS + $PCSAfterAS;

            $PriceAfterAS = $AS->PriceAfter;
            $Price_AfterAS = $Price_AfterAS + $PriceAfterAS;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsAS = $AS->Po_Quantity;
            $Po_PcsAS = $Po_PcsAS + $PoPcsAS;

            $PoPriceAS = $AS->PriceAvg * $AS->Po_Quantity;
            $Po_PriceAS = $Po_PriceAS + $PoPriceAS;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsAS = $AS->Neg_Quantity;
            $Neg_PcsAS = $Neg_PcsAS + $NegPcsAS;


            $NegPriceAS = $NumberAS * $AS->Neg_Quantity;
            $Neg_PriceAS = $Neg_PriceAS + $NegPriceAS;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsAS = $PCSAfterAS + $PoPcsAS + $NegPcsAS;
            $BackChange_PcsAS = $BackChange_PcsAS + $BackChangePcsAS;

            $BackChangePriceAS = $PriceAfterAS + $PoPriceAS + $NegPriceAS;
            $BackChange_PriceAS = $BackChange_PriceAS + $BackChangePriceAS;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsAS = $AS->purchase_Quantity;
            $Purchase_PcsAS = $Purchase_PcsAS + $PurchasePcsAS;

            $PurchasePriceAS = $AS->purchase_Cost;
            $Purchase_PriceAS = $Purchase_PriceAS + $PurchasePriceAS;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsAS = $AS->a7f1fgbu02s_Quantity + $AS->a7f2fgbu10s_Quantity + $AS->a7f2thbu05s_Quantity + $AS->a7f2debu10s_Quantity + $AS->a7f2exbu11s_Quantity + $AS->a7f2twbu04s_Quantity + $AS->a7f2twbu07s_Quantity + $AS->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsAS = $ReciveTranfer_PcsAS + $ReciveTranferPcsAS;

            $ReciveTranferPriceAS = $ReciveTranferPcsAS * $AS->PriceAvg;
            $ReciveTranfer_PriceAS = $ReciveTranfer_PriceAS + $ReciveTranferPriceAS;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityAS = $AS->returncuses_Quantity;
            $ReturnItem_PCSAS = $ReturnItem_PCSAS + $ReturnItemQuantityAS;

            $ReturnItemPriceAS = $ReturnItemQuantityAS * $NumberAS;
            $ReturnItem_PriceAS = $ReturnItem_PriceAS + $ReturnItemPriceAS;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsAS = $AS->purchase_Quantity + $ReciveTranferPcsAS + $ReturnItemQuantityAS;
            $AllIn_PcsAS = $AllIn_PcsAS + $AllInPcsAS;

            $AllInPriceAS = $PurchasePriceAS + $ReciveTranferPriceAS + $ReturnItemPriceAS;
            $AllIn_PriceAS = $AllIn_PriceAS + $AllInPriceAS;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsAS = $AS->dc1_s_Quantity + $AS->dcp_s_Quantity + $AS->dcy_s_Quantity + $AS->dex_s_Quantity;
            $SendSale_PcsAS = $SendSale_PcsAS + $SendSalePcsAS;

            if ($BackChangePcsAS > 0 && $AllInPcsAS > 0) {
                $SendSalePriceAS = (($AllInPriceAS + $BackChangePriceAS) / ($AllInPcsAS + $BackChangePcsAS)) * $SendSalePcsAS;
                $SendSale_PriceAS = $SendSale_PriceAS + $SendSalePriceAS;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsAS = $AS->a8f1fgbu02s_Quantity + $AS->a8f2fgbu10s_Quantity + $AS->a8f2thbu05s_Quantity + $AS->a8f2debu10s_Quantity + $AS->a8f2exbu11s_Quantity + $AS->a8f2twbu04s_Quantity + $AS->a8f2twbu07s_Quantity + $AS->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsAS = $ReciveTranOut_PcsAS + $ReciveTranOutPcsAS;

            if ($AllInPcsAS > 0 && $BackChangePcsAS > 0) {
                $ReciveTranOutPriceAS = (($AllInPriceAS + $BackChangePriceAS) / ($AllInPcsAS + $BackChangePcsAS)) * $ReciveTranOutPcsAS;
                $ReciveTranOut_PriceAS = $ReciveTranOut_PriceAS + $ReciveTranOutPriceAS;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsAS = $AS->returnitem_Quantity;
            $ReturnStore_PcsAS = $ReturnStore_PcsAS + $ReturnStorePcsAS;

            if ($AllInPcsAS > 0 && $BackChangePcsAS > 0) {
                $ReturnStorePriceAS = (($AllInPriceAS + $BackChangePriceAS) / ($AllInPcsAS + $BackChangePcsAS)) * $ReturnStorePcsAS;
                $ReturnStore_PriceAS = $ReturnStore_PriceAS + $ReturnStorePriceAS;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsAS = $ReturnStorePcsAS + $ReciveTranOutPcsAS + $SendSalePcsAS;
            $AllOut_PcsAS = $AllOut_PcsAS + $AllOutPcsAS;

            $AllOutPriceAS = $SendSale_PriceAS + $ReciveTranOut_PriceAS + $ReturnStore_PriceAS;
            $AllOut_PriceAS = $AllOut_PriceAS + $AllOutPriceAS;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsAS = $BackChangePcsAS + $AllInPcsAS + $AllOutPcsAS;
            $Calculate_PcsAS = $Calculate_PcsAS + $CalculatePcsAS;

            $CalculatePriceAS = $BackChangePriceAS + $AllInPriceAS + $AllOutPriceAS;
            $Calculate_PriceAS = $Calculate_PriceAS + $CalculatePriceAS;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsAS = $AS->item_stock_Quantity;
            $NewCalculate_PcsAS = $NewCalculate_PcsAS + $NewCalculatePcsAS;

            $NewCalculatePriceAS = $AS->item_stock_Amount;
            $NewCalculate_PriceAS = $NewCalculate_PriceAS + $NewCalculatePriceAS;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsAS = $NewCalculatePcsAS - $CalculatePcsAS;
            $Diff_PcsAS = $Diff_PcsAS + $DiffPcsAS;

            $DiffPriceAS = $NewCalculatePriceAS - $CalculatePriceAS;
            $Diff_PriceAS = $Diff_PriceAS + $DiffPriceAS;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsAS = $CalculatePcsAS;
            $NewTotal_PcsAS = $NewTotal_PcsAS + $CalculatePcsAS;

            $NewTotalPriceAS = $NewTotalPcsAS * $AS->PriceAvg;
            $NewTotal_PriceAS = $NewTotal_PriceAS + $NewTotalPriceAS;

            $NewTotalDiffNavAS = $NewTotalPriceAS - $NewCalculatePriceAS;
            $NewTotalDiff_NavAS = $NewTotalDiff_NavAS + $NewTotalDiffNavAS;

            $NewTotalDiffCalAS = $NewTotalPriceAS - $CalculatePriceAS;
            $NewTotalDiff_CalAS = $NewTotalDiff_CalAS + $NewTotalDiffCalAS;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsAS = $AS->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsAS = $a7f1fgbu02s_PcsAS + $a7f1fgbu02sPcsAS;

            $a7f1fgbu02sPriceAS = $a7f1fgbu02sPcsAS * $AS->PriceAvg;
            $a7f1fgbu02s_PriceAS = $a7f1fgbu02s_PriceAS + $a7f1fgbu02sPriceAS;

            $a7f2fgbu10sPcsAS = $AS->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsAS = $a7f2fgbu10s_PcsAS + $a7f2fgbu10sPcsAS;

            $a7f2fgbu10sPriceAS = $a7f2fgbu10sPcsAS * $AS->PriceAvg;
            $a7f2fgbu10s_PriceAS = $a7f2fgbu10s_PriceAS + $a7f2fgbu10sPriceAS;

            $a7f2thbu05sPcsAS = $AS->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsAS = $a7f2thbu05s_PcsAS + $a7f2thbu05sPcsAS;

            $a7f2thbu05sPriceAS = $a7f2thbu05sPcsAS * $AS->PriceAvg;
            $a7f2thbu05s_PriceAS = $a7f2thbu05s_PriceAS + $a7f2thbu05sPriceAS;

            $a7f2debu10sPcsAS = $AS->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsAS = $a7f2debu10s_PcsAS + $a7f2debu10sPcsAS;

            $a7f2debu10sPriceAS = $a7f2debu10sPcsAS * $AS->PriceAvg;
            $a7f2debu10s_PriceAS = $a7f2debu10s_PriceAS + $a7f2debu10sPriceAS;

            $a7f2exbu11sPcsAS = $AS->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsAS = $a7f2exbu11s_PcsAS + $a7f2exbu11sPcsAS;

            $a7f2exbu11sPriceAS = $a7f2exbu11sPcsAS * $AS->PriceAvg;
            $a7f2exbu11s_PriceAS = $a7f2exbu11s_PriceAS + $a7f2exbu11sPriceAS;

            $a7f2twbu04sPcsAS = $AS->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsAS = $a7f2twbu04s_PcsAS + $a7f2twbu04sPcsAS;

            $a7f2twbu04sPriceAS = $a7f2twbu04sPcsAS * $AS->PriceAvg;
            $a7f2twbu04s_PriceAS = $a7f2twbu04s_PriceAS + $a7f2twbu04sPriceAS;

            $a7f2twbu07sPcsAS = $AS->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsAS = $a7f2twbu07s_PcsAS + $a7f2twbu07sPcsAS;

            $a7f2twbu07sPriceAS = $a7f2twbu07sPcsAS * $AS->PriceAvg;
            $a7f2twbu07s_PriceAS = $a7f2twbu07s_PriceAS + $a7f2twbu07sPriceAS;

            $a7f2cebu10sPcsAS = $AS->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsAS = $a7f2cebu10s_PcsAS + $a7f2cebu10sPcsAS;

            $a7f2cebu10sPriceAS = $a7f2cebu10sPcsAS * $AS->PriceAvg;
            $a7f2cebu10s_PriceAS = $a7f2cebu10s_PriceAS + $a7f2cebu10sPriceAS;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsAS = $AS->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsAS = $a8f1fgbu02s_PcsAS + $a8f1fgbu02sPcsAS;

            $a8f1fgbu02sPriceAS = $a8f1fgbu02sPcsAS * $NumberAS;
            $a8f1fgbu02s_PriceAS = $a8f1fgbu02s_PriceAS + $a8f1fgbu02sPriceAS;

            $a8f2fgbu10sPcsAS = $AS->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsAS = $a8f2fgbu10s_PcsAS + $a8f2fgbu10sPcsAS;

            $a8f2fgbu10sPriceAS = $a8f2fgbu10sPcsAS * $NumberAS;
            $a8f2fgbu10s_PriceAS = $a8f2fgbu10s_PriceAS + $a8f2fgbu10sPriceAS;

            $a8f2thbu05sPcsAS = $AS->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsAS = $a8f2thbu05s_PcsAS + $a8f2thbu05sPcsAS;

            $a8f2thbu05sPriceAS = $a8f2thbu05sPcsAS * $NumberAS;
            $a8f2thbu05s_PriceAS = $a8f2thbu05s_PriceAS + $a8f2thbu05sPriceAS;

            $a8f2debu10sPcsAS = $AS->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsAS = $a8f2debu10s_PcsAS + $a8f2debu10sPcsAS;

            $a8f2debu10sPriceAS = $a8f2debu10sPcsAS * $NumberAS;
            $a8f2debu10s_PriceAS = $a8f2debu10s_PriceAS + $a8f2debu10sPriceAS;

            $a8f2exbu11sPcsAS = $AS->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsAS = $a8f2exbu11s_PcsAS + $a8f2exbu11sPcsAS;

            $a8f2exbu11sPriceAS = $a8f2exbu11sPcsAS * $NumberAS;
            $a8f2exbu11s_PriceAS = $a8f2exbu11s_PriceAS + $a8f2exbu11sPriceAS;

            $a8f2twbu04sPcsAS = $AS->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsAS = $a8f2twbu04s_PcsAS + $a8f2twbu04sPcsAS;

            $a8f2twbu04sPriceAS = $a8f2twbu04sPcsAS * $NumberAS;
            $a8f2twbu04s_PriceAS = $a8f2twbu04s_PriceAS + $a8f2twbu04sPriceAS;

            $a8f2twbu07sPcsAS = $AS->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsAS = $a8f2twbu07s_PcsAS + $a8f2twbu07sPcsAS;

            $a8f2twbu07sPriceAS = $a8f2twbu07sPcsAS * $NumberAS;
            $a8f2twbu07s_PriceAS = $a8f2twbu07s_PriceAS + $a8f2twbu07sPriceAS;

            $a8f2cebu10sPcsAS = $AS->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsAS = $a8f2cebu10s_PcsAS + $a8f2cebu10sPcsAS;

            $a8f2cebu10sPriceAS = $a8f2cebu10sPcsAS * $NumberAS;
            $a8f2cebu10s_PriceAS = $a8f2cebu10s_PriceAS + $a8f2cebu10sPriceAS;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsAS = $AS->dc1_s_Quantity;
            $DC1_PcsAS = $DC1_PcsAS + $DC1PcsAS;

            $DC1PriceAS = $DC1PcsAS * $NumberAS;
            $DC1_PriceAS = $DC1_PriceAS + $DC1PriceAS;

            $DCPPcsAS = $AS->dcp_s_Quantity;
            $DCP_PcsAS = $DCP_PcsAS + $DCPPcsAS;

            $DCPPriceAS = $DCPPcsAS * $NumberAS;
            $DCP_PriceAS = $DCP_PriceAS + $DCPPriceAS;

            $DCYPcsAS = $AS->dcy_s_Quantity;
            $DCY_PcsAS = $DCY_PcsAS + $DCYPcsAS;

            $DCYPriceAS = $DCYPcsAS * $NumberAS;
            $DCY_PriceAS = $DCY_PriceAS + $DCYPriceAS;

            $DEXPcsAS = $AS->dex_s_Quantity;
            $DEX_PcsAS = $DEX_PcsAS + $DEXPcsAS;

            $DEXPriceAS = $DEXPcsAS * $NumberAS;
            $DEX_PriceAS = $DEX_PriceAS + $DEXPriceAS;

        }

        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoSTW as $STW) {
            if ($STW->PcsAfter > 0 && $STW->PriceAfter > 0) {
                $NumberSTW = ($STW->PriceAfter / $STW->PcsAfter);
            }else{
                $NumberSTW = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterSTW = $STW->PcsAfter;
            $Pcs_AfterSTW = $Pcs_AfterSTW + $PCSAfterSTW;

            $PriceAfterSTW = $STW->PriceAfter;
            $Price_AfterSTW = $Price_AfterSTW + $PriceAfterSTW;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsSTW = $STW->Po_Quantity;
            $Po_PcsSTW = $Po_PcsSTW + $PoPcsSTW;

            $PoPriceSTW = $STW->PriceAvg * $STW->Po_Quantity;
            $Po_PriceSTW = $Po_PriceSTW + $PoPriceSTW;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsSTW = $STW->Neg_Quantity;
            $Neg_PcsSTW = $Neg_PcsSTW + $NegPcsSTW;


            $NegPriceSTW = $NumberSTW * $STW->Neg_Quantity;
            $Neg_PriceSTW = $Neg_PriceSTW + $NegPriceSTW;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsSTW = $PCSAfterSTW + $PoPcsSTW + $NegPcsSTW;
            $BackChange_PcsSTW = $BackChange_PcsSTW + $BackChangePcsSTW;

            $BackChangePriceSTW = $PriceAfterSTW + $PoPriceSTW + $NegPriceSTW;
            $BackChange_PriceSTW = $BackChange_PriceSTW + $BackChangePriceSTW;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsSTW = $STW->purchase_Quantity;
            $Purchase_PcsSTW = $Purchase_PcsSTW + $PurchasePcsSTW;

            $PurchasePriceSTW = $STW->purchase_Cost;
            $Purchase_PriceSTW = $Purchase_PriceSTW + $PurchasePriceSTW;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsSTW = $STW->a7f1fgbu02s_Quantity + $STW->a7f2fgbu10s_Quantity + $STW->a7f2thbu05s_Quantity + $STW->a7f2debu10s_Quantity + $STW->a7f2exbu11s_Quantity + $STW->a7f2twbu04s_Quantity + $STW->a7f2twbu07s_Quantity + $STW->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsSTW = $ReciveTranfer_PcsSTW + $ReciveTranferPcsSTW;

            $ReciveTranferPriceSTW = $ReciveTranferPcsSTW * $STW->PriceAvg;
            $ReciveTranfer_PriceSTW = $ReciveTranfer_PriceSTW + $ReciveTranferPriceSTW;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantitySTW = $STW->returncuses_Quantity;
            $ReturnItem_PCSSTW = $ReturnItem_PCSSTW + $ReturnItemQuantitySTW;

            $ReturnItemPriceSTW = $ReturnItemQuantitySTW * $NumberSTW;
            $ReturnItem_PriceSTW = $ReturnItem_PriceSTW + $ReturnItemPriceSTW;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsSTW = $STW->purchase_Quantity + $ReciveTranferPcsSTW + $ReturnItemQuantitySTW;
            $AllIn_PcsSTW = $AllIn_PcsSTW + $AllInPcsSTW;

            $AllInPriceSTW = $PurchasePriceSTW + $ReciveTranferPriceSTW + $ReturnItemPriceSTW;
            $AllIn_PriceSTW = $AllIn_PriceSTW + $AllInPriceSTW;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsSTW = $STW->dc1_s_Quantity + $STW->dcp_s_Quantity + $STW->dcy_s_Quantity + $STW->dex_s_Quantity;
            $SendSale_PcsSTW = $SendSale_PcsSTW + $SendSalePcsSTW;

            if ($BackChangePcsSTW > 0 && $AllInPcsSTW > 0) {
                $SendSalePriceSTW = (($AllInPriceSTW + $BackChangePriceSTW) / ($AllInPcsSTW + $BackChangePcsSTW)) * $SendSalePcsSTW;
                $SendSale_PriceSTW = $SendSale_PriceSTW + $SendSalePriceSTW;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsSTW = $STW->a8f1fgbu02s_Quantity + $STW->a8f2fgbu10s_Quantity + $STW->a8f2thbu05s_Quantity + $STW->a8f2debu10s_Quantity + $STW->a8f2exbu11s_Quantity + $STW->a8f2twbu04s_Quantity + $STW->a8f2twbu07s_Quantity + $STW->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsSTW = $ReciveTranOut_PcsSTW + $ReciveTranOutPcsSTW;

            if ($AllInPcsSTW > 0 && $BackChangePcsSTW > 0) {
                $ReciveTranOutPriceSTW = (($AllInPriceSTW + $BackChangePriceSTW) / ($AllInPcsSTW + $BackChangePcsSTW)) * $ReciveTranOutPcsSTW;
                $ReciveTranOut_PriceSTW = $ReciveTranOut_PriceSTW + $ReciveTranOutPriceSTW;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsSTW = $STW->returnitem_Quantity;
            $ReturnStore_PcsSTW = $ReturnStore_PcsSTW + $ReturnStorePcsSTW;

            if ($AllInPcsSTW > 0 && $BackChangePcsSTW > 0) {
                $ReturnStorePriceSTW = (($AllInPriceSTW + $BackChangePriceSTW) / ($AllInPcsSTW + $BackChangePcsSTW)) * $ReturnStorePcsSTW;
                $ReturnStore_PriceSTW = $ReturnStore_PriceSTW + $ReturnStorePriceSTW;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsSTW = $ReturnStorePcsSTW + $ReciveTranOutPcsSTW + $SendSalePcsSTW;
            $AllOut_PcsSTW = $AllOut_PcsSTW + $AllOutPcsSTW;

            $AllOutPriceSTW = $SendSale_PriceSTW + $ReciveTranOut_PriceSTW + $ReturnStore_PriceSTW;
            $AllOut_PriceSTW = $AllOut_PriceSTW + $AllOutPriceSTW;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsSTW = $BackChangePcsSTW + $AllInPcsSTW + $AllOutPcsSTW;
            $Calculate_PcsSTW = $Calculate_PcsSTW + $CalculatePcsSTW;

            $CalculatePriceSTW = $BackChangePriceSTW + $AllInPriceSTW + $AllOutPriceSTW;
            $Calculate_PriceSTW = $Calculate_PriceSTW + $CalculatePriceSTW;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsSTW = $STW->item_stock_Quantity;
            $NewCalculate_PcsSTW = $NewCalculate_PcsSTW + $NewCalculatePcsSTW;

            $NewCalculatePriceSTW = $STW->item_stock_Amount;
            $NewCalculate_PriceSTW = $NewCalculate_PriceSTW + $NewCalculatePriceSTW;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsSTW = $NewCalculatePcsSTW - $CalculatePcsSTW;
            $Diff_PcsSTW = $Diff_PcsSTW + $DiffPcsSTW;

            $DiffPriceSTW = $NewCalculatePriceSTW - $CalculatePriceSTW;
            $Diff_PriceSTW = $Diff_PriceSTW + $DiffPriceSTW;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsSTW = $CalculatePcsSTW;
            $NewTotal_PcsSTW = $NewTotal_PcsSTW + $CalculatePcsSTW;

            $NewTotalPriceSTW = $NewTotalPcsSTW * $STW->PriceAvg;
            $NewTotal_PriceSTW = $NewTotal_PriceSTW + $NewTotalPriceSTW;

            $NewTotalDiffNavSTW = $NewTotalPriceSTW - $NewCalculatePriceSTW;
            $NewTotalDiff_NavSTW = $NewTotalDiff_NavSTW + $NewTotalDiffNavSTW;

            $NewTotalDiffCalSTW = $NewTotalPriceSTW - $CalculatePriceSTW;
            $NewTotalDiff_CalSTW = $NewTotalDiff_CalSTW + $NewTotalDiffCalSTW;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsSTW = $STW->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsSTW = $a7f1fgbu02s_PcsSTW + $a7f1fgbu02sPcsSTW;

            $a7f1fgbu02sPriceSTW = $a7f1fgbu02sPcsSTW * $STW->PriceAvg;
            $a7f1fgbu02s_PriceSTW = $a7f1fgbu02s_PriceSTW + $a7f1fgbu02sPriceSTW;

            $a7f2fgbu10sPcsSTW = $STW->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsSTW = $a7f2fgbu10s_PcsSTW + $a7f2fgbu10sPcsSTW;

            $a7f2fgbu10sPriceSTW = $a7f2fgbu10sPcsSTW * $STW->PriceAvg;
            $a7f2fgbu10s_PriceSTW = $a7f2fgbu10s_PriceSTW + $a7f2fgbu10sPriceSTW;

            $a7f2thbu05sPcsSTW = $STW->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsSTW = $a7f2thbu05s_PcsSTW + $a7f2thbu05sPcsSTW;

            $a7f2thbu05sPriceSTW = $a7f2thbu05sPcsSTW * $STW->PriceAvg;
            $a7f2thbu05s_PriceSTW = $a7f2thbu05s_PriceSTW + $a7f2thbu05sPriceSTW;

            $a7f2debu10sPcsSTW = $STW->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsSTW = $a7f2debu10s_PcsSTW + $a7f2debu10sPcsSTW;

            $a7f2debu10sPriceSTW = $a7f2debu10sPcsSTW * $STW->PriceAvg;
            $a7f2debu10s_PriceSTW = $a7f2debu10s_PriceSTW + $a7f2debu10sPriceSTW;

            $a7f2exbu11sPcsSTW = $STW->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsSTW = $a7f2exbu11s_PcsSTW + $a7f2exbu11sPcsSTW;

            $a7f2exbu11sPriceSTW = $a7f2exbu11sPcsSTW * $STW->PriceAvg;
            $a7f2exbu11s_PriceSTW = $a7f2exbu11s_PriceSTW + $a7f2exbu11sPriceSTW;

            $a7f2twbu04sPcsSTW = $STW->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsSTW = $a7f2twbu04s_PcsSTW + $a7f2twbu04sPcsSTW;

            $a7f2twbu04sPriceSTW = $a7f2twbu04sPcsSTW * $STW->PriceAvg;
            $a7f2twbu04s_PriceSTW = $a7f2twbu04s_PriceSTW + $a7f2twbu04sPriceSTW;

            $a7f2twbu07sPcsSTW = $STW->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsSTW = $a7f2twbu07s_PcsSTW + $a7f2twbu07sPcsSTW;

            $a7f2twbu07sPriceSTW = $a7f2twbu07sPcsSTW * $STW->PriceAvg;
            $a7f2twbu07s_PriceSTW = $a7f2twbu07s_PriceSTW + $a7f2twbu07sPriceSTW;

            $a7f2cebu10sPcsSTW = $STW->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsSTW = $a7f2cebu10s_PcsSTW + $a7f2cebu10sPcsSTW;

            $a7f2cebu10sPriceSTW = $a7f2cebu10sPcsSTW * $STW->PriceAvg;
            $a7f2cebu10s_PriceSTW = $a7f2cebu10s_PriceSTW + $a7f2cebu10sPriceSTW;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsSTW = $STW->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsSTW = $a8f1fgbu02s_PcsSTW + $a8f1fgbu02sPcsSTW;

            $a8f1fgbu02sPriceSTW = $a8f1fgbu02sPcsSTW * $NumberSTW;
            $a8f1fgbu02s_PriceSTW = $a8f1fgbu02s_PriceSTW + $a8f1fgbu02sPriceSTW;

            $a8f2fgbu10sPcsSTW = $STW->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsSTW = $a8f2fgbu10s_PcsSTW + $a8f2fgbu10sPcsSTW;

            $a8f2fgbu10sPriceSTW = $a8f2fgbu10sPcsSTW * $NumberSTW;
            $a8f2fgbu10s_PriceSTW = $a8f2fgbu10s_PriceSTW + $a8f2fgbu10sPriceSTW;

            $a8f2thbu05sPcsSTW = $STW->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsSTW = $a8f2thbu05s_PcsSTW + $a8f2thbu05sPcsSTW;

            $a8f2thbu05sPriceSTW = $a8f2thbu05sPcsSTW * $NumberSTW;
            $a8f2thbu05s_PriceSTW = $a8f2thbu05s_PriceSTW + $a8f2thbu05sPriceSTW;

            $a8f2debu10sPcsSTW = $STW->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsSTW = $a8f2debu10s_PcsSTW + $a8f2debu10sPcsSTW;

            $a8f2debu10sPriceSTW = $a8f2debu10sPcsSTW * $NumberSTW;
            $a8f2debu10s_PriceSTW = $a8f2debu10s_PriceSTW + $a8f2debu10sPriceSTW;

            $a8f2exbu11sPcsSTW = $STW->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsSTW = $a8f2exbu11s_PcsSTW + $a8f2exbu11sPcsSTW;

            $a8f2exbu11sPriceSTW = $a8f2exbu11sPcsSTW * $NumberSTW;
            $a8f2exbu11s_PriceSTW = $a8f2exbu11s_PriceSTW + $a8f2exbu11sPriceSTW;

            $a8f2twbu04sPcsSTW = $STW->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsSTW = $a8f2twbu04s_PcsSTW + $a8f2twbu04sPcsSTW;

            $a8f2twbu04sPriceSTW = $a8f2twbu04sPcsSTW * $NumberSTW;
            $a8f2twbu04s_PriceSTW = $a8f2twbu04s_PriceSTW + $a8f2twbu04sPriceSTW;

            $a8f2twbu07sPcsSTW = $STW->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsSTW = $a8f2twbu07s_PcsSTW + $a8f2twbu07sPcsSTW;

            $a8f2twbu07sPriceSTW = $a8f2twbu07sPcsSTW * $NumberSTW;
            $a8f2twbu07s_PriceSTW = $a8f2twbu07s_PriceSTW + $a8f2twbu07sPriceSTW;

            $a8f2cebu10sPcsSTW = $STW->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsSTW = $a8f2cebu10s_PcsSTW + $a8f2cebu10sPcsSTW;

            $a8f2cebu10sPriceSTW = $a8f2cebu10sPcsSTW * $NumberSTW;
            $a8f2cebu10s_PriceSTW = $a8f2cebu10s_PriceSTW + $a8f2cebu10sPriceSTW;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsSTW = $STW->dc1_s_Quantity;
            $DC1_PcsSTW = $DC1_PcsSTW + $DC1PcsSTW;

            $DC1PriceSTW = $DC1PcsSTW * $NumberSTW;
            $DC1_PriceSTW = $DC1_PriceSTW + $DC1PriceSTW;

            $DCPPcsSTW = $STW->dcp_s_Quantity;
            $DCP_PcsSTW = $DCP_PcsSTW + $DCPPcsSTW;

            $DCPPriceSTW = $DCPPcsSTW * $NumberSTW;
            $DCP_PriceSTW = $DCP_PriceSTW + $DCPPriceSTW;

            $DCYPcsSTW = $STW->dcy_s_Quantity;
            $DCY_PcsSTW = $DCY_PcsSTW + $DCYPcsSTW;

            $DCYPriceSTW = $DCYPcsSTW * $NumberSTW;
            $DCY_PriceSTW = $DCY_PriceSTW + $DCYPriceSTW;

            $DEXPcsSTW = $STW->dex_s_Quantity;
            $DEX_PcsSTW = $DEX_PcsSTW + $DEXPcsSTW;

            $DEXPriceSTW = $DEXPcsSTW * $NumberSTW;
            $DEX_PriceSTW = $DEX_PriceSTW + $DEXPriceSTW;

        }

        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoSLN as $SLN) {
            if ($SLN->PcsAfter > 0 && $SLN->PriceAfter > 0) {
                $NumberSLN = ($SLN->PriceAfter / $SLN->PcsAfter);
            }else{
                $NumberSLN = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterSLN = $SLN->PcsAfter;
            $Pcs_AfterSLN = $Pcs_AfterSLN + $PCSAfterSLN;

            $PriceAfterSLN = $SLN->PriceAfter;
            $Price_AfterSLN = $Price_AfterSLN + $PriceAfterSLN;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsSLN = $SLN->Po_Quantity;
            $Po_PcsSLN = $Po_PcsSLN + $PoPcsSLN;

            $PoPriceSLN = $SLN->PriceAvg * $SLN->Po_Quantity;
            $Po_PriceSLN = $Po_PriceSLN + $PoPriceSLN;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsSLN = $SLN->Neg_Quantity;
            $Neg_PcsSLN = $Neg_PcsSLN + $NegPcsSLN;


            $NegPriceSLN = $NumberSLN * $SLN->Neg_Quantity;
            $Neg_PriceSLN = $Neg_PriceSLN + $NegPriceSLN;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsSLN = $PCSAfterSLN + $PoPcsSLN + $NegPcsSLN;
            $BackChange_PcsSLN = $BackChange_PcsSLN + $BackChangePcsSLN;

            $BackChangePriceSLN = $PriceAfterSLN + $PoPriceSLN + $NegPriceSLN;
            $BackChange_PriceSLN = $BackChange_PriceSLN + $BackChangePriceSLN;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsSLN = $SLN->purchase_Quantity;
            $Purchase_PcsSLN = $Purchase_PcsSLN + $PurchasePcsSLN;

            $PurchasePriceSLN = $SLN->purchase_Cost;
            $Purchase_PriceSLN = $Purchase_PriceSLN + $PurchasePriceSLN;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsSLN = $SLN->a7f1fgbu02s_Quantity + $SLN->a7f2fgbu10s_Quantity + $SLN->a7f2thbu05s_Quantity + $SLN->a7f2debu10s_Quantity + $SLN->a7f2exbu11s_Quantity + $SLN->a7f2twbu04s_Quantity + $SLN->a7f2twbu07s_Quantity + $SLN->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsSLN = $ReciveTranfer_PcsSLN + $ReciveTranferPcsSLN;

            $ReciveTranferPriceSLN = $ReciveTranferPcsSLN * $SLN->PriceAvg;
            $ReciveTranfer_PriceSLN = $ReciveTranfer_PriceSLN + $ReciveTranferPriceSLN;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantitySLN = $SLN->returncuses_Quantity;
            $ReturnItem_PCSSLN = $ReturnItem_PCSSLN + $ReturnItemQuantitySLN;

            $ReturnItemPriceSLN = $ReturnItemQuantitySLN * $NumberSLN;
            $ReturnItem_PriceSLN = $ReturnItem_PriceSLN + $ReturnItemPriceSLN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsSLN = $SLN->purchase_Quantity + $ReciveTranferPcsSLN + $ReturnItemQuantitySLN;
            $AllIn_PcsSLN = $AllIn_PcsSLN + $AllInPcsSLN;

            $AllInPriceSLN = $PurchasePriceSLN + $ReciveTranferPriceSLN + $ReturnItemPriceSLN;
            $AllIn_PriceSLN = $AllIn_PriceSLN + $AllInPriceSLN;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsSLN = $SLN->dc1_s_Quantity + $SLN->dcp_s_Quantity + $SLN->dcy_s_Quantity + $SLN->dex_s_Quantity;
            $SendSale_PcsSLN = $SendSale_PcsSLN + $SendSalePcsSLN;

            if ($BackChangePcsSLN > 0 && $AllInPcsSLN > 0) {
                $SendSalePriceSLN = (($AllInPriceSLN + $BackChangePriceSLN) / ($AllInPcsSLN + $BackChangePcsSLN)) * $SendSalePcsSLN;
                $SendSale_PriceSLN = $SendSale_PriceSLN + $SendSalePriceSLN;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsSLN = $SLN->a8f1fgbu02s_Quantity + $SLN->a8f2fgbu10s_Quantity + $SLN->a8f2thbu05s_Quantity + $SLN->a8f2debu10s_Quantity + $SLN->a8f2exbu11s_Quantity + $SLN->a8f2twbu04s_Quantity + $SLN->a8f2twbu07s_Quantity + $SLN->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsSLN = $ReciveTranOut_PcsSLN + $ReciveTranOutPcsSLN;

            if ($AllInPcsSLN > 0 && $BackChangePcsSLN > 0) {
                $ReciveTranOutPriceSLN = (($AllInPriceSLN + $BackChangePriceSLN) / ($AllInPcsSLN + $BackChangePcsSLN)) * $ReciveTranOutPcsSLN;
                $ReciveTranOut_PriceSLN = $ReciveTranOut_PriceSLN + $ReciveTranOutPriceSLN;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsSLN = $SLN->returnitem_Quantity;
            $ReturnStore_PcsSLN = $ReturnStore_PcsSLN + $ReturnStorePcsSLN;

            if ($AllInPcsSLN > 0 && $BackChangePcsSLN > 0) {
                $ReturnStorePriceSLN = (($AllInPriceSLN + $BackChangePriceSLN) / ($AllInPcsSLN + $BackChangePcsSLN)) * $ReturnStorePcsSLN;
                $ReturnStore_PriceSLN = $ReturnStore_PriceSLN + $ReturnStorePriceSLN;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsSLN = $ReturnStorePcsSLN + $ReciveTranOutPcsSLN + $SendSalePcsSLN;
            $AllOut_PcsSLN = $AllOut_PcsSLN + $AllOutPcsSLN;

            $AllOutPriceSLN = $SendSale_PriceSLN + $ReciveTranOut_PriceSLN + $ReturnStore_PriceSLN;
            $AllOut_PriceSLN = $AllOut_PriceSLN + $AllOutPriceSLN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsSLN = $BackChangePcsSLN + $AllInPcsSLN + $AllOutPcsSLN;
            $Calculate_PcsSLN = $Calculate_PcsSLN + $CalculatePcsSLN;

            $CalculatePriceSLN = $BackChangePriceSLN + $AllInPriceSLN + $AllOutPriceSLN;
            $Calculate_PriceSLN = $Calculate_PriceSLN + $CalculatePriceSLN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsSLN = $SLN->item_stock_Quantity;
            $NewCalculate_PcsSLN = $NewCalculate_PcsSLN + $NewCalculatePcsSLN;

            $NewCalculatePriceSLN = $SLN->item_stock_Amount;
            $NewCalculate_PriceSLN = $NewCalculate_PriceSLN + $NewCalculatePriceSLN;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsSLN = $NewCalculatePcsSLN - $CalculatePcsSLN;
            $Diff_PcsSLN = $Diff_PcsSLN + $DiffPcsSLN;

            $DiffPriceSLN = $NewCalculatePriceSLN - $CalculatePriceSLN;
            $Diff_PriceSLN = $Diff_PriceSLN + $DiffPriceSLN;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsSLN = $CalculatePcsSLN;
            $NewTotal_PcsSLN = $NewTotal_PcsSLN + $CalculatePcsSLN;

            $NewTotalPriceSLN = $NewTotalPcsSLN * $SLN->PriceAvg;
            $NewTotal_PriceSLN = $NewTotal_PriceSLN + $NewTotalPriceSLN;

            $NewTotalDiffNavSLN = $NewTotalPriceSLN - $NewCalculatePriceSLN;
            $NewTotalDiff_NavSLN = $NewTotalDiff_NavSLN + $NewTotalDiffNavSLN;

            $NewTotalDiffCalSLN = $NewTotalPriceSLN - $CalculatePriceSLN;
            $NewTotalDiff_CalSLN = $NewTotalDiff_CalSLN + $NewTotalDiffCalSLN;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsSLN = $SLN->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsSLN = $a7f1fgbu02s_PcsSLN + $a7f1fgbu02sPcsSLN;

            $a7f1fgbu02sPriceSLN = $a7f1fgbu02sPcsSLN * $SLN->PriceAvg;
            $a7f1fgbu02s_PriceSLN = $a7f1fgbu02s_PriceSLN + $a7f1fgbu02sPriceSLN;

            $a7f2fgbu10sPcsSLN = $SLN->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsSLN = $a7f2fgbu10s_PcsSLN + $a7f2fgbu10sPcsSLN;

            $a7f2fgbu10sPriceSLN = $a7f2fgbu10sPcsSLN * $SLN->PriceAvg;
            $a7f2fgbu10s_PriceSLN = $a7f2fgbu10s_PriceSLN + $a7f2fgbu10sPriceSLN;

            $a7f2thbu05sPcsSLN = $SLN->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsSLN = $a7f2thbu05s_PcsSLN + $a7f2thbu05sPcsSLN;

            $a7f2thbu05sPriceSLN = $a7f2thbu05sPcsSLN * $SLN->PriceAvg;
            $a7f2thbu05s_PriceSLN = $a7f2thbu05s_PriceSLN + $a7f2thbu05sPriceSLN;

            $a7f2debu10sPcsSLN = $SLN->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsSLN = $a7f2debu10s_PcsSLN + $a7f2debu10sPcsSLN;

            $a7f2debu10sPriceSLN = $a7f2debu10sPcsSLN * $SLN->PriceAvg;
            $a7f2debu10s_PriceSLN = $a7f2debu10s_PriceSLN + $a7f2debu10sPriceSLN;

            $a7f2exbu11sPcsSLN = $SLN->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsSLN = $a7f2exbu11s_PcsSLN + $a7f2exbu11sPcsSLN;

            $a7f2exbu11sPriceSLN = $a7f2exbu11sPcsSLN * $SLN->PriceAvg;
            $a7f2exbu11s_PriceSLN = $a7f2exbu11s_PriceSLN + $a7f2exbu11sPriceSLN;

            $a7f2twbu04sPcsSLN = $SLN->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsSLN = $a7f2twbu04s_PcsSLN + $a7f2twbu04sPcsSLN;

            $a7f2twbu04sPriceSLN = $a7f2twbu04sPcsSLN * $SLN->PriceAvg;
            $a7f2twbu04s_PriceSLN = $a7f2twbu04s_PriceSLN + $a7f2twbu04sPriceSLN;

            $a7f2twbu07sPcsSLN = $SLN->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsSLN = $a7f2twbu07s_PcsSLN + $a7f2twbu07sPcsSLN;

            $a7f2twbu07sPriceSLN = $a7f2twbu07sPcsSLN * $SLN->PriceAvg;
            $a7f2twbu07s_PriceSLN = $a7f2twbu07s_PriceSLN + $a7f2twbu07sPriceSLN;

            $a7f2cebu10sPcsSLN = $SLN->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsSLN = $a7f2cebu10s_PcsSLN + $a7f2cebu10sPcsSLN;

            $a7f2cebu10sPriceSLN = $a7f2cebu10sPcsSLN * $SLN->PriceAvg;
            $a7f2cebu10s_PriceSLN = $a7f2cebu10s_PriceSLN + $a7f2cebu10sPriceSLN;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsSLN = $SLN->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsSLN = $a8f1fgbu02s_PcsSLN + $a8f1fgbu02sPcsSLN;

            $a8f1fgbu02sPriceSLN = $a8f1fgbu02sPcsSLN * $NumberSLN;
            $a8f1fgbu02s_PriceSLN = $a8f1fgbu02s_PriceSLN + $a8f1fgbu02sPriceSLN;

            $a8f2fgbu10sPcsSLN = $SLN->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsSLN = $a8f2fgbu10s_PcsSLN + $a8f2fgbu10sPcsSLN;

            $a8f2fgbu10sPriceSLN = $a8f2fgbu10sPcsSLN * $NumberSLN;
            $a8f2fgbu10s_PriceSLN = $a8f2fgbu10s_PriceSLN + $a8f2fgbu10sPriceSLN;

            $a8f2thbu05sPcsSLN = $SLN->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsSLN = $a8f2thbu05s_PcsSLN + $a8f2thbu05sPcsSLN;

            $a8f2thbu05sPriceSLN = $a8f2thbu05sPcsSLN * $NumberSLN;
            $a8f2thbu05s_PriceSLN = $a8f2thbu05s_PriceSLN + $a8f2thbu05sPriceSLN;

            $a8f2debu10sPcsSLN = $SLN->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsSLN = $a8f2debu10s_PcsSLN + $a8f2debu10sPcsSLN;

            $a8f2debu10sPriceSLN = $a8f2debu10sPcsSLN * $NumberSLN;
            $a8f2debu10s_PriceSLN = $a8f2debu10s_PriceSLN + $a8f2debu10sPriceSLN;

            $a8f2exbu11sPcsSLN = $SLN->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsSLN = $a8f2exbu11s_PcsSLN + $a8f2exbu11sPcsSLN;

            $a8f2exbu11sPriceSLN = $a8f2exbu11sPcsSLN * $NumberSLN;
            $a8f2exbu11s_PriceSLN = $a8f2exbu11s_PriceSLN + $a8f2exbu11sPriceSLN;

            $a8f2twbu04sPcsSLN = $SLN->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsSLN = $a8f2twbu04s_PcsSLN + $a8f2twbu04sPcsSLN;

            $a8f2twbu04sPriceSLN = $a8f2twbu04sPcsSLN * $NumberSLN;
            $a8f2twbu04s_PriceSLN = $a8f2twbu04s_PriceSLN + $a8f2twbu04sPriceSLN;

            $a8f2twbu07sPcsSLN = $SLN->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsSLN = $a8f2twbu07s_PcsSLN + $a8f2twbu07sPcsSLN;

            $a8f2twbu07sPriceSLN = $a8f2twbu07sPcsSLN * $NumberSLN;
            $a8f2twbu07s_PriceSLN = $a8f2twbu07s_PriceSLN + $a8f2twbu07sPriceSLN;

            $a8f2cebu10sPcsSLN = $SLN->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsSLN = $a8f2cebu10s_PcsSLN + $a8f2cebu10sPcsSLN;

            $a8f2cebu10sPriceSLN = $a8f2cebu10sPcsSLN * $NumberSLN;
            $a8f2cebu10s_PriceSLN = $a8f2cebu10s_PriceSLN + $a8f2cebu10sPriceSLN;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsSLN = $SLN->dc1_s_Quantity;
            $DC1_PcsSLN = $DC1_PcsSLN + $DC1PcsSLN;

            $DC1PriceSLN = $DC1PcsSLN * $NumberSLN;
            $DC1_PriceSLN = $DC1_PriceSLN + $DC1PriceSLN;

            $DCPPcsSLN = $SLN->dcp_s_Quantity;
            $DCP_PcsSLN = $DCP_PcsSLN + $DCPPcsSLN;

            $DCPPriceSLN = $DCPPcsSLN * $NumberSLN;
            $DCP_PriceSLN = $DCP_PriceSLN + $DCPPriceSLN;

            $DCYPcsSLN = $SLN->dcy_s_Quantity;
            $DCY_PcsSLN = $DCY_PcsSLN + $DCYPcsSLN;

            $DCYPriceSLN = $DCYPcsSLN * $NumberSLN;
            $DCY_PriceSLN = $DCY_PriceSLN + $DCYPriceSLN;

            $DEXPcsSLN = $SLN->dex_s_Quantity;
            $DEX_PcsSLN = $DEX_PcsSLN + $DEXPcsSLN;

            $DEXPriceSLN = $DEXPcsSLN * $NumberSLN;
            $DEX_PriceSLN = $DEX_PriceSLN + $DEXPriceSLN;
        }

        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoSFN as $SFN) {
            if ($SFN->PcsAfter > 0 && $SFN->PriceAfter > 0) {
                $NumberSFN = ($SFN->PriceAfter / $SFN->PcsAfter);
            }else{
                $NumberSFN = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterSFN = $SFN->PcsAfter;
            $Pcs_AfterSFN = $Pcs_AfterSFN + $PCSAfterSFN;

            $PriceAfterSFN = $SFN->PriceAfter;
            $Price_AfterSFN = $Price_AfterSFN + $PriceAfterSFN;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsSFN = $SFN->Po_Quantity;
            $Po_PcsSFN = $Po_PcsSFN + $PoPcsSFN;

            $PoPriceSFN = $SFN->PriceAvg * $SFN->Po_Quantity;
            $Po_PriceSFN = $Po_PriceSFN + $PoPriceSFN;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsSFN = $SFN->Neg_Quantity;
            $Neg_PcsSFN = $Neg_PcsSFN + $NegPcsSFN;


            $NegPriceSFN = $NumberSFN * $SFN->Neg_Quantity;
            $Neg_PriceSFN = $Neg_PriceSFN + $NegPriceSFN;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsSFN = $PCSAfterSFN + $PoPcsSFN + $NegPcsSFN;
            $BackChange_PcsSFN = $BackChange_PcsSFN + $BackChangePcsSFN;

            $BackChangePriceSFN = $PriceAfterSFN + $PoPriceSFN + $NegPriceSFN;
            $BackChange_PriceSFN = $BackChange_PriceSFN + $BackChangePriceSFN;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsSFN = $SFN->purchase_Quantity;
            $Purchase_PcsSFN = $Purchase_PcsSFN + $PurchasePcsSFN;

            $PurchasePriceSFN = $SFN->purchase_Cost;
            $Purchase_PriceSFN = $Purchase_PriceSFN + $PurchasePriceSFN;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsSFN = $SFN->a7f1fgbu02s_Quantity + $SFN->a7f2fgbu10s_Quantity + $SFN->a7f2thbu05s_Quantity + $SFN->a7f2debu10s_Quantity + $SFN->a7f2exbu11s_Quantity + $SFN->a7f2twbu04s_Quantity + $SFN->a7f2twbu07s_Quantity + $SFN->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsSFN = $ReciveTranfer_PcsSFN + $ReciveTranferPcsSFN;

            $ReciveTranferPriceSFN = $ReciveTranferPcsSFN * $SFN->PriceAvg;
            $ReciveTranfer_PriceSFN = $ReciveTranfer_PriceSFN + $ReciveTranferPriceSFN;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantitySFN = $SFN->returncuses_Quantity;
            $ReturnItem_PCSSFN = $ReturnItem_PCSSFN + $ReturnItemQuantitySFN;

            $ReturnItemPriceSFN = $ReturnItemQuantitySFN * $NumberSFN;
            $ReturnItem_PriceSFN = $ReturnItem_PriceSFN + $ReturnItemPriceSFN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsSFN = $SFN->purchase_Quantity + $ReciveTranferPcsSFN + $ReturnItemQuantitySFN;
            $AllIn_PcsSFN = $AllIn_PcsSFN + $AllInPcsSFN;

            $AllInPriceSFN = $PurchasePriceSFN + $ReciveTranferPriceSFN + $ReturnItemPriceSFN;
            $AllIn_PriceSFN = $AllIn_PriceSFN + $AllInPriceSFN;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsSFN = $SFN->dc1_s_Quantity + $SFN->dcp_s_Quantity + $SFN->dcy_s_Quantity + $SFN->dex_s_Quantity;
            $SendSale_PcsSFN = $SendSale_PcsSFN + $SendSalePcsSFN;

            if ($BackChangePcsSFN > 0 && $AllInPcsSFN > 0) {
                $SendSalePriceSFN = (($AllInPriceSFN + $BackChangePriceSFN) / ($AllInPcsSFN + $BackChangePcsSFN)) * $SendSalePcsSFN;
                $SendSale_PriceSFN = $SendSale_PriceSFN + $SendSalePriceSFN;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsSFN = $SFN->a8f1fgbu02s_Quantity + $SFN->a8f2fgbu10s_Quantity + $SFN->a8f2thbu05s_Quantity + $SFN->a8f2debu10s_Quantity + $SFN->a8f2exbu11s_Quantity + $SFN->a8f2twbu04s_Quantity + $SFN->a8f2twbu07s_Quantity + $SFN->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsSFN = $ReciveTranOut_PcsSFN + $ReciveTranOutPcsSFN;

            if ($AllInPcsSFN > 0 && $BackChangePcsSFN > 0) {
                $ReciveTranOutPriceSFN = (($AllInPriceSFN + $BackChangePriceSFN) / ($AllInPcsSFN + $BackChangePcsSFN)) * $ReciveTranOutPcsSFN;
                $ReciveTranOut_PriceSFN = $ReciveTranOut_PriceSFN + $ReciveTranOutPriceSFN;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsSFN = $SFN->returnitem_Quantity;
            $ReturnStore_PcsSFN = $ReturnStore_PcsSFN + $ReturnStorePcsSFN;

            if ($AllInPcsSFN > 0 && $BackChangePcsSFN > 0) {
                $ReturnStorePriceSFN = (($AllInPriceSFN + $BackChangePriceSFN) / ($AllInPcsSFN + $BackChangePcsSFN)) * $ReturnStorePcsSFN;
                $ReturnStore_PriceSFN = $ReturnStore_PriceSFN + $ReturnStorePriceSFN;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsSFN = $ReturnStorePcsSFN + $ReciveTranOutPcsSFN + $SendSalePcsSFN;
            $AllOut_PcsSFN = $AllOut_PcsSFN + $AllOutPcsSFN;

            $AllOutPriceSFN = $SendSale_PriceSFN + $ReciveTranOut_PriceSFN + $ReturnStore_PriceSFN;
            $AllOut_PriceSFN = $AllOut_PriceSFN + $AllOutPriceSFN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsSFN = $BackChangePcsSFN + $AllInPcsSFN + $AllOutPcsSFN;
            $Calculate_PcsSFN = $Calculate_PcsSFN + $CalculatePcsSFN;

            $CalculatePriceSFN = $BackChangePriceSFN + $AllInPriceSFN + $AllOutPriceSFN;
            $Calculate_PriceSFN = $Calculate_PriceSFN + $CalculatePriceSFN;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsSFN = $SFN->item_stock_Quantity;
            $NewCalculate_PcsSFN = $NewCalculate_PcsSFN + $NewCalculatePcsSFN;

            $NewCalculatePriceSFN = $SFN->item_stock_Amount;
            $NewCalculate_PriceSFN = $NewCalculate_PriceSFN + $NewCalculatePriceSFN;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsSFN = $NewCalculatePcsSFN - $CalculatePcsSFN;
            $Diff_PcsSFN = $Diff_PcsSFN + $DiffPcsSFN;

            $DiffPriceSFN = $NewCalculatePriceSFN - $CalculatePriceSFN;
            $Diff_PriceSFN = $Diff_PriceSFN + $DiffPriceSFN;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsSFN = $CalculatePcsSFN;
            $NewTotal_PcsSFN = $NewTotal_PcsSFN + $CalculatePcsSFN;

            $NewTotalPriceSFN = $NewTotalPcsSFN * $SFN->PriceAvg;
            $NewTotal_PriceSFN = $NewTotal_PriceSFN + $NewTotalPriceSFN;

            $NewTotalDiffNavSFN = $NewTotalPriceSFN - $NewCalculatePriceSFN;
            $NewTotalDiff_NavSFN = $NewTotalDiff_NavSFN + $NewTotalDiffNavSFN;

            $NewTotalDiffCalSFN = $NewTotalPriceSFN - $CalculatePriceSFN;
            $NewTotalDiff_CalSFN = $NewTotalDiff_CalSFN + $NewTotalDiffCalSFN;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsSFN = $SFN->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsSFN = $a7f1fgbu02s_PcsSFN + $a7f1fgbu02sPcsSFN;

            $a7f1fgbu02sPriceSFN = $a7f1fgbu02sPcsSFN * $SFN->PriceAvg;
            $a7f1fgbu02s_PriceSFN = $a7f1fgbu02s_PriceSFN + $a7f1fgbu02sPriceSFN;

            $a7f2fgbu10sPcsSFN = $SFN->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsSFN = $a7f2fgbu10s_PcsSFN + $a7f2fgbu10sPcsSFN;

            $a7f2fgbu10sPriceSFN = $a7f2fgbu10sPcsSFN * $SFN->PriceAvg;
            $a7f2fgbu10s_PriceSFN = $a7f2fgbu10s_PriceSFN + $a7f2fgbu10sPriceSFN;

            $a7f2thbu05sPcsSFN = $SFN->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsSFN = $a7f2thbu05s_PcsSFN + $a7f2thbu05sPcsSFN;

            $a7f2thbu05sPriceSFN = $a7f2thbu05sPcsSFN * $SFN->PriceAvg;
            $a7f2thbu05s_PriceSFN = $a7f2thbu05s_PriceSFN + $a7f2thbu05sPriceSFN;

            $a7f2debu10sPcsSFN = $SFN->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsSFN = $a7f2debu10s_PcsSFN + $a7f2debu10sPcsSFN;

            $a7f2debu10sPriceSFN = $a7f2debu10sPcsSFN * $SFN->PriceAvg;
            $a7f2debu10s_PriceSFN = $a7f2debu10s_PriceSFN + $a7f2debu10sPriceSFN;

            $a7f2exbu11sPcsSFN = $SFN->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsSFN = $a7f2exbu11s_PcsSFN + $a7f2exbu11sPcsSFN;

            $a7f2exbu11sPriceSFN = $a7f2exbu11sPcsSFN * $SFN->PriceAvg;
            $a7f2exbu11s_PriceSFN = $a7f2exbu11s_PriceSFN + $a7f2exbu11sPriceSFN;

            $a7f2twbu04sPcsSFN = $SFN->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsSFN = $a7f2twbu04s_PcsSFN + $a7f2twbu04sPcsSFN;

            $a7f2twbu04sPriceSFN = $a7f2twbu04sPcsSFN * $SFN->PriceAvg;
            $a7f2twbu04s_PriceSFN = $a7f2twbu04s_PriceSFN + $a7f2twbu04sPriceSFN;

            $a7f2twbu07sPcsSFN = $SFN->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsSFN = $a7f2twbu07s_PcsSFN + $a7f2twbu07sPcsSFN;

            $a7f2twbu07sPriceSFN = $a7f2twbu07sPcsSFN * $SFN->PriceAvg;
            $a7f2twbu07s_PriceSFN = $a7f2twbu07s_PriceSFN + $a7f2twbu07sPriceSFN;

            $a7f2cebu10sPcsSFN = $SFN->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsSFN = $a7f2cebu10s_PcsSFN + $a7f2cebu10sPcsSFN;

            $a7f2cebu10sPriceSFN = $a7f2cebu10sPcsSFN * $SFN->PriceAvg;
            $a7f2cebu10s_PriceSFN = $a7f2cebu10s_PriceSFN + $a7f2cebu10sPriceSFN;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsSFN = $SFN->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsSFN = $a8f1fgbu02s_PcsSFN + $a8f1fgbu02sPcsSFN;

            $a8f1fgbu02sPriceSFN = $a8f1fgbu02sPcsSFN * $NumberSFN;
            $a8f1fgbu02s_PriceSFN = $a8f1fgbu02s_PriceSFN + $a8f1fgbu02sPriceSFN;

            $a8f2fgbu10sPcsSFN = $SFN->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsSFN = $a8f2fgbu10s_PcsSFN + $a8f2fgbu10sPcsSFN;

            $a8f2fgbu10sPriceSFN = $a8f2fgbu10sPcsSFN * $NumberSFN;
            $a8f2fgbu10s_PriceSFN = $a8f2fgbu10s_PriceSFN + $a8f2fgbu10sPriceSFN;

            $a8f2thbu05sPcsSFN = $SFN->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsSFN = $a8f2thbu05s_PcsSFN + $a8f2thbu05sPcsSFN;

            $a8f2thbu05sPriceSFN = $a8f2thbu05sPcsSFN * $NumberSFN;
            $a8f2thbu05s_PriceSFN = $a8f2thbu05s_PriceSFN + $a8f2thbu05sPriceSFN;

            $a8f2debu10sPcsSFN = $SFN->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsSFN = $a8f2debu10s_PcsSFN + $a8f2debu10sPcsSFN;

            $a8f2debu10sPriceSFN = $a8f2debu10sPcsSFN * $NumberSFN;
            $a8f2debu10s_PriceSFN = $a8f2debu10s_PriceSFN + $a8f2debu10sPriceSFN;

            $a8f2exbu11sPcsSFN = $SFN->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsSFN = $a8f2exbu11s_PcsSFN + $a8f2exbu11sPcsSFN;

            $a8f2exbu11sPriceSFN = $a8f2exbu11sPcsSFN * $NumberSFN;
            $a8f2exbu11s_PriceSFN = $a8f2exbu11s_PriceSFN + $a8f2exbu11sPriceSFN;

            $a8f2twbu04sPcsSFN = $SFN->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsSFN = $a8f2twbu04s_PcsSFN + $a8f2twbu04sPcsSFN;

            $a8f2twbu04sPriceSFN = $a8f2twbu04sPcsSFN * $NumberSFN;
            $a8f2twbu04s_PriceSFN = $a8f2twbu04s_PriceSFN + $a8f2twbu04sPriceSFN;

            $a8f2twbu07sPcsSFN = $SFN->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsSFN = $a8f2twbu07s_PcsSFN + $a8f2twbu07sPcsSFN;

            $a8f2twbu07sPriceSFN = $a8f2twbu07sPcsSFN * $NumberSFN;
            $a8f2twbu07s_PriceSFN = $a8f2twbu07s_PriceSFN + $a8f2twbu07sPriceSFN;

            $a8f2cebu10sPcsSFN = $SFN->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsSFN = $a8f2cebu10s_PcsSFN + $a8f2cebu10sPcsSFN;

            $a8f2cebu10sPriceSFN = $a8f2cebu10sPcsSFN * $NumberSFN;
            $a8f2cebu10s_PriceSFN = $a8f2cebu10s_PriceSFN + $a8f2cebu10sPriceSFN;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsSFN = $SFN->dc1_s_Quantity;
            $DC1_PcsSFN = $DC1_PcsSFN + $DC1PcsSFN;

            $DC1PriceSFN = $DC1PcsSFN * $NumberSFN;
            $DC1_PriceSFN = $DC1_PriceSFN + $DC1PriceSFN;

            $DCPPcsSFN = $SFN->dcp_s_Quantity;
            $DCP_PcsSFN = $DCP_PcsSFN + $DCPPcsSFN;

            $DCPPriceSFN = $DCPPcsSFN * $NumberSFN;
            $DCP_PriceSFN = $DCP_PriceSFN + $DCPPriceSFN;

            $DCYPcsSFN = $SFN->dcy_s_Quantity;
            $DCY_PcsSFN = $DCY_PcsSFN + $DCYPcsSFN;

            $DCYPriceSFN = $DCYPcsSFN * $NumberSFN;
            $DCY_PriceSFN = $DCY_PriceSFN + $DCYPriceSFN;

            $DEXPcsSFN = $SFN->dex_s_Quantity;
            $DEX_PcsSFN = $DEX_PcsSFN + $DEXPcsSFN;

            $DEXPriceSFN = $DEXPcsSFN * $NumberSFN;
            $DEX_PriceSFN = $DEX_PriceSFN + $DEXPriceSFN;
        }

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoSMT as $SMT) {
            if ($SMT->PcsAfter > 0 && $SMT->PriceAfter > 0) {
                $NumberSMT = ($SMT->PriceAfter / $SMT->PcsAfter);
            }else{
                $NumberSMT = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterSMT = $SMT->PcsAfter;
            $Pcs_AfterSMT = $Pcs_AfterSMT + $PCSAfterSMT;

            $PriceAfterSMT = $SMT->PriceAfter;
            $Price_AfterSMT = $Price_AfterSMT + $PriceAfterSMT;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsSMT = $SMT->Po_Quantity;
            $Po_PcsSMT = $Po_PcsSMT + $PoPcsSMT;

            $PoPriceSMT = $SMT->PriceAvg * $SMT->Po_Quantity;
            $Po_PriceSMT = $Po_PriceSMT + $PoPriceSMT;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsSMT = $SMT->Neg_Quantity;
            $Neg_PcsSMT = $Neg_PcsSMT + $NegPcsSMT;


            $NegPriceSMT = $NumberSMT * $SMT->Neg_Quantity;
            $Neg_PriceSMT = $Neg_PriceSMT + $NegPriceSMT;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsSMT = $PCSAfterSMT + $PoPcsSMT + $NegPcsSMT;
            $BackChange_PcsSMT = $BackChange_PcsSMT + $BackChangePcsSMT;

            $BackChangePriceSMT = $PriceAfterSMT + $PoPriceSMT + $NegPriceSMT;
            $BackChange_PriceSMT = $BackChange_PriceSMT + $BackChangePriceSMT;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsSMT = $SMT->purchase_Quantity;
            $Purchase_PcsSMT = $Purchase_PcsSMT + $PurchasePcsSMT;

            $PurchasePriceSMT = $SMT->purchase_Cost;
            $Purchase_PriceSMT = $Purchase_PriceSMT + $PurchasePriceSMT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsSMT = $SMT->a7f1fgbu02s_Quantity + $SMT->a7f2fgbu10s_Quantity + $SMT->a7f2thbu05s_Quantity + $SMT->a7f2debu10s_Quantity + $SMT->a7f2exbu11s_Quantity + $SMT->a7f2twbu04s_Quantity + $SMT->a7f2twbu07s_Quantity + $SMT->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsSMT = $ReciveTranfer_PcsSMT + $ReciveTranferPcsSMT;

            $ReciveTranferPriceSMT = $ReciveTranferPcsSMT * $SMT->PriceAvg;
            $ReciveTranfer_PriceSMT = $ReciveTranfer_PriceSMT + $ReciveTranferPriceSMT;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantitySMT = $SMT->returncuses_Quantity;
            $ReturnItem_PCSSMT = $ReturnItem_PCSSMT + $ReturnItemQuantitySMT;

            $ReturnItemPriceSMT = $ReturnItemQuantitySMT * $NumberSMT;
            $ReturnItem_PriceSMT = $ReturnItem_PriceSMT + $ReturnItemPriceSMT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsSMT = $SMT->purchase_Quantity + $ReciveTranferPcsSMT + $ReturnItemQuantitySMT;
            $AllIn_PcsSMT = $AllIn_PcsSMT + $AllInPcsSMT;

            $AllInPriceSMT = $PurchasePriceSMT + $ReciveTranferPriceSMT + $ReturnItemPriceSMT;
            $AllIn_PriceSMT = $AllIn_PriceSMT + $AllInPriceSMT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsSMT = $SMT->dc1_s_Quantity + $SMT->dcp_s_Quantity + $SMT->dcy_s_Quantity + $SMT->dex_s_Quantity;
            $SendSale_PcsSMT = $SendSale_PcsSMT + $SendSalePcsSMT;

            if ($BackChangePcsSMT > 0 && $AllInPcsSMT > 0) {
                $SendSalePriceSMT = (($AllInPriceSMT + $BackChangePriceSMT) / ($AllInPcsSMT + $BackChangePcsSMT)) * $SendSalePcsSMT;
                $SendSale_PriceSMT = $SendSale_PriceSMT + $SendSalePriceSMT;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsSMT = $SMT->a8f1fgbu02s_Quantity + $SMT->a8f2fgbu10s_Quantity + $SMT->a8f2thbu05s_Quantity + $SMT->a8f2debu10s_Quantity + $SMT->a8f2exbu11s_Quantity + $SMT->a8f2twbu04s_Quantity + $SMT->a8f2twbu07s_Quantity + $SMT->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsSMT = $ReciveTranOut_PcsSMT + $ReciveTranOutPcsSMT;

            if ($AllInPcsSMT > 0 && $BackChangePcsSMT > 0) {
                $ReciveTranOutPriceSMT = (($AllInPriceSMT + $BackChangePriceSMT) / ($AllInPcsSMT + $BackChangePcsSMT)) * $ReciveTranOutPcsSMT;
                $ReciveTranOut_PriceSMT = $ReciveTranOut_PriceSMT + $ReciveTranOutPriceSMT;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsSMT = $SMT->returnitem_Quantity;
            $ReturnStore_PcsSMT = $ReturnStore_PcsSMT + $ReturnStorePcsSMT;

            if ($AllInPcsSMT > 0 && $BackChangePcsSMT > 0) {
                $ReturnStorePriceSMT = (($AllInPriceSMT + $BackChangePriceSMT) / ($AllInPcsSMT + $BackChangePcsSMT)) * $ReturnStorePcsSMT;
                $ReturnStore_PriceSMT = $ReturnStore_PriceSMT + $ReturnStorePriceSMT;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsSMT = $ReturnStorePcsSMT + $ReciveTranOutPcsSMT + $SendSalePcsSMT;
            $AllOut_PcsSMT = $AllOut_PcsSMT + $AllOutPcsSMT;

            $AllOutPriceSMT = $SendSale_PriceSMT + $ReciveTranOut_PriceSMT + $ReturnStore_PriceSMT;
            $AllOut_PriceSMT = $AllOut_PriceSMT + $AllOutPriceSMT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsSMT = $BackChangePcsSMT + $AllInPcsSMT + $AllOutPcsSMT;
            $Calculate_PcsSMT = $Calculate_PcsSMT + $CalculatePcsSMT;

            $CalculatePriceSMT = $BackChangePriceSMT + $AllInPriceSMT + $AllOutPriceSMT;
            $Calculate_PriceSMT = $Calculate_PriceSMT + $CalculatePriceSMT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsSMT = $SMT->item_stock_Quantity;
            $NewCalculate_PcsSMT = $NewCalculate_PcsSMT + $NewCalculatePcsSMT;

            $NewCalculatePriceSMT = $SMT->item_stock_Amount;
            $NewCalculate_PriceSMT = $NewCalculate_PriceSMT + $NewCalculatePriceSMT;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsSMT = $NewCalculatePcsSMT - $CalculatePcsSMT;
            $Diff_PcsSMT = $Diff_PcsSMT + $DiffPcsSMT;

            $DiffPriceSMT = $NewCalculatePriceSMT - $CalculatePriceSMT;
            $Diff_PriceSMT = $Diff_PriceSMT + $DiffPriceSMT;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsSMT = $CalculatePcsSMT;
            $NewTotal_PcsSMT = $NewTotal_PcsSMT + $CalculatePcsSMT;

            $NewTotalPriceSMT = $NewTotalPcsSMT * $SMT->PriceAvg;
            $NewTotal_PriceSMT = $NewTotal_PriceSMT + $NewTotalPriceSMT;

            $NewTotalDiffNavSMT = $NewTotalPriceSMT - $NewCalculatePriceSMT;
            $NewTotalDiff_NavSMT = $NewTotalDiff_NavSMT + $NewTotalDiffNavSMT;

            $NewTotalDiffCalSMT = $NewTotalPriceSMT - $CalculatePriceSMT;
            $NewTotalDiff_CalSMT = $NewTotalDiff_CalSMT + $NewTotalDiffCalSMT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsSMT = $SMT->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsSMT = $a7f1fgbu02s_PcsSMT + $a7f1fgbu02sPcsSMT;

            $a7f1fgbu02sPriceSMT = $a7f1fgbu02sPcsSMT * $SMT->PriceAvg;
            $a7f1fgbu02s_PriceSMT = $a7f1fgbu02s_PriceSMT + $a7f1fgbu02sPriceSMT;

            $a7f2fgbu10sPcsSMT = $SMT->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsSMT = $a7f2fgbu10s_PcsSMT + $a7f2fgbu10sPcsSMT;

            $a7f2fgbu10sPriceSMT = $a7f2fgbu10sPcsSMT * $SMT->PriceAvg;
            $a7f2fgbu10s_PriceSMT = $a7f2fgbu10s_PriceSMT + $a7f2fgbu10sPriceSMT;

            $a7f2thbu05sPcsSMT = $SMT->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsSMT = $a7f2thbu05s_PcsSMT + $a7f2thbu05sPcsSMT;

            $a7f2thbu05sPriceSMT = $a7f2thbu05sPcsSMT * $SMT->PriceAvg;
            $a7f2thbu05s_PriceSMT = $a7f2thbu05s_PriceSMT + $a7f2thbu05sPriceSMT;

            $a7f2debu10sPcsSMT = $SMT->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsSMT = $a7f2debu10s_PcsSMT + $a7f2debu10sPcsSMT;

            $a7f2debu10sPriceSMT = $a7f2debu10sPcsSMT * $SMT->PriceAvg;
            $a7f2debu10s_PriceSMT = $a7f2debu10s_PriceSMT + $a7f2debu10sPriceSMT;

            $a7f2exbu11sPcsSMT = $SMT->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsSMT = $a7f2exbu11s_PcsSMT + $a7f2exbu11sPcsSMT;

            $a7f2exbu11sPriceSMT = $a7f2exbu11sPcsSMT * $SMT->PriceAvg;
            $a7f2exbu11s_PriceSMT = $a7f2exbu11s_PriceSMT + $a7f2exbu11sPriceSMT;

            $a7f2twbu04sPcsSMT = $SMT->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsSMT = $a7f2twbu04s_PcsSMT + $a7f2twbu04sPcsSMT;

            $a7f2twbu04sPriceSMT = $a7f2twbu04sPcsSMT * $SMT->PriceAvg;
            $a7f2twbu04s_PriceSMT = $a7f2twbu04s_PriceSMT + $a7f2twbu04sPriceSMT;

            $a7f2twbu07sPcsSMT = $SMT->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsSMT = $a7f2twbu07s_PcsSMT + $a7f2twbu07sPcsSMT;

            $a7f2twbu07sPriceSMT = $a7f2twbu07sPcsSMT * $SMT->PriceAvg;
            $a7f2twbu07s_PriceSMT = $a7f2twbu07s_PriceSMT + $a7f2twbu07sPriceSMT;

            $a7f2cebu10sPcsSMT = $SMT->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsSMT = $a7f2cebu10s_PcsSMT + $a7f2cebu10sPcsSMT;

            $a7f2cebu10sPriceSMT = $a7f2cebu10sPcsSMT * $SMT->PriceAvg;
            $a7f2cebu10s_PriceSMT = $a7f2cebu10s_PriceSMT + $a7f2cebu10sPriceSMT;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsSMT = $SMT->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsSMT = $a8f1fgbu02s_PcsSMT + $a8f1fgbu02sPcsSMT;

            $a8f1fgbu02sPriceSMT = $a8f1fgbu02sPcsSMT * $NumberSMT;
            $a8f1fgbu02s_PriceSMT = $a8f1fgbu02s_PriceSMT + $a8f1fgbu02sPriceSMT;

            $a8f2fgbu10sPcsSMT = $SMT->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsSMT = $a8f2fgbu10s_PcsSMT + $a8f2fgbu10sPcsSMT;

            $a8f2fgbu10sPriceSMT = $a8f2fgbu10sPcsSMT * $NumberSMT;
            $a8f2fgbu10s_PriceSMT = $a8f2fgbu10s_PriceSMT + $a8f2fgbu10sPriceSMT;

            $a8f2thbu05sPcsSMT = $SMT->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsSMT = $a8f2thbu05s_PcsSMT + $a8f2thbu05sPcsSMT;

            $a8f2thbu05sPriceSMT = $a8f2thbu05sPcsSMT * $NumberSMT;
            $a8f2thbu05s_PriceSMT = $a8f2thbu05s_PriceSMT + $a8f2thbu05sPriceSMT;

            $a8f2debu10sPcsSMT = $SMT->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsSMT = $a8f2debu10s_PcsSMT + $a8f2debu10sPcsSMT;

            $a8f2debu10sPriceSMT = $a8f2debu10sPcsSMT * $NumberSMT;
            $a8f2debu10s_PriceSMT = $a8f2debu10s_PriceSMT + $a8f2debu10sPriceSMT;

            $a8f2exbu11sPcsSMT = $SMT->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsSMT = $a8f2exbu11s_PcsSMT + $a8f2exbu11sPcsSMT;

            $a8f2exbu11sPriceSMT = $a8f2exbu11sPcsSMT * $NumberSMT;
            $a8f2exbu11s_PriceSMT = $a8f2exbu11s_PriceSMT + $a8f2exbu11sPriceSMT;

            $a8f2twbu04sPcsSMT = $SMT->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsSMT = $a8f2twbu04s_PcsSMT + $a8f2twbu04sPcsSMT;

            $a8f2twbu04sPriceSMT = $a8f2twbu04sPcsSMT * $NumberSMT;
            $a8f2twbu04s_PriceSMT = $a8f2twbu04s_PriceSMT + $a8f2twbu04sPriceSMT;

            $a8f2twbu07sPcsSMT = $SMT->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsSMT = $a8f2twbu07s_PcsSMT + $a8f2twbu07sPcsSMT;

            $a8f2twbu07sPriceSMT = $a8f2twbu07sPcsSMT * $NumberSMT;
            $a8f2twbu07s_PriceSMT = $a8f2twbu07s_PriceSMT + $a8f2twbu07sPriceSMT;

            $a8f2cebu10sPcsSMT = $SMT->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsSMT = $a8f2cebu10s_PcsSMT + $a8f2cebu10sPcsSMT;

            $a8f2cebu10sPriceSMT = $a8f2cebu10sPcsSMT * $NumberSMT;
            $a8f2cebu10s_PriceSMT = $a8f2cebu10s_PriceSMT + $a8f2cebu10sPriceSMT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsSMT = $SMT->dc1_s_Quantity;
            $DC1_PcsSMT = $DC1_PcsSMT + $DC1PcsSMT;

            $DC1PriceSMT = $DC1PcsSMT * $NumberSMT;
            $DC1_PriceSMT = $DC1_PriceSMT + $DC1PriceSMT;

            $DCPPcsSMT = $SMT->dcp_s_Quantity;
            $DCP_PcsSMT = $DCP_PcsSMT + $DCPPcsSMT;

            $DCPPriceSMT = $DCPPcsSMT * $NumberSMT;
            $DCP_PriceSMT = $DCP_PriceSMT + $DCPPriceSMT;

            $DCYPcsSMT = $SMT->dcy_s_Quantity;
            $DCY_PcsSMT = $DCY_PcsSMT + $DCYPcsSMT;

            $DCYPriceSMT = $DCYPcsSMT * $NumberSMT;
            $DCY_PriceSMT = $DCY_PriceSMT + $DCYPriceSMT;

            $DEXPcsSMT = $SMT->dex_s_Quantity;
            $DEX_PcsSMT = $DEX_PcsSMT + $DEXPcsSMT;

            $DEXPriceSMT = $DEXPcsSMT * $NumberSMT;
            $DEX_PriceSMT = $DEX_PriceSMT + $DEXPriceSMT;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoSNT as $SNT) {
            if ($SNT->PcsAfter > 0 && $SNT->PriceAfter > 0) {
                $NumberSNT = ($SNT->PriceAfter / $SNT->PcsAfter);
            }else{
                $NumberSNT = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterSNT = $SNT->PcsAfter;
            $Pcs_AfterSNT = $Pcs_AfterSNT + $PCSAfterSNT;

            $PriceAfterSNT = $SNT->PriceAfter;
            $Price_AfterSNT = $Price_AfterSNT + $PriceAfterSNT;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsSNT = $SNT->Po_Quantity;
            $Po_PcsSNT = $Po_PcsSNT + $PoPcsSNT;

            $PoPriceSNT = $SNT->PriceAvg * $SNT->Po_Quantity;
            $Po_PriceSNT = $Po_PriceSNT + $PoPriceSNT;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsSNT = $SNT->Neg_Quantity;
            $Neg_PcsSNT = $Neg_PcsSNT + $NegPcsSNT;


            $NegPriceSNT = $NumberSNT * $SNT->Neg_Quantity;
            $Neg_PriceSNT = $Neg_PriceSNT + $NegPriceSNT;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsSNT = $PCSAfterSNT + $PoPcsSNT + $NegPcsSNT;
            $BackChange_PcsSNT = $BackChange_PcsSNT + $BackChangePcsSNT;

            $BackChangePriceSNT = $PriceAfterSNT + $PoPriceSNT + $NegPriceSNT;
            $BackChange_PriceSNT = $BackChange_PriceSNT + $BackChangePriceSNT;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsSNT = $SNT->purchase_Quantity;
            $Purchase_PcsSNT = $Purchase_PcsSNT + $PurchasePcsSNT;

            $PurchasePriceSNT = $SNT->purchase_Cost;
            $Purchase_PriceSNT = $Purchase_PriceSNT + $PurchasePriceSNT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsSNT = $SNT->a7f1fgbu02s_Quantity + $SNT->a7f2fgbu10s_Quantity + $SNT->a7f2thbu05s_Quantity + $SNT->a7f2debu10s_Quantity + $SNT->a7f2exbu11s_Quantity + $SNT->a7f2twbu04s_Quantity + $SNT->a7f2twbu07s_Quantity + $SNT->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsSNT = $ReciveTranfer_PcsSNT + $ReciveTranferPcsSNT;

            $ReciveTranferPriceSNT = $ReciveTranferPcsSNT * $SNT->PriceAvg;
            $ReciveTranfer_PriceSNT = $ReciveTranfer_PriceSNT + $ReciveTranferPriceSNT;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantitySNT = $SNT->returncuses_Quantity;
            $ReturnItem_PCSSNT = $ReturnItem_PCSSNT + $ReturnItemQuantitySNT;

            $ReturnItemPriceSNT = $ReturnItemQuantitySNT * $NumberSNT;
            $ReturnItem_PriceSNT = $ReturnItem_PriceSNT + $ReturnItemPriceSNT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsSNT = $SNT->purchase_Quantity + $ReciveTranferPcsSNT + $ReturnItemQuantitySNT;
            $AllIn_PcsSNT = $AllIn_PcsSNT + $AllInPcsSNT;

            $AllInPriceSNT = $PurchasePriceSNT + $ReciveTranferPriceSNT + $ReturnItemPriceSNT;
            $AllIn_PriceSNT = $AllIn_PriceSNT + $AllInPriceSNT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsSNT = $SNT->dc1_s_Quantity + $SNT->dcp_s_Quantity + $SNT->dcy_s_Quantity + $SNT->dex_s_Quantity;
            $SendSale_PcsSNT = $SendSale_PcsSNT + $SendSalePcsSNT;

            if ($BackChangePcsSNT > 0 && $AllInPcsSNT > 0) {
                $SendSalePriceSNT = (($AllInPriceSNT + $BackChangePriceSNT) / ($AllInPcsSNT + $BackChangePcsSNT)) * $SendSalePcsSNT;
                $SendSale_PriceSNT = $SendSale_PriceSNT + $SendSalePriceSNT;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsSNT = $SNT->a8f1fgbu02s_Quantity + $SNT->a8f2fgbu10s_Quantity + $SNT->a8f2thbu05s_Quantity + $SNT->a8f2debu10s_Quantity + $SNT->a8f2exbu11s_Quantity + $SNT->a8f2twbu04s_Quantity + $SNT->a8f2twbu07s_Quantity + $SNT->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsSNT = $ReciveTranOut_PcsSNT + $ReciveTranOutPcsSNT;

            if ($AllInPcsSNT > 0 && $BackChangePcsSNT > 0) {
                $ReciveTranOutPriceSNT = (($AllInPriceSNT + $BackChangePriceSNT) / ($AllInPcsSNT + $BackChangePcsSNT)) * $ReciveTranOutPcsSNT;
                $ReciveTranOut_PriceSNT = $ReciveTranOut_PriceSNT + $ReciveTranOutPriceSNT;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsSNT = $SNT->returnitem_Quantity;
            $ReturnStore_PcsSNT = $ReturnStore_PcsSNT + $ReturnStorePcsSNT;

            if ($AllInPcsSNT > 0 && $BackChangePcsSNT > 0) {
                $ReturnStorePriceSNT = (($AllInPriceSNT + $BackChangePriceSNT) / ($AllInPcsSNT + $BackChangePcsSNT)) * $ReturnStorePcsSNT;
                $ReturnStore_PriceSNT = $ReturnStore_PriceSNT + $ReturnStorePriceSNT;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsSNT = $ReturnStorePcsSNT + $ReciveTranOutPcsSNT + $SendSalePcsSNT;
            $AllOut_PcsSNT = $AllOut_PcsSNT + $AllOutPcsSNT;

            $AllOutPriceSNT = $SendSale_PriceSNT + $ReciveTranOut_PriceSNT + $ReturnStore_PriceSNT;
            $AllOut_PriceSNT = $AllOut_PriceSNT + $AllOutPriceSNT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsSNT = $BackChangePcsSNT + $AllInPcsSNT + $AllOutPcsSNT;
            $Calculate_PcsSNT = $Calculate_PcsSNT + $CalculatePcsSNT;

            $CalculatePriceSNT = $BackChangePriceSNT + $AllInPriceSNT + $AllOutPriceSNT;
            $Calculate_PriceSNT = $Calculate_PriceSNT + $CalculatePriceSNT;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsSNT = $SNT->item_stock_Quantity;
            $NewCalculate_PcsSNT = $NewCalculate_PcsSNT + $NewCalculatePcsSNT;

            $NewCalculatePriceSNT = $SNT->item_stock_Amount;
            $NewCalculate_PriceSNT = $NewCalculate_PriceSNT + $NewCalculatePriceSNT;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsSNT = $NewCalculatePcsSNT - $CalculatePcsSNT;
            $Diff_PcsSNT = $Diff_PcsSNT + $DiffPcsSNT;

            $DiffPriceSNT = $NewCalculatePriceSNT - $CalculatePriceSNT;
            $Diff_PriceSNT = $Diff_PriceSNT + $DiffPriceSNT;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsSNT = $CalculatePcsSNT;
            $NewTotal_PcsSNT = $NewTotal_PcsSNT + $CalculatePcsSNT;

            $NewTotalPriceSNT = $NewTotalPcsSNT * $SNT->PriceAvg;
            $NewTotal_PriceSNT = $NewTotal_PriceSNT + $NewTotalPriceSNT;

            $NewTotalDiffNavSNT = $NewTotalPriceSNT - $NewCalculatePriceSNT;
            $NewTotalDiff_NavSNT = $NewTotalDiff_NavSNT + $NewTotalDiffNavSNT;

            $NewTotalDiffCalSNT = $NewTotalPriceSNT - $CalculatePriceSNT;
            $NewTotalDiff_CalSNT = $NewTotalDiff_CalSNT + $NewTotalDiffCalSNT;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsSNT = $SNT->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsSNT = $a7f1fgbu02s_PcsSNT + $a7f1fgbu02sPcsSNT;

            $a7f1fgbu02sPriceSNT = $a7f1fgbu02sPcsSNT * $SNT->PriceAvg;
            $a7f1fgbu02s_PriceSNT = $a7f1fgbu02s_PriceSNT + $a7f1fgbu02sPriceSNT;

            $a7f2fgbu10sPcsSNT = $SNT->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsSNT = $a7f2fgbu10s_PcsSNT + $a7f2fgbu10sPcsSNT;

            $a7f2fgbu10sPriceSNT = $a7f2fgbu10sPcsSNT * $SNT->PriceAvg;
            $a7f2fgbu10s_PriceSNT = $a7f2fgbu10s_PriceSNT + $a7f2fgbu10sPriceSNT;

            $a7f2thbu05sPcsSNT = $SNT->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsSNT = $a7f2thbu05s_PcsSNT + $a7f2thbu05sPcsSNT;

            $a7f2thbu05sPriceSNT = $a7f2thbu05sPcsSNT * $SNT->PriceAvg;
            $a7f2thbu05s_PriceSNT = $a7f2thbu05s_PriceSNT + $a7f2thbu05sPriceSNT;

            $a7f2debu10sPcsSNT = $SNT->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsSNT = $a7f2debu10s_PcsSNT + $a7f2debu10sPcsSNT;

            $a7f2debu10sPriceSNT = $a7f2debu10sPcsSNT * $SNT->PriceAvg;
            $a7f2debu10s_PriceSNT = $a7f2debu10s_PriceSNT + $a7f2debu10sPriceSNT;

            $a7f2exbu11sPcsSNT = $SNT->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsSNT = $a7f2exbu11s_PcsSNT + $a7f2exbu11sPcsSNT;

            $a7f2exbu11sPriceSNT = $a7f2exbu11sPcsSNT * $SNT->PriceAvg;
            $a7f2exbu11s_PriceSNT = $a7f2exbu11s_PriceSNT + $a7f2exbu11sPriceSNT;

            $a7f2twbu04sPcsSNT = $SNT->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsSNT = $a7f2twbu04s_PcsSNT + $a7f2twbu04sPcsSNT;

            $a7f2twbu04sPriceSNT = $a7f2twbu04sPcsSNT * $SNT->PriceAvg;
            $a7f2twbu04s_PriceSNT = $a7f2twbu04s_PriceSNT + $a7f2twbu04sPriceSNT;

            $a7f2twbu07sPcsSNT = $SNT->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsSNT = $a7f2twbu07s_PcsSNT + $a7f2twbu07sPcsSNT;

            $a7f2twbu07sPriceSNT = $a7f2twbu07sPcsSNT * $SNT->PriceAvg;
            $a7f2twbu07s_PriceSNT = $a7f2twbu07s_PriceSNT + $a7f2twbu07sPriceSNT;

            $a7f2cebu10sPcsSNT = $SNT->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsSNT = $a7f2cebu10s_PcsSNT + $a7f2cebu10sPcsSNT;

            $a7f2cebu10sPriceSNT = $a7f2cebu10sPcsSNT * $SNT->PriceAvg;
            $a7f2cebu10s_PriceSNT = $a7f2cebu10s_PriceSNT + $a7f2cebu10sPriceSNT;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsSNT = $SNT->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsSNT = $a8f1fgbu02s_PcsSNT + $a8f1fgbu02sPcsSNT;

            $a8f1fgbu02sPriceSNT = $a8f1fgbu02sPcsSNT * $NumberSNT;
            $a8f1fgbu02s_PriceSNT = $a8f1fgbu02s_PriceSNT + $a8f1fgbu02sPriceSNT;

            $a8f2fgbu10sPcsSNT = $SNT->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsSNT = $a8f2fgbu10s_PcsSNT + $a8f2fgbu10sPcsSNT;

            $a8f2fgbu10sPriceSNT = $a8f2fgbu10sPcsSNT * $NumberSNT;
            $a8f2fgbu10s_PriceSNT = $a8f2fgbu10s_PriceSNT + $a8f2fgbu10sPriceSNT;

            $a8f2thbu05sPcsSNT = $SNT->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsSNT = $a8f2thbu05s_PcsSNT + $a8f2thbu05sPcsSNT;

            $a8f2thbu05sPriceSNT = $a8f2thbu05sPcsSNT * $NumberSNT;
            $a8f2thbu05s_PriceSNT = $a8f2thbu05s_PriceSNT + $a8f2thbu05sPriceSNT;

            $a8f2debu10sPcsSNT = $SNT->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsSNT = $a8f2debu10s_PcsSNT + $a8f2debu10sPcsSNT;

            $a8f2debu10sPriceSNT = $a8f2debu10sPcsSNT * $NumberSNT;
            $a8f2debu10s_PriceSNT = $a8f2debu10s_PriceSNT + $a8f2debu10sPriceSNT;

            $a8f2exbu11sPcsSNT = $SNT->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsSNT = $a8f2exbu11s_PcsSNT + $a8f2exbu11sPcsSNT;

            $a8f2exbu11sPriceSNT = $a8f2exbu11sPcsSNT * $NumberSNT;
            $a8f2exbu11s_PriceSNT = $a8f2exbu11s_PriceSNT + $a8f2exbu11sPriceSNT;

            $a8f2twbu04sPcsSNT = $SNT->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsSNT = $a8f2twbu04s_PcsSNT + $a8f2twbu04sPcsSNT;

            $a8f2twbu04sPriceSNT = $a8f2twbu04sPcsSNT * $NumberSNT;
            $a8f2twbu04s_PriceSNT = $a8f2twbu04s_PriceSNT + $a8f2twbu04sPriceSNT;

            $a8f2twbu07sPcsSNT = $SNT->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsSNT = $a8f2twbu07s_PcsSNT + $a8f2twbu07sPcsSNT;

            $a8f2twbu07sPriceSNT = $a8f2twbu07sPcsSNT * $NumberSNT;
            $a8f2twbu07s_PriceSNT = $a8f2twbu07s_PriceSNT + $a8f2twbu07sPriceSNT;

            $a8f2cebu10sPcsSNT = $SNT->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsSNT = $a8f2cebu10s_PcsSNT + $a8f2cebu10sPcsSNT;

            $a8f2cebu10sPriceSNT = $a8f2cebu10sPcsSNT * $NumberSNT;
            $a8f2cebu10s_PriceSNT = $a8f2cebu10s_PriceSNT + $a8f2cebu10sPriceSNT;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsSNT = $SNT->dc1_s_Quantity;
            $DC1_PcsSNT = $DC1_PcsSNT + $DC1PcsSNT;

            $DC1PriceSNT = $DC1PcsSNT * $NumberSNT;
            $DC1_PriceSNT = $DC1_PriceSNT + $DC1PriceSNT;

            $DCPPcsSNT = $SNT->dcp_s_Quantity;
            $DCP_PcsSNT = $DCP_PcsSNT + $DCPPcsSNT;

            $DCPPriceSNT = $DCPPcsSNT * $NumberSNT;
            $DCP_PriceSNT = $DCP_PriceSNT + $DCPPriceSNT;

            $DCYPcsSNT = $SNT->dcy_s_Quantity;
            $DCY_PcsSNT = $DCY_PcsSNT + $DCYPcsSNT;

            $DCYPriceSNT = $DCYPcsSNT * $NumberSNT;
            $DCY_PriceSNT = $DCY_PriceSNT + $DCYPriceSNT;

            $DEXPcsSNT = $SNT->dex_s_Quantity;
            $DEX_PcsSNT = $DEX_PcsSNT + $DEXPcsSNT;

            $DEXPriceSNT = $DEXPcsSNT * $NumberSNT;
            $DEX_PriceSNT = $DEX_PriceSNT + $DEXPriceSNT;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoNTDCY as $NTDCY) {
            if ($NTDCY->PcsAfter > 0 && $NTDCY->PriceAfter > 0) {
                $NumberNTDCY = ($NTDCY->PriceAfter / $NTDCY->PcsAfter);
            }else{
                $NumberNTDCY = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterNTDCY = $NTDCY->PcsAfter;
            $Pcs_AfterNTDCY = $Pcs_AfterNTDCY + $PCSAfterNTDCY;

            $PriceAfterNTDCY = $NTDCY->PriceAfter;
            $Price_AfterNTDCY = $Price_AfterNTDCY + $PriceAfterNTDCY;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsNTDCY = $NTDCY->Po_Quantity;
            $Po_PcsNTDCY = $Po_PcsNTDCY + $PoPcsNTDCY;

            $PoPriceNTDCY = $NTDCY->PriceAvg * $NTDCY->Po_Quantity;
            $Po_PriceNTDCY = $Po_PriceNTDCY + $PoPriceNTDCY;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsNTDCY = $NTDCY->Neg_Quantity;
            $Neg_PcsNTDCY = $Neg_PcsNTDCY + $NegPcsNTDCY;


            $NegPriceNTDCY = $NumberNTDCY * $NTDCY->Neg_Quantity;
            $Neg_PriceNTDCY = $Neg_PriceNTDCY + $NegPriceNTDCY;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsNTDCY = $PCSAfterNTDCY + $PoPcsNTDCY + $NegPcsNTDCY;
            $BackChange_PcsNTDCY = $BackChange_PcsNTDCY + $BackChangePcsNTDCY;

            $BackChangePriceNTDCY = $PriceAfterNTDCY + $PoPriceNTDCY + $NegPriceNTDCY;
            $BackChange_PriceNTDCY = $BackChange_PriceNTDCY + $BackChangePriceNTDCY;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsNTDCY = $NTDCY->purchase_Quantity;
            $Purchase_PcsNTDCY = $Purchase_PcsNTDCY + $PurchasePcsNTDCY;

            $PurchasePriceNTDCY = $NTDCY->purchase_Cost;
            $Purchase_PriceNTDCY = $Purchase_PriceNTDCY + $PurchasePriceNTDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsNTDCY = $NTDCY->a7f1fgbu02s_Quantity + $NTDCY->a7f2fgbu10s_Quantity + $NTDCY->a7f2thbu05s_Quantity + $NTDCY->a7f2debu10s_Quantity + $NTDCY->a7f2exbu11s_Quantity + $NTDCY->a7f2twbu04s_Quantity + $NTDCY->a7f2twbu07s_Quantity + $NTDCY->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsNTDCY = $ReciveTranfer_PcsNTDCY + $ReciveTranferPcsNTDCY;

            $ReciveTranferPriceNTDCY = $ReciveTranferPcsNTDCY * $NTDCY->PriceAvg;
            $ReciveTranfer_PriceNTDCY = $ReciveTranfer_PriceNTDCY + $ReciveTranferPriceNTDCY;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityNTDCY = $NTDCY->returncuses_Quantity;
            $ReturnItem_PCSNTDCY = $ReturnItem_PCSNTDCY + $ReturnItemQuantityNTDCY;

            $ReturnItemPriceNTDCY = $ReturnItemQuantityNTDCY * $NumberNTDCY;
            $ReturnItem_PriceNTDCY = $ReturnItem_PriceNTDCY + $ReturnItemPriceNTDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsNTDCY = $NTDCY->purchase_Quantity + $ReciveTranferPcsNTDCY + $ReturnItemQuantityNTDCY;
            $AllIn_PcsNTDCY = $AllIn_PcsNTDCY + $AllInPcsNTDCY;

            $AllInPriceNTDCY = $PurchasePriceNTDCY + $ReciveTranferPriceNTDCY + $ReturnItemPriceNTDCY;
            $AllIn_PriceNTDCY = $AllIn_PriceNTDCY + $AllInPriceNTDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsNTDCY = $NTDCY->dc1_s_Quantity + $NTDCY->dcp_s_Quantity + $NTDCY->dcy_s_Quantity + $NTDCY->dex_s_Quantity;
            $SendSale_PcsNTDCY = $SendSale_PcsNTDCY + $SendSalePcsNTDCY;

            if ($BackChangePcsNTDCY > 0 && $AllInPcsNTDCY > 0) {
                $SendSalePriceNTDCY = (($AllInPriceNTDCY + $BackChangePriceNTDCY) / ($AllInPcsNTDCY + $BackChangePcsNTDCY)) * $SendSalePcsNTDCY;
                $SendSale_PriceNTDCY = $SendSale_PriceNTDCY + $SendSalePriceNTDCY;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsNTDCY = $NTDCY->a8f1fgbu02s_Quantity + $NTDCY->a8f2fgbu10s_Quantity + $NTDCY->a8f2thbu05s_Quantity + $NTDCY->a8f2debu10s_Quantity + $NTDCY->a8f2exbu11s_Quantity + $NTDCY->a8f2twbu04s_Quantity + $NTDCY->a8f2twbu07s_Quantity + $NTDCY->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsNTDCY = $ReciveTranOut_PcsNTDCY + $ReciveTranOutPcsNTDCY;

            if ($AllInPcsNTDCY > 0 && $BackChangePcsNTDCY > 0) {
                $ReciveTranOutPriceNTDCY = (($AllInPriceNTDCY + $BackChangePriceNTDCY) / ($AllInPcsNTDCY + $BackChangePcsNTDCY)) * $ReciveTranOutPcsNTDCY;
                $ReciveTranOut_PriceNTDCY = $ReciveTranOut_PriceNTDCY + $ReciveTranOutPriceNTDCY;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsNTDCY = $NTDCY->returnitem_Quantity;
            $ReturnStore_PcsNTDCY = $ReturnStore_PcsNTDCY + $ReturnStorePcsNTDCY;

            if ($AllInPcsNTDCY > 0 && $BackChangePcsNTDCY > 0) {
                $ReturnStorePriceNTDCY = (($AllInPriceNTDCY + $BackChangePriceNTDCY) / ($AllInPcsNTDCY + $BackChangePcsNTDCY)) * $ReturnStorePcsNTDCY;
                $ReturnStore_PriceNTDCY = $ReturnStore_PriceNTDCY + $ReturnStorePriceNTDCY;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsNTDCY = $ReturnStorePcsNTDCY + $ReciveTranOutPcsNTDCY + $SendSalePcsNTDCY;
            $AllOut_PcsNTDCY = $AllOut_PcsNTDCY + $AllOutPcsNTDCY;

            $AllOutPriceNTDCY = $SendSale_PriceNTDCY + $ReciveTranOut_PriceNTDCY + $ReturnStore_PriceNTDCY;
            $AllOut_PriceNTDCY = $AllOut_PriceNTDCY + $AllOutPriceNTDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsNTDCY = $BackChangePcsNTDCY + $AllInPcsNTDCY + $AllOutPcsNTDCY;
            $Calculate_PcsNTDCY = $Calculate_PcsNTDCY + $CalculatePcsNTDCY;

            $CalculatePriceNTDCY = $BackChangePriceNTDCY + $AllInPriceNTDCY + $AllOutPriceNTDCY;
            $Calculate_PriceNTDCY = $Calculate_PriceNTDCY + $CalculatePriceNTDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsNTDCY = $NTDCY->item_stock_Quantity;
            $NewCalculate_PcsNTDCY = $NewCalculate_PcsNTDCY + $NewCalculatePcsNTDCY;

            $NewCalculatePriceNTDCY = $NTDCY->item_stock_Amount;
            $NewCalculate_PriceNTDCY = $NewCalculate_PriceNTDCY + $NewCalculatePriceNTDCY;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsNTDCY = $NewCalculatePcsNTDCY - $CalculatePcsNTDCY;
            $Diff_PcsNTDCY = $Diff_PcsNTDCY + $DiffPcsNTDCY;

            $DiffPriceNTDCY = $NewCalculatePriceNTDCY - $CalculatePriceNTDCY;
            $Diff_PriceNTDCY = $Diff_PriceNTDCY + $DiffPriceNTDCY;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsNTDCY = $CalculatePcsNTDCY;
            $NewTotal_PcsNTDCY = $NewTotal_PcsNTDCY + $CalculatePcsNTDCY;

            $NewTotalPriceNTDCY = $NewTotalPcsNTDCY * $NTDCY->PriceAvg;
            $NewTotal_PriceNTDCY = $NewTotal_PriceNTDCY + $NewTotalPriceNTDCY;

            $NewTotalDiffNavNTDCY = $NewTotalPriceNTDCY - $NewCalculatePriceNTDCY;
            $NewTotalDiff_NavNTDCY = $NewTotalDiff_NavNTDCY + $NewTotalDiffNavNTDCY;

            $NewTotalDiffCalNTDCY = $NewTotalPriceNTDCY - $CalculatePriceNTDCY;
            $NewTotalDiff_CalNTDCY = $NewTotalDiff_CalNTDCY + $NewTotalDiffCalNTDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsNTDCY = $NTDCY->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsNTDCY = $a7f1fgbu02s_PcsNTDCY + $a7f1fgbu02sPcsNTDCY;

            $a7f1fgbu02sPriceNTDCY = $a7f1fgbu02sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f1fgbu02s_PriceNTDCY = $a7f1fgbu02s_PriceNTDCY + $a7f1fgbu02sPriceNTDCY;

            $a7f2fgbu10sPcsNTDCY = $NTDCY->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsNTDCY = $a7f2fgbu10s_PcsNTDCY + $a7f2fgbu10sPcsNTDCY;

            $a7f2fgbu10sPriceNTDCY = $a7f2fgbu10sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2fgbu10s_PriceNTDCY = $a7f2fgbu10s_PriceNTDCY + $a7f2fgbu10sPriceNTDCY;

            $a7f2thbu05sPcsNTDCY = $NTDCY->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsNTDCY = $a7f2thbu05s_PcsNTDCY + $a7f2thbu05sPcsNTDCY;

            $a7f2thbu05sPriceNTDCY = $a7f2thbu05sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2thbu05s_PriceNTDCY = $a7f2thbu05s_PriceNTDCY + $a7f2thbu05sPriceNTDCY;

            $a7f2debu10sPcsNTDCY = $NTDCY->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsNTDCY = $a7f2debu10s_PcsNTDCY + $a7f2debu10sPcsNTDCY;

            $a7f2debu10sPriceNTDCY = $a7f2debu10sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2debu10s_PriceNTDCY = $a7f2debu10s_PriceNTDCY + $a7f2debu10sPriceNTDCY;

            $a7f2exbu11sPcsNTDCY = $NTDCY->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsNTDCY = $a7f2exbu11s_PcsNTDCY + $a7f2exbu11sPcsNTDCY;

            $a7f2exbu11sPriceNTDCY = $a7f2exbu11sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2exbu11s_PriceNTDCY = $a7f2exbu11s_PriceNTDCY + $a7f2exbu11sPriceNTDCY;

            $a7f2twbu04sPcsNTDCY = $NTDCY->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsNTDCY = $a7f2twbu04s_PcsNTDCY + $a7f2twbu04sPcsNTDCY;

            $a7f2twbu04sPriceNTDCY = $a7f2twbu04sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2twbu04s_PriceNTDCY = $a7f2twbu04s_PriceNTDCY + $a7f2twbu04sPriceNTDCY;

            $a7f2twbu07sPcsNTDCY = $NTDCY->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsNTDCY = $a7f2twbu07s_PcsNTDCY + $a7f2twbu07sPcsNTDCY;

            $a7f2twbu07sPriceNTDCY = $a7f2twbu07sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2twbu07s_PriceNTDCY = $a7f2twbu07s_PriceNTDCY + $a7f2twbu07sPriceNTDCY;

            $a7f2cebu10sPcsNTDCY = $NTDCY->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsNTDCY = $a7f2cebu10s_PcsNTDCY + $a7f2cebu10sPcsNTDCY;

            $a7f2cebu10sPriceNTDCY = $a7f2cebu10sPcsNTDCY * $NTDCY->PriceAvg;
            $a7f2cebu10s_PriceNTDCY = $a7f2cebu10s_PriceNTDCY + $a7f2cebu10sPriceNTDCY;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsNTDCY = $NTDCY->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsNTDCY = $a8f1fgbu02s_PcsNTDCY + $a8f1fgbu02sPcsNTDCY;

            $a8f1fgbu02sPriceNTDCY = $a8f1fgbu02sPcsNTDCY * $NumberNTDCY;
            $a8f1fgbu02s_PriceNTDCY = $a8f1fgbu02s_PriceNTDCY + $a8f1fgbu02sPriceNTDCY;

            $a8f2fgbu10sPcsNTDCY = $NTDCY->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsNTDCY = $a8f2fgbu10s_PcsNTDCY + $a8f2fgbu10sPcsNTDCY;

            $a8f2fgbu10sPriceNTDCY = $a8f2fgbu10sPcsNTDCY * $NumberNTDCY;
            $a8f2fgbu10s_PriceNTDCY = $a8f2fgbu10s_PriceNTDCY + $a8f2fgbu10sPriceNTDCY;

            $a8f2thbu05sPcsNTDCY = $NTDCY->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsNTDCY = $a8f2thbu05s_PcsNTDCY + $a8f2thbu05sPcsNTDCY;

            $a8f2thbu05sPriceNTDCY = $a8f2thbu05sPcsNTDCY * $NumberNTDCY;
            $a8f2thbu05s_PriceNTDCY = $a8f2thbu05s_PriceNTDCY + $a8f2thbu05sPriceNTDCY;

            $a8f2debu10sPcsNTDCY = $NTDCY->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsNTDCY = $a8f2debu10s_PcsNTDCY + $a8f2debu10sPcsNTDCY;

            $a8f2debu10sPriceNTDCY = $a8f2debu10sPcsNTDCY * $NumberNTDCY;
            $a8f2debu10s_PriceNTDCY = $a8f2debu10s_PriceNTDCY + $a8f2debu10sPriceNTDCY;

            $a8f2exbu11sPcsNTDCY = $NTDCY->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsNTDCY = $a8f2exbu11s_PcsNTDCY + $a8f2exbu11sPcsNTDCY;

            $a8f2exbu11sPriceNTDCY = $a8f2exbu11sPcsNTDCY * $NumberNTDCY;
            $a8f2exbu11s_PriceNTDCY = $a8f2exbu11s_PriceNTDCY + $a8f2exbu11sPriceNTDCY;

            $a8f2twbu04sPcsNTDCY = $NTDCY->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsNTDCY = $a8f2twbu04s_PcsNTDCY + $a8f2twbu04sPcsNTDCY;

            $a8f2twbu04sPriceNTDCY = $a8f2twbu04sPcsNTDCY * $NumberNTDCY;
            $a8f2twbu04s_PriceNTDCY = $a8f2twbu04s_PriceNTDCY + $a8f2twbu04sPriceNTDCY;

            $a8f2twbu07sPcsNTDCY = $NTDCY->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsNTDCY = $a8f2twbu07s_PcsNTDCY + $a8f2twbu07sPcsNTDCY;

            $a8f2twbu07sPriceNTDCY = $a8f2twbu07sPcsNTDCY * $NumberNTDCY;
            $a8f2twbu07s_PriceNTDCY = $a8f2twbu07s_PriceNTDCY + $a8f2twbu07sPriceNTDCY;

            $a8f2cebu10sPcsNTDCY = $NTDCY->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsNTDCY = $a8f2cebu10s_PcsNTDCY + $a8f2cebu10sPcsNTDCY;

            $a8f2cebu10sPriceNTDCY = $a8f2cebu10sPcsNTDCY * $NumberNTDCY;
            $a8f2cebu10s_PriceNTDCY = $a8f2cebu10s_PriceNTDCY + $a8f2cebu10sPriceNTDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsNTDCY = $NTDCY->dc1_s_Quantity;
            $DC1_PcsNTDCY = $DC1_PcsNTDCY + $DC1PcsNTDCY;

            $DC1PriceNTDCY = $DC1PcsNTDCY * $NumberNTDCY;
            $DC1_PriceNTDCY = $DC1_PriceNTDCY + $DC1PriceNTDCY;

            $DCPPcsNTDCY = $NTDCY->dcp_s_Quantity;
            $DCP_PcsNTDCY = $DCP_PcsNTDCY + $DCPPcsNTDCY;

            $DCPPriceNTDCY = $DCPPcsNTDCY * $NumberNTDCY;
            $DCP_PriceNTDCY = $DCP_PriceNTDCY + $DCPPriceNTDCY;

            $DCYPcsNTDCY = $NTDCY->dcy_s_Quantity;
            $DCY_PcsNTDCY = $DCY_PcsNTDCY + $DCYPcsNTDCY;

            $DCYPriceNTDCY = $DCYPcsNTDCY * $NumberNTDCY;
            $DCY_PriceNTDCY = $DCY_PriceNTDCY + $DCYPriceNTDCY;

            $DEXPcsNTDCY = $NTDCY->dex_s_Quantity;
            $DEX_PcsNTDCY = $DEX_PcsNTDCY + $DEXPcsNTDCY;

            $DEXPriceNTDCY = $DEXPcsNTDCY * $NumberNTDCY;
            $DEX_PriceNTDCY = $DEX_PriceNTDCY + $DEXPriceNTDCY;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoTWDCY as $TWDCY) {
            if ($TWDCY->PcsAfter > 0 && $TWDCY->PriceAfter > 0) {
                $NumberTWDCY = ($TWDCY->PriceAfter / $TWDCY->PcsAfter);
            }else{
                $NumberTWDCY = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterTWDCY = $TWDCY->PcsAfter;
            $Pcs_AfterTWDCY = $Pcs_AfterTWDCY + $PCSAfterTWDCY;

            $PriceAfterTWDCY = $TWDCY->PriceAfter;
            $Price_AfterTWDCY = $Price_AfterTWDCY + $PriceAfterTWDCY;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsTWDCY = $TWDCY->Po_Quantity;
            $Po_PcsTWDCY = $Po_PcsTWDCY + $PoPcsTWDCY;

            $PoPriceTWDCY = $TWDCY->PriceAvg * $TWDCY->Po_Quantity;
            $Po_PriceTWDCY = $Po_PriceTWDCY + $PoPriceTWDCY;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsTWDCY = $TWDCY->Neg_Quantity;
            $Neg_PcsTWDCY = $Neg_PcsTWDCY + $NegPcsTWDCY;


            $NegPriceTWDCY = $NumberTWDCY * $TWDCY->Neg_Quantity;
            $Neg_PriceTWDCY = $Neg_PriceTWDCY + $NegPriceTWDCY;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsTWDCY = $PCSAfterTWDCY + $PoPcsTWDCY + $NegPcsTWDCY;
            $BackChange_PcsTWDCY = $BackChange_PcsTWDCY + $BackChangePcsTWDCY;

            $BackChangePriceTWDCY = $PriceAfterTWDCY + $PoPriceTWDCY + $NegPriceTWDCY;
            $BackChange_PriceTWDCY = $BackChange_PriceTWDCY + $BackChangePriceTWDCY;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsTWDCY = $TWDCY->purchase_Quantity;
            $Purchase_PcsTWDCY = $Purchase_PcsTWDCY + $PurchasePcsTWDCY;

            $PurchasePriceTWDCY = $TWDCY->purchase_Cost;
            $Purchase_PriceTWDCY = $Purchase_PriceTWDCY + $PurchasePriceTWDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsTWDCY = $TWDCY->a7f1fgbu02s_Quantity + $TWDCY->a7f2fgbu10s_Quantity + $TWDCY->a7f2thbu05s_Quantity + $TWDCY->a7f2debu10s_Quantity + $TWDCY->a7f2exbu11s_Quantity + $TWDCY->a7f2twbu04s_Quantity + $TWDCY->a7f2twbu07s_Quantity + $TWDCY->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsTWDCY = $ReciveTranfer_PcsTWDCY + $ReciveTranferPcsTWDCY;

            $ReciveTranferPriceTWDCY = $ReciveTranferPcsTWDCY * $TWDCY->PriceAvg;
            $ReciveTranfer_PriceTWDCY = $ReciveTranfer_PriceTWDCY + $ReciveTranferPriceTWDCY;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantityTWDCY = $TWDCY->returncuses_Quantity;
            $ReturnItem_PCSTWDCY = $ReturnItem_PCSTWDCY + $ReturnItemQuantityTWDCY;

            $ReturnItemPriceTWDCY = $ReturnItemQuantityTWDCY * $NumberTWDCY;
            $ReturnItem_PriceTWDCY = $ReturnItem_PriceTWDCY + $ReturnItemPriceTWDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsTWDCY = $TWDCY->purchase_Quantity + $ReciveTranferPcsTWDCY + $ReturnItemQuantityTWDCY;
            $AllIn_PcsTWDCY = $AllIn_PcsTWDCY + $AllInPcsTWDCY;

            $AllInPriceTWDCY = $PurchasePriceTWDCY + $ReciveTranferPriceTWDCY + $ReturnItemPriceTWDCY;
            $AllIn_PriceTWDCY = $AllIn_PriceTWDCY + $AllInPriceTWDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsTWDCY = $TWDCY->dc1_s_Quantity + $TWDCY->dcp_s_Quantity + $TWDCY->dcy_s_Quantity + $TWDCY->dex_s_Quantity;
            $SendSale_PcsTWDCY = $SendSale_PcsTWDCY + $SendSalePcsTWDCY;

            if ($BackChangePcsTWDCY > 0 && $AllInPcsTWDCY > 0) {
                $SendSalePriceTWDCY = (($AllInPriceTWDCY + $BackChangePriceTWDCY) / ($AllInPcsTWDCY + $BackChangePcsTWDCY)) * $SendSalePcsTWDCY;
                $SendSale_PriceTWDCY = $SendSale_PriceTWDCY + $SendSalePriceTWDCY;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsTWDCY = $TWDCY->a8f1fgbu02s_Quantity + $TWDCY->a8f2fgbu10s_Quantity + $TWDCY->a8f2thbu05s_Quantity + $TWDCY->a8f2debu10s_Quantity + $TWDCY->a8f2exbu11s_Quantity + $TWDCY->a8f2twbu04s_Quantity + $TWDCY->a8f2twbu07s_Quantity + $TWDCY->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsTWDCY = $ReciveTranOut_PcsTWDCY + $ReciveTranOutPcsTWDCY;

            if ($AllInPcsTWDCY > 0 && $BackChangePcsTWDCY > 0) {
                $ReciveTranOutPriceTWDCY = (($AllInPriceTWDCY + $BackChangePriceTWDCY) / ($AllInPcsTWDCY + $BackChangePcsTWDCY)) * $ReciveTranOutPcsTWDCY;
                $ReciveTranOut_PriceTWDCY = $ReciveTranOut_PriceTWDCY + $ReciveTranOutPriceTWDCY;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsTWDCY = $TWDCY->returnitem_Quantity;
            $ReturnStore_PcsTWDCY = $ReturnStore_PcsTWDCY + $ReturnStorePcsTWDCY;

            if ($AllInPcsTWDCY > 0 && $BackChangePcsTWDCY > 0) {
                $ReturnStorePriceTWDCY = (($AllInPriceTWDCY + $BackChangePriceTWDCY) / ($AllInPcsTWDCY + $BackChangePcsTWDCY)) * $ReturnStorePcsTWDCY;
                $ReturnStore_PriceTWDCY = $ReturnStore_PriceTWDCY + $ReturnStorePriceTWDCY;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsTWDCY = $ReturnStorePcsTWDCY + $ReciveTranOutPcsTWDCY + $SendSalePcsTWDCY;
            $AllOut_PcsTWDCY = $AllOut_PcsTWDCY + $AllOutPcsTWDCY;

            $AllOutPriceTWDCY = $SendSale_PriceTWDCY + $ReciveTranOut_PriceTWDCY + $ReturnStore_PriceTWDCY;
            $AllOut_PriceTWDCY = $AllOut_PriceTWDCY + $AllOutPriceTWDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsTWDCY = $BackChangePcsTWDCY + $AllInPcsTWDCY + $AllOutPcsTWDCY;
            $Calculate_PcsTWDCY = $Calculate_PcsTWDCY + $CalculatePcsTWDCY;

            $CalculatePriceTWDCY = $BackChangePriceTWDCY + $AllInPriceTWDCY + $AllOutPriceTWDCY;
            $Calculate_PriceTWDCY = $Calculate_PriceTWDCY + $CalculatePriceTWDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsTWDCY = $TWDCY->item_stock_Quantity;
            $NewCalculate_PcsTWDCY = $NewCalculate_PcsTWDCY + $NewCalculatePcsTWDCY;

            $NewCalculatePriceTWDCY = $TWDCY->item_stock_Amount;
            $NewCalculate_PriceTWDCY = $NewCalculate_PriceTWDCY + $NewCalculatePriceTWDCY;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsTWDCY = $NewCalculatePcsTWDCY - $CalculatePcsTWDCY;
            $Diff_PcsTWDCY = $Diff_PcsTWDCY + $DiffPcsTWDCY;

            $DiffPriceTWDCY = $NewCalculatePriceTWDCY - $CalculatePriceTWDCY;
            $Diff_PriceTWDCY = $Diff_PriceTWDCY + $DiffPriceTWDCY;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsTWDCY = $CalculatePcsTWDCY;
            $NewTotal_PcsTWDCY = $NewTotal_PcsTWDCY + $CalculatePcsTWDCY;

            $NewTotalPriceTWDCY = $NewTotalPcsTWDCY * $TWDCY->PriceAvg;
            $NewTotal_PriceTWDCY = $NewTotal_PriceTWDCY + $NewTotalPriceTWDCY;

            $NewTotalDiffNavTWDCY = $NewTotalPriceTWDCY - $NewCalculatePriceTWDCY;
            $NewTotalDiff_NavTWDCY = $NewTotalDiff_NavTWDCY + $NewTotalDiffNavTWDCY;

            $NewTotalDiffCalTWDCY = $NewTotalPriceTWDCY - $CalculatePriceTWDCY;
            $NewTotalDiff_CalTWDCY = $NewTotalDiff_CalTWDCY + $NewTotalDiffCalTWDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsTWDCY = $TWDCY->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsTWDCY = $a7f1fgbu02s_PcsTWDCY + $a7f1fgbu02sPcsTWDCY;

            $a7f1fgbu02sPriceTWDCY = $a7f1fgbu02sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f1fgbu02s_PriceTWDCY = $a7f1fgbu02s_PriceTWDCY + $a7f1fgbu02sPriceTWDCY;

            $a7f2fgbu10sPcsTWDCY = $TWDCY->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsTWDCY = $a7f2fgbu10s_PcsTWDCY + $a7f2fgbu10sPcsTWDCY;

            $a7f2fgbu10sPriceTWDCY = $a7f2fgbu10sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2fgbu10s_PriceTWDCY = $a7f2fgbu10s_PriceTWDCY + $a7f2fgbu10sPriceTWDCY;

            $a7f2thbu05sPcsTWDCY = $TWDCY->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsTWDCY = $a7f2thbu05s_PcsTWDCY + $a7f2thbu05sPcsTWDCY;

            $a7f2thbu05sPriceTWDCY = $a7f2thbu05sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2thbu05s_PriceTWDCY = $a7f2thbu05s_PriceTWDCY + $a7f2thbu05sPriceTWDCY;

            $a7f2debu10sPcsTWDCY = $TWDCY->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsTWDCY = $a7f2debu10s_PcsTWDCY + $a7f2debu10sPcsTWDCY;

            $a7f2debu10sPriceTWDCY = $a7f2debu10sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2debu10s_PriceTWDCY = $a7f2debu10s_PriceTWDCY + $a7f2debu10sPriceTWDCY;

            $a7f2exbu11sPcsTWDCY = $TWDCY->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsTWDCY = $a7f2exbu11s_PcsTWDCY + $a7f2exbu11sPcsTWDCY;

            $a7f2exbu11sPriceTWDCY = $a7f2exbu11sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2exbu11s_PriceTWDCY = $a7f2exbu11s_PriceTWDCY + $a7f2exbu11sPriceTWDCY;

            $a7f2twbu04sPcsTWDCY = $TWDCY->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsTWDCY = $a7f2twbu04s_PcsTWDCY + $a7f2twbu04sPcsTWDCY;

            $a7f2twbu04sPriceTWDCY = $a7f2twbu04sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2twbu04s_PriceTWDCY = $a7f2twbu04s_PriceTWDCY + $a7f2twbu04sPriceTWDCY;

            $a7f2twbu07sPcsTWDCY = $TWDCY->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsTWDCY = $a7f2twbu07s_PcsTWDCY + $a7f2twbu07sPcsTWDCY;

            $a7f2twbu07sPriceTWDCY = $a7f2twbu07sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2twbu07s_PriceTWDCY = $a7f2twbu07s_PriceTWDCY + $a7f2twbu07sPriceTWDCY;

            $a7f2cebu10sPcsTWDCY = $TWDCY->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsTWDCY = $a7f2cebu10s_PcsTWDCY + $a7f2cebu10sPcsTWDCY;

            $a7f2cebu10sPriceTWDCY = $a7f2cebu10sPcsTWDCY * $TWDCY->PriceAvg;
            $a7f2cebu10s_PriceTWDCY = $a7f2cebu10s_PriceTWDCY + $a7f2cebu10sPriceTWDCY;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsTWDCY = $TWDCY->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsTWDCY = $a8f1fgbu02s_PcsTWDCY + $a8f1fgbu02sPcsTWDCY;

            $a8f1fgbu02sPriceTWDCY = $a8f1fgbu02sPcsTWDCY * $NumberTWDCY;
            $a8f1fgbu02s_PriceTWDCY = $a8f1fgbu02s_PriceTWDCY + $a8f1fgbu02sPriceTWDCY;

            $a8f2fgbu10sPcsTWDCY = $TWDCY->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsTWDCY = $a8f2fgbu10s_PcsTWDCY + $a8f2fgbu10sPcsTWDCY;

            $a8f2fgbu10sPriceTWDCY = $a8f2fgbu10sPcsTWDCY * $NumberTWDCY;
            $a8f2fgbu10s_PriceTWDCY = $a8f2fgbu10s_PriceTWDCY + $a8f2fgbu10sPriceTWDCY;

            $a8f2thbu05sPcsTWDCY = $TWDCY->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsTWDCY = $a8f2thbu05s_PcsTWDCY + $a8f2thbu05sPcsTWDCY;

            $a8f2thbu05sPriceTWDCY = $a8f2thbu05sPcsTWDCY * $NumberTWDCY;
            $a8f2thbu05s_PriceTWDCY = $a8f2thbu05s_PriceTWDCY + $a8f2thbu05sPriceTWDCY;

            $a8f2debu10sPcsTWDCY = $TWDCY->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsTWDCY = $a8f2debu10s_PcsTWDCY + $a8f2debu10sPcsTWDCY;

            $a8f2debu10sPriceTWDCY = $a8f2debu10sPcsTWDCY * $NumberTWDCY;
            $a8f2debu10s_PriceTWDCY = $a8f2debu10s_PriceTWDCY + $a8f2debu10sPriceTWDCY;

            $a8f2exbu11sPcsTWDCY = $TWDCY->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsTWDCY = $a8f2exbu11s_PcsTWDCY + $a8f2exbu11sPcsTWDCY;

            $a8f2exbu11sPriceTWDCY = $a8f2exbu11sPcsTWDCY * $NumberTWDCY;
            $a8f2exbu11s_PriceTWDCY = $a8f2exbu11s_PriceTWDCY + $a8f2exbu11sPriceTWDCY;

            $a8f2twbu04sPcsTWDCY = $TWDCY->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsTWDCY = $a8f2twbu04s_PcsTWDCY + $a8f2twbu04sPcsTWDCY;

            $a8f2twbu04sPriceTWDCY = $a8f2twbu04sPcsTWDCY * $NumberTWDCY;
            $a8f2twbu04s_PriceTWDCY = $a8f2twbu04s_PriceTWDCY + $a8f2twbu04sPriceTWDCY;

            $a8f2twbu07sPcsTWDCY = $TWDCY->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsTWDCY = $a8f2twbu07s_PcsTWDCY + $a8f2twbu07sPcsTWDCY;

            $a8f2twbu07sPriceTWDCY = $a8f2twbu07sPcsTWDCY * $NumberTWDCY;
            $a8f2twbu07s_PriceTWDCY = $a8f2twbu07s_PriceTWDCY + $a8f2twbu07sPriceTWDCY;

            $a8f2cebu10sPcsTWDCY = $TWDCY->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsTWDCY = $a8f2cebu10s_PcsTWDCY + $a8f2cebu10sPcsTWDCY;

            $a8f2cebu10sPriceTWDCY = $a8f2cebu10sPcsTWDCY * $NumberTWDCY;
            $a8f2cebu10s_PriceTWDCY = $a8f2cebu10s_PriceTWDCY + $a8f2cebu10sPriceTWDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsTWDCY = $TWDCY->dc1_s_Quantity;
            $DC1_PcsTWDCY = $DC1_PcsTWDCY + $DC1PcsTWDCY;

            $DC1PriceTWDCY = $DC1PcsTWDCY * $NumberTWDCY;
            $DC1_PriceTWDCY = $DC1_PriceTWDCY + $DC1PriceTWDCY;

            $DCPPcsTWDCY = $TWDCY->dcp_s_Quantity;
            $DCP_PcsTWDCY = $DCP_PcsTWDCY + $DCPPcsTWDCY;

            $DCPPriceTWDCY = $DCPPcsTWDCY * $NumberTWDCY;
            $DCP_PriceTWDCY = $DCP_PriceTWDCY + $DCPPriceTWDCY;

            $DCYPcsTWDCY = $TWDCY->dcy_s_Quantity;
            $DCY_PcsTWDCY = $DCY_PcsTWDCY + $DCYPcsTWDCY;

            $DCYPriceTWDCY = $DCYPcsTWDCY * $NumberTWDCY;
            $DCY_PriceTWDCY = $DCY_PriceTWDCY + $DCYPriceTWDCY;

            $DEXPcsTWDCY = $TWDCY->dex_s_Quantity;
            $DEX_PcsTWDCY = $DEX_PcsTWDCY + $DEXPcsTWDCY;

            $DEXPriceTWDCY = $DEXPcsTWDCY * $NumberTWDCY;
            $DEX_PriceTWDCY = $DEX_PriceTWDCY + $DEXPriceTWDCY;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoSNTDCY as $SNTDCY) {
            if ($SNTDCY->PcsAfter > 0 && $SNTDCY->PriceAfter > 0) {
                $NumberSNTDCY = ($SNTDCY->PriceAfter / $SNTDCY->PcsAfter);
            }else{
                $NumberSNTDCY = 0;
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfterSNTDCY = $SNTDCY->PcsAfter;
            $Pcs_AfterSNTDCY = $Pcs_AfterSNTDCY + $PCSAfterSNTDCY;

            $PriceAfterSNTDCY = $SNTDCY->PriceAfter;
            $Price_AfterSNTDCY = $Price_AfterSNTDCY + $PriceAfterSNTDCY;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcsSNTDCY = $SNTDCY->Po_Quantity;
            $Po_PcsSNTDCY = $Po_PcsSNTDCY + $PoPcsSNTDCY;

            $PoPriceSNTDCY = $SNTDCY->PriceAvg * $SNTDCY->Po_Quantity;
            $Po_PriceSNTDCY = $Po_PriceSNTDCY + $PoPriceSNTDCY;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcsSNTDCY = $SNTDCY->Neg_Quantity;
            $Neg_PcsSNTDCY = $Neg_PcsSNTDCY + $NegPcsSNTDCY;


            $NegPriceSNTDCY = $NumberSNTDCY * $SNTDCY->Neg_Quantity;
            $Neg_PriceSNTDCY = $Neg_PriceSNTDCY + $NegPriceSNTDCY;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcsSNTDCY = $PCSAfterSNTDCY + $PoPcsSNTDCY + $NegPcsSNTDCY;
            $BackChange_PcsSNTDCY = $BackChange_PcsSNTDCY + $BackChangePcsSNTDCY;

            $BackChangePriceSNTDCY = $PriceAfterSNTDCY + $PoPriceSNTDCY + $NegPriceSNTDCY;
            $BackChange_PriceSNTDCY = $BackChange_PriceSNTDCY + $BackChangePriceSNTDCY;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcsSNTDCY = $SNTDCY->purchase_Quantity;
            $Purchase_PcsSNTDCY = $Purchase_PcsSNTDCY + $PurchasePcsSNTDCY;

            $PurchasePriceSNTDCY = $SNTDCY->purchase_Cost;
            $Purchase_PriceSNTDCY = $Purchase_PriceSNTDCY + $PurchasePriceSNTDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcsSNTDCY = $SNTDCY->a7f1fgbu02s_Quantity + $SNTDCY->a7f2fgbu10s_Quantity + $SNTDCY->a7f2thbu05s_Quantity + $SNTDCY->a7f2debu10s_Quantity + $SNTDCY->a7f2exbu11s_Quantity + $SNTDCY->a7f2twbu04s_Quantity + $SNTDCY->a7f2twbu07s_Quantity + $SNTDCY->a7f2cebu10s_Quantity;
            $ReciveTranfer_PcsSNTDCY = $ReciveTranfer_PcsSNTDCY + $ReciveTranferPcsSNTDCY;

            $ReciveTranferPriceSNTDCY = $ReciveTranferPcsSNTDCY * $SNTDCY->PriceAvg;
            $ReciveTranfer_PriceSNTDCY = $ReciveTranfer_PriceSNTDCY + $ReciveTranferPriceSNTDCY;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantitySNTDCY = $SNTDCY->returncuses_Quantity;
            $ReturnItem_PCSSNTDCY = $ReturnItem_PCSSNTDCY + $ReturnItemQuantitySNTDCY;

            $ReturnItemPriceSNTDCY = $ReturnItemQuantitySNTDCY * $NumberSNTDCY;
            $ReturnItem_PriceSNTDCY = $ReturnItem_PriceSNTDCY + $ReturnItemPriceSNTDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcsSNTDCY = $SNTDCY->purchase_Quantity + $ReciveTranferPcsSNTDCY + $ReturnItemQuantitySNTDCY;
            $AllIn_PcsSNTDCY = $AllIn_PcsSNTDCY + $AllInPcsSNTDCY;

            $AllInPriceSNTDCY = $PurchasePriceSNTDCY + $ReciveTranferPriceSNTDCY + $ReturnItemPriceSNTDCY;
            $AllIn_PriceSNTDCY = $AllIn_PriceSNTDCY + $AllInPriceSNTDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcsSNTDCY = $SNTDCY->dc1_s_Quantity + $SNTDCY->dcp_s_Quantity + $SNTDCY->dcy_s_Quantity + $SNTDCY->dex_s_Quantity;
            $SendSale_PcsSNTDCY = $SendSale_PcsSNTDCY + $SendSalePcsSNTDCY;

            if ($BackChangePcsSNTDCY > 0 && $AllInPcsSNTDCY > 0) {
                $SendSalePriceSNTDCY = (($AllInPriceSNTDCY + $BackChangePriceSNTDCY) / ($AllInPcsSNTDCY + $BackChangePcsSNTDCY)) * $SendSalePcsSNTDCY;
                $SendSale_PriceSNTDCY = $SendSale_PriceSNTDCY + $SendSalePriceSNTDCY;
            }

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $ReciveTranOutPcsSNTDCY = $SNTDCY->a8f1fgbu02s_Quantity + $SNTDCY->a8f2fgbu10s_Quantity + $SNTDCY->a8f2thbu05s_Quantity + $SNTDCY->a8f2debu10s_Quantity + $SNTDCY->a8f2exbu11s_Quantity + $SNTDCY->a8f2twbu04s_Quantity + $SNTDCY->a8f2twbu07s_Quantity + $SNTDCY->a8f2cebu10s_Quantity;
            $ReciveTranOut_PcsSNTDCY = $ReciveTranOut_PcsSNTDCY + $ReciveTranOutPcsSNTDCY;

            if ($AllInPcsSNTDCY > 0 && $BackChangePcsSNTDCY > 0) {
                $ReciveTranOutPriceSNTDCY = (($AllInPriceSNTDCY + $BackChangePriceSNTDCY) / ($AllInPcsSNTDCY + $BackChangePcsSNTDCY)) * $ReciveTranOutPcsSNTDCY;
                $ReciveTranOut_PriceSNTDCY = $ReciveTranOut_PriceSNTDCY + $ReciveTranOutPriceSNTDCY;
            }

            /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

            $ReturnStorePcsSNTDCY = $SNTDCY->returnitem_Quantity;
            $ReturnStore_PcsSNTDCY = $ReturnStore_PcsSNTDCY + $ReturnStorePcsSNTDCY;

            if ($AllInPcsSNTDCY > 0 && $BackChangePcsSNTDCY > 0) {
                $ReturnStorePriceSNTDCY = (($AllInPriceSNTDCY + $BackChangePriceSNTDCY) / ($AllInPcsSNTDCY + $BackChangePcsSNTDCY)) * $ReturnStorePcsSNTDCY;
                $ReturnStore_PriceSNTDCY = $ReturnStore_PriceSNTDCY + $ReturnStorePriceSNTDCY;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcsSNTDCY = $ReturnStorePcsSNTDCY + $ReciveTranOutPcsSNTDCY + $SendSalePcsSNTDCY;
            $AllOut_PcsSNTDCY = $AllOut_PcsSNTDCY + $AllOutPcsSNTDCY;

            $AllOutPriceSNTDCY = $SendSale_PriceSNTDCY + $ReciveTranOut_PriceSNTDCY + $ReturnStore_PriceSNTDCY;
            $AllOut_PriceSNTDCY = $AllOut_PriceSNTDCY + $AllOutPriceSNTDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcsSNTDCY = $BackChangePcsSNTDCY + $AllInPcsSNTDCY + $AllOutPcsSNTDCY;
            $Calculate_PcsSNTDCY = $Calculate_PcsSNTDCY + $CalculatePcsSNTDCY;

            $CalculatePriceSNTDCY = $BackChangePriceSNTDCY + $AllInPriceSNTDCY + $AllOutPriceSNTDCY;
            $Calculate_PriceSNTDCY = $Calculate_PriceSNTDCY + $CalculatePriceSNTDCY;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcsSNTDCY = $SNTDCY->item_stock_Quantity;
            $NewCalculate_PcsSNTDCY = $NewCalculate_PcsSNTDCY + $NewCalculatePcsSNTDCY;

            $NewCalculatePriceSNTDCY = $SNTDCY->item_stock_Amount;
            $NewCalculate_PriceSNTDCY = $NewCalculate_PriceSNTDCY + $NewCalculatePriceSNTDCY;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcsSNTDCY = $NewCalculatePcsSNTDCY - $CalculatePcsSNTDCY;
            $Diff_PcsSNTDCY = $Diff_PcsSNTDCY + $DiffPcsSNTDCY;

            $DiffPriceSNTDCY = $NewCalculatePriceSNTDCY - $CalculatePriceSNTDCY;
            $Diff_PriceSNTDCY = $Diff_PriceSNTDCY + $DiffPriceSNTDCY;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcsSNTDCY = $CalculatePcsSNTDCY;
            $NewTotal_PcsSNTDCY = $NewTotal_PcsSNTDCY + $CalculatePcsSNTDCY;

            $NewTotalPriceSNTDCY = $NewTotalPcsSNTDCY * $SNTDCY->PriceAvg;
            $NewTotal_PriceSNTDCY = $NewTotal_PriceSNTDCY + $NewTotalPriceSNTDCY;

            $NewTotalDiffNavSNTDCY = $NewTotalPriceSNTDCY - $NewCalculatePriceSNTDCY;
            $NewTotalDiff_NavSNTDCY = $NewTotalDiff_NavSNTDCY + $NewTotalDiffNavSNTDCY;

            $NewTotalDiffCalSNTDCY = $NewTotalPriceSNTDCY - $CalculatePriceSNTDCY;
            $NewTotalDiff_CalSNTDCY = $NewTotalDiff_CalSNTDCY + $NewTotalDiffCalSNTDCY;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $a7f1fgbu02sPcsSNTDCY = $SNTDCY->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_PcsSNTDCY = $a7f1fgbu02s_PcsSNTDCY + $a7f1fgbu02sPcsSNTDCY;

            $a7f1fgbu02sPriceSNTDCY = $a7f1fgbu02sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f1fgbu02s_PriceSNTDCY = $a7f1fgbu02s_PriceSNTDCY + $a7f1fgbu02sPriceSNTDCY;

            $a7f2fgbu10sPcsSNTDCY = $SNTDCY->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_PcsSNTDCY = $a7f2fgbu10s_PcsSNTDCY + $a7f2fgbu10sPcsSNTDCY;

            $a7f2fgbu10sPriceSNTDCY = $a7f2fgbu10sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2fgbu10s_PriceSNTDCY = $a7f2fgbu10s_PriceSNTDCY + $a7f2fgbu10sPriceSNTDCY;

            $a7f2thbu05sPcsSNTDCY = $SNTDCY->a7f2thbu05s_Quantity;
            $a7f2thbu05s_PcsSNTDCY = $a7f2thbu05s_PcsSNTDCY + $a7f2thbu05sPcsSNTDCY;

            $a7f2thbu05sPriceSNTDCY = $a7f2thbu05sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2thbu05s_PriceSNTDCY = $a7f2thbu05s_PriceSNTDCY + $a7f2thbu05sPriceSNTDCY;

            $a7f2debu10sPcsSNTDCY = $SNTDCY->a7f2debu10s_Quantity;
            $a7f2debu10s_PcsSNTDCY = $a7f2debu10s_PcsSNTDCY + $a7f2debu10sPcsSNTDCY;

            $a7f2debu10sPriceSNTDCY = $a7f2debu10sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2debu10s_PriceSNTDCY = $a7f2debu10s_PriceSNTDCY + $a7f2debu10sPriceSNTDCY;

            $a7f2exbu11sPcsSNTDCY = $SNTDCY->a7f2exbu11s_Quantity;
            $a7f2exbu11s_PcsSNTDCY = $a7f2exbu11s_PcsSNTDCY + $a7f2exbu11sPcsSNTDCY;

            $a7f2exbu11sPriceSNTDCY = $a7f2exbu11sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2exbu11s_PriceSNTDCY = $a7f2exbu11s_PriceSNTDCY + $a7f2exbu11sPriceSNTDCY;

            $a7f2twbu04sPcsSNTDCY = $SNTDCY->a7f2twbu04s_Quantity;
            $a7f2twbu04s_PcsSNTDCY = $a7f2twbu04s_PcsSNTDCY + $a7f2twbu04sPcsSNTDCY;

            $a7f2twbu04sPriceSNTDCY = $a7f2twbu04sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2twbu04s_PriceSNTDCY = $a7f2twbu04s_PriceSNTDCY + $a7f2twbu04sPriceSNTDCY;

            $a7f2twbu07sPcsSNTDCY = $SNTDCY->a7f2twbu07s_Quantity;
            $a7f2twbu07s_PcsSNTDCY = $a7f2twbu07s_PcsSNTDCY + $a7f2twbu07sPcsSNTDCY;

            $a7f2twbu07sPriceSNTDCY = $a7f2twbu07sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2twbu07s_PriceSNTDCY = $a7f2twbu07s_PriceSNTDCY + $a7f2twbu07sPriceSNTDCY;

            $a7f2cebu10sPcsSNTDCY = $SNTDCY->a7f2cebu10s_Quantity;
            $a7f2cebu10s_PcsSNTDCY = $a7f2cebu10s_PcsSNTDCY + $a7f2cebu10sPcsSNTDCY;

            $a7f2cebu10sPriceSNTDCY = $a7f2cebu10sPcsSNTDCY * $SNTDCY->PriceAvg;
            $a7f2cebu10s_PriceSNTDCY = $a7f2cebu10s_PriceSNTDCY + $a7f2cebu10sPriceSNTDCY;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcsSNTDCY = $SNTDCY->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_PcsSNTDCY = $a8f1fgbu02s_PcsSNTDCY + $a8f1fgbu02sPcsSNTDCY;

            $a8f1fgbu02sPriceSNTDCY = $a8f1fgbu02sPcsSNTDCY * $NumberSNTDCY;
            $a8f1fgbu02s_PriceSNTDCY = $a8f1fgbu02s_PriceSNTDCY + $a8f1fgbu02sPriceSNTDCY;

            $a8f2fgbu10sPcsSNTDCY = $SNTDCY->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_PcsSNTDCY = $a8f2fgbu10s_PcsSNTDCY + $a8f2fgbu10sPcsSNTDCY;

            $a8f2fgbu10sPriceSNTDCY = $a8f2fgbu10sPcsSNTDCY * $NumberSNTDCY;
            $a8f2fgbu10s_PriceSNTDCY = $a8f2fgbu10s_PriceSNTDCY + $a8f2fgbu10sPriceSNTDCY;

            $a8f2thbu05sPcsSNTDCY = $SNTDCY->a8f2thbu05s_Quantity;
            $a8f2thbu05s_PcsSNTDCY = $a8f2thbu05s_PcsSNTDCY + $a8f2thbu05sPcsSNTDCY;

            $a8f2thbu05sPriceSNTDCY = $a8f2thbu05sPcsSNTDCY * $NumberSNTDCY;
            $a8f2thbu05s_PriceSNTDCY = $a8f2thbu05s_PriceSNTDCY + $a8f2thbu05sPriceSNTDCY;

            $a8f2debu10sPcsSNTDCY = $SNTDCY->a8f2debu10s_Quantity;
            $a8f2debu10s_PcsSNTDCY = $a8f2debu10s_PcsSNTDCY + $a8f2debu10sPcsSNTDCY;

            $a8f2debu10sPriceSNTDCY = $a8f2debu10sPcsSNTDCY * $NumberSNTDCY;
            $a8f2debu10s_PriceSNTDCY = $a8f2debu10s_PriceSNTDCY + $a8f2debu10sPriceSNTDCY;

            $a8f2exbu11sPcsSNTDCY = $SNTDCY->a8f2exbu11s_Quantity;
            $a8f2exbu11s_PcsSNTDCY = $a8f2exbu11s_PcsSNTDCY + $a8f2exbu11sPcsSNTDCY;

            $a8f2exbu11sPriceSNTDCY = $a8f2exbu11sPcsSNTDCY * $NumberSNTDCY;
            $a8f2exbu11s_PriceSNTDCY = $a8f2exbu11s_PriceSNTDCY + $a8f2exbu11sPriceSNTDCY;

            $a8f2twbu04sPcsSNTDCY = $SNTDCY->a8f2twbu04s_Quantity;
            $a8f2twbu04s_PcsSNTDCY = $a8f2twbu04s_PcsSNTDCY + $a8f2twbu04sPcsSNTDCY;

            $a8f2twbu04sPriceSNTDCY = $a8f2twbu04sPcsSNTDCY * $NumberSNTDCY;
            $a8f2twbu04s_PriceSNTDCY = $a8f2twbu04s_PriceSNTDCY + $a8f2twbu04sPriceSNTDCY;

            $a8f2twbu07sPcsSNTDCY = $SNTDCY->a8f2twbu07s_Quantity;
            $a8f2twbu07s_PcsSNTDCY = $a8f2twbu07s_PcsSNTDCY + $a8f2twbu07sPcsSNTDCY;

            $a8f2twbu07sPriceSNTDCY = $a8f2twbu07sPcsSNTDCY * $NumberSNTDCY;
            $a8f2twbu07s_PriceSNTDCY = $a8f2twbu07s_PriceSNTDCY + $a8f2twbu07sPriceSNTDCY;

            $a8f2cebu10sPcsSNTDCY = $SNTDCY->a8f2cebu10s_Quantity;
            $a8f2cebu10s_PcsSNTDCY = $a8f2cebu10s_PcsSNTDCY + $a8f2cebu10sPcsSNTDCY;

            $a8f2cebu10sPriceSNTDCY = $a8f2cebu10sPcsSNTDCY * $NumberSNTDCY;
            $a8f2cebu10s_PriceSNTDCY = $a8f2cebu10s_PriceSNTDCY + $a8f2cebu10sPriceSNTDCY;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1PcsSNTDCY = $SNTDCY->dc1_s_Quantity;
            $DC1_PcsSNTDCY = $DC1_PcsSNTDCY + $DC1PcsSNTDCY;

            $DC1PriceSNTDCY = $DC1PcsSNTDCY * $NumberSNTDCY;
            $DC1_PriceSNTDCY = $DC1_PriceSNTDCY + $DC1PriceSNTDCY;

            $DCPPcsSNTDCY = $SNTDCY->dcp_s_Quantity;
            $DCP_PcsSNTDCY = $DCP_PcsSNTDCY + $DCPPcsSNTDCY;

            $DCPPriceSNTDCY = $DCPPcsSNTDCY * $NumberSNTDCY;
            $DCP_PriceSNTDCY = $DCP_PriceSNTDCY + $DCPPriceSNTDCY;

            $DCYPcsSNTDCY = $SNTDCY->dcy_s_Quantity;
            $DCY_PcsSNTDCY = $DCY_PcsSNTDCY + $DCYPcsSNTDCY;

            $DCYPriceSNTDCY = $DCYPcsSNTDCY * $NumberSNTDCY;
            $DCY_PriceSNTDCY = $DCY_PriceSNTDCY + $DCYPriceSNTDCY;

            $DEXPcsSNTDCY = $SNTDCY->dex_s_Quantity;
            $DEX_PcsSNTDCY = $DEX_PcsSNTDCY + $DEXPcsSNTDCY;

            $DEXPriceSNTDCY = $DEXPcsSNTDCY * $NumberSNTDCY;
            $DEX_PriceSNTDCY = $DEX_PriceSNTDCY + $DEXPriceSNTDCY;
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////


        $Pcs_AfterAllProduct = $Pcs_AfterMT + $Pcs_AfterNT + $Pcs_AfterLN + $Pcs_AfterTW;
        $Price_AfterAllProduct = $Price_AfterMT + $Price_AfterNT + $Price_AfterLN + $Price_AfterTW;
        $Pcs_AfterAllProduct =  $Pcs_AfterMT + $Pcs_AfterNT + $Pcs_AfterLN + $Pcs_AfterTW;
        $Price_AfterAllProduct =  $Price_AfterMT + $Price_AfterNT + $Price_AfterLN + $Price_AfterTW;
        $Po_PcsAllProduct = $Po_PcsMT + $Po_PcsNT + $Po_PcsLN + $Po_PcsTW;
        $Po_PriceAllProduct =  $Po_PriceMT + $Po_PriceNT + $Po_PriceLN + $Po_PriceTW;
        $Neg_PcsAllProduct =  $Neg_PcsMT + $Neg_PcsNT + $Neg_PcsLN + $Neg_PcsTW;
        $Neg_PriceAllProduct =  $Neg_PriceMT + $Neg_PriceNT + $Neg_PriceLN + $Neg_PriceTW;
        $BackChange_PcsAllProduct =  $BackChange_PcsMT + $BackChange_PcsNT + $BackChange_PcsLN + $BackChange_PcsTW;
        $BackChange_PriceAllProduct =  $BackChange_PriceMT + $BackChange_PriceNT + $BackChange_PriceLN + $BackChange_PriceTW;
        $Purchase_PcsAllProduct =  $Purchase_PcsMT + $Purchase_PcsNT + $Purchase_PcsLN + $Purchase_PcsTW;
        $Purchase_PriceAllProduct =  $Purchase_PriceMT + $Purchase_PriceNT + $Purchase_PriceLN + $Purchase_PriceTW;
        $ReciveTranfer_PcsAllProduct =  $ReciveTranfer_PcsMT + $ReciveTranfer_PcsNT + $ReciveTranfer_PcsLN + $ReciveTranfer_PcsTW;
        $ReciveTranfer_PriceAllProduct =  $ReciveTranfer_PriceMT + $ReciveTranfer_PriceNT + $ReciveTranfer_PriceLN + $ReciveTranfer_PriceTW;
        $ReturnItem_PCSAllProduct =  $ReturnItem_PCSMT + $ReturnItem_PCSNT + $ReturnItem_PCSLN + $ReturnItem_PCSTW;
        $ReturnItem_PriceAllProduct =  $ReturnItem_PriceMT + $ReturnItem_PriceNT + $ReturnItem_PriceLN + $ReturnItem_PriceTW;
        $AllIn_PcsAllProduct =  $AllIn_PcsMT + $AllIn_PcsNT + $AllIn_PcsLN + $AllIn_PcsTW;
        $AllIn_PriceAllProduct =  $AllIn_PriceMT + $AllIn_PriceNT + $AllIn_PriceLN + $AllIn_PriceTW;
        $SendSale_PcsAllProduct =  $SendSale_PcsMT + $SendSale_PcsNT + $SendSale_PcsLN + $SendSale_PcsTW;
        $SendSale_PriceAllProduct =  $SendSale_PriceMT + $SendSale_PriceNT + $SendSale_PriceLN + $SendSale_PriceTW;
        $ReciveTranOut_PcsAllProduct =  $ReciveTranOut_PcsMT + $ReciveTranOut_PcsNT + $ReciveTranOut_PcsLN + $ReciveTranOut_PcsTW;
        $ReciveTranOut_PriceAllProduct =  $ReciveTranOut_PriceMT + $ReciveTranOut_PriceNT + $ReciveTranOut_PriceLN + $ReciveTranOut_PriceTW;
        $ReturnStore_PcsAllProduct =  $ReturnStore_PcsMT + $ReturnStore_PcsNT + $ReturnStore_PcsLN + $ReturnStore_PcsTW;
        $ReturnStore_PriceAllProduct =  $ReturnStore_PriceMT + $ReturnStore_PriceNT + $ReturnStore_PriceLN + $ReturnStore_PriceTW;
        $AllOut_PcsAllProduct =  $AllOut_PcsMT + $AllOut_PcsNT + $AllOut_PcsLN + $AllOut_PcsTW;
        $AllOut_PriceAllProduct =  $AllOut_PriceMT + $AllOut_PriceNT + $AllOut_PriceLN + $AllOut_PriceTW;
        $Calculate_PcsAllProduct =  $Calculate_PcsMT + $Calculate_PcsNT + $Calculate_PcsLN + $Calculate_PcsTW;
        $Calculate_PriceAllProduct =  $Calculate_PriceMT + $Calculate_PriceNT + $Calculate_PriceLN + $Calculate_PriceTW;
        $NewCalculate_PcsAllProduct = $NewCalculate_PcsMT + $NewCalculate_PcsNT + $NewCalculate_PcsLN + $NewCalculate_PcsTW;
        $NewCalculate_PriceAllProduct = $NewCalculate_PriceMT + $NewCalculate_PriceNT + $NewCalculate_PriceLN + $NewCalculate_PriceTW;
        $Diff_PcsAllProduct = $Diff_PcsMT + $Diff_PcsNT + $Diff_PcsLN + $Diff_PcsTW;
        $Diff_PriceAllProduct = $Diff_PriceMT + $Diff_PriceNT + $Diff_PriceLN + $Diff_PriceTW;
        $NewTotal_PcsAllProduct = $NewTotal_PcsMT + $NewTotal_PcsNT + $NewTotal_PcsLN + $NewTotal_PcsTW;
        $NewTotal_PriceAllProduct = $NewTotal_PriceMT + $NewTotal_PriceNT + $NewTotal_PriceLN + $NewTotal_PriceTW;
        $NewTotalDiff_NavAllProduct = $NewTotalDiff_NavMT + $NewTotalDiff_NavNT + $NewTotalDiff_NavLN + $NewTotalDiff_NavTW;
        $NewTotalDiff_CalAllProduct = $NewTotalDiff_CalMT + $NewTotalDiff_CalNT + $NewTotalDiff_CalLN + $NewTotalDiff_CalTW;
        $a7f1fgbu02s_PcsAllProduct = $a7f1fgbu02s_PcsMT + $a7f1fgbu02s_PcsNT + $a7f1fgbu02s_PcsLN + $a7f1fgbu02s_PcsTW;
        $a7f1fgbu02s_PriceAllProduct = $a7f1fgbu02s_PriceMT + $a7f1fgbu02s_PriceNT + $a7f1fgbu02s_PriceLN + $a7f1fgbu02s_PriceTW;
        $a7f2fgbu10s_PcsAllProduct = $a7f2fgbu10s_PcsMT + $a7f2fgbu10s_PcsNT + $a7f2fgbu10s_PcsLN + $a7f2fgbu10s_PcsTW;
        $a7f2fgbu10s_PriceAllProduct = $a7f2fgbu10s_PriceMT + $a7f2fgbu10s_PriceNT + $a7f2fgbu10s_PriceLN + $a7f2fgbu10s_PriceTW;
        $a7f2thbu05s_PcsAllProduct = $a7f2thbu05s_PcsMT + $a7f2thbu05s_PcsNT + $a7f2thbu05s_PcsLN + $a7f2thbu05s_PcsTW;
        $a7f2thbu05s_PriceAllProduct = $a7f2thbu05s_PriceMT + $a7f2thbu05s_PriceNT + $a7f2thbu05s_PriceLN + $a7f2thbu05s_PriceTW;
        $a7f2debu10s_PcsAllProduct = $a7f2debu10s_PcsMT + $a7f2debu10s_PcsNT + $a7f2debu10s_PcsLN + $a7f2debu10s_PcsTW;
        $a7f2debu10s_PriceAllProduct = $a7f2debu10s_PriceMT + $a7f2debu10s_PriceNT + $a7f2debu10s_PriceLN + $a7f2debu10s_PriceTW;
        $a7f2exbu11s_PcsAllProduct = $a7f2exbu11s_PcsMT + $a7f2exbu11s_PcsNT + $a7f2exbu11s_PcsLN + $a7f2exbu11s_PcsTW;
        $a7f2exbu11s_PriceAllProduct = $a7f2exbu11s_PriceMT + $a7f2exbu11s_PriceNT + $a7f2exbu11s_PriceLN + $a7f2exbu11s_PriceTW;
        $a7f2twbu04s_PcsAllProduct = $a7f2twbu04s_PcsMT + $a7f2twbu04s_PcsNT + $a7f2twbu04s_PcsLN + $a7f2twbu04s_PcsTW;
        $a7f2twbu04s_PriceAllProduct = $a7f2twbu04s_PriceMT + $a7f2twbu04s_PriceNT + $a7f2twbu04s_PriceLN + $a7f2twbu04s_PriceTW;
        $a7f2twbu07s_PcsAllProduct = $a7f2twbu07s_PcsMT + $a7f2twbu07s_PcsNT + $a7f2twbu07s_PcsLN + $a7f2twbu07s_PcsTW;
        $a7f2twbu07s_PriceAllProduct = $a7f2twbu07s_PriceMT + $a7f2twbu07s_PriceNT + $a7f2twbu07s_PriceLN + $a7f2twbu07s_PriceTW;
        $a7f2cebu10s_PcsAllProduct = $a7f2cebu10s_PcsMT + $a7f2cebu10s_PcsNT + $a7f2cebu10s_PcsLN + $a7f2cebu10s_PcsTW;
        $a7f2cebu10s_PriceAllProduct = $a7f2cebu10s_PriceMT + $a7f2cebu10s_PriceNT + $a7f2cebu10s_PriceLN + $a7f2cebu10s_PriceTW;
        $a8f1fgbu02s_PcsAllProduct = $a8f1fgbu02s_PcsMT + $a8f1fgbu02s_PcsNT + $a8f1fgbu02s_PcsLN + $a8f1fgbu02s_PcsTW;
        $a8f1fgbu02s_PriceAllProduct = $a8f1fgbu02s_PriceMT + $a8f1fgbu02s_PriceNT + $a8f1fgbu02s_PriceLN + $a8f1fgbu02s_PriceTW;
        $a8f2fgbu10s_PcsAllProduct = $a8f2fgbu10s_PcsMT + $a8f2fgbu10s_PcsNT + $a8f2fgbu10s_PcsLN + $a8f2fgbu10s_PcsTW;
        $a8f2fgbu10s_PriceAllProduct = $a8f2fgbu10s_PriceMT + $a8f2fgbu10s_PriceNT + $a8f2fgbu10s_PriceLN + $a8f2fgbu10s_PriceTW;
        $a8f2thbu05s_PcsAllProduct = $a8f2thbu05s_PcsMT + $a8f2thbu05s_PcsNT + $a8f2thbu05s_PcsLN + $a8f2thbu05s_PcsTW;
        $a8f2thbu05s_PriceAllProduct = $a8f2thbu05s_PriceMT + $a8f2thbu05s_PriceNT + $a8f2thbu05s_PriceLN + $a8f2thbu05s_PriceTW;
        $a8f2debu10s_PcsAllProduct = $a8f2debu10s_PcsMT + $a8f2debu10s_PcsNT + $a8f2debu10s_PcsLN + $a8f2debu10s_PcsTW;
        $a8f2debu10s_PriceAllProduct = $a8f2debu10s_PriceMT + $a8f2debu10s_PriceNT + $a8f2debu10s_PriceLN + $a8f2debu10s_PriceTW;
        $a8f2exbu11s_PcsAllProduct = $a8f2exbu11s_PcsMT + $a8f2exbu11s_PcsNT + $a8f2exbu11s_PcsLN + $a8f2exbu11s_PcsTW;
        $a8f2exbu11s_PriceAllProduct = $a8f2exbu11s_PriceMT + $a8f2exbu11s_PriceNT + $a8f2exbu11s_PriceLN + $a8f2exbu11s_PriceTW;
        $a8f2twbu04s_PcsAllProduct = $a8f2twbu04s_PcsMT + $a8f2twbu04s_PcsNT + $a8f2twbu04s_PcsLN + $a8f2twbu04s_PcsTW;
        $a8f2twbu04s_PriceAllProduct = $a8f2twbu04s_PriceMT + $a8f2twbu04s_PriceNT + $a8f2twbu04s_PriceLN + $a8f2twbu04s_PriceTW;
        $a8f2twbu07s_PcsAllProduct = $a8f2twbu07s_PcsMT + $a8f2twbu07s_PcsNT + $a8f2twbu07s_PcsLN + $a8f2twbu07s_PcsTW;
        $a8f2twbu07s_PriceAllProduct = $a8f2twbu07s_PriceMT + $a8f2twbu07s_PriceNT + $a8f2twbu07s_PriceLN + $a8f2twbu07s_PriceTW;
        $a8f2cebu10s_PcsAllProduct = $a8f2cebu10s_PcsMT + $a8f2cebu10s_PcsNT + $a8f2cebu10s_PcsLN + $a8f2cebu10s_PcsTW;
        $a8f2cebu10s_PriceAllProduct = $a8f2cebu10s_PriceMT + $a8f2cebu10s_PriceNT + $a8f2cebu10s_PriceLN + $a8f2cebu10s_PriceTW;
        $DC1_PcsAllProduct = $DC1_PcsMT + $DC1_PcsNT + $DC1_PcsLN + $DC1_PcsTW;
        $DC1_PriceAllProduct = $DC1_PriceMT + $DC1_PriceNT + $DC1_PriceLN + $DC1_PriceTW;
        $DCP_PcsAllProduct = $DCP_PcsMT + $DCP_PcsNT + $DCP_PcsLN + $DCP_PcsTW;
        $DCP_PriceAllProduct = $DCP_PriceMT + $DCP_PriceNT + $DCP_PriceLN + $DCP_PriceTW;
        $DCY_PcsAllProduct = $DCY_PcsMT + $DCY_PcsNT + $DCY_PcsLN + $DCY_PcsTW;
        $DCY_PriceAllProduct = $DCY_PriceMT + $DCY_PriceNT + $DCY_PriceLN + $DCY_PriceTW;
        $DEX_PcsAllProduct = $DEX_PcsMT + $DEX_PcsNT + $DEX_PcsLN + $DEX_PcsTW;
        $DEX_PriceAllProduct = $DEX_PriceMT + $DEX_PriceNT + $DEX_PriceLN + $DEX_PriceTW;

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllSale =  $Pcs_AfterAS + $Pcs_AfterSTW + $Pcs_AfterSLN + $Pcs_AfterSFN + $Pcs_AfterSMT + $Pcs_AfterSNT;
        $Price_AfterAllSale = $Price_AfterAS + $Price_AfterSTW + $Price_AfterSLN + $Price_AfterSFN + $Price_AfterSMT + $Price_AfterSNT;
        $Pcs_AfterAllSale =  $Pcs_AfterAS + $Pcs_AfterSTW + $Pcs_AfterSLN + $Pcs_AfterSFN + $Pcs_AfterSMT + $Pcs_AfterSNT;
        $Price_AfterAllSale =  $Price_AfterAS + $Price_AfterSTW + $Price_AfterSLN + $Price_AfterSFN + $Price_AfterSMT + $Price_AfterSNT;
        $Po_PcsAllSale = $Po_PcsAS + $Po_PcsSTW + $Po_PcsSLN + $Po_PcsSFN + $Po_PcsSMT + $Po_PcsSNT;
        $Po_PriceAllSale =  $Po_PriceAS + $Po_PriceSTW + $Po_PriceSLN + $Po_PriceSFN + $Po_PriceSMT + $Po_PriceSNT;
        $Neg_PcsAllSale =  $Neg_PcsAS + $Neg_PcsSTW + $Neg_PcsSLN + $Neg_PcsSFN + $Neg_PcsSMT + $Neg_PcsSNT;
        $Neg_PriceAllSale =  $Neg_PriceAS + $Neg_PriceSTW + $Neg_PriceSLN + $Neg_PriceSFN + $Neg_PriceSMT + $Neg_PriceSNT;
        $BackChange_PcsAllSale =  $BackChange_PcsAS + $BackChange_PcsSTW + $BackChange_PcsSLN + $BackChange_PcsSFN + $BackChange_PcsSMT + $BackChange_PcsSNT;
        $BackChange_PriceAllSale =  $BackChange_PriceAS + $BackChange_PriceSTW + $BackChange_PriceSLN + $BackChange_PriceSFN + $BackChange_PriceSMT + $BackChange_PriceSNT;
        $Purchase_PcsAllSale =  $Purchase_PcsAS + $Purchase_PcsSTW + $Purchase_PcsSLN + $Purchase_PcsSFN + $Purchase_PcsSMT + $Purchase_PcsSNT;
        $Purchase_PriceAllSale =  $Purchase_PriceAS + $Purchase_PriceSTW + $Purchase_PriceSLN + $Purchase_PriceSFN + $Purchase_PriceSMT + $Purchase_PriceSNT;
        $ReciveTranfer_PcsAllSale =  $ReciveTranfer_PcsAS + $ReciveTranfer_PcsSTW + $ReciveTranfer_PcsSLN + $ReciveTranfer_PcsSFN + $ReciveTranfer_PcsSMT + $ReciveTranfer_PcsSNT;
        $ReciveTranfer_PriceAllSale =  $ReciveTranfer_PriceAS + $ReciveTranfer_PriceSTW + $ReciveTranfer_PriceSLN + $ReciveTranfer_PriceSFN + $ReciveTranfer_PriceSMT + $ReciveTranfer_PriceSNT;
        $ReturnItem_PCSAllSale =  $ReturnItem_PCSAS + $ReturnItem_PCSSTW + $ReturnItem_PCSSLN + $ReturnItem_PCSSFN + $ReturnItem_PCSSMT + $ReturnItem_PCSSNT;
        $ReturnItem_PriceAllSale =  $ReturnItem_PriceAS + $ReturnItem_PriceSTW + $ReturnItem_PriceSLN + $ReturnItem_PriceSFN + $ReturnItem_PriceSMT + $ReturnItem_PriceSNT;
        $AllIn_PcsAllSale =  $AllIn_PcsAS + $AllIn_PcsSTW + $AllIn_PcsSLN + $AllIn_PcsSFN + $AllIn_PcsSMT + $AllIn_PcsSNT;
        $AllIn_PriceAllSale =  $AllIn_PriceAS + $AllIn_PriceSTW + $AllIn_PriceSLN + $AllIn_PriceSFN + $AllIn_PriceSMT + $AllIn_PriceSNT;
        $SendSale_PcsAllSale =  $SendSale_PcsAS + $SendSale_PcsSTW + $SendSale_PcsSLN + $SendSale_PcsSFN + $SendSale_PcsSMT + $SendSale_PcsSNT;
        $SendSale_PriceAllSale =  $SendSale_PriceAS + $SendSale_PriceSTW + $SendSale_PriceSLN + $SendSale_PriceSFN + $SendSale_PriceSMT + $SendSale_PriceSNT;
        $ReciveTranOut_PcsAllSale =  $ReciveTranOut_PcsAS + $ReciveTranOut_PcsSTW + $ReciveTranOut_PcsSLN + $ReciveTranOut_PcsSFN + $ReciveTranOut_PcsSMT + $ReciveTranOut_PcsSNT;
        $ReciveTranOut_PriceAllSale =  $ReciveTranOut_PriceAS + $ReciveTranOut_PriceSTW + $ReciveTranOut_PriceSLN + $ReciveTranOut_PriceSFN + $ReciveTranOut_PriceSMT + $ReciveTranOut_PriceSNT;
        $ReturnStore_PcsAllSale =  $ReturnStore_PcsAS + $ReturnStore_PcsSTW + $ReturnStore_PcsSLN + $ReturnStore_PcsSFN + $ReturnStore_PcsSMT + $ReturnStore_PcsSNT;
        $ReturnStore_PriceAllSale =  $ReturnStore_PriceAS + $ReturnStore_PriceSTW + $ReturnStore_PriceSLN + $ReturnStore_PriceSFN + $ReturnStore_PriceSMT + $ReturnStore_PriceSNT;
        $AllOut_PcsAllSale =  $AllOut_PcsAS + $AllOut_PcsSTW + $AllOut_PcsSLN + $AllOut_PcsSFN + $AllOut_PcsSMT + $AllOut_PcsSNT;
        $AllOut_PriceAllSale =  $AllOut_PriceAS + $AllOut_PriceSTW + $AllOut_PriceSLN + $AllOut_PriceSFN + $AllOut_PriceSMT + $AllOut_PriceSNT;
        $Calculate_PcsAllSale =  $Calculate_PcsAS + $Calculate_PcsSTW + $Calculate_PcsSLN + $Calculate_PcsSFN + $Calculate_PcsSMT + $Calculate_PcsSNT;
        $Calculate_PriceAllSale =  $Calculate_PriceAS + $Calculate_PriceSTW + $Calculate_PriceSLN + $Calculate_PriceSFN + $Calculate_PriceSMT + $Calculate_PriceSNT;
        $NewCalculate_PcsAllSale = $NewCalculate_PcsAS + $NewCalculate_PcsSTW + $NewCalculate_PcsSLN + $NewCalculate_PcsSFN + $NewCalculate_PcsSMT + $NewCalculate_PcsSNT;
        $NewCalculate_PriceAllSale = $NewCalculate_PriceAS + $NewCalculate_PriceSTW + $NewCalculate_PriceSLN + $NewCalculate_PriceSFN + $NewCalculate_PriceSMT + $NewCalculate_PriceSNT;
        $Diff_PcsAllSale = $Diff_PcsAS + $Diff_PcsSTW + $Diff_PcsSLN + $Diff_PcsSFN + $Diff_PcsSMT + $Diff_PcsSNT;
        $Diff_PriceAllSale = $Diff_PriceAS + $Diff_PriceSTW + $Diff_PriceSLN + $Diff_PriceSFN + $Diff_PriceSMT + $Diff_PriceSNT;
        $NewTotal_PcsAllSale = $NewTotal_PcsAS + $NewTotal_PcsSTW + $NewTotal_PcsSLN + $NewTotal_PcsSFN + $NewTotal_PcsSMT + $NewTotal_PcsSNT;
        $NewTotal_PriceAllSale = $NewTotal_PriceAS + $NewTotal_PriceSTW + $NewTotal_PriceSLN + $NewTotal_PriceSFN + $NewTotal_PriceSMT + $NewTotal_PriceSNT;
        $NewTotalDiff_NavAllSale = $NewTotalDiff_NavAS + $NewTotalDiff_NavSTW + $NewTotalDiff_NavSLN + $NewTotalDiff_NavSFN + $NewTotalDiff_NavSMT + $NewTotalDiff_NavSNT;
        $NewTotalDiff_CalAllSale = $NewTotalDiff_CalAS + $NewTotalDiff_CalSTW + $NewTotalDiff_CalSLN + $NewTotalDiff_CalSFN + $NewTotalDiff_CalSMT + $NewTotalDiff_CalSNT;
        $a7f1fgbu02s_PcsAllSale = $a7f1fgbu02s_PcsAS + $a7f1fgbu02s_PcsSTW + $a7f1fgbu02s_PcsSLN + $a7f1fgbu02s_PcsSFN + $a7f1fgbu02s_PcsSMT + $a7f1fgbu02s_PcsSNT;
        $a7f1fgbu02s_PriceAllSale = $a7f1fgbu02s_PriceAS + $a7f1fgbu02s_PriceSTW + $a7f1fgbu02s_PriceSLN + $a7f1fgbu02s_PriceSFN + $a7f1fgbu02s_PriceSMT + $a7f1fgbu02s_PriceSNT;
        $a7f2fgbu10s_PcsAllSale = $a7f2fgbu10s_PcsAS + $a7f2fgbu10s_PcsSTW + $a7f2fgbu10s_PcsSLN + $a7f2fgbu10s_PcsSFN + $a7f2fgbu10s_PcsSMT + $a7f2fgbu10s_PcsSNT;
        $a7f2fgbu10s_PriceAllSale = $a7f2fgbu10s_PriceAS + $a7f2fgbu10s_PriceSTW + $a7f2fgbu10s_PriceSLN + $a7f2fgbu10s_PriceSFN + $a7f2fgbu10s_PriceSMT + $a7f2fgbu10s_PriceSNT;
        $a7f2thbu05s_PcsAllSale = $a7f2thbu05s_PcsAS + $a7f2thbu05s_PcsSTW + $a7f2thbu05s_PcsSLN + $a7f2thbu05s_PcsSFN + $a7f2thbu05s_PcsSMT + $a7f2thbu05s_PcsSNT;
        $a7f2thbu05s_PriceAllSale = $a7f2thbu05s_PriceAS + $a7f2thbu05s_PriceSTW + $a7f2thbu05s_PriceSLN + $a7f2thbu05s_PriceSFN + $a7f2thbu05s_PriceSMT + $a7f2thbu05s_PriceSNT;
        $a7f2debu10s_PcsAllSale = $a7f2debu10s_PcsAS + $a7f2debu10s_PcsSTW + $a7f2debu10s_PcsSLN + $a7f2debu10s_PcsSFN + $a7f2debu10s_PcsSMT + $a7f2debu10s_PcsSNT;
        $a7f2debu10s_PriceAllSale = $a7f2debu10s_PriceAS + $a7f2debu10s_PriceSTW + $a7f2debu10s_PriceSLN + $a7f2debu10s_PriceSFN + $a7f2debu10s_PriceSMT + $a7f2debu10s_PriceSNT;
        $a7f2exbu11s_PcsAllSale = $a7f2exbu11s_PcsAS + $a7f2exbu11s_PcsSTW + $a7f2exbu11s_PcsSLN + $a7f2exbu11s_PcsSFN + $a7f2exbu11s_PcsSMT + $a7f2exbu11s_PcsSNT;
        $a7f2exbu11s_PriceAllSale = $a7f2exbu11s_PriceAS + $a7f2exbu11s_PriceSTW + $a7f2exbu11s_PriceSLN + $a7f2exbu11s_PriceSFN + $a7f2exbu11s_PriceSMT + $a7f2exbu11s_PriceSNT;
        $a7f2twbu04s_PcsAllSale = $a7f2twbu04s_PcsAS + $a7f2twbu04s_PcsSTW + $a7f2twbu04s_PcsSLN + $a7f2twbu04s_PcsSFN + $a7f2twbu04s_PcsSMT + $a7f2twbu04s_PcsSNT;
        $a7f2twbu04s_PriceAllSale = $a7f2twbu04s_PriceAS + $a7f2twbu04s_PriceSTW + $a7f2twbu04s_PriceSLN + $a7f2twbu04s_PriceSFN + $a7f2twbu04s_PriceSMT + $a7f2twbu04s_PriceSNT;
        $a7f2twbu07s_PcsAllSale = $a7f2twbu07s_PcsAS + $a7f2twbu07s_PcsSTW + $a7f2twbu07s_PcsSLN + $a7f2twbu07s_PcsSFN + $a7f2twbu07s_PcsSMT + $a7f2twbu07s_PcsSNT;
        $a7f2twbu07s_PriceAllSale = $a7f2twbu07s_PriceAS + $a7f2twbu07s_PriceSTW + $a7f2twbu07s_PriceSLN + $a7f2twbu07s_PriceSFN + $a7f2twbu07s_PriceSMT + $a7f2twbu07s_PriceSNT;
        $a7f2cebu10s_PcsAllSale = $a7f2cebu10s_PcsAS + $a7f2cebu10s_PcsSTW + $a7f2cebu10s_PcsSLN + $a7f2cebu10s_PcsSFN + $a7f2cebu10s_PcsSMT + $a7f2cebu10s_PcsSNT;
        $a7f2cebu10s_PriceAllSale = $a7f2cebu10s_PriceAS + $a7f2cebu10s_PriceSTW + $a7f2cebu10s_PriceSLN + $a7f2cebu10s_PriceSFN + $a7f2cebu10s_PriceSMT + $a7f2cebu10s_PriceSNT;
        $a8f1fgbu02s_PcsAllSale = $a8f1fgbu02s_PcsAS + $a8f1fgbu02s_PcsSTW + $a8f1fgbu02s_PcsSLN + $a8f1fgbu02s_PcsSFN + $a8f1fgbu02s_PcsSMT + $a8f1fgbu02s_PcsSNT;
        $a8f1fgbu02s_PriceAllSale = $a8f1fgbu02s_PriceAS + $a8f1fgbu02s_PriceSTW + $a8f1fgbu02s_PriceSLN + $a8f1fgbu02s_PriceSFN + $a8f1fgbu02s_PriceSMT + $a8f1fgbu02s_PriceSNT;
        $a8f2fgbu10s_PcsAllSale = $a8f2fgbu10s_PcsAS + $a8f2fgbu10s_PcsSTW + $a8f2fgbu10s_PcsSLN + $a8f2fgbu10s_PcsSFN + $a8f2fgbu10s_PcsSMT + $a8f2fgbu10s_PcsSNT;
        $a8f2fgbu10s_PriceAllSale = $a8f2fgbu10s_PriceAS + $a8f2fgbu10s_PriceSTW + $a8f2fgbu10s_PriceSLN + $a8f2fgbu10s_PriceSFN + $a8f2fgbu10s_PriceSMT + $a8f2fgbu10s_PriceSNT;
        $a8f2thbu05s_PcsAllSale = $a8f2thbu05s_PcsAS + $a8f2thbu05s_PcsSTW + $a8f2thbu05s_PcsSLN + $a8f2thbu05s_PcsSFN + $a8f2thbu05s_PcsSMT + $a8f2thbu05s_PcsSNT;
        $a8f2thbu05s_PriceAllSale = $a8f2thbu05s_PriceAS + $a8f2thbu05s_PriceSTW + $a8f2thbu05s_PriceSLN + $a8f2thbu05s_PriceSFN + $a8f2thbu05s_PriceSMT + $a8f2thbu05s_PriceSNT;
        $a8f2debu10s_PcsAllSale = $a8f2debu10s_PcsAS + $a8f2debu10s_PcsSTW + $a8f2debu10s_PcsSLN + $a8f2debu10s_PcsSFN + $a8f2debu10s_PcsSMT + $a8f2debu10s_PcsSNT;
        $a8f2debu10s_PriceAllSale = $a8f2debu10s_PriceAS + $a8f2debu10s_PriceSTW + $a8f2debu10s_PriceSLN + $a8f2debu10s_PriceSFN + $a8f2debu10s_PriceSMT + $a8f2debu10s_PriceSNT;
        $a8f2exbu11s_PcsAllSale = $a8f2exbu11s_PcsAS + $a8f2exbu11s_PcsSTW + $a8f2exbu11s_PcsSLN + $a8f2exbu11s_PcsSFN + $a8f2exbu11s_PcsSMT + $a8f2exbu11s_PcsSNT;
        $a8f2exbu11s_PriceAllSale = $a8f2exbu11s_PriceAS + $a8f2exbu11s_PriceSTW + $a8f2exbu11s_PriceSLN + $a8f2exbu11s_PriceSFN + $a8f2exbu11s_PriceSMT + $a8f2exbu11s_PriceSNT;
        $a8f2twbu04s_PcsAllSale = $a8f2twbu04s_PcsAS + $a8f2twbu04s_PcsSTW + $a8f2twbu04s_PcsSLN + $a8f2twbu04s_PcsSFN + $a8f2twbu04s_PcsSMT + $a8f2twbu04s_PcsSNT;
        $a8f2twbu04s_PriceAllSale = $a8f2twbu04s_PriceAS + $a8f2twbu04s_PriceSTW + $a8f2twbu04s_PriceSLN + $a8f2twbu04s_PriceSFN + $a8f2twbu04s_PriceSMT + $a8f2twbu04s_PriceSNT;
        $a8f2twbu07s_PcsAllSale = $a8f2twbu07s_PcsAS + $a8f2twbu07s_PcsSTW + $a8f2twbu07s_PcsSLN + $a8f2twbu07s_PcsSFN + $a8f2twbu07s_PcsSMT + $a8f2twbu07s_PcsSNT;
        $a8f2twbu07s_PriceAllSale = $a8f2twbu07s_PriceAS + $a8f2twbu07s_PriceSTW + $a8f2twbu07s_PriceSLN + $a8f2twbu07s_PriceSFN + $a8f2twbu07s_PriceSMT + $a8f2twbu07s_PriceSNT;
        $a8f2cebu10s_PcsAllSale = $a8f2cebu10s_PcsAS + $a8f2cebu10s_PcsSTW + $a8f2cebu10s_PcsSLN + $a8f2cebu10s_PcsSFN + $a8f2cebu10s_PcsSMT + $a8f2cebu10s_PcsSNT;
        $a8f2cebu10s_PriceAllSale = $a8f2cebu10s_PriceAS + $a8f2cebu10s_PriceSTW + $a8f2cebu10s_PriceSLN + $a8f2cebu10s_PriceSFN + $a8f2cebu10s_PriceSMT + $a8f2cebu10s_PriceSNT;
        $DC1_PcsAllSale = $DC1_PcsAS + $DC1_PcsSTW + $DC1_PcsSLN + $DC1_PcsSFN + $DC1_PcsSMT + $DC1_PcsSNT;
        $DC1_PriceAllSale = $DC1_PriceAS + $DC1_PriceSTW + $DC1_PriceSLN + $DC1_PriceSFN + $DC1_PriceSMT + $DC1_PriceSNT;
        $DCP_PcsAllSale = $DCP_PcsAS + $DCP_PcsSTW + $DCP_PcsSLN + $DCP_PcsSFN + $DCP_PcsSMT + $DCP_PcsSNT;
        $DCP_PriceAllSale = $DCP_PriceAS + $DCP_PriceSTW + $DCP_PriceSLN + $DCP_PriceSFN + $DCP_PriceSMT + $DCP_PriceSNT;
        $DCY_PcsAllSale = $DCY_PcsAS + $DCY_PcsSTW + $DCY_PcsSLN + $DCY_PcsSFN + $DCY_PcsSMT + $DCY_PcsSNT;
        $DCY_PriceAllSale = $DCY_PriceAS + $DCY_PriceSTW + $DCY_PriceSLN + $DCY_PriceSFN + $DCY_PriceSMT + $DCY_PriceSNT;
        $DEX_PcsAllSale = $DEX_PcsAS + $DEX_PcsSTW + $DEX_PcsSLN + $DEX_PcsSFN + $DEX_PcsSMT + $DEX_PcsSNT;
        $DEX_PriceAllSale = $DEX_PriceAS + $DEX_PriceSTW + $DEX_PriceSLN + $DEX_PriceSFN + $DEX_PriceSMT + $DEX_PriceSNT;

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllDCY =  $Pcs_AfterNTDCY + $Pcs_AfterTWDCY + $Pcs_AfterSNTDCY;
        $Price_AfterAllDCY = $Price_AfterNTDCY + $Price_AfterTWDCY + $Price_AfterSNTDCY;
        $Pcs_AfterAllDCY =  $Pcs_AfterNTDCY + $Pcs_AfterTWDCY + $Pcs_AfterSNTDCY;
        $Price_AfterAllDCY =  $Price_AfterNTDCY + $Price_AfterTWDCY + $Price_AfterSNTDCY;
        $Po_PcsAllDCY = $Po_PcsNTDCY + $Po_PcsTWDCY + $Po_PcsSNTDCY;
        $Po_PriceAllDCY =  $Po_PriceNTDCY + $Po_PriceTWDCY + $Po_PriceSNTDCY;
        $Neg_PcsAllDCY =  $Neg_PcsNTDCY + $Neg_PcsTWDCY + $Neg_PcsSNTDCY;
        $Neg_PriceAllDCY =  $Neg_PriceNTDCY + $Neg_PriceTWDCY + $Neg_PriceSNTDCY;
        $BackChange_PcsAllDCY =  $BackChange_PcsNTDCY + $BackChange_PcsTWDCY + $BackChange_PcsSNTDCY;
        $BackChange_PriceAllDCY =  $BackChange_PriceNTDCY + $BackChange_PriceTWDCY + $BackChange_PriceSNTDCY;
        $Purchase_PcsAllDCY =  $Purchase_PcsNTDCY + $Purchase_PcsTWDCY + $Purchase_PcsSNTDCY;
        $Purchase_PriceAllDCY =  $Purchase_PriceNTDCY + $Purchase_PriceTWDCY + $Purchase_PriceSNTDCY;
        $ReciveTranfer_PcsAllDCY =  $ReciveTranfer_PcsNTDCY + $ReciveTranfer_PcsTWDCY + $ReciveTranfer_PcsSNTDCY;
        $ReciveTranfer_PriceAllDCY =  $ReciveTranfer_PriceNTDCY + $ReciveTranfer_PriceTWDCY + $ReciveTranfer_PriceSNTDCY;
        $ReturnItem_PCSAllDCY =  $ReturnItem_PCSNTDCY + $ReturnItem_PCSTWDCY + $ReturnItem_PCSSNTDCY;
        $ReturnItem_PriceAllDCY =  $ReturnItem_PriceNTDCY + $ReturnItem_PriceTWDCY + $ReturnItem_PriceSNTDCY;
        $AllIn_PcsAllDCY =  $AllIn_PcsNTDCY + $AllIn_PcsTWDCY + $AllIn_PcsSNTDCY;
        $AllIn_PriceAllDCY =  $AllIn_PriceNTDCY + $AllIn_PriceTWDCY + $AllIn_PriceSNTDCY;
        $SendSale_PcsAllDCY =  $SendSale_PcsNTDCY + $SendSale_PcsTWDCY + $SendSale_PcsSNTDCY;
        $SendSale_PriceAllDCY =  $SendSale_PriceNTDCY + $SendSale_PriceTWDCY + $SendSale_PriceSNTDCY;
        $ReciveTranOut_PcsAllDCY =  $ReciveTranOut_PcsNTDCY + $ReciveTranOut_PcsTWDCY + $ReciveTranOut_PcsSNTDCY;
        $ReciveTranOut_PriceAllDCY =  $ReciveTranOut_PriceNTDCY + $ReciveTranOut_PriceTWDCY + $ReciveTranOut_PriceSNTDCY;
        $ReturnStore_PcsAllDCY =  $ReturnStore_PcsNTDCY + $ReturnStore_PcsTWDCY + $ReturnStore_PcsSNTDCY;
        $ReturnStore_PriceAllDCY =  $ReturnStore_PriceNTDCY + $ReturnStore_PriceTWDCY + $ReturnStore_PriceSNTDCY;
        $AllOut_PcsAllDCY =  $AllOut_PcsNTDCY + $AllOut_PcsTWDCY + $AllOut_PcsSNTDCY;
        $AllOut_PriceAllDCY =  $AllOut_PriceNTDCY + $AllOut_PriceTWDCY + $AllOut_PriceSNTDCY;
        $Calculate_PcsAllDCY =  $Calculate_PcsNTDCY + $Calculate_PcsTWDCY + $Calculate_PcsSNTDCY;
        $Calculate_PriceAllDCY =  $Calculate_PriceNTDCY + $Calculate_PriceTWDCY + $Calculate_PriceSNTDCY;
        $NewCalculate_PcsAllDCY = $NewCalculate_PcsNTDCY + $NewCalculate_PcsTWDCY + $NewCalculate_PcsSNTDCY;
        $NewCalculate_PriceAllDCY = $NewCalculate_PriceNTDCY + $NewCalculate_PriceTWDCY + $NewCalculate_PriceSNTDCY;
        $Diff_PcsAllDCY = $Diff_PcsNTDCY + $Diff_PcsTWDCY + $Diff_PcsSNTDCY;
        $Diff_PriceAllDCY = $Diff_PriceNTDCY + $Diff_PriceTWDCY + $Diff_PriceSNTDCY;
        $NewTotal_PcsAllDCY = $NewTotal_PcsNTDCY + $NewTotal_PcsTWDCY + $NewTotal_PcsSNTDCY;
        $NewTotal_PriceAllDCY = $NewTotal_PriceNTDCY + $NewTotal_PriceTWDCY + $NewTotal_PriceSNTDCY;
        $NewTotalDiff_NavAllDCY = $NewTotalDiff_NavNTDCY + $NewTotalDiff_NavTWDCY + $NewTotalDiff_NavSNTDCY;
        $NewTotalDiff_CalAllDCY = $NewTotalDiff_CalNTDCY + $NewTotalDiff_CalTWDCY + $NewTotalDiff_CalSNTDCY;
        $a7f1fgbu02s_PcsAllDCY = $a7f1fgbu02s_PcsNTDCY + $a7f1fgbu02s_PcsTWDCY + $a7f1fgbu02s_PcsSNTDCY;
        $a7f1fgbu02s_PriceAllDCY = $a7f1fgbu02s_PriceNTDCY + $a7f1fgbu02s_PriceTWDCY + $a7f1fgbu02s_PriceSNTDCY;
        $a7f2fgbu10s_PcsAllDCY = $a7f2fgbu10s_PcsNTDCY + $a7f2fgbu10s_PcsTWDCY + $a7f2fgbu10s_PcsSNTDCY;
        $a7f2fgbu10s_PriceAllDCY = $a7f2fgbu10s_PriceNTDCY + $a7f2fgbu10s_PriceTWDCY + $a7f2fgbu10s_PriceSNTDCY;
        $a7f2thbu05s_PcsAllDCY = $a7f2thbu05s_PcsNTDCY + $a7f2thbu05s_PcsTWDCY + $a7f2thbu05s_PcsSNTDCY;
        $a7f2thbu05s_PriceAllDCY = $a7f2thbu05s_PriceNTDCY + $a7f2thbu05s_PriceTWDCY + $a7f2thbu05s_PriceSNTDCY;
        $a7f2debu10s_PcsAllDCY = $a7f2debu10s_PcsNTDCY + $a7f2debu10s_PcsTWDCY + $a7f2debu10s_PcsSNTDCY;
        $a7f2debu10s_PriceAllDCY = $a7f2debu10s_PriceNTDCY + $a7f2debu10s_PriceTWDCY + $a7f2debu10s_PriceSNTDCY;
        $a7f2exbu11s_PcsAllDCY = $a7f2exbu11s_PcsNTDCY + $a7f2exbu11s_PcsTWDCY + $a7f2exbu11s_PcsSNTDCY;
        $a7f2exbu11s_PriceAllDCY = $a7f2exbu11s_PriceNTDCY + $a7f2exbu11s_PriceTWDCY + $a7f2exbu11s_PriceSNTDCY;
        $a7f2twbu04s_PcsAllDCY = $a7f2twbu04s_PcsNTDCY + $a7f2twbu04s_PcsTWDCY + $a7f2twbu04s_PcsSNTDCY;
        $a7f2twbu04s_PriceAllDCY = $a7f2twbu04s_PriceNTDCY + $a7f2twbu04s_PriceTWDCY + $a7f2twbu04s_PriceSNTDCY;
        $a7f2twbu07s_PcsAllDCY = $a7f2twbu07s_PcsNTDCY + $a7f2twbu07s_PcsTWDCY + $a7f2twbu07s_PcsSNTDCY;
        $a7f2twbu07s_PriceAllDCY = $a7f2twbu07s_PriceNTDCY + $a7f2twbu07s_PriceTWDCY + $a7f2twbu07s_PriceSNTDCY;
        $a7f2cebu10s_PcsAllDCY = $a7f2cebu10s_PcsNTDCY + $a7f2cebu10s_PcsTWDCY + $a7f2cebu10s_PcsSNTDCY;
        $a7f2cebu10s_PriceAllDCY = $a7f2cebu10s_PriceNTDCY + $a7f2cebu10s_PriceTWDCY + $a7f2cebu10s_PriceSNTDCY;
        $a8f1fgbu02s_PcsAllDCY = $a8f1fgbu02s_PcsNTDCY + $a8f1fgbu02s_PcsTWDCY + $a8f1fgbu02s_PcsSNTDCY;
        $a8f1fgbu02s_PriceAllDCY = $a8f1fgbu02s_PriceNTDCY + $a8f1fgbu02s_PriceTWDCY + $a8f1fgbu02s_PriceSNTDCY   ;
        $a8f2fgbu10s_PcsAllDCY = $a8f2fgbu10s_PcsNTDCY + $a8f2fgbu10s_PcsTWDCY + $a8f2fgbu10s_PcsSNTDCY;
        $a8f2fgbu10s_PriceAllDCY = $a8f2fgbu10s_PriceNTDCY + $a8f2fgbu10s_PriceTWDCY + $a8f2fgbu10s_PriceSNTDCY   ;
        $a8f2thbu05s_PcsAllDCY = $a8f2thbu05s_PcsNTDCY + $a8f2thbu05s_PcsTWDCY + $a8f2thbu05s_PcsSNTDCY;
        $a8f2thbu05s_PriceAllDCY = $a8f2thbu05s_PriceNTDCY + $a8f2thbu05s_PriceTWDCY + $a8f2thbu05s_PriceSNTDCY   ;
        $a8f2debu10s_PcsAllDCY = $a8f2debu10s_PcsNTDCY + $a8f2debu10s_PcsTWDCY + $a8f2debu10s_PcsSNTDCY;
        $a8f2debu10s_PriceAllDCY = $a8f2debu10s_PriceNTDCY + $a8f2debu10s_PriceTWDCY + $a8f2debu10s_PriceSNTDCY;
        $a8f2exbu11s_PcsAllDCY = $a8f2exbu11s_PcsNTDCY + $a8f2exbu11s_PcsTWDCY + $a8f2exbu11s_PcsSNTDCY;
        $a8f2exbu11s_PriceAllDCY = $a8f2exbu11s_PriceNTDCY + $a8f2exbu11s_PriceTWDCY + $a8f2exbu11s_PriceSNTDCY;
        $a8f2twbu04s_PcsAllDCY = $a8f2twbu04s_PcsNTDCY + $a8f2twbu04s_PcsTWDCY + $a8f2twbu04s_PcsSNTDCY;
        $a8f2twbu04s_PriceAllDCY = $a8f2twbu04s_PriceNTDCY + $a8f2twbu04s_PriceTWDCY + $a8f2twbu04s_PriceSNTDCY;
        $a8f2twbu07s_PcsAllDCY = $a8f2twbu07s_PcsNTDCY + $a8f2twbu07s_PcsTWDCY + $a8f2twbu07s_PcsSNTDCY;
        $a8f2twbu07s_PriceAllDCY = $a8f2twbu07s_PriceNTDCY + $a8f2twbu07s_PriceTWDCY + $a8f2twbu07s_PriceSNTDCY;
        $a8f2cebu10s_PcsAllDCY = $a8f2cebu10s_PcsNTDCY + $a8f2cebu10s_PcsTWDCY + $a8f2cebu10s_PcsSNTDCY;
        $a8f2cebu10s_PriceAllDCY = $a8f2cebu10s_PriceNTDCY + $a8f2cebu10s_PriceTWDCY + $a8f2cebu10s_PriceSNTDCY;
        $DC1_PcsAllDCY = $DC1_PcsNTDCY + $DC1_PcsTWDCY + $DC1_PcsSNTDCY;
        $DC1_PriceAllDCY = $DC1_PriceNTDCY + $DC1_PriceTWDCY + $DC1_PriceSNTDCY;
        $DCP_PcsAllDCY = $DCP_PcsNTDCY + $DCP_PcsTWDCY + $DCP_PcsSNTDCY;
        $DCP_PriceAllDCY = $DCP_PriceNTDCY + $DCP_PriceTWDCY + $DCP_PriceSNTDCY;
        $DCY_PcsAllDCY = $DCY_PcsNTDCY + $DCY_PcsTWDCY + $DCY_PcsSNTDCY;
        $DCY_PriceAllDCY = $DCY_PriceNTDCY + $DCY_PriceTWDCY + $DCY_PriceSNTDCY;
        $DEX_PcsAllDCY = $DEX_PcsNTDCY + $DEX_PcsTWDCY + $DEX_PcsSNTDCY;
        $DEX_PriceAllDCY = $DEX_PriceNTDCY + $DEX_PriceTWDCY + $DEX_PriceSNTDCY;

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllDC1 = $Pcs_AfterAllProduct + $Pcs_AfterAllSale;
        $Price_AfterAllDC1 = $Price_AfterAllProduct + $Price_AfterAllSale;
        $Pcs_AfterAllDC1 =  $Pcs_AfterAllProduct + $Pcs_AfterAllSale;
        $Price_AfterAllDC1 =  $Price_AfterAllProduct + $Price_AfterAllSale;
        $Po_PcsAllDC1 = $Po_PcsAllProduct + $Po_PcsAllSale;
        $Po_PriceAllDC1 =  $Po_PriceAllProduct + $Po_PriceAllSale;
        $Neg_PcsAllDC1 =  $Neg_PcsAllProduct + $Neg_PcsAllSale;
        $Neg_PriceAllDC1 =  $Neg_PriceAllProduct + $Neg_PriceAllSale;
        $BackChange_PcsAllDC1 =  $BackChange_PcsAllProduct + $BackChange_PcsAllSale;
        $BackChange_PriceAllDC1 =  $BackChange_PriceAllProduct + $BackChange_PriceAllSale;
        $Purchase_PcsAllDC1 =  $Purchase_PcsAllProduct + $Purchase_PcsAllSale;
        $Purchase_PriceAllDC1 =  $Purchase_PriceAllProduct + $Purchase_PriceAllSale;
        $ReciveTranfer_PcsAllDC1 =  $ReciveTranfer_PcsAllProduct + $ReciveTranfer_PcsAllSale;
        $ReciveTranfer_PriceAllDC1 =  $ReciveTranfer_PriceAllProduct + $ReciveTranfer_PriceAllSale;
        $ReturnItem_PCSAllDC1 =  $ReturnItem_PCSAllProduct + $ReturnItem_PCSAllSale;
        $ReturnItem_PriceAllDC1 =  $ReturnItem_PriceAllProduct + $ReturnItem_PriceAllSale;
        $AllIn_PcsAllDC1 =  $AllIn_PcsAllProduct + $AllIn_PcsAllSale;
        $AllIn_PriceAllDC1 =  $AllIn_PriceAllProduct + $AllIn_PriceAllSale;
        $SendSale_PcsAllDC1 =  $SendSale_PcsAllProduct + $SendSale_PcsAllSale;
        $SendSale_PriceAllDC1 =  $SendSale_PriceAllProduct + $SendSale_PriceAllSale;
        $ReciveTranOut_PcsAllDC1 =  $ReciveTranOut_PcsAllProduct + $ReciveTranOut_PcsAllSale;
        $ReciveTranOut_PriceAllDC1 =  $ReciveTranOut_PriceAllProduct + $ReciveTranOut_PriceAllSale;
        $ReturnStore_PcsAllDC1 =  $ReturnStore_PcsAllProduct + $ReturnStore_PcsAllSale;
        $ReturnStore_PriceAllDC1 =  $ReturnStore_PriceAllProduct + $ReturnStore_PriceAllSale;
        $AllOut_PcsAllDC1 =  $AllOut_PcsAllProduct + $AllOut_PcsAllSale;
        $AllOut_PriceAllDC1 =  $AllOut_PriceAllProduct + $AllOut_PriceAllSale;
        $Calculate_PcsAllDC1 =  $Calculate_PcsAllProduct + $Calculate_PcsAllSale;
        $Calculate_PriceAllDC1 =  $Calculate_PriceAllProduct + $Calculate_PriceAllSale;
        $NewCalculate_PcsAllDC1 = $NewCalculate_PcsAllProduct + $NewCalculate_PcsAllSale;
        $NewCalculate_PriceAllDC1 = $NewCalculate_PriceAllProduct + $NewCalculate_PriceAllSale;
        $Diff_PcsAllDC1 = $Diff_PcsAllProduct + $Diff_PcsAllSale;
        $Diff_PriceAllDC1 = $Diff_PriceAllProduct + $Diff_PriceAllSale;
        $NewTotal_PcsAllDC1 = $NewTotal_PcsAllProduct + $NewTotal_PcsAllSale;
        $NewTotal_PriceAllDC1 = $NewTotal_PriceAllProduct + $NewTotal_PriceAllSale;
        $NewTotalDiff_NavAllDC1 = $NewTotalDiff_NavAllProduct + $NewTotalDiff_NavAllSale;
        $NewTotalDiff_CalAllDC1 = $NewTotalDiff_CalAllProduct + $NewTotalDiff_CalAllSale;
        $a7f1fgbu02s_PcsAllDC1 = $a7f1fgbu02s_PcsAllProduct + $a7f1fgbu02s_PcsAllSale;
        $a7f1fgbu02s_PriceAllDC1 = $a7f1fgbu02s_PriceAllProduct + $a7f1fgbu02s_PriceAllSale;
        $a7f2fgbu10s_PcsAllDC1 = $a7f2fgbu10s_PcsAllProduct + $a7f2fgbu10s_PcsAllSale;
        $a7f2fgbu10s_PriceAllDC1 = $a7f2fgbu10s_PriceAllProduct + $a7f2fgbu10s_PriceAllSale;
        $a7f2thbu05s_PcsAllDC1 = $a7f2thbu05s_PcsAllProduct + $a7f2thbu05s_PcsAllSale;
        $a7f2thbu05s_PriceAllDC1 = $a7f2thbu05s_PriceAllProduct + $a7f2thbu05s_PriceAllSale;
        $a7f2debu10s_PcsAllDC1 = $a7f2debu10s_PcsAllProduct + $a7f2debu10s_PcsAllSale;
        $a7f2debu10s_PriceAllDC1 = $a7f2debu10s_PriceAllProduct + $a7f2debu10s_PriceAllSale;
        $a7f2exbu11s_PcsAllDC1 = $a7f2exbu11s_PcsAllProduct + $a7f2exbu11s_PcsAllSale;
        $a7f2exbu11s_PriceAllDC1 = $a7f2exbu11s_PriceAllProduct + $a7f2exbu11s_PriceAllSale;
        $a7f2twbu04s_PcsAllDC1 = $a7f2twbu04s_PcsAllProduct + $a7f2twbu04s_PcsAllSale;
        $a7f2twbu04s_PriceAllDC1 = $a7f2twbu04s_PriceAllProduct + $a7f2twbu04s_PriceAllSale;
        $a7f2twbu07s_PcsAllDC1 = $a7f2twbu07s_PcsAllProduct + $a7f2twbu07s_PcsAllSale;
        $a7f2twbu07s_PriceAllDC1 = $a7f2twbu07s_PriceAllProduct + $a7f2twbu07s_PriceAllSale;
        $a7f2cebu10s_PcsAllDC1 = $a7f2cebu10s_PcsAllProduct + $a7f2cebu10s_PcsAllSale;
        $a7f2cebu10s_PriceAllDC1 = $a7f2cebu10s_PriceAllProduct + $a7f2cebu10s_PriceAllSale;
        $a8f1fgbu02s_PcsAllDC1 = $a8f1fgbu02s_PcsAllProduct + $a8f1fgbu02s_PcsAllSale;
        $a8f1fgbu02s_PriceAllDC1 = $a8f1fgbu02s_PriceAllProduct + $a8f1fgbu02s_PriceAllSale;
        $a8f2fgbu10s_PcsAllDC1 = $a8f2fgbu10s_PcsAllProduct + $a8f2fgbu10s_PcsAllSale;
        $a8f2fgbu10s_PriceAllDC1 = $a8f2fgbu10s_PriceAllProduct + $a8f2fgbu10s_PriceAllSale;
        $a8f2thbu05s_PcsAllDC1 = $a8f2thbu05s_PcsAllProduct + $a8f2thbu05s_PcsAllSale;
        $a8f2thbu05s_PriceAllDC1 = $a8f2thbu05s_PriceAllProduct + $a8f2thbu05s_PriceAllSale;
        $a8f2debu10s_PcsAllDC1 = $a8f2debu10s_PcsAllProduct + $a8f2debu10s_PcsAllSale;
        $a8f2debu10s_PriceAllDC1 = $a8f2debu10s_PriceAllProduct + $a8f2debu10s_PriceAllSale;
        $a8f2exbu11s_PcsAllDC1 = $a8f2exbu11s_PcsAllProduct + $a8f2exbu11s_PcsAllSale;
        $a8f2exbu11s_PriceAllDC1 = $a8f2exbu11s_PriceAllProduct + $a8f2exbu11s_PriceAllSale;
        $a8f2twbu04s_PcsAllDC1 = $a8f2twbu04s_PcsAllProduct + $a8f2twbu04s_PcsAllSale;
        $a8f2twbu04s_PriceAllDC1 = $a8f2twbu04s_PriceAllProduct + $a8f2twbu04s_PriceAllSale;
        $a8f2twbu07s_PcsAllDC1 = $a8f2twbu07s_PcsAllProduct + $a8f2twbu07s_PcsAllSale;
        $a8f2twbu07s_PriceAllDC1 = $a8f2twbu07s_PriceAllProduct + $a8f2twbu07s_PriceAllSale;
        $a8f2cebu10s_PcsAllDC1 = $a8f2cebu10s_PcsAllProduct + $a8f2cebu10s_PcsAllSale;
        $a8f2cebu10s_PriceAllDC1 = $a8f2cebu10s_PriceAllProduct + $a8f2cebu10s_PriceAllSale;
        $DC1_PcsAllDC1 = $DC1_PcsAllProduct + $DC1_PcsAllSale;
        $DC1_PriceAllDC1 = $DC1_PriceAllProduct + $DC1_PriceAllSale;
        $DCP_PcsAllDC1 = $DCP_PcsAllProduct + $DCP_PcsAllSale;
        $DCP_PriceAllDC1 = $DCP_PriceAllProduct + $DCP_PriceAllSale;
        $DCY_PcsAllDC1 = $DCY_PcsAllProduct + $DCY_PcsAllSale;
        $DCY_PriceAllDC1 = $DCY_PriceAllProduct + $DCY_PriceAllSale;
        $DEX_PcsAllDC1 = $DEX_PcsAllProduct + $DEX_PcsAllSale;
        $DEX_PriceAllDC1 = $DEX_PriceAllProduct + $DEX_PriceAllSale;

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT = number_format($Pcs_AfterNT, 0);
        $Price_AfterNT = number_format($Price_AfterNT, 0);
        $Po_PcsNT = number_format($Po_PcsNT, 0);
        $Po_PriceNT = number_format($Po_PriceNT, 0);
        $Neg_PcsNT = number_format($Neg_PcsNT, 0);
        $Neg_PriceNT = number_format($Neg_PriceNT, 0);
        $BackChange_PcsNT = number_format($BackChange_PcsNT, 0);
        $BackChange_PriceNT = number_format($BackChange_PriceNT, 0);
        $Purchase_PcsNT = number_format($Purchase_PcsNT, 0);
        $Purchase_PriceNT = number_format($Purchase_PriceNT, 0);
        $ReciveTranfer_PcsNT = number_format($ReciveTranfer_PcsNT, 0);
        $ReciveTranfer_PriceNT = number_format($ReciveTranfer_PriceNT, 0);
        $ReturnItem_PCSNT = number_format($ReturnItem_PCSNT, 0);
        $ReturnItem_PriceNT = number_format($ReturnItem_PriceNT, 0);
        $AllIn_PcsNT = number_format($AllIn_PcsNT, 0);
        $AllIn_PriceNT = number_format($AllIn_PriceNT, 0);
        $SendSale_PcsNT = number_format($SendSale_PcsNT, 0);
        $SendSale_PriceNT = number_format($SendSale_PriceNT, 0);
        $ReciveTranOut_PcsNT = number_format($ReciveTranOut_PcsNT, 0);
        $ReciveTranOut_PriceNT = number_format($ReciveTranOut_PriceNT, 0);
        $ReturnStore_PcsNT = number_format($ReturnStore_PcsNT, 0);
        $ReturnStore_PriceNT = number_format($ReturnStore_PriceNT, 0);
        $AllOut_PcsNT = number_format($AllOut_PcsNT, 0);
        $AllOut_PriceNT = number_format($AllOut_PriceNT, 0);
        $Calculate_PcsNT = number_format($Calculate_PcsNT, 0);
        $Calculate_PriceNT = number_format($Calculate_PriceNT, 0);
        $NewCalculate_PcsNT = number_format($NewCalculate_PcsNT, 0);
        $NewCalculate_PriceNT = number_format($NewCalculate_PriceNT, 0);
        $Diff_PcsNT = number_format($Diff_PcsNT, 0);
        $Diff_PriceNT = number_format($Diff_PriceNT, 0);
        $NewTotal_PcsNT = number_format($NewTotal_PcsNT, 0);
        $NewTotal_PriceNT = number_format($NewTotal_PriceNT, 0);
        $NewTotalDiff_NavNT = number_format($NewTotalDiff_NavNT, 0);
        $NewTotalDiff_CalNT = number_format($NewTotalDiff_CalNT, 0);
        $a7f1fgbu02s_PcsNT = number_format($a7f1fgbu02s_PcsNT, 0);
        $a7f1fgbu02s_PriceNT = number_format($a7f1fgbu02s_PriceNT, 0);
        $a7f2fgbu10s_PcsNT = number_format($a7f2fgbu10s_PcsNT, 0);
        $a7f2fgbu10s_PriceNT = number_format($a7f2fgbu10s_PriceNT, 0);
        $a7f2thbu05s_PcsNT = number_format($a7f2thbu05s_PcsNT, 0);
        $a7f2thbu05s_PriceNT = number_format($a7f2thbu05s_PriceNT, 0);
        $a7f2debu10s_PcsNT = number_format($a7f2debu10s_PcsNT, 0);
        $a7f2debu10s_PriceNT = number_format($a7f2debu10s_PriceNT, 0);
        $a7f2exbu11s_PcsNT = number_format($a7f2exbu11s_PcsNT, 0);
        $a7f2exbu11s_PriceNT = number_format($a7f2exbu11s_PriceNT, 0);
        $a7f2twbu04s_PcsNT = number_format($a7f2twbu04s_PcsNT, 0);
        $a7f2twbu04s_PriceNT = number_format($a7f2twbu04s_PriceNT, 0);
        $a7f2twbu07s_PcsNT = number_format($a7f2twbu07s_PcsNT, 0);
        $a7f2twbu07s_PriceNT = number_format($a7f2twbu07s_PriceNT, 0);
        $a7f2cebu10s_PcsNT = number_format($a7f2cebu10s_PcsNT, 0);
        $a7f2cebu10s_PriceNT = number_format($a7f2cebu10s_PriceNT, 0);
        $a8f1fgbu02s_PcsNT = number_format($a8f1fgbu02s_PcsNT, 0);
        $a8f1fgbu02s_PriceNT = number_format($a8f1fgbu02s_PriceNT, 0);
        $a8f2fgbu10s_PcsNT = number_format($a8f2fgbu10s_PcsNT, 0);
        $a8f2fgbu10s_PriceNT = number_format($a8f2fgbu10s_PriceNT, 0);
        $a8f2thbu05s_PcsNT = number_format($a8f2thbu05s_PcsNT, 0);
        $a8f2thbu05s_PriceNT = number_format($a8f2thbu05s_PriceNT, 0);
        $a8f2debu10s_PcsNT = number_format($a8f2debu10s_PcsNT, 0);
        $a8f2debu10s_PriceNT = number_format($a8f2debu10s_PriceNT, 0);
        $a8f2exbu11s_PcsNT = number_format($a8f2exbu11s_PcsNT, 0);
        $a8f2exbu11s_PriceNT = number_format($a8f2exbu11s_PriceNT, 0);
        $a8f2twbu04s_PcsNT = number_format($a8f2twbu04s_PcsNT, 0);
        $a8f2twbu04s_PriceNT = number_format($a8f2twbu04s_PriceNT, 0);
        $a8f2twbu07s_PcsNT = number_format($a8f2twbu07s_PcsNT, 0);
        $a8f2twbu07s_PriceNT = number_format($a8f2twbu07s_PriceNT, 0);
        $a8f2cebu10s_PcsNT = number_format($a8f2cebu10s_PcsNT, 0);
        $a8f2cebu10s_PriceNT = number_format($a8f2cebu10s_PriceNT, 0);
        $DC1_PcsNT = number_format($DC1_PcsNT, 0);
        $DC1_PriceNT = number_format($DC1_PriceNT, 0);
        $DCP_PcsNT = number_format($DCP_PcsNT, 0);
        $DCP_PriceNT = number_format($DCP_PriceNT, 0);
        $DCY_PcsNT = number_format($DCY_PcsNT, 0);
        $DCY_PriceNT = number_format($DCY_PriceNT, 0);
        $DEX_PcsNT = number_format($DEX_PcsNT, 0);
        $DEX_PriceNT = number_format($DEX_PriceNT, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT = number_format($Pcs_AfterMT, 0);
        $Price_AfterMT = number_format($Price_AfterMT, 0);
        $Po_PcsMT = number_format($Po_PcsMT, 0);
        $Po_PriceMT = number_format($Po_PriceMT, 0);
        $Neg_PcsMT = number_format($Neg_PcsMT, 0);
        $Neg_PriceMT = number_format($Neg_PriceMT, 0);
        $BackChange_PcsMT = number_format($BackChange_PcsMT, 0);
        $BackChange_PriceMT = number_format($BackChange_PriceMT, 0);
        $Purchase_PcsMT = number_format($Purchase_PcsMT, 0);
        $Purchase_PriceMT = number_format($Purchase_PriceMT, 0);
        $ReciveTranfer_PcsMT = number_format($ReciveTranfer_PcsMT, 0);
        $ReciveTranfer_PriceMT = number_format($ReciveTranfer_PriceMT, 0);
        $ReturnItem_PCSMT = number_format($ReturnItem_PCSMT, 0);
        $ReturnItem_PriceMT = number_format($ReturnItem_PriceMT, 0);
        $AllIn_PcsMT = number_format($AllIn_PcsMT, 0);
        $AllIn_PriceMT = number_format($AllIn_PriceMT, 0);
        $SendSale_PcsMT = number_format($SendSale_PcsMT, 0);
        $SendSale_PriceMT = number_format($SendSale_PriceMT, 0);
        $ReciveTranOut_PcsMT = number_format($ReciveTranOut_PcsMT, 0);
        $ReciveTranOut_PriceMT = number_format($ReciveTranOut_PriceMT, 0);
        $ReturnStore_PcsMT = number_format($ReturnStore_PcsMT, 0);
        $ReturnStore_PriceMT = number_format($ReturnStore_PriceMT, 0);
        $AllOut_PcsMT = number_format($AllOut_PcsMT, 0);
        $AllOut_PriceMT = number_format($AllOut_PriceMT, 0);
        $Calculate_PcsMT = number_format($Calculate_PcsMT, 0);
        $Calculate_PriceMT = number_format($Calculate_PriceMT, 0);
        $NewCalculate_PcsMT = number_format($NewCalculate_PcsMT, 0);
        $NewCalculate_PriceMT = number_format($NewCalculate_PriceMT, 0);
        $Diff_PcsMT = number_format($Diff_PcsMT, 0);
        $Diff_PriceMT = number_format($Diff_PriceMT, 0);
        $NewTotal_PcsMT = number_format($NewTotal_PcsMT, 0);
        $NewTotal_PriceMT = number_format($NewTotal_PriceMT, 0);
        $NewTotalDiff_NavMT = number_format($NewTotalDiff_NavMT, 0);
        $NewTotalDiff_CalMT = number_format($NewTotalDiff_CalMT, 0);
        $a7f1fgbu02s_PcsMT = number_format($a7f1fgbu02s_PcsMT, 0);
        $a7f1fgbu02s_PriceMT = number_format($a7f1fgbu02s_PriceMT, 0);
        $a7f2fgbu10s_PcsMT = number_format($a7f2fgbu10s_PcsMT, 0);
        $a7f2fgbu10s_PriceMT = number_format($a7f2fgbu10s_PriceMT, 0);
        $a7f2thbu05s_PcsMT = number_format($a7f2thbu05s_PcsMT, 0);
        $a7f2thbu05s_PriceMT = number_format($a7f2thbu05s_PriceMT, 0);
        $a7f2debu10s_PcsMT = number_format($a7f2debu10s_PcsMT, 0);
        $a7f2debu10s_PriceMT = number_format($a7f2debu10s_PriceMT, 0);
        $a7f2exbu11s_PcsMT = number_format($a7f2exbu11s_PcsMT, 0);
        $a7f2exbu11s_PriceMT = number_format($a7f2exbu11s_PriceMT, 0);
        $a7f2twbu04s_PcsMT = number_format($a7f2twbu04s_PcsMT, 0);
        $a7f2twbu04s_PriceMT = number_format($a7f2twbu04s_PriceMT, 0);
        $a7f2twbu07s_PcsMT = number_format($a7f2twbu07s_PcsMT, 0);
        $a7f2twbu07s_PriceMT = number_format($a7f2twbu07s_PriceMT, 0);
        $a7f2cebu10s_PcsMT = number_format($a7f2cebu10s_PcsMT, 0);
        $a7f2cebu10s_PriceMT = number_format($a7f2cebu10s_PriceMT, 0);
        $a8f1fgbu02s_PcsMT = number_format($a8f1fgbu02s_PcsMT, 0);
        $a8f1fgbu02s_PriceMT = number_format($a8f1fgbu02s_PriceMT, 0);
        $a8f2fgbu10s_PcsMT = number_format($a8f2fgbu10s_PcsMT, 0);
        $a8f2fgbu10s_PriceMT = number_format($a8f2fgbu10s_PriceMT, 0);
        $a8f2thbu05s_PcsMT = number_format($a8f2thbu05s_PcsMT, 0);
        $a8f2thbu05s_PriceMT = number_format($a8f2thbu05s_PriceMT, 0);
        $a8f2debu10s_PcsMT = number_format($a8f2debu10s_PcsMT, 0);
        $a8f2debu10s_PriceMT = number_format($a8f2debu10s_PriceMT, 0);
        $a8f2exbu11s_PcsMT = number_format($a8f2exbu11s_PcsMT, 0);
        $a8f2exbu11s_PriceMT = number_format($a8f2exbu11s_PriceMT, 0);
        $a8f2twbu04s_PcsMT = number_format($a8f2twbu04s_PcsMT, 0);
        $a8f2twbu04s_PriceMT = number_format($a8f2twbu04s_PriceMT, 0);
        $a8f2twbu07s_PcsMT = number_format($a8f2twbu07s_PcsMT, 0);
        $a8f2twbu07s_PriceMT = number_format($a8f2twbu07s_PriceMT, 0);
        $a8f2cebu10s_PcsMT = number_format($a8f2cebu10s_PcsMT, 0);
        $a8f2cebu10s_PriceMT = number_format($a8f2cebu10s_PriceMT, 0);
        $DC1_PcsMT = number_format($DC1_PcsMT, 0);
        $DC1_PriceMT = number_format($DC1_PriceMT, 0);
        $DCP_PcsMT = number_format($DCP_PcsMT, 0);
        $DCP_PriceMT = number_format($DCP_PriceMT, 0);
        $DCY_PcsMT = number_format($DCY_PcsMT, 0);
        $DCY_PriceMT = number_format($DCY_PriceMT, 0);
        $DEX_PcsMT = number_format($DEX_PcsMT, 0);
        $DEX_PriceMT = number_format($DEX_PriceMT, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW = number_format($Pcs_AfterTW, 0);
        $Price_AfterTW = number_format($Price_AfterTW, 0);
        $Po_PcsTW = number_format($Po_PcsTW, 0);
        $Po_PriceTW = number_format($Po_PriceTW, 0);
        $Neg_PcsTW = number_format($Neg_PcsTW, 0);
        $Neg_PriceTW = number_format($Neg_PriceTW, 0);
        $BackChange_PcsTW = number_format($BackChange_PcsTW, 0);
        $BackChange_PriceTW = number_format($BackChange_PriceTW, 0);
        $Purchase_PcsTW = number_format($Purchase_PcsTW, 0);
        $Purchase_PriceTW = number_format($Purchase_PriceTW, 0);
        $ReciveTranfer_PcsTW = number_format($ReciveTranfer_PcsTW, 0);
        $ReciveTranfer_PriceTW = number_format($ReciveTranfer_PriceTW, 0);
        $ReturnItem_PCSTW = number_format($ReturnItem_PCSTW, 0);
        $ReturnItem_PriceTW = number_format($ReturnItem_PriceTW, 0);
        $AllIn_PcsTW = number_format($AllIn_PcsTW, 0);
        $AllIn_PriceTW = number_format($AllIn_PriceTW, 0);
        $SendSale_PcsTW = number_format($SendSale_PcsTW, 0);
        $SendSale_PriceTW = number_format($SendSale_PriceTW, 0);
        $ReciveTranOut_PcsTW = number_format($ReciveTranOut_PcsTW, 0);
        $ReciveTranOut_PriceTW = number_format($ReciveTranOut_PriceTW, 0);
        $ReturnStore_PcsTW = number_format($ReturnStore_PcsTW, 0);
        $ReturnStore_PriceTW = number_format($ReturnStore_PriceTW, 0);
        $AllOut_PcsTW = number_format($AllOut_PcsTW, 0);
        $AllOut_PriceTW = number_format($AllOut_PriceTW, 0);
        $Calculate_PcsTW = number_format($Calculate_PcsTW, 0);
        $Calculate_PriceTW = number_format($Calculate_PriceTW, 0);
        $NewCalculate_PcsTW = number_format($NewCalculate_PcsTW, 0);
        $NewCalculate_PriceTW = number_format($NewCalculate_PriceTW, 0);
        $Diff_PcsTW = number_format($Diff_PcsTW, 0);
        $Diff_PriceTW = number_format($Diff_PriceTW, 0);
        $NewTotal_PcsTW = number_format($NewTotal_PcsTW, 0);
        $NewTotal_PriceTW = number_format($NewTotal_PriceTW, 0);
        $NewTotalDiff_NavTW = number_format($NewTotalDiff_NavTW, 0);
        $NewTotalDiff_CalTW = number_format($NewTotalDiff_CalTW, 0);
        $a7f1fgbu02s_PcsTW = number_format($a7f1fgbu02s_PcsTW, 0);
        $a7f1fgbu02s_PriceTW = number_format($a7f1fgbu02s_PriceTW, 0);
        $a7f2fgbu10s_PcsTW = number_format($a7f2fgbu10s_PcsTW, 0);
        $a7f2fgbu10s_PriceTW = number_format($a7f2fgbu10s_PriceTW, 0);
        $a7f2thbu05s_PcsTW = number_format($a7f2thbu05s_PcsTW, 0);
        $a7f2thbu05s_PriceTW = number_format($a7f2thbu05s_PriceTW, 0);
        $a7f2debu10s_PcsTW = number_format($a7f2debu10s_PcsTW, 0);
        $a7f2debu10s_PriceTW = number_format($a7f2debu10s_PriceTW, 0);
        $a7f2exbu11s_PcsTW = number_format($a7f2exbu11s_PcsTW, 0);
        $a7f2exbu11s_PriceTW = number_format($a7f2exbu11s_PriceTW, 0);
        $a7f2twbu04s_PcsTW = number_format($a7f2twbu04s_PcsTW, 0);
        $a7f2twbu04s_PriceTW = number_format($a7f2twbu04s_PriceTW, 0);
        $a7f2twbu07s_PcsTW = number_format($a7f2twbu07s_PcsTW, 0);
        $a7f2twbu07s_PriceTW = number_format($a7f2twbu07s_PriceTW, 0);
        $a7f2cebu10s_PcsTW = number_format($a7f2cebu10s_PcsTW, 0);
        $a7f2cebu10s_PriceTW = number_format($a7f2cebu10s_PriceTW, 0);
        $a8f1fgbu02s_PcsTW = number_format($a8f1fgbu02s_PcsTW, 0);
        $a8f1fgbu02s_PriceTW = number_format($a8f1fgbu02s_PriceTW, 0);
        $a8f2fgbu10s_PcsTW = number_format($a8f2fgbu10s_PcsTW, 0);
        $a8f2fgbu10s_PriceTW = number_format($a8f2fgbu10s_PriceTW, 0);
        $a8f2thbu05s_PcsTW = number_format($a8f2thbu05s_PcsTW, 0);
        $a8f2thbu05s_PriceTW = number_format($a8f2thbu05s_PriceTW, 0);
        $a8f2debu10s_PcsTW = number_format($a8f2debu10s_PcsTW, 0);
        $a8f2debu10s_PriceTW = number_format($a8f2debu10s_PriceTW, 0);
        $a8f2exbu11s_PcsTW = number_format($a8f2exbu11s_PcsTW, 0);
        $a8f2exbu11s_PriceTW = number_format($a8f2exbu11s_PriceTW, 0);
        $a8f2twbu04s_PcsTW = number_format($a8f2twbu04s_PcsTW, 0);
        $a8f2twbu04s_PriceTW = number_format($a8f2twbu04s_PriceTW, 0);
        $a8f2twbu07s_PcsTW = number_format($a8f2twbu07s_PcsTW, 0);
        $a8f2twbu07s_PriceTW = number_format($a8f2twbu07s_PriceTW, 0);
        $a8f2cebu10s_PcsTW = number_format($a8f2cebu10s_PcsTW, 0);
        $a8f2cebu10s_PriceTW = number_format($a8f2cebu10s_PriceTW, 0);
        $DC1_PcsTW = number_format($DC1_PcsTW, 0);
        $DC1_PriceTW = number_format($DC1_PriceTW, 0);
        $DCP_PcsTW = number_format($DCP_PcsTW, 0);
        $DCP_PriceTW = number_format($DCP_PriceTW, 0);
        $DCY_PcsTW = number_format($DCY_PcsTW, 0);
        $DCY_PriceTW = number_format($DCY_PriceTW, 0);
        $DEX_PcsTW = number_format($DEX_PcsTW, 0);
        $DEX_PriceTW = number_format($DEX_PriceTW, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterLN = number_format($Pcs_AfterLN, 0);
        $Price_AfterLN = number_format($Price_AfterLN, 0);
        $Po_PcsLN = number_format($Po_PcsLN, 0);
        $Po_PriceLN = number_format($Po_PriceLN, 0);
        $Neg_PcsLN = number_format($Neg_PcsLN, 0);
        $Neg_PriceLN = number_format($Neg_PriceLN, 0);
        $BackChange_PcsLN = number_format($BackChange_PcsLN, 0);
        $BackChange_PriceLN = number_format($BackChange_PriceLN, 0);
        $Purchase_PcsLN = number_format($Purchase_PcsLN, 0);
        $Purchase_PriceLN = number_format($Purchase_PriceLN, 0);
        $ReciveTranfer_PcsLN = number_format($ReciveTranfer_PcsLN, 0);
        $ReciveTranfer_PriceLN = number_format($ReciveTranfer_PriceLN, 0);
        $ReturnItem_PCSLN = number_format($ReturnItem_PCSLN, 0);
        $ReturnItem_PriceLN = number_format($ReturnItem_PriceLN, 0);
        $AllIn_PcsLN = number_format($AllIn_PcsLN, 0);
        $AllIn_PriceLN = number_format($AllIn_PriceLN, 0);
        $SendSale_PcsLN = number_format($SendSale_PcsLN, 0);
        $SendSale_PriceLN = number_format($SendSale_PriceLN, 0);
        $ReciveTranOut_PcsLN = number_format($ReciveTranOut_PcsLN, 0);
        $ReciveTranOut_PriceLN = number_format($ReciveTranOut_PriceLN, 0);
        $ReturnStore_PcsLN = number_format($ReturnStore_PcsLN, 0);
        $ReturnStore_PriceLN = number_format($ReturnStore_PriceLN, 0);
        $AllOut_PcsLN = number_format($AllOut_PcsLN, 0);
        $AllOut_PriceLN = number_format($AllOut_PriceLN, 0);
        $Calculate_PcsLN = number_format($Calculate_PcsLN, 0);
        $Calculate_PriceLN = number_format($Calculate_PriceLN, 0);
        $NewCalculate_PcsLN = number_format($NewCalculate_PcsLN, 0);
        $NewCalculate_PriceLN = number_format($NewCalculate_PriceLN, 0);
        $Diff_PcsLN = number_format($Diff_PcsLN, 0);
        $Diff_PriceLN = number_format($Diff_PriceLN, 0);
        $NewTotal_PcsLN = number_format($NewTotal_PcsLN, 0);
        $NewTotal_PriceLN = number_format($NewTotal_PriceLN, 0);
        $NewTotalDiff_NavLN = number_format($NewTotalDiff_NavLN, 0);
        $NewTotalDiff_CalLN = number_format($NewTotalDiff_CalLN, 0);
        $a7f1fgbu02s_PcsLN = number_format($a7f1fgbu02s_PcsLN, 0);
        $a7f1fgbu02s_PriceLN = number_format($a7f1fgbu02s_PriceLN, 0);
        $a7f2fgbu10s_PcsLN = number_format($a7f2fgbu10s_PcsLN, 0);
        $a7f2fgbu10s_PriceLN = number_format($a7f2fgbu10s_PriceLN, 0);
        $a7f2thbu05s_PcsLN = number_format($a7f2thbu05s_PcsLN, 0);
        $a7f2thbu05s_PriceLN = number_format($a7f2thbu05s_PriceLN, 0);
        $a7f2debu10s_PcsLN = number_format($a7f2debu10s_PcsLN, 0);
        $a7f2debu10s_PriceLN = number_format($a7f2debu10s_PriceLN, 0);
        $a7f2exbu11s_PcsLN = number_format($a7f2exbu11s_PcsLN, 0);
        $a7f2exbu11s_PriceLN = number_format($a7f2exbu11s_PriceLN, 0);
        $a7f2twbu04s_PcsLN = number_format($a7f2twbu04s_PcsLN, 0);
        $a7f2twbu04s_PriceLN = number_format($a7f2twbu04s_PriceLN, 0);
        $a7f2twbu07s_PcsLN = number_format($a7f2twbu07s_PcsLN, 0);
        $a7f2twbu07s_PriceLN = number_format($a7f2twbu07s_PriceLN, 0);
        $a7f2cebu10s_PcsLN = number_format($a7f2cebu10s_PcsLN, 0);
        $a7f2cebu10s_PriceLN = number_format($a7f2cebu10s_PriceLN, 0);
        $a8f1fgbu02s_PcsLN = number_format($a8f1fgbu02s_PcsLN, 0);
        $a8f1fgbu02s_PriceLN = number_format($a8f1fgbu02s_PriceLN, 0);
        $a8f2fgbu10s_PcsLN = number_format($a8f2fgbu10s_PcsLN, 0);
        $a8f2fgbu10s_PriceLN = number_format($a8f2fgbu10s_PriceLN, 0);
        $a8f2thbu05s_PcsLN = number_format($a8f2thbu05s_PcsLN, 0);
        $a8f2thbu05s_PriceLN = number_format($a8f2thbu05s_PriceLN, 0);
        $a8f2debu10s_PcsLN = number_format($a8f2debu10s_PcsLN, 0);
        $a8f2debu10s_PriceLN = number_format($a8f2debu10s_PriceLN, 0);
        $a8f2exbu11s_PcsLN = number_format($a8f2exbu11s_PcsLN, 0);
        $a8f2exbu11s_PriceLN = number_format($a8f2exbu11s_PriceLN, 0);
        $a8f2twbu04s_PcsLN = number_format($a8f2twbu04s_PcsLN, 0);
        $a8f2twbu04s_PriceLN = number_format($a8f2twbu04s_PriceLN, 0);
        $a8f2twbu07s_PcsLN = number_format($a8f2twbu07s_PcsLN, 0);
        $a8f2twbu07s_PriceLN = number_format($a8f2twbu07s_PriceLN, 0);
        $a8f2cebu10s_PcsLN = number_format($a8f2cebu10s_PcsLN, 0);
        $a8f2cebu10s_PriceLN = number_format($a8f2cebu10s_PriceLN, 0);
        $DC1_PcsLN = number_format($DC1_PcsLN, 0);
        $DC1_PriceLN = number_format($DC1_PriceLN, 0);
        $DCP_PcsLN = number_format($DCP_PcsLN, 0);
        $DCP_PriceLN = number_format($DCP_PriceLN, 0);
        $DCY_PcsLN = number_format($DCY_PcsLN, 0);
        $DCY_PriceLN = number_format($DCY_PriceLN, 0);
        $DEX_PcsLN = number_format($DEX_PcsLN, 0);
        $DEX_PriceLN = number_format($DEX_PriceLN, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllProduct = number_format($Pcs_AfterAllProduct, 0);
        $Price_AfterAllProduct = number_format($Price_AfterAllProduct, 0);
        $Po_PcsAllProduct = number_format($Po_PcsAllProduct, 0);
        $Po_PriceAllProduct = number_format($Po_PriceAllProduct, 0);
        $Neg_PcsAllProduct = number_format($Neg_PcsAllProduct, 0);
        $Neg_PriceAllProduct = number_format($Neg_PriceAllProduct, 0);
        $BackChange_PcsAllProduct = number_format($BackChange_PcsAllProduct, 0);
        $BackChange_PriceAllProduct = number_format($BackChange_PriceAllProduct, 0);
        $Purchase_PcsAllProduct = number_format($Purchase_PcsAllProduct, 0);
        $Purchase_PriceAllProduct = number_format($Purchase_PriceAllProduct, 0);
        $ReciveTranfer_PcsAllProduct = number_format($ReciveTranfer_PcsAllProduct, 0);
        $ReciveTranfer_PriceAllProduct = number_format($ReciveTranfer_PriceAllProduct, 0);
        $ReturnItem_PCSAllProduct = number_format($ReturnItem_PCSAllProduct, 0);
        $ReturnItem_PriceAllProduct = number_format($ReturnItem_PriceAllProduct, 0);
        $AllIn_PcsAllProduct = number_format($AllIn_PcsAllProduct, 0);
        $AllIn_PriceAllProduct = number_format($AllIn_PriceAllProduct, 0);
        $SendSale_PcsAllProduct = number_format($SendSale_PcsAllProduct, 0);
        $SendSale_PriceAllProduct = number_format($SendSale_PriceAllProduct, 0);
        $ReciveTranOut_PcsAllProduct = number_format($ReciveTranOut_PcsAllProduct, 0);
        $ReciveTranOut_PriceAllProduct = number_format($ReciveTranOut_PriceAllProduct, 0);
        $ReturnStore_PcsAllProduct = number_format($ReturnStore_PcsAllProduct, 0);
        $ReturnStore_PriceAllProduct = number_format($ReturnStore_PriceAllProduct, 0);
        $AllOut_PcsAllProduct = number_format($AllOut_PcsAllProduct, 0);
        $AllOut_PriceAllProduct = number_format($AllOut_PriceAllProduct, 0);
        $Calculate_PcsAllProduct = number_format($Calculate_PcsAllProduct, 0);
        $Calculate_PriceAllProduct = number_format($Calculate_PriceAllProduct, 0);
        $NewCalculate_PcsAllProduct = number_format($NewCalculate_PcsAllProduct, 0);
        $NewCalculate_PriceAllProduct = number_format($NewCalculate_PriceAllProduct, 0);
        $Diff_PcsAllProduct = number_format($Diff_PcsAllProduct, 0);
        $Diff_PriceAllProduct = number_format($Diff_PriceAllProduct, 0);
        $NewTotal_PcsAllProduct = number_format($NewTotal_PcsAllProduct, 0);
        $NewTotal_PriceAllProduct = number_format($NewTotal_PriceAllProduct, 0);
        $NewTotalDiff_NavAllProduct = number_format($NewTotalDiff_NavAllProduct, 0);
        $NewTotalDiff_CalAllProduct = number_format($NewTotalDiff_CalAllProduct, 0);
        $a7f1fgbu02s_PcsAllProduct = number_format($a7f1fgbu02s_PcsAllProduct, 0);
        $a7f1fgbu02s_PriceAllProduct = number_format($a7f1fgbu02s_PriceAllProduct, 0);
        $a7f2fgbu10s_PcsAllProduct = number_format($a7f2fgbu10s_PcsAllProduct, 0);
        $a7f2fgbu10s_PriceAllProduct = number_format($a7f2fgbu10s_PriceAllProduct, 0);
        $a7f2thbu05s_PcsAllProduct = number_format($a7f2thbu05s_PcsAllProduct, 0);
        $a7f2thbu05s_PriceAllProduct = number_format($a7f2thbu05s_PriceAllProduct, 0);
        $a7f2debu10s_PcsAllProduct = number_format($a7f2debu10s_PcsAllProduct, 0);
        $a7f2debu10s_PriceAllProduct = number_format($a7f2debu10s_PriceAllProduct, 0);
        $a7f2exbu11s_PcsAllProduct = number_format($a7f2exbu11s_PcsAllProduct, 0);
        $a7f2exbu11s_PriceAllProduct = number_format($a7f2exbu11s_PriceAllProduct, 0);
        $a7f2twbu04s_PcsAllProduct = number_format($a7f2twbu04s_PcsAllProduct, 0);
        $a7f2twbu04s_PriceAllProduct = number_format($a7f2twbu04s_PriceAllProduct, 0);
        $a7f2twbu07s_PcsAllProduct = number_format($a7f2twbu07s_PcsAllProduct, 0);
        $a7f2twbu07s_PriceAllProduct = number_format($a7f2twbu07s_PriceAllProduct, 0);
        $a7f2cebu10s_PcsAllProduct = number_format($a7f2cebu10s_PcsAllProduct, 0);
        $a7f2cebu10s_PriceAllProduct = number_format($a7f2cebu10s_PriceAllProduct, 0);
        $a8f1fgbu02s_PcsAllProduct = number_format($a8f1fgbu02s_PcsAllProduct, 0);
        $a8f1fgbu02s_PriceAllProduct = number_format($a8f1fgbu02s_PriceAllProduct, 0);
        $a8f2fgbu10s_PcsAllProduct = number_format($a8f2fgbu10s_PcsAllProduct, 0);
        $a8f2fgbu10s_PriceAllProduct = number_format($a8f2fgbu10s_PriceAllProduct, 0);
        $a8f2thbu05s_PcsAllProduct = number_format($a8f2thbu05s_PcsAllProduct, 0);
        $a8f2thbu05s_PriceAllProduct = number_format($a8f2thbu05s_PriceAllProduct, 0);
        $a8f2debu10s_PcsAllProduct = number_format($a8f2debu10s_PcsAllProduct, 0);
        $a8f2debu10s_PriceAllProduct = number_format($a8f2debu10s_PriceAllProduct, 0);
        $a8f2exbu11s_PcsAllProduct = number_format($a8f2exbu11s_PcsAllProduct, 0);
        $a8f2exbu11s_PriceAllProduct = number_format($a8f2exbu11s_PriceAllProduct, 0);
        $a8f2twbu04s_PcsAllProduct = number_format($a8f2twbu04s_PcsAllProduct, 0);
        $a8f2twbu04s_PriceAllProduct = number_format($a8f2twbu04s_PriceAllProduct, 0);
        $a8f2twbu07s_PcsAllProduct = number_format($a8f2twbu07s_PcsAllProduct, 0);
        $a8f2twbu07s_PriceAllProduct = number_format($a8f2twbu07s_PriceAllProduct, 0);
        $a8f2cebu10s_PcsAllProduct = number_format($a8f2cebu10s_PcsAllProduct, 0);
        $a8f2cebu10s_PriceAllProduct = number_format($a8f2cebu10s_PriceAllProduct, 0);
        $DC1_PcsAllProduct = number_format($DC1_PcsAllProduct, 0);
        $DC1_PriceAllProduct = number_format($DC1_PriceAllProduct, 0);
        $DCP_PcsAllProduct = number_format($DCP_PcsAllProduct, 0);
        $DCP_PriceAllProduct = number_format($DCP_PriceAllProduct, 0);
        $DCY_PcsAllProduct = number_format($DCY_PcsAllProduct, 0);
        $DCY_PriceAllProduct = number_format($DCY_PriceAllProduct, 0);
        $DEX_PcsAllProduct = number_format($DEX_PcsAllProduct, 0);
        $DEX_PriceAllProduct = number_format($DEX_PriceAllProduct, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS = number_format($Pcs_AfterAS, 0);
        $Price_AfterAS = number_format($Price_AfterAS, 0);
        $Po_PcsAS = number_format($Po_PcsAS, 0);
        $Po_PriceAS = number_format($Po_PriceAS, 0);
        $Neg_PcsAS = number_format($Neg_PcsAS, 0);
        $Neg_PriceAS = number_format($Neg_PriceAS, 0);
        $BackChange_PcsAS = number_format($BackChange_PcsAS, 0);
        $BackChange_PriceAS = number_format($BackChange_PriceAS, 0);
        $Purchase_PcsAS = number_format($Purchase_PcsAS, 0);
        $Purchase_PriceAS = number_format($Purchase_PriceAS, 0);
        $ReciveTranfer_PcsAS = number_format($ReciveTranfer_PcsAS, 0);
        $ReciveTranfer_PriceAS = number_format($ReciveTranfer_PriceAS, 0);
        $ReturnItem_PCSAS = number_format($ReturnItem_PCSAS, 0);
        $ReturnItem_PriceAS = number_format($ReturnItem_PriceAS, 0);
        $AllIn_PcsAS = number_format($AllIn_PcsAS, 0);
        $AllIn_PriceAS = number_format($AllIn_PriceAS, 0);
        $SendSale_PcsAS = number_format($SendSale_PcsAS, 0);
        $SendSale_PriceAS = number_format($SendSale_PriceAS, 0);
        $ReciveTranOut_PcsAS = number_format($ReciveTranOut_PcsAS, 0);
        $ReciveTranOut_PriceAS = number_format($ReciveTranOut_PriceAS, 0);
        $ReturnStore_PcsAS = number_format($ReturnStore_PcsAS, 0);
        $ReturnStore_PriceAS = number_format($ReturnStore_PriceAS, 0);
        $AllOut_PcsAS = number_format($AllOut_PcsAS, 0);
        $AllOut_PriceAS = number_format($AllOut_PriceAS, 0);
        $Calculate_PcsAS = number_format($Calculate_PcsAS, 0);
        $Calculate_PriceAS = number_format($Calculate_PriceAS, 0);
        $NewCalculate_PcsAS = number_format($NewCalculate_PcsAS, 0);
        $NewCalculate_PriceAS = number_format($NewCalculate_PriceAS, 0);
        $Diff_PcsAS = number_format($Diff_PcsAS, 0);
        $Diff_PriceAS = number_format($Diff_PriceAS, 0);
        $NewTotal_PcsAS = number_format($NewTotal_PcsAS, 0);
        $NewTotal_PriceAS = number_format($NewTotal_PriceAS, 0);
        $NewTotalDiff_NavAS = number_format($NewTotalDiff_NavAS, 0);
        $NewTotalDiff_CalAS = number_format($NewTotalDiff_CalAS, 0);
        $a7f1fgbu02s_PcsAS = number_format($a7f1fgbu02s_PcsAS, 0);
        $a7f1fgbu02s_PriceAS = number_format($a7f1fgbu02s_PriceAS, 0);
        $a7f2fgbu10s_PcsAS = number_format($a7f2fgbu10s_PcsAS, 0);
        $a7f2fgbu10s_PriceAS = number_format($a7f2fgbu10s_PriceAS, 0);
        $a7f2thbu05s_PcsAS = number_format($a7f2thbu05s_PcsAS, 0);
        $a7f2thbu05s_PriceAS = number_format($a7f2thbu05s_PriceAS, 0);
        $a7f2debu10s_PcsAS = number_format($a7f2debu10s_PcsAS, 0);
        $a7f2debu10s_PriceAS = number_format($a7f2debu10s_PriceAS, 0);
        $a7f2exbu11s_PcsAS = number_format($a7f2exbu11s_PcsAS, 0);
        $a7f2exbu11s_PriceAS = number_format($a7f2exbu11s_PriceAS, 0);
        $a7f2twbu04s_PcsAS = number_format($a7f2twbu04s_PcsAS, 0);
        $a7f2twbu04s_PriceAS = number_format($a7f2twbu04s_PriceAS, 0);
        $a7f2twbu07s_PcsAS = number_format($a7f2twbu07s_PcsAS, 0);
        $a7f2twbu07s_PriceAS = number_format($a7f2twbu07s_PriceAS, 0);
        $a7f2cebu10s_PcsAS = number_format($a7f2cebu10s_PcsAS, 0);
        $a7f2cebu10s_PriceAS = number_format($a7f2cebu10s_PriceAS, 0);
        $a8f1fgbu02s_PcsAS = number_format($a8f1fgbu02s_PcsAS, 0);
        $a8f1fgbu02s_PriceAS = number_format($a8f1fgbu02s_PriceAS, 0);
        $a8f2fgbu10s_PcsAS = number_format($a8f2fgbu10s_PcsAS, 0);
        $a8f2fgbu10s_PriceAS = number_format($a8f2fgbu10s_PriceAS, 0);
        $a8f2thbu05s_PcsAS = number_format($a8f2thbu05s_PcsAS, 0);
        $a8f2thbu05s_PriceAS = number_format($a8f2thbu05s_PriceAS, 0);
        $a8f2debu10s_PcsAS = number_format($a8f2debu10s_PcsAS, 0);
        $a8f2debu10s_PriceAS = number_format($a8f2debu10s_PriceAS, 0);
        $a8f2exbu11s_PcsAS = number_format($a8f2exbu11s_PcsAS, 0);
        $a8f2exbu11s_PriceAS = number_format($a8f2exbu11s_PriceAS, 0);
        $a8f2twbu04s_PcsAS = number_format($a8f2twbu04s_PcsAS, 0);
        $a8f2twbu04s_PriceAS = number_format($a8f2twbu04s_PriceAS, 0);
        $a8f2twbu07s_PcsAS = number_format($a8f2twbu07s_PcsAS, 0);
        $a8f2twbu07s_PriceAS = number_format($a8f2twbu07s_PriceAS, 0);
        $a8f2cebu10s_PcsAS = number_format($a8f2cebu10s_PcsAS, 0);
        $a8f2cebu10s_PriceAS = number_format($a8f2cebu10s_PriceAS, 0);
        $DC1_PcsAS = number_format($DC1_PcsAS, 0);
        $DC1_PriceAS = number_format($DC1_PriceAS, 0);
        $DCP_PcsAS = number_format($DCP_PcsAS, 0);
        $DCP_PriceAS = number_format($DCP_PriceAS, 0);
        $DCY_PcsAS = number_format($DCY_PcsAS, 0);
        $DCY_PriceAS = number_format($DCY_PriceAS, 0);
        $DEX_PcsAS = number_format($DEX_PcsAS, 0);
        $DEX_PriceAS = number_format($DEX_PriceAS, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSTW = number_format($Pcs_AfterSTW, 0);
        $Price_AfterSTW = number_format($Price_AfterSTW, 0);
        $Po_PcsSTW = number_format($Po_PcsSTW, 0);
        $Po_PriceSTW = number_format($Po_PriceSTW, 0);
        $Neg_PcsSTW = number_format($Neg_PcsSTW, 0);
        $Neg_PriceSTW = number_format($Neg_PriceSTW, 0);
        $BackChange_PcsSTW = number_format($BackChange_PcsSTW, 0);
        $BackChange_PriceSTW = number_format($BackChange_PriceSTW, 0);
        $Purchase_PcsSTW = number_format($Purchase_PcsSTW, 0);
        $Purchase_PriceSTW = number_format($Purchase_PriceSTW, 0);
        $ReciveTranfer_PcsSTW = number_format($ReciveTranfer_PcsSTW, 0);
        $ReciveTranfer_PriceSTW = number_format($ReciveTranfer_PriceSTW, 0);
        $ReturnItem_PCSSTW = number_format($ReturnItem_PCSSTW, 0);
        $ReturnItem_PriceSTW = number_format($ReturnItem_PriceSTW, 0);
        $AllIn_PcsSTW = number_format($AllIn_PcsSTW, 0);
        $AllIn_PriceSTW = number_format($AllIn_PriceSTW, 0);
        $SendSale_PcsSTW = number_format($SendSale_PcsSTW, 0);
        $SendSale_PriceSTW = number_format($SendSale_PriceSTW, 0);
        $ReciveTranOut_PcsSTW = number_format($ReciveTranOut_PcsSTW, 0);
        $ReciveTranOut_PriceSTW = number_format($ReciveTranOut_PriceSTW, 0);
        $ReturnStore_PcsSTW = number_format($ReturnStore_PcsSTW, 0);
        $ReturnStore_PriceSTW = number_format($ReturnStore_PriceSTW, 0);
        $AllOut_PcsSTW = number_format($AllOut_PcsSTW, 0);
        $AllOut_PriceSTW = number_format($AllOut_PriceSTW, 0);
        $Calculate_PcsSTW = number_format($Calculate_PcsSTW, 0);
        $Calculate_PriceSTW = number_format($Calculate_PriceSTW, 0);
        $NewCalculate_PcsSTW = number_format($NewCalculate_PcsSTW, 0);
        $NewCalculate_PriceSTW = number_format($NewCalculate_PriceSTW, 0);
        $Diff_PcsSTW = number_format($Diff_PcsSTW, 0);
        $Diff_PriceSTW = number_format($Diff_PriceSTW, 0);
        $NewTotal_PcsSTW = number_format($NewTotal_PcsSTW, 0);
        $NewTotal_PriceSTW = number_format($NewTotal_PriceSTW, 0);
        $NewTotalDiff_NavSTW = number_format($NewTotalDiff_NavSTW, 0);
        $NewTotalDiff_CalSTW = number_format($NewTotalDiff_CalSTW, 0);
        $a7f1fgbu02s_PcsSTW = number_format($a7f1fgbu02s_PcsSTW, 0);
        $a7f1fgbu02s_PriceSTW = number_format($a7f1fgbu02s_PriceSTW, 0);
        $a7f2fgbu10s_PcsSTW = number_format($a7f2fgbu10s_PcsSTW, 0);
        $a7f2fgbu10s_PriceSTW = number_format($a7f2fgbu10s_PriceSTW, 0);
        $a7f2thbu05s_PcsSTW = number_format($a7f2thbu05s_PcsSTW, 0);
        $a7f2thbu05s_PriceSTW = number_format($a7f2thbu05s_PriceSTW, 0);
        $a7f2debu10s_PcsSTW = number_format($a7f2debu10s_PcsSTW, 0);
        $a7f2debu10s_PriceSTW = number_format($a7f2debu10s_PriceSTW, 0);
        $a7f2exbu11s_PcsSTW = number_format($a7f2exbu11s_PcsSTW, 0);
        $a7f2exbu11s_PriceSTW = number_format($a7f2exbu11s_PriceSTW, 0);
        $a7f2twbu04s_PcsSTW = number_format($a7f2twbu04s_PcsSTW, 0);
        $a7f2twbu04s_PriceSTW = number_format($a7f2twbu04s_PriceSTW, 0);
        $a7f2twbu07s_PcsSTW = number_format($a7f2twbu07s_PcsSTW, 0);
        $a7f2twbu07s_PriceSTW = number_format($a7f2twbu07s_PriceSTW, 0);
        $a7f2cebu10s_PcsSTW = number_format($a7f2cebu10s_PcsSTW, 0);
        $a7f2cebu10s_PriceSTW = number_format($a7f2cebu10s_PriceSTW, 0);
        $a8f1fgbu02s_PcsSTW = number_format($a8f1fgbu02s_PcsSTW, 0);
        $a8f1fgbu02s_PriceSTW = number_format($a8f1fgbu02s_PriceSTW, 0);
        $a8f2fgbu10s_PcsSTW = number_format($a8f2fgbu10s_PcsSTW, 0);
        $a8f2fgbu10s_PriceSTW = number_format($a8f2fgbu10s_PriceSTW, 0);
        $a8f2thbu05s_PcsSTW = number_format($a8f2thbu05s_PcsSTW, 0);
        $a8f2thbu05s_PriceSTW = number_format($a8f2thbu05s_PriceSTW, 0);
        $a8f2debu10s_PcsSTW = number_format($a8f2debu10s_PcsSTW, 0);
        $a8f2debu10s_PriceSTW = number_format($a8f2debu10s_PriceSTW, 0);
        $a8f2exbu11s_PcsSTW = number_format($a8f2exbu11s_PcsSTW, 0);
        $a8f2exbu11s_PriceSTW = number_format($a8f2exbu11s_PriceSTW, 0);
        $a8f2twbu04s_PcsSTW = number_format($a8f2twbu04s_PcsSTW, 0);
        $a8f2twbu04s_PriceSTW = number_format($a8f2twbu04s_PriceSTW, 0);
        $a8f2twbu07s_PcsSTW = number_format($a8f2twbu07s_PcsSTW, 0);
        $a8f2twbu07s_PriceSTW = number_format($a8f2twbu07s_PriceSTW, 0);
        $a8f2cebu10s_PcsSTW = number_format($a8f2cebu10s_PcsSTW, 0);
        $a8f2cebu10s_PriceSTW = number_format($a8f2cebu10s_PriceSTW, 0);
        $DC1_PcsSTW = number_format($DC1_PcsSTW, 0);
        $DC1_PriceSTW = number_format($DC1_PriceSTW, 0);
        $DCP_PcsSTW = number_format($DCP_PcsSTW, 0);
        $DCP_PriceSTW = number_format($DCP_PriceSTW, 0);
        $DCY_PcsSTW = number_format($DCY_PcsSTW, 0);
        $DCY_PriceSTW = number_format($DCY_PriceSTW, 0);
        $DEX_PcsSTW = number_format($DEX_PcsSTW, 0);
        $DEX_PriceSTW = number_format($DEX_PriceSTW, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSLN = number_format($Pcs_AfterSLN, 0);
        $Price_AfterSLN = number_format($Price_AfterSLN, 0);
        $Po_PcsSLN = number_format($Po_PcsSLN, 0);
        $Po_PriceSLN = number_format($Po_PriceSLN, 0);
        $Neg_PcsSLN = number_format($Neg_PcsSLN, 0);
        $Neg_PriceSLN = number_format($Neg_PriceSLN, 0);
        $BackChange_PcsSLN = number_format($BackChange_PcsSLN, 0);
        $BackChange_PriceSLN = number_format($BackChange_PriceSLN, 0);
        $Purchase_PcsSLN = number_format($Purchase_PcsSLN, 0);
        $Purchase_PriceSLN = number_format($Purchase_PriceSLN, 0);
        $ReciveTranfer_PcsSLN = number_format($ReciveTranfer_PcsSLN, 0);
        $ReciveTranfer_PriceSLN = number_format($ReciveTranfer_PriceSLN, 0);
        $ReturnItem_PCSSLN = number_format($ReturnItem_PCSSLN, 0);
        $ReturnItem_PriceSLN = number_format($ReturnItem_PriceSLN, 0);
        $AllIn_PcsSLN = number_format($AllIn_PcsSLN, 0);
        $AllIn_PriceSLN = number_format($AllIn_PriceSLN, 0);
        $SendSale_PcsSLN = number_format($SendSale_PcsSLN, 0);
        $SendSale_PriceSLN = number_format($SendSale_PriceSLN, 0);
        $ReciveTranOut_PcsSLN = number_format($ReciveTranOut_PcsSLN, 0);
        $ReciveTranOut_PriceSLN = number_format($ReciveTranOut_PriceSLN, 0);
        $ReturnStore_PcsSLN = number_format($ReturnStore_PcsSLN, 0);
        $ReturnStore_PriceSLN = number_format($ReturnStore_PriceSLN, 0);
        $AllOut_PcsSLN = number_format($AllOut_PcsSLN, 0);
        $AllOut_PriceSLN = number_format($AllOut_PriceSLN, 0);
        $Calculate_PcsSLN = number_format($Calculate_PcsSLN, 0);
        $Calculate_PriceSLN = number_format($Calculate_PriceSLN, 0);
        $NewCalculate_PcsSLN = number_format($NewCalculate_PcsSLN, 0);
        $NewCalculate_PriceSLN = number_format($NewCalculate_PriceSLN, 0);
        $Diff_PcsSLN = number_format($Diff_PcsSLN, 0);
        $Diff_PriceSLN = number_format($Diff_PriceSLN, 0);
        $NewTotal_PcsSLN = number_format($NewTotal_PcsSLN, 0);
        $NewTotal_PriceSLN = number_format($NewTotal_PriceSLN, 0);
        $NewTotalDiff_NavSLN = number_format($NewTotalDiff_NavSLN, 0);
        $NewTotalDiff_CalSLN = number_format($NewTotalDiff_CalSLN, 0);
        $a7f1fgbu02s_PcsSLN = number_format($a7f1fgbu02s_PcsSLN, 0);
        $a7f1fgbu02s_PriceSLN = number_format($a7f1fgbu02s_PriceSLN, 0);
        $a7f2fgbu10s_PcsSLN = number_format($a7f2fgbu10s_PcsSLN, 0);
        $a7f2fgbu10s_PriceSLN = number_format($a7f2fgbu10s_PriceSLN, 0);
        $a7f2thbu05s_PcsSLN = number_format($a7f2thbu05s_PcsSLN, 0);
        $a7f2thbu05s_PriceSLN = number_format($a7f2thbu05s_PriceSLN, 0);
        $a7f2debu10s_PcsSLN = number_format($a7f2debu10s_PcsSLN, 0);
        $a7f2debu10s_PriceSLN = number_format($a7f2debu10s_PriceSLN, 0);
        $a7f2exbu11s_PcsSLN = number_format($a7f2exbu11s_PcsSLN, 0);
        $a7f2exbu11s_PriceSLN = number_format($a7f2exbu11s_PriceSLN, 0);
        $a7f2twbu04s_PcsSLN = number_format($a7f2twbu04s_PcsSLN, 0);
        $a7f2twbu04s_PriceSLN = number_format($a7f2twbu04s_PriceSLN, 0);
        $a7f2twbu07s_PcsSLN = number_format($a7f2twbu07s_PcsSLN, 0);
        $a7f2twbu07s_PriceSLN = number_format($a7f2twbu07s_PriceSLN, 0);
        $a7f2cebu10s_PcsSLN = number_format($a7f2cebu10s_PcsSLN, 0);
        $a7f2cebu10s_PriceSLN = number_format($a7f2cebu10s_PriceSLN, 0);
        $a8f1fgbu02s_PcsSLN = number_format($a8f1fgbu02s_PcsSLN, 0);
        $a8f1fgbu02s_PriceSLN = number_format($a8f1fgbu02s_PriceSLN, 0);
        $a8f2fgbu10s_PcsSLN = number_format($a8f2fgbu10s_PcsSLN, 0);
        $a8f2fgbu10s_PriceSLN = number_format($a8f2fgbu10s_PriceSLN, 0);
        $a8f2thbu05s_PcsSLN = number_format($a8f2thbu05s_PcsSLN, 0);
        $a8f2thbu05s_PriceSLN = number_format($a8f2thbu05s_PriceSLN, 0);
        $a8f2debu10s_PcsSLN = number_format($a8f2debu10s_PcsSLN, 0);
        $a8f2debu10s_PriceSLN = number_format($a8f2debu10s_PriceSLN, 0);
        $a8f2exbu11s_PcsSLN = number_format($a8f2exbu11s_PcsSLN, 0);
        $a8f2exbu11s_PriceSLN = number_format($a8f2exbu11s_PriceSLN, 0);
        $a8f2twbu04s_PcsSLN = number_format($a8f2twbu04s_PcsSLN, 0);
        $a8f2twbu04s_PriceSLN = number_format($a8f2twbu04s_PriceSLN, 0);
        $a8f2twbu07s_PcsSLN = number_format($a8f2twbu07s_PcsSLN, 0);
        $a8f2twbu07s_PriceSLN = number_format($a8f2twbu07s_PriceSLN, 0);
        $a8f2cebu10s_PcsSLN = number_format($a8f2cebu10s_PcsSLN, 0);
        $a8f2cebu10s_PriceSLN = number_format($a8f2cebu10s_PriceSLN, 0);
        $DC1_PcsSLN = number_format($DC1_PcsSLN, 0);
        $DC1_PriceSLN = number_format($DC1_PriceSLN, 0);
        $DCP_PcsSLN = number_format($DCP_PcsSLN, 0);
        $DCP_PriceSLN = number_format($DCP_PriceSLN, 0);
        $DCY_PcsSLN = number_format($DCY_PcsSLN, 0);
        $DCY_PriceSLN = number_format($DCY_PriceSLN, 0);
        $DEX_PcsSLN = number_format($DEX_PcsSLN, 0);
        $DEX_PriceSLN = number_format($DEX_PriceSLN, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSFN = number_format($Pcs_AfterSFN, 0);
        $Price_AfterSFN = number_format($Price_AfterSFN, 0);
        $Po_PcsSFN = number_format($Po_PcsSFN, 0);
        $Po_PriceSFN = number_format($Po_PriceSFN, 0);
        $Neg_PcsSFN = number_format($Neg_PcsSFN, 0);
        $Neg_PriceSFN = number_format($Neg_PriceSFN, 0);
        $BackChange_PcsSFN = number_format($BackChange_PcsSFN, 0);
        $BackChange_PriceSFN = number_format($BackChange_PriceSFN, 0);
        $Purchase_PcsSFN = number_format($Purchase_PcsSFN, 0);
        $Purchase_PriceSFN = number_format($Purchase_PriceSFN, 0);
        $ReciveTranfer_PcsSFN = number_format($ReciveTranfer_PcsSFN, 0);
        $ReciveTranfer_PriceSFN = number_format($ReciveTranfer_PriceSFN, 0);
        $ReturnItem_PCSSFN = number_format($ReturnItem_PCSSFN, 0);
        $ReturnItem_PriceSFN = number_format($ReturnItem_PriceSFN, 0);
        $AllIn_PcsSFN = number_format($AllIn_PcsSFN, 0);
        $AllIn_PriceSFN = number_format($AllIn_PriceSFN, 0);
        $SendSale_PcsSFN = number_format($SendSale_PcsSFN, 0);
        $SendSale_PriceSFN = number_format($SendSale_PriceSFN, 0);
        $ReciveTranOut_PcsSFN = number_format($ReciveTranOut_PcsSFN, 0);
        $ReciveTranOut_PriceSFN = number_format($ReciveTranOut_PriceSFN, 0);
        $ReturnStore_PcsSFN = number_format($ReturnStore_PcsSFN, 0);
        $ReturnStore_PriceSFN = number_format($ReturnStore_PriceSFN, 0);
        $AllOut_PcsSFN = number_format($AllOut_PcsSFN, 0);
        $AllOut_PriceSFN = number_format($AllOut_PriceSFN, 0);
        $Calculate_PcsSFN = number_format($Calculate_PcsSFN, 0);
        $Calculate_PriceSFN = number_format($Calculate_PriceSFN, 0);
        $NewCalculate_PcsSFN = number_format($NewCalculate_PcsSFN, 0);
        $NewCalculate_PriceSFN = number_format($NewCalculate_PriceSFN, 0);
        $Diff_PcsSFN = number_format($Diff_PcsSFN, 0);
        $Diff_PriceSFN = number_format($Diff_PriceSFN, 0);
        $NewTotal_PcsSFN = number_format($NewTotal_PcsSFN, 0);
        $NewTotal_PriceSFN = number_format($NewTotal_PriceSFN, 0);
        $NewTotalDiff_NavSFN = number_format($NewTotalDiff_NavSFN, 0);
        $NewTotalDiff_CalSFN = number_format($NewTotalDiff_CalSFN, 0);
        $a7f1fgbu02s_PcsSFN = number_format($a7f1fgbu02s_PcsSFN, 0);
        $a7f1fgbu02s_PriceSFN = number_format($a7f1fgbu02s_PriceSFN, 0);
        $a7f2fgbu10s_PcsSFN = number_format($a7f2fgbu10s_PcsSFN, 0);
        $a7f2fgbu10s_PriceSFN = number_format($a7f2fgbu10s_PriceSFN, 0);
        $a7f2thbu05s_PcsSFN = number_format($a7f2thbu05s_PcsSFN, 0);
        $a7f2thbu05s_PriceSFN = number_format($a7f2thbu05s_PriceSFN, 0);
        $a7f2debu10s_PcsSFN = number_format($a7f2debu10s_PcsSFN, 0);
        $a7f2debu10s_PriceSFN = number_format($a7f2debu10s_PriceSFN, 0);
        $a7f2exbu11s_PcsSFN = number_format($a7f2exbu11s_PcsSFN, 0);
        $a7f2exbu11s_PriceSFN = number_format($a7f2exbu11s_PriceSFN, 0);
        $a7f2twbu04s_PcsSFN = number_format($a7f2twbu04s_PcsSFN, 0);
        $a7f2twbu04s_PriceSFN = number_format($a7f2twbu04s_PriceSFN, 0);
        $a7f2twbu07s_PcsSFN = number_format($a7f2twbu07s_PcsSFN, 0);
        $a7f2twbu07s_PriceSFN = number_format($a7f2twbu07s_PriceSFN, 0);
        $a7f2cebu10s_PcsSFN = number_format($a7f2cebu10s_PcsSFN, 0);
        $a7f2cebu10s_PriceSFN = number_format($a7f2cebu10s_PriceSFN, 0);
        $a8f1fgbu02s_PcsSFN = number_format($a8f1fgbu02s_PcsSFN, 0);
        $a8f1fgbu02s_PriceSFN = number_format($a8f1fgbu02s_PriceSFN, 0);
        $a8f2fgbu10s_PcsSFN = number_format($a8f2fgbu10s_PcsSFN, 0);
        $a8f2fgbu10s_PriceSFN = number_format($a8f2fgbu10s_PriceSFN, 0);
        $a8f2thbu05s_PcsSFN = number_format($a8f2thbu05s_PcsSFN, 0);
        $a8f2thbu05s_PriceSFN = number_format($a8f2thbu05s_PriceSFN, 0);
        $a8f2debu10s_PcsSFN = number_format($a8f2debu10s_PcsSFN, 0);
        $a8f2debu10s_PriceSFN = number_format($a8f2debu10s_PriceSFN, 0);
        $a8f2exbu11s_PcsSFN = number_format($a8f2exbu11s_PcsSFN, 0);
        $a8f2exbu11s_PriceSFN = number_format($a8f2exbu11s_PriceSFN, 0);
        $a8f2twbu04s_PcsSFN = number_format($a8f2twbu04s_PcsSFN, 0);
        $a8f2twbu04s_PriceSFN = number_format($a8f2twbu04s_PriceSFN, 0);
        $a8f2twbu07s_PcsSFN = number_format($a8f2twbu07s_PcsSFN, 0);
        $a8f2twbu07s_PriceSFN = number_format($a8f2twbu07s_PriceSFN, 0);
        $a8f2cebu10s_PcsSFN = number_format($a8f2cebu10s_PcsSFN, 0);
        $a8f2cebu10s_PriceSFN = number_format($a8f2cebu10s_PriceSFN, 0);
        $DC1_PcsSFN = number_format($DC1_PcsSFN, 0);
        $DC1_PriceSFN = number_format($DC1_PriceSFN, 0);
        $DCP_PcsSFN = number_format($DCP_PcsSFN, 0);
        $DCP_PriceSFN = number_format($DCP_PriceSFN, 0);
        $DCY_PcsSFN = number_format($DCY_PcsSFN, 0);
        $DCY_PriceSFN = number_format($DCY_PriceSFN, 0);
        $DEX_PcsSFN = number_format($DEX_PcsSFN, 0);
        $DEX_PriceSFN = number_format($DEX_PriceSFN, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSMT = number_format($Pcs_AfterSMT, 0);
        $Price_AfterSMT = number_format($Price_AfterSMT, 0);
        $Po_PcsSMT = number_format($Po_PcsSMT, 0);
        $Po_PriceSMT = number_format($Po_PriceSMT, 0);
        $Neg_PcsSMT = number_format($Neg_PcsSMT, 0);
        $Neg_PriceSMT = number_format($Neg_PriceSMT, 0);
        $BackChange_PcsSMT = number_format($BackChange_PcsSMT, 0);
        $BackChange_PriceSMT = number_format($BackChange_PriceSMT, 0);
        $Purchase_PcsSMT = number_format($Purchase_PcsSMT, 0);
        $Purchase_PriceSMT = number_format($Purchase_PriceSMT, 0);
        $ReciveTranfer_PcsSMT = number_format($ReciveTranfer_PcsSMT, 0);
        $ReciveTranfer_PriceSMT = number_format($ReciveTranfer_PriceSMT, 0);
        $ReturnItem_PCSSMT = number_format($ReturnItem_PCSSMT, 0);
        $ReturnItem_PriceSMT = number_format($ReturnItem_PriceSMT, 0);
        $AllIn_PcsSMT = number_format($AllIn_PcsSMT, 0);
        $AllIn_PriceSMT = number_format($AllIn_PriceSMT, 0);
        $SendSale_PcsSMT = number_format($SendSale_PcsSMT, 0);
        $SendSale_PriceSMT = number_format($SendSale_PriceSMT, 0);
        $ReciveTranOut_PcsSMT = number_format($ReciveTranOut_PcsSMT, 0);
        $ReciveTranOut_PriceSMT = number_format($ReciveTranOut_PriceSMT, 0);
        $ReturnStore_PcsSMT = number_format($ReturnStore_PcsSMT, 0);
        $ReturnStore_PriceSMT = number_format($ReturnStore_PriceSMT, 0);
        $AllOut_PcsSMT = number_format($AllOut_PcsSMT, 0);
        $AllOut_PriceSMT = number_format($AllOut_PriceSMT, 0);
        $Calculate_PcsSMT = number_format($Calculate_PcsSMT, 0);
        $Calculate_PriceSMT = number_format($Calculate_PriceSMT, 0);
        $NewCalculate_PcsSMT = number_format($NewCalculate_PcsSMT, 0);
        $NewCalculate_PriceSMT = number_format($NewCalculate_PriceSMT, 0);
        $Diff_PcsSMT = number_format($Diff_PcsSMT, 0);
        $Diff_PriceSMT = number_format($Diff_PriceSMT, 0);
        $NewTotal_PcsSMT = number_format($NewTotal_PcsSMT, 0);
        $NewTotal_PriceSMT = number_format($NewTotal_PriceSMT, 0);
        $NewTotalDiff_NavSMT = number_format($NewTotalDiff_NavSMT, 0);
        $NewTotalDiff_CalSMT = number_format($NewTotalDiff_CalSMT, 0);
        $a7f1fgbu02s_PcsSMT = number_format($a7f1fgbu02s_PcsSMT, 0);
        $a7f1fgbu02s_PriceSMT = number_format($a7f1fgbu02s_PriceSMT, 0);
        $a7f2fgbu10s_PcsSMT = number_format($a7f2fgbu10s_PcsSMT, 0);
        $a7f2fgbu10s_PriceSMT = number_format($a7f2fgbu10s_PriceSMT, 0);
        $a7f2thbu05s_PcsSMT = number_format($a7f2thbu05s_PcsSMT, 0);
        $a7f2thbu05s_PriceSMT = number_format($a7f2thbu05s_PriceSMT, 0);
        $a7f2debu10s_PcsSMT = number_format($a7f2debu10s_PcsSMT, 0);
        $a7f2debu10s_PriceSMT = number_format($a7f2debu10s_PriceSMT, 0);
        $a7f2exbu11s_PcsSMT = number_format($a7f2exbu11s_PcsSMT, 0);
        $a7f2exbu11s_PriceSMT = number_format($a7f2exbu11s_PriceSMT, 0);
        $a7f2twbu04s_PcsSMT = number_format($a7f2twbu04s_PcsSMT, 0);
        $a7f2twbu04s_PriceSMT = number_format($a7f2twbu04s_PriceSMT, 0);
        $a7f2twbu07s_PcsSMT = number_format($a7f2twbu07s_PcsSMT, 0);
        $a7f2twbu07s_PriceSMT = number_format($a7f2twbu07s_PriceSMT, 0);
        $a7f2cebu10s_PcsSMT = number_format($a7f2cebu10s_PcsSMT, 0);
        $a7f2cebu10s_PriceSMT = number_format($a7f2cebu10s_PriceSMT, 0);
        $a8f1fgbu02s_PcsSMT = number_format($a8f1fgbu02s_PcsSMT, 0);
        $a8f1fgbu02s_PriceSMT = number_format($a8f1fgbu02s_PriceSMT, 0);
        $a8f2fgbu10s_PcsSMT = number_format($a8f2fgbu10s_PcsSMT, 0);
        $a8f2fgbu10s_PriceSMT = number_format($a8f2fgbu10s_PriceSMT, 0);
        $a8f2thbu05s_PcsSMT = number_format($a8f2thbu05s_PcsSMT, 0);
        $a8f2thbu05s_PriceSMT = number_format($a8f2thbu05s_PriceSMT, 0);
        $a8f2debu10s_PcsSMT = number_format($a8f2debu10s_PcsSMT, 0);
        $a8f2debu10s_PriceSMT = number_format($a8f2debu10s_PriceSMT, 0);
        $a8f2exbu11s_PcsSMT = number_format($a8f2exbu11s_PcsSMT, 0);
        $a8f2exbu11s_PriceSMT = number_format($a8f2exbu11s_PriceSMT, 0);
        $a8f2twbu04s_PcsSMT = number_format($a8f2twbu04s_PcsSMT, 0);
        $a8f2twbu04s_PriceSMT = number_format($a8f2twbu04s_PriceSMT, 0);
        $a8f2twbu07s_PcsSMT = number_format($a8f2twbu07s_PcsSMT, 0);
        $a8f2twbu07s_PriceSMT = number_format($a8f2twbu07s_PriceSMT, 0);
        $a8f2cebu10s_PcsSMT = number_format($a8f2cebu10s_PcsSMT, 0);
        $a8f2cebu10s_PriceSMT = number_format($a8f2cebu10s_PriceSMT, 0);
        $DC1_PcsSMT = number_format($DC1_PcsSMT, 0);
        $DC1_PriceSMT = number_format($DC1_PriceSMT, 0);
        $DCP_PcsSMT = number_format($DCP_PcsSMT, 0);
        $DCP_PriceSMT = number_format($DCP_PriceSMT, 0);
        $DCY_PcsSMT = number_format($DCY_PcsSMT, 0);
        $DCY_PriceSMT = number_format($DCY_PriceSMT, 0);
        $DEX_PcsSMT = number_format($DEX_PcsSMT, 0);
        $DEX_PriceSMT = number_format($DEX_PriceSMT, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNT = number_format($Pcs_AfterSNT, 0);
        $Price_AfterSNT = number_format($Price_AfterSNT, 0);
        $Po_PcsSNT = number_format($Po_PcsSNT, 0);
        $Po_PriceSNT = number_format($Po_PriceSNT, 0);
        $Neg_PcsSNT = number_format($Neg_PcsSNT, 0);
        $Neg_PriceSNT = number_format($Neg_PriceSNT, 0);
        $BackChange_PcsSNT = number_format($BackChange_PcsSNT, 0);
        $BackChange_PriceSNT = number_format($BackChange_PriceSNT, 0);
        $Purchase_PcsSNT = number_format($Purchase_PcsSNT, 0);
        $Purchase_PriceSNT = number_format($Purchase_PriceSNT, 0);
        $ReciveTranfer_PcsSNT = number_format($ReciveTranfer_PcsSNT, 0);
        $ReciveTranfer_PriceSNT = number_format($ReciveTranfer_PriceSNT, 0);
        $ReturnItem_PCSSNT = number_format($ReturnItem_PCSSNT, 0);
        $ReturnItem_PriceSNT = number_format($ReturnItem_PriceSNT, 0);
        $AllIn_PcsSNT = number_format($AllIn_PcsSNT, 0);
        $AllIn_PriceSNT = number_format($AllIn_PriceSNT, 0);
        $SendSale_PcsSNT = number_format($SendSale_PcsSNT, 0);
        $SendSale_PriceSNT = number_format($SendSale_PriceSNT, 0);
        $ReciveTranOut_PcsSNT = number_format($ReciveTranOut_PcsSNT, 0);
        $ReciveTranOut_PriceSNT = number_format($ReciveTranOut_PriceSNT, 0);
        $ReturnStore_PcsSNT = number_format($ReturnStore_PcsSNT, 0);
        $ReturnStore_PriceSNT = number_format($ReturnStore_PriceSNT, 0);
        $AllOut_PcsSNT = number_format($AllOut_PcsSNT, 0);
        $AllOut_PriceSNT = number_format($AllOut_PriceSNT, 0);
        $Calculate_PcsSNT = number_format($Calculate_PcsSNT, 0);
        $Calculate_PriceSNT = number_format($Calculate_PriceSNT, 0);
        $NewCalculate_PcsSNT = number_format($NewCalculate_PcsSNT, 0);
        $NewCalculate_PriceSNT = number_format($NewCalculate_PriceSNT, 0);
        $Diff_PcsSNT = number_format($Diff_PcsSNT, 0);
        $Diff_PriceSNT = number_format($Diff_PriceSNT, 0);
        $NewTotal_PcsSNT = number_format($NewTotal_PcsSNT, 0);
        $NewTotal_PriceSNT = number_format($NewTotal_PriceSNT, 0);
        $NewTotalDiff_NavSNT = number_format($NewTotalDiff_NavSNT, 0);
        $NewTotalDiff_CalSNT = number_format($NewTotalDiff_CalSNT, 0);
        $a7f1fgbu02s_PcsSNT = number_format($a7f1fgbu02s_PcsSNT, 0);
        $a7f1fgbu02s_PriceSNT = number_format($a7f1fgbu02s_PriceSNT, 0);
        $a7f2fgbu10s_PcsSNT = number_format($a7f2fgbu10s_PcsSNT, 0);
        $a7f2fgbu10s_PriceSNT = number_format($a7f2fgbu10s_PriceSNT, 0);
        $a7f2thbu05s_PcsSNT = number_format($a7f2thbu05s_PcsSNT, 0);
        $a7f2thbu05s_PriceSNT = number_format($a7f2thbu05s_PriceSNT, 0);
        $a7f2debu10s_PcsSNT = number_format($a7f2debu10s_PcsSNT, 0);
        $a7f2debu10s_PriceSNT = number_format($a7f2debu10s_PriceSNT, 0);
        $a7f2exbu11s_PcsSNT = number_format($a7f2exbu11s_PcsSNT, 0);
        $a7f2exbu11s_PriceSNT = number_format($a7f2exbu11s_PriceSNT, 0);
        $a7f2twbu04s_PcsSNT = number_format($a7f2twbu04s_PcsSNT, 0);
        $a7f2twbu04s_PriceSNT = number_format($a7f2twbu04s_PriceSNT, 0);
        $a7f2twbu07s_PcsSNT = number_format($a7f2twbu07s_PcsSNT, 0);
        $a7f2twbu07s_PriceSNT = number_format($a7f2twbu07s_PriceSNT, 0);
        $a7f2cebu10s_PcsSNT = number_format($a7f2cebu10s_PcsSNT, 0);
        $a7f2cebu10s_PriceSNT = number_format($a7f2cebu10s_PriceSNT, 0);
        $a8f1fgbu02s_PcsSNT = number_format($a8f1fgbu02s_PcsSNT, 0);
        $a8f1fgbu02s_PriceSNT = number_format($a8f1fgbu02s_PriceSNT, 0);
        $a8f2fgbu10s_PcsSNT = number_format($a8f2fgbu10s_PcsSNT, 0);
        $a8f2fgbu10s_PriceSNT = number_format($a8f2fgbu10s_PriceSNT, 0);
        $a8f2thbu05s_PcsSNT = number_format($a8f2thbu05s_PcsSNT, 0);
        $a8f2thbu05s_PriceSNT = number_format($a8f2thbu05s_PriceSNT, 0);
        $a8f2debu10s_PcsSNT = number_format($a8f2debu10s_PcsSNT, 0);
        $a8f2debu10s_PriceSNT = number_format($a8f2debu10s_PriceSNT, 0);
        $a8f2exbu11s_PcsSNT = number_format($a8f2exbu11s_PcsSNT, 0);
        $a8f2exbu11s_PriceSNT = number_format($a8f2exbu11s_PriceSNT, 0);
        $a8f2twbu04s_PcsSNT = number_format($a8f2twbu04s_PcsSNT, 0);
        $a8f2twbu04s_PriceSNT = number_format($a8f2twbu04s_PriceSNT, 0);
        $a8f2twbu07s_PcsSNT = number_format($a8f2twbu07s_PcsSNT, 0);
        $a8f2twbu07s_PriceSNT = number_format($a8f2twbu07s_PriceSNT, 0);
        $a8f2cebu10s_PcsSNT = number_format($a8f2cebu10s_PcsSNT, 0);
        $a8f2cebu10s_PriceSNT = number_format($a8f2cebu10s_PriceSNT, 0);
        $DC1_PcsSNT = number_format($DC1_PcsSNT, 0);
        $DC1_PriceSNT = number_format($DC1_PriceSNT, 0);
        $DCP_PcsSNT = number_format($DCP_PcsSNT, 0);
        $DCP_PriceSNT = number_format($DCP_PriceSNT, 0);
        $DCY_PcsSNT = number_format($DCY_PcsSNT, 0);
        $DCY_PriceSNT = number_format($DCY_PriceSNT, 0);
        $DEX_PcsSNT = number_format($DEX_PcsSNT, 0);
        $DEX_PriceSNT = number_format($DEX_PriceSNT, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllSale = number_format($Pcs_AfterAllSale, 0);
        $Price_AfterAllSale = number_format($Price_AfterAllSale, 0);
        $Po_PcsAllSale = number_format($Po_PcsAllSale, 0);
        $Po_PriceAllSale = number_format($Po_PriceAllSale, 0);
        $Neg_PcsAllSale = number_format($Neg_PcsAllSale, 0);
        $Neg_PriceAllSale = number_format($Neg_PriceAllSale, 0);
        $BackChange_PcsAllSale = number_format($BackChange_PcsAllSale, 0);
        $BackChange_PriceAllSale = number_format($BackChange_PriceAllSale, 0);
        $Purchase_PcsAllSale = number_format($Purchase_PcsAllSale, 0);
        $Purchase_PriceAllSale = number_format($Purchase_PriceAllSale, 0);
        $ReciveTranfer_PcsAllSale = number_format($ReciveTranfer_PcsAllSale, 0);
        $ReciveTranfer_PriceAllSale = number_format($ReciveTranfer_PriceAllSale, 0);
        $ReturnItem_PCSAllSale = number_format($ReturnItem_PCSAllSale, 0);
        $ReturnItem_PriceAllSale = number_format($ReturnItem_PriceAllSale, 0);
        $AllIn_PcsAllSale = number_format($AllIn_PcsAllSale, 0);
        $AllIn_PriceAllSale = number_format($AllIn_PriceAllSale, 0);
        $SendSale_PcsAllSale = number_format($SendSale_PcsAllSale, 0);
        $SendSale_PriceAllSale = number_format($SendSale_PriceAllSale, 0);
        $ReciveTranOut_PcsAllSale = number_format($ReciveTranOut_PcsAllSale, 0);
        $ReciveTranOut_PriceAllSale = number_format($ReciveTranOut_PriceAllSale, 0);
        $ReturnStore_PcsAllSale = number_format($ReturnStore_PcsAllSale, 0);
        $ReturnStore_PriceAllSale = number_format($ReturnStore_PriceAllSale, 0);
        $AllOut_PcsAllSale = number_format($AllOut_PcsAllSale, 0);
        $AllOut_PriceAllSale = number_format($AllOut_PriceAllSale, 0);
        $Calculate_PcsAllSale = number_format($Calculate_PcsAllSale, 0);
        $Calculate_PriceAllSale = number_format($Calculate_PriceAllSale, 0);
        $NewCalculate_PcsAllSale = number_format($NewCalculate_PcsAllSale, 0);
        $NewCalculate_PriceAllSale = number_format($NewCalculate_PriceAllSale, 0);
        $Diff_PcsAllSale = number_format($Diff_PcsAllSale, 0);
        $Diff_PriceAllSale = number_format($Diff_PriceAllSale, 0);
        $NewTotal_PcsAllSale = number_format($NewTotal_PcsAllSale, 0);
        $NewTotal_PriceAllSale = number_format($NewTotal_PriceAllSale, 0);
        $NewTotalDiff_NavAllSale = number_format($NewTotalDiff_NavAllSale, 0);
        $NewTotalDiff_CalAllSale = number_format($NewTotalDiff_CalAllSale, 0);
        $a7f1fgbu02s_PcsAllSale = number_format($a7f1fgbu02s_PcsAllSale, 0);
        $a7f1fgbu02s_PriceAllSale = number_format($a7f1fgbu02s_PriceAllSale, 0);
        $a7f2fgbu10s_PcsAllSale = number_format($a7f2fgbu10s_PcsAllSale, 0);
        $a7f2fgbu10s_PriceAllSale = number_format($a7f2fgbu10s_PriceAllSale, 0);
        $a7f2thbu05s_PcsAllSale = number_format($a7f2thbu05s_PcsAllSale, 0);
        $a7f2thbu05s_PriceAllSale = number_format($a7f2thbu05s_PriceAllSale, 0);
        $a7f2debu10s_PcsAllSale = number_format($a7f2debu10s_PcsAllSale, 0);
        $a7f2debu10s_PriceAllSale = number_format($a7f2debu10s_PriceAllSale, 0);
        $a7f2exbu11s_PcsAllSale = number_format($a7f2exbu11s_PcsAllSale, 0);
        $a7f2exbu11s_PriceAllSale = number_format($a7f2exbu11s_PriceAllSale, 0);
        $a7f2twbu04s_PcsAllSale = number_format($a7f2twbu04s_PcsAllSale, 0);
        $a7f2twbu04s_PriceAllSale = number_format($a7f2twbu04s_PriceAllSale, 0);
        $a7f2twbu07s_PcsAllSale = number_format($a7f2twbu07s_PcsAllSale, 0);
        $a7f2twbu07s_PriceAllSale = number_format($a7f2twbu07s_PriceAllSale, 0);
        $a7f2cebu10s_PcsAllSale = number_format($a7f2cebu10s_PcsAllSale, 0);
        $a7f2cebu10s_PriceAllSale = number_format($a7f2cebu10s_PriceAllSale, 0);
        $a8f1fgbu02s_PcsAllSale = number_format($a8f1fgbu02s_PcsAllSale, 0);
        $a8f1fgbu02s_PriceAllSale = number_format($a8f1fgbu02s_PriceAllSale, 0);
        $a8f2fgbu10s_PcsAllSale = number_format($a8f2fgbu10s_PcsAllSale, 0);
        $a8f2fgbu10s_PriceAllSale = number_format($a8f2fgbu10s_PriceAllSale, 0);
        $a8f2thbu05s_PcsAllSale = number_format($a8f2thbu05s_PcsAllSale, 0);
        $a8f2thbu05s_PriceAllSale = number_format($a8f2thbu05s_PriceAllSale, 0);
        $a8f2debu10s_PcsAllSale = number_format($a8f2debu10s_PcsAllSale, 0);
        $a8f2debu10s_PriceAllSale = number_format($a8f2debu10s_PriceAllSale, 0);
        $a8f2exbu11s_PcsAllSale = number_format($a8f2exbu11s_PcsAllSale, 0);
        $a8f2exbu11s_PriceAllSale = number_format($a8f2exbu11s_PriceAllSale, 0);
        $a8f2twbu04s_PcsAllSale = number_format($a8f2twbu04s_PcsAllSale, 0);
        $a8f2twbu04s_PriceAllSale = number_format($a8f2twbu04s_PriceAllSale, 0);
        $a8f2twbu07s_PcsAllSale = number_format($a8f2twbu07s_PcsAllSale, 0);
        $a8f2twbu07s_PriceAllSale = number_format($a8f2twbu07s_PriceAllSale, 0);
        $a8f2cebu10s_PcsAllSale = number_format($a8f2cebu10s_PcsAllSale, 0);
        $a8f2cebu10s_PriceAllSale = number_format($a8f2cebu10s_PriceAllSale, 0);
        $DC1_PcsAllSale = number_format($DC1_PcsAllSale, 0);
        $DC1_PriceAllSale = number_format($DC1_PriceAllSale, 0);
        $DCP_PcsAllSale = number_format($DCP_PcsAllSale, 0);
        $DCP_PriceAllSale = number_format($DCP_PriceAllSale, 0);
        $DCY_PcsAllSale = number_format($DCY_PcsAllSale, 0);
        $DCY_PriceAllSale = number_format($DCY_PriceAllSale, 0);
        $DEX_PcsAllSale = number_format($DEX_PcsAllSale, 0);
        $DEX_PriceAllSale = number_format($DEX_PriceAllSale, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllDC1 = number_format($Pcs_AfterAllDC1, 0);
        $Price_AfterAllDC1 = number_format($Price_AfterAllDC1, 0);
        $Po_PcsAllDC1 = number_format($Po_PcsAllDC1, 0);
        $Po_PriceAllDC1 = number_format($Po_PriceAllDC1, 0);
        $Neg_PcsAllDC1 = number_format($Neg_PcsAllDC1, 0);
        $Neg_PriceAllDC1 = number_format($Neg_PriceAllDC1, 0);
        $BackChange_PcsAllDC1 = number_format($BackChange_PcsAllDC1, 0);
        $BackChange_PriceAllDC1 = number_format($BackChange_PriceAllDC1, 0);
        $Purchase_PcsAllDC1 = number_format($Purchase_PcsAllDC1, 0);
        $Purchase_PriceAllDC1 = number_format($Purchase_PriceAllDC1, 0);
        $ReciveTranfer_PcsAllDC1 = number_format($ReciveTranfer_PcsAllDC1, 0);
        $ReciveTranfer_PriceAllDC1 = number_format($ReciveTranfer_PriceAllDC1, 0);
        $ReturnItem_PCSAllDC1 = number_format($ReturnItem_PCSAllDC1, 0);
        $ReturnItem_PriceAllDC1 = number_format($ReturnItem_PriceAllDC1, 0);
        $AllIn_PcsAllDC1 = number_format($AllIn_PcsAllDC1, 0);
        $AllIn_PriceAllDC1 = number_format($AllIn_PriceAllDC1, 0);
        $SendSale_PcsAllDC1 = number_format($SendSale_PcsAllDC1, 0);
        $SendSale_PriceAllDC1 = number_format($SendSale_PriceAllDC1, 0);
        $ReciveTranOut_PcsAllDC1 = number_format($ReciveTranOut_PcsAllDC1, 0);
        $ReciveTranOut_PriceAllDC1 = number_format($ReciveTranOut_PriceAllDC1, 0);
        $ReturnStore_PcsAllDC1 = number_format($ReturnStore_PcsAllDC1, 0);
        $ReturnStore_PriceAllDC1 = number_format($ReturnStore_PriceAllDC1, 0);
        $AllOut_PcsAllDC1 = number_format($AllOut_PcsAllDC1, 0);
        $AllOut_PriceAllDC1 = number_format($AllOut_PriceAllDC1, 0);
        $Calculate_PcsAllDC1 = number_format($Calculate_PcsAllDC1, 0);
        $Calculate_PriceAllDC1 = number_format($Calculate_PriceAllDC1, 0);
        $NewCalculate_PcsAllDC1 = number_format($NewCalculate_PcsAllDC1, 0);
        $NewCalculate_PriceAllDC1 = number_format($NewCalculate_PriceAllDC1, 0);
        $Diff_PcsAllDC1 = number_format($Diff_PcsAllDC1, 0);
        $Diff_PriceAllDC1 = number_format($Diff_PriceAllDC1, 0);
        $NewTotal_PcsAllDC1 = number_format($NewTotal_PcsAllDC1, 0);
        $NewTotal_PriceAllDC1 = number_format($NewTotal_PriceAllDC1, 0);
        $NewTotalDiff_NavAllDC1 = number_format($NewTotalDiff_NavAllDC1, 0);
        $NewTotalDiff_CalAllDC1 = number_format($NewTotalDiff_CalAllDC1, 0);
        $a7f1fgbu02s_PcsAllDC1 = number_format($a7f1fgbu02s_PcsAllDC1, 0);
        $a7f1fgbu02s_PriceAllDC1 = number_format($a7f1fgbu02s_PriceAllDC1, 0);
        $a7f2fgbu10s_PcsAllDC1 = number_format($a7f2fgbu10s_PcsAllDC1, 0);
        $a7f2fgbu10s_PriceAllDC1 = number_format($a7f2fgbu10s_PriceAllDC1, 0);
        $a7f2thbu05s_PcsAllDC1 = number_format($a7f2thbu05s_PcsAllDC1, 0);
        $a7f2thbu05s_PriceAllDC1 = number_format($a7f2thbu05s_PriceAllDC1, 0);
        $a7f2debu10s_PcsAllDC1 = number_format($a7f2debu10s_PcsAllDC1, 0);
        $a7f2debu10s_PriceAllDC1 = number_format($a7f2debu10s_PriceAllDC1, 0);
        $a7f2exbu11s_PcsAllDC1 = number_format($a7f2exbu11s_PcsAllDC1, 0);
        $a7f2exbu11s_PriceAllDC1 = number_format($a7f2exbu11s_PriceAllDC1, 0);
        $a7f2twbu04s_PcsAllDC1 = number_format($a7f2twbu04s_PcsAllDC1, 0);
        $a7f2twbu04s_PriceAllDC1 = number_format($a7f2twbu04s_PriceAllDC1, 0);
        $a7f2twbu07s_PcsAllDC1 = number_format($a7f2twbu07s_PcsAllDC1, 0);
        $a7f2twbu07s_PriceAllDC1 = number_format($a7f2twbu07s_PriceAllDC1, 0);
        $a7f2cebu10s_PcsAllDC1 = number_format($a7f2cebu10s_PcsAllDC1, 0);
        $a7f2cebu10s_PriceAllDC1 = number_format($a7f2cebu10s_PriceAllDC1, 0);
        $a8f1fgbu02s_PcsAllDC1 = number_format($a8f1fgbu02s_PcsAllDC1, 0);
        $a8f1fgbu02s_PriceAllDC1 = number_format($a8f1fgbu02s_PriceAllDC1, 0);
        $a8f2fgbu10s_PcsAllDC1 = number_format($a8f2fgbu10s_PcsAllDC1, 0);
        $a8f2fgbu10s_PriceAllDC1 = number_format($a8f2fgbu10s_PriceAllDC1, 0);
        $a8f2thbu05s_PcsAllDC1 = number_format($a8f2thbu05s_PcsAllDC1, 0);
        $a8f2thbu05s_PriceAllDC1 = number_format($a8f2thbu05s_PriceAllDC1, 0);
        $a8f2debu10s_PcsAllDC1 = number_format($a8f2debu10s_PcsAllDC1, 0);
        $a8f2debu10s_PriceAllDC1 = number_format($a8f2debu10s_PriceAllDC1, 0);
        $a8f2exbu11s_PcsAllDC1 = number_format($a8f2exbu11s_PcsAllDC1, 0);
        $a8f2exbu11s_PriceAllDC1 = number_format($a8f2exbu11s_PriceAllDC1, 0);
        $a8f2twbu04s_PcsAllDC1 = number_format($a8f2twbu04s_PcsAllDC1, 0);
        $a8f2twbu04s_PriceAllDC1 = number_format($a8f2twbu04s_PriceAllDC1, 0);
        $a8f2twbu07s_PcsAllDC1 = number_format($a8f2twbu07s_PcsAllDC1, 0);
        $a8f2twbu07s_PriceAllDC1 = number_format($a8f2twbu07s_PriceAllDC1, 0);
        $a8f2cebu10s_PcsAllDC1 = number_format($a8f2cebu10s_PcsAllDC1, 0);
        $a8f2cebu10s_PriceAllDC1 = number_format($a8f2cebu10s_PriceAllDC1, 0);
        $DC1_PcsAllDC1 = number_format($DC1_PcsAllDC1, 0);
        $DC1_PriceAllDC1 = number_format($DC1_PriceAllDC1, 0);
        $DCP_PcsAllDC1 = number_format($DCP_PcsAllDC1, 0);
        $DCP_PriceAllDC1 = number_format($DCP_PriceAllDC1, 0);
        $DCY_PcsAllDC1 = number_format($DCY_PcsAllDC1, 0);
        $DCY_PriceAllDC1 = number_format($DCY_PriceAllDC1, 0);
        $DEX_PcsAllDC1 = number_format($DEX_PcsAllDC1, 0);
        $DEX_PriceAllDC1 = number_format($DEX_PriceAllDC1, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNTDCY = number_format($Pcs_AfterNTDCY, 0);
        $Price_AfterNTDCY = number_format($Price_AfterNTDCY, 0);
        $Po_PcsNTDCY = number_format($Po_PcsNTDCY, 0);
        $Po_PriceNTDCY = number_format($Po_PriceNTDCY, 0);
        $Neg_PcsNTDCY = number_format($Neg_PcsNTDCY, 0);
        $Neg_PriceNTDCY = number_format($Neg_PriceNTDCY, 0);
        $BackChange_PcsNTDCY = number_format($BackChange_PcsNTDCY, 0);
        $BackChange_PriceNTDCY = number_format($BackChange_PriceNTDCY, 0);
        $Purchase_PcsNTDCY = number_format($Purchase_PcsNTDCY, 0);
        $Purchase_PriceNTDCY = number_format($Purchase_PriceNTDCY, 0);
        $ReciveTranfer_PcsNTDCY = number_format($ReciveTranfer_PcsNTDCY, 0);
        $ReciveTranfer_PriceNTDCY = number_format($ReciveTranfer_PriceNTDCY, 0);
        $ReturnItem_PCSNTDCY = number_format($ReturnItem_PCSNTDCY, 0);
        $ReturnItem_PriceNTDCY = number_format($ReturnItem_PriceNTDCY, 0);
        $AllIn_PcsNTDCY = number_format($AllIn_PcsNTDCY, 0);
        $AllIn_PriceNTDCY = number_format($AllIn_PriceNTDCY, 0);
        $SendSale_PcsNTDCY = number_format($SendSale_PcsNTDCY, 0);
        $SendSale_PriceNTDCY = number_format($SendSale_PriceNTDCY, 0);
        $ReciveTranOut_PcsNTDCY = number_format($ReciveTranOut_PcsNTDCY, 0);
        $ReciveTranOut_PriceNTDCY = number_format($ReciveTranOut_PriceNTDCY, 0);
        $ReturnStore_PcsNTDCY = number_format($ReturnStore_PcsNTDCY, 0);
        $ReturnStore_PriceNTDCY = number_format($ReturnStore_PriceNTDCY, 0);
        $AllOut_PcsNTDCY = number_format($AllOut_PcsNTDCY, 0);
        $AllOut_PriceNTDCY = number_format($AllOut_PriceNTDCY, 0);
        $Calculate_PcsNTDCY = number_format($Calculate_PcsNTDCY, 0);
        $Calculate_PriceNTDCY = number_format($Calculate_PriceNTDCY, 0);
        $NewCalculate_PcsNTDCY = number_format($NewCalculate_PcsNTDCY, 0);
        $NewCalculate_PriceNTDCY = number_format($NewCalculate_PriceNTDCY, 0);
        $Diff_PcsNTDCY = number_format($Diff_PcsNTDCY, 0);
        $Diff_PriceNTDCY = number_format($Diff_PriceNTDCY, 0);
        $NewTotal_PcsNTDCY = number_format($NewTotal_PcsNTDCY, 0);
        $NewTotal_PriceNTDCY = number_format($NewTotal_PriceNTDCY, 0);
        $NewTotalDiff_NavNTDCY = number_format($NewTotalDiff_NavNTDCY, 0);
        $NewTotalDiff_CalNTDCY = number_format($NewTotalDiff_CalNTDCY, 0);
        $a7f1fgbu02s_PcsNTDCY = number_format($a7f1fgbu02s_PcsNTDCY, 0);
        $a7f1fgbu02s_PriceNTDCY = number_format($a7f1fgbu02s_PriceNTDCY, 0);
        $a7f2fgbu10s_PcsNTDCY = number_format($a7f2fgbu10s_PcsNTDCY, 0);
        $a7f2fgbu10s_PriceNTDCY = number_format($a7f2fgbu10s_PriceNTDCY, 0);
        $a7f2thbu05s_PcsNTDCY = number_format($a7f2thbu05s_PcsNTDCY, 0);
        $a7f2thbu05s_PriceNTDCY = number_format($a7f2thbu05s_PriceNTDCY, 0);
        $a7f2debu10s_PcsNTDCY = number_format($a7f2debu10s_PcsNTDCY, 0);
        $a7f2debu10s_PriceNTDCY = number_format($a7f2debu10s_PriceNTDCY, 0);
        $a7f2exbu11s_PcsNTDCY = number_format($a7f2exbu11s_PcsNTDCY, 0);
        $a7f2exbu11s_PriceNTDCY = number_format($a7f2exbu11s_PriceNTDCY, 0);
        $a7f2twbu04s_PcsNTDCY = number_format($a7f2twbu04s_PcsNTDCY, 0);
        $a7f2twbu04s_PriceNTDCY = number_format($a7f2twbu04s_PriceNTDCY, 0);
        $a7f2twbu07s_PcsNTDCY = number_format($a7f2twbu07s_PcsNTDCY, 0);
        $a7f2twbu07s_PriceNTDCY = number_format($a7f2twbu07s_PriceNTDCY, 0);
        $a7f2cebu10s_PcsNTDCY = number_format($a7f2cebu10s_PcsNTDCY, 0);
        $a7f2cebu10s_PriceNTDCY = number_format($a7f2cebu10s_PriceNTDCY, 0);
        $a8f1fgbu02s_PcsNTDCY = number_format($a8f1fgbu02s_PcsNTDCY, 0);
        $a8f1fgbu02s_PriceNTDCY = number_format($a8f1fgbu02s_PriceNTDCY, 0);
        $a8f2fgbu10s_PcsNTDCY = number_format($a8f2fgbu10s_PcsNTDCY, 0);
        $a8f2fgbu10s_PriceNTDCY = number_format($a8f2fgbu10s_PriceNTDCY, 0);
        $a8f2thbu05s_PcsNTDCY = number_format($a8f2thbu05s_PcsNTDCY, 0);
        $a8f2thbu05s_PriceNTDCY = number_format($a8f2thbu05s_PriceNTDCY, 0);
        $a8f2debu10s_PcsNTDCY = number_format($a8f2debu10s_PcsNTDCY, 0);
        $a8f2debu10s_PriceNTDCY = number_format($a8f2debu10s_PriceNTDCY, 0);
        $a8f2exbu11s_PcsNTDCY = number_format($a8f2exbu11s_PcsNTDCY, 0);
        $a8f2exbu11s_PriceNTDCY = number_format($a8f2exbu11s_PriceNTDCY, 0);
        $a8f2twbu04s_PcsNTDCY = number_format($a8f2twbu04s_PcsNTDCY, 0);
        $a8f2twbu04s_PriceNTDCY = number_format($a8f2twbu04s_PriceNTDCY, 0);
        $a8f2twbu07s_PcsNTDCY = number_format($a8f2twbu07s_PcsNTDCY, 0);
        $a8f2twbu07s_PriceNTDCY = number_format($a8f2twbu07s_PriceNTDCY, 0);
        $a8f2cebu10s_PcsNTDCY = number_format($a8f2cebu10s_PcsNTDCY, 0);
        $a8f2cebu10s_PriceNTDCY = number_format($a8f2cebu10s_PriceNTDCY, 0);
        $DC1_PcsNTDCY = number_format($DC1_PcsNTDCY, 0);
        $DC1_PriceNTDCY = number_format($DC1_PriceNTDCY, 0);
        $DCP_PcsNTDCY = number_format($DCP_PcsNTDCY, 0);
        $DCP_PriceNTDCY = number_format($DCP_PriceNTDCY, 0);
        $DCY_PcsNTDCY = number_format($DCY_PcsNTDCY, 0);
        $DCY_PriceNTDCY = number_format($DCY_PriceNTDCY, 0);
        $DEX_PcsNTDCY = number_format($DEX_PcsNTDCY, 0);
        $DEX_PriceNTDCY = number_format($DEX_PriceNTDCY, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTWDCY = number_format($Pcs_AfterTWDCY, 0);
        $Price_AfterTWDCY = number_format($Price_AfterTWDCY, 0);
        $Po_PcsTWDCY = number_format($Po_PcsTWDCY, 0);
        $Po_PriceTWDCY = number_format($Po_PriceTWDCY, 0);
        $Neg_PcsTWDCY = number_format($Neg_PcsTWDCY, 0);
        $Neg_PriceTWDCY = number_format($Neg_PriceTWDCY, 0);
        $BackChange_PcsTWDCY = number_format($BackChange_PcsTWDCY, 0);
        $BackChange_PriceTWDCY = number_format($BackChange_PriceTWDCY, 0);
        $Purchase_PcsTWDCY = number_format($Purchase_PcsTWDCY, 0);
        $Purchase_PriceTWDCY = number_format($Purchase_PriceTWDCY, 0);
        $ReciveTranfer_PcsTWDCY = number_format($ReciveTranfer_PcsTWDCY, 0);
        $ReciveTranfer_PriceTWDCY = number_format($ReciveTranfer_PriceTWDCY, 0);
        $ReturnItem_PCSTWDCY = number_format($ReturnItem_PCSTWDCY, 0);
        $ReturnItem_PriceTWDCY = number_format($ReturnItem_PriceTWDCY, 0);
        $AllIn_PcsTWDCY = number_format($AllIn_PcsTWDCY, 0);
        $AllIn_PriceTWDCY = number_format($AllIn_PriceTWDCY, 0);
        $SendSale_PcsTWDCY = number_format($SendSale_PcsTWDCY, 0);
        $SendSale_PriceTWDCY = number_format($SendSale_PriceTWDCY, 0);
        $ReciveTranOut_PcsTWDCY = number_format($ReciveTranOut_PcsTWDCY, 0);
        $ReciveTranOut_PriceTWDCY = number_format($ReciveTranOut_PriceTWDCY, 0);
        $ReturnStore_PcsTWDCY = number_format($ReturnStore_PcsTWDCY, 0);
        $ReturnStore_PriceTWDCY = number_format($ReturnStore_PriceTWDCY, 0);
        $AllOut_PcsTWDCY = number_format($AllOut_PcsTWDCY, 0);
        $AllOut_PriceTWDCY = number_format($AllOut_PriceTWDCY, 0);
        $Calculate_PcsTWDCY = number_format($Calculate_PcsTWDCY, 0);
        $Calculate_PriceTWDCY = number_format($Calculate_PriceTWDCY, 0);
        $NewCalculate_PcsTWDCY = number_format($NewCalculate_PcsTWDCY, 0);
        $NewCalculate_PriceTWDCY = number_format($NewCalculate_PriceTWDCY, 0);
        $Diff_PcsTWDCY = number_format($Diff_PcsTWDCY, 0);
        $Diff_PriceTWDCY = number_format($Diff_PriceTWDCY, 0);
        $NewTotal_PcsTWDCY = number_format($NewTotal_PcsTWDCY, 0);
        $NewTotal_PriceTWDCY = number_format($NewTotal_PriceTWDCY, 0);
        $NewTotalDiff_NavTWDCY = number_format($NewTotalDiff_NavTWDCY, 0);
        $NewTotalDiff_CalTWDCY = number_format($NewTotalDiff_CalTWDCY, 0);
        $a7f1fgbu02s_PcsTWDCY = number_format($a7f1fgbu02s_PcsTWDCY, 0);
        $a7f1fgbu02s_PriceTWDCY = number_format($a7f1fgbu02s_PriceTWDCY, 0);
        $a7f2fgbu10s_PcsTWDCY = number_format($a7f2fgbu10s_PcsTWDCY, 0);
        $a7f2fgbu10s_PriceTWDCY = number_format($a7f2fgbu10s_PriceTWDCY, 0);
        $a7f2thbu05s_PcsTWDCY = number_format($a7f2thbu05s_PcsTWDCY, 0);
        $a7f2thbu05s_PriceTWDCY = number_format($a7f2thbu05s_PriceTWDCY, 0);
        $a7f2debu10s_PcsTWDCY = number_format($a7f2debu10s_PcsTWDCY, 0);
        $a7f2debu10s_PriceTWDCY = number_format($a7f2debu10s_PriceTWDCY, 0);
        $a7f2exbu11s_PcsTWDCY = number_format($a7f2exbu11s_PcsTWDCY, 0);
        $a7f2exbu11s_PriceTWDCY = number_format($a7f2exbu11s_PriceTWDCY, 0);
        $a7f2twbu04s_PcsTWDCY = number_format($a7f2twbu04s_PcsTWDCY, 0);
        $a7f2twbu04s_PriceTWDCY = number_format($a7f2twbu04s_PriceTWDCY, 0);
        $a7f2twbu07s_PcsTWDCY = number_format($a7f2twbu07s_PcsTWDCY, 0);
        $a7f2twbu07s_PriceTWDCY = number_format($a7f2twbu07s_PriceTWDCY, 0);
        $a7f2cebu10s_PcsTWDCY = number_format($a7f2cebu10s_PcsTWDCY, 0);
        $a7f2cebu10s_PriceTWDCY = number_format($a7f2cebu10s_PriceTWDCY, 0);
        $a8f1fgbu02s_PcsTWDCY = number_format($a8f1fgbu02s_PcsTWDCY, 0);
        $a8f1fgbu02s_PriceTWDCY = number_format($a8f1fgbu02s_PriceTWDCY, 0);
        $a8f2fgbu10s_PcsTWDCY = number_format($a8f2fgbu10s_PcsTWDCY, 0);
        $a8f2fgbu10s_PriceTWDCY = number_format($a8f2fgbu10s_PriceTWDCY, 0);
        $a8f2thbu05s_PcsTWDCY = number_format($a8f2thbu05s_PcsTWDCY, 0);
        $a8f2thbu05s_PriceTWDCY = number_format($a8f2thbu05s_PriceTWDCY, 0);
        $a8f2debu10s_PcsTWDCY = number_format($a8f2debu10s_PcsTWDCY, 0);
        $a8f2debu10s_PriceTWDCY = number_format($a8f2debu10s_PriceTWDCY, 0);
        $a8f2exbu11s_PcsTWDCY = number_format($a8f2exbu11s_PcsTWDCY, 0);
        $a8f2exbu11s_PriceTWDCY = number_format($a8f2exbu11s_PriceTWDCY, 0);
        $a8f2twbu04s_PcsTWDCY = number_format($a8f2twbu04s_PcsTWDCY, 0);
        $a8f2twbu04s_PriceTWDCY = number_format($a8f2twbu04s_PriceTWDCY, 0);
        $a8f2twbu07s_PcsTWDCY = number_format($a8f2twbu07s_PcsTWDCY, 0);
        $a8f2twbu07s_PriceTWDCY = number_format($a8f2twbu07s_PriceTWDCY, 0);
        $a8f2cebu10s_PcsTWDCY = number_format($a8f2cebu10s_PcsTWDCY, 0);
        $a8f2cebu10s_PriceTWDCY = number_format($a8f2cebu10s_PriceTWDCY, 0);
        $DC1_PcsTWDCY = number_format($DC1_PcsTWDCY, 0);
        $DC1_PriceTWDCY = number_format($DC1_PriceTWDCY, 0);
        $DCP_PcsTWDCY = number_format($DCP_PcsTWDCY, 0);
        $DCP_PriceTWDCY = number_format($DCP_PriceTWDCY, 0);
        $DCY_PcsTWDCY = number_format($DCY_PcsTWDCY, 0);
        $DCY_PriceTWDCY = number_format($DCY_PriceTWDCY, 0);
        $DEX_PcsTWDCY = number_format($DEX_PcsTWDCY, 0);
        $DEX_PriceTWDCY = number_format($DEX_PriceTWDCY, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNTDCY = number_format($Pcs_AfterSNTDCY, 0);
        $Price_AfterSNTDCY = number_format($Price_AfterSNTDCY, 0);
        $Po_PcsSNTDCY = number_format($Po_PcsSNTDCY, 0);
        $Po_PriceSNTDCY = number_format($Po_PriceSNTDCY, 0);
        $Neg_PcsSNTDCY = number_format($Neg_PcsSNTDCY, 0);
        $Neg_PriceSNTDCY = number_format($Neg_PriceSNTDCY, 0);
        $BackChange_PcsSNTDCY = number_format($BackChange_PcsSNTDCY, 0);
        $BackChange_PriceSNTDCY = number_format($BackChange_PriceSNTDCY, 0);
        $Purchase_PcsSNTDCY = number_format($Purchase_PcsSNTDCY, 0);
        $Purchase_PriceSNTDCY = number_format($Purchase_PriceSNTDCY, 0);
        $ReciveTranfer_PcsSNTDCY = number_format($ReciveTranfer_PcsSNTDCY, 0);
        $ReciveTranfer_PriceSNTDCY = number_format($ReciveTranfer_PriceSNTDCY, 0);
        $ReturnItem_PCSSNTDCY = number_format($ReturnItem_PCSSNTDCY, 0);
        $ReturnItem_PriceSNTDCY = number_format($ReturnItem_PriceSNTDCY, 0);
        $AllIn_PcsSNTDCY = number_format($AllIn_PcsSNTDCY, 0);
        $AllIn_PriceSNTDCY = number_format($AllIn_PriceSNTDCY, 0);
        $SendSale_PcsSNTDCY = number_format($SendSale_PcsSNTDCY, 0);
        $SendSale_PriceSNTDCY = number_format($SendSale_PriceSNTDCY, 0);
        $ReciveTranOut_PcsSNTDCY = number_format($ReciveTranOut_PcsSNTDCY, 0);
        $ReciveTranOut_PriceSNTDCY = number_format($ReciveTranOut_PriceSNTDCY, 0);
        $ReturnStore_PcsSNTDCY = number_format($ReturnStore_PcsSNTDCY, 0);
        $ReturnStore_PriceSNTDCY = number_format($ReturnStore_PriceSNTDCY, 0);
        $AllOut_PcsSNTDCY = number_format($AllOut_PcsSNTDCY, 0);
        $AllOut_PriceSNTDCY = number_format($AllOut_PriceSNTDCY, 0);
        $Calculate_PcsSNTDCY = number_format($Calculate_PcsSNTDCY, 0);
        $Calculate_PriceSNTDCY = number_format($Calculate_PriceSNTDCY, 0);
        $NewCalculate_PcsSNTDCY = number_format($NewCalculate_PcsSNTDCY, 0);
        $NewCalculate_PriceSNTDCY = number_format($NewCalculate_PriceSNTDCY, 0);
        $Diff_PcsSNTDCY = number_format($Diff_PcsSNTDCY, 0);
        $Diff_PriceSNTDCY = number_format($Diff_PriceSNTDCY, 0);
        $NewTotal_PcsSNTDCY = number_format($NewTotal_PcsSNTDCY, 0);
        $NewTotal_PriceSNTDCY = number_format($NewTotal_PriceSNTDCY, 0);
        $NewTotalDiff_NavSNTDCY = number_format($NewTotalDiff_NavSNTDCY, 0);
        $NewTotalDiff_CalSNTDCY = number_format($NewTotalDiff_CalSNTDCY, 0);
        $a7f1fgbu02s_PcsSNTDCY = number_format($a7f1fgbu02s_PcsSNTDCY, 0);
        $a7f1fgbu02s_PriceSNTDCY = number_format($a7f1fgbu02s_PriceSNTDCY, 0);
        $a7f2fgbu10s_PcsSNTDCY = number_format($a7f2fgbu10s_PcsSNTDCY, 0);
        $a7f2fgbu10s_PriceSNTDCY = number_format($a7f2fgbu10s_PriceSNTDCY, 0);
        $a7f2thbu05s_PcsSNTDCY = number_format($a7f2thbu05s_PcsSNTDCY, 0);
        $a7f2thbu05s_PriceSNTDCY = number_format($a7f2thbu05s_PriceSNTDCY, 0);
        $a7f2debu10s_PcsSNTDCY = number_format($a7f2debu10s_PcsSNTDCY, 0);
        $a7f2debu10s_PriceSNTDCY = number_format($a7f2debu10s_PriceSNTDCY, 0);
        $a7f2exbu11s_PcsSNTDCY = number_format($a7f2exbu11s_PcsSNTDCY, 0);
        $a7f2exbu11s_PriceSNTDCY = number_format($a7f2exbu11s_PriceSNTDCY, 0);
        $a7f2twbu04s_PcsSNTDCY = number_format($a7f2twbu04s_PcsSNTDCY, 0);
        $a7f2twbu04s_PriceSNTDCY = number_format($a7f2twbu04s_PriceSNTDCY, 0);
        $a7f2twbu07s_PcsSNTDCY = number_format($a7f2twbu07s_PcsSNTDCY, 0);
        $a7f2twbu07s_PriceSNTDCY = number_format($a7f2twbu07s_PriceSNTDCY, 0);
        $a7f2cebu10s_PcsSNTDCY = number_format($a7f2cebu10s_PcsSNTDCY, 0);
        $a7f2cebu10s_PriceSNTDCY = number_format($a7f2cebu10s_PriceSNTDCY, 0);
        $a8f1fgbu02s_PcsSNTDCY = number_format($a8f1fgbu02s_PcsSNTDCY, 0);
        $a8f1fgbu02s_PriceSNTDCY = number_format($a8f1fgbu02s_PriceSNTDCY, 0);
        $a8f2fgbu10s_PcsSNTDCY = number_format($a8f2fgbu10s_PcsSNTDCY, 0);
        $a8f2fgbu10s_PriceSNTDCY = number_format($a8f2fgbu10s_PriceSNTDCY, 0);
        $a8f2thbu05s_PcsSNTDCY = number_format($a8f2thbu05s_PcsSNTDCY, 0);
        $a8f2thbu05s_PriceSNTDCY = number_format($a8f2thbu05s_PriceSNTDCY, 0);
        $a8f2debu10s_PcsSNTDCY = number_format($a8f2debu10s_PcsSNTDCY, 0);
        $a8f2debu10s_PriceSNTDCY = number_format($a8f2debu10s_PriceSNTDCY, 0);
        $a8f2exbu11s_PcsSNTDCY = number_format($a8f2exbu11s_PcsSNTDCY, 0);
        $a8f2exbu11s_PriceSNTDCY = number_format($a8f2exbu11s_PriceSNTDCY, 0);
        $a8f2twbu04s_PcsSNTDCY = number_format($a8f2twbu04s_PcsSNTDCY, 0);
        $a8f2twbu04s_PriceSNTDCY = number_format($a8f2twbu04s_PriceSNTDCY, 0);
        $a8f2twbu07s_PcsSNTDCY = number_format($a8f2twbu07s_PcsSNTDCY, 0);
        $a8f2twbu07s_PriceSNTDCY = number_format($a8f2twbu07s_PriceSNTDCY, 0);
        $a8f2cebu10s_PcsSNTDCY = number_format($a8f2cebu10s_PcsSNTDCY, 0);
        $a8f2cebu10s_PriceSNTDCY = number_format($a8f2cebu10s_PriceSNTDCY, 0);
        $DC1_PcsSNTDCY = number_format($DC1_PcsSNTDCY, 0);
        $DC1_PriceSNTDCY = number_format($DC1_PriceSNTDCY, 0);
        $DCP_PcsSNTDCY = number_format($DCP_PcsSNTDCY, 0);
        $DCP_PriceSNTDCY = number_format($DCP_PriceSNTDCY, 0);
        $DCY_PcsSNTDCY = number_format($DCY_PcsSNTDCY, 0);
        $DCY_PriceSNTDCY = number_format($DCY_PriceSNTDCY, 0);
        $DEX_PcsSNTDCY = number_format($DEX_PcsSNTDCY, 0);
        $DEX_PriceSNTDCY = number_format($DEX_PriceSNTDCY, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllDCY = number_format($Pcs_AfterAllDCY, 0);
        $Price_AfterAllDCY = number_format($Price_AfterAllDCY, 0);
        $Po_PcsAllDCY = number_format($Po_PcsAllDCY, 0);
        $Po_PriceAllDCY = number_format($Po_PriceAllDCY, 0);
        $Neg_PcsAllDCY = number_format($Neg_PcsAllDCY, 0);
        $Neg_PriceAllDCY = number_format($Neg_PriceAllDCY, 0);
        $BackChange_PcsAllDCY = number_format($BackChange_PcsAllDCY, 0);
        $BackChange_PriceAllDCY = number_format($BackChange_PriceAllDCY, 0);
        $Purchase_PcsAllDCY = number_format($Purchase_PcsAllDCY, 0);
        $Purchase_PriceAllDCY = number_format($Purchase_PriceAllDCY, 0);
        $ReciveTranfer_PcsAllDCY = number_format($ReciveTranfer_PcsAllDCY, 0);
        $ReciveTranfer_PriceAllDCY = number_format($ReciveTranfer_PriceAllDCY, 0);
        $ReturnItem_PCSAllDCY = number_format($ReturnItem_PCSAllDCY, 0);
        $ReturnItem_PriceAllDCY = number_format($ReturnItem_PriceAllDCY, 0);
        $AllIn_PcsAllDCY = number_format($AllIn_PcsAllDCY, 0);
        $AllIn_PriceAllDCY = number_format($AllIn_PriceAllDCY, 0);
        $SendSale_PcsAllDCY = number_format($SendSale_PcsAllDCY, 0);
        $SendSale_PriceAllDCY = number_format($SendSale_PriceAllDCY, 0);
        $ReciveTranOut_PcsAllDCY = number_format($ReciveTranOut_PcsAllDCY, 0);
        $ReciveTranOut_PriceAllDCY = number_format($ReciveTranOut_PriceAllDCY, 0);
        $ReturnStore_PcsAllDCY = number_format($ReturnStore_PcsAllDCY, 0);
        $ReturnStore_PriceAllDCY = number_format($ReturnStore_PriceAllDCY, 0);
        $AllOut_PcsAllDCY = number_format($AllOut_PcsAllDCY, 0);
        $AllOut_PriceAllDCY = number_format($AllOut_PriceAllDCY, 0);
        $Calculate_PcsAllDCY = number_format($Calculate_PcsAllDCY, 0);
        $Calculate_PriceAllDCY = number_format($Calculate_PriceAllDCY, 0);
        $NewCalculate_PcsAllDCY = number_format($NewCalculate_PcsAllDCY, 0);
        $NewCalculate_PriceAllDCY = number_format($NewCalculate_PriceAllDCY, 0);
        $Diff_PcsAllDCY = number_format($Diff_PcsAllDCY, 0);
        $Diff_PriceAllDCY = number_format($Diff_PriceAllDCY, 0);
        $NewTotal_PcsAllDCY = number_format($NewTotal_PcsAllDCY, 0);
        $NewTotal_PriceAllDCY = number_format($NewTotal_PriceAllDCY, 0);
        $NewTotalDiff_NavAllDCY = number_format($NewTotalDiff_NavAllDCY, 0);
        $NewTotalDiff_CalAllDCY = number_format($NewTotalDiff_CalAllDCY, 0);
        $a7f1fgbu02s_PcsAllDCY = number_format($a7f1fgbu02s_PcsAllDCY, 0);
        $a7f1fgbu02s_PriceAllDCY = number_format($a7f1fgbu02s_PriceAllDCY, 0);
        $a7f2fgbu10s_PcsAllDCY = number_format($a7f2fgbu10s_PcsAllDCY, 0);
        $a7f2fgbu10s_PriceAllDCY = number_format($a7f2fgbu10s_PriceAllDCY, 0);
        $a7f2thbu05s_PcsAllDCY = number_format($a7f2thbu05s_PcsAllDCY, 0);
        $a7f2thbu05s_PriceAllDCY = number_format($a7f2thbu05s_PriceAllDCY, 0);
        $a7f2debu10s_PcsAllDCY = number_format($a7f2debu10s_PcsAllDCY, 0);
        $a7f2debu10s_PriceAllDCY = number_format($a7f2debu10s_PriceAllDCY, 0);
        $a7f2exbu11s_PcsAllDCY = number_format($a7f2exbu11s_PcsAllDCY, 0);
        $a7f2exbu11s_PriceAllDCY = number_format($a7f2exbu11s_PriceAllDCY, 0);
        $a7f2twbu04s_PcsAllDCY = number_format($a7f2twbu04s_PcsAllDCY, 0);
        $a7f2twbu04s_PriceAllDCY = number_format($a7f2twbu04s_PriceAllDCY, 0);
        $a7f2twbu07s_PcsAllDCY = number_format($a7f2twbu07s_PcsAllDCY, 0);
        $a7f2twbu07s_PriceAllDCY = number_format($a7f2twbu07s_PriceAllDCY, 0);
        $a7f2cebu10s_PcsAllDCY = number_format($a7f2cebu10s_PcsAllDCY, 0);
        $a7f2cebu10s_PriceAllDCY = number_format($a7f2cebu10s_PriceAllDCY, 0);
        $a8f1fgbu02s_PcsAllDCY = number_format($a8f1fgbu02s_PcsAllDCY, 0);
        $a8f1fgbu02s_PriceAllDCY = number_format($a8f1fgbu02s_PriceAllDCY, 0);
        $a8f2fgbu10s_PcsAllDCY = number_format($a8f2fgbu10s_PcsAllDCY, 0);
        $a8f2fgbu10s_PriceAllDCY = number_format($a8f2fgbu10s_PriceAllDCY, 0);
        $a8f2thbu05s_PcsAllDCY = number_format($a8f2thbu05s_PcsAllDCY, 0);
        $a8f2thbu05s_PriceAllDCY = number_format($a8f2thbu05s_PriceAllDCY, 0);
        $a8f2debu10s_PcsAllDCY = number_format($a8f2debu10s_PcsAllDCY, 0);
        $a8f2debu10s_PriceAllDCY = number_format($a8f2debu10s_PriceAllDCY, 0);
        $a8f2exbu11s_PcsAllDCY = number_format($a8f2exbu11s_PcsAllDCY, 0);
        $a8f2exbu11s_PriceAllDCY = number_format($a8f2exbu11s_PriceAllDCY, 0);
        $a8f2twbu04s_PcsAllDCY = number_format($a8f2twbu04s_PcsAllDCY, 0);
        $a8f2twbu04s_PriceAllDCY = number_format($a8f2twbu04s_PriceAllDCY, 0);
        $a8f2twbu07s_PcsAllDCY = number_format($a8f2twbu07s_PcsAllDCY, 0);
        $a8f2twbu07s_PriceAllDCY = number_format($a8f2twbu07s_PriceAllDCY, 0);
        $a8f2cebu10s_PcsAllDCY = number_format($a8f2cebu10s_PcsAllDCY, 0);
        $a8f2cebu10s_PriceAllDCY = number_format($a8f2cebu10s_PriceAllDCY, 0);
        $DC1_PcsAllDCY = number_format($DC1_PcsAllDCY, 0);
        $DC1_PriceAllDCY = number_format($DC1_PriceAllDCY, 0);
        $DCP_PcsAllDCY = number_format($DCP_PcsAllDCY, 0);
        $DCP_PriceAllDCY = number_format($DCP_PriceAllDCY, 0);
        $DCY_PcsAllDCY = number_format($DCY_PcsAllDCY, 0);
        $DCY_PriceAllDCY = number_format($DCY_PriceAllDCY, 0);
        $DEX_PcsAllDCY = number_format($DEX_PcsAllDCY, 0);
        $DEX_PriceAllDCY = number_format($DEX_PriceAllDCY, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Data = [
            $Pcs_AfterNT,
            $Price_AfterNT,
            $Pcs_AfterNT,
            $Price_AfterNT,
            $Po_PcsNT,
            $Po_PriceNT,
            $Neg_PcsNT,
            $Neg_PriceNT,
            $BackChange_PcsNT,
            $BackChange_PriceNT,
            $Purchase_PcsNT,
            $Purchase_PriceNT,
            $ReciveTranfer_PcsNT,
            $ReciveTranfer_PriceNT,
            $ReturnItem_PCSNT,
            $ReturnItem_PriceNT,
            $AllIn_PcsNT,
            $AllIn_PriceNT,
            $SendSale_PcsNT,
            $SendSale_PriceNT,
            $ReciveTranOut_PcsNT,
            $ReciveTranOut_PriceNT,
            $ReturnStore_PcsNT,
            $ReturnStore_PriceNT,
            $AllOut_PcsNT,
            $AllOut_PriceNT,
            $Calculate_PcsNT,
            $Calculate_PriceNT,
            $NewCalculate_PcsNT,
            $NewCalculate_PriceNT,
            $Diff_PcsNT,
            $Diff_PriceNT,
            $NewTotal_PcsNT,
            $NewTotal_PriceNT,
            $NewTotalDiff_NavNT,
            $NewTotalDiff_CalNT,
            $a7f1fgbu02s_PcsNT,
            $a7f1fgbu02s_PriceNT,
            $a7f2fgbu10s_PcsNT,
            $a7f2fgbu10s_PriceNT,
            $a7f2thbu05s_PcsNT,
            $a7f2thbu05s_PriceNT,
            $a7f2debu10s_PcsNT,
            $a7f2debu10s_PriceNT,
            $a7f2exbu11s_PcsNT,
            $a7f2exbu11s_PriceNT,
            $a7f2twbu04s_PcsNT,
            $a7f2twbu04s_PriceNT,
            $a7f2twbu07s_PcsNT,
            $a7f2twbu07s_PriceNT,
            $a7f2cebu10s_PcsNT,
            $a7f2cebu10s_PriceNT,
            $a8f1fgbu02s_PcsNT,
            $a8f1fgbu02s_PriceNT,
            $a8f2fgbu10s_PcsNT,
            $a8f2fgbu10s_PriceNT,
            $a8f2thbu05s_PcsNT,
            $a8f2thbu05s_PriceNT,
            $a8f2debu10s_PcsNT,
            $a8f2debu10s_PriceNT,
            $a8f2exbu11s_PcsNT,
            $a8f2exbu11s_PriceNT,
            $a8f2twbu04s_PcsNT,
            $a8f2twbu04s_PriceNT,
            $a8f2twbu07s_PcsNT,
            $a8f2twbu07s_PriceNT,
            $a8f2cebu10s_PcsNT,
            $a8f2cebu10s_PriceNT,
            $DC1_PcsNT,
            $DC1_PriceNT,
            $DCP_PcsNT,
            $DCP_PriceNT,
            $DCY_PcsNT,
            $DCY_PriceNT,
            $DEX_PcsNT,
            $DEX_PriceNT,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterMT,
            $Price_AfterMT,
            $Pcs_AfterMT,
            $Price_AfterMT,
            $Po_PcsMT,
            $Po_PriceMT,
            $Neg_PcsMT,
            $Neg_PriceMT,
            $BackChange_PcsMT,
            $BackChange_PriceMT,
            $Purchase_PcsMT,
            $Purchase_PriceMT,
            $ReciveTranfer_PcsMT,
            $ReciveTranfer_PriceMT,
            $ReturnItem_PCSMT,
            $ReturnItem_PriceMT,
            $AllIn_PcsMT,
            $AllIn_PriceMT,
            $SendSale_PcsMT,
            $SendSale_PriceMT,
            $ReciveTranOut_PcsMT,
            $ReciveTranOut_PriceMT,
            $ReturnStore_PcsMT,
            $ReturnStore_PriceMT,
            $AllOut_PcsMT,
            $AllOut_PriceMT,
            $Calculate_PcsMT,
            $Calculate_PriceMT,
            $NewCalculate_PcsMT,
            $NewCalculate_PriceMT,
            $Diff_PcsMT,
            $Diff_PriceMT,
            $NewTotal_PcsMT,
            $NewTotal_PriceMT,
            $NewTotalDiff_NavMT,
            $NewTotalDiff_CalMT,
            $a7f1fgbu02s_PcsMT,
            $a7f1fgbu02s_PriceMT,
            $a7f2fgbu10s_PcsMT,
            $a7f2fgbu10s_PriceMT,
            $a7f2thbu05s_PcsMT,
            $a7f2thbu05s_PriceMT,
            $a7f2debu10s_PcsMT,
            $a7f2debu10s_PriceMT,
            $a7f2exbu11s_PcsMT,
            $a7f2exbu11s_PriceMT,
            $a7f2twbu04s_PcsMT,
            $a7f2twbu04s_PriceMT,
            $a7f2twbu07s_PcsMT,
            $a7f2twbu07s_PriceMT,
            $a7f2cebu10s_PcsMT,
            $a7f2cebu10s_PriceMT,
            $a8f1fgbu02s_PcsMT,
            $a8f1fgbu02s_PriceMT,
            $a8f2fgbu10s_PcsMT,
            $a8f2fgbu10s_PriceMT,
            $a8f2thbu05s_PcsMT,
            $a8f2thbu05s_PriceMT,
            $a8f2debu10s_PcsMT,
            $a8f2debu10s_PriceMT,
            $a8f2exbu11s_PcsMT,
            $a8f2exbu11s_PriceMT,
            $a8f2twbu04s_PcsMT,
            $a8f2twbu04s_PriceMT,
            $a8f2twbu07s_PcsMT,
            $a8f2twbu07s_PriceMT,
            $a8f2cebu10s_PcsMT,
            $a8f2cebu10s_PriceMT,
            $DC1_PcsMT,
            $DC1_PriceMT,
            $DCP_PcsMT,
            $DCP_PriceMT,
            $DCY_PcsMT,
            $DCY_PriceMT,
            $DEX_PcsMT,
            $DEX_PriceMT,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterTW,
            $Price_AfterTW,
            $Pcs_AfterTW,
            $Price_AfterTW,
            $Po_PcsTW,
            $Po_PriceTW,
            $Neg_PcsTW,
            $Neg_PriceTW,
            $BackChange_PcsTW,
            $BackChange_PriceTW,
            $Purchase_PcsTW,
            $Purchase_PriceTW,
            $ReciveTranfer_PcsTW,
            $ReciveTranfer_PriceTW,
            $ReturnItem_PCSTW,
            $ReturnItem_PriceTW,
            $AllIn_PcsTW,
            $AllIn_PriceTW,
            $SendSale_PcsTW,
            $SendSale_PriceTW,
            $ReciveTranOut_PcsTW,
            $ReciveTranOut_PriceTW,
            $ReturnStore_PcsTW,
            $ReturnStore_PriceTW,
            $AllOut_PcsTW,
            $AllOut_PriceTW,
            $Calculate_PcsTW,
            $Calculate_PriceTW,
            $NewCalculate_PcsTW,
            $NewCalculate_PriceTW,
            $Diff_PcsTW,
            $Diff_PriceTW,
            $NewTotal_PcsTW,
            $NewTotal_PriceTW,
            $NewTotalDiff_NavTW,
            $NewTotalDiff_CalTW,
            $a7f1fgbu02s_PcsTW,
            $a7f1fgbu02s_PriceTW,
            $a7f2fgbu10s_PcsTW,
            $a7f2fgbu10s_PriceTW,
            $a7f2thbu05s_PcsTW,
            $a7f2thbu05s_PriceTW,
            $a7f2debu10s_PcsTW,
            $a7f2debu10s_PriceTW,
            $a7f2exbu11s_PcsTW,
            $a7f2exbu11s_PriceTW,
            $a7f2twbu04s_PcsTW,
            $a7f2twbu04s_PriceTW,
            $a7f2twbu07s_PcsTW,
            $a7f2twbu07s_PriceTW,
            $a7f2cebu10s_PcsTW,
            $a7f2cebu10s_PriceTW,
            $a8f1fgbu02s_PcsTW,
            $a8f1fgbu02s_PriceTW,
            $a8f2fgbu10s_PcsTW,
            $a8f2fgbu10s_PriceTW,
            $a8f2thbu05s_PcsTW,
            $a8f2thbu05s_PriceTW,
            $a8f2debu10s_PcsTW,
            $a8f2debu10s_PriceTW,
            $a8f2exbu11s_PcsTW,
            $a8f2exbu11s_PriceTW,
            $a8f2twbu04s_PcsTW,
            $a8f2twbu04s_PriceTW,
            $a8f2twbu07s_PcsTW,
            $a8f2twbu07s_PriceTW,
            $a8f2cebu10s_PcsTW,
            $a8f2cebu10s_PriceTW,
            $DC1_PcsTW,
            $DC1_PriceTW,
            $DCP_PcsTW,
            $DCP_PriceTW,
            $DCY_PcsTW,
            $DCY_PriceTW,
            $DEX_PcsTW,
            $DEX_PriceTW,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterLN,
            $Price_AfterLN,
            $Pcs_AfterLN,
            $Price_AfterLN,
            $Po_PcsLN,
            $Po_PriceLN,
            $Neg_PcsLN,
            $Neg_PriceLN,
            $BackChange_PcsLN,
            $BackChange_PriceLN,
            $Purchase_PcsLN,
            $Purchase_PriceLN,
            $ReciveTranfer_PcsLN,
            $ReciveTranfer_PriceLN,
            $ReturnItem_PCSLN,
            $ReturnItem_PriceLN,
            $AllIn_PcsLN,
            $AllIn_PriceLN,
            $SendSale_PcsLN,
            $SendSale_PriceLN,
            $ReciveTranOut_PcsLN,
            $ReciveTranOut_PriceLN,
            $ReturnStore_PcsLN,
            $ReturnStore_PriceLN,
            $AllOut_PcsLN,
            $AllOut_PriceLN,
            $Calculate_PcsLN,
            $Calculate_PriceLN,
            $NewCalculate_PcsLN,
            $NewCalculate_PriceLN,
            $Diff_PcsLN,
            $Diff_PriceLN,
            $NewTotal_PcsLN,
            $NewTotal_PriceLN,
            $NewTotalDiff_NavLN,
            $NewTotalDiff_CalLN,
            $a7f1fgbu02s_PcsLN,
            $a7f1fgbu02s_PriceLN,
            $a7f2fgbu10s_PcsLN,
            $a7f2fgbu10s_PriceLN,
            $a7f2thbu05s_PcsLN,
            $a7f2thbu05s_PriceLN,
            $a7f2debu10s_PcsLN,
            $a7f2debu10s_PriceLN,
            $a7f2exbu11s_PcsLN,
            $a7f2exbu11s_PriceLN,
            $a7f2twbu04s_PcsLN,
            $a7f2twbu04s_PriceLN,
            $a7f2twbu07s_PcsLN,
            $a7f2twbu07s_PriceLN,
            $a7f2cebu10s_PcsLN,
            $a7f2cebu10s_PriceLN,
            $a8f1fgbu02s_PcsLN,
            $a8f1fgbu02s_PriceLN,
            $a8f2fgbu10s_PcsLN,
            $a8f2fgbu10s_PriceLN,
            $a8f2thbu05s_PcsLN,
            $a8f2thbu05s_PriceLN,
            $a8f2debu10s_PcsLN,
            $a8f2debu10s_PriceLN,
            $a8f2exbu11s_PcsLN,
            $a8f2exbu11s_PriceLN,
            $a8f2twbu04s_PcsLN,
            $a8f2twbu04s_PriceLN,
            $a8f2twbu07s_PcsLN,
            $a8f2twbu07s_PriceLN,
            $a8f2cebu10s_PcsLN,
            $a8f2cebu10s_PriceLN,
            $DC1_PcsLN,
            $DC1_PriceLN,
            $DCP_PcsLN,
            $DCP_PriceLN,
            $DCY_PcsLN,
            $DCY_PriceLN,
            $DEX_PcsLN,
            $DEX_PriceLN,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllProduct,
            $Price_AfterAllProduct,
            $Pcs_AfterAllProduct,
            $Price_AfterAllProduct,
            $Po_PcsAllProduct,
            $Po_PriceAllProduct,
            $Neg_PcsAllProduct,
            $Neg_PriceAllProduct,
            $BackChange_PcsAllProduct,
            $BackChange_PriceAllProduct,
            $Purchase_PcsAllProduct,
            $Purchase_PriceAllProduct,
            $ReciveTranfer_PcsAllProduct,
            $ReciveTranfer_PriceAllProduct,
            $ReturnItem_PCSAllProduct,
            $ReturnItem_PriceAllProduct,
            $AllIn_PcsAllProduct,
            $AllIn_PriceAllProduct,
            $SendSale_PcsAllProduct,
            $SendSale_PriceAllProduct,
            $ReciveTranOut_PcsAllProduct,
            $ReciveTranOut_PriceAllProduct,
            $ReturnStore_PcsAllProduct,
            $ReturnStore_PriceAllProduct,
            $AllOut_PcsAllProduct,
            $AllOut_PriceAllProduct,
            $Calculate_PcsAllProduct,
            $Calculate_PriceAllProduct,
            $NewCalculate_PcsAllProduct,
            $NewCalculate_PriceAllProduct,
            $Diff_PcsAllProduct,
            $Diff_PriceAllProduct,
            $NewTotal_PcsAllProduct,
            $NewTotal_PriceAllProduct,
            $NewTotalDiff_NavAllProduct,
            $NewTotalDiff_CalAllProduct,
            $a7f1fgbu02s_PcsAllProduct,
            $a7f1fgbu02s_PriceAllProduct,
            $a7f2fgbu10s_PcsAllProduct,
            $a7f2fgbu10s_PriceAllProduct,
            $a7f2thbu05s_PcsAllProduct,
            $a7f2thbu05s_PriceAllProduct,
            $a7f2debu10s_PcsAllProduct,
            $a7f2debu10s_PriceAllProduct,
            $a7f2exbu11s_PcsAllProduct,
            $a7f2exbu11s_PriceAllProduct,
            $a7f2twbu04s_PcsAllProduct,
            $a7f2twbu04s_PriceAllProduct,
            $a7f2twbu07s_PcsAllProduct,
            $a7f2twbu07s_PriceAllProduct,
            $a7f2cebu10s_PcsAllProduct,
            $a7f2cebu10s_PriceAllProduct,
            $a8f1fgbu02s_PcsAllProduct,
            $a8f1fgbu02s_PriceAllProduct,
            $a8f2fgbu10s_PcsAllProduct,
            $a8f2fgbu10s_PriceAllProduct,
            $a8f2thbu05s_PcsAllProduct,
            $a8f2thbu05s_PriceAllProduct,
            $a8f2debu10s_PcsAllProduct,
            $a8f2debu10s_PriceAllProduct,
            $a8f2exbu11s_PcsAllProduct,
            $a8f2exbu11s_PriceAllProduct,
            $a8f2twbu04s_PcsAllProduct,
            $a8f2twbu04s_PriceAllProduct,
            $a8f2twbu07s_PcsAllProduct,
            $a8f2twbu07s_PriceAllProduct,
            $a8f2cebu10s_PcsAllProduct,
            $a8f2cebu10s_PriceAllProduct,
            $DC1_PcsAllProduct,
            $DC1_PriceAllProduct,
            $DCP_PcsAllProduct,
            $DCP_PriceAllProduct,
            $DCY_PcsAllProduct,
            $DCY_PriceAllProduct,
            $DEX_PcsAllProduct,
            $DEX_PriceAllProduct,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAS,
            $Price_AfterAS,
            $Pcs_AfterAS,
            $Price_AfterAS,
            $Po_PcsAS,
            $Po_PriceAS,
            $Neg_PcsAS,
            $Neg_PriceAS,
            $BackChange_PcsAS,
            $BackChange_PriceAS,
            $Purchase_PcsAS,
            $Purchase_PriceAS,
            $ReciveTranfer_PcsAS,
            $ReciveTranfer_PriceAS,
            $ReturnItem_PCSAS,
            $ReturnItem_PriceAS,
            $AllIn_PcsAS,
            $AllIn_PriceAS,
            $SendSale_PcsAS,
            $SendSale_PriceAS,
            $ReciveTranOut_PcsAS,
            $ReciveTranOut_PriceAS,
            $ReturnStore_PcsAS,
            $ReturnStore_PriceAS,
            $AllOut_PcsAS,
            $AllOut_PriceAS,
            $Calculate_PcsAS,
            $Calculate_PriceAS,
            $NewCalculate_PcsAS,
            $NewCalculate_PriceAS,
            $Diff_PcsAS,
            $Diff_PriceAS,
            $NewTotal_PcsAS,
            $NewTotal_PriceAS,
            $NewTotalDiff_NavAS,
            $NewTotalDiff_CalAS,
            $a7f1fgbu02s_PcsAS,
            $a7f1fgbu02s_PriceAS,
            $a7f2fgbu10s_PcsAS,
            $a7f2fgbu10s_PriceAS,
            $a7f2thbu05s_PcsAS,
            $a7f2thbu05s_PriceAS,
            $a7f2debu10s_PcsAS,
            $a7f2debu10s_PriceAS,
            $a7f2exbu11s_PcsAS,
            $a7f2exbu11s_PriceAS,
            $a7f2twbu04s_PcsAS,
            $a7f2twbu04s_PriceAS,
            $a7f2twbu07s_PcsAS,
            $a7f2twbu07s_PriceAS,
            $a7f2cebu10s_PcsAS,
            $a7f2cebu10s_PriceAS,
            $a8f1fgbu02s_PcsAS,
            $a8f1fgbu02s_PriceAS,
            $a8f2fgbu10s_PcsAS,
            $a8f2fgbu10s_PriceAS,
            $a8f2thbu05s_PcsAS,
            $a8f2thbu05s_PriceAS,
            $a8f2debu10s_PcsAS,
            $a8f2debu10s_PriceAS,
            $a8f2exbu11s_PcsAS,
            $a8f2exbu11s_PriceAS,
            $a8f2twbu04s_PcsAS,
            $a8f2twbu04s_PriceAS,
            $a8f2twbu07s_PcsAS,
            $a8f2twbu07s_PriceAS,
            $a8f2cebu10s_PcsAS,
            $a8f2cebu10s_PriceAS,
            $DC1_PcsAS,
            $DC1_PriceAS,
            $DCP_PcsAS,
            $DCP_PriceAS,
            $DCY_PcsAS,
            $DCY_PriceAS,
            $DEX_PcsAS,
            $DEX_PriceAS,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSTW,
            $Price_AfterSTW,
            $Pcs_AfterSTW,
            $Price_AfterSTW,
            $Po_PcsSTW,
            $Po_PriceSTW,
            $Neg_PcsSTW,
            $Neg_PriceSTW,
            $BackChange_PcsSTW,
            $BackChange_PriceSTW,
            $Purchase_PcsSTW,
            $Purchase_PriceSTW,
            $ReciveTranfer_PcsSTW,
            $ReciveTranfer_PriceSTW,
            $ReturnItem_PCSSTW,
            $ReturnItem_PriceSTW,
            $AllIn_PcsSTW,
            $AllIn_PriceSTW,
            $SendSale_PcsSTW,
            $SendSale_PriceSTW,
            $ReciveTranOut_PcsSTW,
            $ReciveTranOut_PriceSTW,
            $ReturnStore_PcsSTW,
            $ReturnStore_PriceSTW,
            $AllOut_PcsSTW,
            $AllOut_PriceSTW,
            $Calculate_PcsSTW,
            $Calculate_PriceSTW,
            $NewCalculate_PcsSTW,
            $NewCalculate_PriceSTW,
            $Diff_PcsSTW,
            $Diff_PriceSTW,
            $NewTotal_PcsSTW,
            $NewTotal_PriceSTW,
            $NewTotalDiff_NavSTW,
            $NewTotalDiff_CalSTW,
            $a7f1fgbu02s_PcsSTW,
            $a7f1fgbu02s_PriceSTW,
            $a7f2fgbu10s_PcsSTW,
            $a7f2fgbu10s_PriceSTW,
            $a7f2thbu05s_PcsSTW,
            $a7f2thbu05s_PriceSTW,
            $a7f2debu10s_PcsSTW,
            $a7f2debu10s_PriceSTW,
            $a7f2exbu11s_PcsSTW,
            $a7f2exbu11s_PriceSTW,
            $a7f2twbu04s_PcsSTW,
            $a7f2twbu04s_PriceSTW,
            $a7f2twbu07s_PcsSTW,
            $a7f2twbu07s_PriceSTW,
            $a7f2cebu10s_PcsSTW,
            $a7f2cebu10s_PriceSTW,
            $a8f1fgbu02s_PcsSTW,
            $a8f1fgbu02s_PriceSTW,
            $a8f2fgbu10s_PcsSTW,
            $a8f2fgbu10s_PriceSTW,
            $a8f2thbu05s_PcsSTW,
            $a8f2thbu05s_PriceSTW,
            $a8f2debu10s_PcsSTW,
            $a8f2debu10s_PriceSTW,
            $a8f2exbu11s_PcsSTW,
            $a8f2exbu11s_PriceSTW,
            $a8f2twbu04s_PcsSTW,
            $a8f2twbu04s_PriceSTW,
            $a8f2twbu07s_PcsSTW,
            $a8f2twbu07s_PriceSTW,
            $a8f2cebu10s_PcsSTW,
            $a8f2cebu10s_PriceSTW,
            $DC1_PcsSTW,
            $DC1_PriceSTW,
            $DCP_PcsSTW,
            $DCP_PriceSTW,
            $DCY_PcsSTW,
            $DCY_PriceSTW,
            $DEX_PcsSTW,
            $DEX_PriceSTW,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSLN,
            $Price_AfterSLN,
            $Pcs_AfterSLN,
            $Price_AfterSLN,
            $Po_PcsSLN,
            $Po_PriceSLN,
            $Neg_PcsSLN,
            $Neg_PriceSLN,
            $BackChange_PcsSLN,
            $BackChange_PriceSLN,
            $Purchase_PcsSLN,
            $Purchase_PriceSLN,
            $ReciveTranfer_PcsSLN,
            $ReciveTranfer_PriceSLN,
            $ReturnItem_PCSSLN,
            $ReturnItem_PriceSLN,
            $AllIn_PcsSLN,
            $AllIn_PriceSLN,
            $SendSale_PcsSLN,
            $SendSale_PriceSLN,
            $ReciveTranOut_PcsSLN,
            $ReciveTranOut_PriceSLN,
            $ReturnStore_PcsSLN,
            $ReturnStore_PriceSLN,
            $AllOut_PcsSLN,
            $AllOut_PriceSLN,
            $Calculate_PcsSLN,
            $Calculate_PriceSLN,
            $NewCalculate_PcsSLN,
            $NewCalculate_PriceSLN,
            $Diff_PcsSLN,
            $Diff_PriceSLN,
            $NewTotal_PcsSLN,
            $NewTotal_PriceSLN,
            $NewTotalDiff_NavSLN,
            $NewTotalDiff_CalSLN,
            $a7f1fgbu02s_PcsSLN,
            $a7f1fgbu02s_PriceSLN,
            $a7f2fgbu10s_PcsSLN,
            $a7f2fgbu10s_PriceSLN,
            $a7f2thbu05s_PcsSLN,
            $a7f2thbu05s_PriceSLN,
            $a7f2debu10s_PcsSLN,
            $a7f2debu10s_PriceSLN,
            $a7f2exbu11s_PcsSLN,
            $a7f2exbu11s_PriceSLN,
            $a7f2twbu04s_PcsSLN,
            $a7f2twbu04s_PriceSLN,
            $a7f2twbu07s_PcsSLN,
            $a7f2twbu07s_PriceSLN,
            $a7f2cebu10s_PcsSLN,
            $a7f2cebu10s_PriceSLN,
            $a8f1fgbu02s_PcsSLN,
            $a8f1fgbu02s_PriceSLN,
            $a8f2fgbu10s_PcsSLN,
            $a8f2fgbu10s_PriceSLN,
            $a8f2thbu05s_PcsSLN,
            $a8f2thbu05s_PriceSLN,
            $a8f2debu10s_PcsSLN,
            $a8f2debu10s_PriceSLN,
            $a8f2exbu11s_PcsSLN,
            $a8f2exbu11s_PriceSLN,
            $a8f2twbu04s_PcsSLN,
            $a8f2twbu04s_PriceSLN,
            $a8f2twbu07s_PcsSLN,
            $a8f2twbu07s_PriceSLN,
            $a8f2cebu10s_PcsSLN,
            $a8f2cebu10s_PriceSLN,
            $DC1_PcsSLN,
            $DC1_PriceSLN,
            $DCP_PcsSLN,
            $DCP_PriceSLN,
            $DCY_PcsSLN,
            $DCY_PriceSLN,
            $DEX_PcsSLN,
            $DEX_PriceSLN,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSFN,
            $Price_AfterSFN,
            $Pcs_AfterSFN,
            $Price_AfterSFN,
            $Po_PcsSFN,
            $Po_PriceSFN,
            $Neg_PcsSFN,
            $Neg_PriceSFN,
            $BackChange_PcsSFN,
            $BackChange_PriceSFN,
            $Purchase_PcsSFN,
            $Purchase_PriceSFN,
            $ReciveTranfer_PcsSFN,
            $ReciveTranfer_PriceSFN,
            $ReturnItem_PCSSFN,
            $ReturnItem_PriceSFN,
            $AllIn_PcsSFN,
            $AllIn_PriceSFN,
            $SendSale_PcsSFN,
            $SendSale_PriceSFN,
            $ReciveTranOut_PcsSFN,
            $ReciveTranOut_PriceSFN,
            $ReturnStore_PcsSFN,
            $ReturnStore_PriceSFN,
            $AllOut_PcsSFN,
            $AllOut_PriceSFN,
            $Calculate_PcsSFN,
            $Calculate_PriceSFN,
            $NewCalculate_PcsSFN,
            $NewCalculate_PriceSFN,
            $Diff_PcsSFN,
            $Diff_PriceSFN,
            $NewTotal_PcsSFN,
            $NewTotal_PriceSFN,
            $NewTotalDiff_NavSFN,
            $NewTotalDiff_CalSFN,
            $a7f1fgbu02s_PcsSFN,
            $a7f1fgbu02s_PriceSFN,
            $a7f2fgbu10s_PcsSFN,
            $a7f2fgbu10s_PriceSFN,
            $a7f2thbu05s_PcsSFN,
            $a7f2thbu05s_PriceSFN,
            $a7f2debu10s_PcsSFN,
            $a7f2debu10s_PriceSFN,
            $a7f2exbu11s_PcsSFN,
            $a7f2exbu11s_PriceSFN,
            $a7f2twbu04s_PcsSFN,
            $a7f2twbu04s_PriceSFN,
            $a7f2twbu07s_PcsSFN,
            $a7f2twbu07s_PriceSFN,
            $a7f2cebu10s_PcsSFN,
            $a7f2cebu10s_PriceSFN,
            $a8f1fgbu02s_PcsSFN,
            $a8f1fgbu02s_PriceSFN,
            $a8f2fgbu10s_PcsSFN,
            $a8f2fgbu10s_PriceSFN,
            $a8f2thbu05s_PcsSFN,
            $a8f2thbu05s_PriceSFN,
            $a8f2debu10s_PcsSFN,
            $a8f2debu10s_PriceSFN,
            $a8f2exbu11s_PcsSFN,
            $a8f2exbu11s_PriceSFN,
            $a8f2twbu04s_PcsSFN,
            $a8f2twbu04s_PriceSFN,
            $a8f2twbu07s_PcsSFN,
            $a8f2twbu07s_PriceSFN,
            $a8f2cebu10s_PcsSFN,
            $a8f2cebu10s_PriceSFN,
            $DC1_PcsSFN,
            $DC1_PriceSFN,
            $DCP_PcsSFN,
            $DCP_PriceSFN,
            $DCY_PcsSFN,
            $DCY_PriceSFN,
            $DEX_PcsSFN,
            $DEX_PriceSFN,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSMT,
            $Price_AfterSMT,
            $Pcs_AfterSMT,
            $Price_AfterSMT,
            $Po_PcsSMT,
            $Po_PriceSMT,
            $Neg_PcsSMT,
            $Neg_PriceSMT,
            $BackChange_PcsSMT,
            $BackChange_PriceSMT,
            $Purchase_PcsSMT,
            $Purchase_PriceSMT,
            $ReciveTranfer_PcsSMT,
            $ReciveTranfer_PriceSMT,
            $ReturnItem_PCSSMT,
            $ReturnItem_PriceSMT,
            $AllIn_PcsSMT,
            $AllIn_PriceSMT,
            $SendSale_PcsSMT,
            $SendSale_PriceSMT,
            $ReciveTranOut_PcsSMT,
            $ReciveTranOut_PriceSMT,
            $ReturnStore_PcsSMT,
            $ReturnStore_PriceSMT,
            $AllOut_PcsSMT,
            $AllOut_PriceSMT,
            $Calculate_PcsSMT,
            $Calculate_PriceSMT,
            $NewCalculate_PcsSMT,
            $NewCalculate_PriceSMT,
            $Diff_PcsSMT,
            $Diff_PriceSMT,
            $NewTotal_PcsSMT,
            $NewTotal_PriceSMT,
            $NewTotalDiff_NavSMT,
            $NewTotalDiff_CalSMT,
            $a7f1fgbu02s_PcsSMT,
            $a7f1fgbu02s_PriceSMT,
            $a7f2fgbu10s_PcsSMT,
            $a7f2fgbu10s_PriceSMT,
            $a7f2thbu05s_PcsSMT,
            $a7f2thbu05s_PriceSMT,
            $a7f2debu10s_PcsSMT,
            $a7f2debu10s_PriceSMT,
            $a7f2exbu11s_PcsSMT,
            $a7f2exbu11s_PriceSMT,
            $a7f2twbu04s_PcsSMT,
            $a7f2twbu04s_PriceSMT,
            $a7f2twbu07s_PcsSMT,
            $a7f2twbu07s_PriceSMT,
            $a7f2cebu10s_PcsSMT,
            $a7f2cebu10s_PriceSMT,
            $a8f1fgbu02s_PcsSMT,
            $a8f1fgbu02s_PriceSMT,
            $a8f2fgbu10s_PcsSMT,
            $a8f2fgbu10s_PriceSMT,
            $a8f2thbu05s_PcsSMT,
            $a8f2thbu05s_PriceSMT,
            $a8f2debu10s_PcsSMT,
            $a8f2debu10s_PriceSMT,
            $a8f2exbu11s_PcsSMT,
            $a8f2exbu11s_PriceSMT,
            $a8f2twbu04s_PcsSMT,
            $a8f2twbu04s_PriceSMT,
            $a8f2twbu07s_PcsSMT,
            $a8f2twbu07s_PriceSMT,
            $a8f2cebu10s_PcsSMT,
            $a8f2cebu10s_PriceSMT,
            $DC1_PcsSMT,
            $DC1_PriceSMT,
            $DCP_PcsSMT,
            $DCP_PriceSMT,
            $DCY_PcsSMT,
            $DCY_PriceSMT,
            $DEX_PcsSMT,
            $DEX_PriceSMT,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSNT,
            $Price_AfterSNT,
            $Pcs_AfterSNT,
            $Price_AfterSNT,
            $Po_PcsSNT,
            $Po_PriceSNT,
            $Neg_PcsSNT,
            $Neg_PriceSNT,
            $BackChange_PcsSNT,
            $BackChange_PriceSNT,
            $Purchase_PcsSNT,
            $Purchase_PriceSNT,
            $ReciveTranfer_PcsSNT,
            $ReciveTranfer_PriceSNT,
            $ReturnItem_PCSSNT,
            $ReturnItem_PriceSNT,
            $AllIn_PcsSNT,
            $AllIn_PriceSNT,
            $SendSale_PcsSNT,
            $SendSale_PriceSNT,
            $ReciveTranOut_PcsSNT,
            $ReciveTranOut_PriceSNT,
            $ReturnStore_PcsSNT,
            $ReturnStore_PriceSNT,
            $AllOut_PcsSNT,
            $AllOut_PriceSNT,
            $Calculate_PcsSNT,
            $Calculate_PriceSNT,
            $NewCalculate_PcsSNT,
            $NewCalculate_PriceSNT,
            $Diff_PcsSNT,
            $Diff_PriceSNT,
            $NewTotal_PcsSNT,
            $NewTotal_PriceSNT,
            $NewTotalDiff_NavSNT,
            $NewTotalDiff_CalSNT,
            $a7f1fgbu02s_PcsSNT,
            $a7f1fgbu02s_PriceSNT,
            $a7f2fgbu10s_PcsSNT,
            $a7f2fgbu10s_PriceSNT,
            $a7f2thbu05s_PcsSNT,
            $a7f2thbu05s_PriceSNT,
            $a7f2debu10s_PcsSNT,
            $a7f2debu10s_PriceSNT,
            $a7f2exbu11s_PcsSNT,
            $a7f2exbu11s_PriceSNT,
            $a7f2twbu04s_PcsSNT,
            $a7f2twbu04s_PriceSNT,
            $a7f2twbu07s_PcsSNT,
            $a7f2twbu07s_PriceSNT,
            $a7f2cebu10s_PcsSNT,
            $a7f2cebu10s_PriceSNT,
            $a8f1fgbu02s_PcsSNT,
            $a8f1fgbu02s_PriceSNT,
            $a8f2fgbu10s_PcsSNT,
            $a8f2fgbu10s_PriceSNT,
            $a8f2thbu05s_PcsSNT,
            $a8f2thbu05s_PriceSNT,
            $a8f2debu10s_PcsSNT,
            $a8f2debu10s_PriceSNT,
            $a8f2exbu11s_PcsSNT,
            $a8f2exbu11s_PriceSNT,
            $a8f2twbu04s_PcsSNT,
            $a8f2twbu04s_PriceSNT,
            $a8f2twbu07s_PcsSNT,
            $a8f2twbu07s_PriceSNT,
            $a8f2cebu10s_PcsSNT,
            $a8f2cebu10s_PriceSNT,
            $DC1_PcsSNT,
            $DC1_PriceSNT,
            $DCP_PcsSNT,
            $DCP_PriceSNT,
            $DCY_PcsSNT,
            $DCY_PriceSNT,
            $DEX_PcsSNT,
            $DEX_PriceSNT,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllSale,
            $Price_AfterAllSale,
            $Pcs_AfterAllSale,
            $Price_AfterAllSale,
            $Po_PcsAllSale,
            $Po_PriceAllSale,
            $Neg_PcsAllSale,
            $Neg_PriceAllSale,
            $BackChange_PcsAllSale,
            $BackChange_PriceAllSale,
            $Purchase_PcsAllSale,
            $Purchase_PriceAllSale,
            $ReciveTranfer_PcsAllSale,
            $ReciveTranfer_PriceAllSale,
            $ReturnItem_PCSAllSale,
            $ReturnItem_PriceAllSale,
            $AllIn_PcsAllSale,
            $AllIn_PriceAllSale,
            $SendSale_PcsAllSale,
            $SendSale_PriceAllSale,
            $ReciveTranOut_PcsAllSale,
            $ReciveTranOut_PriceAllSale,
            $ReturnStore_PcsAllSale,
            $ReturnStore_PriceAllSale,
            $AllOut_PcsAllSale,
            $AllOut_PriceAllSale,
            $Calculate_PcsAllSale,
            $Calculate_PriceAllSale,
            $NewCalculate_PcsAllSale,
            $NewCalculate_PriceAllSale,
            $Diff_PcsAllSale,
            $Diff_PriceAllSale,
            $NewTotal_PcsAllSale,
            $NewTotal_PriceAllSale,
            $NewTotalDiff_NavAllSale,
            $NewTotalDiff_CalAllSale,
            $a7f1fgbu02s_PcsAllSale,
            $a7f1fgbu02s_PriceAllSale,
            $a7f2fgbu10s_PcsAllSale,
            $a7f2fgbu10s_PriceAllSale,
            $a7f2thbu05s_PcsAllSale,
            $a7f2thbu05s_PriceAllSale,
            $a7f2debu10s_PcsAllSale,
            $a7f2debu10s_PriceAllSale,
            $a7f2exbu11s_PcsAllSale,
            $a7f2exbu11s_PriceAllSale,
            $a7f2twbu04s_PcsAllSale,
            $a7f2twbu04s_PriceAllSale,
            $a7f2twbu07s_PcsAllSale,
            $a7f2twbu07s_PriceAllSale,
            $a7f2cebu10s_PcsAllSale,
            $a7f2cebu10s_PriceAllSale,
            $a8f1fgbu02s_PcsAllSale,
            $a8f1fgbu02s_PriceAllSale,
            $a8f2fgbu10s_PcsAllSale,
            $a8f2fgbu10s_PriceAllSale,
            $a8f2thbu05s_PcsAllSale,
            $a8f2thbu05s_PriceAllSale,
            $a8f2debu10s_PcsAllSale,
            $a8f2debu10s_PriceAllSale,
            $a8f2exbu11s_PcsAllSale,
            $a8f2exbu11s_PriceAllSale,
            $a8f2twbu04s_PcsAllSale,
            $a8f2twbu04s_PriceAllSale,
            $a8f2twbu07s_PcsAllSale,
            $a8f2twbu07s_PriceAllSale,
            $a8f2cebu10s_PcsAllSale,
            $a8f2cebu10s_PriceAllSale,
            $DC1_PcsAllSale,
            $DC1_PriceAllSale,
            $DCP_PcsAllSale,
            $DCP_PriceAllSale,
            $DCY_PcsAllSale,
            $DCY_PriceAllSale,
            $DEX_PcsAllSale,
            $DEX_PriceAllSale,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllDC1,
            $Price_AfterAllDC1,
            $Pcs_AfterAllDC1,
            $Price_AfterAllDC1,
            $Po_PcsAllDC1,
            $Po_PriceAllDC1,
            $Neg_PcsAllDC1,
            $Neg_PriceAllDC1,
            $BackChange_PcsAllDC1,
            $BackChange_PriceAllDC1,
            $Purchase_PcsAllDC1,
            $Purchase_PriceAllDC1,
            $ReciveTranfer_PcsAllDC1,
            $ReciveTranfer_PriceAllDC1,
            $ReturnItem_PCSAllDC1,
            $ReturnItem_PriceAllDC1,
            $AllIn_PcsAllDC1,
            $AllIn_PriceAllDC1,
            $SendSale_PcsAllDC1,
            $SendSale_PriceAllDC1,
            $ReciveTranOut_PcsAllDC1,
            $ReciveTranOut_PriceAllDC1,
            $ReturnStore_PcsAllDC1,
            $ReturnStore_PriceAllDC1,
            $AllOut_PcsAllDC1,
            $AllOut_PriceAllDC1,
            $Calculate_PcsAllDC1,
            $Calculate_PriceAllDC1,
            $NewCalculate_PcsAllDC1,
            $NewCalculate_PriceAllDC1,
            $Diff_PcsAllDC1,
            $Diff_PriceAllDC1,
            $NewTotal_PcsAllDC1,
            $NewTotal_PriceAllDC1,
            $NewTotalDiff_NavAllDC1,
            $NewTotalDiff_CalAllDC1,
            $a7f1fgbu02s_PcsAllDC1,
            $a7f1fgbu02s_PriceAllDC1,
            $a7f2fgbu10s_PcsAllDC1,
            $a7f2fgbu10s_PriceAllDC1,
            $a7f2thbu05s_PcsAllDC1,
            $a7f2thbu05s_PriceAllDC1,
            $a7f2debu10s_PcsAllDC1,
            $a7f2debu10s_PriceAllDC1,
            $a7f2exbu11s_PcsAllDC1,
            $a7f2exbu11s_PriceAllDC1,
            $a7f2twbu04s_PcsAllDC1,
            $a7f2twbu04s_PriceAllDC1,
            $a7f2twbu07s_PcsAllDC1,
            $a7f2twbu07s_PriceAllDC1,
            $a7f2cebu10s_PcsAllDC1,
            $a7f2cebu10s_PriceAllDC1,
            $a8f1fgbu02s_PcsAllDC1,
            $a8f1fgbu02s_PriceAllDC1,
            $a8f2fgbu10s_PcsAllDC1,
            $a8f2fgbu10s_PriceAllDC1,
            $a8f2thbu05s_PcsAllDC1,
            $a8f2thbu05s_PriceAllDC1,
            $a8f2debu10s_PcsAllDC1,
            $a8f2debu10s_PriceAllDC1,
            $a8f2exbu11s_PcsAllDC1,
            $a8f2exbu11s_PriceAllDC1,
            $a8f2twbu04s_PcsAllDC1,
            $a8f2twbu04s_PriceAllDC1,
            $a8f2twbu07s_PcsAllDC1,
            $a8f2twbu07s_PriceAllDC1,
            $a8f2cebu10s_PcsAllDC1,
            $a8f2cebu10s_PriceAllDC1,
            $DC1_PcsAllDC1,
            $DC1_PriceAllDC1,
            $DCP_PcsAllDC1,
            $DCP_PriceAllDC1,
            $DCY_PcsAllDC1,
            $DCY_PriceAllDC1,
            $DEX_PcsAllDC1,
            $DEX_PriceAllDC1,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterNTDCY,
            $Price_AfterNTDCY,
            $Pcs_AfterNTDCY,
            $Price_AfterNTDCY,
            $Po_PcsNTDCY,
            $Po_PriceNTDCY,
            $Neg_PcsNTDCY,
            $Neg_PriceNTDCY,
            $BackChange_PcsNTDCY,
            $BackChange_PriceNTDCY,
            $Purchase_PcsNTDCY,
            $Purchase_PriceNTDCY,
            $ReciveTranfer_PcsNTDCY,
            $ReciveTranfer_PriceNTDCY,
            $ReturnItem_PCSNTDCY,
            $ReturnItem_PriceNTDCY,
            $AllIn_PcsNTDCY,
            $AllIn_PriceNTDCY,
            $SendSale_PcsNTDCY,
            $SendSale_PriceNTDCY,
            $ReciveTranOut_PcsNTDCY,
            $ReciveTranOut_PriceNTDCY,
            $ReturnStore_PcsNTDCY,
            $ReturnStore_PriceNTDCY,
            $AllOut_PcsNTDCY,
            $AllOut_PriceNTDCY,
            $Calculate_PcsNTDCY,
            $Calculate_PriceNTDCY,
            $NewCalculate_PcsNTDCY,
            $NewCalculate_PriceNTDCY,
            $Diff_PcsNTDCY,
            $Diff_PriceNTDCY,
            $NewTotal_PcsNTDCY,
            $NewTotal_PriceNTDCY,
            $NewTotalDiff_NavNTDCY,
            $NewTotalDiff_CalNTDCY,
            $a7f1fgbu02s_PcsNTDCY,
            $a7f1fgbu02s_PriceNTDCY,
            $a7f2fgbu10s_PcsNTDCY,
            $a7f2fgbu10s_PriceNTDCY,
            $a7f2thbu05s_PcsNTDCY,
            $a7f2thbu05s_PriceNTDCY,
            $a7f2debu10s_PcsNTDCY,
            $a7f2debu10s_PriceNTDCY,
            $a7f2exbu11s_PcsNTDCY,
            $a7f2exbu11s_PriceNTDCY,
            $a7f2twbu04s_PcsNTDCY,
            $a7f2twbu04s_PriceNTDCY,
            $a7f2twbu07s_PcsNTDCY,
            $a7f2twbu07s_PriceNTDCY,
            $a7f2cebu10s_PcsNTDCY,
            $a7f2cebu10s_PriceNTDCY,
            $a8f1fgbu02s_PcsNTDCY,
            $a8f1fgbu02s_PriceNTDCY,
            $a8f2fgbu10s_PcsNTDCY,
            $a8f2fgbu10s_PriceNTDCY,
            $a8f2thbu05s_PcsNTDCY,
            $a8f2thbu05s_PriceNTDCY,
            $a8f2debu10s_PcsNTDCY,
            $a8f2debu10s_PriceNTDCY,
            $a8f2exbu11s_PcsNTDCY,
            $a8f2exbu11s_PriceNTDCY,
            $a8f2twbu04s_PcsNTDCY,
            $a8f2twbu04s_PriceNTDCY,
            $a8f2twbu07s_PcsNTDCY,
            $a8f2twbu07s_PriceNTDCY,
            $a8f2cebu10s_PcsNTDCY,
            $a8f2cebu10s_PriceNTDCY,
            $DC1_PcsNTDCY,
            $DC1_PriceNTDCY,
            $DCP_PcsNTDCY,
            $DCP_PriceNTDCY,
            $DCY_PcsNTDCY,
            $DCY_PriceNTDCY,
            $DEX_PcsNTDCY,
            $DEX_PriceNTDCY,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterTWDCY,
            $Price_AfterTWDCY,
            $Pcs_AfterTWDCY,
            $Price_AfterTWDCY,
            $Po_PcsTWDCY,
            $Po_PriceTWDCY,
            $Neg_PcsTWDCY,
            $Neg_PriceTWDCY,
            $BackChange_PcsTWDCY,
            $BackChange_PriceTWDCY,
            $Purchase_PcsTWDCY,
            $Purchase_PriceTWDCY,
            $ReciveTranfer_PcsTWDCY,
            $ReciveTranfer_PriceTWDCY,
            $ReturnItem_PCSTWDCY,
            $ReturnItem_PriceTWDCY,
            $AllIn_PcsTWDCY,
            $AllIn_PriceTWDCY,
            $SendSale_PcsTWDCY,
            $SendSale_PriceTWDCY,
            $ReciveTranOut_PcsTWDCY,
            $ReciveTranOut_PriceTWDCY,
            $ReturnStore_PcsTWDCY,
            $ReturnStore_PriceTWDCY,
            $AllOut_PcsTWDCY,
            $AllOut_PriceTWDCY,
            $Calculate_PcsTWDCY,
            $Calculate_PriceTWDCY,
            $NewCalculate_PcsTWDCY,
            $NewCalculate_PriceTWDCY,
            $Diff_PcsTWDCY,
            $Diff_PriceTWDCY,
            $NewTotal_PcsTWDCY,
            $NewTotal_PriceTWDCY,
            $NewTotalDiff_NavTWDCY,
            $NewTotalDiff_CalTWDCY,
            $a7f1fgbu02s_PcsTWDCY,
            $a7f1fgbu02s_PriceTWDCY,
            $a7f2fgbu10s_PcsTWDCY,
            $a7f2fgbu10s_PriceTWDCY,
            $a7f2thbu05s_PcsTWDCY,
            $a7f2thbu05s_PriceTWDCY,
            $a7f2debu10s_PcsTWDCY,
            $a7f2debu10s_PriceTWDCY,
            $a7f2exbu11s_PcsTWDCY,
            $a7f2exbu11s_PriceTWDCY,
            $a7f2twbu04s_PcsTWDCY,
            $a7f2twbu04s_PriceTWDCY,
            $a7f2twbu07s_PcsTWDCY,
            $a7f2twbu07s_PriceTWDCY,
            $a7f2cebu10s_PcsTWDCY,
            $a7f2cebu10s_PriceTWDCY,
            $a8f1fgbu02s_PcsTWDCY,
            $a8f1fgbu02s_PriceTWDCY,
            $a8f2fgbu10s_PcsTWDCY,
            $a8f2fgbu10s_PriceTWDCY,
            $a8f2thbu05s_PcsTWDCY,
            $a8f2thbu05s_PriceTWDCY,
            $a8f2debu10s_PcsTWDCY,
            $a8f2debu10s_PriceTWDCY,
            $a8f2exbu11s_PcsTWDCY,
            $a8f2exbu11s_PriceTWDCY,
            $a8f2twbu04s_PcsTWDCY,
            $a8f2twbu04s_PriceTWDCY,
            $a8f2twbu07s_PcsTWDCY,
            $a8f2twbu07s_PriceTWDCY,
            $a8f2cebu10s_PcsTWDCY,
            $a8f2cebu10s_PriceTWDCY,
            $DC1_PcsTWDCY,
            $DC1_PriceTWDCY,
            $DCP_PcsTWDCY,
            $DCP_PriceTWDCY,
            $DCY_PcsTWDCY,
            $DCY_PriceTWDCY,
            $DEX_PcsTWDCY,
            $DEX_PriceTWDCY,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSNTDCY,
            $Price_AfterSNTDCY,
            $Pcs_AfterSNTDCY,
            $Price_AfterSNTDCY,
            $Po_PcsSNTDCY,
            $Po_PriceSNTDCY,
            $Neg_PcsSNTDCY,
            $Neg_PriceSNTDCY,
            $BackChange_PcsSNTDCY,
            $BackChange_PriceSNTDCY,
            $Purchase_PcsSNTDCY,
            $Purchase_PriceSNTDCY,
            $ReciveTranfer_PcsSNTDCY,
            $ReciveTranfer_PriceSNTDCY,
            $ReturnItem_PCSSNTDCY,
            $ReturnItem_PriceSNTDCY,
            $AllIn_PcsSNTDCY,
            $AllIn_PriceSNTDCY,
            $SendSale_PcsSNTDCY,
            $SendSale_PriceSNTDCY,
            $ReciveTranOut_PcsSNTDCY,
            $ReciveTranOut_PriceSNTDCY,
            $ReturnStore_PcsSNTDCY,
            $ReturnStore_PriceSNTDCY,
            $AllOut_PcsSNTDCY,
            $AllOut_PriceSNTDCY,
            $Calculate_PcsSNTDCY,
            $Calculate_PriceSNTDCY,
            $NewCalculate_PcsSNTDCY,
            $NewCalculate_PriceSNTDCY,
            $Diff_PcsSNTDCY,
            $Diff_PriceSNTDCY,
            $NewTotal_PcsSNTDCY,
            $NewTotal_PriceSNTDCY,
            $NewTotalDiff_NavSNTDCY,
            $NewTotalDiff_CalSNTDCY,
            $a7f1fgbu02s_PcsSNTDCY,
            $a7f1fgbu02s_PriceSNTDCY,
            $a7f2fgbu10s_PcsSNTDCY,
            $a7f2fgbu10s_PriceSNTDCY,
            $a7f2thbu05s_PcsSNTDCY,
            $a7f2thbu05s_PriceSNTDCY,
            $a7f2debu10s_PcsSNTDCY,
            $a7f2debu10s_PriceSNTDCY,
            $a7f2exbu11s_PcsSNTDCY,
            $a7f2exbu11s_PriceSNTDCY,
            $a7f2twbu04s_PcsSNTDCY,
            $a7f2twbu04s_PriceSNTDCY,
            $a7f2twbu07s_PcsSNTDCY,
            $a7f2twbu07s_PriceSNTDCY,
            $a7f2cebu10s_PcsSNTDCY,
            $a7f2cebu10s_PriceSNTDCY,
            $a8f1fgbu02s_PcsSNTDCY,
            $a8f1fgbu02s_PriceSNTDCY,
            $a8f2fgbu10s_PcsSNTDCY,
            $a8f2fgbu10s_PriceSNTDCY,
            $a8f2thbu05s_PcsSNTDCY,
            $a8f2thbu05s_PriceSNTDCY,
            $a8f2debu10s_PcsSNTDCY,
            $a8f2debu10s_PriceSNTDCY,
            $a8f2exbu11s_PcsSNTDCY,
            $a8f2exbu11s_PriceSNTDCY,
            $a8f2twbu04s_PcsSNTDCY,
            $a8f2twbu04s_PriceSNTDCY,
            $a8f2twbu07s_PcsSNTDCY,
            $a8f2twbu07s_PriceSNTDCY,
            $a8f2cebu10s_PcsSNTDCY,
            $a8f2cebu10s_PriceSNTDCY,
            $DC1_PcsSNTDCY,
            $DC1_PriceSNTDCY,
            $DCP_PcsSNTDCY,
            $DCP_PriceSNTDCY,
            $DCY_PcsSNTDCY,
            $DCY_PriceSNTDCY,
            $DEX_PcsSNTDCY,
            $DEX_PriceSNTDCY,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllDCY,
            $Price_AfterAllDCY,
            $Pcs_AfterAllDCY,
            $Price_AfterAllDCY,
            $Po_PcsAllDCY,
            $Po_PriceAllDCY,
            $Neg_PcsAllDCY,
            $Neg_PriceAllDCY,
            $BackChange_PcsAllDCY,
            $BackChange_PriceAllDCY,
            $Purchase_PcsAllDCY,
            $Purchase_PriceAllDCY,
            $ReciveTranfer_PcsAllDCY,
            $ReciveTranfer_PriceAllDCY,
            $ReturnItem_PCSAllDCY,
            $ReturnItem_PriceAllDCY,
            $AllIn_PcsAllDCY,
            $AllIn_PriceAllDCY,
            $SendSale_PcsAllDCY,
            $SendSale_PriceAllDCY,
            $ReciveTranOut_PcsAllDCY,
            $ReciveTranOut_PriceAllDCY,
            $ReturnStore_PcsAllDCY,
            $ReturnStore_PriceAllDCY,
            $AllOut_PcsAllDCY,
            $AllOut_PriceAllDCY,
            $Calculate_PcsAllDCY,
            $Calculate_PriceAllDCY,
            $NewCalculate_PcsAllDCY,
            $NewCalculate_PriceAllDCY,
            $Diff_PcsAllDCY,
            $Diff_PriceAllDCY,
            $NewTotal_PcsAllDCY,
            $NewTotal_PriceAllDCY,
            $NewTotalDiff_NavAllDCY,
            $NewTotalDiff_CalAllDCY,
            $a7f1fgbu02s_PcsAllDCY,
            $a7f1fgbu02s_PriceAllDCY,
            $a7f2fgbu10s_PcsAllDCY,
            $a7f2fgbu10s_PriceAllDCY,
            $a7f2thbu05s_PcsAllDCY,
            $a7f2thbu05s_PriceAllDCY,
            $a7f2debu10s_PcsAllDCY,
            $a7f2debu10s_PriceAllDCY,
            $a7f2exbu11s_PcsAllDCY,
            $a7f2exbu11s_PriceAllDCY,
            $a7f2twbu04s_PcsAllDCY,
            $a7f2twbu04s_PriceAllDCY,
            $a7f2twbu07s_PcsAllDCY,
            $a7f2twbu07s_PriceAllDCY,
            $a7f2cebu10s_PcsAllDCY,
            $a7f2cebu10s_PriceAllDCY,
            $a8f1fgbu02s_PcsAllDCY,
            $a8f1fgbu02s_PriceAllDCY,
            $a8f2fgbu10s_PcsAllDCY,
            $a8f2fgbu10s_PriceAllDCY,
            $a8f2thbu05s_PcsAllDCY,
            $a8f2thbu05s_PriceAllDCY,
            $a8f2debu10s_PcsAllDCY,
            $a8f2debu10s_PriceAllDCY,
            $a8f2exbu11s_PcsAllDCY,
            $a8f2exbu11s_PriceAllDCY,
            $a8f2twbu04s_PcsAllDCY,
            $a8f2twbu04s_PriceAllDCY,
            $a8f2twbu07s_PcsAllDCY,
            $a8f2twbu07s_PriceAllDCY,
            $a8f2cebu10s_PcsAllDCY,
            $a8f2cebu10s_PriceAllDCY,
            $DC1_PcsAllDCY,
            $DC1_PriceAllDCY,
            $DCP_PcsAllDCY,
            $DCP_PriceAllDCY,
            $DCY_PcsAllDCY,
            $DCY_PriceAllDCY,
            $DEX_PcsAllDCY,
            $DEX_PriceAllDCY,
        ];

        return response()->json($Data);

    }
}