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
            ->where('dataother.Category', '=', 'อวนกำโมโน')
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

        foreach ($ItemNoNT_1 as $NT_1) {
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
        ];

        return response()->json($Data);
    }
}
