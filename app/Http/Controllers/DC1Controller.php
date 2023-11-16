<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DC1Controller extends Controller
{
    public function DataDC1()
    {

        $ItemNoNT_1 = DB::table('item_all')
            ->select(
                'dataother.Item No as Item_No',
                'dataother.PriceAvg',
                'dataother.PcsAfter',
                'dataother.PriceAfter',
                'dataother.Category',
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

        $Pcs_AfterNT_1 = 0;
        $Price_AfterNT_1 = 0;
        $Po_PcsNT_1 = 0;
        $Po_PriceNT_1 = 0;
        $Neg_PcsNT_1 = 0;
        $Neg_PriceNT_1 = 0;
        $Purchase_PcsNT_1 = 0;
        $Purchase_PriceNT_1 = 0;
        $BackChange_PcsNT_1 = 0;
        $BackChange_PriceNT_1 = 0;
        $ReciveTranfer_PcsNT_1 = 0;
        $ReciveTranfer_PriceNT_1 = 0;
        $ReturnItem_PCSNT_1 = 0;
        $ReturnItem_PriceNT_1 = 0;
        $AllIn_PcsNT_1 = 0;
        $AllIn_PriceNT_1 = 0;
        $SendSale_PcsNT_1 = 0;
        $SendSale_PriceNT_1 = 0;
        $ReciveTranOut_PcsNT_1 = 0;
        $ReciveTranOut_PriceNT_1 = 0;
        $ReturnStore_PcsNT_1 = 0;
        $ReturnStore_PriceNT_1 = 0;
        $AllOut_PcsNT_1 = 0;
        $AllOut_PriceNT_1 = 0;
        $Calculate_PcsNT_1 = 0;
        $Calculate_PriceNT_1 = 0;
        $NewCalculate_PcsNT_1 = 0;
        $NewCalculate_PriceNT_1 = 0;
        $Diff_PcsNT_1 = 0;
        $Diff_PriceNT_1 = 0;
        $NewTotal_PcsNT_1 = 0;
        $NewTotal_PriceNT_1 = 0;
        $NewTotalDiff_NavNT_1 = 0;
        $NewTotalDiff_CalNT_1 = 0;
        $a7f1fgbu02s_PcsNT_1 = 0;
        $a7f1fgbu02s_PriceNT_1 = 0;
        $a7f2fgbu10s_PcsNT_1 = 0;
        $a7f2fgbu10s_PriceNT_1 = 0;
        $a7f2thbu05s_PcsNT_1 = 0;
        $a7f2thbu05s_PriceNT_1 = 0;
        $a7f2debu10s_PcsNT_1 = 0;
        $a7f2debu10s_PriceNT_1 = 0;
        $a7f2exbu11s_PcsNT_1 = 0;
        $a7f2exbu11s_PriceNT_1 = 0;
        $a7f2twbu04s_PcsNT_1 = 0;
        $a7f2twbu04s_PriceNT_1 = 0;
        $a7f2twbu07s_PcsNT_1 = 0;
        $a7f2twbu07s_PriceNT_1 = 0;
        $a7f2cebu10s_PcsNT_1 = 0;
        $a7f2cebu10s_PriceNT_1 = 0;
        $a8f1fgbu02s_PcsNT_1 = 0;
        $a8f1fgbu02s_PriceNT_1 = 0;
        $a8f2fgbu10s_PcsNT_1 = 0;
        $a8f2fgbu10s_PriceNT_1 = 0;
        $a8f2thbu05s_PcsNT_1 = 0;
        $a8f2thbu05s_PriceNT_1 = 0;
        $a8f2debu10s_PcsNT_1 = 0;
        $a8f2debu10s_PriceNT_1 = 0;
        $a8f2exbu11s_PcsNT_1 = 0;
        $a8f2exbu11s_PriceNT_1 = 0;
        $a8f2twbu04s_PcsNT_1 = 0;
        $a8f2twbu04s_PriceNT_1 = 0;
        $a8f2twbu07s_PcsNT_1 = 0;
        $a8f2twbu07s_PriceNT_1 = 0;
        $a8f2cebu10s_PcsNT_1 = 0;
        $a8f2cebu10s_PriceNT_1 = 0;
        $DC1_PcsNT_1 = 0;
        $DC1_PriceNT_1 = 0;
        $DCP_PcsNT_1 = 0;
        $DCP_PriceNT_1 = 0;
        $DCY_PcsNT_1 = 0;
        $DCY_PriceNT_1 = 0;
        $DEX_PcsNT_1 = 0;
        $DEX_PriceNT_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_2 = 0;
        $Price_AfterNT_2 = 0;
        $Po_PcsNT_2 = 0;
        $Po_PriceNT_2 = 0;
        $Neg_PcsNT_2 = 0;
        $Neg_PriceNT_2 = 0;
        $Purchase_PcsNT_2 = 0;
        $Purchase_PriceNT_2 = 0;
        $BackChange_PcsNT_2 = 0;
        $BackChange_PriceNT_2 = 0;
        $ReciveTranfer_PcsNT_2 = 0;
        $ReciveTranfer_PriceNT_2 = 0;
        $ReturnItem_PCSNT_2 = 0;
        $ReturnItem_PriceNT_2 = 0;
        $AllIn_PcsNT_2 = 0;
        $AllIn_PriceNT_2 = 0;
        $SendSale_PcsNT_2 = 0;
        $SendSale_PriceNT_2 = 0;
        $ReciveTranOut_PcsNT_2 = 0;
        $ReciveTranOut_PriceNT_2 = 0;
        $ReturnStore_PcsNT_2 = 0;
        $ReturnStore_PriceNT_2 = 0;
        $AllOut_PcsNT_2 = 0;
        $AllOut_PriceNT_2 = 0;
        $Calculate_PcsNT_2 = 0;
        $Calculate_PriceNT_2 = 0;
        $NewCalculate_PcsNT_2 = 0;
        $NewCalculate_PriceNT_2 = 0;
        $Diff_PcsNT_2 = 0;
        $Diff_PriceNT_2 = 0;
        $NewTotal_PcsNT_2 = 0;
        $NewTotal_PriceNT_2 = 0;
        $NewTotalDiff_NavNT_2 = 0;
        $NewTotalDiff_CalNT_2 = 0;
        $a7f1fgbu02s_PcsNT_2 = 0;
        $a7f1fgbu02s_PriceNT_2 = 0;
        $a7f2fgbu10s_PcsNT_2 = 0;
        $a7f2fgbu10s_PriceNT_2 = 0;
        $a7f2thbu05s_PcsNT_2 = 0;
        $a7f2thbu05s_PriceNT_2 = 0;
        $a7f2debu10s_PcsNT_2 = 0;
        $a7f2debu10s_PriceNT_2 = 0;
        $a7f2exbu11s_PcsNT_2 = 0;
        $a7f2exbu11s_PriceNT_2 = 0;
        $a7f2twbu04s_PcsNT_2 = 0;
        $a7f2twbu04s_PriceNT_2 = 0;
        $a7f2twbu07s_PcsNT_2 = 0;
        $a7f2twbu07s_PriceNT_2 = 0;
        $a7f2cebu10s_PcsNT_2 = 0;
        $a7f2cebu10s_PriceNT_2 = 0;
        $a8f1fgbu02s_PcsNT_2 = 0;
        $a8f1fgbu02s_PriceNT_2 = 0;
        $a8f2fgbu10s_PcsNT_2 = 0;
        $a8f2fgbu10s_PriceNT_2 = 0;
        $a8f2thbu05s_PcsNT_2 = 0;
        $a8f2thbu05s_PriceNT_2 = 0;
        $a8f2debu10s_PcsNT_2 = 0;
        $a8f2debu10s_PriceNT_2 = 0;
        $a8f2exbu11s_PcsNT_2 = 0;
        $a8f2exbu11s_PriceNT_2 = 0;
        $a8f2twbu04s_PcsNT_2 = 0;
        $a8f2twbu04s_PriceNT_2 = 0;
        $a8f2twbu07s_PcsNT_2 = 0;
        $a8f2twbu07s_PriceNT_2 = 0;
        $a8f2cebu10s_PcsNT_2 = 0;
        $a8f2cebu10s_PriceNT_2 = 0;
        $DC1_PcsNT_2 = 0;
        $DC1_PriceNT_2 = 0;
        $DCP_PcsNT_2 = 0;
        $DCP_PriceNT_2 = 0;
        $DCY_PcsNT_2 = 0;
        $DCY_PriceNT_2 = 0;
        $DEX_PcsNT_2 = 0;
        $DEX_PriceNT_2 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_3 = 0;
        $Price_AfterNT_3 = 0;
        $Po_PcsNT_3 = 0;
        $Po_PriceNT_3 = 0;
        $Neg_PcsNT_3 = 0;
        $Neg_PriceNT_3 = 0;
        $Purchase_PcsNT_3 = 0;
        $Purchase_PriceNT_3 = 0;
        $BackChange_PcsNT_3 = 0;
        $BackChange_PriceNT_3 = 0;
        $ReciveTranfer_PcsNT_3 = 0;
        $ReciveTranfer_PriceNT_3 = 0;
        $ReturnItem_PCSNT_3 = 0;
        $ReturnItem_PriceNT_3 = 0;
        $AllIn_PcsNT_3 = 0;
        $AllIn_PriceNT_3 = 0;
        $SendSale_PcsNT_3 = 0;
        $SendSale_PriceNT_3 = 0;
        $ReciveTranOut_PcsNT_3 = 0;
        $ReciveTranOut_PriceNT_3 = 0;
        $ReturnStore_PcsNT_3 = 0;
        $ReturnStore_PriceNT_3 = 0;
        $AllOut_PcsNT_3 = 0;
        $AllOut_PriceNT_3 = 0;
        $Calculate_PcsNT_3 = 0;
        $Calculate_PriceNT_3 = 0;
        $NewCalculate_PcsNT_3 = 0;
        $NewCalculate_PriceNT_3 = 0;
        $Diff_PcsNT_3 = 0;
        $Diff_PriceNT_3 = 0;
        $NewTotal_PcsNT_3 = 0;
        $NewTotal_PriceNT_3 = 0;
        $NewTotalDiff_NavNT_3 = 0;
        $NewTotalDiff_CalNT_3 = 0;
        $a7f1fgbu02s_PcsNT_3 = 0;
        $a7f1fgbu02s_PriceNT_3 = 0;
        $a7f2fgbu10s_PcsNT_3 = 0;
        $a7f2fgbu10s_PriceNT_3 = 0;
        $a7f2thbu05s_PcsNT_3 = 0;
        $a7f2thbu05s_PriceNT_3 = 0;
        $a7f2debu10s_PcsNT_3 = 0;
        $a7f2debu10s_PriceNT_3 = 0;
        $a7f2exbu11s_PcsNT_3 = 0;
        $a7f2exbu11s_PriceNT_3 = 0;
        $a7f2twbu04s_PcsNT_3 = 0;
        $a7f2twbu04s_PriceNT_3 = 0;
        $a7f2twbu07s_PcsNT_3 = 0;
        $a7f2twbu07s_PriceNT_3 = 0;
        $a7f2cebu10s_PcsNT_3 = 0;
        $a7f2cebu10s_PriceNT_3 = 0;
        $a8f1fgbu02s_PcsNT_3 = 0;
        $a8f1fgbu02s_PriceNT_3 = 0;
        $a8f2fgbu10s_PcsNT_3 = 0;
        $a8f2fgbu10s_PriceNT_3 = 0;
        $a8f2thbu05s_PcsNT_3 = 0;
        $a8f2thbu05s_PriceNT_3 = 0;
        $a8f2debu10s_PcsNT_3 = 0;
        $a8f2debu10s_PriceNT_3 = 0;
        $a8f2exbu11s_PcsNT_3 = 0;
        $a8f2exbu11s_PriceNT_3 = 0;
        $a8f2twbu04s_PcsNT_3 = 0;
        $a8f2twbu04s_PriceNT_3 = 0;
        $a8f2twbu07s_PcsNT_3 = 0;
        $a8f2twbu07s_PriceNT_3 = 0;
        $a8f2cebu10s_PcsNT_3 = 0;
        $a8f2cebu10s_PriceNT_3 = 0;
        $DC1_PcsNT_3 = 0;
        $DC1_PriceNT_3 = 0;
        $DCP_PcsNT_3 = 0;
        $DCP_PriceNT_3 = 0;
        $DCY_PcsNT_3 = 0;
        $DCY_PriceNT_3 = 0;
        $DEX_PcsNT_3 = 0;
        $DEX_PriceNT_3 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_4 = 0;
        $Price_AfterNT_4 = 0;
        $Po_PcsNT_4 = 0;
        $Po_PriceNT_4 = 0;
        $Neg_PcsNT_4 = 0;
        $Neg_PriceNT_4 = 0;
        $Purchase_PcsNT_4 = 0;
        $Purchase_PriceNT_4 = 0;
        $BackChange_PcsNT_4 = 0;
        $BackChange_PriceNT_4 = 0;
        $ReciveTranfer_PcsNT_4 = 0;
        $ReciveTranfer_PriceNT_4 = 0;
        $ReturnItem_PCSNT_4 = 0;
        $ReturnItem_PriceNT_4 = 0;
        $AllIn_PcsNT_4 = 0;
        $AllIn_PriceNT_4 = 0;
        $SendSale_PcsNT_4 = 0;
        $SendSale_PriceNT_4 = 0;
        $ReciveTranOut_PcsNT_4 = 0;
        $ReciveTranOut_PriceNT_4 = 0;
        $ReturnStore_PcsNT_4 = 0;
        $ReturnStore_PriceNT_4 = 0;
        $AllOut_PcsNT_4 = 0;
        $AllOut_PriceNT_4 = 0;
        $Calculate_PcsNT_4 = 0;
        $Calculate_PriceNT_4 = 0;
        $NewCalculate_PcsNT_4 = 0;
        $NewCalculate_PriceNT_4 = 0;
        $Diff_PcsNT_4 = 0;
        $Diff_PriceNT_4 = 0;
        $NewTotal_PcsNT_4 = 0;
        $NewTotal_PriceNT_4 = 0;
        $NewTotalDiff_NavNT_4 = 0;
        $NewTotalDiff_CalNT_4 = 0;
        $a7f1fgbu02s_PcsNT_4 = 0;
        $a7f1fgbu02s_PriceNT_4 = 0;
        $a7f2fgbu10s_PcsNT_4 = 0;
        $a7f2fgbu10s_PriceNT_4 = 0;
        $a7f2thbu05s_PcsNT_4 = 0;
        $a7f2thbu05s_PriceNT_4 = 0;
        $a7f2debu10s_PcsNT_4 = 0;
        $a7f2debu10s_PriceNT_4 = 0;
        $a7f2exbu11s_PcsNT_4 = 0;
        $a7f2exbu11s_PriceNT_4 = 0;
        $a7f2twbu04s_PcsNT_4 = 0;
        $a7f2twbu04s_PriceNT_4 = 0;
        $a7f2twbu07s_PcsNT_4 = 0;
        $a7f2twbu07s_PriceNT_4 = 0;
        $a7f2cebu10s_PcsNT_4 = 0;
        $a7f2cebu10s_PriceNT_4 = 0;
        $a8f1fgbu02s_PcsNT_4 = 0;
        $a8f1fgbu02s_PriceNT_4 = 0;
        $a8f2fgbu10s_PcsNT_4 = 0;
        $a8f2fgbu10s_PriceNT_4 = 0;
        $a8f2thbu05s_PcsNT_4 = 0;
        $a8f2thbu05s_PriceNT_4 = 0;
        $a8f2debu10s_PcsNT_4 = 0;
        $a8f2debu10s_PriceNT_4 = 0;
        $a8f2exbu11s_PcsNT_4 = 0;
        $a8f2exbu11s_PriceNT_4 = 0;
        $a8f2twbu04s_PcsNT_4 = 0;
        $a8f2twbu04s_PriceNT_4 = 0;
        $a8f2twbu07s_PcsNT_4 = 0;
        $a8f2twbu07s_PriceNT_4 = 0;
        $a8f2cebu10s_PcsNT_4 = 0;
        $a8f2cebu10s_PriceNT_4 = 0;
        $DC1_PcsNT_4 = 0;
        $DC1_PriceNT_4 = 0;
        $DCP_PcsNT_4 = 0;
        $DCP_PriceNT_4 = 0;
        $DCY_PcsNT_4 = 0;
        $DCY_PriceNT_4 = 0;
        $DEX_PcsNT_4 = 0;
        $DEX_PriceNT_4 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoNT_1 as $NT_1) {
            if ($NT_1->Category === "อวนกำโมโน") {
                if ($NT_1->PcsAfter > 0 && $NT_1->PriceAfter > 0) {
                    $NumberNT_1 = ($NT_1->PriceAfter / $NT_1->PcsAfter);
                } else {
                    $NumberNT_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_1 = $NT_1->PcsAfter;
                $Pcs_AfterNT_1 = $Pcs_AfterNT_1 + $PCSAfterNT_1;

                $PriceAfterNT_1 = $NT_1->PriceAfter;
                $Price_AfterNT_1 = $Price_AfterNT_1 + $PriceAfterNT_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_1 = $NT_1->Po_Quantity;
                $Po_PcsNT_1 = $Po_PcsNT_1 + $PoPcsNT_1;

                $PoPriceNT_1 = $NT_1->PriceAvg * $NT_1->Po_Quantity;
                $Po_PriceNT_1 = $Po_PriceNT_1 + $PoPriceNT_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_1 = $NT_1->Neg_Quantity;
                $Neg_PcsNT_1 = $Neg_PcsNT_1 + $NegPcsNT_1;


                $NegPriceNT_1 = $NumberNT_1 * $NT_1->Neg_Quantity;
                $Neg_PriceNT_1 = $Neg_PriceNT_1 + $NegPriceNT_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_1 = $PCSAfterNT_1 + $PoPcsNT_1 + $NegPcsNT_1;
                $BackChange_PcsNT_1 = $BackChange_PcsNT_1 + $BackChangePcsNT_1;

                $BackChangePriceNT_1 = $PriceAfterNT_1 + $PoPriceNT_1 + $NegPriceNT_1;
                $BackChange_PriceNT_1 = $BackChange_PriceNT_1 + $BackChangePriceNT_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_1 = $NT_1->purchase_Quantity;
                $Purchase_PcsNT_1 = $Purchase_PcsNT_1 + $PurchasePcsNT_1;

                $PurchasePriceNT_1 = $NT_1->purchase_Cost;
                $Purchase_PriceNT_1 = $Purchase_PriceNT_1 + $PurchasePriceNT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_1 = $NT_1->a7f1fgbu02s_Quantity + $NT_1->a7f2fgbu10s_Quantity + $NT_1->a7f2thbu05s_Quantity + $NT_1->a7f2debu10s_Quantity + $NT_1->a7f2exbu11s_Quantity + $NT_1->a7f2twbu04s_Quantity + $NT_1->a7f2twbu07s_Quantity + $NT_1->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_1 = $ReciveTranfer_PcsNT_1 + $ReciveTranferPcsNT_1;

                $ReciveTranferPriceNT_1 = $ReciveTranferPcsNT_1 * $NT_1->PriceAvg;
                $ReciveTranfer_PriceNT_1 = $ReciveTranfer_PriceNT_1 + $ReciveTranferPriceNT_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_1 = $NT_1->returncuses_Quantity;
                $ReturnItem_PCSNT_1 = $ReturnItem_PCSNT_1 + $ReturnItemQuantityNT_1;

                $ReturnItemPriceNT_1 = $ReturnItemQuantityNT_1 * $NumberNT_1;
                $ReturnItem_PriceNT_1 = $ReturnItem_PriceNT_1 + $ReturnItemPriceNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_1 = $NT_1->purchase_Quantity + $ReciveTranferPcsNT_1 + $ReturnItemQuantityNT_1;
                $AllIn_PcsNT_1 = $AllIn_PcsNT_1 + $AllInPcsNT_1;

                $AllInPriceNT_1 = $PurchasePriceNT_1 + $ReciveTranferPriceNT_1 + $ReturnItemPriceNT_1;
                $AllIn_PriceNT_1 = $AllIn_PriceNT_1 + $AllInPriceNT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_1 = $NT_1->dc1_s_Quantity + $NT_1->dcp_s_Quantity + $NT_1->dcy_s_Quantity + $NT_1->dex_s_Quantity;
                $SendSale_PcsNT_1 = $SendSale_PcsNT_1 + $SendSalePcsNT_1;

                if ($BackChangePcsNT_1 > 0 && $AllInPcsNT_1 > 0) {
                    $SendSalePriceNT_1 = (($AllInPriceNT_1 + $BackChangePriceNT_1) / ($AllInPcsNT_1 + $BackChangePcsNT_1)) * $SendSalePcsNT_1;
                    $SendSale_PriceNT_1 = $SendSale_PriceNT_1 + $SendSalePriceNT_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_1 = $NT_1->a8f1fgbu02s_Quantity + $NT_1->a8f2fgbu10s_Quantity + $NT_1->a8f2thbu05s_Quantity + $NT_1->a8f2debu10s_Quantity + $NT_1->a8f2exbu11s_Quantity + $NT_1->a8f2twbu04s_Quantity + $NT_1->a8f2twbu07s_Quantity + $NT_1->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_1 = $ReciveTranOut_PcsNT_1 + $ReciveTranOutPcsNT_1;

                if ($AllInPcsNT_1 > 0 && $BackChangePcsNT_1 > 0) {
                    $ReciveTranOutPriceNT_1 = (($AllInPriceNT_1 + $BackChangePriceNT_1) / ($AllInPcsNT_1 + $BackChangePcsNT_1)) * $ReciveTranOutPcsNT_1;
                    $ReciveTranOut_PriceNT_1 = $ReciveTranOut_PriceNT_1 + $ReciveTranOutPriceNT_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_1 = $NT_1->returnitem_Quantity;
                $ReturnStore_PcsNT_1 = $ReturnStore_PcsNT_1 + $ReturnStorePcsNT_1;

                if ($AllInPcsNT_1 > 0 && $BackChangePcsNT_1 > 0) {
                    $ReturnStorePriceNT_1 = (($AllInPriceNT_1 + $BackChangePriceNT_1) / ($AllInPcsNT_1 + $BackChangePcsNT_1)) * $ReturnStorePcsNT_1;
                    $ReturnStore_PriceNT_1 = $ReturnStore_PriceNT_1 + $ReturnStorePriceNT_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNT_1 = $ReturnStorePcsNT_1 + $ReciveTranOutPcsNT_1 + $SendSalePcsNT_1;
                $AllOut_PcsNT_1 = $AllOut_PcsNT_1 + $AllOutPcsNT_1;

                $AllOutPriceNT_1 = $SendSale_PriceNT_1 + $ReciveTranOut_PriceNT_1 + $ReturnStore_PriceNT_1;
                $AllOut_PriceNT_1 = $AllOut_PriceNT_1 + $AllOutPriceNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNT_1 = $BackChangePcsNT_1 + $AllInPcsNT_1 + $AllOutPcsNT_1;
                $Calculate_PcsNT_1 = $Calculate_PcsNT_1 + $CalculatePcsNT_1;

                $CalculatePriceNT_1 = $BackChangePriceNT_1 + $AllInPriceNT_1 + $AllOutPriceNT_1;
                $Calculate_PriceNT_1 = $Calculate_PriceNT_1 + $CalculatePriceNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNT_1 = $NT_1->item_stock_Quantity;
                $NewCalculate_PcsNT_1 = $NewCalculate_PcsNT_1 + $NewCalculatePcsNT_1;

                $NewCalculatePriceNT_1 = $NT_1->item_stock_Amount;
                $NewCalculate_PriceNT_1 = $NewCalculate_PriceNT_1 + $NewCalculatePriceNT_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_1 = $NewCalculatePcsNT_1 - $CalculatePcsNT_1;
                $Diff_PcsNT_1 = $Diff_PcsNT_1 + $DiffPcsNT_1;

                $DiffPriceNT_1 = $NewCalculatePriceNT_1 - $CalculatePriceNT_1;
                $Diff_PriceNT_1 = $Diff_PriceNT_1 + $DiffPriceNT_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_1 = $CalculatePcsNT_1;
                $NewTotal_PcsNT_1 = $NewTotal_PcsNT_1 + $CalculatePcsNT_1;

                $NewTotalPriceNT_1 = $NewTotalPcsNT_1 * $NT_1->PriceAvg;
                $NewTotal_PriceNT_1 = $NewTotal_PriceNT_1 + $NewTotalPriceNT_1;

                $NewTotalDiffNavNT_1 = $NewTotalPriceNT_1 - $NewCalculatePriceNT_1;
                $NewTotalDiff_NavNT_1 = $NewTotalDiff_NavNT_1 + $NewTotalDiffNavNT_1;

                $NewTotalDiffCalNT_1 = $NewTotalPriceNT_1 - $CalculatePriceNT_1;
                $NewTotalDiff_CalNT_1 = $NewTotalDiff_CalNT_1 + $NewTotalDiffCalNT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_1 = $NT_1->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_1 = $a7f1fgbu02s_PcsNT_1 + $a7f1fgbu02sPcsNT_1;

                $a7f1fgbu02sPriceNT_1 = $a7f1fgbu02sPcsNT_1 * $NT_1->PriceAvg;
                $a7f1fgbu02s_PriceNT_1 = $a7f1fgbu02s_PriceNT_1 + $a7f1fgbu02sPriceNT_1;

                $a7f2fgbu10sPcsNT_1 = $NT_1->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_1 = $a7f2fgbu10s_PcsNT_1 + $a7f2fgbu10sPcsNT_1;

                $a7f2fgbu10sPriceNT_1 = $a7f2fgbu10sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2fgbu10s_PriceNT_1 = $a7f2fgbu10s_PriceNT_1 + $a7f2fgbu10sPriceNT_1;

                $a7f2thbu05sPcsNT_1 = $NT_1->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_1 = $a7f2thbu05s_PcsNT_1 + $a7f2thbu05sPcsNT_1;

                $a7f2thbu05sPriceNT_1 = $a7f2thbu05sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2thbu05s_PriceNT_1 = $a7f2thbu05s_PriceNT_1 + $a7f2thbu05sPriceNT_1;

                $a7f2debu10sPcsNT_1 = $NT_1->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_1 = $a7f2debu10s_PcsNT_1 + $a7f2debu10sPcsNT_1;

                $a7f2debu10sPriceNT_1 = $a7f2debu10sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2debu10s_PriceNT_1 = $a7f2debu10s_PriceNT_1 + $a7f2debu10sPriceNT_1;

                $a7f2exbu11sPcsNT_1 = $NT_1->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_1 = $a7f2exbu11s_PcsNT_1 + $a7f2exbu11sPcsNT_1;

                $a7f2exbu11sPriceNT_1 = $a7f2exbu11sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2exbu11s_PriceNT_1 = $a7f2exbu11s_PriceNT_1 + $a7f2exbu11sPriceNT_1;

                $a7f2twbu04sPcsNT_1 = $NT_1->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_1 = $a7f2twbu04s_PcsNT_1 + $a7f2twbu04sPcsNT_1;

                $a7f2twbu04sPriceNT_1 = $a7f2twbu04sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2twbu04s_PriceNT_1 = $a7f2twbu04s_PriceNT_1 + $a7f2twbu04sPriceNT_1;

                $a7f2twbu07sPcsNT_1 = $NT_1->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_1 = $a7f2twbu07s_PcsNT_1 + $a7f2twbu07sPcsNT_1;

                $a7f2twbu07sPriceNT_1 = $a7f2twbu07sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2twbu07s_PriceNT_1 = $a7f2twbu07s_PriceNT_1 + $a7f2twbu07sPriceNT_1;

                $a7f2cebu10sPcsNT_1 = $NT_1->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_1 = $a7f2cebu10s_PcsNT_1 + $a7f2cebu10sPcsNT_1;

                $a7f2cebu10sPriceNT_1 = $a7f2cebu10sPcsNT_1 * $NT_1->PriceAvg;
                $a7f2cebu10s_PriceNT_1 = $a7f2cebu10s_PriceNT_1 + $a7f2cebu10sPriceNT_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_1 = $NT_1->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_1 = $a8f1fgbu02s_PcsNT_1 + $a8f1fgbu02sPcsNT_1;

                $a8f1fgbu02sPriceNT_1 = $a8f1fgbu02sPcsNT_1 * $NumberNT_1;
                $a8f1fgbu02s_PriceNT_1 = $a8f1fgbu02s_PriceNT_1 + $a8f1fgbu02sPriceNT_1;

                $a8f2fgbu10sPcsNT_1 = $NT_1->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_1 = $a8f2fgbu10s_PcsNT_1 + $a8f2fgbu10sPcsNT_1;

                $a8f2fgbu10sPriceNT_1 = $a8f2fgbu10sPcsNT_1 * $NumberNT_1;
                $a8f2fgbu10s_PriceNT_1 = $a8f2fgbu10s_PriceNT_1 + $a8f2fgbu10sPriceNT_1;

                $a8f2thbu05sPcsNT_1 = $NT_1->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_1 = $a8f2thbu05s_PcsNT_1 + $a8f2thbu05sPcsNT_1;

                $a8f2thbu05sPriceNT_1 = $a8f2thbu05sPcsNT_1 * $NumberNT_1;
                $a8f2thbu05s_PriceNT_1 = $a8f2thbu05s_PriceNT_1 + $a8f2thbu05sPriceNT_1;

                $a8f2debu10sPcsNT_1 = $NT_1->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_1 = $a8f2debu10s_PcsNT_1 + $a8f2debu10sPcsNT_1;

                $a8f2debu10sPriceNT_1 = $a8f2debu10sPcsNT_1 * $NumberNT_1;
                $a8f2debu10s_PriceNT_1 = $a8f2debu10s_PriceNT_1 + $a8f2debu10sPriceNT_1;

                $a8f2exbu11sPcsNT_1 = $NT_1->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_1 = $a8f2exbu11s_PcsNT_1 + $a8f2exbu11sPcsNT_1;

                $a8f2exbu11sPriceNT_1 = $a8f2exbu11sPcsNT_1 * $NumberNT_1;
                $a8f2exbu11s_PriceNT_1 = $a8f2exbu11s_PriceNT_1 + $a8f2exbu11sPriceNT_1;

                $a8f2twbu04sPcsNT_1 = $NT_1->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_1 = $a8f2twbu04s_PcsNT_1 + $a8f2twbu04sPcsNT_1;

                $a8f2twbu04sPriceNT_1 = $a8f2twbu04sPcsNT_1 * $NumberNT_1;
                $a8f2twbu04s_PriceNT_1 = $a8f2twbu04s_PriceNT_1 + $a8f2twbu04sPriceNT_1;

                $a8f2twbu07sPcsNT_1 = $NT_1->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_1 = $a8f2twbu07s_PcsNT_1 + $a8f2twbu07sPcsNT_1;

                $a8f2twbu07sPriceNT_1 = $a8f2twbu07sPcsNT_1 * $NumberNT_1;
                $a8f2twbu07s_PriceNT_1 = $a8f2twbu07s_PriceNT_1 + $a8f2twbu07sPriceNT_1;

                $a8f2cebu10sPcsNT_1 = $NT_1->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_1 = $a8f2cebu10s_PcsNT_1 + $a8f2cebu10sPcsNT_1;

                $a8f2cebu10sPriceNT_1 = $a8f2cebu10sPcsNT_1 * $NumberNT_1;
                $a8f2cebu10s_PriceNT_1 = $a8f2cebu10s_PriceNT_1 + $a8f2cebu10sPriceNT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_1 = $NT_1->dc1_s_Quantity;
                $DC1_PcsNT_1 = $DC1_PcsNT_1 + $DC1PcsNT_1;

                $DC1PriceNT_1 = $DC1PcsNT_1 * $NumberNT_1;
                $DC1_PriceNT_1 = $DC1_PriceNT_1 + $DC1PriceNT_1;

                $DCPPcsNT_1 = $NT_1->dcp_s_Quantity;
                $DCP_PcsNT_1 = $DCP_PcsNT_1 + $DCPPcsNT_1;

                $DCPPriceNT_1 = $DCPPcsNT_1 * $NumberNT_1;
                $DCP_PriceNT_1 = $DCP_PriceNT_1 + $DCPPriceNT_1;

                $DCYPcsNT_1 = $NT_1->dcy_s_Quantity;
                $DCY_PcsNT_1 = $DCY_PcsNT_1 + $DCYPcsNT_1;

                $DCYPriceNT_1 = $DCYPcsNT_1 * $NumberNT_1;
                $DCY_PriceNT_1 = $DCY_PriceNT_1 + $DCYPriceNT_1;

                $DEXPcsNT_1 = $NT_1->dex_s_Quantity;
                $DEX_PcsNT_1 = $DEX_PcsNT_1 + $DEXPcsNT_1;

                $DEXPriceNT_1 = $DEXPcsNT_1 * $NumberNT_1;
                $DEX_PriceNT_1 = $DEX_PriceNT_1 + $DEXPriceNT_1;

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            } elseif ($NT_1->Category === "อวนกำไนลอน") {
                if ($NT_1->PcsAfter > 0 && $NT_1->PriceAfter > 0) {
                    $NumberNT_2 = ($NT_1->PriceAfter / $NT_1->PcsAfter);
                } else {
                    $NumberNT_2 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_2 = $NT_1->PcsAfter;
                $Pcs_AfterNT_2 = $Pcs_AfterNT_2 + $PCSAfterNT_2;

                $PriceAfterNT_2 = $NT_1->PriceAfter;
                $Price_AfterNT_2 = $Price_AfterNT_2 + $PriceAfterNT_2;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_2 = $NT_1->Po_Quantity;
                $Po_PcsNT_2 = $Po_PcsNT_2 + $PoPcsNT_2;

                $PoPriceNT_2 = $NT_1->PriceAvg * $NT_1->Po_Quantity;
                $Po_PriceNT_2 = $Po_PriceNT_2 + $PoPriceNT_2;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_2 = $NT_1->Neg_Quantity;
                $Neg_PcsNT_2 = $Neg_PcsNT_2 + $NegPcsNT_2;


                $NegPriceNT_2 = $NumberNT_2 * $NT_1->Neg_Quantity;
                $Neg_PriceNT_2 = $Neg_PriceNT_2 + $NegPriceNT_2;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_2 = $PCSAfterNT_2 + $PoPcsNT_2 + $NegPcsNT_2;
                $BackChange_PcsNT_2 = $BackChange_PcsNT_2 + $BackChangePcsNT_2;

                $BackChangePriceNT_2 = $PriceAfterNT_2 + $PoPriceNT_2 + $NegPriceNT_2;
                $BackChange_PriceNT_2 = $BackChange_PriceNT_2 + $BackChangePriceNT_2;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_2 = $NT_1->purchase_Quantity;
                $Purchase_PcsNT_2 = $Purchase_PcsNT_2 + $PurchasePcsNT_2;

                $PurchasePriceNT_2 = $NT_1->purchase_Cost;
                $Purchase_PriceNT_2 = $Purchase_PriceNT_2 + $PurchasePriceNT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_2 = $NT_1->a7f1fgbu02s_Quantity + $NT_1->a7f2fgbu10s_Quantity + $NT_1->a7f2thbu05s_Quantity + $NT_1->a7f2debu10s_Quantity + $NT_1->a7f2exbu11s_Quantity + $NT_1->a7f2twbu04s_Quantity + $NT_1->a7f2twbu07s_Quantity + $NT_1->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_2 = $ReciveTranfer_PcsNT_2 + $ReciveTranferPcsNT_2;

                $ReciveTranferPriceNT_2 = $ReciveTranferPcsNT_2 * $NT_1->PriceAvg;
                $ReciveTranfer_PriceNT_2 = $ReciveTranfer_PriceNT_2 + $ReciveTranferPriceNT_2;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_2 = $NT_1->returncuses_Quantity;
                $ReturnItem_PCSNT_2 = $ReturnItem_PCSNT_2 + $ReturnItemQuantityNT_2;

                $ReturnItemPriceNT_2 = $ReturnItemQuantityNT_2 * $NumberNT_2;
                $ReturnItem_PriceNT_2 = $ReturnItem_PriceNT_2 + $ReturnItemPriceNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_2 = $NT_1->purchase_Quantity + $ReciveTranferPcsNT_2 + $ReturnItemQuantityNT_2;
                $AllIn_PcsNT_2 = $AllIn_PcsNT_2 + $AllInPcsNT_2;

                $AllInPriceNT_2 = $PurchasePriceNT_2 + $ReciveTranferPriceNT_2 + $ReturnItemPriceNT_2;
                $AllIn_PriceNT_2 = $AllIn_PriceNT_2 + $AllInPriceNT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_2 = $NT_1->dc1_s_Quantity + $NT_1->dcp_s_Quantity + $NT_1->dcy_s_Quantity + $NT_1->dex_s_Quantity;
                $SendSale_PcsNT_2 = $SendSale_PcsNT_2 + $SendSalePcsNT_2;

                if ($BackChangePcsNT_2 > 0 && $AllInPcsNT_2 > 0) {
                    $SendSalePriceNT_2 = (($AllInPriceNT_2 + $BackChangePriceNT_2) / ($AllInPcsNT_2 + $BackChangePcsNT_2)) * $SendSalePcsNT_2;
                    $SendSale_PriceNT_2 = $SendSale_PriceNT_2 + $SendSalePriceNT_2;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_2 = $NT_1->a8f1fgbu02s_Quantity + $NT_1->a8f2fgbu10s_Quantity + $NT_1->a8f2thbu05s_Quantity + $NT_1->a8f2debu10s_Quantity + $NT_1->a8f2exbu11s_Quantity + $NT_1->a8f2twbu04s_Quantity + $NT_1->a8f2twbu07s_Quantity + $NT_1->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_2 = $ReciveTranOut_PcsNT_2 + $ReciveTranOutPcsNT_2;

                if ($AllInPcsNT_2 > 0 && $BackChangePcsNT_2 > 0) {
                    $ReciveTranOutPriceNT_2 = (($AllInPriceNT_2 + $BackChangePriceNT_2) / ($AllInPcsNT_2 + $BackChangePcsNT_2)) * $ReciveTranOutPcsNT_2;
                    $ReciveTranOut_PriceNT_2 = $ReciveTranOut_PriceNT_2 + $ReciveTranOutPriceNT_2;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_2 = $NT_1->returnitem_Quantity;
                $ReturnStore_PcsNT_2 = $ReturnStore_PcsNT_2 + $ReturnStorePcsNT_2;

                if ($AllInPcsNT_2 > 0 && $BackChangePcsNT_2 > 0) {
                    $ReturnStorePriceNT_2 = (($AllInPriceNT_2 + $BackChangePriceNT_2) / ($AllInPcsNT_2 + $BackChangePcsNT_2)) * $ReturnStorePcsNT_2;
                    $ReturnStore_PriceNT_2 = $ReturnStore_PriceNT_2 + $ReturnStorePriceNT_2;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNT_2 = $ReturnStorePcsNT_2 + $ReciveTranOutPcsNT_2 + $SendSalePcsNT_2;
                $AllOut_PcsNT_2 = $AllOut_PcsNT_2 + $AllOutPcsNT_2;

                $AllOutPriceNT_2 = $SendSale_PriceNT_2 + $ReciveTranOut_PriceNT_2 + $ReturnStore_PriceNT_2;
                $AllOut_PriceNT_2 = $AllOut_PriceNT_2 + $AllOutPriceNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNT_2 = $BackChangePcsNT_2 + $AllInPcsNT_2 + $AllOutPcsNT_2;
                $Calculate_PcsNT_2 = $Calculate_PcsNT_2 + $CalculatePcsNT_2;

                $CalculatePriceNT_2 = $BackChangePriceNT_2 + $AllInPriceNT_2 + $AllOutPriceNT_2;
                $Calculate_PriceNT_2 = $Calculate_PriceNT_2 + $CalculatePriceNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNT_2 = $NT_1->item_stock_Quantity;
                $NewCalculate_PcsNT_2 = $NewCalculate_PcsNT_2 + $NewCalculatePcsNT_2;

                $NewCalculatePriceNT_2 = $NT_1->item_stock_Amount;
                $NewCalculate_PriceNT_2 = $NewCalculate_PriceNT_2 + $NewCalculatePriceNT_2;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_2 = $NewCalculatePcsNT_2 - $CalculatePcsNT_2;
                $Diff_PcsNT_2 = $Diff_PcsNT_2 + $DiffPcsNT_2;

                $DiffPriceNT_2 = $NewCalculatePriceNT_2 - $CalculatePriceNT_2;
                $Diff_PriceNT_2 = $Diff_PriceNT_2 + $DiffPriceNT_2;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_2 = $CalculatePcsNT_2;
                $NewTotal_PcsNT_2 = $NewTotal_PcsNT_2 + $CalculatePcsNT_2;

                $NewTotalPriceNT_2 = $NewTotalPcsNT_2 * $NT_1->PriceAvg;
                $NewTotal_PriceNT_2 = $NewTotal_PriceNT_2 + $NewTotalPriceNT_2;

                $NewTotalDiffNavNT_2 = $NewTotalPriceNT_2 - $NewCalculatePriceNT_2;
                $NewTotalDiff_NavNT_2 = $NewTotalDiff_NavNT_2 + $NewTotalDiffNavNT_2;

                $NewTotalDiffCalNT_2 = $NewTotalPriceNT_2 - $CalculatePriceNT_2;
                $NewTotalDiff_CalNT_2 = $NewTotalDiff_CalNT_2 + $NewTotalDiffCalNT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_2 = $NT_1->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_2 = $a7f1fgbu02s_PcsNT_2 + $a7f1fgbu02sPcsNT_2;

                $a7f1fgbu02sPriceNT_2 = $a7f1fgbu02sPcsNT_2 * $NT_1->PriceAvg;
                $a7f1fgbu02s_PriceNT_2 = $a7f1fgbu02s_PriceNT_2 + $a7f1fgbu02sPriceNT_2;

                $a7f2fgbu10sPcsNT_2 = $NT_1->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_2 = $a7f2fgbu10s_PcsNT_2 + $a7f2fgbu10sPcsNT_2;

                $a7f2fgbu10sPriceNT_2 = $a7f2fgbu10sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2fgbu10s_PriceNT_2 = $a7f2fgbu10s_PriceNT_2 + $a7f2fgbu10sPriceNT_2;

                $a7f2thbu05sPcsNT_2 = $NT_1->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_2 = $a7f2thbu05s_PcsNT_2 + $a7f2thbu05sPcsNT_2;

                $a7f2thbu05sPriceNT_2 = $a7f2thbu05sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2thbu05s_PriceNT_2 = $a7f2thbu05s_PriceNT_2 + $a7f2thbu05sPriceNT_2;

                $a7f2debu10sPcsNT_2 = $NT_1->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_2 = $a7f2debu10s_PcsNT_2 + $a7f2debu10sPcsNT_2;

                $a7f2debu10sPriceNT_2 = $a7f2debu10sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2debu10s_PriceNT_2 = $a7f2debu10s_PriceNT_2 + $a7f2debu10sPriceNT_2;

                $a7f2exbu11sPcsNT_2 = $NT_1->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_2 = $a7f2exbu11s_PcsNT_2 + $a7f2exbu11sPcsNT_2;

                $a7f2exbu11sPriceNT_2 = $a7f2exbu11sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2exbu11s_PriceNT_2 = $a7f2exbu11s_PriceNT_2 + $a7f2exbu11sPriceNT_2;

                $a7f2twbu04sPcsNT_2 = $NT_1->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_2 = $a7f2twbu04s_PcsNT_2 + $a7f2twbu04sPcsNT_2;

                $a7f2twbu04sPriceNT_2 = $a7f2twbu04sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2twbu04s_PriceNT_2 = $a7f2twbu04s_PriceNT_2 + $a7f2twbu04sPriceNT_2;

                $a7f2twbu07sPcsNT_2 = $NT_1->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_2 = $a7f2twbu07s_PcsNT_2 + $a7f2twbu07sPcsNT_2;

                $a7f2twbu07sPriceNT_2 = $a7f2twbu07sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2twbu07s_PriceNT_2 = $a7f2twbu07s_PriceNT_2 + $a7f2twbu07sPriceNT_2;

                $a7f2cebu10sPcsNT_2 = $NT_1->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_2 = $a7f2cebu10s_PcsNT_2 + $a7f2cebu10sPcsNT_2;

                $a7f2cebu10sPriceNT_2 = $a7f2cebu10sPcsNT_2 * $NT_1->PriceAvg;
                $a7f2cebu10s_PriceNT_2 = $a7f2cebu10s_PriceNT_2 + $a7f2cebu10sPriceNT_2;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_2 = $NT_1->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_2 = $a8f1fgbu02s_PcsNT_2 + $a8f1fgbu02sPcsNT_2;

                $a8f1fgbu02sPriceNT_2 = $a8f1fgbu02sPcsNT_2 * $NumberNT_2;
                $a8f1fgbu02s_PriceNT_2 = $a8f1fgbu02s_PriceNT_2 + $a8f1fgbu02sPriceNT_2;

                $a8f2fgbu10sPcsNT_2 = $NT_1->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_2 = $a8f2fgbu10s_PcsNT_2 + $a8f2fgbu10sPcsNT_2;

                $a8f2fgbu10sPriceNT_2 = $a8f2fgbu10sPcsNT_2 * $NumberNT_2;
                $a8f2fgbu10s_PriceNT_2 = $a8f2fgbu10s_PriceNT_2 + $a8f2fgbu10sPriceNT_2;

                $a8f2thbu05sPcsNT_2 = $NT_1->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_2 = $a8f2thbu05s_PcsNT_2 + $a8f2thbu05sPcsNT_2;

                $a8f2thbu05sPriceNT_2 = $a8f2thbu05sPcsNT_2 * $NumberNT_2;
                $a8f2thbu05s_PriceNT_2 = $a8f2thbu05s_PriceNT_2 + $a8f2thbu05sPriceNT_2;

                $a8f2debu10sPcsNT_2 = $NT_1->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_2 = $a8f2debu10s_PcsNT_2 + $a8f2debu10sPcsNT_2;

                $a8f2debu10sPriceNT_2 = $a8f2debu10sPcsNT_2 * $NumberNT_2;
                $a8f2debu10s_PriceNT_2 = $a8f2debu10s_PriceNT_2 + $a8f2debu10sPriceNT_2;

                $a8f2exbu11sPcsNT_2 = $NT_1->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_2 = $a8f2exbu11s_PcsNT_2 + $a8f2exbu11sPcsNT_2;

                $a8f2exbu11sPriceNT_2 = $a8f2exbu11sPcsNT_2 * $NumberNT_2;
                $a8f2exbu11s_PriceNT_2 = $a8f2exbu11s_PriceNT_2 + $a8f2exbu11sPriceNT_2;

                $a8f2twbu04sPcsNT_2 = $NT_1->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_2 = $a8f2twbu04s_PcsNT_2 + $a8f2twbu04sPcsNT_2;

                $a8f2twbu04sPriceNT_2 = $a8f2twbu04sPcsNT_2 * $NumberNT_2;
                $a8f2twbu04s_PriceNT_2 = $a8f2twbu04s_PriceNT_2 + $a8f2twbu04sPriceNT_2;

                $a8f2twbu07sPcsNT_2 = $NT_1->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_2 = $a8f2twbu07s_PcsNT_2 + $a8f2twbu07sPcsNT_2;

                $a8f2twbu07sPriceNT_2 = $a8f2twbu07sPcsNT_2 * $NumberNT_2;
                $a8f2twbu07s_PriceNT_2 = $a8f2twbu07s_PriceNT_2 + $a8f2twbu07sPriceNT_2;

                $a8f2cebu10sPcsNT_2 = $NT_1->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_2 = $a8f2cebu10s_PcsNT_2 + $a8f2cebu10sPcsNT_2;

                $a8f2cebu10sPriceNT_2 = $a8f2cebu10sPcsNT_2 * $NumberNT_2;
                $a8f2cebu10s_PriceNT_2 = $a8f2cebu10s_PriceNT_2 + $a8f2cebu10sPriceNT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_2 = $NT_1->dc1_s_Quantity;
                $DC1_PcsNT_2 = $DC1_PcsNT_2 + $DC1PcsNT_2;

                $DC1PriceNT_2 = $DC1PcsNT_2 * $NumberNT_2;
                $DC1_PriceNT_2 = $DC1_PriceNT_2 + $DC1PriceNT_2;

                $DCPPcsNT_2 = $NT_1->dcp_s_Quantity;
                $DCP_PcsNT_2 = $DCP_PcsNT_2 + $DCPPcsNT_2;

                $DCPPriceNT_2 = $DCPPcsNT_2 * $NumberNT_2;
                $DCP_PriceNT_2 = $DCP_PriceNT_2 + $DCPPriceNT_2;

                $DCYPcsNT_2 = $NT_1->dcy_s_Quantity;
                $DCY_PcsNT_2 = $DCY_PcsNT_2 + $DCYPcsNT_2;

                $DCYPriceNT_2 = $DCYPcsNT_2 * $NumberNT_2;
                $DCY_PriceNT_2 = $DCY_PriceNT_2 + $DCYPriceNT_2;

                $DEXPcsNT_2 = $NT_1->dex_s_Quantity;
                $DEX_PcsNT_2 = $DEX_PcsNT_2 + $DEXPcsNT_2;

                $DEXPriceNT_2 = $DEXPcsNT_2 * $NumberNT_2;
                $DEX_PriceNT_2 = $DEX_PriceNT_2 + $DEXPriceNT_2;

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            } elseif ($NT_1->Category === "อวนมัลติโมโน") {
                if ($NT_1->PcsAfter > 0 && $NT_1->PriceAfter > 0) {
                    $NumberNT_3 = ($NT_1->PriceAfter / $NT_1->PcsAfter);
                } else {
                    $NumberNT_3 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_3 = $NT_1->PcsAfter;
                $Pcs_AfterNT_3 = $Pcs_AfterNT_3 + $PCSAfterNT_3;

                $PriceAfterNT_3 = $NT_1->PriceAfter;
                $Price_AfterNT_3 = $Price_AfterNT_3 + $PriceAfterNT_3;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_3 = $NT_1->Po_Quantity;
                $Po_PcsNT_3 = $Po_PcsNT_3 + $PoPcsNT_3;

                $PoPriceNT_3 = $NT_1->PriceAvg * $NT_1->Po_Quantity;
                $Po_PriceNT_3 = $Po_PriceNT_3 + $PoPriceNT_3;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_3 = $NT_1->Neg_Quantity;
                $Neg_PcsNT_3 = $Neg_PcsNT_3 + $NegPcsNT_3;


                $NegPriceNT_3 = $NumberNT_3 * $NT_1->Neg_Quantity;
                $Neg_PriceNT_3 = $Neg_PriceNT_3 + $NegPriceNT_3;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_3 = $PCSAfterNT_3 + $PoPcsNT_3 + $NegPcsNT_3;
                $BackChange_PcsNT_3 = $BackChange_PcsNT_3 + $BackChangePcsNT_3;

                $BackChangePriceNT_3 = $PriceAfterNT_3 + $PoPriceNT_3 + $NegPriceNT_3;
                $BackChange_PriceNT_3 = $BackChange_PriceNT_3 + $BackChangePriceNT_3;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_3 = $NT_1->purchase_Quantity;
                $Purchase_PcsNT_3 = $Purchase_PcsNT_3 + $PurchasePcsNT_3;

                $PurchasePriceNT_3 = $NT_1->purchase_Cost;
                $Purchase_PriceNT_3 = $Purchase_PriceNT_3 + $PurchasePriceNT_3;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_3 = $NT_1->a7f1fgbu02s_Quantity + $NT_1->a7f2fgbu10s_Quantity + $NT_1->a7f2thbu05s_Quantity + $NT_1->a7f2debu10s_Quantity + $NT_1->a7f2exbu11s_Quantity + $NT_1->a7f2twbu04s_Quantity + $NT_1->a7f2twbu07s_Quantity + $NT_1->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_3 = $ReciveTranfer_PcsNT_3 + $ReciveTranferPcsNT_3;

                $ReciveTranferPriceNT_3 = $ReciveTranferPcsNT_3 * $NT_1->PriceAvg;
                $ReciveTranfer_PriceNT_3 = $ReciveTranfer_PriceNT_3 + $ReciveTranferPriceNT_3;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_3 = $NT_1->returncuses_Quantity;
                $ReturnItem_PCSNT_3 = $ReturnItem_PCSNT_3 + $ReturnItemQuantityNT_3;

                $ReturnItemPriceNT_3 = $ReturnItemQuantityNT_3 * $NumberNT_3;
                $ReturnItem_PriceNT_3 = $ReturnItem_PriceNT_3 + $ReturnItemPriceNT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_3 = $NT_1->purchase_Quantity + $ReciveTranferPcsNT_3 + $ReturnItemQuantityNT_3;
                $AllIn_PcsNT_3 = $AllIn_PcsNT_3 + $AllInPcsNT_3;

                $AllInPriceNT_3 = $PurchasePriceNT_3 + $ReciveTranferPriceNT_3 + $ReturnItemPriceNT_3;
                $AllIn_PriceNT_3 = $AllIn_PriceNT_3 + $AllInPriceNT_3;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_3 = $NT_1->dc1_s_Quantity + $NT_1->dcp_s_Quantity + $NT_1->dcy_s_Quantity + $NT_1->dex_s_Quantity;
                $SendSale_PcsNT_3 = $SendSale_PcsNT_3 + $SendSalePcsNT_3;

                if ($BackChangePcsNT_3 > 0 && $AllInPcsNT_3 > 0) {
                    $SendSalePriceNT_3 = (($AllInPriceNT_3 + $BackChangePriceNT_3) / ($AllInPcsNT_3 + $BackChangePcsNT_3)) * $SendSalePcsNT_3;
                    $SendSale_PriceNT_3 = $SendSale_PriceNT_3 + $SendSalePriceNT_3;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_3 = $NT_1->a8f1fgbu02s_Quantity + $NT_1->a8f2fgbu10s_Quantity + $NT_1->a8f2thbu05s_Quantity + $NT_1->a8f2debu10s_Quantity + $NT_1->a8f2exbu11s_Quantity + $NT_1->a8f2twbu04s_Quantity + $NT_1->a8f2twbu07s_Quantity + $NT_1->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_3 = $ReciveTranOut_PcsNT_3 + $ReciveTranOutPcsNT_3;

                if ($AllInPcsNT_3 > 0 && $BackChangePcsNT_3 > 0) {
                    $ReciveTranOutPriceNT_3 = (($AllInPriceNT_3 + $BackChangePriceNT_3) / ($AllInPcsNT_3 + $BackChangePcsNT_3)) * $ReciveTranOutPcsNT_3;
                    $ReciveTranOut_PriceNT_3 = $ReciveTranOut_PriceNT_3 + $ReciveTranOutPriceNT_3;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_3 = $NT_1->returnitem_Quantity;
                $ReturnStore_PcsNT_3 = $ReturnStore_PcsNT_3 + $ReturnStorePcsNT_3;

                if ($AllInPcsNT_3 > 0 && $BackChangePcsNT_3 > 0) {
                    $ReturnStorePriceNT_3 = (($AllInPriceNT_3 + $BackChangePriceNT_3) / ($AllInPcsNT_3 + $BackChangePcsNT_3)) * $ReturnStorePcsNT_3;
                    $ReturnStore_PriceNT_3 = $ReturnStore_PriceNT_3 + $ReturnStorePriceNT_3;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNT_3 = $ReturnStorePcsNT_3 + $ReciveTranOutPcsNT_3 + $SendSalePcsNT_3;
                $AllOut_PcsNT_3 = $AllOut_PcsNT_3 + $AllOutPcsNT_3;

                $AllOutPriceNT_3 = $SendSale_PriceNT_3 + $ReciveTranOut_PriceNT_3 + $ReturnStore_PriceNT_3;
                $AllOut_PriceNT_3 = $AllOut_PriceNT_3 + $AllOutPriceNT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNT_3 = $BackChangePcsNT_3 + $AllInPcsNT_3 + $AllOutPcsNT_3;
                $Calculate_PcsNT_3 = $Calculate_PcsNT_3 + $CalculatePcsNT_3;

                $CalculatePriceNT_3 = $BackChangePriceNT_3 + $AllInPriceNT_3 + $AllOutPriceNT_3;
                $Calculate_PriceNT_3 = $Calculate_PriceNT_3 + $CalculatePriceNT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNT_3 = $NT_1->item_stock_Quantity;
                $NewCalculate_PcsNT_3 = $NewCalculate_PcsNT_3 + $NewCalculatePcsNT_3;

                $NewCalculatePriceNT_3 = $NT_1->item_stock_Amount;
                $NewCalculate_PriceNT_3 = $NewCalculate_PriceNT_3 + $NewCalculatePriceNT_3;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_3 = $NewCalculatePcsNT_3 - $CalculatePcsNT_3;
                $Diff_PcsNT_3 = $Diff_PcsNT_3 + $DiffPcsNT_3;

                $DiffPriceNT_3 = $NewCalculatePriceNT_3 - $CalculatePriceNT_3;
                $Diff_PriceNT_3 = $Diff_PriceNT_3 + $DiffPriceNT_3;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_3 = $CalculatePcsNT_3;
                $NewTotal_PcsNT_3 = $NewTotal_PcsNT_3 + $CalculatePcsNT_3;

                $NewTotalPriceNT_3 = $NewTotalPcsNT_3 * $NT_1->PriceAvg;
                $NewTotal_PriceNT_3 = $NewTotal_PriceNT_3 + $NewTotalPriceNT_3;

                $NewTotalDiffNavNT_3 = $NewTotalPriceNT_3 - $NewCalculatePriceNT_3;
                $NewTotalDiff_NavNT_3 = $NewTotalDiff_NavNT_3 + $NewTotalDiffNavNT_3;

                $NewTotalDiffCalNT_3 = $NewTotalPriceNT_3 - $CalculatePriceNT_3;
                $NewTotalDiff_CalNT_3 = $NewTotalDiff_CalNT_3 + $NewTotalDiffCalNT_3;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_3 = $NT_1->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_3 = $a7f1fgbu02s_PcsNT_3 + $a7f1fgbu02sPcsNT_3;

                $a7f1fgbu02sPriceNT_3 = $a7f1fgbu02sPcsNT_3 * $NT_1->PriceAvg;
                $a7f1fgbu02s_PriceNT_3 = $a7f1fgbu02s_PriceNT_3 + $a7f1fgbu02sPriceNT_3;

                $a7f2fgbu10sPcsNT_3 = $NT_1->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_3 = $a7f2fgbu10s_PcsNT_3 + $a7f2fgbu10sPcsNT_3;

                $a7f2fgbu10sPriceNT_3 = $a7f2fgbu10sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2fgbu10s_PriceNT_3 = $a7f2fgbu10s_PriceNT_3 + $a7f2fgbu10sPriceNT_3;

                $a7f2thbu05sPcsNT_3 = $NT_1->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_3 = $a7f2thbu05s_PcsNT_3 + $a7f2thbu05sPcsNT_3;

                $a7f2thbu05sPriceNT_3 = $a7f2thbu05sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2thbu05s_PriceNT_3 = $a7f2thbu05s_PriceNT_3 + $a7f2thbu05sPriceNT_3;

                $a7f2debu10sPcsNT_3 = $NT_1->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_3 = $a7f2debu10s_PcsNT_3 + $a7f2debu10sPcsNT_3;

                $a7f2debu10sPriceNT_3 = $a7f2debu10sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2debu10s_PriceNT_3 = $a7f2debu10s_PriceNT_3 + $a7f2debu10sPriceNT_3;

                $a7f2exbu11sPcsNT_3 = $NT_1->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_3 = $a7f2exbu11s_PcsNT_3 + $a7f2exbu11sPcsNT_3;

                $a7f2exbu11sPriceNT_3 = $a7f2exbu11sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2exbu11s_PriceNT_3 = $a7f2exbu11s_PriceNT_3 + $a7f2exbu11sPriceNT_3;

                $a7f2twbu04sPcsNT_3 = $NT_1->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_3 = $a7f2twbu04s_PcsNT_3 + $a7f2twbu04sPcsNT_3;

                $a7f2twbu04sPriceNT_3 = $a7f2twbu04sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2twbu04s_PriceNT_3 = $a7f2twbu04s_PriceNT_3 + $a7f2twbu04sPriceNT_3;

                $a7f2twbu07sPcsNT_3 = $NT_1->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_3 = $a7f2twbu07s_PcsNT_3 + $a7f2twbu07sPcsNT_3;

                $a7f2twbu07sPriceNT_3 = $a7f2twbu07sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2twbu07s_PriceNT_3 = $a7f2twbu07s_PriceNT_3 + $a7f2twbu07sPriceNT_3;

                $a7f2cebu10sPcsNT_3 = $NT_1->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_3 = $a7f2cebu10s_PcsNT_3 + $a7f2cebu10sPcsNT_3;

                $a7f2cebu10sPriceNT_3 = $a7f2cebu10sPcsNT_3 * $NT_1->PriceAvg;
                $a7f2cebu10s_PriceNT_3 = $a7f2cebu10s_PriceNT_3 + $a7f2cebu10sPriceNT_3;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_3 = $NT_1->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_3 = $a8f1fgbu02s_PcsNT_3 + $a8f1fgbu02sPcsNT_3;

                $a8f1fgbu02sPriceNT_3 = $a8f1fgbu02sPcsNT_3 * $NumberNT_3;
                $a8f1fgbu02s_PriceNT_3 = $a8f1fgbu02s_PriceNT_3 + $a8f1fgbu02sPriceNT_3;

                $a8f2fgbu10sPcsNT_3 = $NT_1->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_3 = $a8f2fgbu10s_PcsNT_3 + $a8f2fgbu10sPcsNT_3;

                $a8f2fgbu10sPriceNT_3 = $a8f2fgbu10sPcsNT_3 * $NumberNT_3;
                $a8f2fgbu10s_PriceNT_3 = $a8f2fgbu10s_PriceNT_3 + $a8f2fgbu10sPriceNT_3;

                $a8f2thbu05sPcsNT_3 = $NT_1->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_3 = $a8f2thbu05s_PcsNT_3 + $a8f2thbu05sPcsNT_3;

                $a8f2thbu05sPriceNT_3 = $a8f2thbu05sPcsNT_3 * $NumberNT_3;
                $a8f2thbu05s_PriceNT_3 = $a8f2thbu05s_PriceNT_3 + $a8f2thbu05sPriceNT_3;

                $a8f2debu10sPcsNT_3 = $NT_1->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_3 = $a8f2debu10s_PcsNT_3 + $a8f2debu10sPcsNT_3;

                $a8f2debu10sPriceNT_3 = $a8f2debu10sPcsNT_3 * $NumberNT_3;
                $a8f2debu10s_PriceNT_3 = $a8f2debu10s_PriceNT_3 + $a8f2debu10sPriceNT_3;

                $a8f2exbu11sPcsNT_3 = $NT_1->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_3 = $a8f2exbu11s_PcsNT_3 + $a8f2exbu11sPcsNT_3;

                $a8f2exbu11sPriceNT_3 = $a8f2exbu11sPcsNT_3 * $NumberNT_3;
                $a8f2exbu11s_PriceNT_3 = $a8f2exbu11s_PriceNT_3 + $a8f2exbu11sPriceNT_3;

                $a8f2twbu04sPcsNT_3 = $NT_1->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_3 = $a8f2twbu04s_PcsNT_3 + $a8f2twbu04sPcsNT_3;

                $a8f2twbu04sPriceNT_3 = $a8f2twbu04sPcsNT_3 * $NumberNT_3;
                $a8f2twbu04s_PriceNT_3 = $a8f2twbu04s_PriceNT_3 + $a8f2twbu04sPriceNT_3;

                $a8f2twbu07sPcsNT_3 = $NT_1->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_3 = $a8f2twbu07s_PcsNT_3 + $a8f2twbu07sPcsNT_3;

                $a8f2twbu07sPriceNT_3 = $a8f2twbu07sPcsNT_3 * $NumberNT_3;
                $a8f2twbu07s_PriceNT_3 = $a8f2twbu07s_PriceNT_3 + $a8f2twbu07sPriceNT_3;

                $a8f2cebu10sPcsNT_3 = $NT_1->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_3 = $a8f2cebu10s_PcsNT_3 + $a8f2cebu10sPcsNT_3;

                $a8f2cebu10sPriceNT_3 = $a8f2cebu10sPcsNT_3 * $NumberNT_3;
                $a8f2cebu10s_PriceNT_3 = $a8f2cebu10s_PriceNT_3 + $a8f2cebu10sPriceNT_3;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_3 = $NT_1->dc1_s_Quantity;
                $DC1_PcsNT_3 = $DC1_PcsNT_3 + $DC1PcsNT_3;

                $DC1PriceNT_3 = $DC1PcsNT_3 * $NumberNT_3;
                $DC1_PriceNT_3 = $DC1_PriceNT_3 + $DC1PriceNT_3;

                $DCPPcsNT_3 = $NT_1->dcp_s_Quantity;
                $DCP_PcsNT_3 = $DCP_PcsNT_3 + $DCPPcsNT_3;

                $DCPPriceNT_3 = $DCPPcsNT_3 * $NumberNT_3;
                $DCP_PriceNT_3 = $DCP_PriceNT_3 + $DCPPriceNT_3;

                $DCYPcsNT_3 = $NT_1->dcy_s_Quantity;
                $DCY_PcsNT_3 = $DCY_PcsNT_3 + $DCYPcsNT_3;

                $DCYPriceNT_3 = $DCYPcsNT_3 * $NumberNT_3;
                $DCY_PriceNT_3 = $DCY_PriceNT_3 + $DCYPriceNT_3;

                $DEXPcsNT_3 = $NT_1->dex_s_Quantity;
                $DEX_PcsNT_3 = $DEX_PcsNT_3 + $DEXPcsNT_3;

                $DEXPriceNT_3 = $DEXPcsNT_3 * $NumberNT_3;
                $DEX_PriceNT_3 = $DEX_PriceNT_3 + $DEXPriceNT_3;

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            } elseif ($NT_1->Category === "อวนโพลี") {
                if ($NT_1->PcsAfter > 0 && $NT_1->PriceAfter > 0) {
                    $NumberNT_4 = ($NT_1->PriceAfter / $NT_1->PcsAfter);
                } else {
                    $NumberNT_4 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_4 = $NT_1->PcsAfter;
                $Pcs_AfterNT_4 = $Pcs_AfterNT_4 + $PCSAfterNT_4;

                $PriceAfterNT_4 = $NT_1->PriceAfter;
                $Price_AfterNT_4 = $Price_AfterNT_4 + $PriceAfterNT_4;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_4 = $NT_1->Po_Quantity;
                $Po_PcsNT_4 = $Po_PcsNT_4 + $PoPcsNT_4;

                $PoPriceNT_4 = $NT_1->PriceAvg * $NT_1->Po_Quantity;
                $Po_PriceNT_4 = $Po_PriceNT_4 + $PoPriceNT_4;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_4 = $NT_1->Neg_Quantity;
                $Neg_PcsNT_4 = $Neg_PcsNT_4 + $NegPcsNT_4;


                $NegPriceNT_4 = $NumberNT_4 * $NT_1->Neg_Quantity;
                $Neg_PriceNT_4 = $Neg_PriceNT_4 + $NegPriceNT_4;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_4 = $PCSAfterNT_4 + $PoPcsNT_4 + $NegPcsNT_4;
                $BackChange_PcsNT_4 = $BackChange_PcsNT_4 + $BackChangePcsNT_4;

                $BackChangePriceNT_4 = $PriceAfterNT_4 + $PoPriceNT_4 + $NegPriceNT_4;
                $BackChange_PriceNT_4 = $BackChange_PriceNT_4 + $BackChangePriceNT_4;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_4 = $NT_1->purchase_Quantity;
                $Purchase_PcsNT_4 = $Purchase_PcsNT_4 + $PurchasePcsNT_4;

                $PurchasePriceNT_4 = $NT_1->purchase_Cost;
                $Purchase_PriceNT_4 = $Purchase_PriceNT_4 + $PurchasePriceNT_4;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_4 = $NT_1->a7f1fgbu02s_Quantity + $NT_1->a7f2fgbu10s_Quantity + $NT_1->a7f2thbu05s_Quantity + $NT_1->a7f2debu10s_Quantity + $NT_1->a7f2exbu11s_Quantity + $NT_1->a7f2twbu04s_Quantity + $NT_1->a7f2twbu07s_Quantity + $NT_1->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_4 = $ReciveTranfer_PcsNT_4 + $ReciveTranferPcsNT_4;

                $ReciveTranferPriceNT_4 = $ReciveTranferPcsNT_4 * $NT_1->PriceAvg;
                $ReciveTranfer_PriceNT_4 = $ReciveTranfer_PriceNT_4 + $ReciveTranferPriceNT_4;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_4 = $NT_1->returncuses_Quantity;
                $ReturnItem_PCSNT_4 = $ReturnItem_PCSNT_4 + $ReturnItemQuantityNT_4;

                $ReturnItemPriceNT_4 = $ReturnItemQuantityNT_4 * $NumberNT_4;
                $ReturnItem_PriceNT_4 = $ReturnItem_PriceNT_4 + $ReturnItemPriceNT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_4 = $NT_1->purchase_Quantity + $ReciveTranferPcsNT_4 + $ReturnItemQuantityNT_4;
                $AllIn_PcsNT_4 = $AllIn_PcsNT_4 + $AllInPcsNT_4;

                $AllInPriceNT_4 = $PurchasePriceNT_4 + $ReciveTranferPriceNT_4 + $ReturnItemPriceNT_4;
                $AllIn_PriceNT_4 = $AllIn_PriceNT_4 + $AllInPriceNT_4;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_4 = $NT_1->dc1_s_Quantity + $NT_1->dcp_s_Quantity + $NT_1->dcy_s_Quantity + $NT_1->dex_s_Quantity;
                $SendSale_PcsNT_4 = $SendSale_PcsNT_4 + $SendSalePcsNT_4;

                if ($BackChangePcsNT_4 > 0 && $AllInPcsNT_4 > 0) {
                    $SendSalePriceNT_4 = (($AllInPriceNT_4 + $BackChangePriceNT_4) / ($AllInPcsNT_4 + $BackChangePcsNT_4)) * $SendSalePcsNT_4;
                    $SendSale_PriceNT_4 = $SendSale_PriceNT_4 + $SendSalePriceNT_4;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_4 = $NT_1->a8f1fgbu02s_Quantity + $NT_1->a8f2fgbu10s_Quantity + $NT_1->a8f2thbu05s_Quantity + $NT_1->a8f2debu10s_Quantity + $NT_1->a8f2exbu11s_Quantity + $NT_1->a8f2twbu04s_Quantity + $NT_1->a8f2twbu07s_Quantity + $NT_1->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_4 = $ReciveTranOut_PcsNT_4 + $ReciveTranOutPcsNT_4;

                if ($AllInPcsNT_4 > 0 && $BackChangePcsNT_4 > 0) {
                    $ReciveTranOutPriceNT_4 = (($AllInPriceNT_4 + $BackChangePriceNT_4) / ($AllInPcsNT_4 + $BackChangePcsNT_4)) * $ReciveTranOutPcsNT_4;
                    $ReciveTranOut_PriceNT_4 = $ReciveTranOut_PriceNT_4 + $ReciveTranOutPriceNT_4;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_4 = $NT_1->returnitem_Quantity;
                $ReturnStore_PcsNT_4 = $ReturnStore_PcsNT_4 + $ReturnStorePcsNT_4;

                if ($AllInPcsNT_4 > 0 && $BackChangePcsNT_4 > 0) {
                    $ReturnStorePriceNT_4 = (($AllInPriceNT_4 + $BackChangePriceNT_4) / ($AllInPcsNT_4 + $BackChangePcsNT_4)) * $ReturnStorePcsNT_4;
                    $ReturnStore_PriceNT_4 = $ReturnStore_PriceNT_4 + $ReturnStorePriceNT_4;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNT_4 = $ReturnStorePcsNT_4 + $ReciveTranOutPcsNT_4 + $SendSalePcsNT_4;
                $AllOut_PcsNT_4 = $AllOut_PcsNT_4 + $AllOutPcsNT_4;

                $AllOutPriceNT_4 = $SendSale_PriceNT_4 + $ReciveTranOut_PriceNT_4 + $ReturnStore_PriceNT_4;
                $AllOut_PriceNT_4 = $AllOut_PriceNT_4 + $AllOutPriceNT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNT_4 = $BackChangePcsNT_4 + $AllInPcsNT_4 + $AllOutPcsNT_4;
                $Calculate_PcsNT_4 = $Calculate_PcsNT_4 + $CalculatePcsNT_4;

                $CalculatePriceNT_4 = $BackChangePriceNT_4 + $AllInPriceNT_4 + $AllOutPriceNT_4;
                $Calculate_PriceNT_4 = $Calculate_PriceNT_4 + $CalculatePriceNT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNT_4 = $NT_1->item_stock_Quantity;
                $NewCalculate_PcsNT_4 = $NewCalculate_PcsNT_4 + $NewCalculatePcsNT_4;

                $NewCalculatePriceNT_4 = $NT_1->item_stock_Amount;
                $NewCalculate_PriceNT_4 = $NewCalculate_PriceNT_4 + $NewCalculatePriceNT_4;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_4 = $NewCalculatePcsNT_4 - $CalculatePcsNT_4;
                $Diff_PcsNT_4 = $Diff_PcsNT_4 + $DiffPcsNT_4;

                $DiffPriceNT_4 = $NewCalculatePriceNT_4 - $CalculatePriceNT_4;
                $Diff_PriceNT_4 = $Diff_PriceNT_4 + $DiffPriceNT_4;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_4 = $CalculatePcsNT_4;
                $NewTotal_PcsNT_4 = $NewTotal_PcsNT_4 + $CalculatePcsNT_4;

                $NewTotalPriceNT_4 = $NewTotalPcsNT_4 * $NT_1->PriceAvg;
                $NewTotal_PriceNT_4 = $NewTotal_PriceNT_4 + $NewTotalPriceNT_4;

                $NewTotalDiffNavNT_4 = $NewTotalPriceNT_4 - $NewCalculatePriceNT_4;
                $NewTotalDiff_NavNT_4 = $NewTotalDiff_NavNT_4 + $NewTotalDiffNavNT_4;

                $NewTotalDiffCalNT_4 = $NewTotalPriceNT_4 - $CalculatePriceNT_4;
                $NewTotalDiff_CalNT_4 = $NewTotalDiff_CalNT_4 + $NewTotalDiffCalNT_4;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_4 = $NT_1->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_4 = $a7f1fgbu02s_PcsNT_4 + $a7f1fgbu02sPcsNT_4;

                $a7f1fgbu02sPriceNT_4 = $a7f1fgbu02sPcsNT_4 * $NT_1->PriceAvg;
                $a7f1fgbu02s_PriceNT_4 = $a7f1fgbu02s_PriceNT_4 + $a7f1fgbu02sPriceNT_4;

                $a7f2fgbu10sPcsNT_4 = $NT_1->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_4 = $a7f2fgbu10s_PcsNT_4 + $a7f2fgbu10sPcsNT_4;

                $a7f2fgbu10sPriceNT_4 = $a7f2fgbu10sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2fgbu10s_PriceNT_4 = $a7f2fgbu10s_PriceNT_4 + $a7f2fgbu10sPriceNT_4;

                $a7f2thbu05sPcsNT_4 = $NT_1->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_4 = $a7f2thbu05s_PcsNT_4 + $a7f2thbu05sPcsNT_4;

                $a7f2thbu05sPriceNT_4 = $a7f2thbu05sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2thbu05s_PriceNT_4 = $a7f2thbu05s_PriceNT_4 + $a7f2thbu05sPriceNT_4;

                $a7f2debu10sPcsNT_4 = $NT_1->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_4 = $a7f2debu10s_PcsNT_4 + $a7f2debu10sPcsNT_4;

                $a7f2debu10sPriceNT_4 = $a7f2debu10sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2debu10s_PriceNT_4 = $a7f2debu10s_PriceNT_4 + $a7f2debu10sPriceNT_4;

                $a7f2exbu11sPcsNT_4 = $NT_1->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_4 = $a7f2exbu11s_PcsNT_4 + $a7f2exbu11sPcsNT_4;

                $a7f2exbu11sPriceNT_4 = $a7f2exbu11sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2exbu11s_PriceNT_4 = $a7f2exbu11s_PriceNT_4 + $a7f2exbu11sPriceNT_4;

                $a7f2twbu04sPcsNT_4 = $NT_1->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_4 = $a7f2twbu04s_PcsNT_4 + $a7f2twbu04sPcsNT_4;

                $a7f2twbu04sPriceNT_4 = $a7f2twbu04sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2twbu04s_PriceNT_4 = $a7f2twbu04s_PriceNT_4 + $a7f2twbu04sPriceNT_4;

                $a7f2twbu07sPcsNT_4 = $NT_1->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_4 = $a7f2twbu07s_PcsNT_4 + $a7f2twbu07sPcsNT_4;

                $a7f2twbu07sPriceNT_4 = $a7f2twbu07sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2twbu07s_PriceNT_4 = $a7f2twbu07s_PriceNT_4 + $a7f2twbu07sPriceNT_4;

                $a7f2cebu10sPcsNT_4 = $NT_1->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_4 = $a7f2cebu10s_PcsNT_4 + $a7f2cebu10sPcsNT_4;

                $a7f2cebu10sPriceNT_4 = $a7f2cebu10sPcsNT_4 * $NT_1->PriceAvg;
                $a7f2cebu10s_PriceNT_4 = $a7f2cebu10s_PriceNT_4 + $a7f2cebu10sPriceNT_4;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_4 = $NT_1->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_4 = $a8f1fgbu02s_PcsNT_4 + $a8f1fgbu02sPcsNT_4;

                $a8f1fgbu02sPriceNT_4 = $a8f1fgbu02sPcsNT_4 * $NumberNT_4;
                $a8f1fgbu02s_PriceNT_4 = $a8f1fgbu02s_PriceNT_4 + $a8f1fgbu02sPriceNT_4;

                $a8f2fgbu10sPcsNT_4 = $NT_1->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_4 = $a8f2fgbu10s_PcsNT_4 + $a8f2fgbu10sPcsNT_4;

                $a8f2fgbu10sPriceNT_4 = $a8f2fgbu10sPcsNT_4 * $NumberNT_4;
                $a8f2fgbu10s_PriceNT_4 = $a8f2fgbu10s_PriceNT_4 + $a8f2fgbu10sPriceNT_4;

                $a8f2thbu05sPcsNT_4 = $NT_1->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_4 = $a8f2thbu05s_PcsNT_4 + $a8f2thbu05sPcsNT_4;

                $a8f2thbu05sPriceNT_4 = $a8f2thbu05sPcsNT_4 * $NumberNT_4;
                $a8f2thbu05s_PriceNT_4 = $a8f2thbu05s_PriceNT_4 + $a8f2thbu05sPriceNT_4;

                $a8f2debu10sPcsNT_4 = $NT_1->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_4 = $a8f2debu10s_PcsNT_4 + $a8f2debu10sPcsNT_4;

                $a8f2debu10sPriceNT_4 = $a8f2debu10sPcsNT_4 * $NumberNT_4;
                $a8f2debu10s_PriceNT_4 = $a8f2debu10s_PriceNT_4 + $a8f2debu10sPriceNT_4;

                $a8f2exbu11sPcsNT_4 = $NT_1->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_4 = $a8f2exbu11s_PcsNT_4 + $a8f2exbu11sPcsNT_4;

                $a8f2exbu11sPriceNT_4 = $a8f2exbu11sPcsNT_4 * $NumberNT_4;
                $a8f2exbu11s_PriceNT_4 = $a8f2exbu11s_PriceNT_4 + $a8f2exbu11sPriceNT_4;

                $a8f2twbu04sPcsNT_4 = $NT_1->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_4 = $a8f2twbu04s_PcsNT_4 + $a8f2twbu04sPcsNT_4;

                $a8f2twbu04sPriceNT_4 = $a8f2twbu04sPcsNT_4 * $NumberNT_4;
                $a8f2twbu04s_PriceNT_4 = $a8f2twbu04s_PriceNT_4 + $a8f2twbu04sPriceNT_4;

                $a8f2twbu07sPcsNT_4 = $NT_1->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_4 = $a8f2twbu07s_PcsNT_4 + $a8f2twbu07sPcsNT_4;

                $a8f2twbu07sPriceNT_4 = $a8f2twbu07sPcsNT_4 * $NumberNT_4;
                $a8f2twbu07s_PriceNT_4 = $a8f2twbu07s_PriceNT_4 + $a8f2twbu07sPriceNT_4;

                $a8f2cebu10sPcsNT_4 = $NT_1->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_4 = $a8f2cebu10s_PcsNT_4 + $a8f2cebu10sPcsNT_4;

                $a8f2cebu10sPriceNT_4 = $a8f2cebu10sPcsNT_4 * $NumberNT_4;
                $a8f2cebu10s_PriceNT_4 = $a8f2cebu10s_PriceNT_4 + $a8f2cebu10sPriceNT_4;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_4 = $NT_1->dc1_s_Quantity;
                $DC1_PcsNT_4 = $DC1_PcsNT_4 + $DC1PcsNT_4;

                $DC1PriceNT_4 = $DC1PcsNT_4 * $NumberNT_4;
                $DC1_PriceNT_4 = $DC1_PriceNT_4 + $DC1PriceNT_4;

                $DCPPcsNT_4 = $NT_1->dcp_s_Quantity;
                $DCP_PcsNT_4 = $DCP_PcsNT_4 + $DCPPcsNT_4;

                $DCPPriceNT_4 = $DCPPcsNT_4 * $NumberNT_4;
                $DCP_PriceNT_4 = $DCP_PriceNT_4 + $DCPPriceNT_4;

                $DCYPcsNT_4 = $NT_1->dcy_s_Quantity;
                $DCY_PcsNT_4 = $DCY_PcsNT_4 + $DCYPcsNT_4;

                $DCYPriceNT_4 = $DCYPcsNT_4 * $NumberNT_4;
                $DCY_PriceNT_4 = $DCY_PriceNT_4 + $DCYPriceNT_4;

                $DEXPcsNT_4 = $NT_1->dex_s_Quantity;
                $DEX_PcsNT_4 = $DEX_PcsNT_4 + $DEXPcsNT_4;

                $DEXPriceNT_4 = $DEXPcsNT_4 * $NumberNT_4;
                $DEX_PriceNT_4 = $DEX_PriceNT_4 + $DEXPriceNT_4;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

        }
        

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_1 = number_format($Pcs_AfterNT_1, 0);
        $Price_AfterNT_1 = number_format($Price_AfterNT_1, 0);
        $Po_PcsNT_1 = number_format($Po_PcsNT_1, 0);
        $Po_PriceNT_1 = number_format($Po_PriceNT_1, 0);
        $Neg_PcsNT_1 = number_format($Neg_PcsNT_1, 0);
        $Neg_PriceNT_1 = number_format($Neg_PriceNT_1, 0);
        $BackChange_PcsNT_1 = number_format($BackChange_PcsNT_1, 0);
        $BackChange_PriceNT_1 = number_format($BackChange_PriceNT_1, 0);
        $Purchase_PcsNT_1 = number_format($Purchase_PcsNT_1, 0);
        $Purchase_PriceNT_1 = number_format($Purchase_PriceNT_1, 0);
        $ReciveTranfer_PcsNT_1 = number_format($ReciveTranfer_PcsNT_1, 0);
        $ReciveTranfer_PriceNT_1 = number_format($ReciveTranfer_PriceNT_1, 0);
        $ReturnItem_PCSNT_1 = number_format($ReturnItem_PCSNT_1, 0);
        $ReturnItem_PriceNT_1 = number_format($ReturnItem_PriceNT_1, 0);
        $AllIn_PcsNT_1 = number_format($AllIn_PcsNT_1, 0);
        $AllIn_PriceNT_1 = number_format($AllIn_PriceNT_1, 0);
        $SendSale_PcsNT_1 = number_format($SendSale_PcsNT_1, 0);
        $SendSale_PriceNT_1 = number_format($SendSale_PriceNT_1, 0);
        $ReciveTranOut_PcsNT_1 = number_format($ReciveTranOut_PcsNT_1, 0);
        $ReciveTranOut_PriceNT_1 = number_format($ReciveTranOut_PriceNT_1, 0);
        $ReturnStore_PcsNT_1 = number_format($ReturnStore_PcsNT_1, 0);
        $ReturnStore_PriceNT_1 = number_format($ReturnStore_PriceNT_1, 0);
        $AllOut_PcsNT_1 = number_format($AllOut_PcsNT_1, 0);
        $AllOut_PriceNT_1 = number_format($AllOut_PriceNT_1, 0);
        $Calculate_PcsNT_1 = number_format($Calculate_PcsNT_1, 0);
        $Calculate_PriceNT_1 = number_format($Calculate_PriceNT_1, 0);
        $NewCalculate_PcsNT_1 = number_format($NewCalculate_PcsNT_1, 0);
        $NewCalculate_PriceNT_1 = number_format($NewCalculate_PriceNT_1, 0);
        $Diff_PcsNT_1 = number_format($Diff_PcsNT_1, 0);
        $Diff_PriceNT_1 = number_format($Diff_PriceNT_1, 0);
        $NewTotal_PcsNT_1 = number_format($NewTotal_PcsNT_1, 0);
        $NewTotal_PriceNT_1 = number_format($NewTotal_PriceNT_1, 0);
        $NewTotalDiff_NavNT_1 = number_format($NewTotalDiff_NavNT_1, 0);
        $NewTotalDiff_CalNT_1 = number_format($NewTotalDiff_CalNT_1, 0);
        $a7f1fgbu02s_PcsNT_1 = number_format($a7f1fgbu02s_PcsNT_1, 0);
        $a7f1fgbu02s_PriceNT_1 = number_format($a7f1fgbu02s_PriceNT_1, 0);
        $a7f2fgbu10s_PcsNT_1 = number_format($a7f2fgbu10s_PcsNT_1, 0);
        $a7f2fgbu10s_PriceNT_1 = number_format($a7f2fgbu10s_PriceNT_1, 0);
        $a7f2thbu05s_PcsNT_1 = number_format($a7f2thbu05s_PcsNT_1, 0);
        $a7f2thbu05s_PriceNT_1 = number_format($a7f2thbu05s_PriceNT_1, 0);
        $a7f2debu10s_PcsNT_1 = number_format($a7f2debu10s_PcsNT_1, 0);
        $a7f2debu10s_PriceNT_1 = number_format($a7f2debu10s_PriceNT_1, 0);
        $a7f2exbu11s_PcsNT_1 = number_format($a7f2exbu11s_PcsNT_1, 0);
        $a7f2exbu11s_PriceNT_1 = number_format($a7f2exbu11s_PriceNT_1, 0);
        $a7f2twbu04s_PcsNT_1 = number_format($a7f2twbu04s_PcsNT_1, 0);
        $a7f2twbu04s_PriceNT_1 = number_format($a7f2twbu04s_PriceNT_1, 0);
        $a7f2twbu07s_PcsNT_1 = number_format($a7f2twbu07s_PcsNT_1, 0);
        $a7f2twbu07s_PriceNT_1 = number_format($a7f2twbu07s_PriceNT_1, 0);
        $a7f2cebu10s_PcsNT_1 = number_format($a7f2cebu10s_PcsNT_1, 0);
        $a7f2cebu10s_PriceNT_1 = number_format($a7f2cebu10s_PriceNT_1, 0);
        $a8f1fgbu02s_PcsNT_1 = number_format($a8f1fgbu02s_PcsNT_1, 0);
        $a8f1fgbu02s_PriceNT_1 = number_format($a8f1fgbu02s_PriceNT_1, 0);
        $a8f2fgbu10s_PcsNT_1 = number_format($a8f2fgbu10s_PcsNT_1, 0);
        $a8f2fgbu10s_PriceNT_1 = number_format($a8f2fgbu10s_PriceNT_1, 0);
        $a8f2thbu05s_PcsNT_1 = number_format($a8f2thbu05s_PcsNT_1, 0);
        $a8f2thbu05s_PriceNT_1 = number_format($a8f2thbu05s_PriceNT_1, 0);
        $a8f2debu10s_PcsNT_1 = number_format($a8f2debu10s_PcsNT_1, 0);
        $a8f2debu10s_PriceNT_1 = number_format($a8f2debu10s_PriceNT_1, 0);
        $a8f2exbu11s_PcsNT_1 = number_format($a8f2exbu11s_PcsNT_1, 0);
        $a8f2exbu11s_PriceNT_1 = number_format($a8f2exbu11s_PriceNT_1, 0);
        $a8f2twbu04s_PcsNT_1 = number_format($a8f2twbu04s_PcsNT_1, 0);
        $a8f2twbu04s_PriceNT_1 = number_format($a8f2twbu04s_PriceNT_1, 0);
        $a8f2twbu07s_PcsNT_1 = number_format($a8f2twbu07s_PcsNT_1, 0);
        $a8f2twbu07s_PriceNT_1 = number_format($a8f2twbu07s_PriceNT_1, 0);
        $a8f2cebu10s_PcsNT_1 = number_format($a8f2cebu10s_PcsNT_1, 0);
        $a8f2cebu10s_PriceNT_1 = number_format($a8f2cebu10s_PriceNT_1, 0);
        $DC1_PcsNT_1 = number_format($DC1_PcsNT_1, 0);
        $DC1_PriceNT_1 = number_format($DC1_PriceNT_1, 0);
        $DCP_PcsNT_1 = number_format($DCP_PcsNT_1, 0);
        $DCP_PriceNT_1 = number_format($DCP_PriceNT_1, 0);
        $DCY_PcsNT_1 = number_format($DCY_PcsNT_1, 0);
        $DCY_PriceNT_1 = number_format($DCY_PriceNT_1, 0);
        $DEX_PcsNT_1 = number_format($DEX_PcsNT_1, 0);
        $DEX_PriceNT_1 = number_format($DEX_PriceNT_1, 0);

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_2 = number_format($Pcs_AfterNT_2, 0);
        $Price_AfterNT_2 = number_format($Price_AfterNT_2, 0);
        $Po_PcsNT_2 = number_format($Po_PcsNT_2, 0);
        $Po_PriceNT_2 = number_format($Po_PriceNT_2, 0);
        $Neg_PcsNT_2 = number_format($Neg_PcsNT_2, 0);
        $Neg_PriceNT_2 = number_format($Neg_PriceNT_2, 0);
        $BackChange_PcsNT_2 = number_format($BackChange_PcsNT_2, 0);
        $BackChange_PriceNT_2 = number_format($BackChange_PriceNT_2, 0);
        $Purchase_PcsNT_2 = number_format($Purchase_PcsNT_2, 0);
        $Purchase_PriceNT_2 = number_format($Purchase_PriceNT_2, 0);
        $ReciveTranfer_PcsNT_2 = number_format($ReciveTranfer_PcsNT_2, 0);
        $ReciveTranfer_PriceNT_2 = number_format($ReciveTranfer_PriceNT_2, 0);
        $ReturnItem_PCSNT_2 = number_format($ReturnItem_PCSNT_2, 0);
        $ReturnItem_PriceNT_2 = number_format($ReturnItem_PriceNT_2, 0);
        $AllIn_PcsNT_2 = number_format($AllIn_PcsNT_2, 0);
        $AllIn_PriceNT_2 = number_format($AllIn_PriceNT_2, 0);
        $SendSale_PcsNT_2 = number_format($SendSale_PcsNT_2, 0);
        $SendSale_PriceNT_2 = number_format($SendSale_PriceNT_2, 0);
        $ReciveTranOut_PcsNT_2 = number_format($ReciveTranOut_PcsNT_2, 0);
        $ReciveTranOut_PriceNT_2 = number_format($ReciveTranOut_PriceNT_2, 0);
        $ReturnStore_PcsNT_2 = number_format($ReturnStore_PcsNT_2, 0);
        $ReturnStore_PriceNT_2 = number_format($ReturnStore_PriceNT_2, 0);
        $AllOut_PcsNT_2 = number_format($AllOut_PcsNT_2, 0);
        $AllOut_PriceNT_2 = number_format($AllOut_PriceNT_2, 0);
        $Calculate_PcsNT_2 = number_format($Calculate_PcsNT_2, 0);
        $Calculate_PriceNT_2 = number_format($Calculate_PriceNT_2, 0);
        $NewCalculate_PcsNT_2 = number_format($NewCalculate_PcsNT_2, 0);
        $NewCalculate_PriceNT_2 = number_format($NewCalculate_PriceNT_2, 0);
        $Diff_PcsNT_2 = number_format($Diff_PcsNT_2, 0);
        $Diff_PriceNT_2 = number_format($Diff_PriceNT_2, 0);
        $NewTotal_PcsNT_2 = number_format($NewTotal_PcsNT_2, 0);
        $NewTotal_PriceNT_2 = number_format($NewTotal_PriceNT_2, 0);
        $NewTotalDiff_NavNT_2 = number_format($NewTotalDiff_NavNT_2, 0);
        $NewTotalDiff_CalNT_2 = number_format($NewTotalDiff_CalNT_2, 0);
        $a7f1fgbu02s_PcsNT_2 = number_format($a7f1fgbu02s_PcsNT_2, 0);
        $a7f1fgbu02s_PriceNT_2 = number_format($a7f1fgbu02s_PriceNT_2, 0);
        $a7f2fgbu10s_PcsNT_2 = number_format($a7f2fgbu10s_PcsNT_2, 0);
        $a7f2fgbu10s_PriceNT_2 = number_format($a7f2fgbu10s_PriceNT_2, 0);
        $a7f2thbu05s_PcsNT_2 = number_format($a7f2thbu05s_PcsNT_2, 0);
        $a7f2thbu05s_PriceNT_2 = number_format($a7f2thbu05s_PriceNT_2, 0);
        $a7f2debu10s_PcsNT_2 = number_format($a7f2debu10s_PcsNT_2, 0);
        $a7f2debu10s_PriceNT_2 = number_format($a7f2debu10s_PriceNT_2, 0);
        $a7f2exbu11s_PcsNT_2 = number_format($a7f2exbu11s_PcsNT_2, 0);
        $a7f2exbu11s_PriceNT_2 = number_format($a7f2exbu11s_PriceNT_2, 0);
        $a7f2twbu04s_PcsNT_2 = number_format($a7f2twbu04s_PcsNT_2, 0);
        $a7f2twbu04s_PriceNT_2 = number_format($a7f2twbu04s_PriceNT_2, 0);
        $a7f2twbu07s_PcsNT_2 = number_format($a7f2twbu07s_PcsNT_2, 0);
        $a7f2twbu07s_PriceNT_2 = number_format($a7f2twbu07s_PriceNT_2, 0);
        $a7f2cebu10s_PcsNT_2 = number_format($a7f2cebu10s_PcsNT_2, 0);
        $a7f2cebu10s_PriceNT_2 = number_format($a7f2cebu10s_PriceNT_2, 0);
        $a8f1fgbu02s_PcsNT_2 = number_format($a8f1fgbu02s_PcsNT_2, 0);
        $a8f1fgbu02s_PriceNT_2 = number_format($a8f1fgbu02s_PriceNT_2, 0);
        $a8f2fgbu10s_PcsNT_2 = number_format($a8f2fgbu10s_PcsNT_2, 0);
        $a8f2fgbu10s_PriceNT_2 = number_format($a8f2fgbu10s_PriceNT_2, 0);
        $a8f2thbu05s_PcsNT_2 = number_format($a8f2thbu05s_PcsNT_2, 0);
        $a8f2thbu05s_PriceNT_2 = number_format($a8f2thbu05s_PriceNT_2, 0);
        $a8f2debu10s_PcsNT_2 = number_format($a8f2debu10s_PcsNT_2, 0);
        $a8f2debu10s_PriceNT_2 = number_format($a8f2debu10s_PriceNT_2, 0);
        $a8f2exbu11s_PcsNT_2 = number_format($a8f2exbu11s_PcsNT_2, 0);
        $a8f2exbu11s_PriceNT_2 = number_format($a8f2exbu11s_PriceNT_2, 0);
        $a8f2twbu04s_PcsNT_2 = number_format($a8f2twbu04s_PcsNT_2, 0);
        $a8f2twbu04s_PriceNT_2 = number_format($a8f2twbu04s_PriceNT_2, 0);
        $a8f2twbu07s_PcsNT_2 = number_format($a8f2twbu07s_PcsNT_2, 0);
        $a8f2twbu07s_PriceNT_2 = number_format($a8f2twbu07s_PriceNT_2, 0);
        $a8f2cebu10s_PcsNT_2 = number_format($a8f2cebu10s_PcsNT_2, 0);
        $a8f2cebu10s_PriceNT_2 = number_format($a8f2cebu10s_PriceNT_2, 0);
        $DC1_PcsNT_2 = number_format($DC1_PcsNT_2, 0);
        $DC1_PriceNT_2 = number_format($DC1_PriceNT_2, 0);
        $DCP_PcsNT_2 = number_format($DCP_PcsNT_2, 0);
        $DCP_PriceNT_2 = number_format($DCP_PriceNT_2, 0);
        $DCY_PcsNT_2 = number_format($DCY_PcsNT_2, 0);
        $DCY_PriceNT_2 = number_format($DCY_PriceNT_2, 0);
        $DEX_PcsNT_2 = number_format($DEX_PcsNT_2, 0);
        $DEX_PriceNT_2 = number_format($DEX_PriceNT_2, 0);

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_3 = number_format($Pcs_AfterNT_3, 0);
        $Price_AfterNT_3 = number_format($Price_AfterNT_3, 0);
        $Po_PcsNT_3 = number_format($Po_PcsNT_3, 0);
        $Po_PriceNT_3 = number_format($Po_PriceNT_3, 0);
        $Neg_PcsNT_3 = number_format($Neg_PcsNT_3, 0);
        $Neg_PriceNT_3 = number_format($Neg_PriceNT_3, 0);
        $BackChange_PcsNT_3 = number_format($BackChange_PcsNT_3, 0);
        $BackChange_PriceNT_3 = number_format($BackChange_PriceNT_3, 0);
        $Purchase_PcsNT_3 = number_format($Purchase_PcsNT_3, 0);
        $Purchase_PriceNT_3 = number_format($Purchase_PriceNT_3, 0);
        $ReciveTranfer_PcsNT_3 = number_format($ReciveTranfer_PcsNT_3, 0);
        $ReciveTranfer_PriceNT_3 = number_format($ReciveTranfer_PriceNT_3, 0);
        $ReturnItem_PCSNT_3 = number_format($ReturnItem_PCSNT_3, 0);
        $ReturnItem_PriceNT_3 = number_format($ReturnItem_PriceNT_3, 0);
        $AllIn_PcsNT_3 = number_format($AllIn_PcsNT_3, 0);
        $AllIn_PriceNT_3 = number_format($AllIn_PriceNT_3, 0);
        $SendSale_PcsNT_3 = number_format($SendSale_PcsNT_3, 0);
        $SendSale_PriceNT_3 = number_format($SendSale_PriceNT_3, 0);
        $ReciveTranOut_PcsNT_3 = number_format($ReciveTranOut_PcsNT_3, 0);
        $ReciveTranOut_PriceNT_3 = number_format($ReciveTranOut_PriceNT_3, 0);
        $ReturnStore_PcsNT_3 = number_format($ReturnStore_PcsNT_3, 0);
        $ReturnStore_PriceNT_3 = number_format($ReturnStore_PriceNT_3, 0);
        $AllOut_PcsNT_3 = number_format($AllOut_PcsNT_3, 0);
        $AllOut_PriceNT_3 = number_format($AllOut_PriceNT_3, 0);
        $Calculate_PcsNT_3 = number_format($Calculate_PcsNT_3, 0);
        $Calculate_PriceNT_3 = number_format($Calculate_PriceNT_3, 0);
        $NewCalculate_PcsNT_3 = number_format($NewCalculate_PcsNT_3, 0);
        $NewCalculate_PriceNT_3 = number_format($NewCalculate_PriceNT_3, 0);
        $Diff_PcsNT_3 = number_format($Diff_PcsNT_3, 0);
        $Diff_PriceNT_3 = number_format($Diff_PriceNT_3, 0);
        $NewTotal_PcsNT_3 = number_format($NewTotal_PcsNT_3, 0);
        $NewTotal_PriceNT_3 = number_format($NewTotal_PriceNT_3, 0);
        $NewTotalDiff_NavNT_3 = number_format($NewTotalDiff_NavNT_3, 0);
        $NewTotalDiff_CalNT_3 = number_format($NewTotalDiff_CalNT_3, 0);
        $a7f1fgbu02s_PcsNT_3 = number_format($a7f1fgbu02s_PcsNT_3, 0);
        $a7f1fgbu02s_PriceNT_3 = number_format($a7f1fgbu02s_PriceNT_3, 0);
        $a7f2fgbu10s_PcsNT_3 = number_format($a7f2fgbu10s_PcsNT_3, 0);
        $a7f2fgbu10s_PriceNT_3 = number_format($a7f2fgbu10s_PriceNT_3, 0);
        $a7f2thbu05s_PcsNT_3 = number_format($a7f2thbu05s_PcsNT_3, 0);
        $a7f2thbu05s_PriceNT_3 = number_format($a7f2thbu05s_PriceNT_3, 0);
        $a7f2debu10s_PcsNT_3 = number_format($a7f2debu10s_PcsNT_3, 0);
        $a7f2debu10s_PriceNT_3 = number_format($a7f2debu10s_PriceNT_3, 0);
        $a7f2exbu11s_PcsNT_3 = number_format($a7f2exbu11s_PcsNT_3, 0);
        $a7f2exbu11s_PriceNT_3 = number_format($a7f2exbu11s_PriceNT_3, 0);
        $a7f2twbu04s_PcsNT_3 = number_format($a7f2twbu04s_PcsNT_3, 0);
        $a7f2twbu04s_PriceNT_3 = number_format($a7f2twbu04s_PriceNT_3, 0);
        $a7f2twbu07s_PcsNT_3 = number_format($a7f2twbu07s_PcsNT_3, 0);
        $a7f2twbu07s_PriceNT_3 = number_format($a7f2twbu07s_PriceNT_3, 0);
        $a7f2cebu10s_PcsNT_3 = number_format($a7f2cebu10s_PcsNT_3, 0);
        $a7f2cebu10s_PriceNT_3 = number_format($a7f2cebu10s_PriceNT_3, 0);
        $a8f1fgbu02s_PcsNT_3 = number_format($a8f1fgbu02s_PcsNT_3, 0);
        $a8f1fgbu02s_PriceNT_3 = number_format($a8f1fgbu02s_PriceNT_3, 0);
        $a8f2fgbu10s_PcsNT_3 = number_format($a8f2fgbu10s_PcsNT_3, 0);
        $a8f2fgbu10s_PriceNT_3 = number_format($a8f2fgbu10s_PriceNT_3, 0);
        $a8f2thbu05s_PcsNT_3 = number_format($a8f2thbu05s_PcsNT_3, 0);
        $a8f2thbu05s_PriceNT_3 = number_format($a8f2thbu05s_PriceNT_3, 0);
        $a8f2debu10s_PcsNT_3 = number_format($a8f2debu10s_PcsNT_3, 0);
        $a8f2debu10s_PriceNT_3 = number_format($a8f2debu10s_PriceNT_3, 0);
        $a8f2exbu11s_PcsNT_3 = number_format($a8f2exbu11s_PcsNT_3, 0);
        $a8f2exbu11s_PriceNT_3 = number_format($a8f2exbu11s_PriceNT_3, 0);
        $a8f2twbu04s_PcsNT_3 = number_format($a8f2twbu04s_PcsNT_3, 0);
        $a8f2twbu04s_PriceNT_3 = number_format($a8f2twbu04s_PriceNT_3, 0);
        $a8f2twbu07s_PcsNT_3 = number_format($a8f2twbu07s_PcsNT_3, 0);
        $a8f2twbu07s_PriceNT_3 = number_format($a8f2twbu07s_PriceNT_3, 0);
        $a8f2cebu10s_PcsNT_3 = number_format($a8f2cebu10s_PcsNT_3, 0);
        $a8f2cebu10s_PriceNT_3 = number_format($a8f2cebu10s_PriceNT_3, 0);
        $DC1_PcsNT_3 = number_format($DC1_PcsNT_3, 0);
        $DC1_PriceNT_3 = number_format($DC1_PriceNT_3, 0);
        $DCP_PcsNT_3 = number_format($DCP_PcsNT_3, 0);
        $DCP_PriceNT_3 = number_format($DCP_PriceNT_3, 0);
        $DCY_PcsNT_3 = number_format($DCY_PcsNT_3, 0);
        $DCY_PriceNT_3 = number_format($DCY_PriceNT_3, 0);
        $DEX_PcsNT_3 = number_format($DEX_PcsNT_3, 0);
        $DEX_PriceNT_3 = number_format($DEX_PriceNT_3, 0);

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_4 = number_format($Pcs_AfterNT_4, 0);
        $Price_AfterNT_4 = number_format($Price_AfterNT_4, 0);
        $Po_PcsNT_4 = number_format($Po_PcsNT_4, 0);
        $Po_PriceNT_4 = number_format($Po_PriceNT_4, 0);
        $Neg_PcsNT_4 = number_format($Neg_PcsNT_4, 0);
        $Neg_PriceNT_4 = number_format($Neg_PriceNT_4, 0);
        $BackChange_PcsNT_4 = number_format($BackChange_PcsNT_4, 0);
        $BackChange_PriceNT_4 = number_format($BackChange_PriceNT_4, 0);
        $Purchase_PcsNT_4 = number_format($Purchase_PcsNT_4, 0);
        $Purchase_PriceNT_4 = number_format($Purchase_PriceNT_4, 0);
        $ReciveTranfer_PcsNT_4 = number_format($ReciveTranfer_PcsNT_4, 0);
        $ReciveTranfer_PriceNT_4 = number_format($ReciveTranfer_PriceNT_4, 0);
        $ReturnItem_PCSNT_4 = number_format($ReturnItem_PCSNT_4, 0);
        $ReturnItem_PriceNT_4 = number_format($ReturnItem_PriceNT_4, 0);
        $AllIn_PcsNT_4 = number_format($AllIn_PcsNT_4, 0);
        $AllIn_PriceNT_4 = number_format($AllIn_PriceNT_4, 0);
        $SendSale_PcsNT_4 = number_format($SendSale_PcsNT_4, 0);
        $SendSale_PriceNT_4 = number_format($SendSale_PriceNT_4, 0);
        $ReciveTranOut_PcsNT_4 = number_format($ReciveTranOut_PcsNT_4, 0);
        $ReciveTranOut_PriceNT_4 = number_format($ReciveTranOut_PriceNT_4, 0);
        $ReturnStore_PcsNT_4 = number_format($ReturnStore_PcsNT_4, 0);
        $ReturnStore_PriceNT_4 = number_format($ReturnStore_PriceNT_4, 0);
        $AllOut_PcsNT_4 = number_format($AllOut_PcsNT_4, 0);
        $AllOut_PriceNT_4 = number_format($AllOut_PriceNT_4, 0);
        $Calculate_PcsNT_4 = number_format($Calculate_PcsNT_4, 0);
        $Calculate_PriceNT_4 = number_format($Calculate_PriceNT_4, 0);
        $NewCalculate_PcsNT_4 = number_format($NewCalculate_PcsNT_4, 0);
        $NewCalculate_PriceNT_4 = number_format($NewCalculate_PriceNT_4, 0);
        $Diff_PcsNT_4 = number_format($Diff_PcsNT_4, 0);
        $Diff_PriceNT_4 = number_format($Diff_PriceNT_4, 0);
        $NewTotal_PcsNT_4 = number_format($NewTotal_PcsNT_4, 0);
        $NewTotal_PriceNT_4 = number_format($NewTotal_PriceNT_4, 0);
        $NewTotalDiff_NavNT_4 = number_format($NewTotalDiff_NavNT_4, 0);
        $NewTotalDiff_CalNT_4 = number_format($NewTotalDiff_CalNT_4, 0);
        $a7f1fgbu02s_PcsNT_4 = number_format($a7f1fgbu02s_PcsNT_4, 0);
        $a7f1fgbu02s_PriceNT_4 = number_format($a7f1fgbu02s_PriceNT_4, 0);
        $a7f2fgbu10s_PcsNT_4 = number_format($a7f2fgbu10s_PcsNT_4, 0);
        $a7f2fgbu10s_PriceNT_4 = number_format($a7f2fgbu10s_PriceNT_4, 0);
        $a7f2thbu05s_PcsNT_4 = number_format($a7f2thbu05s_PcsNT_4, 0);
        $a7f2thbu05s_PriceNT_4 = number_format($a7f2thbu05s_PriceNT_4, 0);
        $a7f2debu10s_PcsNT_4 = number_format($a7f2debu10s_PcsNT_4, 0);
        $a7f2debu10s_PriceNT_4 = number_format($a7f2debu10s_PriceNT_4, 0);
        $a7f2exbu11s_PcsNT_4 = number_format($a7f2exbu11s_PcsNT_4, 0);
        $a7f2exbu11s_PriceNT_4 = number_format($a7f2exbu11s_PriceNT_4, 0);
        $a7f2twbu04s_PcsNT_4 = number_format($a7f2twbu04s_PcsNT_4, 0);
        $a7f2twbu04s_PriceNT_4 = number_format($a7f2twbu04s_PriceNT_4, 0);
        $a7f2twbu07s_PcsNT_4 = number_format($a7f2twbu07s_PcsNT_4, 0);
        $a7f2twbu07s_PriceNT_4 = number_format($a7f2twbu07s_PriceNT_4, 0);
        $a7f2cebu10s_PcsNT_4 = number_format($a7f2cebu10s_PcsNT_4, 0);
        $a7f2cebu10s_PriceNT_4 = number_format($a7f2cebu10s_PriceNT_4, 0);
        $a8f1fgbu02s_PcsNT_4 = number_format($a8f1fgbu02s_PcsNT_4, 0);
        $a8f1fgbu02s_PriceNT_4 = number_format($a8f1fgbu02s_PriceNT_4, 0);
        $a8f2fgbu10s_PcsNT_4 = number_format($a8f2fgbu10s_PcsNT_4, 0);
        $a8f2fgbu10s_PriceNT_4 = number_format($a8f2fgbu10s_PriceNT_4, 0);
        $a8f2thbu05s_PcsNT_4 = number_format($a8f2thbu05s_PcsNT_4, 0);
        $a8f2thbu05s_PriceNT_4 = number_format($a8f2thbu05s_PriceNT_4, 0);
        $a8f2debu10s_PcsNT_4 = number_format($a8f2debu10s_PcsNT_4, 0);
        $a8f2debu10s_PriceNT_4 = number_format($a8f2debu10s_PriceNT_4, 0);
        $a8f2exbu11s_PcsNT_4 = number_format($a8f2exbu11s_PcsNT_4, 0);
        $a8f2exbu11s_PriceNT_4 = number_format($a8f2exbu11s_PriceNT_4, 0);
        $a8f2twbu04s_PcsNT_4 = number_format($a8f2twbu04s_PcsNT_4, 0);
        $a8f2twbu04s_PriceNT_4 = number_format($a8f2twbu04s_PriceNT_4, 0);
        $a8f2twbu07s_PcsNT_4 = number_format($a8f2twbu07s_PcsNT_4, 0);
        $a8f2twbu07s_PriceNT_4 = number_format($a8f2twbu07s_PriceNT_4, 0);
        $a8f2cebu10s_PcsNT_4 = number_format($a8f2cebu10s_PcsNT_4, 0);
        $a8f2cebu10s_PriceNT_4 = number_format($a8f2cebu10s_PriceNT_4, 0);
        $DC1_PcsNT_4 = number_format($DC1_PcsNT_4, 0);
        $DC1_PriceNT_4 = number_format($DC1_PriceNT_4, 0);
        $DCP_PcsNT_4 = number_format($DCP_PcsNT_4, 0);
        $DCP_PriceNT_4 = number_format($DCP_PriceNT_4, 0);
        $DCY_PcsNT_4 = number_format($DCY_PcsNT_4, 0);
        $DCY_PriceNT_4 = number_format($DCY_PriceNT_4, 0);
        $DEX_PcsNT_4 = number_format($DEX_PcsNT_4, 0);
        $DEX_PriceNT_4 = number_format($DEX_PriceNT_4, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Data = [
            $Pcs_AfterNT_1,
            $Price_AfterNT_1,
            $Pcs_AfterNT_1,
            $Price_AfterNT_1,
            $Po_PcsNT_1,
            $Po_PriceNT_1,
            $Neg_PcsNT_1,
            $Neg_PriceNT_1,
            $BackChange_PcsNT_1,
            $BackChange_PriceNT_1,
            $Purchase_PcsNT_1,
            $Purchase_PriceNT_1,
            $ReciveTranfer_PcsNT_1,
            $ReciveTranfer_PriceNT_1,
            $ReturnItem_PCSNT_1,
            $ReturnItem_PriceNT_1,
            $AllIn_PcsNT_1,
            $AllIn_PriceNT_1,
            $SendSale_PcsNT_1,
            $SendSale_PriceNT_1,
            $ReciveTranOut_PcsNT_1,
            $ReciveTranOut_PriceNT_1,
            $ReturnStore_PcsNT_1,
            $ReturnStore_PriceNT_1,
            $AllOut_PcsNT_1,
            $AllOut_PriceNT_1,
            $Calculate_PcsNT_1,
            $Calculate_PriceNT_1,
            $NewCalculate_PcsNT_1,
            $NewCalculate_PriceNT_1,
            $Diff_PcsNT_1,
            $Diff_PriceNT_1,
            $NewTotal_PcsNT_1,
            $NewTotal_PriceNT_1,
            $NewTotalDiff_NavNT_1,
            $NewTotalDiff_CalNT_1,
            $a7f1fgbu02s_PcsNT_1,
            $a7f1fgbu02s_PriceNT_1,
            $a7f2fgbu10s_PcsNT_1,
            $a7f2fgbu10s_PriceNT_1,
            $a7f2thbu05s_PcsNT_1,
            $a7f2thbu05s_PriceNT_1,
            $a7f2debu10s_PcsNT_1,
            $a7f2debu10s_PriceNT_1,
            $a7f2exbu11s_PcsNT_1,
            $a7f2exbu11s_PriceNT_1,
            $a7f2twbu04s_PcsNT_1,
            $a7f2twbu04s_PriceNT_1,
            $a7f2twbu07s_PcsNT_1,
            $a7f2twbu07s_PriceNT_1,
            $a7f2cebu10s_PcsNT_1,
            $a7f2cebu10s_PriceNT_1,
            $a8f1fgbu02s_PcsNT_1,
            $a8f1fgbu02s_PriceNT_1,
            $a8f2fgbu10s_PcsNT_1,
            $a8f2fgbu10s_PriceNT_1,
            $a8f2thbu05s_PcsNT_1,
            $a8f2thbu05s_PriceNT_1,
            $a8f2debu10s_PcsNT_1,
            $a8f2debu10s_PriceNT_1,
            $a8f2exbu11s_PcsNT_1,
            $a8f2exbu11s_PriceNT_1,
            $a8f2twbu04s_PcsNT_1,
            $a8f2twbu04s_PriceNT_1,
            $a8f2twbu07s_PcsNT_1,
            $a8f2twbu07s_PriceNT_1,
            $a8f2cebu10s_PcsNT_1,
            $a8f2cebu10s_PriceNT_1,
            $DC1_PcsNT_1,
            $DC1_PriceNT_1,
            $DCP_PcsNT_1,
            $DCP_PriceNT_1,
            $DCY_PcsNT_1,
            $DCY_PriceNT_1,
            $DEX_PcsNT_1,
            $DEX_PriceNT_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterNT_2,
            $Price_AfterNT_2,
            $Pcs_AfterNT_2,
            $Price_AfterNT_2,
            $Po_PcsNT_2,
            $Po_PriceNT_2,
            $Neg_PcsNT_2,
            $Neg_PriceNT_2,
            $BackChange_PcsNT_2,
            $BackChange_PriceNT_2,
            $Purchase_PcsNT_2,
            $Purchase_PriceNT_2,
            $ReciveTranfer_PcsNT_2,
            $ReciveTranfer_PriceNT_2,
            $ReturnItem_PCSNT_2,
            $ReturnItem_PriceNT_2,
            $AllIn_PcsNT_2,
            $AllIn_PriceNT_2,
            $SendSale_PcsNT_2,
            $SendSale_PriceNT_2,
            $ReciveTranOut_PcsNT_2,
            $ReciveTranOut_PriceNT_2,
            $ReturnStore_PcsNT_2,
            $ReturnStore_PriceNT_2,
            $AllOut_PcsNT_2,
            $AllOut_PriceNT_2,
            $Calculate_PcsNT_2,
            $Calculate_PriceNT_2,
            $NewCalculate_PcsNT_2,
            $NewCalculate_PriceNT_2,
            $Diff_PcsNT_2,
            $Diff_PriceNT_2,
            $NewTotal_PcsNT_2,
            $NewTotal_PriceNT_2,
            $NewTotalDiff_NavNT_2,
            $NewTotalDiff_CalNT_2,
            $a7f1fgbu02s_PcsNT_2,
            $a7f1fgbu02s_PriceNT_2,
            $a7f2fgbu10s_PcsNT_2,
            $a7f2fgbu10s_PriceNT_2,
            $a7f2thbu05s_PcsNT_2,
            $a7f2thbu05s_PriceNT_2,
            $a7f2debu10s_PcsNT_2,
            $a7f2debu10s_PriceNT_2,
            $a7f2exbu11s_PcsNT_2,
            $a7f2exbu11s_PriceNT_2,
            $a7f2twbu04s_PcsNT_2,
            $a7f2twbu04s_PriceNT_2,
            $a7f2twbu07s_PcsNT_2,
            $a7f2twbu07s_PriceNT_2,
            $a7f2cebu10s_PcsNT_2,
            $a7f2cebu10s_PriceNT_2,
            $a8f1fgbu02s_PcsNT_2,
            $a8f1fgbu02s_PriceNT_2,
            $a8f2fgbu10s_PcsNT_2,
            $a8f2fgbu10s_PriceNT_2,
            $a8f2thbu05s_PcsNT_2,
            $a8f2thbu05s_PriceNT_2,
            $a8f2debu10s_PcsNT_2,
            $a8f2debu10s_PriceNT_2,
            $a8f2exbu11s_PcsNT_2,
            $a8f2exbu11s_PriceNT_2,
            $a8f2twbu04s_PcsNT_2,
            $a8f2twbu04s_PriceNT_2,
            $a8f2twbu07s_PcsNT_2,
            $a8f2twbu07s_PriceNT_2,
            $a8f2cebu10s_PcsNT_2,
            $a8f2cebu10s_PriceNT_2,
            $DC1_PcsNT_2,
            $DC1_PriceNT_2,
            $DCP_PcsNT_2,
            $DCP_PriceNT_2,
            $DCY_PcsNT_2,
            $DCY_PriceNT_2,
            $DEX_PcsNT_2,
            $DEX_PriceNT_2,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterNT_3,
            $Price_AfterNT_3,
            $Pcs_AfterNT_3,
            $Price_AfterNT_3,
            $Po_PcsNT_3,
            $Po_PriceNT_3,
            $Neg_PcsNT_3,
            $Neg_PriceNT_3,
            $BackChange_PcsNT_3,
            $BackChange_PriceNT_3,
            $Purchase_PcsNT_3,
            $Purchase_PriceNT_3,
            $ReciveTranfer_PcsNT_3,
            $ReciveTranfer_PriceNT_3,
            $ReturnItem_PCSNT_3,
            $ReturnItem_PriceNT_3,
            $AllIn_PcsNT_3,
            $AllIn_PriceNT_3,
            $SendSale_PcsNT_3,
            $SendSale_PriceNT_3,
            $ReciveTranOut_PcsNT_3,
            $ReciveTranOut_PriceNT_3,
            $ReturnStore_PcsNT_3,
            $ReturnStore_PriceNT_3,
            $AllOut_PcsNT_3,
            $AllOut_PriceNT_3,
            $Calculate_PcsNT_3,
            $Calculate_PriceNT_3,
            $NewCalculate_PcsNT_3,
            $NewCalculate_PriceNT_3,
            $Diff_PcsNT_3,
            $Diff_PriceNT_3,
            $NewTotal_PcsNT_3,
            $NewTotal_PriceNT_3,
            $NewTotalDiff_NavNT_3,
            $NewTotalDiff_CalNT_3,
            $a7f1fgbu02s_PcsNT_3,
            $a7f1fgbu02s_PriceNT_3,
            $a7f2fgbu10s_PcsNT_3,
            $a7f2fgbu10s_PriceNT_3,
            $a7f2thbu05s_PcsNT_3,
            $a7f2thbu05s_PriceNT_3,
            $a7f2debu10s_PcsNT_3,
            $a7f2debu10s_PriceNT_3,
            $a7f2exbu11s_PcsNT_3,
            $a7f2exbu11s_PriceNT_3,
            $a7f2twbu04s_PcsNT_3,
            $a7f2twbu04s_PriceNT_3,
            $a7f2twbu07s_PcsNT_3,
            $a7f2twbu07s_PriceNT_3,
            $a7f2cebu10s_PcsNT_3,
            $a7f2cebu10s_PriceNT_3,
            $a8f1fgbu02s_PcsNT_3,
            $a8f1fgbu02s_PriceNT_3,
            $a8f2fgbu10s_PcsNT_3,
            $a8f2fgbu10s_PriceNT_3,
            $a8f2thbu05s_PcsNT_3,
            $a8f2thbu05s_PriceNT_3,
            $a8f2debu10s_PcsNT_3,
            $a8f2debu10s_PriceNT_3,
            $a8f2exbu11s_PcsNT_3,
            $a8f2exbu11s_PriceNT_3,
            $a8f2twbu04s_PcsNT_3,
            $a8f2twbu04s_PriceNT_3,
            $a8f2twbu07s_PcsNT_3,
            $a8f2twbu07s_PriceNT_3,
            $a8f2cebu10s_PcsNT_3,
            $a8f2cebu10s_PriceNT_3,
            $DC1_PcsNT_3,
            $DC1_PriceNT_3,
            $DCP_PcsNT_3,
            $DCP_PriceNT_3,
            $DCY_PcsNT_3,
            $DCY_PriceNT_3,
            $DEX_PcsNT_3,
            $DEX_PriceNT_3,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterNT_4,
            $Price_AfterNT_4,
            $Pcs_AfterNT_4,
            $Price_AfterNT_4,
            $Po_PcsNT_4,
            $Po_PriceNT_4,
            $Neg_PcsNT_4,
            $Neg_PriceNT_4,
            $BackChange_PcsNT_4,
            $BackChange_PriceNT_4,
            $Purchase_PcsNT_4,
            $Purchase_PriceNT_4,
            $ReciveTranfer_PcsNT_4,
            $ReciveTranfer_PriceNT_4,
            $ReturnItem_PCSNT_4,
            $ReturnItem_PriceNT_4,
            $AllIn_PcsNT_4,
            $AllIn_PriceNT_4,
            $SendSale_PcsNT_4,
            $SendSale_PriceNT_4,
            $ReciveTranOut_PcsNT_4,
            $ReciveTranOut_PriceNT_4,
            $ReturnStore_PcsNT_4,
            $ReturnStore_PriceNT_4,
            $AllOut_PcsNT_4,
            $AllOut_PriceNT_4,
            $Calculate_PcsNT_4,
            $Calculate_PriceNT_4,
            $NewCalculate_PcsNT_4,
            $NewCalculate_PriceNT_4,
            $Diff_PcsNT_4,
            $Diff_PriceNT_4,
            $NewTotal_PcsNT_4,
            $NewTotal_PriceNT_4,
            $NewTotalDiff_NavNT_4,
            $NewTotalDiff_CalNT_4,
            $a7f1fgbu02s_PcsNT_4,
            $a7f1fgbu02s_PriceNT_4,
            $a7f2fgbu10s_PcsNT_4,
            $a7f2fgbu10s_PriceNT_4,
            $a7f2thbu05s_PcsNT_4,
            $a7f2thbu05s_PriceNT_4,
            $a7f2debu10s_PcsNT_4,
            $a7f2debu10s_PriceNT_4,
            $a7f2exbu11s_PcsNT_4,
            $a7f2exbu11s_PriceNT_4,
            $a7f2twbu04s_PcsNT_4,
            $a7f2twbu04s_PriceNT_4,
            $a7f2twbu07s_PcsNT_4,
            $a7f2twbu07s_PriceNT_4,
            $a7f2cebu10s_PcsNT_4,
            $a7f2cebu10s_PriceNT_4,
            $a8f1fgbu02s_PcsNT_4,
            $a8f1fgbu02s_PriceNT_4,
            $a8f2fgbu10s_PcsNT_4,
            $a8f2fgbu10s_PriceNT_4,
            $a8f2thbu05s_PcsNT_4,
            $a8f2thbu05s_PriceNT_4,
            $a8f2debu10s_PcsNT_4,
            $a8f2debu10s_PriceNT_4,
            $a8f2exbu11s_PcsNT_4,
            $a8f2exbu11s_PriceNT_4,
            $a8f2twbu04s_PcsNT_4,
            $a8f2twbu04s_PriceNT_4,
            $a8f2twbu07s_PcsNT_4,
            $a8f2twbu07s_PriceNT_4,
            $a8f2cebu10s_PcsNT_4,
            $a8f2cebu10s_PriceNT_4,
            $DC1_PcsNT_4,
            $DC1_PriceNT_4,
            $DCP_PcsNT_4,
            $DCP_PriceNT_4,
            $DCY_PcsNT_4,
            $DCY_PriceNT_4,
            $DEX_PcsNT_4,
            $DEX_PriceNT_4,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////
        ];

        return response()->json($Data);
    }
}
