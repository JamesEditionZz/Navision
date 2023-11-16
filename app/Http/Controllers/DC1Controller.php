<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DC1Controller extends Controller
{
    public function DataDC1()
    {

        $ItemNo = DB::table('item_all')
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

        $Pcs_AfterSNT_1 = 0;
        $Price_AfterSNT_1 = 0;
        $Po_PcsSNT_1 = 0;
        $Po_PriceSNT_1 = 0;
        $Neg_PcsSNT_1 = 0;
        $Neg_PriceSNT_1 = 0;
        $Purchase_PcsSNT_1 = 0;
        $Purchase_PriceSNT_1 = 0;
        $BackChange_PcsSNT_1 = 0;
        $BackChange_PriceSNT_1 = 0;
        $ReciveTranfer_PcsSNT_1 = 0;
        $ReciveTranfer_PriceSNT_1 = 0;
        $ReturnItem_PCSSNT_1 = 0;
        $ReturnItem_PriceSNT_1 = 0;
        $AllIn_PcsSNT_1 = 0;
        $AllIn_PriceSNT_1 = 0;
        $SendSale_PcsSNT_1 = 0;
        $SendSale_PriceSNT_1 = 0;
        $ReciveTranOut_PcsSNT_1 = 0;
        $ReciveTranOut_PriceSNT_1 = 0;
        $ReturnStore_PcsSNT_1 = 0;
        $ReturnStore_PriceSNT_1 = 0;
        $AllOut_PcsSNT_1 = 0;
        $AllOut_PriceSNT_1 = 0;
        $Calculate_PcsSNT_1 = 0;
        $Calculate_PriceSNT_1 = 0;
        $NewCalculate_PcsSNT_1 = 0;
        $NewCalculate_PriceSNT_1 = 0;
        $Diff_PcsSNT_1 = 0;
        $Diff_PriceSNT_1 = 0;
        $NewTotal_PcsSNT_1 = 0;
        $NewTotal_PriceSNT_1 = 0;
        $NewTotalDiff_NavSNT_1 = 0;
        $NewTotalDiff_CalSNT_1 = 0;
        $a7f1fgbu02s_PcsSNT_1 = 0;
        $a7f1fgbu02s_PriceSNT_1 = 0;
        $a7f2fgbu10s_PcsSNT_1 = 0;
        $a7f2fgbu10s_PriceSNT_1 = 0;
        $a7f2thbu05s_PcsSNT_1 = 0;
        $a7f2thbu05s_PriceSNT_1 = 0;
        $a7f2debu10s_PcsSNT_1 = 0;
        $a7f2debu10s_PriceSNT_1 = 0;
        $a7f2exbu11s_PcsSNT_1 = 0;
        $a7f2exbu11s_PriceSNT_1 = 0;
        $a7f2twbu04s_PcsSNT_1 = 0;
        $a7f2twbu04s_PriceSNT_1 = 0;
        $a7f2twbu07s_PcsSNT_1 = 0;
        $a7f2twbu07s_PriceSNT_1 = 0;
        $a7f2cebu10s_PcsSNT_1 = 0;
        $a7f2cebu10s_PriceSNT_1 = 0;
        $a8f1fgbu02s_PcsSNT_1 = 0;
        $a8f1fgbu02s_PriceSNT_1 = 0;
        $a8f2fgbu10s_PcsSNT_1 = 0;
        $a8f2fgbu10s_PriceSNT_1 = 0;
        $a8f2thbu05s_PcsSNT_1 = 0;
        $a8f2thbu05s_PriceSNT_1 = 0;
        $a8f2debu10s_PcsSNT_1 = 0;
        $a8f2debu10s_PriceSNT_1 = 0;
        $a8f2exbu11s_PcsSNT_1 = 0;
        $a8f2exbu11s_PriceSNT_1 = 0;
        $a8f2twbu04s_PcsSNT_1 = 0;
        $a8f2twbu04s_PriceSNT_1 = 0;
        $a8f2twbu07s_PcsSNT_1 = 0;
        $a8f2twbu07s_PriceSNT_1 = 0;
        $a8f2cebu10s_PcsSNT_1 = 0;
        $a8f2cebu10s_PriceSNT_1 = 0;
        $DC1_PcsSNT_1 = 0;
        $DC1_PriceSNT_1 = 0;
        $DCP_PcsSNT_1 = 0;
        $DCP_PriceSNT_1 = 0;
        $DCY_PcsSNT_1 = 0;
        $DCY_PriceSNT_1 = 0;
        $DEX_PcsSNT_1 = 0;
        $DEX_PriceSNT_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNT_2 = 0;
        $Price_AfterSNT_2 = 0;
        $Po_PcsSNT_2 = 0;
        $Po_PriceSNT_2 = 0;
        $Neg_PcsSNT_2 = 0;
        $Neg_PriceSNT_2 = 0;
        $Purchase_PcsSNT_2 = 0;
        $Purchase_PriceSNT_2 = 0;
        $BackChange_PcsSNT_2 = 0;
        $BackChange_PriceSNT_2 = 0;
        $ReciveTranfer_PcsSNT_2 = 0;
        $ReciveTranfer_PriceSNT_2 = 0;
        $ReturnItem_PCSSNT_2 = 0;
        $ReturnItem_PriceSNT_2 = 0;
        $AllIn_PcsSNT_2 = 0;
        $AllIn_PriceSNT_2 = 0;
        $SendSale_PcsSNT_2 = 0;
        $SendSale_PriceSNT_2 = 0;
        $ReciveTranOut_PcsSNT_2 = 0;
        $ReciveTranOut_PriceSNT_2 = 0;
        $ReturnStore_PcsSNT_2 = 0;
        $ReturnStore_PriceSNT_2 = 0;
        $AllOut_PcsSNT_2 = 0;
        $AllOut_PriceSNT_2 = 0;
        $Calculate_PcsSNT_2 = 0;
        $Calculate_PriceSNT_2 = 0;
        $NewCalculate_PcsSNT_2 = 0;
        $NewCalculate_PriceSNT_2 = 0;
        $Diff_PcsSNT_2 = 0;
        $Diff_PriceSNT_2 = 0;
        $NewTotal_PcsSNT_2 = 0;
        $NewTotal_PriceSNT_2 = 0;
        $NewTotalDiff_NavSNT_2 = 0;
        $NewTotalDiff_CalSNT_2 = 0;
        $a7f1fgbu02s_PcsSNT_2 = 0;
        $a7f1fgbu02s_PriceSNT_2 = 0;
        $a7f2fgbu10s_PcsSNT_2 = 0;
        $a7f2fgbu10s_PriceSNT_2 = 0;
        $a7f2thbu05s_PcsSNT_2 = 0;
        $a7f2thbu05s_PriceSNT_2 = 0;
        $a7f2debu10s_PcsSNT_2 = 0;
        $a7f2debu10s_PriceSNT_2 = 0;
        $a7f2exbu11s_PcsSNT_2 = 0;
        $a7f2exbu11s_PriceSNT_2 = 0;
        $a7f2twbu04s_PcsSNT_2 = 0;
        $a7f2twbu04s_PriceSNT_2 = 0;
        $a7f2twbu07s_PcsSNT_2 = 0;
        $a7f2twbu07s_PriceSNT_2 = 0;
        $a7f2cebu10s_PcsSNT_2 = 0;
        $a7f2cebu10s_PriceSNT_2 = 0;
        $a8f1fgbu02s_PcsSNT_2 = 0;
        $a8f1fgbu02s_PriceSNT_2 = 0;
        $a8f2fgbu10s_PcsSNT_2 = 0;
        $a8f2fgbu10s_PriceSNT_2 = 0;
        $a8f2thbu05s_PcsSNT_2 = 0;
        $a8f2thbu05s_PriceSNT_2 = 0;
        $a8f2debu10s_PcsSNT_2 = 0;
        $a8f2debu10s_PriceSNT_2 = 0;
        $a8f2exbu11s_PcsSNT_2 = 0;
        $a8f2exbu11s_PriceSNT_2 = 0;
        $a8f2twbu04s_PcsSNT_2 = 0;
        $a8f2twbu04s_PriceSNT_2 = 0;
        $a8f2twbu07s_PcsSNT_2 = 0;
        $a8f2twbu07s_PriceSNT_2 = 0;
        $a8f2cebu10s_PcsSNT_2 = 0;
        $a8f2cebu10s_PriceSNT_2 = 0;
        $DC1_PcsSNT_2 = 0;
        $DC1_PriceSNT_2 = 0;
        $DCP_PcsSNT_2 = 0;
        $DCP_PriceSNT_2 = 0;
        $DCY_PcsSNT_2 = 0;
        $DCY_PriceSNT_2 = 0;
        $DEX_PcsSNT_2 = 0;
        $DEX_PriceSNT_2 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_1 = 0;
        $Price_AfterMT_1 = 0;
        $Po_PcsMT_1 = 0;
        $Po_PriceMT_1 = 0;
        $Neg_PcsMT_1 = 0;
        $Neg_PriceMT_1 = 0;
        $Purchase_PcsMT_1 = 0;
        $Purchase_PriceMT_1 = 0;
        $BackChange_PcsMT_1 = 0;
        $BackChange_PriceMT_1 = 0;
        $ReciveTranfer_PcsMT_1 = 0;
        $ReciveTranfer_PriceMT_1 = 0;
        $ReturnItem_PCSMT_1 = 0;
        $ReturnItem_PriceMT_1 = 0;
        $AllIn_PcsMT_1 = 0;
        $AllIn_PriceMT_1 = 0;
        $SendSale_PcsMT_1 = 0;
        $SendSale_PriceMT_1 = 0;
        $ReciveTranOut_PcsMT_1 = 0;
        $ReciveTranOut_PriceMT_1 = 0;
        $ReturnStore_PcsMT_1 = 0;
        $ReturnStore_PriceMT_1 = 0;
        $AllOut_PcsMT_1 = 0;
        $AllOut_PriceMT_1 = 0;
        $Calculate_PcsMT_1 = 0;
        $Calculate_PriceMT_1 = 0;
        $NewCalculate_PcsMT_1 = 0;
        $NewCalculate_PriceMT_1 = 0;
        $Diff_PcsMT_1 = 0;
        $Diff_PriceMT_1 = 0;
        $NewTotal_PcsMT_1 = 0;
        $NewTotal_PriceMT_1 = 0;
        $NewTotalDiff_NavMT_1 = 0;
        $NewTotalDiff_CalMT_1 = 0;
        $a7f1fgbu02s_PcsMT_1 = 0;
        $a7f1fgbu02s_PriceMT_1 = 0;
        $a7f2fgbu10s_PcsMT_1 = 0;
        $a7f2fgbu10s_PriceMT_1 = 0;
        $a7f2thbu05s_PcsMT_1 = 0;
        $a7f2thbu05s_PriceMT_1 = 0;
        $a7f2debu10s_PcsMT_1 = 0;
        $a7f2debu10s_PriceMT_1 = 0;
        $a7f2exbu11s_PcsMT_1 = 0;
        $a7f2exbu11s_PriceMT_1 = 0;
        $a7f2twbu04s_PcsMT_1 = 0;
        $a7f2twbu04s_PriceMT_1 = 0;
        $a7f2twbu07s_PcsMT_1 = 0;
        $a7f2twbu07s_PriceMT_1 = 0;
        $a7f2cebu10s_PcsMT_1 = 0;
        $a7f2cebu10s_PriceMT_1 = 0;
        $a8f1fgbu02s_PcsMT_1 = 0;
        $a8f1fgbu02s_PriceMT_1 = 0;
        $a8f2fgbu10s_PcsMT_1 = 0;
        $a8f2fgbu10s_PriceMT_1 = 0;
        $a8f2thbu05s_PcsMT_1 = 0;
        $a8f2thbu05s_PriceMT_1 = 0;
        $a8f2debu10s_PcsMT_1 = 0;
        $a8f2debu10s_PriceMT_1 = 0;
        $a8f2exbu11s_PcsMT_1 = 0;
        $a8f2exbu11s_PriceMT_1 = 0;
        $a8f2twbu04s_PcsMT_1 = 0;
        $a8f2twbu04s_PriceMT_1 = 0;
        $a8f2twbu07s_PcsMT_1 = 0;
        $a8f2twbu07s_PriceMT_1 = 0;
        $a8f2cebu10s_PcsMT_1 = 0;
        $a8f2cebu10s_PriceMT_1 = 0;
        $DC1_PcsMT_1 = 0;
        $DC1_PriceMT_1 = 0;
        $DCP_PcsMT_1 = 0;
        $DCP_PriceMT_1 = 0;
        $DCY_PcsMT_1 = 0;
        $DCY_PriceMT_1 = 0;
        $DEX_PcsMT_1 = 0;
        $DEX_PriceMT_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_2 = 0;
        $Price_AfterMT_2 = 0;
        $Po_PcsMT_2 = 0;
        $Po_PriceMT_2 = 0;
        $Neg_PcsMT_2 = 0;
        $Neg_PriceMT_2 = 0;
        $Purchase_PcsMT_2 = 0;
        $Purchase_PriceMT_2 = 0;
        $BackChange_PcsMT_2 = 0;
        $BackChange_PriceMT_2 = 0;
        $ReciveTranfer_PcsMT_2 = 0;
        $ReciveTranfer_PriceMT_2 = 0;
        $ReturnItem_PCSMT_2 = 0;
        $ReturnItem_PriceMT_2 = 0;
        $AllIn_PcsMT_2 = 0;
        $AllIn_PriceMT_2 = 0;
        $SendSale_PcsMT_2 = 0;
        $SendSale_PriceMT_2 = 0;
        $ReciveTranOut_PcsMT_2 = 0;
        $ReciveTranOut_PriceMT_2 = 0;
        $ReturnStore_PcsMT_2 = 0;
        $ReturnStore_PriceMT_2 = 0;
        $AllOut_PcsMT_2 = 0;
        $AllOut_PriceMT_2 = 0;
        $Calculate_PcsMT_2 = 0;
        $Calculate_PriceMT_2 = 0;
        $NewCalculate_PcsMT_2 = 0;
        $NewCalculate_PriceMT_2 = 0;
        $Diff_PcsMT_2 = 0;
        $Diff_PriceMT_2 = 0;
        $NewTotal_PcsMT_2 = 0;
        $NewTotal_PriceMT_2 = 0;
        $NewTotalDiff_NavMT_2 = 0;
        $NewTotalDiff_CalMT_2 = 0;
        $a7f1fgbu02s_PcsMT_2 = 0;
        $a7f1fgbu02s_PriceMT_2 = 0;
        $a7f2fgbu10s_PcsMT_2 = 0;
        $a7f2fgbu10s_PriceMT_2 = 0;
        $a7f2thbu05s_PcsMT_2 = 0;
        $a7f2thbu05s_PriceMT_2 = 0;
        $a7f2debu10s_PcsMT_2 = 0;
        $a7f2debu10s_PriceMT_2 = 0;
        $a7f2exbu11s_PcsMT_2 = 0;
        $a7f2exbu11s_PriceMT_2 = 0;
        $a7f2twbu04s_PcsMT_2 = 0;
        $a7f2twbu04s_PriceMT_2 = 0;
        $a7f2twbu07s_PcsMT_2 = 0;
        $a7f2twbu07s_PriceMT_2 = 0;
        $a7f2cebu10s_PcsMT_2 = 0;
        $a7f2cebu10s_PriceMT_2 = 0;
        $a8f1fgbu02s_PcsMT_2 = 0;
        $a8f1fgbu02s_PriceMT_2 = 0;
        $a8f2fgbu10s_PcsMT_2 = 0;
        $a8f2fgbu10s_PriceMT_2 = 0;
        $a8f2thbu05s_PcsMT_2 = 0;
        $a8f2thbu05s_PriceMT_2 = 0;
        $a8f2debu10s_PcsMT_2 = 0;
        $a8f2debu10s_PriceMT_2 = 0;
        $a8f2exbu11s_PcsMT_2 = 0;
        $a8f2exbu11s_PriceMT_2 = 0;
        $a8f2twbu04s_PcsMT_2 = 0;
        $a8f2twbu04s_PriceMT_2 = 0;
        $a8f2twbu07s_PcsMT_2 = 0;
        $a8f2twbu07s_PriceMT_2 = 0;
        $a8f2cebu10s_PcsMT_2 = 0;
        $a8f2cebu10s_PriceMT_2 = 0;
        $DC1_PcsMT_2 = 0;
        $DC1_PriceMT_2 = 0;
        $DCP_PcsMT_2 = 0;
        $DCP_PriceMT_2 = 0;
        $DCY_PcsMT_2 = 0;
        $DCY_PriceMT_2 = 0;
        $DEX_PcsMT_2 = 0;
        $DEX_PriceMT_2 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_3 = 0;
        $Price_AfterMT_3 = 0;
        $Po_PcsMT_3 = 0;
        $Po_PriceMT_3 = 0;
        $Neg_PcsMT_3 = 0;
        $Neg_PriceMT_3 = 0;
        $Purchase_PcsMT_3 = 0;
        $Purchase_PriceMT_3 = 0;
        $BackChange_PcsMT_3 = 0;
        $BackChange_PriceMT_3 = 0;
        $ReciveTranfer_PcsMT_3 = 0;
        $ReciveTranfer_PriceMT_3 = 0;
        $ReturnItem_PCSMT_3 = 0;
        $ReturnItem_PriceMT_3 = 0;
        $AllIn_PcsMT_3 = 0;
        $AllIn_PriceMT_3 = 0;
        $SendSale_PcsMT_3 = 0;
        $SendSale_PriceMT_3 = 0;
        $ReciveTranOut_PcsMT_3 = 0;
        $ReciveTranOut_PriceMT_3 = 0;
        $ReturnStore_PcsMT_3 = 0;
        $ReturnStore_PriceMT_3 = 0;
        $AllOut_PcsMT_3 = 0;
        $AllOut_PriceMT_3 = 0;
        $Calculate_PcsMT_3 = 0;
        $Calculate_PriceMT_3 = 0;
        $NewCalculate_PcsMT_3 = 0;
        $NewCalculate_PriceMT_3 = 0;
        $Diff_PcsMT_3 = 0;
        $Diff_PriceMT_3 = 0;
        $NewTotal_PcsMT_3 = 0;
        $NewTotal_PriceMT_3 = 0;
        $NewTotalDiff_NavMT_3 = 0;
        $NewTotalDiff_CalMT_3 = 0;
        $a7f1fgbu02s_PcsMT_3 = 0;
        $a7f1fgbu02s_PriceMT_3 = 0;
        $a7f2fgbu10s_PcsMT_3 = 0;
        $a7f2fgbu10s_PriceMT_3 = 0;
        $a7f2thbu05s_PcsMT_3 = 0;
        $a7f2thbu05s_PriceMT_3 = 0;
        $a7f2debu10s_PcsMT_3 = 0;
        $a7f2debu10s_PriceMT_3 = 0;
        $a7f2exbu11s_PcsMT_3 = 0;
        $a7f2exbu11s_PriceMT_3 = 0;
        $a7f2twbu04s_PcsMT_3 = 0;
        $a7f2twbu04s_PriceMT_3 = 0;
        $a7f2twbu07s_PcsMT_3 = 0;
        $a7f2twbu07s_PriceMT_3 = 0;
        $a7f2cebu10s_PcsMT_3 = 0;
        $a7f2cebu10s_PriceMT_3 = 0;
        $a8f1fgbu02s_PcsMT_3 = 0;
        $a8f1fgbu02s_PriceMT_3 = 0;
        $a8f2fgbu10s_PcsMT_3 = 0;
        $a8f2fgbu10s_PriceMT_3 = 0;
        $a8f2thbu05s_PcsMT_3 = 0;
        $a8f2thbu05s_PriceMT_3 = 0;
        $a8f2debu10s_PcsMT_3 = 0;
        $a8f2debu10s_PriceMT_3 = 0;
        $a8f2exbu11s_PcsMT_3 = 0;
        $a8f2exbu11s_PriceMT_3 = 0;
        $a8f2twbu04s_PcsMT_3 = 0;
        $a8f2twbu04s_PriceMT_3 = 0;
        $a8f2twbu07s_PcsMT_3 = 0;
        $a8f2twbu07s_PriceMT_3 = 0;
        $a8f2cebu10s_PcsMT_3 = 0;
        $a8f2cebu10s_PriceMT_3 = 0;
        $DC1_PcsMT_3 = 0;
        $DC1_PriceMT_3 = 0;
        $DCP_PcsMT_3 = 0;
        $DCP_PriceMT_3 = 0;
        $DCY_PcsMT_3 = 0;
        $DCY_PriceMT_3 = 0;
        $DEX_PcsMT_3 = 0;
        $DEX_PriceMT_3 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_4 = 0;
        $Price_AfterMT_4 = 0;
        $Po_PcsMT_4 = 0;
        $Po_PriceMT_4 = 0;
        $Neg_PcsMT_4 = 0;
        $Neg_PriceMT_4 = 0;
        $Purchase_PcsMT_4 = 0;
        $Purchase_PriceMT_4 = 0;
        $BackChange_PcsMT_4 = 0;
        $BackChange_PriceMT_4 = 0;
        $ReciveTranfer_PcsMT_4 = 0;
        $ReciveTranfer_PriceMT_4 = 0;
        $ReturnItem_PCSMT_4 = 0;
        $ReturnItem_PriceMT_4 = 0;
        $AllIn_PcsMT_4 = 0;
        $AllIn_PriceMT_4 = 0;
        $SendSale_PcsMT_4 = 0;
        $SendSale_PriceMT_4 = 0;
        $ReciveTranOut_PcsMT_4 = 0;
        $ReciveTranOut_PriceMT_4 = 0;
        $ReturnStore_PcsMT_4 = 0;
        $ReturnStore_PriceMT_4 = 0;
        $AllOut_PcsMT_4 = 0;
        $AllOut_PriceMT_4 = 0;
        $Calculate_PcsMT_4 = 0;
        $Calculate_PriceMT_4 = 0;
        $NewCalculate_PcsMT_4 = 0;
        $NewCalculate_PriceMT_4 = 0;
        $Diff_PcsMT_4 = 0;
        $Diff_PriceMT_4 = 0;
        $NewTotal_PcsMT_4 = 0;
        $NewTotal_PriceMT_4 = 0;
        $NewTotalDiff_NavMT_4 = 0;
        $NewTotalDiff_CalMT_4 = 0;
        $a7f1fgbu02s_PcsMT_4 = 0;
        $a7f1fgbu02s_PriceMT_4 = 0;
        $a7f2fgbu10s_PcsMT_4 = 0;
        $a7f2fgbu10s_PriceMT_4 = 0;
        $a7f2thbu05s_PcsMT_4 = 0;
        $a7f2thbu05s_PriceMT_4 = 0;
        $a7f2debu10s_PcsMT_4 = 0;
        $a7f2debu10s_PriceMT_4 = 0;
        $a7f2exbu11s_PcsMT_4 = 0;
        $a7f2exbu11s_PriceMT_4 = 0;
        $a7f2twbu04s_PcsMT_4 = 0;
        $a7f2twbu04s_PriceMT_4 = 0;
        $a7f2twbu07s_PcsMT_4 = 0;
        $a7f2twbu07s_PriceMT_4 = 0;
        $a7f2cebu10s_PcsMT_4 = 0;
        $a7f2cebu10s_PriceMT_4 = 0;
        $a8f1fgbu02s_PcsMT_4 = 0;
        $a8f1fgbu02s_PriceMT_4 = 0;
        $a8f2fgbu10s_PcsMT_4 = 0;
        $a8f2fgbu10s_PriceMT_4 = 0;
        $a8f2thbu05s_PcsMT_4 = 0;
        $a8f2thbu05s_PriceMT_4 = 0;
        $a8f2debu10s_PcsMT_4 = 0;
        $a8f2debu10s_PriceMT_4 = 0;
        $a8f2exbu11s_PcsMT_4 = 0;
        $a8f2exbu11s_PriceMT_4 = 0;
        $a8f2twbu04s_PcsMT_4 = 0;
        $a8f2twbu04s_PriceMT_4 = 0;
        $a8f2twbu07s_PcsMT_4 = 0;
        $a8f2twbu07s_PriceMT_4 = 0;
        $a8f2cebu10s_PcsMT_4 = 0;
        $a8f2cebu10s_PriceMT_4 = 0;
        $DC1_PcsMT_4 = 0;
        $DC1_PriceMT_4 = 0;
        $DCP_PcsMT_4 = 0;
        $DCP_PriceMT_4 = 0;
        $DCY_PcsMT_4 = 0;
        $DCY_PriceMT_4 = 0;
        $DEX_PcsMT_4 = 0;
        $DEX_PriceMT_4 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_5 = 0;
        $Price_AfterMT_5 = 0;
        $Po_PcsMT_5 = 0;
        $Po_PriceMT_5 = 0;
        $Neg_PcsMT_5 = 0;
        $Neg_PriceMT_5 = 0;
        $Purchase_PcsMT_5 = 0;
        $Purchase_PriceMT_5 = 0;
        $BackChange_PcsMT_5 = 0;
        $BackChange_PriceMT_5 = 0;
        $ReciveTranfer_PcsMT_5 = 0;
        $ReciveTranfer_PriceMT_5 = 0;
        $ReturnItem_PCSMT_5 = 0;
        $ReturnItem_PriceMT_5 = 0;
        $AllIn_PcsMT_5 = 0;
        $AllIn_PriceMT_5 = 0;
        $SendSale_PcsMT_5 = 0;
        $SendSale_PriceMT_5 = 0;
        $ReciveTranOut_PcsMT_5 = 0;
        $ReciveTranOut_PriceMT_5 = 0;
        $ReturnStore_PcsMT_5 = 0;
        $ReturnStore_PriceMT_5 = 0;
        $AllOut_PcsMT_5 = 0;
        $AllOut_PriceMT_5 = 0;
        $Calculate_PcsMT_5 = 0;
        $Calculate_PriceMT_5 = 0;
        $NewCalculate_PcsMT_5 = 0;
        $NewCalculate_PriceMT_5 = 0;
        $Diff_PcsMT_5 = 0;
        $Diff_PriceMT_5 = 0;
        $NewTotal_PcsMT_5 = 0;
        $NewTotal_PriceMT_5 = 0;
        $NewTotalDiff_NavMT_5 = 0;
        $NewTotalDiff_CalMT_5 = 0;
        $a7f1fgbu02s_PcsMT_5 = 0;
        $a7f1fgbu02s_PriceMT_5 = 0;
        $a7f2fgbu10s_PcsMT_5 = 0;
        $a7f2fgbu10s_PriceMT_5 = 0;
        $a7f2thbu05s_PcsMT_5 = 0;
        $a7f2thbu05s_PriceMT_5 = 0;
        $a7f2debu10s_PcsMT_5 = 0;
        $a7f2debu10s_PriceMT_5 = 0;
        $a7f2exbu11s_PcsMT_5 = 0;
        $a7f2exbu11s_PriceMT_5 = 0;
        $a7f2twbu04s_PcsMT_5 = 0;
        $a7f2twbu04s_PriceMT_5 = 0;
        $a7f2twbu07s_PcsMT_5 = 0;
        $a7f2twbu07s_PriceMT_5 = 0;
        $a7f2cebu10s_PcsMT_5 = 0;
        $a7f2cebu10s_PriceMT_5 = 0;
        $a8f1fgbu02s_PcsMT_5 = 0;
        $a8f1fgbu02s_PriceMT_5 = 0;
        $a8f2fgbu10s_PcsMT_5 = 0;
        $a8f2fgbu10s_PriceMT_5 = 0;
        $a8f2thbu05s_PcsMT_5 = 0;
        $a8f2thbu05s_PriceMT_5 = 0;
        $a8f2debu10s_PcsMT_5 = 0;
        $a8f2debu10s_PriceMT_5 = 0;
        $a8f2exbu11s_PcsMT_5 = 0;
        $a8f2exbu11s_PriceMT_5 = 0;
        $a8f2twbu04s_PcsMT_5 = 0;
        $a8f2twbu04s_PriceMT_5 = 0;
        $a8f2twbu07s_PcsMT_5 = 0;
        $a8f2twbu07s_PriceMT_5 = 0;
        $a8f2cebu10s_PcsMT_5 = 0;
        $a8f2cebu10s_PriceMT_5 = 0;
        $DC1_PcsMT_5 = 0;
        $DC1_PriceMT_5 = 0;
        $DCP_PcsMT_5 = 0;
        $DCP_PriceMT_5 = 0;
        $DCY_PcsMT_5 = 0;
        $DCY_PriceMT_5 = 0;
        $DEX_PcsMT_5 = 0;
        $DEX_PriceMT_5 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_6 = 0;
        $Price_AfterMT_6 = 0;
        $Po_PcsMT_6 = 0;
        $Po_PriceMT_6 = 0;
        $Neg_PcsMT_6 = 0;
        $Neg_PriceMT_6 = 0;
        $Purchase_PcsMT_6 = 0;
        $Purchase_PriceMT_6 = 0;
        $BackChange_PcsMT_6 = 0;
        $BackChange_PriceMT_6 = 0;
        $ReciveTranfer_PcsMT_6 = 0;
        $ReciveTranfer_PriceMT_6 = 0;
        $ReturnItem_PCSMT_6 = 0;
        $ReturnItem_PriceMT_6 = 0;
        $AllIn_PcsMT_6 = 0;
        $AllIn_PriceMT_6 = 0;
        $SendSale_PcsMT_6 = 0;
        $SendSale_PriceMT_6 = 0;
        $ReciveTranOut_PcsMT_6 = 0;
        $ReciveTranOut_PriceMT_6 = 0;
        $ReturnStore_PcsMT_6 = 0;
        $ReturnStore_PriceMT_6 = 0;
        $AllOut_PcsMT_6 = 0;
        $AllOut_PriceMT_6 = 0;
        $Calculate_PcsMT_6 = 0;
        $Calculate_PriceMT_6 = 0;
        $NewCalculate_PcsMT_6 = 0;
        $NewCalculate_PriceMT_6 = 0;
        $Diff_PcsMT_6 = 0;
        $Diff_PriceMT_6 = 0;
        $NewTotal_PcsMT_6 = 0;
        $NewTotal_PriceMT_6 = 0;
        $NewTotalDiff_NavMT_6 = 0;
        $NewTotalDiff_CalMT_6 = 0;
        $a7f1fgbu02s_PcsMT_6 = 0;
        $a7f1fgbu02s_PriceMT_6 = 0;
        $a7f2fgbu10s_PcsMT_6 = 0;
        $a7f2fgbu10s_PriceMT_6 = 0;
        $a7f2thbu05s_PcsMT_6 = 0;
        $a7f2thbu05s_PriceMT_6 = 0;
        $a7f2debu10s_PcsMT_6 = 0;
        $a7f2debu10s_PriceMT_6 = 0;
        $a7f2exbu11s_PcsMT_6 = 0;
        $a7f2exbu11s_PriceMT_6 = 0;
        $a7f2twbu04s_PcsMT_6 = 0;
        $a7f2twbu04s_PriceMT_6 = 0;
        $a7f2twbu07s_PcsMT_6 = 0;
        $a7f2twbu07s_PriceMT_6 = 0;
        $a7f2cebu10s_PcsMT_6 = 0;
        $a7f2cebu10s_PriceMT_6 = 0;
        $a8f1fgbu02s_PcsMT_6 = 0;
        $a8f1fgbu02s_PriceMT_6 = 0;
        $a8f2fgbu10s_PcsMT_6 = 0;
        $a8f2fgbu10s_PriceMT_6 = 0;
        $a8f2thbu05s_PcsMT_6 = 0;
        $a8f2thbu05s_PriceMT_6 = 0;
        $a8f2debu10s_PcsMT_6 = 0;
        $a8f2debu10s_PriceMT_6 = 0;
        $a8f2exbu11s_PcsMT_6 = 0;
        $a8f2exbu11s_PriceMT_6 = 0;
        $a8f2twbu04s_PcsMT_6 = 0;
        $a8f2twbu04s_PriceMT_6 = 0;
        $a8f2twbu07s_PcsMT_6 = 0;
        $a8f2twbu07s_PriceMT_6 = 0;
        $a8f2cebu10s_PcsMT_6 = 0;
        $a8f2cebu10s_PriceMT_6 = 0;
        $DC1_PcsMT_6 = 0;
        $DC1_PriceMT_6 = 0;
        $DCP_PcsMT_6 = 0;
        $DCP_PriceMT_6 = 0;
        $DCY_PcsMT_6 = 0;
        $DCY_PriceMT_6 = 0;
        $DEX_PcsMT_6 = 0;
        $DEX_PriceMT_6 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW_1 = 0;
        $Price_AfterTW_1 = 0;
        $Po_PcsTW_1 = 0;
        $Po_PriceTW_1 = 0;
        $Neg_PcsTW_1 = 0;
        $Neg_PriceTW_1 = 0;
        $Purchase_PcsTW_1 = 0;
        $Purchase_PriceTW_1 = 0;
        $BackChange_PcsTW_1 = 0;
        $BackChange_PriceTW_1 = 0;
        $ReciveTranfer_PcsTW_1 = 0;
        $ReciveTranfer_PriceTW_1 = 0;
        $ReturnItem_PCSTW_1 = 0;
        $ReturnItem_PriceTW_1 = 0;
        $AllIn_PcsTW_1 = 0;
        $AllIn_PriceTW_1 = 0;
        $SendSale_PcsTW_1 = 0;
        $SendSale_PriceTW_1 = 0;
        $ReciveTranOut_PcsTW_1 = 0;
        $ReciveTranOut_PriceTW_1 = 0;
        $ReturnStore_PcsTW_1 = 0;
        $ReturnStore_PriceTW_1 = 0;
        $AllOut_PcsTW_1 = 0;
        $AllOut_PriceTW_1 = 0;
        $Calculate_PcsTW_1 = 0;
        $Calculate_PriceTW_1 = 0;
        $NewCalculate_PcsTW_1 = 0;
        $NewCalculate_PriceTW_1 = 0;
        $Diff_PcsTW_1 = 0;
        $Diff_PriceTW_1 = 0;
        $NewTotal_PcsTW_1 = 0;
        $NewTotal_PriceTW_1 = 0;
        $NewTotalDiff_NavTW_1 = 0;
        $NewTotalDiff_CalTW_1 = 0;
        $a7f1fgbu02s_PcsTW_1 = 0;
        $a7f1fgbu02s_PriceTW_1 = 0;
        $a7f2fgbu10s_PcsTW_1 = 0;
        $a7f2fgbu10s_PriceTW_1 = 0;
        $a7f2thbu05s_PcsTW_1 = 0;
        $a7f2thbu05s_PriceTW_1 = 0;
        $a7f2debu10s_PcsTW_1 = 0;
        $a7f2debu10s_PriceTW_1 = 0;
        $a7f2exbu11s_PcsTW_1 = 0;
        $a7f2exbu11s_PriceTW_1 = 0;
        $a7f2twbu04s_PcsTW_1 = 0;
        $a7f2twbu04s_PriceTW_1 = 0;
        $a7f2twbu07s_PcsTW_1 = 0;
        $a7f2twbu07s_PriceTW_1 = 0;
        $a7f2cebu10s_PcsTW_1 = 0;
        $a7f2cebu10s_PriceTW_1 = 0;
        $a8f1fgbu02s_PcsTW_1 = 0;
        $a8f1fgbu02s_PriceTW_1 = 0;
        $a8f2fgbu10s_PcsTW_1 = 0;
        $a8f2fgbu10s_PriceTW_1 = 0;
        $a8f2thbu05s_PcsTW_1 = 0;
        $a8f2thbu05s_PriceTW_1 = 0;
        $a8f2debu10s_PcsTW_1 = 0;
        $a8f2debu10s_PriceTW_1 = 0;
        $a8f2exbu11s_PcsTW_1 = 0;
        $a8f2exbu11s_PriceTW_1 = 0;
        $a8f2twbu04s_PcsTW_1 = 0;
        $a8f2twbu04s_PriceTW_1 = 0;
        $a8f2twbu07s_PcsTW_1 = 0;
        $a8f2twbu07s_PriceTW_1 = 0;
        $a8f2cebu10s_PcsTW_1 = 0;
        $a8f2cebu10s_PriceTW_1 = 0;
        $DC1_PcsTW_1 = 0;
        $DC1_PriceTW_1 = 0;
        $DCP_PcsTW_1 = 0;
        $DCP_PriceTW_1 = 0;
        $DCY_PcsTW_1 = 0;
        $DCY_PriceTW_1 = 0;
        $DEX_PcsTW_1 = 0;
        $DEX_PriceTW_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW_2 = 0;
        $Price_AfterTW_2 = 0;
        $Po_PcsTW_2 = 0;
        $Po_PriceTW_2 = 0;
        $Neg_PcsTW_2 = 0;
        $Neg_PriceTW_2 = 0;
        $Purchase_PcsTW_2 = 0;
        $Purchase_PriceTW_2 = 0;
        $BackChange_PcsTW_2 = 0;
        $BackChange_PriceTW_2 = 0;
        $ReciveTranfer_PcsTW_2 = 0;
        $ReciveTranfer_PriceTW_2 = 0;
        $ReturnItem_PCSTW_2 = 0;
        $ReturnItem_PriceTW_2 = 0;
        $AllIn_PcsTW_2 = 0;
        $AllIn_PriceTW_2 = 0;
        $SendSale_PcsTW_2 = 0;
        $SendSale_PriceTW_2 = 0;
        $ReciveTranOut_PcsTW_2 = 0;
        $ReciveTranOut_PriceTW_2 = 0;
        $ReturnStore_PcsTW_2 = 0;
        $ReturnStore_PriceTW_2 = 0;
        $AllOut_PcsTW_2 = 0;
        $AllOut_PriceTW_2 = 0;
        $Calculate_PcsTW_2 = 0;
        $Calculate_PriceTW_2 = 0;
        $NewCalculate_PcsTW_2 = 0;
        $NewCalculate_PriceTW_2 = 0;
        $Diff_PcsTW_2 = 0;
        $Diff_PriceTW_2 = 0;
        $NewTotal_PcsTW_2 = 0;
        $NewTotal_PriceTW_2 = 0;
        $NewTotalDiff_NavTW_2 = 0;
        $NewTotalDiff_CalTW_2 = 0;
        $a7f1fgbu02s_PcsTW_2 = 0;
        $a7f1fgbu02s_PriceTW_2 = 0;
        $a7f2fgbu10s_PcsTW_2 = 0;
        $a7f2fgbu10s_PriceTW_2 = 0;
        $a7f2thbu05s_PcsTW_2 = 0;
        $a7f2thbu05s_PriceTW_2 = 0;
        $a7f2debu10s_PcsTW_2 = 0;
        $a7f2debu10s_PriceTW_2 = 0;
        $a7f2exbu11s_PcsTW_2 = 0;
        $a7f2exbu11s_PriceTW_2 = 0;
        $a7f2twbu04s_PcsTW_2 = 0;
        $a7f2twbu04s_PriceTW_2 = 0;
        $a7f2twbu07s_PcsTW_2 = 0;
        $a7f2twbu07s_PriceTW_2 = 0;
        $a7f2cebu10s_PcsTW_2 = 0;
        $a7f2cebu10s_PriceTW_2 = 0;
        $a8f1fgbu02s_PcsTW_2 = 0;
        $a8f1fgbu02s_PriceTW_2 = 0;
        $a8f2fgbu10s_PcsTW_2 = 0;
        $a8f2fgbu10s_PriceTW_2 = 0;
        $a8f2thbu05s_PcsTW_2 = 0;
        $a8f2thbu05s_PriceTW_2 = 0;
        $a8f2debu10s_PcsTW_2 = 0;
        $a8f2debu10s_PriceTW_2 = 0;
        $a8f2exbu11s_PcsTW_2 = 0;
        $a8f2exbu11s_PriceTW_2 = 0;
        $a8f2twbu04s_PcsTW_2 = 0;
        $a8f2twbu04s_PriceTW_2 = 0;
        $a8f2twbu07s_PcsTW_2 = 0;
        $a8f2twbu07s_PriceTW_2 = 0;
        $a8f2cebu10s_PcsTW_2 = 0;
        $a8f2cebu10s_PriceTW_2 = 0;
        $DC1_PcsTW_2 = 0;
        $DC1_PriceTW_2 = 0;
        $DCP_PcsTW_2 = 0;
        $DCP_PriceTW_2 = 0;
        $DCY_PcsTW_2 = 0;
        $DCY_PriceTW_2 = 0;
        $DEX_PcsTW_2 = 0;
        $DEX_PriceTW_2 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSTW_1 = 0;
        $Price_AfterSTW_1 = 0;
        $Po_PcsSTW_1 = 0;
        $Po_PriceSTW_1 = 0;
        $Neg_PcsSTW_1 = 0;
        $Neg_PriceSTW_1 = 0;
        $Purchase_PcsSTW_1 = 0;
        $Purchase_PriceSTW_1 = 0;
        $BackChange_PcsSTW_1 = 0;
        $BackChange_PriceSTW_1 = 0;
        $ReciveTranfer_PcsSTW_1 = 0;
        $ReciveTranfer_PriceSTW_1 = 0;
        $ReturnItem_PCSSTW_1 = 0;
        $ReturnItem_PriceSTW_1 = 0;
        $AllIn_PcsSTW_1 = 0;
        $AllIn_PriceSTW_1 = 0;
        $SendSale_PcsSTW_1 = 0;
        $SendSale_PriceSTW_1 = 0;
        $ReciveTranOut_PcsSTW_1 = 0;
        $ReciveTranOut_PriceSTW_1 = 0;
        $ReturnStore_PcsSTW_1 = 0;
        $ReturnStore_PriceSTW_1 = 0;
        $AllOut_PcsSTW_1 = 0;
        $AllOut_PriceSTW_1 = 0;
        $Calculate_PcsSTW_1 = 0;
        $Calculate_PriceSTW_1 = 0;
        $NewCalculate_PcsSTW_1 = 0;
        $NewCalculate_PriceSTW_1 = 0;
        $Diff_PcsSTW_1 = 0;
        $Diff_PriceSTW_1 = 0;
        $NewTotal_PcsSTW_1 = 0;
        $NewTotal_PriceSTW_1 = 0;
        $NewTotalDiff_NavSTW_1 = 0;
        $NewTotalDiff_CalSTW_1 = 0;
        $a7f1fgbu02s_PcsSTW_1 = 0;
        $a7f1fgbu02s_PriceSTW_1 = 0;
        $a7f2fgbu10s_PcsSTW_1 = 0;
        $a7f2fgbu10s_PriceSTW_1 = 0;
        $a7f2thbu05s_PcsSTW_1 = 0;
        $a7f2thbu05s_PriceSTW_1 = 0;
        $a7f2debu10s_PcsSTW_1 = 0;
        $a7f2debu10s_PriceSTW_1 = 0;
        $a7f2exbu11s_PcsSTW_1 = 0;
        $a7f2exbu11s_PriceSTW_1 = 0;
        $a7f2twbu04s_PcsSTW_1 = 0;
        $a7f2twbu04s_PriceSTW_1 = 0;
        $a7f2twbu07s_PcsSTW_1 = 0;
        $a7f2twbu07s_PriceSTW_1 = 0;
        $a7f2cebu10s_PcsSTW_1 = 0;
        $a7f2cebu10s_PriceSTW_1 = 0;
        $a8f1fgbu02s_PcsSTW_1 = 0;
        $a8f1fgbu02s_PriceSTW_1 = 0;
        $a8f2fgbu10s_PcsSTW_1 = 0;
        $a8f2fgbu10s_PriceSTW_1 = 0;
        $a8f2thbu05s_PcsSTW_1 = 0;
        $a8f2thbu05s_PriceSTW_1 = 0;
        $a8f2debu10s_PcsSTW_1 = 0;
        $a8f2debu10s_PriceSTW_1 = 0;
        $a8f2exbu11s_PcsSTW_1 = 0;
        $a8f2exbu11s_PriceSTW_1 = 0;
        $a8f2twbu04s_PcsSTW_1 = 0;
        $a8f2twbu04s_PriceSTW_1 = 0;
        $a8f2twbu07s_PcsSTW_1 = 0;
        $a8f2twbu07s_PriceSTW_1 = 0;
        $a8f2cebu10s_PcsSTW_1 = 0;
        $a8f2cebu10s_PriceSTW_1 = 0;
        $DC1_PcsSTW_1 = 0;
        $DC1_PriceSTW_1 = 0;
        $DCP_PcsSTW_1 = 0;
        $DCP_PriceSTW_1 = 0;
        $DCY_PcsSTW_1 = 0;
        $DCY_PriceSTW_1 = 0;
        $DEX_PcsSTW_1 = 0;
        $DEX_PriceSTW_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSTW_2 = 0;
        $Price_AfterSTW_2 = 0;
        $Po_PcsSTW_2 = 0;
        $Po_PriceSTW_2 = 0;
        $Neg_PcsSTW_2 = 0;
        $Neg_PriceSTW_2 = 0;
        $Purchase_PcsSTW_2 = 0;
        $Purchase_PriceSTW_2 = 0;
        $BackChange_PcsSTW_2 = 0;
        $BackChange_PriceSTW_2 = 0;
        $ReciveTranfer_PcsSTW_2 = 0;
        $ReciveTranfer_PriceSTW_2 = 0;
        $ReturnItem_PCSSTW_2 = 0;
        $ReturnItem_PriceSTW_2 = 0;
        $AllIn_PcsSTW_2 = 0;
        $AllIn_PriceSTW_2 = 0;
        $SendSale_PcsSTW_2 = 0;
        $SendSale_PriceSTW_2 = 0;
        $ReciveTranOut_PcsSTW_2 = 0;
        $ReciveTranOut_PriceSTW_2 = 0;
        $ReturnStore_PcsSTW_2 = 0;
        $ReturnStore_PriceSTW_2 = 0;
        $AllOut_PcsSTW_2 = 0;
        $AllOut_PriceSTW_2 = 0;
        $Calculate_PcsSTW_2 = 0;
        $Calculate_PriceSTW_2 = 0;
        $NewCalculate_PcsSTW_2 = 0;
        $NewCalculate_PriceSTW_2 = 0;
        $Diff_PcsSTW_2 = 0;
        $Diff_PriceSTW_2 = 0;
        $NewTotal_PcsSTW_2 = 0;
        $NewTotal_PriceSTW_2 = 0;
        $NewTotalDiff_NavSTW_2 = 0;
        $NewTotalDiff_CalSTW_2 = 0;
        $a7f1fgbu02s_PcsSTW_2 = 0;
        $a7f1fgbu02s_PriceSTW_2 = 0;
        $a7f2fgbu10s_PcsSTW_2 = 0;
        $a7f2fgbu10s_PriceSTW_2 = 0;
        $a7f2thbu05s_PcsSTW_2 = 0;
        $a7f2thbu05s_PriceSTW_2 = 0;
        $a7f2debu10s_PcsSTW_2 = 0;
        $a7f2debu10s_PriceSTW_2 = 0;
        $a7f2exbu11s_PcsSTW_2 = 0;
        $a7f2exbu11s_PriceSTW_2 = 0;
        $a7f2twbu04s_PcsSTW_2 = 0;
        $a7f2twbu04s_PriceSTW_2 = 0;
        $a7f2twbu07s_PcsSTW_2 = 0;
        $a7f2twbu07s_PriceSTW_2 = 0;
        $a7f2cebu10s_PcsSTW_2 = 0;
        $a7f2cebu10s_PriceSTW_2 = 0;
        $a8f1fgbu02s_PcsSTW_2 = 0;
        $a8f1fgbu02s_PriceSTW_2 = 0;
        $a8f2fgbu10s_PcsSTW_2 = 0;
        $a8f2fgbu10s_PriceSTW_2 = 0;
        $a8f2thbu05s_PcsSTW_2 = 0;
        $a8f2thbu05s_PriceSTW_2 = 0;
        $a8f2debu10s_PcsSTW_2 = 0;
        $a8f2debu10s_PriceSTW_2 = 0;
        $a8f2exbu11s_PcsSTW_2 = 0;
        $a8f2exbu11s_PriceSTW_2 = 0;
        $a8f2twbu04s_PcsSTW_2 = 0;
        $a8f2twbu04s_PriceSTW_2 = 0;
        $a8f2twbu07s_PcsSTW_2 = 0;
        $a8f2twbu07s_PriceSTW_2 = 0;
        $a8f2cebu10s_PcsSTW_2 = 0;
        $a8f2cebu10s_PriceSTW_2 = 0;
        $DC1_PcsSTW_2 = 0;
        $DC1_PriceSTW_2 = 0;
        $DCP_PcsSTW_2 = 0;
        $DCP_PriceSTW_2 = 0;
        $DCY_PcsSTW_2 = 0;
        $DCY_PriceSTW_2 = 0;
        $DEX_PcsSTW_2 = 0;
        $DEX_PriceSTW_2 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterLN_1 = 0;
        $Price_AfterLN_1 = 0;
        $Po_PcsLN_1 = 0;
        $Po_PriceLN_1 = 0;
        $Neg_PcsLN_1 = 0;
        $Neg_PriceLN_1 = 0;
        $Purchase_PcsLN_1 = 0;
        $Purchase_PriceLN_1 = 0;
        $BackChange_PcsLN_1 = 0;
        $BackChange_PriceLN_1 = 0;
        $ReciveTranfer_PcsLN_1 = 0;
        $ReciveTranfer_PriceLN_1 = 0;
        $ReturnItem_PCSLN_1 = 0;
        $ReturnItem_PriceLN_1 = 0;
        $AllIn_PcsLN_1 = 0;
        $AllIn_PriceLN_1 = 0;
        $SendSale_PcsLN_1 = 0;
        $SendSale_PriceLN_1 = 0;
        $ReciveTranOut_PcsLN_1 = 0;
        $ReciveTranOut_PriceLN_1 = 0;
        $ReturnStore_PcsLN_1 = 0;
        $ReturnStore_PriceLN_1 = 0;
        $AllOut_PcsLN_1 = 0;
        $AllOut_PriceLN_1 = 0;
        $Calculate_PcsLN_1 = 0;
        $Calculate_PriceLN_1 = 0;
        $NewCalculate_PcsLN_1 = 0;
        $NewCalculate_PriceLN_1 = 0;
        $Diff_PcsLN_1 = 0;
        $Diff_PriceLN_1 = 0;
        $NewTotal_PcsLN_1 = 0;
        $NewTotal_PriceLN_1 = 0;
        $NewTotalDiff_NavLN_1 = 0;
        $NewTotalDiff_CalLN_1 = 0;
        $a7f1fgbu02s_PcsLN_1 = 0;
        $a7f1fgbu02s_PriceLN_1 = 0;
        $a7f2fgbu10s_PcsLN_1 = 0;
        $a7f2fgbu10s_PriceLN_1 = 0;
        $a7f2thbu05s_PcsLN_1 = 0;
        $a7f2thbu05s_PriceLN_1 = 0;
        $a7f2debu10s_PcsLN_1 = 0;
        $a7f2debu10s_PriceLN_1 = 0;
        $a7f2exbu11s_PcsLN_1 = 0;
        $a7f2exbu11s_PriceLN_1 = 0;
        $a7f2twbu04s_PcsLN_1 = 0;
        $a7f2twbu04s_PriceLN_1 = 0;
        $a7f2twbu07s_PcsLN_1 = 0;
        $a7f2twbu07s_PriceLN_1 = 0;
        $a7f2cebu10s_PcsLN_1 = 0;
        $a7f2cebu10s_PriceLN_1 = 0;
        $a8f1fgbu02s_PcsLN_1 = 0;
        $a8f1fgbu02s_PriceLN_1 = 0;
        $a8f2fgbu10s_PcsLN_1 = 0;
        $a8f2fgbu10s_PriceLN_1 = 0;
        $a8f2thbu05s_PcsLN_1 = 0;
        $a8f2thbu05s_PriceLN_1 = 0;
        $a8f2debu10s_PcsLN_1 = 0;
        $a8f2debu10s_PriceLN_1 = 0;
        $a8f2exbu11s_PcsLN_1 = 0;
        $a8f2exbu11s_PriceLN_1 = 0;
        $a8f2twbu04s_PcsLN_1 = 0;
        $a8f2twbu04s_PriceLN_1 = 0;
        $a8f2twbu07s_PcsLN_1 = 0;
        $a8f2twbu07s_PriceLN_1 = 0;
        $a8f2cebu10s_PcsLN_1 = 0;
        $a8f2cebu10s_PriceLN_1 = 0;
        $DC1_PcsLN_1 = 0;
        $DC1_PriceLN_1 = 0;
        $DCP_PcsLN_1 = 0;
        $DCP_PriceLN_1 = 0;
        $DCY_PcsLN_1 = 0;
        $DCY_PriceLN_1 = 0;
        $DEX_PcsLN_1 = 0;
        $DEX_PriceLN_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSLN_1 = 0;
        $Price_AfterSLN_1 = 0;
        $Po_PcsSLN_1 = 0;
        $Po_PriceSLN_1 = 0;
        $Neg_PcsSLN_1 = 0;
        $Neg_PriceSLN_1 = 0;
        $Purchase_PcsSLN_1 = 0;
        $Purchase_PriceSLN_1 = 0;
        $BackChange_PcsSLN_1 = 0;
        $BackChange_PriceSLN_1 = 0;
        $ReciveTranfer_PcsSLN_1 = 0;
        $ReciveTranfer_PriceSLN_1 = 0;
        $ReturnItem_PCSSLN_1 = 0;
        $ReturnItem_PriceSLN_1 = 0;
        $AllIn_PcsSLN_1 = 0;
        $AllIn_PriceSLN_1 = 0;
        $SendSale_PcsSLN_1 = 0;
        $SendSale_PriceSLN_1 = 0;
        $ReciveTranOut_PcsSLN_1 = 0;
        $ReciveTranOut_PriceSLN_1 = 0;
        $ReturnStore_PcsSLN_1 = 0;
        $ReturnStore_PriceSLN_1 = 0;
        $AllOut_PcsSLN_1 = 0;
        $AllOut_PriceSLN_1 = 0;
        $Calculate_PcsSLN_1 = 0;
        $Calculate_PriceSLN_1 = 0;
        $NewCalculate_PcsSLN_1 = 0;
        $NewCalculate_PriceSLN_1 = 0;
        $Diff_PcsSLN_1 = 0;
        $Diff_PriceSLN_1 = 0;
        $NewTotal_PcsSLN_1 = 0;
        $NewTotal_PriceSLN_1 = 0;
        $NewTotalDiff_NavSLN_1 = 0;
        $NewTotalDiff_CalSLN_1 = 0;
        $a7f1fgbu02s_PcsSLN_1 = 0;
        $a7f1fgbu02s_PriceSLN_1 = 0;
        $a7f2fgbu10s_PcsSLN_1 = 0;
        $a7f2fgbu10s_PriceSLN_1 = 0;
        $a7f2thbu05s_PcsSLN_1 = 0;
        $a7f2thbu05s_PriceSLN_1 = 0;
        $a7f2debu10s_PcsSLN_1 = 0;
        $a7f2debu10s_PriceSLN_1 = 0;
        $a7f2exbu11s_PcsSLN_1 = 0;
        $a7f2exbu11s_PriceSLN_1 = 0;
        $a7f2twbu04s_PcsSLN_1 = 0;
        $a7f2twbu04s_PriceSLN_1 = 0;
        $a7f2twbu07s_PcsSLN_1 = 0;
        $a7f2twbu07s_PriceSLN_1 = 0;
        $a7f2cebu10s_PcsSLN_1 = 0;
        $a7f2cebu10s_PriceSLN_1 = 0;
        $a8f1fgbu02s_PcsSLN_1 = 0;
        $a8f1fgbu02s_PriceSLN_1 = 0;
        $a8f2fgbu10s_PcsSLN_1 = 0;
        $a8f2fgbu10s_PriceSLN_1 = 0;
        $a8f2thbu05s_PcsSLN_1 = 0;
        $a8f2thbu05s_PriceSLN_1 = 0;
        $a8f2debu10s_PcsSLN_1 = 0;
        $a8f2debu10s_PriceSLN_1 = 0;
        $a8f2exbu11s_PcsSLN_1 = 0;
        $a8f2exbu11s_PriceSLN_1 = 0;
        $a8f2twbu04s_PcsSLN_1 = 0;
        $a8f2twbu04s_PriceSLN_1 = 0;
        $a8f2twbu07s_PcsSLN_1 = 0;
        $a8f2twbu07s_PriceSLN_1 = 0;
        $a8f2cebu10s_PcsSLN_1 = 0;
        $a8f2cebu10s_PriceSLN_1 = 0;
        $DC1_PcsSLN_1 = 0;
        $DC1_PriceSLN_1 = 0;
        $DCP_PcsSLN_1 = 0;
        $DCP_PriceSLN_1 = 0;
        $DCY_PcsSLN_1 = 0;
        $DCY_PriceSLN_1 = 0;
        $DEX_PcsSLN_1 = 0;
        $DEX_PriceSLN_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterFN_1 = 0;
        $Price_AfterFN_1 = 0;
        $Po_PcsFN_1 = 0;
        $Po_PriceFN_1 = 0;
        $Neg_PcsFN_1 = 0;
        $Neg_PriceFN_1 = 0;
        $Purchase_PcsFN_1 = 0;
        $Purchase_PriceFN_1 = 0;
        $BackChange_PcsFN_1 = 0;
        $BackChange_PriceFN_1 = 0;
        $ReciveTranfer_PcsFN_1 = 0;
        $ReciveTranfer_PriceFN_1 = 0;
        $ReturnItem_PCSFN_1 = 0;
        $ReturnItem_PriceFN_1 = 0;
        $AllIn_PcsFN_1 = 0;
        $AllIn_PriceFN_1 = 0;
        $SendSale_PcsFN_1 = 0;
        $SendSale_PriceFN_1 = 0;
        $ReciveTranOut_PcsFN_1 = 0;
        $ReciveTranOut_PriceFN_1 = 0;
        $ReturnStore_PcsFN_1 = 0;
        $ReturnStore_PriceFN_1 = 0;
        $AllOut_PcsFN_1 = 0;
        $AllOut_PriceFN_1 = 0;
        $Calculate_PcsFN_1 = 0;
        $Calculate_PriceFN_1 = 0;
        $NewCalculate_PcsFN_1 = 0;
        $NewCalculate_PriceFN_1 = 0;
        $Diff_PcsFN_1 = 0;
        $Diff_PriceFN_1 = 0;
        $NewTotal_PcsFN_1 = 0;
        $NewTotal_PriceFN_1 = 0;
        $NewTotalDiff_NavFN_1 = 0;
        $NewTotalDiff_CalFN_1 = 0;
        $a7f1fgbu02s_PcsFN_1 = 0;
        $a7f1fgbu02s_PriceFN_1 = 0;
        $a7f2fgbu10s_PcsFN_1 = 0;
        $a7f2fgbu10s_PriceFN_1 = 0;
        $a7f2thbu05s_PcsFN_1 = 0;
        $a7f2thbu05s_PriceFN_1 = 0;
        $a7f2debu10s_PcsFN_1 = 0;
        $a7f2debu10s_PriceFN_1 = 0;
        $a7f2exbu11s_PcsFN_1 = 0;
        $a7f2exbu11s_PriceFN_1 = 0;
        $a7f2twbu04s_PcsFN_1 = 0;
        $a7f2twbu04s_PriceFN_1 = 0;
        $a7f2twbu07s_PcsFN_1 = 0;
        $a7f2twbu07s_PriceFN_1 = 0;
        $a7f2cebu10s_PcsFN_1 = 0;
        $a7f2cebu10s_PriceFN_1 = 0;
        $a8f1fgbu02s_PcsFN_1 = 0;
        $a8f1fgbu02s_PriceFN_1 = 0;
        $a8f2fgbu10s_PcsFN_1 = 0;
        $a8f2fgbu10s_PriceFN_1 = 0;
        $a8f2thbu05s_PcsFN_1 = 0;
        $a8f2thbu05s_PriceFN_1 = 0;
        $a8f2debu10s_PcsFN_1 = 0;
        $a8f2debu10s_PriceFN_1 = 0;
        $a8f2exbu11s_PcsFN_1 = 0;
        $a8f2exbu11s_PriceFN_1 = 0;
        $a8f2twbu04s_PcsFN_1 = 0;
        $a8f2twbu04s_PriceFN_1 = 0;
        $a8f2twbu07s_PcsFN_1 = 0;
        $a8f2twbu07s_PriceFN_1 = 0;
        $a8f2cebu10s_PcsFN_1 = 0;
        $a8f2cebu10s_PriceFN_1 = 0;
        $DC1_PcsFN_1 = 0;
        $DC1_PriceFN_1 = 0;
        $DCP_PcsFN_1 = 0;
        $DCP_PriceFN_1 = 0;
        $DCY_PcsFN_1 = 0;
        $DCY_PriceFN_1 = 0;
        $DEX_PcsFN_1 = 0;
        $DEX_PriceFN_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_1 = 0;
        $Price_AfterAS_1 = 0;
        $Po_PcsAS_1 = 0;
        $Po_PriceAS_1 = 0;
        $Neg_PcsAS_1 = 0;
        $Neg_PriceAS_1 = 0;
        $Purchase_PcsAS_1 = 0;
        $Purchase_PriceAS_1 = 0;
        $BackChange_PcsAS_1 = 0;
        $BackChange_PriceAS_1 = 0;
        $ReciveTranfer_PcsAS_1 = 0;
        $ReciveTranfer_PriceAS_1 = 0;
        $ReturnItem_PCSAS_1 = 0;
        $ReturnItem_PriceAS_1 = 0;
        $AllIn_PcsAS_1 = 0;
        $AllIn_PriceAS_1 = 0;
        $SendSale_PcsAS_1 = 0;
        $SendSale_PriceAS_1 = 0;
        $ReciveTranOut_PcsAS_1 = 0;
        $ReciveTranOut_PriceAS_1 = 0;
        $ReturnStore_PcsAS_1 = 0;
        $ReturnStore_PriceAS_1 = 0;
        $AllOut_PcsAS_1 = 0;
        $AllOut_PriceAS_1 = 0;
        $Calculate_PcsAS_1 = 0;
        $Calculate_PriceAS_1 = 0;
        $NewCalculate_PcsAS_1 = 0;
        $NewCalculate_PriceAS_1 = 0;
        $Diff_PcsAS_1 = 0;
        $Diff_PriceAS_1 = 0;
        $NewTotal_PcsAS_1 = 0;
        $NewTotal_PriceAS_1 = 0;
        $NewTotalDiff_NavAS_1 = 0;
        $NewTotalDiff_CalAS_1 = 0;
        $a7f1fgbu02s_PcsAS_1 = 0;
        $a7f1fgbu02s_PriceAS_1 = 0;
        $a7f2fgbu10s_PcsAS_1 = 0;
        $a7f2fgbu10s_PriceAS_1 = 0;
        $a7f2thbu05s_PcsAS_1 = 0;
        $a7f2thbu05s_PriceAS_1 = 0;
        $a7f2debu10s_PcsAS_1 = 0;
        $a7f2debu10s_PriceAS_1 = 0;
        $a7f2exbu11s_PcsAS_1 = 0;
        $a7f2exbu11s_PriceAS_1 = 0;
        $a7f2twbu04s_PcsAS_1 = 0;
        $a7f2twbu04s_PriceAS_1 = 0;
        $a7f2twbu07s_PcsAS_1 = 0;
        $a7f2twbu07s_PriceAS_1 = 0;
        $a7f2cebu10s_PcsAS_1 = 0;
        $a7f2cebu10s_PriceAS_1 = 0;
        $a8f1fgbu02s_PcsAS_1 = 0;
        $a8f1fgbu02s_PriceAS_1 = 0;
        $a8f2fgbu10s_PcsAS_1 = 0;
        $a8f2fgbu10s_PriceAS_1 = 0;
        $a8f2thbu05s_PcsAS_1 = 0;
        $a8f2thbu05s_PriceAS_1 = 0;
        $a8f2debu10s_PcsAS_1 = 0;
        $a8f2debu10s_PriceAS_1 = 0;
        $a8f2exbu11s_PcsAS_1 = 0;
        $a8f2exbu11s_PriceAS_1 = 0;
        $a8f2twbu04s_PcsAS_1 = 0;
        $a8f2twbu04s_PriceAS_1 = 0;
        $a8f2twbu07s_PcsAS_1 = 0;
        $a8f2twbu07s_PriceAS_1 = 0;
        $a8f2cebu10s_PcsAS_1 = 0;
        $a8f2cebu10s_PriceAS_1 = 0;
        $DC1_PcsAS_1 = 0;
        $DC1_PriceAS_1 = 0;
        $DCP_PcsAS_1 = 0;
        $DCP_PriceAS_1 = 0;
        $DCY_PcsAS_1 = 0;
        $DCY_PriceAS_1 = 0;
        $DEX_PcsAS_1 = 0;
        $DEX_PriceAS_1 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_2 = 0;
        $Price_AfterAS_2 = 0;
        $Po_PcsAS_2 = 0;
        $Po_PriceAS_2 = 0;
        $Neg_PcsAS_2 = 0;
        $Neg_PriceAS_2 = 0;
        $Purchase_PcsAS_2 = 0;
        $Purchase_PriceAS_2 = 0;
        $BackChange_PcsAS_2 = 0;
        $BackChange_PriceAS_2 = 0;
        $ReciveTranfer_PcsAS_2 = 0;
        $ReciveTranfer_PriceAS_2 = 0;
        $ReturnItem_PCSAS_2 = 0;
        $ReturnItem_PriceAS_2 = 0;
        $AllIn_PcsAS_2 = 0;
        $AllIn_PriceAS_2 = 0;
        $SendSale_PcsAS_2 = 0;
        $SendSale_PriceAS_2 = 0;
        $ReciveTranOut_PcsAS_2 = 0;
        $ReciveTranOut_PriceAS_2 = 0;
        $ReturnStore_PcsAS_2 = 0;
        $ReturnStore_PriceAS_2 = 0;
        $AllOut_PcsAS_2 = 0;
        $AllOut_PriceAS_2 = 0;
        $Calculate_PcsAS_2 = 0;
        $Calculate_PriceAS_2 = 0;
        $NewCalculate_PcsAS_2 = 0;
        $NewCalculate_PriceAS_2 = 0;
        $Diff_PcsAS_2 = 0;
        $Diff_PriceAS_2 = 0;
        $NewTotal_PcsAS_2 = 0;
        $NewTotal_PriceAS_2 = 0;
        $NewTotalDiff_NavAS_2 = 0;
        $NewTotalDiff_CalAS_2 = 0;
        $a7f1fgbu02s_PcsAS_2 = 0;
        $a7f1fgbu02s_PriceAS_2 = 0;
        $a7f2fgbu10s_PcsAS_2 = 0;
        $a7f2fgbu10s_PriceAS_2 = 0;
        $a7f2thbu05s_PcsAS_2 = 0;
        $a7f2thbu05s_PriceAS_2 = 0;
        $a7f2debu10s_PcsAS_2 = 0;
        $a7f2debu10s_PriceAS_2 = 0;
        $a7f2exbu11s_PcsAS_2 = 0;
        $a7f2exbu11s_PriceAS_2 = 0;
        $a7f2twbu04s_PcsAS_2 = 0;
        $a7f2twbu04s_PriceAS_2 = 0;
        $a7f2twbu07s_PcsAS_2 = 0;
        $a7f2twbu07s_PriceAS_2 = 0;
        $a7f2cebu10s_PcsAS_2 = 0;
        $a7f2cebu10s_PriceAS_2 = 0;
        $a8f1fgbu02s_PcsAS_2 = 0;
        $a8f1fgbu02s_PriceAS_2 = 0;
        $a8f2fgbu10s_PcsAS_2 = 0;
        $a8f2fgbu10s_PriceAS_2 = 0;
        $a8f2thbu05s_PcsAS_2 = 0;
        $a8f2thbu05s_PriceAS_2 = 0;
        $a8f2debu10s_PcsAS_2 = 0;
        $a8f2debu10s_PriceAS_2 = 0;
        $a8f2exbu11s_PcsAS_2 = 0;
        $a8f2exbu11s_PriceAS_2 = 0;
        $a8f2twbu04s_PcsAS_2 = 0;
        $a8f2twbu04s_PriceAS_2 = 0;
        $a8f2twbu07s_PcsAS_2 = 0;
        $a8f2twbu07s_PriceAS_2 = 0;
        $a8f2cebu10s_PcsAS_2 = 0;
        $a8f2cebu10s_PriceAS_2 = 0;
        $DC1_PcsAS_2 = 0;
        $DC1_PriceAS_2 = 0;
        $DCP_PcsAS_2 = 0;
        $DCP_PriceAS_2 = 0;
        $DCY_PcsAS_2 = 0;
        $DCY_PriceAS_2 = 0;
        $DEX_PcsAS_2 = 0;
        $DEX_PriceAS_2 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_3 = 0;
        $Price_AfterAS_3 = 0;
        $Po_PcsAS_3 = 0;
        $Po_PriceAS_3 = 0;
        $Neg_PcsAS_3 = 0;
        $Neg_PriceAS_3 = 0;
        $Purchase_PcsAS_3 = 0;
        $Purchase_PriceAS_3 = 0;
        $BackChange_PcsAS_3 = 0;
        $BackChange_PriceAS_3 = 0;
        $ReciveTranfer_PcsAS_3 = 0;
        $ReciveTranfer_PriceAS_3 = 0;
        $ReturnItem_PCSAS_3 = 0;
        $ReturnItem_PriceAS_3 = 0;
        $AllIn_PcsAS_3 = 0;
        $AllIn_PriceAS_3 = 0;
        $SendSale_PcsAS_3 = 0;
        $SendSale_PriceAS_3 = 0;
        $ReciveTranOut_PcsAS_3 = 0;
        $ReciveTranOut_PriceAS_3 = 0;
        $ReturnStore_PcsAS_3 = 0;
        $ReturnStore_PriceAS_3 = 0;
        $AllOut_PcsAS_3 = 0;
        $AllOut_PriceAS_3 = 0;
        $Calculate_PcsAS_3 = 0;
        $Calculate_PriceAS_3 = 0;
        $NewCalculate_PcsAS_3 = 0;
        $NewCalculate_PriceAS_3 = 0;
        $Diff_PcsAS_3 = 0;
        $Diff_PriceAS_3 = 0;
        $NewTotal_PcsAS_3 = 0;
        $NewTotal_PriceAS_3 = 0;
        $NewTotalDiff_NavAS_3 = 0;
        $NewTotalDiff_CalAS_3 = 0;
        $a7f1fgbu02s_PcsAS_3 = 0;
        $a7f1fgbu02s_PriceAS_3 = 0;
        $a7f2fgbu10s_PcsAS_3 = 0;
        $a7f2fgbu10s_PriceAS_3 = 0;
        $a7f2thbu05s_PcsAS_3 = 0;
        $a7f2thbu05s_PriceAS_3 = 0;
        $a7f2debu10s_PcsAS_3 = 0;
        $a7f2debu10s_PriceAS_3 = 0;
        $a7f2exbu11s_PcsAS_3 = 0;
        $a7f2exbu11s_PriceAS_3 = 0;
        $a7f2twbu04s_PcsAS_3 = 0;
        $a7f2twbu04s_PriceAS_3 = 0;
        $a7f2twbu07s_PcsAS_3 = 0;
        $a7f2twbu07s_PriceAS_3 = 0;
        $a7f2cebu10s_PcsAS_3 = 0;
        $a7f2cebu10s_PriceAS_3 = 0;
        $a8f1fgbu02s_PcsAS_3 = 0;
        $a8f1fgbu02s_PriceAS_3 = 0;
        $a8f2fgbu10s_PcsAS_3 = 0;
        $a8f2fgbu10s_PriceAS_3 = 0;
        $a8f2thbu05s_PcsAS_3 = 0;
        $a8f2thbu05s_PriceAS_3 = 0;
        $a8f2debu10s_PcsAS_3 = 0;
        $a8f2debu10s_PriceAS_3 = 0;
        $a8f2exbu11s_PcsAS_3 = 0;
        $a8f2exbu11s_PriceAS_3 = 0;
        $a8f2twbu04s_PcsAS_3 = 0;
        $a8f2twbu04s_PriceAS_3 = 0;
        $a8f2twbu07s_PcsAS_3 = 0;
        $a8f2twbu07s_PriceAS_3 = 0;
        $a8f2cebu10s_PcsAS_3 = 0;
        $a8f2cebu10s_PriceAS_3 = 0;
        $DC1_PcsAS_3 = 0;
        $DC1_PriceAS_3 = 0;
        $DCP_PcsAS_3 = 0;
        $DCP_PriceAS_3 = 0;
        $DCY_PcsAS_3 = 0;
        $DCY_PriceAS_3 = 0;
        $DEX_PcsAS_3 = 0;
        $DEX_PriceAS_3 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_4 = 0;
        $Price_AfterAS_4 = 0;
        $Po_PcsAS_4 = 0;
        $Po_PriceAS_4 = 0;
        $Neg_PcsAS_4 = 0;
        $Neg_PriceAS_4 = 0;
        $Purchase_PcsAS_4 = 0;
        $Purchase_PriceAS_4 = 0;
        $BackChange_PcsAS_4 = 0;
        $BackChange_PriceAS_4 = 0;
        $ReciveTranfer_PcsAS_4 = 0;
        $ReciveTranfer_PriceAS_4 = 0;
        $ReturnItem_PCSAS_4 = 0;
        $ReturnItem_PriceAS_4 = 0;
        $AllIn_PcsAS_4 = 0;
        $AllIn_PriceAS_4 = 0;
        $SendSale_PcsAS_4 = 0;
        $SendSale_PriceAS_4 = 0;
        $ReciveTranOut_PcsAS_4 = 0;
        $ReciveTranOut_PriceAS_4 = 0;
        $ReturnStore_PcsAS_4 = 0;
        $ReturnStore_PriceAS_4 = 0;
        $AllOut_PcsAS_4 = 0;
        $AllOut_PriceAS_4 = 0;
        $Calculate_PcsAS_4 = 0;
        $Calculate_PriceAS_4 = 0;
        $NewCalculate_PcsAS_4 = 0;
        $NewCalculate_PriceAS_4 = 0;
        $Diff_PcsAS_4 = 0;
        $Diff_PriceAS_4 = 0;
        $NewTotal_PcsAS_4 = 0;
        $NewTotal_PriceAS_4 = 0;
        $NewTotalDiff_NavAS_4 = 0;
        $NewTotalDiff_CalAS_4 = 0;
        $a7f1fgbu02s_PcsAS_4 = 0;
        $a7f1fgbu02s_PriceAS_4 = 0;
        $a7f2fgbu10s_PcsAS_4 = 0;
        $a7f2fgbu10s_PriceAS_4 = 0;
        $a7f2thbu05s_PcsAS_4 = 0;
        $a7f2thbu05s_PriceAS_4 = 0;
        $a7f2debu10s_PcsAS_4 = 0;
        $a7f2debu10s_PriceAS_4 = 0;
        $a7f2exbu11s_PcsAS_4 = 0;
        $a7f2exbu11s_PriceAS_4 = 0;
        $a7f2twbu04s_PcsAS_4 = 0;
        $a7f2twbu04s_PriceAS_4 = 0;
        $a7f2twbu07s_PcsAS_4 = 0;
        $a7f2twbu07s_PriceAS_4 = 0;
        $a7f2cebu10s_PcsAS_4 = 0;
        $a7f2cebu10s_PriceAS_4 = 0;
        $a8f1fgbu02s_PcsAS_4 = 0;
        $a8f1fgbu02s_PriceAS_4 = 0;
        $a8f2fgbu10s_PcsAS_4 = 0;
        $a8f2fgbu10s_PriceAS_4 = 0;
        $a8f2thbu05s_PcsAS_4 = 0;
        $a8f2thbu05s_PriceAS_4 = 0;
        $a8f2debu10s_PcsAS_4 = 0;
        $a8f2debu10s_PriceAS_4 = 0;
        $a8f2exbu11s_PcsAS_4 = 0;
        $a8f2exbu11s_PriceAS_4 = 0;
        $a8f2twbu04s_PcsAS_4 = 0;
        $a8f2twbu04s_PriceAS_4 = 0;
        $a8f2twbu07s_PcsAS_4 = 0;
        $a8f2twbu07s_PriceAS_4 = 0;
        $a8f2cebu10s_PcsAS_4 = 0;
        $a8f2cebu10s_PriceAS_4 = 0;
        $DC1_PcsAS_4 = 0;
        $DC1_PriceAS_4 = 0;
        $DCP_PcsAS_4 = 0;
        $DCP_PriceAS_4 = 0;
        $DCY_PcsAS_4 = 0;
        $DCY_PriceAS_4 = 0;
        $DEX_PcsAS_4 = 0;
        $DEX_PriceAS_4 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_5 = 0;
        $Price_AfterAS_5 = 0;
        $Po_PcsAS_5 = 0;
        $Po_PriceAS_5 = 0;
        $Neg_PcsAS_5 = 0;
        $Neg_PriceAS_5 = 0;
        $Purchase_PcsAS_5 = 0;
        $Purchase_PriceAS_5 = 0;
        $BackChange_PcsAS_5 = 0;
        $BackChange_PriceAS_5 = 0;
        $ReciveTranfer_PcsAS_5 = 0;
        $ReciveTranfer_PriceAS_5 = 0;
        $ReturnItem_PCSAS_5 = 0;
        $ReturnItem_PriceAS_5 = 0;
        $AllIn_PcsAS_5 = 0;
        $AllIn_PriceAS_5 = 0;
        $SendSale_PcsAS_5 = 0;
        $SendSale_PriceAS_5 = 0;
        $ReciveTranOut_PcsAS_5 = 0;
        $ReciveTranOut_PriceAS_5 = 0;
        $ReturnStore_PcsAS_5 = 0;
        $ReturnStore_PriceAS_5 = 0;
        $AllOut_PcsAS_5 = 0;
        $AllOut_PriceAS_5 = 0;
        $Calculate_PcsAS_5 = 0;
        $Calculate_PriceAS_5 = 0;
        $NewCalculate_PcsAS_5 = 0;
        $NewCalculate_PriceAS_5 = 0;
        $Diff_PcsAS_5 = 0;
        $Diff_PriceAS_5 = 0;
        $NewTotal_PcsAS_5 = 0;
        $NewTotal_PriceAS_5 = 0;
        $NewTotalDiff_NavAS_5 = 0;
        $NewTotalDiff_CalAS_5 = 0;
        $a7f1fgbu02s_PcsAS_5 = 0;
        $a7f1fgbu02s_PriceAS_5 = 0;
        $a7f2fgbu10s_PcsAS_5 = 0;
        $a7f2fgbu10s_PriceAS_5 = 0;
        $a7f2thbu05s_PcsAS_5 = 0;
        $a7f2thbu05s_PriceAS_5 = 0;
        $a7f2debu10s_PcsAS_5 = 0;
        $a7f2debu10s_PriceAS_5 = 0;
        $a7f2exbu11s_PcsAS_5 = 0;
        $a7f2exbu11s_PriceAS_5 = 0;
        $a7f2twbu04s_PcsAS_5 = 0;
        $a7f2twbu04s_PriceAS_5 = 0;
        $a7f2twbu07s_PcsAS_5 = 0;
        $a7f2twbu07s_PriceAS_5 = 0;
        $a7f2cebu10s_PcsAS_5 = 0;
        $a7f2cebu10s_PriceAS_5 = 0;
        $a8f1fgbu02s_PcsAS_5 = 0;
        $a8f1fgbu02s_PriceAS_5 = 0;
        $a8f2fgbu10s_PcsAS_5 = 0;
        $a8f2fgbu10s_PriceAS_5 = 0;
        $a8f2thbu05s_PcsAS_5 = 0;
        $a8f2thbu05s_PriceAS_5 = 0;
        $a8f2debu10s_PcsAS_5 = 0;
        $a8f2debu10s_PriceAS_5 = 0;
        $a8f2exbu11s_PcsAS_5 = 0;
        $a8f2exbu11s_PriceAS_5 = 0;
        $a8f2twbu04s_PcsAS_5 = 0;
        $a8f2twbu04s_PriceAS_5 = 0;
        $a8f2twbu07s_PcsAS_5 = 0;
        $a8f2twbu07s_PriceAS_5 = 0;
        $a8f2cebu10s_PcsAS_5 = 0;
        $a8f2cebu10s_PriceAS_5 = 0;
        $DC1_PcsAS_5 = 0;
        $DC1_PriceAS_5 = 0;
        $DCP_PcsAS_5 = 0;
        $DCP_PriceAS_5 = 0;
        $DCY_PcsAS_5 = 0;
        $DCY_PriceAS_5 = 0;
        $DEX_PcsAS_5 = 0;
        $DEX_PriceAS_5 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_6 = 0;
        $Price_AfterAS_6 = 0;
        $Po_PcsAS_6 = 0;
        $Po_PriceAS_6 = 0;
        $Neg_PcsAS_6 = 0;
        $Neg_PriceAS_6 = 0;
        $Purchase_PcsAS_6 = 0;
        $Purchase_PriceAS_6 = 0;
        $BackChange_PcsAS_6 = 0;
        $BackChange_PriceAS_6 = 0;
        $ReciveTranfer_PcsAS_6 = 0;
        $ReciveTranfer_PriceAS_6 = 0;
        $ReturnItem_PCSAS_6 = 0;
        $ReturnItem_PriceAS_6 = 0;
        $AllIn_PcsAS_6 = 0;
        $AllIn_PriceAS_6 = 0;
        $SendSale_PcsAS_6 = 0;
        $SendSale_PriceAS_6 = 0;
        $ReciveTranOut_PcsAS_6 = 0;
        $ReciveTranOut_PriceAS_6 = 0;
        $ReturnStore_PcsAS_6 = 0;
        $ReturnStore_PriceAS_6 = 0;
        $AllOut_PcsAS_6 = 0;
        $AllOut_PriceAS_6 = 0;
        $Calculate_PcsAS_6 = 0;
        $Calculate_PriceAS_6 = 0;
        $NewCalculate_PcsAS_6 = 0;
        $NewCalculate_PriceAS_6 = 0;
        $Diff_PcsAS_6 = 0;
        $Diff_PriceAS_6 = 0;
        $NewTotal_PcsAS_6 = 0;
        $NewTotal_PriceAS_6 = 0;
        $NewTotalDiff_NavAS_6 = 0;
        $NewTotalDiff_CalAS_6 = 0;
        $a7f1fgbu02s_PcsAS_6 = 0;
        $a7f1fgbu02s_PriceAS_6 = 0;
        $a7f2fgbu10s_PcsAS_6 = 0;
        $a7f2fgbu10s_PriceAS_6 = 0;
        $a7f2thbu05s_PcsAS_6 = 0;
        $a7f2thbu05s_PriceAS_6 = 0;
        $a7f2debu10s_PcsAS_6 = 0;
        $a7f2debu10s_PriceAS_6 = 0;
        $a7f2exbu11s_PcsAS_6 = 0;
        $a7f2exbu11s_PriceAS_6 = 0;
        $a7f2twbu04s_PcsAS_6 = 0;
        $a7f2twbu04s_PriceAS_6 = 0;
        $a7f2twbu07s_PcsAS_6 = 0;
        $a7f2twbu07s_PriceAS_6 = 0;
        $a7f2cebu10s_PcsAS_6 = 0;
        $a7f2cebu10s_PriceAS_6 = 0;
        $a8f1fgbu02s_PcsAS_6 = 0;
        $a8f1fgbu02s_PriceAS_6 = 0;
        $a8f2fgbu10s_PcsAS_6 = 0;
        $a8f2fgbu10s_PriceAS_6 = 0;
        $a8f2thbu05s_PcsAS_6 = 0;
        $a8f2thbu05s_PriceAS_6 = 0;
        $a8f2debu10s_PcsAS_6 = 0;
        $a8f2debu10s_PriceAS_6 = 0;
        $a8f2exbu11s_PcsAS_6 = 0;
        $a8f2exbu11s_PriceAS_6 = 0;
        $a8f2twbu04s_PcsAS_6 = 0;
        $a8f2twbu04s_PriceAS_6 = 0;
        $a8f2twbu07s_PcsAS_6 = 0;
        $a8f2twbu07s_PriceAS_6 = 0;
        $a8f2cebu10s_PcsAS_6 = 0;
        $a8f2cebu10s_PriceAS_6 = 0;
        $DC1_PcsAS_6 = 0;
        $DC1_PriceAS_6 = 0;
        $DCP_PcsAS_6 = 0;
        $DCP_PriceAS_6 = 0;
        $DCY_PcsAS_6 = 0;
        $DCY_PriceAS_6 = 0;
        $DEX_PcsAS_6 = 0;
        $DEX_PriceAS_6 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_7 = 0;
        $Price_AfterAS_7 = 0;
        $Po_PcsAS_7 = 0;
        $Po_PriceAS_7 = 0;
        $Neg_PcsAS_7 = 0;
        $Neg_PriceAS_7 = 0;
        $Purchase_PcsAS_7 = 0;
        $Purchase_PriceAS_7 = 0;
        $BackChange_PcsAS_7 = 0;
        $BackChange_PriceAS_7 = 0;
        $ReciveTranfer_PcsAS_7 = 0;
        $ReciveTranfer_PriceAS_7 = 0;
        $ReturnItem_PCSAS_7 = 0;
        $ReturnItem_PriceAS_7 = 0;
        $AllIn_PcsAS_7 = 0;
        $AllIn_PriceAS_7 = 0;
        $SendSale_PcsAS_7 = 0;
        $SendSale_PriceAS_7 = 0;
        $ReciveTranOut_PcsAS_7 = 0;
        $ReciveTranOut_PriceAS_7 = 0;
        $ReturnStore_PcsAS_7 = 0;
        $ReturnStore_PriceAS_7 = 0;
        $AllOut_PcsAS_7 = 0;
        $AllOut_PriceAS_7 = 0;
        $Calculate_PcsAS_7 = 0;
        $Calculate_PriceAS_7 = 0;
        $NewCalculate_PcsAS_7 = 0;
        $NewCalculate_PriceAS_7 = 0;
        $Diff_PcsAS_7 = 0;
        $Diff_PriceAS_7 = 0;
        $NewTotal_PcsAS_7 = 0;
        $NewTotal_PriceAS_7 = 0;
        $NewTotalDiff_NavAS_7 = 0;
        $NewTotalDiff_CalAS_7 = 0;
        $a7f1fgbu02s_PcsAS_7 = 0;
        $a7f1fgbu02s_PriceAS_7 = 0;
        $a7f2fgbu10s_PcsAS_7 = 0;
        $a7f2fgbu10s_PriceAS_7 = 0;
        $a7f2thbu05s_PcsAS_7 = 0;
        $a7f2thbu05s_PriceAS_7 = 0;
        $a7f2debu10s_PcsAS_7 = 0;
        $a7f2debu10s_PriceAS_7 = 0;
        $a7f2exbu11s_PcsAS_7 = 0;
        $a7f2exbu11s_PriceAS_7 = 0;
        $a7f2twbu04s_PcsAS_7 = 0;
        $a7f2twbu04s_PriceAS_7 = 0;
        $a7f2twbu07s_PcsAS_7 = 0;
        $a7f2twbu07s_PriceAS_7 = 0;
        $a7f2cebu10s_PcsAS_7 = 0;
        $a7f2cebu10s_PriceAS_7 = 0;
        $a8f1fgbu02s_PcsAS_7 = 0;
        $a8f1fgbu02s_PriceAS_7 = 0;
        $a8f2fgbu10s_PcsAS_7 = 0;
        $a8f2fgbu10s_PriceAS_7 = 0;
        $a8f2thbu05s_PcsAS_7 = 0;
        $a8f2thbu05s_PriceAS_7 = 0;
        $a8f2debu10s_PcsAS_7 = 0;
        $a8f2debu10s_PriceAS_7 = 0;
        $a8f2exbu11s_PcsAS_7 = 0;
        $a8f2exbu11s_PriceAS_7 = 0;
        $a8f2twbu04s_PcsAS_7 = 0;
        $a8f2twbu04s_PriceAS_7 = 0;
        $a8f2twbu07s_PcsAS_7 = 0;
        $a8f2twbu07s_PriceAS_7 = 0;
        $a8f2cebu10s_PcsAS_7 = 0;
        $a8f2cebu10s_PriceAS_7 = 0;
        $DC1_PcsAS_7 = 0;
        $DC1_PriceAS_7 = 0;
        $DCP_PcsAS_7 = 0;
        $DCP_PriceAS_7 = 0;
        $DCY_PcsAS_7 = 0;
        $DCY_PriceAS_7 = 0;
        $DEX_PcsAS_7 = 0;
        $DEX_PriceAS_7 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_8 = 0;
        $Price_AfterAS_8 = 0;
        $Po_PcsAS_8 = 0;
        $Po_PriceAS_8 = 0;
        $Neg_PcsAS_8 = 0;
        $Neg_PriceAS_8 = 0;
        $Purchase_PcsAS_8 = 0;
        $Purchase_PriceAS_8 = 0;
        $BackChange_PcsAS_8 = 0;
        $BackChange_PriceAS_8 = 0;
        $ReciveTranfer_PcsAS_8 = 0;
        $ReciveTranfer_PriceAS_8 = 0;
        $ReturnItem_PCSAS_8 = 0;
        $ReturnItem_PriceAS_8 = 0;
        $AllIn_PcsAS_8 = 0;
        $AllIn_PriceAS_8 = 0;
        $SendSale_PcsAS_8 = 0;
        $SendSale_PriceAS_8 = 0;
        $ReciveTranOut_PcsAS_8 = 0;
        $ReciveTranOut_PriceAS_8 = 0;
        $ReturnStore_PcsAS_8 = 0;
        $ReturnStore_PriceAS_8 = 0;
        $AllOut_PcsAS_8 = 0;
        $AllOut_PriceAS_8 = 0;
        $Calculate_PcsAS_8 = 0;
        $Calculate_PriceAS_8 = 0;
        $NewCalculate_PcsAS_8 = 0;
        $NewCalculate_PriceAS_8 = 0;
        $Diff_PcsAS_8 = 0;
        $Diff_PriceAS_8 = 0;
        $NewTotal_PcsAS_8 = 0;
        $NewTotal_PriceAS_8 = 0;
        $NewTotalDiff_NavAS_8 = 0;
        $NewTotalDiff_CalAS_8 = 0;
        $a7f1fgbu02s_PcsAS_8 = 0;
        $a7f1fgbu02s_PriceAS_8 = 0;
        $a7f2fgbu10s_PcsAS_8 = 0;
        $a7f2fgbu10s_PriceAS_8 = 0;
        $a7f2thbu05s_PcsAS_8 = 0;
        $a7f2thbu05s_PriceAS_8 = 0;
        $a7f2debu10s_PcsAS_8 = 0;
        $a7f2debu10s_PriceAS_8 = 0;
        $a7f2exbu11s_PcsAS_8 = 0;
        $a7f2exbu11s_PriceAS_8 = 0;
        $a7f2twbu04s_PcsAS_8 = 0;
        $a7f2twbu04s_PriceAS_8 = 0;
        $a7f2twbu07s_PcsAS_8 = 0;
        $a7f2twbu07s_PriceAS_8 = 0;
        $a7f2cebu10s_PcsAS_8 = 0;
        $a7f2cebu10s_PriceAS_8 = 0;
        $a8f1fgbu02s_PcsAS_8 = 0;
        $a8f1fgbu02s_PriceAS_8 = 0;
        $a8f2fgbu10s_PcsAS_8 = 0;
        $a8f2fgbu10s_PriceAS_8 = 0;
        $a8f2thbu05s_PcsAS_8 = 0;
        $a8f2thbu05s_PriceAS_8 = 0;
        $a8f2debu10s_PcsAS_8 = 0;
        $a8f2debu10s_PriceAS_8 = 0;
        $a8f2exbu11s_PcsAS_8 = 0;
        $a8f2exbu11s_PriceAS_8 = 0;
        $a8f2twbu04s_PcsAS_8 = 0;
        $a8f2twbu04s_PriceAS_8 = 0;
        $a8f2twbu07s_PcsAS_8 = 0;
        $a8f2twbu07s_PriceAS_8 = 0;
        $a8f2cebu10s_PcsAS_8 = 0;
        $a8f2cebu10s_PriceAS_8 = 0;
        $DC1_PcsAS_8 = 0;
        $DC1_PriceAS_8 = 0;
        $DCP_PcsAS_8 = 0;
        $DCP_PriceAS_8 = 0;
        $DCY_PcsAS_8 = 0;
        $DCY_PriceAS_8 = 0;
        $DEX_PcsAS_8 = 0;
        $DEX_PriceAS_8 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAS_9 = 0;
        $Price_AfterAS_9 = 0;
        $Po_PcsAS_9 = 0;
        $Po_PriceAS_9 = 0;
        $Neg_PcsAS_9 = 0;
        $Neg_PriceAS_9 = 0;
        $Purchase_PcsAS_9 = 0;
        $Purchase_PriceAS_9 = 0;
        $BackChange_PcsAS_9 = 0;
        $BackChange_PriceAS_9 = 0;
        $ReciveTranfer_PcsAS_9 = 0;
        $ReciveTranfer_PriceAS_9 = 0;
        $ReturnItem_PCSAS_9 = 0;
        $ReturnItem_PriceAS_9 = 0;
        $AllIn_PcsAS_9 = 0;
        $AllIn_PriceAS_9 = 0;
        $SendSale_PcsAS_9 = 0;
        $SendSale_PriceAS_9 = 0;
        $ReciveTranOut_PcsAS_9 = 0;
        $ReciveTranOut_PriceAS_9 = 0;
        $ReturnStore_PcsAS_9 = 0;
        $ReturnStore_PriceAS_9 = 0;
        $AllOut_PcsAS_9 = 0;
        $AllOut_PriceAS_9 = 0;
        $Calculate_PcsAS_9 = 0;
        $Calculate_PriceAS_9 = 0;
        $NewCalculate_PcsAS_9 = 0;
        $NewCalculate_PriceAS_9 = 0;
        $Diff_PcsAS_9 = 0;
        $Diff_PriceAS_9 = 0;
        $NewTotal_PcsAS_9 = 0;
        $NewTotal_PriceAS_9 = 0;
        $NewTotalDiff_NavAS_9 = 0;
        $NewTotalDiff_CalAS_9 = 0;
        $a7f1fgbu02s_PcsAS_9 = 0;
        $a7f1fgbu02s_PriceAS_9 = 0;
        $a7f2fgbu10s_PcsAS_9 = 0;
        $a7f2fgbu10s_PriceAS_9 = 0;
        $a7f2thbu05s_PcsAS_9 = 0;
        $a7f2thbu05s_PriceAS_9 = 0;
        $a7f2debu10s_PcsAS_9 = 0;
        $a7f2debu10s_PriceAS_9 = 0;
        $a7f2exbu11s_PcsAS_9 = 0;
        $a7f2exbu11s_PriceAS_9 = 0;
        $a7f2twbu04s_PcsAS_9 = 0;
        $a7f2twbu04s_PriceAS_9 = 0;
        $a7f2twbu07s_PcsAS_9 = 0;
        $a7f2twbu07s_PriceAS_9 = 0;
        $a7f2cebu10s_PcsAS_9 = 0;
        $a7f2cebu10s_PriceAS_9 = 0;
        $a8f1fgbu02s_PcsAS_9 = 0;
        $a8f1fgbu02s_PriceAS_9 = 0;
        $a8f2fgbu10s_PcsAS_9 = 0;
        $a8f2fgbu10s_PriceAS_9 = 0;
        $a8f2thbu05s_PcsAS_9 = 0;
        $a8f2thbu05s_PriceAS_9 = 0;
        $a8f2debu10s_PcsAS_9 = 0;
        $a8f2debu10s_PriceAS_9 = 0;
        $a8f2exbu11s_PcsAS_9 = 0;
        $a8f2exbu11s_PriceAS_9 = 0;
        $a8f2twbu04s_PcsAS_9 = 0;
        $a8f2twbu04s_PriceAS_9 = 0;
        $a8f2twbu07s_PcsAS_9 = 0;
        $a8f2twbu07s_PriceAS_9 = 0;
        $a8f2cebu10s_PcsAS_9 = 0;
        $a8f2cebu10s_PriceAS_9 = 0;
        $DC1_PcsAS_9 = 0;
        $DC1_PriceAS_9 = 0;
        $DCP_PcsAS_9 = 0;
        $DCP_PriceAS_9 = 0;
        $DCY_PcsAS_9 = 0;
        $DCY_PriceAS_9 = 0;
        $DEX_PcsAS_9 = 0;
        $DEX_PriceAS_9 = 0;

        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNo as $rowitem) {
            $Code_1 = explode("-", $rowitem->Item_No);

            if ($rowitem->Category === "อวนกำโมโน" && $Code_1[0] === "NT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberNT_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberNT_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_1 = $rowitem->PcsAfter;
                $Pcs_AfterNT_1 = $Pcs_AfterNT_1 + $PCSAfterNT_1;

                $PriceAfterNT_1 = $rowitem->PriceAfter;
                $Price_AfterNT_1 = $Price_AfterNT_1 + $PriceAfterNT_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_1 = $rowitem->Po_Quantity;
                $Po_PcsNT_1 = $Po_PcsNT_1 + $PoPcsNT_1;

                $PoPriceNT_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceNT_1 = $Po_PriceNT_1 + $PoPriceNT_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_1 = $rowitem->Neg_Quantity;
                $Neg_PcsNT_1 = $Neg_PcsNT_1 + $NegPcsNT_1;


                $NegPriceNT_1 = $NumberNT_1 * $rowitem->Neg_Quantity;
                $Neg_PriceNT_1 = $Neg_PriceNT_1 + $NegPriceNT_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_1 = $PCSAfterNT_1 + $PoPcsNT_1 + $NegPcsNT_1;
                $BackChange_PcsNT_1 = $BackChange_PcsNT_1 + $BackChangePcsNT_1;

                $BackChangePriceNT_1 = $PriceAfterNT_1 + $PoPriceNT_1 + $NegPriceNT_1;
                $BackChange_PriceNT_1 = $BackChange_PriceNT_1 + $BackChangePriceNT_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsNT_1 = $Purchase_PcsNT_1 + $PurchasePcsNT_1;

                $PurchasePriceNT_1 = $rowitem->purchase_Cost;
                $Purchase_PriceNT_1 = $Purchase_PriceNT_1 + $PurchasePriceNT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_1 = $ReciveTranfer_PcsNT_1 + $ReciveTranferPcsNT_1;

                $ReciveTranferPriceNT_1 = $ReciveTranferPcsNT_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceNT_1 = $ReciveTranfer_PriceNT_1 + $ReciveTranferPriceNT_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSNT_1 = $ReturnItem_PCSNT_1 + $ReturnItemQuantityNT_1;

                $ReturnItemPriceNT_1 = $ReturnItemQuantityNT_1 * $NumberNT_1;
                $ReturnItem_PriceNT_1 = $ReturnItem_PriceNT_1 + $ReturnItemPriceNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsNT_1 + $ReturnItemQuantityNT_1;
                $AllIn_PcsNT_1 = $AllIn_PcsNT_1 + $AllInPcsNT_1;

                $AllInPriceNT_1 = $PurchasePriceNT_1 + $ReciveTranferPriceNT_1 + $ReturnItemPriceNT_1;
                $AllIn_PriceNT_1 = $AllIn_PriceNT_1 + $AllInPriceNT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsNT_1 = $SendSale_PcsNT_1 + $SendSalePcsNT_1;

                if ($BackChangePcsNT_1 > 0 && $AllInPcsNT_1 > 0) {
                    $SendSalePriceNT_1 = (($AllInPriceNT_1 + $BackChangePriceNT_1) / ($AllInPcsNT_1 + $BackChangePcsNT_1)) * $SendSalePcsNT_1;
                    $SendSale_PriceNT_1 = $SendSale_PriceNT_1 + $SendSalePriceNT_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_1 = $ReciveTranOut_PcsNT_1 + $ReciveTranOutPcsNT_1;

                if ($AllInPcsNT_1 > 0 && $BackChangePcsNT_1 > 0) {
                    $ReciveTranOutPriceNT_1 = (($AllInPriceNT_1 + $BackChangePriceNT_1) / ($AllInPcsNT_1 + $BackChangePcsNT_1)) * $ReciveTranOutPcsNT_1;
                    $ReciveTranOut_PriceNT_1 = $ReciveTranOut_PriceNT_1 + $ReciveTranOutPriceNT_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_1 = $rowitem->returnitem_Quantity;
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

                $NewCalculatePcsNT_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsNT_1 = $NewCalculate_PcsNT_1 + $NewCalculatePcsNT_1;

                $NewCalculatePriceNT_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceNT_1 = $NewCalculate_PriceNT_1 + $NewCalculatePriceNT_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_1 = $NewCalculatePcsNT_1 - $CalculatePcsNT_1;
                $Diff_PcsNT_1 = $Diff_PcsNT_1 + $DiffPcsNT_1;

                $DiffPriceNT_1 = $NewCalculatePriceNT_1 - $CalculatePriceNT_1;
                $Diff_PriceNT_1 = $Diff_PriceNT_1 + $DiffPriceNT_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_1 = $CalculatePcsNT_1;
                $NewTotal_PcsNT_1 = $NewTotal_PcsNT_1 + $CalculatePcsNT_1;

                $NewTotalPriceNT_1 = $NewTotalPcsNT_1 * $rowitem->PriceAvg;
                $NewTotal_PriceNT_1 = $NewTotal_PriceNT_1 + $NewTotalPriceNT_1;

                $NewTotalDiffNavNT_1 = $NewTotalPriceNT_1 - $NewCalculatePriceNT_1;
                $NewTotalDiff_NavNT_1 = $NewTotalDiff_NavNT_1 + $NewTotalDiffNavNT_1;

                $NewTotalDiffCalNT_1 = $NewTotalPriceNT_1 - $CalculatePriceNT_1;
                $NewTotalDiff_CalNT_1 = $NewTotalDiff_CalNT_1 + $NewTotalDiffCalNT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_1 = $a7f1fgbu02s_PcsNT_1 + $a7f1fgbu02sPcsNT_1;

                $a7f1fgbu02sPriceNT_1 = $a7f1fgbu02sPcsNT_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceNT_1 = $a7f1fgbu02s_PriceNT_1 + $a7f1fgbu02sPriceNT_1;

                $a7f2fgbu10sPcsNT_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_1 = $a7f2fgbu10s_PcsNT_1 + $a7f2fgbu10sPcsNT_1;

                $a7f2fgbu10sPriceNT_1 = $a7f2fgbu10sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceNT_1 = $a7f2fgbu10s_PriceNT_1 + $a7f2fgbu10sPriceNT_1;

                $a7f2thbu05sPcsNT_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_1 = $a7f2thbu05s_PcsNT_1 + $a7f2thbu05sPcsNT_1;

                $a7f2thbu05sPriceNT_1 = $a7f2thbu05sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceNT_1 = $a7f2thbu05s_PriceNT_1 + $a7f2thbu05sPriceNT_1;

                $a7f2debu10sPcsNT_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_1 = $a7f2debu10s_PcsNT_1 + $a7f2debu10sPcsNT_1;

                $a7f2debu10sPriceNT_1 = $a7f2debu10sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceNT_1 = $a7f2debu10s_PriceNT_1 + $a7f2debu10sPriceNT_1;

                $a7f2exbu11sPcsNT_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_1 = $a7f2exbu11s_PcsNT_1 + $a7f2exbu11sPcsNT_1;

                $a7f2exbu11sPriceNT_1 = $a7f2exbu11sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceNT_1 = $a7f2exbu11s_PriceNT_1 + $a7f2exbu11sPriceNT_1;

                $a7f2twbu04sPcsNT_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_1 = $a7f2twbu04s_PcsNT_1 + $a7f2twbu04sPcsNT_1;

                $a7f2twbu04sPriceNT_1 = $a7f2twbu04sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceNT_1 = $a7f2twbu04s_PriceNT_1 + $a7f2twbu04sPriceNT_1;

                $a7f2twbu07sPcsNT_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_1 = $a7f2twbu07s_PcsNT_1 + $a7f2twbu07sPcsNT_1;

                $a7f2twbu07sPriceNT_1 = $a7f2twbu07sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceNT_1 = $a7f2twbu07s_PriceNT_1 + $a7f2twbu07sPriceNT_1;

                $a7f2cebu10sPcsNT_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_1 = $a7f2cebu10s_PcsNT_1 + $a7f2cebu10sPcsNT_1;

                $a7f2cebu10sPriceNT_1 = $a7f2cebu10sPcsNT_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceNT_1 = $a7f2cebu10s_PriceNT_1 + $a7f2cebu10sPriceNT_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_1 = $a8f1fgbu02s_PcsNT_1 + $a8f1fgbu02sPcsNT_1;

                $a8f1fgbu02sPriceNT_1 = $a8f1fgbu02sPcsNT_1 * $NumberNT_1;
                $a8f1fgbu02s_PriceNT_1 = $a8f1fgbu02s_PriceNT_1 + $a8f1fgbu02sPriceNT_1;

                $a8f2fgbu10sPcsNT_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_1 = $a8f2fgbu10s_PcsNT_1 + $a8f2fgbu10sPcsNT_1;

                $a8f2fgbu10sPriceNT_1 = $a8f2fgbu10sPcsNT_1 * $NumberNT_1;
                $a8f2fgbu10s_PriceNT_1 = $a8f2fgbu10s_PriceNT_1 + $a8f2fgbu10sPriceNT_1;

                $a8f2thbu05sPcsNT_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_1 = $a8f2thbu05s_PcsNT_1 + $a8f2thbu05sPcsNT_1;

                $a8f2thbu05sPriceNT_1 = $a8f2thbu05sPcsNT_1 * $NumberNT_1;
                $a8f2thbu05s_PriceNT_1 = $a8f2thbu05s_PriceNT_1 + $a8f2thbu05sPriceNT_1;

                $a8f2debu10sPcsNT_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_1 = $a8f2debu10s_PcsNT_1 + $a8f2debu10sPcsNT_1;

                $a8f2debu10sPriceNT_1 = $a8f2debu10sPcsNT_1 * $NumberNT_1;
                $a8f2debu10s_PriceNT_1 = $a8f2debu10s_PriceNT_1 + $a8f2debu10sPriceNT_1;

                $a8f2exbu11sPcsNT_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_1 = $a8f2exbu11s_PcsNT_1 + $a8f2exbu11sPcsNT_1;

                $a8f2exbu11sPriceNT_1 = $a8f2exbu11sPcsNT_1 * $NumberNT_1;
                $a8f2exbu11s_PriceNT_1 = $a8f2exbu11s_PriceNT_1 + $a8f2exbu11sPriceNT_1;

                $a8f2twbu04sPcsNT_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_1 = $a8f2twbu04s_PcsNT_1 + $a8f2twbu04sPcsNT_1;

                $a8f2twbu04sPriceNT_1 = $a8f2twbu04sPcsNT_1 * $NumberNT_1;
                $a8f2twbu04s_PriceNT_1 = $a8f2twbu04s_PriceNT_1 + $a8f2twbu04sPriceNT_1;

                $a8f2twbu07sPcsNT_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_1 = $a8f2twbu07s_PcsNT_1 + $a8f2twbu07sPcsNT_1;

                $a8f2twbu07sPriceNT_1 = $a8f2twbu07sPcsNT_1 * $NumberNT_1;
                $a8f2twbu07s_PriceNT_1 = $a8f2twbu07s_PriceNT_1 + $a8f2twbu07sPriceNT_1;

                $a8f2cebu10sPcsNT_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_1 = $a8f2cebu10s_PcsNT_1 + $a8f2cebu10sPcsNT_1;

                $a8f2cebu10sPriceNT_1 = $a8f2cebu10sPcsNT_1 * $NumberNT_1;
                $a8f2cebu10s_PriceNT_1 = $a8f2cebu10s_PriceNT_1 + $a8f2cebu10sPriceNT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsNT_1 = $DC1_PcsNT_1 + $DC1PcsNT_1;

                $DC1PriceNT_1 = $DC1PcsNT_1 * $NumberNT_1;
                $DC1_PriceNT_1 = $DC1_PriceNT_1 + $DC1PriceNT_1;

                $DCPPcsNT_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsNT_1 = $DCP_PcsNT_1 + $DCPPcsNT_1;

                $DCPPriceNT_1 = $DCPPcsNT_1 * $NumberNT_1;
                $DCP_PriceNT_1 = $DCP_PriceNT_1 + $DCPPriceNT_1;

                $DCYPcsNT_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsNT_1 = $DCY_PcsNT_1 + $DCYPcsNT_1;

                $DCYPriceNT_1 = $DCYPcsNT_1 * $NumberNT_1;
                $DCY_PriceNT_1 = $DCY_PriceNT_1 + $DCYPriceNT_1;

                $DEXPcsNT_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsNT_1 = $DEX_PcsNT_1 + $DEXPcsNT_1;

                $DEXPriceNT_1 = $DEXPcsNT_1 * $NumberNT_1;
                $DEX_PriceNT_1 = $DEX_PriceNT_1 + $DEXPriceNT_1;

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            } elseif ($rowitem->Category === "อวนกำไนลอน" && $Code_1[0] === "NT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberNT_2 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberNT_2 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_2 = $rowitem->PcsAfter;
                $Pcs_AfterNT_2 = $Pcs_AfterNT_2 + $PCSAfterNT_2;

                $PriceAfterNT_2 = $rowitem->PriceAfter;
                $Price_AfterNT_2 = $Price_AfterNT_2 + $PriceAfterNT_2;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_2 = $rowitem->Po_Quantity;
                $Po_PcsNT_2 = $Po_PcsNT_2 + $PoPcsNT_2;

                $PoPriceNT_2 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceNT_2 = $Po_PriceNT_2 + $PoPriceNT_2;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_2 = $rowitem->Neg_Quantity;
                $Neg_PcsNT_2 = $Neg_PcsNT_2 + $NegPcsNT_2;


                $NegPriceNT_2 = $NumberNT_2 * $rowitem->Neg_Quantity;
                $Neg_PriceNT_2 = $Neg_PriceNT_2 + $NegPriceNT_2;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_2 = $PCSAfterNT_2 + $PoPcsNT_2 + $NegPcsNT_2;
                $BackChange_PcsNT_2 = $BackChange_PcsNT_2 + $BackChangePcsNT_2;

                $BackChangePriceNT_2 = $PriceAfterNT_2 + $PoPriceNT_2 + $NegPriceNT_2;
                $BackChange_PriceNT_2 = $BackChange_PriceNT_2 + $BackChangePriceNT_2;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_2 = $rowitem->purchase_Quantity;
                $Purchase_PcsNT_2 = $Purchase_PcsNT_2 + $PurchasePcsNT_2;

                $PurchasePriceNT_2 = $rowitem->purchase_Cost;
                $Purchase_PriceNT_2 = $Purchase_PriceNT_2 + $PurchasePriceNT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_2 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_2 = $ReciveTranfer_PcsNT_2 + $ReciveTranferPcsNT_2;

                $ReciveTranferPriceNT_2 = $ReciveTranferPcsNT_2 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceNT_2 = $ReciveTranfer_PriceNT_2 + $ReciveTranferPriceNT_2;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_2 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSNT_2 = $ReturnItem_PCSNT_2 + $ReturnItemQuantityNT_2;

                $ReturnItemPriceNT_2 = $ReturnItemQuantityNT_2 * $NumberNT_2;
                $ReturnItem_PriceNT_2 = $ReturnItem_PriceNT_2 + $ReturnItemPriceNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_2 = $rowitem->purchase_Quantity + $ReciveTranferPcsNT_2 + $ReturnItemQuantityNT_2;
                $AllIn_PcsNT_2 = $AllIn_PcsNT_2 + $AllInPcsNT_2;

                $AllInPriceNT_2 = $PurchasePriceNT_2 + $ReciveTranferPriceNT_2 + $ReturnItemPriceNT_2;
                $AllIn_PriceNT_2 = $AllIn_PriceNT_2 + $AllInPriceNT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_2 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsNT_2 = $SendSale_PcsNT_2 + $SendSalePcsNT_2;

                if ($BackChangePcsNT_2 > 0 && $AllInPcsNT_2 > 0) {
                    $SendSalePriceNT_2 = (($AllInPriceNT_2 + $BackChangePriceNT_2) / ($AllInPcsNT_2 + $BackChangePcsNT_2)) * $SendSalePcsNT_2;
                    $SendSale_PriceNT_2 = $SendSale_PriceNT_2 + $SendSalePriceNT_2;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_2 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_2 = $ReciveTranOut_PcsNT_2 + $ReciveTranOutPcsNT_2;

                if ($AllInPcsNT_2 > 0 && $BackChangePcsNT_2 > 0) {
                    $ReciveTranOutPriceNT_2 = (($AllInPriceNT_2 + $BackChangePriceNT_2) / ($AllInPcsNT_2 + $BackChangePcsNT_2)) * $ReciveTranOutPcsNT_2;
                    $ReciveTranOut_PriceNT_2 = $ReciveTranOut_PriceNT_2 + $ReciveTranOutPriceNT_2;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_2 = $rowitem->returnitem_Quantity;
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

                $NewCalculatePcsNT_2 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsNT_2 = $NewCalculate_PcsNT_2 + $NewCalculatePcsNT_2;

                $NewCalculatePriceNT_2 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceNT_2 = $NewCalculate_PriceNT_2 + $NewCalculatePriceNT_2;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_2 = $NewCalculatePcsNT_2 - $CalculatePcsNT_2;
                $Diff_PcsNT_2 = $Diff_PcsNT_2 + $DiffPcsNT_2;

                $DiffPriceNT_2 = $NewCalculatePriceNT_2 - $CalculatePriceNT_2;
                $Diff_PriceNT_2 = $Diff_PriceNT_2 + $DiffPriceNT_2;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_2 = $CalculatePcsNT_2;
                $NewTotal_PcsNT_2 = $NewTotal_PcsNT_2 + $CalculatePcsNT_2;

                $NewTotalPriceNT_2 = $NewTotalPcsNT_2 * $rowitem->PriceAvg;
                $NewTotal_PriceNT_2 = $NewTotal_PriceNT_2 + $NewTotalPriceNT_2;

                $NewTotalDiffNavNT_2 = $NewTotalPriceNT_2 - $NewCalculatePriceNT_2;
                $NewTotalDiff_NavNT_2 = $NewTotalDiff_NavNT_2 + $NewTotalDiffNavNT_2;

                $NewTotalDiffCalNT_2 = $NewTotalPriceNT_2 - $CalculatePriceNT_2;
                $NewTotalDiff_CalNT_2 = $NewTotalDiff_CalNT_2 + $NewTotalDiffCalNT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_2 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_2 = $a7f1fgbu02s_PcsNT_2 + $a7f1fgbu02sPcsNT_2;

                $a7f1fgbu02sPriceNT_2 = $a7f1fgbu02sPcsNT_2 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceNT_2 = $a7f1fgbu02s_PriceNT_2 + $a7f1fgbu02sPriceNT_2;

                $a7f2fgbu10sPcsNT_2 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_2 = $a7f2fgbu10s_PcsNT_2 + $a7f2fgbu10sPcsNT_2;

                $a7f2fgbu10sPriceNT_2 = $a7f2fgbu10sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceNT_2 = $a7f2fgbu10s_PriceNT_2 + $a7f2fgbu10sPriceNT_2;

                $a7f2thbu05sPcsNT_2 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_2 = $a7f2thbu05s_PcsNT_2 + $a7f2thbu05sPcsNT_2;

                $a7f2thbu05sPriceNT_2 = $a7f2thbu05sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceNT_2 = $a7f2thbu05s_PriceNT_2 + $a7f2thbu05sPriceNT_2;

                $a7f2debu10sPcsNT_2 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_2 = $a7f2debu10s_PcsNT_2 + $a7f2debu10sPcsNT_2;

                $a7f2debu10sPriceNT_2 = $a7f2debu10sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceNT_2 = $a7f2debu10s_PriceNT_2 + $a7f2debu10sPriceNT_2;

                $a7f2exbu11sPcsNT_2 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_2 = $a7f2exbu11s_PcsNT_2 + $a7f2exbu11sPcsNT_2;

                $a7f2exbu11sPriceNT_2 = $a7f2exbu11sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceNT_2 = $a7f2exbu11s_PriceNT_2 + $a7f2exbu11sPriceNT_2;

                $a7f2twbu04sPcsNT_2 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_2 = $a7f2twbu04s_PcsNT_2 + $a7f2twbu04sPcsNT_2;

                $a7f2twbu04sPriceNT_2 = $a7f2twbu04sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceNT_2 = $a7f2twbu04s_PriceNT_2 + $a7f2twbu04sPriceNT_2;

                $a7f2twbu07sPcsNT_2 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_2 = $a7f2twbu07s_PcsNT_2 + $a7f2twbu07sPcsNT_2;

                $a7f2twbu07sPriceNT_2 = $a7f2twbu07sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceNT_2 = $a7f2twbu07s_PriceNT_2 + $a7f2twbu07sPriceNT_2;

                $a7f2cebu10sPcsNT_2 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_2 = $a7f2cebu10s_PcsNT_2 + $a7f2cebu10sPcsNT_2;

                $a7f2cebu10sPriceNT_2 = $a7f2cebu10sPcsNT_2 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceNT_2 = $a7f2cebu10s_PriceNT_2 + $a7f2cebu10sPriceNT_2;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_2 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_2 = $a8f1fgbu02s_PcsNT_2 + $a8f1fgbu02sPcsNT_2;

                $a8f1fgbu02sPriceNT_2 = $a8f1fgbu02sPcsNT_2 * $NumberNT_2;
                $a8f1fgbu02s_PriceNT_2 = $a8f1fgbu02s_PriceNT_2 + $a8f1fgbu02sPriceNT_2;

                $a8f2fgbu10sPcsNT_2 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_2 = $a8f2fgbu10s_PcsNT_2 + $a8f2fgbu10sPcsNT_2;

                $a8f2fgbu10sPriceNT_2 = $a8f2fgbu10sPcsNT_2 * $NumberNT_2;
                $a8f2fgbu10s_PriceNT_2 = $a8f2fgbu10s_PriceNT_2 + $a8f2fgbu10sPriceNT_2;

                $a8f2thbu05sPcsNT_2 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_2 = $a8f2thbu05s_PcsNT_2 + $a8f2thbu05sPcsNT_2;

                $a8f2thbu05sPriceNT_2 = $a8f2thbu05sPcsNT_2 * $NumberNT_2;
                $a8f2thbu05s_PriceNT_2 = $a8f2thbu05s_PriceNT_2 + $a8f2thbu05sPriceNT_2;

                $a8f2debu10sPcsNT_2 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_2 = $a8f2debu10s_PcsNT_2 + $a8f2debu10sPcsNT_2;

                $a8f2debu10sPriceNT_2 = $a8f2debu10sPcsNT_2 * $NumberNT_2;
                $a8f2debu10s_PriceNT_2 = $a8f2debu10s_PriceNT_2 + $a8f2debu10sPriceNT_2;

                $a8f2exbu11sPcsNT_2 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_2 = $a8f2exbu11s_PcsNT_2 + $a8f2exbu11sPcsNT_2;

                $a8f2exbu11sPriceNT_2 = $a8f2exbu11sPcsNT_2 * $NumberNT_2;
                $a8f2exbu11s_PriceNT_2 = $a8f2exbu11s_PriceNT_2 + $a8f2exbu11sPriceNT_2;

                $a8f2twbu04sPcsNT_2 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_2 = $a8f2twbu04s_PcsNT_2 + $a8f2twbu04sPcsNT_2;

                $a8f2twbu04sPriceNT_2 = $a8f2twbu04sPcsNT_2 * $NumberNT_2;
                $a8f2twbu04s_PriceNT_2 = $a8f2twbu04s_PriceNT_2 + $a8f2twbu04sPriceNT_2;

                $a8f2twbu07sPcsNT_2 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_2 = $a8f2twbu07s_PcsNT_2 + $a8f2twbu07sPcsNT_2;

                $a8f2twbu07sPriceNT_2 = $a8f2twbu07sPcsNT_2 * $NumberNT_2;
                $a8f2twbu07s_PriceNT_2 = $a8f2twbu07s_PriceNT_2 + $a8f2twbu07sPriceNT_2;

                $a8f2cebu10sPcsNT_2 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_2 = $a8f2cebu10s_PcsNT_2 + $a8f2cebu10sPcsNT_2;

                $a8f2cebu10sPriceNT_2 = $a8f2cebu10sPcsNT_2 * $NumberNT_2;
                $a8f2cebu10s_PriceNT_2 = $a8f2cebu10s_PriceNT_2 + $a8f2cebu10sPriceNT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_2 = $rowitem->dc1_s_Quantity;
                $DC1_PcsNT_2 = $DC1_PcsNT_2 + $DC1PcsNT_2;

                $DC1PriceNT_2 = $DC1PcsNT_2 * $NumberNT_2;
                $DC1_PriceNT_2 = $DC1_PriceNT_2 + $DC1PriceNT_2;

                $DCPPcsNT_2 = $rowitem->dcp_s_Quantity;
                $DCP_PcsNT_2 = $DCP_PcsNT_2 + $DCPPcsNT_2;

                $DCPPriceNT_2 = $DCPPcsNT_2 * $NumberNT_2;
                $DCP_PriceNT_2 = $DCP_PriceNT_2 + $DCPPriceNT_2;

                $DCYPcsNT_2 = $rowitem->dcy_s_Quantity;
                $DCY_PcsNT_2 = $DCY_PcsNT_2 + $DCYPcsNT_2;

                $DCYPriceNT_2 = $DCYPcsNT_2 * $NumberNT_2;
                $DCY_PriceNT_2 = $DCY_PriceNT_2 + $DCYPriceNT_2;

                $DEXPcsNT_2 = $rowitem->dex_s_Quantity;
                $DEX_PcsNT_2 = $DEX_PcsNT_2 + $DEXPcsNT_2;

                $DEXPriceNT_2 = $DEXPcsNT_2 * $NumberNT_2;
                $DEX_PriceNT_2 = $DEX_PriceNT_2 + $DEXPriceNT_2;

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            } elseif ($rowitem->Category === "อวนมัลติโมโน" && $Code_1[0] === "NT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberNT_3 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberNT_3 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_3 = $rowitem->PcsAfter;
                $Pcs_AfterNT_3 = $Pcs_AfterNT_3 + $PCSAfterNT_3;

                $PriceAfterNT_3 = $rowitem->PriceAfter;
                $Price_AfterNT_3 = $Price_AfterNT_3 + $PriceAfterNT_3;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_3 = $rowitem->Po_Quantity;
                $Po_PcsNT_3 = $Po_PcsNT_3 + $PoPcsNT_3;

                $PoPriceNT_3 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceNT_3 = $Po_PriceNT_3 + $PoPriceNT_3;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_3 = $rowitem->Neg_Quantity;
                $Neg_PcsNT_3 = $Neg_PcsNT_3 + $NegPcsNT_3;


                $NegPriceNT_3 = $NumberNT_3 * $rowitem->Neg_Quantity;
                $Neg_PriceNT_3 = $Neg_PriceNT_3 + $NegPriceNT_3;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_3 = $PCSAfterNT_3 + $PoPcsNT_3 + $NegPcsNT_3;
                $BackChange_PcsNT_3 = $BackChange_PcsNT_3 + $BackChangePcsNT_3;

                $BackChangePriceNT_3 = $PriceAfterNT_3 + $PoPriceNT_3 + $NegPriceNT_3;
                $BackChange_PriceNT_3 = $BackChange_PriceNT_3 + $BackChangePriceNT_3;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_3 = $rowitem->purchase_Quantity;
                $Purchase_PcsNT_3 = $Purchase_PcsNT_3 + $PurchasePcsNT_3;

                $PurchasePriceNT_3 = $rowitem->purchase_Cost;
                $Purchase_PriceNT_3 = $Purchase_PriceNT_3 + $PurchasePriceNT_3;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_3 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_3 = $ReciveTranfer_PcsNT_3 + $ReciveTranferPcsNT_3;

                $ReciveTranferPriceNT_3 = $ReciveTranferPcsNT_3 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceNT_3 = $ReciveTranfer_PriceNT_3 + $ReciveTranferPriceNT_3;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_3 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSNT_3 = $ReturnItem_PCSNT_3 + $ReturnItemQuantityNT_3;

                $ReturnItemPriceNT_3 = $ReturnItemQuantityNT_3 * $NumberNT_3;
                $ReturnItem_PriceNT_3 = $ReturnItem_PriceNT_3 + $ReturnItemPriceNT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_3 = $rowitem->purchase_Quantity + $ReciveTranferPcsNT_3 + $ReturnItemQuantityNT_3;
                $AllIn_PcsNT_3 = $AllIn_PcsNT_3 + $AllInPcsNT_3;

                $AllInPriceNT_3 = $PurchasePriceNT_3 + $ReciveTranferPriceNT_3 + $ReturnItemPriceNT_3;
                $AllIn_PriceNT_3 = $AllIn_PriceNT_3 + $AllInPriceNT_3;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_3 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsNT_3 = $SendSale_PcsNT_3 + $SendSalePcsNT_3;

                if ($BackChangePcsNT_3 > 0 && $AllInPcsNT_3 > 0) {
                    $SendSalePriceNT_3 = (($AllInPriceNT_3 + $BackChangePriceNT_3) / ($AllInPcsNT_3 + $BackChangePcsNT_3)) * $SendSalePcsNT_3;
                    $SendSale_PriceNT_3 = $SendSale_PriceNT_3 + $SendSalePriceNT_3;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_3 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_3 = $ReciveTranOut_PcsNT_3 + $ReciveTranOutPcsNT_3;

                if ($AllInPcsNT_3 > 0 && $BackChangePcsNT_3 > 0) {
                    $ReciveTranOutPriceNT_3 = (($AllInPriceNT_3 + $BackChangePriceNT_3) / ($AllInPcsNT_3 + $BackChangePcsNT_3)) * $ReciveTranOutPcsNT_3;
                    $ReciveTranOut_PriceNT_3 = $ReciveTranOut_PriceNT_3 + $ReciveTranOutPriceNT_3;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_3 = $rowitem->returnitem_Quantity;
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

                $NewCalculatePcsNT_3 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsNT_3 = $NewCalculate_PcsNT_3 + $NewCalculatePcsNT_3;

                $NewCalculatePriceNT_3 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceNT_3 = $NewCalculate_PriceNT_3 + $NewCalculatePriceNT_3;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_3 = $NewCalculatePcsNT_3 - $CalculatePcsNT_3;
                $Diff_PcsNT_3 = $Diff_PcsNT_3 + $DiffPcsNT_3;

                $DiffPriceNT_3 = $NewCalculatePriceNT_3 - $CalculatePriceNT_3;
                $Diff_PriceNT_3 = $Diff_PriceNT_3 + $DiffPriceNT_3;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_3 = $CalculatePcsNT_3;
                $NewTotal_PcsNT_3 = $NewTotal_PcsNT_3 + $CalculatePcsNT_3;

                $NewTotalPriceNT_3 = $NewTotalPcsNT_3 * $rowitem->PriceAvg;
                $NewTotal_PriceNT_3 = $NewTotal_PriceNT_3 + $NewTotalPriceNT_3;

                $NewTotalDiffNavNT_3 = $NewTotalPriceNT_3 - $NewCalculatePriceNT_3;
                $NewTotalDiff_NavNT_3 = $NewTotalDiff_NavNT_3 + $NewTotalDiffNavNT_3;

                $NewTotalDiffCalNT_3 = $NewTotalPriceNT_3 - $CalculatePriceNT_3;
                $NewTotalDiff_CalNT_3 = $NewTotalDiff_CalNT_3 + $NewTotalDiffCalNT_3;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_3 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_3 = $a7f1fgbu02s_PcsNT_3 + $a7f1fgbu02sPcsNT_3;

                $a7f1fgbu02sPriceNT_3 = $a7f1fgbu02sPcsNT_3 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceNT_3 = $a7f1fgbu02s_PriceNT_3 + $a7f1fgbu02sPriceNT_3;

                $a7f2fgbu10sPcsNT_3 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_3 = $a7f2fgbu10s_PcsNT_3 + $a7f2fgbu10sPcsNT_3;

                $a7f2fgbu10sPriceNT_3 = $a7f2fgbu10sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceNT_3 = $a7f2fgbu10s_PriceNT_3 + $a7f2fgbu10sPriceNT_3;

                $a7f2thbu05sPcsNT_3 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_3 = $a7f2thbu05s_PcsNT_3 + $a7f2thbu05sPcsNT_3;

                $a7f2thbu05sPriceNT_3 = $a7f2thbu05sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceNT_3 = $a7f2thbu05s_PriceNT_3 + $a7f2thbu05sPriceNT_3;

                $a7f2debu10sPcsNT_3 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_3 = $a7f2debu10s_PcsNT_3 + $a7f2debu10sPcsNT_3;

                $a7f2debu10sPriceNT_3 = $a7f2debu10sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceNT_3 = $a7f2debu10s_PriceNT_3 + $a7f2debu10sPriceNT_3;

                $a7f2exbu11sPcsNT_3 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_3 = $a7f2exbu11s_PcsNT_3 + $a7f2exbu11sPcsNT_3;

                $a7f2exbu11sPriceNT_3 = $a7f2exbu11sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceNT_3 = $a7f2exbu11s_PriceNT_3 + $a7f2exbu11sPriceNT_3;

                $a7f2twbu04sPcsNT_3 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_3 = $a7f2twbu04s_PcsNT_3 + $a7f2twbu04sPcsNT_3;

                $a7f2twbu04sPriceNT_3 = $a7f2twbu04sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceNT_3 = $a7f2twbu04s_PriceNT_3 + $a7f2twbu04sPriceNT_3;

                $a7f2twbu07sPcsNT_3 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_3 = $a7f2twbu07s_PcsNT_3 + $a7f2twbu07sPcsNT_3;

                $a7f2twbu07sPriceNT_3 = $a7f2twbu07sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceNT_3 = $a7f2twbu07s_PriceNT_3 + $a7f2twbu07sPriceNT_3;

                $a7f2cebu10sPcsNT_3 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_3 = $a7f2cebu10s_PcsNT_3 + $a7f2cebu10sPcsNT_3;

                $a7f2cebu10sPriceNT_3 = $a7f2cebu10sPcsNT_3 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceNT_3 = $a7f2cebu10s_PriceNT_3 + $a7f2cebu10sPriceNT_3;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_3 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_3 = $a8f1fgbu02s_PcsNT_3 + $a8f1fgbu02sPcsNT_3;

                $a8f1fgbu02sPriceNT_3 = $a8f1fgbu02sPcsNT_3 * $NumberNT_3;
                $a8f1fgbu02s_PriceNT_3 = $a8f1fgbu02s_PriceNT_3 + $a8f1fgbu02sPriceNT_3;

                $a8f2fgbu10sPcsNT_3 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_3 = $a8f2fgbu10s_PcsNT_3 + $a8f2fgbu10sPcsNT_3;

                $a8f2fgbu10sPriceNT_3 = $a8f2fgbu10sPcsNT_3 * $NumberNT_3;
                $a8f2fgbu10s_PriceNT_3 = $a8f2fgbu10s_PriceNT_3 + $a8f2fgbu10sPriceNT_3;

                $a8f2thbu05sPcsNT_3 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_3 = $a8f2thbu05s_PcsNT_3 + $a8f2thbu05sPcsNT_3;

                $a8f2thbu05sPriceNT_3 = $a8f2thbu05sPcsNT_3 * $NumberNT_3;
                $a8f2thbu05s_PriceNT_3 = $a8f2thbu05s_PriceNT_3 + $a8f2thbu05sPriceNT_3;

                $a8f2debu10sPcsNT_3 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_3 = $a8f2debu10s_PcsNT_3 + $a8f2debu10sPcsNT_3;

                $a8f2debu10sPriceNT_3 = $a8f2debu10sPcsNT_3 * $NumberNT_3;
                $a8f2debu10s_PriceNT_3 = $a8f2debu10s_PriceNT_3 + $a8f2debu10sPriceNT_3;

                $a8f2exbu11sPcsNT_3 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_3 = $a8f2exbu11s_PcsNT_3 + $a8f2exbu11sPcsNT_3;

                $a8f2exbu11sPriceNT_3 = $a8f2exbu11sPcsNT_3 * $NumberNT_3;
                $a8f2exbu11s_PriceNT_3 = $a8f2exbu11s_PriceNT_3 + $a8f2exbu11sPriceNT_3;

                $a8f2twbu04sPcsNT_3 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_3 = $a8f2twbu04s_PcsNT_3 + $a8f2twbu04sPcsNT_3;

                $a8f2twbu04sPriceNT_3 = $a8f2twbu04sPcsNT_3 * $NumberNT_3;
                $a8f2twbu04s_PriceNT_3 = $a8f2twbu04s_PriceNT_3 + $a8f2twbu04sPriceNT_3;

                $a8f2twbu07sPcsNT_3 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_3 = $a8f2twbu07s_PcsNT_3 + $a8f2twbu07sPcsNT_3;

                $a8f2twbu07sPriceNT_3 = $a8f2twbu07sPcsNT_3 * $NumberNT_3;
                $a8f2twbu07s_PriceNT_3 = $a8f2twbu07s_PriceNT_3 + $a8f2twbu07sPriceNT_3;

                $a8f2cebu10sPcsNT_3 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_3 = $a8f2cebu10s_PcsNT_3 + $a8f2cebu10sPcsNT_3;

                $a8f2cebu10sPriceNT_3 = $a8f2cebu10sPcsNT_3 * $NumberNT_3;
                $a8f2cebu10s_PriceNT_3 = $a8f2cebu10s_PriceNT_3 + $a8f2cebu10sPriceNT_3;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_3 = $rowitem->dc1_s_Quantity;
                $DC1_PcsNT_3 = $DC1_PcsNT_3 + $DC1PcsNT_3;

                $DC1PriceNT_3 = $DC1PcsNT_3 * $NumberNT_3;
                $DC1_PriceNT_3 = $DC1_PriceNT_3 + $DC1PriceNT_3;

                $DCPPcsNT_3 = $rowitem->dcp_s_Quantity;
                $DCP_PcsNT_3 = $DCP_PcsNT_3 + $DCPPcsNT_3;

                $DCPPriceNT_3 = $DCPPcsNT_3 * $NumberNT_3;
                $DCP_PriceNT_3 = $DCP_PriceNT_3 + $DCPPriceNT_3;

                $DCYPcsNT_3 = $rowitem->dcy_s_Quantity;
                $DCY_PcsNT_3 = $DCY_PcsNT_3 + $DCYPcsNT_3;

                $DCYPriceNT_3 = $DCYPcsNT_3 * $NumberNT_3;
                $DCY_PriceNT_3 = $DCY_PriceNT_3 + $DCYPriceNT_3;

                $DEXPcsNT_3 = $rowitem->dex_s_Quantity;
                $DEX_PcsNT_3 = $DEX_PcsNT_3 + $DEXPcsNT_3;

                $DEXPriceNT_3 = $DEXPcsNT_3 * $NumberNT_3;
                $DEX_PriceNT_3 = $DEX_PriceNT_3 + $DEXPriceNT_3;

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            } elseif ($rowitem->Category === "อวนโพลี" && $Code_1[0] === "NT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberNT_4 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberNT_4 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT_4 = $rowitem->PcsAfter;
                $Pcs_AfterNT_4 = $Pcs_AfterNT_4 + $PCSAfterNT_4;

                $PriceAfterNT_4 = $rowitem->PriceAfter;
                $Price_AfterNT_4 = $Price_AfterNT_4 + $PriceAfterNT_4;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT_4 = $rowitem->Po_Quantity;
                $Po_PcsNT_4 = $Po_PcsNT_4 + $PoPcsNT_4;

                $PoPriceNT_4 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceNT_4 = $Po_PriceNT_4 + $PoPriceNT_4;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT_4 = $rowitem->Neg_Quantity;
                $Neg_PcsNT_4 = $Neg_PcsNT_4 + $NegPcsNT_4;


                $NegPriceNT_4 = $NumberNT_4 * $rowitem->Neg_Quantity;
                $Neg_PriceNT_4 = $Neg_PriceNT_4 + $NegPriceNT_4;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT_4 = $PCSAfterNT_4 + $PoPcsNT_4 + $NegPcsNT_4;
                $BackChange_PcsNT_4 = $BackChange_PcsNT_4 + $BackChangePcsNT_4;

                $BackChangePriceNT_4 = $PriceAfterNT_4 + $PoPriceNT_4 + $NegPriceNT_4;
                $BackChange_PriceNT_4 = $BackChange_PriceNT_4 + $BackChangePriceNT_4;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT_4 = $rowitem->purchase_Quantity;
                $Purchase_PcsNT_4 = $Purchase_PcsNT_4 + $PurchasePcsNT_4;

                $PurchasePriceNT_4 = $rowitem->purchase_Cost;
                $Purchase_PriceNT_4 = $Purchase_PriceNT_4 + $PurchasePriceNT_4;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT_4 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT_4 = $ReciveTranfer_PcsNT_4 + $ReciveTranferPcsNT_4;

                $ReciveTranferPriceNT_4 = $ReciveTranferPcsNT_4 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceNT_4 = $ReciveTranfer_PriceNT_4 + $ReciveTranferPriceNT_4;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT_4 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSNT_4 = $ReturnItem_PCSNT_4 + $ReturnItemQuantityNT_4;

                $ReturnItemPriceNT_4 = $ReturnItemQuantityNT_4 * $NumberNT_4;
                $ReturnItem_PriceNT_4 = $ReturnItem_PriceNT_4 + $ReturnItemPriceNT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT_4 = $rowitem->purchase_Quantity + $ReciveTranferPcsNT_4 + $ReturnItemQuantityNT_4;
                $AllIn_PcsNT_4 = $AllIn_PcsNT_4 + $AllInPcsNT_4;

                $AllInPriceNT_4 = $PurchasePriceNT_4 + $ReciveTranferPriceNT_4 + $ReturnItemPriceNT_4;
                $AllIn_PriceNT_4 = $AllIn_PriceNT_4 + $AllInPriceNT_4;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT_4 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsNT_4 = $SendSale_PcsNT_4 + $SendSalePcsNT_4;

                if ($BackChangePcsNT_4 > 0 && $AllInPcsNT_4 > 0) {
                    $SendSalePriceNT_4 = (($AllInPriceNT_4 + $BackChangePriceNT_4) / ($AllInPcsNT_4 + $BackChangePcsNT_4)) * $SendSalePcsNT_4;
                    $SendSale_PriceNT_4 = $SendSale_PriceNT_4 + $SendSalePriceNT_4;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT_4 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT_4 = $ReciveTranOut_PcsNT_4 + $ReciveTranOutPcsNT_4;

                if ($AllInPcsNT_4 > 0 && $BackChangePcsNT_4 > 0) {
                    $ReciveTranOutPriceNT_4 = (($AllInPriceNT_4 + $BackChangePriceNT_4) / ($AllInPcsNT_4 + $BackChangePcsNT_4)) * $ReciveTranOutPcsNT_4;
                    $ReciveTranOut_PriceNT_4 = $ReciveTranOut_PriceNT_4 + $ReciveTranOutPriceNT_4;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT_4 = $rowitem->returnitem_Quantity;
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

                $NewCalculatePcsNT_4 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsNT_4 = $NewCalculate_PcsNT_4 + $NewCalculatePcsNT_4;

                $NewCalculatePriceNT_4 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceNT_4 = $NewCalculate_PriceNT_4 + $NewCalculatePriceNT_4;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT_4 = $NewCalculatePcsNT_4 - $CalculatePcsNT_4;
                $Diff_PcsNT_4 = $Diff_PcsNT_4 + $DiffPcsNT_4;

                $DiffPriceNT_4 = $NewCalculatePriceNT_4 - $CalculatePriceNT_4;
                $Diff_PriceNT_4 = $Diff_PriceNT_4 + $DiffPriceNT_4;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT_4 = $CalculatePcsNT_4;
                $NewTotal_PcsNT_4 = $NewTotal_PcsNT_4 + $CalculatePcsNT_4;

                $NewTotalPriceNT_4 = $NewTotalPcsNT_4 * $rowitem->PriceAvg;
                $NewTotal_PriceNT_4 = $NewTotal_PriceNT_4 + $NewTotalPriceNT_4;

                $NewTotalDiffNavNT_4 = $NewTotalPriceNT_4 - $NewCalculatePriceNT_4;
                $NewTotalDiff_NavNT_4 = $NewTotalDiff_NavNT_4 + $NewTotalDiffNavNT_4;

                $NewTotalDiffCalNT_4 = $NewTotalPriceNT_4 - $CalculatePriceNT_4;
                $NewTotalDiff_CalNT_4 = $NewTotalDiff_CalNT_4 + $NewTotalDiffCalNT_4;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT_4 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT_4 = $a7f1fgbu02s_PcsNT_4 + $a7f1fgbu02sPcsNT_4;

                $a7f1fgbu02sPriceNT_4 = $a7f1fgbu02sPcsNT_4 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceNT_4 = $a7f1fgbu02s_PriceNT_4 + $a7f1fgbu02sPriceNT_4;

                $a7f2fgbu10sPcsNT_4 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT_4 = $a7f2fgbu10s_PcsNT_4 + $a7f2fgbu10sPcsNT_4;

                $a7f2fgbu10sPriceNT_4 = $a7f2fgbu10sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceNT_4 = $a7f2fgbu10s_PriceNT_4 + $a7f2fgbu10sPriceNT_4;

                $a7f2thbu05sPcsNT_4 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT_4 = $a7f2thbu05s_PcsNT_4 + $a7f2thbu05sPcsNT_4;

                $a7f2thbu05sPriceNT_4 = $a7f2thbu05sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceNT_4 = $a7f2thbu05s_PriceNT_4 + $a7f2thbu05sPriceNT_4;

                $a7f2debu10sPcsNT_4 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT_4 = $a7f2debu10s_PcsNT_4 + $a7f2debu10sPcsNT_4;

                $a7f2debu10sPriceNT_4 = $a7f2debu10sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceNT_4 = $a7f2debu10s_PriceNT_4 + $a7f2debu10sPriceNT_4;

                $a7f2exbu11sPcsNT_4 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT_4 = $a7f2exbu11s_PcsNT_4 + $a7f2exbu11sPcsNT_4;

                $a7f2exbu11sPriceNT_4 = $a7f2exbu11sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceNT_4 = $a7f2exbu11s_PriceNT_4 + $a7f2exbu11sPriceNT_4;

                $a7f2twbu04sPcsNT_4 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT_4 = $a7f2twbu04s_PcsNT_4 + $a7f2twbu04sPcsNT_4;

                $a7f2twbu04sPriceNT_4 = $a7f2twbu04sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceNT_4 = $a7f2twbu04s_PriceNT_4 + $a7f2twbu04sPriceNT_4;

                $a7f2twbu07sPcsNT_4 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT_4 = $a7f2twbu07s_PcsNT_4 + $a7f2twbu07sPcsNT_4;

                $a7f2twbu07sPriceNT_4 = $a7f2twbu07sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceNT_4 = $a7f2twbu07s_PriceNT_4 + $a7f2twbu07sPriceNT_4;

                $a7f2cebu10sPcsNT_4 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT_4 = $a7f2cebu10s_PcsNT_4 + $a7f2cebu10sPcsNT_4;

                $a7f2cebu10sPriceNT_4 = $a7f2cebu10sPcsNT_4 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceNT_4 = $a7f2cebu10s_PriceNT_4 + $a7f2cebu10sPriceNT_4;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT_4 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT_4 = $a8f1fgbu02s_PcsNT_4 + $a8f1fgbu02sPcsNT_4;

                $a8f1fgbu02sPriceNT_4 = $a8f1fgbu02sPcsNT_4 * $NumberNT_4;
                $a8f1fgbu02s_PriceNT_4 = $a8f1fgbu02s_PriceNT_4 + $a8f1fgbu02sPriceNT_4;

                $a8f2fgbu10sPcsNT_4 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT_4 = $a8f2fgbu10s_PcsNT_4 + $a8f2fgbu10sPcsNT_4;

                $a8f2fgbu10sPriceNT_4 = $a8f2fgbu10sPcsNT_4 * $NumberNT_4;
                $a8f2fgbu10s_PriceNT_4 = $a8f2fgbu10s_PriceNT_4 + $a8f2fgbu10sPriceNT_4;

                $a8f2thbu05sPcsNT_4 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT_4 = $a8f2thbu05s_PcsNT_4 + $a8f2thbu05sPcsNT_4;

                $a8f2thbu05sPriceNT_4 = $a8f2thbu05sPcsNT_4 * $NumberNT_4;
                $a8f2thbu05s_PriceNT_4 = $a8f2thbu05s_PriceNT_4 + $a8f2thbu05sPriceNT_4;

                $a8f2debu10sPcsNT_4 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT_4 = $a8f2debu10s_PcsNT_4 + $a8f2debu10sPcsNT_4;

                $a8f2debu10sPriceNT_4 = $a8f2debu10sPcsNT_4 * $NumberNT_4;
                $a8f2debu10s_PriceNT_4 = $a8f2debu10s_PriceNT_4 + $a8f2debu10sPriceNT_4;

                $a8f2exbu11sPcsNT_4 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT_4 = $a8f2exbu11s_PcsNT_4 + $a8f2exbu11sPcsNT_4;

                $a8f2exbu11sPriceNT_4 = $a8f2exbu11sPcsNT_4 * $NumberNT_4;
                $a8f2exbu11s_PriceNT_4 = $a8f2exbu11s_PriceNT_4 + $a8f2exbu11sPriceNT_4;

                $a8f2twbu04sPcsNT_4 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT_4 = $a8f2twbu04s_PcsNT_4 + $a8f2twbu04sPcsNT_4;

                $a8f2twbu04sPriceNT_4 = $a8f2twbu04sPcsNT_4 * $NumberNT_4;
                $a8f2twbu04s_PriceNT_4 = $a8f2twbu04s_PriceNT_4 + $a8f2twbu04sPriceNT_4;

                $a8f2twbu07sPcsNT_4 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT_4 = $a8f2twbu07s_PcsNT_4 + $a8f2twbu07sPcsNT_4;

                $a8f2twbu07sPriceNT_4 = $a8f2twbu07sPcsNT_4 * $NumberNT_4;
                $a8f2twbu07s_PriceNT_4 = $a8f2twbu07s_PriceNT_4 + $a8f2twbu07sPriceNT_4;

                $a8f2cebu10sPcsNT_4 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT_4 = $a8f2cebu10s_PcsNT_4 + $a8f2cebu10sPcsNT_4;

                $a8f2cebu10sPriceNT_4 = $a8f2cebu10sPcsNT_4 * $NumberNT_4;
                $a8f2cebu10s_PriceNT_4 = $a8f2cebu10s_PriceNT_4 + $a8f2cebu10sPriceNT_4;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT_4 = $rowitem->dc1_s_Quantity;
                $DC1_PcsNT_4 = $DC1_PcsNT_4 + $DC1PcsNT_4;

                $DC1PriceNT_4 = $DC1PcsNT_4 * $NumberNT_4;
                $DC1_PriceNT_4 = $DC1_PriceNT_4 + $DC1PriceNT_4;

                $DCPPcsNT_4 = $rowitem->dcp_s_Quantity;
                $DCP_PcsNT_4 = $DCP_PcsNT_4 + $DCPPcsNT_4;

                $DCPPriceNT_4 = $DCPPcsNT_4 * $NumberNT_4;
                $DCP_PriceNT_4 = $DCP_PriceNT_4 + $DCPPriceNT_4;

                $DCYPcsNT_4 = $rowitem->dcy_s_Quantity;
                $DCY_PcsNT_4 = $DCY_PcsNT_4 + $DCYPcsNT_4;

                $DCYPriceNT_4 = $DCYPcsNT_4 * $NumberNT_4;
                $DCY_PriceNT_4 = $DCY_PriceNT_4 + $DCYPriceNT_4;

                $DEXPcsNT_4 = $rowitem->dex_s_Quantity;
                $DEX_PcsNT_4 = $DEX_PcsNT_4 + $DEXPcsNT_4;

                $DEXPriceNT_4 = $DEXPcsNT_4 * $NumberNT_4;
                $DEX_PriceNT_4 = $DEX_PriceNT_4 + $DEXPriceNT_4;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนโมโน" || $rowitem->Category === "ไนลอน"  && $Code_1[0] === "SNT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberSNT_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberSNT_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSNT_1 = $rowitem->PcsAfter;
                $Pcs_AfterSNT_1 = $Pcs_AfterSNT_1 + $PCSAfterSNT_1;

                $PriceAfterSNT_1 = $rowitem->PriceAfter;
                $Price_AfterSNT_1 = $Price_AfterSNT_1 + $PriceAfterSNT_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSNT_1 = $rowitem->Po_Quantity;
                $Po_PcsSNT_1 = $Po_PcsSNT_1 + $PoPcsSNT_1;

                $PoPriceSNT_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceSNT_1 = $Po_PriceSNT_1 + $PoPriceSNT_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSNT_1 = $rowitem->Neg_Quantity;
                $Neg_PcsSNT_1 = $Neg_PcsSNT_1 + $NegPcsSNT_1;


                $NegPriceSNT_1 = $NumberSNT_1 * $rowitem->Neg_Quantity;
                $Neg_PriceSNT_1 = $Neg_PriceSNT_1 + $NegPriceSNT_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSNT_1 = $PCSAfterSNT_1 + $PoPcsSNT_1 + $NegPcsSNT_1;
                $BackChange_PcsSNT_1 = $BackChange_PcsSNT_1 + $BackChangePcsSNT_1;

                $BackChangePriceSNT_1 = $PriceAfterSNT_1 + $PoPriceSNT_1 + $NegPriceSNT_1;
                $BackChange_PriceSNT_1 = $BackChange_PriceSNT_1 + $BackChangePriceSNT_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSNT_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsSNT_1 = $Purchase_PcsSNT_1 + $PurchasePcsSNT_1;

                $PurchasePriceSNT_1 = $rowitem->purchase_Cost;
                $Purchase_PriceSNT_1 = $Purchase_PriceSNT_1 + $PurchasePriceSNT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSNT_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSNT_1 = $ReciveTranfer_PcsSNT_1 + $ReciveTranferPcsSNT_1;

                $ReciveTranferPriceSNT_1 = $ReciveTranferPcsSNT_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceSNT_1 = $ReciveTranfer_PriceSNT_1 + $ReciveTranferPriceSNT_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySNT_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSSNT_1 = $ReturnItem_PCSSNT_1 + $ReturnItemQuantitySNT_1;

                $ReturnItemPriceSNT_1 = $ReturnItemQuantitySNT_1 * $NumberSNT_1;
                $ReturnItem_PriceSNT_1 = $ReturnItem_PriceSNT_1 + $ReturnItemPriceSNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSNT_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsSNT_1 + $ReturnItemQuantitySNT_1;
                $AllIn_PcsSNT_1 = $AllIn_PcsSNT_1 + $AllInPcsSNT_1;

                $AllInPriceSNT_1 = $PurchasePriceSNT_1 + $ReciveTranferPriceSNT_1 + $ReturnItemPriceSNT_1;
                $AllIn_PriceSNT_1 = $AllIn_PriceSNT_1 + $AllInPriceSNT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSNT_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsSNT_1 = $SendSale_PcsSNT_1 + $SendSalePcsSNT_1;

                if ($BackChangePcsSNT_1 > 0 && $AllInPcsSNT_1 > 0) {
                    $SendSalePriceSNT_1 = (($AllInPriceSNT_1 + $BackChangePriceSNT_1) / ($AllInPcsSNT_1 + $BackChangePcsSNT_1)) * $SendSalePcsSNT_1;
                    $SendSale_PriceSNT_1 = $SendSale_PriceSNT_1 + $SendSalePriceSNT_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSNT_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSNT_1 = $ReciveTranOut_PcsSNT_1 + $ReciveTranOutPcsSNT_1;

                if ($AllInPcsSNT_1 > 0 && $BackChangePcsSNT_1 > 0) {
                    $ReciveTranOutPriceSNT_1 = (($AllInPriceSNT_1 + $BackChangePriceSNT_1) / ($AllInPcsSNT_1 + $BackChangePcsSNT_1)) * $ReciveTranOutPcsSNT_1;
                    $ReciveTranOut_PriceSNT_1 = $ReciveTranOut_PriceSNT_1 + $ReciveTranOutPriceSNT_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSNT_1 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsSNT_1 = $ReturnStore_PcsSNT_1 + $ReturnStorePcsSNT_1;

                if ($AllInPcsSNT_1 > 0 && $BackChangePcsSNT_1 > 0) {
                    $ReturnStorePriceSNT_1 = (($AllInPriceSNT_1 + $BackChangePriceSNT_1) / ($AllInPcsSNT_1 + $BackChangePcsSNT_1)) * $ReturnStorePcsSNT_1;
                    $ReturnStore_PriceSNT_1 = $ReturnStore_PriceSNT_1 + $ReturnStorePriceSNT_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSNT_1 = $ReturnStorePcsSNT_1 + $ReciveTranOutPcsSNT_1 + $SendSalePcsSNT_1;
                $AllOut_PcsSNT_1 = $AllOut_PcsSNT_1 + $AllOutPcsSNT_1;

                $AllOutPriceSNT_1 = $SendSale_PriceSNT_1 + $ReciveTranOut_PriceSNT_1 + $ReturnStore_PriceSNT_1;
                $AllOut_PriceSNT_1 = $AllOut_PriceSNT_1 + $AllOutPriceSNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSNT_1 = $BackChangePcsSNT_1 + $AllInPcsSNT_1 + $AllOutPcsSNT_1;
                $Calculate_PcsSNT_1 = $Calculate_PcsSNT_1 + $CalculatePcsSNT_1;

                $CalculatePriceSNT_1 = $BackChangePriceSNT_1 + $AllInPriceSNT_1 + $AllOutPriceSNT_1;
                $Calculate_PriceSNT_1 = $Calculate_PriceSNT_1 + $CalculatePriceSNT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSNT_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsSNT_1 = $NewCalculate_PcsSNT_1 + $NewCalculatePcsSNT_1;

                $NewCalculatePriceSNT_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceSNT_1 = $NewCalculate_PriceSNT_1 + $NewCalculatePriceSNT_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSNT_1 = $NewCalculatePcsSNT_1 - $CalculatePcsSNT_1;
                $Diff_PcsSNT_1 = $Diff_PcsSNT_1 + $DiffPcsSNT_1;

                $DiffPriceSNT_1 = $NewCalculatePriceSNT_1 - $CalculatePriceSNT_1;
                $Diff_PriceSNT_1 = $Diff_PriceSNT_1 + $DiffPriceSNT_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSNT_1 = $CalculatePcsSNT_1;
                $NewTotal_PcsSNT_1 = $NewTotal_PcsSNT_1 + $CalculatePcsSNT_1;

                $NewTotalPriceSNT_1 = $NewTotalPcsSNT_1 * $rowitem->PriceAvg;
                $NewTotal_PriceSNT_1 = $NewTotal_PriceSNT_1 + $NewTotalPriceSNT_1;

                $NewTotalDiffNavSNT_1 = $NewTotalPriceSNT_1 - $NewCalculatePriceSNT_1;
                $NewTotalDiff_NavSNT_1 = $NewTotalDiff_NavSNT_1 + $NewTotalDiffNavSNT_1;

                $NewTotalDiffCalSNT_1 = $NewTotalPriceSNT_1 - $CalculatePriceSNT_1;
                $NewTotalDiff_CalSNT_1 = $NewTotalDiff_CalSNT_1 + $NewTotalDiffCalSNT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSNT_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSNT_1 = $a7f1fgbu02s_PcsSNT_1 + $a7f1fgbu02sPcsSNT_1;

                $a7f1fgbu02sPriceSNT_1 = $a7f1fgbu02sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceSNT_1 = $a7f1fgbu02s_PriceSNT_1 + $a7f1fgbu02sPriceSNT_1;

                $a7f2fgbu10sPcsSNT_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSNT_1 = $a7f2fgbu10s_PcsSNT_1 + $a7f2fgbu10sPcsSNT_1;

                $a7f2fgbu10sPriceSNT_1 = $a7f2fgbu10sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceSNT_1 = $a7f2fgbu10s_PriceSNT_1 + $a7f2fgbu10sPriceSNT_1;

                $a7f2thbu05sPcsSNT_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSNT_1 = $a7f2thbu05s_PcsSNT_1 + $a7f2thbu05sPcsSNT_1;

                $a7f2thbu05sPriceSNT_1 = $a7f2thbu05sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceSNT_1 = $a7f2thbu05s_PriceSNT_1 + $a7f2thbu05sPriceSNT_1;

                $a7f2debu10sPcsSNT_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSNT_1 = $a7f2debu10s_PcsSNT_1 + $a7f2debu10sPcsSNT_1;

                $a7f2debu10sPriceSNT_1 = $a7f2debu10sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceSNT_1 = $a7f2debu10s_PriceSNT_1 + $a7f2debu10sPriceSNT_1;

                $a7f2exbu11sPcsSNT_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSNT_1 = $a7f2exbu11s_PcsSNT_1 + $a7f2exbu11sPcsSNT_1;

                $a7f2exbu11sPriceSNT_1 = $a7f2exbu11sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceSNT_1 = $a7f2exbu11s_PriceSNT_1 + $a7f2exbu11sPriceSNT_1;

                $a7f2twbu04sPcsSNT_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSNT_1 = $a7f2twbu04s_PcsSNT_1 + $a7f2twbu04sPcsSNT_1;

                $a7f2twbu04sPriceSNT_1 = $a7f2twbu04sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceSNT_1 = $a7f2twbu04s_PriceSNT_1 + $a7f2twbu04sPriceSNT_1;

                $a7f2twbu07sPcsSNT_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSNT_1 = $a7f2twbu07s_PcsSNT_1 + $a7f2twbu07sPcsSNT_1;

                $a7f2twbu07sPriceSNT_1 = $a7f2twbu07sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceSNT_1 = $a7f2twbu07s_PriceSNT_1 + $a7f2twbu07sPriceSNT_1;

                $a7f2cebu10sPcsSNT_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSNT_1 = $a7f2cebu10s_PcsSNT_1 + $a7f2cebu10sPcsSNT_1;

                $a7f2cebu10sPriceSNT_1 = $a7f2cebu10sPcsSNT_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceSNT_1 = $a7f2cebu10s_PriceSNT_1 + $a7f2cebu10sPriceSNT_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSNT_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSNT_1 = $a8f1fgbu02s_PcsSNT_1 + $a8f1fgbu02sPcsSNT_1;

                $a8f1fgbu02sPriceSNT_1 = $a8f1fgbu02sPcsSNT_1 * $NumberSNT_1;
                $a8f1fgbu02s_PriceSNT_1 = $a8f1fgbu02s_PriceSNT_1 + $a8f1fgbu02sPriceSNT_1;

                $a8f2fgbu10sPcsSNT_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSNT_1 = $a8f2fgbu10s_PcsSNT_1 + $a8f2fgbu10sPcsSNT_1;

                $a8f2fgbu10sPriceSNT_1 = $a8f2fgbu10sPcsSNT_1 * $NumberSNT_1;
                $a8f2fgbu10s_PriceSNT_1 = $a8f2fgbu10s_PriceSNT_1 + $a8f2fgbu10sPriceSNT_1;

                $a8f2thbu05sPcsSNT_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSNT_1 = $a8f2thbu05s_PcsSNT_1 + $a8f2thbu05sPcsSNT_1;

                $a8f2thbu05sPriceSNT_1 = $a8f2thbu05sPcsSNT_1 * $NumberSNT_1;
                $a8f2thbu05s_PriceSNT_1 = $a8f2thbu05s_PriceSNT_1 + $a8f2thbu05sPriceSNT_1;

                $a8f2debu10sPcsSNT_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSNT_1 = $a8f2debu10s_PcsSNT_1 + $a8f2debu10sPcsSNT_1;

                $a8f2debu10sPriceSNT_1 = $a8f2debu10sPcsSNT_1 * $NumberSNT_1;
                $a8f2debu10s_PriceSNT_1 = $a8f2debu10s_PriceSNT_1 + $a8f2debu10sPriceSNT_1;

                $a8f2exbu11sPcsSNT_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSNT_1 = $a8f2exbu11s_PcsSNT_1 + $a8f2exbu11sPcsSNT_1;

                $a8f2exbu11sPriceSNT_1 = $a8f2exbu11sPcsSNT_1 * $NumberSNT_1;
                $a8f2exbu11s_PriceSNT_1 = $a8f2exbu11s_PriceSNT_1 + $a8f2exbu11sPriceSNT_1;

                $a8f2twbu04sPcsSNT_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSNT_1 = $a8f2twbu04s_PcsSNT_1 + $a8f2twbu04sPcsSNT_1;

                $a8f2twbu04sPriceSNT_1 = $a8f2twbu04sPcsSNT_1 * $NumberSNT_1;
                $a8f2twbu04s_PriceSNT_1 = $a8f2twbu04s_PriceSNT_1 + $a8f2twbu04sPriceSNT_1;

                $a8f2twbu07sPcsSNT_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSNT_1 = $a8f2twbu07s_PcsSNT_1 + $a8f2twbu07sPcsSNT_1;

                $a8f2twbu07sPriceSNT_1 = $a8f2twbu07sPcsSNT_1 * $NumberSNT_1;
                $a8f2twbu07s_PriceSNT_1 = $a8f2twbu07s_PriceSNT_1 + $a8f2twbu07sPriceSNT_1;

                $a8f2cebu10sPcsSNT_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSNT_1 = $a8f2cebu10s_PcsSNT_1 + $a8f2cebu10sPcsSNT_1;

                $a8f2cebu10sPriceSNT_1 = $a8f2cebu10sPcsSNT_1 * $NumberSNT_1;
                $a8f2cebu10s_PriceSNT_1 = $a8f2cebu10s_PriceSNT_1 + $a8f2cebu10sPriceSNT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSNT_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsSNT_1 = $DC1_PcsSNT_1 + $DC1PcsSNT_1;

                $DC1PriceSNT_1 = $DC1PcsSNT_1 * $NumberSNT_1;
                $DC1_PriceSNT_1 = $DC1_PriceSNT_1 + $DC1PriceSNT_1;

                $DCPPcsSNT_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsSNT_1 = $DCP_PcsSNT_1 + $DCPPcsSNT_1;

                $DCPPriceSNT_1 = $DCPPcsSNT_1 * $NumberSNT_1;
                $DCP_PriceSNT_1 = $DCP_PriceSNT_1 + $DCPPriceSNT_1;

                $DCYPcsSNT_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsSNT_1 = $DCY_PcsSNT_1 + $DCYPcsSNT_1;

                $DCYPriceSNT_1 = $DCYPcsSNT_1 * $NumberSNT_1;
                $DCY_PriceSNT_1 = $DCY_PriceSNT_1 + $DCYPriceSNT_1;

                $DEXPcsSNT_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsSNT_1 = $DEX_PcsSNT_1 + $DEXPcsSNT_1;

                $DEXPriceSNT_1 = $DEXPcsSNT_1 * $NumberSNT_1;
                $DEX_PriceSNT_1 = $DEX_PriceSNT_1 + $DEXPriceSNT_1;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนโพลี" && $Code_1[0] === "SNT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberSNT_2 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberSNT_2 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSNT_2 = $rowitem->PcsAfter;
                $Pcs_AfterSNT_2 = $Pcs_AfterSNT_2 + $PCSAfterSNT_2;

                $PriceAfterSNT_2 = $rowitem->PriceAfter;
                $Price_AfterSNT_2 = $Price_AfterSNT_2 + $PriceAfterSNT_2;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSNT_2 = $rowitem->Po_Quantity;
                $Po_PcsSNT_2 = $Po_PcsSNT_2 + $PoPcsSNT_2;

                $PoPriceSNT_2 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceSNT_2 = $Po_PriceSNT_2 + $PoPriceSNT_2;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSNT_2 = $rowitem->Neg_Quantity;
                $Neg_PcsSNT_2 = $Neg_PcsSNT_2 + $NegPcsSNT_2;


                $NegPriceSNT_2 = $NumberSNT_2 * $rowitem->Neg_Quantity;
                $Neg_PriceSNT_2 = $Neg_PriceSNT_2 + $NegPriceSNT_2;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSNT_2 = $PCSAfterSNT_2 + $PoPcsSNT_2 + $NegPcsSNT_2;
                $BackChange_PcsSNT_2 = $BackChange_PcsSNT_2 + $BackChangePcsSNT_2;

                $BackChangePriceSNT_2 = $PriceAfterSNT_2 + $PoPriceSNT_2 + $NegPriceSNT_2;
                $BackChange_PriceSNT_2 = $BackChange_PriceSNT_2 + $BackChangePriceSNT_2;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSNT_2 = $rowitem->purchase_Quantity;
                $Purchase_PcsSNT_2 = $Purchase_PcsSNT_2 + $PurchasePcsSNT_2;

                $PurchasePriceSNT_2 = $rowitem->purchase_Cost;
                $Purchase_PriceSNT_2 = $Purchase_PriceSNT_2 + $PurchasePriceSNT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSNT_2 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSNT_2 = $ReciveTranfer_PcsSNT_2 + $ReciveTranferPcsSNT_2;

                $ReciveTranferPriceSNT_2 = $ReciveTranferPcsSNT_2 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceSNT_2 = $ReciveTranfer_PriceSNT_2 + $ReciveTranferPriceSNT_2;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySNT_2 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSSNT_2 = $ReturnItem_PCSSNT_2 + $ReturnItemQuantitySNT_2;

                $ReturnItemPriceSNT_2 = $ReturnItemQuantitySNT_2 * $NumberSNT_2;
                $ReturnItem_PriceSNT_2 = $ReturnItem_PriceSNT_2 + $ReturnItemPriceSNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSNT_2 = $rowitem->purchase_Quantity + $ReciveTranferPcsSNT_2 + $ReturnItemQuantitySNT_2;
                $AllIn_PcsSNT_2 = $AllIn_PcsSNT_2 + $AllInPcsSNT_2;

                $AllInPriceSNT_2 = $PurchasePriceSNT_2 + $ReciveTranferPriceSNT_2 + $ReturnItemPriceSNT_2;
                $AllIn_PriceSNT_2 = $AllIn_PriceSNT_2 + $AllInPriceSNT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSNT_2 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsSNT_2 = $SendSale_PcsSNT_2 + $SendSalePcsSNT_2;

                if ($BackChangePcsSNT_2 > 0 && $AllInPcsSNT_2 > 0) {
                    $SendSalePriceSNT_2 = (($AllInPriceSNT_2 + $BackChangePriceSNT_2) / ($AllInPcsSNT_2 + $BackChangePcsSNT_2)) * $SendSalePcsSNT_2;
                    $SendSale_PriceSNT_2 = $SendSale_PriceSNT_2 + $SendSalePriceSNT_2;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSNT_2 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSNT_2 = $ReciveTranOut_PcsSNT_2 + $ReciveTranOutPcsSNT_2;

                if ($AllInPcsSNT_2 > 0 && $BackChangePcsSNT_2 > 0) {
                    $ReciveTranOutPriceSNT_2 = (($AllInPriceSNT_2 + $BackChangePriceSNT_2) / ($AllInPcsSNT_2 + $BackChangePcsSNT_2)) * $ReciveTranOutPcsSNT_2;
                    $ReciveTranOut_PriceSNT_2 = $ReciveTranOut_PriceSNT_2 + $ReciveTranOutPriceSNT_2;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSNT_2 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsSNT_2 = $ReturnStore_PcsSNT_2 + $ReturnStorePcsSNT_2;

                if ($AllInPcsSNT_2 > 0 && $BackChangePcsSNT_2 > 0) {
                    $ReturnStorePriceSNT_2 = (($AllInPriceSNT_2 + $BackChangePriceSNT_2) / ($AllInPcsSNT_2 + $BackChangePcsSNT_2)) * $ReturnStorePcsSNT_2;
                    $ReturnStore_PriceSNT_2 = $ReturnStore_PriceSNT_2 + $ReturnStorePriceSNT_2;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSNT_2 = $ReturnStorePcsSNT_2 + $ReciveTranOutPcsSNT_2 + $SendSalePcsSNT_2;
                $AllOut_PcsSNT_2 = $AllOut_PcsSNT_2 + $AllOutPcsSNT_2;

                $AllOutPriceSNT_2 = $SendSale_PriceSNT_2 + $ReciveTranOut_PriceSNT_2 + $ReturnStore_PriceSNT_2;
                $AllOut_PriceSNT_2 = $AllOut_PriceSNT_2 + $AllOutPriceSNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSNT_2 = $BackChangePcsSNT_2 + $AllInPcsSNT_2 + $AllOutPcsSNT_2;
                $Calculate_PcsSNT_2 = $Calculate_PcsSNT_2 + $CalculatePcsSNT_2;

                $CalculatePriceSNT_2 = $BackChangePriceSNT_2 + $AllInPriceSNT_2 + $AllOutPriceSNT_2;
                $Calculate_PriceSNT_2 = $Calculate_PriceSNT_2 + $CalculatePriceSNT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSNT_2 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsSNT_2 = $NewCalculate_PcsSNT_2 + $NewCalculatePcsSNT_2;

                $NewCalculatePriceSNT_2 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceSNT_2 = $NewCalculate_PriceSNT_2 + $NewCalculatePriceSNT_2;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSNT_2 = $NewCalculatePcsSNT_2 - $CalculatePcsSNT_2;
                $Diff_PcsSNT_2 = $Diff_PcsSNT_2 + $DiffPcsSNT_2;

                $DiffPriceSNT_2 = $NewCalculatePriceSNT_2 - $CalculatePriceSNT_2;
                $Diff_PriceSNT_2 = $Diff_PriceSNT_2 + $DiffPriceSNT_2;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSNT_2 = $CalculatePcsSNT_2;
                $NewTotal_PcsSNT_2 = $NewTotal_PcsSNT_2 + $CalculatePcsSNT_2;

                $NewTotalPriceSNT_2 = $NewTotalPcsSNT_2 * $rowitem->PriceAvg;
                $NewTotal_PriceSNT_2 = $NewTotal_PriceSNT_2 + $NewTotalPriceSNT_2;

                $NewTotalDiffNavSNT_2 = $NewTotalPriceSNT_2 - $NewCalculatePriceSNT_2;
                $NewTotalDiff_NavSNT_2 = $NewTotalDiff_NavSNT_2 + $NewTotalDiffNavSNT_2;

                $NewTotalDiffCalSNT_2 = $NewTotalPriceSNT_2 - $CalculatePriceSNT_2;
                $NewTotalDiff_CalSNT_2 = $NewTotalDiff_CalSNT_2 + $NewTotalDiffCalSNT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSNT_2 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSNT_2 = $a7f1fgbu02s_PcsSNT_2 + $a7f1fgbu02sPcsSNT_2;

                $a7f1fgbu02sPriceSNT_2 = $a7f1fgbu02sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceSNT_2 = $a7f1fgbu02s_PriceSNT_2 + $a7f1fgbu02sPriceSNT_2;

                $a7f2fgbu10sPcsSNT_2 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSNT_2 = $a7f2fgbu10s_PcsSNT_2 + $a7f2fgbu10sPcsSNT_2;

                $a7f2fgbu10sPriceSNT_2 = $a7f2fgbu10sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceSNT_2 = $a7f2fgbu10s_PriceSNT_2 + $a7f2fgbu10sPriceSNT_2;

                $a7f2thbu05sPcsSNT_2 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSNT_2 = $a7f2thbu05s_PcsSNT_2 + $a7f2thbu05sPcsSNT_2;

                $a7f2thbu05sPriceSNT_2 = $a7f2thbu05sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceSNT_2 = $a7f2thbu05s_PriceSNT_2 + $a7f2thbu05sPriceSNT_2;

                $a7f2debu10sPcsSNT_2 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSNT_2 = $a7f2debu10s_PcsSNT_2 + $a7f2debu10sPcsSNT_2;

                $a7f2debu10sPriceSNT_2 = $a7f2debu10sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceSNT_2 = $a7f2debu10s_PriceSNT_2 + $a7f2debu10sPriceSNT_2;

                $a7f2exbu11sPcsSNT_2 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSNT_2 = $a7f2exbu11s_PcsSNT_2 + $a7f2exbu11sPcsSNT_2;

                $a7f2exbu11sPriceSNT_2 = $a7f2exbu11sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceSNT_2 = $a7f2exbu11s_PriceSNT_2 + $a7f2exbu11sPriceSNT_2;

                $a7f2twbu04sPcsSNT_2 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSNT_2 = $a7f2twbu04s_PcsSNT_2 + $a7f2twbu04sPcsSNT_2;

                $a7f2twbu04sPriceSNT_2 = $a7f2twbu04sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceSNT_2 = $a7f2twbu04s_PriceSNT_2 + $a7f2twbu04sPriceSNT_2;

                $a7f2twbu07sPcsSNT_2 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSNT_2 = $a7f2twbu07s_PcsSNT_2 + $a7f2twbu07sPcsSNT_2;

                $a7f2twbu07sPriceSNT_2 = $a7f2twbu07sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceSNT_2 = $a7f2twbu07s_PriceSNT_2 + $a7f2twbu07sPriceSNT_2;

                $a7f2cebu10sPcsSNT_2 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSNT_2 = $a7f2cebu10s_PcsSNT_2 + $a7f2cebu10sPcsSNT_2;

                $a7f2cebu10sPriceSNT_2 = $a7f2cebu10sPcsSNT_2 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceSNT_2 = $a7f2cebu10s_PriceSNT_2 + $a7f2cebu10sPriceSNT_2;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSNT_2 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSNT_2 = $a8f1fgbu02s_PcsSNT_2 + $a8f1fgbu02sPcsSNT_2;

                $a8f1fgbu02sPriceSNT_2 = $a8f1fgbu02sPcsSNT_2 * $NumberSNT_2;
                $a8f1fgbu02s_PriceSNT_2 = $a8f1fgbu02s_PriceSNT_2 + $a8f1fgbu02sPriceSNT_2;

                $a8f2fgbu10sPcsSNT_2 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSNT_2 = $a8f2fgbu10s_PcsSNT_2 + $a8f2fgbu10sPcsSNT_2;

                $a8f2fgbu10sPriceSNT_2 = $a8f2fgbu10sPcsSNT_2 * $NumberSNT_2;
                $a8f2fgbu10s_PriceSNT_2 = $a8f2fgbu10s_PriceSNT_2 + $a8f2fgbu10sPriceSNT_2;

                $a8f2thbu05sPcsSNT_2 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSNT_2 = $a8f2thbu05s_PcsSNT_2 + $a8f2thbu05sPcsSNT_2;

                $a8f2thbu05sPriceSNT_2 = $a8f2thbu05sPcsSNT_2 * $NumberSNT_2;
                $a8f2thbu05s_PriceSNT_2 = $a8f2thbu05s_PriceSNT_2 + $a8f2thbu05sPriceSNT_2;

                $a8f2debu10sPcsSNT_2 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSNT_2 = $a8f2debu10s_PcsSNT_2 + $a8f2debu10sPcsSNT_2;

                $a8f2debu10sPriceSNT_2 = $a8f2debu10sPcsSNT_2 * $NumberSNT_2;
                $a8f2debu10s_PriceSNT_2 = $a8f2debu10s_PriceSNT_2 + $a8f2debu10sPriceSNT_2;

                $a8f2exbu11sPcsSNT_2 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSNT_2 = $a8f2exbu11s_PcsSNT_2 + $a8f2exbu11sPcsSNT_2;

                $a8f2exbu11sPriceSNT_2 = $a8f2exbu11sPcsSNT_2 * $NumberSNT_2;
                $a8f2exbu11s_PriceSNT_2 = $a8f2exbu11s_PriceSNT_2 + $a8f2exbu11sPriceSNT_2;

                $a8f2twbu04sPcsSNT_2 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSNT_2 = $a8f2twbu04s_PcsSNT_2 + $a8f2twbu04sPcsSNT_2;

                $a8f2twbu04sPriceSNT_2 = $a8f2twbu04sPcsSNT_2 * $NumberSNT_2;
                $a8f2twbu04s_PriceSNT_2 = $a8f2twbu04s_PriceSNT_2 + $a8f2twbu04sPriceSNT_2;

                $a8f2twbu07sPcsSNT_2 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSNT_2 = $a8f2twbu07s_PcsSNT_2 + $a8f2twbu07sPcsSNT_2;

                $a8f2twbu07sPriceSNT_2 = $a8f2twbu07sPcsSNT_2 * $NumberSNT_2;
                $a8f2twbu07s_PriceSNT_2 = $a8f2twbu07s_PriceSNT_2 + $a8f2twbu07sPriceSNT_2;

                $a8f2cebu10sPcsSNT_2 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSNT_2 = $a8f2cebu10s_PcsSNT_2 + $a8f2cebu10sPcsSNT_2;

                $a8f2cebu10sPriceSNT_2 = $a8f2cebu10sPcsSNT_2 * $NumberSNT_2;
                $a8f2cebu10s_PriceSNT_2 = $a8f2cebu10s_PriceSNT_2 + $a8f2cebu10sPriceSNT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSNT_2 = $rowitem->dc1_s_Quantity;
                $DC1_PcsSNT_2 = $DC1_PcsSNT_2 + $DC1PcsSNT_2;

                $DC1PriceSNT_2 = $DC1PcsSNT_2 * $NumberSNT_2;
                $DC1_PriceSNT_2 = $DC1_PriceSNT_2 + $DC1PriceSNT_2;

                $DCPPcsSNT_2 = $rowitem->dcp_s_Quantity;
                $DCP_PcsSNT_2 = $DCP_PcsSNT_2 + $DCPPcsSNT_2;

                $DCPPriceSNT_2 = $DCPPcsSNT_2 * $NumberSNT_2;
                $DCP_PriceSNT_2 = $DCP_PriceSNT_2 + $DCPPriceSNT_2;

                $DCYPcsSNT_2 = $rowitem->dcy_s_Quantity;
                $DCY_PcsSNT_2 = $DCY_PcsSNT_2 + $DCYPcsSNT_2;

                $DCYPriceSNT_2 = $DCYPcsSNT_2 * $NumberSNT_2;
                $DCY_PriceSNT_2 = $DCY_PriceSNT_2 + $DCYPriceSNT_2;

                $DEXPcsSNT_2 = $rowitem->dex_s_Quantity;
                $DEX_PcsSNT_2 = $DEX_PcsSNT_2 + $DEXPcsSNT_2;

                $DEXPriceSNT_2 = $DEXPcsSNT_2 * $NumberSNT_2;
                $DEX_PriceSNT_2 = $DEX_PriceSNT_2 + $DEXPriceSNT_2;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนรุม" && $Code_1[0] === "MT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberMT_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberMT_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT_1 = $rowitem->PcsAfter;
                $Pcs_AfterMT_1 = $Pcs_AfterMT_1 + $PCSAfterMT_1;

                $PriceAfterMT_1 = $rowitem->PriceAfter;
                $Price_AfterMT_1 = $Price_AfterMT_1 + $PriceAfterMT_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT_1 = $rowitem->Po_Quantity;
                $Po_PcsMT_1 = $Po_PcsMT_1 + $PoPcsMT_1;

                $PoPriceMT_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceMT_1 = $Po_PriceMT_1 + $PoPriceMT_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT_1 = $rowitem->Neg_Quantity;
                $Neg_PcsMT_1 = $Neg_PcsMT_1 + $NegPcsMT_1;


                $NegPriceMT_1 = $NumberMT_1 * $rowitem->Neg_Quantity;
                $Neg_PriceMT_1 = $Neg_PriceMT_1 + $NegPriceMT_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT_1 = $PCSAfterMT_1 + $PoPcsMT_1 + $NegPcsMT_1;
                $BackChange_PcsMT_1 = $BackChange_PcsMT_1 + $BackChangePcsMT_1;

                $BackChangePriceMT_1 = $PriceAfterMT_1 + $PoPriceMT_1 + $NegPriceMT_1;
                $BackChange_PriceMT_1 = $BackChange_PriceMT_1 + $BackChangePriceMT_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsMT_1 = $Purchase_PcsMT_1 + $PurchasePcsMT_1;

                $PurchasePriceMT_1 = $rowitem->purchase_Cost;
                $Purchase_PriceMT_1 = $Purchase_PriceMT_1 + $PurchasePriceMT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT_1 = $ReciveTranfer_PcsMT_1 + $ReciveTranferPcsMT_1;

                $ReciveTranferPriceMT_1 = $ReciveTranferPcsMT_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceMT_1 = $ReciveTranfer_PriceMT_1 + $ReciveTranferPriceMT_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSMT_1 = $ReturnItem_PCSMT_1 + $ReturnItemQuantityMT_1;

                $ReturnItemPriceMT_1 = $ReturnItemQuantityMT_1 * $NumberMT_1;
                $ReturnItem_PriceMT_1 = $ReturnItem_PriceMT_1 + $ReturnItemPriceMT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsMT_1 + $ReturnItemQuantityMT_1;
                $AllIn_PcsMT_1 = $AllIn_PcsMT_1 + $AllInPcsMT_1;

                $AllInPriceMT_1 = $PurchasePriceMT_1 + $ReciveTranferPriceMT_1 + $ReturnItemPriceMT_1;
                $AllIn_PriceMT_1 = $AllIn_PriceMT_1 + $AllInPriceMT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsMT_1 = $SendSale_PcsMT_1 + $SendSalePcsMT_1;

                if ($BackChangePcsMT_1 > 0 && $AllInPcsMT_1 > 0) {
                    $SendSalePriceMT_1 = (($AllInPriceMT_1 + $BackChangePriceMT_1) / ($AllInPcsMT_1 + $BackChangePcsMT_1)) * $SendSalePcsMT_1;
                    $SendSale_PriceMT_1 = $SendSale_PriceMT_1 + $SendSalePriceMT_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT_1 = $ReciveTranOut_PcsMT_1 + $ReciveTranOutPcsMT_1;

                if ($AllInPcsMT_1 > 0 && $BackChangePcsMT_1 > 0) {
                    $ReciveTranOutPriceMT_1 = (($AllInPriceMT_1 + $BackChangePriceMT_1) / ($AllInPcsMT_1 + $BackChangePcsMT_1)) * $ReciveTranOutPcsMT_1;
                    $ReciveTranOut_PriceMT_1 = $ReciveTranOut_PriceMT_1 + $ReciveTranOutPriceMT_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT_1 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsMT_1 = $ReturnStore_PcsMT_1 + $ReturnStorePcsMT_1;

                if ($AllInPcsMT_1 > 0 && $BackChangePcsMT_1 > 0) {
                    $ReturnStorePriceMT_1 = (($AllInPriceMT_1 + $BackChangePriceMT_1) / ($AllInPcsMT_1 + $BackChangePcsMT_1)) * $ReturnStorePcsMT_1;
                    $ReturnStore_PriceMT_1 = $ReturnStore_PriceMT_1 + $ReturnStorePriceMT_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT_1 = $ReturnStorePcsMT_1 + $ReciveTranOutPcsMT_1 + $SendSalePcsMT_1;
                $AllOut_PcsMT_1 = $AllOut_PcsMT_1 + $AllOutPcsMT_1;

                $AllOutPriceMT_1 = $SendSale_PriceMT_1 + $ReciveTranOut_PriceMT_1 + $ReturnStore_PriceMT_1;
                $AllOut_PriceMT_1 = $AllOut_PriceMT_1 + $AllOutPriceMT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT_1 = $BackChangePcsMT_1 + $AllInPcsMT_1 + $AllOutPcsMT_1;
                $Calculate_PcsMT_1 = $Calculate_PcsMT_1 + $CalculatePcsMT_1;

                $CalculatePriceMT_1 = $BackChangePriceMT_1 + $AllInPriceMT_1 + $AllOutPriceMT_1;
                $Calculate_PriceMT_1 = $Calculate_PriceMT_1 + $CalculatePriceMT_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsMT_1 = $NewCalculate_PcsMT_1 + $NewCalculatePcsMT_1;

                $NewCalculatePriceMT_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceMT_1 = $NewCalculate_PriceMT_1 + $NewCalculatePriceMT_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT_1 = $NewCalculatePcsMT_1 - $CalculatePcsMT_1;
                $Diff_PcsMT_1 = $Diff_PcsMT_1 + $DiffPcsMT_1;

                $DiffPriceMT_1 = $NewCalculatePriceMT_1 - $CalculatePriceMT_1;
                $Diff_PriceMT_1 = $Diff_PriceMT_1 + $DiffPriceMT_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT_1 = $CalculatePcsMT_1;
                $NewTotal_PcsMT_1 = $NewTotal_PcsMT_1 + $CalculatePcsMT_1;

                $NewTotalPriceMT_1 = $NewTotalPcsMT_1 * $rowitem->PriceAvg;
                $NewTotal_PriceMT_1 = $NewTotal_PriceMT_1 + $NewTotalPriceMT_1;

                $NewTotalDiffNavMT_1 = $NewTotalPriceMT_1 - $NewCalculatePriceMT_1;
                $NewTotalDiff_NavMT_1 = $NewTotalDiff_NavMT_1 + $NewTotalDiffNavMT_1;

                $NewTotalDiffCalMT_1 = $NewTotalPriceMT_1 - $CalculatePriceMT_1;
                $NewTotalDiff_CalMT_1 = $NewTotalDiff_CalMT_1 + $NewTotalDiffCalMT_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT_1 = $a7f1fgbu02s_PcsMT_1 + $a7f1fgbu02sPcsMT_1;

                $a7f1fgbu02sPriceMT_1 = $a7f1fgbu02sPcsMT_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceMT_1 = $a7f1fgbu02s_PriceMT_1 + $a7f1fgbu02sPriceMT_1;

                $a7f2fgbu10sPcsMT_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT_1 = $a7f2fgbu10s_PcsMT_1 + $a7f2fgbu10sPcsMT_1;

                $a7f2fgbu10sPriceMT_1 = $a7f2fgbu10sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceMT_1 = $a7f2fgbu10s_PriceMT_1 + $a7f2fgbu10sPriceMT_1;

                $a7f2thbu05sPcsMT_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT_1 = $a7f2thbu05s_PcsMT_1 + $a7f2thbu05sPcsMT_1;

                $a7f2thbu05sPriceMT_1 = $a7f2thbu05sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceMT_1 = $a7f2thbu05s_PriceMT_1 + $a7f2thbu05sPriceMT_1;

                $a7f2debu10sPcsMT_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT_1 = $a7f2debu10s_PcsMT_1 + $a7f2debu10sPcsMT_1;

                $a7f2debu10sPriceMT_1 = $a7f2debu10sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceMT_1 = $a7f2debu10s_PriceMT_1 + $a7f2debu10sPriceMT_1;

                $a7f2exbu11sPcsMT_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT_1 = $a7f2exbu11s_PcsMT_1 + $a7f2exbu11sPcsMT_1;

                $a7f2exbu11sPriceMT_1 = $a7f2exbu11sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceMT_1 = $a7f2exbu11s_PriceMT_1 + $a7f2exbu11sPriceMT_1;

                $a7f2twbu04sPcsMT_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT_1 = $a7f2twbu04s_PcsMT_1 + $a7f2twbu04sPcsMT_1;

                $a7f2twbu04sPriceMT_1 = $a7f2twbu04sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceMT_1 = $a7f2twbu04s_PriceMT_1 + $a7f2twbu04sPriceMT_1;

                $a7f2twbu07sPcsMT_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT_1 = $a7f2twbu07s_PcsMT_1 + $a7f2twbu07sPcsMT_1;

                $a7f2twbu07sPriceMT_1 = $a7f2twbu07sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceMT_1 = $a7f2twbu07s_PriceMT_1 + $a7f2twbu07sPriceMT_1;

                $a7f2cebu10sPcsMT_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT_1 = $a7f2cebu10s_PcsMT_1 + $a7f2cebu10sPcsMT_1;

                $a7f2cebu10sPriceMT_1 = $a7f2cebu10sPcsMT_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceMT_1 = $a7f2cebu10s_PriceMT_1 + $a7f2cebu10sPriceMT_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT_1 = $a8f1fgbu02s_PcsMT_1 + $a8f1fgbu02sPcsMT_1;

                $a8f1fgbu02sPriceMT_1 = $a8f1fgbu02sPcsMT_1 * $NumberMT_1;
                $a8f1fgbu02s_PriceMT_1 = $a8f1fgbu02s_PriceMT_1 + $a8f1fgbu02sPriceMT_1;

                $a8f2fgbu10sPcsMT_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT_1 = $a8f2fgbu10s_PcsMT_1 + $a8f2fgbu10sPcsMT_1;

                $a8f2fgbu10sPriceMT_1 = $a8f2fgbu10sPcsMT_1 * $NumberMT_1;
                $a8f2fgbu10s_PriceMT_1 = $a8f2fgbu10s_PriceMT_1 + $a8f2fgbu10sPriceMT_1;

                $a8f2thbu05sPcsMT_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT_1 = $a8f2thbu05s_PcsMT_1 + $a8f2thbu05sPcsMT_1;

                $a8f2thbu05sPriceMT_1 = $a8f2thbu05sPcsMT_1 * $NumberMT_1;
                $a8f2thbu05s_PriceMT_1 = $a8f2thbu05s_PriceMT_1 + $a8f2thbu05sPriceMT_1;

                $a8f2debu10sPcsMT_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT_1 = $a8f2debu10s_PcsMT_1 + $a8f2debu10sPcsMT_1;

                $a8f2debu10sPriceMT_1 = $a8f2debu10sPcsMT_1 * $NumberMT_1;
                $a8f2debu10s_PriceMT_1 = $a8f2debu10s_PriceMT_1 + $a8f2debu10sPriceMT_1;

                $a8f2exbu11sPcsMT_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT_1 = $a8f2exbu11s_PcsMT_1 + $a8f2exbu11sPcsMT_1;

                $a8f2exbu11sPriceMT_1 = $a8f2exbu11sPcsMT_1 * $NumberMT_1;
                $a8f2exbu11s_PriceMT_1 = $a8f2exbu11s_PriceMT_1 + $a8f2exbu11sPriceMT_1;

                $a8f2twbu04sPcsMT_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT_1 = $a8f2twbu04s_PcsMT_1 + $a8f2twbu04sPcsMT_1;

                $a8f2twbu04sPriceMT_1 = $a8f2twbu04sPcsMT_1 * $NumberMT_1;
                $a8f2twbu04s_PriceMT_1 = $a8f2twbu04s_PriceMT_1 + $a8f2twbu04sPriceMT_1;

                $a8f2twbu07sPcsMT_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT_1 = $a8f2twbu07s_PcsMT_1 + $a8f2twbu07sPcsMT_1;

                $a8f2twbu07sPriceMT_1 = $a8f2twbu07sPcsMT_1 * $NumberMT_1;
                $a8f2twbu07s_PriceMT_1 = $a8f2twbu07s_PriceMT_1 + $a8f2twbu07sPriceMT_1;

                $a8f2cebu10sPcsMT_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT_1 = $a8f2cebu10s_PcsMT_1 + $a8f2cebu10sPcsMT_1;

                $a8f2cebu10sPriceMT_1 = $a8f2cebu10sPcsMT_1 * $NumberMT_1;
                $a8f2cebu10s_PriceMT_1 = $a8f2cebu10s_PriceMT_1 + $a8f2cebu10sPriceMT_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsMT_1 = $DC1_PcsMT_1 + $DC1PcsMT_1;

                $DC1PriceMT_1 = $DC1PcsMT_1 * $NumberMT_1;
                $DC1_PriceMT_1 = $DC1_PriceMT_1 + $DC1PriceMT_1;

                $DCPPcsMT_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsMT_1 = $DCP_PcsMT_1 + $DCPPcsMT_1;

                $DCPPriceMT_1 = $DCPPcsMT_1 * $NumberMT_1;
                $DCP_PriceMT_1 = $DCP_PriceMT_1 + $DCPPriceMT_1;

                $DCYPcsMT_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsMT_1 = $DCY_PcsMT_1 + $DCYPcsMT_1;

                $DCYPriceMT_1 = $DCYPcsMT_1 * $NumberMT_1;
                $DCY_PriceMT_1 = $DCY_PriceMT_1 + $DCYPriceMT_1;

                $DEXPcsMT_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsMT_1 = $DEX_PcsMT_1 + $DEXPcsMT_1;

                $DEXPriceMT_1 = $DEXPcsMT_1 * $NumberMT_1;
                $DEX_PriceMT_1 = $DEX_PriceMT_1 + $DEXPriceMT_1;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนแห" && $Code_1[0] === "MT" || $Code_1[0] === "SMT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberMT_2 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberMT_2 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT_2 = $rowitem->PcsAfter;
                $Pcs_AfterMT_2 = $Pcs_AfterMT_2 + $PCSAfterMT_2;

                $PriceAfterMT_2 = $rowitem->PriceAfter;
                $Price_AfterMT_2 = $Price_AfterMT_2 + $PriceAfterMT_2;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT_2 = $rowitem->Po_Quantity;
                $Po_PcsMT_2 = $Po_PcsMT_2 + $PoPcsMT_2;

                $PoPriceMT_2 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceMT_2 = $Po_PriceMT_2 + $PoPriceMT_2;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT_2 = $rowitem->Neg_Quantity;
                $Neg_PcsMT_2 = $Neg_PcsMT_2 + $NegPcsMT_2;


                $NegPriceMT_2 = $NumberMT_2 * $rowitem->Neg_Quantity;
                $Neg_PriceMT_2 = $Neg_PriceMT_2 + $NegPriceMT_2;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT_2 = $PCSAfterMT_2 + $PoPcsMT_2 + $NegPcsMT_2;
                $BackChange_PcsMT_2 = $BackChange_PcsMT_2 + $BackChangePcsMT_2;

                $BackChangePriceMT_2 = $PriceAfterMT_2 + $PoPriceMT_2 + $NegPriceMT_2;
                $BackChange_PriceMT_2 = $BackChange_PriceMT_2 + $BackChangePriceMT_2;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT_2 = $rowitem->purchase_Quantity;
                $Purchase_PcsMT_2 = $Purchase_PcsMT_2 + $PurchasePcsMT_2;

                $PurchasePriceMT_2 = $rowitem->purchase_Cost;
                $Purchase_PriceMT_2 = $Purchase_PriceMT_2 + $PurchasePriceMT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT_2 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT_2 = $ReciveTranfer_PcsMT_2 + $ReciveTranferPcsMT_2;

                $ReciveTranferPriceMT_2 = $ReciveTranferPcsMT_2 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceMT_2 = $ReciveTranfer_PriceMT_2 + $ReciveTranferPriceMT_2;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT_2 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSMT_2 = $ReturnItem_PCSMT_2 + $ReturnItemQuantityMT_2;

                $ReturnItemPriceMT_2 = $ReturnItemQuantityMT_2 * $NumberMT_2;
                $ReturnItem_PriceMT_2 = $ReturnItem_PriceMT_2 + $ReturnItemPriceMT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT_2 = $rowitem->purchase_Quantity + $ReciveTranferPcsMT_2 + $ReturnItemQuantityMT_2;
                $AllIn_PcsMT_2 = $AllIn_PcsMT_2 + $AllInPcsMT_2;

                $AllInPriceMT_2 = $PurchasePriceMT_2 + $ReciveTranferPriceMT_2 + $ReturnItemPriceMT_2;
                $AllIn_PriceMT_2 = $AllIn_PriceMT_2 + $AllInPriceMT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT_2 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsMT_2 = $SendSale_PcsMT_2 + $SendSalePcsMT_2;

                if ($BackChangePcsMT_2 > 0 && $AllInPcsMT_2 > 0) {
                    $SendSalePriceMT_2 = (($AllInPriceMT_2 + $BackChangePriceMT_2) / ($AllInPcsMT_2 + $BackChangePcsMT_2)) * $SendSalePcsMT_2;
                    $SendSale_PriceMT_2 = $SendSale_PriceMT_2 + $SendSalePriceMT_2;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT_2 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT_2 = $ReciveTranOut_PcsMT_2 + $ReciveTranOutPcsMT_2;

                if ($AllInPcsMT_2 > 0 && $BackChangePcsMT_2 > 0) {
                    $ReciveTranOutPriceMT_2 = (($AllInPriceMT_2 + $BackChangePriceMT_2) / ($AllInPcsMT_2 + $BackChangePcsMT_2)) * $ReciveTranOutPcsMT_2;
                    $ReciveTranOut_PriceMT_2 = $ReciveTranOut_PriceMT_2 + $ReciveTranOutPriceMT_2;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT_2 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsMT_2 = $ReturnStore_PcsMT_2 + $ReturnStorePcsMT_2;

                if ($AllInPcsMT_2 > 0 && $BackChangePcsMT_2 > 0) {
                    $ReturnStorePriceMT_2 = (($AllInPriceMT_2 + $BackChangePriceMT_2) / ($AllInPcsMT_2 + $BackChangePcsMT_2)) * $ReturnStorePcsMT_2;
                    $ReturnStore_PriceMT_2 = $ReturnStore_PriceMT_2 + $ReturnStorePriceMT_2;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT_2 = $ReturnStorePcsMT_2 + $ReciveTranOutPcsMT_2 + $SendSalePcsMT_2;
                $AllOut_PcsMT_2 = $AllOut_PcsMT_2 + $AllOutPcsMT_2;

                $AllOutPriceMT_2 = $SendSale_PriceMT_2 + $ReciveTranOut_PriceMT_2 + $ReturnStore_PriceMT_2;
                $AllOut_PriceMT_2 = $AllOut_PriceMT_2 + $AllOutPriceMT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT_2 = $BackChangePcsMT_2 + $AllInPcsMT_2 + $AllOutPcsMT_2;
                $Calculate_PcsMT_2 = $Calculate_PcsMT_2 + $CalculatePcsMT_2;

                $CalculatePriceMT_2 = $BackChangePriceMT_2 + $AllInPriceMT_2 + $AllOutPriceMT_2;
                $Calculate_PriceMT_2 = $Calculate_PriceMT_2 + $CalculatePriceMT_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT_2 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsMT_2 = $NewCalculate_PcsMT_2 + $NewCalculatePcsMT_2;

                $NewCalculatePriceMT_2 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceMT_2 = $NewCalculate_PriceMT_2 + $NewCalculatePriceMT_2;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT_2 = $NewCalculatePcsMT_2 - $CalculatePcsMT_2;
                $Diff_PcsMT_2 = $Diff_PcsMT_2 + $DiffPcsMT_2;

                $DiffPriceMT_2 = $NewCalculatePriceMT_2 - $CalculatePriceMT_2;
                $Diff_PriceMT_2 = $Diff_PriceMT_2 + $DiffPriceMT_2;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT_2 = $CalculatePcsMT_2;
                $NewTotal_PcsMT_2 = $NewTotal_PcsMT_2 + $CalculatePcsMT_2;

                $NewTotalPriceMT_2 = $NewTotalPcsMT_2 * $rowitem->PriceAvg;
                $NewTotal_PriceMT_2 = $NewTotal_PriceMT_2 + $NewTotalPriceMT_2;

                $NewTotalDiffNavMT_2 = $NewTotalPriceMT_2 - $NewCalculatePriceMT_2;
                $NewTotalDiff_NavMT_2 = $NewTotalDiff_NavMT_2 + $NewTotalDiffNavMT_2;

                $NewTotalDiffCalMT_2 = $NewTotalPriceMT_2 - $CalculatePriceMT_2;
                $NewTotalDiff_CalMT_2 = $NewTotalDiff_CalMT_2 + $NewTotalDiffCalMT_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT_2 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT_2 = $a7f1fgbu02s_PcsMT_2 + $a7f1fgbu02sPcsMT_2;

                $a7f1fgbu02sPriceMT_2 = $a7f1fgbu02sPcsMT_2 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceMT_2 = $a7f1fgbu02s_PriceMT_2 + $a7f1fgbu02sPriceMT_2;

                $a7f2fgbu10sPcsMT_2 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT_2 = $a7f2fgbu10s_PcsMT_2 + $a7f2fgbu10sPcsMT_2;

                $a7f2fgbu10sPriceMT_2 = $a7f2fgbu10sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceMT_2 = $a7f2fgbu10s_PriceMT_2 + $a7f2fgbu10sPriceMT_2;

                $a7f2thbu05sPcsMT_2 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT_2 = $a7f2thbu05s_PcsMT_2 + $a7f2thbu05sPcsMT_2;

                $a7f2thbu05sPriceMT_2 = $a7f2thbu05sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceMT_2 = $a7f2thbu05s_PriceMT_2 + $a7f2thbu05sPriceMT_2;

                $a7f2debu10sPcsMT_2 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT_2 = $a7f2debu10s_PcsMT_2 + $a7f2debu10sPcsMT_2;

                $a7f2debu10sPriceMT_2 = $a7f2debu10sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceMT_2 = $a7f2debu10s_PriceMT_2 + $a7f2debu10sPriceMT_2;

                $a7f2exbu11sPcsMT_2 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT_2 = $a7f2exbu11s_PcsMT_2 + $a7f2exbu11sPcsMT_2;

                $a7f2exbu11sPriceMT_2 = $a7f2exbu11sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceMT_2 = $a7f2exbu11s_PriceMT_2 + $a7f2exbu11sPriceMT_2;

                $a7f2twbu04sPcsMT_2 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT_2 = $a7f2twbu04s_PcsMT_2 + $a7f2twbu04sPcsMT_2;

                $a7f2twbu04sPriceMT_2 = $a7f2twbu04sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceMT_2 = $a7f2twbu04s_PriceMT_2 + $a7f2twbu04sPriceMT_2;

                $a7f2twbu07sPcsMT_2 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT_2 = $a7f2twbu07s_PcsMT_2 + $a7f2twbu07sPcsMT_2;

                $a7f2twbu07sPriceMT_2 = $a7f2twbu07sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceMT_2 = $a7f2twbu07s_PriceMT_2 + $a7f2twbu07sPriceMT_2;

                $a7f2cebu10sPcsMT_2 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT_2 = $a7f2cebu10s_PcsMT_2 + $a7f2cebu10sPcsMT_2;

                $a7f2cebu10sPriceMT_2 = $a7f2cebu10sPcsMT_2 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceMT_2 = $a7f2cebu10s_PriceMT_2 + $a7f2cebu10sPriceMT_2;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT_2 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT_2 = $a8f1fgbu02s_PcsMT_2 + $a8f1fgbu02sPcsMT_2;

                $a8f1fgbu02sPriceMT_2 = $a8f1fgbu02sPcsMT_2 * $NumberMT_2;
                $a8f1fgbu02s_PriceMT_2 = $a8f1fgbu02s_PriceMT_2 + $a8f1fgbu02sPriceMT_2;

                $a8f2fgbu10sPcsMT_2 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT_2 = $a8f2fgbu10s_PcsMT_2 + $a8f2fgbu10sPcsMT_2;

                $a8f2fgbu10sPriceMT_2 = $a8f2fgbu10sPcsMT_2 * $NumberMT_2;
                $a8f2fgbu10s_PriceMT_2 = $a8f2fgbu10s_PriceMT_2 + $a8f2fgbu10sPriceMT_2;

                $a8f2thbu05sPcsMT_2 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT_2 = $a8f2thbu05s_PcsMT_2 + $a8f2thbu05sPcsMT_2;

                $a8f2thbu05sPriceMT_2 = $a8f2thbu05sPcsMT_2 * $NumberMT_2;
                $a8f2thbu05s_PriceMT_2 = $a8f2thbu05s_PriceMT_2 + $a8f2thbu05sPriceMT_2;

                $a8f2debu10sPcsMT_2 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT_2 = $a8f2debu10s_PcsMT_2 + $a8f2debu10sPcsMT_2;

                $a8f2debu10sPriceMT_2 = $a8f2debu10sPcsMT_2 * $NumberMT_2;
                $a8f2debu10s_PriceMT_2 = $a8f2debu10s_PriceMT_2 + $a8f2debu10sPriceMT_2;

                $a8f2exbu11sPcsMT_2 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT_2 = $a8f2exbu11s_PcsMT_2 + $a8f2exbu11sPcsMT_2;

                $a8f2exbu11sPriceMT_2 = $a8f2exbu11sPcsMT_2 * $NumberMT_2;
                $a8f2exbu11s_PriceMT_2 = $a8f2exbu11s_PriceMT_2 + $a8f2exbu11sPriceMT_2;

                $a8f2twbu04sPcsMT_2 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT_2 = $a8f2twbu04s_PcsMT_2 + $a8f2twbu04sPcsMT_2;

                $a8f2twbu04sPriceMT_2 = $a8f2twbu04sPcsMT_2 * $NumberMT_2;
                $a8f2twbu04s_PriceMT_2 = $a8f2twbu04s_PriceMT_2 + $a8f2twbu04sPriceMT_2;

                $a8f2twbu07sPcsMT_2 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT_2 = $a8f2twbu07s_PcsMT_2 + $a8f2twbu07sPcsMT_2;

                $a8f2twbu07sPriceMT_2 = $a8f2twbu07sPcsMT_2 * $NumberMT_2;
                $a8f2twbu07s_PriceMT_2 = $a8f2twbu07s_PriceMT_2 + $a8f2twbu07sPriceMT_2;

                $a8f2cebu10sPcsMT_2 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT_2 = $a8f2cebu10s_PcsMT_2 + $a8f2cebu10sPcsMT_2;

                $a8f2cebu10sPriceMT_2 = $a8f2cebu10sPcsMT_2 * $NumberMT_2;
                $a8f2cebu10s_PriceMT_2 = $a8f2cebu10s_PriceMT_2 + $a8f2cebu10sPriceMT_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT_2 = $rowitem->dc1_s_Quantity;
                $DC1_PcsMT_2 = $DC1_PcsMT_2 + $DC1PcsMT_2;

                $DC1PriceMT_2 = $DC1PcsMT_2 * $NumberMT_2;
                $DC1_PriceMT_2 = $DC1_PriceMT_2 + $DC1PriceMT_2;

                $DCPPcsMT_2 = $rowitem->dcp_s_Quantity;
                $DCP_PcsMT_2 = $DCP_PcsMT_2 + $DCPPcsMT_2;

                $DCPPriceMT_2 = $DCPPcsMT_2 * $NumberMT_2;
                $DCP_PriceMT_2 = $DCP_PriceMT_2 + $DCPPriceMT_2;

                $DCYPcsMT_2 = $rowitem->dcy_s_Quantity;
                $DCY_PcsMT_2 = $DCY_PcsMT_2 + $DCYPcsMT_2;

                $DCYPriceMT_2 = $DCYPcsMT_2 * $NumberMT_2;
                $DCY_PriceMT_2 = $DCY_PriceMT_2 + $DCYPriceMT_2;

                $DEXPcsMT_2 = $rowitem->dex_s_Quantity;
                $DEX_PcsMT_2 = $DEX_PcsMT_2 + $DEXPcsMT_2;

                $DEXPriceMT_2 = $DEXPcsMT_2 * $NumberMT_2;
                $DEX_PriceMT_2 = $DEX_PriceMT_2 + $DEXPriceMT_2;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนยอสำเร็จรูป" && $Code_1[0] === "MT" || $Code_1[0] === "SMT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberMT_3 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberMT_3 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT_3 = $rowitem->PcsAfter;
                $Pcs_AfterMT_3 = $Pcs_AfterMT_3 + $PCSAfterMT_3;

                $PriceAfterMT_3 = $rowitem->PriceAfter;
                $Price_AfterMT_3 = $Price_AfterMT_3 + $PriceAfterMT_3;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT_3 = $rowitem->Po_Quantity;
                $Po_PcsMT_3 = $Po_PcsMT_3 + $PoPcsMT_3;

                $PoPriceMT_3 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceMT_3 = $Po_PriceMT_3 + $PoPriceMT_3;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT_3 = $rowitem->Neg_Quantity;
                $Neg_PcsMT_3 = $Neg_PcsMT_3 + $NegPcsMT_3;


                $NegPriceMT_3 = $NumberMT_3 * $rowitem->Neg_Quantity;
                $Neg_PriceMT_3 = $Neg_PriceMT_3 + $NegPriceMT_3;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT_3 = $PCSAfterMT_3 + $PoPcsMT_3 + $NegPcsMT_3;
                $BackChange_PcsMT_3 = $BackChange_PcsMT_3 + $BackChangePcsMT_3;

                $BackChangePriceMT_3 = $PriceAfterMT_3 + $PoPriceMT_3 + $NegPriceMT_3;
                $BackChange_PriceMT_3 = $BackChange_PriceMT_3 + $BackChangePriceMT_3;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT_3 = $rowitem->purchase_Quantity;
                $Purchase_PcsMT_3 = $Purchase_PcsMT_3 + $PurchasePcsMT_3;

                $PurchasePriceMT_3 = $rowitem->purchase_Cost;
                $Purchase_PriceMT_3 = $Purchase_PriceMT_3 + $PurchasePriceMT_3;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT_3 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT_3 = $ReciveTranfer_PcsMT_3 + $ReciveTranferPcsMT_3;

                $ReciveTranferPriceMT_3 = $ReciveTranferPcsMT_3 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceMT_3 = $ReciveTranfer_PriceMT_3 + $ReciveTranferPriceMT_3;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT_3 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSMT_3 = $ReturnItem_PCSMT_3 + $ReturnItemQuantityMT_3;

                $ReturnItemPriceMT_3 = $ReturnItemQuantityMT_3 * $NumberMT_3;
                $ReturnItem_PriceMT_3 = $ReturnItem_PriceMT_3 + $ReturnItemPriceMT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT_3 = $rowitem->purchase_Quantity + $ReciveTranferPcsMT_3 + $ReturnItemQuantityMT_3;
                $AllIn_PcsMT_3 = $AllIn_PcsMT_3 + $AllInPcsMT_3;

                $AllInPriceMT_3 = $PurchasePriceMT_3 + $ReciveTranferPriceMT_3 + $ReturnItemPriceMT_3;
                $AllIn_PriceMT_3 = $AllIn_PriceMT_3 + $AllInPriceMT_3;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT_3 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsMT_3 = $SendSale_PcsMT_3 + $SendSalePcsMT_3;

                if ($BackChangePcsMT_3 > 0 && $AllInPcsMT_3 > 0) {
                    $SendSalePriceMT_3 = (($AllInPriceMT_3 + $BackChangePriceMT_3) / ($AllInPcsMT_3 + $BackChangePcsMT_3)) * $SendSalePcsMT_3;
                    $SendSale_PriceMT_3 = $SendSale_PriceMT_3 + $SendSalePriceMT_3;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT_3 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT_3 = $ReciveTranOut_PcsMT_3 + $ReciveTranOutPcsMT_3;

                if ($AllInPcsMT_3 > 0 && $BackChangePcsMT_3 > 0) {
                    $ReciveTranOutPriceMT_3 = (($AllInPriceMT_3 + $BackChangePriceMT_3) / ($AllInPcsMT_3 + $BackChangePcsMT_3)) * $ReciveTranOutPcsMT_3;
                    $ReciveTranOut_PriceMT_3 = $ReciveTranOut_PriceMT_3 + $ReciveTranOutPriceMT_3;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT_3 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsMT_3 = $ReturnStore_PcsMT_3 + $ReturnStorePcsMT_3;

                if ($AllInPcsMT_3 > 0 && $BackChangePcsMT_3 > 0) {
                    $ReturnStorePriceMT_3 = (($AllInPriceMT_3 + $BackChangePriceMT_3) / ($AllInPcsMT_3 + $BackChangePcsMT_3)) * $ReturnStorePcsMT_3;
                    $ReturnStore_PriceMT_3 = $ReturnStore_PriceMT_3 + $ReturnStorePriceMT_3;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT_3 = $ReturnStorePcsMT_3 + $ReciveTranOutPcsMT_3 + $SendSalePcsMT_3;
                $AllOut_PcsMT_3 = $AllOut_PcsMT_3 + $AllOutPcsMT_3;

                $AllOutPriceMT_3 = $SendSale_PriceMT_3 + $ReciveTranOut_PriceMT_3 + $ReturnStore_PriceMT_3;
                $AllOut_PriceMT_3 = $AllOut_PriceMT_3 + $AllOutPriceMT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT_3 = $BackChangePcsMT_3 + $AllInPcsMT_3 + $AllOutPcsMT_3;
                $Calculate_PcsMT_3 = $Calculate_PcsMT_3 + $CalculatePcsMT_3;

                $CalculatePriceMT_3 = $BackChangePriceMT_3 + $AllInPriceMT_3 + $AllOutPriceMT_3;
                $Calculate_PriceMT_3 = $Calculate_PriceMT_3 + $CalculatePriceMT_3;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT_3 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsMT_3 = $NewCalculate_PcsMT_3 + $NewCalculatePcsMT_3;

                $NewCalculatePriceMT_3 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceMT_3 = $NewCalculate_PriceMT_3 + $NewCalculatePriceMT_3;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT_3 = $NewCalculatePcsMT_3 - $CalculatePcsMT_3;
                $Diff_PcsMT_3 = $Diff_PcsMT_3 + $DiffPcsMT_3;

                $DiffPriceMT_3 = $NewCalculatePriceMT_3 - $CalculatePriceMT_3;
                $Diff_PriceMT_3 = $Diff_PriceMT_3 + $DiffPriceMT_3;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT_3 = $CalculatePcsMT_3;
                $NewTotal_PcsMT_3 = $NewTotal_PcsMT_3 + $CalculatePcsMT_3;

                $NewTotalPriceMT_3 = $NewTotalPcsMT_3 * $rowitem->PriceAvg;
                $NewTotal_PriceMT_3 = $NewTotal_PriceMT_3 + $NewTotalPriceMT_3;

                $NewTotalDiffNavMT_3 = $NewTotalPriceMT_3 - $NewCalculatePriceMT_3;
                $NewTotalDiff_NavMT_3 = $NewTotalDiff_NavMT_3 + $NewTotalDiffNavMT_3;

                $NewTotalDiffCalMT_3 = $NewTotalPriceMT_3 - $CalculatePriceMT_3;
                $NewTotalDiff_CalMT_3 = $NewTotalDiff_CalMT_3 + $NewTotalDiffCalMT_3;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT_3 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT_3 = $a7f1fgbu02s_PcsMT_3 + $a7f1fgbu02sPcsMT_3;

                $a7f1fgbu02sPriceMT_3 = $a7f1fgbu02sPcsMT_3 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceMT_3 = $a7f1fgbu02s_PriceMT_3 + $a7f1fgbu02sPriceMT_3;

                $a7f2fgbu10sPcsMT_3 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT_3 = $a7f2fgbu10s_PcsMT_3 + $a7f2fgbu10sPcsMT_3;

                $a7f2fgbu10sPriceMT_3 = $a7f2fgbu10sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceMT_3 = $a7f2fgbu10s_PriceMT_3 + $a7f2fgbu10sPriceMT_3;

                $a7f2thbu05sPcsMT_3 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT_3 = $a7f2thbu05s_PcsMT_3 + $a7f2thbu05sPcsMT_3;

                $a7f2thbu05sPriceMT_3 = $a7f2thbu05sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceMT_3 = $a7f2thbu05s_PriceMT_3 + $a7f2thbu05sPriceMT_3;

                $a7f2debu10sPcsMT_3 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT_3 = $a7f2debu10s_PcsMT_3 + $a7f2debu10sPcsMT_3;

                $a7f2debu10sPriceMT_3 = $a7f2debu10sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceMT_3 = $a7f2debu10s_PriceMT_3 + $a7f2debu10sPriceMT_3;

                $a7f2exbu11sPcsMT_3 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT_3 = $a7f2exbu11s_PcsMT_3 + $a7f2exbu11sPcsMT_3;

                $a7f2exbu11sPriceMT_3 = $a7f2exbu11sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceMT_3 = $a7f2exbu11s_PriceMT_3 + $a7f2exbu11sPriceMT_3;

                $a7f2twbu04sPcsMT_3 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT_3 = $a7f2twbu04s_PcsMT_3 + $a7f2twbu04sPcsMT_3;

                $a7f2twbu04sPriceMT_3 = $a7f2twbu04sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceMT_3 = $a7f2twbu04s_PriceMT_3 + $a7f2twbu04sPriceMT_3;

                $a7f2twbu07sPcsMT_3 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT_3 = $a7f2twbu07s_PcsMT_3 + $a7f2twbu07sPcsMT_3;

                $a7f2twbu07sPriceMT_3 = $a7f2twbu07sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceMT_3 = $a7f2twbu07s_PriceMT_3 + $a7f2twbu07sPriceMT_3;

                $a7f2cebu10sPcsMT_3 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT_3 = $a7f2cebu10s_PcsMT_3 + $a7f2cebu10sPcsMT_3;

                $a7f2cebu10sPriceMT_3 = $a7f2cebu10sPcsMT_3 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceMT_3 = $a7f2cebu10s_PriceMT_3 + $a7f2cebu10sPriceMT_3;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT_3 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT_3 = $a8f1fgbu02s_PcsMT_3 + $a8f1fgbu02sPcsMT_3;

                $a8f1fgbu02sPriceMT_3 = $a8f1fgbu02sPcsMT_3 * $NumberMT_3;
                $a8f1fgbu02s_PriceMT_3 = $a8f1fgbu02s_PriceMT_3 + $a8f1fgbu02sPriceMT_3;

                $a8f2fgbu10sPcsMT_3 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT_3 = $a8f2fgbu10s_PcsMT_3 + $a8f2fgbu10sPcsMT_3;

                $a8f2fgbu10sPriceMT_3 = $a8f2fgbu10sPcsMT_3 * $NumberMT_3;
                $a8f2fgbu10s_PriceMT_3 = $a8f2fgbu10s_PriceMT_3 + $a8f2fgbu10sPriceMT_3;

                $a8f2thbu05sPcsMT_3 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT_3 = $a8f2thbu05s_PcsMT_3 + $a8f2thbu05sPcsMT_3;

                $a8f2thbu05sPriceMT_3 = $a8f2thbu05sPcsMT_3 * $NumberMT_3;
                $a8f2thbu05s_PriceMT_3 = $a8f2thbu05s_PriceMT_3 + $a8f2thbu05sPriceMT_3;

                $a8f2debu10sPcsMT_3 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT_3 = $a8f2debu10s_PcsMT_3 + $a8f2debu10sPcsMT_3;

                $a8f2debu10sPriceMT_3 = $a8f2debu10sPcsMT_3 * $NumberMT_3;
                $a8f2debu10s_PriceMT_3 = $a8f2debu10s_PriceMT_3 + $a8f2debu10sPriceMT_3;

                $a8f2exbu11sPcsMT_3 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT_3 = $a8f2exbu11s_PcsMT_3 + $a8f2exbu11sPcsMT_3;

                $a8f2exbu11sPriceMT_3 = $a8f2exbu11sPcsMT_3 * $NumberMT_3;
                $a8f2exbu11s_PriceMT_3 = $a8f2exbu11s_PriceMT_3 + $a8f2exbu11sPriceMT_3;

                $a8f2twbu04sPcsMT_3 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT_3 = $a8f2twbu04s_PcsMT_3 + $a8f2twbu04sPcsMT_3;

                $a8f2twbu04sPriceMT_3 = $a8f2twbu04sPcsMT_3 * $NumberMT_3;
                $a8f2twbu04s_PriceMT_3 = $a8f2twbu04s_PriceMT_3 + $a8f2twbu04sPriceMT_3;

                $a8f2twbu07sPcsMT_3 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT_3 = $a8f2twbu07s_PcsMT_3 + $a8f2twbu07sPcsMT_3;

                $a8f2twbu07sPriceMT_3 = $a8f2twbu07sPcsMT_3 * $NumberMT_3;
                $a8f2twbu07s_PriceMT_3 = $a8f2twbu07s_PriceMT_3 + $a8f2twbu07sPriceMT_3;

                $a8f2cebu10sPcsMT_3 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT_3 = $a8f2cebu10s_PcsMT_3 + $a8f2cebu10sPcsMT_3;

                $a8f2cebu10sPriceMT_3 = $a8f2cebu10sPcsMT_3 * $NumberMT_3;
                $a8f2cebu10s_PriceMT_3 = $a8f2cebu10s_PriceMT_3 + $a8f2cebu10sPriceMT_3;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT_3 = $rowitem->dc1_s_Quantity;
                $DC1_PcsMT_3 = $DC1_PcsMT_3 + $DC1PcsMT_3;

                $DC1PriceMT_3 = $DC1PcsMT_3 * $NumberMT_3;
                $DC1_PriceMT_3 = $DC1_PriceMT_3 + $DC1PriceMT_3;

                $DCPPcsMT_3 = $rowitem->dcp_s_Quantity;
                $DCP_PcsMT_3 = $DCP_PcsMT_3 + $DCPPcsMT_3;

                $DCPPriceMT_3 = $DCPPcsMT_3 * $NumberMT_3;
                $DCP_PriceMT_3 = $DCP_PriceMT_3 + $DCPPriceMT_3;

                $DCYPcsMT_3 = $rowitem->dcy_s_Quantity;
                $DCY_PcsMT_3 = $DCY_PcsMT_3 + $DCYPcsMT_3;

                $DCYPriceMT_3 = $DCYPcsMT_3 * $NumberMT_3;
                $DCY_PriceMT_3 = $DCY_PriceMT_3 + $DCYPriceMT_3;

                $DEXPcsMT_3 = $rowitem->dex_s_Quantity;
                $DEX_PcsMT_3 = $DEX_PcsMT_3 + $DEXPcsMT_3;

                $DEXPriceMT_3 = $DEXPcsMT_3 * $NumberMT_3;
                $DEX_PriceMT_3 = $DEX_PriceMT_3 + $DEXPriceMT_3;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนสามชั้นสำเร็จรูป" && $Code_1[0] === "MT" || $Code_1[0] === "SMT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberMT_4 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberMT_4 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT_4 = $rowitem->PcsAfter;
                $Pcs_AfterMT_4 = $Pcs_AfterMT_4 + $PCSAfterMT_4;

                $PriceAfterMT_4 = $rowitem->PriceAfter;
                $Price_AfterMT_4 = $Price_AfterMT_4 + $PriceAfterMT_4;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT_4 = $rowitem->Po_Quantity;
                $Po_PcsMT_4 = $Po_PcsMT_4 + $PoPcsMT_4;

                $PoPriceMT_4 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceMT_4 = $Po_PriceMT_4 + $PoPriceMT_4;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT_4 = $rowitem->Neg_Quantity;
                $Neg_PcsMT_4 = $Neg_PcsMT_4 + $NegPcsMT_4;


                $NegPriceMT_4 = $NumberMT_4 * $rowitem->Neg_Quantity;
                $Neg_PriceMT_4 = $Neg_PriceMT_4 + $NegPriceMT_4;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT_4 = $PCSAfterMT_4 + $PoPcsMT_4 + $NegPcsMT_4;
                $BackChange_PcsMT_4 = $BackChange_PcsMT_4 + $BackChangePcsMT_4;

                $BackChangePriceMT_4 = $PriceAfterMT_4 + $PoPriceMT_4 + $NegPriceMT_4;
                $BackChange_PriceMT_4 = $BackChange_PriceMT_4 + $BackChangePriceMT_4;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT_4 = $rowitem->purchase_Quantity;
                $Purchase_PcsMT_4 = $Purchase_PcsMT_4 + $PurchasePcsMT_4;

                $PurchasePriceMT_4 = $rowitem->purchase_Cost;
                $Purchase_PriceMT_4 = $Purchase_PriceMT_4 + $PurchasePriceMT_4;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT_4 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT_4 = $ReciveTranfer_PcsMT_4 + $ReciveTranferPcsMT_4;

                $ReciveTranferPriceMT_4 = $ReciveTranferPcsMT_4 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceMT_4 = $ReciveTranfer_PriceMT_4 + $ReciveTranferPriceMT_4;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT_4 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSMT_4 = $ReturnItem_PCSMT_4 + $ReturnItemQuantityMT_4;

                $ReturnItemPriceMT_4 = $ReturnItemQuantityMT_4 * $NumberMT_4;
                $ReturnItem_PriceMT_4 = $ReturnItem_PriceMT_4 + $ReturnItemPriceMT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT_4 = $rowitem->purchase_Quantity + $ReciveTranferPcsMT_4 + $ReturnItemQuantityMT_4;
                $AllIn_PcsMT_4 = $AllIn_PcsMT_4 + $AllInPcsMT_4;

                $AllInPriceMT_4 = $PurchasePriceMT_4 + $ReciveTranferPriceMT_4 + $ReturnItemPriceMT_4;
                $AllIn_PriceMT_4 = $AllIn_PriceMT_4 + $AllInPriceMT_4;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT_4 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsMT_4 = $SendSale_PcsMT_4 + $SendSalePcsMT_4;

                if ($BackChangePcsMT_4 > 0 && $AllInPcsMT_4 > 0) {
                    $SendSalePriceMT_4 = (($AllInPriceMT_4 + $BackChangePriceMT_4) / ($AllInPcsMT_4 + $BackChangePcsMT_4)) * $SendSalePcsMT_4;
                    $SendSale_PriceMT_4 = $SendSale_PriceMT_4 + $SendSalePriceMT_4;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT_4 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT_4 = $ReciveTranOut_PcsMT_4 + $ReciveTranOutPcsMT_4;

                if ($AllInPcsMT_4 > 0 && $BackChangePcsMT_4 > 0) {
                    $ReciveTranOutPriceMT_4 = (($AllInPriceMT_4 + $BackChangePriceMT_4) / ($AllInPcsMT_4 + $BackChangePcsMT_4)) * $ReciveTranOutPcsMT_4;
                    $ReciveTranOut_PriceMT_4 = $ReciveTranOut_PriceMT_4 + $ReciveTranOutPriceMT_4;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT_4 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsMT_4 = $ReturnStore_PcsMT_4 + $ReturnStorePcsMT_4;

                if ($AllInPcsMT_4 > 0 && $BackChangePcsMT_4 > 0) {
                    $ReturnStorePriceMT_4 = (($AllInPriceMT_4 + $BackChangePriceMT_4) / ($AllInPcsMT_4 + $BackChangePcsMT_4)) * $ReturnStorePcsMT_4;
                    $ReturnStore_PriceMT_4 = $ReturnStore_PriceMT_4 + $ReturnStorePriceMT_4;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT_4 = $ReturnStorePcsMT_4 + $ReciveTranOutPcsMT_4 + $SendSalePcsMT_4;
                $AllOut_PcsMT_4 = $AllOut_PcsMT_4 + $AllOutPcsMT_4;

                $AllOutPriceMT_4 = $SendSale_PriceMT_4 + $ReciveTranOut_PriceMT_4 + $ReturnStore_PriceMT_4;
                $AllOut_PriceMT_4 = $AllOut_PriceMT_4 + $AllOutPriceMT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT_4 = $BackChangePcsMT_4 + $AllInPcsMT_4 + $AllOutPcsMT_4;
                $Calculate_PcsMT_4 = $Calculate_PcsMT_4 + $CalculatePcsMT_4;

                $CalculatePriceMT_4 = $BackChangePriceMT_4 + $AllInPriceMT_4 + $AllOutPriceMT_4;
                $Calculate_PriceMT_4 = $Calculate_PriceMT_4 + $CalculatePriceMT_4;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT_4 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsMT_4 = $NewCalculate_PcsMT_4 + $NewCalculatePcsMT_4;

                $NewCalculatePriceMT_4 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceMT_4 = $NewCalculate_PriceMT_4 + $NewCalculatePriceMT_4;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT_4 = $NewCalculatePcsMT_4 - $CalculatePcsMT_4;
                $Diff_PcsMT_4 = $Diff_PcsMT_4 + $DiffPcsMT_4;

                $DiffPriceMT_4 = $NewCalculatePriceMT_4 - $CalculatePriceMT_4;
                $Diff_PriceMT_4 = $Diff_PriceMT_4 + $DiffPriceMT_4;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT_4 = $CalculatePcsMT_4;
                $NewTotal_PcsMT_4 = $NewTotal_PcsMT_4 + $CalculatePcsMT_4;

                $NewTotalPriceMT_4 = $NewTotalPcsMT_4 * $rowitem->PriceAvg;
                $NewTotal_PriceMT_4 = $NewTotal_PriceMT_4 + $NewTotalPriceMT_4;

                $NewTotalDiffNavMT_4 = $NewTotalPriceMT_4 - $NewCalculatePriceMT_4;
                $NewTotalDiff_NavMT_4 = $NewTotalDiff_NavMT_4 + $NewTotalDiffNavMT_4;

                $NewTotalDiffCalMT_4 = $NewTotalPriceMT_4 - $CalculatePriceMT_4;
                $NewTotalDiff_CalMT_4 = $NewTotalDiff_CalMT_4 + $NewTotalDiffCalMT_4;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT_4 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT_4 = $a7f1fgbu02s_PcsMT_4 + $a7f1fgbu02sPcsMT_4;

                $a7f1fgbu02sPriceMT_4 = $a7f1fgbu02sPcsMT_4 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceMT_4 = $a7f1fgbu02s_PriceMT_4 + $a7f1fgbu02sPriceMT_4;

                $a7f2fgbu10sPcsMT_4 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT_4 = $a7f2fgbu10s_PcsMT_4 + $a7f2fgbu10sPcsMT_4;

                $a7f2fgbu10sPriceMT_4 = $a7f2fgbu10sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceMT_4 = $a7f2fgbu10s_PriceMT_4 + $a7f2fgbu10sPriceMT_4;

                $a7f2thbu05sPcsMT_4 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT_4 = $a7f2thbu05s_PcsMT_4 + $a7f2thbu05sPcsMT_4;

                $a7f2thbu05sPriceMT_4 = $a7f2thbu05sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceMT_4 = $a7f2thbu05s_PriceMT_4 + $a7f2thbu05sPriceMT_4;

                $a7f2debu10sPcsMT_4 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT_4 = $a7f2debu10s_PcsMT_4 + $a7f2debu10sPcsMT_4;

                $a7f2debu10sPriceMT_4 = $a7f2debu10sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceMT_4 = $a7f2debu10s_PriceMT_4 + $a7f2debu10sPriceMT_4;

                $a7f2exbu11sPcsMT_4 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT_4 = $a7f2exbu11s_PcsMT_4 + $a7f2exbu11sPcsMT_4;

                $a7f2exbu11sPriceMT_4 = $a7f2exbu11sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceMT_4 = $a7f2exbu11s_PriceMT_4 + $a7f2exbu11sPriceMT_4;

                $a7f2twbu04sPcsMT_4 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT_4 = $a7f2twbu04s_PcsMT_4 + $a7f2twbu04sPcsMT_4;

                $a7f2twbu04sPriceMT_4 = $a7f2twbu04sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceMT_4 = $a7f2twbu04s_PriceMT_4 + $a7f2twbu04sPriceMT_4;

                $a7f2twbu07sPcsMT_4 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT_4 = $a7f2twbu07s_PcsMT_4 + $a7f2twbu07sPcsMT_4;

                $a7f2twbu07sPriceMT_4 = $a7f2twbu07sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceMT_4 = $a7f2twbu07s_PriceMT_4 + $a7f2twbu07sPriceMT_4;

                $a7f2cebu10sPcsMT_4 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT_4 = $a7f2cebu10s_PcsMT_4 + $a7f2cebu10sPcsMT_4;

                $a7f2cebu10sPriceMT_4 = $a7f2cebu10sPcsMT_4 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceMT_4 = $a7f2cebu10s_PriceMT_4 + $a7f2cebu10sPriceMT_4;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT_4 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT_4 = $a8f1fgbu02s_PcsMT_4 + $a8f1fgbu02sPcsMT_4;

                $a8f1fgbu02sPriceMT_4 = $a8f1fgbu02sPcsMT_4 * $NumberMT_4;
                $a8f1fgbu02s_PriceMT_4 = $a8f1fgbu02s_PriceMT_4 + $a8f1fgbu02sPriceMT_4;

                $a8f2fgbu10sPcsMT_4 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT_4 = $a8f2fgbu10s_PcsMT_4 + $a8f2fgbu10sPcsMT_4;

                $a8f2fgbu10sPriceMT_4 = $a8f2fgbu10sPcsMT_4 * $NumberMT_4;
                $a8f2fgbu10s_PriceMT_4 = $a8f2fgbu10s_PriceMT_4 + $a8f2fgbu10sPriceMT_4;

                $a8f2thbu05sPcsMT_4 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT_4 = $a8f2thbu05s_PcsMT_4 + $a8f2thbu05sPcsMT_4;

                $a8f2thbu05sPriceMT_4 = $a8f2thbu05sPcsMT_4 * $NumberMT_4;
                $a8f2thbu05s_PriceMT_4 = $a8f2thbu05s_PriceMT_4 + $a8f2thbu05sPriceMT_4;

                $a8f2debu10sPcsMT_4 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT_4 = $a8f2debu10s_PcsMT_4 + $a8f2debu10sPcsMT_4;

                $a8f2debu10sPriceMT_4 = $a8f2debu10sPcsMT_4 * $NumberMT_4;
                $a8f2debu10s_PriceMT_4 = $a8f2debu10s_PriceMT_4 + $a8f2debu10sPriceMT_4;

                $a8f2exbu11sPcsMT_4 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT_4 = $a8f2exbu11s_PcsMT_4 + $a8f2exbu11sPcsMT_4;

                $a8f2exbu11sPriceMT_4 = $a8f2exbu11sPcsMT_4 * $NumberMT_4;
                $a8f2exbu11s_PriceMT_4 = $a8f2exbu11s_PriceMT_4 + $a8f2exbu11sPriceMT_4;

                $a8f2twbu04sPcsMT_4 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT_4 = $a8f2twbu04s_PcsMT_4 + $a8f2twbu04sPcsMT_4;

                $a8f2twbu04sPriceMT_4 = $a8f2twbu04sPcsMT_4 * $NumberMT_4;
                $a8f2twbu04s_PriceMT_4 = $a8f2twbu04s_PriceMT_4 + $a8f2twbu04sPriceMT_4;

                $a8f2twbu07sPcsMT_4 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT_4 = $a8f2twbu07s_PcsMT_4 + $a8f2twbu07sPcsMT_4;

                $a8f2twbu07sPriceMT_4 = $a8f2twbu07sPcsMT_4 * $NumberMT_4;
                $a8f2twbu07s_PriceMT_4 = $a8f2twbu07s_PriceMT_4 + $a8f2twbu07sPriceMT_4;

                $a8f2cebu10sPcsMT_4 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT_4 = $a8f2cebu10s_PcsMT_4 + $a8f2cebu10sPcsMT_4;

                $a8f2cebu10sPriceMT_4 = $a8f2cebu10sPcsMT_4 * $NumberMT_4;
                $a8f2cebu10s_PriceMT_4 = $a8f2cebu10s_PriceMT_4 + $a8f2cebu10sPriceMT_4;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT_4 = $rowitem->dc1_s_Quantity;
                $DC1_PcsMT_4 = $DC1_PcsMT_4 + $DC1PcsMT_4;

                $DC1PriceMT_4 = $DC1PcsMT_4 * $NumberMT_4;
                $DC1_PriceMT_4 = $DC1_PriceMT_4 + $DC1PriceMT_4;

                $DCPPcsMT_4 = $rowitem->dcp_s_Quantity;
                $DCP_PcsMT_4 = $DCP_PcsMT_4 + $DCPPcsMT_4;

                $DCPPriceMT_4 = $DCPPcsMT_4 * $NumberMT_4;
                $DCP_PriceMT_4 = $DCP_PriceMT_4 + $DCPPriceMT_4;

                $DCYPcsMT_4 = $rowitem->dcy_s_Quantity;
                $DCY_PcsMT_4 = $DCY_PcsMT_4 + $DCYPcsMT_4;

                $DCYPriceMT_4 = $DCYPcsMT_4 * $NumberMT_4;
                $DCY_PriceMT_4 = $DCY_PriceMT_4 + $DCYPriceMT_4;

                $DEXPcsMT_4 = $rowitem->dex_s_Quantity;
                $DEX_PcsMT_4 = $DEX_PcsMT_4 + $DEXPcsMT_4;

                $DEXPriceMT_4 = $DEXPcsMT_4 * $NumberMT_4;
                $DEX_PriceMT_4 = $DEX_PriceMT_4 + $DEXPriceMT_4;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ข่ายนกสำเร็จรูป" && $Code_1[0] === "MT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberMT_5 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberMT_5 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT_5 = $rowitem->PcsAfter;
                $Pcs_AfterMT_5 = $Pcs_AfterMT_5 + $PCSAfterMT_5;

                $PriceAfterMT_5 = $rowitem->PriceAfter;
                $Price_AfterMT_5 = $Price_AfterMT_5 + $PriceAfterMT_5;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT_5 = $rowitem->Po_Quantity;
                $Po_PcsMT_5 = $Po_PcsMT_5 + $PoPcsMT_5;

                $PoPriceMT_5 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceMT_5 = $Po_PriceMT_5 + $PoPriceMT_5;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT_5 = $rowitem->Neg_Quantity;
                $Neg_PcsMT_5 = $Neg_PcsMT_5 + $NegPcsMT_5;


                $NegPriceMT_5 = $NumberMT_5 * $rowitem->Neg_Quantity;
                $Neg_PriceMT_5 = $Neg_PriceMT_5 + $NegPriceMT_5;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT_5 = $PCSAfterMT_5 + $PoPcsMT_5 + $NegPcsMT_5;
                $BackChange_PcsMT_5 = $BackChange_PcsMT_5 + $BackChangePcsMT_5;

                $BackChangePriceMT_5 = $PriceAfterMT_5 + $PoPriceMT_5 + $NegPriceMT_5;
                $BackChange_PriceMT_5 = $BackChange_PriceMT_5 + $BackChangePriceMT_5;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT_5 = $rowitem->purchase_Quantity;
                $Purchase_PcsMT_5 = $Purchase_PcsMT_5 + $PurchasePcsMT_5;

                $PurchasePriceMT_5 = $rowitem->purchase_Cost;
                $Purchase_PriceMT_5 = $Purchase_PriceMT_5 + $PurchasePriceMT_5;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT_5 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT_5 = $ReciveTranfer_PcsMT_5 + $ReciveTranferPcsMT_5;

                $ReciveTranferPriceMT_5 = $ReciveTranferPcsMT_5 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceMT_5 = $ReciveTranfer_PriceMT_5 + $ReciveTranferPriceMT_5;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT_5 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSMT_5 = $ReturnItem_PCSMT_5 + $ReturnItemQuantityMT_5;

                $ReturnItemPriceMT_5 = $ReturnItemQuantityMT_5 * $NumberMT_5;
                $ReturnItem_PriceMT_5 = $ReturnItem_PriceMT_5 + $ReturnItemPriceMT_5;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT_5 = $rowitem->purchase_Quantity + $ReciveTranferPcsMT_5 + $ReturnItemQuantityMT_5;
                $AllIn_PcsMT_5 = $AllIn_PcsMT_5 + $AllInPcsMT_5;

                $AllInPriceMT_5 = $PurchasePriceMT_5 + $ReciveTranferPriceMT_5 + $ReturnItemPriceMT_5;
                $AllIn_PriceMT_5 = $AllIn_PriceMT_5 + $AllInPriceMT_5;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT_5 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsMT_5 = $SendSale_PcsMT_5 + $SendSalePcsMT_5;

                if ($BackChangePcsMT_5 > 0 && $AllInPcsMT_5 > 0) {
                    $SendSalePriceMT_5 = (($AllInPriceMT_5 + $BackChangePriceMT_5) / ($AllInPcsMT_5 + $BackChangePcsMT_5)) * $SendSalePcsMT_5;
                    $SendSale_PriceMT_5 = $SendSale_PriceMT_5 + $SendSalePriceMT_5;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT_5 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT_5 = $ReciveTranOut_PcsMT_5 + $ReciveTranOutPcsMT_5;

                if ($AllInPcsMT_5 > 0 && $BackChangePcsMT_5 > 0) {
                    $ReciveTranOutPriceMT_5 = (($AllInPriceMT_5 + $BackChangePriceMT_5) / ($AllInPcsMT_5 + $BackChangePcsMT_5)) * $ReciveTranOutPcsMT_5;
                    $ReciveTranOut_PriceMT_5 = $ReciveTranOut_PriceMT_5 + $ReciveTranOutPriceMT_5;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT_5 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsMT_5 = $ReturnStore_PcsMT_5 + $ReturnStorePcsMT_5;

                if ($AllInPcsMT_5 > 0 && $BackChangePcsMT_5 > 0) {
                    $ReturnStorePriceMT_5 = (($AllInPriceMT_5 + $BackChangePriceMT_5) / ($AllInPcsMT_5 + $BackChangePcsMT_5)) * $ReturnStorePcsMT_5;
                    $ReturnStore_PriceMT_5 = $ReturnStore_PriceMT_5 + $ReturnStorePriceMT_5;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT_5 = $ReturnStorePcsMT_5 + $ReciveTranOutPcsMT_5 + $SendSalePcsMT_5;
                $AllOut_PcsMT_5 = $AllOut_PcsMT_5 + $AllOutPcsMT_5;

                $AllOutPriceMT_5 = $SendSale_PriceMT_5 + $ReciveTranOut_PriceMT_5 + $ReturnStore_PriceMT_5;
                $AllOut_PriceMT_5 = $AllOut_PriceMT_5 + $AllOutPriceMT_5;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT_5 = $BackChangePcsMT_5 + $AllInPcsMT_5 + $AllOutPcsMT_5;
                $Calculate_PcsMT_5 = $Calculate_PcsMT_5 + $CalculatePcsMT_5;

                $CalculatePriceMT_5 = $BackChangePriceMT_5 + $AllInPriceMT_5 + $AllOutPriceMT_5;
                $Calculate_PriceMT_5 = $Calculate_PriceMT_5 + $CalculatePriceMT_5;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT_5 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsMT_5 = $NewCalculate_PcsMT_5 + $NewCalculatePcsMT_5;

                $NewCalculatePriceMT_5 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceMT_5 = $NewCalculate_PriceMT_5 + $NewCalculatePriceMT_5;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT_5 = $NewCalculatePcsMT_5 - $CalculatePcsMT_5;
                $Diff_PcsMT_5 = $Diff_PcsMT_5 + $DiffPcsMT_5;

                $DiffPriceMT_5 = $NewCalculatePriceMT_5 - $CalculatePriceMT_5;
                $Diff_PriceMT_5 = $Diff_PriceMT_5 + $DiffPriceMT_5;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT_5 = $CalculatePcsMT_5;
                $NewTotal_PcsMT_5 = $NewTotal_PcsMT_5 + $CalculatePcsMT_5;

                $NewTotalPriceMT_5 = $NewTotalPcsMT_5 * $rowitem->PriceAvg;
                $NewTotal_PriceMT_5 = $NewTotal_PriceMT_5 + $NewTotalPriceMT_5;

                $NewTotalDiffNavMT_5 = $NewTotalPriceMT_5 - $NewCalculatePriceMT_5;
                $NewTotalDiff_NavMT_5 = $NewTotalDiff_NavMT_5 + $NewTotalDiffNavMT_5;

                $NewTotalDiffCalMT_5 = $NewTotalPriceMT_5 - $CalculatePriceMT_5;
                $NewTotalDiff_CalMT_5 = $NewTotalDiff_CalMT_5 + $NewTotalDiffCalMT_5;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT_5 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT_5 = $a7f1fgbu02s_PcsMT_5 + $a7f1fgbu02sPcsMT_5;

                $a7f1fgbu02sPriceMT_5 = $a7f1fgbu02sPcsMT_5 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceMT_5 = $a7f1fgbu02s_PriceMT_5 + $a7f1fgbu02sPriceMT_5;

                $a7f2fgbu10sPcsMT_5 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT_5 = $a7f2fgbu10s_PcsMT_5 + $a7f2fgbu10sPcsMT_5;

                $a7f2fgbu10sPriceMT_5 = $a7f2fgbu10sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceMT_5 = $a7f2fgbu10s_PriceMT_5 + $a7f2fgbu10sPriceMT_5;

                $a7f2thbu05sPcsMT_5 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT_5 = $a7f2thbu05s_PcsMT_5 + $a7f2thbu05sPcsMT_5;

                $a7f2thbu05sPriceMT_5 = $a7f2thbu05sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceMT_5 = $a7f2thbu05s_PriceMT_5 + $a7f2thbu05sPriceMT_5;

                $a7f2debu10sPcsMT_5 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT_5 = $a7f2debu10s_PcsMT_5 + $a7f2debu10sPcsMT_5;

                $a7f2debu10sPriceMT_5 = $a7f2debu10sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceMT_5 = $a7f2debu10s_PriceMT_5 + $a7f2debu10sPriceMT_5;

                $a7f2exbu11sPcsMT_5 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT_5 = $a7f2exbu11s_PcsMT_5 + $a7f2exbu11sPcsMT_5;

                $a7f2exbu11sPriceMT_5 = $a7f2exbu11sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceMT_5 = $a7f2exbu11s_PriceMT_5 + $a7f2exbu11sPriceMT_5;

                $a7f2twbu04sPcsMT_5 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT_5 = $a7f2twbu04s_PcsMT_5 + $a7f2twbu04sPcsMT_5;

                $a7f2twbu04sPriceMT_5 = $a7f2twbu04sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceMT_5 = $a7f2twbu04s_PriceMT_5 + $a7f2twbu04sPriceMT_5;

                $a7f2twbu07sPcsMT_5 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT_5 = $a7f2twbu07s_PcsMT_5 + $a7f2twbu07sPcsMT_5;

                $a7f2twbu07sPriceMT_5 = $a7f2twbu07sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceMT_5 = $a7f2twbu07s_PriceMT_5 + $a7f2twbu07sPriceMT_5;

                $a7f2cebu10sPcsMT_5 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT_5 = $a7f2cebu10s_PcsMT_5 + $a7f2cebu10sPcsMT_5;

                $a7f2cebu10sPriceMT_5 = $a7f2cebu10sPcsMT_5 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceMT_5 = $a7f2cebu10s_PriceMT_5 + $a7f2cebu10sPriceMT_5;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT_5 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT_5 = $a8f1fgbu02s_PcsMT_5 + $a8f1fgbu02sPcsMT_5;

                $a8f1fgbu02sPriceMT_5 = $a8f1fgbu02sPcsMT_5 * $NumberMT_5;
                $a8f1fgbu02s_PriceMT_5 = $a8f1fgbu02s_PriceMT_5 + $a8f1fgbu02sPriceMT_5;

                $a8f2fgbu10sPcsMT_5 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT_5 = $a8f2fgbu10s_PcsMT_5 + $a8f2fgbu10sPcsMT_5;

                $a8f2fgbu10sPriceMT_5 = $a8f2fgbu10sPcsMT_5 * $NumberMT_5;
                $a8f2fgbu10s_PriceMT_5 = $a8f2fgbu10s_PriceMT_5 + $a8f2fgbu10sPriceMT_5;

                $a8f2thbu05sPcsMT_5 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT_5 = $a8f2thbu05s_PcsMT_5 + $a8f2thbu05sPcsMT_5;

                $a8f2thbu05sPriceMT_5 = $a8f2thbu05sPcsMT_5 * $NumberMT_5;
                $a8f2thbu05s_PriceMT_5 = $a8f2thbu05s_PriceMT_5 + $a8f2thbu05sPriceMT_5;

                $a8f2debu10sPcsMT_5 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT_5 = $a8f2debu10s_PcsMT_5 + $a8f2debu10sPcsMT_5;

                $a8f2debu10sPriceMT_5 = $a8f2debu10sPcsMT_5 * $NumberMT_5;
                $a8f2debu10s_PriceMT_5 = $a8f2debu10s_PriceMT_5 + $a8f2debu10sPriceMT_5;

                $a8f2exbu11sPcsMT_5 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT_5 = $a8f2exbu11s_PcsMT_5 + $a8f2exbu11sPcsMT_5;

                $a8f2exbu11sPriceMT_5 = $a8f2exbu11sPcsMT_5 * $NumberMT_5;
                $a8f2exbu11s_PriceMT_5 = $a8f2exbu11s_PriceMT_5 + $a8f2exbu11sPriceMT_5;

                $a8f2twbu04sPcsMT_5 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT_5 = $a8f2twbu04s_PcsMT_5 + $a8f2twbu04sPcsMT_5;

                $a8f2twbu04sPriceMT_5 = $a8f2twbu04sPcsMT_5 * $NumberMT_5;
                $a8f2twbu04s_PriceMT_5 = $a8f2twbu04s_PriceMT_5 + $a8f2twbu04sPriceMT_5;

                $a8f2twbu07sPcsMT_5 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT_5 = $a8f2twbu07s_PcsMT_5 + $a8f2twbu07sPcsMT_5;

                $a8f2twbu07sPriceMT_5 = $a8f2twbu07sPcsMT_5 * $NumberMT_5;
                $a8f2twbu07s_PriceMT_5 = $a8f2twbu07s_PriceMT_5 + $a8f2twbu07sPriceMT_5;

                $a8f2cebu10sPcsMT_5 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT_5 = $a8f2cebu10s_PcsMT_5 + $a8f2cebu10sPcsMT_5;

                $a8f2cebu10sPriceMT_5 = $a8f2cebu10sPcsMT_5 * $NumberMT_5;
                $a8f2cebu10s_PriceMT_5 = $a8f2cebu10s_PriceMT_5 + $a8f2cebu10sPriceMT_5;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT_5 = $rowitem->dc1_s_Quantity;
                $DC1_PcsMT_5 = $DC1_PcsMT_5 + $DC1PcsMT_5;

                $DC1PriceMT_5 = $DC1PcsMT_5 * $NumberMT_5;
                $DC1_PriceMT_5 = $DC1_PriceMT_5 + $DC1PriceMT_5;

                $DCPPcsMT_5 = $rowitem->dcp_s_Quantity;
                $DCP_PcsMT_5 = $DCP_PcsMT_5 + $DCPPcsMT_5;

                $DCPPriceMT_5 = $DCPPcsMT_5 * $NumberMT_5;
                $DCP_PriceMT_5 = $DCP_PriceMT_5 + $DCPPriceMT_5;

                $DCYPcsMT_5 = $rowitem->dcy_s_Quantity;
                $DCY_PcsMT_5 = $DCY_PcsMT_5 + $DCYPcsMT_5;

                $DCYPriceMT_5 = $DCYPcsMT_5 * $NumberMT_5;
                $DCY_PriceMT_5 = $DCY_PriceMT_5 + $DCYPriceMT_5;

                $DEXPcsMT_5 = $rowitem->dex_s_Quantity;
                $DEX_PcsMT_5 = $DEX_PcsMT_5 + $DEXPcsMT_5;

                $DEXPriceMT_5 = $DEXPcsMT_5 * $NumberMT_5;
                $DEX_PriceMT_5 = $DEX_PriceMT_5 + $DEXPriceMT_5;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "อวนกระชัง" && $Code_1[0] === "MT" || $Code_1[0] === "SMT") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberMT_6 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberMT_6 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT_6 = $rowitem->PcsAfter;
                $Pcs_AfterMT_6 = $Pcs_AfterMT_6 + $PCSAfterMT_6;

                $PriceAfterMT_6 = $rowitem->PriceAfter;
                $Price_AfterMT_6 = $Price_AfterMT_6 + $PriceAfterMT_6;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT_6 = $rowitem->Po_Quantity;
                $Po_PcsMT_6 = $Po_PcsMT_6 + $PoPcsMT_6;

                $PoPriceMT_6 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceMT_6 = $Po_PriceMT_6 + $PoPriceMT_6;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT_6 = $rowitem->Neg_Quantity;
                $Neg_PcsMT_6 = $Neg_PcsMT_6 + $NegPcsMT_6;


                $NegPriceMT_6 = $NumberMT_6 * $rowitem->Neg_Quantity;
                $Neg_PriceMT_6 = $Neg_PriceMT_6 + $NegPriceMT_6;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT_6 = $PCSAfterMT_6 + $PoPcsMT_6 + $NegPcsMT_6;
                $BackChange_PcsMT_6 = $BackChange_PcsMT_6 + $BackChangePcsMT_6;

                $BackChangePriceMT_6 = $PriceAfterMT_6 + $PoPriceMT_6 + $NegPriceMT_6;
                $BackChange_PriceMT_6 = $BackChange_PriceMT_6 + $BackChangePriceMT_6;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT_6 = $rowitem->purchase_Quantity;
                $Purchase_PcsMT_6 = $Purchase_PcsMT_6 + $PurchasePcsMT_6;

                $PurchasePriceMT_6 = $rowitem->purchase_Cost;
                $Purchase_PriceMT_6 = $Purchase_PriceMT_6 + $PurchasePriceMT_6;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT_6 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT_6 = $ReciveTranfer_PcsMT_6 + $ReciveTranferPcsMT_6;

                $ReciveTranferPriceMT_6 = $ReciveTranferPcsMT_6 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceMT_6 = $ReciveTranfer_PriceMT_6 + $ReciveTranferPriceMT_6;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT_6 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSMT_6 = $ReturnItem_PCSMT_6 + $ReturnItemQuantityMT_6;

                $ReturnItemPriceMT_6 = $ReturnItemQuantityMT_6 * $NumberMT_6;
                $ReturnItem_PriceMT_6 = $ReturnItem_PriceMT_6 + $ReturnItemPriceMT_6;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT_6 = $rowitem->purchase_Quantity + $ReciveTranferPcsMT_6 + $ReturnItemQuantityMT_6;
                $AllIn_PcsMT_6 = $AllIn_PcsMT_6 + $AllInPcsMT_6;

                $AllInPriceMT_6 = $PurchasePriceMT_6 + $ReciveTranferPriceMT_6 + $ReturnItemPriceMT_6;
                $AllIn_PriceMT_6 = $AllIn_PriceMT_6 + $AllInPriceMT_6;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT_6 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsMT_6 = $SendSale_PcsMT_6 + $SendSalePcsMT_6;

                if ($BackChangePcsMT_6 > 0 && $AllInPcsMT_6 > 0) {
                    $SendSalePriceMT_6 = (($AllInPriceMT_6 + $BackChangePriceMT_6) / ($AllInPcsMT_6 + $BackChangePcsMT_6)) * $SendSalePcsMT_6;
                    $SendSale_PriceMT_6 = $SendSale_PriceMT_6 + $SendSalePriceMT_6;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT_6 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT_6 = $ReciveTranOut_PcsMT_6 + $ReciveTranOutPcsMT_6;

                if ($AllInPcsMT_6 > 0 && $BackChangePcsMT_6 > 0) {
                    $ReciveTranOutPriceMT_6 = (($AllInPriceMT_6 + $BackChangePriceMT_6) / ($AllInPcsMT_6 + $BackChangePcsMT_6)) * $ReciveTranOutPcsMT_6;
                    $ReciveTranOut_PriceMT_6 = $ReciveTranOut_PriceMT_6 + $ReciveTranOutPriceMT_6;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT_6 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsMT_6 = $ReturnStore_PcsMT_6 + $ReturnStorePcsMT_6;

                if ($AllInPcsMT_6 > 0 && $BackChangePcsMT_6 > 0) {
                    $ReturnStorePriceMT_6 = (($AllInPriceMT_6 + $BackChangePriceMT_6) / ($AllInPcsMT_6 + $BackChangePcsMT_6)) * $ReturnStorePcsMT_6;
                    $ReturnStore_PriceMT_6 = $ReturnStore_PriceMT_6 + $ReturnStorePriceMT_6;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT_6 = $ReturnStorePcsMT_6 + $ReciveTranOutPcsMT_6 + $SendSalePcsMT_6;
                $AllOut_PcsMT_6 = $AllOut_PcsMT_6 + $AllOutPcsMT_6;

                $AllOutPriceMT_6 = $SendSale_PriceMT_6 + $ReciveTranOut_PriceMT_6 + $ReturnStore_PriceMT_6;
                $AllOut_PriceMT_6 = $AllOut_PriceMT_6 + $AllOutPriceMT_6;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT_6 = $BackChangePcsMT_6 + $AllInPcsMT_6 + $AllOutPcsMT_6;
                $Calculate_PcsMT_6 = $Calculate_PcsMT_6 + $CalculatePcsMT_6;

                $CalculatePriceMT_6 = $BackChangePriceMT_6 + $AllInPriceMT_6 + $AllOutPriceMT_6;
                $Calculate_PriceMT_6 = $Calculate_PriceMT_6 + $CalculatePriceMT_6;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT_6 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsMT_6 = $NewCalculate_PcsMT_6 + $NewCalculatePcsMT_6;

                $NewCalculatePriceMT_6 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceMT_6 = $NewCalculate_PriceMT_6 + $NewCalculatePriceMT_6;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT_6 = $NewCalculatePcsMT_6 - $CalculatePcsMT_6;
                $Diff_PcsMT_6 = $Diff_PcsMT_6 + $DiffPcsMT_6;

                $DiffPriceMT_6 = $NewCalculatePriceMT_6 - $CalculatePriceMT_6;
                $Diff_PriceMT_6 = $Diff_PriceMT_6 + $DiffPriceMT_6;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT_6 = $CalculatePcsMT_6;
                $NewTotal_PcsMT_6 = $NewTotal_PcsMT_6 + $CalculatePcsMT_6;

                $NewTotalPriceMT_6 = $NewTotalPcsMT_6 * $rowitem->PriceAvg;
                $NewTotal_PriceMT_6 = $NewTotal_PriceMT_6 + $NewTotalPriceMT_6;

                $NewTotalDiffNavMT_6 = $NewTotalPriceMT_6 - $NewCalculatePriceMT_6;
                $NewTotalDiff_NavMT_6 = $NewTotalDiff_NavMT_6 + $NewTotalDiffNavMT_6;

                $NewTotalDiffCalMT_6 = $NewTotalPriceMT_6 - $CalculatePriceMT_6;
                $NewTotalDiff_CalMT_6 = $NewTotalDiff_CalMT_6 + $NewTotalDiffCalMT_6;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT_6 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT_6 = $a7f1fgbu02s_PcsMT_6 + $a7f1fgbu02sPcsMT_6;

                $a7f1fgbu02sPriceMT_6 = $a7f1fgbu02sPcsMT_6 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceMT_6 = $a7f1fgbu02s_PriceMT_6 + $a7f1fgbu02sPriceMT_6;

                $a7f2fgbu10sPcsMT_6 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT_6 = $a7f2fgbu10s_PcsMT_6 + $a7f2fgbu10sPcsMT_6;

                $a7f2fgbu10sPriceMT_6 = $a7f2fgbu10sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceMT_6 = $a7f2fgbu10s_PriceMT_6 + $a7f2fgbu10sPriceMT_6;

                $a7f2thbu05sPcsMT_6 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT_6 = $a7f2thbu05s_PcsMT_6 + $a7f2thbu05sPcsMT_6;

                $a7f2thbu05sPriceMT_6 = $a7f2thbu05sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceMT_6 = $a7f2thbu05s_PriceMT_6 + $a7f2thbu05sPriceMT_6;

                $a7f2debu10sPcsMT_6 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT_6 = $a7f2debu10s_PcsMT_6 + $a7f2debu10sPcsMT_6;

                $a7f2debu10sPriceMT_6 = $a7f2debu10sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceMT_6 = $a7f2debu10s_PriceMT_6 + $a7f2debu10sPriceMT_6;

                $a7f2exbu11sPcsMT_6 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT_6 = $a7f2exbu11s_PcsMT_6 + $a7f2exbu11sPcsMT_6;

                $a7f2exbu11sPriceMT_6 = $a7f2exbu11sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceMT_6 = $a7f2exbu11s_PriceMT_6 + $a7f2exbu11sPriceMT_6;

                $a7f2twbu04sPcsMT_6 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT_6 = $a7f2twbu04s_PcsMT_6 + $a7f2twbu04sPcsMT_6;

                $a7f2twbu04sPriceMT_6 = $a7f2twbu04sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceMT_6 = $a7f2twbu04s_PriceMT_6 + $a7f2twbu04sPriceMT_6;

                $a7f2twbu07sPcsMT_6 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT_6 = $a7f2twbu07s_PcsMT_6 + $a7f2twbu07sPcsMT_6;

                $a7f2twbu07sPriceMT_6 = $a7f2twbu07sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceMT_6 = $a7f2twbu07s_PriceMT_6 + $a7f2twbu07sPriceMT_6;

                $a7f2cebu10sPcsMT_6 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT_6 = $a7f2cebu10s_PcsMT_6 + $a7f2cebu10sPcsMT_6;

                $a7f2cebu10sPriceMT_6 = $a7f2cebu10sPcsMT_6 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceMT_6 = $a7f2cebu10s_PriceMT_6 + $a7f2cebu10sPriceMT_6;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT_6 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT_6 = $a8f1fgbu02s_PcsMT_6 + $a8f1fgbu02sPcsMT_6;

                $a8f1fgbu02sPriceMT_6 = $a8f1fgbu02sPcsMT_6 * $NumberMT_6;
                $a8f1fgbu02s_PriceMT_6 = $a8f1fgbu02s_PriceMT_6 + $a8f1fgbu02sPriceMT_6;

                $a8f2fgbu10sPcsMT_6 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT_6 = $a8f2fgbu10s_PcsMT_6 + $a8f2fgbu10sPcsMT_6;

                $a8f2fgbu10sPriceMT_6 = $a8f2fgbu10sPcsMT_6 * $NumberMT_6;
                $a8f2fgbu10s_PriceMT_6 = $a8f2fgbu10s_PriceMT_6 + $a8f2fgbu10sPriceMT_6;

                $a8f2thbu05sPcsMT_6 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT_6 = $a8f2thbu05s_PcsMT_6 + $a8f2thbu05sPcsMT_6;

                $a8f2thbu05sPriceMT_6 = $a8f2thbu05sPcsMT_6 * $NumberMT_6;
                $a8f2thbu05s_PriceMT_6 = $a8f2thbu05s_PriceMT_6 + $a8f2thbu05sPriceMT_6;

                $a8f2debu10sPcsMT_6 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT_6 = $a8f2debu10s_PcsMT_6 + $a8f2debu10sPcsMT_6;

                $a8f2debu10sPriceMT_6 = $a8f2debu10sPcsMT_6 * $NumberMT_6;
                $a8f2debu10s_PriceMT_6 = $a8f2debu10s_PriceMT_6 + $a8f2debu10sPriceMT_6;

                $a8f2exbu11sPcsMT_6 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT_6 = $a8f2exbu11s_PcsMT_6 + $a8f2exbu11sPcsMT_6;

                $a8f2exbu11sPriceMT_6 = $a8f2exbu11sPcsMT_6 * $NumberMT_6;
                $a8f2exbu11s_PriceMT_6 = $a8f2exbu11s_PriceMT_6 + $a8f2exbu11sPriceMT_6;

                $a8f2twbu04sPcsMT_6 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT_6 = $a8f2twbu04s_PcsMT_6 + $a8f2twbu04sPcsMT_6;

                $a8f2twbu04sPriceMT_6 = $a8f2twbu04sPcsMT_6 * $NumberMT_6;
                $a8f2twbu04s_PriceMT_6 = $a8f2twbu04s_PriceMT_6 + $a8f2twbu04sPriceMT_6;

                $a8f2twbu07sPcsMT_6 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT_6 = $a8f2twbu07s_PcsMT_6 + $a8f2twbu07sPcsMT_6;

                $a8f2twbu07sPriceMT_6 = $a8f2twbu07sPcsMT_6 * $NumberMT_6;
                $a8f2twbu07s_PriceMT_6 = $a8f2twbu07s_PriceMT_6 + $a8f2twbu07sPriceMT_6;

                $a8f2cebu10sPcsMT_6 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT_6 = $a8f2cebu10s_PcsMT_6 + $a8f2cebu10sPcsMT_6;

                $a8f2cebu10sPriceMT_6 = $a8f2cebu10sPcsMT_6 * $NumberMT_6;
                $a8f2cebu10s_PriceMT_6 = $a8f2cebu10s_PriceMT_6 + $a8f2cebu10sPriceMT_6;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT_6 = $rowitem->dc1_s_Quantity;
                $DC1_PcsMT_6 = $DC1_PcsMT_6 + $DC1PcsMT_6;

                $DC1PriceMT_6 = $DC1PcsMT_6 * $NumberMT_6;
                $DC1_PriceMT_6 = $DC1_PriceMT_6 + $DC1PriceMT_6;

                $DCPPcsMT_6 = $rowitem->dcp_s_Quantity;
                $DCP_PcsMT_6 = $DCP_PcsMT_6 + $DCPPcsMT_6;

                $DCPPriceMT_6 = $DCPPcsMT_6 * $NumberMT_6;
                $DCP_PriceMT_6 = $DCP_PriceMT_6 + $DCPPriceMT_6;

                $DCYPcsMT_6 = $rowitem->dcy_s_Quantity;
                $DCY_PcsMT_6 = $DCY_PcsMT_6 + $DCYPcsMT_6;

                $DCYPriceMT_6 = $DCYPcsMT_6 * $NumberMT_6;
                $DCY_PriceMT_6 = $DCY_PriceMT_6 + $DCYPriceMT_6;

                $DEXPcsMT_6 = $rowitem->dex_s_Quantity;
                $DEX_PcsMT_6 = $DEX_PcsMT_6 + $DEXPcsMT_6;

                $DEXPriceMT_6 = $DEXPcsMT_6 * $NumberMT_6;
                $DEX_PriceMT_6 = $DEX_PriceMT_6 + $DEXPriceMT_6;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ด้ายไนลอน" && $Code_1[0] === "TW") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberTW_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberTW_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterTW_1 = $rowitem->PcsAfter;
                $Pcs_AfterTW_1 = $Pcs_AfterTW_1 + $PCSAfterTW_1;

                $PriceAfterTW_1 = $rowitem->PriceAfter;
                $Price_AfterTW_1 = $Price_AfterTW_1 + $PriceAfterTW_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsTW_1 = $rowitem->Po_Quantity;
                $Po_PcsTW_1 = $Po_PcsTW_1 + $PoPcsTW_1;

                $PoPriceTW_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceTW_1 = $Po_PriceTW_1 + $PoPriceTW_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsTW_1 = $rowitem->Neg_Quantity;
                $Neg_PcsTW_1 = $Neg_PcsTW_1 + $NegPcsTW_1;


                $NegPriceTW_1 = $NumberTW_1 * $rowitem->Neg_Quantity;
                $Neg_PriceTW_1 = $Neg_PriceTW_1 + $NegPriceTW_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsTW_1 = $PCSAfterTW_1 + $PoPcsTW_1 + $NegPcsTW_1;
                $BackChange_PcsTW_1 = $BackChange_PcsTW_1 + $BackChangePcsTW_1;

                $BackChangePriceTW_1 = $PriceAfterTW_1 + $PoPriceTW_1 + $NegPriceTW_1;
                $BackChange_PriceTW_1 = $BackChange_PriceTW_1 + $BackChangePriceTW_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsTW_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsTW_1 = $Purchase_PcsTW_1 + $PurchasePcsTW_1;

                $PurchasePriceTW_1 = $rowitem->purchase_Cost;
                $Purchase_PriceTW_1 = $Purchase_PriceTW_1 + $PurchasePriceTW_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsTW_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsTW_1 = $ReciveTranfer_PcsTW_1 + $ReciveTranferPcsTW_1;

                $ReciveTranferPriceTW_1 = $ReciveTranferPcsTW_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceTW_1 = $ReciveTranfer_PriceTW_1 + $ReciveTranferPriceTW_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityTW_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSTW_1 = $ReturnItem_PCSTW_1 + $ReturnItemQuantityTW_1;

                $ReturnItemPriceTW_1 = $ReturnItemQuantityTW_1 * $NumberTW_1;
                $ReturnItem_PriceTW_1 = $ReturnItem_PriceTW_1 + $ReturnItemPriceTW_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsTW_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsTW_1 + $ReturnItemQuantityTW_1;
                $AllIn_PcsTW_1 = $AllIn_PcsTW_1 + $AllInPcsTW_1;

                $AllInPriceTW_1 = $PurchasePriceTW_1 + $ReciveTranferPriceTW_1 + $ReturnItemPriceTW_1;
                $AllIn_PriceTW_1 = $AllIn_PriceTW_1 + $AllInPriceTW_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsTW_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsTW_1 = $SendSale_PcsTW_1 + $SendSalePcsTW_1;

                if ($BackChangePcsTW_1 > 0 && $AllInPcsTW_1 > 0) {
                    $SendSalePriceTW_1 = (($AllInPriceTW_1 + $BackChangePriceTW_1) / ($AllInPcsTW_1 + $BackChangePcsTW_1)) * $SendSalePcsTW_1;
                    $SendSale_PriceTW_1 = $SendSale_PriceTW_1 + $SendSalePriceTW_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsTW_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsTW_1 = $ReciveTranOut_PcsTW_1 + $ReciveTranOutPcsTW_1;

                if ($AllInPcsTW_1 > 0 && $BackChangePcsTW_1 > 0) {
                    $ReciveTranOutPriceTW_1 = (($AllInPriceTW_1 + $BackChangePriceTW_1) / ($AllInPcsTW_1 + $BackChangePcsTW_1)) * $ReciveTranOutPcsTW_1;
                    $ReciveTranOut_PriceTW_1 = $ReciveTranOut_PriceTW_1 + $ReciveTranOutPriceTW_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsTW_1 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsTW_1 = $ReturnStore_PcsTW_1 + $ReturnStorePcsTW_1;

                if ($AllInPcsTW_1 > 0 && $BackChangePcsTW_1 > 0) {
                    $ReturnStorePriceTW_1 = (($AllInPriceTW_1 + $BackChangePriceTW_1) / ($AllInPcsTW_1 + $BackChangePcsTW_1)) * $ReturnStorePcsTW_1;
                    $ReturnStore_PriceTW_1 = $ReturnStore_PriceTW_1 + $ReturnStorePriceTW_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsTW_1 = $ReturnStorePcsTW_1 + $ReciveTranOutPcsTW_1 + $SendSalePcsTW_1;
                $AllOut_PcsTW_1 = $AllOut_PcsTW_1 + $AllOutPcsTW_1;

                $AllOutPriceTW_1 = $SendSale_PriceTW_1 + $ReciveTranOut_PriceTW_1 + $ReturnStore_PriceTW_1;
                $AllOut_PriceTW_1 = $AllOut_PriceTW_1 + $AllOutPriceTW_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsTW_1 = $BackChangePcsTW_1 + $AllInPcsTW_1 + $AllOutPcsTW_1;
                $Calculate_PcsTW_1 = $Calculate_PcsTW_1 + $CalculatePcsTW_1;

                $CalculatePriceTW_1 = $BackChangePriceTW_1 + $AllInPriceTW_1 + $AllOutPriceTW_1;
                $Calculate_PriceTW_1 = $Calculate_PriceTW_1 + $CalculatePriceTW_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsTW_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsTW_1 = $NewCalculate_PcsTW_1 + $NewCalculatePcsTW_1;

                $NewCalculatePriceTW_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceTW_1 = $NewCalculate_PriceTW_1 + $NewCalculatePriceTW_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsTW_1 = $NewCalculatePcsTW_1 - $CalculatePcsTW_1;
                $Diff_PcsTW_1 = $Diff_PcsTW_1 + $DiffPcsTW_1;

                $DiffPriceTW_1 = $NewCalculatePriceTW_1 - $CalculatePriceTW_1;
                $Diff_PriceTW_1 = $Diff_PriceTW_1 + $DiffPriceTW_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsTW_1 = $CalculatePcsTW_1;
                $NewTotal_PcsTW_1 = $NewTotal_PcsTW_1 + $CalculatePcsTW_1;

                $NewTotalPriceTW_1 = $NewTotalPcsTW_1 * $rowitem->PriceAvg;
                $NewTotal_PriceTW_1 = $NewTotal_PriceTW_1 + $NewTotalPriceTW_1;

                $NewTotalDiffNavTW_1 = $NewTotalPriceTW_1 - $NewCalculatePriceTW_1;
                $NewTotalDiff_NavTW_1 = $NewTotalDiff_NavTW_1 + $NewTotalDiffNavTW_1;

                $NewTotalDiffCalTW_1 = $NewTotalPriceTW_1 - $CalculatePriceTW_1;
                $NewTotalDiff_CalTW_1 = $NewTotalDiff_CalTW_1 + $NewTotalDiffCalTW_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsTW_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsTW_1 = $a7f1fgbu02s_PcsTW_1 + $a7f1fgbu02sPcsTW_1;

                $a7f1fgbu02sPriceTW_1 = $a7f1fgbu02sPcsTW_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceTW_1 = $a7f1fgbu02s_PriceTW_1 + $a7f1fgbu02sPriceTW_1;

                $a7f2fgbu10sPcsTW_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsTW_1 = $a7f2fgbu10s_PcsTW_1 + $a7f2fgbu10sPcsTW_1;

                $a7f2fgbu10sPriceTW_1 = $a7f2fgbu10sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceTW_1 = $a7f2fgbu10s_PriceTW_1 + $a7f2fgbu10sPriceTW_1;

                $a7f2thbu05sPcsTW_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsTW_1 = $a7f2thbu05s_PcsTW_1 + $a7f2thbu05sPcsTW_1;

                $a7f2thbu05sPriceTW_1 = $a7f2thbu05sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceTW_1 = $a7f2thbu05s_PriceTW_1 + $a7f2thbu05sPriceTW_1;

                $a7f2debu10sPcsTW_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsTW_1 = $a7f2debu10s_PcsTW_1 + $a7f2debu10sPcsTW_1;

                $a7f2debu10sPriceTW_1 = $a7f2debu10sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceTW_1 = $a7f2debu10s_PriceTW_1 + $a7f2debu10sPriceTW_1;

                $a7f2exbu11sPcsTW_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsTW_1 = $a7f2exbu11s_PcsTW_1 + $a7f2exbu11sPcsTW_1;

                $a7f2exbu11sPriceTW_1 = $a7f2exbu11sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceTW_1 = $a7f2exbu11s_PriceTW_1 + $a7f2exbu11sPriceTW_1;

                $a7f2twbu04sPcsTW_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsTW_1 = $a7f2twbu04s_PcsTW_1 + $a7f2twbu04sPcsTW_1;

                $a7f2twbu04sPriceTW_1 = $a7f2twbu04sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceTW_1 = $a7f2twbu04s_PriceTW_1 + $a7f2twbu04sPriceTW_1;

                $a7f2twbu07sPcsTW_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsTW_1 = $a7f2twbu07s_PcsTW_1 + $a7f2twbu07sPcsTW_1;

                $a7f2twbu07sPriceTW_1 = $a7f2twbu07sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceTW_1 = $a7f2twbu07s_PriceTW_1 + $a7f2twbu07sPriceTW_1;

                $a7f2cebu10sPcsTW_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsTW_1 = $a7f2cebu10s_PcsTW_1 + $a7f2cebu10sPcsTW_1;

                $a7f2cebu10sPriceTW_1 = $a7f2cebu10sPcsTW_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceTW_1 = $a7f2cebu10s_PriceTW_1 + $a7f2cebu10sPriceTW_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsTW_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsTW_1 = $a8f1fgbu02s_PcsTW_1 + $a8f1fgbu02sPcsTW_1;

                $a8f1fgbu02sPriceTW_1 = $a8f1fgbu02sPcsTW_1 * $NumberTW_1;
                $a8f1fgbu02s_PriceTW_1 = $a8f1fgbu02s_PriceTW_1 + $a8f1fgbu02sPriceTW_1;

                $a8f2fgbu10sPcsTW_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsTW_1 = $a8f2fgbu10s_PcsTW_1 + $a8f2fgbu10sPcsTW_1;

                $a8f2fgbu10sPriceTW_1 = $a8f2fgbu10sPcsTW_1 * $NumberTW_1;
                $a8f2fgbu10s_PriceTW_1 = $a8f2fgbu10s_PriceTW_1 + $a8f2fgbu10sPriceTW_1;

                $a8f2thbu05sPcsTW_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsTW_1 = $a8f2thbu05s_PcsTW_1 + $a8f2thbu05sPcsTW_1;

                $a8f2thbu05sPriceTW_1 = $a8f2thbu05sPcsTW_1 * $NumberTW_1;
                $a8f2thbu05s_PriceTW_1 = $a8f2thbu05s_PriceTW_1 + $a8f2thbu05sPriceTW_1;

                $a8f2debu10sPcsTW_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsTW_1 = $a8f2debu10s_PcsTW_1 + $a8f2debu10sPcsTW_1;

                $a8f2debu10sPriceTW_1 = $a8f2debu10sPcsTW_1 * $NumberTW_1;
                $a8f2debu10s_PriceTW_1 = $a8f2debu10s_PriceTW_1 + $a8f2debu10sPriceTW_1;

                $a8f2exbu11sPcsTW_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsTW_1 = $a8f2exbu11s_PcsTW_1 + $a8f2exbu11sPcsTW_1;

                $a8f2exbu11sPriceTW_1 = $a8f2exbu11sPcsTW_1 * $NumberTW_1;
                $a8f2exbu11s_PriceTW_1 = $a8f2exbu11s_PriceTW_1 + $a8f2exbu11sPriceTW_1;

                $a8f2twbu04sPcsTW_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsTW_1 = $a8f2twbu04s_PcsTW_1 + $a8f2twbu04sPcsTW_1;

                $a8f2twbu04sPriceTW_1 = $a8f2twbu04sPcsTW_1 * $NumberTW_1;
                $a8f2twbu04s_PriceTW_1 = $a8f2twbu04s_PriceTW_1 + $a8f2twbu04sPriceTW_1;

                $a8f2twbu07sPcsTW_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsTW_1 = $a8f2twbu07s_PcsTW_1 + $a8f2twbu07sPcsTW_1;

                $a8f2twbu07sPriceTW_1 = $a8f2twbu07sPcsTW_1 * $NumberTW_1;
                $a8f2twbu07s_PriceTW_1 = $a8f2twbu07s_PriceTW_1 + $a8f2twbu07sPriceTW_1;

                $a8f2cebu10sPcsTW_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsTW_1 = $a8f2cebu10s_PcsTW_1 + $a8f2cebu10sPcsTW_1;

                $a8f2cebu10sPriceTW_1 = $a8f2cebu10sPcsTW_1 * $NumberTW_1;
                $a8f2cebu10s_PriceTW_1 = $a8f2cebu10s_PriceTW_1 + $a8f2cebu10sPriceTW_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsTW_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsTW_1 = $DC1_PcsTW_1 + $DC1PcsTW_1;

                $DC1PriceTW_1 = $DC1PcsTW_1 * $NumberTW_1;
                $DC1_PriceTW_1 = $DC1_PriceTW_1 + $DC1PriceTW_1;

                $DCPPcsTW_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsTW_1 = $DCP_PcsTW_1 + $DCPPcsTW_1;

                $DCPPriceTW_1 = $DCPPcsTW_1 * $NumberTW_1;
                $DCP_PriceTW_1 = $DCP_PriceTW_1 + $DCPPriceTW_1;

                $DCYPcsTW_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsTW_1 = $DCY_PcsTW_1 + $DCYPcsTW_1;

                $DCYPriceTW_1 = $DCYPcsTW_1 * $NumberTW_1;
                $DCY_PriceTW_1 = $DCY_PriceTW_1 + $DCYPriceTW_1;

                $DEXPcsTW_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsTW_1 = $DEX_PcsTW_1 + $DEXPcsTW_1;

                $DEXPriceTW_1 = $DEXPcsTW_1 * $NumberTW_1;
                $DEX_PriceTW_1 = $DEX_PriceTW_1 + $DEXPriceTW_1;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ด้ายโพลี" && $Code_1[0] === "TW") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberTW_2 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberTW_2 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterTW_2 = $rowitem->PcsAfter;
                $Pcs_AfterTW_2 = $Pcs_AfterTW_2 + $PCSAfterTW_2;

                $PriceAfterTW_2 = $rowitem->PriceAfter;
                $Price_AfterTW_2 = $Price_AfterTW_2 + $PriceAfterTW_2;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsTW_2 = $rowitem->Po_Quantity;
                $Po_PcsTW_2 = $Po_PcsTW_2 + $PoPcsTW_2;

                $PoPriceTW_2 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceTW_2 = $Po_PriceTW_2 + $PoPriceTW_2;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsTW_2 = $rowitem->Neg_Quantity;
                $Neg_PcsTW_2 = $Neg_PcsTW_2 + $NegPcsTW_2;


                $NegPriceTW_2 = $NumberTW_2 * $rowitem->Neg_Quantity;
                $Neg_PriceTW_2 = $Neg_PriceTW_2 + $NegPriceTW_2;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsTW_2 = $PCSAfterTW_2 + $PoPcsTW_2 + $NegPcsTW_2;
                $BackChange_PcsTW_2 = $BackChange_PcsTW_2 + $BackChangePcsTW_2;

                $BackChangePriceTW_2 = $PriceAfterTW_2 + $PoPriceTW_2 + $NegPriceTW_2;
                $BackChange_PriceTW_2 = $BackChange_PriceTW_2 + $BackChangePriceTW_2;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsTW_2 = $rowitem->purchase_Quantity;
                $Purchase_PcsTW_2 = $Purchase_PcsTW_2 + $PurchasePcsTW_2;

                $PurchasePriceTW_2 = $rowitem->purchase_Cost;
                $Purchase_PriceTW_2 = $Purchase_PriceTW_2 + $PurchasePriceTW_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsTW_2 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsTW_2 = $ReciveTranfer_PcsTW_2 + $ReciveTranferPcsTW_2;

                $ReciveTranferPriceTW_2 = $ReciveTranferPcsTW_2 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceTW_2 = $ReciveTranfer_PriceTW_2 + $ReciveTranferPriceTW_2;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityTW_2 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSTW_2 = $ReturnItem_PCSTW_2 + $ReturnItemQuantityTW_2;

                $ReturnItemPriceTW_2 = $ReturnItemQuantityTW_2 * $NumberTW_2;
                $ReturnItem_PriceTW_2 = $ReturnItem_PriceTW_2 + $ReturnItemPriceTW_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsTW_2 = $rowitem->purchase_Quantity + $ReciveTranferPcsTW_2 + $ReturnItemQuantityTW_2;
                $AllIn_PcsTW_2 = $AllIn_PcsTW_2 + $AllInPcsTW_2;

                $AllInPriceTW_2 = $PurchasePriceTW_2 + $ReciveTranferPriceTW_2 + $ReturnItemPriceTW_2;
                $AllIn_PriceTW_2 = $AllIn_PriceTW_2 + $AllInPriceTW_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsTW_2 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsTW_2 = $SendSale_PcsTW_2 + $SendSalePcsTW_2;

                if ($BackChangePcsTW_2 > 0 && $AllInPcsTW_2 > 0) {
                    $SendSalePriceTW_2 = (($AllInPriceTW_2 + $BackChangePriceTW_2) / ($AllInPcsTW_2 + $BackChangePcsTW_2)) * $SendSalePcsTW_2;
                    $SendSale_PriceTW_2 = $SendSale_PriceTW_2 + $SendSalePriceTW_2;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsTW_2 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsTW_2 = $ReciveTranOut_PcsTW_2 + $ReciveTranOutPcsTW_2;

                if ($AllInPcsTW_2 > 0 && $BackChangePcsTW_2 > 0) {
                    $ReciveTranOutPriceTW_2 = (($AllInPriceTW_2 + $BackChangePriceTW_2) / ($AllInPcsTW_2 + $BackChangePcsTW_2)) * $ReciveTranOutPcsTW_2;
                    $ReciveTranOut_PriceTW_2 = $ReciveTranOut_PriceTW_2 + $ReciveTranOutPriceTW_2;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsTW_2 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsTW_2 = $ReturnStore_PcsTW_2 + $ReturnStorePcsTW_2;

                if ($AllInPcsTW_2 > 0 && $BackChangePcsTW_2 > 0) {
                    $ReturnStorePriceTW_2 = (($AllInPriceTW_2 + $BackChangePriceTW_2) / ($AllInPcsTW_2 + $BackChangePcsTW_2)) * $ReturnStorePcsTW_2;
                    $ReturnStore_PriceTW_2 = $ReturnStore_PriceTW_2 + $ReturnStorePriceTW_2;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsTW_2 = $ReturnStorePcsTW_2 + $ReciveTranOutPcsTW_2 + $SendSalePcsTW_2;
                $AllOut_PcsTW_2 = $AllOut_PcsTW_2 + $AllOutPcsTW_2;

                $AllOutPriceTW_2 = $SendSale_PriceTW_2 + $ReciveTranOut_PriceTW_2 + $ReturnStore_PriceTW_2;
                $AllOut_PriceTW_2 = $AllOut_PriceTW_2 + $AllOutPriceTW_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsTW_2 = $BackChangePcsTW_2 + $AllInPcsTW_2 + $AllOutPcsTW_2;
                $Calculate_PcsTW_2 = $Calculate_PcsTW_2 + $CalculatePcsTW_2;

                $CalculatePriceTW_2 = $BackChangePriceTW_2 + $AllInPriceTW_2 + $AllOutPriceTW_2;
                $Calculate_PriceTW_2 = $Calculate_PriceTW_2 + $CalculatePriceTW_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsTW_2 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsTW_2 = $NewCalculate_PcsTW_2 + $NewCalculatePcsTW_2;

                $NewCalculatePriceTW_2 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceTW_2 = $NewCalculate_PriceTW_2 + $NewCalculatePriceTW_2;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsTW_2 = $NewCalculatePcsTW_2 - $CalculatePcsTW_2;
                $Diff_PcsTW_2 = $Diff_PcsTW_2 + $DiffPcsTW_2;

                $DiffPriceTW_2 = $NewCalculatePriceTW_2 - $CalculatePriceTW_2;
                $Diff_PriceTW_2 = $Diff_PriceTW_2 + $DiffPriceTW_2;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsTW_2 = $CalculatePcsTW_2;
                $NewTotal_PcsTW_2 = $NewTotal_PcsTW_2 + $CalculatePcsTW_2;

                $NewTotalPriceTW_2 = $NewTotalPcsTW_2 * $rowitem->PriceAvg;
                $NewTotal_PriceTW_2 = $NewTotal_PriceTW_2 + $NewTotalPriceTW_2;

                $NewTotalDiffNavTW_2 = $NewTotalPriceTW_2 - $NewCalculatePriceTW_2;
                $NewTotalDiff_NavTW_2 = $NewTotalDiff_NavTW_2 + $NewTotalDiffNavTW_2;

                $NewTotalDiffCalTW_2 = $NewTotalPriceTW_2 - $CalculatePriceTW_2;
                $NewTotalDiff_CalTW_2 = $NewTotalDiff_CalTW_2 + $NewTotalDiffCalTW_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsTW_2 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsTW_2 = $a7f1fgbu02s_PcsTW_2 + $a7f1fgbu02sPcsTW_2;

                $a7f1fgbu02sPriceTW_2 = $a7f1fgbu02sPcsTW_2 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceTW_2 = $a7f1fgbu02s_PriceTW_2 + $a7f1fgbu02sPriceTW_2;

                $a7f2fgbu10sPcsTW_2 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsTW_2 = $a7f2fgbu10s_PcsTW_2 + $a7f2fgbu10sPcsTW_2;

                $a7f2fgbu10sPriceTW_2 = $a7f2fgbu10sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceTW_2 = $a7f2fgbu10s_PriceTW_2 + $a7f2fgbu10sPriceTW_2;

                $a7f2thbu05sPcsTW_2 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsTW_2 = $a7f2thbu05s_PcsTW_2 + $a7f2thbu05sPcsTW_2;

                $a7f2thbu05sPriceTW_2 = $a7f2thbu05sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceTW_2 = $a7f2thbu05s_PriceTW_2 + $a7f2thbu05sPriceTW_2;

                $a7f2debu10sPcsTW_2 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsTW_2 = $a7f2debu10s_PcsTW_2 + $a7f2debu10sPcsTW_2;

                $a7f2debu10sPriceTW_2 = $a7f2debu10sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceTW_2 = $a7f2debu10s_PriceTW_2 + $a7f2debu10sPriceTW_2;

                $a7f2exbu11sPcsTW_2 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsTW_2 = $a7f2exbu11s_PcsTW_2 + $a7f2exbu11sPcsTW_2;

                $a7f2exbu11sPriceTW_2 = $a7f2exbu11sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceTW_2 = $a7f2exbu11s_PriceTW_2 + $a7f2exbu11sPriceTW_2;

                $a7f2twbu04sPcsTW_2 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsTW_2 = $a7f2twbu04s_PcsTW_2 + $a7f2twbu04sPcsTW_2;

                $a7f2twbu04sPriceTW_2 = $a7f2twbu04sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceTW_2 = $a7f2twbu04s_PriceTW_2 + $a7f2twbu04sPriceTW_2;

                $a7f2twbu07sPcsTW_2 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsTW_2 = $a7f2twbu07s_PcsTW_2 + $a7f2twbu07sPcsTW_2;

                $a7f2twbu07sPriceTW_2 = $a7f2twbu07sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceTW_2 = $a7f2twbu07s_PriceTW_2 + $a7f2twbu07sPriceTW_2;

                $a7f2cebu10sPcsTW_2 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsTW_2 = $a7f2cebu10s_PcsTW_2 + $a7f2cebu10sPcsTW_2;

                $a7f2cebu10sPriceTW_2 = $a7f2cebu10sPcsTW_2 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceTW_2 = $a7f2cebu10s_PriceTW_2 + $a7f2cebu10sPriceTW_2;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsTW_2 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsTW_2 = $a8f1fgbu02s_PcsTW_2 + $a8f1fgbu02sPcsTW_2;

                $a8f1fgbu02sPriceTW_2 = $a8f1fgbu02sPcsTW_2 * $NumberTW_2;
                $a8f1fgbu02s_PriceTW_2 = $a8f1fgbu02s_PriceTW_2 + $a8f1fgbu02sPriceTW_2;

                $a8f2fgbu10sPcsTW_2 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsTW_2 = $a8f2fgbu10s_PcsTW_2 + $a8f2fgbu10sPcsTW_2;

                $a8f2fgbu10sPriceTW_2 = $a8f2fgbu10sPcsTW_2 * $NumberTW_2;
                $a8f2fgbu10s_PriceTW_2 = $a8f2fgbu10s_PriceTW_2 + $a8f2fgbu10sPriceTW_2;

                $a8f2thbu05sPcsTW_2 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsTW_2 = $a8f2thbu05s_PcsTW_2 + $a8f2thbu05sPcsTW_2;

                $a8f2thbu05sPriceTW_2 = $a8f2thbu05sPcsTW_2 * $NumberTW_2;
                $a8f2thbu05s_PriceTW_2 = $a8f2thbu05s_PriceTW_2 + $a8f2thbu05sPriceTW_2;

                $a8f2debu10sPcsTW_2 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsTW_2 = $a8f2debu10s_PcsTW_2 + $a8f2debu10sPcsTW_2;

                $a8f2debu10sPriceTW_2 = $a8f2debu10sPcsTW_2 * $NumberTW_2;
                $a8f2debu10s_PriceTW_2 = $a8f2debu10s_PriceTW_2 + $a8f2debu10sPriceTW_2;

                $a8f2exbu11sPcsTW_2 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsTW_2 = $a8f2exbu11s_PcsTW_2 + $a8f2exbu11sPcsTW_2;

                $a8f2exbu11sPriceTW_2 = $a8f2exbu11sPcsTW_2 * $NumberTW_2;
                $a8f2exbu11s_PriceTW_2 = $a8f2exbu11s_PriceTW_2 + $a8f2exbu11sPriceTW_2;

                $a8f2twbu04sPcsTW_2 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsTW_2 = $a8f2twbu04s_PcsTW_2 + $a8f2twbu04sPcsTW_2;

                $a8f2twbu04sPriceTW_2 = $a8f2twbu04sPcsTW_2 * $NumberTW_2;
                $a8f2twbu04s_PriceTW_2 = $a8f2twbu04s_PriceTW_2 + $a8f2twbu04sPriceTW_2;

                $a8f2twbu07sPcsTW_2 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsTW_2 = $a8f2twbu07s_PcsTW_2 + $a8f2twbu07sPcsTW_2;

                $a8f2twbu07sPriceTW_2 = $a8f2twbu07sPcsTW_2 * $NumberTW_2;
                $a8f2twbu07s_PriceTW_2 = $a8f2twbu07s_PriceTW_2 + $a8f2twbu07sPriceTW_2;

                $a8f2cebu10sPcsTW_2 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsTW_2 = $a8f2cebu10s_PcsTW_2 + $a8f2cebu10sPcsTW_2;

                $a8f2cebu10sPriceTW_2 = $a8f2cebu10sPcsTW_2 * $NumberTW_2;
                $a8f2cebu10s_PriceTW_2 = $a8f2cebu10s_PriceTW_2 + $a8f2cebu10sPriceTW_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsTW_2 = $rowitem->dc1_s_Quantity;
                $DC1_PcsTW_2 = $DC1_PcsTW_2 + $DC1PcsTW_2;

                $DC1PriceTW_2 = $DC1PcsTW_2 * $NumberTW_2;
                $DC1_PriceTW_2 = $DC1_PriceTW_2 + $DC1PriceTW_2;

                $DCPPcsTW_2 = $rowitem->dcp_s_Quantity;
                $DCP_PcsTW_2 = $DCP_PcsTW_2 + $DCPPcsTW_2;

                $DCPPriceTW_2 = $DCPPcsTW_2 * $NumberTW_2;
                $DCP_PriceTW_2 = $DCP_PriceTW_2 + $DCPPriceTW_2;

                $DCYPcsTW_2 = $rowitem->dcy_s_Quantity;
                $DCY_PcsTW_2 = $DCY_PcsTW_2 + $DCYPcsTW_2;

                $DCYPriceTW_2 = $DCYPcsTW_2 * $NumberTW_2;
                $DCY_PriceTW_2 = $DCY_PriceTW_2 + $DCYPriceTW_2;

                $DEXPcsTW_2 = $rowitem->dex_s_Quantity;
                $DEX_PcsTW_2 = $DEX_PcsTW_2 + $DEXPcsTW_2;

                $DEXPriceTW_2 = $DEXPcsTW_2 * $NumberTW_2;
                $DEX_PriceTW_2 = $DEX_PriceTW_2 + $DEXPriceTW_2;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ด้ายไนลอน" && $Code_1[0] === "STW") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberSTW_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberSTW_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSTW_1 = $rowitem->PcsAfter;
                $Pcs_AfterSTW_1 = $Pcs_AfterSTW_1 + $PCSAfterSTW_1;

                $PriceAfterSTW_1 = $rowitem->PriceAfter;
                $Price_AfterSTW_1 = $Price_AfterSTW_1 + $PriceAfterSTW_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSTW_1 = $rowitem->Po_Quantity;
                $Po_PcsSTW_1 = $Po_PcsSTW_1 + $PoPcsSTW_1;

                $PoPriceSTW_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceSTW_1 = $Po_PriceSTW_1 + $PoPriceSTW_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSTW_1 = $rowitem->Neg_Quantity;
                $Neg_PcsSTW_1 = $Neg_PcsSTW_1 + $NegPcsSTW_1;


                $NegPriceSTW_1 = $NumberSTW_1 * $rowitem->Neg_Quantity;
                $Neg_PriceSTW_1 = $Neg_PriceSTW_1 + $NegPriceSTW_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSTW_1 = $PCSAfterSTW_1 + $PoPcsSTW_1 + $NegPcsSTW_1;
                $BackChange_PcsSTW_1 = $BackChange_PcsSTW_1 + $BackChangePcsSTW_1;

                $BackChangePriceSTW_1 = $PriceAfterSTW_1 + $PoPriceSTW_1 + $NegPriceSTW_1;
                $BackChange_PriceSTW_1 = $BackChange_PriceSTW_1 + $BackChangePriceSTW_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSTW_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsSTW_1 = $Purchase_PcsSTW_1 + $PurchasePcsSTW_1;

                $PurchasePriceSTW_1 = $rowitem->purchase_Cost;
                $Purchase_PriceSTW_1 = $Purchase_PriceSTW_1 + $PurchasePriceSTW_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSTW_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSTW_1 = $ReciveTranfer_PcsSTW_1 + $ReciveTranferPcsSTW_1;

                $ReciveTranferPriceSTW_1 = $ReciveTranferPcsSTW_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceSTW_1 = $ReciveTranfer_PriceSTW_1 + $ReciveTranferPriceSTW_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySTW_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSSTW_1 = $ReturnItem_PCSSTW_1 + $ReturnItemQuantitySTW_1;

                $ReturnItemPriceSTW_1 = $ReturnItemQuantitySTW_1 * $NumberSTW_1;
                $ReturnItem_PriceSTW_1 = $ReturnItem_PriceSTW_1 + $ReturnItemPriceSTW_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSTW_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsSTW_1 + $ReturnItemQuantitySTW_1;
                $AllIn_PcsSTW_1 = $AllIn_PcsSTW_1 + $AllInPcsSTW_1;

                $AllInPriceSTW_1 = $PurchasePriceSTW_1 + $ReciveTranferPriceSTW_1 + $ReturnItemPriceSTW_1;
                $AllIn_PriceSTW_1 = $AllIn_PriceSTW_1 + $AllInPriceSTW_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSTW_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsSTW_1 = $SendSale_PcsSTW_1 + $SendSalePcsSTW_1;

                if ($BackChangePcsSTW_1 > 0 && $AllInPcsSTW_1 > 0) {
                    $SendSalePriceSTW_1 = (($AllInPriceSTW_1 + $BackChangePriceSTW_1) / ($AllInPcsSTW_1 + $BackChangePcsSTW_1)) * $SendSalePcsSTW_1;
                    $SendSale_PriceSTW_1 = $SendSale_PriceSTW_1 + $SendSalePriceSTW_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSTW_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSTW_1 = $ReciveTranOut_PcsSTW_1 + $ReciveTranOutPcsSTW_1;

                if ($AllInPcsSTW_1 > 0 && $BackChangePcsSTW_1 > 0) {
                    $ReciveTranOutPriceSTW_1 = (($AllInPriceSTW_1 + $BackChangePriceSTW_1) / ($AllInPcsSTW_1 + $BackChangePcsSTW_1)) * $ReciveTranOutPcsSTW_1;
                    $ReciveTranOut_PriceSTW_1 = $ReciveTranOut_PriceSTW_1 + $ReciveTranOutPriceSTW_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSTW_1 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsSTW_1 = $ReturnStore_PcsSTW_1 + $ReturnStorePcsSTW_1;

                if ($AllInPcsSTW_1 > 0 && $BackChangePcsSTW_1 > 0) {
                    $ReturnStorePriceSTW_1 = (($AllInPriceSTW_1 + $BackChangePriceSTW_1) / ($AllInPcsSTW_1 + $BackChangePcsSTW_1)) * $ReturnStorePcsSTW_1;
                    $ReturnStore_PriceSTW_1 = $ReturnStore_PriceSTW_1 + $ReturnStorePriceSTW_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSTW_1 = $ReturnStorePcsSTW_1 + $ReciveTranOutPcsSTW_1 + $SendSalePcsSTW_1;
                $AllOut_PcsSTW_1 = $AllOut_PcsSTW_1 + $AllOutPcsSTW_1;

                $AllOutPriceSTW_1 = $SendSale_PriceSTW_1 + $ReciveTranOut_PriceSTW_1 + $ReturnStore_PriceSTW_1;
                $AllOut_PriceSTW_1 = $AllOut_PriceSTW_1 + $AllOutPriceSTW_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSTW_1 = $BackChangePcsSTW_1 + $AllInPcsSTW_1 + $AllOutPcsSTW_1;
                $Calculate_PcsSTW_1 = $Calculate_PcsSTW_1 + $CalculatePcsSTW_1;

                $CalculatePriceSTW_1 = $BackChangePriceSTW_1 + $AllInPriceSTW_1 + $AllOutPriceSTW_1;
                $Calculate_PriceSTW_1 = $Calculate_PriceSTW_1 + $CalculatePriceSTW_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSTW_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsSTW_1 = $NewCalculate_PcsSTW_1 + $NewCalculatePcsSTW_1;

                $NewCalculatePriceSTW_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceSTW_1 = $NewCalculate_PriceSTW_1 + $NewCalculatePriceSTW_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSTW_1 = $NewCalculatePcsSTW_1 - $CalculatePcsSTW_1;
                $Diff_PcsSTW_1 = $Diff_PcsSTW_1 + $DiffPcsSTW_1;

                $DiffPriceSTW_1 = $NewCalculatePriceSTW_1 - $CalculatePriceSTW_1;
                $Diff_PriceSTW_1 = $Diff_PriceSTW_1 + $DiffPriceSTW_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSTW_1 = $CalculatePcsSTW_1;
                $NewTotal_PcsSTW_1 = $NewTotal_PcsSTW_1 + $CalculatePcsSTW_1;

                $NewTotalPriceSTW_1 = $NewTotalPcsSTW_1 * $rowitem->PriceAvg;
                $NewTotal_PriceSTW_1 = $NewTotal_PriceSTW_1 + $NewTotalPriceSTW_1;

                $NewTotalDiffNavSTW_1 = $NewTotalPriceSTW_1 - $NewCalculatePriceSTW_1;
                $NewTotalDiff_NavSTW_1 = $NewTotalDiff_NavSTW_1 + $NewTotalDiffNavSTW_1;

                $NewTotalDiffCalSTW_1 = $NewTotalPriceSTW_1 - $CalculatePriceSTW_1;
                $NewTotalDiff_CalSTW_1 = $NewTotalDiff_CalSTW_1 + $NewTotalDiffCalSTW_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSTW_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSTW_1 = $a7f1fgbu02s_PcsSTW_1 + $a7f1fgbu02sPcsSTW_1;

                $a7f1fgbu02sPriceSTW_1 = $a7f1fgbu02sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceSTW_1 = $a7f1fgbu02s_PriceSTW_1 + $a7f1fgbu02sPriceSTW_1;

                $a7f2fgbu10sPcsSTW_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSTW_1 = $a7f2fgbu10s_PcsSTW_1 + $a7f2fgbu10sPcsSTW_1;

                $a7f2fgbu10sPriceSTW_1 = $a7f2fgbu10sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceSTW_1 = $a7f2fgbu10s_PriceSTW_1 + $a7f2fgbu10sPriceSTW_1;

                $a7f2thbu05sPcsSTW_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSTW_1 = $a7f2thbu05s_PcsSTW_1 + $a7f2thbu05sPcsSTW_1;

                $a7f2thbu05sPriceSTW_1 = $a7f2thbu05sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceSTW_1 = $a7f2thbu05s_PriceSTW_1 + $a7f2thbu05sPriceSTW_1;

                $a7f2debu10sPcsSTW_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSTW_1 = $a7f2debu10s_PcsSTW_1 + $a7f2debu10sPcsSTW_1;

                $a7f2debu10sPriceSTW_1 = $a7f2debu10sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceSTW_1 = $a7f2debu10s_PriceSTW_1 + $a7f2debu10sPriceSTW_1;

                $a7f2exbu11sPcsSTW_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSTW_1 = $a7f2exbu11s_PcsSTW_1 + $a7f2exbu11sPcsSTW_1;

                $a7f2exbu11sPriceSTW_1 = $a7f2exbu11sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceSTW_1 = $a7f2exbu11s_PriceSTW_1 + $a7f2exbu11sPriceSTW_1;

                $a7f2twbu04sPcsSTW_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSTW_1 = $a7f2twbu04s_PcsSTW_1 + $a7f2twbu04sPcsSTW_1;

                $a7f2twbu04sPriceSTW_1 = $a7f2twbu04sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceSTW_1 = $a7f2twbu04s_PriceSTW_1 + $a7f2twbu04sPriceSTW_1;

                $a7f2twbu07sPcsSTW_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSTW_1 = $a7f2twbu07s_PcsSTW_1 + $a7f2twbu07sPcsSTW_1;

                $a7f2twbu07sPriceSTW_1 = $a7f2twbu07sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceSTW_1 = $a7f2twbu07s_PriceSTW_1 + $a7f2twbu07sPriceSTW_1;

                $a7f2cebu10sPcsSTW_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSTW_1 = $a7f2cebu10s_PcsSTW_1 + $a7f2cebu10sPcsSTW_1;

                $a7f2cebu10sPriceSTW_1 = $a7f2cebu10sPcsSTW_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceSTW_1 = $a7f2cebu10s_PriceSTW_1 + $a7f2cebu10sPriceSTW_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSTW_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSTW_1 = $a8f1fgbu02s_PcsSTW_1 + $a8f1fgbu02sPcsSTW_1;

                $a8f1fgbu02sPriceSTW_1 = $a8f1fgbu02sPcsSTW_1 * $NumberSTW_1;
                $a8f1fgbu02s_PriceSTW_1 = $a8f1fgbu02s_PriceSTW_1 + $a8f1fgbu02sPriceSTW_1;

                $a8f2fgbu10sPcsSTW_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSTW_1 = $a8f2fgbu10s_PcsSTW_1 + $a8f2fgbu10sPcsSTW_1;

                $a8f2fgbu10sPriceSTW_1 = $a8f2fgbu10sPcsSTW_1 * $NumberSTW_1;
                $a8f2fgbu10s_PriceSTW_1 = $a8f2fgbu10s_PriceSTW_1 + $a8f2fgbu10sPriceSTW_1;

                $a8f2thbu05sPcsSTW_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSTW_1 = $a8f2thbu05s_PcsSTW_1 + $a8f2thbu05sPcsSTW_1;

                $a8f2thbu05sPriceSTW_1 = $a8f2thbu05sPcsSTW_1 * $NumberSTW_1;
                $a8f2thbu05s_PriceSTW_1 = $a8f2thbu05s_PriceSTW_1 + $a8f2thbu05sPriceSTW_1;

                $a8f2debu10sPcsSTW_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSTW_1 = $a8f2debu10s_PcsSTW_1 + $a8f2debu10sPcsSTW_1;

                $a8f2debu10sPriceSTW_1 = $a8f2debu10sPcsSTW_1 * $NumberSTW_1;
                $a8f2debu10s_PriceSTW_1 = $a8f2debu10s_PriceSTW_1 + $a8f2debu10sPriceSTW_1;

                $a8f2exbu11sPcsSTW_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSTW_1 = $a8f2exbu11s_PcsSTW_1 + $a8f2exbu11sPcsSTW_1;

                $a8f2exbu11sPriceSTW_1 = $a8f2exbu11sPcsSTW_1 * $NumberSTW_1;
                $a8f2exbu11s_PriceSTW_1 = $a8f2exbu11s_PriceSTW_1 + $a8f2exbu11sPriceSTW_1;

                $a8f2twbu04sPcsSTW_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSTW_1 = $a8f2twbu04s_PcsSTW_1 + $a8f2twbu04sPcsSTW_1;

                $a8f2twbu04sPriceSTW_1 = $a8f2twbu04sPcsSTW_1 * $NumberSTW_1;
                $a8f2twbu04s_PriceSTW_1 = $a8f2twbu04s_PriceSTW_1 + $a8f2twbu04sPriceSTW_1;

                $a8f2twbu07sPcsSTW_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSTW_1 = $a8f2twbu07s_PcsSTW_1 + $a8f2twbu07sPcsSTW_1;

                $a8f2twbu07sPriceSTW_1 = $a8f2twbu07sPcsSTW_1 * $NumberSTW_1;
                $a8f2twbu07s_PriceSTW_1 = $a8f2twbu07s_PriceSTW_1 + $a8f2twbu07sPriceSTW_1;

                $a8f2cebu10sPcsSTW_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSTW_1 = $a8f2cebu10s_PcsSTW_1 + $a8f2cebu10sPcsSTW_1;

                $a8f2cebu10sPriceSTW_1 = $a8f2cebu10sPcsSTW_1 * $NumberSTW_1;
                $a8f2cebu10s_PriceSTW_1 = $a8f2cebu10s_PriceSTW_1 + $a8f2cebu10sPriceSTW_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSTW_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsSTW_1 = $DC1_PcsSTW_1 + $DC1PcsSTW_1;

                $DC1PriceSTW_1 = $DC1PcsSTW_1 * $NumberSTW_1;
                $DC1_PriceSTW_1 = $DC1_PriceSTW_1 + $DC1PriceSTW_1;

                $DCPPcsSTW_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsSTW_1 = $DCP_PcsSTW_1 + $DCPPcsSTW_1;

                $DCPPriceSTW_1 = $DCPPcsSTW_1 * $NumberSTW_1;
                $DCP_PriceSTW_1 = $DCP_PriceSTW_1 + $DCPPriceSTW_1;

                $DCYPcsSTW_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsSTW_1 = $DCY_PcsSTW_1 + $DCYPcsSTW_1;

                $DCYPriceSTW_1 = $DCYPcsSTW_1 * $NumberSTW_1;
                $DCY_PriceSTW_1 = $DCY_PriceSTW_1 + $DCYPriceSTW_1;

                $DEXPcsSTW_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsSTW_1 = $DEX_PcsSTW_1 + $DEXPcsSTW_1;

                $DEXPriceSTW_1 = $DEXPcsSTW_1 * $NumberSTW_1;
                $DEX_PriceSTW_1 = $DEX_PriceSTW_1 + $DEXPriceSTW_1;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ด้ายโพลี" && $Code_1[0] === "STW") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberSTW_2 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberSTW_2 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSTW_2 = $rowitem->PcsAfter;
                $Pcs_AfterSTW_2 = $Pcs_AfterSTW_2 + $PCSAfterSTW_2;

                $PriceAfterSTW_2 = $rowitem->PriceAfter;
                $Price_AfterSTW_2 = $Price_AfterSTW_2 + $PriceAfterSTW_2;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSTW_2 = $rowitem->Po_Quantity;
                $Po_PcsSTW_2 = $Po_PcsSTW_2 + $PoPcsSTW_2;

                $PoPriceSTW_2 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceSTW_2 = $Po_PriceSTW_2 + $PoPriceSTW_2;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSTW_2 = $rowitem->Neg_Quantity;
                $Neg_PcsSTW_2 = $Neg_PcsSTW_2 + $NegPcsSTW_2;


                $NegPriceSTW_2 = $NumberSTW_2 * $rowitem->Neg_Quantity;
                $Neg_PriceSTW_2 = $Neg_PriceSTW_2 + $NegPriceSTW_2;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSTW_2 = $PCSAfterSTW_2 + $PoPcsSTW_2 + $NegPcsSTW_2;
                $BackChange_PcsSTW_2 = $BackChange_PcsSTW_2 + $BackChangePcsSTW_2;

                $BackChangePriceSTW_2 = $PriceAfterSTW_2 + $PoPriceSTW_2 + $NegPriceSTW_2;
                $BackChange_PriceSTW_2 = $BackChange_PriceSTW_2 + $BackChangePriceSTW_2;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSTW_2 = $rowitem->purchase_Quantity;
                $Purchase_PcsSTW_2 = $Purchase_PcsSTW_2 + $PurchasePcsSTW_2;

                $PurchasePriceSTW_2 = $rowitem->purchase_Cost;
                $Purchase_PriceSTW_2 = $Purchase_PriceSTW_2 + $PurchasePriceSTW_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSTW_2 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSTW_2 = $ReciveTranfer_PcsSTW_2 + $ReciveTranferPcsSTW_2;

                $ReciveTranferPriceSTW_2 = $ReciveTranferPcsSTW_2 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceSTW_2 = $ReciveTranfer_PriceSTW_2 + $ReciveTranferPriceSTW_2;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySTW_2 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSSTW_2 = $ReturnItem_PCSSTW_2 + $ReturnItemQuantitySTW_2;

                $ReturnItemPriceSTW_2 = $ReturnItemQuantitySTW_2 * $NumberSTW_2;
                $ReturnItem_PriceSTW_2 = $ReturnItem_PriceSTW_2 + $ReturnItemPriceSTW_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSTW_2 = $rowitem->purchase_Quantity + $ReciveTranferPcsSTW_2 + $ReturnItemQuantitySTW_2;
                $AllIn_PcsSTW_2 = $AllIn_PcsSTW_2 + $AllInPcsSTW_2;

                $AllInPriceSTW_2 = $PurchasePriceSTW_2 + $ReciveTranferPriceSTW_2 + $ReturnItemPriceSTW_2;
                $AllIn_PriceSTW_2 = $AllIn_PriceSTW_2 + $AllInPriceSTW_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSTW_2 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsSTW_2 = $SendSale_PcsSTW_2 + $SendSalePcsSTW_2;

                if ($BackChangePcsSTW_2 > 0 && $AllInPcsSTW_2 > 0) {
                    $SendSalePriceSTW_2 = (($AllInPriceSTW_2 + $BackChangePriceSTW_2) / ($AllInPcsSTW_2 + $BackChangePcsSTW_2)) * $SendSalePcsSTW_2;
                    $SendSale_PriceSTW_2 = $SendSale_PriceSTW_2 + $SendSalePriceSTW_2;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSTW_2 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSTW_2 = $ReciveTranOut_PcsSTW_2 + $ReciveTranOutPcsSTW_2;

                if ($AllInPcsSTW_2 > 0 && $BackChangePcsSTW_2 > 0) {
                    $ReciveTranOutPriceSTW_2 = (($AllInPriceSTW_2 + $BackChangePriceSTW_2) / ($AllInPcsSTW_2 + $BackChangePcsSTW_2)) * $ReciveTranOutPcsSTW_2;
                    $ReciveTranOut_PriceSTW_2 = $ReciveTranOut_PriceSTW_2 + $ReciveTranOutPriceSTW_2;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSTW_2 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsSTW_2 = $ReturnStore_PcsSTW_2 + $ReturnStorePcsSTW_2;

                if ($AllInPcsSTW_2 > 0 && $BackChangePcsSTW_2 > 0) {
                    $ReturnStorePriceSTW_2 = (($AllInPriceSTW_2 + $BackChangePriceSTW_2) / ($AllInPcsSTW_2 + $BackChangePcsSTW_2)) * $ReturnStorePcsSTW_2;
                    $ReturnStore_PriceSTW_2 = $ReturnStore_PriceSTW_2 + $ReturnStorePriceSTW_2;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSTW_2 = $ReturnStorePcsSTW_2 + $ReciveTranOutPcsSTW_2 + $SendSalePcsSTW_2;
                $AllOut_PcsSTW_2 = $AllOut_PcsSTW_2 + $AllOutPcsSTW_2;

                $AllOutPriceSTW_2 = $SendSale_PriceSTW_2 + $ReciveTranOut_PriceSTW_2 + $ReturnStore_PriceSTW_2;
                $AllOut_PriceSTW_2 = $AllOut_PriceSTW_2 + $AllOutPriceSTW_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSTW_2 = $BackChangePcsSTW_2 + $AllInPcsSTW_2 + $AllOutPcsSTW_2;
                $Calculate_PcsSTW_2 = $Calculate_PcsSTW_2 + $CalculatePcsSTW_2;

                $CalculatePriceSTW_2 = $BackChangePriceSTW_2 + $AllInPriceSTW_2 + $AllOutPriceSTW_2;
                $Calculate_PriceSTW_2 = $Calculate_PriceSTW_2 + $CalculatePriceSTW_2;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSTW_2 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsSTW_2 = $NewCalculate_PcsSTW_2 + $NewCalculatePcsSTW_2;

                $NewCalculatePriceSTW_2 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceSTW_2 = $NewCalculate_PriceSTW_2 + $NewCalculatePriceSTW_2;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSTW_2 = $NewCalculatePcsSTW_2 - $CalculatePcsSTW_2;
                $Diff_PcsSTW_2 = $Diff_PcsSTW_2 + $DiffPcsSTW_2;

                $DiffPriceSTW_2 = $NewCalculatePriceSTW_2 - $CalculatePriceSTW_2;
                $Diff_PriceSTW_2 = $Diff_PriceSTW_2 + $DiffPriceSTW_2;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSTW_2 = $CalculatePcsSTW_2;
                $NewTotal_PcsSTW_2 = $NewTotal_PcsSTW_2 + $CalculatePcsSTW_2;

                $NewTotalPriceSTW_2 = $NewTotalPcsSTW_2 * $rowitem->PriceAvg;
                $NewTotal_PriceSTW_2 = $NewTotal_PriceSTW_2 + $NewTotalPriceSTW_2;

                $NewTotalDiffNavSTW_2 = $NewTotalPriceSTW_2 - $NewCalculatePriceSTW_2;
                $NewTotalDiff_NavSTW_2 = $NewTotalDiff_NavSTW_2 + $NewTotalDiffNavSTW_2;

                $NewTotalDiffCalSTW_2 = $NewTotalPriceSTW_2 - $CalculatePriceSTW_2;
                $NewTotalDiff_CalSTW_2 = $NewTotalDiff_CalSTW_2 + $NewTotalDiffCalSTW_2;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSTW_2 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSTW_2 = $a7f1fgbu02s_PcsSTW_2 + $a7f1fgbu02sPcsSTW_2;

                $a7f1fgbu02sPriceSTW_2 = $a7f1fgbu02sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceSTW_2 = $a7f1fgbu02s_PriceSTW_2 + $a7f1fgbu02sPriceSTW_2;

                $a7f2fgbu10sPcsSTW_2 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSTW_2 = $a7f2fgbu10s_PcsSTW_2 + $a7f2fgbu10sPcsSTW_2;

                $a7f2fgbu10sPriceSTW_2 = $a7f2fgbu10sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceSTW_2 = $a7f2fgbu10s_PriceSTW_2 + $a7f2fgbu10sPriceSTW_2;

                $a7f2thbu05sPcsSTW_2 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSTW_2 = $a7f2thbu05s_PcsSTW_2 + $a7f2thbu05sPcsSTW_2;

                $a7f2thbu05sPriceSTW_2 = $a7f2thbu05sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceSTW_2 = $a7f2thbu05s_PriceSTW_2 + $a7f2thbu05sPriceSTW_2;

                $a7f2debu10sPcsSTW_2 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSTW_2 = $a7f2debu10s_PcsSTW_2 + $a7f2debu10sPcsSTW_2;

                $a7f2debu10sPriceSTW_2 = $a7f2debu10sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceSTW_2 = $a7f2debu10s_PriceSTW_2 + $a7f2debu10sPriceSTW_2;

                $a7f2exbu11sPcsSTW_2 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSTW_2 = $a7f2exbu11s_PcsSTW_2 + $a7f2exbu11sPcsSTW_2;

                $a7f2exbu11sPriceSTW_2 = $a7f2exbu11sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceSTW_2 = $a7f2exbu11s_PriceSTW_2 + $a7f2exbu11sPriceSTW_2;

                $a7f2twbu04sPcsSTW_2 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSTW_2 = $a7f2twbu04s_PcsSTW_2 + $a7f2twbu04sPcsSTW_2;

                $a7f2twbu04sPriceSTW_2 = $a7f2twbu04sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceSTW_2 = $a7f2twbu04s_PriceSTW_2 + $a7f2twbu04sPriceSTW_2;

                $a7f2twbu07sPcsSTW_2 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSTW_2 = $a7f2twbu07s_PcsSTW_2 + $a7f2twbu07sPcsSTW_2;

                $a7f2twbu07sPriceSTW_2 = $a7f2twbu07sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceSTW_2 = $a7f2twbu07s_PriceSTW_2 + $a7f2twbu07sPriceSTW_2;

                $a7f2cebu10sPcsSTW_2 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSTW_2 = $a7f2cebu10s_PcsSTW_2 + $a7f2cebu10sPcsSTW_2;

                $a7f2cebu10sPriceSTW_2 = $a7f2cebu10sPcsSTW_2 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceSTW_2 = $a7f2cebu10s_PriceSTW_2 + $a7f2cebu10sPriceSTW_2;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSTW_2 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSTW_2 = $a8f1fgbu02s_PcsSTW_2 + $a8f1fgbu02sPcsSTW_2;

                $a8f1fgbu02sPriceSTW_2 = $a8f1fgbu02sPcsSTW_2 * $NumberSTW_2;
                $a8f1fgbu02s_PriceSTW_2 = $a8f1fgbu02s_PriceSTW_2 + $a8f1fgbu02sPriceSTW_2;

                $a8f2fgbu10sPcsSTW_2 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSTW_2 = $a8f2fgbu10s_PcsSTW_2 + $a8f2fgbu10sPcsSTW_2;

                $a8f2fgbu10sPriceSTW_2 = $a8f2fgbu10sPcsSTW_2 * $NumberSTW_2;
                $a8f2fgbu10s_PriceSTW_2 = $a8f2fgbu10s_PriceSTW_2 + $a8f2fgbu10sPriceSTW_2;

                $a8f2thbu05sPcsSTW_2 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSTW_2 = $a8f2thbu05s_PcsSTW_2 + $a8f2thbu05sPcsSTW_2;

                $a8f2thbu05sPriceSTW_2 = $a8f2thbu05sPcsSTW_2 * $NumberSTW_2;
                $a8f2thbu05s_PriceSTW_2 = $a8f2thbu05s_PriceSTW_2 + $a8f2thbu05sPriceSTW_2;

                $a8f2debu10sPcsSTW_2 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSTW_2 = $a8f2debu10s_PcsSTW_2 + $a8f2debu10sPcsSTW_2;

                $a8f2debu10sPriceSTW_2 = $a8f2debu10sPcsSTW_2 * $NumberSTW_2;
                $a8f2debu10s_PriceSTW_2 = $a8f2debu10s_PriceSTW_2 + $a8f2debu10sPriceSTW_2;

                $a8f2exbu11sPcsSTW_2 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSTW_2 = $a8f2exbu11s_PcsSTW_2 + $a8f2exbu11sPcsSTW_2;

                $a8f2exbu11sPriceSTW_2 = $a8f2exbu11sPcsSTW_2 * $NumberSTW_2;
                $a8f2exbu11s_PriceSTW_2 = $a8f2exbu11s_PriceSTW_2 + $a8f2exbu11sPriceSTW_2;

                $a8f2twbu04sPcsSTW_2 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSTW_2 = $a8f2twbu04s_PcsSTW_2 + $a8f2twbu04sPcsSTW_2;

                $a8f2twbu04sPriceSTW_2 = $a8f2twbu04sPcsSTW_2 * $NumberSTW_2;
                $a8f2twbu04s_PriceSTW_2 = $a8f2twbu04s_PriceSTW_2 + $a8f2twbu04sPriceSTW_2;

                $a8f2twbu07sPcsSTW_2 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSTW_2 = $a8f2twbu07s_PcsSTW_2 + $a8f2twbu07sPcsSTW_2;

                $a8f2twbu07sPriceSTW_2 = $a8f2twbu07sPcsSTW_2 * $NumberSTW_2;
                $a8f2twbu07s_PriceSTW_2 = $a8f2twbu07s_PriceSTW_2 + $a8f2twbu07sPriceSTW_2;

                $a8f2cebu10sPcsSTW_2 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSTW_2 = $a8f2cebu10s_PcsSTW_2 + $a8f2cebu10sPcsSTW_2;

                $a8f2cebu10sPriceSTW_2 = $a8f2cebu10sPcsSTW_2 * $NumberSTW_2;
                $a8f2cebu10s_PriceSTW_2 = $a8f2cebu10s_PriceSTW_2 + $a8f2cebu10sPriceSTW_2;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSTW_2 = $rowitem->dc1_s_Quantity;
                $DC1_PcsSTW_2 = $DC1_PcsSTW_2 + $DC1PcsSTW_2;

                $DC1PriceSTW_2 = $DC1PcsSTW_2 * $NumberSTW_2;
                $DC1_PriceSTW_2 = $DC1_PriceSTW_2 + $DC1PriceSTW_2;

                $DCPPcsSTW_2 = $rowitem->dcp_s_Quantity;
                $DCP_PcsSTW_2 = $DCP_PcsSTW_2 + $DCPPcsSTW_2;

                $DCPPriceSTW_2 = $DCPPcsSTW_2 * $NumberSTW_2;
                $DCP_PriceSTW_2 = $DCP_PriceSTW_2 + $DCPPriceSTW_2;

                $DCYPcsSTW_2 = $rowitem->dcy_s_Quantity;
                $DCY_PcsSTW_2 = $DCY_PcsSTW_2 + $DCYPcsSTW_2;

                $DCYPriceSTW_2 = $DCYPcsSTW_2 * $NumberSTW_2;
                $DCY_PriceSTW_2 = $DCY_PriceSTW_2 + $DCYPriceSTW_2;

                $DEXPcsSTW_2 = $rowitem->dex_s_Quantity;
                $DEX_PcsSTW_2 = $DEX_PcsSTW_2 + $DEXPcsSTW_2;

                $DEXPriceSTW_2 = $DEXPcsSTW_2 * $NumberSTW_2;
                $DEX_PriceSTW_2 = $DEX_PriceSTW_2 + $DEXPriceSTW_2;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ด้ายโมโน" && $Code_1[0] === "LN") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberLN_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberLN_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterLN_1 = $rowitem->PcsAfter;
                $Pcs_AfterLN_1 = $Pcs_AfterLN_1 + $PCSAfterLN_1;

                $PriceAfterLN_1 = $rowitem->PriceAfter;
                $Price_AfterLN_1 = $Price_AfterLN_1 + $PriceAfterLN_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsLN_1 = $rowitem->Po_Quantity;
                $Po_PcsLN_1 = $Po_PcsLN_1 + $PoPcsLN_1;

                $PoPriceLN_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceLN_1 = $Po_PriceLN_1 + $PoPriceLN_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsLN_1 = $rowitem->Neg_Quantity;
                $Neg_PcsLN_1 = $Neg_PcsLN_1 + $NegPcsLN_1;


                $NegPriceLN_1 = $NumberLN_1 * $rowitem->Neg_Quantity;
                $Neg_PriceLN_1 = $Neg_PriceLN_1 + $NegPriceLN_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsLN_1 = $PCSAfterLN_1 + $PoPcsLN_1 + $NegPcsLN_1;
                $BackChange_PcsLN_1 = $BackChange_PcsLN_1 + $BackChangePcsLN_1;

                $BackChangePriceLN_1 = $PriceAfterLN_1 + $PoPriceLN_1 + $NegPriceLN_1;
                $BackChange_PriceLN_1 = $BackChange_PriceLN_1 + $BackChangePriceLN_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsLN_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsLN_1 = $Purchase_PcsLN_1 + $PurchasePcsLN_1;

                $PurchasePriceLN_1 = $rowitem->purchase_Cost;
                $Purchase_PriceLN_1 = $Purchase_PriceLN_1 + $PurchasePriceLN_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsLN_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsLN_1 = $ReciveTranfer_PcsLN_1 + $ReciveTranferPcsLN_1;

                $ReciveTranferPriceLN_1 = $ReciveTranferPcsLN_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceLN_1 = $ReciveTranfer_PriceLN_1 + $ReciveTranferPriceLN_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityLN_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSLN_1 = $ReturnItem_PCSLN_1 + $ReturnItemQuantityLN_1;

                $ReturnItemPriceLN_1 = $ReturnItemQuantityLN_1 * $NumberLN_1;
                $ReturnItem_PriceLN_1 = $ReturnItem_PriceLN_1 + $ReturnItemPriceLN_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsLN_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsLN_1 + $ReturnItemQuantityLN_1;
                $AllIn_PcsLN_1 = $AllIn_PcsLN_1 + $AllInPcsLN_1;

                $AllInPriceLN_1 = $PurchasePriceLN_1 + $ReciveTranferPriceLN_1 + $ReturnItemPriceLN_1;
                $AllIn_PriceLN_1 = $AllIn_PriceLN_1 + $AllInPriceLN_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsLN_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsLN_1 = $SendSale_PcsLN_1 + $SendSalePcsLN_1;

                if ($BackChangePcsLN_1 > 0 && $AllInPcsLN_1 > 0) {
                    $SendSalePriceLN_1 = (($AllInPriceLN_1 + $BackChangePriceLN_1) / ($AllInPcsLN_1 + $BackChangePcsLN_1)) * $SendSalePcsLN_1;
                    $SendSale_PriceLN_1 = $SendSale_PriceLN_1 + $SendSalePriceLN_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsLN_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsLN_1 = $ReciveTranOut_PcsLN_1 + $ReciveTranOutPcsLN_1;

                if ($AllInPcsLN_1 > 0 && $BackChangePcsLN_1 > 0) {
                    $ReciveTranOutPriceLN_1 = (($AllInPriceLN_1 + $BackChangePriceLN_1) / ($AllInPcsLN_1 + $BackChangePcsLN_1)) * $ReciveTranOutPcsLN_1;
                    $ReciveTranOut_PriceLN_1 = $ReciveTranOut_PriceLN_1 + $ReciveTranOutPriceLN_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsLN_1 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsLN_1 = $ReturnStore_PcsLN_1 + $ReturnStorePcsLN_1;

                if ($AllInPcsLN_1 > 0 && $BackChangePcsLN_1 > 0) {
                    $ReturnStorePriceLN_1 = (($AllInPriceLN_1 + $BackChangePriceLN_1) / ($AllInPcsLN_1 + $BackChangePcsLN_1)) * $ReturnStorePcsLN_1;
                    $ReturnStore_PriceLN_1 = $ReturnStore_PriceLN_1 + $ReturnStorePriceLN_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsLN_1 = $ReturnStorePcsLN_1 + $ReciveTranOutPcsLN_1 + $SendSalePcsLN_1;
                $AllOut_PcsLN_1 = $AllOut_PcsLN_1 + $AllOutPcsLN_1;

                $AllOutPriceLN_1 = $SendSale_PriceLN_1 + $ReciveTranOut_PriceLN_1 + $ReturnStore_PriceLN_1;
                $AllOut_PriceLN_1 = $AllOut_PriceLN_1 + $AllOutPriceLN_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsLN_1 = $BackChangePcsLN_1 + $AllInPcsLN_1 + $AllOutPcsLN_1;
                $Calculate_PcsLN_1 = $Calculate_PcsLN_1 + $CalculatePcsLN_1;

                $CalculatePriceLN_1 = $BackChangePriceLN_1 + $AllInPriceLN_1 + $AllOutPriceLN_1;
                $Calculate_PriceLN_1 = $Calculate_PriceLN_1 + $CalculatePriceLN_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsLN_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsLN_1 = $NewCalculate_PcsLN_1 + $NewCalculatePcsLN_1;

                $NewCalculatePriceLN_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceLN_1 = $NewCalculate_PriceLN_1 + $NewCalculatePriceLN_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsLN_1 = $NewCalculatePcsLN_1 - $CalculatePcsLN_1;
                $Diff_PcsLN_1 = $Diff_PcsLN_1 + $DiffPcsLN_1;

                $DiffPriceLN_1 = $NewCalculatePriceLN_1 - $CalculatePriceLN_1;
                $Diff_PriceLN_1 = $Diff_PriceLN_1 + $DiffPriceLN_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsLN_1 = $CalculatePcsLN_1;
                $NewTotal_PcsLN_1 = $NewTotal_PcsLN_1 + $CalculatePcsLN_1;

                $NewTotalPriceLN_1 = $NewTotalPcsLN_1 * $rowitem->PriceAvg;
                $NewTotal_PriceLN_1 = $NewTotal_PriceLN_1 + $NewTotalPriceLN_1;

                $NewTotalDiffNavLN_1 = $NewTotalPriceLN_1 - $NewCalculatePriceLN_1;
                $NewTotalDiff_NavLN_1 = $NewTotalDiff_NavLN_1 + $NewTotalDiffNavLN_1;

                $NewTotalDiffCalLN_1 = $NewTotalPriceLN_1 - $CalculatePriceLN_1;
                $NewTotalDiff_CalLN_1 = $NewTotalDiff_CalLN_1 + $NewTotalDiffCalLN_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsLN_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsLN_1 = $a7f1fgbu02s_PcsLN_1 + $a7f1fgbu02sPcsLN_1;

                $a7f1fgbu02sPriceLN_1 = $a7f1fgbu02sPcsLN_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceLN_1 = $a7f1fgbu02s_PriceLN_1 + $a7f1fgbu02sPriceLN_1;

                $a7f2fgbu10sPcsLN_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsLN_1 = $a7f2fgbu10s_PcsLN_1 + $a7f2fgbu10sPcsLN_1;

                $a7f2fgbu10sPriceLN_1 = $a7f2fgbu10sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceLN_1 = $a7f2fgbu10s_PriceLN_1 + $a7f2fgbu10sPriceLN_1;

                $a7f2thbu05sPcsLN_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsLN_1 = $a7f2thbu05s_PcsLN_1 + $a7f2thbu05sPcsLN_1;

                $a7f2thbu05sPriceLN_1 = $a7f2thbu05sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceLN_1 = $a7f2thbu05s_PriceLN_1 + $a7f2thbu05sPriceLN_1;

                $a7f2debu10sPcsLN_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsLN_1 = $a7f2debu10s_PcsLN_1 + $a7f2debu10sPcsLN_1;

                $a7f2debu10sPriceLN_1 = $a7f2debu10sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceLN_1 = $a7f2debu10s_PriceLN_1 + $a7f2debu10sPriceLN_1;

                $a7f2exbu11sPcsLN_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsLN_1 = $a7f2exbu11s_PcsLN_1 + $a7f2exbu11sPcsLN_1;

                $a7f2exbu11sPriceLN_1 = $a7f2exbu11sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceLN_1 = $a7f2exbu11s_PriceLN_1 + $a7f2exbu11sPriceLN_1;

                $a7f2twbu04sPcsLN_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsLN_1 = $a7f2twbu04s_PcsLN_1 + $a7f2twbu04sPcsLN_1;

                $a7f2twbu04sPriceLN_1 = $a7f2twbu04sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceLN_1 = $a7f2twbu04s_PriceLN_1 + $a7f2twbu04sPriceLN_1;

                $a7f2twbu07sPcsLN_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsLN_1 = $a7f2twbu07s_PcsLN_1 + $a7f2twbu07sPcsLN_1;

                $a7f2twbu07sPriceLN_1 = $a7f2twbu07sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceLN_1 = $a7f2twbu07s_PriceLN_1 + $a7f2twbu07sPriceLN_1;

                $a7f2cebu10sPcsLN_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsLN_1 = $a7f2cebu10s_PcsLN_1 + $a7f2cebu10sPcsLN_1;

                $a7f2cebu10sPriceLN_1 = $a7f2cebu10sPcsLN_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceLN_1 = $a7f2cebu10s_PriceLN_1 + $a7f2cebu10sPriceLN_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsLN_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsLN_1 = $a8f1fgbu02s_PcsLN_1 + $a8f1fgbu02sPcsLN_1;

                $a8f1fgbu02sPriceLN_1 = $a8f1fgbu02sPcsLN_1 * $NumberLN_1;
                $a8f1fgbu02s_PriceLN_1 = $a8f1fgbu02s_PriceLN_1 + $a8f1fgbu02sPriceLN_1;

                $a8f2fgbu10sPcsLN_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsLN_1 = $a8f2fgbu10s_PcsLN_1 + $a8f2fgbu10sPcsLN_1;

                $a8f2fgbu10sPriceLN_1 = $a8f2fgbu10sPcsLN_1 * $NumberLN_1;
                $a8f2fgbu10s_PriceLN_1 = $a8f2fgbu10s_PriceLN_1 + $a8f2fgbu10sPriceLN_1;

                $a8f2thbu05sPcsLN_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsLN_1 = $a8f2thbu05s_PcsLN_1 + $a8f2thbu05sPcsLN_1;

                $a8f2thbu05sPriceLN_1 = $a8f2thbu05sPcsLN_1 * $NumberLN_1;
                $a8f2thbu05s_PriceLN_1 = $a8f2thbu05s_PriceLN_1 + $a8f2thbu05sPriceLN_1;

                $a8f2debu10sPcsLN_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsLN_1 = $a8f2debu10s_PcsLN_1 + $a8f2debu10sPcsLN_1;

                $a8f2debu10sPriceLN_1 = $a8f2debu10sPcsLN_1 * $NumberLN_1;
                $a8f2debu10s_PriceLN_1 = $a8f2debu10s_PriceLN_1 + $a8f2debu10sPriceLN_1;

                $a8f2exbu11sPcsLN_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsLN_1 = $a8f2exbu11s_PcsLN_1 + $a8f2exbu11sPcsLN_1;

                $a8f2exbu11sPriceLN_1 = $a8f2exbu11sPcsLN_1 * $NumberLN_1;
                $a8f2exbu11s_PriceLN_1 = $a8f2exbu11s_PriceLN_1 + $a8f2exbu11sPriceLN_1;

                $a8f2twbu04sPcsLN_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsLN_1 = $a8f2twbu04s_PcsLN_1 + $a8f2twbu04sPcsLN_1;

                $a8f2twbu04sPriceLN_1 = $a8f2twbu04sPcsLN_1 * $NumberLN_1;
                $a8f2twbu04s_PriceLN_1 = $a8f2twbu04s_PriceLN_1 + $a8f2twbu04sPriceLN_1;

                $a8f2twbu07sPcsLN_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsLN_1 = $a8f2twbu07s_PcsLN_1 + $a8f2twbu07sPcsLN_1;

                $a8f2twbu07sPriceLN_1 = $a8f2twbu07sPcsLN_1 * $NumberLN_1;
                $a8f2twbu07s_PriceLN_1 = $a8f2twbu07s_PriceLN_1 + $a8f2twbu07sPriceLN_1;

                $a8f2cebu10sPcsLN_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsLN_1 = $a8f2cebu10s_PcsLN_1 + $a8f2cebu10sPcsLN_1;

                $a8f2cebu10sPriceLN_1 = $a8f2cebu10sPcsLN_1 * $NumberLN_1;
                $a8f2cebu10s_PriceLN_1 = $a8f2cebu10s_PriceLN_1 + $a8f2cebu10sPriceLN_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsLN_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsLN_1 = $DC1_PcsLN_1 + $DC1PcsLN_1;

                $DC1PriceLN_1 = $DC1PcsLN_1 * $NumberLN_1;
                $DC1_PriceLN_1 = $DC1_PriceLN_1 + $DC1PriceLN_1;

                $DCPPcsLN_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsLN_1 = $DCP_PcsLN_1 + $DCPPcsLN_1;

                $DCPPriceLN_1 = $DCPPcsLN_1 * $NumberLN_1;
                $DCP_PriceLN_1 = $DCP_PriceLN_1 + $DCPPriceLN_1;

                $DCYPcsLN_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsLN_1 = $DCY_PcsLN_1 + $DCYPcsLN_1;

                $DCYPriceLN_1 = $DCYPcsLN_1 * $NumberLN_1;
                $DCY_PriceLN_1 = $DCY_PriceLN_1 + $DCYPriceLN_1;

                $DEXPcsLN_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsLN_1 = $DEX_PcsLN_1 + $DEXPcsLN_1;

                $DEXPriceLN_1 = $DEXPcsLN_1 * $NumberLN_1;
                $DEX_PriceLN_1 = $DEX_PriceLN_1 + $DEXPriceLN_1;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            elseif ($rowitem->Category === "ด้ายโมโน" && $Code_1[0] === "SLN") {
                if ($rowitem->PcsAfter > 0 && $rowitem->PriceAfter > 0) {
                    $NumberSLN_1 = ($rowitem->PriceAfter / $rowitem->PcsAfter);
                } else {
                    $NumberSLN_1 = 0;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSLN_1 = $rowitem->PcsAfter;
                $Pcs_AfterSLN_1 = $Pcs_AfterSLN_1 + $PCSAfterSLN_1;

                $PriceAfterSLN_1 = $rowitem->PriceAfter;
                $Price_AfterSLN_1 = $Price_AfterSLN_1 + $PriceAfterSLN_1;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSLN_1 = $rowitem->Po_Quantity;
                $Po_PcsSLN_1 = $Po_PcsSLN_1 + $PoPcsSLN_1;

                $PoPriceSLN_1 = $rowitem->PriceAvg * $rowitem->Po_Quantity;
                $Po_PriceSLN_1 = $Po_PriceSLN_1 + $PoPriceSLN_1;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSLN_1 = $rowitem->Neg_Quantity;
                $Neg_PcsSLN_1 = $Neg_PcsSLN_1 + $NegPcsSLN_1;


                $NegPriceSLN_1 = $NumberSLN_1 * $rowitem->Neg_Quantity;
                $Neg_PriceSLN_1 = $Neg_PriceSLN_1 + $NegPriceSLN_1;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSLN_1 = $PCSAfterSLN_1 + $PoPcsSLN_1 + $NegPcsSLN_1;
                $BackChange_PcsSLN_1 = $BackChange_PcsSLN_1 + $BackChangePcsSLN_1;

                $BackChangePriceSLN_1 = $PriceAfterSLN_1 + $PoPriceSLN_1 + $NegPriceSLN_1;
                $BackChange_PriceSLN_1 = $BackChange_PriceSLN_1 + $BackChangePriceSLN_1;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSLN_1 = $rowitem->purchase_Quantity;
                $Purchase_PcsSLN_1 = $Purchase_PcsSLN_1 + $PurchasePcsSLN_1;

                $PurchasePriceSLN_1 = $rowitem->purchase_Cost;
                $Purchase_PriceSLN_1 = $Purchase_PriceSLN_1 + $PurchasePriceSLN_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSLN_1 = $rowitem->a7f1fgbu02s_Quantity + $rowitem->a7f2fgbu10s_Quantity + $rowitem->a7f2thbu05s_Quantity + $rowitem->a7f2debu10s_Quantity + $rowitem->a7f2exbu11s_Quantity + $rowitem->a7f2twbu04s_Quantity + $rowitem->a7f2twbu07s_Quantity + $rowitem->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSLN_1 = $ReciveTranfer_PcsSLN_1 + $ReciveTranferPcsSLN_1;

                $ReciveTranferPriceSLN_1 = $ReciveTranferPcsSLN_1 * $rowitem->PriceAvg;
                $ReciveTranfer_PriceSLN_1 = $ReciveTranfer_PriceSLN_1 + $ReciveTranferPriceSLN_1;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySLN_1 = $rowitem->returncuses_Quantity;
                $ReturnItem_PCSSLN_1 = $ReturnItem_PCSSLN_1 + $ReturnItemQuantitySLN_1;

                $ReturnItemPriceSLN_1 = $ReturnItemQuantitySLN_1 * $NumberSLN_1;
                $ReturnItem_PriceSLN_1 = $ReturnItem_PriceSLN_1 + $ReturnItemPriceSLN_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSLN_1 = $rowitem->purchase_Quantity + $ReciveTranferPcsSLN_1 + $ReturnItemQuantitySLN_1;
                $AllIn_PcsSLN_1 = $AllIn_PcsSLN_1 + $AllInPcsSLN_1;

                $AllInPriceSLN_1 = $PurchasePriceSLN_1 + $ReciveTranferPriceSLN_1 + $ReturnItemPriceSLN_1;
                $AllIn_PriceSLN_1 = $AllIn_PriceSLN_1 + $AllInPriceSLN_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSLN_1 = $rowitem->dc1_s_Quantity + $rowitem->dcp_s_Quantity + $rowitem->dcy_s_Quantity + $rowitem->dex_s_Quantity;
                $SendSale_PcsSLN_1 = $SendSale_PcsSLN_1 + $SendSalePcsSLN_1;

                if ($BackChangePcsSLN_1 > 0 && $AllInPcsSLN_1 > 0) {
                    $SendSalePriceSLN_1 = (($AllInPriceSLN_1 + $BackChangePriceSLN_1) / ($AllInPcsSLN_1 + $BackChangePcsSLN_1)) * $SendSalePcsSLN_1;
                    $SendSale_PriceSLN_1 = $SendSale_PriceSLN_1 + $SendSalePriceSLN_1;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSLN_1 = $rowitem->a8f1fgbu02s_Quantity + $rowitem->a8f2fgbu10s_Quantity + $rowitem->a8f2thbu05s_Quantity + $rowitem->a8f2debu10s_Quantity + $rowitem->a8f2exbu11s_Quantity + $rowitem->a8f2twbu04s_Quantity + $rowitem->a8f2twbu07s_Quantity + $rowitem->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSLN_1 = $ReciveTranOut_PcsSLN_1 + $ReciveTranOutPcsSLN_1;

                if ($AllInPcsSLN_1 > 0 && $BackChangePcsSLN_1 > 0) {
                    $ReciveTranOutPriceSLN_1 = (($AllInPriceSLN_1 + $BackChangePriceSLN_1) / ($AllInPcsSLN_1 + $BackChangePcsSLN_1)) * $ReciveTranOutPcsSLN_1;
                    $ReciveTranOut_PriceSLN_1 = $ReciveTranOut_PriceSLN_1 + $ReciveTranOutPriceSLN_1;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSLN_1 = $rowitem->returnitem_Quantity;
                $ReturnStore_PcsSLN_1 = $ReturnStore_PcsSLN_1 + $ReturnStorePcsSLN_1;

                if ($AllInPcsSLN_1 > 0 && $BackChangePcsSLN_1 > 0) {
                    $ReturnStorePriceSLN_1 = (($AllInPriceSLN_1 + $BackChangePriceSLN_1) / ($AllInPcsSLN_1 + $BackChangePcsSLN_1)) * $ReturnStorePcsSLN_1;
                    $ReturnStore_PriceSLN_1 = $ReturnStore_PriceSLN_1 + $ReturnStorePriceSLN_1;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSLN_1 = $ReturnStorePcsSLN_1 + $ReciveTranOutPcsSLN_1 + $SendSalePcsSLN_1;
                $AllOut_PcsSLN_1 = $AllOut_PcsSLN_1 + $AllOutPcsSLN_1;

                $AllOutPriceSLN_1 = $SendSale_PriceSLN_1 + $ReciveTranOut_PriceSLN_1 + $ReturnStore_PriceSLN_1;
                $AllOut_PriceSLN_1 = $AllOut_PriceSLN_1 + $AllOutPriceSLN_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSLN_1 = $BackChangePcsSLN_1 + $AllInPcsSLN_1 + $AllOutPcsSLN_1;
                $Calculate_PcsSLN_1 = $Calculate_PcsSLN_1 + $CalculatePcsSLN_1;

                $CalculatePriceSLN_1 = $BackChangePriceSLN_1 + $AllInPriceSLN_1 + $AllOutPriceSLN_1;
                $Calculate_PriceSLN_1 = $Calculate_PriceSLN_1 + $CalculatePriceSLN_1;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSLN_1 = $rowitem->item_stock_Quantity;
                $NewCalculate_PcsSLN_1 = $NewCalculate_PcsSLN_1 + $NewCalculatePcsSLN_1;

                $NewCalculatePriceSLN_1 = $rowitem->item_stock_Amount;
                $NewCalculate_PriceSLN_1 = $NewCalculate_PriceSLN_1 + $NewCalculatePriceSLN_1;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSLN_1 = $NewCalculatePcsSLN_1 - $CalculatePcsSLN_1;
                $Diff_PcsSLN_1 = $Diff_PcsSLN_1 + $DiffPcsSLN_1;

                $DiffPriceSLN_1 = $NewCalculatePriceSLN_1 - $CalculatePriceSLN_1;
                $Diff_PriceSLN_1 = $Diff_PriceSLN_1 + $DiffPriceSLN_1;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSLN_1 = $CalculatePcsSLN_1;
                $NewTotal_PcsSLN_1 = $NewTotal_PcsSLN_1 + $CalculatePcsSLN_1;

                $NewTotalPriceSLN_1 = $NewTotalPcsSLN_1 * $rowitem->PriceAvg;
                $NewTotal_PriceSLN_1 = $NewTotal_PriceSLN_1 + $NewTotalPriceSLN_1;

                $NewTotalDiffNavSLN_1 = $NewTotalPriceSLN_1 - $NewCalculatePriceSLN_1;
                $NewTotalDiff_NavSLN_1 = $NewTotalDiff_NavSLN_1 + $NewTotalDiffNavSLN_1;

                $NewTotalDiffCalSLN_1 = $NewTotalPriceSLN_1 - $CalculatePriceSLN_1;
                $NewTotalDiff_CalSLN_1 = $NewTotalDiff_CalSLN_1 + $NewTotalDiffCalSLN_1;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSLN_1 = $rowitem->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSLN_1 = $a7f1fgbu02s_PcsSLN_1 + $a7f1fgbu02sPcsSLN_1;

                $a7f1fgbu02sPriceSLN_1 = $a7f1fgbu02sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f1fgbu02s_PriceSLN_1 = $a7f1fgbu02s_PriceSLN_1 + $a7f1fgbu02sPriceSLN_1;

                $a7f2fgbu10sPcsSLN_1 = $rowitem->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSLN_1 = $a7f2fgbu10s_PcsSLN_1 + $a7f2fgbu10sPcsSLN_1;

                $a7f2fgbu10sPriceSLN_1 = $a7f2fgbu10sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2fgbu10s_PriceSLN_1 = $a7f2fgbu10s_PriceSLN_1 + $a7f2fgbu10sPriceSLN_1;

                $a7f2thbu05sPcsSLN_1 = $rowitem->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSLN_1 = $a7f2thbu05s_PcsSLN_1 + $a7f2thbu05sPcsSLN_1;

                $a7f2thbu05sPriceSLN_1 = $a7f2thbu05sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2thbu05s_PriceSLN_1 = $a7f2thbu05s_PriceSLN_1 + $a7f2thbu05sPriceSLN_1;

                $a7f2debu10sPcsSLN_1 = $rowitem->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSLN_1 = $a7f2debu10s_PcsSLN_1 + $a7f2debu10sPcsSLN_1;

                $a7f2debu10sPriceSLN_1 = $a7f2debu10sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2debu10s_PriceSLN_1 = $a7f2debu10s_PriceSLN_1 + $a7f2debu10sPriceSLN_1;

                $a7f2exbu11sPcsSLN_1 = $rowitem->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSLN_1 = $a7f2exbu11s_PcsSLN_1 + $a7f2exbu11sPcsSLN_1;

                $a7f2exbu11sPriceSLN_1 = $a7f2exbu11sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2exbu11s_PriceSLN_1 = $a7f2exbu11s_PriceSLN_1 + $a7f2exbu11sPriceSLN_1;

                $a7f2twbu04sPcsSLN_1 = $rowitem->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSLN_1 = $a7f2twbu04s_PcsSLN_1 + $a7f2twbu04sPcsSLN_1;

                $a7f2twbu04sPriceSLN_1 = $a7f2twbu04sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2twbu04s_PriceSLN_1 = $a7f2twbu04s_PriceSLN_1 + $a7f2twbu04sPriceSLN_1;

                $a7f2twbu07sPcsSLN_1 = $rowitem->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSLN_1 = $a7f2twbu07s_PcsSLN_1 + $a7f2twbu07sPcsSLN_1;

                $a7f2twbu07sPriceSLN_1 = $a7f2twbu07sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2twbu07s_PriceSLN_1 = $a7f2twbu07s_PriceSLN_1 + $a7f2twbu07sPriceSLN_1;

                $a7f2cebu10sPcsSLN_1 = $rowitem->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSLN_1 = $a7f2cebu10s_PcsSLN_1 + $a7f2cebu10sPcsSLN_1;

                $a7f2cebu10sPriceSLN_1 = $a7f2cebu10sPcsSLN_1 * $rowitem->PriceAvg;
                $a7f2cebu10s_PriceSLN_1 = $a7f2cebu10s_PriceSLN_1 + $a7f2cebu10sPriceSLN_1;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSLN_1 = $rowitem->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSLN_1 = $a8f1fgbu02s_PcsSLN_1 + $a8f1fgbu02sPcsSLN_1;

                $a8f1fgbu02sPriceSLN_1 = $a8f1fgbu02sPcsSLN_1 * $NumberSLN_1;
                $a8f1fgbu02s_PriceSLN_1 = $a8f1fgbu02s_PriceSLN_1 + $a8f1fgbu02sPriceSLN_1;

                $a8f2fgbu10sPcsSLN_1 = $rowitem->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSLN_1 = $a8f2fgbu10s_PcsSLN_1 + $a8f2fgbu10sPcsSLN_1;

                $a8f2fgbu10sPriceSLN_1 = $a8f2fgbu10sPcsSLN_1 * $NumberSLN_1;
                $a8f2fgbu10s_PriceSLN_1 = $a8f2fgbu10s_PriceSLN_1 + $a8f2fgbu10sPriceSLN_1;

                $a8f2thbu05sPcsSLN_1 = $rowitem->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSLN_1 = $a8f2thbu05s_PcsSLN_1 + $a8f2thbu05sPcsSLN_1;

                $a8f2thbu05sPriceSLN_1 = $a8f2thbu05sPcsSLN_1 * $NumberSLN_1;
                $a8f2thbu05s_PriceSLN_1 = $a8f2thbu05s_PriceSLN_1 + $a8f2thbu05sPriceSLN_1;

                $a8f2debu10sPcsSLN_1 = $rowitem->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSLN_1 = $a8f2debu10s_PcsSLN_1 + $a8f2debu10sPcsSLN_1;

                $a8f2debu10sPriceSLN_1 = $a8f2debu10sPcsSLN_1 * $NumberSLN_1;
                $a8f2debu10s_PriceSLN_1 = $a8f2debu10s_PriceSLN_1 + $a8f2debu10sPriceSLN_1;

                $a8f2exbu11sPcsSLN_1 = $rowitem->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSLN_1 = $a8f2exbu11s_PcsSLN_1 + $a8f2exbu11sPcsSLN_1;

                $a8f2exbu11sPriceSLN_1 = $a8f2exbu11sPcsSLN_1 * $NumberSLN_1;
                $a8f2exbu11s_PriceSLN_1 = $a8f2exbu11s_PriceSLN_1 + $a8f2exbu11sPriceSLN_1;

                $a8f2twbu04sPcsSLN_1 = $rowitem->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSLN_1 = $a8f2twbu04s_PcsSLN_1 + $a8f2twbu04sPcsSLN_1;

                $a8f2twbu04sPriceSLN_1 = $a8f2twbu04sPcsSLN_1 * $NumberSLN_1;
                $a8f2twbu04s_PriceSLN_1 = $a8f2twbu04s_PriceSLN_1 + $a8f2twbu04sPriceSLN_1;

                $a8f2twbu07sPcsSLN_1 = $rowitem->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSLN_1 = $a8f2twbu07s_PcsSLN_1 + $a8f2twbu07sPcsSLN_1;

                $a8f2twbu07sPriceSLN_1 = $a8f2twbu07sPcsSLN_1 * $NumberSLN_1;
                $a8f2twbu07s_PriceSLN_1 = $a8f2twbu07s_PriceSLN_1 + $a8f2twbu07sPriceSLN_1;

                $a8f2cebu10sPcsSLN_1 = $rowitem->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSLN_1 = $a8f2cebu10s_PcsSLN_1 + $a8f2cebu10sPcsSLN_1;

                $a8f2cebu10sPriceSLN_1 = $a8f2cebu10sPcsSLN_1 * $NumberSLN_1;
                $a8f2cebu10s_PriceSLN_1 = $a8f2cebu10s_PriceSLN_1 + $a8f2cebu10sPriceSLN_1;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSLN_1 = $rowitem->dc1_s_Quantity;
                $DC1_PcsSLN_1 = $DC1_PcsSLN_1 + $DC1PcsSLN_1;

                $DC1PriceSLN_1 = $DC1PcsSLN_1 * $NumberSLN_1;
                $DC1_PriceSLN_1 = $DC1_PriceSLN_1 + $DC1PriceSLN_1;

                $DCPPcsSLN_1 = $rowitem->dcp_s_Quantity;
                $DCP_PcsSLN_1 = $DCP_PcsSLN_1 + $DCPPcsSLN_1;

                $DCPPriceSLN_1 = $DCPPcsSLN_1 * $NumberSLN_1;
                $DCP_PriceSLN_1 = $DCP_PriceSLN_1 + $DCPPriceSLN_1;

                $DCYPcsSLN_1 = $rowitem->dcy_s_Quantity;
                $DCY_PcsSLN_1 = $DCY_PcsSLN_1 + $DCYPcsSLN_1;

                $DCYPriceSLN_1 = $DCYPcsSLN_1 * $NumberSLN_1;
                $DCY_PriceSLN_1 = $DCY_PriceSLN_1 + $DCYPriceSLN_1;

                $DEXPcsSLN_1 = $rowitem->dex_s_Quantity;
                $DEX_PcsSLN_1 = $DEX_PcsSLN_1 + $DEXPcsSLN_1;

                $DEXPriceSLN_1 = $DEXPcsSLN_1 * $NumberSLN_1;
                $DEX_PriceSLN_1 = $DEX_PriceSLN_1 + $DEXPriceSLN_1;
            }

            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

        }

        $Pcs_AfterNT_All =  $Pcs_AfterNT_1 + $Pcs_AfterNT_2 + $Pcs_AfterNT_3 + $Pcs_AfterNT_4 + $Pcs_AfterSNT_1 + $Pcs_AfterSNT_2;
        $Price_AfterNT_All = $Price_AfterNT_1 + $Price_AfterNT_2 + $Price_AfterNT_3 + $Price_AfterNT_4 + $Price_AfterSNT_1 + $Price_AfterSNT_2;
        $Pcs_AfterNT_All =  $Pcs_AfterNT_1 + $Pcs_AfterNT_2 + $Pcs_AfterNT_3 + $Pcs_AfterNT_4 + $Pcs_AfterSNT_1 + $Pcs_AfterSNT_2;
        $Price_AfterNT_All =  $Price_AfterNT_1 + $Price_AfterNT_2 + $Price_AfterNT_3 + $Price_AfterNT_4 + $Price_AfterSNT_1 + $Price_AfterSNT_2;
        $Po_PcsNT_All = $Po_PcsNT_1 + $Po_PcsNT_2 + $Po_PcsNT_3 + $Po_PcsNT_4 + $Po_PcsSNT_1 + $Po_PcsSNT_2;
        $Po_PriceNT_All =  $Po_PriceNT_1 + $Po_PriceNT_2 + $Po_PriceNT_3 + $Po_PriceNT_4 + $Po_PriceSNT_1 + $Po_PriceSNT_2;
        $Neg_PcsNT_All =  $Neg_PcsNT_1 + $Neg_PcsNT_2 + $Neg_PcsNT_3 + $Neg_PcsNT_4 + $Neg_PcsSNT_1 + $Neg_PcsSNT_2;
        $Neg_PriceNT_All =  $Neg_PriceNT_1 + $Neg_PriceNT_2 + $Neg_PriceNT_3 + $Neg_PriceNT_4 + $Neg_PriceSNT_1 + $Neg_PriceSNT_2;
        $BackChange_PcsNT_All =  $BackChange_PcsNT_1 + $BackChange_PcsNT_2 + $BackChange_PcsNT_3 + $BackChange_PcsNT_4 + $BackChange_PcsSNT_1 + $BackChange_PcsSNT_2;
        $BackChange_PriceNT_All =  $BackChange_PriceNT_1 + $BackChange_PriceNT_2 + $BackChange_PriceNT_3 + $BackChange_PriceNT_4 + $BackChange_PriceSNT_1 + $BackChange_PriceSNT_2;
        $Purchase_PcsNT_All =  $Purchase_PcsNT_1 + $Purchase_PcsNT_2 + $Purchase_PcsNT_3 + $Purchase_PcsNT_4 + $Purchase_PcsSNT_1 + $Purchase_PcsSNT_2;
        $Purchase_PriceNT_All =  $Purchase_PriceNT_1 + $Purchase_PriceNT_2 + $Purchase_PriceNT_3 + $Purchase_PriceNT_4 + $Purchase_PriceSNT_1 + $Purchase_PriceSNT_2;
        $ReciveTranfer_PcsNT_All =  $ReciveTranfer_PcsNT_1 + $ReciveTranfer_PcsNT_2 + $ReciveTranfer_PcsNT_3 + $ReciveTranfer_PcsNT_4 + $ReciveTranfer_PcsSNT_1 + $ReciveTranfer_PcsSNT_2;
        $ReciveTranfer_PriceNT_All =  $ReciveTranfer_PriceNT_1 + $ReciveTranfer_PriceNT_2 + $ReciveTranfer_PriceNT_3 + $ReciveTranfer_PriceNT_4 + $ReciveTranfer_PriceSNT_1 + $ReciveTranfer_PriceSNT_2;
        $ReturnItem_PCSNT_All =  $ReturnItem_PCSNT_1 + $ReturnItem_PCSNT_2 + $ReturnItem_PCSNT_3 + $ReturnItem_PCSNT_4 + $ReturnItem_PCSSNT_1 + $ReturnItem_PCSSNT_2;
        $ReturnItem_PriceNT_All =  $ReturnItem_PriceNT_1 + $ReturnItem_PriceNT_2 + $ReturnItem_PriceNT_3 + $ReturnItem_PriceNT_4 + $ReturnItem_PriceSNT_1 + $ReturnItem_PriceSNT_2;
        $AllIn_PcsNT_All =  $AllIn_PcsNT_1 + $AllIn_PcsNT_2 + $AllIn_PcsNT_3 + $AllIn_PcsNT_4 + $AllIn_PcsSNT_1 + $AllIn_PcsSNT_2;
        $AllIn_PriceNT_All =  $AllIn_PriceNT_1 + $AllIn_PriceNT_2 + $AllIn_PriceNT_3 + $AllIn_PriceNT_4 + $AllIn_PriceSNT_1 + $AllIn_PriceSNT_2;
        $SendSale_PcsNT_All =  $SendSale_PcsNT_1 + $SendSale_PcsNT_2 + $SendSale_PcsNT_3 + $SendSale_PcsNT_4 + $SendSale_PcsSNT_1 + $SendSale_PcsSNT_2;
        $SendSale_PriceNT_All =  $SendSale_PriceNT_1 + $SendSale_PriceNT_2 + $SendSale_PriceNT_3 + $SendSale_PriceNT_4 + $SendSale_PriceSNT_1 + $SendSale_PriceSNT_2;
        $ReciveTranOut_PcsNT_All =  $ReciveTranOut_PcsNT_1 + $ReciveTranOut_PcsNT_2 + $ReciveTranOut_PcsNT_3 + $ReciveTranOut_PcsNT_4 + $ReciveTranOut_PcsSNT_1 + $ReciveTranOut_PcsSNT_2;
        $ReciveTranOut_PriceNT_All =  $ReciveTranOut_PriceNT_1 + $ReciveTranOut_PriceNT_2 + $ReciveTranOut_PriceNT_3 + $ReciveTranOut_PriceNT_4 + $ReciveTranOut_PriceSNT_1 + $ReciveTranOut_PriceSNT_2;
        $ReturnStore_PcsNT_All =  $ReturnStore_PcsNT_1 + $ReturnStore_PcsNT_2 + $ReturnStore_PcsNT_3 + $ReturnStore_PcsNT_4 + $ReturnStore_PcsSNT_1 + $ReturnStore_PcsSNT_2;
        $ReturnStore_PriceNT_All =  $ReturnStore_PriceNT_1 + $ReturnStore_PriceNT_2 + $ReturnStore_PriceNT_3 + $ReturnStore_PriceNT_4 + $ReturnStore_PriceSNT_1 + $ReturnStore_PriceSNT_2;
        $AllOut_PcsNT_All =  $AllOut_PcsNT_1 + $AllOut_PcsNT_2 + $AllOut_PcsNT_3 + $AllOut_PcsNT_4 + $AllOut_PcsSNT_1 + $AllOut_PcsSNT_2;
        $AllOut_PriceNT_All =  $AllOut_PriceNT_1 + $AllOut_PriceNT_2 + $AllOut_PriceNT_3 + $AllOut_PriceNT_4 + $AllOut_PriceSNT_1 + $AllOut_PriceSNT_2;
        $Calculate_PcsNT_All =  $Calculate_PcsNT_1 + $Calculate_PcsNT_2 + $Calculate_PcsNT_3 + $Calculate_PcsNT_4 + $Calculate_PcsSNT_1 + $Calculate_PcsSNT_2;
        $Calculate_PriceNT_All =  $Calculate_PriceNT_1 + $Calculate_PriceNT_2 + $Calculate_PriceNT_3 + $Calculate_PriceNT_4 + $Calculate_PriceSNT_1 + $Calculate_PriceSNT_2;
        $NewCalculate_PcsNT_All = $NewCalculate_PcsNT_1 + $NewCalculate_PcsNT_2 + $NewCalculate_PcsNT_3 + $NewCalculate_PcsNT_4 + $NewCalculate_PcsSNT_1 + $NewCalculate_PcsSNT_2;
        $NewCalculate_PriceNT_All = $NewCalculate_PriceNT_1 + $NewCalculate_PriceNT_2 + $NewCalculate_PriceNT_3 + $NewCalculate_PriceNT_4 + $NewCalculate_PriceSNT_1 + $NewCalculate_PriceSNT_2;
        $Diff_PcsNT_All = $Diff_PcsNT_1 + $Diff_PcsNT_2 + $Diff_PcsNT_3 + $Diff_PcsNT_4 + $Diff_PcsSNT_1 + $Diff_PcsSNT_2;
        $Diff_PriceNT_All = $Diff_PriceNT_1 + $Diff_PriceNT_2 + $Diff_PriceNT_3 + $Diff_PriceNT_4 + $Diff_PriceSNT_1 + $Diff_PriceSNT_2;
        $NewTotal_PcsNT_All = $NewTotal_PcsNT_1 + $NewTotal_PcsNT_2 + $NewTotal_PcsNT_3 + $NewTotal_PcsNT_4 + $NewTotal_PcsSNT_1 + $NewTotal_PcsSNT_2;
        $NewTotal_PriceNT_All = $NewTotal_PriceNT_1 + $NewTotal_PriceNT_2 + $NewTotal_PriceNT_3 + $NewTotal_PriceNT_4 + $NewTotal_PriceSNT_1 + $NewTotal_PriceSNT_2;
        $NewTotalDiff_NavNT_All = $NewTotalDiff_NavNT_1 + $NewTotalDiff_NavNT_2 + $NewTotalDiff_NavNT_3 + $NewTotalDiff_NavNT_4 + $NewTotalDiff_NavSNT_1 + $NewTotalDiff_NavSNT_2;
        $NewTotalDiff_CalNT_All = $NewTotalDiff_CalNT_1 + $NewTotalDiff_CalNT_2 + $NewTotalDiff_CalNT_3 + $NewTotalDiff_CalNT_4 + $NewTotalDiff_CalSNT_1 + $NewTotalDiff_CalSNT_2;
        $a7f1fgbu02s_PcsNT_All = $a7f1fgbu02s_PcsNT_1 + $a7f1fgbu02s_PcsNT_2 + $a7f1fgbu02s_PcsNT_3 + $a7f1fgbu02s_PcsNT_4 + $a7f1fgbu02s_PcsSNT_1 + $a7f1fgbu02s_PcsSNT_2;
        $a7f1fgbu02s_PriceNT_All = $a7f1fgbu02s_PriceNT_1 + $a7f1fgbu02s_PriceNT_2 + $a7f1fgbu02s_PriceNT_3 + $a7f1fgbu02s_PriceNT_4 + $a7f1fgbu02s_PriceSNT_1 + $a7f1fgbu02s_PriceSNT_2;
        $a7f2fgbu10s_PcsNT_All = $a7f2fgbu10s_PcsNT_1 + $a7f2fgbu10s_PcsNT_2 + $a7f2fgbu10s_PcsNT_3 + $a7f2fgbu10s_PcsNT_4 + $a7f2fgbu10s_PcsSNT_1 + $a7f2fgbu10s_PcsSNT_2;
        $a7f2fgbu10s_PriceNT_All = $a7f2fgbu10s_PriceNT_1 + $a7f2fgbu10s_PriceNT_2 + $a7f2fgbu10s_PriceNT_3 + $a7f2fgbu10s_PriceNT_4 + $a7f2fgbu10s_PriceSNT_1 + $a7f2fgbu10s_PriceSNT_2;
        $a7f2thbu05s_PcsNT_All = $a7f2thbu05s_PcsNT_1 + $a7f2thbu05s_PcsNT_2 + $a7f2thbu05s_PcsNT_3 + $a7f2thbu05s_PcsNT_4 + $a7f2thbu05s_PcsSNT_1 + $a7f2thbu05s_PcsSNT_2;
        $a7f2thbu05s_PriceNT_All = $a7f2thbu05s_PriceNT_1 + $a7f2thbu05s_PriceNT_2 + $a7f2thbu05s_PriceNT_3 + $a7f2thbu05s_PriceNT_4 + $a7f2thbu05s_PriceSNT_1 + $a7f2thbu05s_PriceSNT_2;
        $a7f2debu10s_PcsNT_All = $a7f2debu10s_PcsNT_1 + $a7f2debu10s_PcsNT_2 + $a7f2debu10s_PcsNT_3 + $a7f2debu10s_PcsNT_4 + $a7f2debu10s_PcsSNT_1 + $a7f2debu10s_PcsSNT_2;
        $a7f2debu10s_PriceNT_All = $a7f2debu10s_PriceNT_1 + $a7f2debu10s_PriceNT_2 + $a7f2debu10s_PriceNT_3 + $a7f2debu10s_PriceNT_4 + $a7f2debu10s_PriceSNT_1 + $a7f2debu10s_PriceSNT_2;
        $a7f2exbu11s_PcsNT_All = $a7f2exbu11s_PcsNT_1 + $a7f2exbu11s_PcsNT_2 + $a7f2exbu11s_PcsNT_3 + $a7f2exbu11s_PcsNT_4 + $a7f2exbu11s_PcsSNT_1 + $a7f2exbu11s_PcsSNT_2;
        $a7f2exbu11s_PriceNT_All = $a7f2exbu11s_PriceNT_1 + $a7f2exbu11s_PriceNT_2 + $a7f2exbu11s_PriceNT_3 + $a7f2exbu11s_PriceNT_4 + $a7f2exbu11s_PriceSNT_1 + $a7f2exbu11s_PriceSNT_2;
        $a7f2twbu04s_PcsNT_All = $a7f2twbu04s_PcsNT_1 + $a7f2twbu04s_PcsNT_2 + $a7f2twbu04s_PcsNT_3 + $a7f2twbu04s_PcsNT_4 + $a7f2twbu04s_PcsSNT_1 + $a7f2twbu04s_PcsSNT_2;
        $a7f2twbu04s_PriceNT_All = $a7f2twbu04s_PriceNT_1 + $a7f2twbu04s_PriceNT_2 + $a7f2twbu04s_PriceNT_3 + $a7f2twbu04s_PriceNT_4 + $a7f2twbu04s_PriceSNT_1 + $a7f2twbu04s_PriceSNT_2;
        $a7f2twbu07s_PcsNT_All = $a7f2twbu07s_PcsNT_1 + $a7f2twbu07s_PcsNT_2 + $a7f2twbu07s_PcsNT_3 + $a7f2twbu07s_PcsNT_4 + $a7f2twbu07s_PcsSNT_1 + $a7f2twbu07s_PcsSNT_2;
        $a7f2twbu07s_PriceNT_All = $a7f2twbu07s_PriceNT_1 + $a7f2twbu07s_PriceNT_2 + $a7f2twbu07s_PriceNT_3 + $a7f2twbu07s_PriceNT_4 + $a7f2twbu07s_PriceSNT_1 + $a7f2twbu07s_PriceSNT_2;
        $a7f2cebu10s_PcsNT_All = $a7f2cebu10s_PcsNT_1 + $a7f2cebu10s_PcsNT_2 + $a7f2cebu10s_PcsNT_3 + $a7f2cebu10s_PcsNT_4 + $a7f2cebu10s_PcsSNT_1 + $a7f2cebu10s_PcsSNT_2;
        $a7f2cebu10s_PriceNT_All = $a7f2cebu10s_PriceNT_1 + $a7f2cebu10s_PriceNT_2 + $a7f2cebu10s_PriceNT_3 + $a7f2cebu10s_PriceNT_4 + $a7f2cebu10s_PriceSNT_1 + $a7f2cebu10s_PriceSNT_2;
        $a8f1fgbu02s_PcsNT_All = $a8f1fgbu02s_PcsNT_1 + $a8f1fgbu02s_PcsNT_2 + $a8f1fgbu02s_PcsNT_3 + $a8f1fgbu02s_PcsNT_4 + $a8f1fgbu02s_PcsSNT_1 + $a8f1fgbu02s_PcsSNT_2;
        $a8f1fgbu02s_PriceNT_All = $a8f1fgbu02s_PriceNT_1 + $a8f1fgbu02s_PriceNT_2 + $a8f1fgbu02s_PriceNT_3 + $a8f1fgbu02s_PriceNT_4 + $a8f1fgbu02s_PriceSNT_1 + $a8f1fgbu02s_PriceSNT_2;
        $a8f2fgbu10s_PcsNT_All = $a8f2fgbu10s_PcsNT_1 + $a8f2fgbu10s_PcsNT_2 + $a8f2fgbu10s_PcsNT_3 + $a8f2fgbu10s_PcsNT_4 + $a8f2fgbu10s_PcsSNT_1 + $a8f2fgbu10s_PcsSNT_2;
        $a8f2fgbu10s_PriceNT_All = $a8f2fgbu10s_PriceNT_1 + $a8f2fgbu10s_PriceNT_2 + $a8f2fgbu10s_PriceNT_3 + $a8f2fgbu10s_PriceNT_4 + $a8f2fgbu10s_PriceSNT_1 + $a8f2fgbu10s_PriceSNT_2;
        $a8f2thbu05s_PcsNT_All = $a8f2thbu05s_PcsNT_1 + $a8f2thbu05s_PcsNT_2 + $a8f2thbu05s_PcsNT_3 + $a8f2thbu05s_PcsNT_4 + $a8f2thbu05s_PcsSNT_1 + $a8f2thbu05s_PcsSNT_2;
        $a8f2thbu05s_PriceNT_All = $a8f2thbu05s_PriceNT_1 + $a8f2thbu05s_PriceNT_2 + $a8f2thbu05s_PriceNT_3 + $a8f2thbu05s_PriceNT_4 + $a8f2thbu05s_PriceSNT_1 + $a8f2thbu05s_PriceSNT_2;
        $a8f2debu10s_PcsNT_All = $a8f2debu10s_PcsNT_1 + $a8f2debu10s_PcsNT_2 + $a8f2debu10s_PcsNT_3 + $a8f2debu10s_PcsNT_4 + $a8f2debu10s_PcsSNT_1 + $a8f2debu10s_PcsSNT_2;
        $a8f2debu10s_PriceNT_All = $a8f2debu10s_PriceNT_1 + $a8f2debu10s_PriceNT_2 + $a8f2debu10s_PriceNT_3 + $a8f2debu10s_PriceNT_4 + $a8f2debu10s_PriceSNT_1 + $a8f2debu10s_PriceSNT_2;
        $a8f2exbu11s_PcsNT_All = $a8f2exbu11s_PcsNT_1 + $a8f2exbu11s_PcsNT_2 + $a8f2exbu11s_PcsNT_3 + $a8f2exbu11s_PcsNT_4 + $a8f2exbu11s_PcsSNT_1 + $a8f2exbu11s_PcsSNT_2;
        $a8f2exbu11s_PriceNT_All = $a8f2exbu11s_PriceNT_1 + $a8f2exbu11s_PriceNT_2 + $a8f2exbu11s_PriceNT_3 + $a8f2exbu11s_PriceNT_4 + $a8f2exbu11s_PriceSNT_1 + $a8f2exbu11s_PriceSNT_2;
        $a8f2twbu04s_PcsNT_All = $a8f2twbu04s_PcsNT_1 + $a8f2twbu04s_PcsNT_2 + $a8f2twbu04s_PcsNT_3 + $a8f2twbu04s_PcsNT_4 + $a8f2twbu04s_PcsSNT_1 + $a8f2twbu04s_PcsSNT_2;
        $a8f2twbu04s_PriceNT_All = $a8f2twbu04s_PriceNT_1 + $a8f2twbu04s_PriceNT_2 + $a8f2twbu04s_PriceNT_3 + $a8f2twbu04s_PriceNT_4 + $a8f2twbu04s_PriceSNT_1 + $a8f2twbu04s_PriceSNT_2;
        $a8f2twbu07s_PcsNT_All = $a8f2twbu07s_PcsNT_1 + $a8f2twbu07s_PcsNT_2 + $a8f2twbu07s_PcsNT_3 + $a8f2twbu07s_PcsNT_4 + $a8f2twbu07s_PcsSNT_1 + $a8f2twbu07s_PcsSNT_2;
        $a8f2twbu07s_PriceNT_All = $a8f2twbu07s_PriceNT_1 + $a8f2twbu07s_PriceNT_2 + $a8f2twbu07s_PriceNT_3 + $a8f2twbu07s_PriceNT_4 + $a8f2twbu07s_PriceSNT_1 + $a8f2twbu07s_PriceSNT_2;
        $a8f2cebu10s_PcsNT_All = $a8f2cebu10s_PcsNT_1 + $a8f2cebu10s_PcsNT_2 + $a8f2cebu10s_PcsNT_3 + $a8f2cebu10s_PcsNT_4 + $a8f2cebu10s_PcsSNT_1 + $a8f2cebu10s_PcsSNT_2;
        $a8f2cebu10s_PriceNT_All = $a8f2cebu10s_PriceNT_1 + $a8f2cebu10s_PriceNT_2 + $a8f2cebu10s_PriceNT_3 + $a8f2cebu10s_PriceNT_4 + $a8f2cebu10s_PriceSNT_1 + $a8f2cebu10s_PriceSNT_2;
        $DC1_PcsNT_All = $DC1_PcsNT_1 + $DC1_PcsNT_2 + $DC1_PcsNT_3 + $DC1_PcsNT_4 + $DC1_PcsSNT_1 + $DC1_PcsSNT_2;
        $DC1_PriceNT_All = $DC1_PriceNT_1 + $DC1_PriceNT_2 + $DC1_PriceNT_3 + $DC1_PriceNT_4 + $DC1_PriceSNT_1 + $DC1_PriceSNT_2;
        $DCP_PcsNT_All = $DCP_PcsNT_1 + $DCP_PcsNT_2 + $DCP_PcsNT_3 + $DCP_PcsNT_4 + $DCP_PcsSNT_1 + $DCP_PcsSNT_2;
        $DCP_PriceNT_All = $DCP_PriceNT_1 + $DCP_PriceNT_2 + $DCP_PriceNT_3 + $DCP_PriceNT_4 + $DCP_PriceSNT_1 + $DCP_PriceSNT_2;
        $DCY_PcsNT_All = $DCY_PcsNT_1 + $DCY_PcsNT_2 + $DCY_PcsNT_3 + $DCY_PcsNT_4 + $DCY_PcsSNT_1 + $DCY_PcsSNT_2;
        $DCY_PriceNT_All = $DCY_PriceNT_1 + $DCY_PriceNT_2 + $DCY_PriceNT_3 + $DCY_PriceNT_4 + $DCY_PriceSNT_1 + $DCY_PriceSNT_2;
        $DEX_PcsNT_All = $DEX_PcsNT_1 + $DEX_PcsNT_2 + $DEX_PcsNT_3 + $DEX_PcsNT_4 + $DEX_PcsSNT_1 + $DEX_PcsSNT_2;
        $DEX_PriceNT_All = $DEX_PriceNT_1 + $DEX_PriceNT_2 + $DEX_PriceNT_3 + $DEX_PriceNT_4 + $DEX_PriceSNT_1 + $DEX_PriceSNT_2;
        

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_All =  $Pcs_AfterMT_1 + $Pcs_AfterMT_2 + $Pcs_AfterMT_3 + $Pcs_AfterMT_4 + $Pcs_AfterMT_5 + $Pcs_AfterMT_6;
        $Price_AfterMT_All = $Price_AfterMT_1 + $Price_AfterMT_2 + $Price_AfterMT_3 + $Price_AfterMT_4 + $Price_AfterMT_5 + $Price_AfterMT_6;
        $Pcs_AfterMT_All =  $Pcs_AfterMT_1 + $Pcs_AfterMT_2 + $Pcs_AfterMT_3 + $Pcs_AfterMT_4 + $Pcs_AfterMT_5 + $Pcs_AfterMT_6;
        $Price_AfterMT_All =  $Price_AfterMT_1 + $Price_AfterMT_2 + $Price_AfterMT_3 + $Price_AfterMT_4 + $Price_AfterMT_5 + $Price_AfterMT_6;
        $Po_PcsMT_All = $Po_PcsMT_1 + $Po_PcsMT_2 + $Po_PcsMT_3 + $Po_PcsMT_4 + $Po_PcsMT_5 + $Po_PcsMT_6;
        $Po_PriceMT_All =  $Po_PriceMT_1 + $Po_PriceMT_2 + $Po_PriceMT_3 + $Po_PriceMT_4 + $Po_PriceMT_5 + $Po_PriceMT_6;
        $Neg_PcsMT_All =  $Neg_PcsMT_1 + $Neg_PcsMT_2 + $Neg_PcsMT_3 + $Neg_PcsMT_4 + $Neg_PcsMT_5 + $Neg_PcsMT_6;
        $Neg_PriceMT_All =  $Neg_PriceMT_1 + $Neg_PriceMT_2 + $Neg_PriceMT_3 + $Neg_PriceMT_4 + $Neg_PriceMT_5 + $Neg_PriceMT_6;
        $BackChange_PcsMT_All =  $BackChange_PcsMT_1 + $BackChange_PcsMT_2 + $BackChange_PcsMT_3 + $BackChange_PcsMT_4 + $BackChange_PcsMT_5 + $BackChange_PcsMT_6;
        $BackChange_PriceMT_All =  $BackChange_PriceMT_1 + $BackChange_PriceMT_2 + $BackChange_PriceMT_3 + $BackChange_PriceMT_4 + $BackChange_PriceMT_5 + $BackChange_PriceMT_6;
        $Purchase_PcsMT_All =  $Purchase_PcsMT_1 + $Purchase_PcsMT_2 + $Purchase_PcsMT_3 + $Purchase_PcsMT_4 + $Purchase_PcsMT_5 + $Purchase_PcsMT_6;
        $Purchase_PriceMT_All =  $Purchase_PriceMT_1 + $Purchase_PriceMT_2 + $Purchase_PriceMT_3 + $Purchase_PriceMT_4 + $Purchase_PriceMT_5 + $Purchase_PriceMT_6;
        $ReciveTranfer_PcsMT_All =  $ReciveTranfer_PcsMT_1 + $ReciveTranfer_PcsMT_2 + $ReciveTranfer_PcsMT_3 + $ReciveTranfer_PcsMT_4 + $ReciveTranfer_PcsMT_5 + $ReciveTranfer_PcsMT_6;
        $ReciveTranfer_PriceMT_All =  $ReciveTranfer_PriceMT_1 + $ReciveTranfer_PriceMT_2 + $ReciveTranfer_PriceMT_3 + $ReciveTranfer_PriceMT_4 + $ReciveTranfer_PriceMT_5 + $ReciveTranfer_PriceMT_6;
        $ReturnItem_PCSMT_All =  $ReturnItem_PCSMT_1 + $ReturnItem_PCSMT_2 + $ReturnItem_PCSMT_3 + $ReturnItem_PCSMT_4 + $ReturnItem_PCSMT_5 + $ReturnItem_PCSMT_6;
        $ReturnItem_PriceMT_All =  $ReturnItem_PriceMT_1 + $ReturnItem_PriceMT_2 + $ReturnItem_PriceMT_3 + $ReturnItem_PriceMT_4 + $ReturnItem_PriceMT_5 + $ReturnItem_PriceMT_6;
        $AllIn_PcsMT_All =  $AllIn_PcsMT_1 + $AllIn_PcsMT_2 + $AllIn_PcsMT_3 + $AllIn_PcsMT_4 + $AllIn_PcsMT_5 + $AllIn_PcsMT_6;
        $AllIn_PriceMT_All =  $AllIn_PriceMT_1 + $AllIn_PriceMT_2 + $AllIn_PriceMT_3 + $AllIn_PriceMT_4 + $AllIn_PriceMT_5 + $AllIn_PriceMT_6;
        $SendSale_PcsMT_All =  $SendSale_PcsMT_1 + $SendSale_PcsMT_2 + $SendSale_PcsMT_3 + $SendSale_PcsMT_4 + $SendSale_PcsMT_5 + $SendSale_PcsMT_6;
        $SendSale_PriceMT_All =  $SendSale_PriceMT_1 + $SendSale_PriceMT_2 + $SendSale_PriceMT_3 + $SendSale_PriceMT_4 + $SendSale_PriceMT_5 + $SendSale_PriceMT_6;
        $ReciveTranOut_PcsMT_All =  $ReciveTranOut_PcsMT_1 + $ReciveTranOut_PcsMT_2 + $ReciveTranOut_PcsMT_3 + $ReciveTranOut_PcsMT_4 + $ReciveTranOut_PcsMT_5 + $ReciveTranOut_PcsMT_6;
        $ReciveTranOut_PriceMT_All =  $ReciveTranOut_PriceMT_1 + $ReciveTranOut_PriceMT_2 + $ReciveTranOut_PriceMT_3 + $ReciveTranOut_PriceMT_4 + $ReciveTranOut_PriceMT_5 + $ReciveTranOut_PriceMT_6;
        $ReturnStore_PcsMT_All =  $ReturnStore_PcsMT_1 + $ReturnStore_PcsMT_2 + $ReturnStore_PcsMT_3 + $ReturnStore_PcsMT_4 + $ReturnStore_PcsMT_5 + $ReturnStore_PcsMT_6;
        $ReturnStore_PriceMT_All =  $ReturnStore_PriceMT_1 + $ReturnStore_PriceMT_2 + $ReturnStore_PriceMT_3 + $ReturnStore_PriceMT_4 + $ReturnStore_PriceMT_5 + $ReturnStore_PriceMT_6;
        $AllOut_PcsMT_All =  $AllOut_PcsMT_1 + $AllOut_PcsMT_2 + $AllOut_PcsMT_3 + $AllOut_PcsMT_4 + $AllOut_PcsMT_5 + $AllOut_PcsMT_6;
        $AllOut_PriceMT_All =  $AllOut_PriceMT_1 + $AllOut_PriceMT_2 + $AllOut_PriceMT_3 + $AllOut_PriceMT_4 + $AllOut_PriceMT_5 + $AllOut_PriceMT_6;
        $Calculate_PcsMT_All =  $Calculate_PcsMT_1 + $Calculate_PcsMT_2 + $Calculate_PcsMT_3 + $Calculate_PcsMT_4 + $Calculate_PcsMT_5 + $Calculate_PcsMT_6;
        $Calculate_PriceMT_All =  $Calculate_PriceMT_1 + $Calculate_PriceMT_2 + $Calculate_PriceMT_3 + $Calculate_PriceMT_4 + $Calculate_PriceMT_5 + $Calculate_PriceMT_6;
        $NewCalculate_PcsMT_All = $NewCalculate_PcsMT_1 + $NewCalculate_PcsMT_2 + $NewCalculate_PcsMT_3 + $NewCalculate_PcsMT_4 + $NewCalculate_PcsMT_5 + $NewCalculate_PcsMT_6;
        $NewCalculate_PriceMT_All = $NewCalculate_PriceMT_1 + $NewCalculate_PriceMT_2 + $NewCalculate_PriceMT_3 + $NewCalculate_PriceMT_4 + $NewCalculate_PriceMT_5 + $NewCalculate_PriceMT_6;
        $Diff_PcsMT_All = $Diff_PcsMT_1 + $Diff_PcsMT_2 + $Diff_PcsMT_3 + $Diff_PcsMT_4 + $Diff_PcsMT_5 + $Diff_PcsMT_6;
        $Diff_PriceMT_All = $Diff_PriceMT_1 + $Diff_PriceMT_2 + $Diff_PriceMT_3 + $Diff_PriceMT_4 + $Diff_PriceMT_5 + $Diff_PriceMT_6;
        $NewTotal_PcsMT_All = $NewTotal_PcsMT_1 + $NewTotal_PcsMT_2 + $NewTotal_PcsMT_3 + $NewTotal_PcsMT_4 + $NewTotal_PcsMT_5 + $NewTotal_PcsMT_6;
        $NewTotal_PriceMT_All = $NewTotal_PriceMT_1 + $NewTotal_PriceMT_2 + $NewTotal_PriceMT_3 + $NewTotal_PriceMT_4 + $NewTotal_PriceMT_5 + $NewTotal_PriceMT_6;
        $NewTotalDiff_NavMT_All = $NewTotalDiff_NavMT_1 + $NewTotalDiff_NavMT_2 + $NewTotalDiff_NavMT_3 + $NewTotalDiff_NavMT_4 + $NewTotalDiff_NavMT_5 + $NewTotalDiff_NavMT_6;
        $NewTotalDiff_CalMT_All = $NewTotalDiff_CalMT_1 + $NewTotalDiff_CalMT_2 + $NewTotalDiff_CalMT_3 + $NewTotalDiff_CalMT_4 + $NewTotalDiff_CalMT_5 + $NewTotalDiff_CalMT_6;
        $a7f1fgbu02s_PcsMT_All = $a7f1fgbu02s_PcsMT_1 + $a7f1fgbu02s_PcsMT_2 + $a7f1fgbu02s_PcsMT_3 + $a7f1fgbu02s_PcsMT_4 + $a7f1fgbu02s_PcsMT_5 + $a7f1fgbu02s_PcsMT_6;
        $a7f1fgbu02s_PriceMT_All = $a7f1fgbu02s_PriceMT_1 + $a7f1fgbu02s_PriceMT_2 + $a7f1fgbu02s_PriceMT_3 + $a7f1fgbu02s_PriceMT_4 + $a7f1fgbu02s_PriceMT_5 + $a7f1fgbu02s_PriceMT_6;
        $a7f2fgbu10s_PcsMT_All = $a7f2fgbu10s_PcsMT_1 + $a7f2fgbu10s_PcsMT_2 + $a7f2fgbu10s_PcsMT_3 + $a7f2fgbu10s_PcsMT_4 + $a7f2fgbu10s_PcsMT_5 + $a7f2fgbu10s_PcsMT_6;
        $a7f2fgbu10s_PriceMT_All = $a7f2fgbu10s_PriceMT_1 + $a7f2fgbu10s_PriceMT_2 + $a7f2fgbu10s_PriceMT_3 + $a7f2fgbu10s_PriceMT_4 + $a7f2fgbu10s_PriceMT_5 + $a7f2fgbu10s_PriceMT_6;
        $a7f2thbu05s_PcsMT_All = $a7f2thbu05s_PcsMT_1 + $a7f2thbu05s_PcsMT_2 + $a7f2thbu05s_PcsMT_3 + $a7f2thbu05s_PcsMT_4 + $a7f2thbu05s_PcsMT_5 + $a7f2thbu05s_PcsMT_6;
        $a7f2thbu05s_PriceMT_All = $a7f2thbu05s_PriceMT_1 + $a7f2thbu05s_PriceMT_2 + $a7f2thbu05s_PriceMT_3 + $a7f2thbu05s_PriceMT_4 + $a7f2thbu05s_PriceMT_5 + $a7f2thbu05s_PriceMT_6;
        $a7f2debu10s_PcsMT_All = $a7f2debu10s_PcsMT_1 + $a7f2debu10s_PcsMT_2 + $a7f2debu10s_PcsMT_3 + $a7f2debu10s_PcsMT_4 + $a7f2debu10s_PcsMT_5 + $a7f2debu10s_PcsMT_6;
        $a7f2debu10s_PriceMT_All = $a7f2debu10s_PriceMT_1 + $a7f2debu10s_PriceMT_2 + $a7f2debu10s_PriceMT_3 + $a7f2debu10s_PriceMT_4 + $a7f2debu10s_PriceMT_5 + $a7f2debu10s_PriceMT_6;
        $a7f2exbu11s_PcsMT_All = $a7f2exbu11s_PcsMT_1 + $a7f2exbu11s_PcsMT_2 + $a7f2exbu11s_PcsMT_3 + $a7f2exbu11s_PcsMT_4 + $a7f2exbu11s_PcsMT_5 + $a7f2exbu11s_PcsMT_6;
        $a7f2exbu11s_PriceMT_All = $a7f2exbu11s_PriceMT_1 + $a7f2exbu11s_PriceMT_2 + $a7f2exbu11s_PriceMT_3 + $a7f2exbu11s_PriceMT_4 + $a7f2exbu11s_PriceMT_5 + $a7f2exbu11s_PriceMT_6;
        $a7f2twbu04s_PcsMT_All = $a7f2twbu04s_PcsMT_1 + $a7f2twbu04s_PcsMT_2 + $a7f2twbu04s_PcsMT_3 + $a7f2twbu04s_PcsMT_4 + $a7f2twbu04s_PcsMT_5 + $a7f2twbu04s_PcsMT_6;
        $a7f2twbu04s_PriceMT_All = $a7f2twbu04s_PriceMT_1 + $a7f2twbu04s_PriceMT_2 + $a7f2twbu04s_PriceMT_3 + $a7f2twbu04s_PriceMT_4 + $a7f2twbu04s_PriceMT_5 + $a7f2twbu04s_PriceMT_6;
        $a7f2twbu07s_PcsMT_All = $a7f2twbu07s_PcsMT_1 + $a7f2twbu07s_PcsMT_2 + $a7f2twbu07s_PcsMT_3 + $a7f2twbu07s_PcsMT_4 + $a7f2twbu07s_PcsMT_5 + $a7f2twbu07s_PcsMT_6;
        $a7f2twbu07s_PriceMT_All = $a7f2twbu07s_PriceMT_1 + $a7f2twbu07s_PriceMT_2 + $a7f2twbu07s_PriceMT_3 + $a7f2twbu07s_PriceMT_4 + $a7f2twbu07s_PriceMT_5 + $a7f2twbu07s_PriceMT_6;
        $a7f2cebu10s_PcsMT_All = $a7f2cebu10s_PcsMT_1 + $a7f2cebu10s_PcsMT_2 + $a7f2cebu10s_PcsMT_3 + $a7f2cebu10s_PcsMT_4 + $a7f2cebu10s_PcsMT_5 + $a7f2cebu10s_PcsMT_6;
        $a7f2cebu10s_PriceMT_All = $a7f2cebu10s_PriceMT_1 + $a7f2cebu10s_PriceMT_2 + $a7f2cebu10s_PriceMT_3 + $a7f2cebu10s_PriceMT_4 + $a7f2cebu10s_PriceMT_5 + $a7f2cebu10s_PriceMT_6;
        $a8f1fgbu02s_PcsMT_All = $a8f1fgbu02s_PcsMT_1 + $a8f1fgbu02s_PcsMT_2 + $a8f1fgbu02s_PcsMT_3 + $a8f1fgbu02s_PcsMT_4 + $a8f1fgbu02s_PcsMT_5 + $a8f1fgbu02s_PcsMT_6;
        $a8f1fgbu02s_PriceMT_All = $a8f1fgbu02s_PriceMT_1 + $a8f1fgbu02s_PriceMT_2 + $a8f1fgbu02s_PriceMT_3 + $a8f1fgbu02s_PriceMT_4 + $a8f1fgbu02s_PriceMT_5 + $a8f1fgbu02s_PriceMT_6;
        $a8f2fgbu10s_PcsMT_All = $a8f2fgbu10s_PcsMT_1 + $a8f2fgbu10s_PcsMT_2 + $a8f2fgbu10s_PcsMT_3 + $a8f2fgbu10s_PcsMT_4 + $a8f2fgbu10s_PcsMT_5 + $a8f2fgbu10s_PcsMT_6;
        $a8f2fgbu10s_PriceMT_All = $a8f2fgbu10s_PriceMT_1 + $a8f2fgbu10s_PriceMT_2 + $a8f2fgbu10s_PriceMT_3 + $a8f2fgbu10s_PriceMT_4 + $a8f2fgbu10s_PriceMT_5 + $a8f2fgbu10s_PriceMT_6;
        $a8f2thbu05s_PcsMT_All = $a8f2thbu05s_PcsMT_1 + $a8f2thbu05s_PcsMT_2 + $a8f2thbu05s_PcsMT_3 + $a8f2thbu05s_PcsMT_4 + $a8f2thbu05s_PcsMT_5 + $a8f2thbu05s_PcsMT_6;
        $a8f2thbu05s_PriceMT_All = $a8f2thbu05s_PriceMT_1 + $a8f2thbu05s_PriceMT_2 + $a8f2thbu05s_PriceMT_3 + $a8f2thbu05s_PriceMT_4 + $a8f2thbu05s_PriceMT_5 + $a8f2thbu05s_PriceMT_6;
        $a8f2debu10s_PcsMT_All = $a8f2debu10s_PcsMT_1 + $a8f2debu10s_PcsMT_2 + $a8f2debu10s_PcsMT_3 + $a8f2debu10s_PcsMT_4 + $a8f2debu10s_PcsMT_5 + $a8f2debu10s_PcsMT_6;
        $a8f2debu10s_PriceMT_All = $a8f2debu10s_PriceMT_1 + $a8f2debu10s_PriceMT_2 + $a8f2debu10s_PriceMT_3 + $a8f2debu10s_PriceMT_4 + $a8f2debu10s_PriceMT_5 + $a8f2debu10s_PriceMT_6;
        $a8f2exbu11s_PcsMT_All = $a8f2exbu11s_PcsMT_1 + $a8f2exbu11s_PcsMT_2 + $a8f2exbu11s_PcsMT_3 + $a8f2exbu11s_PcsMT_4 + $a8f2exbu11s_PcsMT_5 + $a8f2exbu11s_PcsMT_6;
        $a8f2exbu11s_PriceMT_All = $a8f2exbu11s_PriceMT_1 + $a8f2exbu11s_PriceMT_2 + $a8f2exbu11s_PriceMT_3 + $a8f2exbu11s_PriceMT_4 + $a8f2exbu11s_PriceMT_5 + $a8f2exbu11s_PriceMT_6;
        $a8f2twbu04s_PcsMT_All = $a8f2twbu04s_PcsMT_1 + $a8f2twbu04s_PcsMT_2 + $a8f2twbu04s_PcsMT_3 + $a8f2twbu04s_PcsMT_4 + $a8f2twbu04s_PcsMT_5 + $a8f2twbu04s_PcsMT_6;
        $a8f2twbu04s_PriceMT_All = $a8f2twbu04s_PriceMT_1 + $a8f2twbu04s_PriceMT_2 + $a8f2twbu04s_PriceMT_3 + $a8f2twbu04s_PriceMT_4 + $a8f2twbu04s_PriceMT_5 + $a8f2twbu04s_PriceMT_6;
        $a8f2twbu07s_PcsMT_All = $a8f2twbu07s_PcsMT_1 + $a8f2twbu07s_PcsMT_2 + $a8f2twbu07s_PcsMT_3 + $a8f2twbu07s_PcsMT_4 + $a8f2twbu07s_PcsMT_5 + $a8f2twbu07s_PcsMT_6;
        $a8f2twbu07s_PriceMT_All = $a8f2twbu07s_PriceMT_1 + $a8f2twbu07s_PriceMT_2 + $a8f2twbu07s_PriceMT_3 + $a8f2twbu07s_PriceMT_4 + $a8f2twbu07s_PriceMT_5 + $a8f2twbu07s_PriceMT_6;
        $a8f2cebu10s_PcsMT_All = $a8f2cebu10s_PcsMT_1 + $a8f2cebu10s_PcsMT_2 + $a8f2cebu10s_PcsMT_3 + $a8f2cebu10s_PcsMT_4 + $a8f2cebu10s_PcsMT_5 + $a8f2cebu10s_PcsMT_6;
        $a8f2cebu10s_PriceMT_All = $a8f2cebu10s_PriceMT_1 + $a8f2cebu10s_PriceMT_2 + $a8f2cebu10s_PriceMT_3 + $a8f2cebu10s_PriceMT_4 + $a8f2cebu10s_PriceMT_5 + $a8f2cebu10s_PriceMT_6;
        $DC1_PcsMT_All = $DC1_PcsMT_1 + $DC1_PcsMT_2 + $DC1_PcsMT_3 + $DC1_PcsMT_4 + $DC1_PcsMT_5 + $DC1_PcsMT_6;
        $DC1_PriceMT_All = $DC1_PriceMT_1 + $DC1_PriceMT_2 + $DC1_PriceMT_3 + $DC1_PriceMT_4 + $DC1_PriceMT_5 + $DC1_PriceMT_6;
        $DCP_PcsMT_All = $DCP_PcsMT_1 + $DCP_PcsMT_2 + $DCP_PcsMT_3 + $DCP_PcsMT_4 + $DCP_PcsMT_5 + $DCP_PcsMT_6;
        $DCP_PriceMT_All = $DCP_PriceMT_1 + $DCP_PriceMT_2 + $DCP_PriceMT_3 + $DCP_PriceMT_4 + $DCP_PriceMT_5 + $DCP_PriceMT_6;
        $DCY_PcsMT_All = $DCY_PcsMT_1 + $DCY_PcsMT_2 + $DCY_PcsMT_3 + $DCY_PcsMT_4 + $DCY_PcsMT_5 + $DCY_PcsMT_6;
        $DCY_PriceMT_All = $DCY_PriceMT_1 + $DCY_PriceMT_2 + $DCY_PriceMT_3 + $DCY_PriceMT_4 + $DCY_PriceMT_5 + $DCY_PriceMT_6;
        $DEX_PcsMT_All = $DEX_PcsMT_1 + $DEX_PcsMT_2 + $DEX_PcsMT_3 + $DEX_PcsMT_4 + $DEX_PcsMT_5 + $DEX_PcsMT_6;
        $DEX_PriceMT_All = $DEX_PriceMT_1 + $DEX_PriceMT_2 + $DEX_PriceMT_3 + $DEX_PriceMT_4 + $DEX_PriceMT_5 + $DEX_PriceMT_6;
        

        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW_All =  $Pcs_AfterTW_1 + $Pcs_AfterTW_2 + $Pcs_AfterSTW_1 + $Pcs_AfterSTW_2 + $Pcs_AfterLN_1 + $Pcs_AfterSLN_1;
        $Price_AfterTW_All = $Price_AfterTW_1 + $Price_AfterTW_2 + $Price_AfterSTW_1 + $Price_AfterSTW_2 + $Price_AfterLN_1 + $Price_AfterSLN_1;
        $Pcs_AfterTW_All =  $Pcs_AfterTW_1 + $Pcs_AfterTW_2 + $Pcs_AfterSTW_1 + $Pcs_AfterSTW_2 + $Pcs_AfterLN_1 + $Pcs_AfterSLN_1;
        $Price_AfterTW_All =  $Price_AfterTW_1 + $Price_AfterTW_2 + $Price_AfterSTW_1 + $Price_AfterSTW_2 + $Price_AfterLN_1 + $Price_AfterSLN_1;
        $Po_PcsTW_All = $Po_PcsTW_1 + $Po_PcsTW_2 + $Po_PcsSTW_1 + $Po_PcsSTW_2 + $Po_PcsLN_1 + $Po_PcsSLN_1;
        $Po_PriceTW_All =  $Po_PriceTW_1 + $Po_PriceTW_2 + $Po_PriceSTW_1 + $Po_PriceSTW_2 + $Po_PriceLN_1 + $Po_PriceSLN_1;
        $Neg_PcsTW_All =  $Neg_PcsTW_1 + $Neg_PcsTW_2 + $Neg_PcsSTW_1 + $Neg_PcsSTW_2 + $Neg_PcsLN_1 + $Neg_PcsSLN_1;
        $Neg_PriceTW_All =  $Neg_PriceTW_1 + $Neg_PriceTW_2 + $Neg_PriceSTW_1 + $Neg_PriceSTW_2 + $Neg_PriceLN_1 + $Neg_PriceSLN_1;
        $BackChange_PcsTW_All =  $BackChange_PcsTW_1 + $BackChange_PcsTW_2 + $BackChange_PcsSTW_1 + $BackChange_PcsSTW_2 + $BackChange_PcsLN_1 + $BackChange_PcsSLN_1;
        $BackChange_PriceTW_All =  $BackChange_PriceTW_1 + $BackChange_PriceTW_2 + $BackChange_PriceSTW_1 + $BackChange_PriceSTW_2 + $BackChange_PriceLN_1 + $BackChange_PriceSLN_1;
        $Purchase_PcsTW_All =  $Purchase_PcsTW_1 + $Purchase_PcsTW_2 + $Purchase_PcsSTW_1 + $Purchase_PcsSTW_2 + $Purchase_PcsLN_1 + $Purchase_PcsSLN_1;
        $Purchase_PriceTW_All =  $Purchase_PriceTW_1 + $Purchase_PriceTW_2 + $Purchase_PriceSTW_1 + $Purchase_PriceSTW_2 + $Purchase_PriceLN_1 + $Purchase_PriceSLN_1;
        $ReciveTranfer_PcsTW_All =  $ReciveTranfer_PcsTW_1 + $ReciveTranfer_PcsTW_2 + $ReciveTranfer_PcsSTW_1 + $ReciveTranfer_PcsSTW_2 + $ReciveTranfer_PcsLN_1 + $ReciveTranfer_PcsSLN_1;
        $ReciveTranfer_PriceTW_All =  $ReciveTranfer_PriceTW_1 + $ReciveTranfer_PriceTW_2 + $ReciveTranfer_PriceSTW_1 + $ReciveTranfer_PriceSTW_2 + $ReciveTranfer_PriceLN_1 + $ReciveTranfer_PriceSLN_1;
        $ReturnItem_PCSTW_All =  $ReturnItem_PCSTW_1 + $ReturnItem_PCSTW_2 + $ReturnItem_PCSSTW_1 + $ReturnItem_PCSSTW_2 + $ReturnItem_PCSLN_1 + $ReturnItem_PCSSLN_1;
        $ReturnItem_PriceTW_All =  $ReturnItem_PriceTW_1 + $ReturnItem_PriceTW_2 + $ReturnItem_PriceSTW_1 + $ReturnItem_PriceSTW_2 + $ReturnItem_PriceLN_1 + $ReturnItem_PriceSLN_1;
        $AllIn_PcsTW_All =  $AllIn_PcsTW_1 + $AllIn_PcsTW_2 + $AllIn_PcsSTW_1 + $AllIn_PcsSTW_2 + $AllIn_PcsLN_1 + $AllIn_PcsSLN_1;
        $AllIn_PriceTW_All =  $AllIn_PriceTW_1 + $AllIn_PriceTW_2 + $AllIn_PriceSTW_1 + $AllIn_PriceSTW_2 + $AllIn_PriceLN_1 + $AllIn_PriceSLN_1;
        $SendSale_PcsTW_All =  $SendSale_PcsTW_1 + $SendSale_PcsTW_2 + $SendSale_PcsSTW_1 + $SendSale_PcsSTW_2 + $SendSale_PcsLN_1 + $SendSale_PcsSLN_1;
        $SendSale_PriceTW_All =  $SendSale_PriceTW_1 + $SendSale_PriceTW_2 + $SendSale_PriceSTW_1 + $SendSale_PriceSTW_2 + $SendSale_PriceLN_1 + $SendSale_PriceSLN_1;
        $ReciveTranOut_PcsTW_All =  $ReciveTranOut_PcsTW_1 + $ReciveTranOut_PcsTW_2 + $ReciveTranOut_PcsSTW_1 + $ReciveTranOut_PcsSTW_2 + $ReciveTranOut_PcsLN_1 + $ReciveTranOut_PcsSLN_1;
        $ReciveTranOut_PriceTW_All =  $ReciveTranOut_PriceTW_1 + $ReciveTranOut_PriceTW_2 + $ReciveTranOut_PriceSTW_1 + $ReciveTranOut_PriceSTW_2 + $ReciveTranOut_PriceLN_1 + $ReciveTranOut_PriceSLN_1;
        $ReturnStore_PcsTW_All =  $ReturnStore_PcsTW_1 + $ReturnStore_PcsTW_2 + $ReturnStore_PcsSTW_1 + $ReturnStore_PcsSTW_2 + $ReturnStore_PcsLN_1 + $ReturnStore_PcsSLN_1;
        $ReturnStore_PriceTW_All =  $ReturnStore_PriceTW_1 + $ReturnStore_PriceTW_2 + $ReturnStore_PriceSTW_1 + $ReturnStore_PriceSTW_2 + $ReturnStore_PriceLN_1 + $ReturnStore_PriceSLN_1;
        $AllOut_PcsTW_All =  $AllOut_PcsTW_1 + $AllOut_PcsTW_2 + $AllOut_PcsSTW_1 + $AllOut_PcsSTW_2 + $AllOut_PcsLN_1 + $AllOut_PcsSLN_1;
        $AllOut_PriceTW_All =  $AllOut_PriceTW_1 + $AllOut_PriceTW_2 + $AllOut_PriceSTW_1 + $AllOut_PriceSTW_2 + $AllOut_PriceLN_1 + $AllOut_PriceSLN_1;
        $Calculate_PcsTW_All =  $Calculate_PcsTW_1 + $Calculate_PcsTW_2 + $Calculate_PcsSTW_1 + $Calculate_PcsSTW_2 + $Calculate_PcsLN_1 + $Calculate_PcsSLN_1;
        $Calculate_PriceTW_All =  $Calculate_PriceTW_1 + $Calculate_PriceTW_2 + $Calculate_PriceSTW_1 + $Calculate_PriceSTW_2 + $Calculate_PriceLN_1 + $Calculate_PriceSLN_1;
        $NewCalculate_PcsTW_All = $NewCalculate_PcsTW_1 + $NewCalculate_PcsTW_2 + $NewCalculate_PcsSTW_1 + $NewCalculate_PcsSTW_2 + $NewCalculate_PcsLN_1 + $NewCalculate_PcsSLN_1;
        $NewCalculate_PriceTW_All = $NewCalculate_PriceTW_1 + $NewCalculate_PriceTW_2 + $NewCalculate_PriceSTW_1 + $NewCalculate_PriceSTW_2 + $NewCalculate_PriceLN_1 + $NewCalculate_PriceSLN_1;
        $Diff_PcsTW_All = $Diff_PcsTW_1 + $Diff_PcsTW_2 + $Diff_PcsSTW_1 + $Diff_PcsSTW_2 + $Diff_PcsLN_1 + $Diff_PcsSLN_1;
        $Diff_PriceTW_All = $Diff_PriceTW_1 + $Diff_PriceTW_2 + $Diff_PriceSTW_1 + $Diff_PriceSTW_2 + $Diff_PriceLN_1 + $Diff_PriceSLN_1;
        $NewTotal_PcsTW_All = $NewTotal_PcsTW_1 + $NewTotal_PcsTW_2 + $NewTotal_PcsSTW_1 + $NewTotal_PcsSTW_2 + $NewTotal_PcsLN_1 + $NewTotal_PcsSLN_1;
        $NewTotal_PriceTW_All = $NewTotal_PriceTW_1 + $NewTotal_PriceTW_2 + $NewTotal_PriceSTW_1 + $NewTotal_PriceSTW_2 + $NewTotal_PriceLN_1 + $NewTotal_PriceSLN_1;
        $NewTotalDiff_NavTW_All = $NewTotalDiff_NavTW_1 + $NewTotalDiff_NavTW_2 + $NewTotalDiff_NavSTW_1 + $NewTotalDiff_NavSTW_2 + $NewTotalDiff_NavLN_1 + $NewTotalDiff_NavSLN_1;
        $NewTotalDiff_CalTW_All = $NewTotalDiff_CalTW_1 + $NewTotalDiff_CalTW_2 + $NewTotalDiff_CalSTW_1 + $NewTotalDiff_CalSTW_2 + $NewTotalDiff_CalLN_1 + $NewTotalDiff_CalSLN_1;
        $a7f1fgbu02s_PcsTW_All = $a7f1fgbu02s_PcsTW_1 + $a7f1fgbu02s_PcsTW_2 + $a7f1fgbu02s_PcsSTW_1 + $a7f1fgbu02s_PcsSTW_2 + $a7f1fgbu02s_PcsLN_1 + $a7f1fgbu02s_PcsSLN_1;
        $a7f1fgbu02s_PriceTW_All = $a7f1fgbu02s_PriceTW_1 + $a7f1fgbu02s_PriceTW_2 + $a7f1fgbu02s_PriceSTW_1 + $a7f1fgbu02s_PriceSTW_2 + $a7f1fgbu02s_PriceLN_1 + $a7f1fgbu02s_PriceSLN_1;
        $a7f2fgbu10s_PcsTW_All = $a7f2fgbu10s_PcsTW_1 + $a7f2fgbu10s_PcsTW_2 + $a7f2fgbu10s_PcsSTW_1 + $a7f2fgbu10s_PcsSTW_2 + $a7f2fgbu10s_PcsLN_1 + $a7f2fgbu10s_PcsSLN_1;
        $a7f2fgbu10s_PriceTW_All = $a7f2fgbu10s_PriceTW_1 + $a7f2fgbu10s_PriceTW_2 + $a7f2fgbu10s_PriceSTW_1 + $a7f2fgbu10s_PriceSTW_2 + $a7f2fgbu10s_PriceLN_1 + $a7f2fgbu10s_PriceSLN_1;
        $a7f2thbu05s_PcsTW_All = $a7f2thbu05s_PcsTW_1 + $a7f2thbu05s_PcsTW_2 + $a7f2thbu05s_PcsSTW_1 + $a7f2thbu05s_PcsSTW_2 + $a7f2thbu05s_PcsLN_1 + $a7f2thbu05s_PcsSLN_1;
        $a7f2thbu05s_PriceTW_All = $a7f2thbu05s_PriceTW_1 + $a7f2thbu05s_PriceTW_2 + $a7f2thbu05s_PriceSTW_1 + $a7f2thbu05s_PriceSTW_2 + $a7f2thbu05s_PriceLN_1 + $a7f2thbu05s_PriceSLN_1;
        $a7f2debu10s_PcsTW_All = $a7f2debu10s_PcsTW_1 + $a7f2debu10s_PcsTW_2 + $a7f2debu10s_PcsSTW_1 + $a7f2debu10s_PcsSTW_2 + $a7f2debu10s_PcsLN_1 + $a7f2debu10s_PcsSLN_1;
        $a7f2debu10s_PriceTW_All = $a7f2debu10s_PriceTW_1 + $a7f2debu10s_PriceTW_2 + $a7f2debu10s_PriceSTW_1 + $a7f2debu10s_PriceSTW_2 + $a7f2debu10s_PriceLN_1 + $a7f2debu10s_PriceSLN_1;
        $a7f2exbu11s_PcsTW_All = $a7f2exbu11s_PcsTW_1 + $a7f2exbu11s_PcsTW_2 + $a7f2exbu11s_PcsSTW_1 + $a7f2exbu11s_PcsSTW_2 + $a7f2exbu11s_PcsLN_1 + $a7f2exbu11s_PcsSLN_1;
        $a7f2exbu11s_PriceTW_All = $a7f2exbu11s_PriceTW_1 + $a7f2exbu11s_PriceTW_2 + $a7f2exbu11s_PriceSTW_1 + $a7f2exbu11s_PriceSTW_2 + $a7f2exbu11s_PriceLN_1 + $a7f2exbu11s_PriceSLN_1;
        $a7f2twbu04s_PcsTW_All = $a7f2twbu04s_PcsTW_1 + $a7f2twbu04s_PcsTW_2 + $a7f2twbu04s_PcsSTW_1 + $a7f2twbu04s_PcsSTW_2 + $a7f2twbu04s_PcsLN_1 + $a7f2twbu04s_PcsSLN_1;
        $a7f2twbu04s_PriceTW_All = $a7f2twbu04s_PriceTW_1 + $a7f2twbu04s_PriceTW_2 + $a7f2twbu04s_PriceSTW_1 + $a7f2twbu04s_PriceSTW_2 + $a7f2twbu04s_PriceLN_1 + $a7f2twbu04s_PriceSLN_1;
        $a7f2twbu07s_PcsTW_All = $a7f2twbu07s_PcsTW_1 + $a7f2twbu07s_PcsTW_2 + $a7f2twbu07s_PcsSTW_1 + $a7f2twbu07s_PcsSTW_2 + $a7f2twbu07s_PcsLN_1 + $a7f2twbu07s_PcsSLN_1;
        $a7f2twbu07s_PriceTW_All = $a7f2twbu07s_PriceTW_1 + $a7f2twbu07s_PriceTW_2 + $a7f2twbu07s_PriceSTW_1 + $a7f2twbu07s_PriceSTW_2 + $a7f2twbu07s_PriceLN_1 + $a7f2twbu07s_PriceSLN_1;
        $a7f2cebu10s_PcsTW_All = $a7f2cebu10s_PcsTW_1 + $a7f2cebu10s_PcsTW_2 + $a7f2cebu10s_PcsSTW_1 + $a7f2cebu10s_PcsSTW_2 + $a7f2cebu10s_PcsLN_1 + $a7f2cebu10s_PcsSLN_1;
        $a7f2cebu10s_PriceTW_All = $a7f2cebu10s_PriceTW_1 + $a7f2cebu10s_PriceTW_2 + $a7f2cebu10s_PriceSTW_1 + $a7f2cebu10s_PriceSTW_2 + $a7f2cebu10s_PriceLN_1 + $a7f2cebu10s_PriceSLN_1;
        $a8f1fgbu02s_PcsTW_All = $a8f1fgbu02s_PcsTW_1 + $a8f1fgbu02s_PcsTW_2 + $a8f1fgbu02s_PcsSTW_1 + $a8f1fgbu02s_PcsSTW_2 + $a8f1fgbu02s_PcsLN_1 + $a8f1fgbu02s_PcsSLN_1;
        $a8f1fgbu02s_PriceTW_All = $a8f1fgbu02s_PriceTW_1 + $a8f1fgbu02s_PriceTW_2 + $a8f1fgbu02s_PriceSTW_1 + $a8f1fgbu02s_PriceSTW_2 + $a8f1fgbu02s_PriceLN_1 + $a8f1fgbu02s_PriceSLN_1;
        $a8f2fgbu10s_PcsTW_All = $a8f2fgbu10s_PcsTW_1 + $a8f2fgbu10s_PcsTW_2 + $a8f2fgbu10s_PcsSTW_1 + $a8f2fgbu10s_PcsSTW_2 + $a8f2fgbu10s_PcsLN_1 + $a8f2fgbu10s_PcsSLN_1;
        $a8f2fgbu10s_PriceTW_All = $a8f2fgbu10s_PriceTW_1 + $a8f2fgbu10s_PriceTW_2 + $a8f2fgbu10s_PriceSTW_1 + $a8f2fgbu10s_PriceSTW_2 + $a8f2fgbu10s_PriceLN_1 + $a8f2fgbu10s_PriceSLN_1;
        $a8f2thbu05s_PcsTW_All = $a8f2thbu05s_PcsTW_1 + $a8f2thbu05s_PcsTW_2 + $a8f2thbu05s_PcsSTW_1 + $a8f2thbu05s_PcsSTW_2 + $a8f2thbu05s_PcsLN_1 + $a8f2thbu05s_PcsSLN_1;
        $a8f2thbu05s_PriceTW_All = $a8f2thbu05s_PriceTW_1 + $a8f2thbu05s_PriceTW_2 + $a8f2thbu05s_PriceSTW_1 + $a8f2thbu05s_PriceSTW_2 + $a8f2thbu05s_PriceLN_1 + $a8f2thbu05s_PriceSLN_1;
        $a8f2debu10s_PcsTW_All = $a8f2debu10s_PcsTW_1 + $a8f2debu10s_PcsTW_2 + $a8f2debu10s_PcsSTW_1 + $a8f2debu10s_PcsSTW_2 + $a8f2debu10s_PcsLN_1 + $a8f2debu10s_PcsSLN_1;
        $a8f2debu10s_PriceTW_All = $a8f2debu10s_PriceTW_1 + $a8f2debu10s_PriceTW_2 + $a8f2debu10s_PriceSTW_1 + $a8f2debu10s_PriceSTW_2 + $a8f2debu10s_PriceLN_1 + $a8f2debu10s_PriceSLN_1;
        $a8f2exbu11s_PcsTW_All = $a8f2exbu11s_PcsTW_1 + $a8f2exbu11s_PcsTW_2 + $a8f2exbu11s_PcsSTW_1 + $a8f2exbu11s_PcsSTW_2 + $a8f2exbu11s_PcsLN_1 + $a8f2exbu11s_PcsSLN_1;
        $a8f2exbu11s_PriceTW_All = $a8f2exbu11s_PriceTW_1 + $a8f2exbu11s_PriceTW_2 + $a8f2exbu11s_PriceSTW_1 + $a8f2exbu11s_PriceSTW_2 + $a8f2exbu11s_PriceLN_1 + $a8f2exbu11s_PriceSLN_1;
        $a8f2twbu04s_PcsTW_All = $a8f2twbu04s_PcsTW_1 + $a8f2twbu04s_PcsTW_2 + $a8f2twbu04s_PcsSTW_1 + $a8f2twbu04s_PcsSTW_2 + $a8f2twbu04s_PcsLN_1 + $a8f2twbu04s_PcsSLN_1;
        $a8f2twbu04s_PriceTW_All = $a8f2twbu04s_PriceTW_1 + $a8f2twbu04s_PriceTW_2 + $a8f2twbu04s_PriceSTW_1 + $a8f2twbu04s_PriceSTW_2 + $a8f2twbu04s_PriceLN_1 + $a8f2twbu04s_PriceSLN_1;
        $a8f2twbu07s_PcsTW_All = $a8f2twbu07s_PcsTW_1 + $a8f2twbu07s_PcsTW_2 + $a8f2twbu07s_PcsSTW_1 + $a8f2twbu07s_PcsSTW_2 + $a8f2twbu07s_PcsLN_1 + $a8f2twbu07s_PcsSLN_1;
        $a8f2twbu07s_PriceTW_All = $a8f2twbu07s_PriceTW_1 + $a8f2twbu07s_PriceTW_2 + $a8f2twbu07s_PriceSTW_1 + $a8f2twbu07s_PriceSTW_2 + $a8f2twbu07s_PriceLN_1 + $a8f2twbu07s_PriceSLN_1;
        $a8f2cebu10s_PcsTW_All = $a8f2cebu10s_PcsTW_1 + $a8f2cebu10s_PcsTW_2 + $a8f2cebu10s_PcsSTW_1 + $a8f2cebu10s_PcsSTW_2 + $a8f2cebu10s_PcsLN_1 + $a8f2cebu10s_PcsSLN_1;
        $a8f2cebu10s_PriceTW_All = $a8f2cebu10s_PriceTW_1 + $a8f2cebu10s_PriceTW_2 + $a8f2cebu10s_PriceSTW_1 + $a8f2cebu10s_PriceSTW_2 + $a8f2cebu10s_PriceLN_1 + $a8f2cebu10s_PriceSLN_1;
        $DC1_PcsTW_All = $DC1_PcsTW_1 + $DC1_PcsTW_2 + $DC1_PcsSTW_1 + $DC1_PcsSTW_2 + $DC1_PcsLN_1 + $DC1_PcsSLN_1;
        $DC1_PriceTW_All = $DC1_PriceTW_1 + $DC1_PriceTW_2 + $DC1_PriceSTW_1 + $DC1_PriceSTW_2 + $DC1_PriceLN_1 + $DC1_PriceSLN_1;
        $DCP_PcsTW_All = $DCP_PcsTW_1 + $DCP_PcsTW_2 + $DCP_PcsSTW_1 + $DCP_PcsSTW_2 + $DCP_PcsLN_1 + $DCP_PcsSLN_1;
        $DCP_PriceTW_All = $DCP_PriceTW_1 + $DCP_PriceTW_2 + $DCP_PriceSTW_1 + $DCP_PriceSTW_2 + $DCP_PriceLN_1 + $DCP_PriceSLN_1;
        $DCY_PcsTW_All = $DCY_PcsTW_1 + $DCY_PcsTW_2 + $DCY_PcsSTW_1 + $DCY_PcsSTW_2 + $DCY_PcsLN_1 + $DCY_PcsSLN_1;
        $DCY_PriceTW_All = $DCY_PriceTW_1 + $DCY_PriceTW_2 + $DCY_PriceSTW_1 + $DCY_PriceSTW_2 + $DCY_PriceLN_1 + $DCY_PriceSLN_1;
        $DEX_PcsTW_All = $DEX_PcsTW_1 + $DEX_PcsTW_2 + $DEX_PcsSTW_1 + $DEX_PcsSTW_2 + $DEX_PcsLN_1 + $DEX_PcsSLN_1;
        $DEX_PriceTW_All = $DEX_PriceTW_1 + $DEX_PriceTW_2 + $DEX_PriceSTW_1 + $DEX_PriceSTW_2 + $DEX_PriceLN_1 + $DEX_PriceSLN_1;
        

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

        $Pcs_AfterSNT_1 = number_format($Pcs_AfterSNT_1, 0);
        $Price_AfterSNT_1 = number_format($Price_AfterSNT_1, 0);
        $Po_PcsSNT_1 = number_format($Po_PcsSNT_1, 0);
        $Po_PriceSNT_1 = number_format($Po_PriceSNT_1, 0);
        $Neg_PcsSNT_1 = number_format($Neg_PcsSNT_1, 0);
        $Neg_PriceSNT_1 = number_format($Neg_PriceSNT_1, 0);
        $BackChange_PcsSNT_1 = number_format($BackChange_PcsSNT_1, 0);
        $BackChange_PriceSNT_1 = number_format($BackChange_PriceSNT_1, 0);
        $Purchase_PcsSNT_1 = number_format($Purchase_PcsSNT_1, 0);
        $Purchase_PriceSNT_1 = number_format($Purchase_PriceSNT_1, 0);
        $ReciveTranfer_PcsSNT_1 = number_format($ReciveTranfer_PcsSNT_1, 0);
        $ReciveTranfer_PriceSNT_1 = number_format($ReciveTranfer_PriceSNT_1, 0);
        $ReturnItem_PCSSNT_1 = number_format($ReturnItem_PCSSNT_1, 0);
        $ReturnItem_PriceSNT_1 = number_format($ReturnItem_PriceSNT_1, 0);
        $AllIn_PcsSNT_1 = number_format($AllIn_PcsSNT_1, 0);
        $AllIn_PriceSNT_1 = number_format($AllIn_PriceSNT_1, 0);
        $SendSale_PcsSNT_1 = number_format($SendSale_PcsSNT_1, 0);
        $SendSale_PriceSNT_1 = number_format($SendSale_PriceSNT_1, 0);
        $ReciveTranOut_PcsSNT_1 = number_format($ReciveTranOut_PcsSNT_1, 0);
        $ReciveTranOut_PriceSNT_1 = number_format($ReciveTranOut_PriceSNT_1, 0);
        $ReturnStore_PcsSNT_1 = number_format($ReturnStore_PcsSNT_1, 0);
        $ReturnStore_PriceSNT_1 = number_format($ReturnStore_PriceSNT_1, 0);
        $AllOut_PcsSNT_1 = number_format($AllOut_PcsSNT_1, 0);
        $AllOut_PriceSNT_1 = number_format($AllOut_PriceSNT_1, 0);
        $Calculate_PcsSNT_1 = number_format($Calculate_PcsSNT_1, 0);
        $Calculate_PriceSNT_1 = number_format($Calculate_PriceSNT_1, 0);
        $NewCalculate_PcsSNT_1 = number_format($NewCalculate_PcsSNT_1, 0);
        $NewCalculate_PriceSNT_1 = number_format($NewCalculate_PriceSNT_1, 0);
        $Diff_PcsSNT_1 = number_format($Diff_PcsSNT_1, 0);
        $Diff_PriceSNT_1 = number_format($Diff_PriceSNT_1, 0);
        $NewTotal_PcsSNT_1 = number_format($NewTotal_PcsSNT_1, 0);
        $NewTotal_PriceSNT_1 = number_format($NewTotal_PriceSNT_1, 0);
        $NewTotalDiff_NavSNT_1 = number_format($NewTotalDiff_NavSNT_1, 0);
        $NewTotalDiff_CalSNT_1 = number_format($NewTotalDiff_CalSNT_1, 0);
        $a7f1fgbu02s_PcsSNT_1 = number_format($a7f1fgbu02s_PcsSNT_1, 0);
        $a7f1fgbu02s_PriceSNT_1 = number_format($a7f1fgbu02s_PriceSNT_1, 0);
        $a7f2fgbu10s_PcsSNT_1 = number_format($a7f2fgbu10s_PcsSNT_1, 0);
        $a7f2fgbu10s_PriceSNT_1 = number_format($a7f2fgbu10s_PriceSNT_1, 0);
        $a7f2thbu05s_PcsSNT_1 = number_format($a7f2thbu05s_PcsSNT_1, 0);
        $a7f2thbu05s_PriceSNT_1 = number_format($a7f2thbu05s_PriceSNT_1, 0);
        $a7f2debu10s_PcsSNT_1 = number_format($a7f2debu10s_PcsSNT_1, 0);
        $a7f2debu10s_PriceSNT_1 = number_format($a7f2debu10s_PriceSNT_1, 0);
        $a7f2exbu11s_PcsSNT_1 = number_format($a7f2exbu11s_PcsSNT_1, 0);
        $a7f2exbu11s_PriceSNT_1 = number_format($a7f2exbu11s_PriceSNT_1, 0);
        $a7f2twbu04s_PcsSNT_1 = number_format($a7f2twbu04s_PcsSNT_1, 0);
        $a7f2twbu04s_PriceSNT_1 = number_format($a7f2twbu04s_PriceSNT_1, 0);
        $a7f2twbu07s_PcsSNT_1 = number_format($a7f2twbu07s_PcsSNT_1, 0);
        $a7f2twbu07s_PriceSNT_1 = number_format($a7f2twbu07s_PriceSNT_1, 0);
        $a7f2cebu10s_PcsSNT_1 = number_format($a7f2cebu10s_PcsSNT_1, 0);
        $a7f2cebu10s_PriceSNT_1 = number_format($a7f2cebu10s_PriceSNT_1, 0);
        $a8f1fgbu02s_PcsSNT_1 = number_format($a8f1fgbu02s_PcsSNT_1, 0);
        $a8f1fgbu02s_PriceSNT_1 = number_format($a8f1fgbu02s_PriceSNT_1, 0);
        $a8f2fgbu10s_PcsSNT_1 = number_format($a8f2fgbu10s_PcsSNT_1, 0);
        $a8f2fgbu10s_PriceSNT_1 = number_format($a8f2fgbu10s_PriceSNT_1, 0);
        $a8f2thbu05s_PcsSNT_1 = number_format($a8f2thbu05s_PcsSNT_1, 0);
        $a8f2thbu05s_PriceSNT_1 = number_format($a8f2thbu05s_PriceSNT_1, 0);
        $a8f2debu10s_PcsSNT_1 = number_format($a8f2debu10s_PcsSNT_1, 0);
        $a8f2debu10s_PriceSNT_1 = number_format($a8f2debu10s_PriceSNT_1, 0);
        $a8f2exbu11s_PcsSNT_1 = number_format($a8f2exbu11s_PcsSNT_1, 0);
        $a8f2exbu11s_PriceSNT_1 = number_format($a8f2exbu11s_PriceSNT_1, 0);
        $a8f2twbu04s_PcsSNT_1 = number_format($a8f2twbu04s_PcsSNT_1, 0);
        $a8f2twbu04s_PriceSNT_1 = number_format($a8f2twbu04s_PriceSNT_1, 0);
        $a8f2twbu07s_PcsSNT_1 = number_format($a8f2twbu07s_PcsSNT_1, 0);
        $a8f2twbu07s_PriceSNT_1 = number_format($a8f2twbu07s_PriceSNT_1, 0);
        $a8f2cebu10s_PcsSNT_1 = number_format($a8f2cebu10s_PcsSNT_1, 0);
        $a8f2cebu10s_PriceSNT_1 = number_format($a8f2cebu10s_PriceSNT_1, 0);
        $DC1_PcsSNT_1 = number_format($DC1_PcsSNT_1, 0);
        $DC1_PriceSNT_1 = number_format($DC1_PriceSNT_1, 0);
        $DCP_PcsSNT_1 = number_format($DCP_PcsSNT_1, 0);
        $DCP_PriceSNT_1 = number_format($DCP_PriceSNT_1, 0);
        $DCY_PcsSNT_1 = number_format($DCY_PcsSNT_1, 0);
        $DCY_PriceSNT_1 = number_format($DCY_PriceSNT_1, 0);
        $DEX_PcsSNT_1 = number_format($DEX_PcsSNT_1, 0);
        $DEX_PriceSNT_1 = number_format($DEX_PriceSNT_1, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////


        $Pcs_AfterSNT_2 = number_format($Pcs_AfterSNT_2, 0);
        $Price_AfterSNT_2 = number_format($Price_AfterSNT_2, 0);
        $Po_PcsSNT_2 = number_format($Po_PcsSNT_2, 0);
        $Po_PriceSNT_2 = number_format($Po_PriceSNT_2, 0);
        $Neg_PcsSNT_2 = number_format($Neg_PcsSNT_2, 0);
        $Neg_PriceSNT_2 = number_format($Neg_PriceSNT_2, 0);
        $BackChange_PcsSNT_2 = number_format($BackChange_PcsSNT_2, 0);
        $BackChange_PriceSNT_2 = number_format($BackChange_PriceSNT_2, 0);
        $Purchase_PcsSNT_2 = number_format($Purchase_PcsSNT_2, 0);
        $Purchase_PriceSNT_2 = number_format($Purchase_PriceSNT_2, 0);
        $ReciveTranfer_PcsSNT_2 = number_format($ReciveTranfer_PcsSNT_2, 0);
        $ReciveTranfer_PriceSNT_2 = number_format($ReciveTranfer_PriceSNT_2, 0);
        $ReturnItem_PCSSNT_2 = number_format($ReturnItem_PCSSNT_2, 0);
        $ReturnItem_PriceSNT_2 = number_format($ReturnItem_PriceSNT_2, 0);
        $AllIn_PcsSNT_2 = number_format($AllIn_PcsSNT_2, 0);
        $AllIn_PriceSNT_2 = number_format($AllIn_PriceSNT_2, 0);
        $SendSale_PcsSNT_2 = number_format($SendSale_PcsSNT_2, 0);
        $SendSale_PriceSNT_2 = number_format($SendSale_PriceSNT_2, 0);
        $ReciveTranOut_PcsSNT_2 = number_format($ReciveTranOut_PcsSNT_2, 0);
        $ReciveTranOut_PriceSNT_2 = number_format($ReciveTranOut_PriceSNT_2, 0);
        $ReturnStore_PcsSNT_2 = number_format($ReturnStore_PcsSNT_2, 0);
        $ReturnStore_PriceSNT_2 = number_format($ReturnStore_PriceSNT_2, 0);
        $AllOut_PcsSNT_2 = number_format($AllOut_PcsSNT_2, 0);
        $AllOut_PriceSNT_2 = number_format($AllOut_PriceSNT_2, 0);
        $Calculate_PcsSNT_2 = number_format($Calculate_PcsSNT_2, 0);
        $Calculate_PriceSNT_2 = number_format($Calculate_PriceSNT_2, 0);
        $NewCalculate_PcsSNT_2 = number_format($NewCalculate_PcsSNT_2, 0);
        $NewCalculate_PriceSNT_2 = number_format($NewCalculate_PriceSNT_2, 0);
        $Diff_PcsSNT_2 = number_format($Diff_PcsSNT_2, 0);
        $Diff_PriceSNT_2 = number_format($Diff_PriceSNT_2, 0);
        $NewTotal_PcsSNT_2 = number_format($NewTotal_PcsSNT_2, 0);
        $NewTotal_PriceSNT_2 = number_format($NewTotal_PriceSNT_2, 0);
        $NewTotalDiff_NavSNT_2 = number_format($NewTotalDiff_NavSNT_2, 0);
        $NewTotalDiff_CalSNT_2 = number_format($NewTotalDiff_CalSNT_2, 0);
        $a7f1fgbu02s_PcsSNT_2 = number_format($a7f1fgbu02s_PcsSNT_2, 0);
        $a7f1fgbu02s_PriceSNT_2 = number_format($a7f1fgbu02s_PriceSNT_2, 0);
        $a7f2fgbu10s_PcsSNT_2 = number_format($a7f2fgbu10s_PcsSNT_2, 0);
        $a7f2fgbu10s_PriceSNT_2 = number_format($a7f2fgbu10s_PriceSNT_2, 0);
        $a7f2thbu05s_PcsSNT_2 = number_format($a7f2thbu05s_PcsSNT_2, 0);
        $a7f2thbu05s_PriceSNT_2 = number_format($a7f2thbu05s_PriceSNT_2, 0);
        $a7f2debu10s_PcsSNT_2 = number_format($a7f2debu10s_PcsSNT_2, 0);
        $a7f2debu10s_PriceSNT_2 = number_format($a7f2debu10s_PriceSNT_2, 0);
        $a7f2exbu11s_PcsSNT_2 = number_format($a7f2exbu11s_PcsSNT_2, 0);
        $a7f2exbu11s_PriceSNT_2 = number_format($a7f2exbu11s_PriceSNT_2, 0);
        $a7f2twbu04s_PcsSNT_2 = number_format($a7f2twbu04s_PcsSNT_2, 0);
        $a7f2twbu04s_PriceSNT_2 = number_format($a7f2twbu04s_PriceSNT_2, 0);
        $a7f2twbu07s_PcsSNT_2 = number_format($a7f2twbu07s_PcsSNT_2, 0);
        $a7f2twbu07s_PriceSNT_2 = number_format($a7f2twbu07s_PriceSNT_2, 0);
        $a7f2cebu10s_PcsSNT_2 = number_format($a7f2cebu10s_PcsSNT_2, 0);
        $a7f2cebu10s_PriceSNT_2 = number_format($a7f2cebu10s_PriceSNT_2, 0);
        $a8f1fgbu02s_PcsSNT_2 = number_format($a8f1fgbu02s_PcsSNT_2, 0);
        $a8f1fgbu02s_PriceSNT_2 = number_format($a8f1fgbu02s_PriceSNT_2, 0);
        $a8f2fgbu10s_PcsSNT_2 = number_format($a8f2fgbu10s_PcsSNT_2, 0);
        $a8f2fgbu10s_PriceSNT_2 = number_format($a8f2fgbu10s_PriceSNT_2, 0);
        $a8f2thbu05s_PcsSNT_2 = number_format($a8f2thbu05s_PcsSNT_2, 0);
        $a8f2thbu05s_PriceSNT_2 = number_format($a8f2thbu05s_PriceSNT_2, 0);
        $a8f2debu10s_PcsSNT_2 = number_format($a8f2debu10s_PcsSNT_2, 0);
        $a8f2debu10s_PriceSNT_2 = number_format($a8f2debu10s_PriceSNT_2, 0);
        $a8f2exbu11s_PcsSNT_2 = number_format($a8f2exbu11s_PcsSNT_2, 0);
        $a8f2exbu11s_PriceSNT_2 = number_format($a8f2exbu11s_PriceSNT_2, 0);
        $a8f2twbu04s_PcsSNT_2 = number_format($a8f2twbu04s_PcsSNT_2, 0);
        $a8f2twbu04s_PriceSNT_2 = number_format($a8f2twbu04s_PriceSNT_2, 0);
        $a8f2twbu07s_PcsSNT_2 = number_format($a8f2twbu07s_PcsSNT_2, 0);
        $a8f2twbu07s_PriceSNT_2 = number_format($a8f2twbu07s_PriceSNT_2, 0);
        $a8f2cebu10s_PcsSNT_2 = number_format($a8f2cebu10s_PcsSNT_2, 0);
        $a8f2cebu10s_PriceSNT_2 = number_format($a8f2cebu10s_PriceSNT_2, 0);
        $DC1_PcsSNT_2 = number_format($DC1_PcsSNT_2, 0);
        $DC1_PriceSNT_2 = number_format($DC1_PriceSNT_2, 0);
        $DCP_PcsSNT_2 = number_format($DCP_PcsSNT_2, 0);
        $DCP_PriceSNT_2 = number_format($DCP_PriceSNT_2, 0);
        $DCY_PcsSNT_2 = number_format($DCY_PcsSNT_2, 0);
        $DCY_PriceSNT_2 = number_format($DCY_PriceSNT_2, 0);
        $DEX_PcsSNT_2 = number_format($DEX_PcsSNT_2, 0);
        $DEX_PriceSNT_2 = number_format($DEX_PriceSNT_2, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNT_All = number_format($Pcs_AfterNT_All, 0);
        $Price_AfterNT_All = number_format($Price_AfterNT_All, 0);
        $Po_PcsNT_All = number_format($Po_PcsNT_All, 0);
        $Po_PriceNT_All = number_format($Po_PriceNT_All, 0);
        $Neg_PcsNT_All = number_format($Neg_PcsNT_All, 0);
        $Neg_PriceNT_All = number_format($Neg_PriceNT_All, 0);
        $BackChange_PcsNT_All = number_format($BackChange_PcsNT_All, 0);
        $BackChange_PriceNT_All = number_format($BackChange_PriceNT_All, 0);
        $Purchase_PcsNT_All = number_format($Purchase_PcsNT_All, 0);
        $Purchase_PriceNT_All = number_format($Purchase_PriceNT_All, 0);
        $ReciveTranfer_PcsNT_All = number_format($ReciveTranfer_PcsNT_All, 0);
        $ReciveTranfer_PriceNT_All = number_format($ReciveTranfer_PriceNT_All, 0);
        $ReturnItem_PCSNT_All = number_format($ReturnItem_PCSNT_All, 0);
        $ReturnItem_PriceNT_All = number_format($ReturnItem_PriceNT_All, 0);
        $AllIn_PcsNT_All = number_format($AllIn_PcsNT_All, 0);
        $AllIn_PriceNT_All = number_format($AllIn_PriceNT_All, 0);
        $SendSale_PcsNT_All = number_format($SendSale_PcsNT_All, 0);
        $SendSale_PriceNT_All = number_format($SendSale_PriceNT_All, 0);
        $ReciveTranOut_PcsNT_All = number_format($ReciveTranOut_PcsNT_All, 0);
        $ReciveTranOut_PriceNT_All = number_format($ReciveTranOut_PriceNT_All, 0);
        $ReturnStore_PcsNT_All = number_format($ReturnStore_PcsNT_All, 0);
        $ReturnStore_PriceNT_All = number_format($ReturnStore_PriceNT_All, 0);
        $AllOut_PcsNT_All = number_format($AllOut_PcsNT_All, 0);
        $AllOut_PriceNT_All = number_format($AllOut_PriceNT_All, 0);
        $Calculate_PcsNT_All = number_format($Calculate_PcsNT_All, 0);
        $Calculate_PriceNT_All = number_format($Calculate_PriceNT_All, 0);
        $NewCalculate_PcsNT_All = number_format($NewCalculate_PcsNT_All, 0);
        $NewCalculate_PriceNT_All = number_format($NewCalculate_PriceNT_All, 0);
        $Diff_PcsNT_All = number_format($Diff_PcsNT_All, 0);
        $Diff_PriceNT_All = number_format($Diff_PriceNT_All, 0);
        $NewTotal_PcsNT_All = number_format($NewTotal_PcsNT_All, 0);
        $NewTotal_PriceNT_All = number_format($NewTotal_PriceNT_All, 0);
        $NewTotalDiff_NavNT_All = number_format($NewTotalDiff_NavNT_All, 0);
        $NewTotalDiff_CalNT_All = number_format($NewTotalDiff_CalNT_All, 0);
        $a7f1fgbu02s_PcsNT_All = number_format($a7f1fgbu02s_PcsNT_All, 0);
        $a7f1fgbu02s_PriceNT_All = number_format($a7f1fgbu02s_PriceNT_All, 0);
        $a7f2fgbu10s_PcsNT_All = number_format($a7f2fgbu10s_PcsNT_All, 0);
        $a7f2fgbu10s_PriceNT_All = number_format($a7f2fgbu10s_PriceNT_All, 0);
        $a7f2thbu05s_PcsNT_All = number_format($a7f2thbu05s_PcsNT_All, 0);
        $a7f2thbu05s_PriceNT_All = number_format($a7f2thbu05s_PriceNT_All, 0);
        $a7f2debu10s_PcsNT_All = number_format($a7f2debu10s_PcsNT_All, 0);
        $a7f2debu10s_PriceNT_All = number_format($a7f2debu10s_PriceNT_All, 0);
        $a7f2exbu11s_PcsNT_All = number_format($a7f2exbu11s_PcsNT_All, 0);
        $a7f2exbu11s_PriceNT_All = number_format($a7f2exbu11s_PriceNT_All, 0);
        $a7f2twbu04s_PcsNT_All = number_format($a7f2twbu04s_PcsNT_All, 0);
        $a7f2twbu04s_PriceNT_All = number_format($a7f2twbu04s_PriceNT_All, 0);
        $a7f2twbu07s_PcsNT_All = number_format($a7f2twbu07s_PcsNT_All, 0);
        $a7f2twbu07s_PriceNT_All = number_format($a7f2twbu07s_PriceNT_All, 0);
        $a7f2cebu10s_PcsNT_All = number_format($a7f2cebu10s_PcsNT_All, 0);
        $a7f2cebu10s_PriceNT_All = number_format($a7f2cebu10s_PriceNT_All, 0);
        $a8f1fgbu02s_PcsNT_All = number_format($a8f1fgbu02s_PcsNT_All, 0);
        $a8f1fgbu02s_PriceNT_All = number_format($a8f1fgbu02s_PriceNT_All, 0);
        $a8f2fgbu10s_PcsNT_All = number_format($a8f2fgbu10s_PcsNT_All, 0);
        $a8f2fgbu10s_PriceNT_All = number_format($a8f2fgbu10s_PriceNT_All, 0);
        $a8f2thbu05s_PcsNT_All = number_format($a8f2thbu05s_PcsNT_All, 0);
        $a8f2thbu05s_PriceNT_All = number_format($a8f2thbu05s_PriceNT_All, 0);
        $a8f2debu10s_PcsNT_All = number_format($a8f2debu10s_PcsNT_All, 0);
        $a8f2debu10s_PriceNT_All = number_format($a8f2debu10s_PriceNT_All, 0);
        $a8f2exbu11s_PcsNT_All = number_format($a8f2exbu11s_PcsNT_All, 0);
        $a8f2exbu11s_PriceNT_All = number_format($a8f2exbu11s_PriceNT_All, 0);
        $a8f2twbu04s_PcsNT_All = number_format($a8f2twbu04s_PcsNT_All, 0);
        $a8f2twbu04s_PriceNT_All = number_format($a8f2twbu04s_PriceNT_All, 0);
        $a8f2twbu07s_PcsNT_All = number_format($a8f2twbu07s_PcsNT_All, 0);
        $a8f2twbu07s_PriceNT_All = number_format($a8f2twbu07s_PriceNT_All, 0);
        $a8f2cebu10s_PcsNT_All = number_format($a8f2cebu10s_PcsNT_All, 0);
        $a8f2cebu10s_PriceNT_All = number_format($a8f2cebu10s_PriceNT_All, 0);
        $DC1_PcsNT_All = number_format($DC1_PcsNT_All, 0);
        $DC1_PriceNT_All = number_format($DC1_PriceNT_All, 0);
        $DCP_PcsNT_All = number_format($DCP_PcsNT_All, 0);
        $DCP_PriceNT_All = number_format($DCP_PriceNT_All, 0);
        $DCY_PcsNT_All = number_format($DCY_PcsNT_All, 0);
        $DCY_PriceNT_All = number_format($DCY_PriceNT_All, 0);
        $DEX_PcsNT_All = number_format($DEX_PcsNT_All, 0);
        $DEX_PriceNT_All = number_format($DEX_PriceNT_All, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_1 = number_format($Pcs_AfterMT_1, 0);
        $Price_AfterMT_1 = number_format($Price_AfterMT_1, 0);
        $Po_PcsMT_1 = number_format($Po_PcsMT_1, 0);
        $Po_PriceMT_1 = number_format($Po_PriceMT_1, 0);
        $Neg_PcsMT_1 = number_format($Neg_PcsMT_1, 0);
        $Neg_PriceMT_1 = number_format($Neg_PriceMT_1, 0);
        $BackChange_PcsMT_1 = number_format($BackChange_PcsMT_1, 0);
        $BackChange_PriceMT_1 = number_format($BackChange_PriceMT_1, 0);
        $Purchase_PcsMT_1 = number_format($Purchase_PcsMT_1, 0);
        $Purchase_PriceMT_1 = number_format($Purchase_PriceMT_1, 0);
        $ReciveTranfer_PcsMT_1 = number_format($ReciveTranfer_PcsMT_1, 0);
        $ReciveTranfer_PriceMT_1 = number_format($ReciveTranfer_PriceMT_1, 0);
        $ReturnItem_PCSMT_1 = number_format($ReturnItem_PCSMT_1, 0);
        $ReturnItem_PriceMT_1 = number_format($ReturnItem_PriceMT_1, 0);
        $AllIn_PcsMT_1 = number_format($AllIn_PcsMT_1, 0);
        $AllIn_PriceMT_1 = number_format($AllIn_PriceMT_1, 0);
        $SendSale_PcsMT_1 = number_format($SendSale_PcsMT_1, 0);
        $SendSale_PriceMT_1 = number_format($SendSale_PriceMT_1, 0);
        $ReciveTranOut_PcsMT_1 = number_format($ReciveTranOut_PcsMT_1, 0);
        $ReciveTranOut_PriceMT_1 = number_format($ReciveTranOut_PriceMT_1, 0);
        $ReturnStore_PcsMT_1 = number_format($ReturnStore_PcsMT_1, 0);
        $ReturnStore_PriceMT_1 = number_format($ReturnStore_PriceMT_1, 0);
        $AllOut_PcsMT_1 = number_format($AllOut_PcsMT_1, 0);
        $AllOut_PriceMT_1 = number_format($AllOut_PriceMT_1, 0);
        $Calculate_PcsMT_1 = number_format($Calculate_PcsMT_1, 0);
        $Calculate_PriceMT_1 = number_format($Calculate_PriceMT_1, 0);
        $NewCalculate_PcsMT_1 = number_format($NewCalculate_PcsMT_1, 0);
        $NewCalculate_PriceMT_1 = number_format($NewCalculate_PriceMT_1, 0);
        $Diff_PcsMT_1 = number_format($Diff_PcsMT_1, 0);
        $Diff_PriceMT_1 = number_format($Diff_PriceMT_1, 0);
        $NewTotal_PcsMT_1 = number_format($NewTotal_PcsMT_1, 0);
        $NewTotal_PriceMT_1 = number_format($NewTotal_PriceMT_1, 0);
        $NewTotalDiff_NavMT_1 = number_format($NewTotalDiff_NavMT_1, 0);
        $NewTotalDiff_CalMT_1 = number_format($NewTotalDiff_CalMT_1, 0);
        $a7f1fgbu02s_PcsMT_1 = number_format($a7f1fgbu02s_PcsMT_1, 0);
        $a7f1fgbu02s_PriceMT_1 = number_format($a7f1fgbu02s_PriceMT_1, 0);
        $a7f2fgbu10s_PcsMT_1 = number_format($a7f2fgbu10s_PcsMT_1, 0);
        $a7f2fgbu10s_PriceMT_1 = number_format($a7f2fgbu10s_PriceMT_1, 0);
        $a7f2thbu05s_PcsMT_1 = number_format($a7f2thbu05s_PcsMT_1, 0);
        $a7f2thbu05s_PriceMT_1 = number_format($a7f2thbu05s_PriceMT_1, 0);
        $a7f2debu10s_PcsMT_1 = number_format($a7f2debu10s_PcsMT_1, 0);
        $a7f2debu10s_PriceMT_1 = number_format($a7f2debu10s_PriceMT_1, 0);
        $a7f2exbu11s_PcsMT_1 = number_format($a7f2exbu11s_PcsMT_1, 0);
        $a7f2exbu11s_PriceMT_1 = number_format($a7f2exbu11s_PriceMT_1, 0);
        $a7f2twbu04s_PcsMT_1 = number_format($a7f2twbu04s_PcsMT_1, 0);
        $a7f2twbu04s_PriceMT_1 = number_format($a7f2twbu04s_PriceMT_1, 0);
        $a7f2twbu07s_PcsMT_1 = number_format($a7f2twbu07s_PcsMT_1, 0);
        $a7f2twbu07s_PriceMT_1 = number_format($a7f2twbu07s_PriceMT_1, 0);
        $a7f2cebu10s_PcsMT_1 = number_format($a7f2cebu10s_PcsMT_1, 0);
        $a7f2cebu10s_PriceMT_1 = number_format($a7f2cebu10s_PriceMT_1, 0);
        $a8f1fgbu02s_PcsMT_1 = number_format($a8f1fgbu02s_PcsMT_1, 0);
        $a8f1fgbu02s_PriceMT_1 = number_format($a8f1fgbu02s_PriceMT_1, 0);
        $a8f2fgbu10s_PcsMT_1 = number_format($a8f2fgbu10s_PcsMT_1, 0);
        $a8f2fgbu10s_PriceMT_1 = number_format($a8f2fgbu10s_PriceMT_1, 0);
        $a8f2thbu05s_PcsMT_1 = number_format($a8f2thbu05s_PcsMT_1, 0);
        $a8f2thbu05s_PriceMT_1 = number_format($a8f2thbu05s_PriceMT_1, 0);
        $a8f2debu10s_PcsMT_1 = number_format($a8f2debu10s_PcsMT_1, 0);
        $a8f2debu10s_PriceMT_1 = number_format($a8f2debu10s_PriceMT_1, 0);
        $a8f2exbu11s_PcsMT_1 = number_format($a8f2exbu11s_PcsMT_1, 0);
        $a8f2exbu11s_PriceMT_1 = number_format($a8f2exbu11s_PriceMT_1, 0);
        $a8f2twbu04s_PcsMT_1 = number_format($a8f2twbu04s_PcsMT_1, 0);
        $a8f2twbu04s_PriceMT_1 = number_format($a8f2twbu04s_PriceMT_1, 0);
        $a8f2twbu07s_PcsMT_1 = number_format($a8f2twbu07s_PcsMT_1, 0);
        $a8f2twbu07s_PriceMT_1 = number_format($a8f2twbu07s_PriceMT_1, 0);
        $a8f2cebu10s_PcsMT_1 = number_format($a8f2cebu10s_PcsMT_1, 0);
        $a8f2cebu10s_PriceMT_1 = number_format($a8f2cebu10s_PriceMT_1, 0);
        $DC1_PcsMT_1 = number_format($DC1_PcsMT_1, 0);
        $DC1_PriceMT_1 = number_format($DC1_PriceMT_1, 0);
        $DCP_PcsMT_1 = number_format($DCP_PcsMT_1, 0);
        $DCP_PriceMT_1 = number_format($DCP_PriceMT_1, 0);
        $DCY_PcsMT_1 = number_format($DCY_PcsMT_1, 0);
        $DCY_PriceMT_1 = number_format($DCY_PriceMT_1, 0);
        $DEX_PcsMT_1 = number_format($DEX_PcsMT_1, 0);
        $DEX_PriceMT_1 = number_format($DEX_PriceMT_1, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_2 = number_format($Pcs_AfterMT_2, 0);
        $Price_AfterMT_2 = number_format($Price_AfterMT_2, 0);
        $Po_PcsMT_2 = number_format($Po_PcsMT_2, 0);
        $Po_PriceMT_2 = number_format($Po_PriceMT_2, 0);
        $Neg_PcsMT_2 = number_format($Neg_PcsMT_2, 0);
        $Neg_PriceMT_2 = number_format($Neg_PriceMT_2, 0);
        $BackChange_PcsMT_2 = number_format($BackChange_PcsMT_2, 0);
        $BackChange_PriceMT_2 = number_format($BackChange_PriceMT_2, 0);
        $Purchase_PcsMT_2 = number_format($Purchase_PcsMT_2, 0);
        $Purchase_PriceMT_2 = number_format($Purchase_PriceMT_2, 0);
        $ReciveTranfer_PcsMT_2 = number_format($ReciveTranfer_PcsMT_2, 0);
        $ReciveTranfer_PriceMT_2 = number_format($ReciveTranfer_PriceMT_2, 0);
        $ReturnItem_PCSMT_2 = number_format($ReturnItem_PCSMT_2, 0);
        $ReturnItem_PriceMT_2 = number_format($ReturnItem_PriceMT_2, 0);
        $AllIn_PcsMT_2 = number_format($AllIn_PcsMT_2, 0);
        $AllIn_PriceMT_2 = number_format($AllIn_PriceMT_2, 0);
        $SendSale_PcsMT_2 = number_format($SendSale_PcsMT_2, 0);
        $SendSale_PriceMT_2 = number_format($SendSale_PriceMT_2, 0);
        $ReciveTranOut_PcsMT_2 = number_format($ReciveTranOut_PcsMT_2, 0);
        $ReciveTranOut_PriceMT_2 = number_format($ReciveTranOut_PriceMT_2, 0);
        $ReturnStore_PcsMT_2 = number_format($ReturnStore_PcsMT_2, 0);
        $ReturnStore_PriceMT_2 = number_format($ReturnStore_PriceMT_2, 0);
        $AllOut_PcsMT_2 = number_format($AllOut_PcsMT_2, 0);
        $AllOut_PriceMT_2 = number_format($AllOut_PriceMT_2, 0);
        $Calculate_PcsMT_2 = number_format($Calculate_PcsMT_2, 0);
        $Calculate_PriceMT_2 = number_format($Calculate_PriceMT_2, 0);
        $NewCalculate_PcsMT_2 = number_format($NewCalculate_PcsMT_2, 0);
        $NewCalculate_PriceMT_2 = number_format($NewCalculate_PriceMT_2, 0);
        $Diff_PcsMT_2 = number_format($Diff_PcsMT_2, 0);
        $Diff_PriceMT_2 = number_format($Diff_PriceMT_2, 0);
        $NewTotal_PcsMT_2 = number_format($NewTotal_PcsMT_2, 0);
        $NewTotal_PriceMT_2 = number_format($NewTotal_PriceMT_2, 0);
        $NewTotalDiff_NavMT_2 = number_format($NewTotalDiff_NavMT_2, 0);
        $NewTotalDiff_CalMT_2 = number_format($NewTotalDiff_CalMT_2, 0);
        $a7f1fgbu02s_PcsMT_2 = number_format($a7f1fgbu02s_PcsMT_2, 0);
        $a7f1fgbu02s_PriceMT_2 = number_format($a7f1fgbu02s_PriceMT_2, 0);
        $a7f2fgbu10s_PcsMT_2 = number_format($a7f2fgbu10s_PcsMT_2, 0);
        $a7f2fgbu10s_PriceMT_2 = number_format($a7f2fgbu10s_PriceMT_2, 0);
        $a7f2thbu05s_PcsMT_2 = number_format($a7f2thbu05s_PcsMT_2, 0);
        $a7f2thbu05s_PriceMT_2 = number_format($a7f2thbu05s_PriceMT_2, 0);
        $a7f2debu10s_PcsMT_2 = number_format($a7f2debu10s_PcsMT_2, 0);
        $a7f2debu10s_PriceMT_2 = number_format($a7f2debu10s_PriceMT_2, 0);
        $a7f2exbu11s_PcsMT_2 = number_format($a7f2exbu11s_PcsMT_2, 0);
        $a7f2exbu11s_PriceMT_2 = number_format($a7f2exbu11s_PriceMT_2, 0);
        $a7f2twbu04s_PcsMT_2 = number_format($a7f2twbu04s_PcsMT_2, 0);
        $a7f2twbu04s_PriceMT_2 = number_format($a7f2twbu04s_PriceMT_2, 0);
        $a7f2twbu07s_PcsMT_2 = number_format($a7f2twbu07s_PcsMT_2, 0);
        $a7f2twbu07s_PriceMT_2 = number_format($a7f2twbu07s_PriceMT_2, 0);
        $a7f2cebu10s_PcsMT_2 = number_format($a7f2cebu10s_PcsMT_2, 0);
        $a7f2cebu10s_PriceMT_2 = number_format($a7f2cebu10s_PriceMT_2, 0);
        $a8f1fgbu02s_PcsMT_2 = number_format($a8f1fgbu02s_PcsMT_2, 0);
        $a8f1fgbu02s_PriceMT_2 = number_format($a8f1fgbu02s_PriceMT_2, 0);
        $a8f2fgbu10s_PcsMT_2 = number_format($a8f2fgbu10s_PcsMT_2, 0);
        $a8f2fgbu10s_PriceMT_2 = number_format($a8f2fgbu10s_PriceMT_2, 0);
        $a8f2thbu05s_PcsMT_2 = number_format($a8f2thbu05s_PcsMT_2, 0);
        $a8f2thbu05s_PriceMT_2 = number_format($a8f2thbu05s_PriceMT_2, 0);
        $a8f2debu10s_PcsMT_2 = number_format($a8f2debu10s_PcsMT_2, 0);
        $a8f2debu10s_PriceMT_2 = number_format($a8f2debu10s_PriceMT_2, 0);
        $a8f2exbu11s_PcsMT_2 = number_format($a8f2exbu11s_PcsMT_2, 0);
        $a8f2exbu11s_PriceMT_2 = number_format($a8f2exbu11s_PriceMT_2, 0);
        $a8f2twbu04s_PcsMT_2 = number_format($a8f2twbu04s_PcsMT_2, 0);
        $a8f2twbu04s_PriceMT_2 = number_format($a8f2twbu04s_PriceMT_2, 0);
        $a8f2twbu07s_PcsMT_2 = number_format($a8f2twbu07s_PcsMT_2, 0);
        $a8f2twbu07s_PriceMT_2 = number_format($a8f2twbu07s_PriceMT_2, 0);
        $a8f2cebu10s_PcsMT_2 = number_format($a8f2cebu10s_PcsMT_2, 0);
        $a8f2cebu10s_PriceMT_2 = number_format($a8f2cebu10s_PriceMT_2, 0);
        $DC1_PcsMT_2 = number_format($DC1_PcsMT_2, 0);
        $DC1_PriceMT_2 = number_format($DC1_PriceMT_2, 0);
        $DCP_PcsMT_2 = number_format($DCP_PcsMT_2, 0);
        $DCP_PriceMT_2 = number_format($DCP_PriceMT_2, 0);
        $DCY_PcsMT_2 = number_format($DCY_PcsMT_2, 0);
        $DCY_PriceMT_2 = number_format($DCY_PriceMT_2, 0);
        $DEX_PcsMT_2 = number_format($DEX_PcsMT_2, 0);
        $DEX_PriceMT_2 = number_format($DEX_PriceMT_2, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_3 = number_format($Pcs_AfterMT_3, 0);
        $Price_AfterMT_3 = number_format($Price_AfterMT_3, 0);
        $Po_PcsMT_3 = number_format($Po_PcsMT_3, 0);
        $Po_PriceMT_3 = number_format($Po_PriceMT_3, 0);
        $Neg_PcsMT_3 = number_format($Neg_PcsMT_3, 0);
        $Neg_PriceMT_3 = number_format($Neg_PriceMT_3, 0);
        $BackChange_PcsMT_3 = number_format($BackChange_PcsMT_3, 0);
        $BackChange_PriceMT_3 = number_format($BackChange_PriceMT_3, 0);
        $Purchase_PcsMT_3 = number_format($Purchase_PcsMT_3, 0);
        $Purchase_PriceMT_3 = number_format($Purchase_PriceMT_3, 0);
        $ReciveTranfer_PcsMT_3 = number_format($ReciveTranfer_PcsMT_3, 0);
        $ReciveTranfer_PriceMT_3 = number_format($ReciveTranfer_PriceMT_3, 0);
        $ReturnItem_PCSMT_3 = number_format($ReturnItem_PCSMT_3, 0);
        $ReturnItem_PriceMT_3 = number_format($ReturnItem_PriceMT_3, 0);
        $AllIn_PcsMT_3 = number_format($AllIn_PcsMT_3, 0);
        $AllIn_PriceMT_3 = number_format($AllIn_PriceMT_3, 0);
        $SendSale_PcsMT_3 = number_format($SendSale_PcsMT_3, 0);
        $SendSale_PriceMT_3 = number_format($SendSale_PriceMT_3, 0);
        $ReciveTranOut_PcsMT_3 = number_format($ReciveTranOut_PcsMT_3, 0);
        $ReciveTranOut_PriceMT_3 = number_format($ReciveTranOut_PriceMT_3, 0);
        $ReturnStore_PcsMT_3 = number_format($ReturnStore_PcsMT_3, 0);
        $ReturnStore_PriceMT_3 = number_format($ReturnStore_PriceMT_3, 0);
        $AllOut_PcsMT_3 = number_format($AllOut_PcsMT_3, 0);
        $AllOut_PriceMT_3 = number_format($AllOut_PriceMT_3, 0);
        $Calculate_PcsMT_3 = number_format($Calculate_PcsMT_3, 0);
        $Calculate_PriceMT_3 = number_format($Calculate_PriceMT_3, 0);
        $NewCalculate_PcsMT_3 = number_format($NewCalculate_PcsMT_3, 0);
        $NewCalculate_PriceMT_3 = number_format($NewCalculate_PriceMT_3, 0);
        $Diff_PcsMT_3 = number_format($Diff_PcsMT_3, 0);
        $Diff_PriceMT_3 = number_format($Diff_PriceMT_3, 0);
        $NewTotal_PcsMT_3 = number_format($NewTotal_PcsMT_3, 0);
        $NewTotal_PriceMT_3 = number_format($NewTotal_PriceMT_3, 0);
        $NewTotalDiff_NavMT_3 = number_format($NewTotalDiff_NavMT_3, 0);
        $NewTotalDiff_CalMT_3 = number_format($NewTotalDiff_CalMT_3, 0);
        $a7f1fgbu02s_PcsMT_3 = number_format($a7f1fgbu02s_PcsMT_3, 0);
        $a7f1fgbu02s_PriceMT_3 = number_format($a7f1fgbu02s_PriceMT_3, 0);
        $a7f2fgbu10s_PcsMT_3 = number_format($a7f2fgbu10s_PcsMT_3, 0);
        $a7f2fgbu10s_PriceMT_3 = number_format($a7f2fgbu10s_PriceMT_3, 0);
        $a7f2thbu05s_PcsMT_3 = number_format($a7f2thbu05s_PcsMT_3, 0);
        $a7f2thbu05s_PriceMT_3 = number_format($a7f2thbu05s_PriceMT_3, 0);
        $a7f2debu10s_PcsMT_3 = number_format($a7f2debu10s_PcsMT_3, 0);
        $a7f2debu10s_PriceMT_3 = number_format($a7f2debu10s_PriceMT_3, 0);
        $a7f2exbu11s_PcsMT_3 = number_format($a7f2exbu11s_PcsMT_3, 0);
        $a7f2exbu11s_PriceMT_3 = number_format($a7f2exbu11s_PriceMT_3, 0);
        $a7f2twbu04s_PcsMT_3 = number_format($a7f2twbu04s_PcsMT_3, 0);
        $a7f2twbu04s_PriceMT_3 = number_format($a7f2twbu04s_PriceMT_3, 0);
        $a7f2twbu07s_PcsMT_3 = number_format($a7f2twbu07s_PcsMT_3, 0);
        $a7f2twbu07s_PriceMT_3 = number_format($a7f2twbu07s_PriceMT_3, 0);
        $a7f2cebu10s_PcsMT_3 = number_format($a7f2cebu10s_PcsMT_3, 0);
        $a7f2cebu10s_PriceMT_3 = number_format($a7f2cebu10s_PriceMT_3, 0);
        $a8f1fgbu02s_PcsMT_3 = number_format($a8f1fgbu02s_PcsMT_3, 0);
        $a8f1fgbu02s_PriceMT_3 = number_format($a8f1fgbu02s_PriceMT_3, 0);
        $a8f2fgbu10s_PcsMT_3 = number_format($a8f2fgbu10s_PcsMT_3, 0);
        $a8f2fgbu10s_PriceMT_3 = number_format($a8f2fgbu10s_PriceMT_3, 0);
        $a8f2thbu05s_PcsMT_3 = number_format($a8f2thbu05s_PcsMT_3, 0);
        $a8f2thbu05s_PriceMT_3 = number_format($a8f2thbu05s_PriceMT_3, 0);
        $a8f2debu10s_PcsMT_3 = number_format($a8f2debu10s_PcsMT_3, 0);
        $a8f2debu10s_PriceMT_3 = number_format($a8f2debu10s_PriceMT_3, 0);
        $a8f2exbu11s_PcsMT_3 = number_format($a8f2exbu11s_PcsMT_3, 0);
        $a8f2exbu11s_PriceMT_3 = number_format($a8f2exbu11s_PriceMT_3, 0);
        $a8f2twbu04s_PcsMT_3 = number_format($a8f2twbu04s_PcsMT_3, 0);
        $a8f2twbu04s_PriceMT_3 = number_format($a8f2twbu04s_PriceMT_3, 0);
        $a8f2twbu07s_PcsMT_3 = number_format($a8f2twbu07s_PcsMT_3, 0);
        $a8f2twbu07s_PriceMT_3 = number_format($a8f2twbu07s_PriceMT_3, 0);
        $a8f2cebu10s_PcsMT_3 = number_format($a8f2cebu10s_PcsMT_3, 0);
        $a8f2cebu10s_PriceMT_3 = number_format($a8f2cebu10s_PriceMT_3, 0);
        $DC1_PcsMT_3 = number_format($DC1_PcsMT_3, 0);
        $DC1_PriceMT_3 = number_format($DC1_PriceMT_3, 0);
        $DCP_PcsMT_3 = number_format($DCP_PcsMT_3, 0);
        $DCP_PriceMT_3 = number_format($DCP_PriceMT_3, 0);
        $DCY_PcsMT_3 = number_format($DCY_PcsMT_3, 0);
        $DCY_PriceMT_3 = number_format($DCY_PriceMT_3, 0);
        $DEX_PcsMT_3 = number_format($DEX_PcsMT_3, 0);
        $DEX_PriceMT_3 = number_format($DEX_PriceMT_3, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_4 = number_format($Pcs_AfterMT_4, 0);
        $Price_AfterMT_4 = number_format($Price_AfterMT_4, 0);
        $Po_PcsMT_4 = number_format($Po_PcsMT_4, 0);
        $Po_PriceMT_4 = number_format($Po_PriceMT_4, 0);
        $Neg_PcsMT_4 = number_format($Neg_PcsMT_4, 0);
        $Neg_PriceMT_4 = number_format($Neg_PriceMT_4, 0);
        $BackChange_PcsMT_4 = number_format($BackChange_PcsMT_4, 0);
        $BackChange_PriceMT_4 = number_format($BackChange_PriceMT_4, 0);
        $Purchase_PcsMT_4 = number_format($Purchase_PcsMT_4, 0);
        $Purchase_PriceMT_4 = number_format($Purchase_PriceMT_4, 0);
        $ReciveTranfer_PcsMT_4 = number_format($ReciveTranfer_PcsMT_4, 0);
        $ReciveTranfer_PriceMT_4 = number_format($ReciveTranfer_PriceMT_4, 0);
        $ReturnItem_PCSMT_4 = number_format($ReturnItem_PCSMT_4, 0);
        $ReturnItem_PriceMT_4 = number_format($ReturnItem_PriceMT_4, 0);
        $AllIn_PcsMT_4 = number_format($AllIn_PcsMT_4, 0);
        $AllIn_PriceMT_4 = number_format($AllIn_PriceMT_4, 0);
        $SendSale_PcsMT_4 = number_format($SendSale_PcsMT_4, 0);
        $SendSale_PriceMT_4 = number_format($SendSale_PriceMT_4, 0);
        $ReciveTranOut_PcsMT_4 = number_format($ReciveTranOut_PcsMT_4, 0);
        $ReciveTranOut_PriceMT_4 = number_format($ReciveTranOut_PriceMT_4, 0);
        $ReturnStore_PcsMT_4 = number_format($ReturnStore_PcsMT_4, 0);
        $ReturnStore_PriceMT_4 = number_format($ReturnStore_PriceMT_4, 0);
        $AllOut_PcsMT_4 = number_format($AllOut_PcsMT_4, 0);
        $AllOut_PriceMT_4 = number_format($AllOut_PriceMT_4, 0);
        $Calculate_PcsMT_4 = number_format($Calculate_PcsMT_4, 0);
        $Calculate_PriceMT_4 = number_format($Calculate_PriceMT_4, 0);
        $NewCalculate_PcsMT_4 = number_format($NewCalculate_PcsMT_4, 0);
        $NewCalculate_PriceMT_4 = number_format($NewCalculate_PriceMT_4, 0);
        $Diff_PcsMT_4 = number_format($Diff_PcsMT_4, 0);
        $Diff_PriceMT_4 = number_format($Diff_PriceMT_4, 0);
        $NewTotal_PcsMT_4 = number_format($NewTotal_PcsMT_4, 0);
        $NewTotal_PriceMT_4 = number_format($NewTotal_PriceMT_4, 0);
        $NewTotalDiff_NavMT_4 = number_format($NewTotalDiff_NavMT_4, 0);
        $NewTotalDiff_CalMT_4 = number_format($NewTotalDiff_CalMT_4, 0);
        $a7f1fgbu02s_PcsMT_4 = number_format($a7f1fgbu02s_PcsMT_4, 0);
        $a7f1fgbu02s_PriceMT_4 = number_format($a7f1fgbu02s_PriceMT_4, 0);
        $a7f2fgbu10s_PcsMT_4 = number_format($a7f2fgbu10s_PcsMT_4, 0);
        $a7f2fgbu10s_PriceMT_4 = number_format($a7f2fgbu10s_PriceMT_4, 0);
        $a7f2thbu05s_PcsMT_4 = number_format($a7f2thbu05s_PcsMT_4, 0);
        $a7f2thbu05s_PriceMT_4 = number_format($a7f2thbu05s_PriceMT_4, 0);
        $a7f2debu10s_PcsMT_4 = number_format($a7f2debu10s_PcsMT_4, 0);
        $a7f2debu10s_PriceMT_4 = number_format($a7f2debu10s_PriceMT_4, 0);
        $a7f2exbu11s_PcsMT_4 = number_format($a7f2exbu11s_PcsMT_4, 0);
        $a7f2exbu11s_PriceMT_4 = number_format($a7f2exbu11s_PriceMT_4, 0);
        $a7f2twbu04s_PcsMT_4 = number_format($a7f2twbu04s_PcsMT_4, 0);
        $a7f2twbu04s_PriceMT_4 = number_format($a7f2twbu04s_PriceMT_4, 0);
        $a7f2twbu07s_PcsMT_4 = number_format($a7f2twbu07s_PcsMT_4, 0);
        $a7f2twbu07s_PriceMT_4 = number_format($a7f2twbu07s_PriceMT_4, 0);
        $a7f2cebu10s_PcsMT_4 = number_format($a7f2cebu10s_PcsMT_4, 0);
        $a7f2cebu10s_PriceMT_4 = number_format($a7f2cebu10s_PriceMT_4, 0);
        $a8f1fgbu02s_PcsMT_4 = number_format($a8f1fgbu02s_PcsMT_4, 0);
        $a8f1fgbu02s_PriceMT_4 = number_format($a8f1fgbu02s_PriceMT_4, 0);
        $a8f2fgbu10s_PcsMT_4 = number_format($a8f2fgbu10s_PcsMT_4, 0);
        $a8f2fgbu10s_PriceMT_4 = number_format($a8f2fgbu10s_PriceMT_4, 0);
        $a8f2thbu05s_PcsMT_4 = number_format($a8f2thbu05s_PcsMT_4, 0);
        $a8f2thbu05s_PriceMT_4 = number_format($a8f2thbu05s_PriceMT_4, 0);
        $a8f2debu10s_PcsMT_4 = number_format($a8f2debu10s_PcsMT_4, 0);
        $a8f2debu10s_PriceMT_4 = number_format($a8f2debu10s_PriceMT_4, 0);
        $a8f2exbu11s_PcsMT_4 = number_format($a8f2exbu11s_PcsMT_4, 0);
        $a8f2exbu11s_PriceMT_4 = number_format($a8f2exbu11s_PriceMT_4, 0);
        $a8f2twbu04s_PcsMT_4 = number_format($a8f2twbu04s_PcsMT_4, 0);
        $a8f2twbu04s_PriceMT_4 = number_format($a8f2twbu04s_PriceMT_4, 0);
        $a8f2twbu07s_PcsMT_4 = number_format($a8f2twbu07s_PcsMT_4, 0);
        $a8f2twbu07s_PriceMT_4 = number_format($a8f2twbu07s_PriceMT_4, 0);
        $a8f2cebu10s_PcsMT_4 = number_format($a8f2cebu10s_PcsMT_4, 0);
        $a8f2cebu10s_PriceMT_4 = number_format($a8f2cebu10s_PriceMT_4, 0);
        $DC1_PcsMT_4 = number_format($DC1_PcsMT_4, 0);
        $DC1_PriceMT_4 = number_format($DC1_PriceMT_4, 0);
        $DCP_PcsMT_4 = number_format($DCP_PcsMT_4, 0);
        $DCP_PriceMT_4 = number_format($DCP_PriceMT_4, 0);
        $DCY_PcsMT_4 = number_format($DCY_PcsMT_4, 0);
        $DCY_PriceMT_4 = number_format($DCY_PriceMT_4, 0);
        $DEX_PcsMT_4 = number_format($DEX_PcsMT_4, 0);
        $DEX_PriceMT_4 = number_format($DEX_PriceMT_4, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////


        $Pcs_AfterMT_5 = number_format($Pcs_AfterMT_5, 0);
        $Price_AfterMT_5 = number_format($Price_AfterMT_5, 0);
        $Po_PcsMT_5 = number_format($Po_PcsMT_5, 0);
        $Po_PriceMT_5 = number_format($Po_PriceMT_5, 0);
        $Neg_PcsMT_5 = number_format($Neg_PcsMT_5, 0);
        $Neg_PriceMT_5 = number_format($Neg_PriceMT_5, 0);
        $BackChange_PcsMT_5 = number_format($BackChange_PcsMT_5, 0);
        $BackChange_PriceMT_5 = number_format($BackChange_PriceMT_5, 0);
        $Purchase_PcsMT_5 = number_format($Purchase_PcsMT_5, 0);
        $Purchase_PriceMT_5 = number_format($Purchase_PriceMT_5, 0);
        $ReciveTranfer_PcsMT_5 = number_format($ReciveTranfer_PcsMT_5, 0);
        $ReciveTranfer_PriceMT_5 = number_format($ReciveTranfer_PriceMT_5, 0);
        $ReturnItem_PCSMT_5 = number_format($ReturnItem_PCSMT_5, 0);
        $ReturnItem_PriceMT_5 = number_format($ReturnItem_PriceMT_5, 0);
        $AllIn_PcsMT_5 = number_format($AllIn_PcsMT_5, 0);
        $AllIn_PriceMT_5 = number_format($AllIn_PriceMT_5, 0);
        $SendSale_PcsMT_5 = number_format($SendSale_PcsMT_5, 0);
        $SendSale_PriceMT_5 = number_format($SendSale_PriceMT_5, 0);
        $ReciveTranOut_PcsMT_5 = number_format($ReciveTranOut_PcsMT_5, 0);
        $ReciveTranOut_PriceMT_5 = number_format($ReciveTranOut_PriceMT_5, 0);
        $ReturnStore_PcsMT_5 = number_format($ReturnStore_PcsMT_5, 0);
        $ReturnStore_PriceMT_5 = number_format($ReturnStore_PriceMT_5, 0);
        $AllOut_PcsMT_5 = number_format($AllOut_PcsMT_5, 0);
        $AllOut_PriceMT_5 = number_format($AllOut_PriceMT_5, 0);
        $Calculate_PcsMT_5 = number_format($Calculate_PcsMT_5, 0);
        $Calculate_PriceMT_5 = number_format($Calculate_PriceMT_5, 0);
        $NewCalculate_PcsMT_5 = number_format($NewCalculate_PcsMT_5, 0);
        $NewCalculate_PriceMT_5 = number_format($NewCalculate_PriceMT_5, 0);
        $Diff_PcsMT_5 = number_format($Diff_PcsMT_5, 0);
        $Diff_PriceMT_5 = number_format($Diff_PriceMT_5, 0);
        $NewTotal_PcsMT_5 = number_format($NewTotal_PcsMT_5, 0);
        $NewTotal_PriceMT_5 = number_format($NewTotal_PriceMT_5, 0);
        $NewTotalDiff_NavMT_5 = number_format($NewTotalDiff_NavMT_5, 0);
        $NewTotalDiff_CalMT_5 = number_format($NewTotalDiff_CalMT_5, 0);
        $a7f1fgbu02s_PcsMT_5 = number_format($a7f1fgbu02s_PcsMT_5, 0);
        $a7f1fgbu02s_PriceMT_5 = number_format($a7f1fgbu02s_PriceMT_5, 0);
        $a7f2fgbu10s_PcsMT_5 = number_format($a7f2fgbu10s_PcsMT_5, 0);
        $a7f2fgbu10s_PriceMT_5 = number_format($a7f2fgbu10s_PriceMT_5, 0);
        $a7f2thbu05s_PcsMT_5 = number_format($a7f2thbu05s_PcsMT_5, 0);
        $a7f2thbu05s_PriceMT_5 = number_format($a7f2thbu05s_PriceMT_5, 0);
        $a7f2debu10s_PcsMT_5 = number_format($a7f2debu10s_PcsMT_5, 0);
        $a7f2debu10s_PriceMT_5 = number_format($a7f2debu10s_PriceMT_5, 0);
        $a7f2exbu11s_PcsMT_5 = number_format($a7f2exbu11s_PcsMT_5, 0);
        $a7f2exbu11s_PriceMT_5 = number_format($a7f2exbu11s_PriceMT_5, 0);
        $a7f2twbu04s_PcsMT_5 = number_format($a7f2twbu04s_PcsMT_5, 0);
        $a7f2twbu04s_PriceMT_5 = number_format($a7f2twbu04s_PriceMT_5, 0);
        $a7f2twbu07s_PcsMT_5 = number_format($a7f2twbu07s_PcsMT_5, 0);
        $a7f2twbu07s_PriceMT_5 = number_format($a7f2twbu07s_PriceMT_5, 0);
        $a7f2cebu10s_PcsMT_5 = number_format($a7f2cebu10s_PcsMT_5, 0);
        $a7f2cebu10s_PriceMT_5 = number_format($a7f2cebu10s_PriceMT_5, 0);
        $a8f1fgbu02s_PcsMT_5 = number_format($a8f1fgbu02s_PcsMT_5, 0);
        $a8f1fgbu02s_PriceMT_5 = number_format($a8f1fgbu02s_PriceMT_5, 0);
        $a8f2fgbu10s_PcsMT_5 = number_format($a8f2fgbu10s_PcsMT_5, 0);
        $a8f2fgbu10s_PriceMT_5 = number_format($a8f2fgbu10s_PriceMT_5, 0);
        $a8f2thbu05s_PcsMT_5 = number_format($a8f2thbu05s_PcsMT_5, 0);
        $a8f2thbu05s_PriceMT_5 = number_format($a8f2thbu05s_PriceMT_5, 0);
        $a8f2debu10s_PcsMT_5 = number_format($a8f2debu10s_PcsMT_5, 0);
        $a8f2debu10s_PriceMT_5 = number_format($a8f2debu10s_PriceMT_5, 0);
        $a8f2exbu11s_PcsMT_5 = number_format($a8f2exbu11s_PcsMT_5, 0);
        $a8f2exbu11s_PriceMT_5 = number_format($a8f2exbu11s_PriceMT_5, 0);
        $a8f2twbu04s_PcsMT_5 = number_format($a8f2twbu04s_PcsMT_5, 0);
        $a8f2twbu04s_PriceMT_5 = number_format($a8f2twbu04s_PriceMT_5, 0);
        $a8f2twbu07s_PcsMT_5 = number_format($a8f2twbu07s_PcsMT_5, 0);
        $a8f2twbu07s_PriceMT_5 = number_format($a8f2twbu07s_PriceMT_5, 0);
        $a8f2cebu10s_PcsMT_5 = number_format($a8f2cebu10s_PcsMT_5, 0);
        $a8f2cebu10s_PriceMT_5 = number_format($a8f2cebu10s_PriceMT_5, 0);
        $DC1_PcsMT_5 = number_format($DC1_PcsMT_5, 0);
        $DC1_PriceMT_5 = number_format($DC1_PriceMT_5, 0);
        $DCP_PcsMT_5 = number_format($DCP_PcsMT_5, 0);
        $DCP_PriceMT_5 = number_format($DCP_PriceMT_5, 0);
        $DCY_PcsMT_5 = number_format($DCY_PcsMT_5, 0);
        $DCY_PriceMT_5 = number_format($DCY_PriceMT_5, 0);
        $DEX_PcsMT_5 = number_format($DEX_PcsMT_5, 0);
        $DEX_PriceMT_5 = number_format($DEX_PriceMT_5, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_6 = number_format($Pcs_AfterMT_6, 0);
        $Price_AfterMT_6 = number_format($Price_AfterMT_6, 0);
        $Po_PcsMT_6 = number_format($Po_PcsMT_6, 0);
        $Po_PriceMT_6 = number_format($Po_PriceMT_6, 0);
        $Neg_PcsMT_6 = number_format($Neg_PcsMT_6, 0);
        $Neg_PriceMT_6 = number_format($Neg_PriceMT_6, 0);
        $BackChange_PcsMT_6 = number_format($BackChange_PcsMT_6, 0);
        $BackChange_PriceMT_6 = number_format($BackChange_PriceMT_6, 0);
        $Purchase_PcsMT_6 = number_format($Purchase_PcsMT_6, 0);
        $Purchase_PriceMT_6 = number_format($Purchase_PriceMT_6, 0);
        $ReciveTranfer_PcsMT_6 = number_format($ReciveTranfer_PcsMT_6, 0);
        $ReciveTranfer_PriceMT_6 = number_format($ReciveTranfer_PriceMT_6, 0);
        $ReturnItem_PCSMT_6 = number_format($ReturnItem_PCSMT_6, 0);
        $ReturnItem_PriceMT_6 = number_format($ReturnItem_PriceMT_6, 0);
        $AllIn_PcsMT_6 = number_format($AllIn_PcsMT_6, 0);
        $AllIn_PriceMT_6 = number_format($AllIn_PriceMT_6, 0);
        $SendSale_PcsMT_6 = number_format($SendSale_PcsMT_6, 0);
        $SendSale_PriceMT_6 = number_format($SendSale_PriceMT_6, 0);
        $ReciveTranOut_PcsMT_6 = number_format($ReciveTranOut_PcsMT_6, 0);
        $ReciveTranOut_PriceMT_6 = number_format($ReciveTranOut_PriceMT_6, 0);
        $ReturnStore_PcsMT_6 = number_format($ReturnStore_PcsMT_6, 0);
        $ReturnStore_PriceMT_6 = number_format($ReturnStore_PriceMT_6, 0);
        $AllOut_PcsMT_6 = number_format($AllOut_PcsMT_6, 0);
        $AllOut_PriceMT_6 = number_format($AllOut_PriceMT_6, 0);
        $Calculate_PcsMT_6 = number_format($Calculate_PcsMT_6, 0);
        $Calculate_PriceMT_6 = number_format($Calculate_PriceMT_6, 0);
        $NewCalculate_PcsMT_6 = number_format($NewCalculate_PcsMT_6, 0);
        $NewCalculate_PriceMT_6 = number_format($NewCalculate_PriceMT_6, 0);
        $Diff_PcsMT_6 = number_format($Diff_PcsMT_6, 0);
        $Diff_PriceMT_6 = number_format($Diff_PriceMT_6, 0);
        $NewTotal_PcsMT_6 = number_format($NewTotal_PcsMT_6, 0);
        $NewTotal_PriceMT_6 = number_format($NewTotal_PriceMT_6, 0);
        $NewTotalDiff_NavMT_6 = number_format($NewTotalDiff_NavMT_6, 0);
        $NewTotalDiff_CalMT_6 = number_format($NewTotalDiff_CalMT_6, 0);
        $a7f1fgbu02s_PcsMT_6 = number_format($a7f1fgbu02s_PcsMT_6, 0);
        $a7f1fgbu02s_PriceMT_6 = number_format($a7f1fgbu02s_PriceMT_6, 0);
        $a7f2fgbu10s_PcsMT_6 = number_format($a7f2fgbu10s_PcsMT_6, 0);
        $a7f2fgbu10s_PriceMT_6 = number_format($a7f2fgbu10s_PriceMT_6, 0);
        $a7f2thbu05s_PcsMT_6 = number_format($a7f2thbu05s_PcsMT_6, 0);
        $a7f2thbu05s_PriceMT_6 = number_format($a7f2thbu05s_PriceMT_6, 0);
        $a7f2debu10s_PcsMT_6 = number_format($a7f2debu10s_PcsMT_6, 0);
        $a7f2debu10s_PriceMT_6 = number_format($a7f2debu10s_PriceMT_6, 0);
        $a7f2exbu11s_PcsMT_6 = number_format($a7f2exbu11s_PcsMT_6, 0);
        $a7f2exbu11s_PriceMT_6 = number_format($a7f2exbu11s_PriceMT_6, 0);
        $a7f2twbu04s_PcsMT_6 = number_format($a7f2twbu04s_PcsMT_6, 0);
        $a7f2twbu04s_PriceMT_6 = number_format($a7f2twbu04s_PriceMT_6, 0);
        $a7f2twbu07s_PcsMT_6 = number_format($a7f2twbu07s_PcsMT_6, 0);
        $a7f2twbu07s_PriceMT_6 = number_format($a7f2twbu07s_PriceMT_6, 0);
        $a7f2cebu10s_PcsMT_6 = number_format($a7f2cebu10s_PcsMT_6, 0);
        $a7f2cebu10s_PriceMT_6 = number_format($a7f2cebu10s_PriceMT_6, 0);
        $a8f1fgbu02s_PcsMT_6 = number_format($a8f1fgbu02s_PcsMT_6, 0);
        $a8f1fgbu02s_PriceMT_6 = number_format($a8f1fgbu02s_PriceMT_6, 0);
        $a8f2fgbu10s_PcsMT_6 = number_format($a8f2fgbu10s_PcsMT_6, 0);
        $a8f2fgbu10s_PriceMT_6 = number_format($a8f2fgbu10s_PriceMT_6, 0);
        $a8f2thbu05s_PcsMT_6 = number_format($a8f2thbu05s_PcsMT_6, 0);
        $a8f2thbu05s_PriceMT_6 = number_format($a8f2thbu05s_PriceMT_6, 0);
        $a8f2debu10s_PcsMT_6 = number_format($a8f2debu10s_PcsMT_6, 0);
        $a8f2debu10s_PriceMT_6 = number_format($a8f2debu10s_PriceMT_6, 0);
        $a8f2exbu11s_PcsMT_6 = number_format($a8f2exbu11s_PcsMT_6, 0);
        $a8f2exbu11s_PriceMT_6 = number_format($a8f2exbu11s_PriceMT_6, 0);
        $a8f2twbu04s_PcsMT_6 = number_format($a8f2twbu04s_PcsMT_6, 0);
        $a8f2twbu04s_PriceMT_6 = number_format($a8f2twbu04s_PriceMT_6, 0);
        $a8f2twbu07s_PcsMT_6 = number_format($a8f2twbu07s_PcsMT_6, 0);
        $a8f2twbu07s_PriceMT_6 = number_format($a8f2twbu07s_PriceMT_6, 0);
        $a8f2cebu10s_PcsMT_6 = number_format($a8f2cebu10s_PcsMT_6, 0);
        $a8f2cebu10s_PriceMT_6 = number_format($a8f2cebu10s_PriceMT_6, 0);
        $DC1_PcsMT_6 = number_format($DC1_PcsMT_6, 0);
        $DC1_PriceMT_6 = number_format($DC1_PriceMT_6, 0);
        $DCP_PcsMT_6 = number_format($DCP_PcsMT_6, 0);
        $DCP_PriceMT_6 = number_format($DCP_PriceMT_6, 0);
        $DCY_PcsMT_6 = number_format($DCY_PcsMT_6, 0);
        $DCY_PriceMT_6 = number_format($DCY_PriceMT_6, 0);
        $DEX_PcsMT_6 = number_format($DEX_PcsMT_6, 0);
        $DEX_PriceMT_6 = number_format($DEX_PriceMT_6, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMT_All = number_format($Pcs_AfterMT_All, 0);
        $Price_AfterMT_All = number_format($Price_AfterMT_All, 0);
        $Po_PcsMT_All = number_format($Po_PcsMT_All, 0);
        $Po_PriceMT_All = number_format($Po_PriceMT_All, 0);
        $Neg_PcsMT_All = number_format($Neg_PcsMT_All, 0);
        $Neg_PriceMT_All = number_format($Neg_PriceMT_All, 0);
        $BackChange_PcsMT_All = number_format($BackChange_PcsMT_All, 0);
        $BackChange_PriceMT_All = number_format($BackChange_PriceMT_All, 0);
        $Purchase_PcsMT_All = number_format($Purchase_PcsMT_All, 0);
        $Purchase_PriceMT_All = number_format($Purchase_PriceMT_All, 0);
        $ReciveTranfer_PcsMT_All = number_format($ReciveTranfer_PcsMT_All, 0);
        $ReciveTranfer_PriceMT_All = number_format($ReciveTranfer_PriceMT_All, 0);
        $ReturnItem_PCSMT_All = number_format($ReturnItem_PCSMT_All, 0);
        $ReturnItem_PriceMT_All = number_format($ReturnItem_PriceMT_All, 0);
        $AllIn_PcsMT_All = number_format($AllIn_PcsMT_All, 0);
        $AllIn_PriceMT_All = number_format($AllIn_PriceMT_All, 0);
        $SendSale_PcsMT_All = number_format($SendSale_PcsMT_All, 0);
        $SendSale_PriceMT_All = number_format($SendSale_PriceMT_All, 0);
        $ReciveTranOut_PcsMT_All = number_format($ReciveTranOut_PcsMT_All, 0);
        $ReciveTranOut_PriceMT_All = number_format($ReciveTranOut_PriceMT_All, 0);
        $ReturnStore_PcsMT_All = number_format($ReturnStore_PcsMT_All, 0);
        $ReturnStore_PriceMT_All = number_format($ReturnStore_PriceMT_All, 0);
        $AllOut_PcsMT_All = number_format($AllOut_PcsMT_All, 0);
        $AllOut_PriceMT_All = number_format($AllOut_PriceMT_All, 0);
        $Calculate_PcsMT_All = number_format($Calculate_PcsMT_All, 0);
        $Calculate_PriceMT_All = number_format($Calculate_PriceMT_All, 0);
        $NewCalculate_PcsMT_All = number_format($NewCalculate_PcsMT_All, 0);
        $NewCalculate_PriceMT_All = number_format($NewCalculate_PriceMT_All, 0);
        $Diff_PcsMT_All = number_format($Diff_PcsMT_All, 0);
        $Diff_PriceMT_All = number_format($Diff_PriceMT_All, 0);
        $NewTotal_PcsMT_All = number_format($NewTotal_PcsMT_All, 0);
        $NewTotal_PriceMT_All = number_format($NewTotal_PriceMT_All, 0);
        $NewTotalDiff_NavMT_All = number_format($NewTotalDiff_NavMT_All, 0);
        $NewTotalDiff_CalMT_All = number_format($NewTotalDiff_CalMT_All, 0);
        $a7f1fgbu02s_PcsMT_All = number_format($a7f1fgbu02s_PcsMT_All, 0);
        $a7f1fgbu02s_PriceMT_All = number_format($a7f1fgbu02s_PriceMT_All, 0);
        $a7f2fgbu10s_PcsMT_All = number_format($a7f2fgbu10s_PcsMT_All, 0);
        $a7f2fgbu10s_PriceMT_All = number_format($a7f2fgbu10s_PriceMT_All, 0);
        $a7f2thbu05s_PcsMT_All = number_format($a7f2thbu05s_PcsMT_All, 0);
        $a7f2thbu05s_PriceMT_All = number_format($a7f2thbu05s_PriceMT_All, 0);
        $a7f2debu10s_PcsMT_All = number_format($a7f2debu10s_PcsMT_All, 0);
        $a7f2debu10s_PriceMT_All = number_format($a7f2debu10s_PriceMT_All, 0);
        $a7f2exbu11s_PcsMT_All = number_format($a7f2exbu11s_PcsMT_All, 0);
        $a7f2exbu11s_PriceMT_All = number_format($a7f2exbu11s_PriceMT_All, 0);
        $a7f2twbu04s_PcsMT_All = number_format($a7f2twbu04s_PcsMT_All, 0);
        $a7f2twbu04s_PriceMT_All = number_format($a7f2twbu04s_PriceMT_All, 0);
        $a7f2twbu07s_PcsMT_All = number_format($a7f2twbu07s_PcsMT_All, 0);
        $a7f2twbu07s_PriceMT_All = number_format($a7f2twbu07s_PriceMT_All, 0);
        $a7f2cebu10s_PcsMT_All = number_format($a7f2cebu10s_PcsMT_All, 0);
        $a7f2cebu10s_PriceMT_All = number_format($a7f2cebu10s_PriceMT_All, 0);
        $a8f1fgbu02s_PcsMT_All = number_format($a8f1fgbu02s_PcsMT_All, 0);
        $a8f1fgbu02s_PriceMT_All = number_format($a8f1fgbu02s_PriceMT_All, 0);
        $a8f2fgbu10s_PcsMT_All = number_format($a8f2fgbu10s_PcsMT_All, 0);
        $a8f2fgbu10s_PriceMT_All = number_format($a8f2fgbu10s_PriceMT_All, 0);
        $a8f2thbu05s_PcsMT_All = number_format($a8f2thbu05s_PcsMT_All, 0);
        $a8f2thbu05s_PriceMT_All = number_format($a8f2thbu05s_PriceMT_All, 0);
        $a8f2debu10s_PcsMT_All = number_format($a8f2debu10s_PcsMT_All, 0);
        $a8f2debu10s_PriceMT_All = number_format($a8f2debu10s_PriceMT_All, 0);
        $a8f2exbu11s_PcsMT_All = number_format($a8f2exbu11s_PcsMT_All, 0);
        $a8f2exbu11s_PriceMT_All = number_format($a8f2exbu11s_PriceMT_All, 0);
        $a8f2twbu04s_PcsMT_All = number_format($a8f2twbu04s_PcsMT_All, 0);
        $a8f2twbu04s_PriceMT_All = number_format($a8f2twbu04s_PriceMT_All, 0);
        $a8f2twbu07s_PcsMT_All = number_format($a8f2twbu07s_PcsMT_All, 0);
        $a8f2twbu07s_PriceMT_All = number_format($a8f2twbu07s_PriceMT_All, 0);
        $a8f2cebu10s_PcsMT_All = number_format($a8f2cebu10s_PcsMT_All, 0);
        $a8f2cebu10s_PriceMT_All = number_format($a8f2cebu10s_PriceMT_All, 0);
        $DC1_PcsMT_All = number_format($DC1_PcsMT_All, 0);
        $DC1_PriceMT_All = number_format($DC1_PriceMT_All, 0);
        $DCP_PcsMT_All = number_format($DCP_PcsMT_All, 0);
        $DCP_PriceMT_All = number_format($DCP_PriceMT_All, 0);
        $DCY_PcsMT_All = number_format($DCY_PcsMT_All, 0);
        $DCY_PriceMT_All = number_format($DCY_PriceMT_All, 0);
        $DEX_PcsMT_All = number_format($DEX_PcsMT_All, 0);
        $DEX_PriceMT_All = number_format($DEX_PriceMT_All, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW_1 = number_format($Pcs_AfterTW_1, 0);
        $Price_AfterTW_1 = number_format($Price_AfterTW_1, 0);
        $Po_PcsTW_1 = number_format($Po_PcsTW_1, 0);
        $Po_PriceTW_1 = number_format($Po_PriceTW_1, 0);
        $Neg_PcsTW_1 = number_format($Neg_PcsTW_1, 0);
        $Neg_PriceTW_1 = number_format($Neg_PriceTW_1, 0);
        $BackChange_PcsTW_1 = number_format($BackChange_PcsTW_1, 0);
        $BackChange_PriceTW_1 = number_format($BackChange_PriceTW_1, 0);
        $Purchase_PcsTW_1 = number_format($Purchase_PcsTW_1, 0);
        $Purchase_PriceTW_1 = number_format($Purchase_PriceTW_1, 0);
        $ReciveTranfer_PcsTW_1 = number_format($ReciveTranfer_PcsTW_1, 0);
        $ReciveTranfer_PriceTW_1 = number_format($ReciveTranfer_PriceTW_1, 0);
        $ReturnItem_PCSTW_1 = number_format($ReturnItem_PCSTW_1, 0);
        $ReturnItem_PriceTW_1 = number_format($ReturnItem_PriceTW_1, 0);
        $AllIn_PcsTW_1 = number_format($AllIn_PcsTW_1, 0);
        $AllIn_PriceTW_1 = number_format($AllIn_PriceTW_1, 0);
        $SendSale_PcsTW_1 = number_format($SendSale_PcsTW_1, 0);
        $SendSale_PriceTW_1 = number_format($SendSale_PriceTW_1, 0);
        $ReciveTranOut_PcsTW_1 = number_format($ReciveTranOut_PcsTW_1, 0);
        $ReciveTranOut_PriceTW_1 = number_format($ReciveTranOut_PriceTW_1, 0);
        $ReturnStore_PcsTW_1 = number_format($ReturnStore_PcsTW_1, 0);
        $ReturnStore_PriceTW_1 = number_format($ReturnStore_PriceTW_1, 0);
        $AllOut_PcsTW_1 = number_format($AllOut_PcsTW_1, 0);
        $AllOut_PriceTW_1 = number_format($AllOut_PriceTW_1, 0);
        $Calculate_PcsTW_1 = number_format($Calculate_PcsTW_1, 0);
        $Calculate_PriceTW_1 = number_format($Calculate_PriceTW_1, 0);
        $NewCalculate_PcsTW_1 = number_format($NewCalculate_PcsTW_1, 0);
        $NewCalculate_PriceTW_1 = number_format($NewCalculate_PriceTW_1, 0);
        $Diff_PcsTW_1 = number_format($Diff_PcsTW_1, 0);
        $Diff_PriceTW_1 = number_format($Diff_PriceTW_1, 0);
        $NewTotal_PcsTW_1 = number_format($NewTotal_PcsTW_1, 0);
        $NewTotal_PriceTW_1 = number_format($NewTotal_PriceTW_1, 0);
        $NewTotalDiff_NavTW_1 = number_format($NewTotalDiff_NavTW_1, 0);
        $NewTotalDiff_CalTW_1 = number_format($NewTotalDiff_CalTW_1, 0);
        $a7f1fgbu02s_PcsTW_1 = number_format($a7f1fgbu02s_PcsTW_1, 0);
        $a7f1fgbu02s_PriceTW_1 = number_format($a7f1fgbu02s_PriceTW_1, 0);
        $a7f2fgbu10s_PcsTW_1 = number_format($a7f2fgbu10s_PcsTW_1, 0);
        $a7f2fgbu10s_PriceTW_1 = number_format($a7f2fgbu10s_PriceTW_1, 0);
        $a7f2thbu05s_PcsTW_1 = number_format($a7f2thbu05s_PcsTW_1, 0);
        $a7f2thbu05s_PriceTW_1 = number_format($a7f2thbu05s_PriceTW_1, 0);
        $a7f2debu10s_PcsTW_1 = number_format($a7f2debu10s_PcsTW_1, 0);
        $a7f2debu10s_PriceTW_1 = number_format($a7f2debu10s_PriceTW_1, 0);
        $a7f2exbu11s_PcsTW_1 = number_format($a7f2exbu11s_PcsTW_1, 0);
        $a7f2exbu11s_PriceTW_1 = number_format($a7f2exbu11s_PriceTW_1, 0);
        $a7f2twbu04s_PcsTW_1 = number_format($a7f2twbu04s_PcsTW_1, 0);
        $a7f2twbu04s_PriceTW_1 = number_format($a7f2twbu04s_PriceTW_1, 0);
        $a7f2twbu07s_PcsTW_1 = number_format($a7f2twbu07s_PcsTW_1, 0);
        $a7f2twbu07s_PriceTW_1 = number_format($a7f2twbu07s_PriceTW_1, 0);
        $a7f2cebu10s_PcsTW_1 = number_format($a7f2cebu10s_PcsTW_1, 0);
        $a7f2cebu10s_PriceTW_1 = number_format($a7f2cebu10s_PriceTW_1, 0);
        $a8f1fgbu02s_PcsTW_1 = number_format($a8f1fgbu02s_PcsTW_1, 0);
        $a8f1fgbu02s_PriceTW_1 = number_format($a8f1fgbu02s_PriceTW_1, 0);
        $a8f2fgbu10s_PcsTW_1 = number_format($a8f2fgbu10s_PcsTW_1, 0);
        $a8f2fgbu10s_PriceTW_1 = number_format($a8f2fgbu10s_PriceTW_1, 0);
        $a8f2thbu05s_PcsTW_1 = number_format($a8f2thbu05s_PcsTW_1, 0);
        $a8f2thbu05s_PriceTW_1 = number_format($a8f2thbu05s_PriceTW_1, 0);
        $a8f2debu10s_PcsTW_1 = number_format($a8f2debu10s_PcsTW_1, 0);
        $a8f2debu10s_PriceTW_1 = number_format($a8f2debu10s_PriceTW_1, 0);
        $a8f2exbu11s_PcsTW_1 = number_format($a8f2exbu11s_PcsTW_1, 0);
        $a8f2exbu11s_PriceTW_1 = number_format($a8f2exbu11s_PriceTW_1, 0);
        $a8f2twbu04s_PcsTW_1 = number_format($a8f2twbu04s_PcsTW_1, 0);
        $a8f2twbu04s_PriceTW_1 = number_format($a8f2twbu04s_PriceTW_1, 0);
        $a8f2twbu07s_PcsTW_1 = number_format($a8f2twbu07s_PcsTW_1, 0);
        $a8f2twbu07s_PriceTW_1 = number_format($a8f2twbu07s_PriceTW_1, 0);
        $a8f2cebu10s_PcsTW_1 = number_format($a8f2cebu10s_PcsTW_1, 0);
        $a8f2cebu10s_PriceTW_1 = number_format($a8f2cebu10s_PriceTW_1, 0);
        $DC1_PcsTW_1 = number_format($DC1_PcsTW_1, 0);
        $DC1_PriceTW_1 = number_format($DC1_PriceTW_1, 0);
        $DCP_PcsTW_1 = number_format($DCP_PcsTW_1, 0);
        $DCP_PriceTW_1 = number_format($DCP_PriceTW_1, 0);
        $DCY_PcsTW_1 = number_format($DCY_PcsTW_1, 0);
        $DCY_PriceTW_1 = number_format($DCY_PriceTW_1, 0);
        $DEX_PcsTW_1 = number_format($DEX_PcsTW_1, 0);
        $DEX_PriceTW_1 = number_format($DEX_PriceTW_1, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW_2 = number_format($Pcs_AfterTW_2, 0);
        $Price_AfterTW_2 = number_format($Price_AfterTW_2, 0);
        $Po_PcsTW_2 = number_format($Po_PcsTW_2, 0);
        $Po_PriceTW_2 = number_format($Po_PriceTW_2, 0);
        $Neg_PcsTW_2 = number_format($Neg_PcsTW_2, 0);
        $Neg_PriceTW_2 = number_format($Neg_PriceTW_2, 0);
        $BackChange_PcsTW_2 = number_format($BackChange_PcsTW_2, 0);
        $BackChange_PriceTW_2 = number_format($BackChange_PriceTW_2, 0);
        $Purchase_PcsTW_2 = number_format($Purchase_PcsTW_2, 0);
        $Purchase_PriceTW_2 = number_format($Purchase_PriceTW_2, 0);
        $ReciveTranfer_PcsTW_2 = number_format($ReciveTranfer_PcsTW_2, 0);
        $ReciveTranfer_PriceTW_2 = number_format($ReciveTranfer_PriceTW_2, 0);
        $ReturnItem_PCSTW_2 = number_format($ReturnItem_PCSTW_2, 0);
        $ReturnItem_PriceTW_2 = number_format($ReturnItem_PriceTW_2, 0);
        $AllIn_PcsTW_2 = number_format($AllIn_PcsTW_2, 0);
        $AllIn_PriceTW_2 = number_format($AllIn_PriceTW_2, 0);
        $SendSale_PcsTW_2 = number_format($SendSale_PcsTW_2, 0);
        $SendSale_PriceTW_2 = number_format($SendSale_PriceTW_2, 0);
        $ReciveTranOut_PcsTW_2 = number_format($ReciveTranOut_PcsTW_2, 0);
        $ReciveTranOut_PriceTW_2 = number_format($ReciveTranOut_PriceTW_2, 0);
        $ReturnStore_PcsTW_2 = number_format($ReturnStore_PcsTW_2, 0);
        $ReturnStore_PriceTW_2 = number_format($ReturnStore_PriceTW_2, 0);
        $AllOut_PcsTW_2 = number_format($AllOut_PcsTW_2, 0);
        $AllOut_PriceTW_2 = number_format($AllOut_PriceTW_2, 0);
        $Calculate_PcsTW_2 = number_format($Calculate_PcsTW_2, 0);
        $Calculate_PriceTW_2 = number_format($Calculate_PriceTW_2, 0);
        $NewCalculate_PcsTW_2 = number_format($NewCalculate_PcsTW_2, 0);
        $NewCalculate_PriceTW_2 = number_format($NewCalculate_PriceTW_2, 0);
        $Diff_PcsTW_2 = number_format($Diff_PcsTW_2, 0);
        $Diff_PriceTW_2 = number_format($Diff_PriceTW_2, 0);
        $NewTotal_PcsTW_2 = number_format($NewTotal_PcsTW_2, 0);
        $NewTotal_PriceTW_2 = number_format($NewTotal_PriceTW_2, 0);
        $NewTotalDiff_NavTW_2 = number_format($NewTotalDiff_NavTW_2, 0);
        $NewTotalDiff_CalTW_2 = number_format($NewTotalDiff_CalTW_2, 0);
        $a7f1fgbu02s_PcsTW_2 = number_format($a7f1fgbu02s_PcsTW_2, 0);
        $a7f1fgbu02s_PriceTW_2 = number_format($a7f1fgbu02s_PriceTW_2, 0);
        $a7f2fgbu10s_PcsTW_2 = number_format($a7f2fgbu10s_PcsTW_2, 0);
        $a7f2fgbu10s_PriceTW_2 = number_format($a7f2fgbu10s_PriceTW_2, 0);
        $a7f2thbu05s_PcsTW_2 = number_format($a7f2thbu05s_PcsTW_2, 0);
        $a7f2thbu05s_PriceTW_2 = number_format($a7f2thbu05s_PriceTW_2, 0);
        $a7f2debu10s_PcsTW_2 = number_format($a7f2debu10s_PcsTW_2, 0);
        $a7f2debu10s_PriceTW_2 = number_format($a7f2debu10s_PriceTW_2, 0);
        $a7f2exbu11s_PcsTW_2 = number_format($a7f2exbu11s_PcsTW_2, 0);
        $a7f2exbu11s_PriceTW_2 = number_format($a7f2exbu11s_PriceTW_2, 0);
        $a7f2twbu04s_PcsTW_2 = number_format($a7f2twbu04s_PcsTW_2, 0);
        $a7f2twbu04s_PriceTW_2 = number_format($a7f2twbu04s_PriceTW_2, 0);
        $a7f2twbu07s_PcsTW_2 = number_format($a7f2twbu07s_PcsTW_2, 0);
        $a7f2twbu07s_PriceTW_2 = number_format($a7f2twbu07s_PriceTW_2, 0);
        $a7f2cebu10s_PcsTW_2 = number_format($a7f2cebu10s_PcsTW_2, 0);
        $a7f2cebu10s_PriceTW_2 = number_format($a7f2cebu10s_PriceTW_2, 0);
        $a8f1fgbu02s_PcsTW_2 = number_format($a8f1fgbu02s_PcsTW_2, 0);
        $a8f1fgbu02s_PriceTW_2 = number_format($a8f1fgbu02s_PriceTW_2, 0);
        $a8f2fgbu10s_PcsTW_2 = number_format($a8f2fgbu10s_PcsTW_2, 0);
        $a8f2fgbu10s_PriceTW_2 = number_format($a8f2fgbu10s_PriceTW_2, 0);
        $a8f2thbu05s_PcsTW_2 = number_format($a8f2thbu05s_PcsTW_2, 0);
        $a8f2thbu05s_PriceTW_2 = number_format($a8f2thbu05s_PriceTW_2, 0);
        $a8f2debu10s_PcsTW_2 = number_format($a8f2debu10s_PcsTW_2, 0);
        $a8f2debu10s_PriceTW_2 = number_format($a8f2debu10s_PriceTW_2, 0);
        $a8f2exbu11s_PcsTW_2 = number_format($a8f2exbu11s_PcsTW_2, 0);
        $a8f2exbu11s_PriceTW_2 = number_format($a8f2exbu11s_PriceTW_2, 0);
        $a8f2twbu04s_PcsTW_2 = number_format($a8f2twbu04s_PcsTW_2, 0);
        $a8f2twbu04s_PriceTW_2 = number_format($a8f2twbu04s_PriceTW_2, 0);
        $a8f2twbu07s_PcsTW_2 = number_format($a8f2twbu07s_PcsTW_2, 0);
        $a8f2twbu07s_PriceTW_2 = number_format($a8f2twbu07s_PriceTW_2, 0);
        $a8f2cebu10s_PcsTW_2 = number_format($a8f2cebu10s_PcsTW_2, 0);
        $a8f2cebu10s_PriceTW_2 = number_format($a8f2cebu10s_PriceTW_2, 0);
        $DC1_PcsTW_2 = number_format($DC1_PcsTW_2, 0);
        $DC1_PriceTW_2 = number_format($DC1_PriceTW_2, 0);
        $DCP_PcsTW_2 = number_format($DCP_PcsTW_2, 0);
        $DCP_PriceTW_2 = number_format($DCP_PriceTW_2, 0);
        $DCY_PcsTW_2 = number_format($DCY_PcsTW_2, 0);
        $DCY_PriceTW_2 = number_format($DCY_PriceTW_2, 0);
        $DEX_PcsTW_2 = number_format($DEX_PcsTW_2, 0);
        $DEX_PriceTW_2 = number_format($DEX_PriceTW_2, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSTW_1 = number_format($Pcs_AfterSTW_1, 0);
        $Price_AfterSTW_1 = number_format($Price_AfterSTW_1, 0);
        $Po_PcsSTW_1 = number_format($Po_PcsSTW_1, 0);
        $Po_PriceSTW_1 = number_format($Po_PriceSTW_1, 0);
        $Neg_PcsSTW_1 = number_format($Neg_PcsSTW_1, 0);
        $Neg_PriceSTW_1 = number_format($Neg_PriceSTW_1, 0);
        $BackChange_PcsSTW_1 = number_format($BackChange_PcsSTW_1, 0);
        $BackChange_PriceSTW_1 = number_format($BackChange_PriceSTW_1, 0);
        $Purchase_PcsSTW_1 = number_format($Purchase_PcsSTW_1, 0);
        $Purchase_PriceSTW_1 = number_format($Purchase_PriceSTW_1, 0);
        $ReciveTranfer_PcsSTW_1 = number_format($ReciveTranfer_PcsSTW_1, 0);
        $ReciveTranfer_PriceSTW_1 = number_format($ReciveTranfer_PriceSTW_1, 0);
        $ReturnItem_PCSSTW_1 = number_format($ReturnItem_PCSSTW_1, 0);
        $ReturnItem_PriceSTW_1 = number_format($ReturnItem_PriceSTW_1, 0);
        $AllIn_PcsSTW_1 = number_format($AllIn_PcsSTW_1, 0);
        $AllIn_PriceSTW_1 = number_format($AllIn_PriceSTW_1, 0);
        $SendSale_PcsSTW_1 = number_format($SendSale_PcsSTW_1, 0);
        $SendSale_PriceSTW_1 = number_format($SendSale_PriceSTW_1, 0);
        $ReciveTranOut_PcsSTW_1 = number_format($ReciveTranOut_PcsSTW_1, 0);
        $ReciveTranOut_PriceSTW_1 = number_format($ReciveTranOut_PriceSTW_1, 0);
        $ReturnStore_PcsSTW_1 = number_format($ReturnStore_PcsSTW_1, 0);
        $ReturnStore_PriceSTW_1 = number_format($ReturnStore_PriceSTW_1, 0);
        $AllOut_PcsSTW_1 = number_format($AllOut_PcsSTW_1, 0);
        $AllOut_PriceSTW_1 = number_format($AllOut_PriceSTW_1, 0);
        $Calculate_PcsSTW_1 = number_format($Calculate_PcsSTW_1, 0);
        $Calculate_PriceSTW_1 = number_format($Calculate_PriceSTW_1, 0);
        $NewCalculate_PcsSTW_1 = number_format($NewCalculate_PcsSTW_1, 0);
        $NewCalculate_PriceSTW_1 = number_format($NewCalculate_PriceSTW_1, 0);
        $Diff_PcsSTW_1 = number_format($Diff_PcsSTW_1, 0);
        $Diff_PriceSTW_1 = number_format($Diff_PriceSTW_1, 0);
        $NewTotal_PcsSTW_1 = number_format($NewTotal_PcsSTW_1, 0);
        $NewTotal_PriceSTW_1 = number_format($NewTotal_PriceSTW_1, 0);
        $NewTotalDiff_NavSTW_1 = number_format($NewTotalDiff_NavSTW_1, 0);
        $NewTotalDiff_CalSTW_1 = number_format($NewTotalDiff_CalSTW_1, 0);
        $a7f1fgbu02s_PcsSTW_1 = number_format($a7f1fgbu02s_PcsSTW_1, 0);
        $a7f1fgbu02s_PriceSTW_1 = number_format($a7f1fgbu02s_PriceSTW_1, 0);
        $a7f2fgbu10s_PcsSTW_1 = number_format($a7f2fgbu10s_PcsSTW_1, 0);
        $a7f2fgbu10s_PriceSTW_1 = number_format($a7f2fgbu10s_PriceSTW_1, 0);
        $a7f2thbu05s_PcsSTW_1 = number_format($a7f2thbu05s_PcsSTW_1, 0);
        $a7f2thbu05s_PriceSTW_1 = number_format($a7f2thbu05s_PriceSTW_1, 0);
        $a7f2debu10s_PcsSTW_1 = number_format($a7f2debu10s_PcsSTW_1, 0);
        $a7f2debu10s_PriceSTW_1 = number_format($a7f2debu10s_PriceSTW_1, 0);
        $a7f2exbu11s_PcsSTW_1 = number_format($a7f2exbu11s_PcsSTW_1, 0);
        $a7f2exbu11s_PriceSTW_1 = number_format($a7f2exbu11s_PriceSTW_1, 0);
        $a7f2twbu04s_PcsSTW_1 = number_format($a7f2twbu04s_PcsSTW_1, 0);
        $a7f2twbu04s_PriceSTW_1 = number_format($a7f2twbu04s_PriceSTW_1, 0);
        $a7f2twbu07s_PcsSTW_1 = number_format($a7f2twbu07s_PcsSTW_1, 0);
        $a7f2twbu07s_PriceSTW_1 = number_format($a7f2twbu07s_PriceSTW_1, 0);
        $a7f2cebu10s_PcsSTW_1 = number_format($a7f2cebu10s_PcsSTW_1, 0);
        $a7f2cebu10s_PriceSTW_1 = number_format($a7f2cebu10s_PriceSTW_1, 0);
        $a8f1fgbu02s_PcsSTW_1 = number_format($a8f1fgbu02s_PcsSTW_1, 0);
        $a8f1fgbu02s_PriceSTW_1 = number_format($a8f1fgbu02s_PriceSTW_1, 0);
        $a8f2fgbu10s_PcsSTW_1 = number_format($a8f2fgbu10s_PcsSTW_1, 0);
        $a8f2fgbu10s_PriceSTW_1 = number_format($a8f2fgbu10s_PriceSTW_1, 0);
        $a8f2thbu05s_PcsSTW_1 = number_format($a8f2thbu05s_PcsSTW_1, 0);
        $a8f2thbu05s_PriceSTW_1 = number_format($a8f2thbu05s_PriceSTW_1, 0);
        $a8f2debu10s_PcsSTW_1 = number_format($a8f2debu10s_PcsSTW_1, 0);
        $a8f2debu10s_PriceSTW_1 = number_format($a8f2debu10s_PriceSTW_1, 0);
        $a8f2exbu11s_PcsSTW_1 = number_format($a8f2exbu11s_PcsSTW_1, 0);
        $a8f2exbu11s_PriceSTW_1 = number_format($a8f2exbu11s_PriceSTW_1, 0);
        $a8f2twbu04s_PcsSTW_1 = number_format($a8f2twbu04s_PcsSTW_1, 0);
        $a8f2twbu04s_PriceSTW_1 = number_format($a8f2twbu04s_PriceSTW_1, 0);
        $a8f2twbu07s_PcsSTW_1 = number_format($a8f2twbu07s_PcsSTW_1, 0);
        $a8f2twbu07s_PriceSTW_1 = number_format($a8f2twbu07s_PriceSTW_1, 0);
        $a8f2cebu10s_PcsSTW_1 = number_format($a8f2cebu10s_PcsSTW_1, 0);
        $a8f2cebu10s_PriceSTW_1 = number_format($a8f2cebu10s_PriceSTW_1, 0);
        $DC1_PcsSTW_1 = number_format($DC1_PcsSTW_1, 0);
        $DC1_PriceSTW_1 = number_format($DC1_PriceSTW_1, 0);
        $DCP_PcsSTW_1 = number_format($DCP_PcsSTW_1, 0);
        $DCP_PriceSTW_1 = number_format($DCP_PriceSTW_1, 0);
        $DCY_PcsSTW_1 = number_format($DCY_PcsSTW_1, 0);
        $DCY_PriceSTW_1 = number_format($DCY_PriceSTW_1, 0);
        $DEX_PcsSTW_1 = number_format($DEX_PcsSTW_1, 0);
        $DEX_PriceSTW_1 = number_format($DEX_PriceSTW_1, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSTW_2 = number_format($Pcs_AfterSTW_2, 0);
        $Price_AfterSTW_2 = number_format($Price_AfterSTW_2, 0);
        $Po_PcsSTW_2 = number_format($Po_PcsSTW_2, 0);
        $Po_PriceSTW_2 = number_format($Po_PriceSTW_2, 0);
        $Neg_PcsSTW_2 = number_format($Neg_PcsSTW_2, 0);
        $Neg_PriceSTW_2 = number_format($Neg_PriceSTW_2, 0);
        $BackChange_PcsSTW_2 = number_format($BackChange_PcsSTW_2, 0);
        $BackChange_PriceSTW_2 = number_format($BackChange_PriceSTW_2, 0);
        $Purchase_PcsSTW_2 = number_format($Purchase_PcsSTW_2, 0);
        $Purchase_PriceSTW_2 = number_format($Purchase_PriceSTW_2, 0);
        $ReciveTranfer_PcsSTW_2 = number_format($ReciveTranfer_PcsSTW_2, 0);
        $ReciveTranfer_PriceSTW_2 = number_format($ReciveTranfer_PriceSTW_2, 0);
        $ReturnItem_PCSSTW_2 = number_format($ReturnItem_PCSSTW_2, 0);
        $ReturnItem_PriceSTW_2 = number_format($ReturnItem_PriceSTW_2, 0);
        $AllIn_PcsSTW_2 = number_format($AllIn_PcsSTW_2, 0);
        $AllIn_PriceSTW_2 = number_format($AllIn_PriceSTW_2, 0);
        $SendSale_PcsSTW_2 = number_format($SendSale_PcsSTW_2, 0);
        $SendSale_PriceSTW_2 = number_format($SendSale_PriceSTW_2, 0);
        $ReciveTranOut_PcsSTW_2 = number_format($ReciveTranOut_PcsSTW_2, 0);
        $ReciveTranOut_PriceSTW_2 = number_format($ReciveTranOut_PriceSTW_2, 0);
        $ReturnStore_PcsSTW_2 = number_format($ReturnStore_PcsSTW_2, 0);
        $ReturnStore_PriceSTW_2 = number_format($ReturnStore_PriceSTW_2, 0);
        $AllOut_PcsSTW_2 = number_format($AllOut_PcsSTW_2, 0);
        $AllOut_PriceSTW_2 = number_format($AllOut_PriceSTW_2, 0);
        $Calculate_PcsSTW_2 = number_format($Calculate_PcsSTW_2, 0);
        $Calculate_PriceSTW_2 = number_format($Calculate_PriceSTW_2, 0);
        $NewCalculate_PcsSTW_2 = number_format($NewCalculate_PcsSTW_2, 0);
        $NewCalculate_PriceSTW_2 = number_format($NewCalculate_PriceSTW_2, 0);
        $Diff_PcsSTW_2 = number_format($Diff_PcsSTW_2, 0);
        $Diff_PriceSTW_2 = number_format($Diff_PriceSTW_2, 0);
        $NewTotal_PcsSTW_2 = number_format($NewTotal_PcsSTW_2, 0);
        $NewTotal_PriceSTW_2 = number_format($NewTotal_PriceSTW_2, 0);
        $NewTotalDiff_NavSTW_2 = number_format($NewTotalDiff_NavSTW_2, 0);
        $NewTotalDiff_CalSTW_2 = number_format($NewTotalDiff_CalSTW_2, 0);
        $a7f1fgbu02s_PcsSTW_2 = number_format($a7f1fgbu02s_PcsSTW_2, 0);
        $a7f1fgbu02s_PriceSTW_2 = number_format($a7f1fgbu02s_PriceSTW_2, 0);
        $a7f2fgbu10s_PcsSTW_2 = number_format($a7f2fgbu10s_PcsSTW_2, 0);
        $a7f2fgbu10s_PriceSTW_2 = number_format($a7f2fgbu10s_PriceSTW_2, 0);
        $a7f2thbu05s_PcsSTW_2 = number_format($a7f2thbu05s_PcsSTW_2, 0);
        $a7f2thbu05s_PriceSTW_2 = number_format($a7f2thbu05s_PriceSTW_2, 0);
        $a7f2debu10s_PcsSTW_2 = number_format($a7f2debu10s_PcsSTW_2, 0);
        $a7f2debu10s_PriceSTW_2 = number_format($a7f2debu10s_PriceSTW_2, 0);
        $a7f2exbu11s_PcsSTW_2 = number_format($a7f2exbu11s_PcsSTW_2, 0);
        $a7f2exbu11s_PriceSTW_2 = number_format($a7f2exbu11s_PriceSTW_2, 0);
        $a7f2twbu04s_PcsSTW_2 = number_format($a7f2twbu04s_PcsSTW_2, 0);
        $a7f2twbu04s_PriceSTW_2 = number_format($a7f2twbu04s_PriceSTW_2, 0);
        $a7f2twbu07s_PcsSTW_2 = number_format($a7f2twbu07s_PcsSTW_2, 0);
        $a7f2twbu07s_PriceSTW_2 = number_format($a7f2twbu07s_PriceSTW_2, 0);
        $a7f2cebu10s_PcsSTW_2 = number_format($a7f2cebu10s_PcsSTW_2, 0);
        $a7f2cebu10s_PriceSTW_2 = number_format($a7f2cebu10s_PriceSTW_2, 0);
        $a8f1fgbu02s_PcsSTW_2 = number_format($a8f1fgbu02s_PcsSTW_2, 0);
        $a8f1fgbu02s_PriceSTW_2 = number_format($a8f1fgbu02s_PriceSTW_2, 0);
        $a8f2fgbu10s_PcsSTW_2 = number_format($a8f2fgbu10s_PcsSTW_2, 0);
        $a8f2fgbu10s_PriceSTW_2 = number_format($a8f2fgbu10s_PriceSTW_2, 0);
        $a8f2thbu05s_PcsSTW_2 = number_format($a8f2thbu05s_PcsSTW_2, 0);
        $a8f2thbu05s_PriceSTW_2 = number_format($a8f2thbu05s_PriceSTW_2, 0);
        $a8f2debu10s_PcsSTW_2 = number_format($a8f2debu10s_PcsSTW_2, 0);
        $a8f2debu10s_PriceSTW_2 = number_format($a8f2debu10s_PriceSTW_2, 0);
        $a8f2exbu11s_PcsSTW_2 = number_format($a8f2exbu11s_PcsSTW_2, 0);
        $a8f2exbu11s_PriceSTW_2 = number_format($a8f2exbu11s_PriceSTW_2, 0);
        $a8f2twbu04s_PcsSTW_2 = number_format($a8f2twbu04s_PcsSTW_2, 0);
        $a8f2twbu04s_PriceSTW_2 = number_format($a8f2twbu04s_PriceSTW_2, 0);
        $a8f2twbu07s_PcsSTW_2 = number_format($a8f2twbu07s_PcsSTW_2, 0);
        $a8f2twbu07s_PriceSTW_2 = number_format($a8f2twbu07s_PriceSTW_2, 0);
        $a8f2cebu10s_PcsSTW_2 = number_format($a8f2cebu10s_PcsSTW_2, 0);
        $a8f2cebu10s_PriceSTW_2 = number_format($a8f2cebu10s_PriceSTW_2, 0);
        $DC1_PcsSTW_2 = number_format($DC1_PcsSTW_2, 0);
        $DC1_PriceSTW_2 = number_format($DC1_PriceSTW_2, 0);
        $DCP_PcsSTW_2 = number_format($DCP_PcsSTW_2, 0);
        $DCP_PriceSTW_2 = number_format($DCP_PriceSTW_2, 0);
        $DCY_PcsSTW_2 = number_format($DCY_PcsSTW_2, 0);
        $DCY_PriceSTW_2 = number_format($DCY_PriceSTW_2, 0);
        $DEX_PcsSTW_2 = number_format($DEX_PcsSTW_2, 0);
        $DEX_PriceSTW_2 = number_format($DEX_PriceSTW_2, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterLN_1 = number_format($Pcs_AfterLN_1, 0);
        $Price_AfterLN_1 = number_format($Price_AfterLN_1, 0);
        $Po_PcsLN_1 = number_format($Po_PcsLN_1, 0);
        $Po_PriceLN_1 = number_format($Po_PriceLN_1, 0);
        $Neg_PcsLN_1 = number_format($Neg_PcsLN_1, 0);
        $Neg_PriceLN_1 = number_format($Neg_PriceLN_1, 0);
        $BackChange_PcsLN_1 = number_format($BackChange_PcsLN_1, 0);
        $BackChange_PriceLN_1 = number_format($BackChange_PriceLN_1, 0);
        $Purchase_PcsLN_1 = number_format($Purchase_PcsLN_1, 0);
        $Purchase_PriceLN_1 = number_format($Purchase_PriceLN_1, 0);
        $ReciveTranfer_PcsLN_1 = number_format($ReciveTranfer_PcsLN_1, 0);
        $ReciveTranfer_PriceLN_1 = number_format($ReciveTranfer_PriceLN_1, 0);
        $ReturnItem_PCSLN_1 = number_format($ReturnItem_PCSLN_1, 0);
        $ReturnItem_PriceLN_1 = number_format($ReturnItem_PriceLN_1, 0);
        $AllIn_PcsLN_1 = number_format($AllIn_PcsLN_1, 0);
        $AllIn_PriceLN_1 = number_format($AllIn_PriceLN_1, 0);
        $SendSale_PcsLN_1 = number_format($SendSale_PcsLN_1, 0);
        $SendSale_PriceLN_1 = number_format($SendSale_PriceLN_1, 0);
        $ReciveTranOut_PcsLN_1 = number_format($ReciveTranOut_PcsLN_1, 0);
        $ReciveTranOut_PriceLN_1 = number_format($ReciveTranOut_PriceLN_1, 0);
        $ReturnStore_PcsLN_1 = number_format($ReturnStore_PcsLN_1, 0);
        $ReturnStore_PriceLN_1 = number_format($ReturnStore_PriceLN_1, 0);
        $AllOut_PcsLN_1 = number_format($AllOut_PcsLN_1, 0);
        $AllOut_PriceLN_1 = number_format($AllOut_PriceLN_1, 0);
        $Calculate_PcsLN_1 = number_format($Calculate_PcsLN_1, 0);
        $Calculate_PriceLN_1 = number_format($Calculate_PriceLN_1, 0);
        $NewCalculate_PcsLN_1 = number_format($NewCalculate_PcsLN_1, 0);
        $NewCalculate_PriceLN_1 = number_format($NewCalculate_PriceLN_1, 0);
        $Diff_PcsLN_1 = number_format($Diff_PcsLN_1, 0);
        $Diff_PriceLN_1 = number_format($Diff_PriceLN_1, 0);
        $NewTotal_PcsLN_1 = number_format($NewTotal_PcsLN_1, 0);
        $NewTotal_PriceLN_1 = number_format($NewTotal_PriceLN_1, 0);
        $NewTotalDiff_NavLN_1 = number_format($NewTotalDiff_NavLN_1, 0);
        $NewTotalDiff_CalLN_1 = number_format($NewTotalDiff_CalLN_1, 0);
        $a7f1fgbu02s_PcsLN_1 = number_format($a7f1fgbu02s_PcsLN_1, 0);
        $a7f1fgbu02s_PriceLN_1 = number_format($a7f1fgbu02s_PriceLN_1, 0);
        $a7f2fgbu10s_PcsLN_1 = number_format($a7f2fgbu10s_PcsLN_1, 0);
        $a7f2fgbu10s_PriceLN_1 = number_format($a7f2fgbu10s_PriceLN_1, 0);
        $a7f2thbu05s_PcsLN_1 = number_format($a7f2thbu05s_PcsLN_1, 0);
        $a7f2thbu05s_PriceLN_1 = number_format($a7f2thbu05s_PriceLN_1, 0);
        $a7f2debu10s_PcsLN_1 = number_format($a7f2debu10s_PcsLN_1, 0);
        $a7f2debu10s_PriceLN_1 = number_format($a7f2debu10s_PriceLN_1, 0);
        $a7f2exbu11s_PcsLN_1 = number_format($a7f2exbu11s_PcsLN_1, 0);
        $a7f2exbu11s_PriceLN_1 = number_format($a7f2exbu11s_PriceLN_1, 0);
        $a7f2twbu04s_PcsLN_1 = number_format($a7f2twbu04s_PcsLN_1, 0);
        $a7f2twbu04s_PriceLN_1 = number_format($a7f2twbu04s_PriceLN_1, 0);
        $a7f2twbu07s_PcsLN_1 = number_format($a7f2twbu07s_PcsLN_1, 0);
        $a7f2twbu07s_PriceLN_1 = number_format($a7f2twbu07s_PriceLN_1, 0);
        $a7f2cebu10s_PcsLN_1 = number_format($a7f2cebu10s_PcsLN_1, 0);
        $a7f2cebu10s_PriceLN_1 = number_format($a7f2cebu10s_PriceLN_1, 0);
        $a8f1fgbu02s_PcsLN_1 = number_format($a8f1fgbu02s_PcsLN_1, 0);
        $a8f1fgbu02s_PriceLN_1 = number_format($a8f1fgbu02s_PriceLN_1, 0);
        $a8f2fgbu10s_PcsLN_1 = number_format($a8f2fgbu10s_PcsLN_1, 0);
        $a8f2fgbu10s_PriceLN_1 = number_format($a8f2fgbu10s_PriceLN_1, 0);
        $a8f2thbu05s_PcsLN_1 = number_format($a8f2thbu05s_PcsLN_1, 0);
        $a8f2thbu05s_PriceLN_1 = number_format($a8f2thbu05s_PriceLN_1, 0);
        $a8f2debu10s_PcsLN_1 = number_format($a8f2debu10s_PcsLN_1, 0);
        $a8f2debu10s_PriceLN_1 = number_format($a8f2debu10s_PriceLN_1, 0);
        $a8f2exbu11s_PcsLN_1 = number_format($a8f2exbu11s_PcsLN_1, 0);
        $a8f2exbu11s_PriceLN_1 = number_format($a8f2exbu11s_PriceLN_1, 0);
        $a8f2twbu04s_PcsLN_1 = number_format($a8f2twbu04s_PcsLN_1, 0);
        $a8f2twbu04s_PriceLN_1 = number_format($a8f2twbu04s_PriceLN_1, 0);
        $a8f2twbu07s_PcsLN_1 = number_format($a8f2twbu07s_PcsLN_1, 0);
        $a8f2twbu07s_PriceLN_1 = number_format($a8f2twbu07s_PriceLN_1, 0);
        $a8f2cebu10s_PcsLN_1 = number_format($a8f2cebu10s_PcsLN_1, 0);
        $a8f2cebu10s_PriceLN_1 = number_format($a8f2cebu10s_PriceLN_1, 0);
        $DC1_PcsLN_1 = number_format($DC1_PcsLN_1, 0);
        $DC1_PriceLN_1 = number_format($DC1_PriceLN_1, 0);
        $DCP_PcsLN_1 = number_format($DCP_PcsLN_1, 0);
        $DCP_PriceLN_1 = number_format($DCP_PriceLN_1, 0);
        $DCY_PcsLN_1 = number_format($DCY_PcsLN_1, 0);
        $DCY_PriceLN_1 = number_format($DCY_PriceLN_1, 0);
        $DEX_PcsLN_1 = number_format($DEX_PcsLN_1, 0);
        $DEX_PriceLN_1 = number_format($DEX_PriceLN_1, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSLN_1 = number_format($Pcs_AfterSLN_1, 0);
        $Price_AfterSLN_1 = number_format($Price_AfterSLN_1, 0);
        $Po_PcsSLN_1 = number_format($Po_PcsSLN_1, 0);
        $Po_PriceSLN_1 = number_format($Po_PriceSLN_1, 0);
        $Neg_PcsSLN_1 = number_format($Neg_PcsSLN_1, 0);
        $Neg_PriceSLN_1 = number_format($Neg_PriceSLN_1, 0);
        $BackChange_PcsSLN_1 = number_format($BackChange_PcsSLN_1, 0);
        $BackChange_PriceSLN_1 = number_format($BackChange_PriceSLN_1, 0);
        $Purchase_PcsSLN_1 = number_format($Purchase_PcsSLN_1, 0);
        $Purchase_PriceSLN_1 = number_format($Purchase_PriceSLN_1, 0);
        $ReciveTranfer_PcsSLN_1 = number_format($ReciveTranfer_PcsSLN_1, 0);
        $ReciveTranfer_PriceSLN_1 = number_format($ReciveTranfer_PriceSLN_1, 0);
        $ReturnItem_PCSSLN_1 = number_format($ReturnItem_PCSSLN_1, 0);
        $ReturnItem_PriceSLN_1 = number_format($ReturnItem_PriceSLN_1, 0);
        $AllIn_PcsSLN_1 = number_format($AllIn_PcsSLN_1, 0);
        $AllIn_PriceSLN_1 = number_format($AllIn_PriceSLN_1, 0);
        $SendSale_PcsSLN_1 = number_format($SendSale_PcsSLN_1, 0);
        $SendSale_PriceSLN_1 = number_format($SendSale_PriceSLN_1, 0);
        $ReciveTranOut_PcsSLN_1 = number_format($ReciveTranOut_PcsSLN_1, 0);
        $ReciveTranOut_PriceSLN_1 = number_format($ReciveTranOut_PriceSLN_1, 0);
        $ReturnStore_PcsSLN_1 = number_format($ReturnStore_PcsSLN_1, 0);
        $ReturnStore_PriceSLN_1 = number_format($ReturnStore_PriceSLN_1, 0);
        $AllOut_PcsSLN_1 = number_format($AllOut_PcsSLN_1, 0);
        $AllOut_PriceSLN_1 = number_format($AllOut_PriceSLN_1, 0);
        $Calculate_PcsSLN_1 = number_format($Calculate_PcsSLN_1, 0);
        $Calculate_PriceSLN_1 = number_format($Calculate_PriceSLN_1, 0);
        $NewCalculate_PcsSLN_1 = number_format($NewCalculate_PcsSLN_1, 0);
        $NewCalculate_PriceSLN_1 = number_format($NewCalculate_PriceSLN_1, 0);
        $Diff_PcsSLN_1 = number_format($Diff_PcsSLN_1, 0);
        $Diff_PriceSLN_1 = number_format($Diff_PriceSLN_1, 0);
        $NewTotal_PcsSLN_1 = number_format($NewTotal_PcsSLN_1, 0);
        $NewTotal_PriceSLN_1 = number_format($NewTotal_PriceSLN_1, 0);
        $NewTotalDiff_NavSLN_1 = number_format($NewTotalDiff_NavSLN_1, 0);
        $NewTotalDiff_CalSLN_1 = number_format($NewTotalDiff_CalSLN_1, 0);
        $a7f1fgbu02s_PcsSLN_1 = number_format($a7f1fgbu02s_PcsSLN_1, 0);
        $a7f1fgbu02s_PriceSLN_1 = number_format($a7f1fgbu02s_PriceSLN_1, 0);
        $a7f2fgbu10s_PcsSLN_1 = number_format($a7f2fgbu10s_PcsSLN_1, 0);
        $a7f2fgbu10s_PriceSLN_1 = number_format($a7f2fgbu10s_PriceSLN_1, 0);
        $a7f2thbu05s_PcsSLN_1 = number_format($a7f2thbu05s_PcsSLN_1, 0);
        $a7f2thbu05s_PriceSLN_1 = number_format($a7f2thbu05s_PriceSLN_1, 0);
        $a7f2debu10s_PcsSLN_1 = number_format($a7f2debu10s_PcsSLN_1, 0);
        $a7f2debu10s_PriceSLN_1 = number_format($a7f2debu10s_PriceSLN_1, 0);
        $a7f2exbu11s_PcsSLN_1 = number_format($a7f2exbu11s_PcsSLN_1, 0);
        $a7f2exbu11s_PriceSLN_1 = number_format($a7f2exbu11s_PriceSLN_1, 0);
        $a7f2twbu04s_PcsSLN_1 = number_format($a7f2twbu04s_PcsSLN_1, 0);
        $a7f2twbu04s_PriceSLN_1 = number_format($a7f2twbu04s_PriceSLN_1, 0);
        $a7f2twbu07s_PcsSLN_1 = number_format($a7f2twbu07s_PcsSLN_1, 0);
        $a7f2twbu07s_PriceSLN_1 = number_format($a7f2twbu07s_PriceSLN_1, 0);
        $a7f2cebu10s_PcsSLN_1 = number_format($a7f2cebu10s_PcsSLN_1, 0);
        $a7f2cebu10s_PriceSLN_1 = number_format($a7f2cebu10s_PriceSLN_1, 0);
        $a8f1fgbu02s_PcsSLN_1 = number_format($a8f1fgbu02s_PcsSLN_1, 0);
        $a8f1fgbu02s_PriceSLN_1 = number_format($a8f1fgbu02s_PriceSLN_1, 0);
        $a8f2fgbu10s_PcsSLN_1 = number_format($a8f2fgbu10s_PcsSLN_1, 0);
        $a8f2fgbu10s_PriceSLN_1 = number_format($a8f2fgbu10s_PriceSLN_1, 0);
        $a8f2thbu05s_PcsSLN_1 = number_format($a8f2thbu05s_PcsSLN_1, 0);
        $a8f2thbu05s_PriceSLN_1 = number_format($a8f2thbu05s_PriceSLN_1, 0);
        $a8f2debu10s_PcsSLN_1 = number_format($a8f2debu10s_PcsSLN_1, 0);
        $a8f2debu10s_PriceSLN_1 = number_format($a8f2debu10s_PriceSLN_1, 0);
        $a8f2exbu11s_PcsSLN_1 = number_format($a8f2exbu11s_PcsSLN_1, 0);
        $a8f2exbu11s_PriceSLN_1 = number_format($a8f2exbu11s_PriceSLN_1, 0);
        $a8f2twbu04s_PcsSLN_1 = number_format($a8f2twbu04s_PcsSLN_1, 0);
        $a8f2twbu04s_PriceSLN_1 = number_format($a8f2twbu04s_PriceSLN_1, 0);
        $a8f2twbu07s_PcsSLN_1 = number_format($a8f2twbu07s_PcsSLN_1, 0);
        $a8f2twbu07s_PriceSLN_1 = number_format($a8f2twbu07s_PriceSLN_1, 0);
        $a8f2cebu10s_PcsSLN_1 = number_format($a8f2cebu10s_PcsSLN_1, 0);
        $a8f2cebu10s_PriceSLN_1 = number_format($a8f2cebu10s_PriceSLN_1, 0);
        $DC1_PcsSLN_1 = number_format($DC1_PcsSLN_1, 0);
        $DC1_PriceSLN_1 = number_format($DC1_PriceSLN_1, 0);
        $DCP_PcsSLN_1 = number_format($DCP_PcsSLN_1, 0);
        $DCP_PriceSLN_1 = number_format($DCP_PriceSLN_1, 0);
        $DCY_PcsSLN_1 = number_format($DCY_PcsSLN_1, 0);
        $DCY_PriceSLN_1 = number_format($DCY_PriceSLN_1, 0);
        $DEX_PcsSLN_1 = number_format($DEX_PcsSLN_1, 0);
        $DEX_PriceSLN_1 = number_format($DEX_PriceSLN_1, 0);

        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTW_All = number_format($Pcs_AfterTW_All, 0);
        $Price_AfterTW_All = number_format($Price_AfterTW_All, 0);
        $Po_PcsTW_All = number_format($Po_PcsTW_All, 0);
        $Po_PriceTW_All = number_format($Po_PriceTW_All, 0);
        $Neg_PcsTW_All = number_format($Neg_PcsTW_All, 0);
        $Neg_PriceTW_All = number_format($Neg_PriceTW_All, 0);
        $BackChange_PcsTW_All = number_format($BackChange_PcsTW_All, 0);
        $BackChange_PriceTW_All = number_format($BackChange_PriceTW_All, 0);
        $Purchase_PcsTW_All = number_format($Purchase_PcsTW_All, 0);
        $Purchase_PriceTW_All = number_format($Purchase_PriceTW_All, 0);
        $ReciveTranfer_PcsTW_All = number_format($ReciveTranfer_PcsTW_All, 0);
        $ReciveTranfer_PriceTW_All = number_format($ReciveTranfer_PriceTW_All, 0);
        $ReturnItem_PCSTW_All = number_format($ReturnItem_PCSTW_All, 0);
        $ReturnItem_PriceTW_All = number_format($ReturnItem_PriceTW_All, 0);
        $AllIn_PcsTW_All = number_format($AllIn_PcsTW_All, 0);
        $AllIn_PriceTW_All = number_format($AllIn_PriceTW_All, 0);
        $SendSale_PcsTW_All = number_format($SendSale_PcsTW_All, 0);
        $SendSale_PriceTW_All = number_format($SendSale_PriceTW_All, 0);
        $ReciveTranOut_PcsTW_All = number_format($ReciveTranOut_PcsTW_All, 0);
        $ReciveTranOut_PriceTW_All = number_format($ReciveTranOut_PriceTW_All, 0);
        $ReturnStore_PcsTW_All = number_format($ReturnStore_PcsTW_All, 0);
        $ReturnStore_PriceTW_All = number_format($ReturnStore_PriceTW_All, 0);
        $AllOut_PcsTW_All = number_format($AllOut_PcsTW_All, 0);
        $AllOut_PriceTW_All = number_format($AllOut_PriceTW_All, 0);
        $Calculate_PcsTW_All = number_format($Calculate_PcsTW_All, 0);
        $Calculate_PriceTW_All = number_format($Calculate_PriceTW_All, 0);
        $NewCalculate_PcsTW_All = number_format($NewCalculate_PcsTW_All, 0);
        $NewCalculate_PriceTW_All = number_format($NewCalculate_PriceTW_All, 0);
        $Diff_PcsTW_All = number_format($Diff_PcsTW_All, 0);
        $Diff_PriceTW_All = number_format($Diff_PriceTW_All, 0);
        $NewTotal_PcsTW_All = number_format($NewTotal_PcsTW_All, 0);
        $NewTotal_PriceTW_All = number_format($NewTotal_PriceTW_All, 0);
        $NewTotalDiff_NavTW_All = number_format($NewTotalDiff_NavTW_All, 0);
        $NewTotalDiff_CalTW_All = number_format($NewTotalDiff_CalTW_All, 0);
        $a7f1fgbu02s_PcsTW_All = number_format($a7f1fgbu02s_PcsTW_All, 0);
        $a7f1fgbu02s_PriceTW_All = number_format($a7f1fgbu02s_PriceTW_All, 0);
        $a7f2fgbu10s_PcsTW_All = number_format($a7f2fgbu10s_PcsTW_All, 0);
        $a7f2fgbu10s_PriceTW_All = number_format($a7f2fgbu10s_PriceTW_All, 0);
        $a7f2thbu05s_PcsTW_All = number_format($a7f2thbu05s_PcsTW_All, 0);
        $a7f2thbu05s_PriceTW_All = number_format($a7f2thbu05s_PriceTW_All, 0);
        $a7f2debu10s_PcsTW_All = number_format($a7f2debu10s_PcsTW_All, 0);
        $a7f2debu10s_PriceTW_All = number_format($a7f2debu10s_PriceTW_All, 0);
        $a7f2exbu11s_PcsTW_All = number_format($a7f2exbu11s_PcsTW_All, 0);
        $a7f2exbu11s_PriceTW_All = number_format($a7f2exbu11s_PriceTW_All, 0);
        $a7f2twbu04s_PcsTW_All = number_format($a7f2twbu04s_PcsTW_All, 0);
        $a7f2twbu04s_PriceTW_All = number_format($a7f2twbu04s_PriceTW_All, 0);
        $a7f2twbu07s_PcsTW_All = number_format($a7f2twbu07s_PcsTW_All, 0);
        $a7f2twbu07s_PriceTW_All = number_format($a7f2twbu07s_PriceTW_All, 0);
        $a7f2cebu10s_PcsTW_All = number_format($a7f2cebu10s_PcsTW_All, 0);
        $a7f2cebu10s_PriceTW_All = number_format($a7f2cebu10s_PriceTW_All, 0);
        $a8f1fgbu02s_PcsTW_All = number_format($a8f1fgbu02s_PcsTW_All, 0);
        $a8f1fgbu02s_PriceTW_All = number_format($a8f1fgbu02s_PriceTW_All, 0);
        $a8f2fgbu10s_PcsTW_All = number_format($a8f2fgbu10s_PcsTW_All, 0);
        $a8f2fgbu10s_PriceTW_All = number_format($a8f2fgbu10s_PriceTW_All, 0);
        $a8f2thbu05s_PcsTW_All = number_format($a8f2thbu05s_PcsTW_All, 0);
        $a8f2thbu05s_PriceTW_All = number_format($a8f2thbu05s_PriceTW_All, 0);
        $a8f2debu10s_PcsTW_All = number_format($a8f2debu10s_PcsTW_All, 0);
        $a8f2debu10s_PriceTW_All = number_format($a8f2debu10s_PriceTW_All, 0);
        $a8f2exbu11s_PcsTW_All = number_format($a8f2exbu11s_PcsTW_All, 0);
        $a8f2exbu11s_PriceTW_All = number_format($a8f2exbu11s_PriceTW_All, 0);
        $a8f2twbu04s_PcsTW_All = number_format($a8f2twbu04s_PcsTW_All, 0);
        $a8f2twbu04s_PriceTW_All = number_format($a8f2twbu04s_PriceTW_All, 0);
        $a8f2twbu07s_PcsTW_All = number_format($a8f2twbu07s_PcsTW_All, 0);
        $a8f2twbu07s_PriceTW_All = number_format($a8f2twbu07s_PriceTW_All, 0);
        $a8f2cebu10s_PcsTW_All = number_format($a8f2cebu10s_PcsTW_All, 0);
        $a8f2cebu10s_PriceTW_All = number_format($a8f2cebu10s_PriceTW_All, 0);
        $DC1_PcsTW_All = number_format($DC1_PcsTW_All, 0);
        $DC1_PriceTW_All = number_format($DC1_PriceTW_All, 0);
        $DCP_PcsTW_All = number_format($DCP_PcsTW_All, 0);
        $DCP_PriceTW_All = number_format($DCP_PriceTW_All, 0);
        $DCY_PcsTW_All = number_format($DCY_PcsTW_All, 0);
        $DCY_PriceTW_All = number_format($DCY_PriceTW_All, 0);
        $DEX_PcsTW_All = number_format($DEX_PcsTW_All, 0);
        $DEX_PriceTW_All = number_format($DEX_PriceTW_All, 0);

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

            $Pcs_AfterSNT_1,
            $Price_AfterSNT_1,
            $Pcs_AfterSNT_1,
            $Price_AfterSNT_1,
            $Po_PcsSNT_1,
            $Po_PriceSNT_1,
            $Neg_PcsSNT_1,
            $Neg_PriceSNT_1,
            $BackChange_PcsSNT_1,
            $BackChange_PriceSNT_1,
            $Purchase_PcsSNT_1,
            $Purchase_PriceSNT_1,
            $ReciveTranfer_PcsSNT_1,
            $ReciveTranfer_PriceSNT_1,
            $ReturnItem_PCSSNT_1,
            $ReturnItem_PriceSNT_1,
            $AllIn_PcsSNT_1,
            $AllIn_PriceSNT_1,
            $SendSale_PcsSNT_1,
            $SendSale_PriceSNT_1,
            $ReciveTranOut_PcsSNT_1,
            $ReciveTranOut_PriceSNT_1,
            $ReturnStore_PcsSNT_1,
            $ReturnStore_PriceSNT_1,
            $AllOut_PcsSNT_1,
            $AllOut_PriceSNT_1,
            $Calculate_PcsSNT_1,
            $Calculate_PriceSNT_1,
            $NewCalculate_PcsSNT_1,
            $NewCalculate_PriceSNT_1,
            $Diff_PcsSNT_1,
            $Diff_PriceSNT_1,
            $NewTotal_PcsSNT_1,
            $NewTotal_PriceSNT_1,
            $NewTotalDiff_NavSNT_1,
            $NewTotalDiff_CalSNT_1,
            $a7f1fgbu02s_PcsSNT_1,
            $a7f1fgbu02s_PriceSNT_1,
            $a7f2fgbu10s_PcsSNT_1,
            $a7f2fgbu10s_PriceSNT_1,
            $a7f2thbu05s_PcsSNT_1,
            $a7f2thbu05s_PriceSNT_1,
            $a7f2debu10s_PcsSNT_1,
            $a7f2debu10s_PriceSNT_1,
            $a7f2exbu11s_PcsSNT_1,
            $a7f2exbu11s_PriceSNT_1,
            $a7f2twbu04s_PcsSNT_1,
            $a7f2twbu04s_PriceSNT_1,
            $a7f2twbu07s_PcsSNT_1,
            $a7f2twbu07s_PriceSNT_1,
            $a7f2cebu10s_PcsSNT_1,
            $a7f2cebu10s_PriceSNT_1,
            $a8f1fgbu02s_PcsSNT_1,
            $a8f1fgbu02s_PriceSNT_1,
            $a8f2fgbu10s_PcsSNT_1,
            $a8f2fgbu10s_PriceSNT_1,
            $a8f2thbu05s_PcsSNT_1,
            $a8f2thbu05s_PriceSNT_1,
            $a8f2debu10s_PcsSNT_1,
            $a8f2debu10s_PriceSNT_1,
            $a8f2exbu11s_PcsSNT_1,
            $a8f2exbu11s_PriceSNT_1,
            $a8f2twbu04s_PcsSNT_1,
            $a8f2twbu04s_PriceSNT_1,
            $a8f2twbu07s_PcsSNT_1,
            $a8f2twbu07s_PriceSNT_1,
            $a8f2cebu10s_PcsSNT_1,
            $a8f2cebu10s_PriceSNT_1,
            $DC1_PcsSNT_1,
            $DC1_PriceSNT_1,
            $DCP_PcsSNT_1,
            $DCP_PriceSNT_1,
            $DCY_PcsSNT_1,
            $DCY_PriceSNT_1,
            $DEX_PcsSNT_1,
            $DEX_PriceSNT_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterSNT_2,
            $Price_AfterSNT_2,
            $Pcs_AfterSNT_2,
            $Price_AfterSNT_2,
            $Po_PcsSNT_2,
            $Po_PriceSNT_2,
            $Neg_PcsSNT_2,
            $Neg_PriceSNT_2,
            $BackChange_PcsSNT_2,
            $BackChange_PriceSNT_2,
            $Purchase_PcsSNT_2,
            $Purchase_PriceSNT_2,
            $ReciveTranfer_PcsSNT_2,
            $ReciveTranfer_PriceSNT_2,
            $ReturnItem_PCSSNT_2,
            $ReturnItem_PriceSNT_2,
            $AllIn_PcsSNT_2,
            $AllIn_PriceSNT_2,
            $SendSale_PcsSNT_2,
            $SendSale_PriceSNT_2,
            $ReciveTranOut_PcsSNT_2,
            $ReciveTranOut_PriceSNT_2,
            $ReturnStore_PcsSNT_2,
            $ReturnStore_PriceSNT_2,
            $AllOut_PcsSNT_2,
            $AllOut_PriceSNT_2,
            $Calculate_PcsSNT_2,
            $Calculate_PriceSNT_2,
            $NewCalculate_PcsSNT_2,
            $NewCalculate_PriceSNT_2,
            $Diff_PcsSNT_2,
            $Diff_PriceSNT_2,
            $NewTotal_PcsSNT_2,
            $NewTotal_PriceSNT_2,
            $NewTotalDiff_NavSNT_2,
            $NewTotalDiff_CalSNT_2,
            $a7f1fgbu02s_PcsSNT_2,
            $a7f1fgbu02s_PriceSNT_2,
            $a7f2fgbu10s_PcsSNT_2,
            $a7f2fgbu10s_PriceSNT_2,
            $a7f2thbu05s_PcsSNT_2,
            $a7f2thbu05s_PriceSNT_2,
            $a7f2debu10s_PcsSNT_2,
            $a7f2debu10s_PriceSNT_2,
            $a7f2exbu11s_PcsSNT_2,
            $a7f2exbu11s_PriceSNT_2,
            $a7f2twbu04s_PcsSNT_2,
            $a7f2twbu04s_PriceSNT_2,
            $a7f2twbu07s_PcsSNT_2,
            $a7f2twbu07s_PriceSNT_2,
            $a7f2cebu10s_PcsSNT_2,
            $a7f2cebu10s_PriceSNT_2,
            $a8f1fgbu02s_PcsSNT_2,
            $a8f1fgbu02s_PriceSNT_2,
            $a8f2fgbu10s_PcsSNT_2,
            $a8f2fgbu10s_PriceSNT_2,
            $a8f2thbu05s_PcsSNT_2,
            $a8f2thbu05s_PriceSNT_2,
            $a8f2debu10s_PcsSNT_2,
            $a8f2debu10s_PriceSNT_2,
            $a8f2exbu11s_PcsSNT_2,
            $a8f2exbu11s_PriceSNT_2,
            $a8f2twbu04s_PcsSNT_2,
            $a8f2twbu04s_PriceSNT_2,
            $a8f2twbu07s_PcsSNT_2,
            $a8f2twbu07s_PriceSNT_2,
            $a8f2cebu10s_PcsSNT_2,
            $a8f2cebu10s_PriceSNT_2,
            $DC1_PcsSNT_2,
            $DC1_PriceSNT_2,
            $DCP_PcsSNT_2,
            $DCP_PriceSNT_2,
            $DCY_PcsSNT_2,
            $DCY_PriceSNT_2,
            $DEX_PcsSNT_2,
            $DEX_PriceSNT_2,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterNT_All,
            $Price_AfterNT_All,
            $Pcs_AfterNT_All,
            $Price_AfterNT_All,
            $Po_PcsNT_All,
            $Po_PriceNT_All,
            $Neg_PcsNT_All,
            $Neg_PriceNT_All,
            $BackChange_PcsNT_All,
            $BackChange_PriceNT_All,
            $Purchase_PcsNT_All,
            $Purchase_PriceNT_All,
            $ReciveTranfer_PcsNT_All,
            $ReciveTranfer_PriceNT_All,
            $ReturnItem_PCSNT_All,
            $ReturnItem_PriceNT_All,
            $AllIn_PcsNT_All,
            $AllIn_PriceNT_All,
            $SendSale_PcsNT_All,
            $SendSale_PriceNT_All,
            $ReciveTranOut_PcsNT_All,
            $ReciveTranOut_PriceNT_All,
            $ReturnStore_PcsNT_All,
            $ReturnStore_PriceNT_All,
            $AllOut_PcsNT_All,
            $AllOut_PriceNT_All,
            $Calculate_PcsNT_All,
            $Calculate_PriceNT_All,
            $NewCalculate_PcsNT_All,
            $NewCalculate_PriceNT_All,
            $Diff_PcsNT_All,
            $Diff_PriceNT_All,
            $NewTotal_PcsNT_All,
            $NewTotal_PriceNT_All,
            $NewTotalDiff_NavNT_All,
            $NewTotalDiff_CalNT_All,
            $a7f1fgbu02s_PcsNT_All,
            $a7f1fgbu02s_PriceNT_All,
            $a7f2fgbu10s_PcsNT_All,
            $a7f2fgbu10s_PriceNT_All,
            $a7f2thbu05s_PcsNT_All,
            $a7f2thbu05s_PriceNT_All,
            $a7f2debu10s_PcsNT_All,
            $a7f2debu10s_PriceNT_All,
            $a7f2exbu11s_PcsNT_All,
            $a7f2exbu11s_PriceNT_All,
            $a7f2twbu04s_PcsNT_All,
            $a7f2twbu04s_PriceNT_All,
            $a7f2twbu07s_PcsNT_All,
            $a7f2twbu07s_PriceNT_All,
            $a7f2cebu10s_PcsNT_All,
            $a7f2cebu10s_PriceNT_All,
            $a8f1fgbu02s_PcsNT_All,
            $a8f1fgbu02s_PriceNT_All,
            $a8f2fgbu10s_PcsNT_All,
            $a8f2fgbu10s_PriceNT_All,
            $a8f2thbu05s_PcsNT_All,
            $a8f2thbu05s_PriceNT_All,
            $a8f2debu10s_PcsNT_All,
            $a8f2debu10s_PriceNT_All,
            $a8f2exbu11s_PcsNT_All,
            $a8f2exbu11s_PriceNT_All,
            $a8f2twbu04s_PcsNT_All,
            $a8f2twbu04s_PriceNT_All,
            $a8f2twbu07s_PcsNT_All,
            $a8f2twbu07s_PriceNT_All,
            $a8f2cebu10s_PcsNT_All,
            $a8f2cebu10s_PriceNT_All,
            $DC1_PcsNT_All,
            $DC1_PriceNT_All,
            $DCP_PcsNT_All,
            $DCP_PriceNT_All,
            $DCY_PcsNT_All,
            $DCY_PriceNT_All,
            $DEX_PcsNT_All,
            $DEX_PriceNT_All,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_1,
            $Price_AfterMT_1,
            $Pcs_AfterMT_1,
            $Price_AfterMT_1,
            $Po_PcsMT_1,
            $Po_PriceMT_1,
            $Neg_PcsMT_1,
            $Neg_PriceMT_1,
            $BackChange_PcsMT_1,
            $BackChange_PriceMT_1,
            $Purchase_PcsMT_1,
            $Purchase_PriceMT_1,
            $ReciveTranfer_PcsMT_1,
            $ReciveTranfer_PriceMT_1,
            $ReturnItem_PCSMT_1,
            $ReturnItem_PriceMT_1,
            $AllIn_PcsMT_1,
            $AllIn_PriceMT_1,
            $SendSale_PcsMT_1,
            $SendSale_PriceMT_1,
            $ReciveTranOut_PcsMT_1,
            $ReciveTranOut_PriceMT_1,
            $ReturnStore_PcsMT_1,
            $ReturnStore_PriceMT_1,
            $AllOut_PcsMT_1,
            $AllOut_PriceMT_1,
            $Calculate_PcsMT_1,
            $Calculate_PriceMT_1,
            $NewCalculate_PcsMT_1,
            $NewCalculate_PriceMT_1,
            $Diff_PcsMT_1,
            $Diff_PriceMT_1,
            $NewTotal_PcsMT_1,
            $NewTotal_PriceMT_1,
            $NewTotalDiff_NavMT_1,
            $NewTotalDiff_CalMT_1,
            $a7f1fgbu02s_PcsMT_1,
            $a7f1fgbu02s_PriceMT_1,
            $a7f2fgbu10s_PcsMT_1,
            $a7f2fgbu10s_PriceMT_1,
            $a7f2thbu05s_PcsMT_1,
            $a7f2thbu05s_PriceMT_1,
            $a7f2debu10s_PcsMT_1,
            $a7f2debu10s_PriceMT_1,
            $a7f2exbu11s_PcsMT_1,
            $a7f2exbu11s_PriceMT_1,
            $a7f2twbu04s_PcsMT_1,
            $a7f2twbu04s_PriceMT_1,
            $a7f2twbu07s_PcsMT_1,
            $a7f2twbu07s_PriceMT_1,
            $a7f2cebu10s_PcsMT_1,
            $a7f2cebu10s_PriceMT_1,
            $a8f1fgbu02s_PcsMT_1,
            $a8f1fgbu02s_PriceMT_1,
            $a8f2fgbu10s_PcsMT_1,
            $a8f2fgbu10s_PriceMT_1,
            $a8f2thbu05s_PcsMT_1,
            $a8f2thbu05s_PriceMT_1,
            $a8f2debu10s_PcsMT_1,
            $a8f2debu10s_PriceMT_1,
            $a8f2exbu11s_PcsMT_1,
            $a8f2exbu11s_PriceMT_1,
            $a8f2twbu04s_PcsMT_1,
            $a8f2twbu04s_PriceMT_1,
            $a8f2twbu07s_PcsMT_1,
            $a8f2twbu07s_PriceMT_1,
            $a8f2cebu10s_PcsMT_1,
            $a8f2cebu10s_PriceMT_1,
            $DC1_PcsMT_1,
            $DC1_PriceMT_1,
            $DCP_PcsMT_1,
            $DCP_PriceMT_1,
            $DCY_PcsMT_1,
            $DCY_PriceMT_1,
            $DEX_PcsMT_1,
            $DEX_PriceMT_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_2,
            $Price_AfterMT_2,
            $Pcs_AfterMT_2,
            $Price_AfterMT_2,
            $Po_PcsMT_2,
            $Po_PriceMT_2,
            $Neg_PcsMT_2,
            $Neg_PriceMT_2,
            $BackChange_PcsMT_2,
            $BackChange_PriceMT_2,
            $Purchase_PcsMT_2,
            $Purchase_PriceMT_2,
            $ReciveTranfer_PcsMT_2,
            $ReciveTranfer_PriceMT_2,
            $ReturnItem_PCSMT_2,
            $ReturnItem_PriceMT_2,
            $AllIn_PcsMT_2,
            $AllIn_PriceMT_2,
            $SendSale_PcsMT_2,
            $SendSale_PriceMT_2,
            $ReciveTranOut_PcsMT_2,
            $ReciveTranOut_PriceMT_2,
            $ReturnStore_PcsMT_2,
            $ReturnStore_PriceMT_2,
            $AllOut_PcsMT_2,
            $AllOut_PriceMT_2,
            $Calculate_PcsMT_2,
            $Calculate_PriceMT_2,
            $NewCalculate_PcsMT_2,
            $NewCalculate_PriceMT_2,
            $Diff_PcsMT_2,
            $Diff_PriceMT_2,
            $NewTotal_PcsMT_2,
            $NewTotal_PriceMT_2,
            $NewTotalDiff_NavMT_2,
            $NewTotalDiff_CalMT_2,
            $a7f1fgbu02s_PcsMT_2,
            $a7f1fgbu02s_PriceMT_2,
            $a7f2fgbu10s_PcsMT_2,
            $a7f2fgbu10s_PriceMT_2,
            $a7f2thbu05s_PcsMT_2,
            $a7f2thbu05s_PriceMT_2,
            $a7f2debu10s_PcsMT_2,
            $a7f2debu10s_PriceMT_2,
            $a7f2exbu11s_PcsMT_2,
            $a7f2exbu11s_PriceMT_2,
            $a7f2twbu04s_PcsMT_2,
            $a7f2twbu04s_PriceMT_2,
            $a7f2twbu07s_PcsMT_2,
            $a7f2twbu07s_PriceMT_2,
            $a7f2cebu10s_PcsMT_2,
            $a7f2cebu10s_PriceMT_2,
            $a8f1fgbu02s_PcsMT_2,
            $a8f1fgbu02s_PriceMT_2,
            $a8f2fgbu10s_PcsMT_2,
            $a8f2fgbu10s_PriceMT_2,
            $a8f2thbu05s_PcsMT_2,
            $a8f2thbu05s_PriceMT_2,
            $a8f2debu10s_PcsMT_2,
            $a8f2debu10s_PriceMT_2,
            $a8f2exbu11s_PcsMT_2,
            $a8f2exbu11s_PriceMT_2,
            $a8f2twbu04s_PcsMT_2,
            $a8f2twbu04s_PriceMT_2,
            $a8f2twbu07s_PcsMT_2,
            $a8f2twbu07s_PriceMT_2,
            $a8f2cebu10s_PcsMT_2,
            $a8f2cebu10s_PriceMT_2,
            $DC1_PcsMT_2,
            $DC1_PriceMT_2,
            $DCP_PcsMT_2,
            $DCP_PriceMT_2,
            $DCY_PcsMT_2,
            $DCY_PriceMT_2,
            $DEX_PcsMT_2,
            $DEX_PriceMT_2,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_3,
            $Price_AfterMT_3,
            $Pcs_AfterMT_3,
            $Price_AfterMT_3,
            $Po_PcsMT_3,
            $Po_PriceMT_3,
            $Neg_PcsMT_3,
            $Neg_PriceMT_3,
            $BackChange_PcsMT_3,
            $BackChange_PriceMT_3,
            $Purchase_PcsMT_3,
            $Purchase_PriceMT_3,
            $ReciveTranfer_PcsMT_3,
            $ReciveTranfer_PriceMT_3,
            $ReturnItem_PCSMT_3,
            $ReturnItem_PriceMT_3,
            $AllIn_PcsMT_3,
            $AllIn_PriceMT_3,
            $SendSale_PcsMT_3,
            $SendSale_PriceMT_3,
            $ReciveTranOut_PcsMT_3,
            $ReciveTranOut_PriceMT_3,
            $ReturnStore_PcsMT_3,
            $ReturnStore_PriceMT_3,
            $AllOut_PcsMT_3,
            $AllOut_PriceMT_3,
            $Calculate_PcsMT_3,
            $Calculate_PriceMT_3,
            $NewCalculate_PcsMT_3,
            $NewCalculate_PriceMT_3,
            $Diff_PcsMT_3,
            $Diff_PriceMT_3,
            $NewTotal_PcsMT_3,
            $NewTotal_PriceMT_3,
            $NewTotalDiff_NavMT_3,
            $NewTotalDiff_CalMT_3,
            $a7f1fgbu02s_PcsMT_3,
            $a7f1fgbu02s_PriceMT_3,
            $a7f2fgbu10s_PcsMT_3,
            $a7f2fgbu10s_PriceMT_3,
            $a7f2thbu05s_PcsMT_3,
            $a7f2thbu05s_PriceMT_3,
            $a7f2debu10s_PcsMT_3,
            $a7f2debu10s_PriceMT_3,
            $a7f2exbu11s_PcsMT_3,
            $a7f2exbu11s_PriceMT_3,
            $a7f2twbu04s_PcsMT_3,
            $a7f2twbu04s_PriceMT_3,
            $a7f2twbu07s_PcsMT_3,
            $a7f2twbu07s_PriceMT_3,
            $a7f2cebu10s_PcsMT_3,
            $a7f2cebu10s_PriceMT_3,
            $a8f1fgbu02s_PcsMT_3,
            $a8f1fgbu02s_PriceMT_3,
            $a8f2fgbu10s_PcsMT_3,
            $a8f2fgbu10s_PriceMT_3,
            $a8f2thbu05s_PcsMT_3,
            $a8f2thbu05s_PriceMT_3,
            $a8f2debu10s_PcsMT_3,
            $a8f2debu10s_PriceMT_3,
            $a8f2exbu11s_PcsMT_3,
            $a8f2exbu11s_PriceMT_3,
            $a8f2twbu04s_PcsMT_3,
            $a8f2twbu04s_PriceMT_3,
            $a8f2twbu07s_PcsMT_3,
            $a8f2twbu07s_PriceMT_3,
            $a8f2cebu10s_PcsMT_3,
            $a8f2cebu10s_PriceMT_3,
            $DC1_PcsMT_3,
            $DC1_PriceMT_3,
            $DCP_PcsMT_3,
            $DCP_PriceMT_3,
            $DCY_PcsMT_3,
            $DCY_PriceMT_3,
            $DEX_PcsMT_3,
            $DEX_PriceMT_3,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_4,
            $Price_AfterMT_4,
            $Pcs_AfterMT_4,
            $Price_AfterMT_4,
            $Po_PcsMT_4,
            $Po_PriceMT_4,
            $Neg_PcsMT_4,
            $Neg_PriceMT_4,
            $BackChange_PcsMT_4,
            $BackChange_PriceMT_4,
            $Purchase_PcsMT_4,
            $Purchase_PriceMT_4,
            $ReciveTranfer_PcsMT_4,
            $ReciveTranfer_PriceMT_4,
            $ReturnItem_PCSMT_4,
            $ReturnItem_PriceMT_4,
            $AllIn_PcsMT_4,
            $AllIn_PriceMT_4,
            $SendSale_PcsMT_4,
            $SendSale_PriceMT_4,
            $ReciveTranOut_PcsMT_4,
            $ReciveTranOut_PriceMT_4,
            $ReturnStore_PcsMT_4,
            $ReturnStore_PriceMT_4,
            $AllOut_PcsMT_4,
            $AllOut_PriceMT_4,
            $Calculate_PcsMT_4,
            $Calculate_PriceMT_4,
            $NewCalculate_PcsMT_4,
            $NewCalculate_PriceMT_4,
            $Diff_PcsMT_4,
            $Diff_PriceMT_4,
            $NewTotal_PcsMT_4,
            $NewTotal_PriceMT_4,
            $NewTotalDiff_NavMT_4,
            $NewTotalDiff_CalMT_4,
            $a7f1fgbu02s_PcsMT_4,
            $a7f1fgbu02s_PriceMT_4,
            $a7f2fgbu10s_PcsMT_4,
            $a7f2fgbu10s_PriceMT_4,
            $a7f2thbu05s_PcsMT_4,
            $a7f2thbu05s_PriceMT_4,
            $a7f2debu10s_PcsMT_4,
            $a7f2debu10s_PriceMT_4,
            $a7f2exbu11s_PcsMT_4,
            $a7f2exbu11s_PriceMT_4,
            $a7f2twbu04s_PcsMT_4,
            $a7f2twbu04s_PriceMT_4,
            $a7f2twbu07s_PcsMT_4,
            $a7f2twbu07s_PriceMT_4,
            $a7f2cebu10s_PcsMT_4,
            $a7f2cebu10s_PriceMT_4,
            $a8f1fgbu02s_PcsMT_4,
            $a8f1fgbu02s_PriceMT_4,
            $a8f2fgbu10s_PcsMT_4,
            $a8f2fgbu10s_PriceMT_4,
            $a8f2thbu05s_PcsMT_4,
            $a8f2thbu05s_PriceMT_4,
            $a8f2debu10s_PcsMT_4,
            $a8f2debu10s_PriceMT_4,
            $a8f2exbu11s_PcsMT_4,
            $a8f2exbu11s_PriceMT_4,
            $a8f2twbu04s_PcsMT_4,
            $a8f2twbu04s_PriceMT_4,
            $a8f2twbu07s_PcsMT_4,
            $a8f2twbu07s_PriceMT_4,
            $a8f2cebu10s_PcsMT_4,
            $a8f2cebu10s_PriceMT_4,
            $DC1_PcsMT_4,
            $DC1_PriceMT_4,
            $DCP_PcsMT_4,
            $DCP_PriceMT_4,
            $DCY_PcsMT_4,
            $DCY_PriceMT_4,
            $DEX_PcsMT_4,
            $DEX_PriceMT_4,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_5,
            $Price_AfterMT_5,
            $Pcs_AfterMT_5,
            $Price_AfterMT_5,
            $Po_PcsMT_5,
            $Po_PriceMT_5,
            $Neg_PcsMT_5,
            $Neg_PriceMT_5,
            $BackChange_PcsMT_5,
            $BackChange_PriceMT_5,
            $Purchase_PcsMT_5,
            $Purchase_PriceMT_5,
            $ReciveTranfer_PcsMT_5,
            $ReciveTranfer_PriceMT_5,
            $ReturnItem_PCSMT_5,
            $ReturnItem_PriceMT_5,
            $AllIn_PcsMT_5,
            $AllIn_PriceMT_5,
            $SendSale_PcsMT_5,
            $SendSale_PriceMT_5,
            $ReciveTranOut_PcsMT_5,
            $ReciveTranOut_PriceMT_5,
            $ReturnStore_PcsMT_5,
            $ReturnStore_PriceMT_5,
            $AllOut_PcsMT_5,
            $AllOut_PriceMT_5,
            $Calculate_PcsMT_5,
            $Calculate_PriceMT_5,
            $NewCalculate_PcsMT_5,
            $NewCalculate_PriceMT_5,
            $Diff_PcsMT_5,
            $Diff_PriceMT_5,
            $NewTotal_PcsMT_5,
            $NewTotal_PriceMT_5,
            $NewTotalDiff_NavMT_5,
            $NewTotalDiff_CalMT_5,
            $a7f1fgbu02s_PcsMT_5,
            $a7f1fgbu02s_PriceMT_5,
            $a7f2fgbu10s_PcsMT_5,
            $a7f2fgbu10s_PriceMT_5,
            $a7f2thbu05s_PcsMT_5,
            $a7f2thbu05s_PriceMT_5,
            $a7f2debu10s_PcsMT_5,
            $a7f2debu10s_PriceMT_5,
            $a7f2exbu11s_PcsMT_5,
            $a7f2exbu11s_PriceMT_5,
            $a7f2twbu04s_PcsMT_5,
            $a7f2twbu04s_PriceMT_5,
            $a7f2twbu07s_PcsMT_5,
            $a7f2twbu07s_PriceMT_5,
            $a7f2cebu10s_PcsMT_5,
            $a7f2cebu10s_PriceMT_5,
            $a8f1fgbu02s_PcsMT_5,
            $a8f1fgbu02s_PriceMT_5,
            $a8f2fgbu10s_PcsMT_5,
            $a8f2fgbu10s_PriceMT_5,
            $a8f2thbu05s_PcsMT_5,
            $a8f2thbu05s_PriceMT_5,
            $a8f2debu10s_PcsMT_5,
            $a8f2debu10s_PriceMT_5,
            $a8f2exbu11s_PcsMT_5,
            $a8f2exbu11s_PriceMT_5,
            $a8f2twbu04s_PcsMT_5,
            $a8f2twbu04s_PriceMT_5,
            $a8f2twbu07s_PcsMT_5,
            $a8f2twbu07s_PriceMT_5,
            $a8f2cebu10s_PcsMT_5,
            $a8f2cebu10s_PriceMT_5,
            $DC1_PcsMT_5,
            $DC1_PriceMT_5,
            $DCP_PcsMT_5,
            $DCP_PriceMT_5,
            $DCY_PcsMT_5,
            $DCY_PriceMT_5,
            $DEX_PcsMT_5,
            $DEX_PriceMT_5,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_6,
            $Price_AfterMT_6,
            $Pcs_AfterMT_6,
            $Price_AfterMT_6,
            $Po_PcsMT_6,
            $Po_PriceMT_6,
            $Neg_PcsMT_6,
            $Neg_PriceMT_6,
            $BackChange_PcsMT_6,
            $BackChange_PriceMT_6,
            $Purchase_PcsMT_6,
            $Purchase_PriceMT_6,
            $ReciveTranfer_PcsMT_6,
            $ReciveTranfer_PriceMT_6,
            $ReturnItem_PCSMT_6,
            $ReturnItem_PriceMT_6,
            $AllIn_PcsMT_6,
            $AllIn_PriceMT_6,
            $SendSale_PcsMT_6,
            $SendSale_PriceMT_6,
            $ReciveTranOut_PcsMT_6,
            $ReciveTranOut_PriceMT_6,
            $ReturnStore_PcsMT_6,
            $ReturnStore_PriceMT_6,
            $AllOut_PcsMT_6,
            $AllOut_PriceMT_6,
            $Calculate_PcsMT_6,
            $Calculate_PriceMT_6,
            $NewCalculate_PcsMT_6,
            $NewCalculate_PriceMT_6,
            $Diff_PcsMT_6,
            $Diff_PriceMT_6,
            $NewTotal_PcsMT_6,
            $NewTotal_PriceMT_6,
            $NewTotalDiff_NavMT_6,
            $NewTotalDiff_CalMT_6,
            $a7f1fgbu02s_PcsMT_6,
            $a7f1fgbu02s_PriceMT_6,
            $a7f2fgbu10s_PcsMT_6,
            $a7f2fgbu10s_PriceMT_6,
            $a7f2thbu05s_PcsMT_6,
            $a7f2thbu05s_PriceMT_6,
            $a7f2debu10s_PcsMT_6,
            $a7f2debu10s_PriceMT_6,
            $a7f2exbu11s_PcsMT_6,
            $a7f2exbu11s_PriceMT_6,
            $a7f2twbu04s_PcsMT_6,
            $a7f2twbu04s_PriceMT_6,
            $a7f2twbu07s_PcsMT_6,
            $a7f2twbu07s_PriceMT_6,
            $a7f2cebu10s_PcsMT_6,
            $a7f2cebu10s_PriceMT_6,
            $a8f1fgbu02s_PcsMT_6,
            $a8f1fgbu02s_PriceMT_6,
            $a8f2fgbu10s_PcsMT_6,
            $a8f2fgbu10s_PriceMT_6,
            $a8f2thbu05s_PcsMT_6,
            $a8f2thbu05s_PriceMT_6,
            $a8f2debu10s_PcsMT_6,
            $a8f2debu10s_PriceMT_6,
            $a8f2exbu11s_PcsMT_6,
            $a8f2exbu11s_PriceMT_6,
            $a8f2twbu04s_PcsMT_6,
            $a8f2twbu04s_PriceMT_6,
            $a8f2twbu07s_PcsMT_6,
            $a8f2twbu07s_PriceMT_6,
            $a8f2cebu10s_PcsMT_6,
            $a8f2cebu10s_PriceMT_6,
            $DC1_PcsMT_6,
            $DC1_PriceMT_6,
            $DCP_PcsMT_6,
            $DCP_PriceMT_6,
            $DCY_PcsMT_6,
            $DCY_PriceMT_6,
            $DEX_PcsMT_6,
            $DEX_PriceMT_6,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterMT_All,
            $Price_AfterMT_All,
            $Pcs_AfterMT_All,
            $Price_AfterMT_All,
            $Po_PcsMT_All,
            $Po_PriceMT_All,
            $Neg_PcsMT_All,
            $Neg_PriceMT_All,
            $BackChange_PcsMT_All,
            $BackChange_PriceMT_All,
            $Purchase_PcsMT_All,
            $Purchase_PriceMT_All,
            $ReciveTranfer_PcsMT_All,
            $ReciveTranfer_PriceMT_All,
            $ReturnItem_PCSMT_All,
            $ReturnItem_PriceMT_All,
            $AllIn_PcsMT_All,
            $AllIn_PriceMT_All,
            $SendSale_PcsMT_All,
            $SendSale_PriceMT_All,
            $ReciveTranOut_PcsMT_All,
            $ReciveTranOut_PriceMT_All,
            $ReturnStore_PcsMT_All,
            $ReturnStore_PriceMT_All,
            $AllOut_PcsMT_All,
            $AllOut_PriceMT_All,
            $Calculate_PcsMT_All,
            $Calculate_PriceMT_All,
            $NewCalculate_PcsMT_All,
            $NewCalculate_PriceMT_All,
            $Diff_PcsMT_All,
            $Diff_PriceMT_All,
            $NewTotal_PcsMT_All,
            $NewTotal_PriceMT_All,
            $NewTotalDiff_NavMT_All,
            $NewTotalDiff_CalMT_All,
            $a7f1fgbu02s_PcsMT_All,
            $a7f1fgbu02s_PriceMT_All,
            $a7f2fgbu10s_PcsMT_All,
            $a7f2fgbu10s_PriceMT_All,
            $a7f2thbu05s_PcsMT_All,
            $a7f2thbu05s_PriceMT_All,
            $a7f2debu10s_PcsMT_All,
            $a7f2debu10s_PriceMT_All,
            $a7f2exbu11s_PcsMT_All,
            $a7f2exbu11s_PriceMT_All,
            $a7f2twbu04s_PcsMT_All,
            $a7f2twbu04s_PriceMT_All,
            $a7f2twbu07s_PcsMT_All,
            $a7f2twbu07s_PriceMT_All,
            $a7f2cebu10s_PcsMT_All,
            $a7f2cebu10s_PriceMT_All,
            $a8f1fgbu02s_PcsMT_All,
            $a8f1fgbu02s_PriceMT_All,
            $a8f2fgbu10s_PcsMT_All,
            $a8f2fgbu10s_PriceMT_All,
            $a8f2thbu05s_PcsMT_All,
            $a8f2thbu05s_PriceMT_All,
            $a8f2debu10s_PcsMT_All,
            $a8f2debu10s_PriceMT_All,
            $a8f2exbu11s_PcsMT_All,
            $a8f2exbu11s_PriceMT_All,
            $a8f2twbu04s_PcsMT_All,
            $a8f2twbu04s_PriceMT_All,
            $a8f2twbu07s_PcsMT_All,
            $a8f2twbu07s_PriceMT_All,
            $a8f2cebu10s_PcsMT_All,
            $a8f2cebu10s_PriceMT_All,
            $DC1_PcsMT_All,
            $DC1_PriceMT_All,
            $DCP_PcsMT_All,
            $DCP_PriceMT_All,
            $DCY_PcsMT_All,
            $DCY_PriceMT_All,
            $DEX_PcsMT_All,
            $DEX_PriceMT_All,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterTW_1,
            $Price_AfterTW_1,
            $Pcs_AfterTW_1,
            $Price_AfterTW_1,
            $Po_PcsTW_1,
            $Po_PriceTW_1,
            $Neg_PcsTW_1,
            $Neg_PriceTW_1,
            $BackChange_PcsTW_1,
            $BackChange_PriceTW_1,
            $Purchase_PcsTW_1,
            $Purchase_PriceTW_1,
            $ReciveTranfer_PcsTW_1,
            $ReciveTranfer_PriceTW_1,
            $ReturnItem_PCSTW_1,
            $ReturnItem_PriceTW_1,
            $AllIn_PcsTW_1,
            $AllIn_PriceTW_1,
            $SendSale_PcsTW_1,
            $SendSale_PriceTW_1,
            $ReciveTranOut_PcsTW_1,
            $ReciveTranOut_PriceTW_1,
            $ReturnStore_PcsTW_1,
            $ReturnStore_PriceTW_1,
            $AllOut_PcsTW_1,
            $AllOut_PriceTW_1,
            $Calculate_PcsTW_1,
            $Calculate_PriceTW_1,
            $NewCalculate_PcsTW_1,
            $NewCalculate_PriceTW_1,
            $Diff_PcsTW_1,
            $Diff_PriceTW_1,
            $NewTotal_PcsTW_1,
            $NewTotal_PriceTW_1,
            $NewTotalDiff_NavTW_1,
            $NewTotalDiff_CalTW_1,
            $a7f1fgbu02s_PcsTW_1,
            $a7f1fgbu02s_PriceTW_1,
            $a7f2fgbu10s_PcsTW_1,
            $a7f2fgbu10s_PriceTW_1,
            $a7f2thbu05s_PcsTW_1,
            $a7f2thbu05s_PriceTW_1,
            $a7f2debu10s_PcsTW_1,
            $a7f2debu10s_PriceTW_1,
            $a7f2exbu11s_PcsTW_1,
            $a7f2exbu11s_PriceTW_1,
            $a7f2twbu04s_PcsTW_1,
            $a7f2twbu04s_PriceTW_1,
            $a7f2twbu07s_PcsTW_1,
            $a7f2twbu07s_PriceTW_1,
            $a7f2cebu10s_PcsTW_1,
            $a7f2cebu10s_PriceTW_1,
            $a8f1fgbu02s_PcsTW_1,
            $a8f1fgbu02s_PriceTW_1,
            $a8f2fgbu10s_PcsTW_1,
            $a8f2fgbu10s_PriceTW_1,
            $a8f2thbu05s_PcsTW_1,
            $a8f2thbu05s_PriceTW_1,
            $a8f2debu10s_PcsTW_1,
            $a8f2debu10s_PriceTW_1,
            $a8f2exbu11s_PcsTW_1,
            $a8f2exbu11s_PriceTW_1,
            $a8f2twbu04s_PcsTW_1,
            $a8f2twbu04s_PriceTW_1,
            $a8f2twbu07s_PcsTW_1,
            $a8f2twbu07s_PriceTW_1,
            $a8f2cebu10s_PcsTW_1,
            $a8f2cebu10s_PriceTW_1,
            $DC1_PcsTW_1,
            $DC1_PriceTW_1,
            $DCP_PcsTW_1,
            $DCP_PriceTW_1,
            $DCY_PcsTW_1,
            $DCY_PriceTW_1,
            $DEX_PcsTW_1,
            $DEX_PriceTW_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterTW_2,
            $Price_AfterTW_2,
            $Pcs_AfterTW_2,
            $Price_AfterTW_2,
            $Po_PcsTW_2,
            $Po_PriceTW_2,
            $Neg_PcsTW_2,
            $Neg_PriceTW_2,
            $BackChange_PcsTW_2,
            $BackChange_PriceTW_2,
            $Purchase_PcsTW_2,
            $Purchase_PriceTW_2,
            $ReciveTranfer_PcsTW_2,
            $ReciveTranfer_PriceTW_2,
            $ReturnItem_PCSTW_2,
            $ReturnItem_PriceTW_2,
            $AllIn_PcsTW_2,
            $AllIn_PriceTW_2,
            $SendSale_PcsTW_2,
            $SendSale_PriceTW_2,
            $ReciveTranOut_PcsTW_2,
            $ReciveTranOut_PriceTW_2,
            $ReturnStore_PcsTW_2,
            $ReturnStore_PriceTW_2,
            $AllOut_PcsTW_2,
            $AllOut_PriceTW_2,
            $Calculate_PcsTW_2,
            $Calculate_PriceTW_2,
            $NewCalculate_PcsTW_2,
            $NewCalculate_PriceTW_2,
            $Diff_PcsTW_2,
            $Diff_PriceTW_2,
            $NewTotal_PcsTW_2,
            $NewTotal_PriceTW_2,
            $NewTotalDiff_NavTW_2,
            $NewTotalDiff_CalTW_2,
            $a7f1fgbu02s_PcsTW_2,
            $a7f1fgbu02s_PriceTW_2,
            $a7f2fgbu10s_PcsTW_2,
            $a7f2fgbu10s_PriceTW_2,
            $a7f2thbu05s_PcsTW_2,
            $a7f2thbu05s_PriceTW_2,
            $a7f2debu10s_PcsTW_2,
            $a7f2debu10s_PriceTW_2,
            $a7f2exbu11s_PcsTW_2,
            $a7f2exbu11s_PriceTW_2,
            $a7f2twbu04s_PcsTW_2,
            $a7f2twbu04s_PriceTW_2,
            $a7f2twbu07s_PcsTW_2,
            $a7f2twbu07s_PriceTW_2,
            $a7f2cebu10s_PcsTW_2,
            $a7f2cebu10s_PriceTW_2,
            $a8f1fgbu02s_PcsTW_2,
            $a8f1fgbu02s_PriceTW_2,
            $a8f2fgbu10s_PcsTW_2,
            $a8f2fgbu10s_PriceTW_2,
            $a8f2thbu05s_PcsTW_2,
            $a8f2thbu05s_PriceTW_2,
            $a8f2debu10s_PcsTW_2,
            $a8f2debu10s_PriceTW_2,
            $a8f2exbu11s_PcsTW_2,
            $a8f2exbu11s_PriceTW_2,
            $a8f2twbu04s_PcsTW_2,
            $a8f2twbu04s_PriceTW_2,
            $a8f2twbu07s_PcsTW_2,
            $a8f2twbu07s_PriceTW_2,
            $a8f2cebu10s_PcsTW_2,
            $a8f2cebu10s_PriceTW_2,
            $DC1_PcsTW_2,
            $DC1_PriceTW_2,
            $DCP_PcsTW_2,
            $DCP_PriceTW_2,
            $DCY_PcsTW_2,
            $DCY_PriceTW_2,
            $DEX_PcsTW_2,
            $DEX_PriceTW_2,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterSTW_1,
            $Price_AfterSTW_1,
            $Pcs_AfterSTW_1,
            $Price_AfterSTW_1,
            $Po_PcsSTW_1,
            $Po_PriceSTW_1,
            $Neg_PcsSTW_1,
            $Neg_PriceSTW_1,
            $BackChange_PcsSTW_1,
            $BackChange_PriceSTW_1,
            $Purchase_PcsSTW_1,
            $Purchase_PriceSTW_1,
            $ReciveTranfer_PcsSTW_1,
            $ReciveTranfer_PriceSTW_1,
            $ReturnItem_PCSSTW_1,
            $ReturnItem_PriceSTW_1,
            $AllIn_PcsSTW_1,
            $AllIn_PriceSTW_1,
            $SendSale_PcsSTW_1,
            $SendSale_PriceSTW_1,
            $ReciveTranOut_PcsSTW_1,
            $ReciveTranOut_PriceSTW_1,
            $ReturnStore_PcsSTW_1,
            $ReturnStore_PriceSTW_1,
            $AllOut_PcsSTW_1,
            $AllOut_PriceSTW_1,
            $Calculate_PcsSTW_1,
            $Calculate_PriceSTW_1,
            $NewCalculate_PcsSTW_1,
            $NewCalculate_PriceSTW_1,
            $Diff_PcsSTW_1,
            $Diff_PriceSTW_1,
            $NewTotal_PcsSTW_1,
            $NewTotal_PriceSTW_1,
            $NewTotalDiff_NavSTW_1,
            $NewTotalDiff_CalSTW_1,
            $a7f1fgbu02s_PcsSTW_1,
            $a7f1fgbu02s_PriceSTW_1,
            $a7f2fgbu10s_PcsSTW_1,
            $a7f2fgbu10s_PriceSTW_1,
            $a7f2thbu05s_PcsSTW_1,
            $a7f2thbu05s_PriceSTW_1,
            $a7f2debu10s_PcsSTW_1,
            $a7f2debu10s_PriceSTW_1,
            $a7f2exbu11s_PcsSTW_1,
            $a7f2exbu11s_PriceSTW_1,
            $a7f2twbu04s_PcsSTW_1,
            $a7f2twbu04s_PriceSTW_1,
            $a7f2twbu07s_PcsSTW_1,
            $a7f2twbu07s_PriceSTW_1,
            $a7f2cebu10s_PcsSTW_1,
            $a7f2cebu10s_PriceSTW_1,
            $a8f1fgbu02s_PcsSTW_1,
            $a8f1fgbu02s_PriceSTW_1,
            $a8f2fgbu10s_PcsSTW_1,
            $a8f2fgbu10s_PriceSTW_1,
            $a8f2thbu05s_PcsSTW_1,
            $a8f2thbu05s_PriceSTW_1,
            $a8f2debu10s_PcsSTW_1,
            $a8f2debu10s_PriceSTW_1,
            $a8f2exbu11s_PcsSTW_1,
            $a8f2exbu11s_PriceSTW_1,
            $a8f2twbu04s_PcsSTW_1,
            $a8f2twbu04s_PriceSTW_1,
            $a8f2twbu07s_PcsSTW_1,
            $a8f2twbu07s_PriceSTW_1,
            $a8f2cebu10s_PcsSTW_1,
            $a8f2cebu10s_PriceSTW_1,
            $DC1_PcsSTW_1,
            $DC1_PriceSTW_1,
            $DCP_PcsSTW_1,
            $DCP_PriceSTW_1,
            $DCY_PcsSTW_1,
            $DCY_PriceSTW_1,
            $DEX_PcsSTW_1,
            $DEX_PriceSTW_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterSTW_2,
            $Price_AfterSTW_2,
            $Pcs_AfterSTW_2,
            $Price_AfterSTW_2,
            $Po_PcsSTW_2,
            $Po_PriceSTW_2,
            $Neg_PcsSTW_2,
            $Neg_PriceSTW_2,
            $BackChange_PcsSTW_2,
            $BackChange_PriceSTW_2,
            $Purchase_PcsSTW_2,
            $Purchase_PriceSTW_2,
            $ReciveTranfer_PcsSTW_2,
            $ReciveTranfer_PriceSTW_2,
            $ReturnItem_PCSSTW_2,
            $ReturnItem_PriceSTW_2,
            $AllIn_PcsSTW_2,
            $AllIn_PriceSTW_2,
            $SendSale_PcsSTW_2,
            $SendSale_PriceSTW_2,
            $ReciveTranOut_PcsSTW_2,
            $ReciveTranOut_PriceSTW_2,
            $ReturnStore_PcsSTW_2,
            $ReturnStore_PriceSTW_2,
            $AllOut_PcsSTW_2,
            $AllOut_PriceSTW_2,
            $Calculate_PcsSTW_2,
            $Calculate_PriceSTW_2,
            $NewCalculate_PcsSTW_2,
            $NewCalculate_PriceSTW_2,
            $Diff_PcsSTW_2,
            $Diff_PriceSTW_2,
            $NewTotal_PcsSTW_2,
            $NewTotal_PriceSTW_2,
            $NewTotalDiff_NavSTW_2,
            $NewTotalDiff_CalSTW_2,
            $a7f1fgbu02s_PcsSTW_2,
            $a7f1fgbu02s_PriceSTW_2,
            $a7f2fgbu10s_PcsSTW_2,
            $a7f2fgbu10s_PriceSTW_2,
            $a7f2thbu05s_PcsSTW_2,
            $a7f2thbu05s_PriceSTW_2,
            $a7f2debu10s_PcsSTW_2,
            $a7f2debu10s_PriceSTW_2,
            $a7f2exbu11s_PcsSTW_2,
            $a7f2exbu11s_PriceSTW_2,
            $a7f2twbu04s_PcsSTW_2,
            $a7f2twbu04s_PriceSTW_2,
            $a7f2twbu07s_PcsSTW_2,
            $a7f2twbu07s_PriceSTW_2,
            $a7f2cebu10s_PcsSTW_2,
            $a7f2cebu10s_PriceSTW_2,
            $a8f1fgbu02s_PcsSTW_2,
            $a8f1fgbu02s_PriceSTW_2,
            $a8f2fgbu10s_PcsSTW_2,
            $a8f2fgbu10s_PriceSTW_2,
            $a8f2thbu05s_PcsSTW_2,
            $a8f2thbu05s_PriceSTW_2,
            $a8f2debu10s_PcsSTW_2,
            $a8f2debu10s_PriceSTW_2,
            $a8f2exbu11s_PcsSTW_2,
            $a8f2exbu11s_PriceSTW_2,
            $a8f2twbu04s_PcsSTW_2,
            $a8f2twbu04s_PriceSTW_2,
            $a8f2twbu07s_PcsSTW_2,
            $a8f2twbu07s_PriceSTW_2,
            $a8f2cebu10s_PcsSTW_2,
            $a8f2cebu10s_PriceSTW_2,
            $DC1_PcsSTW_2,
            $DC1_PriceSTW_2,
            $DCP_PcsSTW_2,
            $DCP_PriceSTW_2,
            $DCY_PcsSTW_2,
            $DCY_PriceSTW_2,
            $DEX_PcsSTW_2,
            $DEX_PriceSTW_2,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterLN_1,
            $Price_AfterLN_1,
            $Pcs_AfterLN_1,
            $Price_AfterLN_1,
            $Po_PcsLN_1,
            $Po_PriceLN_1,
            $Neg_PcsLN_1,
            $Neg_PriceLN_1,
            $BackChange_PcsLN_1,
            $BackChange_PriceLN_1,
            $Purchase_PcsLN_1,
            $Purchase_PriceLN_1,
            $ReciveTranfer_PcsLN_1,
            $ReciveTranfer_PriceLN_1,
            $ReturnItem_PCSLN_1,
            $ReturnItem_PriceLN_1,
            $AllIn_PcsLN_1,
            $AllIn_PriceLN_1,
            $SendSale_PcsLN_1,
            $SendSale_PriceLN_1,
            $ReciveTranOut_PcsLN_1,
            $ReciveTranOut_PriceLN_1,
            $ReturnStore_PcsLN_1,
            $ReturnStore_PriceLN_1,
            $AllOut_PcsLN_1,
            $AllOut_PriceLN_1,
            $Calculate_PcsLN_1,
            $Calculate_PriceLN_1,
            $NewCalculate_PcsLN_1,
            $NewCalculate_PriceLN_1,
            $Diff_PcsLN_1,
            $Diff_PriceLN_1,
            $NewTotal_PcsLN_1,
            $NewTotal_PriceLN_1,
            $NewTotalDiff_NavLN_1,
            $NewTotalDiff_CalLN_1,
            $a7f1fgbu02s_PcsLN_1,
            $a7f1fgbu02s_PriceLN_1,
            $a7f2fgbu10s_PcsLN_1,
            $a7f2fgbu10s_PriceLN_1,
            $a7f2thbu05s_PcsLN_1,
            $a7f2thbu05s_PriceLN_1,
            $a7f2debu10s_PcsLN_1,
            $a7f2debu10s_PriceLN_1,
            $a7f2exbu11s_PcsLN_1,
            $a7f2exbu11s_PriceLN_1,
            $a7f2twbu04s_PcsLN_1,
            $a7f2twbu04s_PriceLN_1,
            $a7f2twbu07s_PcsLN_1,
            $a7f2twbu07s_PriceLN_1,
            $a7f2cebu10s_PcsLN_1,
            $a7f2cebu10s_PriceLN_1,
            $a8f1fgbu02s_PcsLN_1,
            $a8f1fgbu02s_PriceLN_1,
            $a8f2fgbu10s_PcsLN_1,
            $a8f2fgbu10s_PriceLN_1,
            $a8f2thbu05s_PcsLN_1,
            $a8f2thbu05s_PriceLN_1,
            $a8f2debu10s_PcsLN_1,
            $a8f2debu10s_PriceLN_1,
            $a8f2exbu11s_PcsLN_1,
            $a8f2exbu11s_PriceLN_1,
            $a8f2twbu04s_PcsLN_1,
            $a8f2twbu04s_PriceLN_1,
            $a8f2twbu07s_PcsLN_1,
            $a8f2twbu07s_PriceLN_1,
            $a8f2cebu10s_PcsLN_1,
            $a8f2cebu10s_PriceLN_1,
            $DC1_PcsLN_1,
            $DC1_PriceLN_1,
            $DCP_PcsLN_1,
            $DCP_PriceLN_1,
            $DCY_PcsLN_1,
            $DCY_PriceLN_1,
            $DEX_PcsLN_1,
            $DEX_PriceLN_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterSLN_1,
            $Price_AfterSLN_1,
            $Pcs_AfterSLN_1,
            $Price_AfterSLN_1,
            $Po_PcsSLN_1,
            $Po_PriceSLN_1,
            $Neg_PcsSLN_1,
            $Neg_PriceSLN_1,
            $BackChange_PcsSLN_1,
            $BackChange_PriceSLN_1,
            $Purchase_PcsSLN_1,
            $Purchase_PriceSLN_1,
            $ReciveTranfer_PcsSLN_1,
            $ReciveTranfer_PriceSLN_1,
            $ReturnItem_PCSSLN_1,
            $ReturnItem_PriceSLN_1,
            $AllIn_PcsSLN_1,
            $AllIn_PriceSLN_1,
            $SendSale_PcsSLN_1,
            $SendSale_PriceSLN_1,
            $ReciveTranOut_PcsSLN_1,
            $ReciveTranOut_PriceSLN_1,
            $ReturnStore_PcsSLN_1,
            $ReturnStore_PriceSLN_1,
            $AllOut_PcsSLN_1,
            $AllOut_PriceSLN_1,
            $Calculate_PcsSLN_1,
            $Calculate_PriceSLN_1,
            $NewCalculate_PcsSLN_1,
            $NewCalculate_PriceSLN_1,
            $Diff_PcsSLN_1,
            $Diff_PriceSLN_1,
            $NewTotal_PcsSLN_1,
            $NewTotal_PriceSLN_1,
            $NewTotalDiff_NavSLN_1,
            $NewTotalDiff_CalSLN_1,
            $a7f1fgbu02s_PcsSLN_1,
            $a7f1fgbu02s_PriceSLN_1,
            $a7f2fgbu10s_PcsSLN_1,
            $a7f2fgbu10s_PriceSLN_1,
            $a7f2thbu05s_PcsSLN_1,
            $a7f2thbu05s_PriceSLN_1,
            $a7f2debu10s_PcsSLN_1,
            $a7f2debu10s_PriceSLN_1,
            $a7f2exbu11s_PcsSLN_1,
            $a7f2exbu11s_PriceSLN_1,
            $a7f2twbu04s_PcsSLN_1,
            $a7f2twbu04s_PriceSLN_1,
            $a7f2twbu07s_PcsSLN_1,
            $a7f2twbu07s_PriceSLN_1,
            $a7f2cebu10s_PcsSLN_1,
            $a7f2cebu10s_PriceSLN_1,
            $a8f1fgbu02s_PcsSLN_1,
            $a8f1fgbu02s_PriceSLN_1,
            $a8f2fgbu10s_PcsSLN_1,
            $a8f2fgbu10s_PriceSLN_1,
            $a8f2thbu05s_PcsSLN_1,
            $a8f2thbu05s_PriceSLN_1,
            $a8f2debu10s_PcsSLN_1,
            $a8f2debu10s_PriceSLN_1,
            $a8f2exbu11s_PcsSLN_1,
            $a8f2exbu11s_PriceSLN_1,
            $a8f2twbu04s_PcsSLN_1,
            $a8f2twbu04s_PriceSLN_1,
            $a8f2twbu07s_PcsSLN_1,
            $a8f2twbu07s_PriceSLN_1,
            $a8f2cebu10s_PcsSLN_1,
            $a8f2cebu10s_PriceSLN_1,
            $DC1_PcsSLN_1,
            $DC1_PriceSLN_1,
            $DCP_PcsSLN_1,
            $DCP_PriceSLN_1,
            $DCY_PcsSLN_1,
            $DCY_PriceSLN_1,
            $DEX_PcsSLN_1,
            $DEX_PriceSLN_1,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////

            $Pcs_AfterTW_All,
            $Price_AfterTW_All,
            $Pcs_AfterTW_All,
            $Price_AfterTW_All,
            $Po_PcsTW_All,
            $Po_PriceTW_All,
            $Neg_PcsTW_All,
            $Neg_PriceTW_All,
            $BackChange_PcsTW_All,
            $BackChange_PriceTW_All,
            $Purchase_PcsTW_All,
            $Purchase_PriceTW_All,
            $ReciveTranfer_PcsTW_All,
            $ReciveTranfer_PriceTW_All,
            $ReturnItem_PCSTW_All,
            $ReturnItem_PriceTW_All,
            $AllIn_PcsTW_All,
            $AllIn_PriceTW_All,
            $SendSale_PcsTW_All,
            $SendSale_PriceTW_All,
            $ReciveTranOut_PcsTW_All,
            $ReciveTranOut_PriceTW_All,
            $ReturnStore_PcsTW_All,
            $ReturnStore_PriceTW_All,
            $AllOut_PcsTW_All,
            $AllOut_PriceTW_All,
            $Calculate_PcsTW_All,
            $Calculate_PriceTW_All,
            $NewCalculate_PcsTW_All,
            $NewCalculate_PriceTW_All,
            $Diff_PcsTW_All,
            $Diff_PriceTW_All,
            $NewTotal_PcsTW_All,
            $NewTotal_PriceTW_All,
            $NewTotalDiff_NavTW_All,
            $NewTotalDiff_CalTW_All,
            $a7f1fgbu02s_PcsTW_All,
            $a7f1fgbu02s_PriceTW_All,
            $a7f2fgbu10s_PcsTW_All,
            $a7f2fgbu10s_PriceTW_All,
            $a7f2thbu05s_PcsTW_All,
            $a7f2thbu05s_PriceTW_All,
            $a7f2debu10s_PcsTW_All,
            $a7f2debu10s_PriceTW_All,
            $a7f2exbu11s_PcsTW_All,
            $a7f2exbu11s_PriceTW_All,
            $a7f2twbu04s_PcsTW_All,
            $a7f2twbu04s_PriceTW_All,
            $a7f2twbu07s_PcsTW_All,
            $a7f2twbu07s_PriceTW_All,
            $a7f2cebu10s_PcsTW_All,
            $a7f2cebu10s_PriceTW_All,
            $a8f1fgbu02s_PcsTW_All,
            $a8f1fgbu02s_PriceTW_All,
            $a8f2fgbu10s_PcsTW_All,
            $a8f2fgbu10s_PriceTW_All,
            $a8f2thbu05s_PcsTW_All,
            $a8f2thbu05s_PriceTW_All,
            $a8f2debu10s_PcsTW_All,
            $a8f2debu10s_PriceTW_All,
            $a8f2exbu11s_PcsTW_All,
            $a8f2exbu11s_PriceTW_All,
            $a8f2twbu04s_PcsTW_All,
            $a8f2twbu04s_PriceTW_All,
            $a8f2twbu07s_PcsTW_All,
            $a8f2twbu07s_PriceTW_All,
            $a8f2cebu10s_PcsTW_All,
            $a8f2cebu10s_PriceTW_All,
            $DC1_PcsTW_All,
            $DC1_PriceTW_All,
            $DCP_PcsTW_All,
            $DCP_PriceTW_All,
            $DCY_PcsTW_All,
            $DCY_PriceTW_All,
            $DEX_PcsTW_All,
            $DEX_PriceTW_All,

            /////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////
        ];

        return response()->json($Data);
    }
}
