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
				'dataother.Customer',
                'dataother.Customer_DC1',
                'dataother.Customer_DCP',
                'dataother.Customer_DCY',
                'dataother.Customer_DEX',
                'item_all.Unit Cost Decha as PriceAvg',
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

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterNTDCP = 0;
        $Price_AfterNTDCP = 0;
        $Po_PcsNTDCP = 0;
        $Po_PriceNTDCP = 0;
        $Neg_PcsNTDCP = 0;
        $Neg_PriceNTDCP = 0;
        $Purchase_PcsNTDCP = 0;
        $Purchase_PriceNTDCP = 0;
        $BackChange_PcsNTDCP = 0;
        $BackChange_PriceNTDCP = 0;
        $ReciveTranfer_PcsNTDCP = 0;
        $ReciveTranfer_PriceNTDCP = 0;
        $ReturnItem_PCSNTDCP = 0;
        $ReturnItem_PriceNTDCP = 0;
        $AllIn_PcsNTDCP = 0;
        $AllIn_PriceNTDCP = 0;
        $SendSale_PcsNTDCP = 0;
        $SendSale_PriceNTDCP = 0;
        $ReciveTranOut_PcsNTDCP = 0;
        $ReciveTranOut_PriceNTDCP = 0;
        $ReturnStore_PcsNTDCP = 0;
        $ReturnStore_PriceNTDCP = 0;
        $AllOut_PcsNTDCP = 0;
        $AllOut_PriceNTDCP = 0;
        $Calculate_PcsNTDCP = 0;
        $Calculate_PriceNTDCP = 0;
        $NewCalculate_PcsNTDCP = 0;
        $NewCalculate_PriceNTDCP = 0;
        $Diff_PcsNTDCP = 0;
        $Diff_PriceNTDCP = 0;
        $NewTotal_PcsNTDCP = 0;
        $NewTotal_PriceNTDCP = 0;
        $NewTotalDiff_NavNTDCP = 0;
        $NewTotalDiff_CalNTDCP = 0;
        $a7f1fgbu02s_PcsNTDCP = 0;
        $a7f1fgbu02s_PriceNTDCP = 0;
        $a7f2fgbu10s_PcsNTDCP = 0;
        $a7f2fgbu10s_PriceNTDCP = 0;
        $a7f2thbu05s_PcsNTDCP = 0;
        $a7f2thbu05s_PriceNTDCP = 0;
        $a7f2debu10s_PcsNTDCP = 0;
        $a7f2debu10s_PriceNTDCP = 0;
        $a7f2exbu11s_PcsNTDCP = 0;
        $a7f2exbu11s_PriceNTDCP = 0;
        $a7f2twbu04s_PcsNTDCP = 0;
        $a7f2twbu04s_PriceNTDCP = 0;
        $a7f2twbu07s_PcsNTDCP = 0;
        $a7f2twbu07s_PriceNTDCP = 0;
        $a7f2cebu10s_PcsNTDCP = 0;
        $a7f2cebu10s_PriceNTDCP = 0;
        $a8f1fgbu02s_PcsNTDCP = 0;
        $a8f1fgbu02s_PriceNTDCP = 0;
        $a8f2fgbu10s_PcsNTDCP = 0;
        $a8f2fgbu10s_PriceNTDCP = 0;
        $a8f2thbu05s_PcsNTDCP = 0;
        $a8f2thbu05s_PriceNTDCP = 0;
        $a8f2debu10s_PcsNTDCP = 0;
        $a8f2debu10s_PriceNTDCP = 0;
        $a8f2exbu11s_PcsNTDCP = 0;
        $a8f2exbu11s_PriceNTDCP = 0;
        $a8f2twbu04s_PcsNTDCP = 0;
        $a8f2twbu04s_PriceNTDCP = 0;
        $a8f2twbu07s_PcsNTDCP = 0;
        $a8f2twbu07s_PriceNTDCP = 0;
        $a8f2cebu10s_PcsNTDCP = 0;
        $a8f2cebu10s_PriceNTDCP = 0;
        $DC1_PcsNTDCP = 0;
        $DC1_PriceNTDCP = 0;
        $DCP_PcsNTDCP = 0;
        $DCP_PriceNTDCP = 0;
        $DCY_PcsNTDCP = 0;
        $DCY_PriceNTDCP = 0;
        $DEX_PcsNTDCP = 0;
        $DEX_PriceNTDCP = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterTWDCP = 0;
        $Price_AfterTWDCP = 0;
        $Po_PcsTWDCP = 0;
        $Po_PriceTWDCP = 0;
        $Neg_PcsTWDCP = 0;
        $Neg_PriceTWDCP = 0;
        $Purchase_PcsTWDCP = 0;
        $Purchase_PriceTWDCP = 0;
        $BackChange_PcsTWDCP = 0;
        $BackChange_PriceTWDCP = 0;
        $ReciveTranfer_PcsTWDCP = 0;
        $ReciveTranfer_PriceTWDCP = 0;
        $ReturnItem_PCSTWDCP = 0;
        $ReturnItem_PriceTWDCP = 0;
        $AllIn_PcsTWDCP = 0;
        $AllIn_PriceTWDCP = 0;
        $SendSale_PcsTWDCP = 0;
        $SendSale_PriceTWDCP = 0;
        $ReciveTranOut_PcsTWDCP = 0;
        $ReciveTranOut_PriceTWDCP = 0;
        $ReturnStore_PcsTWDCP = 0;
        $ReturnStore_PriceTWDCP = 0;
        $AllOut_PcsTWDCP = 0;
        $AllOut_PriceTWDCP = 0;
        $Calculate_PcsTWDCP = 0;
        $Calculate_PriceTWDCP = 0;
        $NewCalculate_PcsTWDCP = 0;
        $NewCalculate_PriceTWDCP = 0;
        $Diff_PcsTWDCP = 0;
        $Diff_PriceTWDCP = 0;
        $NewTotal_PcsTWDCP = 0;
        $NewTotal_PriceTWDCP = 0;
        $NewTotalDiff_NavTWDCP = 0;
        $NewTotalDiff_CalTWDCP = 0;
        $a7f1fgbu02s_PcsTWDCP = 0;
        $a7f1fgbu02s_PriceTWDCP = 0;
        $a7f2fgbu10s_PcsTWDCP = 0;
        $a7f2fgbu10s_PriceTWDCP = 0;
        $a7f2thbu05s_PcsTWDCP = 0;
        $a7f2thbu05s_PriceTWDCP = 0;
        $a7f2debu10s_PcsTWDCP = 0;
        $a7f2debu10s_PriceTWDCP = 0;
        $a7f2exbu11s_PcsTWDCP = 0;
        $a7f2exbu11s_PriceTWDCP = 0;
        $a7f2twbu04s_PcsTWDCP = 0;
        $a7f2twbu04s_PriceTWDCP = 0;
        $a7f2twbu07s_PcsTWDCP = 0;
        $a7f2twbu07s_PriceTWDCP = 0;
        $a7f2cebu10s_PcsTWDCP = 0;
        $a7f2cebu10s_PriceTWDCP = 0;
        $a8f1fgbu02s_PcsTWDCP = 0;
        $a8f1fgbu02s_PriceTWDCP = 0;
        $a8f2fgbu10s_PcsTWDCP = 0;
        $a8f2fgbu10s_PriceTWDCP = 0;
        $a8f2thbu05s_PcsTWDCP = 0;
        $a8f2thbu05s_PriceTWDCP = 0;
        $a8f2debu10s_PcsTWDCP = 0;
        $a8f2debu10s_PriceTWDCP = 0;
        $a8f2exbu11s_PcsTWDCP = 0;
        $a8f2exbu11s_PriceTWDCP = 0;
        $a8f2twbu04s_PcsTWDCP = 0;
        $a8f2twbu04s_PriceTWDCP = 0;
        $a8f2twbu07s_PcsTWDCP = 0;
        $a8f2twbu07s_PriceTWDCP = 0;
        $a8f2cebu10s_PcsTWDCP = 0;
        $a8f2cebu10s_PriceTWDCP = 0;
        $DC1_PcsTWDCP = 0;
        $DC1_PriceTWDCP = 0;
        $DCP_PcsTWDCP = 0;
        $DCP_PriceTWDCP = 0;
        $DCY_PcsTWDCP = 0;
        $DCY_PriceTWDCP = 0;
        $DEX_PcsTWDCP = 0;
        $DEX_PriceTWDCP = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterLNDCP = 0;
        $Price_AfterLNDCP = 0;
        $Po_PcsLNDCP = 0;
        $Po_PriceLNDCP = 0;
        $Neg_PcsLNDCP = 0;
        $Neg_PriceLNDCP = 0;
        $Purchase_PcsLNDCP = 0;
        $Purchase_PriceLNDCP = 0;
        $BackChange_PcsLNDCP = 0;
        $BackChange_PriceLNDCP = 0;
        $ReciveTranfer_PcsLNDCP = 0;
        $ReciveTranfer_PriceLNDCP = 0;
        $ReturnItem_PCSLNDCP = 0;
        $ReturnItem_PriceLNDCP = 0;
        $AllIn_PcsLNDCP = 0;
        $AllIn_PriceLNDCP = 0;
        $SendSale_PcsLNDCP = 0;
        $SendSale_PriceLNDCP = 0;
        $ReciveTranOut_PcsLNDCP = 0;
        $ReciveTranOut_PriceLNDCP = 0;
        $ReturnStore_PcsLNDCP = 0;
        $ReturnStore_PriceLNDCP = 0;
        $AllOut_PcsLNDCP = 0;
        $AllOut_PriceLNDCP = 0;
        $Calculate_PcsLNDCP = 0;
        $Calculate_PriceLNDCP = 0;
        $NewCalculate_PcsLNDCP = 0;
        $NewCalculate_PriceLNDCP = 0;
        $Diff_PcsLNDCP = 0;
        $Diff_PriceLNDCP = 0;
        $NewTotal_PcsLNDCP = 0;
        $NewTotal_PriceLNDCP = 0;
        $NewTotalDiff_NavLNDCP = 0;
        $NewTotalDiff_CalLNDCP = 0;
        $a7f1fgbu02s_PcsLNDCP = 0;
        $a7f1fgbu02s_PriceLNDCP = 0;
        $a7f2fgbu10s_PcsLNDCP = 0;
        $a7f2fgbu10s_PriceLNDCP = 0;
        $a7f2thbu05s_PcsLNDCP = 0;
        $a7f2thbu05s_PriceLNDCP = 0;
        $a7f2debu10s_PcsLNDCP = 0;
        $a7f2debu10s_PriceLNDCP = 0;
        $a7f2exbu11s_PcsLNDCP = 0;
        $a7f2exbu11s_PriceLNDCP = 0;
        $a7f2twbu04s_PcsLNDCP = 0;
        $a7f2twbu04s_PriceLNDCP = 0;
        $a7f2twbu07s_PcsLNDCP = 0;
        $a7f2twbu07s_PriceLNDCP = 0;
        $a7f2cebu10s_PcsLNDCP = 0;
        $a7f2cebu10s_PriceLNDCP = 0;
        $a8f1fgbu02s_PcsLNDCP = 0;
        $a8f1fgbu02s_PriceLNDCP = 0;
        $a8f2fgbu10s_PcsLNDCP = 0;
        $a8f2fgbu10s_PriceLNDCP = 0;
        $a8f2thbu05s_PcsLNDCP = 0;
        $a8f2thbu05s_PriceLNDCP = 0;
        $a8f2debu10s_PcsLNDCP = 0;
        $a8f2debu10s_PriceLNDCP = 0;
        $a8f2exbu11s_PcsLNDCP = 0;
        $a8f2exbu11s_PriceLNDCP = 0;
        $a8f2twbu04s_PcsLNDCP = 0;
        $a8f2twbu04s_PriceLNDCP = 0;
        $a8f2twbu07s_PcsLNDCP = 0;
        $a8f2twbu07s_PriceLNDCP = 0;
        $a8f2cebu10s_PcsLNDCP = 0;
        $a8f2cebu10s_PriceLNDCP = 0;
        $DC1_PcsLNDCP = 0;
        $DC1_PriceLNDCP = 0;
        $DCP_PcsLNDCP = 0;
        $DCP_PriceLNDCP = 0;
        $DCY_PcsLNDCP = 0;
        $DCY_PriceLNDCP = 0;
        $DEX_PcsLNDCP = 0;
        $DEX_PriceLNDCP = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterNTCountry = 0;
        $Price_AfterNTCountry = 0;
        $Po_PcsNTCountry = 0;
        $Po_PriceNTCountry = 0;
        $Neg_PcsNTCountry = 0;
        $Neg_PriceNTCountry = 0;
        $Purchase_PcsNTCountry = 0;
        $Purchase_PriceNTCountry = 0;
        $BackChange_PcsNTCountry = 0;
        $BackChange_PriceNTCountry = 0;
        $ReciveTranfer_PcsNTCountry = 0;
        $ReciveTranfer_PriceNTCountry = 0;
        $ReturnItem_PCSNTCountry = 0;
        $ReturnItem_PriceNTCountry = 0;
        $AllIn_PcsNTCountry = 0;
        $AllIn_PriceNTCountry = 0;
        $SendSale_PcsNTCountry = 0;
        $SendSale_PriceNTCountry = 0;
        $ReciveTranOut_PcsNTCountry = 0;
        $ReciveTranOut_PriceNTCountry = 0;
        $ReturnStore_PcsNTCountry = 0;
        $ReturnStore_PriceNTCountry = 0;
        $AllOut_PcsNTCountry = 0;
        $AllOut_PriceNTCountry = 0;
        $Calculate_PcsNTCountry = 0;
        $Calculate_PriceNTCountry = 0;
        $NewCalculate_PcsNTCountry = 0;
        $NewCalculate_PriceNTCountry = 0;
        $Diff_PcsNTCountry = 0;
        $Diff_PriceNTCountry = 0;
        $NewTotal_PcsNTCountry = 0;
        $NewTotal_PriceNTCountry = 0;
        $NewTotalDiff_NavNTCountry = 0;
        $NewTotalDiff_CalNTCountry = 0;
        $a7f1fgbu02s_PcsNTCountry = 0;
        $a7f1fgbu02s_PriceNTCountry = 0;
        $a7f2fgbu10s_PcsNTCountry = 0;
        $a7f2fgbu10s_PriceNTCountry = 0;
        $a7f2thbu05s_PcsNTCountry = 0;
        $a7f2thbu05s_PriceNTCountry = 0;
        $a7f2debu10s_PcsNTCountry = 0;
        $a7f2debu10s_PriceNTCountry = 0;
        $a7f2exbu11s_PcsNTCountry = 0;
        $a7f2exbu11s_PriceNTCountry = 0;
        $a7f2twbu04s_PcsNTCountry = 0;
        $a7f2twbu04s_PriceNTCountry = 0;
        $a7f2twbu07s_PcsNTCountry = 0;
        $a7f2twbu07s_PriceNTCountry = 0;
        $a7f2cebu10s_PcsNTCountry = 0;
        $a7f2cebu10s_PriceNTCountry = 0;
        $a8f1fgbu02s_PcsNTCountry = 0;
        $a8f1fgbu02s_PriceNTCountry = 0;
        $a8f2fgbu10s_PcsNTCountry = 0;
        $a8f2fgbu10s_PriceNTCountry = 0;
        $a8f2thbu05s_PcsNTCountry = 0;
        $a8f2thbu05s_PriceNTCountry = 0;
        $a8f2debu10s_PcsNTCountry = 0;
        $a8f2debu10s_PriceNTCountry = 0;
        $a8f2exbu11s_PcsNTCountry = 0;
        $a8f2exbu11s_PriceNTCountry = 0;
        $a8f2twbu04s_PcsNTCountry = 0;
        $a8f2twbu04s_PriceNTCountry = 0;
        $a8f2twbu07s_PcsNTCountry = 0;
        $a8f2twbu07s_PriceNTCountry = 0;
        $a8f2cebu10s_PcsNTCountry = 0;
        $a8f2cebu10s_PriceNTCountry = 0;
        $DC1_PcsNTCountry = 0;
        $DC1_PriceNTCountry = 0;
        $DCP_PcsNTCountry = 0;
        $DCP_PriceNTCountry = 0;
        $DCY_PcsNTCountry = 0;
        $DCY_PriceNTCountry = 0;
        $DEX_PcsNTCountry = 0;
        $DEX_PriceNTCountry = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterMTCountry = 0;
        $Price_AfterMTCountry = 0;
        $Po_PcsMTCountry = 0;
        $Po_PriceMTCountry = 0;
        $Neg_PcsMTCountry = 0;
        $Neg_PriceMTCountry = 0;
        $Purchase_PcsMTCountry = 0;
        $Purchase_PriceMTCountry = 0;
        $BackChange_PcsMTCountry = 0;
        $BackChange_PriceMTCountry = 0;
        $ReciveTranfer_PcsMTCountry = 0;
        $ReciveTranfer_PriceMTCountry = 0;
        $ReturnItem_PCSMTCountry = 0;
        $ReturnItem_PriceMTCountry = 0;
        $AllIn_PcsMTCountry = 0;
        $AllIn_PriceMTCountry = 0;
        $SendSale_PcsMTCountry = 0;
        $SendSale_PriceMTCountry = 0;
        $ReciveTranOut_PcsMTCountry = 0;
        $ReciveTranOut_PriceMTCountry = 0;
        $ReturnStore_PcsMTCountry = 0;
        $ReturnStore_PriceMTCountry = 0;
        $AllOut_PcsMTCountry = 0;
        $AllOut_PriceMTCountry = 0;
        $Calculate_PcsMTCountry = 0;
        $Calculate_PriceMTCountry = 0;
        $NewCalculate_PcsMTCountry = 0;
        $NewCalculate_PriceMTCountry = 0;
        $Diff_PcsMTCountry = 0;
        $Diff_PriceMTCountry = 0;
        $NewTotal_PcsMTCountry = 0;
        $NewTotal_PriceMTCountry = 0;
        $NewTotalDiff_NavMTCountry = 0;
        $NewTotalDiff_CalMTCountry = 0;
        $a7f1fgbu02s_PcsMTCountry = 0;
        $a7f1fgbu02s_PriceMTCountry = 0;
        $a7f2fgbu10s_PcsMTCountry = 0;
        $a7f2fgbu10s_PriceMTCountry = 0;
        $a7f2thbu05s_PcsMTCountry = 0;
        $a7f2thbu05s_PriceMTCountry = 0;
        $a7f2debu10s_PcsMTCountry = 0;
        $a7f2debu10s_PriceMTCountry = 0;
        $a7f2exbu11s_PcsMTCountry = 0;
        $a7f2exbu11s_PriceMTCountry = 0;
        $a7f2twbu04s_PcsMTCountry = 0;
        $a7f2twbu04s_PriceMTCountry = 0;
        $a7f2twbu07s_PcsMTCountry = 0;
        $a7f2twbu07s_PriceMTCountry = 0;
        $a7f2cebu10s_PcsMTCountry = 0;
        $a7f2cebu10s_PriceMTCountry = 0;
        $a8f1fgbu02s_PcsMTCountry = 0;
        $a8f1fgbu02s_PriceMTCountry = 0;
        $a8f2fgbu10s_PcsMTCountry = 0;
        $a8f2fgbu10s_PriceMTCountry = 0;
        $a8f2thbu05s_PcsMTCountry = 0;
        $a8f2thbu05s_PriceMTCountry = 0;
        $a8f2debu10s_PcsMTCountry = 0;
        $a8f2debu10s_PriceMTCountry = 0;
        $a8f2exbu11s_PcsMTCountry = 0;
        $a8f2exbu11s_PriceMTCountry = 0;
        $a8f2twbu04s_PcsMTCountry = 0;
        $a8f2twbu04s_PriceMTCountry = 0;
        $a8f2twbu07s_PcsMTCountry = 0;
        $a8f2twbu07s_PriceMTCountry = 0;
        $a8f2cebu10s_PcsMTCountry = 0;
        $a8f2cebu10s_PriceMTCountry = 0;
        $DC1_PcsMTCountry = 0;
        $DC1_PriceMTCountry = 0;
        $DCP_PcsMTCountry = 0;
        $DCP_PriceMTCountry = 0;
        $DCY_PcsMTCountry = 0;
        $DCY_PriceMTCountry = 0;
        $DEX_PcsMTCountry = 0;
        $DEX_PriceMTCountry = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterTWCountry = 0;
        $Price_AfterTWCountry = 0;
        $Po_PcsTWCountry = 0;
        $Po_PriceTWCountry = 0;
        $Neg_PcsTWCountry = 0;
        $Neg_PriceTWCountry = 0;
        $Purchase_PcsTWCountry = 0;
        $Purchase_PriceTWCountry = 0;
        $BackChange_PcsTWCountry = 0;
        $BackChange_PriceTWCountry = 0;
        $ReciveTranfer_PcsTWCountry = 0;
        $ReciveTranfer_PriceTWCountry = 0;
        $ReturnItem_PCSTWCountry = 0;
        $ReturnItem_PriceTWCountry = 0;
        $AllIn_PcsTWCountry = 0;
        $AllIn_PriceTWCountry = 0;
        $SendSale_PcsTWCountry = 0;
        $SendSale_PriceTWCountry = 0;
        $ReciveTranOut_PcsTWCountry = 0;
        $ReciveTranOut_PriceTWCountry = 0;
        $ReturnStore_PcsTWCountry = 0;
        $ReturnStore_PriceTWCountry = 0;
        $AllOut_PcsTWCountry = 0;
        $AllOut_PriceTWCountry = 0;
        $Calculate_PcsTWCountry = 0;
        $Calculate_PriceTWCountry = 0;
        $NewCalculate_PcsTWCountry = 0;
        $NewCalculate_PriceTWCountry = 0;
        $Diff_PcsTWCountry = 0;
        $Diff_PriceTWCountry = 0;
        $NewTotal_PcsTWCountry = 0;
        $NewTotal_PriceTWCountry = 0;
        $NewTotalDiff_NavTWCountry = 0;
        $NewTotalDiff_CalTWCountry = 0;
        $a7f1fgbu02s_PcsTWCountry = 0;
        $a7f1fgbu02s_PriceTWCountry = 0;
        $a7f2fgbu10s_PcsTWCountry = 0;
        $a7f2fgbu10s_PriceTWCountry = 0;
        $a7f2thbu05s_PcsTWCountry = 0;
        $a7f2thbu05s_PriceTWCountry = 0;
        $a7f2debu10s_PcsTWCountry = 0;
        $a7f2debu10s_PriceTWCountry = 0;
        $a7f2exbu11s_PcsTWCountry = 0;
        $a7f2exbu11s_PriceTWCountry = 0;
        $a7f2twbu04s_PcsTWCountry = 0;
        $a7f2twbu04s_PriceTWCountry = 0;
        $a7f2twbu07s_PcsTWCountry = 0;
        $a7f2twbu07s_PriceTWCountry = 0;
        $a7f2cebu10s_PcsTWCountry = 0;
        $a7f2cebu10s_PriceTWCountry = 0;
        $a8f1fgbu02s_PcsTWCountry = 0;
        $a8f1fgbu02s_PriceTWCountry = 0;
        $a8f2fgbu10s_PcsTWCountry = 0;
        $a8f2fgbu10s_PriceTWCountry = 0;
        $a8f2thbu05s_PcsTWCountry = 0;
        $a8f2thbu05s_PriceTWCountry = 0;
        $a8f2debu10s_PcsTWCountry = 0;
        $a8f2debu10s_PriceTWCountry = 0;
        $a8f2exbu11s_PcsTWCountry = 0;
        $a8f2exbu11s_PriceTWCountry = 0;
        $a8f2twbu04s_PcsTWCountry = 0;
        $a8f2twbu04s_PriceTWCountry = 0;
        $a8f2twbu07s_PcsTWCountry = 0;
        $a8f2twbu07s_PriceTWCountry = 0;
        $a8f2cebu10s_PcsTWCountry = 0;
        $a8f2cebu10s_PriceTWCountry = 0;
        $DC1_PcsTWCountry = 0;
        $DC1_PriceTWCountry = 0;
        $DCP_PcsTWCountry = 0;
        $DCP_PriceTWCountry = 0;
        $DCY_PcsTWCountry = 0;
        $DCY_PriceTWCountry = 0;
        $DEX_PcsTWCountry = 0;
        $DEX_PriceTWCountry = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterLNCountry = 0;
        $Price_AfterLNCountry = 0;
        $Po_PcsLNCountry = 0;
        $Po_PriceLNCountry = 0;
        $Neg_PcsLNCountry = 0;
        $Neg_PriceLNCountry = 0;
        $Purchase_PcsLNCountry = 0;
        $Purchase_PriceLNCountry = 0;
        $BackChange_PcsLNCountry = 0;
        $BackChange_PriceLNCountry = 0;
        $ReciveTranfer_PcsLNCountry = 0;
        $ReciveTranfer_PriceLNCountry = 0;
        $ReturnItem_PCSLNCountry = 0;
        $ReturnItem_PriceLNCountry = 0;
        $AllIn_PcsLNCountry = 0;
        $AllIn_PriceLNCountry = 0;
        $SendSale_PcsLNCountry = 0;
        $SendSale_PriceLNCountry = 0;
        $ReciveTranOut_PcsLNCountry = 0;
        $ReciveTranOut_PriceLNCountry = 0;
        $ReturnStore_PcsLNCountry = 0;
        $ReturnStore_PriceLNCountry = 0;
        $AllOut_PcsLNCountry = 0;
        $AllOut_PriceLNCountry = 0;
        $Calculate_PcsLNCountry = 0;
        $Calculate_PriceLNCountry = 0;
        $NewCalculate_PcsLNCountry = 0;
        $NewCalculate_PriceLNCountry = 0;
        $Diff_PcsLNCountry = 0;
        $Diff_PriceLNCountry = 0;
        $NewTotal_PcsLNCountry = 0;
        $NewTotal_PriceLNCountry = 0;
        $NewTotalDiff_NavLNCountry = 0;
        $NewTotalDiff_CalLNCountry = 0;
        $a7f1fgbu02s_PcsLNCountry = 0;
        $a7f1fgbu02s_PriceLNCountry = 0;
        $a7f2fgbu10s_PcsLNCountry = 0;
        $a7f2fgbu10s_PriceLNCountry = 0;
        $a7f2thbu05s_PcsLNCountry = 0;
        $a7f2thbu05s_PriceLNCountry = 0;
        $a7f2debu10s_PcsLNCountry = 0;
        $a7f2debu10s_PriceLNCountry = 0;
        $a7f2exbu11s_PcsLNCountry = 0;
        $a7f2exbu11s_PriceLNCountry = 0;
        $a7f2twbu04s_PcsLNCountry = 0;
        $a7f2twbu04s_PriceLNCountry = 0;
        $a7f2twbu07s_PcsLNCountry = 0;
        $a7f2twbu07s_PriceLNCountry = 0;
        $a7f2cebu10s_PcsLNCountry = 0;
        $a7f2cebu10s_PriceLNCountry = 0;
        $a8f1fgbu02s_PcsLNCountry = 0;
        $a8f1fgbu02s_PriceLNCountry = 0;
        $a8f2fgbu10s_PcsLNCountry = 0;
        $a8f2fgbu10s_PriceLNCountry = 0;
        $a8f2thbu05s_PcsLNCountry = 0;
        $a8f2thbu05s_PriceLNCountry = 0;
        $a8f2debu10s_PcsLNCountry = 0;
        $a8f2debu10s_PriceLNCountry = 0;
        $a8f2exbu11s_PcsLNCountry = 0;
        $a8f2exbu11s_PriceLNCountry = 0;
        $a8f2twbu04s_PcsLNCountry = 0;
        $a8f2twbu04s_PriceLNCountry = 0;
        $a8f2twbu07s_PcsLNCountry = 0;
        $a8f2twbu07s_PriceLNCountry = 0;
        $a8f2cebu10s_PcsLNCountry = 0;
        $a8f2cebu10s_PriceLNCountry = 0;
        $DC1_PcsLNCountry = 0;
        $DC1_PriceLNCountry = 0;
        $DCP_PcsLNCountry = 0;
        $DCP_PriceLNCountry = 0;
        $DCY_PcsLNCountry = 0;
        $DCY_PriceLNCountry = 0;
        $DEX_PcsLNCountry = 0;
        $DEX_PriceLNCountry = 0;

        /////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNTCountry = 0;
        $Price_AfterSNTCountry = 0;
        $Po_PcsSNTCountry = 0;
        $Po_PriceSNTCountry = 0;
        $Neg_PcsSNTCountry = 0;
        $Neg_PriceSNTCountry = 0;
        $Purchase_PcsSNTCountry = 0;
        $Purchase_PriceSNTCountry = 0;
        $BackChange_PcsSNTCountry = 0;
        $BackChange_PriceSNTCountry = 0;
        $ReciveTranfer_PcsSNTCountry = 0;
        $ReciveTranfer_PriceSNTCountry = 0;
        $ReturnItem_PCSSNTCountry = 0;
        $ReturnItem_PriceSNTCountry = 0;
        $AllIn_PcsSNTCountry = 0;
        $AllIn_PriceSNTCountry = 0;
        $SendSale_PcsSNTCountry = 0;
        $SendSale_PriceSNTCountry = 0;
        $ReciveTranOut_PcsSNTCountry = 0;
        $ReciveTranOut_PriceSNTCountry = 0;
        $ReturnStore_PcsSNTCountry = 0;
        $ReturnStore_PriceSNTCountry = 0;
        $AllOut_PcsSNTCountry = 0;
        $AllOut_PriceSNTCountry = 0;
        $Calculate_PcsSNTCountry = 0;
        $Calculate_PriceSNTCountry = 0;
        $NewCalculate_PcsSNTCountry = 0;
        $NewCalculate_PriceSNTCountry = 0;
        $Diff_PcsSNTCountry = 0;
        $Diff_PriceSNTCountry = 0;
        $NewTotal_PcsSNTCountry = 0;
        $NewTotal_PriceSNTCountry = 0;
        $NewTotalDiff_NavSNTCountry = 0;
        $NewTotalDiff_CalSNTCountry = 0;
        $a7f1fgbu02s_PcsSNTCountry = 0;
        $a7f1fgbu02s_PriceSNTCountry = 0;
        $a7f2fgbu10s_PcsSNTCountry = 0;
        $a7f2fgbu10s_PriceSNTCountry = 0;
        $a7f2thbu05s_PcsSNTCountry = 0;
        $a7f2thbu05s_PriceSNTCountry = 0;
        $a7f2debu10s_PcsSNTCountry = 0;
        $a7f2debu10s_PriceSNTCountry = 0;
        $a7f2exbu11s_PcsSNTCountry = 0;
        $a7f2exbu11s_PriceSNTCountry = 0;
        $a7f2twbu04s_PcsSNTCountry = 0;
        $a7f2twbu04s_PriceSNTCountry = 0;
        $a7f2twbu07s_PcsSNTCountry = 0;
        $a7f2twbu07s_PriceSNTCountry = 0;
        $a7f2cebu10s_PcsSNTCountry = 0;
        $a7f2cebu10s_PriceSNTCountry = 0;
        $a8f1fgbu02s_PcsSNTCountry = 0;
        $a8f1fgbu02s_PriceSNTCountry = 0;
        $a8f2fgbu10s_PcsSNTCountry = 0;
        $a8f2fgbu10s_PriceSNTCountry = 0;
        $a8f2thbu05s_PcsSNTCountry = 0;
        $a8f2thbu05s_PriceSNTCountry = 0;
        $a8f2debu10s_PcsSNTCountry = 0;
        $a8f2debu10s_PriceSNTCountry = 0;
        $a8f2exbu11s_PcsSNTCountry = 0;
        $a8f2exbu11s_PriceSNTCountry = 0;
        $a8f2twbu04s_PcsSNTCountry = 0;
        $a8f2twbu04s_PriceSNTCountry = 0;
        $a8f2twbu07s_PcsSNTCountry = 0;
        $a8f2twbu07s_PriceSNTCountry = 0;
        $a8f2cebu10s_PcsSNTCountry = 0;
        $a8f2cebu10s_PriceSNTCountry = 0;
        $DC1_PcsSNTCountry = 0;
        $DC1_PriceSNTCountry = 0;
        $DCP_PcsSNTCountry = 0;
        $DCP_PriceSNTCountry = 0;
        $DCY_PcsSNTCountry = 0;
        $DCY_PriceSNTCountry = 0;
        $DEX_PcsSNTCountry = 0;
        $DEX_PriceSNTCountry = 0;


        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////

        foreach ($ItemNoNT as $row) {
            if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                $NumberNT = ($row->PriceAfter / $row->PcsAfter);
            } else {
                $NumberNT = $row->PriceAvg;;
            }

            $Code_1 = explode("-", $row->Item_No);

            if (($Code_1[0] == "NT") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1")) {

                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNT = $row->PcsAfter;
                $Pcs_AfterNT = $Pcs_AfterNT + $PCSAfterNT;

                $PriceAfterNT = $row->PriceAfter;
                $Price_AfterNT = $Price_AfterNT + $PriceAfterNT;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNT = $row->Po_Quantity;
                $Po_PcsNT = $Po_PcsNT + $PoPcsNT;

                $PoPriceNT = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceNT = $Po_PriceNT + $PoPriceNT;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNT = $row->Neg_Quantity;
                $Neg_PcsNT = $Neg_PcsNT + $NegPcsNT;


                $NegPriceNT = $NumberNT * $row->Neg_Quantity;
                $Neg_PriceNT = $Neg_PriceNT + $NegPriceNT;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNT = $PCSAfterNT + $PoPcsNT + $NegPcsNT;
                $BackChange_PcsNT = $BackChange_PcsNT + $BackChangePcsNT;

                $BackChangePriceNT = $PriceAfterNT + $PoPriceNT + $NegPriceNT;
                $BackChange_PriceNT = $BackChange_PriceNT + $BackChangePriceNT;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNT = $row->purchase_Quantity;
                $Purchase_PcsNT = $Purchase_PcsNT + $PurchasePcsNT;

                $PurchasePriceNT = $row->purchase_Cost;
                $Purchase_PriceNT = $Purchase_PriceNT + $PurchasePriceNT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNT = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNT = $ReciveTranfer_PcsNT + $ReciveTranferPcsNT;

                $ReciveTranferPriceNT = $ReciveTranferPcsNT * $row->PriceAvg;
                $ReciveTranfer_PriceNT = $ReciveTranfer_PriceNT + $ReciveTranferPriceNT;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNT = $row->returncuses_Quantity;
                $ReturnItem_PCSNT = $ReturnItem_PCSNT + $ReturnItemQuantityNT;

                $ReturnItemPriceNT = $ReturnItemQuantityNT * $NumberNT;
                $ReturnItem_PriceNT = $ReturnItem_PriceNT + $ReturnItemPriceNT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNT = $row->purchase_Quantity + $ReciveTranferPcsNT + $ReturnItemQuantityNT;
                $AllIn_PcsNT = $AllIn_PcsNT + $AllInPcsNT;

                $AllInPriceNT = $PurchasePriceNT + $ReciveTranferPriceNT + $ReturnItemPriceNT;
                $AllIn_PriceNT = $AllIn_PriceNT + $AllInPriceNT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNT = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsNT = $SendSale_PcsNT + $SendSalePcsNT;

                $sum = $BackChangePcsNT + $AllInPcsNT;
                if ($sum > 0) {
                    $SendSalePriceNT = (($AllInPriceNT + $BackChangePriceNT) / ($AllInPcsNT + $BackChangePcsNT)) * $SendSalePcsNT;
                    $SendSale_PriceNT = $SendSale_PriceNT + $SendSalePriceNT;
                }else{
                    $SendSalePriceNT = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNT = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNT = $ReciveTranOut_PcsNT + $ReciveTranOutPcsNT;

                $sum = $BackChangePcsNT + $AllInPcsNT;
                if ($sum > 0) {
                    $ReciveTranOutPriceNT = (($AllInPriceNT + $BackChangePriceNT) / ($AllInPcsNT + $BackChangePcsNT)) * $ReciveTranOutPcsNT;
                    $ReciveTranOut_PriceNT = $ReciveTranOut_PriceNT + $ReciveTranOutPriceNT;
                }else{
                    $ReciveTranOutPriceNT = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNT = $row->returnitem_Quantity;
                $ReturnStore_PcsNT = $ReturnStore_PcsNT + $ReturnStorePcsNT;

                $sum = $BackChangePcsNT + $AllInPcsNT;
                if ($sum > 0) {
                    $ReturnStorePriceNT = (($AllInPriceNT + $BackChangePriceNT) / ($AllInPcsNT + $BackChangePcsNT)) * $ReturnStorePcsNT;
                    $ReturnStore_PriceNT = $ReturnStore_PriceNT + $ReturnStorePriceNT;
                }else{
                    $ReturnStorePriceNT = 0;
                }

                /////////////////////////////////////////////////// รวมจ่ายออก ///////////////////////////////////////////

                $AllOutPcsNT = $ReturnStorePcsNT + $ReciveTranOutPcsNT + $SendSalePcsNT;
                $AllOut_PcsNT = $AllOut_PcsNT + $AllOutPcsNT;

                $AllOutPriceNT = $SendSalePriceNT + $ReciveTranOutPriceNT + $ReturnStorePriceNT;
                $AllOut_PriceNT = $AllOut_PriceNT + $AllOutPriceNT;

                /////////////////////////////////////////////////// รวมคำนวณ ///////////////////////////////////////////

                $CalculatePcsNT = $BackChangePcsNT + $AllInPcsNT + $AllOutPcsNT;
                $Calculate_PcsNT = $Calculate_PcsNT + $CalculatePcsNT;

                $CalculatePriceNT = $BackChangePriceNT + $AllInPriceNT + $AllOutPriceNT;
                $Calculate_PriceNT = $Calculate_PriceNT + $CalculatePriceNT;

                /////////////////////////////////////////////////// รวมคงเหลือ NAV ///////////////////////////////////////////

                $NewCalculatePcsNT = $row->item_stock_Quantity;
                $NewCalculate_PcsNT = $NewCalculate_PcsNT + $NewCalculatePcsNT;

                $NewCalculatePriceNT = $row->item_stock_Amount;
                $NewCalculate_PriceNT = $NewCalculate_PriceNT + $NewCalculatePriceNT;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNT = $NewCalculatePcsNT - $CalculatePcsNT;
                $Diff_PcsNT = $Diff_PcsNT + $DiffPcsNT;

                $DiffPriceNT = $NewCalculatePriceNT - $CalculatePriceNT;
                $Diff_PriceNT = $Diff_PriceNT + $DiffPriceNT;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNT = $CalculatePcsNT;
                $NewTotal_PcsNT = $NewTotal_PcsNT + $CalculatePcsNT;

                $NewTotalPriceNT = $NewTotalPcsNT * $row->PriceAvg;
                $NewTotal_PriceNT = $NewTotal_PriceNT + $NewTotalPriceNT;

                $NewTotalDiffNavNT = $NewTotalPriceNT - $NewCalculatePriceNT;
                $NewTotalDiff_NavNT = $NewTotalDiff_NavNT + $NewTotalDiffNavNT;

                $NewTotalDiffCalNT = $NewTotalPriceNT - $CalculatePriceNT;
                $NewTotalDiff_CalNT = $NewTotalDiff_CalNT + $NewTotalDiffCalNT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNT = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNT = $a7f1fgbu02s_PcsNT + $a7f1fgbu02sPcsNT;

                $a7f1fgbu02sPriceNT = $a7f1fgbu02sPcsNT * $row->PriceAvg;
                $a7f1fgbu02s_PriceNT = $a7f1fgbu02s_PriceNT + $a7f1fgbu02sPriceNT;

                $a7f2fgbu10sPcsNT = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNT = $a7f2fgbu10s_PcsNT + $a7f2fgbu10sPcsNT;

                $a7f2fgbu10sPriceNT = $a7f2fgbu10sPcsNT * $row->PriceAvg;
                $a7f2fgbu10s_PriceNT = $a7f2fgbu10s_PriceNT + $a7f2fgbu10sPriceNT;

                $a7f2thbu05sPcsNT = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNT = $a7f2thbu05s_PcsNT + $a7f2thbu05sPcsNT;

                $a7f2thbu05sPriceNT = $a7f2thbu05sPcsNT * $row->PriceAvg;
                $a7f2thbu05s_PriceNT = $a7f2thbu05s_PriceNT + $a7f2thbu05sPriceNT;

                $a7f2debu10sPcsNT = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNT = $a7f2debu10s_PcsNT + $a7f2debu10sPcsNT;

                $a7f2debu10sPriceNT = $a7f2debu10sPcsNT * $row->PriceAvg;
                $a7f2debu10s_PriceNT = $a7f2debu10s_PriceNT + $a7f2debu10sPriceNT;

                $a7f2exbu11sPcsNT = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNT = $a7f2exbu11s_PcsNT + $a7f2exbu11sPcsNT;

                $a7f2exbu11sPriceNT = $a7f2exbu11sPcsNT * $row->PriceAvg;
                $a7f2exbu11s_PriceNT = $a7f2exbu11s_PriceNT + $a7f2exbu11sPriceNT;

                $a7f2twbu04sPcsNT = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNT = $a7f2twbu04s_PcsNT + $a7f2twbu04sPcsNT;

                $a7f2twbu04sPriceNT = $a7f2twbu04sPcsNT * $row->PriceAvg;
                $a7f2twbu04s_PriceNT = $a7f2twbu04s_PriceNT + $a7f2twbu04sPriceNT;

                $a7f2twbu07sPcsNT = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNT = $a7f2twbu07s_PcsNT + $a7f2twbu07sPcsNT;

                $a7f2twbu07sPriceNT = $a7f2twbu07sPcsNT * $row->PriceAvg;
                $a7f2twbu07s_PriceNT = $a7f2twbu07s_PriceNT + $a7f2twbu07sPriceNT;

                $a7f2cebu10sPcsNT = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNT = $a7f2cebu10s_PcsNT + $a7f2cebu10sPcsNT;

                $a7f2cebu10sPriceNT = $a7f2cebu10sPcsNT * $row->PriceAvg;
                $a7f2cebu10s_PriceNT = $a7f2cebu10s_PriceNT + $a7f2cebu10sPriceNT;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNT = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNT = $a8f1fgbu02s_PcsNT + $a8f1fgbu02sPcsNT;

                $a8f1fgbu02sPriceNT = $a8f1fgbu02sPcsNT * $NumberNT;
                $a8f1fgbu02s_PriceNT = $a8f1fgbu02s_PriceNT + $a8f1fgbu02sPriceNT;

                $a8f2fgbu10sPcsNT = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNT = $a8f2fgbu10s_PcsNT + $a8f2fgbu10sPcsNT;

                $a8f2fgbu10sPriceNT = $a8f2fgbu10sPcsNT * $NumberNT;
                $a8f2fgbu10s_PriceNT = $a8f2fgbu10s_PriceNT + $a8f2fgbu10sPriceNT;

                $a8f2thbu05sPcsNT = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNT = $a8f2thbu05s_PcsNT + $a8f2thbu05sPcsNT;

                $a8f2thbu05sPriceNT = $a8f2thbu05sPcsNT * $NumberNT;
                $a8f2thbu05s_PriceNT = $a8f2thbu05s_PriceNT + $a8f2thbu05sPriceNT;

                $a8f2debu10sPcsNT = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNT = $a8f2debu10s_PcsNT + $a8f2debu10sPcsNT;

                $a8f2debu10sPriceNT = $a8f2debu10sPcsNT * $NumberNT;
                $a8f2debu10s_PriceNT = $a8f2debu10s_PriceNT + $a8f2debu10sPriceNT;

                $a8f2exbu11sPcsNT = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNT = $a8f2exbu11s_PcsNT + $a8f2exbu11sPcsNT;

                $a8f2exbu11sPriceNT = $a8f2exbu11sPcsNT * $NumberNT;
                $a8f2exbu11s_PriceNT = $a8f2exbu11s_PriceNT + $a8f2exbu11sPriceNT;

                $a8f2twbu04sPcsNT = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNT = $a8f2twbu04s_PcsNT + $a8f2twbu04sPcsNT;

                $a8f2twbu04sPriceNT = $a8f2twbu04sPcsNT * $NumberNT;
                $a8f2twbu04s_PriceNT = $a8f2twbu04s_PriceNT + $a8f2twbu04sPriceNT;

                $a8f2twbu07sPcsNT = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNT = $a8f2twbu07s_PcsNT + $a8f2twbu07sPcsNT;

                $a8f2twbu07sPriceNT = $a8f2twbu07sPcsNT * $NumberNT;
                $a8f2twbu07s_PriceNT = $a8f2twbu07s_PriceNT + $a8f2twbu07sPriceNT;

                $a8f2cebu10sPcsNT = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNT = $a8f2cebu10s_PcsNT + $a8f2cebu10sPcsNT;

                $a8f2cebu10sPriceNT = $a8f2cebu10sPcsNT * $NumberNT;
                $a8f2cebu10s_PriceNT = $a8f2cebu10s_PriceNT + $a8f2cebu10sPriceNT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNT = $row->dc1_s_Quantity;
                $DC1_PcsNT = $DC1_PcsNT + $DC1PcsNT;

                $DC1PriceNT = $DC1PcsNT * $NumberNT;
                $DC1_PriceNT = $DC1_PriceNT + $DC1PriceNT;

                $DCPPcsNT = $row->dcp_s_Quantity;
                $DCP_PcsNT = $DCP_PcsNT + $DCPPcsNT;

                $DCPPriceNT = $DCPPcsNT * $NumberNT;
                $DCP_PriceNT = $DCP_PriceNT + $DCPPriceNT;

                $DCYPcsNT = $row->dcy_s_Quantity;
                $DCY_PcsNT = $DCY_PcsNT + $DCYPcsNT;

                $DCYPriceNT = $DCYPcsNT * $NumberNT;
                $DCY_PriceNT = $DCY_PriceNT + $DCYPriceNT;

                $DEXPcsNT = $row->dex_s_Quantity;
                $DEX_PcsNT = $DEX_PcsNT + $DEXPcsNT;

                $DEXPriceNT = $DEXPcsNT * $NumberNT;
                $DEX_PriceNT = $DEX_PriceNT + $DEXPriceNT;
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "MT") && ($row->Customer == "DC1")) {
                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberMT = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberMT = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMT = $row->PcsAfter;
                $Pcs_AfterMT = $Pcs_AfterMT + $PCSAfterMT;

                $PriceAfterMT = $row->PriceAfter;
                $Price_AfterMT = $Price_AfterMT + $PriceAfterMT;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMT = $row->Po_Quantity;
                $Po_PcsMT = $Po_PcsMT + $PoPcsMT;

                $PoPriceMT = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceMT = $Po_PriceMT + $PoPriceMT;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMT = $row->Neg_Quantity;
                $Neg_PcsMT = $Neg_PcsMT + $NegPcsMT;


                $NegPriceMT = $NumberMT * $row->Neg_Quantity;
                $Neg_PriceMT = $Neg_PriceMT + $NegPriceMT;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMT = $PCSAfterMT + $PoPcsMT + $NegPcsMT;
                $BackChange_PcsMT = $BackChange_PcsMT + $BackChangePcsMT;

                $BackChangePriceMT = $PriceAfterMT + $PoPriceMT + $NegPriceMT;
                $BackChange_PriceMT = $BackChange_PriceMT + $BackChangePriceMT;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMT = $row->purchase_Quantity;
                $Purchase_PcsMT = $Purchase_PcsMT + $PurchasePcsMT;

                $PurchasePriceMT = $row->purchase_Cost;
                $Purchase_PriceMT = $Purchase_PriceMT + $PurchasePriceMT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMT = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMT = $ReciveTranfer_PcsMT + $ReciveTranferPcsMT;

                $ReciveTranferPriceMT = $ReciveTranferPcsMT * $row->PriceAvg;
                $ReciveTranfer_PriceMT = $ReciveTranfer_PriceMT + $ReciveTranferPriceMT;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMT = $row->returncuses_Quantity;
                $ReturnItem_PCSMT = $ReturnItem_PCSMT + $ReturnItemQuantityMT;

                $ReturnItemPriceMT = $ReturnItemQuantityMT * $NumberMT;
                $ReturnItem_PriceMT = $ReturnItem_PriceMT + $ReturnItemPriceMT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMT = $row->purchase_Quantity + $ReciveTranferPcsMT + $ReturnItemQuantityMT;
                $AllIn_PcsMT = $AllIn_PcsMT + $AllInPcsMT;

                $AllInPriceMT = $PurchasePriceMT + $ReciveTranferPriceMT + $ReturnItemPriceMT;
                $AllIn_PriceMT = $AllIn_PriceMT + $AllInPriceMT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMT = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsMT = $SendSale_PcsMT + $SendSalePcsMT;

                $sum = $BackChangePcsMT + $AllInPcsMT;
                if ($sum > 0) {
                    $SendSalePriceMT = (($AllInPriceMT + $BackChangePriceMT) / ($AllInPcsMT + $BackChangePcsMT)) * $SendSalePcsMT;
                    $SendSale_PriceMT = $SendSale_PriceMT + $SendSalePriceMT;
                }else{
                    $SendSalePriceMT = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMT = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMT = $ReciveTranOut_PcsMT + $ReciveTranOutPcsMT;

                $sum = $BackChangePcsMT + $AllInPcsMT;
                if ($sum > 0) {
                    $ReciveTranOutPriceMT = (($AllInPriceMT + $BackChangePriceMT) / ($AllInPcsMT + $BackChangePcsMT)) * $ReciveTranOutPcsMT;
                    $ReciveTranOut_PriceMT = $ReciveTranOut_PriceMT + $ReciveTranOutPriceMT;
                }else{
                    $ReciveTranOutPriceMT = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMT = $row->returnitem_Quantity;
                $ReturnStore_PcsMT = $ReturnStore_PcsMT + $ReturnStorePcsMT;

                $sum = $BackChangePcsMT + $AllInPcsMT;
                if ($sum > 0) {
                    $ReturnStorePriceMT = (($AllInPriceMT + $BackChangePriceMT) / ($AllInPcsMT + $BackChangePcsMT)) * $ReturnStorePcsMT;
                    $ReturnStore_PriceMT = $ReturnStore_PriceMT + $ReturnStorePriceMT;
                }else{
                    $ReturnStorePriceMT = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMT = $ReturnStorePcsMT + $ReciveTranOutPcsMT + $SendSalePcsMT;
                $AllOut_PcsMT = $AllOut_PcsMT + $AllOutPcsMT;

                $AllOutPriceMT = $SendSalePriceMT + $ReciveTranOutPriceMT + $ReturnStorePriceMT;
                $AllOut_PriceMT = $AllOut_PriceMT + $AllOutPriceMT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMT = $BackChangePcsMT + $AllInPcsMT + $AllOutPcsMT;
                $Calculate_PcsMT = $Calculate_PcsMT + $CalculatePcsMT;

                $CalculatePriceMT = $BackChangePriceMT + $AllInPriceMT + $AllOutPriceMT;
                $Calculate_PriceMT = $Calculate_PriceMT + $CalculatePriceMT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMT = $row->item_stock_Quantity;
                $NewCalculate_PcsMT = $NewCalculate_PcsMT + $NewCalculatePcsMT;

                $NewCalculatePriceMT = $row->item_stock_Amount;
                $NewCalculate_PriceMT = $NewCalculate_PriceMT + $NewCalculatePriceMT;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMT = $NewCalculatePcsMT - $CalculatePcsMT;
                $Diff_PcsMT = $Diff_PcsMT + $DiffPcsMT;

                $DiffPriceMT = $NewCalculatePriceMT - $CalculatePriceMT;
                $Diff_PriceMT = $Diff_PriceMT + $DiffPriceMT;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMT = $CalculatePcsMT;
                $NewTotal_PcsMT = $NewTotal_PcsMT + $CalculatePcsMT;

                $NewTotalPriceMT = $NewTotalPcsMT * $row->PriceAvg;
                $NewTotal_PriceMT = $NewTotal_PriceMT + $NewTotalPriceMT;

                $NewTotalDiffNavMT = $NewTotalPriceMT - $NewCalculatePriceMT;
                $NewTotalDiff_NavMT = $NewTotalDiff_NavMT + $NewTotalDiffNavMT;

                $NewTotalDiffCalMT = $NewTotalPriceMT - $CalculatePriceMT;
                $NewTotalDiff_CalMT = $NewTotalDiff_CalMT + $NewTotalDiffCalMT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMT = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMT = $a7f1fgbu02s_PcsMT + $a7f1fgbu02sPcsMT;

                $a7f1fgbu02sPriceMT = $a7f1fgbu02sPcsMT * $row->PriceAvg;
                $a7f1fgbu02s_PriceMT = $a7f1fgbu02s_PriceMT + $a7f1fgbu02sPriceMT;

                $a7f2fgbu10sPcsMT = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMT = $a7f2fgbu10s_PcsMT + $a7f2fgbu10sPcsMT;

                $a7f2fgbu10sPriceMT = $a7f2fgbu10sPcsMT * $row->PriceAvg;
                $a7f2fgbu10s_PriceMT = $a7f2fgbu10s_PriceMT + $a7f2fgbu10sPriceMT;

                $a7f2thbu05sPcsMT = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMT = $a7f2thbu05s_PcsMT + $a7f2thbu05sPcsMT;

                $a7f2thbu05sPriceMT = $a7f2thbu05sPcsMT * $row->PriceAvg;
                $a7f2thbu05s_PriceMT = $a7f2thbu05s_PriceMT + $a7f2thbu05sPriceMT;

                $a7f2debu10sPcsMT = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMT = $a7f2debu10s_PcsMT + $a7f2debu10sPcsMT;

                $a7f2debu10sPriceMT = $a7f2debu10sPcsMT * $row->PriceAvg;
                $a7f2debu10s_PriceMT = $a7f2debu10s_PriceMT + $a7f2debu10sPriceMT;

                $a7f2exbu11sPcsMT = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMT = $a7f2exbu11s_PcsMT + $a7f2exbu11sPcsMT;

                $a7f2exbu11sPriceMT = $a7f2exbu11sPcsMT * $row->PriceAvg;
                $a7f2exbu11s_PriceMT = $a7f2exbu11s_PriceMT + $a7f2exbu11sPriceMT;

                $a7f2twbu04sPcsMT = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMT = $a7f2twbu04s_PcsMT + $a7f2twbu04sPcsMT;

                $a7f2twbu04sPriceMT = $a7f2twbu04sPcsMT * $row->PriceAvg;
                $a7f2twbu04s_PriceMT = $a7f2twbu04s_PriceMT + $a7f2twbu04sPriceMT;

                $a7f2twbu07sPcsMT = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMT = $a7f2twbu07s_PcsMT + $a7f2twbu07sPcsMT;

                $a7f2twbu07sPriceMT = $a7f2twbu07sPcsMT * $row->PriceAvg;
                $a7f2twbu07s_PriceMT = $a7f2twbu07s_PriceMT + $a7f2twbu07sPriceMT;

                $a7f2cebu10sPcsMT = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMT = $a7f2cebu10s_PcsMT + $a7f2cebu10sPcsMT;

                $a7f2cebu10sPriceMT = $a7f2cebu10sPcsMT * $row->PriceAvg;
                $a7f2cebu10s_PriceMT = $a7f2cebu10s_PriceMT + $a7f2cebu10sPriceMT;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMT = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMT = $a8f1fgbu02s_PcsMT + $a8f1fgbu02sPcsMT;

                $a8f1fgbu02sPriceMT = $a8f1fgbu02sPcsMT * $NumberMT;
                $a8f1fgbu02s_PriceMT = $a8f1fgbu02s_PriceMT + $a8f1fgbu02sPriceMT;

                $a8f2fgbu10sPcsMT = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMT = $a8f2fgbu10s_PcsMT + $a8f2fgbu10sPcsMT;

                $a8f2fgbu10sPriceMT = $a8f2fgbu10sPcsMT * $NumberMT;
                $a8f2fgbu10s_PriceMT = $a8f2fgbu10s_PriceMT + $a8f2fgbu10sPriceMT;

                $a8f2thbu05sPcsMT = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMT = $a8f2thbu05s_PcsMT + $a8f2thbu05sPcsMT;

                $a8f2thbu05sPriceMT = $a8f2thbu05sPcsMT * $NumberMT;
                $a8f2thbu05s_PriceMT = $a8f2thbu05s_PriceMT + $a8f2thbu05sPriceMT;

                $a8f2debu10sPcsMT = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMT = $a8f2debu10s_PcsMT + $a8f2debu10sPcsMT;

                $a8f2debu10sPriceMT = $a8f2debu10sPcsMT * $NumberMT;
                $a8f2debu10s_PriceMT = $a8f2debu10s_PriceMT + $a8f2debu10sPriceMT;

                $a8f2exbu11sPcsMT = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMT = $a8f2exbu11s_PcsMT + $a8f2exbu11sPcsMT;

                $a8f2exbu11sPriceMT = $a8f2exbu11sPcsMT * $NumberMT;
                $a8f2exbu11s_PriceMT = $a8f2exbu11s_PriceMT + $a8f2exbu11sPriceMT;

                $a8f2twbu04sPcsMT = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMT = $a8f2twbu04s_PcsMT + $a8f2twbu04sPcsMT;

                $a8f2twbu04sPriceMT = $a8f2twbu04sPcsMT * $NumberMT;
                $a8f2twbu04s_PriceMT = $a8f2twbu04s_PriceMT + $a8f2twbu04sPriceMT;

                $a8f2twbu07sPcsMT = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMT = $a8f2twbu07s_PcsMT + $a8f2twbu07sPcsMT;

                $a8f2twbu07sPriceMT = $a8f2twbu07sPcsMT * $NumberMT;
                $a8f2twbu07s_PriceMT = $a8f2twbu07s_PriceMT + $a8f2twbu07sPriceMT;

                $a8f2cebu10sPcsMT = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMT = $a8f2cebu10s_PcsMT + $a8f2cebu10sPcsMT;

                $a8f2cebu10sPriceMT = $a8f2cebu10sPcsMT * $NumberMT;
                $a8f2cebu10s_PriceMT = $a8f2cebu10s_PriceMT + $a8f2cebu10sPriceMT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMT = $row->dc1_s_Quantity;
                $DC1_PcsMT = $DC1_PcsMT + $DC1PcsMT;

                $DC1PriceMT = $DC1PcsMT * $NumberMT;
                $DC1_PriceMT = $DC1_PriceMT + $DC1PriceMT;

                $DCPPcsMT = $row->dcp_s_Quantity;
                $DCP_PcsMT = $DCP_PcsMT + $DCPPcsMT;

                $DCPPriceMT = $DCPPcsMT * $NumberMT;
                $DCP_PriceMT = $DCP_PriceMT + $DCPPriceMT;

                $DCYPcsMT = $row->dcy_s_Quantity;
                $DCY_PcsMT = $DCY_PcsMT + $DCYPcsMT;

                $DCYPriceMT = $DCYPcsMT * $NumberMT;
                $DCY_PriceMT = $DCY_PriceMT + $DCYPriceMT;

                $DEXPcsMT = $row->dex_s_Quantity;
                $DEX_PcsMT = $DEX_PcsMT + $DEXPcsMT;

                $DEXPriceMT = $DEXPcsMT * $NumberMT;
                $DEX_PriceMT = $DEX_PriceMT + $DEXPriceMT;
            }
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "TW") && ($row->Customer == "DC1" || $row->Customer == "FAC" || $row->Customer == "TLS")) {
                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberTW = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberTW = $row->PriceAvg;;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterTW = $row->PcsAfter;
                $Pcs_AfterTW = $Pcs_AfterTW + $PCSAfterTW;

                $PriceAfterTW = $row->PriceAfter;
                $Price_AfterTW = $Price_AfterTW + $PriceAfterTW;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsTW = $row->Po_Quantity;
                $Po_PcsTW = $Po_PcsTW + $PoPcsTW;

                $PoPriceTW = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceTW = $Po_PriceTW + $PoPriceTW;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsTW = $row->Neg_Quantity;
                $Neg_PcsTW = $Neg_PcsTW + $NegPcsTW;


                $NegPriceTW = $NumberTW * $row->Neg_Quantity;
                $Neg_PriceTW = $Neg_PriceTW + $NegPriceTW;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsTW = $PCSAfterTW + $PoPcsTW + $NegPcsTW;
                $BackChange_PcsTW = $BackChange_PcsTW + $BackChangePcsTW;

                $BackChangePriceTW = $PriceAfterTW + $PoPriceTW + $NegPriceTW;
                $BackChange_PriceTW = $BackChange_PriceTW + $BackChangePriceTW;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsTW = $row->purchase_Quantity;
                $Purchase_PcsTW = $Purchase_PcsTW + $PurchasePcsTW;

                $PurchasePriceTW = $row->purchase_Cost;
                $Purchase_PriceTW = $Purchase_PriceTW + $PurchasePriceTW;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsTW = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsTW = $ReciveTranfer_PcsTW + $ReciveTranferPcsTW;

                $ReciveTranferPriceTW = $ReciveTranferPcsTW * $row->PriceAvg;
                $ReciveTranfer_PriceTW = $ReciveTranfer_PriceTW + $ReciveTranferPriceTW;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityTW = $row->returncuses_Quantity;
                $ReturnItem_PCSTW = $ReturnItem_PCSTW + $ReturnItemQuantityTW;

                $ReturnItemPriceTW = $ReturnItemQuantityTW * $NumberTW;
                $ReturnItem_PriceTW = $ReturnItem_PriceTW + $ReturnItemPriceTW;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsTW = $row->purchase_Quantity + $ReciveTranferPcsTW + $ReturnItemQuantityTW;
                $AllIn_PcsTW = $AllIn_PcsTW + $AllInPcsTW;

                $AllInPriceTW = $PurchasePriceTW + $ReciveTranferPriceTW + $ReturnItemPriceTW;
                $AllIn_PriceTW = $AllIn_PriceTW + $AllInPriceTW;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsTW = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsTW = $SendSale_PcsTW + $SendSalePcsTW;

                $sum = $BackChangePcsTW + $AllInPcsTW;
                if ($sum > 0) {
                    $SendSalePriceTW = (($AllInPriceTW + $BackChangePriceTW) / ($AllInPcsTW + $BackChangePcsTW)) * $SendSalePcsTW;
                    $SendSale_PriceTW = $SendSale_PriceTW + $SendSalePriceTW;
                }else{
                    $SendSalePriceTW = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsTW = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsTW = $ReciveTranOut_PcsTW + $ReciveTranOutPcsTW;

                $sum = $BackChangePcsTW + $AllInPcsTW;
                if ($sum > 0) {
                    $ReciveTranOutPriceTW = (($AllInPriceTW + $BackChangePriceTW) / ($AllInPcsTW + $BackChangePcsTW)) * $ReciveTranOutPcsTW;
                    $ReciveTranOut_PriceTW = $ReciveTranOut_PriceTW + $ReciveTranOutPriceTW;
                }else{
                    $ReciveTranOutPriceTW = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsTW = $row->returnitem_Quantity;
                $ReturnStore_PcsTW = $ReturnStore_PcsTW + $ReturnStorePcsTW;

                $sum = $BackChangePcsTW + $AllInPcsTW;
                if ($sum > 0) {
                    $ReturnStorePriceTW = (($AllInPriceTW + $BackChangePriceTW) / ($AllInPcsTW + $BackChangePcsTW)) * $ReturnStorePcsTW;
                    $ReturnStore_PriceTW = $ReturnStore_PriceTW + $ReturnStorePriceTW;
                }else{
                    $ReturnStorePriceTW = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsTW = $ReturnStorePcsTW + $ReciveTranOutPcsTW + $SendSalePcsTW;
                $AllOut_PcsTW = $AllOut_PcsTW + $AllOutPcsTW;

                $AllOutPriceTW = $SendSalePriceTW + $ReciveTranOutPriceTW + $ReturnStorePriceTW;
                $AllOut_PriceTW = $AllOut_PriceTW + $AllOutPriceTW;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsTW = $BackChangePcsTW + $AllInPcsTW + $AllOutPcsTW;
                $Calculate_PcsTW = $Calculate_PcsTW + $CalculatePcsTW;

                $CalculatePriceTW = $BackChangePriceTW + $AllInPriceTW + $AllOutPriceTW;
                $Calculate_PriceTW = $Calculate_PriceTW + $CalculatePriceTW;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsTW = $row->item_stock_Quantity;
                $NewCalculate_PcsTW = $NewCalculate_PcsTW + $NewCalculatePcsTW;

                $NewCalculatePriceTW = $row->item_stock_Amount;
                $NewCalculate_PriceTW = $NewCalculate_PriceTW + $NewCalculatePriceTW;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsTW = $NewCalculatePcsTW - $CalculatePcsTW;
                $Diff_PcsTW = $Diff_PcsTW + $DiffPcsTW;

                $DiffPriceTW = $NewCalculatePriceTW - $CalculatePriceTW;
                $Diff_PriceTW = $Diff_PriceTW + $DiffPriceTW;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsTW = $CalculatePcsTW;
                $NewTotal_PcsTW = $NewTotal_PcsTW + $CalculatePcsTW;

                $NewTotalPriceTW = $NewTotalPcsTW * $row->PriceAvg;
                $NewTotal_PriceTW = $NewTotal_PriceTW + $NewTotalPriceTW;

                $NewTotalDiffNavTW = $NewTotalPriceTW - $NewCalculatePriceTW;
                $NewTotalDiff_NavTW = $NewTotalDiff_NavTW + $NewTotalDiffNavTW;

                $NewTotalDiffCalTW = $NewTotalPriceTW - $CalculatePriceTW;
                $NewTotalDiff_CalTW = $NewTotalDiff_CalTW + $NewTotalDiffCalTW;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsTW = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsTW = $a7f1fgbu02s_PcsTW + $a7f1fgbu02sPcsTW;

                $a7f1fgbu02sPriceTW = $a7f1fgbu02sPcsTW * $row->PriceAvg;
                $a7f1fgbu02s_PriceTW = $a7f1fgbu02s_PriceTW + $a7f1fgbu02sPriceTW;

                $a7f2fgbu10sPcsTW = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsTW = $a7f2fgbu10s_PcsTW + $a7f2fgbu10sPcsTW;

                $a7f2fgbu10sPriceTW = $a7f2fgbu10sPcsTW * $row->PriceAvg;
                $a7f2fgbu10s_PriceTW = $a7f2fgbu10s_PriceTW + $a7f2fgbu10sPriceTW;

                $a7f2thbu05sPcsTW = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsTW = $a7f2thbu05s_PcsTW + $a7f2thbu05sPcsTW;

                $a7f2thbu05sPriceTW = $a7f2thbu05sPcsTW * $row->PriceAvg;
                $a7f2thbu05s_PriceTW = $a7f2thbu05s_PriceTW + $a7f2thbu05sPriceTW;

                $a7f2debu10sPcsTW = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsTW = $a7f2debu10s_PcsTW + $a7f2debu10sPcsTW;

                $a7f2debu10sPriceTW = $a7f2debu10sPcsTW * $row->PriceAvg;
                $a7f2debu10s_PriceTW = $a7f2debu10s_PriceTW + $a7f2debu10sPriceTW;

                $a7f2exbu11sPcsTW = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsTW = $a7f2exbu11s_PcsTW + $a7f2exbu11sPcsTW;

                $a7f2exbu11sPriceTW = $a7f2exbu11sPcsTW * $row->PriceAvg;
                $a7f2exbu11s_PriceTW = $a7f2exbu11s_PriceTW + $a7f2exbu11sPriceTW;

                $a7f2twbu04sPcsTW = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsTW = $a7f2twbu04s_PcsTW + $a7f2twbu04sPcsTW;

                $a7f2twbu04sPriceTW = $a7f2twbu04sPcsTW * $row->PriceAvg;
                $a7f2twbu04s_PriceTW = $a7f2twbu04s_PriceTW + $a7f2twbu04sPriceTW;

                $a7f2twbu07sPcsTW = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsTW = $a7f2twbu07s_PcsTW + $a7f2twbu07sPcsTW;

                $a7f2twbu07sPriceTW = $a7f2twbu07sPcsTW * $row->PriceAvg;
                $a7f2twbu07s_PriceTW = $a7f2twbu07s_PriceTW + $a7f2twbu07sPriceTW;

                $a7f2cebu10sPcsTW = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsTW = $a7f2cebu10s_PcsTW + $a7f2cebu10sPcsTW;

                $a7f2cebu10sPriceTW = $a7f2cebu10sPcsTW * $row->PriceAvg;
                $a7f2cebu10s_PriceTW = $a7f2cebu10s_PriceTW + $a7f2cebu10sPriceTW;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsTW = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsTW = $a8f1fgbu02s_PcsTW + $a8f1fgbu02sPcsTW;

                $a8f1fgbu02sPriceTW = $a8f1fgbu02sPcsTW * $NumberTW;
                $a8f1fgbu02s_PriceTW = $a8f1fgbu02s_PriceTW + $a8f1fgbu02sPriceTW;

                $a8f2fgbu10sPcsTW = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsTW = $a8f2fgbu10s_PcsTW + $a8f2fgbu10sPcsTW;

                $a8f2fgbu10sPriceTW = $a8f2fgbu10sPcsTW * $NumberTW;
                $a8f2fgbu10s_PriceTW = $a8f2fgbu10s_PriceTW + $a8f2fgbu10sPriceTW;

                $a8f2thbu05sPcsTW = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsTW = $a8f2thbu05s_PcsTW + $a8f2thbu05sPcsTW;

                $a8f2thbu05sPriceTW = $a8f2thbu05sPcsTW * $NumberTW;
                $a8f2thbu05s_PriceTW = $a8f2thbu05s_PriceTW + $a8f2thbu05sPriceTW;

                $a8f2debu10sPcsTW = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsTW = $a8f2debu10s_PcsTW + $a8f2debu10sPcsTW;

                $a8f2debu10sPriceTW = $a8f2debu10sPcsTW * $NumberTW;
                $a8f2debu10s_PriceTW = $a8f2debu10s_PriceTW + $a8f2debu10sPriceTW;

                $a8f2exbu11sPcsTW = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsTW = $a8f2exbu11s_PcsTW + $a8f2exbu11sPcsTW;

                $a8f2exbu11sPriceTW = $a8f2exbu11sPcsTW * $NumberTW;
                $a8f2exbu11s_PriceTW = $a8f2exbu11s_PriceTW + $a8f2exbu11sPriceTW;

                $a8f2twbu04sPcsTW = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsTW = $a8f2twbu04s_PcsTW + $a8f2twbu04sPcsTW;

                $a8f2twbu04sPriceTW = $a8f2twbu04sPcsTW * $NumberTW;
                $a8f2twbu04s_PriceTW = $a8f2twbu04s_PriceTW + $a8f2twbu04sPriceTW;

                $a8f2twbu07sPcsTW = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsTW = $a8f2twbu07s_PcsTW + $a8f2twbu07sPcsTW;

                $a8f2twbu07sPriceTW = $a8f2twbu07sPcsTW * $NumberTW;
                $a8f2twbu07s_PriceTW = $a8f2twbu07s_PriceTW + $a8f2twbu07sPriceTW;

                $a8f2cebu10sPcsTW = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsTW = $a8f2cebu10s_PcsTW + $a8f2cebu10sPcsTW;

                $a8f2cebu10sPriceTW = $a8f2cebu10sPcsTW * $NumberTW;
                $a8f2cebu10s_PriceTW = $a8f2cebu10s_PriceTW + $a8f2cebu10sPriceTW;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsTW = $row->dc1_s_Quantity;
                $DC1_PcsTW = $DC1_PcsTW + $DC1PcsTW;

                $DC1PriceTW = $DC1PcsTW * $NumberTW;
                $DC1_PriceTW = $DC1_PriceTW + $DC1PriceTW;

                $DCPPcsTW = $row->dcp_s_Quantity;
                $DCP_PcsTW = $DCP_PcsTW + $DCPPcsTW;

                $DCPPriceTW = $DCPPcsTW * $NumberTW;
                $DCP_PriceTW = $DCP_PriceTW + $DCPPriceTW;

                $DCYPcsTW = $row->dcy_s_Quantity;
                $DCY_PcsTW = $DCY_PcsTW + $DCYPcsTW;

                $DCYPriceTW = $DCYPcsTW * $NumberTW;
                $DCY_PriceTW = $DCY_PriceTW + $DCYPriceTW;

                $DEXPcsTW = $row->dex_s_Quantity;
                $DEX_PcsTW = $DEX_PcsTW + $DEXPcsTW;

                $DEXPriceTW = $DEXPcsTW * $NumberTW;
                $DEX_PriceTW = $DEX_PriceTW + $DEXPriceTW;
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "LN") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberLN = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberLN = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterLN = $row->PcsAfter;
                $Pcs_AfterLN = $Pcs_AfterLN + $PCSAfterLN;

                $PriceAfterLN = $row->PriceAfter;
                $Price_AfterLN = $Price_AfterLN + $PriceAfterLN;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsLN = $row->Po_Quantity;
                $Po_PcsLN = $Po_PcsLN + $PoPcsLN;

                $PoPriceLN = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceLN = $Po_PriceLN + $PoPriceLN;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsLN = $row->Neg_Quantity;
                $Neg_PcsLN = $Neg_PcsLN + $NegPcsLN;


                $NegPriceLN = $NumberLN * $row->Neg_Quantity;
                $Neg_PriceLN = $Neg_PriceLN + $NegPriceLN;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsLN = $PCSAfterLN + $PoPcsLN + $NegPcsLN;
                $BackChange_PcsLN = $BackChange_PcsLN + $BackChangePcsLN;

                $BackChangePriceLN = $PriceAfterLN + $PoPriceLN + $NegPriceLN;
                $BackChange_PriceLN = $BackChange_PriceLN + $BackChangePriceLN;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsLN = $row->purchase_Quantity;
                $Purchase_PcsLN = $Purchase_PcsLN + $PurchasePcsLN;

                $PurchasePriceLN = $row->purchase_Cost;
                $Purchase_PriceLN = $Purchase_PriceLN + $PurchasePriceLN;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsLN = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsLN = $ReciveTranfer_PcsLN + $ReciveTranferPcsLN;

                $ReciveTranferPriceLN = $ReciveTranferPcsLN * $row->PriceAvg;
                $ReciveTranfer_PriceLN = $ReciveTranfer_PriceLN + $ReciveTranferPriceLN;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityLN = $row->returncuses_Quantity;
                $ReturnItem_PCSLN = $ReturnItem_PCSLN + $ReturnItemQuantityLN;

                $ReturnItemPriceLN = $ReturnItemQuantityLN * $NumberLN;
                $ReturnItem_PriceLN = $ReturnItem_PriceLN + $ReturnItemPriceLN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsLN = $row->purchase_Quantity + $ReciveTranferPcsLN + $ReturnItemQuantityLN;
                $AllIn_PcsLN = $AllIn_PcsLN + $AllInPcsLN;

                $AllInPriceLN = $PurchasePriceLN + $ReciveTranferPriceLN + $ReturnItemPriceLN;
                $AllIn_PriceLN = $AllIn_PriceLN + $AllInPriceLN;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsLN = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsLN = $SendSale_PcsLN + $SendSalePcsLN;

                $sum = $BackChangePcsLN + $AllInPcsLN;
                if ($sum > 0) {
                    $SendSalePriceLN = (($AllInPriceLN + $BackChangePriceLN) / ($AllInPcsLN + $BackChangePcsLN)) * $SendSalePcsLN;
                    $SendSale_PriceLN = $SendSale_PriceLN + $SendSalePriceLN;
                }else{
                    $SendSalePriceLN = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsLN = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsLN = $ReciveTranOut_PcsLN + $ReciveTranOutPcsLN;

                $sum = $BackChangePcsLN + $AllInPcsLN;
                if ($sum > 0) {
                    $ReciveTranOutPriceLN = (($AllInPriceLN + $BackChangePriceLN) / ($AllInPcsLN + $BackChangePcsLN)) * $ReciveTranOutPcsLN;
                    $ReciveTranOut_PriceLN = $ReciveTranOut_PriceLN + $ReciveTranOutPriceLN;
                }else{
                    $ReciveTranOutPriceLN = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsLN = $row->returnitem_Quantity;
                $ReturnStore_PcsLN = $ReturnStore_PcsLN + $ReturnStorePcsLN;

                $sum = $BackChangePcsLN + $AllInPcsLN;
                if ($sum > 0) {
                    $ReturnStorePriceLN = (($AllInPriceLN + $BackChangePriceLN) / ($AllInPcsLN + $BackChangePcsLN)) * $ReturnStorePcsLN;
                    $ReturnStore_PriceLN = $ReturnStore_PriceLN + $ReturnStorePriceLN;
                }else{
                    $ReturnStorePriceLN = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsLN = $ReturnStorePcsLN + $ReciveTranOutPcsLN + $SendSalePcsLN;
                $AllOut_PcsLN = $AllOut_PcsLN + $AllOutPcsLN;

                $AllOutPriceLN = $SendSalePriceLN + $ReciveTranOutPriceLN + $ReturnStorePriceLN;
                $AllOut_PriceLN = $AllOut_PriceLN + $AllOutPriceLN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsLN = $BackChangePcsLN + $AllInPcsLN + $AllOutPcsLN;
                $Calculate_PcsLN = $Calculate_PcsLN + $CalculatePcsLN;

                $CalculatePriceLN = $BackChangePriceLN + $AllInPriceLN + $AllOutPriceLN;
                $Calculate_PriceLN = $Calculate_PriceLN + $CalculatePriceLN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsLN = $row->item_stock_Quantity;
                $NewCalculate_PcsLN = $NewCalculate_PcsLN + $NewCalculatePcsLN;

                $NewCalculatePriceLN = $row->item_stock_Amount;
                $NewCalculate_PriceLN = $NewCalculate_PriceLN + $NewCalculatePriceLN;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsLN = $NewCalculatePcsLN - $CalculatePcsLN;
                $Diff_PcsLN = $Diff_PcsLN + $DiffPcsLN;

                $DiffPriceLN = $NewCalculatePriceLN - $CalculatePriceLN;
                $Diff_PriceLN = $Diff_PriceLN + $DiffPriceLN;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsLN = $CalculatePcsLN;
                $NewTotal_PcsLN = $NewTotal_PcsLN + $CalculatePcsLN;

                $NewTotalPriceLN = $NewTotalPcsLN * $row->PriceAvg;
                $NewTotal_PriceLN = $NewTotal_PriceLN + $NewTotalPriceLN;

                $NewTotalDiffNavLN = $NewTotalPriceLN - $NewCalculatePriceLN;
                $NewTotalDiff_NavLN = $NewTotalDiff_NavLN + $NewTotalDiffNavLN;

                $NewTotalDiffCalLN = $NewTotalPriceLN - $CalculatePriceLN;
                $NewTotalDiff_CalLN = $NewTotalDiff_CalLN + $NewTotalDiffCalLN;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsLN = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsLN = $a7f1fgbu02s_PcsLN + $a7f1fgbu02sPcsLN;

                $a7f1fgbu02sPriceLN = $a7f1fgbu02sPcsLN * $row->PriceAvg;
                $a7f1fgbu02s_PriceLN = $a7f1fgbu02s_PriceLN + $a7f1fgbu02sPriceLN;

                $a7f2fgbu10sPcsLN = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsLN = $a7f2fgbu10s_PcsLN + $a7f2fgbu10sPcsLN;

                $a7f2fgbu10sPriceLN = $a7f2fgbu10sPcsLN * $row->PriceAvg;
                $a7f2fgbu10s_PriceLN = $a7f2fgbu10s_PriceLN + $a7f2fgbu10sPriceLN;

                $a7f2thbu05sPcsLN = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsLN = $a7f2thbu05s_PcsLN + $a7f2thbu05sPcsLN;

                $a7f2thbu05sPriceLN = $a7f2thbu05sPcsLN * $row->PriceAvg;
                $a7f2thbu05s_PriceLN = $a7f2thbu05s_PriceLN + $a7f2thbu05sPriceLN;

                $a7f2debu10sPcsLN = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsLN = $a7f2debu10s_PcsLN + $a7f2debu10sPcsLN;

                $a7f2debu10sPriceLN = $a7f2debu10sPcsLN * $row->PriceAvg;
                $a7f2debu10s_PriceLN = $a7f2debu10s_PriceLN + $a7f2debu10sPriceLN;

                $a7f2exbu11sPcsLN = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsLN = $a7f2exbu11s_PcsLN + $a7f2exbu11sPcsLN;

                $a7f2exbu11sPriceLN = $a7f2exbu11sPcsLN * $row->PriceAvg;
                $a7f2exbu11s_PriceLN = $a7f2exbu11s_PriceLN + $a7f2exbu11sPriceLN;

                $a7f2twbu04sPcsLN = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsLN = $a7f2twbu04s_PcsLN + $a7f2twbu04sPcsLN;

                $a7f2twbu04sPriceLN = $a7f2twbu04sPcsLN * $row->PriceAvg;
                $a7f2twbu04s_PriceLN = $a7f2twbu04s_PriceLN + $a7f2twbu04sPriceLN;

                $a7f2twbu07sPcsLN = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsLN = $a7f2twbu07s_PcsLN + $a7f2twbu07sPcsLN;

                $a7f2twbu07sPriceLN = $a7f2twbu07sPcsLN * $row->PriceAvg;
                $a7f2twbu07s_PriceLN = $a7f2twbu07s_PriceLN + $a7f2twbu07sPriceLN;

                $a7f2cebu10sPcsLN = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsLN = $a7f2cebu10s_PcsLN + $a7f2cebu10sPcsLN;

                $a7f2cebu10sPriceLN = $a7f2cebu10sPcsLN * $row->PriceAvg;
                $a7f2cebu10s_PriceLN = $a7f2cebu10s_PriceLN + $a7f2cebu10sPriceLN;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsLN = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsLN = $a8f1fgbu02s_PcsLN + $a8f1fgbu02sPcsLN;

                $a8f1fgbu02sPriceLN = $a8f1fgbu02sPcsLN * $NumberLN;
                $a8f1fgbu02s_PriceLN = $a8f1fgbu02s_PriceLN + $a8f1fgbu02sPriceLN;

                $a8f2fgbu10sPcsLN = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsLN = $a8f2fgbu10s_PcsLN + $a8f2fgbu10sPcsLN;

                $a8f2fgbu10sPriceLN = $a8f2fgbu10sPcsLN * $NumberLN;
                $a8f2fgbu10s_PriceLN = $a8f2fgbu10s_PriceLN + $a8f2fgbu10sPriceLN;

                $a8f2thbu05sPcsLN = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsLN = $a8f2thbu05s_PcsLN + $a8f2thbu05sPcsLN;

                $a8f2thbu05sPriceLN = $a8f2thbu05sPcsLN * $NumberLN;
                $a8f2thbu05s_PriceLN = $a8f2thbu05s_PriceLN + $a8f2thbu05sPriceLN;

                $a8f2debu10sPcsLN = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsLN = $a8f2debu10s_PcsLN + $a8f2debu10sPcsLN;

                $a8f2debu10sPriceLN = $a8f2debu10sPcsLN * $NumberLN;
                $a8f2debu10s_PriceLN = $a8f2debu10s_PriceLN + $a8f2debu10sPriceLN;

                $a8f2exbu11sPcsLN = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsLN = $a8f2exbu11s_PcsLN + $a8f2exbu11sPcsLN;

                $a8f2exbu11sPriceLN = $a8f2exbu11sPcsLN * $NumberLN;
                $a8f2exbu11s_PriceLN = $a8f2exbu11s_PriceLN + $a8f2exbu11sPriceLN;

                $a8f2twbu04sPcsLN = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsLN = $a8f2twbu04s_PcsLN + $a8f2twbu04sPcsLN;

                $a8f2twbu04sPriceLN = $a8f2twbu04sPcsLN * $NumberLN;
                $a8f2twbu04s_PriceLN = $a8f2twbu04s_PriceLN + $a8f2twbu04sPriceLN;

                $a8f2twbu07sPcsLN = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsLN = $a8f2twbu07s_PcsLN + $a8f2twbu07sPcsLN;

                $a8f2twbu07sPriceLN = $a8f2twbu07sPcsLN * $NumberLN;
                $a8f2twbu07s_PriceLN = $a8f2twbu07s_PriceLN + $a8f2twbu07sPriceLN;

                $a8f2cebu10sPcsLN = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsLN = $a8f2cebu10s_PcsLN + $a8f2cebu10sPcsLN;

                $a8f2cebu10sPriceLN = $a8f2cebu10sPcsLN * $NumberLN;
                $a8f2cebu10s_PriceLN = $a8f2cebu10s_PriceLN + $a8f2cebu10sPriceLN;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsLN = $row->dc1_s_Quantity;
                $DC1_PcsLN = $DC1_PcsLN + $DC1PcsLN;

                $DC1PriceLN = $DC1PcsLN * $NumberLN;
                $DC1_PriceLN = $DC1_PriceLN + $DC1PriceLN;

                $DCPPcsLN = $row->dcp_s_Quantity;
                $DCP_PcsLN = $DCP_PcsLN + $DCPPcsLN;

                $DCPPriceLN = $DCPPcsLN * $NumberLN;
                $DCP_PriceLN = $DCP_PriceLN + $DCPPriceLN;

                $DCYPcsLN = $row->dcy_s_Quantity;
                $DCY_PcsLN = $DCY_PcsLN + $DCYPcsLN;

                $DCYPriceLN = $DCYPcsLN * $NumberLN;
                $DCY_PriceLN = $DCY_PriceLN + $DCYPriceLN;

                $DEXPcsLN = $row->dex_s_Quantity;
                $DEX_PcsLN = $DEX_PcsLN + $DEXPcsLN;

                $DEXPriceLN = $DEXPcsLN * $NumberLN;
                $DEX_PriceLN = $DEX_PriceLN + $DEXPriceLN;
            }
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "AS" || $Code_1[0] == "RM" || $Code_1[0] == "RMT") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberAS = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberAS = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterAS = $row->PcsAfter;
                $Pcs_AfterAS = $Pcs_AfterAS + $PCSAfterAS;

                $PriceAfterAS = $row->PriceAfter;
                $Price_AfterAS = $Price_AfterAS + $PriceAfterAS;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsAS = $row->Po_Quantity;
                $Po_PcsAS = $Po_PcsAS + $PoPcsAS;

                $PoPriceAS = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceAS = $Po_PriceAS + $PoPriceAS;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsAS = $row->Neg_Quantity;
                $Neg_PcsAS = $Neg_PcsAS + $NegPcsAS;


                $NegPriceAS = $NumberAS * $row->Neg_Quantity;
                $Neg_PriceAS = $Neg_PriceAS + $NegPriceAS;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsAS = $PCSAfterAS + $PoPcsAS + $NegPcsAS;
                $BackChange_PcsAS = $BackChange_PcsAS + $BackChangePcsAS;

                $BackChangePriceAS = $PriceAfterAS + $PoPriceAS + $NegPriceAS;
                $BackChange_PriceAS = $BackChange_PriceAS + $BackChangePriceAS;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsAS = $row->purchase_Quantity;
                $Purchase_PcsAS = $Purchase_PcsAS + $PurchasePcsAS;

                $PurchasePriceAS = $row->purchase_Cost;
                $Purchase_PriceAS = $Purchase_PriceAS + $PurchasePriceAS;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsAS = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsAS = $ReciveTranfer_PcsAS + $ReciveTranferPcsAS;

                $ReciveTranferPriceAS = $ReciveTranferPcsAS * $row->PriceAvg;
                $ReciveTranfer_PriceAS = $ReciveTranfer_PriceAS + $ReciveTranferPriceAS;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityAS = $row->returncuses_Quantity;
                $ReturnItem_PCSAS = $ReturnItem_PCSAS + $ReturnItemQuantityAS;

                $ReturnItemPriceAS = $ReturnItemQuantityAS * $NumberAS;
                $ReturnItem_PriceAS = $ReturnItem_PriceAS + $ReturnItemPriceAS;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsAS = $row->purchase_Quantity + $ReciveTranferPcsAS + $ReturnItemQuantityAS;
                $AllIn_PcsAS = $AllIn_PcsAS + $AllInPcsAS;

                $AllInPriceAS = $PurchasePriceAS + $ReciveTranferPriceAS + $ReturnItemPriceAS;
                $AllIn_PriceAS = $AllIn_PriceAS + $AllInPriceAS;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsAS = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsAS = $SendSale_PcsAS + $SendSalePcsAS;

                $sum = $BackChangePcsAS + $AllInPcsAS;
                if ($sum > 0) {
                    $SendSalePriceAS = (($AllInPriceAS + $BackChangePriceAS) / ($AllInPcsAS + $BackChangePcsAS)) * $SendSalePcsAS;
                    $SendSale_PriceAS = $SendSale_PriceAS + $SendSalePriceAS;
                }else{
                    $SendSalePriceAS = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsAS = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsAS = $ReciveTranOut_PcsAS + $ReciveTranOutPcsAS;

                $sum = $BackChangePcsAS + $AllInPcsAS;
                if ($sum > 0) {
                    $ReciveTranOutPriceAS = (($AllInPriceAS + $BackChangePriceAS) / ($AllInPcsAS + $BackChangePcsAS)) * $ReciveTranOutPcsAS;
                    $ReciveTranOut_PriceAS = $ReciveTranOut_PriceAS + $ReciveTranOutPriceAS;
                }else{
                    $ReciveTranOutPriceAS = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsAS = $row->returnitem_Quantity;
                $ReturnStore_PcsAS = $ReturnStore_PcsAS + $ReturnStorePcsAS;

                $sum = $BackChangePcsAS + $AllInPcsAS;
                if ($sum > 0) {
                    $ReturnStorePriceAS = (($AllInPriceAS + $BackChangePriceAS) / ($AllInPcsAS + $BackChangePcsAS)) * $ReturnStorePcsAS;
                    $ReturnStore_PriceAS = $ReturnStore_PriceAS + $ReturnStorePriceAS;
                }else{
                    $ReturnStorePriceAS = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsAS = $ReturnStorePcsAS + $ReciveTranOutPcsAS + $SendSalePcsAS;
                $AllOut_PcsAS = $AllOut_PcsAS + $AllOutPcsAS;

                $AllOutPriceAS = $SendSalePriceAS + $ReciveTranOutPriceAS + $ReturnStorePriceAS;
                $AllOut_PriceAS = $AllOut_PriceAS + $AllOutPriceAS;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsAS = $BackChangePcsAS + $AllInPcsAS + $AllOutPcsAS;
                $Calculate_PcsAS = $Calculate_PcsAS + $CalculatePcsAS;

                $CalculatePriceAS = $BackChangePriceAS + $AllInPriceAS + $AllOutPriceAS;
                $Calculate_PriceAS = $Calculate_PriceAS + $CalculatePriceAS;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsAS = $row->item_stock_Quantity;
                $NewCalculate_PcsAS = $NewCalculate_PcsAS + $NewCalculatePcsAS;

                $NewCalculatePriceAS = $row->item_stock_Amount;
                $NewCalculate_PriceAS = $NewCalculate_PriceAS + $NewCalculatePriceAS;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsAS = $NewCalculatePcsAS - $CalculatePcsAS;
                $Diff_PcsAS = $Diff_PcsAS + $DiffPcsAS;

                $DiffPriceAS = $NewCalculatePriceAS - $CalculatePriceAS;
                $Diff_PriceAS = $Diff_PriceAS + $DiffPriceAS;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsAS = $CalculatePcsAS;
                $NewTotal_PcsAS = $NewTotal_PcsAS + $CalculatePcsAS;

                $NewTotalPriceAS = $NewTotalPcsAS * $row->PriceAvg;
                $NewTotal_PriceAS = $NewTotal_PriceAS + $NewTotalPriceAS;

                $NewTotalDiffNavAS = $NewTotalPriceAS - $NewCalculatePriceAS;
                $NewTotalDiff_NavAS = $NewTotalDiff_NavAS + $NewTotalDiffNavAS;

                $NewTotalDiffCalAS = $NewTotalPriceAS - $CalculatePriceAS;
                $NewTotalDiff_CalAS = $NewTotalDiff_CalAS + $NewTotalDiffCalAS;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsAS = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsAS = $a7f1fgbu02s_PcsAS + $a7f1fgbu02sPcsAS;

                $a7f1fgbu02sPriceAS = $a7f1fgbu02sPcsAS * $row->PriceAvg;
                $a7f1fgbu02s_PriceAS = $a7f1fgbu02s_PriceAS + $a7f1fgbu02sPriceAS;

                $a7f2fgbu10sPcsAS = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsAS = $a7f2fgbu10s_PcsAS + $a7f2fgbu10sPcsAS;

                $a7f2fgbu10sPriceAS = $a7f2fgbu10sPcsAS * $row->PriceAvg;
                $a7f2fgbu10s_PriceAS = $a7f2fgbu10s_PriceAS + $a7f2fgbu10sPriceAS;

                $a7f2thbu05sPcsAS = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsAS = $a7f2thbu05s_PcsAS + $a7f2thbu05sPcsAS;

                $a7f2thbu05sPriceAS = $a7f2thbu05sPcsAS * $row->PriceAvg;
                $a7f2thbu05s_PriceAS = $a7f2thbu05s_PriceAS + $a7f2thbu05sPriceAS;

                $a7f2debu10sPcsAS = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsAS = $a7f2debu10s_PcsAS + $a7f2debu10sPcsAS;

                $a7f2debu10sPriceAS = $a7f2debu10sPcsAS * $row->PriceAvg;
                $a7f2debu10s_PriceAS = $a7f2debu10s_PriceAS + $a7f2debu10sPriceAS;

                $a7f2exbu11sPcsAS = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsAS = $a7f2exbu11s_PcsAS + $a7f2exbu11sPcsAS;

                $a7f2exbu11sPriceAS = $a7f2exbu11sPcsAS * $row->PriceAvg;
                $a7f2exbu11s_PriceAS = $a7f2exbu11s_PriceAS + $a7f2exbu11sPriceAS;

                $a7f2twbu04sPcsAS = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsAS = $a7f2twbu04s_PcsAS + $a7f2twbu04sPcsAS;

                $a7f2twbu04sPriceAS = $a7f2twbu04sPcsAS * $row->PriceAvg;
                $a7f2twbu04s_PriceAS = $a7f2twbu04s_PriceAS + $a7f2twbu04sPriceAS;

                $a7f2twbu07sPcsAS = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsAS = $a7f2twbu07s_PcsAS + $a7f2twbu07sPcsAS;

                $a7f2twbu07sPriceAS = $a7f2twbu07sPcsAS * $row->PriceAvg;
                $a7f2twbu07s_PriceAS = $a7f2twbu07s_PriceAS + $a7f2twbu07sPriceAS;

                $a7f2cebu10sPcsAS = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsAS = $a7f2cebu10s_PcsAS + $a7f2cebu10sPcsAS;

                $a7f2cebu10sPriceAS = $a7f2cebu10sPcsAS * $row->PriceAvg;
                $a7f2cebu10s_PriceAS = $a7f2cebu10s_PriceAS + $a7f2cebu10sPriceAS;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsAS = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsAS = $a8f1fgbu02s_PcsAS + $a8f1fgbu02sPcsAS;

                $a8f1fgbu02sPriceAS = $a8f1fgbu02sPcsAS * $NumberAS;
                $a8f1fgbu02s_PriceAS = $a8f1fgbu02s_PriceAS + $a8f1fgbu02sPriceAS;

                $a8f2fgbu10sPcsAS = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsAS = $a8f2fgbu10s_PcsAS + $a8f2fgbu10sPcsAS;

                $a8f2fgbu10sPriceAS = $a8f2fgbu10sPcsAS * $NumberAS;
                $a8f2fgbu10s_PriceAS = $a8f2fgbu10s_PriceAS + $a8f2fgbu10sPriceAS;

                $a8f2thbu05sPcsAS = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsAS = $a8f2thbu05s_PcsAS + $a8f2thbu05sPcsAS;

                $a8f2thbu05sPriceAS = $a8f2thbu05sPcsAS * $NumberAS;
                $a8f2thbu05s_PriceAS = $a8f2thbu05s_PriceAS + $a8f2thbu05sPriceAS;

                $a8f2debu10sPcsAS = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsAS = $a8f2debu10s_PcsAS + $a8f2debu10sPcsAS;

                $a8f2debu10sPriceAS = $a8f2debu10sPcsAS * $NumberAS;
                $a8f2debu10s_PriceAS = $a8f2debu10s_PriceAS + $a8f2debu10sPriceAS;

                $a8f2exbu11sPcsAS = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsAS = $a8f2exbu11s_PcsAS + $a8f2exbu11sPcsAS;

                $a8f2exbu11sPriceAS = $a8f2exbu11sPcsAS * $NumberAS;
                $a8f2exbu11s_PriceAS = $a8f2exbu11s_PriceAS + $a8f2exbu11sPriceAS;

                $a8f2twbu04sPcsAS = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsAS = $a8f2twbu04s_PcsAS + $a8f2twbu04sPcsAS;

                $a8f2twbu04sPriceAS = $a8f2twbu04sPcsAS * $NumberAS;
                $a8f2twbu04s_PriceAS = $a8f2twbu04s_PriceAS + $a8f2twbu04sPriceAS;

                $a8f2twbu07sPcsAS = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsAS = $a8f2twbu07s_PcsAS + $a8f2twbu07sPcsAS;

                $a8f2twbu07sPriceAS = $a8f2twbu07sPcsAS * $NumberAS;
                $a8f2twbu07s_PriceAS = $a8f2twbu07s_PriceAS + $a8f2twbu07sPriceAS;

                $a8f2cebu10sPcsAS = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsAS = $a8f2cebu10s_PcsAS + $a8f2cebu10sPcsAS;

                $a8f2cebu10sPriceAS = $a8f2cebu10sPcsAS * $NumberAS;
                $a8f2cebu10s_PriceAS = $a8f2cebu10s_PriceAS + $a8f2cebu10sPriceAS;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsAS = $row->dc1_s_Quantity;
                $DC1_PcsAS = $DC1_PcsAS + $DC1PcsAS;

                $DC1PriceAS = $DC1PcsAS * $NumberAS;
                $DC1_PriceAS = $DC1_PriceAS + $DC1PriceAS;

                $DCPPcsAS = $row->dcp_s_Quantity;
                $DCP_PcsAS = $DCP_PcsAS + $DCPPcsAS;

                $DCPPriceAS = $DCPPcsAS * $NumberAS;
                $DCP_PriceAS = $DCP_PriceAS + $DCPPriceAS;

                $DCYPcsAS = $row->dcy_s_Quantity;
                $DCY_PcsAS = $DCY_PcsAS + $DCYPcsAS;

                $DCYPriceAS = $DCYPcsAS * $NumberAS;
                $DCY_PriceAS = $DCY_PriceAS + $DCYPriceAS;

                $DEXPcsAS = $row->dex_s_Quantity;
                $DEX_PcsAS = $DEX_PcsAS + $DEXPcsAS;

                $DEXPriceAS = $DEXPcsAS * $NumberAS;
                $DEX_PriceAS = $DEX_PriceAS + $DEXPriceAS;
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "STW") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1" || $row->Customer == "")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSTW = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSTW = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSTW = $row->PcsAfter;
                $Pcs_AfterSTW = $Pcs_AfterSTW + $PCSAfterSTW;

                $PriceAfterSTW = $row->PriceAfter;
                $Price_AfterSTW = $Price_AfterSTW + $PriceAfterSTW;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSTW = $row->Po_Quantity;
                $Po_PcsSTW = $Po_PcsSTW + $PoPcsSTW;

                $PoPriceSTW = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSTW = $Po_PriceSTW + $PoPriceSTW;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSTW = $row->Neg_Quantity;
                $Neg_PcsSTW = $Neg_PcsSTW + $NegPcsSTW;


                $NegPriceSTW = $NumberSTW * $row->Neg_Quantity;
                $Neg_PriceSTW = $Neg_PriceSTW + $NegPriceSTW;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSTW = $PCSAfterSTW + $PoPcsSTW + $NegPcsSTW;
                $BackChange_PcsSTW = $BackChange_PcsSTW + $BackChangePcsSTW;

                $BackChangePriceSTW = $PriceAfterSTW + $PoPriceSTW + $NegPriceSTW;
                $BackChange_PriceSTW = $BackChange_PriceSTW + $BackChangePriceSTW;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSTW = $row->purchase_Quantity;
                $Purchase_PcsSTW = $Purchase_PcsSTW + $PurchasePcsSTW;

                $PurchasePriceSTW = $row->purchase_Cost;
                $Purchase_PriceSTW = $Purchase_PriceSTW + $PurchasePriceSTW;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSTW = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSTW = $ReciveTranfer_PcsSTW + $ReciveTranferPcsSTW;

                $ReciveTranferPriceSTW = $ReciveTranferPcsSTW * $row->PriceAvg;
                $ReciveTranfer_PriceSTW = $ReciveTranfer_PriceSTW + $ReciveTranferPriceSTW;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySTW = $row->returncuses_Quantity;
                $ReturnItem_PCSSTW = $ReturnItem_PCSSTW + $ReturnItemQuantitySTW;

                $ReturnItemPriceSTW = $ReturnItemQuantitySTW * $NumberSTW;
                $ReturnItem_PriceSTW = $ReturnItem_PriceSTW + $ReturnItemPriceSTW;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSTW = $row->purchase_Quantity + $ReciveTranferPcsSTW + $ReturnItemQuantitySTW;
                $AllIn_PcsSTW = $AllIn_PcsSTW + $AllInPcsSTW;

                $AllInPriceSTW = $PurchasePriceSTW + $ReciveTranferPriceSTW + $ReturnItemPriceSTW;
                $AllIn_PriceSTW = $AllIn_PriceSTW + $AllInPriceSTW;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSTW = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSTW = $SendSale_PcsSTW + $SendSalePcsSTW;

                $sum = $BackChangePcsSTW + $AllInPcsSTW;
                if ($sum > 0) {
                    $SendSalePriceSTW = (($AllInPriceSTW + $BackChangePriceSTW) / ($AllInPcsSTW + $BackChangePcsSTW)) * $SendSalePcsSTW;
                    $SendSale_PriceSTW = $SendSale_PriceSTW + $SendSalePriceSTW;
                }else{
                    $SendSalePriceSTW = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSTW = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSTW = $ReciveTranOut_PcsSTW + $ReciveTranOutPcsSTW;

                $sum = $BackChangePcsSTW + $AllInPcsSTW;
                if ($sum > 0) {
                    $ReciveTranOutPriceSTW = (($AllInPriceSTW + $BackChangePriceSTW) / ($AllInPcsSTW + $BackChangePcsSTW)) * $ReciveTranOutPcsSTW;
                    $ReciveTranOut_PriceSTW = $ReciveTranOut_PriceSTW + $ReciveTranOutPriceSTW;
                }else{
                    $ReciveTranOutPriceSTW = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSTW = $row->returnitem_Quantity;
                $ReturnStore_PcsSTW = $ReturnStore_PcsSTW + $ReturnStorePcsSTW;

                $sum = $BackChangePcsSTW + $AllInPcsSTW;
                if ($sum > 0) {
                    $ReturnStorePriceSTW = (($AllInPriceSTW + $BackChangePriceSTW) / ($AllInPcsSTW + $BackChangePcsSTW)) * $ReturnStorePcsSTW;
                    $ReturnStore_PriceSTW = $ReturnStore_PriceSTW + $ReturnStorePriceSTW;
                }else{
                    $ReturnStorePriceSTW = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSTW = $ReturnStorePcsSTW + $ReciveTranOutPcsSTW + $SendSalePcsSTW;
                $AllOut_PcsSTW = $AllOut_PcsSTW + $AllOutPcsSTW;

                $AllOutPriceSTW = $SendSalePriceSTW + $ReciveTranOutPriceSTW + $ReturnStorePriceSTW;
                $AllOut_PriceSTW = $AllOut_PriceSTW + $AllOutPriceSTW;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSTW = $BackChangePcsSTW + $AllInPcsSTW + $AllOutPcsSTW;
                $Calculate_PcsSTW = $Calculate_PcsSTW + $CalculatePcsSTW;

                $CalculatePriceSTW = $BackChangePriceSTW + $AllInPriceSTW + $AllOutPriceSTW;
                $Calculate_PriceSTW = $Calculate_PriceSTW + $CalculatePriceSTW;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSTW = $row->item_stock_Quantity;
                $NewCalculate_PcsSTW = $NewCalculate_PcsSTW + $NewCalculatePcsSTW;

                $NewCalculatePriceSTW = $row->item_stock_Amount;
                $NewCalculate_PriceSTW = $NewCalculate_PriceSTW + $NewCalculatePriceSTW;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSTW = $NewCalculatePcsSTW - $CalculatePcsSTW;
                $Diff_PcsSTW = $Diff_PcsSTW + $DiffPcsSTW;

                $DiffPriceSTW = $NewCalculatePriceSTW - $CalculatePriceSTW;
                $Diff_PriceSTW = $Diff_PriceSTW + $DiffPriceSTW;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSTW = $CalculatePcsSTW;
                $NewTotal_PcsSTW = $NewTotal_PcsSTW + $CalculatePcsSTW;

                $NewTotalPriceSTW = $NewTotalPcsSTW * $row->PriceAvg;
                $NewTotal_PriceSTW = $NewTotal_PriceSTW + $NewTotalPriceSTW;

                $NewTotalDiffNavSTW = $NewTotalPriceSTW - $NewCalculatePriceSTW;
                $NewTotalDiff_NavSTW = $NewTotalDiff_NavSTW + $NewTotalDiffNavSTW;

                $NewTotalDiffCalSTW = $NewTotalPriceSTW - $CalculatePriceSTW;
                $NewTotalDiff_CalSTW = $NewTotalDiff_CalSTW + $NewTotalDiffCalSTW;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSTW = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSTW = $a7f1fgbu02s_PcsSTW + $a7f1fgbu02sPcsSTW;

                $a7f1fgbu02sPriceSTW = $a7f1fgbu02sPcsSTW * $row->PriceAvg;
                $a7f1fgbu02s_PriceSTW = $a7f1fgbu02s_PriceSTW + $a7f1fgbu02sPriceSTW;

                $a7f2fgbu10sPcsSTW = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSTW = $a7f2fgbu10s_PcsSTW + $a7f2fgbu10sPcsSTW;

                $a7f2fgbu10sPriceSTW = $a7f2fgbu10sPcsSTW * $row->PriceAvg;
                $a7f2fgbu10s_PriceSTW = $a7f2fgbu10s_PriceSTW + $a7f2fgbu10sPriceSTW;

                $a7f2thbu05sPcsSTW = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSTW = $a7f2thbu05s_PcsSTW + $a7f2thbu05sPcsSTW;

                $a7f2thbu05sPriceSTW = $a7f2thbu05sPcsSTW * $row->PriceAvg;
                $a7f2thbu05s_PriceSTW = $a7f2thbu05s_PriceSTW + $a7f2thbu05sPriceSTW;

                $a7f2debu10sPcsSTW = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSTW = $a7f2debu10s_PcsSTW + $a7f2debu10sPcsSTW;

                $a7f2debu10sPriceSTW = $a7f2debu10sPcsSTW * $row->PriceAvg;
                $a7f2debu10s_PriceSTW = $a7f2debu10s_PriceSTW + $a7f2debu10sPriceSTW;

                $a7f2exbu11sPcsSTW = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSTW = $a7f2exbu11s_PcsSTW + $a7f2exbu11sPcsSTW;

                $a7f2exbu11sPriceSTW = $a7f2exbu11sPcsSTW * $row->PriceAvg;
                $a7f2exbu11s_PriceSTW = $a7f2exbu11s_PriceSTW + $a7f2exbu11sPriceSTW;

                $a7f2twbu04sPcsSTW = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSTW = $a7f2twbu04s_PcsSTW + $a7f2twbu04sPcsSTW;

                $a7f2twbu04sPriceSTW = $a7f2twbu04sPcsSTW * $row->PriceAvg;
                $a7f2twbu04s_PriceSTW = $a7f2twbu04s_PriceSTW + $a7f2twbu04sPriceSTW;

                $a7f2twbu07sPcsSTW = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSTW = $a7f2twbu07s_PcsSTW + $a7f2twbu07sPcsSTW;

                $a7f2twbu07sPriceSTW = $a7f2twbu07sPcsSTW * $row->PriceAvg;
                $a7f2twbu07s_PriceSTW = $a7f2twbu07s_PriceSTW + $a7f2twbu07sPriceSTW;

                $a7f2cebu10sPcsSTW = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSTW = $a7f2cebu10s_PcsSTW + $a7f2cebu10sPcsSTW;

                $a7f2cebu10sPriceSTW = $a7f2cebu10sPcsSTW * $row->PriceAvg;
                $a7f2cebu10s_PriceSTW = $a7f2cebu10s_PriceSTW + $a7f2cebu10sPriceSTW;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSTW = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSTW = $a8f1fgbu02s_PcsSTW + $a8f1fgbu02sPcsSTW;

                $a8f1fgbu02sPriceSTW = $a8f1fgbu02sPcsSTW * $NumberSTW;
                $a8f1fgbu02s_PriceSTW = $a8f1fgbu02s_PriceSTW + $a8f1fgbu02sPriceSTW;

                $a8f2fgbu10sPcsSTW = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSTW = $a8f2fgbu10s_PcsSTW + $a8f2fgbu10sPcsSTW;

                $a8f2fgbu10sPriceSTW = $a8f2fgbu10sPcsSTW * $NumberSTW;
                $a8f2fgbu10s_PriceSTW = $a8f2fgbu10s_PriceSTW + $a8f2fgbu10sPriceSTW;

                $a8f2thbu05sPcsSTW = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSTW = $a8f2thbu05s_PcsSTW + $a8f2thbu05sPcsSTW;

                $a8f2thbu05sPriceSTW = $a8f2thbu05sPcsSTW * $NumberSTW;
                $a8f2thbu05s_PriceSTW = $a8f2thbu05s_PriceSTW + $a8f2thbu05sPriceSTW;

                $a8f2debu10sPcsSTW = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSTW = $a8f2debu10s_PcsSTW + $a8f2debu10sPcsSTW;

                $a8f2debu10sPriceSTW = $a8f2debu10sPcsSTW * $NumberSTW;
                $a8f2debu10s_PriceSTW = $a8f2debu10s_PriceSTW + $a8f2debu10sPriceSTW;

                $a8f2exbu11sPcsSTW = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSTW = $a8f2exbu11s_PcsSTW + $a8f2exbu11sPcsSTW;

                $a8f2exbu11sPriceSTW = $a8f2exbu11sPcsSTW * $NumberSTW;
                $a8f2exbu11s_PriceSTW = $a8f2exbu11s_PriceSTW + $a8f2exbu11sPriceSTW;

                $a8f2twbu04sPcsSTW = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSTW = $a8f2twbu04s_PcsSTW + $a8f2twbu04sPcsSTW;

                $a8f2twbu04sPriceSTW = $a8f2twbu04sPcsSTW * $NumberSTW;
                $a8f2twbu04s_PriceSTW = $a8f2twbu04s_PriceSTW + $a8f2twbu04sPriceSTW;

                $a8f2twbu07sPcsSTW = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSTW = $a8f2twbu07s_PcsSTW + $a8f2twbu07sPcsSTW;

                $a8f2twbu07sPriceSTW = $a8f2twbu07sPcsSTW * $NumberSTW;
                $a8f2twbu07s_PriceSTW = $a8f2twbu07s_PriceSTW + $a8f2twbu07sPriceSTW;

                $a8f2cebu10sPcsSTW = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSTW = $a8f2cebu10s_PcsSTW + $a8f2cebu10sPcsSTW;

                $a8f2cebu10sPriceSTW = $a8f2cebu10sPcsSTW * $NumberSTW;
                $a8f2cebu10s_PriceSTW = $a8f2cebu10s_PriceSTW + $a8f2cebu10sPriceSTW;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSTW = $row->dc1_s_Quantity;
                $DC1_PcsSTW = $DC1_PcsSTW + $DC1PcsSTW;

                $DC1PriceSTW = $DC1PcsSTW * $NumberSTW;
                $DC1_PriceSTW = $DC1_PriceSTW + $DC1PriceSTW;

                $DCPPcsSTW = $row->dcp_s_Quantity;
                $DCP_PcsSTW = $DCP_PcsSTW + $DCPPcsSTW;

                $DCPPriceSTW = $DCPPcsSTW * $NumberSTW;
                $DCP_PriceSTW = $DCP_PriceSTW + $DCPPriceSTW;

                $DCYPcsSTW = $row->dcy_s_Quantity;
                $DCY_PcsSTW = $DCY_PcsSTW + $DCYPcsSTW;

                $DCYPriceSTW = $DCYPcsSTW * $NumberSTW;
                $DCY_PriceSTW = $DCY_PriceSTW + $DCYPriceSTW;

                $DEXPcsSTW = $row->dex_s_Quantity;
                $DEX_PcsSTW = $DEX_PcsSTW + $DEXPcsSTW;

                $DEXPriceSTW = $DEXPcsSTW * $NumberSTW;
                $DEX_PriceSTW = $DEX_PriceSTW + $DEXPriceSTW;
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "SLN") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSLN = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSLN = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSLN = $row->PcsAfter;
                $Pcs_AfterSLN = $Pcs_AfterSLN + $PCSAfterSLN;

                $PriceAfterSLN = $row->PriceAfter;
                $Price_AfterSLN = $Price_AfterSLN + $PriceAfterSLN;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSLN = $row->Po_Quantity;
                $Po_PcsSLN = $Po_PcsSLN + $PoPcsSLN;

                $PoPriceSLN = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSLN = $Po_PriceSLN + $PoPriceSLN;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSLN = $row->Neg_Quantity;
                $Neg_PcsSLN = $Neg_PcsSLN + $NegPcsSLN;


                $NegPriceSLN = $NumberSLN * $row->Neg_Quantity;
                $Neg_PriceSLN = $Neg_PriceSLN + $NegPriceSLN;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSLN = $PCSAfterSLN + $PoPcsSLN + $NegPcsSLN;
                $BackChange_PcsSLN = $BackChange_PcsSLN + $BackChangePcsSLN;

                $BackChangePriceSLN = $PriceAfterSLN + $PoPriceSLN + $NegPriceSLN;
                $BackChange_PriceSLN = $BackChange_PriceSLN + $BackChangePriceSLN;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSLN = $row->purchase_Quantity;
                $Purchase_PcsSLN = $Purchase_PcsSLN + $PurchasePcsSLN;

                $PurchasePriceSLN = $row->purchase_Cost;
                $Purchase_PriceSLN = $Purchase_PriceSLN + $PurchasePriceSLN;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSLN = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSLN = $ReciveTranfer_PcsSLN + $ReciveTranferPcsSLN;

                $ReciveTranferPriceSLN = $ReciveTranferPcsSLN * $row->PriceAvg;
                $ReciveTranfer_PriceSLN = $ReciveTranfer_PriceSLN + $ReciveTranferPriceSLN;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySLN = $row->returncuses_Quantity;
                $ReturnItem_PCSSLN = $ReturnItem_PCSSLN + $ReturnItemQuantitySLN;

                $ReturnItemPriceSLN = $ReturnItemQuantitySLN * $NumberSLN;
                $ReturnItem_PriceSLN = $ReturnItem_PriceSLN + $ReturnItemPriceSLN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSLN = $row->purchase_Quantity + $ReciveTranferPcsSLN + $ReturnItemQuantitySLN;
                $AllIn_PcsSLN = $AllIn_PcsSLN + $AllInPcsSLN;

                $AllInPriceSLN = $PurchasePriceSLN + $ReciveTranferPriceSLN + $ReturnItemPriceSLN;
                $AllIn_PriceSLN = $AllIn_PriceSLN + $AllInPriceSLN;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSLN = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSLN = $SendSale_PcsSLN + $SendSalePcsSLN;

                $sum = $BackChangePcsSLN + $AllInPcsSLN;
                if ($sum > 0) {
                    $SendSalePriceSLN = (($AllInPriceSLN + $BackChangePriceSLN) / ($AllInPcsSLN + $BackChangePcsSLN)) * $SendSalePcsSLN;
                    $SendSale_PriceSLN = $SendSale_PriceSLN + $SendSalePriceSLN;
                }else{
                    $SendSalePriceSLN = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSLN = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSLN = $ReciveTranOut_PcsSLN + $ReciveTranOutPcsSLN;

                $sum = $BackChangePcsSLN + $AllInPcsSLN;
                if ($sum > 0) {
                    $ReciveTranOutPriceSLN = (($AllInPriceSLN + $BackChangePriceSLN) / ($AllInPcsSLN + $BackChangePcsSLN)) * $ReciveTranOutPcsSLN;
                    $ReciveTranOut_PriceSLN = $ReciveTranOut_PriceSLN + $ReciveTranOutPriceSLN;
                }else{
                    $ReciveTranOutPriceSLN = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSLN = $row->returnitem_Quantity;
                $ReturnStore_PcsSLN = $ReturnStore_PcsSLN + $ReturnStorePcsSLN;

                $sum = $BackChangePcsSLN + $AllInPcsSLN;
                if ($sum > 0) {
                    $ReturnStorePriceSLN = (($AllInPriceSLN + $BackChangePriceSLN) / ($AllInPcsSLN + $BackChangePcsSLN)) * $ReturnStorePcsSLN;
                    $ReturnStore_PriceSLN = $ReturnStore_PriceSLN + $ReturnStorePriceSLN;
                }else{
                    $ReturnStorePriceSLN = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSLN = $ReturnStorePcsSLN + $ReciveTranOutPcsSLN + $SendSalePcsSLN;
                $AllOut_PcsSLN = $AllOut_PcsSLN + $AllOutPcsSLN;

                $AllOutPriceSLN = $SendSalePriceSLN + $ReciveTranOutPriceSLN + $ReturnStorePriceSLN;
                $AllOut_PriceSLN = $AllOut_PriceSLN + $AllOutPriceSLN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSLN = $BackChangePcsSLN + $AllInPcsSLN + $AllOutPcsSLN;
                $Calculate_PcsSLN = $Calculate_PcsSLN + $CalculatePcsSLN;

                $CalculatePriceSLN = $BackChangePriceSLN + $AllInPriceSLN + $AllOutPriceSLN;
                $Calculate_PriceSLN = $Calculate_PriceSLN + $CalculatePriceSLN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSLN = $row->item_stock_Quantity;
                $NewCalculate_PcsSLN = $NewCalculate_PcsSLN + $NewCalculatePcsSLN;

                $NewCalculatePriceSLN = $row->item_stock_Amount;
                $NewCalculate_PriceSLN = $NewCalculate_PriceSLN + $NewCalculatePriceSLN;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSLN = $NewCalculatePcsSLN - $CalculatePcsSLN;
                $Diff_PcsSLN = $Diff_PcsSLN + $DiffPcsSLN;

                $DiffPriceSLN = $NewCalculatePriceSLN - $CalculatePriceSLN;
                $Diff_PriceSLN = $Diff_PriceSLN + $DiffPriceSLN;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSLN = $CalculatePcsSLN;
                $NewTotal_PcsSLN = $NewTotal_PcsSLN + $CalculatePcsSLN;

                $NewTotalPriceSLN = $NewTotalPcsSLN * $row->PriceAvg;
                $NewTotal_PriceSLN = $NewTotal_PriceSLN + $NewTotalPriceSLN;

                $NewTotalDiffNavSLN = $NewTotalPriceSLN - $NewCalculatePriceSLN;
                $NewTotalDiff_NavSLN = $NewTotalDiff_NavSLN + $NewTotalDiffNavSLN;

                $NewTotalDiffCalSLN = $NewTotalPriceSLN - $CalculatePriceSLN;
                $NewTotalDiff_CalSLN = $NewTotalDiff_CalSLN + $NewTotalDiffCalSLN;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSLN = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSLN = $a7f1fgbu02s_PcsSLN + $a7f1fgbu02sPcsSLN;

                $a7f1fgbu02sPriceSLN = $a7f1fgbu02sPcsSLN * $row->PriceAvg;
                $a7f1fgbu02s_PriceSLN = $a7f1fgbu02s_PriceSLN + $a7f1fgbu02sPriceSLN;

                $a7f2fgbu10sPcsSLN = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSLN = $a7f2fgbu10s_PcsSLN + $a7f2fgbu10sPcsSLN;

                $a7f2fgbu10sPriceSLN = $a7f2fgbu10sPcsSLN * $row->PriceAvg;
                $a7f2fgbu10s_PriceSLN = $a7f2fgbu10s_PriceSLN + $a7f2fgbu10sPriceSLN;

                $a7f2thbu05sPcsSLN = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSLN = $a7f2thbu05s_PcsSLN + $a7f2thbu05sPcsSLN;

                $a7f2thbu05sPriceSLN = $a7f2thbu05sPcsSLN * $row->PriceAvg;
                $a7f2thbu05s_PriceSLN = $a7f2thbu05s_PriceSLN + $a7f2thbu05sPriceSLN;

                $a7f2debu10sPcsSLN = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSLN = $a7f2debu10s_PcsSLN + $a7f2debu10sPcsSLN;

                $a7f2debu10sPriceSLN = $a7f2debu10sPcsSLN * $row->PriceAvg;
                $a7f2debu10s_PriceSLN = $a7f2debu10s_PriceSLN + $a7f2debu10sPriceSLN;

                $a7f2exbu11sPcsSLN = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSLN = $a7f2exbu11s_PcsSLN + $a7f2exbu11sPcsSLN;

                $a7f2exbu11sPriceSLN = $a7f2exbu11sPcsSLN * $row->PriceAvg;
                $a7f2exbu11s_PriceSLN = $a7f2exbu11s_PriceSLN + $a7f2exbu11sPriceSLN;

                $a7f2twbu04sPcsSLN = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSLN = $a7f2twbu04s_PcsSLN + $a7f2twbu04sPcsSLN;

                $a7f2twbu04sPriceSLN = $a7f2twbu04sPcsSLN * $row->PriceAvg;
                $a7f2twbu04s_PriceSLN = $a7f2twbu04s_PriceSLN + $a7f2twbu04sPriceSLN;

                $a7f2twbu07sPcsSLN = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSLN = $a7f2twbu07s_PcsSLN + $a7f2twbu07sPcsSLN;

                $a7f2twbu07sPriceSLN = $a7f2twbu07sPcsSLN * $row->PriceAvg;
                $a7f2twbu07s_PriceSLN = $a7f2twbu07s_PriceSLN + $a7f2twbu07sPriceSLN;

                $a7f2cebu10sPcsSLN = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSLN = $a7f2cebu10s_PcsSLN + $a7f2cebu10sPcsSLN;

                $a7f2cebu10sPriceSLN = $a7f2cebu10sPcsSLN * $row->PriceAvg;
                $a7f2cebu10s_PriceSLN = $a7f2cebu10s_PriceSLN + $a7f2cebu10sPriceSLN;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSLN = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSLN = $a8f1fgbu02s_PcsSLN + $a8f1fgbu02sPcsSLN;

                $a8f1fgbu02sPriceSLN = $a8f1fgbu02sPcsSLN * $NumberSLN;
                $a8f1fgbu02s_PriceSLN = $a8f1fgbu02s_PriceSLN + $a8f1fgbu02sPriceSLN;

                $a8f2fgbu10sPcsSLN = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSLN = $a8f2fgbu10s_PcsSLN + $a8f2fgbu10sPcsSLN;

                $a8f2fgbu10sPriceSLN = $a8f2fgbu10sPcsSLN * $NumberSLN;
                $a8f2fgbu10s_PriceSLN = $a8f2fgbu10s_PriceSLN + $a8f2fgbu10sPriceSLN;

                $a8f2thbu05sPcsSLN = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSLN = $a8f2thbu05s_PcsSLN + $a8f2thbu05sPcsSLN;

                $a8f2thbu05sPriceSLN = $a8f2thbu05sPcsSLN * $NumberSLN;
                $a8f2thbu05s_PriceSLN = $a8f2thbu05s_PriceSLN + $a8f2thbu05sPriceSLN;

                $a8f2debu10sPcsSLN = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSLN = $a8f2debu10s_PcsSLN + $a8f2debu10sPcsSLN;

                $a8f2debu10sPriceSLN = $a8f2debu10sPcsSLN * $NumberSLN;
                $a8f2debu10s_PriceSLN = $a8f2debu10s_PriceSLN + $a8f2debu10sPriceSLN;

                $a8f2exbu11sPcsSLN = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSLN = $a8f2exbu11s_PcsSLN + $a8f2exbu11sPcsSLN;

                $a8f2exbu11sPriceSLN = $a8f2exbu11sPcsSLN * $NumberSLN;
                $a8f2exbu11s_PriceSLN = $a8f2exbu11s_PriceSLN + $a8f2exbu11sPriceSLN;

                $a8f2twbu04sPcsSLN = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSLN = $a8f2twbu04s_PcsSLN + $a8f2twbu04sPcsSLN;

                $a8f2twbu04sPriceSLN = $a8f2twbu04sPcsSLN * $NumberSLN;
                $a8f2twbu04s_PriceSLN = $a8f2twbu04s_PriceSLN + $a8f2twbu04sPriceSLN;

                $a8f2twbu07sPcsSLN = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSLN = $a8f2twbu07s_PcsSLN + $a8f2twbu07sPcsSLN;

                $a8f2twbu07sPriceSLN = $a8f2twbu07sPcsSLN * $NumberSLN;
                $a8f2twbu07s_PriceSLN = $a8f2twbu07s_PriceSLN + $a8f2twbu07sPriceSLN;

                $a8f2cebu10sPcsSLN = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSLN = $a8f2cebu10s_PcsSLN + $a8f2cebu10sPcsSLN;

                $a8f2cebu10sPriceSLN = $a8f2cebu10sPcsSLN * $NumberSLN;
                $a8f2cebu10s_PriceSLN = $a8f2cebu10s_PriceSLN + $a8f2cebu10sPriceSLN;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSLN = $row->dc1_s_Quantity;
                $DC1_PcsSLN = $DC1_PcsSLN + $DC1PcsSLN;

                $DC1PriceSLN = $DC1PcsSLN * $NumberSLN;
                $DC1_PriceSLN = $DC1_PriceSLN + $DC1PriceSLN;

                $DCPPcsSLN = $row->dcp_s_Quantity;
                $DCP_PcsSLN = $DCP_PcsSLN + $DCPPcsSLN;

                $DCPPriceSLN = $DCPPcsSLN * $NumberSLN;
                $DCP_PriceSLN = $DCP_PriceSLN + $DCPPriceSLN;

                $DCYPcsSLN = $row->dcy_s_Quantity;
                $DCY_PcsSLN = $DCY_PcsSLN + $DCYPcsSLN;

                $DCYPriceSLN = $DCYPcsSLN * $NumberSLN;
                $DCY_PriceSLN = $DCY_PriceSLN + $DCYPriceSLN;

                $DEXPcsSLN = $row->dex_s_Quantity;
                $DEX_PcsSLN = $DEX_PcsSLN + $DEXPcsSLN;

                $DEXPriceSLN = $DEXPcsSLN * $NumberSLN;
                $DEX_PriceSLN = $DEX_PriceSLN + $DEXPriceSLN;
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "FN") || ($Code_1[0] == "SFN") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSFN = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSFN = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSFN = $row->PcsAfter;
                $Pcs_AfterSFN = $Pcs_AfterSFN + $PCSAfterSFN;

                $PriceAfterSFN = $row->PriceAfter;
                $Price_AfterSFN = $Price_AfterSFN + $PriceAfterSFN;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSFN = $row->Po_Quantity;
                $Po_PcsSFN = $Po_PcsSFN + $PoPcsSFN;

                $PoPriceSFN = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSFN = $Po_PriceSFN + $PoPriceSFN;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSFN = $row->Neg_Quantity;
                $Neg_PcsSFN = $Neg_PcsSFN + $NegPcsSFN;


                $NegPriceSFN = $NumberSFN * $row->Neg_Quantity;
                $Neg_PriceSFN = $Neg_PriceSFN + $NegPriceSFN;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSFN = $PCSAfterSFN + $PoPcsSFN + $NegPcsSFN;
                $BackChange_PcsSFN = $BackChange_PcsSFN + $BackChangePcsSFN;

                $BackChangePriceSFN = $PriceAfterSFN + $PoPriceSFN + $NegPriceSFN;
                $BackChange_PriceSFN = $BackChange_PriceSFN + $BackChangePriceSFN;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSFN = $row->purchase_Quantity;
                $Purchase_PcsSFN = $Purchase_PcsSFN + $PurchasePcsSFN;

                $PurchasePriceSFN = $row->purchase_Cost;
                $Purchase_PriceSFN = $Purchase_PriceSFN + $PurchasePriceSFN;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSFN = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSFN = $ReciveTranfer_PcsSFN + $ReciveTranferPcsSFN;

                $ReciveTranferPriceSFN = $ReciveTranferPcsSFN * $row->PriceAvg;
                $ReciveTranfer_PriceSFN = $ReciveTranfer_PriceSFN + $ReciveTranferPriceSFN;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySFN = $row->returncuses_Quantity;
                $ReturnItem_PCSSFN = $ReturnItem_PCSSFN + $ReturnItemQuantitySFN;

                $ReturnItemPriceSFN = $ReturnItemQuantitySFN * $NumberSFN;
                $ReturnItem_PriceSFN = $ReturnItem_PriceSFN + $ReturnItemPriceSFN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSFN = $row->purchase_Quantity + $ReciveTranferPcsSFN + $ReturnItemQuantitySFN;
                $AllIn_PcsSFN = $AllIn_PcsSFN + $AllInPcsSFN;

                $AllInPriceSFN = $PurchasePriceSFN + $ReciveTranferPriceSFN + $ReturnItemPriceSFN;
                $AllIn_PriceSFN = $AllIn_PriceSFN + $AllInPriceSFN;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSFN = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSFN = $SendSale_PcsSFN + $SendSalePcsSFN;

                $sum = $BackChangePcsSFN + $AllInPcsSFN;
                if ($sum > 0) {
                    $SendSalePriceSFN = (($AllInPriceSFN + $BackChangePriceSFN) / ($AllInPcsSFN + $BackChangePcsSFN)) * $SendSalePcsSFN;
                    $SendSale_PriceSFN = $SendSale_PriceSFN + $SendSalePriceSFN;
                }else{
                    $SendSalePriceSFN = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSFN = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSFN = $ReciveTranOut_PcsSFN + $ReciveTranOutPcsSFN;

                $sum = $BackChangePcsSFN + $AllInPcsSFN;
                if ($sum > 0) {
                    $ReciveTranOutPriceSFN = (($AllInPriceSFN + $BackChangePriceSFN) / ($AllInPcsSFN + $BackChangePcsSFN)) * $ReciveTranOutPcsSFN;
                    $ReciveTranOut_PriceSFN = $ReciveTranOut_PriceSFN + $ReciveTranOutPriceSFN;
                }else{
                    $ReciveTranOutPriceSFN = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSFN = $row->returnitem_Quantity;
                $ReturnStore_PcsSFN = $ReturnStore_PcsSFN + $ReturnStorePcsSFN;

                $sum = $BackChangePcsSFN + $AllInPcsSFN;
                if ($sum > 0) {
                    $ReturnStorePriceSFN = (($AllInPriceSFN + $BackChangePriceSFN) / ($AllInPcsSFN + $BackChangePcsSFN)) * $ReturnStorePcsSFN;
                    $ReturnStore_PriceSFN = $ReturnStore_PriceSFN + $ReturnStorePriceSFN;
                }else{
                    $ReturnStorePriceSFN = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSFN = $ReturnStorePcsSFN + $ReciveTranOutPcsSFN + $SendSalePcsSFN;
                $AllOut_PcsSFN = $AllOut_PcsSFN + $AllOutPcsSFN;

                $AllOutPriceSFN = $SendSalePriceSFN + $ReciveTranOutPriceSFN + $ReturnStorePriceSFN;
                $AllOut_PriceSFN = $AllOut_PriceSFN + $AllOutPriceSFN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSFN = $BackChangePcsSFN + $AllInPcsSFN + $AllOutPcsSFN;
                $Calculate_PcsSFN = $Calculate_PcsSFN + $CalculatePcsSFN;

                $CalculatePriceSFN = $BackChangePriceSFN + $AllInPriceSFN + $AllOutPriceSFN;
                $Calculate_PriceSFN = $Calculate_PriceSFN + $CalculatePriceSFN;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSFN = $row->item_stock_Quantity;
                $NewCalculate_PcsSFN = $NewCalculate_PcsSFN + $NewCalculatePcsSFN;

                $NewCalculatePriceSFN = $row->item_stock_Amount;
                $NewCalculate_PriceSFN = $NewCalculate_PriceSFN + $NewCalculatePriceSFN;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSFN = $NewCalculatePcsSFN - $CalculatePcsSFN;
                $Diff_PcsSFN = $Diff_PcsSFN + $DiffPcsSFN;

                $DiffPriceSFN = $NewCalculatePriceSFN - $CalculatePriceSFN;
                $Diff_PriceSFN = $Diff_PriceSFN + $DiffPriceSFN;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSFN = $CalculatePcsSFN;
                $NewTotal_PcsSFN = $NewTotal_PcsSFN + $CalculatePcsSFN;

                $NewTotalPriceSFN = $NewTotalPcsSFN * $row->PriceAvg;
                $NewTotal_PriceSFN = $NewTotal_PriceSFN + $NewTotalPriceSFN;

                $NewTotalDiffNavSFN = $NewTotalPriceSFN - $NewCalculatePriceSFN;
                $NewTotalDiff_NavSFN = $NewTotalDiff_NavSFN + $NewTotalDiffNavSFN;

                $NewTotalDiffCalSFN = $NewTotalPriceSFN - $CalculatePriceSFN;
                $NewTotalDiff_CalSFN = $NewTotalDiff_CalSFN + $NewTotalDiffCalSFN;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSFN = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSFN = $a7f1fgbu02s_PcsSFN + $a7f1fgbu02sPcsSFN;

                $a7f1fgbu02sPriceSFN = $a7f1fgbu02sPcsSFN * $row->PriceAvg;
                $a7f1fgbu02s_PriceSFN = $a7f1fgbu02s_PriceSFN + $a7f1fgbu02sPriceSFN;

                $a7f2fgbu10sPcsSFN = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSFN = $a7f2fgbu10s_PcsSFN + $a7f2fgbu10sPcsSFN;

                $a7f2fgbu10sPriceSFN = $a7f2fgbu10sPcsSFN * $row->PriceAvg;
                $a7f2fgbu10s_PriceSFN = $a7f2fgbu10s_PriceSFN + $a7f2fgbu10sPriceSFN;

                $a7f2thbu05sPcsSFN = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSFN = $a7f2thbu05s_PcsSFN + $a7f2thbu05sPcsSFN;

                $a7f2thbu05sPriceSFN = $a7f2thbu05sPcsSFN * $row->PriceAvg;
                $a7f2thbu05s_PriceSFN = $a7f2thbu05s_PriceSFN + $a7f2thbu05sPriceSFN;

                $a7f2debu10sPcsSFN = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSFN = $a7f2debu10s_PcsSFN + $a7f2debu10sPcsSFN;

                $a7f2debu10sPriceSFN = $a7f2debu10sPcsSFN * $row->PriceAvg;
                $a7f2debu10s_PriceSFN = $a7f2debu10s_PriceSFN + $a7f2debu10sPriceSFN;

                $a7f2exbu11sPcsSFN = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSFN = $a7f2exbu11s_PcsSFN + $a7f2exbu11sPcsSFN;

                $a7f2exbu11sPriceSFN = $a7f2exbu11sPcsSFN * $row->PriceAvg;
                $a7f2exbu11s_PriceSFN = $a7f2exbu11s_PriceSFN + $a7f2exbu11sPriceSFN;

                $a7f2twbu04sPcsSFN = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSFN = $a7f2twbu04s_PcsSFN + $a7f2twbu04sPcsSFN;

                $a7f2twbu04sPriceSFN = $a7f2twbu04sPcsSFN * $row->PriceAvg;
                $a7f2twbu04s_PriceSFN = $a7f2twbu04s_PriceSFN + $a7f2twbu04sPriceSFN;

                $a7f2twbu07sPcsSFN = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSFN = $a7f2twbu07s_PcsSFN + $a7f2twbu07sPcsSFN;

                $a7f2twbu07sPriceSFN = $a7f2twbu07sPcsSFN * $row->PriceAvg;
                $a7f2twbu07s_PriceSFN = $a7f2twbu07s_PriceSFN + $a7f2twbu07sPriceSFN;

                $a7f2cebu10sPcsSFN = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSFN = $a7f2cebu10s_PcsSFN + $a7f2cebu10sPcsSFN;

                $a7f2cebu10sPriceSFN = $a7f2cebu10sPcsSFN * $row->PriceAvg;
                $a7f2cebu10s_PriceSFN = $a7f2cebu10s_PriceSFN + $a7f2cebu10sPriceSFN;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSFN = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSFN = $a8f1fgbu02s_PcsSFN + $a8f1fgbu02sPcsSFN;

                $a8f1fgbu02sPriceSFN = $a8f1fgbu02sPcsSFN * $NumberSFN;
                $a8f1fgbu02s_PriceSFN = $a8f1fgbu02s_PriceSFN + $a8f1fgbu02sPriceSFN;

                $a8f2fgbu10sPcsSFN = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSFN = $a8f2fgbu10s_PcsSFN + $a8f2fgbu10sPcsSFN;

                $a8f2fgbu10sPriceSFN = $a8f2fgbu10sPcsSFN * $NumberSFN;
                $a8f2fgbu10s_PriceSFN = $a8f2fgbu10s_PriceSFN + $a8f2fgbu10sPriceSFN;

                $a8f2thbu05sPcsSFN = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSFN = $a8f2thbu05s_PcsSFN + $a8f2thbu05sPcsSFN;

                $a8f2thbu05sPriceSFN = $a8f2thbu05sPcsSFN * $NumberSFN;
                $a8f2thbu05s_PriceSFN = $a8f2thbu05s_PriceSFN + $a8f2thbu05sPriceSFN;

                $a8f2debu10sPcsSFN = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSFN = $a8f2debu10s_PcsSFN + $a8f2debu10sPcsSFN;

                $a8f2debu10sPriceSFN = $a8f2debu10sPcsSFN * $NumberSFN;
                $a8f2debu10s_PriceSFN = $a8f2debu10s_PriceSFN + $a8f2debu10sPriceSFN;

                $a8f2exbu11sPcsSFN = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSFN = $a8f2exbu11s_PcsSFN + $a8f2exbu11sPcsSFN;

                $a8f2exbu11sPriceSFN = $a8f2exbu11sPcsSFN * $NumberSFN;
                $a8f2exbu11s_PriceSFN = $a8f2exbu11s_PriceSFN + $a8f2exbu11sPriceSFN;

                $a8f2twbu04sPcsSFN = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSFN = $a8f2twbu04s_PcsSFN + $a8f2twbu04sPcsSFN;

                $a8f2twbu04sPriceSFN = $a8f2twbu04sPcsSFN * $NumberSFN;
                $a8f2twbu04s_PriceSFN = $a8f2twbu04s_PriceSFN + $a8f2twbu04sPriceSFN;

                $a8f2twbu07sPcsSFN = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSFN = $a8f2twbu07s_PcsSFN + $a8f2twbu07sPcsSFN;

                $a8f2twbu07sPriceSFN = $a8f2twbu07sPcsSFN * $NumberSFN;
                $a8f2twbu07s_PriceSFN = $a8f2twbu07s_PriceSFN + $a8f2twbu07sPriceSFN;

                $a8f2cebu10sPcsSFN = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSFN = $a8f2cebu10s_PcsSFN + $a8f2cebu10sPcsSFN;

                $a8f2cebu10sPriceSFN = $a8f2cebu10sPcsSFN * $NumberSFN;
                $a8f2cebu10s_PriceSFN = $a8f2cebu10s_PriceSFN + $a8f2cebu10sPriceSFN;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSFN = $row->dc1_s_Quantity;
                $DC1_PcsSFN = $DC1_PcsSFN + $DC1PcsSFN;

                $DC1PriceSFN = $DC1PcsSFN * $NumberSFN;
                $DC1_PriceSFN = $DC1_PriceSFN + $DC1PriceSFN;

                $DCPPcsSFN = $row->dcp_s_Quantity;
                $DCP_PcsSFN = $DCP_PcsSFN + $DCPPcsSFN;

                $DCPPriceSFN = $DCPPcsSFN * $NumberSFN;
                $DCP_PriceSFN = $DCP_PriceSFN + $DCPPriceSFN;

                $DCYPcsSFN = $row->dcy_s_Quantity;
                $DCY_PcsSFN = $DCY_PcsSFN + $DCYPcsSFN;

                $DCYPriceSFN = $DCYPcsSFN * $NumberSFN;
                $DCY_PriceSFN = $DCY_PriceSFN + $DCYPriceSFN;

                $DEXPcsSFN = $row->dex_s_Quantity;
                $DEX_PcsSFN = $DEX_PcsSFN + $DEXPcsSFN;

                $DEXPriceSFN = $DEXPcsSFN * $NumberSFN;
                $DEX_PriceSFN = $DEX_PriceSFN + $DEXPriceSFN;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "SMT") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSMT = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSMT = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSMT = $row->PcsAfter;
                $Pcs_AfterSMT = $Pcs_AfterSMT + $PCSAfterSMT;

                $PriceAfterSMT = $row->PriceAfter;
                $Price_AfterSMT = $Price_AfterSMT + $PriceAfterSMT;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSMT = $row->Po_Quantity;
                $Po_PcsSMT = $Po_PcsSMT + $PoPcsSMT;

                $PoPriceSMT = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSMT = $Po_PriceSMT + $PoPriceSMT;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSMT = $row->Neg_Quantity;
                $Neg_PcsSMT = $Neg_PcsSMT + $NegPcsSMT;


                $NegPriceSMT = $NumberSMT * $row->Neg_Quantity;
                $Neg_PriceSMT = $Neg_PriceSMT + $NegPriceSMT;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSMT = $PCSAfterSMT + $PoPcsSMT + $NegPcsSMT;
                $BackChange_PcsSMT = $BackChange_PcsSMT + $BackChangePcsSMT;

                $BackChangePriceSMT = $PriceAfterSMT + $PoPriceSMT + $NegPriceSMT;
                $BackChange_PriceSMT = $BackChange_PriceSMT + $BackChangePriceSMT;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSMT = $row->purchase_Quantity;
                $Purchase_PcsSMT = $Purchase_PcsSMT + $PurchasePcsSMT;

                $PurchasePriceSMT = $row->purchase_Cost;
                $Purchase_PriceSMT = $Purchase_PriceSMT + $PurchasePriceSMT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSMT = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSMT = $ReciveTranfer_PcsSMT + $ReciveTranferPcsSMT;

                $ReciveTranferPriceSMT = $ReciveTranferPcsSMT * $row->PriceAvg;
                $ReciveTranfer_PriceSMT = $ReciveTranfer_PriceSMT + $ReciveTranferPriceSMT;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySMT = $row->returncuses_Quantity;
                $ReturnItem_PCSSMT = $ReturnItem_PCSSMT + $ReturnItemQuantitySMT;

                $ReturnItemPriceSMT = $ReturnItemQuantitySMT * $NumberSMT;
                $ReturnItem_PriceSMT = $ReturnItem_PriceSMT + $ReturnItemPriceSMT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSMT = $row->purchase_Quantity + $ReciveTranferPcsSMT + $ReturnItemQuantitySMT;
                $AllIn_PcsSMT = $AllIn_PcsSMT + $AllInPcsSMT;

                $AllInPriceSMT = $PurchasePriceSMT + $ReciveTranferPriceSMT + $ReturnItemPriceSMT;
                $AllIn_PriceSMT = $AllIn_PriceSMT + $AllInPriceSMT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSMT = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSMT = $SendSale_PcsSMT + $SendSalePcsSMT;

                $sum = $BackChangePcsSMT + $AllInPcsSMT;
                if ($sum > 0) {
                    $SendSalePriceSMT = (($AllInPriceSMT + $BackChangePriceSMT) / ($AllInPcsSMT + $BackChangePcsSMT)) * $SendSalePcsSMT;
                    $SendSale_PriceSMT = $SendSale_PriceSMT + $SendSalePriceSMT;
                }else{
                    $SendSalePriceSMT = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSMT = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSMT = $ReciveTranOut_PcsSMT + $ReciveTranOutPcsSMT;

                $sum = $BackChangePcsSMT + $AllInPcsSMT;
                if ($sum > 0) {
                    $ReciveTranOutPriceSMT = (($AllInPriceSMT + $BackChangePriceSMT) / ($AllInPcsSMT + $BackChangePcsSMT)) * $ReciveTranOutPcsSMT;
                    $ReciveTranOut_PriceSMT = $ReciveTranOut_PriceSMT + $ReciveTranOutPriceSMT;
                }else{
                    $ReciveTranOutPriceSMT = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSMT = $row->returnitem_Quantity;
                $ReturnStore_PcsSMT = $ReturnStore_PcsSMT + $ReturnStorePcsSMT;

                $sum = $BackChangePcsSMT + $AllInPcsSMT;
                if ($sum > 0) {
                    $ReturnStorePriceSMT = (($AllInPriceSMT + $BackChangePriceSMT) / ($AllInPcsSMT + $BackChangePcsSMT)) * $ReturnStorePcsSMT;
                    $ReturnStore_PriceSMT = $ReturnStore_PriceSMT + $ReturnStorePriceSMT;
                }else{
                    $ReturnStorePriceSMT = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSMT = $ReturnStorePcsSMT + $ReciveTranOutPcsSMT + $SendSalePcsSMT;
                $AllOut_PcsSMT = $AllOut_PcsSMT + $AllOutPcsSMT;

                $AllOutPriceSMT = $SendSalePriceSMT + $ReciveTranOutPriceSMT + $ReturnStorePriceSMT;
                $AllOut_PriceSMT = $AllOut_PriceSMT + $AllOutPriceSMT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSMT = $BackChangePcsSMT + $AllInPcsSMT + $AllOutPcsSMT;
                $Calculate_PcsSMT = $Calculate_PcsSMT + $CalculatePcsSMT;

                $CalculatePriceSMT = $BackChangePriceSMT + $AllInPriceSMT + $AllOutPriceSMT;
                $Calculate_PriceSMT = $Calculate_PriceSMT + $CalculatePriceSMT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSMT = $row->item_stock_Quantity;
                $NewCalculate_PcsSMT = $NewCalculate_PcsSMT + $NewCalculatePcsSMT;

                $NewCalculatePriceSMT = $row->item_stock_Amount;
                $NewCalculate_PriceSMT = $NewCalculate_PriceSMT + $NewCalculatePriceSMT;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSMT = $NewCalculatePcsSMT - $CalculatePcsSMT;
                $Diff_PcsSMT = $Diff_PcsSMT + $DiffPcsSMT;

                $DiffPriceSMT = $NewCalculatePriceSMT - $CalculatePriceSMT;
                $Diff_PriceSMT = $Diff_PriceSMT + $DiffPriceSMT;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSMT = $CalculatePcsSMT;
                $NewTotal_PcsSMT = $NewTotal_PcsSMT + $CalculatePcsSMT;

                $NewTotalPriceSMT = $NewTotalPcsSMT * $row->PriceAvg;
                $NewTotal_PriceSMT = $NewTotal_PriceSMT + $NewTotalPriceSMT;

                $NewTotalDiffNavSMT = $NewTotalPriceSMT - $NewCalculatePriceSMT;
                $NewTotalDiff_NavSMT = $NewTotalDiff_NavSMT + $NewTotalDiffNavSMT;

                $NewTotalDiffCalSMT = $NewTotalPriceSMT - $CalculatePriceSMT;
                $NewTotalDiff_CalSMT = $NewTotalDiff_CalSMT + $NewTotalDiffCalSMT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSMT = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSMT = $a7f1fgbu02s_PcsSMT + $a7f1fgbu02sPcsSMT;

                $a7f1fgbu02sPriceSMT = $a7f1fgbu02sPcsSMT * $row->PriceAvg;
                $a7f1fgbu02s_PriceSMT = $a7f1fgbu02s_PriceSMT + $a7f1fgbu02sPriceSMT;

                $a7f2fgbu10sPcsSMT = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSMT = $a7f2fgbu10s_PcsSMT + $a7f2fgbu10sPcsSMT;

                $a7f2fgbu10sPriceSMT = $a7f2fgbu10sPcsSMT * $row->PriceAvg;
                $a7f2fgbu10s_PriceSMT = $a7f2fgbu10s_PriceSMT + $a7f2fgbu10sPriceSMT;

                $a7f2thbu05sPcsSMT = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSMT = $a7f2thbu05s_PcsSMT + $a7f2thbu05sPcsSMT;

                $a7f2thbu05sPriceSMT = $a7f2thbu05sPcsSMT * $row->PriceAvg;
                $a7f2thbu05s_PriceSMT = $a7f2thbu05s_PriceSMT + $a7f2thbu05sPriceSMT;

                $a7f2debu10sPcsSMT = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSMT = $a7f2debu10s_PcsSMT + $a7f2debu10sPcsSMT;

                $a7f2debu10sPriceSMT = $a7f2debu10sPcsSMT * $row->PriceAvg;
                $a7f2debu10s_PriceSMT = $a7f2debu10s_PriceSMT + $a7f2debu10sPriceSMT;

                $a7f2exbu11sPcsSMT = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSMT = $a7f2exbu11s_PcsSMT + $a7f2exbu11sPcsSMT;

                $a7f2exbu11sPriceSMT = $a7f2exbu11sPcsSMT * $row->PriceAvg;
                $a7f2exbu11s_PriceSMT = $a7f2exbu11s_PriceSMT + $a7f2exbu11sPriceSMT;

                $a7f2twbu04sPcsSMT = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSMT = $a7f2twbu04s_PcsSMT + $a7f2twbu04sPcsSMT;

                $a7f2twbu04sPriceSMT = $a7f2twbu04sPcsSMT * $row->PriceAvg;
                $a7f2twbu04s_PriceSMT = $a7f2twbu04s_PriceSMT + $a7f2twbu04sPriceSMT;

                $a7f2twbu07sPcsSMT = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSMT = $a7f2twbu07s_PcsSMT + $a7f2twbu07sPcsSMT;

                $a7f2twbu07sPriceSMT = $a7f2twbu07sPcsSMT * $row->PriceAvg;
                $a7f2twbu07s_PriceSMT = $a7f2twbu07s_PriceSMT + $a7f2twbu07sPriceSMT;

                $a7f2cebu10sPcsSMT = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSMT = $a7f2cebu10s_PcsSMT + $a7f2cebu10sPcsSMT;

                $a7f2cebu10sPriceSMT = $a7f2cebu10sPcsSMT * $row->PriceAvg;
                $a7f2cebu10s_PriceSMT = $a7f2cebu10s_PriceSMT + $a7f2cebu10sPriceSMT;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSMT = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSMT = $a8f1fgbu02s_PcsSMT + $a8f1fgbu02sPcsSMT;

                $a8f1fgbu02sPriceSMT = $a8f1fgbu02sPcsSMT * $NumberSMT;
                $a8f1fgbu02s_PriceSMT = $a8f1fgbu02s_PriceSMT + $a8f1fgbu02sPriceSMT;

                $a8f2fgbu10sPcsSMT = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSMT = $a8f2fgbu10s_PcsSMT + $a8f2fgbu10sPcsSMT;

                $a8f2fgbu10sPriceSMT = $a8f2fgbu10sPcsSMT * $NumberSMT;
                $a8f2fgbu10s_PriceSMT = $a8f2fgbu10s_PriceSMT + $a8f2fgbu10sPriceSMT;

                $a8f2thbu05sPcsSMT = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSMT = $a8f2thbu05s_PcsSMT + $a8f2thbu05sPcsSMT;

                $a8f2thbu05sPriceSMT = $a8f2thbu05sPcsSMT * $NumberSMT;
                $a8f2thbu05s_PriceSMT = $a8f2thbu05s_PriceSMT + $a8f2thbu05sPriceSMT;

                $a8f2debu10sPcsSMT = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSMT = $a8f2debu10s_PcsSMT + $a8f2debu10sPcsSMT;

                $a8f2debu10sPriceSMT = $a8f2debu10sPcsSMT * $NumberSMT;
                $a8f2debu10s_PriceSMT = $a8f2debu10s_PriceSMT + $a8f2debu10sPriceSMT;

                $a8f2exbu11sPcsSMT = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSMT = $a8f2exbu11s_PcsSMT + $a8f2exbu11sPcsSMT;

                $a8f2exbu11sPriceSMT = $a8f2exbu11sPcsSMT * $NumberSMT;
                $a8f2exbu11s_PriceSMT = $a8f2exbu11s_PriceSMT + $a8f2exbu11sPriceSMT;

                $a8f2twbu04sPcsSMT = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSMT = $a8f2twbu04s_PcsSMT + $a8f2twbu04sPcsSMT;

                $a8f2twbu04sPriceSMT = $a8f2twbu04sPcsSMT * $NumberSMT;
                $a8f2twbu04s_PriceSMT = $a8f2twbu04s_PriceSMT + $a8f2twbu04sPriceSMT;

                $a8f2twbu07sPcsSMT = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSMT = $a8f2twbu07s_PcsSMT + $a8f2twbu07sPcsSMT;

                $a8f2twbu07sPriceSMT = $a8f2twbu07sPcsSMT * $NumberSMT;
                $a8f2twbu07s_PriceSMT = $a8f2twbu07s_PriceSMT + $a8f2twbu07sPriceSMT;

                $a8f2cebu10sPcsSMT = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSMT = $a8f2cebu10s_PcsSMT + $a8f2cebu10sPcsSMT;

                $a8f2cebu10sPriceSMT = $a8f2cebu10sPcsSMT * $NumberSMT;
                $a8f2cebu10s_PriceSMT = $a8f2cebu10s_PriceSMT + $a8f2cebu10sPriceSMT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSMT = $row->dc1_s_Quantity;
                $DC1_PcsSMT = $DC1_PcsSMT + $DC1PcsSMT;

                $DC1PriceSMT = $DC1PcsSMT * $NumberSMT;
                $DC1_PriceSMT = $DC1_PriceSMT + $DC1PriceSMT;

                $DCPPcsSMT = $row->dcp_s_Quantity;
                $DCP_PcsSMT = $DCP_PcsSMT + $DCPPcsSMT;

                $DCPPriceSMT = $DCPPcsSMT * $NumberSMT;
                $DCP_PriceSMT = $DCP_PriceSMT + $DCPPriceSMT;

                $DCYPcsSMT = $row->dcy_s_Quantity;
                $DCY_PcsSMT = $DCY_PcsSMT + $DCYPcsSMT;

                $DCYPriceSMT = $DCYPcsSMT * $NumberSMT;
                $DCY_PriceSMT = $DCY_PriceSMT + $DCYPriceSMT;

                $DEXPcsSMT = $row->dex_s_Quantity;
                $DEX_PcsSMT = $DEX_PcsSMT + $DEXPcsSMT;

                $DEXPriceSMT = $DEXPcsSMT * $NumberSMT;
                $DEX_PriceSMT = $DEX_PriceSMT + $DEXPriceSMT;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "SNT") && ($row->Customer == "DC1" || $row->Customer == "DCI" || $row->Customer == "EXM1" || $row->Customer == "")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSNT = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSNT = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSNT = $row->PcsAfter;
                $Pcs_AfterSNT = $Pcs_AfterSNT + $PCSAfterSNT;

                $PriceAfterSNT = $row->PriceAfter;
                $Price_AfterSNT = $Price_AfterSNT + $PriceAfterSNT;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSNT = $row->Po_Quantity;
                $Po_PcsSNT = $Po_PcsSNT + $PoPcsSNT;

                $PoPriceSNT = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSNT = $Po_PriceSNT + $PoPriceSNT;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSNT = $row->Neg_Quantity;
                $Neg_PcsSNT = $Neg_PcsSNT + $NegPcsSNT;


                $NegPriceSNT = $NumberSNT * $row->Neg_Quantity;
                $Neg_PriceSNT = $Neg_PriceSNT + $NegPriceSNT;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSNT = $PCSAfterSNT + $PoPcsSNT + $NegPcsSNT;
                $BackChange_PcsSNT = $BackChange_PcsSNT + $BackChangePcsSNT;

                $BackChangePriceSNT = $PriceAfterSNT + $PoPriceSNT + $NegPriceSNT;
                $BackChange_PriceSNT = $BackChange_PriceSNT + $BackChangePriceSNT;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSNT = $row->purchase_Quantity;
                $Purchase_PcsSNT = $Purchase_PcsSNT + $PurchasePcsSNT;

                $PurchasePriceSNT = $row->purchase_Cost;
                $Purchase_PriceSNT = $Purchase_PriceSNT + $PurchasePriceSNT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSNT = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSNT = $ReciveTranfer_PcsSNT + $ReciveTranferPcsSNT;

                $ReciveTranferPriceSNT = $ReciveTranferPcsSNT * $row->PriceAvg;
                $ReciveTranfer_PriceSNT = $ReciveTranfer_PriceSNT + $ReciveTranferPriceSNT;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySNT = $row->returncuses_Quantity;
                $ReturnItem_PCSSNT = $ReturnItem_PCSSNT + $ReturnItemQuantitySNT;

                $ReturnItemPriceSNT = $ReturnItemQuantitySNT * $NumberSNT;
                $ReturnItem_PriceSNT = $ReturnItem_PriceSNT + $ReturnItemPriceSNT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSNT = $row->purchase_Quantity + $ReciveTranferPcsSNT + $ReturnItemQuantitySNT;
                $AllIn_PcsSNT = $AllIn_PcsSNT + $AllInPcsSNT;

                $AllInPriceSNT = $PurchasePriceSNT + $ReciveTranferPriceSNT + $ReturnItemPriceSNT;
                $AllIn_PriceSNT = $AllIn_PriceSNT + $AllInPriceSNT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSNT = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSNT = $SendSale_PcsSNT + $SendSalePcsSNT;

                $sum = $BackChangePcsSNT + $AllInPcsSNT;
                if ($sum > 0) {
                    $SendSalePriceSNT = (($AllInPriceSNT + $BackChangePriceSNT) / ($AllInPcsSNT + $BackChangePcsSNT)) * $SendSalePcsSNT;
                    $SendSale_PriceSNT = $SendSale_PriceSNT + $SendSalePriceSNT;
                }else{
                    $SendSalePriceSNT = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSNT = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSNT = $ReciveTranOut_PcsSNT + $ReciveTranOutPcsSNT;

                $sum = $BackChangePcsSNT + $AllInPcsSNT;
                if ($sum > 0) {
                    $ReciveTranOutPriceSNT = (($AllInPriceSNT + $BackChangePriceSNT) / ($AllInPcsSNT + $BackChangePcsSNT)) * $ReciveTranOutPcsSNT;
                    $ReciveTranOut_PriceSNT = $ReciveTranOut_PriceSNT + $ReciveTranOutPriceSNT;
                }else{
                    $ReciveTranOutPriceSNT = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSNT = $row->returnitem_Quantity;
                $ReturnStore_PcsSNT = $ReturnStore_PcsSNT + $ReturnStorePcsSNT;

                $sum = $BackChangePcsSNT + $AllInPcsSNT;
                if ($sum > 0) {
                    $ReturnStorePriceSNT = (($AllInPriceSNT + $BackChangePriceSNT) / ($AllInPcsSNT + $BackChangePcsSNT)) * $ReturnStorePcsSNT;
                    $ReturnStore_PriceSNT = $ReturnStore_PriceSNT + $ReturnStorePriceSNT;
                }else{
                    $ReturnStorePriceSNT = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSNT = $ReturnStorePcsSNT + $ReciveTranOutPcsSNT + $SendSalePcsSNT;
                $AllOut_PcsSNT = $AllOut_PcsSNT + $AllOutPcsSNT;

                $AllOutPriceSNT = $SendSalePriceSNT + $ReciveTranOutPriceSNT + $ReturnStorePriceSNT;
                $AllOut_PriceSNT = $AllOut_PriceSNT + $AllOutPriceSNT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSNT = $BackChangePcsSNT + $AllInPcsSNT + $AllOutPcsSNT;
                $Calculate_PcsSNT = $Calculate_PcsSNT + $CalculatePcsSNT;

                $CalculatePriceSNT = $BackChangePriceSNT + $AllInPriceSNT + $AllOutPriceSNT;
                $Calculate_PriceSNT = $Calculate_PriceSNT + $CalculatePriceSNT;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSNT = $row->item_stock_Quantity;
                $NewCalculate_PcsSNT = $NewCalculate_PcsSNT + $NewCalculatePcsSNT;

                $NewCalculatePriceSNT = $row->item_stock_Amount;
                $NewCalculate_PriceSNT = $NewCalculate_PriceSNT + $NewCalculatePriceSNT;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSNT = $NewCalculatePcsSNT - $CalculatePcsSNT;
                $Diff_PcsSNT = $Diff_PcsSNT + $DiffPcsSNT;

                $DiffPriceSNT = $NewCalculatePriceSNT - $CalculatePriceSNT;
                $Diff_PriceSNT = $Diff_PriceSNT + $DiffPriceSNT;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSNT = $CalculatePcsSNT;
                $NewTotal_PcsSNT = $NewTotal_PcsSNT + $CalculatePcsSNT;

                $NewTotalPriceSNT = $NewTotalPcsSNT * $row->PriceAvg;
                $NewTotal_PriceSNT = $NewTotal_PriceSNT + $NewTotalPriceSNT;

                $NewTotalDiffNavSNT = $NewTotalPriceSNT - $NewCalculatePriceSNT;
                $NewTotalDiff_NavSNT = $NewTotalDiff_NavSNT + $NewTotalDiffNavSNT;

                $NewTotalDiffCalSNT = $NewTotalPriceSNT - $CalculatePriceSNT;
                $NewTotalDiff_CalSNT = $NewTotalDiff_CalSNT + $NewTotalDiffCalSNT;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSNT = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSNT = $a7f1fgbu02s_PcsSNT + $a7f1fgbu02sPcsSNT;

                $a7f1fgbu02sPriceSNT = $a7f1fgbu02sPcsSNT * $row->PriceAvg;
                $a7f1fgbu02s_PriceSNT = $a7f1fgbu02s_PriceSNT + $a7f1fgbu02sPriceSNT;

                $a7f2fgbu10sPcsSNT = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSNT = $a7f2fgbu10s_PcsSNT + $a7f2fgbu10sPcsSNT;

                $a7f2fgbu10sPriceSNT = $a7f2fgbu10sPcsSNT * $row->PriceAvg;
                $a7f2fgbu10s_PriceSNT = $a7f2fgbu10s_PriceSNT + $a7f2fgbu10sPriceSNT;

                $a7f2thbu05sPcsSNT = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSNT = $a7f2thbu05s_PcsSNT + $a7f2thbu05sPcsSNT;

                $a7f2thbu05sPriceSNT = $a7f2thbu05sPcsSNT * $row->PriceAvg;
                $a7f2thbu05s_PriceSNT = $a7f2thbu05s_PriceSNT + $a7f2thbu05sPriceSNT;

                $a7f2debu10sPcsSNT = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSNT = $a7f2debu10s_PcsSNT + $a7f2debu10sPcsSNT;

                $a7f2debu10sPriceSNT = $a7f2debu10sPcsSNT * $row->PriceAvg;
                $a7f2debu10s_PriceSNT = $a7f2debu10s_PriceSNT + $a7f2debu10sPriceSNT;

                $a7f2exbu11sPcsSNT = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSNT = $a7f2exbu11s_PcsSNT + $a7f2exbu11sPcsSNT;

                $a7f2exbu11sPriceSNT = $a7f2exbu11sPcsSNT * $row->PriceAvg;
                $a7f2exbu11s_PriceSNT = $a7f2exbu11s_PriceSNT + $a7f2exbu11sPriceSNT;

                $a7f2twbu04sPcsSNT = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSNT = $a7f2twbu04s_PcsSNT + $a7f2twbu04sPcsSNT;

                $a7f2twbu04sPriceSNT = $a7f2twbu04sPcsSNT * $row->PriceAvg;
                $a7f2twbu04s_PriceSNT = $a7f2twbu04s_PriceSNT + $a7f2twbu04sPriceSNT;

                $a7f2twbu07sPcsSNT = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSNT = $a7f2twbu07s_PcsSNT + $a7f2twbu07sPcsSNT;

                $a7f2twbu07sPriceSNT = $a7f2twbu07sPcsSNT * $row->PriceAvg;
                $a7f2twbu07s_PriceSNT = $a7f2twbu07s_PriceSNT + $a7f2twbu07sPriceSNT;

                $a7f2cebu10sPcsSNT = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSNT = $a7f2cebu10s_PcsSNT + $a7f2cebu10sPcsSNT;

                $a7f2cebu10sPriceSNT = $a7f2cebu10sPcsSNT * $row->PriceAvg;
                $a7f2cebu10s_PriceSNT = $a7f2cebu10s_PriceSNT + $a7f2cebu10sPriceSNT;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSNT = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSNT = $a8f1fgbu02s_PcsSNT + $a8f1fgbu02sPcsSNT;

                $a8f1fgbu02sPriceSNT = $a8f1fgbu02sPcsSNT * $NumberSNT;
                $a8f1fgbu02s_PriceSNT = $a8f1fgbu02s_PriceSNT + $a8f1fgbu02sPriceSNT;

                $a8f2fgbu10sPcsSNT = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSNT = $a8f2fgbu10s_PcsSNT + $a8f2fgbu10sPcsSNT;

                $a8f2fgbu10sPriceSNT = $a8f2fgbu10sPcsSNT * $NumberSNT;
                $a8f2fgbu10s_PriceSNT = $a8f2fgbu10s_PriceSNT + $a8f2fgbu10sPriceSNT;

                $a8f2thbu05sPcsSNT = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSNT = $a8f2thbu05s_PcsSNT + $a8f2thbu05sPcsSNT;

                $a8f2thbu05sPriceSNT = $a8f2thbu05sPcsSNT * $NumberSNT;
                $a8f2thbu05s_PriceSNT = $a8f2thbu05s_PriceSNT + $a8f2thbu05sPriceSNT;

                $a8f2debu10sPcsSNT = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSNT = $a8f2debu10s_PcsSNT + $a8f2debu10sPcsSNT;

                $a8f2debu10sPriceSNT = $a8f2debu10sPcsSNT * $NumberSNT;
                $a8f2debu10s_PriceSNT = $a8f2debu10s_PriceSNT + $a8f2debu10sPriceSNT;

                $a8f2exbu11sPcsSNT = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSNT = $a8f2exbu11s_PcsSNT + $a8f2exbu11sPcsSNT;

                $a8f2exbu11sPriceSNT = $a8f2exbu11sPcsSNT * $NumberSNT;
                $a8f2exbu11s_PriceSNT = $a8f2exbu11s_PriceSNT + $a8f2exbu11sPriceSNT;

                $a8f2twbu04sPcsSNT = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSNT = $a8f2twbu04s_PcsSNT + $a8f2twbu04sPcsSNT;

                $a8f2twbu04sPriceSNT = $a8f2twbu04sPcsSNT * $NumberSNT;
                $a8f2twbu04s_PriceSNT = $a8f2twbu04s_PriceSNT + $a8f2twbu04sPriceSNT;

                $a8f2twbu07sPcsSNT = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSNT = $a8f2twbu07s_PcsSNT + $a8f2twbu07sPcsSNT;

                $a8f2twbu07sPriceSNT = $a8f2twbu07sPcsSNT * $NumberSNT;
                $a8f2twbu07s_PriceSNT = $a8f2twbu07s_PriceSNT + $a8f2twbu07sPriceSNT;

                $a8f2cebu10sPcsSNT = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSNT = $a8f2cebu10s_PcsSNT + $a8f2cebu10sPcsSNT;

                $a8f2cebu10sPriceSNT = $a8f2cebu10sPcsSNT * $NumberSNT;
                $a8f2cebu10s_PriceSNT = $a8f2cebu10s_PriceSNT + $a8f2cebu10sPriceSNT;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSNT = $row->dc1_s_Quantity;
                $DC1_PcsSNT = $DC1_PcsSNT + $DC1PcsSNT;

                $DC1PriceSNT = $DC1PcsSNT * $NumberSNT;
                $DC1_PriceSNT = $DC1_PriceSNT + $DC1PriceSNT;

                $DCPPcsSNT = $row->dcp_s_Quantity;
                $DCP_PcsSNT = $DCP_PcsSNT + $DCPPcsSNT;

                $DCPPriceSNT = $DCPPcsSNT * $NumberSNT;
                $DCP_PriceSNT = $DCP_PriceSNT + $DCPPriceSNT;

                $DCYPcsSNT = $row->dcy_s_Quantity;
                $DCY_PcsSNT = $DCY_PcsSNT + $DCYPcsSNT;

                $DCYPriceSNT = $DCYPcsSNT * $NumberSNT;
                $DCY_PriceSNT = $DCY_PriceSNT + $DCYPriceSNT;

                $DEXPcsSNT = $row->dex_s_Quantity;
                $DEX_PcsSNT = $DEX_PcsSNT + $DEXPcsSNT;

                $DEXPriceSNT = $DEXPcsSNT * $NumberSNT;
                $DEX_PriceSNT = $DEX_PriceSNT + $DEXPriceSNT;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "NT") && ($row->Customer == "DCY")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberNTDCY = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberNTDCY = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNTDCY = $row->PcsAfter;
                $Pcs_AfterNTDCY = $Pcs_AfterNTDCY + $PCSAfterNTDCY;

                $PriceAfterNTDCY = $row->PriceAfter;
                $Price_AfterNTDCY = $Price_AfterNTDCY + $PriceAfterNTDCY;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNTDCY = $row->Po_Quantity;
                $Po_PcsNTDCY = $Po_PcsNTDCY + $PoPcsNTDCY;

                $PoPriceNTDCY = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceNTDCY = $Po_PriceNTDCY + $PoPriceNTDCY;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNTDCY = $row->Neg_Quantity;
                $Neg_PcsNTDCY = $Neg_PcsNTDCY + $NegPcsNTDCY;


                $NegPriceNTDCY = $NumberNTDCY * $row->Neg_Quantity;
                $Neg_PriceNTDCY = $Neg_PriceNTDCY + $NegPriceNTDCY;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNTDCY = $PCSAfterNTDCY + $PoPcsNTDCY + $NegPcsNTDCY;
                $BackChange_PcsNTDCY = $BackChange_PcsNTDCY + $BackChangePcsNTDCY;

                $BackChangePriceNTDCY = $PriceAfterNTDCY + $PoPriceNTDCY + $NegPriceNTDCY;
                $BackChange_PriceNTDCY = $BackChange_PriceNTDCY + $BackChangePriceNTDCY;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNTDCY = $row->purchase_Quantity;
                $Purchase_PcsNTDCY = $Purchase_PcsNTDCY + $PurchasePcsNTDCY;

                $PurchasePriceNTDCY = $row->purchase_Cost;
                $Purchase_PriceNTDCY = $Purchase_PriceNTDCY + $PurchasePriceNTDCY;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNTDCY = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNTDCY = $ReciveTranfer_PcsNTDCY + $ReciveTranferPcsNTDCY;

                $ReciveTranferPriceNTDCY = $ReciveTranferPcsNTDCY * $row->PriceAvg;
                $ReciveTranfer_PriceNTDCY = $ReciveTranfer_PriceNTDCY + $ReciveTranferPriceNTDCY;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNTDCY = $row->returncuses_Quantity;
                $ReturnItem_PCSNTDCY = $ReturnItem_PCSNTDCY + $ReturnItemQuantityNTDCY;

                $ReturnItemPriceNTDCY = $ReturnItemQuantityNTDCY * $NumberNTDCY;
                $ReturnItem_PriceNTDCY = $ReturnItem_PriceNTDCY + $ReturnItemPriceNTDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNTDCY = $row->purchase_Quantity + $ReciveTranferPcsNTDCY + $ReturnItemQuantityNTDCY;
                $AllIn_PcsNTDCY = $AllIn_PcsNTDCY + $AllInPcsNTDCY;

                $AllInPriceNTDCY = $PurchasePriceNTDCY + $ReciveTranferPriceNTDCY + $ReturnItemPriceNTDCY;
                $AllIn_PriceNTDCY = $AllIn_PriceNTDCY + $AllInPriceNTDCY;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNTDCY = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsNTDCY = $SendSale_PcsNTDCY + $SendSalePcsNTDCY;

                $sum = $BackChangePcsNTDCY + $AllInPcsNTDCY;
                if ($sum > 0) {
                    $SendSalePriceNTDCY = (($AllInPriceNTDCY + $BackChangePriceNTDCY) / ($AllInPcsNTDCY + $BackChangePcsNTDCY)) * $SendSalePcsNTDCY;
                    $SendSale_PriceNTDCY = $SendSale_PriceNTDCY + $SendSalePriceNTDCY;
                }else{
                    $SendSalePriceNTDCY = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNTDCY = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNTDCY = $ReciveTranOut_PcsNTDCY + $ReciveTranOutPcsNTDCY;

                $sum = $BackChangePcsNTDCY + $AllInPcsNTDCY;
                if ($sum > 0) {
                    $ReciveTranOutPriceNTDCY = (($AllInPriceNTDCY + $BackChangePriceNTDCY) / ($AllInPcsNTDCY + $BackChangePcsNTDCY)) * $ReciveTranOutPcsNTDCY;
                    $ReciveTranOut_PriceNTDCY = $ReciveTranOut_PriceNTDCY + $ReciveTranOutPriceNTDCY;
                }else{
                    $ReciveTranOutPriceNTDCY = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNTDCY = $row->returnitem_Quantity;
                $ReturnStore_PcsNTDCY = $ReturnStore_PcsNTDCY + $ReturnStorePcsNTDCY;

                $sum = $BackChangePcsNTDCY + $AllInPcsNTDCY;
                if ($sum > 0) {
                    $ReturnStorePriceNTDCY = (($AllInPriceNTDCY + $BackChangePriceNTDCY) / ($AllInPcsNTDCY + $BackChangePcsNTDCY)) * $ReturnStorePcsNTDCY;
                    $ReturnStore_PriceNTDCY = $ReturnStore_PriceNTDCY + $ReturnStorePriceNTDCY;
                }else{
                    $ReturnStorePriceNTDCY = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNTDCY = $ReturnStorePcsNTDCY + $ReciveTranOutPcsNTDCY + $SendSalePcsNTDCY;
                $AllOut_PcsNTDCY = $AllOut_PcsNTDCY + $AllOutPcsNTDCY;

                $AllOutPriceNTDCY = $SendSalePriceNTDCY + $ReciveTranOutPriceNTDCY + $ReturnStorePriceNTDCY;
                $AllOut_PriceNTDCY = $AllOut_PriceNTDCY + $AllOutPriceNTDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNTDCY = $BackChangePcsNTDCY + $AllInPcsNTDCY + $AllOutPcsNTDCY;
                $Calculate_PcsNTDCY = $Calculate_PcsNTDCY + $CalculatePcsNTDCY;

                $CalculatePriceNTDCY = $BackChangePriceNTDCY + $AllInPriceNTDCY + $AllOutPriceNTDCY;
                $Calculate_PriceNTDCY = $Calculate_PriceNTDCY + $CalculatePriceNTDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNTDCY = $row->item_stock_Quantity;
                $NewCalculate_PcsNTDCY = $NewCalculate_PcsNTDCY + $NewCalculatePcsNTDCY;

                $NewCalculatePriceNTDCY = $row->item_stock_Amount;
                $NewCalculate_PriceNTDCY = $NewCalculate_PriceNTDCY + $NewCalculatePriceNTDCY;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNTDCY = $NewCalculatePcsNTDCY - $CalculatePcsNTDCY;
                $Diff_PcsNTDCY = $Diff_PcsNTDCY + $DiffPcsNTDCY;

                $DiffPriceNTDCY = $NewCalculatePriceNTDCY - $CalculatePriceNTDCY;
                $Diff_PriceNTDCY = $Diff_PriceNTDCY + $DiffPriceNTDCY;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNTDCY = $CalculatePcsNTDCY;
                $NewTotal_PcsNTDCY = $NewTotal_PcsNTDCY + $CalculatePcsNTDCY;

                $NewTotalPriceNTDCY = $NewTotalPcsNTDCY * $row->PriceAvg;
                $NewTotal_PriceNTDCY = $NewTotal_PriceNTDCY + $NewTotalPriceNTDCY;

                $NewTotalDiffNavNTDCY = $NewTotalPriceNTDCY - $NewCalculatePriceNTDCY;
                $NewTotalDiff_NavNTDCY = $NewTotalDiff_NavNTDCY + $NewTotalDiffNavNTDCY;

                $NewTotalDiffCalNTDCY = $NewTotalPriceNTDCY - $CalculatePriceNTDCY;
                $NewTotalDiff_CalNTDCY = $NewTotalDiff_CalNTDCY + $NewTotalDiffCalNTDCY;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNTDCY = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNTDCY = $a7f1fgbu02s_PcsNTDCY + $a7f1fgbu02sPcsNTDCY;

                $a7f1fgbu02sPriceNTDCY = $a7f1fgbu02sPcsNTDCY * $row->PriceAvg;
                $a7f1fgbu02s_PriceNTDCY = $a7f1fgbu02s_PriceNTDCY + $a7f1fgbu02sPriceNTDCY;

                $a7f2fgbu10sPcsNTDCY = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNTDCY = $a7f2fgbu10s_PcsNTDCY + $a7f2fgbu10sPcsNTDCY;

                $a7f2fgbu10sPriceNTDCY = $a7f2fgbu10sPcsNTDCY * $row->PriceAvg;
                $a7f2fgbu10s_PriceNTDCY = $a7f2fgbu10s_PriceNTDCY + $a7f2fgbu10sPriceNTDCY;

                $a7f2thbu05sPcsNTDCY = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNTDCY = $a7f2thbu05s_PcsNTDCY + $a7f2thbu05sPcsNTDCY;

                $a7f2thbu05sPriceNTDCY = $a7f2thbu05sPcsNTDCY * $row->PriceAvg;
                $a7f2thbu05s_PriceNTDCY = $a7f2thbu05s_PriceNTDCY + $a7f2thbu05sPriceNTDCY;

                $a7f2debu10sPcsNTDCY = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNTDCY = $a7f2debu10s_PcsNTDCY + $a7f2debu10sPcsNTDCY;

                $a7f2debu10sPriceNTDCY = $a7f2debu10sPcsNTDCY * $row->PriceAvg;
                $a7f2debu10s_PriceNTDCY = $a7f2debu10s_PriceNTDCY + $a7f2debu10sPriceNTDCY;

                $a7f2exbu11sPcsNTDCY = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNTDCY = $a7f2exbu11s_PcsNTDCY + $a7f2exbu11sPcsNTDCY;

                $a7f2exbu11sPriceNTDCY = $a7f2exbu11sPcsNTDCY * $row->PriceAvg;
                $a7f2exbu11s_PriceNTDCY = $a7f2exbu11s_PriceNTDCY + $a7f2exbu11sPriceNTDCY;

                $a7f2twbu04sPcsNTDCY = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNTDCY = $a7f2twbu04s_PcsNTDCY + $a7f2twbu04sPcsNTDCY;

                $a7f2twbu04sPriceNTDCY = $a7f2twbu04sPcsNTDCY * $row->PriceAvg;
                $a7f2twbu04s_PriceNTDCY = $a7f2twbu04s_PriceNTDCY + $a7f2twbu04sPriceNTDCY;

                $a7f2twbu07sPcsNTDCY = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNTDCY = $a7f2twbu07s_PcsNTDCY + $a7f2twbu07sPcsNTDCY;

                $a7f2twbu07sPriceNTDCY = $a7f2twbu07sPcsNTDCY * $row->PriceAvg;
                $a7f2twbu07s_PriceNTDCY = $a7f2twbu07s_PriceNTDCY + $a7f2twbu07sPriceNTDCY;

                $a7f2cebu10sPcsNTDCY = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNTDCY = $a7f2cebu10s_PcsNTDCY + $a7f2cebu10sPcsNTDCY;

                $a7f2cebu10sPriceNTDCY = $a7f2cebu10sPcsNTDCY * $row->PriceAvg;
                $a7f2cebu10s_PriceNTDCY = $a7f2cebu10s_PriceNTDCY + $a7f2cebu10sPriceNTDCY;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNTDCY = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNTDCY = $a8f1fgbu02s_PcsNTDCY + $a8f1fgbu02sPcsNTDCY;

                $a8f1fgbu02sPriceNTDCY = $a8f1fgbu02sPcsNTDCY * $NumberNTDCY;
                $a8f1fgbu02s_PriceNTDCY = $a8f1fgbu02s_PriceNTDCY + $a8f1fgbu02sPriceNTDCY;

                $a8f2fgbu10sPcsNTDCY = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNTDCY = $a8f2fgbu10s_PcsNTDCY + $a8f2fgbu10sPcsNTDCY;

                $a8f2fgbu10sPriceNTDCY = $a8f2fgbu10sPcsNTDCY * $NumberNTDCY;
                $a8f2fgbu10s_PriceNTDCY = $a8f2fgbu10s_PriceNTDCY + $a8f2fgbu10sPriceNTDCY;

                $a8f2thbu05sPcsNTDCY = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNTDCY = $a8f2thbu05s_PcsNTDCY + $a8f2thbu05sPcsNTDCY;

                $a8f2thbu05sPriceNTDCY = $a8f2thbu05sPcsNTDCY * $NumberNTDCY;
                $a8f2thbu05s_PriceNTDCY = $a8f2thbu05s_PriceNTDCY + $a8f2thbu05sPriceNTDCY;

                $a8f2debu10sPcsNTDCY = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNTDCY = $a8f2debu10s_PcsNTDCY + $a8f2debu10sPcsNTDCY;

                $a8f2debu10sPriceNTDCY = $a8f2debu10sPcsNTDCY * $NumberNTDCY;
                $a8f2debu10s_PriceNTDCY = $a8f2debu10s_PriceNTDCY + $a8f2debu10sPriceNTDCY;

                $a8f2exbu11sPcsNTDCY = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNTDCY = $a8f2exbu11s_PcsNTDCY + $a8f2exbu11sPcsNTDCY;

                $a8f2exbu11sPriceNTDCY = $a8f2exbu11sPcsNTDCY * $NumberNTDCY;
                $a8f2exbu11s_PriceNTDCY = $a8f2exbu11s_PriceNTDCY + $a8f2exbu11sPriceNTDCY;

                $a8f2twbu04sPcsNTDCY = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNTDCY = $a8f2twbu04s_PcsNTDCY + $a8f2twbu04sPcsNTDCY;

                $a8f2twbu04sPriceNTDCY = $a8f2twbu04sPcsNTDCY * $NumberNTDCY;
                $a8f2twbu04s_PriceNTDCY = $a8f2twbu04s_PriceNTDCY + $a8f2twbu04sPriceNTDCY;

                $a8f2twbu07sPcsNTDCY = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNTDCY = $a8f2twbu07s_PcsNTDCY + $a8f2twbu07sPcsNTDCY;

                $a8f2twbu07sPriceNTDCY = $a8f2twbu07sPcsNTDCY * $NumberNTDCY;
                $a8f2twbu07s_PriceNTDCY = $a8f2twbu07s_PriceNTDCY + $a8f2twbu07sPriceNTDCY;

                $a8f2cebu10sPcsNTDCY = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNTDCY = $a8f2cebu10s_PcsNTDCY + $a8f2cebu10sPcsNTDCY;

                $a8f2cebu10sPriceNTDCY = $a8f2cebu10sPcsNTDCY * $NumberNTDCY;
                $a8f2cebu10s_PriceNTDCY = $a8f2cebu10s_PriceNTDCY + $a8f2cebu10sPriceNTDCY;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNTDCY = $row->dc1_s_Quantity;
                $DC1_PcsNTDCY = $DC1_PcsNTDCY + $DC1PcsNTDCY;

                $DC1PriceNTDCY = $DC1PcsNTDCY * $NumberNTDCY;
                $DC1_PriceNTDCY = $DC1_PriceNTDCY + $DC1PriceNTDCY;

                $DCPPcsNTDCY = $row->dcp_s_Quantity;
                $DCP_PcsNTDCY = $DCP_PcsNTDCY + $DCPPcsNTDCY;

                $DCPPriceNTDCY = $DCPPcsNTDCY * $NumberNTDCY;
                $DCP_PriceNTDCY = $DCP_PriceNTDCY + $DCPPriceNTDCY;

                $DCYPcsNTDCY = $row->dcy_s_Quantity;
                $DCY_PcsNTDCY = $DCY_PcsNTDCY + $DCYPcsNTDCY;

                $DCYPriceNTDCY = $DCYPcsNTDCY * $NumberNTDCY;
                $DCY_PriceNTDCY = $DCY_PriceNTDCY + $DCYPriceNTDCY;

                $DEXPcsNTDCY = $row->dex_s_Quantity;
                $DEX_PcsNTDCY = $DEX_PcsNTDCY + $DEXPcsNTDCY;

                $DEXPriceNTDCY = $DEXPcsNTDCY * $NumberNTDCY;
                $DEX_PriceNTDCY = $DEX_PriceNTDCY + $DEXPriceNTDCY;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "TW") && ($row->Customer == "DCY")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberTWDCY = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberTWDCY = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterTWDCY = $row->PcsAfter;
                $Pcs_AfterTWDCY = $Pcs_AfterTWDCY + $PCSAfterTWDCY;

                $PriceAfterTWDCY = $row->PriceAfter;
                $Price_AfterTWDCY = $Price_AfterTWDCY + $PriceAfterTWDCY;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsTWDCY = $row->Po_Quantity;
                $Po_PcsTWDCY = $Po_PcsTWDCY + $PoPcsTWDCY;

                $PoPriceTWDCY = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceTWDCY = $Po_PriceTWDCY + $PoPriceTWDCY;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsTWDCY = $row->Neg_Quantity;
                $Neg_PcsTWDCY = $Neg_PcsTWDCY + $NegPcsTWDCY;


                $NegPriceTWDCY = $NumberTWDCY * $row->Neg_Quantity;
                $Neg_PriceTWDCY = $Neg_PriceTWDCY + $NegPriceTWDCY;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsTWDCY = $PCSAfterTWDCY + $PoPcsTWDCY + $NegPcsTWDCY;
                $BackChange_PcsTWDCY = $BackChange_PcsTWDCY + $BackChangePcsTWDCY;

                $BackChangePriceTWDCY = $PriceAfterTWDCY + $PoPriceTWDCY + $NegPriceTWDCY;
                $BackChange_PriceTWDCY = $BackChange_PriceTWDCY + $BackChangePriceTWDCY;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsTWDCY = $row->purchase_Quantity;
                $Purchase_PcsTWDCY = $Purchase_PcsTWDCY + $PurchasePcsTWDCY;

                $PurchasePriceTWDCY = $row->purchase_Cost;
                $Purchase_PriceTWDCY = $Purchase_PriceTWDCY + $PurchasePriceTWDCY;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsTWDCY = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsTWDCY = $ReciveTranfer_PcsTWDCY + $ReciveTranferPcsTWDCY;

                $ReciveTranferPriceTWDCY = $ReciveTranferPcsTWDCY * $row->PriceAvg;
                $ReciveTranfer_PriceTWDCY = $ReciveTranfer_PriceTWDCY + $ReciveTranferPriceTWDCY;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityTWDCY = $row->returncuses_Quantity;
                $ReturnItem_PCSTWDCY = $ReturnItem_PCSTWDCY + $ReturnItemQuantityTWDCY;

                $ReturnItemPriceTWDCY = $ReturnItemQuantityTWDCY * $NumberTWDCY;
                $ReturnItem_PriceTWDCY = $ReturnItem_PriceTWDCY + $ReturnItemPriceTWDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsTWDCY = $row->purchase_Quantity + $ReciveTranferPcsTWDCY + $ReturnItemQuantityTWDCY;
                $AllIn_PcsTWDCY = $AllIn_PcsTWDCY + $AllInPcsTWDCY;

                $AllInPriceTWDCY = $PurchasePriceTWDCY + $ReciveTranferPriceTWDCY + $ReturnItemPriceTWDCY;
                $AllIn_PriceTWDCY = $AllIn_PriceTWDCY + $AllInPriceTWDCY;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsTWDCY = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsTWDCY = $SendSale_PcsTWDCY + $SendSalePcsTWDCY;

                $sum = $BackChangePcsTWDCY + $AllInPcsTWDCY;
                if ($sum > 0) {
                    $SendSalePriceTWDCY = (($AllInPriceTWDCY + $BackChangePriceTWDCY) / ($AllInPcsTWDCY + $BackChangePcsTWDCY)) * $SendSalePcsTWDCY;
                    $SendSale_PriceTWDCY = $SendSale_PriceTWDCY + $SendSalePriceTWDCY;
                }else{
                    $SendSalePriceTWDCY = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsTWDCY = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsTWDCY = $ReciveTranOut_PcsTWDCY + $ReciveTranOutPcsTWDCY;

                $sum = $BackChangePcsTWDCY + $AllInPcsTWDCY;
                if ($sum > 0) {
                    $ReciveTranOutPriceTWDCY = (($AllInPriceTWDCY + $BackChangePriceTWDCY) / ($AllInPcsTWDCY + $BackChangePcsTWDCY)) * $ReciveTranOutPcsTWDCY;
                    $ReciveTranOut_PriceTWDCY = $ReciveTranOut_PriceTWDCY + $ReciveTranOutPriceTWDCY;
                }else{
                    $ReciveTranOutPriceTWDCY = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsTWDCY = $row->returnitem_Quantity;
                $ReturnStore_PcsTWDCY = $ReturnStore_PcsTWDCY + $ReturnStorePcsTWDCY;

                $sum = $BackChangePcsTWDCY + $AllInPcsTWDCY;
                if ($sum > 0) {
                    $ReturnStorePriceTWDCY = (($AllInPriceTWDCY + $BackChangePriceTWDCY) / ($AllInPcsTWDCY + $BackChangePcsTWDCY)) * $ReturnStorePcsTWDCY;
                    $ReturnStore_PriceTWDCY = $ReturnStore_PriceTWDCY + $ReturnStorePriceTWDCY;
                }else{
                    $ReturnStorePriceTWDCY = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsTWDCY = $ReturnStorePcsTWDCY + $ReciveTranOutPcsTWDCY + $SendSalePcsTWDCY;
                $AllOut_PcsTWDCY = $AllOut_PcsTWDCY + $AllOutPcsTWDCY;

                $AllOutPriceTWDCY = $SendSalePriceTWDCY + $ReciveTranOutPriceTWDCY + $ReturnStorePriceTWDCY;
                $AllOut_PriceTWDCY = $AllOut_PriceTWDCY + $AllOutPriceTWDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsTWDCY = $BackChangePcsTWDCY + $AllInPcsTWDCY + $AllOutPcsTWDCY;
                $Calculate_PcsTWDCY = $Calculate_PcsTWDCY + $CalculatePcsTWDCY;

                $CalculatePriceTWDCY = $BackChangePriceTWDCY + $AllInPriceTWDCY + $AllOutPriceTWDCY;
                $Calculate_PriceTWDCY = $Calculate_PriceTWDCY + $CalculatePriceTWDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsTWDCY = $row->item_stock_Quantity;
                $NewCalculate_PcsTWDCY = $NewCalculate_PcsTWDCY + $NewCalculatePcsTWDCY;

                $NewCalculatePriceTWDCY = $row->item_stock_Amount;
                $NewCalculate_PriceTWDCY = $NewCalculate_PriceTWDCY + $NewCalculatePriceTWDCY;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsTWDCY = $NewCalculatePcsTWDCY - $CalculatePcsTWDCY;
                $Diff_PcsTWDCY = $Diff_PcsTWDCY + $DiffPcsTWDCY;

                $DiffPriceTWDCY = $NewCalculatePriceTWDCY - $CalculatePriceTWDCY;
                $Diff_PriceTWDCY = $Diff_PriceTWDCY + $DiffPriceTWDCY;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsTWDCY = $CalculatePcsTWDCY;
                $NewTotal_PcsTWDCY = $NewTotal_PcsTWDCY + $CalculatePcsTWDCY;

                $NewTotalPriceTWDCY = $NewTotalPcsTWDCY * $row->PriceAvg;
                $NewTotal_PriceTWDCY = $NewTotal_PriceTWDCY + $NewTotalPriceTWDCY;

                $NewTotalDiffNavTWDCY = $NewTotalPriceTWDCY - $NewCalculatePriceTWDCY;
                $NewTotalDiff_NavTWDCY = $NewTotalDiff_NavTWDCY + $NewTotalDiffNavTWDCY;

                $NewTotalDiffCalTWDCY = $NewTotalPriceTWDCY - $CalculatePriceTWDCY;
                $NewTotalDiff_CalTWDCY = $NewTotalDiff_CalTWDCY + $NewTotalDiffCalTWDCY;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsTWDCY = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsTWDCY = $a7f1fgbu02s_PcsTWDCY + $a7f1fgbu02sPcsTWDCY;

                $a7f1fgbu02sPriceTWDCY = $a7f1fgbu02sPcsTWDCY * $row->PriceAvg;
                $a7f1fgbu02s_PriceTWDCY = $a7f1fgbu02s_PriceTWDCY + $a7f1fgbu02sPriceTWDCY;

                $a7f2fgbu10sPcsTWDCY = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsTWDCY = $a7f2fgbu10s_PcsTWDCY + $a7f2fgbu10sPcsTWDCY;

                $a7f2fgbu10sPriceTWDCY = $a7f2fgbu10sPcsTWDCY * $row->PriceAvg;
                $a7f2fgbu10s_PriceTWDCY = $a7f2fgbu10s_PriceTWDCY + $a7f2fgbu10sPriceTWDCY;

                $a7f2thbu05sPcsTWDCY = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsTWDCY = $a7f2thbu05s_PcsTWDCY + $a7f2thbu05sPcsTWDCY;

                $a7f2thbu05sPriceTWDCY = $a7f2thbu05sPcsTWDCY * $row->PriceAvg;
                $a7f2thbu05s_PriceTWDCY = $a7f2thbu05s_PriceTWDCY + $a7f2thbu05sPriceTWDCY;

                $a7f2debu10sPcsTWDCY = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsTWDCY = $a7f2debu10s_PcsTWDCY + $a7f2debu10sPcsTWDCY;

                $a7f2debu10sPriceTWDCY = $a7f2debu10sPcsTWDCY * $row->PriceAvg;
                $a7f2debu10s_PriceTWDCY = $a7f2debu10s_PriceTWDCY + $a7f2debu10sPriceTWDCY;

                $a7f2exbu11sPcsTWDCY = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsTWDCY = $a7f2exbu11s_PcsTWDCY + $a7f2exbu11sPcsTWDCY;

                $a7f2exbu11sPriceTWDCY = $a7f2exbu11sPcsTWDCY * $row->PriceAvg;
                $a7f2exbu11s_PriceTWDCY = $a7f2exbu11s_PriceTWDCY + $a7f2exbu11sPriceTWDCY;

                $a7f2twbu04sPcsTWDCY = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsTWDCY = $a7f2twbu04s_PcsTWDCY + $a7f2twbu04sPcsTWDCY;

                $a7f2twbu04sPriceTWDCY = $a7f2twbu04sPcsTWDCY * $row->PriceAvg;
                $a7f2twbu04s_PriceTWDCY = $a7f2twbu04s_PriceTWDCY + $a7f2twbu04sPriceTWDCY;

                $a7f2twbu07sPcsTWDCY = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsTWDCY = $a7f2twbu07s_PcsTWDCY + $a7f2twbu07sPcsTWDCY;

                $a7f2twbu07sPriceTWDCY = $a7f2twbu07sPcsTWDCY * $row->PriceAvg;
                $a7f2twbu07s_PriceTWDCY = $a7f2twbu07s_PriceTWDCY + $a7f2twbu07sPriceTWDCY;

                $a7f2cebu10sPcsTWDCY = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsTWDCY = $a7f2cebu10s_PcsTWDCY + $a7f2cebu10sPcsTWDCY;

                $a7f2cebu10sPriceTWDCY = $a7f2cebu10sPcsTWDCY * $row->PriceAvg;
                $a7f2cebu10s_PriceTWDCY = $a7f2cebu10s_PriceTWDCY + $a7f2cebu10sPriceTWDCY;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsTWDCY = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsTWDCY = $a8f1fgbu02s_PcsTWDCY + $a8f1fgbu02sPcsTWDCY;

                $a8f1fgbu02sPriceTWDCY = $a8f1fgbu02sPcsTWDCY * $NumberTWDCY;
                $a8f1fgbu02s_PriceTWDCY = $a8f1fgbu02s_PriceTWDCY + $a8f1fgbu02sPriceTWDCY;

                $a8f2fgbu10sPcsTWDCY = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsTWDCY = $a8f2fgbu10s_PcsTWDCY + $a8f2fgbu10sPcsTWDCY;

                $a8f2fgbu10sPriceTWDCY = $a8f2fgbu10sPcsTWDCY * $NumberTWDCY;
                $a8f2fgbu10s_PriceTWDCY = $a8f2fgbu10s_PriceTWDCY + $a8f2fgbu10sPriceTWDCY;

                $a8f2thbu05sPcsTWDCY = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsTWDCY = $a8f2thbu05s_PcsTWDCY + $a8f2thbu05sPcsTWDCY;

                $a8f2thbu05sPriceTWDCY = $a8f2thbu05sPcsTWDCY * $NumberTWDCY;
                $a8f2thbu05s_PriceTWDCY = $a8f2thbu05s_PriceTWDCY + $a8f2thbu05sPriceTWDCY;

                $a8f2debu10sPcsTWDCY = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsTWDCY = $a8f2debu10s_PcsTWDCY + $a8f2debu10sPcsTWDCY;

                $a8f2debu10sPriceTWDCY = $a8f2debu10sPcsTWDCY * $NumberTWDCY;
                $a8f2debu10s_PriceTWDCY = $a8f2debu10s_PriceTWDCY + $a8f2debu10sPriceTWDCY;

                $a8f2exbu11sPcsTWDCY = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsTWDCY = $a8f2exbu11s_PcsTWDCY + $a8f2exbu11sPcsTWDCY;

                $a8f2exbu11sPriceTWDCY = $a8f2exbu11sPcsTWDCY * $NumberTWDCY;
                $a8f2exbu11s_PriceTWDCY = $a8f2exbu11s_PriceTWDCY + $a8f2exbu11sPriceTWDCY;

                $a8f2twbu04sPcsTWDCY = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsTWDCY = $a8f2twbu04s_PcsTWDCY + $a8f2twbu04sPcsTWDCY;

                $a8f2twbu04sPriceTWDCY = $a8f2twbu04sPcsTWDCY * $NumberTWDCY;
                $a8f2twbu04s_PriceTWDCY = $a8f2twbu04s_PriceTWDCY + $a8f2twbu04sPriceTWDCY;

                $a8f2twbu07sPcsTWDCY = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsTWDCY = $a8f2twbu07s_PcsTWDCY + $a8f2twbu07sPcsTWDCY;

                $a8f2twbu07sPriceTWDCY = $a8f2twbu07sPcsTWDCY * $NumberTWDCY;
                $a8f2twbu07s_PriceTWDCY = $a8f2twbu07s_PriceTWDCY + $a8f2twbu07sPriceTWDCY;

                $a8f2cebu10sPcsTWDCY = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsTWDCY = $a8f2cebu10s_PcsTWDCY + $a8f2cebu10sPcsTWDCY;

                $a8f2cebu10sPriceTWDCY = $a8f2cebu10sPcsTWDCY * $NumberTWDCY;
                $a8f2cebu10s_PriceTWDCY = $a8f2cebu10s_PriceTWDCY + $a8f2cebu10sPriceTWDCY;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsTWDCY = $row->dc1_s_Quantity;
                $DC1_PcsTWDCY = $DC1_PcsTWDCY + $DC1PcsTWDCY;

                $DC1PriceTWDCY = $DC1PcsTWDCY * $NumberTWDCY;
                $DC1_PriceTWDCY = $DC1_PriceTWDCY + $DC1PriceTWDCY;

                $DCPPcsTWDCY = $row->dcp_s_Quantity;
                $DCP_PcsTWDCY = $DCP_PcsTWDCY + $DCPPcsTWDCY;

                $DCPPriceTWDCY = $DCPPcsTWDCY * $NumberTWDCY;
                $DCP_PriceTWDCY = $DCP_PriceTWDCY + $DCPPriceTWDCY;

                $DCYPcsTWDCY = $row->dcy_s_Quantity;
                $DCY_PcsTWDCY = $DCY_PcsTWDCY + $DCYPcsTWDCY;

                $DCYPriceTWDCY = $DCYPcsTWDCY * $NumberTWDCY;
                $DCY_PriceTWDCY = $DCY_PriceTWDCY + $DCYPriceTWDCY;

                $DEXPcsTWDCY = $row->dex_s_Quantity;
                $DEX_PcsTWDCY = $DEX_PcsTWDCY + $DEXPcsTWDCY;

                $DEXPriceTWDCY = $DEXPcsTWDCY * $NumberTWDCY;
                $DEX_PriceTWDCY = $DEX_PriceTWDCY + $DEXPriceTWDCY;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "SNT") && ($row->Customer == "DCY")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSNTDCY = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSNTDCY = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSNTDCY = $row->PcsAfter;
                $Pcs_AfterSNTDCY = $Pcs_AfterSNTDCY + $PCSAfterSNTDCY;

                $PriceAfterSNTDCY = $row->PriceAfter;
                $Price_AfterSNTDCY = $Price_AfterSNTDCY + $PriceAfterSNTDCY;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSNTDCY = $row->Po_Quantity;
                $Po_PcsSNTDCY = $Po_PcsSNTDCY + $PoPcsSNTDCY;

                $PoPriceSNTDCY = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSNTDCY = $Po_PriceSNTDCY + $PoPriceSNTDCY;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSNTDCY = $row->Neg_Quantity;
                $Neg_PcsSNTDCY = $Neg_PcsSNTDCY + $NegPcsSNTDCY;


                $NegPriceSNTDCY = $NumberSNTDCY * $row->Neg_Quantity;
                $Neg_PriceSNTDCY = $Neg_PriceSNTDCY + $NegPriceSNTDCY;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSNTDCY = $PCSAfterSNTDCY + $PoPcsSNTDCY + $NegPcsSNTDCY;
                $BackChange_PcsSNTDCY = $BackChange_PcsSNTDCY + $BackChangePcsSNTDCY;

                $BackChangePriceSNTDCY = $PriceAfterSNTDCY + $PoPriceSNTDCY + $NegPriceSNTDCY;
                $BackChange_PriceSNTDCY = $BackChange_PriceSNTDCY + $BackChangePriceSNTDCY;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSNTDCY = $row->purchase_Quantity;
                $Purchase_PcsSNTDCY = $Purchase_PcsSNTDCY + $PurchasePcsSNTDCY;

                $PurchasePriceSNTDCY = $row->purchase_Cost;
                $Purchase_PriceSNTDCY = $Purchase_PriceSNTDCY + $PurchasePriceSNTDCY;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSNTDCY = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSNTDCY = $ReciveTranfer_PcsSNTDCY + $ReciveTranferPcsSNTDCY;

                $ReciveTranferPriceSNTDCY = $ReciveTranferPcsSNTDCY * $row->PriceAvg;
                $ReciveTranfer_PriceSNTDCY = $ReciveTranfer_PriceSNTDCY + $ReciveTranferPriceSNTDCY;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySNTDCY = $row->returncuses_Quantity;
                $ReturnItem_PCSSNTDCY = $ReturnItem_PCSSNTDCY + $ReturnItemQuantitySNTDCY;

                $ReturnItemPriceSNTDCY = $ReturnItemQuantitySNTDCY * $NumberSNTDCY;
                $ReturnItem_PriceSNTDCY = $ReturnItem_PriceSNTDCY + $ReturnItemPriceSNTDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSNTDCY = $row->purchase_Quantity + $ReciveTranferPcsSNTDCY + $ReturnItemQuantitySNTDCY;
                $AllIn_PcsSNTDCY = $AllIn_PcsSNTDCY + $AllInPcsSNTDCY;

                $AllInPriceSNTDCY = $PurchasePriceSNTDCY + $ReciveTranferPriceSNTDCY + $ReturnItemPriceSNTDCY;
                $AllIn_PriceSNTDCY = $AllIn_PriceSNTDCY + $AllInPriceSNTDCY;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSNTDCY = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSNTDCY = $SendSale_PcsSNTDCY + $SendSalePcsSNTDCY;

                $sum = $BackChangePcsSNTDCY + $AllInPcsSNTDCY;
                if ($sum > 0) {
                    $SendSalePriceSNTDCY = (($AllInPriceSNTDCY + $BackChangePriceSNTDCY) / ($AllInPcsSNTDCY + $BackChangePcsSNTDCY)) * $SendSalePcsSNTDCY;
                    $SendSale_PriceSNTDCY = $SendSale_PriceSNTDCY + $SendSalePriceSNTDCY;
                }else{
                    $SendSalePriceSNTDCY = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSNTDCY = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSNTDCY = $ReciveTranOut_PcsSNTDCY + $ReciveTranOutPcsSNTDCY;

                $sum = $BackChangePcsSNTDCY + $AllInPcsSNTDCY;
                if ($sum > 0) {
                    $ReciveTranOutPriceSNTDCY = (($AllInPriceSNTDCY + $BackChangePriceSNTDCY) / ($AllInPcsSNTDCY + $BackChangePcsSNTDCY)) * $ReciveTranOutPcsSNTDCY;
                    $ReciveTranOut_PriceSNTDCY = $ReciveTranOut_PriceSNTDCY + $ReciveTranOutPriceSNTDCY;
                }else{
                    $ReciveTranOutPriceSNTDCY = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSNTDCY = $row->returnitem_Quantity;
                $ReturnStore_PcsSNTDCY = $ReturnStore_PcsSNTDCY + $ReturnStorePcsSNTDCY;

                $sum = $BackChangePcsSNTDCY + $AllInPcsSNTDCY;
                if ($sum > 0) {
                    $ReturnStorePriceSNTDCY = (($AllInPriceSNTDCY + $BackChangePriceSNTDCY) / ($AllInPcsSNTDCY + $BackChangePcsSNTDCY)) * $ReturnStorePcsSNTDCY;
                    $ReturnStore_PriceSNTDCY = $ReturnStore_PriceSNTDCY + $ReturnStorePriceSNTDCY;
                }else{
                    $ReturnStorePriceSNTDCY = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSNTDCY = $ReturnStorePcsSNTDCY + $ReciveTranOutPcsSNTDCY + $SendSalePcsSNTDCY;
                $AllOut_PcsSNTDCY = $AllOut_PcsSNTDCY + $AllOutPcsSNTDCY;

                $AllOutPriceSNTDCY = $SendSalePriceSNTDCY + $ReciveTranOutPriceSNTDCY + $ReturnStorePriceSNTDCY;
                $AllOut_PriceSNTDCY = $AllOut_PriceSNTDCY + $AllOutPriceSNTDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSNTDCY = $BackChangePcsSNTDCY + $AllInPcsSNTDCY + $AllOutPcsSNTDCY;
                $Calculate_PcsSNTDCY = $Calculate_PcsSNTDCY + $CalculatePcsSNTDCY;

                $CalculatePriceSNTDCY = $BackChangePriceSNTDCY + $AllInPriceSNTDCY + $AllOutPriceSNTDCY;
                $Calculate_PriceSNTDCY = $Calculate_PriceSNTDCY + $CalculatePriceSNTDCY;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSNTDCY = $row->item_stock_Quantity;
                $NewCalculate_PcsSNTDCY = $NewCalculate_PcsSNTDCY + $NewCalculatePcsSNTDCY;

                $NewCalculatePriceSNTDCY = $row->item_stock_Amount;
                $NewCalculate_PriceSNTDCY = $NewCalculate_PriceSNTDCY + $NewCalculatePriceSNTDCY;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSNTDCY = $NewCalculatePcsSNTDCY - $CalculatePcsSNTDCY;
                $Diff_PcsSNTDCY = $Diff_PcsSNTDCY + $DiffPcsSNTDCY;

                $DiffPriceSNTDCY = $NewCalculatePriceSNTDCY - $CalculatePriceSNTDCY;
                $Diff_PriceSNTDCY = $Diff_PriceSNTDCY + $DiffPriceSNTDCY;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSNTDCY = $CalculatePcsSNTDCY;
                $NewTotal_PcsSNTDCY = $NewTotal_PcsSNTDCY + $CalculatePcsSNTDCY;

                $NewTotalPriceSNTDCY = $NewTotalPcsSNTDCY * $row->PriceAvg;
                $NewTotal_PriceSNTDCY = $NewTotal_PriceSNTDCY + $NewTotalPriceSNTDCY;

                $NewTotalDiffNavSNTDCY = $NewTotalPriceSNTDCY - $NewCalculatePriceSNTDCY;
                $NewTotalDiff_NavSNTDCY = $NewTotalDiff_NavSNTDCY + $NewTotalDiffNavSNTDCY;

                $NewTotalDiffCalSNTDCY = $NewTotalPriceSNTDCY - $CalculatePriceSNTDCY;
                $NewTotalDiff_CalSNTDCY = $NewTotalDiff_CalSNTDCY + $NewTotalDiffCalSNTDCY;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSNTDCY = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSNTDCY = $a7f1fgbu02s_PcsSNTDCY + $a7f1fgbu02sPcsSNTDCY;

                $a7f1fgbu02sPriceSNTDCY = $a7f1fgbu02sPcsSNTDCY * $row->PriceAvg;
                $a7f1fgbu02s_PriceSNTDCY = $a7f1fgbu02s_PriceSNTDCY + $a7f1fgbu02sPriceSNTDCY;

                $a7f2fgbu10sPcsSNTDCY = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSNTDCY = $a7f2fgbu10s_PcsSNTDCY + $a7f2fgbu10sPcsSNTDCY;

                $a7f2fgbu10sPriceSNTDCY = $a7f2fgbu10sPcsSNTDCY * $row->PriceAvg;
                $a7f2fgbu10s_PriceSNTDCY = $a7f2fgbu10s_PriceSNTDCY + $a7f2fgbu10sPriceSNTDCY;

                $a7f2thbu05sPcsSNTDCY = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSNTDCY = $a7f2thbu05s_PcsSNTDCY + $a7f2thbu05sPcsSNTDCY;

                $a7f2thbu05sPriceSNTDCY = $a7f2thbu05sPcsSNTDCY * $row->PriceAvg;
                $a7f2thbu05s_PriceSNTDCY = $a7f2thbu05s_PriceSNTDCY + $a7f2thbu05sPriceSNTDCY;

                $a7f2debu10sPcsSNTDCY = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSNTDCY = $a7f2debu10s_PcsSNTDCY + $a7f2debu10sPcsSNTDCY;

                $a7f2debu10sPriceSNTDCY = $a7f2debu10sPcsSNTDCY * $row->PriceAvg;
                $a7f2debu10s_PriceSNTDCY = $a7f2debu10s_PriceSNTDCY + $a7f2debu10sPriceSNTDCY;

                $a7f2exbu11sPcsSNTDCY = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSNTDCY = $a7f2exbu11s_PcsSNTDCY + $a7f2exbu11sPcsSNTDCY;

                $a7f2exbu11sPriceSNTDCY = $a7f2exbu11sPcsSNTDCY * $row->PriceAvg;
                $a7f2exbu11s_PriceSNTDCY = $a7f2exbu11s_PriceSNTDCY + $a7f2exbu11sPriceSNTDCY;

                $a7f2twbu04sPcsSNTDCY = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSNTDCY = $a7f2twbu04s_PcsSNTDCY + $a7f2twbu04sPcsSNTDCY;

                $a7f2twbu04sPriceSNTDCY = $a7f2twbu04sPcsSNTDCY * $row->PriceAvg;
                $a7f2twbu04s_PriceSNTDCY = $a7f2twbu04s_PriceSNTDCY + $a7f2twbu04sPriceSNTDCY;

                $a7f2twbu07sPcsSNTDCY = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSNTDCY = $a7f2twbu07s_PcsSNTDCY + $a7f2twbu07sPcsSNTDCY;

                $a7f2twbu07sPriceSNTDCY = $a7f2twbu07sPcsSNTDCY * $row->PriceAvg;
                $a7f2twbu07s_PriceSNTDCY = $a7f2twbu07s_PriceSNTDCY + $a7f2twbu07sPriceSNTDCY;

                $a7f2cebu10sPcsSNTDCY = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSNTDCY = $a7f2cebu10s_PcsSNTDCY + $a7f2cebu10sPcsSNTDCY;

                $a7f2cebu10sPriceSNTDCY = $a7f2cebu10sPcsSNTDCY * $row->PriceAvg;
                $a7f2cebu10s_PriceSNTDCY = $a7f2cebu10s_PriceSNTDCY + $a7f2cebu10sPriceSNTDCY;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSNTDCY = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSNTDCY = $a8f1fgbu02s_PcsSNTDCY + $a8f1fgbu02sPcsSNTDCY;

                $a8f1fgbu02sPriceSNTDCY = $a8f1fgbu02sPcsSNTDCY * $NumberSNTDCY;
                $a8f1fgbu02s_PriceSNTDCY = $a8f1fgbu02s_PriceSNTDCY + $a8f1fgbu02sPriceSNTDCY;

                $a8f2fgbu10sPcsSNTDCY = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSNTDCY = $a8f2fgbu10s_PcsSNTDCY + $a8f2fgbu10sPcsSNTDCY;

                $a8f2fgbu10sPriceSNTDCY = $a8f2fgbu10sPcsSNTDCY * $NumberSNTDCY;
                $a8f2fgbu10s_PriceSNTDCY = $a8f2fgbu10s_PriceSNTDCY + $a8f2fgbu10sPriceSNTDCY;

                $a8f2thbu05sPcsSNTDCY = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSNTDCY = $a8f2thbu05s_PcsSNTDCY + $a8f2thbu05sPcsSNTDCY;

                $a8f2thbu05sPriceSNTDCY = $a8f2thbu05sPcsSNTDCY * $NumberSNTDCY;
                $a8f2thbu05s_PriceSNTDCY = $a8f2thbu05s_PriceSNTDCY + $a8f2thbu05sPriceSNTDCY;

                $a8f2debu10sPcsSNTDCY = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSNTDCY = $a8f2debu10s_PcsSNTDCY + $a8f2debu10sPcsSNTDCY;

                $a8f2debu10sPriceSNTDCY = $a8f2debu10sPcsSNTDCY * $NumberSNTDCY;
                $a8f2debu10s_PriceSNTDCY = $a8f2debu10s_PriceSNTDCY + $a8f2debu10sPriceSNTDCY;

                $a8f2exbu11sPcsSNTDCY = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSNTDCY = $a8f2exbu11s_PcsSNTDCY + $a8f2exbu11sPcsSNTDCY;

                $a8f2exbu11sPriceSNTDCY = $a8f2exbu11sPcsSNTDCY * $NumberSNTDCY;
                $a8f2exbu11s_PriceSNTDCY = $a8f2exbu11s_PriceSNTDCY + $a8f2exbu11sPriceSNTDCY;

                $a8f2twbu04sPcsSNTDCY = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSNTDCY = $a8f2twbu04s_PcsSNTDCY + $a8f2twbu04sPcsSNTDCY;

                $a8f2twbu04sPriceSNTDCY = $a8f2twbu04sPcsSNTDCY * $NumberSNTDCY;
                $a8f2twbu04s_PriceSNTDCY = $a8f2twbu04s_PriceSNTDCY + $a8f2twbu04sPriceSNTDCY;

                $a8f2twbu07sPcsSNTDCY = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSNTDCY = $a8f2twbu07s_PcsSNTDCY + $a8f2twbu07sPcsSNTDCY;

                $a8f2twbu07sPriceSNTDCY = $a8f2twbu07sPcsSNTDCY * $NumberSNTDCY;
                $a8f2twbu07s_PriceSNTDCY = $a8f2twbu07s_PriceSNTDCY + $a8f2twbu07sPriceSNTDCY;

                $a8f2cebu10sPcsSNTDCY = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSNTDCY = $a8f2cebu10s_PcsSNTDCY + $a8f2cebu10sPcsSNTDCY;

                $a8f2cebu10sPriceSNTDCY = $a8f2cebu10sPcsSNTDCY * $NumberSNTDCY;
                $a8f2cebu10s_PriceSNTDCY = $a8f2cebu10s_PriceSNTDCY + $a8f2cebu10sPriceSNTDCY;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSNTDCY = $row->dc1_s_Quantity;
                $DC1_PcsSNTDCY = $DC1_PcsSNTDCY + $DC1PcsSNTDCY;

                $DC1PriceSNTDCY = $DC1PcsSNTDCY * $NumberSNTDCY;
                $DC1_PriceSNTDCY = $DC1_PriceSNTDCY + $DC1PriceSNTDCY;

                $DCPPcsSNTDCY = $row->dcp_s_Quantity;
                $DCP_PcsSNTDCY = $DCP_PcsSNTDCY + $DCPPcsSNTDCY;

                $DCPPriceSNTDCY = $DCPPcsSNTDCY * $NumberSNTDCY;
                $DCP_PriceSNTDCY = $DCP_PriceSNTDCY + $DCPPriceSNTDCY;

                $DCYPcsSNTDCY = $row->dcy_s_Quantity;
                $DCY_PcsSNTDCY = $DCY_PcsSNTDCY + $DCYPcsSNTDCY;

                $DCYPriceSNTDCY = $DCYPcsSNTDCY * $NumberSNTDCY;
                $DCY_PriceSNTDCY = $DCY_PriceSNTDCY + $DCYPriceSNTDCY;

                $DEXPcsSNTDCY = $row->dex_s_Quantity;
                $DEX_PcsSNTDCY = $DEX_PcsSNTDCY + $DEXPcsSNTDCY;

                $DEXPriceSNTDCY = $DEXPcsSNTDCY * $NumberSNTDCY;
                $DEX_PriceSNTDCY = $DEX_PriceSNTDCY + $DEXPriceSNTDCY;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "NT") && ($row->Customer == "DCP")) {
                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberNTDCP = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberNTDCP = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNTDCP = $row->PcsAfter;
                $Pcs_AfterNTDCP = $Pcs_AfterNTDCP + $PCSAfterNTDCP;

                $PriceAfterNTDCP = $row->PriceAfter;
                $Price_AfterNTDCP = $Price_AfterNTDCP + $PriceAfterNTDCP;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNTDCP = $row->Po_Quantity;
                $Po_PcsNTDCP = $Po_PcsNTDCP + $PoPcsNTDCP;

                $PoPriceNTDCP = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceNTDCP = $Po_PriceNTDCP + $PoPriceNTDCP;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNTDCP = $row->Neg_Quantity;
                $Neg_PcsNTDCP = $Neg_PcsNTDCP + $NegPcsNTDCP;


                $NegPriceNTDCP = $NumberNTDCP * $row->Neg_Quantity;
                $Neg_PriceNTDCP = $Neg_PriceNTDCP + $NegPriceNTDCP;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNTDCP = $PCSAfterNTDCP + $PoPcsNTDCP + $NegPcsNTDCP;
                $BackChange_PcsNTDCP = $BackChange_PcsNTDCP + $BackChangePcsNTDCP;

                $BackChangePriceNTDCP = $PriceAfterNTDCP + $PoPriceNTDCP + $NegPriceNTDCP;
                $BackChange_PriceNTDCP = $BackChange_PriceNTDCP + $BackChangePriceNTDCP;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNTDCP = $row->purchase_Quantity;
                $Purchase_PcsNTDCP = $Purchase_PcsNTDCP + $PurchasePcsNTDCP;

                $PurchasePriceNTDCP = $row->purchase_Cost;
                $Purchase_PriceNTDCP = $Purchase_PriceNTDCP + $PurchasePriceNTDCP;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNTDCP = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNTDCP = $ReciveTranfer_PcsNTDCP + $ReciveTranferPcsNTDCP;

                $ReciveTranferPriceNTDCP = $ReciveTranferPcsNTDCP * $row->PriceAvg;
                $ReciveTranfer_PriceNTDCP = $ReciveTranfer_PriceNTDCP + $ReciveTranferPriceNTDCP;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNTDCP = $row->returncuses_Quantity;
                $ReturnItem_PCSNTDCP = $ReturnItem_PCSNTDCP + $ReturnItemQuantityNTDCP;

                $ReturnItemPriceNTDCP = $ReturnItemQuantityNTDCP * $NumberNTDCP;
                $ReturnItem_PriceNTDCP = $ReturnItem_PriceNTDCP + $ReturnItemPriceNTDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNTDCP = $row->purchase_Quantity + $ReciveTranferPcsNTDCP + $ReturnItemQuantityNTDCP;
                $AllIn_PcsNTDCP = $AllIn_PcsNTDCP + $AllInPcsNTDCP;

                $AllInPriceNTDCP = $PurchasePriceNTDCP + $ReciveTranferPriceNTDCP + $ReturnItemPriceNTDCP;
                $AllIn_PriceNTDCP = $AllIn_PriceNTDCP + $AllInPriceNTDCP;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNTDCP = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsNTDCP = $SendSale_PcsNTDCP + $SendSalePcsNTDCP;

                $sum = $BackChangePcsNTDCP + $AllInPcsNTDCP;
                if ($sum > 0) {
                    $SendSalePriceNTDCP = (($AllInPriceNTDCP + $BackChangePriceNTDCP) / ($AllInPcsNTDCP + $BackChangePcsNTDCP)) * $SendSalePcsNTDCP;
                    $SendSale_PriceNTDCP = $SendSale_PriceNTDCP + $SendSalePriceNTDCP;
                }else{
                    $SendSalePriceNTDCP = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNTDCP = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNTDCP = $ReciveTranOut_PcsNTDCP + $ReciveTranOutPcsNTDCP;

                $sum = $BackChangePcsNTDCP + $AllInPcsNTDCP;
                if ($sum > 0) {
                    $ReciveTranOutPriceNTDCP = (($AllInPriceNTDCP + $BackChangePriceNTDCP) / ($AllInPcsNTDCP + $BackChangePcsNTDCP)) * $ReciveTranOutPcsNTDCP;
                    $ReciveTranOut_PriceNTDCP = $ReciveTranOut_PriceNTDCP + $ReciveTranOutPriceNTDCP;
                }else{
                    $ReciveTranOutPriceNTDCP = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNTDCP = $row->returnitem_Quantity;
                $ReturnStore_PcsNTDCP = $ReturnStore_PcsNTDCP + $ReturnStorePcsNTDCP;

                $sum = $BackChangePcsNTDCP + $AllInPcsNTDCP;
                if ($sum > 0) {
                    $ReturnStorePriceNTDCP = (($AllInPriceNTDCP + $BackChangePriceNTDCP) / ($AllInPcsNTDCP + $BackChangePcsNTDCP)) * $ReturnStorePcsNTDCP;
                    $ReturnStore_PriceNTDCP = $ReturnStore_PriceNTDCP + $ReturnStorePriceNTDCP;
                }else{
                    $ReturnStorePriceNTDCP = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNTDCP = $ReturnStorePcsNTDCP + $ReciveTranOutPcsNTDCP + $SendSalePcsNTDCP;
                $AllOut_PcsNTDCP = $AllOut_PcsNTDCP + $AllOutPcsNTDCP;

                $AllOutPriceNTDCP = $SendSalePriceNTDCP + $ReciveTranOutPriceNTDCP + $ReturnStorePriceNTDCP;
                $AllOut_PriceNTDCP = $AllOut_PriceNTDCP + $AllOutPriceNTDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNTDCP = $BackChangePcsNTDCP + $AllInPcsNTDCP + $AllOutPcsNTDCP;
                $Calculate_PcsNTDCP = $Calculate_PcsNTDCP + $CalculatePcsNTDCP;

                $CalculatePriceNTDCP = $BackChangePriceNTDCP + $AllInPriceNTDCP + $AllOutPriceNTDCP;
                $Calculate_PriceNTDCP = $Calculate_PriceNTDCP + $CalculatePriceNTDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNTDCP = $row->item_stock_Quantity;
                $NewCalculate_PcsNTDCP = $NewCalculate_PcsNTDCP + $NewCalculatePcsNTDCP;

                $NewCalculatePriceNTDCP = $row->item_stock_Amount;
                $NewCalculate_PriceNTDCP = $NewCalculate_PriceNTDCP + $NewCalculatePriceNTDCP;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNTDCP = $NewCalculatePcsNTDCP - $CalculatePcsNTDCP;
                $Diff_PcsNTDCP = $Diff_PcsNTDCP + $DiffPcsNTDCP;

                $DiffPriceNTDCP = $NewCalculatePriceNTDCP - $CalculatePriceNTDCP;
                $Diff_PriceNTDCP = $Diff_PriceNTDCP + $DiffPriceNTDCP;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNTDCP = $CalculatePcsNTDCP;
                $NewTotal_PcsNTDCP = $NewTotal_PcsNTDCP + $CalculatePcsNTDCP;

                $NewTotalPriceNTDCP = $NewTotalPcsNTDCP * $row->PriceAvg;
                $NewTotal_PriceNTDCP = $NewTotal_PriceNTDCP + $NewTotalPriceNTDCP;

                $NewTotalDiffNavNTDCP = $NewTotalPriceNTDCP - $NewCalculatePriceNTDCP;
                $NewTotalDiff_NavNTDCP = $NewTotalDiff_NavNTDCP + $NewTotalDiffNavNTDCP;

                $NewTotalDiffCalNTDCP = $NewTotalPriceNTDCP - $CalculatePriceNTDCP;
                $NewTotalDiff_CalNTDCP = $NewTotalDiff_CalNTDCP + $NewTotalDiffCalNTDCP;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNTDCP = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNTDCP = $a7f1fgbu02s_PcsNTDCP + $a7f1fgbu02sPcsNTDCP;

                $a7f1fgbu02sPriceNTDCP = $a7f1fgbu02sPcsNTDCP * $row->PriceAvg;
                $a7f1fgbu02s_PriceNTDCP = $a7f1fgbu02s_PriceNTDCP + $a7f1fgbu02sPriceNTDCP;

                $a7f2fgbu10sPcsNTDCP = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNTDCP = $a7f2fgbu10s_PcsNTDCP + $a7f2fgbu10sPcsNTDCP;

                $a7f2fgbu10sPriceNTDCP = $a7f2fgbu10sPcsNTDCP * $row->PriceAvg;
                $a7f2fgbu10s_PriceNTDCP = $a7f2fgbu10s_PriceNTDCP + $a7f2fgbu10sPriceNTDCP;

                $a7f2thbu05sPcsNTDCP = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNTDCP = $a7f2thbu05s_PcsNTDCP + $a7f2thbu05sPcsNTDCP;

                $a7f2thbu05sPriceNTDCP = $a7f2thbu05sPcsNTDCP * $row->PriceAvg;
                $a7f2thbu05s_PriceNTDCP = $a7f2thbu05s_PriceNTDCP + $a7f2thbu05sPriceNTDCP;

                $a7f2debu10sPcsNTDCP = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNTDCP = $a7f2debu10s_PcsNTDCP + $a7f2debu10sPcsNTDCP;

                $a7f2debu10sPriceNTDCP = $a7f2debu10sPcsNTDCP * $row->PriceAvg;
                $a7f2debu10s_PriceNTDCP = $a7f2debu10s_PriceNTDCP + $a7f2debu10sPriceNTDCP;

                $a7f2exbu11sPcsNTDCP = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNTDCP = $a7f2exbu11s_PcsNTDCP + $a7f2exbu11sPcsNTDCP;

                $a7f2exbu11sPriceNTDCP = $a7f2exbu11sPcsNTDCP * $row->PriceAvg;
                $a7f2exbu11s_PriceNTDCP = $a7f2exbu11s_PriceNTDCP + $a7f2exbu11sPriceNTDCP;

                $a7f2twbu04sPcsNTDCP = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNTDCP = $a7f2twbu04s_PcsNTDCP + $a7f2twbu04sPcsNTDCP;

                $a7f2twbu04sPriceNTDCP = $a7f2twbu04sPcsNTDCP * $row->PriceAvg;
                $a7f2twbu04s_PriceNTDCP = $a7f2twbu04s_PriceNTDCP + $a7f2twbu04sPriceNTDCP;

                $a7f2twbu07sPcsNTDCP = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNTDCP = $a7f2twbu07s_PcsNTDCP + $a7f2twbu07sPcsNTDCP;

                $a7f2twbu07sPriceNTDCP = $a7f2twbu07sPcsNTDCP * $row->PriceAvg;
                $a7f2twbu07s_PriceNTDCP = $a7f2twbu07s_PriceNTDCP + $a7f2twbu07sPriceNTDCP;

                $a7f2cebu10sPcsNTDCP = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNTDCP = $a7f2cebu10s_PcsNTDCP + $a7f2cebu10sPcsNTDCP;

                $a7f2cebu10sPriceNTDCP = $a7f2cebu10sPcsNTDCP * $row->PriceAvg;
                $a7f2cebu10s_PriceNTDCP = $a7f2cebu10s_PriceNTDCP + $a7f2cebu10sPriceNTDCP;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNTDCP = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNTDCP = $a8f1fgbu02s_PcsNTDCP + $a8f1fgbu02sPcsNTDCP;

                $a8f1fgbu02sPriceNTDCP = $a8f1fgbu02sPcsNTDCP * $NumberNTDCP;
                $a8f1fgbu02s_PriceNTDCP = $a8f1fgbu02s_PriceNTDCP + $a8f1fgbu02sPriceNTDCP;

                $a8f2fgbu10sPcsNTDCP = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNTDCP = $a8f2fgbu10s_PcsNTDCP + $a8f2fgbu10sPcsNTDCP;

                $a8f2fgbu10sPriceNTDCP = $a8f2fgbu10sPcsNTDCP * $NumberNTDCP;
                $a8f2fgbu10s_PriceNTDCP = $a8f2fgbu10s_PriceNTDCP + $a8f2fgbu10sPriceNTDCP;

                $a8f2thbu05sPcsNTDCP = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNTDCP = $a8f2thbu05s_PcsNTDCP + $a8f2thbu05sPcsNTDCP;

                $a8f2thbu05sPriceNTDCP = $a8f2thbu05sPcsNTDCP * $NumberNTDCP;
                $a8f2thbu05s_PriceNTDCP = $a8f2thbu05s_PriceNTDCP + $a8f2thbu05sPriceNTDCP;

                $a8f2debu10sPcsNTDCP = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNTDCP = $a8f2debu10s_PcsNTDCP + $a8f2debu10sPcsNTDCP;

                $a8f2debu10sPriceNTDCP = $a8f2debu10sPcsNTDCP * $NumberNTDCP;
                $a8f2debu10s_PriceNTDCP = $a8f2debu10s_PriceNTDCP + $a8f2debu10sPriceNTDCP;

                $a8f2exbu11sPcsNTDCP = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNTDCP = $a8f2exbu11s_PcsNTDCP + $a8f2exbu11sPcsNTDCP;

                $a8f2exbu11sPriceNTDCP = $a8f2exbu11sPcsNTDCP * $NumberNTDCP;
                $a8f2exbu11s_PriceNTDCP = $a8f2exbu11s_PriceNTDCP + $a8f2exbu11sPriceNTDCP;

                $a8f2twbu04sPcsNTDCP = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNTDCP = $a8f2twbu04s_PcsNTDCP + $a8f2twbu04sPcsNTDCP;

                $a8f2twbu04sPriceNTDCP = $a8f2twbu04sPcsNTDCP * $NumberNTDCP;
                $a8f2twbu04s_PriceNTDCP = $a8f2twbu04s_PriceNTDCP + $a8f2twbu04sPriceNTDCP;

                $a8f2twbu07sPcsNTDCP = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNTDCP = $a8f2twbu07s_PcsNTDCP + $a8f2twbu07sPcsNTDCP;

                $a8f2twbu07sPriceNTDCP = $a8f2twbu07sPcsNTDCP * $NumberNTDCP;
                $a8f2twbu07s_PriceNTDCP = $a8f2twbu07s_PriceNTDCP + $a8f2twbu07sPriceNTDCP;

                $a8f2cebu10sPcsNTDCP = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNTDCP = $a8f2cebu10s_PcsNTDCP + $a8f2cebu10sPcsNTDCP;

                $a8f2cebu10sPriceNTDCP = $a8f2cebu10sPcsNTDCP * $NumberNTDCP;
                $a8f2cebu10s_PriceNTDCP = $a8f2cebu10s_PriceNTDCP + $a8f2cebu10sPriceNTDCP;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNTDCP = $row->dc1_s_Quantity;
                $DC1_PcsNTDCP = $DC1_PcsNTDCP + $DC1PcsNTDCP;

                $DC1PriceNTDCP = $DC1PcsNTDCP * $NumberNTDCP;
                $DC1_PriceNTDCP = $DC1_PriceNTDCP + $DC1PriceNTDCP;

                $DCPPcsNTDCP = $row->dcp_s_Quantity;
                $DCP_PcsNTDCP = $DCP_PcsNTDCP + $DCPPcsNTDCP;

                $DCPPriceNTDCP = $DCPPcsNTDCP * $NumberNTDCP;
                $DCP_PriceNTDCP = $DCP_PriceNTDCP + $DCPPriceNTDCP;

                $DCYPcsNTDCP = $row->dcy_s_Quantity;
                $DCY_PcsNTDCP = $DCY_PcsNTDCP + $DCYPcsNTDCP;

                $DCYPriceNTDCP = $DCYPcsNTDCP * $NumberNTDCP;
                $DCY_PriceNTDCP = $DCY_PriceNTDCP + $DCYPriceNTDCP;

                $DEXPcsNTDCP = $row->dex_s_Quantity;
                $DEX_PcsNTDCP = $DEX_PcsNTDCP + $DEXPcsNTDCP;

                $DEXPriceNTDCP = $DEXPcsNTDCP * $NumberNTDCP;
                $DEX_PriceNTDCP = $DEX_PriceNTDCP + $DEXPriceNTDCP;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "TW") && ($row->Customer == "DCP")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberTWDCP = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberTWDCP = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterTWDCP = $row->PcsAfter;
                $Pcs_AfterTWDCP = $Pcs_AfterTWDCP + $PCSAfterTWDCP;

                $PriceAfterTWDCP = $row->PriceAfter;
                $Price_AfterTWDCP = $Price_AfterTWDCP + $PriceAfterTWDCP;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsTWDCP = $row->Po_Quantity;
                $Po_PcsTWDCP = $Po_PcsTWDCP + $PoPcsTWDCP;

                $PoPriceTWDCP = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceTWDCP = $Po_PriceTWDCP + $PoPriceTWDCP;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsTWDCP = $row->Neg_Quantity;
                $Neg_PcsTWDCP = $Neg_PcsTWDCP + $NegPcsTWDCP;


                $NegPriceTWDCP = $NumberTWDCP * $row->Neg_Quantity;
                $Neg_PriceTWDCP = $Neg_PriceTWDCP + $NegPriceTWDCP;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsTWDCP = $PCSAfterTWDCP + $PoPcsTWDCP + $NegPcsTWDCP;
                $BackChange_PcsTWDCP = $BackChange_PcsTWDCP + $BackChangePcsTWDCP;

                $BackChangePriceTWDCP = $PriceAfterTWDCP + $PoPriceTWDCP + $NegPriceTWDCP;
                $BackChange_PriceTWDCP = $BackChange_PriceTWDCP + $BackChangePriceTWDCP;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsTWDCP = $row->purchase_Quantity;
                $Purchase_PcsTWDCP = $Purchase_PcsTWDCP + $PurchasePcsTWDCP;

                $PurchasePriceTWDCP = $row->purchase_Cost;
                $Purchase_PriceTWDCP = $Purchase_PriceTWDCP + $PurchasePriceTWDCP;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsTWDCP = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsTWDCP = $ReciveTranfer_PcsTWDCP + $ReciveTranferPcsTWDCP;

                $ReciveTranferPriceTWDCP = $ReciveTranferPcsTWDCP * $row->PriceAvg;
                $ReciveTranfer_PriceTWDCP = $ReciveTranfer_PriceTWDCP + $ReciveTranferPriceTWDCP;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityTWDCP = $row->returncuses_Quantity;
                $ReturnItem_PCSTWDCP = $ReturnItem_PCSTWDCP + $ReturnItemQuantityTWDCP;

                $ReturnItemPriceTWDCP = $ReturnItemQuantityTWDCP * $NumberTWDCP;
                $ReturnItem_PriceTWDCP = $ReturnItem_PriceTWDCP + $ReturnItemPriceTWDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsTWDCP = $row->purchase_Quantity + $ReciveTranferPcsTWDCP + $ReturnItemQuantityTWDCP;
                $AllIn_PcsTWDCP = $AllIn_PcsTWDCP + $AllInPcsTWDCP;

                $AllInPriceTWDCP = $PurchasePriceTWDCP + $ReciveTranferPriceTWDCP + $ReturnItemPriceTWDCP;
                $AllIn_PriceTWDCP = $AllIn_PriceTWDCP + $AllInPriceTWDCP;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsTWDCP = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsTWDCP = $SendSale_PcsTWDCP + $SendSalePcsTWDCP;

                $sum = $BackChangePcsTWDCP + $AllInPcsTWDCP;
                if ($sum > 0) {
                    $SendSalePriceTWDCP = (($AllInPriceTWDCP + $BackChangePriceTWDCP) / ($AllInPcsTWDCP + $BackChangePcsTWDCP)) * $SendSalePcsTWDCP;
                    $SendSale_PriceTWDCP = $SendSale_PriceTWDCP + $SendSalePriceTWDCP;
                }else{
                    $SendSalePriceTWDCP = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsTWDCP = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsTWDCP = $ReciveTranOut_PcsTWDCP + $ReciveTranOutPcsTWDCP;

                $sum = $BackChangePcsTWDCP + $AllInPcsTWDCP;
                if ($sum > 0) {
                    $ReciveTranOutPriceTWDCP = (($AllInPriceTWDCP + $BackChangePriceTWDCP) / ($AllInPcsTWDCP + $BackChangePcsTWDCP)) * $ReciveTranOutPcsTWDCP;
                    $ReciveTranOut_PriceTWDCP = $ReciveTranOut_PriceTWDCP + $ReciveTranOutPriceTWDCP;
                }else{
                    $ReciveTranOutPriceTWDCP = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsTWDCP = $row->returnitem_Quantity;
                $ReturnStore_PcsTWDCP = $ReturnStore_PcsTWDCP + $ReturnStorePcsTWDCP;

                $sum = $BackChangePcsTWDCP + $AllInPcsTWDCP;
                if ($sum > 0) {
                    $ReturnStorePriceTWDCP = (($AllInPriceTWDCP + $BackChangePriceTWDCP) / ($AllInPcsTWDCP + $BackChangePcsTWDCP)) * $ReturnStorePcsTWDCP;
                    $ReturnStore_PriceTWDCP = $ReturnStore_PriceTWDCP + $ReturnStorePriceTWDCP;
                }else{
                    $ReturnStorePriceTWDCP = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsTWDCP = $ReturnStorePcsTWDCP + $ReciveTranOutPcsTWDCP + $SendSalePcsTWDCP;
                $AllOut_PcsTWDCP = $AllOut_PcsTWDCP + $AllOutPcsTWDCP;

                $AllOutPriceTWDCP = $SendSalePriceTWDCP + $ReciveTranOutPriceTWDCP + $ReturnStorePriceTWDCP;
                $AllOut_PriceTWDCP = $AllOut_PriceTWDCP + $AllOutPriceTWDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsTWDCP = $BackChangePcsTWDCP + $AllInPcsTWDCP + $AllOutPcsTWDCP;
                $Calculate_PcsTWDCP = $Calculate_PcsTWDCP + $CalculatePcsTWDCP;

                $CalculatePriceTWDCP = $BackChangePriceTWDCP + $AllInPriceTWDCP + $AllOutPriceTWDCP;
                $Calculate_PriceTWDCP = $Calculate_PriceTWDCP + $CalculatePriceTWDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsTWDCP = $row->item_stock_Quantity;
                $NewCalculate_PcsTWDCP = $NewCalculate_PcsTWDCP + $NewCalculatePcsTWDCP;

                $NewCalculatePriceTWDCP = $row->item_stock_Amount;
                $NewCalculate_PriceTWDCP = $NewCalculate_PriceTWDCP + $NewCalculatePriceTWDCP;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsTWDCP = $NewCalculatePcsTWDCP - $CalculatePcsTWDCP;
                $Diff_PcsTWDCP = $Diff_PcsTWDCP + $DiffPcsTWDCP;

                $DiffPriceTWDCP = $NewCalculatePriceTWDCP - $CalculatePriceTWDCP;
                $Diff_PriceTWDCP = $Diff_PriceTWDCP + $DiffPriceTWDCP;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsTWDCP = $CalculatePcsTWDCP;
                $NewTotal_PcsTWDCP = $NewTotal_PcsTWDCP + $CalculatePcsTWDCP;

                $NewTotalPriceTWDCP = $NewTotalPcsTWDCP * $row->PriceAvg;
                $NewTotal_PriceTWDCP = $NewTotal_PriceTWDCP + $NewTotalPriceTWDCP;

                $NewTotalDiffNavTWDCP = $NewTotalPriceTWDCP - $NewCalculatePriceTWDCP;
                $NewTotalDiff_NavTWDCP = $NewTotalDiff_NavTWDCP + $NewTotalDiffNavTWDCP;

                $NewTotalDiffCalTWDCP = $NewTotalPriceTWDCP - $CalculatePriceTWDCP;
                $NewTotalDiff_CalTWDCP = $NewTotalDiff_CalTWDCP + $NewTotalDiffCalTWDCP;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsTWDCP = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsTWDCP = $a7f1fgbu02s_PcsTWDCP + $a7f1fgbu02sPcsTWDCP;

                $a7f1fgbu02sPriceTWDCP = $a7f1fgbu02sPcsTWDCP * $row->PriceAvg;
                $a7f1fgbu02s_PriceTWDCP = $a7f1fgbu02s_PriceTWDCP + $a7f1fgbu02sPriceTWDCP;

                $a7f2fgbu10sPcsTWDCP = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsTWDCP = $a7f2fgbu10s_PcsTWDCP + $a7f2fgbu10sPcsTWDCP;

                $a7f2fgbu10sPriceTWDCP = $a7f2fgbu10sPcsTWDCP * $row->PriceAvg;
                $a7f2fgbu10s_PriceTWDCP = $a7f2fgbu10s_PriceTWDCP + $a7f2fgbu10sPriceTWDCP;

                $a7f2thbu05sPcsTWDCP = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsTWDCP = $a7f2thbu05s_PcsTWDCP + $a7f2thbu05sPcsTWDCP;

                $a7f2thbu05sPriceTWDCP = $a7f2thbu05sPcsTWDCP * $row->PriceAvg;
                $a7f2thbu05s_PriceTWDCP = $a7f2thbu05s_PriceTWDCP + $a7f2thbu05sPriceTWDCP;

                $a7f2debu10sPcsTWDCP = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsTWDCP = $a7f2debu10s_PcsTWDCP + $a7f2debu10sPcsTWDCP;

                $a7f2debu10sPriceTWDCP = $a7f2debu10sPcsTWDCP * $row->PriceAvg;
                $a7f2debu10s_PriceTWDCP = $a7f2debu10s_PriceTWDCP + $a7f2debu10sPriceTWDCP;

                $a7f2exbu11sPcsTWDCP = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsTWDCP = $a7f2exbu11s_PcsTWDCP + $a7f2exbu11sPcsTWDCP;

                $a7f2exbu11sPriceTWDCP = $a7f2exbu11sPcsTWDCP * $row->PriceAvg;
                $a7f2exbu11s_PriceTWDCP = $a7f2exbu11s_PriceTWDCP + $a7f2exbu11sPriceTWDCP;

                $a7f2twbu04sPcsTWDCP = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsTWDCP = $a7f2twbu04s_PcsTWDCP + $a7f2twbu04sPcsTWDCP;

                $a7f2twbu04sPriceTWDCP = $a7f2twbu04sPcsTWDCP * $row->PriceAvg;
                $a7f2twbu04s_PriceTWDCP = $a7f2twbu04s_PriceTWDCP + $a7f2twbu04sPriceTWDCP;

                $a7f2twbu07sPcsTWDCP = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsTWDCP = $a7f2twbu07s_PcsTWDCP + $a7f2twbu07sPcsTWDCP;

                $a7f2twbu07sPriceTWDCP = $a7f2twbu07sPcsTWDCP * $row->PriceAvg;
                $a7f2twbu07s_PriceTWDCP = $a7f2twbu07s_PriceTWDCP + $a7f2twbu07sPriceTWDCP;

                $a7f2cebu10sPcsTWDCP = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsTWDCP = $a7f2cebu10s_PcsTWDCP + $a7f2cebu10sPcsTWDCP;

                $a7f2cebu10sPriceTWDCP = $a7f2cebu10sPcsTWDCP * $row->PriceAvg;
                $a7f2cebu10s_PriceTWDCP = $a7f2cebu10s_PriceTWDCP + $a7f2cebu10sPriceTWDCP;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsTWDCP = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsTWDCP = $a8f1fgbu02s_PcsTWDCP + $a8f1fgbu02sPcsTWDCP;

                $a8f1fgbu02sPriceTWDCP = $a8f1fgbu02sPcsTWDCP * $NumberTWDCP;
                $a8f1fgbu02s_PriceTWDCP = $a8f1fgbu02s_PriceTWDCP + $a8f1fgbu02sPriceTWDCP;

                $a8f2fgbu10sPcsTWDCP = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsTWDCP = $a8f2fgbu10s_PcsTWDCP + $a8f2fgbu10sPcsTWDCP;

                $a8f2fgbu10sPriceTWDCP = $a8f2fgbu10sPcsTWDCP * $NumberTWDCP;
                $a8f2fgbu10s_PriceTWDCP = $a8f2fgbu10s_PriceTWDCP + $a8f2fgbu10sPriceTWDCP;

                $a8f2thbu05sPcsTWDCP = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsTWDCP = $a8f2thbu05s_PcsTWDCP + $a8f2thbu05sPcsTWDCP;

                $a8f2thbu05sPriceTWDCP = $a8f2thbu05sPcsTWDCP * $NumberTWDCP;
                $a8f2thbu05s_PriceTWDCP = $a8f2thbu05s_PriceTWDCP + $a8f2thbu05sPriceTWDCP;

                $a8f2debu10sPcsTWDCP = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsTWDCP = $a8f2debu10s_PcsTWDCP + $a8f2debu10sPcsTWDCP;

                $a8f2debu10sPriceTWDCP = $a8f2debu10sPcsTWDCP * $NumberTWDCP;
                $a8f2debu10s_PriceTWDCP = $a8f2debu10s_PriceTWDCP + $a8f2debu10sPriceTWDCP;

                $a8f2exbu11sPcsTWDCP = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsTWDCP = $a8f2exbu11s_PcsTWDCP + $a8f2exbu11sPcsTWDCP;

                $a8f2exbu11sPriceTWDCP = $a8f2exbu11sPcsTWDCP * $NumberTWDCP;
                $a8f2exbu11s_PriceTWDCP = $a8f2exbu11s_PriceTWDCP + $a8f2exbu11sPriceTWDCP;

                $a8f2twbu04sPcsTWDCP = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsTWDCP = $a8f2twbu04s_PcsTWDCP + $a8f2twbu04sPcsTWDCP;

                $a8f2twbu04sPriceTWDCP = $a8f2twbu04sPcsTWDCP * $NumberTWDCP;
                $a8f2twbu04s_PriceTWDCP = $a8f2twbu04s_PriceTWDCP + $a8f2twbu04sPriceTWDCP;

                $a8f2twbu07sPcsTWDCP = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsTWDCP = $a8f2twbu07s_PcsTWDCP + $a8f2twbu07sPcsTWDCP;

                $a8f2twbu07sPriceTWDCP = $a8f2twbu07sPcsTWDCP * $NumberTWDCP;
                $a8f2twbu07s_PriceTWDCP = $a8f2twbu07s_PriceTWDCP + $a8f2twbu07sPriceTWDCP;

                $a8f2cebu10sPcsTWDCP = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsTWDCP = $a8f2cebu10s_PcsTWDCP + $a8f2cebu10sPcsTWDCP;

                $a8f2cebu10sPriceTWDCP = $a8f2cebu10sPcsTWDCP * $NumberTWDCP;
                $a8f2cebu10s_PriceTWDCP = $a8f2cebu10s_PriceTWDCP + $a8f2cebu10sPriceTWDCP;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsTWDCP = $row->dc1_s_Quantity;
                $DC1_PcsTWDCP = $DC1_PcsTWDCP + $DC1PcsTWDCP;

                $DC1PriceTWDCP = $DC1PcsTWDCP * $NumberTWDCP;
                $DC1_PriceTWDCP = $DC1_PriceTWDCP + $DC1PriceTWDCP;

                $DCPPcsTWDCP = $row->dcp_s_Quantity;
                $DCP_PcsTWDCP = $DCP_PcsTWDCP + $DCPPcsTWDCP;

                $DCPPriceTWDCP = $DCPPcsTWDCP * $NumberTWDCP;
                $DCP_PriceTWDCP = $DCP_PriceTWDCP + $DCPPriceTWDCP;

                $DCYPcsTWDCP = $row->dcy_s_Quantity;
                $DCY_PcsTWDCP = $DCY_PcsTWDCP + $DCYPcsTWDCP;

                $DCYPriceTWDCP = $DCYPcsTWDCP * $NumberTWDCP;
                $DCY_PriceTWDCP = $DCY_PriceTWDCP + $DCYPriceTWDCP;

                $DEXPcsTWDCP = $row->dex_s_Quantity;
                $DEX_PcsTWDCP = $DEX_PcsTWDCP + $DEXPcsTWDCP;

                $DEXPriceTWDCP = $DEXPcsTWDCP * $NumberTWDCP;
                $DEX_PriceTWDCP = $DEX_PriceTWDCP + $DEXPriceTWDCP;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "LN") && ($row->Customer == "DCP")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberLNDCP = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberLNDCP = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterLNDCP = $row->PcsAfter;
                $Pcs_AfterLNDCP = $Pcs_AfterLNDCP + $PCSAfterLNDCP;

                $PriceAfterLNDCP = $row->PriceAfter;
                $Price_AfterLNDCP = $Price_AfterLNDCP + $PriceAfterLNDCP;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsLNDCP = $row->Po_Quantity;
                $Po_PcsLNDCP = $Po_PcsLNDCP + $PoPcsLNDCP;

                $PoPriceLNDCP = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceLNDCP = $Po_PriceLNDCP + $PoPriceLNDCP;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsLNDCP = $row->Neg_Quantity;
                $Neg_PcsLNDCP = $Neg_PcsLNDCP + $NegPcsLNDCP;


                $NegPriceLNDCP = $NumberLNDCP * $row->Neg_Quantity;
                $Neg_PriceLNDCP = $Neg_PriceLNDCP + $NegPriceLNDCP;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsLNDCP = $PCSAfterLNDCP + $PoPcsLNDCP + $NegPcsLNDCP;
                $BackChange_PcsLNDCP = $BackChange_PcsLNDCP + $BackChangePcsLNDCP;

                $BackChangePriceLNDCP = $PriceAfterLNDCP + $PoPriceLNDCP + $NegPriceLNDCP;
                $BackChange_PriceLNDCP = $BackChange_PriceLNDCP + $BackChangePriceLNDCP;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsLNDCP = $row->purchase_Quantity;
                $Purchase_PcsLNDCP = $Purchase_PcsLNDCP + $PurchasePcsLNDCP;

                $PurchasePriceLNDCP = $row->purchase_Cost;
                $Purchase_PriceLNDCP = $Purchase_PriceLNDCP + $PurchasePriceLNDCP;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsLNDCP = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsLNDCP = $ReciveTranfer_PcsLNDCP + $ReciveTranferPcsLNDCP;

                $ReciveTranferPriceLNDCP = $ReciveTranferPcsLNDCP * $row->PriceAvg;
                $ReciveTranfer_PriceLNDCP = $ReciveTranfer_PriceLNDCP + $ReciveTranferPriceLNDCP;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityLNDCP = $row->returncuses_Quantity;
                $ReturnItem_PCSLNDCP = $ReturnItem_PCSLNDCP + $ReturnItemQuantityLNDCP;

                $ReturnItemPriceLNDCP = $ReturnItemQuantityLNDCP * $NumberLNDCP;
                $ReturnItem_PriceLNDCP = $ReturnItem_PriceLNDCP + $ReturnItemPriceLNDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsLNDCP = $row->purchase_Quantity + $ReciveTranferPcsLNDCP + $ReturnItemQuantityLNDCP;
                $AllIn_PcsLNDCP = $AllIn_PcsLNDCP + $AllInPcsLNDCP;

                $AllInPriceLNDCP = $PurchasePriceLNDCP + $ReciveTranferPriceLNDCP + $ReturnItemPriceLNDCP;
                $AllIn_PriceLNDCP = $AllIn_PriceLNDCP + $AllInPriceLNDCP;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsLNDCP = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsLNDCP = $SendSale_PcsLNDCP + $SendSalePcsLNDCP;

                $sum = $BackChangePcsLNDCP + $AllInPcsLNDCP;
                if ($sum > 0) {
                    $SendSalePriceLNDCP = (($AllInPriceLNDCP + $BackChangePriceLNDCP) / ($AllInPcsLNDCP + $BackChangePcsLNDCP)) * $SendSalePcsLNDCP;
                    $SendSale_PriceLNDCP = $SendSale_PriceLNDCP + $SendSalePriceLNDCP;
                }else{
                    $SendSalePriceLNDCP = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsLNDCP = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsLNDCP = $ReciveTranOut_PcsLNDCP + $ReciveTranOutPcsLNDCP;

                $sum = $BackChangePcsLNDCP + $AllInPcsLNDCP;
                if ($sum > 0) {
                    $ReciveTranOutPriceLNDCP = (($AllInPriceLNDCP + $BackChangePriceLNDCP) / ($AllInPcsLNDCP + $BackChangePcsLNDCP)) * $ReciveTranOutPcsLNDCP;
                    $ReciveTranOut_PriceLNDCP = $ReciveTranOut_PriceLNDCP + $ReciveTranOutPriceLNDCP;
                }else{
                    $ReciveTranOutPriceLNDCP = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsLNDCP = $row->returnitem_Quantity;
                $ReturnStore_PcsLNDCP = $ReturnStore_PcsLNDCP + $ReturnStorePcsLNDCP;

                $sum = $BackChangePcsLNDCP + $AllInPcsLNDCP;
                if ($sum > 0) {
                    $ReturnStorePriceLNDCP = (($AllInPriceLNDCP + $BackChangePriceLNDCP) / ($AllInPcsLNDCP + $BackChangePcsLNDCP)) * $ReturnStorePcsLNDCP;
                    $ReturnStore_PriceLNDCP = $ReturnStore_PriceLNDCP + $ReturnStorePriceLNDCP;
                }else{
                    $ReturnStorePriceLNDCP = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsLNDCP = $ReturnStorePcsLNDCP + $ReciveTranOutPcsLNDCP + $SendSalePcsLNDCP;
                $AllOut_PcsLNDCP = $AllOut_PcsLNDCP + $AllOutPcsLNDCP;

                $AllOutPriceLNDCP = $SendSalePriceLNDCP + $ReciveTranOutPriceLNDCP + $ReturnStorePriceLNDCP;
                $AllOut_PriceLNDCP = $AllOut_PriceLNDCP + $AllOutPriceLNDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsLNDCP = $BackChangePcsLNDCP + $AllInPcsLNDCP + $AllOutPcsLNDCP;
                $Calculate_PcsLNDCP = $Calculate_PcsLNDCP + $CalculatePcsLNDCP;

                $CalculatePriceLNDCP = $BackChangePriceLNDCP + $AllInPriceLNDCP + $AllOutPriceLNDCP;
                $Calculate_PriceLNDCP = $Calculate_PriceLNDCP + $CalculatePriceLNDCP;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsLNDCP = $row->item_stock_Quantity;
                $NewCalculate_PcsLNDCP = $NewCalculate_PcsLNDCP + $NewCalculatePcsLNDCP;

                $NewCalculatePriceLNDCP = $row->item_stock_Amount;
                $NewCalculate_PriceLNDCP = $NewCalculate_PriceLNDCP + $NewCalculatePriceLNDCP;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsLNDCP = $NewCalculatePcsLNDCP - $CalculatePcsLNDCP;
                $Diff_PcsLNDCP = $Diff_PcsLNDCP + $DiffPcsLNDCP;

                $DiffPriceLNDCP = $NewCalculatePriceLNDCP - $CalculatePriceLNDCP;
                $Diff_PriceLNDCP = $Diff_PriceLNDCP + $DiffPriceLNDCP;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsLNDCP = $CalculatePcsLNDCP;
                $NewTotal_PcsLNDCP = $NewTotal_PcsLNDCP + $CalculatePcsLNDCP;

                $NewTotalPriceLNDCP = $NewTotalPcsLNDCP * $row->PriceAvg;
                $NewTotal_PriceLNDCP = $NewTotal_PriceLNDCP + $NewTotalPriceLNDCP;

                $NewTotalDiffNavLNDCP = $NewTotalPriceLNDCP - $NewCalculatePriceLNDCP;
                $NewTotalDiff_NavLNDCP = $NewTotalDiff_NavLNDCP + $NewTotalDiffNavLNDCP;

                $NewTotalDiffCalLNDCP = $NewTotalPriceLNDCP - $CalculatePriceLNDCP;
                $NewTotalDiff_CalLNDCP = $NewTotalDiff_CalLNDCP + $NewTotalDiffCalLNDCP;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsLNDCP = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsLNDCP = $a7f1fgbu02s_PcsLNDCP + $a7f1fgbu02sPcsLNDCP;

                $a7f1fgbu02sPriceLNDCP = $a7f1fgbu02sPcsLNDCP * $row->PriceAvg;
                $a7f1fgbu02s_PriceLNDCP = $a7f1fgbu02s_PriceLNDCP + $a7f1fgbu02sPriceLNDCP;

                $a7f2fgbu10sPcsLNDCP = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsLNDCP = $a7f2fgbu10s_PcsLNDCP + $a7f2fgbu10sPcsLNDCP;

                $a7f2fgbu10sPriceLNDCP = $a7f2fgbu10sPcsLNDCP * $row->PriceAvg;
                $a7f2fgbu10s_PriceLNDCP = $a7f2fgbu10s_PriceLNDCP + $a7f2fgbu10sPriceLNDCP;

                $a7f2thbu05sPcsLNDCP = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsLNDCP = $a7f2thbu05s_PcsLNDCP + $a7f2thbu05sPcsLNDCP;

                $a7f2thbu05sPriceLNDCP = $a7f2thbu05sPcsLNDCP * $row->PriceAvg;
                $a7f2thbu05s_PriceLNDCP = $a7f2thbu05s_PriceLNDCP + $a7f2thbu05sPriceLNDCP;

                $a7f2debu10sPcsLNDCP = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsLNDCP = $a7f2debu10s_PcsLNDCP + $a7f2debu10sPcsLNDCP;

                $a7f2debu10sPriceLNDCP = $a7f2debu10sPcsLNDCP * $row->PriceAvg;
                $a7f2debu10s_PriceLNDCP = $a7f2debu10s_PriceLNDCP + $a7f2debu10sPriceLNDCP;

                $a7f2exbu11sPcsLNDCP = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsLNDCP = $a7f2exbu11s_PcsLNDCP + $a7f2exbu11sPcsLNDCP;

                $a7f2exbu11sPriceLNDCP = $a7f2exbu11sPcsLNDCP * $row->PriceAvg;
                $a7f2exbu11s_PriceLNDCP = $a7f2exbu11s_PriceLNDCP + $a7f2exbu11sPriceLNDCP;

                $a7f2twbu04sPcsLNDCP = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsLNDCP = $a7f2twbu04s_PcsLNDCP + $a7f2twbu04sPcsLNDCP;

                $a7f2twbu04sPriceLNDCP = $a7f2twbu04sPcsLNDCP * $row->PriceAvg;
                $a7f2twbu04s_PriceLNDCP = $a7f2twbu04s_PriceLNDCP + $a7f2twbu04sPriceLNDCP;

                $a7f2twbu07sPcsLNDCP = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsLNDCP = $a7f2twbu07s_PcsLNDCP + $a7f2twbu07sPcsLNDCP;

                $a7f2twbu07sPriceLNDCP = $a7f2twbu07sPcsLNDCP * $row->PriceAvg;
                $a7f2twbu07s_PriceLNDCP = $a7f2twbu07s_PriceLNDCP + $a7f2twbu07sPriceLNDCP;

                $a7f2cebu10sPcsLNDCP = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsLNDCP = $a7f2cebu10s_PcsLNDCP + $a7f2cebu10sPcsLNDCP;

                $a7f2cebu10sPriceLNDCP = $a7f2cebu10sPcsLNDCP * $row->PriceAvg;
                $a7f2cebu10s_PriceLNDCP = $a7f2cebu10s_PriceLNDCP + $a7f2cebu10sPriceLNDCP;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsLNDCP = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsLNDCP = $a8f1fgbu02s_PcsLNDCP + $a8f1fgbu02sPcsLNDCP;

                $a8f1fgbu02sPriceLNDCP = $a8f1fgbu02sPcsLNDCP * $NumberLNDCP;
                $a8f1fgbu02s_PriceLNDCP = $a8f1fgbu02s_PriceLNDCP + $a8f1fgbu02sPriceLNDCP;

                $a8f2fgbu10sPcsLNDCP = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsLNDCP = $a8f2fgbu10s_PcsLNDCP + $a8f2fgbu10sPcsLNDCP;

                $a8f2fgbu10sPriceLNDCP = $a8f2fgbu10sPcsLNDCP * $NumberLNDCP;
                $a8f2fgbu10s_PriceLNDCP = $a8f2fgbu10s_PriceLNDCP + $a8f2fgbu10sPriceLNDCP;

                $a8f2thbu05sPcsLNDCP = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsLNDCP = $a8f2thbu05s_PcsLNDCP + $a8f2thbu05sPcsLNDCP;

                $a8f2thbu05sPriceLNDCP = $a8f2thbu05sPcsLNDCP * $NumberLNDCP;
                $a8f2thbu05s_PriceLNDCP = $a8f2thbu05s_PriceLNDCP + $a8f2thbu05sPriceLNDCP;

                $a8f2debu10sPcsLNDCP = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsLNDCP = $a8f2debu10s_PcsLNDCP + $a8f2debu10sPcsLNDCP;

                $a8f2debu10sPriceLNDCP = $a8f2debu10sPcsLNDCP * $NumberLNDCP;
                $a8f2debu10s_PriceLNDCP = $a8f2debu10s_PriceLNDCP + $a8f2debu10sPriceLNDCP;

                $a8f2exbu11sPcsLNDCP = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsLNDCP = $a8f2exbu11s_PcsLNDCP + $a8f2exbu11sPcsLNDCP;

                $a8f2exbu11sPriceLNDCP = $a8f2exbu11sPcsLNDCP * $NumberLNDCP;
                $a8f2exbu11s_PriceLNDCP = $a8f2exbu11s_PriceLNDCP + $a8f2exbu11sPriceLNDCP;

                $a8f2twbu04sPcsLNDCP = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsLNDCP = $a8f2twbu04s_PcsLNDCP + $a8f2twbu04sPcsLNDCP;

                $a8f2twbu04sPriceLNDCP = $a8f2twbu04sPcsLNDCP * $NumberLNDCP;
                $a8f2twbu04s_PriceLNDCP = $a8f2twbu04s_PriceLNDCP + $a8f2twbu04sPriceLNDCP;

                $a8f2twbu07sPcsLNDCP = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsLNDCP = $a8f2twbu07s_PcsLNDCP + $a8f2twbu07sPcsLNDCP;

                $a8f2twbu07sPriceLNDCP = $a8f2twbu07sPcsLNDCP * $NumberLNDCP;
                $a8f2twbu07s_PriceLNDCP = $a8f2twbu07s_PriceLNDCP + $a8f2twbu07sPriceLNDCP;

                $a8f2cebu10sPcsLNDCP = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsLNDCP = $a8f2cebu10s_PcsLNDCP + $a8f2cebu10sPcsLNDCP;

                $a8f2cebu10sPriceLNDCP = $a8f2cebu10sPcsLNDCP * $NumberLNDCP;
                $a8f2cebu10s_PriceLNDCP = $a8f2cebu10s_PriceLNDCP + $a8f2cebu10sPriceLNDCP;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsLNDCP = $row->dc1_s_Quantity;
                $DC1_PcsLNDCP = $DC1_PcsLNDCP + $DC1PcsLNDCP;

                $DC1PriceLNDCP = $DC1PcsLNDCP * $NumberLNDCP;
                $DC1_PriceLNDCP = $DC1_PriceLNDCP + $DC1PriceLNDCP;

                $DCPPcsLNDCP = $row->dcp_s_Quantity;
                $DCP_PcsLNDCP = $DCP_PcsLNDCP + $DCPPcsLNDCP;

                $DCPPriceLNDCP = $DCPPcsLNDCP * $NumberLNDCP;
                $DCP_PriceLNDCP = $DCP_PriceLNDCP + $DCPPriceLNDCP;

                $DCYPcsLNDCP = $row->dcy_s_Quantity;
                $DCY_PcsLNDCP = $DCY_PcsLNDCP + $DCYPcsLNDCP;

                $DCYPriceLNDCP = $DCYPcsLNDCP * $NumberLNDCP;
                $DCY_PriceLNDCP = $DCY_PriceLNDCP + $DCYPriceLNDCP;

                $DEXPcsLNDCP = $row->dex_s_Quantity;
                $DEX_PcsLNDCP = $DEX_PcsLNDCP + $DEXPcsLNDCP;

                $DEXPriceLNDCP = $DEXPcsLNDCP * $NumberLNDCP;
                $DEX_PriceLNDCP = $DEX_PriceLNDCP + $DEXPriceLNDCP;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "NT") && ($row->Customer != "DC1" || $row->Customer != "DCY" || $row->Customer != "DCP" || $row->Customer != "DCI" || $row->Customer != "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberNTCountry = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberNTCountry = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterNTCountry = $row->PcsAfter;
                $Pcs_AfterNTCountry = $Pcs_AfterNTCountry + $PCSAfterNTCountry;

                $PriceAfterNTCountry = $row->PriceAfter;
                $Price_AfterNTCountry = $Price_AfterNTCountry + $PriceAfterNTCountry;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsNTCountry = $row->Po_Quantity;
                $Po_PcsNTCountry = $Po_PcsNTCountry + $PoPcsNTCountry;

                $PoPriceNTCountry = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceNTCountry = $Po_PriceNTCountry + $PoPriceNTCountry;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsNTCountry = $row->Neg_Quantity;
                $Neg_PcsNTCountry = $Neg_PcsNTCountry + $NegPcsNTCountry;


                $NegPriceNTCountry = $NumberNTCountry * $row->Neg_Quantity;
                $Neg_PriceNTCountry = $Neg_PriceNTCountry + $NegPriceNTCountry;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsNTCountry = $PCSAfterNTCountry + $PoPcsNTCountry + $NegPcsNTCountry;
                $BackChange_PcsNTCountry = $BackChange_PcsNTCountry + $BackChangePcsNTCountry;

                $BackChangePriceNTCountry = $PriceAfterNTCountry + $PoPriceNTCountry + $NegPriceNTCountry;
                $BackChange_PriceNTCountry = $BackChange_PriceNTCountry + $BackChangePriceNTCountry;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsNTCountry = $row->purchase_Quantity;
                $Purchase_PcsNTCountry = $Purchase_PcsNTCountry + $PurchasePcsNTCountry;

                $PurchasePriceNTCountry = $row->purchase_Cost;
                $Purchase_PriceNTCountry = $Purchase_PriceNTCountry + $PurchasePriceNTCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsNTCountry = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsNTCountry = $ReciveTranfer_PcsNTCountry + $ReciveTranferPcsNTCountry;

                $ReciveTranferPriceNTCountry = $ReciveTranferPcsNTCountry * $row->PriceAvg;
                $ReciveTranfer_PriceNTCountry = $ReciveTranfer_PriceNTCountry + $ReciveTranferPriceNTCountry;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityNTCountry = $row->returncuses_Quantity;
                $ReturnItem_PCSNTCountry = $ReturnItem_PCSNTCountry + $ReturnItemQuantityNTCountry;

                $ReturnItemPriceNTCountry = $ReturnItemQuantityNTCountry * $NumberNTCountry;
                $ReturnItem_PriceNTCountry = $ReturnItem_PriceNTCountry + $ReturnItemPriceNTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsNTCountry = $row->purchase_Quantity + $ReciveTranferPcsNTCountry + $ReturnItemQuantityNTCountry;
                $AllIn_PcsNTCountry = $AllIn_PcsNTCountry + $AllInPcsNTCountry;

                $AllInPriceNTCountry = $PurchasePriceNTCountry + $ReciveTranferPriceNTCountry + $ReturnItemPriceNTCountry;
                $AllIn_PriceNTCountry = $AllIn_PriceNTCountry + $AllInPriceNTCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsNTCountry = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsNTCountry = $SendSale_PcsNTCountry + $SendSalePcsNTCountry;

                $sum = $BackChangePcsNTCountry + $AllInPcsNTCountry;
                if ($sum > 0) {
                    $SendSalePriceNTCountry = (($AllInPriceNTCountry + $BackChangePriceNTCountry) / ($AllInPcsNTCountry + $BackChangePcsNTCountry)) * $SendSalePcsNTCountry;
                    $SendSale_PriceNTCountry = $SendSale_PriceNTCountry + $SendSalePriceNTCountry;
                }else{
                    $SendSalePriceNTCountry = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsNTCountry = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsNTCountry = $ReciveTranOut_PcsNTCountry + $ReciveTranOutPcsNTCountry;

                $sum = $BackChangePcsNTCountry + $AllInPcsNTCountry;
                if ($sum > 0) {
                    $ReciveTranOutPriceNTCountry = (($AllInPriceNTCountry + $BackChangePriceNTCountry) / ($AllInPcsNTCountry + $BackChangePcsNTCountry)) * $ReciveTranOutPcsNTCountry;
                    $ReciveTranOut_PriceNTCountry = $ReciveTranOut_PriceNTCountry + $ReciveTranOutPriceNTCountry;
                }else{
                    $ReciveTranOutPriceNTCountry = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsNTCountry = $row->returnitem_Quantity;
                $ReturnStore_PcsNTCountry = $ReturnStore_PcsNTCountry + $ReturnStorePcsNTCountry;

                $sum = $BackChangePcsNTCountry + $AllInPcsNTCountry;
                if ($sum > 0) {
                    $ReturnStorePriceNTCountry = (($AllInPriceNTCountry + $BackChangePriceNTCountry) / ($AllInPcsNTCountry + $BackChangePcsNTCountry)) * $ReturnStorePcsNTCountry;
                    $ReturnStore_PriceNTCountry = $ReturnStore_PriceNTCountry + $ReturnStorePriceNTCountry;
                }else{
                    $ReturnStorePriceNTCountry = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsNTCountry = $ReturnStorePcsNTCountry + $ReciveTranOutPcsNTCountry + $SendSalePcsNTCountry;
                $AllOut_PcsNTCountry = $AllOut_PcsNTCountry + $AllOutPcsNTCountry;

                $AllOutPriceNTCountry = $SendSalePriceNTCountry + $ReciveTranOutPriceNTCountry + $ReturnStorePriceNTCountry;
                $AllOut_PriceNTCountry = $AllOut_PriceNTCountry + $AllOutPriceNTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsNTCountry = $BackChangePcsNTCountry + $AllInPcsNTCountry + $AllOutPcsNTCountry;
                $Calculate_PcsNTCountry = $Calculate_PcsNTCountry + $CalculatePcsNTCountry;

                $CalculatePriceNTCountry = $BackChangePriceNTCountry + $AllInPriceNTCountry + $AllOutPriceNTCountry;
                $Calculate_PriceNTCountry = $Calculate_PriceNTCountry + $CalculatePriceNTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsNTCountry = $row->item_stock_Quantity;
                $NewCalculate_PcsNTCountry = $NewCalculate_PcsNTCountry + $NewCalculatePcsNTCountry;

                $NewCalculatePriceNTCountry = $row->item_stock_Amount;
                $NewCalculate_PriceNTCountry = $NewCalculate_PriceNTCountry + $NewCalculatePriceNTCountry;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsNTCountry = $NewCalculatePcsNTCountry - $CalculatePcsNTCountry;
                $Diff_PcsNTCountry = $Diff_PcsNTCountry + $DiffPcsNTCountry;

                $DiffPriceNTCountry = $NewCalculatePriceNTCountry - $CalculatePriceNTCountry;
                $Diff_PriceNTCountry = $Diff_PriceNTCountry + $DiffPriceNTCountry;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsNTCountry = $CalculatePcsNTCountry;
                $NewTotal_PcsNTCountry = $NewTotal_PcsNTCountry + $CalculatePcsNTCountry;

                $NewTotalPriceNTCountry = $NewTotalPcsNTCountry * $row->PriceAvg;
                $NewTotal_PriceNTCountry = $NewTotal_PriceNTCountry + $NewTotalPriceNTCountry;

                $NewTotalDiffNavNTCountry = $NewTotalPriceNTCountry - $NewCalculatePriceNTCountry;
                $NewTotalDiff_NavNTCountry = $NewTotalDiff_NavNTCountry + $NewTotalDiffNavNTCountry;

                $NewTotalDiffCalNTCountry = $NewTotalPriceNTCountry - $CalculatePriceNTCountry;
                $NewTotalDiff_CalNTCountry = $NewTotalDiff_CalNTCountry + $NewTotalDiffCalNTCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsNTCountry = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsNTCountry = $a7f1fgbu02s_PcsNTCountry + $a7f1fgbu02sPcsNTCountry;

                $a7f1fgbu02sPriceNTCountry = $a7f1fgbu02sPcsNTCountry * $row->PriceAvg;
                $a7f1fgbu02s_PriceNTCountry = $a7f1fgbu02s_PriceNTCountry + $a7f1fgbu02sPriceNTCountry;

                $a7f2fgbu10sPcsNTCountry = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsNTCountry = $a7f2fgbu10s_PcsNTCountry + $a7f2fgbu10sPcsNTCountry;

                $a7f2fgbu10sPriceNTCountry = $a7f2fgbu10sPcsNTCountry * $row->PriceAvg;
                $a7f2fgbu10s_PriceNTCountry = $a7f2fgbu10s_PriceNTCountry + $a7f2fgbu10sPriceNTCountry;

                $a7f2thbu05sPcsNTCountry = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsNTCountry = $a7f2thbu05s_PcsNTCountry + $a7f2thbu05sPcsNTCountry;

                $a7f2thbu05sPriceNTCountry = $a7f2thbu05sPcsNTCountry * $row->PriceAvg;
                $a7f2thbu05s_PriceNTCountry = $a7f2thbu05s_PriceNTCountry + $a7f2thbu05sPriceNTCountry;

                $a7f2debu10sPcsNTCountry = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsNTCountry = $a7f2debu10s_PcsNTCountry + $a7f2debu10sPcsNTCountry;

                $a7f2debu10sPriceNTCountry = $a7f2debu10sPcsNTCountry * $row->PriceAvg;
                $a7f2debu10s_PriceNTCountry = $a7f2debu10s_PriceNTCountry + $a7f2debu10sPriceNTCountry;

                $a7f2exbu11sPcsNTCountry = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsNTCountry = $a7f2exbu11s_PcsNTCountry + $a7f2exbu11sPcsNTCountry;

                $a7f2exbu11sPriceNTCountry = $a7f2exbu11sPcsNTCountry * $row->PriceAvg;
                $a7f2exbu11s_PriceNTCountry = $a7f2exbu11s_PriceNTCountry + $a7f2exbu11sPriceNTCountry;

                $a7f2twbu04sPcsNTCountry = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsNTCountry = $a7f2twbu04s_PcsNTCountry + $a7f2twbu04sPcsNTCountry;

                $a7f2twbu04sPriceNTCountry = $a7f2twbu04sPcsNTCountry * $row->PriceAvg;
                $a7f2twbu04s_PriceNTCountry = $a7f2twbu04s_PriceNTCountry + $a7f2twbu04sPriceNTCountry;

                $a7f2twbu07sPcsNTCountry = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsNTCountry = $a7f2twbu07s_PcsNTCountry + $a7f2twbu07sPcsNTCountry;

                $a7f2twbu07sPriceNTCountry = $a7f2twbu07sPcsNTCountry * $row->PriceAvg;
                $a7f2twbu07s_PriceNTCountry = $a7f2twbu07s_PriceNTCountry + $a7f2twbu07sPriceNTCountry;

                $a7f2cebu10sPcsNTCountry = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsNTCountry = $a7f2cebu10s_PcsNTCountry + $a7f2cebu10sPcsNTCountry;

                $a7f2cebu10sPriceNTCountry = $a7f2cebu10sPcsNTCountry * $row->PriceAvg;
                $a7f2cebu10s_PriceNTCountry = $a7f2cebu10s_PriceNTCountry + $a7f2cebu10sPriceNTCountry;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsNTCountry = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsNTCountry = $a8f1fgbu02s_PcsNTCountry + $a8f1fgbu02sPcsNTCountry;

                $a8f1fgbu02sPriceNTCountry = $a8f1fgbu02sPcsNTCountry * $NumberNTCountry;
                $a8f1fgbu02s_PriceNTCountry = $a8f1fgbu02s_PriceNTCountry + $a8f1fgbu02sPriceNTCountry;

                $a8f2fgbu10sPcsNTCountry = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsNTCountry = $a8f2fgbu10s_PcsNTCountry + $a8f2fgbu10sPcsNTCountry;

                $a8f2fgbu10sPriceNTCountry = $a8f2fgbu10sPcsNTCountry * $NumberNTCountry;
                $a8f2fgbu10s_PriceNTCountry = $a8f2fgbu10s_PriceNTCountry + $a8f2fgbu10sPriceNTCountry;

                $a8f2thbu05sPcsNTCountry = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsNTCountry = $a8f2thbu05s_PcsNTCountry + $a8f2thbu05sPcsNTCountry;

                $a8f2thbu05sPriceNTCountry = $a8f2thbu05sPcsNTCountry * $NumberNTCountry;
                $a8f2thbu05s_PriceNTCountry = $a8f2thbu05s_PriceNTCountry + $a8f2thbu05sPriceNTCountry;

                $a8f2debu10sPcsNTCountry = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsNTCountry = $a8f2debu10s_PcsNTCountry + $a8f2debu10sPcsNTCountry;

                $a8f2debu10sPriceNTCountry = $a8f2debu10sPcsNTCountry * $NumberNTCountry;
                $a8f2debu10s_PriceNTCountry = $a8f2debu10s_PriceNTCountry + $a8f2debu10sPriceNTCountry;

                $a8f2exbu11sPcsNTCountry = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsNTCountry = $a8f2exbu11s_PcsNTCountry + $a8f2exbu11sPcsNTCountry;

                $a8f2exbu11sPriceNTCountry = $a8f2exbu11sPcsNTCountry * $NumberNTCountry;
                $a8f2exbu11s_PriceNTCountry = $a8f2exbu11s_PriceNTCountry + $a8f2exbu11sPriceNTCountry;

                $a8f2twbu04sPcsNTCountry = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsNTCountry = $a8f2twbu04s_PcsNTCountry + $a8f2twbu04sPcsNTCountry;

                $a8f2twbu04sPriceNTCountry = $a8f2twbu04sPcsNTCountry * $NumberNTCountry;
                $a8f2twbu04s_PriceNTCountry = $a8f2twbu04s_PriceNTCountry + $a8f2twbu04sPriceNTCountry;

                $a8f2twbu07sPcsNTCountry = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsNTCountry = $a8f2twbu07s_PcsNTCountry + $a8f2twbu07sPcsNTCountry;

                $a8f2twbu07sPriceNTCountry = $a8f2twbu07sPcsNTCountry * $NumberNTCountry;
                $a8f2twbu07s_PriceNTCountry = $a8f2twbu07s_PriceNTCountry + $a8f2twbu07sPriceNTCountry;

                $a8f2cebu10sPcsNTCountry = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsNTCountry = $a8f2cebu10s_PcsNTCountry + $a8f2cebu10sPcsNTCountry;

                $a8f2cebu10sPriceNTCountry = $a8f2cebu10sPcsNTCountry * $NumberNTCountry;
                $a8f2cebu10s_PriceNTCountry = $a8f2cebu10s_PriceNTCountry + $a8f2cebu10sPriceNTCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsNTCountry = $row->dc1_s_Quantity;
                $DC1_PcsNTCountry = $DC1_PcsNTCountry + $DC1PcsNTCountry;

                $DC1PriceNTCountry = $DC1PcsNTCountry * $NumberNTCountry;
                $DC1_PriceNTCountry = $DC1_PriceNTCountry + $DC1PriceNTCountry;

                $DCPPcsNTCountry = $row->dcp_s_Quantity;
                $DCP_PcsNTCountry = $DCP_PcsNTCountry + $DCPPcsNTCountry;

                $DCPPriceNTCountry = $DCPPcsNTCountry * $NumberNTCountry;
                $DCP_PriceNTCountry = $DCP_PriceNTCountry + $DCPPriceNTCountry;

                $DCYPcsNTCountry = $row->dcy_s_Quantity;
                $DCY_PcsNTCountry = $DCY_PcsNTCountry + $DCYPcsNTCountry;

                $DCYPriceNTCountry = $DCYPcsNTCountry * $NumberNTCountry;
                $DCY_PriceNTCountry = $DCY_PriceNTCountry + $DCYPriceNTCountry;

                $DEXPcsNTCountry = $row->dex_s_Quantity;
                $DEX_PcsNTCountry = $DEX_PcsNTCountry + $DEXPcsNTCountry;

                $DEXPriceNTCountry = $DEXPcsNTCountry * $NumberNTCountry;
                $DEX_PriceNTCountry = $DEX_PriceNTCountry + $DEXPriceNTCountry;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "MT") && ($row->Customer != "DC1" || $row->Customer != "DCY" || $row->Customer != "DCP" || $row->Customer != "DCI" || $row->Customer != "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberMTCountry = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberMTCountry = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterMTCountry = $row->PcsAfter;
                $Pcs_AfterMTCountry = $Pcs_AfterMTCountry + $PCSAfterMTCountry;

                $PriceAfterMTCountry = $row->PriceAfter;
                $Price_AfterMTCountry = $Price_AfterMTCountry + $PriceAfterMTCountry;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsMTCountry = $row->Po_Quantity;
                $Po_PcsMTCountry = $Po_PcsMTCountry + $PoPcsMTCountry;

                $PoPriceMTCountry = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceMTCountry = $Po_PriceMTCountry + $PoPriceMTCountry;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsMTCountry = $row->Neg_Quantity;
                $Neg_PcsMTCountry = $Neg_PcsMTCountry + $NegPcsMTCountry;


                $NegPriceMTCountry = $NumberMTCountry * $row->Neg_Quantity;
                $Neg_PriceMTCountry = $Neg_PriceMTCountry + $NegPriceMTCountry;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsMTCountry = $PCSAfterMTCountry + $PoPcsMTCountry + $NegPcsMTCountry;
                $BackChange_PcsMTCountry = $BackChange_PcsMTCountry + $BackChangePcsMTCountry;

                $BackChangePriceMTCountry = $PriceAfterMTCountry + $PoPriceMTCountry + $NegPriceMTCountry;
                $BackChange_PriceMTCountry = $BackChange_PriceMTCountry + $BackChangePriceMTCountry;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsMTCountry = $row->purchase_Quantity;
                $Purchase_PcsMTCountry = $Purchase_PcsMTCountry + $PurchasePcsMTCountry;

                $PurchasePriceMTCountry = $row->purchase_Cost;
                $Purchase_PriceMTCountry = $Purchase_PriceMTCountry + $PurchasePriceMTCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsMTCountry = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsMTCountry = $ReciveTranfer_PcsMTCountry + $ReciveTranferPcsMTCountry;

                $ReciveTranferPriceMTCountry = $ReciveTranferPcsMTCountry * $row->PriceAvg;
                $ReciveTranfer_PriceMTCountry = $ReciveTranfer_PriceMTCountry + $ReciveTranferPriceMTCountry;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityMTCountry = $row->returncuses_Quantity;
                $ReturnItem_PCSMTCountry = $ReturnItem_PCSMTCountry + $ReturnItemQuantityMTCountry;

                $ReturnItemPriceMTCountry = $ReturnItemQuantityMTCountry * $NumberMTCountry;
                $ReturnItem_PriceMTCountry = $ReturnItem_PriceMTCountry + $ReturnItemPriceMTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsMTCountry = $row->purchase_Quantity + $ReciveTranferPcsMTCountry + $ReturnItemQuantityMTCountry;
                $AllIn_PcsMTCountry = $AllIn_PcsMTCountry + $AllInPcsMTCountry;

                $AllInPriceMTCountry = $PurchasePriceMTCountry + $ReciveTranferPriceMTCountry + $ReturnItemPriceMTCountry;
                $AllIn_PriceMTCountry = $AllIn_PriceMTCountry + $AllInPriceMTCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsMTCountry = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsMTCountry = $SendSale_PcsMTCountry + $SendSalePcsMTCountry;

                $sum = $BackChangePcsMTCountry + $AllInPcsMTCountry;
                if ($sum > 0) {
                    $SendSalePriceMTCountry = (($AllInPriceMTCountry + $BackChangePriceMTCountry) / ($AllInPcsMTCountry + $BackChangePcsMTCountry)) * $SendSalePcsMTCountry;
                    $SendSale_PriceMTCountry = $SendSale_PriceMTCountry + $SendSalePriceMTCountry;
                }else{
                    $SendSalePriceMTCountry = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsMTCountry = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsMTCountry = $ReciveTranOut_PcsMTCountry + $ReciveTranOutPcsMTCountry;

                $sum = $BackChangePcsMTCountry + $AllInPcsMTCountry;
                if ($sum > 0) {
                    $ReciveTranOutPriceMTCountry = (($AllInPriceMTCountry + $BackChangePriceMTCountry) / ($AllInPcsMTCountry + $BackChangePcsMTCountry)) * $ReciveTranOutPcsMTCountry;
                    $ReciveTranOut_PriceMTCountry = $ReciveTranOut_PriceMTCountry + $ReciveTranOutPriceMTCountry;
                }else{
                    $ReciveTranOutPriceMTCountry = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsMTCountry = $row->returnitem_Quantity;
                $ReturnStore_PcsMTCountry = $ReturnStore_PcsMTCountry + $ReturnStorePcsMTCountry;

                $sum = $BackChangePcsMTCountry + $AllInPcsMTCountry;
                if ($sum > 0) {
                    $ReturnStorePriceMTCountry = (($AllInPriceMTCountry + $BackChangePriceMTCountry) / ($AllInPcsMTCountry + $BackChangePcsMTCountry)) * $ReturnStorePcsMTCountry;
                    $ReturnStore_PriceMTCountry = $ReturnStore_PriceMTCountry + $ReturnStorePriceMTCountry;
                }else{
                    $ReturnStorePriceMTCountry = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsMTCountry = $ReturnStorePcsMTCountry + $ReciveTranOutPcsMTCountry + $SendSalePcsMTCountry;
                $AllOut_PcsMTCountry = $AllOut_PcsMTCountry + $AllOutPcsMTCountry;

                $AllOutPriceMTCountry = $SendSalePriceMTCountry + $ReciveTranOutPriceMTCountry + $ReturnStorePriceMTCountry;
                $AllOut_PriceMTCountry = $AllOut_PriceMTCountry + $AllOutPriceMTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsMTCountry = $BackChangePcsMTCountry + $AllInPcsMTCountry + $AllOutPcsMTCountry;
                $Calculate_PcsMTCountry = $Calculate_PcsMTCountry + $CalculatePcsMTCountry;

                $CalculatePriceMTCountry = $BackChangePriceMTCountry + $AllInPriceMTCountry + $AllOutPriceMTCountry;
                $Calculate_PriceMTCountry = $Calculate_PriceMTCountry + $CalculatePriceMTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsMTCountry = $row->item_stock_Quantity;
                $NewCalculate_PcsMTCountry = $NewCalculate_PcsMTCountry + $NewCalculatePcsMTCountry;

                $NewCalculatePriceMTCountry = $row->item_stock_Amount;
                $NewCalculate_PriceMTCountry = $NewCalculate_PriceMTCountry + $NewCalculatePriceMTCountry;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsMTCountry = $NewCalculatePcsMTCountry - $CalculatePcsMTCountry;
                $Diff_PcsMTCountry = $Diff_PcsMTCountry + $DiffPcsMTCountry;

                $DiffPriceMTCountry = $NewCalculatePriceMTCountry - $CalculatePriceMTCountry;
                $Diff_PriceMTCountry = $Diff_PriceMTCountry + $DiffPriceMTCountry;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsMTCountry = $CalculatePcsMTCountry;
                $NewTotal_PcsMTCountry = $NewTotal_PcsMTCountry + $CalculatePcsMTCountry;

                $NewTotalPriceMTCountry = $NewTotalPcsMTCountry * $row->PriceAvg;
                $NewTotal_PriceMTCountry = $NewTotal_PriceMTCountry + $NewTotalPriceMTCountry;

                $NewTotalDiffNavMTCountry = $NewTotalPriceMTCountry - $NewCalculatePriceMTCountry;
                $NewTotalDiff_NavMTCountry = $NewTotalDiff_NavMTCountry + $NewTotalDiffNavMTCountry;

                $NewTotalDiffCalMTCountry = $NewTotalPriceMTCountry - $CalculatePriceMTCountry;
                $NewTotalDiff_CalMTCountry = $NewTotalDiff_CalMTCountry + $NewTotalDiffCalMTCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsMTCountry = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsMTCountry = $a7f1fgbu02s_PcsMTCountry + $a7f1fgbu02sPcsMTCountry;

                $a7f1fgbu02sPriceMTCountry = $a7f1fgbu02sPcsMTCountry * $row->PriceAvg;
                $a7f1fgbu02s_PriceMTCountry = $a7f1fgbu02s_PriceMTCountry + $a7f1fgbu02sPriceMTCountry;

                $a7f2fgbu10sPcsMTCountry = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsMTCountry = $a7f2fgbu10s_PcsMTCountry + $a7f2fgbu10sPcsMTCountry;

                $a7f2fgbu10sPriceMTCountry = $a7f2fgbu10sPcsMTCountry * $row->PriceAvg;
                $a7f2fgbu10s_PriceMTCountry = $a7f2fgbu10s_PriceMTCountry + $a7f2fgbu10sPriceMTCountry;

                $a7f2thbu05sPcsMTCountry = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsMTCountry = $a7f2thbu05s_PcsMTCountry + $a7f2thbu05sPcsMTCountry;

                $a7f2thbu05sPriceMTCountry = $a7f2thbu05sPcsMTCountry * $row->PriceAvg;
                $a7f2thbu05s_PriceMTCountry = $a7f2thbu05s_PriceMTCountry + $a7f2thbu05sPriceMTCountry;

                $a7f2debu10sPcsMTCountry = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsMTCountry = $a7f2debu10s_PcsMTCountry + $a7f2debu10sPcsMTCountry;

                $a7f2debu10sPriceMTCountry = $a7f2debu10sPcsMTCountry * $row->PriceAvg;
                $a7f2debu10s_PriceMTCountry = $a7f2debu10s_PriceMTCountry + $a7f2debu10sPriceMTCountry;

                $a7f2exbu11sPcsMTCountry = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsMTCountry = $a7f2exbu11s_PcsMTCountry + $a7f2exbu11sPcsMTCountry;

                $a7f2exbu11sPriceMTCountry = $a7f2exbu11sPcsMTCountry * $row->PriceAvg;
                $a7f2exbu11s_PriceMTCountry = $a7f2exbu11s_PriceMTCountry + $a7f2exbu11sPriceMTCountry;

                $a7f2twbu04sPcsMTCountry = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsMTCountry = $a7f2twbu04s_PcsMTCountry + $a7f2twbu04sPcsMTCountry;

                $a7f2twbu04sPriceMTCountry = $a7f2twbu04sPcsMTCountry * $row->PriceAvg;
                $a7f2twbu04s_PriceMTCountry = $a7f2twbu04s_PriceMTCountry + $a7f2twbu04sPriceMTCountry;

                $a7f2twbu07sPcsMTCountry = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsMTCountry = $a7f2twbu07s_PcsMTCountry + $a7f2twbu07sPcsMTCountry;

                $a7f2twbu07sPriceMTCountry = $a7f2twbu07sPcsMTCountry * $row->PriceAvg;
                $a7f2twbu07s_PriceMTCountry = $a7f2twbu07s_PriceMTCountry + $a7f2twbu07sPriceMTCountry;

                $a7f2cebu10sPcsMTCountry = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsMTCountry = $a7f2cebu10s_PcsMTCountry + $a7f2cebu10sPcsMTCountry;

                $a7f2cebu10sPriceMTCountry = $a7f2cebu10sPcsMTCountry * $row->PriceAvg;
                $a7f2cebu10s_PriceMTCountry = $a7f2cebu10s_PriceMTCountry + $a7f2cebu10sPriceMTCountry;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsMTCountry = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsMTCountry = $a8f1fgbu02s_PcsMTCountry + $a8f1fgbu02sPcsMTCountry;

                $a8f1fgbu02sPriceMTCountry = $a8f1fgbu02sPcsMTCountry * $NumberMTCountry;
                $a8f1fgbu02s_PriceMTCountry = $a8f1fgbu02s_PriceMTCountry + $a8f1fgbu02sPriceMTCountry;

                $a8f2fgbu10sPcsMTCountry = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsMTCountry = $a8f2fgbu10s_PcsMTCountry + $a8f2fgbu10sPcsMTCountry;

                $a8f2fgbu10sPriceMTCountry = $a8f2fgbu10sPcsMTCountry * $NumberMTCountry;
                $a8f2fgbu10s_PriceMTCountry = $a8f2fgbu10s_PriceMTCountry + $a8f2fgbu10sPriceMTCountry;

                $a8f2thbu05sPcsMTCountry = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsMTCountry = $a8f2thbu05s_PcsMTCountry + $a8f2thbu05sPcsMTCountry;

                $a8f2thbu05sPriceMTCountry = $a8f2thbu05sPcsMTCountry * $NumberMTCountry;
                $a8f2thbu05s_PriceMTCountry = $a8f2thbu05s_PriceMTCountry + $a8f2thbu05sPriceMTCountry;

                $a8f2debu10sPcsMTCountry = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsMTCountry = $a8f2debu10s_PcsMTCountry + $a8f2debu10sPcsMTCountry;

                $a8f2debu10sPriceMTCountry = $a8f2debu10sPcsMTCountry * $NumberMTCountry;
                $a8f2debu10s_PriceMTCountry = $a8f2debu10s_PriceMTCountry + $a8f2debu10sPriceMTCountry;

                $a8f2exbu11sPcsMTCountry = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsMTCountry = $a8f2exbu11s_PcsMTCountry + $a8f2exbu11sPcsMTCountry;

                $a8f2exbu11sPriceMTCountry = $a8f2exbu11sPcsMTCountry * $NumberMTCountry;
                $a8f2exbu11s_PriceMTCountry = $a8f2exbu11s_PriceMTCountry + $a8f2exbu11sPriceMTCountry;

                $a8f2twbu04sPcsMTCountry = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsMTCountry = $a8f2twbu04s_PcsMTCountry + $a8f2twbu04sPcsMTCountry;

                $a8f2twbu04sPriceMTCountry = $a8f2twbu04sPcsMTCountry * $NumberMTCountry;
                $a8f2twbu04s_PriceMTCountry = $a8f2twbu04s_PriceMTCountry + $a8f2twbu04sPriceMTCountry;

                $a8f2twbu07sPcsMTCountry = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsMTCountry = $a8f2twbu07s_PcsMTCountry + $a8f2twbu07sPcsMTCountry;

                $a8f2twbu07sPriceMTCountry = $a8f2twbu07sPcsMTCountry * $NumberMTCountry;
                $a8f2twbu07s_PriceMTCountry = $a8f2twbu07s_PriceMTCountry + $a8f2twbu07sPriceMTCountry;

                $a8f2cebu10sPcsMTCountry = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsMTCountry = $a8f2cebu10s_PcsMTCountry + $a8f2cebu10sPcsMTCountry;

                $a8f2cebu10sPriceMTCountry = $a8f2cebu10sPcsMTCountry * $NumberMTCountry;
                $a8f2cebu10s_PriceMTCountry = $a8f2cebu10s_PriceMTCountry + $a8f2cebu10sPriceMTCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsMTCountry = $row->dc1_s_Quantity;
                $DC1_PcsMTCountry = $DC1_PcsMTCountry + $DC1PcsMTCountry;

                $DC1PriceMTCountry = $DC1PcsMTCountry * $NumberMTCountry;
                $DC1_PriceMTCountry = $DC1_PriceMTCountry + $DC1PriceMTCountry;

                $DCPPcsMTCountry = $row->dcp_s_Quantity;
                $DCP_PcsMTCountry = $DCP_PcsMTCountry + $DCPPcsMTCountry;

                $DCPPriceMTCountry = $DCPPcsMTCountry * $NumberMTCountry;
                $DCP_PriceMTCountry = $DCP_PriceMTCountry + $DCPPriceMTCountry;

                $DCYPcsMTCountry = $row->dcy_s_Quantity;
                $DCY_PcsMTCountry = $DCY_PcsMTCountry + $DCYPcsMTCountry;

                $DCYPriceMTCountry = $DCYPcsMTCountry * $NumberMTCountry;
                $DCY_PriceMTCountry = $DCY_PriceMTCountry + $DCYPriceMTCountry;

                $DEXPcsMTCountry = $row->dex_s_Quantity;
                $DEX_PcsMTCountry = $DEX_PcsMTCountry + $DEXPcsMTCountry;

                $DEXPriceMTCountry = $DEXPcsMTCountry * $NumberMTCountry;
                $DEX_PriceMTCountry = $DEX_PriceMTCountry + $DEXPriceMTCountry;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "TW") && ($row->Customer != "DC1" || $row->Customer != "DCY" || $row->Customer != "DCP" || $row->Customer != "DCI" || $row->Customer != "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberTWCountry = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberTWCountry = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterTWCountry = $row->PcsAfter;
                $Pcs_AfterTWCountry = $Pcs_AfterTWCountry + $PCSAfterTWCountry;

                $PriceAfterTWCountry = $row->PriceAfter;
                $Price_AfterTWCountry = $Price_AfterTWCountry + $PriceAfterTWCountry;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsTWCountry = $row->Po_Quantity;
                $Po_PcsTWCountry = $Po_PcsTWCountry + $PoPcsTWCountry;

                $PoPriceTWCountry = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceTWCountry = $Po_PriceTWCountry + $PoPriceTWCountry;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsTWCountry = $row->Neg_Quantity;
                $Neg_PcsTWCountry = $Neg_PcsTWCountry + $NegPcsTWCountry;


                $NegPriceTWCountry = $NumberTWCountry * $row->Neg_Quantity;
                $Neg_PriceTWCountry = $Neg_PriceTWCountry + $NegPriceTWCountry;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsTWCountry = $PCSAfterTWCountry + $PoPcsTWCountry + $NegPcsTWCountry;
                $BackChange_PcsTWCountry = $BackChange_PcsTWCountry + $BackChangePcsTWCountry;

                $BackChangePriceTWCountry = $PriceAfterTWCountry + $PoPriceTWCountry + $NegPriceTWCountry;
                $BackChange_PriceTWCountry = $BackChange_PriceTWCountry + $BackChangePriceTWCountry;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsTWCountry = $row->purchase_Quantity;
                $Purchase_PcsTWCountry = $Purchase_PcsTWCountry + $PurchasePcsTWCountry;

                $PurchasePriceTWCountry = $row->purchase_Cost;
                $Purchase_PriceTWCountry = $Purchase_PriceTWCountry + $PurchasePriceTWCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsTWCountry = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsTWCountry = $ReciveTranfer_PcsTWCountry + $ReciveTranferPcsTWCountry;

                $ReciveTranferPriceTWCountry = $ReciveTranferPcsTWCountry * $row->PriceAvg;
                $ReciveTranfer_PriceTWCountry = $ReciveTranfer_PriceTWCountry + $ReciveTranferPriceTWCountry;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityTWCountry = $row->returncuses_Quantity;
                $ReturnItem_PCSTWCountry = $ReturnItem_PCSTWCountry + $ReturnItemQuantityTWCountry;

                $ReturnItemPriceTWCountry = $ReturnItemQuantityTWCountry * $NumberTWCountry;
                $ReturnItem_PriceTWCountry = $ReturnItem_PriceTWCountry + $ReturnItemPriceTWCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsTWCountry = $row->purchase_Quantity + $ReciveTranferPcsTWCountry + $ReturnItemQuantityTWCountry;
                $AllIn_PcsTWCountry = $AllIn_PcsTWCountry + $AllInPcsTWCountry;

                $AllInPriceTWCountry = $PurchasePriceTWCountry + $ReciveTranferPriceTWCountry + $ReturnItemPriceTWCountry;
                $AllIn_PriceTWCountry = $AllIn_PriceTWCountry + $AllInPriceTWCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsTWCountry = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsTWCountry = $SendSale_PcsTWCountry + $SendSalePcsTWCountry;

                $sum = $BackChangePcsTWCountry + $AllInPcsTWCountry;
                if ($sum > 0) {
                    $SendSalePriceTWCountry = (($AllInPriceTWCountry + $BackChangePriceTWCountry) / ($AllInPcsTWCountry + $BackChangePcsTWCountry)) * $SendSalePcsTWCountry;
                    $SendSale_PriceTWCountry = $SendSale_PriceTWCountry + $SendSalePriceTWCountry;
                }else{
                    $SendSalePriceTWCountry = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsTWCountry = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsTWCountry = $ReciveTranOut_PcsTWCountry + $ReciveTranOutPcsTWCountry;

                $sum = $BackChangePcsTWCountry + $AllInPcsTWCountry;
                if ($sum > 0) {
                    $ReciveTranOutPriceTWCountry = (($AllInPriceTWCountry + $BackChangePriceTWCountry) / ($AllInPcsTWCountry + $BackChangePcsTWCountry)) * $ReciveTranOutPcsTWCountry;
                    $ReciveTranOut_PriceTWCountry = $ReciveTranOut_PriceTWCountry + $ReciveTranOutPriceTWCountry;
                }else{
                    $ReciveTranOutPriceTWCountry = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsTWCountry = $row->returnitem_Quantity;
                $ReturnStore_PcsTWCountry = $ReturnStore_PcsTWCountry + $ReturnStorePcsTWCountry;

                $sum = $BackChangePcsTWCountry + $AllInPcsTWCountry;
                if ($sum > 0) {
                    $ReturnStorePriceTWCountry = (($AllInPriceTWCountry + $BackChangePriceTWCountry) / ($AllInPcsTWCountry + $BackChangePcsTWCountry)) * $ReturnStorePcsTWCountry;
                    $ReturnStore_PriceTWCountry = $ReturnStore_PriceTWCountry + $ReturnStorePriceTWCountry;
                }else{
                    $ReturnStorePriceTWCountry = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsTWCountry = $ReturnStorePcsTWCountry + $ReciveTranOutPcsTWCountry + $SendSalePcsTWCountry;
                $AllOut_PcsTWCountry = $AllOut_PcsTWCountry + $AllOutPcsTWCountry;

                $AllOutPriceTWCountry = $SendSalePriceTWCountry + $ReciveTranOutPriceTWCountry + $ReturnStorePriceTWCountry;
                $AllOut_PriceTWCountry = $AllOut_PriceTWCountry + $AllOutPriceTWCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsTWCountry = $BackChangePcsTWCountry + $AllInPcsTWCountry + $AllOutPcsTWCountry;
                $Calculate_PcsTWCountry = $Calculate_PcsTWCountry + $CalculatePcsTWCountry;

                $CalculatePriceTWCountry = $BackChangePriceTWCountry + $AllInPriceTWCountry + $AllOutPriceTWCountry;
                $Calculate_PriceTWCountry = $Calculate_PriceTWCountry + $CalculatePriceTWCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsTWCountry = $row->item_stock_Quantity;
                $NewCalculate_PcsTWCountry = $NewCalculate_PcsTWCountry + $NewCalculatePcsTWCountry;

                $NewCalculatePriceTWCountry = $row->item_stock_Amount;
                $NewCalculate_PriceTWCountry = $NewCalculate_PriceTWCountry + $NewCalculatePriceTWCountry;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsTWCountry = $NewCalculatePcsTWCountry - $CalculatePcsTWCountry;
                $Diff_PcsTWCountry = $Diff_PcsTWCountry + $DiffPcsTWCountry;

                $DiffPriceTWCountry = $NewCalculatePriceTWCountry - $CalculatePriceTWCountry;
                $Diff_PriceTWCountry = $Diff_PriceTWCountry + $DiffPriceTWCountry;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsTWCountry = $CalculatePcsTWCountry;
                $NewTotal_PcsTWCountry = $NewTotal_PcsTWCountry + $CalculatePcsTWCountry;

                $NewTotalPriceTWCountry = $NewTotalPcsTWCountry * $row->PriceAvg;
                $NewTotal_PriceTWCountry = $NewTotal_PriceTWCountry + $NewTotalPriceTWCountry;

                $NewTotalDiffNavTWCountry = $NewTotalPriceTWCountry - $NewCalculatePriceTWCountry;
                $NewTotalDiff_NavTWCountry = $NewTotalDiff_NavTWCountry + $NewTotalDiffNavTWCountry;

                $NewTotalDiffCalTWCountry = $NewTotalPriceTWCountry - $CalculatePriceTWCountry;
                $NewTotalDiff_CalTWCountry = $NewTotalDiff_CalTWCountry + $NewTotalDiffCalTWCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsTWCountry = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsTWCountry = $a7f1fgbu02s_PcsTWCountry + $a7f1fgbu02sPcsTWCountry;

                $a7f1fgbu02sPriceTWCountry = $a7f1fgbu02sPcsTWCountry * $row->PriceAvg;
                $a7f1fgbu02s_PriceTWCountry = $a7f1fgbu02s_PriceTWCountry + $a7f1fgbu02sPriceTWCountry;

                $a7f2fgbu10sPcsTWCountry = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsTWCountry = $a7f2fgbu10s_PcsTWCountry + $a7f2fgbu10sPcsTWCountry;

                $a7f2fgbu10sPriceTWCountry = $a7f2fgbu10sPcsTWCountry * $row->PriceAvg;
                $a7f2fgbu10s_PriceTWCountry = $a7f2fgbu10s_PriceTWCountry + $a7f2fgbu10sPriceTWCountry;

                $a7f2thbu05sPcsTWCountry = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsTWCountry = $a7f2thbu05s_PcsTWCountry + $a7f2thbu05sPcsTWCountry;

                $a7f2thbu05sPriceTWCountry = $a7f2thbu05sPcsTWCountry * $row->PriceAvg;
                $a7f2thbu05s_PriceTWCountry = $a7f2thbu05s_PriceTWCountry + $a7f2thbu05sPriceTWCountry;

                $a7f2debu10sPcsTWCountry = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsTWCountry = $a7f2debu10s_PcsTWCountry + $a7f2debu10sPcsTWCountry;

                $a7f2debu10sPriceTWCountry = $a7f2debu10sPcsTWCountry * $row->PriceAvg;
                $a7f2debu10s_PriceTWCountry = $a7f2debu10s_PriceTWCountry + $a7f2debu10sPriceTWCountry;

                $a7f2exbu11sPcsTWCountry = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsTWCountry = $a7f2exbu11s_PcsTWCountry + $a7f2exbu11sPcsTWCountry;

                $a7f2exbu11sPriceTWCountry = $a7f2exbu11sPcsTWCountry * $row->PriceAvg;
                $a7f2exbu11s_PriceTWCountry = $a7f2exbu11s_PriceTWCountry + $a7f2exbu11sPriceTWCountry;

                $a7f2twbu04sPcsTWCountry = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsTWCountry = $a7f2twbu04s_PcsTWCountry + $a7f2twbu04sPcsTWCountry;

                $a7f2twbu04sPriceTWCountry = $a7f2twbu04sPcsTWCountry * $row->PriceAvg;
                $a7f2twbu04s_PriceTWCountry = $a7f2twbu04s_PriceTWCountry + $a7f2twbu04sPriceTWCountry;

                $a7f2twbu07sPcsTWCountry = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsTWCountry = $a7f2twbu07s_PcsTWCountry + $a7f2twbu07sPcsTWCountry;

                $a7f2twbu07sPriceTWCountry = $a7f2twbu07sPcsTWCountry * $row->PriceAvg;
                $a7f2twbu07s_PriceTWCountry = $a7f2twbu07s_PriceTWCountry + $a7f2twbu07sPriceTWCountry;

                $a7f2cebu10sPcsTWCountry = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsTWCountry = $a7f2cebu10s_PcsTWCountry + $a7f2cebu10sPcsTWCountry;

                $a7f2cebu10sPriceTWCountry = $a7f2cebu10sPcsTWCountry * $row->PriceAvg;
                $a7f2cebu10s_PriceTWCountry = $a7f2cebu10s_PriceTWCountry + $a7f2cebu10sPriceTWCountry;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsTWCountry = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsTWCountry = $a8f1fgbu02s_PcsTWCountry + $a8f1fgbu02sPcsTWCountry;

                $a8f1fgbu02sPriceTWCountry = $a8f1fgbu02sPcsTWCountry * $NumberTWCountry;
                $a8f1fgbu02s_PriceTWCountry = $a8f1fgbu02s_PriceTWCountry + $a8f1fgbu02sPriceTWCountry;

                $a8f2fgbu10sPcsTWCountry = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsTWCountry = $a8f2fgbu10s_PcsTWCountry + $a8f2fgbu10sPcsTWCountry;

                $a8f2fgbu10sPriceTWCountry = $a8f2fgbu10sPcsTWCountry * $NumberTWCountry;
                $a8f2fgbu10s_PriceTWCountry = $a8f2fgbu10s_PriceTWCountry + $a8f2fgbu10sPriceTWCountry;

                $a8f2thbu05sPcsTWCountry = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsTWCountry = $a8f2thbu05s_PcsTWCountry + $a8f2thbu05sPcsTWCountry;

                $a8f2thbu05sPriceTWCountry = $a8f2thbu05sPcsTWCountry * $NumberTWCountry;
                $a8f2thbu05s_PriceTWCountry = $a8f2thbu05s_PriceTWCountry + $a8f2thbu05sPriceTWCountry;

                $a8f2debu10sPcsTWCountry = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsTWCountry = $a8f2debu10s_PcsTWCountry + $a8f2debu10sPcsTWCountry;

                $a8f2debu10sPriceTWCountry = $a8f2debu10sPcsTWCountry * $NumberTWCountry;
                $a8f2debu10s_PriceTWCountry = $a8f2debu10s_PriceTWCountry + $a8f2debu10sPriceTWCountry;

                $a8f2exbu11sPcsTWCountry = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsTWCountry = $a8f2exbu11s_PcsTWCountry + $a8f2exbu11sPcsTWCountry;

                $a8f2exbu11sPriceTWCountry = $a8f2exbu11sPcsTWCountry * $NumberTWCountry;
                $a8f2exbu11s_PriceTWCountry = $a8f2exbu11s_PriceTWCountry + $a8f2exbu11sPriceTWCountry;

                $a8f2twbu04sPcsTWCountry = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsTWCountry = $a8f2twbu04s_PcsTWCountry + $a8f2twbu04sPcsTWCountry;

                $a8f2twbu04sPriceTWCountry = $a8f2twbu04sPcsTWCountry * $NumberTWCountry;
                $a8f2twbu04s_PriceTWCountry = $a8f2twbu04s_PriceTWCountry + $a8f2twbu04sPriceTWCountry;

                $a8f2twbu07sPcsTWCountry = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsTWCountry = $a8f2twbu07s_PcsTWCountry + $a8f2twbu07sPcsTWCountry;

                $a8f2twbu07sPriceTWCountry = $a8f2twbu07sPcsTWCountry * $NumberTWCountry;
                $a8f2twbu07s_PriceTWCountry = $a8f2twbu07s_PriceTWCountry + $a8f2twbu07sPriceTWCountry;

                $a8f2cebu10sPcsTWCountry = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsTWCountry = $a8f2cebu10s_PcsTWCountry + $a8f2cebu10sPcsTWCountry;

                $a8f2cebu10sPriceTWCountry = $a8f2cebu10sPcsTWCountry * $NumberTWCountry;
                $a8f2cebu10s_PriceTWCountry = $a8f2cebu10s_PriceTWCountry + $a8f2cebu10sPriceTWCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsTWCountry = $row->dc1_s_Quantity;
                $DC1_PcsTWCountry = $DC1_PcsTWCountry + $DC1PcsTWCountry;

                $DC1PriceTWCountry = $DC1PcsTWCountry * $NumberTWCountry;
                $DC1_PriceTWCountry = $DC1_PriceTWCountry + $DC1PriceTWCountry;

                $DCPPcsTWCountry = $row->dcp_s_Quantity;
                $DCP_PcsTWCountry = $DCP_PcsTWCountry + $DCPPcsTWCountry;

                $DCPPriceTWCountry = $DCPPcsTWCountry * $NumberTWCountry;
                $DCP_PriceTWCountry = $DCP_PriceTWCountry + $DCPPriceTWCountry;

                $DCYPcsTWCountry = $row->dcy_s_Quantity;
                $DCY_PcsTWCountry = $DCY_PcsTWCountry + $DCYPcsTWCountry;

                $DCYPriceTWCountry = $DCYPcsTWCountry * $NumberTWCountry;
                $DCY_PriceTWCountry = $DCY_PriceTWCountry + $DCYPriceTWCountry;

                $DEXPcsTWCountry = $row->dex_s_Quantity;
                $DEX_PcsTWCountry = $DEX_PcsTWCountry + $DEXPcsTWCountry;

                $DEXPriceTWCountry = $DEXPcsTWCountry * $NumberTWCountry;
                $DEX_PriceTWCountry = $DEX_PriceTWCountry + $DEXPriceTWCountry;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "LN") && ($row->Customer != "DC1" || $row->Customer != "DCY" || $row->Customer != "DCP" || $row->Customer != "DCI" || $row->Customer != "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberLNCountry = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberLNCountry = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterLNCountry = $row->PcsAfter;
                $Pcs_AfterLNCountry = $Pcs_AfterLNCountry + $PCSAfterLNCountry;

                $PriceAfterLNCountry = $row->PriceAfter;
                $Price_AfterLNCountry = $Price_AfterLNCountry + $PriceAfterLNCountry;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsLNCountry = $row->Po_Quantity;
                $Po_PcsLNCountry = $Po_PcsLNCountry + $PoPcsLNCountry;

                $PoPriceLNCountry = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceLNCountry = $Po_PriceLNCountry + $PoPriceLNCountry;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsLNCountry = $row->Neg_Quantity;
                $Neg_PcsLNCountry = $Neg_PcsLNCountry + $NegPcsLNCountry;


                $NegPriceLNCountry = $NumberLNCountry * $row->Neg_Quantity;
                $Neg_PriceLNCountry = $Neg_PriceLNCountry + $NegPriceLNCountry;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsLNCountry = $PCSAfterLNCountry + $PoPcsLNCountry + $NegPcsLNCountry;
                $BackChange_PcsLNCountry = $BackChange_PcsLNCountry + $BackChangePcsLNCountry;

                $BackChangePriceLNCountry = $PriceAfterLNCountry + $PoPriceLNCountry + $NegPriceLNCountry;
                $BackChange_PriceLNCountry = $BackChange_PriceLNCountry + $BackChangePriceLNCountry;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsLNCountry = $row->purchase_Quantity;
                $Purchase_PcsLNCountry = $Purchase_PcsLNCountry + $PurchasePcsLNCountry;

                $PurchasePriceLNCountry = $row->purchase_Cost;
                $Purchase_PriceLNCountry = $Purchase_PriceLNCountry + $PurchasePriceLNCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsLNCountry = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsLNCountry = $ReciveTranfer_PcsLNCountry + $ReciveTranferPcsLNCountry;

                $ReciveTranferPriceLNCountry = $ReciveTranferPcsLNCountry * $row->PriceAvg;
                $ReciveTranfer_PriceLNCountry = $ReciveTranfer_PriceLNCountry + $ReciveTranferPriceLNCountry;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantityLNCountry = $row->returncuses_Quantity;
                $ReturnItem_PCSLNCountry = $ReturnItem_PCSLNCountry + $ReturnItemQuantityLNCountry;

                $ReturnItemPriceLNCountry = $ReturnItemQuantityLNCountry * $NumberLNCountry;
                $ReturnItem_PriceLNCountry = $ReturnItem_PriceLNCountry + $ReturnItemPriceLNCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsLNCountry = $row->purchase_Quantity + $ReciveTranferPcsLNCountry + $ReturnItemQuantityLNCountry;
                $AllIn_PcsLNCountry = $AllIn_PcsLNCountry + $AllInPcsLNCountry;

                $AllInPriceLNCountry = $PurchasePriceLNCountry + $ReciveTranferPriceLNCountry + $ReturnItemPriceLNCountry;
                $AllIn_PriceLNCountry = $AllIn_PriceLNCountry + $AllInPriceLNCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsLNCountry = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsLNCountry = $SendSale_PcsLNCountry + $SendSalePcsLNCountry;

                $sum = $BackChangePcsLNCountry + $AllInPcsLNCountry;
                if ($sum > 0) {
                    $SendSalePriceLNCountry = (($AllInPriceLNCountry + $BackChangePriceLNCountry) / ($AllInPcsLNCountry + $BackChangePcsLNCountry)) * $SendSalePcsLNCountry;
                    $SendSale_PriceLNCountry = $SendSale_PriceLNCountry + $SendSalePriceLNCountry;
                }else{
                    $SendSalePriceLNCountry = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsLNCountry = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsLNCountry = $ReciveTranOut_PcsLNCountry + $ReciveTranOutPcsLNCountry;

                $sum = $BackChangePcsLNCountry + $AllInPcsLNCountry;
                if ($sum > 0) {
                    $ReciveTranOutPriceLNCountry = (($AllInPriceLNCountry + $BackChangePriceLNCountry) / ($AllInPcsLNCountry + $BackChangePcsLNCountry)) * $ReciveTranOutPcsLNCountry;
                    $ReciveTranOut_PriceLNCountry = $ReciveTranOut_PriceLNCountry + $ReciveTranOutPriceLNCountry;
                }else{
                    $ReciveTranOutPriceLNCountry = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsLNCountry = $row->returnitem_Quantity;
                $ReturnStore_PcsLNCountry = $ReturnStore_PcsLNCountry + $ReturnStorePcsLNCountry;

                $sum = $BackChangePcsLNCountry + $AllInPcsLNCountry;
                if ($sum > 0) {
                    $ReturnStorePriceLNCountry = (($AllInPriceLNCountry + $BackChangePriceLNCountry) / ($AllInPcsLNCountry + $BackChangePcsLNCountry)) * $ReturnStorePcsLNCountry;
                    $ReturnStore_PriceLNCountry = $ReturnStore_PriceLNCountry + $ReturnStorePriceLNCountry;
                }else{
                    $ReturnStorePriceLNCountry = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsLNCountry = $ReturnStorePcsLNCountry + $ReciveTranOutPcsLNCountry + $SendSalePcsLNCountry;
                $AllOut_PcsLNCountry = $AllOut_PcsLNCountry + $AllOutPcsLNCountry;

                $AllOutPriceLNCountry = $SendSalePriceLNCountry + $ReciveTranOutPriceLNCountry + $ReturnStorePriceLNCountry;
                $AllOut_PriceLNCountry = $AllOut_PriceLNCountry + $AllOutPriceLNCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsLNCountry = $BackChangePcsLNCountry + $AllInPcsLNCountry + $AllOutPcsLNCountry;
                $Calculate_PcsLNCountry = $Calculate_PcsLNCountry + $CalculatePcsLNCountry;

                $CalculatePriceLNCountry = $BackChangePriceLNCountry + $AllInPriceLNCountry + $AllOutPriceLNCountry;
                $Calculate_PriceLNCountry = $Calculate_PriceLNCountry + $CalculatePriceLNCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsLNCountry = $row->item_stock_Quantity;
                $NewCalculate_PcsLNCountry = $NewCalculate_PcsLNCountry + $NewCalculatePcsLNCountry;

                $NewCalculatePriceLNCountry = $row->item_stock_Amount;
                $NewCalculate_PriceLNCountry = $NewCalculate_PriceLNCountry + $NewCalculatePriceLNCountry;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsLNCountry = $NewCalculatePcsLNCountry - $CalculatePcsLNCountry;
                $Diff_PcsLNCountry = $Diff_PcsLNCountry + $DiffPcsLNCountry;

                $DiffPriceLNCountry = $NewCalculatePriceLNCountry - $CalculatePriceLNCountry;
                $Diff_PriceLNCountry = $Diff_PriceLNCountry + $DiffPriceLNCountry;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsLNCountry = $CalculatePcsLNCountry;
                $NewTotal_PcsLNCountry = $NewTotal_PcsLNCountry + $CalculatePcsLNCountry;

                $NewTotalPriceLNCountry = $NewTotalPcsLNCountry * $row->PriceAvg;
                $NewTotal_PriceLNCountry = $NewTotal_PriceLNCountry + $NewTotalPriceLNCountry;

                $NewTotalDiffNavLNCountry = $NewTotalPriceLNCountry - $NewCalculatePriceLNCountry;
                $NewTotalDiff_NavLNCountry = $NewTotalDiff_NavLNCountry + $NewTotalDiffNavLNCountry;

                $NewTotalDiffCalLNCountry = $NewTotalPriceLNCountry - $CalculatePriceLNCountry;
                $NewTotalDiff_CalLNCountry = $NewTotalDiff_CalLNCountry + $NewTotalDiffCalLNCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsLNCountry = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsLNCountry = $a7f1fgbu02s_PcsLNCountry + $a7f1fgbu02sPcsLNCountry;

                $a7f1fgbu02sPriceLNCountry = $a7f1fgbu02sPcsLNCountry * $row->PriceAvg;
                $a7f1fgbu02s_PriceLNCountry = $a7f1fgbu02s_PriceLNCountry + $a7f1fgbu02sPriceLNCountry;

                $a7f2fgbu10sPcsLNCountry = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsLNCountry = $a7f2fgbu10s_PcsLNCountry + $a7f2fgbu10sPcsLNCountry;

                $a7f2fgbu10sPriceLNCountry = $a7f2fgbu10sPcsLNCountry * $row->PriceAvg;
                $a7f2fgbu10s_PriceLNCountry = $a7f2fgbu10s_PriceLNCountry + $a7f2fgbu10sPriceLNCountry;

                $a7f2thbu05sPcsLNCountry = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsLNCountry = $a7f2thbu05s_PcsLNCountry + $a7f2thbu05sPcsLNCountry;

                $a7f2thbu05sPriceLNCountry = $a7f2thbu05sPcsLNCountry * $row->PriceAvg;
                $a7f2thbu05s_PriceLNCountry = $a7f2thbu05s_PriceLNCountry + $a7f2thbu05sPriceLNCountry;

                $a7f2debu10sPcsLNCountry = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsLNCountry = $a7f2debu10s_PcsLNCountry + $a7f2debu10sPcsLNCountry;

                $a7f2debu10sPriceLNCountry = $a7f2debu10sPcsLNCountry * $row->PriceAvg;
                $a7f2debu10s_PriceLNCountry = $a7f2debu10s_PriceLNCountry + $a7f2debu10sPriceLNCountry;

                $a7f2exbu11sPcsLNCountry = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsLNCountry = $a7f2exbu11s_PcsLNCountry + $a7f2exbu11sPcsLNCountry;

                $a7f2exbu11sPriceLNCountry = $a7f2exbu11sPcsLNCountry * $row->PriceAvg;
                $a7f2exbu11s_PriceLNCountry = $a7f2exbu11s_PriceLNCountry + $a7f2exbu11sPriceLNCountry;

                $a7f2twbu04sPcsLNCountry = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsLNCountry = $a7f2twbu04s_PcsLNCountry + $a7f2twbu04sPcsLNCountry;

                $a7f2twbu04sPriceLNCountry = $a7f2twbu04sPcsLNCountry * $row->PriceAvg;
                $a7f2twbu04s_PriceLNCountry = $a7f2twbu04s_PriceLNCountry + $a7f2twbu04sPriceLNCountry;

                $a7f2twbu07sPcsLNCountry = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsLNCountry = $a7f2twbu07s_PcsLNCountry + $a7f2twbu07sPcsLNCountry;

                $a7f2twbu07sPriceLNCountry = $a7f2twbu07sPcsLNCountry * $row->PriceAvg;
                $a7f2twbu07s_PriceLNCountry = $a7f2twbu07s_PriceLNCountry + $a7f2twbu07sPriceLNCountry;

                $a7f2cebu10sPcsLNCountry = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsLNCountry = $a7f2cebu10s_PcsLNCountry + $a7f2cebu10sPcsLNCountry;

                $a7f2cebu10sPriceLNCountry = $a7f2cebu10sPcsLNCountry * $row->PriceAvg;
                $a7f2cebu10s_PriceLNCountry = $a7f2cebu10s_PriceLNCountry + $a7f2cebu10sPriceLNCountry;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsLNCountry = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsLNCountry = $a8f1fgbu02s_PcsLNCountry + $a8f1fgbu02sPcsLNCountry;

                $a8f1fgbu02sPriceLNCountry = $a8f1fgbu02sPcsLNCountry * $NumberLNCountry;
                $a8f1fgbu02s_PriceLNCountry = $a8f1fgbu02s_PriceLNCountry + $a8f1fgbu02sPriceLNCountry;

                $a8f2fgbu10sPcsLNCountry = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsLNCountry = $a8f2fgbu10s_PcsLNCountry + $a8f2fgbu10sPcsLNCountry;

                $a8f2fgbu10sPriceLNCountry = $a8f2fgbu10sPcsLNCountry * $NumberLNCountry;
                $a8f2fgbu10s_PriceLNCountry = $a8f2fgbu10s_PriceLNCountry + $a8f2fgbu10sPriceLNCountry;

                $a8f2thbu05sPcsLNCountry = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsLNCountry = $a8f2thbu05s_PcsLNCountry + $a8f2thbu05sPcsLNCountry;

                $a8f2thbu05sPriceLNCountry = $a8f2thbu05sPcsLNCountry * $NumberLNCountry;
                $a8f2thbu05s_PriceLNCountry = $a8f2thbu05s_PriceLNCountry + $a8f2thbu05sPriceLNCountry;

                $a8f2debu10sPcsLNCountry = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsLNCountry = $a8f2debu10s_PcsLNCountry + $a8f2debu10sPcsLNCountry;

                $a8f2debu10sPriceLNCountry = $a8f2debu10sPcsLNCountry * $NumberLNCountry;
                $a8f2debu10s_PriceLNCountry = $a8f2debu10s_PriceLNCountry + $a8f2debu10sPriceLNCountry;

                $a8f2exbu11sPcsLNCountry = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsLNCountry = $a8f2exbu11s_PcsLNCountry + $a8f2exbu11sPcsLNCountry;

                $a8f2exbu11sPriceLNCountry = $a8f2exbu11sPcsLNCountry * $NumberLNCountry;
                $a8f2exbu11s_PriceLNCountry = $a8f2exbu11s_PriceLNCountry + $a8f2exbu11sPriceLNCountry;

                $a8f2twbu04sPcsLNCountry = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsLNCountry = $a8f2twbu04s_PcsLNCountry + $a8f2twbu04sPcsLNCountry;

                $a8f2twbu04sPriceLNCountry = $a8f2twbu04sPcsLNCountry * $NumberLNCountry;
                $a8f2twbu04s_PriceLNCountry = $a8f2twbu04s_PriceLNCountry + $a8f2twbu04sPriceLNCountry;

                $a8f2twbu07sPcsLNCountry = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsLNCountry = $a8f2twbu07s_PcsLNCountry + $a8f2twbu07sPcsLNCountry;

                $a8f2twbu07sPriceLNCountry = $a8f2twbu07sPcsLNCountry * $NumberLNCountry;
                $a8f2twbu07s_PriceLNCountry = $a8f2twbu07s_PriceLNCountry + $a8f2twbu07sPriceLNCountry;

                $a8f2cebu10sPcsLNCountry = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsLNCountry = $a8f2cebu10s_PcsLNCountry + $a8f2cebu10sPcsLNCountry;

                $a8f2cebu10sPriceLNCountry = $a8f2cebu10sPcsLNCountry * $NumberLNCountry;
                $a8f2cebu10s_PriceLNCountry = $a8f2cebu10s_PriceLNCountry + $a8f2cebu10sPriceLNCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsLNCountry = $row->dc1_s_Quantity;
                $DC1_PcsLNCountry = $DC1_PcsLNCountry + $DC1PcsLNCountry;

                $DC1PriceLNCountry = $DC1PcsLNCountry * $NumberLNCountry;
                $DC1_PriceLNCountry = $DC1_PriceLNCountry + $DC1PriceLNCountry;

                $DCPPcsLNCountry = $row->dcp_s_Quantity;
                $DCP_PcsLNCountry = $DCP_PcsLNCountry + $DCPPcsLNCountry;

                $DCPPriceLNCountry = $DCPPcsLNCountry * $NumberLNCountry;
                $DCP_PriceLNCountry = $DCP_PriceLNCountry + $DCPPriceLNCountry;

                $DCYPcsLNCountry = $row->dcy_s_Quantity;
                $DCY_PcsLNCountry = $DCY_PcsLNCountry + $DCYPcsLNCountry;

                $DCYPriceLNCountry = $DCYPcsLNCountry * $NumberLNCountry;
                $DCY_PriceLNCountry = $DCY_PriceLNCountry + $DCYPriceLNCountry;

                $DEXPcsLNCountry = $row->dex_s_Quantity;
                $DEX_PcsLNCountry = $DEX_PcsLNCountry + $DEXPcsLNCountry;

                $DEXPriceLNCountry = $DEXPcsLNCountry * $NumberLNCountry;
                $DEX_PriceLNCountry = $DEX_PriceLNCountry + $DEXPriceLNCountry;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

            elseif (($Code_1[0] == "SNT") && ($row->Customer != "DC1" || $row->Customer != "DCY" || $row->Customer != "DCP" || $row->Customer != "DCI" || $row->Customer != "EXM1")) {

                if ($row->PcsAfter > 0 && $row->PriceAfter > 0) {
                    $NumberSNTCountry = ($row->PriceAfter / $row->PcsAfter);
                } else {
                    $NumberSNTCountry = $row->PriceAvg;
                }
                /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
                $PCSAfterSNTCountry = $row->PcsAfter;
                $Pcs_AfterSNTCountry = $Pcs_AfterSNTCountry + $PCSAfterSNTCountry;

                $PriceAfterSNTCountry = $row->PriceAfter;
                $Price_AfterSNTCountry = $Price_AfterSNTCountry + $PriceAfterSNTCountry;

                /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
                $PoPcsSNTCountry = $row->Po_Quantity;
                $Po_PcsSNTCountry = $Po_PcsSNTCountry + $PoPcsSNTCountry;

                $PoPriceSNTCountry = $row->PriceAvg * $row->Po_Quantity;
                $Po_PriceSNTCountry = $Po_PriceSNTCountry + $PoPriceSNTCountry;

                /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
                $NegPcsSNTCountry = $row->Neg_Quantity;
                $Neg_PcsSNTCountry = $Neg_PcsSNTCountry + $NegPcsSNTCountry;


                $NegPriceSNTCountry = $NumberSNTCountry * $row->Neg_Quantity;
                $Neg_PriceSNTCountry = $Neg_PriceSNTCountry + $NegPriceSNTCountry;

                /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

                $BackChangePcsSNTCountry = $PCSAfterSNTCountry + $PoPcsSNTCountry + $NegPcsSNTCountry;
                $BackChange_PcsSNTCountry = $BackChange_PcsSNTCountry + $BackChangePcsSNTCountry;

                $BackChangePriceSNTCountry = $PriceAfterSNTCountry + $PoPriceSNTCountry + $NegPriceSNTCountry;
                $BackChange_PriceSNTCountry = $BackChange_PriceSNTCountry + $BackChangePriceSNTCountry;

                /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
                $PurchasePcsSNTCountry = $row->purchase_Quantity;
                $Purchase_PcsSNTCountry = $Purchase_PcsSNTCountry + $PurchasePcsSNTCountry;

                $PurchasePriceSNTCountry = $row->purchase_Cost;
                $Purchase_PriceSNTCountry = $Purchase_PriceSNTCountry + $PurchasePriceSNTCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $ReciveTranferPcsSNTCountry = $row->a7f1fgbu02s_Quantity + $row->a7f2fgbu10s_Quantity + $row->a7f2thbu05s_Quantity + $row->a7f2debu10s_Quantity + $row->a7f2exbu11s_Quantity + $row->a7f2twbu04s_Quantity + $row->a7f2twbu07s_Quantity + $row->a7f2cebu10s_Quantity;
                $ReciveTranfer_PcsSNTCountry = $ReciveTranfer_PcsSNTCountry + $ReciveTranferPcsSNTCountry;

                $ReciveTranferPriceSNTCountry = $ReciveTranferPcsSNTCountry * $row->PriceAvg;
                $ReciveTranfer_PriceSNTCountry = $ReciveTranfer_PriceSNTCountry + $ReciveTranferPriceSNTCountry;

                /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

                $ReturnItemQuantitySNTCountry = $row->returncuses_Quantity;
                $ReturnItem_PCSSNTCountry = $ReturnItem_PCSSNTCountry + $ReturnItemQuantitySNTCountry;

                $ReturnItemPriceSNTCountry = $ReturnItemQuantitySNTCountry * $NumberSNTCountry;
                $ReturnItem_PriceSNTCountry = $ReturnItem_PriceSNTCountry + $ReturnItemPriceSNTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllInPcsSNTCountry = $row->purchase_Quantity + $ReciveTranferPcsSNTCountry + $ReturnItemQuantitySNTCountry;
                $AllIn_PcsSNTCountry = $AllIn_PcsSNTCountry + $AllInPcsSNTCountry;

                $AllInPriceSNTCountry = $PurchasePriceSNTCountry + $ReciveTranferPriceSNTCountry + $ReturnItemPriceSNTCountry;
                $AllIn_PriceSNTCountry = $AllIn_PriceSNTCountry + $AllInPriceSNTCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $SendSalePcsSNTCountry = $row->dc1_s_Quantity + $row->dcp_s_Quantity + $row->dcy_s_Quantity + $row->dex_s_Quantity;
                $SendSale_PcsSNTCountry = $SendSale_PcsSNTCountry + $SendSalePcsSNTCountry;

                $sum = $BackChangePcsSNTCountry + $AllInPcsSNTCountry;
                if ($sum > 0) {
                    $SendSalePriceSNTCountry = (($AllInPriceSNTCountry + $BackChangePriceSNTCountry) / ($AllInPcsSNTCountry + $BackChangePcsSNTCountry)) * $SendSalePcsSNTCountry;
                    $SendSale_PriceSNTCountry = $SendSale_PriceSNTCountry + $SendSalePriceSNTCountry;
                }else{
                    $SendSalePriceSNTCountry = 0;
                }

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $ReciveTranOutPcsSNTCountry = $row->a8f1fgbu02s_Quantity + $row->a8f2fgbu10s_Quantity + $row->a8f2thbu05s_Quantity + $row->a8f2debu10s_Quantity + $row->a8f2exbu11s_Quantity + $row->a8f2twbu04s_Quantity + $row->a8f2twbu07s_Quantity + $row->a8f2cebu10s_Quantity;
                $ReciveTranOut_PcsSNTCountry = $ReciveTranOut_PcsSNTCountry + $ReciveTranOutPcsSNTCountry;

                $sum = $BackChangePcsSNTCountry + $AllInPcsSNTCountry;
                if ($sum > 0) {
                    $ReciveTranOutPriceSNTCountry = (($AllInPriceSNTCountry + $BackChangePriceSNTCountry) / ($AllInPcsSNTCountry + $BackChangePcsSNTCountry)) * $ReciveTranOutPcsSNTCountry;
                    $ReciveTranOut_PriceSNTCountry = $ReciveTranOut_PriceSNTCountry + $ReciveTranOutPriceSNTCountry;
                }else{
                    $ReciveTranOutPriceSNTCountry = 0;
                }

                /////////////////////////////////////////////////// คืนของร้านค้า ///////////////////////////////////////////

                $ReturnStorePcsSNTCountry = $row->returnitem_Quantity;
                $ReturnStore_PcsSNTCountry = $ReturnStore_PcsSNTCountry + $ReturnStorePcsSNTCountry;

                $sum = $BackChangePcsSNTCountry + $AllInPcsSNTCountry;
                if ($sum > 0) {
                    $ReturnStorePriceSNTCountry = (($AllInPriceSNTCountry + $BackChangePriceSNTCountry) / ($AllInPcsSNTCountry + $BackChangePcsSNTCountry)) * $ReturnStorePcsSNTCountry;
                    $ReturnStore_PriceSNTCountry = $ReturnStore_PriceSNTCountry + $ReturnStorePriceSNTCountry;
                }else{
                    $ReturnStorePriceSNTCountry = 0;
                }

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $AllOutPcsSNTCountry = $ReturnStorePcsSNTCountry + $ReciveTranOutPcsSNTCountry + $SendSalePcsSNTCountry;
                $AllOut_PcsSNTCountry = $AllOut_PcsSNTCountry + $AllOutPcsSNTCountry;

                $AllOutPriceSNTCountry = $SendSalePriceSNTCountry + $ReciveTranOutPriceSNTCountry + $ReturnStorePriceSNTCountry;
                $AllOut_PriceSNTCountry = $AllOut_PriceSNTCountry + $AllOutPriceSNTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $CalculatePcsSNTCountry = $BackChangePcsSNTCountry + $AllInPcsSNTCountry + $AllOutPcsSNTCountry;
                $Calculate_PcsSNTCountry = $Calculate_PcsSNTCountry + $CalculatePcsSNTCountry;

                $CalculatePriceSNTCountry = $BackChangePriceSNTCountry + $AllInPriceSNTCountry + $AllOutPriceSNTCountry;
                $Calculate_PriceSNTCountry = $Calculate_PriceSNTCountry + $CalculatePriceSNTCountry;

                /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

                $NewCalculatePcsSNTCountry = $row->item_stock_Quantity;
                $NewCalculate_PcsSNTCountry = $NewCalculate_PcsSNTCountry + $NewCalculatePcsSNTCountry;

                $NewCalculatePriceSNTCountry = $row->item_stock_Amount;
                $NewCalculate_PriceSNTCountry = $NewCalculate_PriceSNTCountry + $NewCalculatePriceSNTCountry;

                /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

                $DiffPcsSNTCountry = $NewCalculatePcsSNTCountry - $CalculatePcsSNTCountry;
                $Diff_PcsSNTCountry = $Diff_PcsSNTCountry + $DiffPcsSNTCountry;

                $DiffPriceSNTCountry = $NewCalculatePriceSNTCountry - $CalculatePriceSNTCountry;
                $Diff_PriceSNTCountry = $Diff_PriceSNTCountry + $DiffPriceSNTCountry;

                /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

                $NewTotalPcsSNTCountry = $CalculatePcsSNTCountry;
                $NewTotal_PcsSNTCountry = $NewTotal_PcsSNTCountry + $CalculatePcsSNTCountry;

                $NewTotalPriceSNTCountry = $NewTotalPcsSNTCountry * $row->PriceAvg;
                $NewTotal_PriceSNTCountry = $NewTotal_PriceSNTCountry + $NewTotalPriceSNTCountry;

                $NewTotalDiffNavSNTCountry = $NewTotalPriceSNTCountry - $NewCalculatePriceSNTCountry;
                $NewTotalDiff_NavSNTCountry = $NewTotalDiff_NavSNTCountry + $NewTotalDiffNavSNTCountry;

                $NewTotalDiffCalSNTCountry = $NewTotalPriceSNTCountry - $CalculatePriceSNTCountry;
                $NewTotalDiff_CalSNTCountry = $NewTotalDiff_CalSNTCountry + $NewTotalDiffCalSNTCountry;

                /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

                $a7f1fgbu02sPcsSNTCountry = $row->a7f1fgbu02s_Quantity;
                $a7f1fgbu02s_PcsSNTCountry = $a7f1fgbu02s_PcsSNTCountry + $a7f1fgbu02sPcsSNTCountry;

                $a7f1fgbu02sPriceSNTCountry = $a7f1fgbu02sPcsSNTCountry * $row->PriceAvg;
                $a7f1fgbu02s_PriceSNTCountry = $a7f1fgbu02s_PriceSNTCountry + $a7f1fgbu02sPriceSNTCountry;

                $a7f2fgbu10sPcsSNTCountry = $row->a7f2fgbu10s_Quantity;
                $a7f2fgbu10s_PcsSNTCountry = $a7f2fgbu10s_PcsSNTCountry + $a7f2fgbu10sPcsSNTCountry;

                $a7f2fgbu10sPriceSNTCountry = $a7f2fgbu10sPcsSNTCountry * $row->PriceAvg;
                $a7f2fgbu10s_PriceSNTCountry = $a7f2fgbu10s_PriceSNTCountry + $a7f2fgbu10sPriceSNTCountry;

                $a7f2thbu05sPcsSNTCountry = $row->a7f2thbu05s_Quantity;
                $a7f2thbu05s_PcsSNTCountry = $a7f2thbu05s_PcsSNTCountry + $a7f2thbu05sPcsSNTCountry;

                $a7f2thbu05sPriceSNTCountry = $a7f2thbu05sPcsSNTCountry * $row->PriceAvg;
                $a7f2thbu05s_PriceSNTCountry = $a7f2thbu05s_PriceSNTCountry + $a7f2thbu05sPriceSNTCountry;

                $a7f2debu10sPcsSNTCountry = $row->a7f2debu10s_Quantity;
                $a7f2debu10s_PcsSNTCountry = $a7f2debu10s_PcsSNTCountry + $a7f2debu10sPcsSNTCountry;

                $a7f2debu10sPriceSNTCountry = $a7f2debu10sPcsSNTCountry * $row->PriceAvg;
                $a7f2debu10s_PriceSNTCountry = $a7f2debu10s_PriceSNTCountry + $a7f2debu10sPriceSNTCountry;

                $a7f2exbu11sPcsSNTCountry = $row->a7f2exbu11s_Quantity;
                $a7f2exbu11s_PcsSNTCountry = $a7f2exbu11s_PcsSNTCountry + $a7f2exbu11sPcsSNTCountry;

                $a7f2exbu11sPriceSNTCountry = $a7f2exbu11sPcsSNTCountry * $row->PriceAvg;
                $a7f2exbu11s_PriceSNTCountry = $a7f2exbu11s_PriceSNTCountry + $a7f2exbu11sPriceSNTCountry;

                $a7f2twbu04sPcsSNTCountry = $row->a7f2twbu04s_Quantity;
                $a7f2twbu04s_PcsSNTCountry = $a7f2twbu04s_PcsSNTCountry + $a7f2twbu04sPcsSNTCountry;

                $a7f2twbu04sPriceSNTCountry = $a7f2twbu04sPcsSNTCountry * $row->PriceAvg;
                $a7f2twbu04s_PriceSNTCountry = $a7f2twbu04s_PriceSNTCountry + $a7f2twbu04sPriceSNTCountry;

                $a7f2twbu07sPcsSNTCountry = $row->a7f2twbu07s_Quantity;
                $a7f2twbu07s_PcsSNTCountry = $a7f2twbu07s_PcsSNTCountry + $a7f2twbu07sPcsSNTCountry;

                $a7f2twbu07sPriceSNTCountry = $a7f2twbu07sPcsSNTCountry * $row->PriceAvg;
                $a7f2twbu07s_PriceSNTCountry = $a7f2twbu07s_PriceSNTCountry + $a7f2twbu07sPriceSNTCountry;

                $a7f2cebu10sPcsSNTCountry = $row->a7f2cebu10s_Quantity;
                $a7f2cebu10s_PcsSNTCountry = $a7f2cebu10s_PcsSNTCountry + $a7f2cebu10sPcsSNTCountry;

                $a7f2cebu10sPriceSNTCountry = $a7f2cebu10sPcsSNTCountry * $row->PriceAvg;
                $a7f2cebu10s_PriceSNTCountry = $a7f2cebu10s_PriceSNTCountry + $a7f2cebu10sPriceSNTCountry;

                /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

                $a8f1fgbu02sPcsSNTCountry = $row->a8f1fgbu02s_Quantity;
                $a8f1fgbu02s_PcsSNTCountry = $a8f1fgbu02s_PcsSNTCountry + $a8f1fgbu02sPcsSNTCountry;

                $a8f1fgbu02sPriceSNTCountry = $a8f1fgbu02sPcsSNTCountry * $NumberSNTCountry;
                $a8f1fgbu02s_PriceSNTCountry = $a8f1fgbu02s_PriceSNTCountry + $a8f1fgbu02sPriceSNTCountry;

                $a8f2fgbu10sPcsSNTCountry = $row->a8f2fgbu10s_Quantity;
                $a8f2fgbu10s_PcsSNTCountry = $a8f2fgbu10s_PcsSNTCountry + $a8f2fgbu10sPcsSNTCountry;

                $a8f2fgbu10sPriceSNTCountry = $a8f2fgbu10sPcsSNTCountry * $NumberSNTCountry;
                $a8f2fgbu10s_PriceSNTCountry = $a8f2fgbu10s_PriceSNTCountry + $a8f2fgbu10sPriceSNTCountry;

                $a8f2thbu05sPcsSNTCountry = $row->a8f2thbu05s_Quantity;
                $a8f2thbu05s_PcsSNTCountry = $a8f2thbu05s_PcsSNTCountry + $a8f2thbu05sPcsSNTCountry;

                $a8f2thbu05sPriceSNTCountry = $a8f2thbu05sPcsSNTCountry * $NumberSNTCountry;
                $a8f2thbu05s_PriceSNTCountry = $a8f2thbu05s_PriceSNTCountry + $a8f2thbu05sPriceSNTCountry;

                $a8f2debu10sPcsSNTCountry = $row->a8f2debu10s_Quantity;
                $a8f2debu10s_PcsSNTCountry = $a8f2debu10s_PcsSNTCountry + $a8f2debu10sPcsSNTCountry;

                $a8f2debu10sPriceSNTCountry = $a8f2debu10sPcsSNTCountry * $NumberSNTCountry;
                $a8f2debu10s_PriceSNTCountry = $a8f2debu10s_PriceSNTCountry + $a8f2debu10sPriceSNTCountry;

                $a8f2exbu11sPcsSNTCountry = $row->a8f2exbu11s_Quantity;
                $a8f2exbu11s_PcsSNTCountry = $a8f2exbu11s_PcsSNTCountry + $a8f2exbu11sPcsSNTCountry;

                $a8f2exbu11sPriceSNTCountry = $a8f2exbu11sPcsSNTCountry * $NumberSNTCountry;
                $a8f2exbu11s_PriceSNTCountry = $a8f2exbu11s_PriceSNTCountry + $a8f2exbu11sPriceSNTCountry;

                $a8f2twbu04sPcsSNTCountry = $row->a8f2twbu04s_Quantity;
                $a8f2twbu04s_PcsSNTCountry = $a8f2twbu04s_PcsSNTCountry + $a8f2twbu04sPcsSNTCountry;

                $a8f2twbu04sPriceSNTCountry = $a8f2twbu04sPcsSNTCountry * $NumberSNTCountry;
                $a8f2twbu04s_PriceSNTCountry = $a8f2twbu04s_PriceSNTCountry + $a8f2twbu04sPriceSNTCountry;

                $a8f2twbu07sPcsSNTCountry = $row->a8f2twbu07s_Quantity;
                $a8f2twbu07s_PcsSNTCountry = $a8f2twbu07s_PcsSNTCountry + $a8f2twbu07sPcsSNTCountry;

                $a8f2twbu07sPriceSNTCountry = $a8f2twbu07sPcsSNTCountry * $NumberSNTCountry;
                $a8f2twbu07s_PriceSNTCountry = $a8f2twbu07s_PriceSNTCountry + $a8f2twbu07sPriceSNTCountry;

                $a8f2cebu10sPcsSNTCountry = $row->a8f2cebu10s_Quantity;
                $a8f2cebu10s_PcsSNTCountry = $a8f2cebu10s_PcsSNTCountry + $a8f2cebu10sPcsSNTCountry;

                $a8f2cebu10sPriceSNTCountry = $a8f2cebu10sPcsSNTCountry * $NumberSNTCountry;
                $a8f2cebu10s_PriceSNTCountry = $a8f2cebu10s_PriceSNTCountry + $a8f2cebu10sPriceSNTCountry;

                /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

                $DC1PcsSNTCountry = $row->dc1_s_Quantity;
                $DC1_PcsSNTCountry = $DC1_PcsSNTCountry + $DC1PcsSNTCountry;

                $DC1PriceSNTCountry = $DC1PcsSNTCountry * $NumberSNTCountry;
                $DC1_PriceSNTCountry = $DC1_PriceSNTCountry + $DC1PriceSNTCountry;

                $DCPPcsSNTCountry = $row->dcp_s_Quantity;
                $DCP_PcsSNTCountry = $DCP_PcsSNTCountry + $DCPPcsSNTCountry;

                $DCPPriceSNTCountry = $DCPPcsSNTCountry * $NumberSNTCountry;
                $DCP_PriceSNTCountry = $DCP_PriceSNTCountry + $DCPPriceSNTCountry;

                $DCYPcsSNTCountry = $row->dcy_s_Quantity;
                $DCY_PcsSNTCountry = $DCY_PcsSNTCountry + $DCYPcsSNTCountry;

                $DCYPriceSNTCountry = $DCYPcsSNTCountry * $NumberSNTCountry;
                $DCY_PriceSNTCountry = $DCY_PriceSNTCountry + $DCYPriceSNTCountry;

                $DEXPcsSNTCountry = $row->dex_s_Quantity;
                $DEX_PcsSNTCountry = $DEX_PcsSNTCountry + $DEXPcsSNTCountry;

                $DEXPriceSNTCountry = $DEXPcsSNTCountry * $NumberSNTCountry;
                $DEX_PriceSNTCountry = $DEX_PriceSNTCountry + $DEXPriceSNTCountry;
            }

            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////

        }

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
        $a8f1fgbu02s_PriceAllDCY = $a8f1fgbu02s_PriceNTDCY + $a8f1fgbu02s_PriceTWDCY + $a8f1fgbu02s_PriceSNTDCY;
        $a8f2fgbu10s_PcsAllDCY = $a8f2fgbu10s_PcsNTDCY + $a8f2fgbu10s_PcsTWDCY + $a8f2fgbu10s_PcsSNTDCY;
        $a8f2fgbu10s_PriceAllDCY = $a8f2fgbu10s_PriceNTDCY + $a8f2fgbu10s_PriceTWDCY + $a8f2fgbu10s_PriceSNTDCY;
        $a8f2thbu05s_PcsAllDCY = $a8f2thbu05s_PcsNTDCY + $a8f2thbu05s_PcsTWDCY + $a8f2thbu05s_PcsSNTDCY;
        $a8f2thbu05s_PriceAllDCY = $a8f2thbu05s_PriceNTDCY + $a8f2thbu05s_PriceTWDCY + $a8f2thbu05s_PriceSNTDCY;
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

        $Pcs_AfterAllDCP =  $Pcs_AfterNTDCP + $Pcs_AfterTWDCP + $Pcs_AfterLNDCP;
        $Price_AfterAllDCP = $Price_AfterNTDCP + $Price_AfterTWDCP + $Price_AfterLNDCP;
        $Pcs_AfterAllDCP =  $Pcs_AfterNTDCP + $Pcs_AfterTWDCP + $Pcs_AfterLNDCP;
        $Price_AfterAllDCP =  $Price_AfterNTDCP + $Price_AfterTWDCP + $Price_AfterLNDCP;
        $Po_PcsAllDCP = $Po_PcsNTDCP + $Po_PcsTWDCP + $Po_PcsLNDCP;
        $Po_PriceAllDCP =  $Po_PriceNTDCP + $Po_PriceTWDCP + $Po_PriceLNDCP;
        $Neg_PcsAllDCP =  $Neg_PcsNTDCP + $Neg_PcsTWDCP + $Neg_PcsLNDCP;
        $Neg_PriceAllDCP =  $Neg_PriceNTDCP + $Neg_PriceTWDCP + $Neg_PriceLNDCP;
        $BackChange_PcsAllDCP =  $BackChange_PcsNTDCP + $BackChange_PcsTWDCP + $BackChange_PcsLNDCP;
        $BackChange_PriceAllDCP =  $BackChange_PriceNTDCP + $BackChange_PriceTWDCP + $BackChange_PriceLNDCP;
        $Purchase_PcsAllDCP =  $Purchase_PcsNTDCP + $Purchase_PcsTWDCP + $Purchase_PcsLNDCP;
        $Purchase_PriceAllDCP =  $Purchase_PriceNTDCP + $Purchase_PriceTWDCP + $Purchase_PriceLNDCP;
        $ReciveTranfer_PcsAllDCP =  $ReciveTranfer_PcsNTDCP + $ReciveTranfer_PcsTWDCP + $ReciveTranfer_PcsLNDCP;
        $ReciveTranfer_PriceAllDCP =  $ReciveTranfer_PriceNTDCP + $ReciveTranfer_PriceTWDCP + $ReciveTranfer_PriceLNDCP;
        $ReturnItem_PCSAllDCP =  $ReturnItem_PCSNTDCP + $ReturnItem_PCSTWDCP + $ReturnItem_PCSLNDCP;
        $ReturnItem_PriceAllDCP =  $ReturnItem_PriceNTDCP + $ReturnItem_PriceTWDCP + $ReturnItem_PriceLNDCP;
        $AllIn_PcsAllDCP =  $AllIn_PcsNTDCP + $AllIn_PcsTWDCP + $AllIn_PcsLNDCP;
        $AllIn_PriceAllDCP =  $AllIn_PriceNTDCP + $AllIn_PriceTWDCP + $AllIn_PriceLNDCP;
        $SendSale_PcsAllDCP =  $SendSale_PcsNTDCP + $SendSale_PcsTWDCP + $SendSale_PcsLNDCP;
        $SendSale_PriceAllDCP =  $SendSale_PriceNTDCP + $SendSale_PriceTWDCP + $SendSale_PriceLNDCP;
        $ReciveTranOut_PcsAllDCP =  $ReciveTranOut_PcsNTDCP + $ReciveTranOut_PcsTWDCP + $ReciveTranOut_PcsLNDCP;
        $ReciveTranOut_PriceAllDCP =  $ReciveTranOut_PriceNTDCP + $ReciveTranOut_PriceTWDCP + $ReciveTranOut_PriceLNDCP;
        $ReturnStore_PcsAllDCP =  $ReturnStore_PcsNTDCP + $ReturnStore_PcsTWDCP + $ReturnStore_PcsLNDCP;
        $ReturnStore_PriceAllDCP =  $ReturnStore_PriceNTDCP + $ReturnStore_PriceTWDCP + $ReturnStore_PriceLNDCP;
        $AllOut_PcsAllDCP =  $AllOut_PcsNTDCP + $AllOut_PcsTWDCP + $AllOut_PcsLNDCP;
        $AllOut_PriceAllDCP =  $AllOut_PriceNTDCP + $AllOut_PriceTWDCP + $AllOut_PriceLNDCP;
        $Calculate_PcsAllDCP =  $Calculate_PcsNTDCP + $Calculate_PcsTWDCP + $Calculate_PcsLNDCP;
        $Calculate_PriceAllDCP =  $Calculate_PriceNTDCP + $Calculate_PriceTWDCP + $Calculate_PriceLNDCP;
        $NewCalculate_PcsAllDCP = $NewCalculate_PcsNTDCP + $NewCalculate_PcsTWDCP + $NewCalculate_PcsLNDCP;
        $NewCalculate_PriceAllDCP = $NewCalculate_PriceNTDCP + $NewCalculate_PriceTWDCP + $NewCalculate_PriceLNDCP;
        $Diff_PcsAllDCP = $Diff_PcsNTDCP + $Diff_PcsTWDCP + $Diff_PcsLNDCP;
        $Diff_PriceAllDCP = $Diff_PriceNTDCP + $Diff_PriceTWDCP + $Diff_PriceLNDCP;
        $NewTotal_PcsAllDCP = $NewTotal_PcsNTDCP + $NewTotal_PcsTWDCP + $NewTotal_PcsLNDCP;
        $NewTotal_PriceAllDCP = $NewTotal_PriceNTDCP + $NewTotal_PriceTWDCP + $NewTotal_PriceLNDCP;
        $NewTotalDiff_NavAllDCP = $NewTotalDiff_NavNTDCP + $NewTotalDiff_NavTWDCP + $NewTotalDiff_NavLNDCP;
        $NewTotalDiff_CalAllDCP = $NewTotalDiff_CalNTDCP + $NewTotalDiff_CalTWDCP + $NewTotalDiff_CalLNDCP;
        $a7f1fgbu02s_PcsAllDCP = $a7f1fgbu02s_PcsNTDCP + $a7f1fgbu02s_PcsTWDCP + $a7f1fgbu02s_PcsLNDCP;
        $a7f1fgbu02s_PriceAllDCP = $a7f1fgbu02s_PriceNTDCP + $a7f1fgbu02s_PriceTWDCP + $a7f1fgbu02s_PriceLNDCP;
        $a7f2fgbu10s_PcsAllDCP = $a7f2fgbu10s_PcsNTDCP + $a7f2fgbu10s_PcsTWDCP + $a7f2fgbu10s_PcsLNDCP;
        $a7f2fgbu10s_PriceAllDCP = $a7f2fgbu10s_PriceNTDCP + $a7f2fgbu10s_PriceTWDCP + $a7f2fgbu10s_PriceLNDCP;
        $a7f2thbu05s_PcsAllDCP = $a7f2thbu05s_PcsNTDCP + $a7f2thbu05s_PcsTWDCP + $a7f2thbu05s_PcsLNDCP;
        $a7f2thbu05s_PriceAllDCP = $a7f2thbu05s_PriceNTDCP + $a7f2thbu05s_PriceTWDCP + $a7f2thbu05s_PriceLNDCP;
        $a7f2debu10s_PcsAllDCP = $a7f2debu10s_PcsNTDCP + $a7f2debu10s_PcsTWDCP + $a7f2debu10s_PcsLNDCP;
        $a7f2debu10s_PriceAllDCP = $a7f2debu10s_PriceNTDCP + $a7f2debu10s_PriceTWDCP + $a7f2debu10s_PriceLNDCP;
        $a7f2exbu11s_PcsAllDCP = $a7f2exbu11s_PcsNTDCP + $a7f2exbu11s_PcsTWDCP + $a7f2exbu11s_PcsLNDCP;
        $a7f2exbu11s_PriceAllDCP = $a7f2exbu11s_PriceNTDCP + $a7f2exbu11s_PriceTWDCP + $a7f2exbu11s_PriceLNDCP;
        $a7f2twbu04s_PcsAllDCP = $a7f2twbu04s_PcsNTDCP + $a7f2twbu04s_PcsTWDCP + $a7f2twbu04s_PcsLNDCP;
        $a7f2twbu04s_PriceAllDCP = $a7f2twbu04s_PriceNTDCP + $a7f2twbu04s_PriceTWDCP + $a7f2twbu04s_PriceLNDCP;
        $a7f2twbu07s_PcsAllDCP = $a7f2twbu07s_PcsNTDCP + $a7f2twbu07s_PcsTWDCP + $a7f2twbu07s_PcsLNDCP;
        $a7f2twbu07s_PriceAllDCP = $a7f2twbu07s_PriceNTDCP + $a7f2twbu07s_PriceTWDCP + $a7f2twbu07s_PriceLNDCP;
        $a7f2cebu10s_PcsAllDCP = $a7f2cebu10s_PcsNTDCP + $a7f2cebu10s_PcsTWDCP + $a7f2cebu10s_PcsLNDCP;
        $a7f2cebu10s_PriceAllDCP = $a7f2cebu10s_PriceNTDCP + $a7f2cebu10s_PriceTWDCP + $a7f2cebu10s_PriceLNDCP;
        $a8f1fgbu02s_PcsAllDCP = $a8f1fgbu02s_PcsNTDCP + $a8f1fgbu02s_PcsTWDCP + $a8f1fgbu02s_PcsLNDCP;
        $a8f1fgbu02s_PriceAllDCP = $a8f1fgbu02s_PriceNTDCP + $a8f1fgbu02s_PriceTWDCP + $a8f1fgbu02s_PriceLNDCP;
        $a8f2fgbu10s_PcsAllDCP = $a8f2fgbu10s_PcsNTDCP + $a8f2fgbu10s_PcsTWDCP + $a8f2fgbu10s_PcsLNDCP;
        $a8f2fgbu10s_PriceAllDCP = $a8f2fgbu10s_PriceNTDCP + $a8f2fgbu10s_PriceTWDCP + $a8f2fgbu10s_PriceLNDCP;
        $a8f2thbu05s_PcsAllDCP = $a8f2thbu05s_PcsNTDCP + $a8f2thbu05s_PcsTWDCP + $a8f2thbu05s_PcsLNDCP;
        $a8f2thbu05s_PriceAllDCP = $a8f2thbu05s_PriceNTDCP + $a8f2thbu05s_PriceTWDCP + $a8f2thbu05s_PriceLNDCP;
        $a8f2debu10s_PcsAllDCP = $a8f2debu10s_PcsNTDCP + $a8f2debu10s_PcsTWDCP + $a8f2debu10s_PcsLNDCP;
        $a8f2debu10s_PriceAllDCP = $a8f2debu10s_PriceNTDCP + $a8f2debu10s_PriceTWDCP + $a8f2debu10s_PriceLNDCP;
        $a8f2exbu11s_PcsAllDCP = $a8f2exbu11s_PcsNTDCP + $a8f2exbu11s_PcsTWDCP + $a8f2exbu11s_PcsLNDCP;
        $a8f2exbu11s_PriceAllDCP = $a8f2exbu11s_PriceNTDCP + $a8f2exbu11s_PriceTWDCP + $a8f2exbu11s_PriceLNDCP;
        $a8f2twbu04s_PcsAllDCP = $a8f2twbu04s_PcsNTDCP + $a8f2twbu04s_PcsTWDCP + $a8f2twbu04s_PcsLNDCP;
        $a8f2twbu04s_PriceAllDCP = $a8f2twbu04s_PriceNTDCP + $a8f2twbu04s_PriceTWDCP + $a8f2twbu04s_PriceLNDCP;
        $a8f2twbu07s_PcsAllDCP = $a8f2twbu07s_PcsNTDCP + $a8f2twbu07s_PcsTWDCP + $a8f2twbu07s_PcsLNDCP;
        $a8f2twbu07s_PriceAllDCP = $a8f2twbu07s_PriceNTDCP + $a8f2twbu07s_PriceTWDCP + $a8f2twbu07s_PriceLNDCP;
        $a8f2cebu10s_PcsAllDCP = $a8f2cebu10s_PcsNTDCP + $a8f2cebu10s_PcsTWDCP + $a8f2cebu10s_PcsLNDCP;
        $a8f2cebu10s_PriceAllDCP = $a8f2cebu10s_PriceNTDCP + $a8f2cebu10s_PriceTWDCP + $a8f2cebu10s_PriceLNDCP;
        $DC1_PcsAllDCP = $DC1_PcsNTDCP + $DC1_PcsTWDCP + $DC1_PcsLNDCP;
        $DC1_PriceAllDCP = $DC1_PriceNTDCP + $DC1_PriceTWDCP + $DC1_PriceLNDCP;
        $DCP_PcsAllDCP = $DCP_PcsNTDCP + $DCP_PcsTWDCP + $DCP_PcsLNDCP;
        $DCP_PriceAllDCP = $DCP_PriceNTDCP + $DCP_PriceTWDCP + $DCP_PriceLNDCP;
        $DCY_PcsAllDCP = $DCY_PcsNTDCP + $DCY_PcsTWDCP + $DCY_PcsLNDCP;
        $DCY_PriceAllDCP = $DCY_PriceNTDCP + $DCY_PriceTWDCP + $DCY_PriceLNDCP;
        $DEX_PcsAllDCP = $DEX_PcsNTDCP + $DEX_PcsTWDCP + $DEX_PcsLNDCP;
        $DEX_PriceAllDCP = $DEX_PriceNTDCP + $DEX_PriceTWDCP + $DEX_PriceLNDCP;

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllCountry = $Pcs_AfterMTCountry + $Pcs_AfterNTCountry + $Pcs_AfterLNCountry + $Pcs_AfterTWCountry + $Pcs_AfterSNTCountry;
        $Price_AfterAllCountry = $Price_AfterMTCountry + $Price_AfterNTCountry + $Price_AfterLNCountry + $Price_AfterTWCountry + $Price_AfterSNTCountry;
        $Pcs_AfterAllCountry =  $Pcs_AfterMTCountry + $Pcs_AfterNTCountry + $Pcs_AfterLNCountry + $Pcs_AfterTWCountry + $Pcs_AfterSNTCountry;
        $Price_AfterAllCountry =  $Price_AfterMTCountry + $Price_AfterNTCountry + $Price_AfterLNCountry + $Price_AfterTWCountry + $Price_AfterSNTCountry;
        $Po_PcsAllCountry = $Po_PcsMTCountry + $Po_PcsNTCountry + $Po_PcsLNCountry + $Po_PcsTWCountry + $Po_PcsSNTCountry;
        $Po_PriceAllCountry =  $Po_PriceMTCountry + $Po_PriceNTCountry + $Po_PriceLNCountry + $Po_PriceTWCountry + $Po_PriceSNTCountry;
        $Neg_PcsAllCountry =  $Neg_PcsMTCountry + $Neg_PcsNTCountry + $Neg_PcsLNCountry + $Neg_PcsTWCountry + $Neg_PcsSNTCountry;
        $Neg_PriceAllCountry =  $Neg_PriceMTCountry + $Neg_PriceNTCountry + $Neg_PriceLNCountry + $Neg_PriceTWCountry + $Neg_PriceSNTCountry;
        $BackChange_PcsAllCountry =  $BackChange_PcsMTCountry + $BackChange_PcsNTCountry + $BackChange_PcsLNCountry + $BackChange_PcsTWCountry + $BackChange_PcsSNTCountry;
        $BackChange_PriceAllCountry =  $BackChange_PriceMTCountry + $BackChange_PriceNTCountry + $BackChange_PriceLNCountry + $BackChange_PriceTWCountry + $BackChange_PriceSNTCountry;
        $Purchase_PcsAllCountry =  $Purchase_PcsMTCountry + $Purchase_PcsNTCountry + $Purchase_PcsLNCountry + $Purchase_PcsTWCountry + $Purchase_PcsSNTCountry;
        $Purchase_PriceAllCountry =  $Purchase_PriceMTCountry + $Purchase_PriceNTCountry + $Purchase_PriceLNCountry + $Purchase_PriceTWCountry + $Purchase_PriceSNTCountry;
        $ReciveTranfer_PcsAllCountry =  $ReciveTranfer_PcsMTCountry + $ReciveTranfer_PcsNTCountry + $ReciveTranfer_PcsLNCountry + $ReciveTranfer_PcsTWCountry + $ReciveTranfer_PcsSNTCountry;
        $ReciveTranfer_PriceAllCountry =  $ReciveTranfer_PriceMTCountry + $ReciveTranfer_PriceNTCountry + $ReciveTranfer_PriceLNCountry + $ReciveTranfer_PriceTWCountry + $ReciveTranfer_PriceSNTCountry;
        $ReturnItem_PCSAllCountry =  $ReturnItem_PCSMTCountry + $ReturnItem_PCSNTCountry + $ReturnItem_PCSLNCountry + $ReturnItem_PCSTWCountry + $ReturnItem_PCSSNTCountry;
        $ReturnItem_PriceAllCountry =  $ReturnItem_PriceMTCountry + $ReturnItem_PriceNTCountry + $ReturnItem_PriceLNCountry + $ReturnItem_PriceTWCountry + $ReturnItem_PriceSNTCountry;
        $AllIn_PcsAllCountry =  $AllIn_PcsMTCountry + $AllIn_PcsNTCountry + $AllIn_PcsLNCountry + $AllIn_PcsTWCountry + $AllIn_PcsSNTCountry;
        $AllIn_PriceAllCountry =  $AllIn_PriceMTCountry + $AllIn_PriceNTCountry + $AllIn_PriceLNCountry + $AllIn_PriceTWCountry + $AllIn_PriceSNTCountry;
        $SendSale_PcsAllCountry =  $SendSale_PcsMTCountry + $SendSale_PcsNTCountry + $SendSale_PcsLNCountry + $SendSale_PcsTWCountry + $SendSale_PcsSNTCountry;
        $SendSale_PriceAllCountry =  $SendSale_PriceMTCountry + $SendSale_PriceNTCountry + $SendSale_PriceLNCountry + $SendSale_PriceTWCountry + $SendSale_PriceSNTCountry;
        $ReciveTranOut_PcsAllCountry =  $ReciveTranOut_PcsMTCountry + $ReciveTranOut_PcsNTCountry + $ReciveTranOut_PcsLNCountry + $ReciveTranOut_PcsTWCountry + $ReciveTranOut_PcsSNTCountry;
        $ReciveTranOut_PriceAllCountry =  $ReciveTranOut_PriceMTCountry + $ReciveTranOut_PriceNTCountry + $ReciveTranOut_PriceLNCountry + $ReciveTranOut_PriceTWCountry + $ReciveTranOut_PriceSNTCountry;
        $ReturnStore_PcsAllCountry =  $ReturnStore_PcsMTCountry + $ReturnStore_PcsNTCountry + $ReturnStore_PcsLNCountry + $ReturnStore_PcsTWCountry + $ReturnStore_PcsSNTCountry;
        $ReturnStore_PriceAllCountry =  $ReturnStore_PriceMTCountry + $ReturnStore_PriceNTCountry + $ReturnStore_PriceLNCountry + $ReturnStore_PriceTWCountry + $ReturnStore_PriceSNTCountry;
        $AllOut_PcsAllCountry =  $AllOut_PcsMTCountry + $AllOut_PcsNTCountry + $AllOut_PcsLNCountry + $AllOut_PcsTWCountry + $AllOut_PcsSNTCountry;
        $AllOut_PriceAllCountry =  $AllOut_PriceMTCountry + $AllOut_PriceNTCountry + $AllOut_PriceLNCountry + $AllOut_PriceTWCountry + $AllOut_PriceSNTCountry;
        $Calculate_PcsAllCountry =  $Calculate_PcsMTCountry + $Calculate_PcsNTCountry + $Calculate_PcsLNCountry + $Calculate_PcsTWCountry + $Calculate_PcsSNTCountry;
        $Calculate_PriceAllCountry =  $Calculate_PriceMTCountry + $Calculate_PriceNTCountry + $Calculate_PriceLNCountry + $Calculate_PriceTWCountry + $Calculate_PriceSNTCountry;
        $NewCalculate_PcsAllCountry = $NewCalculate_PcsMTCountry + $NewCalculate_PcsNTCountry + $NewCalculate_PcsLNCountry + $NewCalculate_PcsTWCountry + $NewCalculate_PcsSNTCountry;
        $NewCalculate_PriceAllCountry = $NewCalculate_PriceMTCountry + $NewCalculate_PriceNTCountry + $NewCalculate_PriceLNCountry + $NewCalculate_PriceTWCountry + $NewCalculate_PriceSNTCountry;
        $Diff_PcsAllCountry = $Diff_PcsMTCountry + $Diff_PcsNTCountry + $Diff_PcsLNCountry + $Diff_PcsTWCountry + $Diff_PcsSNTCountry;
        $Diff_PriceAllCountry = $Diff_PriceMTCountry + $Diff_PriceNTCountry + $Diff_PriceLNCountry + $Diff_PriceTWCountry + $Diff_PriceSNTCountry;
        $NewTotal_PcsAllCountry = $NewTotal_PcsMTCountry + $NewTotal_PcsNTCountry + $NewTotal_PcsLNCountry + $NewTotal_PcsTWCountry + $NewTotal_PcsSNTCountry;
        $NewTotal_PriceAllCountry = $NewTotal_PriceMTCountry + $NewTotal_PriceNTCountry + $NewTotal_PriceLNCountry + $NewTotal_PriceTWCountry + $NewTotal_PriceSNTCountry;
        $NewTotalDiff_NavAllCountry = $NewTotalDiff_NavMTCountry + $NewTotalDiff_NavNTCountry + $NewTotalDiff_NavLNCountry + $NewTotalDiff_NavTWCountry + $NewTotalDiff_NavSNTCountry;
        $NewTotalDiff_CalAllCountry = $NewTotalDiff_CalMTCountry + $NewTotalDiff_CalNTCountry + $NewTotalDiff_CalLNCountry + $NewTotalDiff_CalTWCountry + $NewTotalDiff_CalSNTCountry;
        $a7f1fgbu02s_PcsAllCountry = $a7f1fgbu02s_PcsMTCountry + $a7f1fgbu02s_PcsNTCountry + $a7f1fgbu02s_PcsLNCountry + $a7f1fgbu02s_PcsTWCountry + $a7f1fgbu02s_PcsSNTCountry;
        $a7f1fgbu02s_PriceAllCountry = $a7f1fgbu02s_PriceMTCountry + $a7f1fgbu02s_PriceNTCountry + $a7f1fgbu02s_PriceLNCountry + $a7f1fgbu02s_PriceTWCountry + $a7f1fgbu02s_PriceSNTCountry;
        $a7f2fgbu10s_PcsAllCountry = $a7f2fgbu10s_PcsMTCountry + $a7f2fgbu10s_PcsNTCountry + $a7f2fgbu10s_PcsLNCountry + $a7f2fgbu10s_PcsTWCountry + $a7f2fgbu10s_PcsSNTCountry;
        $a7f2fgbu10s_PriceAllCountry = $a7f2fgbu10s_PriceMTCountry + $a7f2fgbu10s_PriceNTCountry + $a7f2fgbu10s_PriceLNCountry + $a7f2fgbu10s_PriceTWCountry + $a7f2fgbu10s_PriceSNTCountry;
        $a7f2thbu05s_PcsAllCountry = $a7f2thbu05s_PcsMTCountry + $a7f2thbu05s_PcsNTCountry + $a7f2thbu05s_PcsLNCountry + $a7f2thbu05s_PcsTWCountry + $a7f2thbu05s_PcsSNTCountry;
        $a7f2thbu05s_PriceAllCountry = $a7f2thbu05s_PriceMTCountry + $a7f2thbu05s_PriceNTCountry + $a7f2thbu05s_PriceLNCountry + $a7f2thbu05s_PriceTWCountry + $a7f2thbu05s_PriceSNTCountry;
        $a7f2debu10s_PcsAllCountry = $a7f2debu10s_PcsMTCountry + $a7f2debu10s_PcsNTCountry + $a7f2debu10s_PcsLNCountry + $a7f2debu10s_PcsTWCountry + $a7f2debu10s_PcsSNTCountry;
        $a7f2debu10s_PriceAllCountry = $a7f2debu10s_PriceMTCountry + $a7f2debu10s_PriceNTCountry + $a7f2debu10s_PriceLNCountry + $a7f2debu10s_PriceTWCountry + $a7f2debu10s_PriceSNTCountry;
        $a7f2exbu11s_PcsAllCountry = $a7f2exbu11s_PcsMTCountry + $a7f2exbu11s_PcsNTCountry + $a7f2exbu11s_PcsLNCountry + $a7f2exbu11s_PcsTWCountry + $a7f2exbu11s_PcsSNTCountry;
        $a7f2exbu11s_PriceAllCountry = $a7f2exbu11s_PriceMTCountry + $a7f2exbu11s_PriceNTCountry + $a7f2exbu11s_PriceLNCountry + $a7f2exbu11s_PriceTWCountry + $a7f2exbu11s_PriceSNTCountry;
        $a7f2twbu04s_PcsAllCountry = $a7f2twbu04s_PcsMTCountry + $a7f2twbu04s_PcsNTCountry + $a7f2twbu04s_PcsLNCountry + $a7f2twbu04s_PcsTWCountry + $a7f2twbu04s_PcsSNTCountry;
        $a7f2twbu04s_PriceAllCountry = $a7f2twbu04s_PriceMTCountry + $a7f2twbu04s_PriceNTCountry + $a7f2twbu04s_PriceLNCountry + $a7f2twbu04s_PriceTWCountry + $a7f2twbu04s_PriceSNTCountry;
        $a7f2twbu07s_PcsAllCountry = $a7f2twbu07s_PcsMTCountry + $a7f2twbu07s_PcsNTCountry + $a7f2twbu07s_PcsLNCountry + $a7f2twbu07s_PcsTWCountry + $a7f2twbu07s_PcsSNTCountry;
        $a7f2twbu07s_PriceAllCountry = $a7f2twbu07s_PriceMTCountry + $a7f2twbu07s_PriceNTCountry + $a7f2twbu07s_PriceLNCountry + $a7f2twbu07s_PriceTWCountry + $a7f2twbu07s_PriceSNTCountry;
        $a7f2cebu10s_PcsAllCountry = $a7f2cebu10s_PcsMTCountry + $a7f2cebu10s_PcsNTCountry + $a7f2cebu10s_PcsLNCountry + $a7f2cebu10s_PcsTWCountry + $a7f2cebu10s_PcsSNTCountry;
        $a7f2cebu10s_PriceAllCountry = $a7f2cebu10s_PriceMTCountry + $a7f2cebu10s_PriceNTCountry + $a7f2cebu10s_PriceLNCountry + $a7f2cebu10s_PriceTWCountry + $a7f2cebu10s_PriceSNTCountry;
        $a8f1fgbu02s_PcsAllCountry = $a8f1fgbu02s_PcsMTCountry + $a8f1fgbu02s_PcsNTCountry + $a8f1fgbu02s_PcsLNCountry + $a8f1fgbu02s_PcsTWCountry + $a8f1fgbu02s_PcsSNTCountry;
        $a8f1fgbu02s_PriceAllCountry = $a8f1fgbu02s_PriceMTCountry + $a8f1fgbu02s_PriceNTCountry + $a8f1fgbu02s_PriceLNCountry + $a8f1fgbu02s_PriceTWCountry + $a8f1fgbu02s_PriceSNTCountry;
        $a8f2fgbu10s_PcsAllCountry = $a8f2fgbu10s_PcsMTCountry + $a8f2fgbu10s_PcsNTCountry + $a8f2fgbu10s_PcsLNCountry + $a8f2fgbu10s_PcsTWCountry + $a8f2fgbu10s_PcsSNTCountry;
        $a8f2fgbu10s_PriceAllCountry = $a8f2fgbu10s_PriceMTCountry + $a8f2fgbu10s_PriceNTCountry + $a8f2fgbu10s_PriceLNCountry + $a8f2fgbu10s_PriceTWCountry + $a8f2fgbu10s_PriceSNTCountry;
        $a8f2thbu05s_PcsAllCountry = $a8f2thbu05s_PcsMTCountry + $a8f2thbu05s_PcsNTCountry + $a8f2thbu05s_PcsLNCountry + $a8f2thbu05s_PcsTWCountry + $a8f2thbu05s_PcsSNTCountry;
        $a8f2thbu05s_PriceAllCountry = $a8f2thbu05s_PriceMTCountry + $a8f2thbu05s_PriceNTCountry + $a8f2thbu05s_PriceLNCountry + $a8f2thbu05s_PriceTWCountry + $a8f2thbu05s_PriceSNTCountry;
        $a8f2debu10s_PcsAllCountry = $a8f2debu10s_PcsMTCountry + $a8f2debu10s_PcsNTCountry + $a8f2debu10s_PcsLNCountry + $a8f2debu10s_PcsTWCountry + $a8f2debu10s_PcsSNTCountry;
        $a8f2debu10s_PriceAllCountry = $a8f2debu10s_PriceMTCountry + $a8f2debu10s_PriceNTCountry + $a8f2debu10s_PriceLNCountry + $a8f2debu10s_PriceTWCountry + $a8f2debu10s_PriceSNTCountry;
        $a8f2exbu11s_PcsAllCountry = $a8f2exbu11s_PcsMTCountry + $a8f2exbu11s_PcsNTCountry + $a8f2exbu11s_PcsLNCountry + $a8f2exbu11s_PcsTWCountry + $a8f2exbu11s_PcsSNTCountry;
        $a8f2exbu11s_PriceAllCountry = $a8f2exbu11s_PriceMTCountry + $a8f2exbu11s_PriceNTCountry + $a8f2exbu11s_PriceLNCountry + $a8f2exbu11s_PriceTWCountry + $a8f2exbu11s_PriceSNTCountry;
        $a8f2twbu04s_PcsAllCountry = $a8f2twbu04s_PcsMTCountry + $a8f2twbu04s_PcsNTCountry + $a8f2twbu04s_PcsLNCountry + $a8f2twbu04s_PcsTWCountry + $a8f2twbu04s_PcsSNTCountry;
        $a8f2twbu04s_PriceAllCountry = $a8f2twbu04s_PriceMTCountry + $a8f2twbu04s_PriceNTCountry + $a8f2twbu04s_PriceLNCountry + $a8f2twbu04s_PriceTWCountry + $a8f2twbu04s_PriceSNTCountry;
        $a8f2twbu07s_PcsAllCountry = $a8f2twbu07s_PcsMTCountry + $a8f2twbu07s_PcsNTCountry + $a8f2twbu07s_PcsLNCountry + $a8f2twbu07s_PcsTWCountry + $a8f2twbu07s_PcsSNTCountry;
        $a8f2twbu07s_PriceAllCountry = $a8f2twbu07s_PriceMTCountry + $a8f2twbu07s_PriceNTCountry + $a8f2twbu07s_PriceLNCountry + $a8f2twbu07s_PriceTWCountry + $a8f2twbu07s_PriceSNTCountry;
        $a8f2cebu10s_PcsAllCountry = $a8f2cebu10s_PcsMTCountry + $a8f2cebu10s_PcsNTCountry + $a8f2cebu10s_PcsLNCountry + $a8f2cebu10s_PcsTWCountry + $a8f2cebu10s_PcsSNTCountry;
        $a8f2cebu10s_PriceAllCountry = $a8f2cebu10s_PriceMTCountry + $a8f2cebu10s_PriceNTCountry + $a8f2cebu10s_PriceLNCountry + $a8f2cebu10s_PriceTWCountry + $a8f2cebu10s_PriceSNTCountry;
        $DC1_PcsAllCountry = $DC1_PcsMTCountry + $DC1_PcsNTCountry + $DC1_PcsLNCountry + $DC1_PcsTWCountry + $DC1_PcsSNTCountry;
        $DC1_PriceAllCountry = $DC1_PriceMTCountry + $DC1_PriceNTCountry + $DC1_PriceLNCountry + $DC1_PriceTWCountry + $DC1_PriceSNTCountry;
        $DCP_PcsAllCountry = $DCP_PcsMTCountry + $DCP_PcsNTCountry + $DCP_PcsLNCountry + $DCP_PcsTWCountry + $DCP_PcsSNTCountry;
        $DCP_PriceAllCountry = $DCP_PriceMTCountry + $DCP_PriceNTCountry + $DCP_PriceLNCountry + $DCP_PriceTWCountry + $DCP_PriceSNTCountry;
        $DCY_PcsAllCountry = $DCY_PcsMTCountry + $DCY_PcsNTCountry + $DCY_PcsLNCountry + $DCY_PcsTWCountry + $DCY_PcsSNTCountry;
        $DCY_PriceAllCountry = $DCY_PriceMTCountry + $DCY_PriceNTCountry + $DCY_PriceLNCountry + $DCY_PriceTWCountry + $DCY_PriceSNTCountry;
        $DEX_PcsAllCountry = $DEX_PcsMTCountry + $DEX_PcsNTCountry + $DEX_PcsLNCountry + $DEX_PcsTWCountry + $DEX_PcsSNTCountry;
        $DEX_PriceAllCountry = $DEX_PriceMTCountry + $DEX_PriceNTCountry + $DEX_PriceLNCountry + $DEX_PriceTWCountry + $DEX_PriceSNTCountry;

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

        $Pcs_AfterAllTotal = $Pcs_AfterAllDC1 + $Pcs_AfterAllDCP + $Pcs_AfterAllDCY + $Pcs_AfterAllCountry;
        $Price_AfterAllTotal = $Price_AfterAllDC1 + $Price_AfterAllDCP + $Price_AfterAllDCY + $Price_AfterAllCountry;
        $Pcs_AfterAllTotal =  $Pcs_AfterAllDC1 + $Pcs_AfterAllDCP + $Pcs_AfterAllDCY + $Pcs_AfterAllCountry;
        $Price_AfterAllTotal =  $Price_AfterAllDC1 + $Price_AfterAllDCP + $Price_AfterAllDCY + $Price_AfterAllCountry;
        $Po_PcsAllTotal = $Po_PcsAllDC1 + $Po_PcsAllDCP + $Po_PcsAllDCY + $Po_PcsAllCountry;
        $Po_PriceAllTotal =  $Po_PriceAllDC1 + $Po_PriceAllDCP + $Po_PriceAllDCY + $Po_PriceAllCountry;
        $Neg_PcsAllTotal =  $Neg_PcsAllDC1 + $Neg_PcsAllDCP + $Neg_PcsAllDCY + $Neg_PcsAllCountry;
        $Neg_PriceAllTotal =  $Neg_PriceAllDC1 + $Neg_PriceAllDCP + $Neg_PriceAllDCY + $Neg_PriceAllCountry;
        $BackChange_PcsAllTotal =  $BackChange_PcsAllDC1 + $BackChange_PcsAllDCP + $BackChange_PcsAllDCY + $BackChange_PcsAllCountry;
        $BackChange_PriceAllTotal =  $BackChange_PriceAllDC1 + $BackChange_PriceAllDCP + $BackChange_PriceAllDCY + $BackChange_PriceAllCountry;
        $Purchase_PcsAllTotal =  $Purchase_PcsAllDC1 + $Purchase_PcsAllDCP + $Purchase_PcsAllDCY + $Purchase_PcsAllCountry;
        $Purchase_PriceAllTotal =  $Purchase_PriceAllDC1 + $Purchase_PriceAllDCP + $Purchase_PriceAllDCY + $Purchase_PriceAllCountry;
        $ReciveTranfer_PcsAllTotal =  $ReciveTranfer_PcsAllDC1 + $ReciveTranfer_PcsAllDCP + $ReciveTranfer_PcsAllDCY + $ReciveTranfer_PcsAllCountry;
        $ReciveTranfer_PriceAllTotal =  $ReciveTranfer_PriceAllDC1 + $ReciveTranfer_PriceAllDCP + $ReciveTranfer_PriceAllDCY + $ReciveTranfer_PriceAllCountry;
        $ReturnItem_PCSAllTotal =  $ReturnItem_PCSAllDC1 + $ReturnItem_PCSAllDCP + $ReturnItem_PCSAllDCY + $ReturnItem_PCSAllCountry;
        $ReturnItem_PriceAllTotal =  $ReturnItem_PriceAllDC1 + $ReturnItem_PriceAllDCP + $ReturnItem_PriceAllDCY + $ReturnItem_PriceAllCountry;
        $AllIn_PcsAllTotal =  $AllIn_PcsAllDC1 + $AllIn_PcsAllDCP + $AllIn_PcsAllDCY + $AllIn_PcsAllCountry;
        $AllIn_PriceAllTotal =  $AllIn_PriceAllDC1 + $AllIn_PriceAllDCP + $AllIn_PriceAllDCY + $AllIn_PriceAllCountry;
        $SendSale_PcsAllTotal =  $SendSale_PcsAllDC1 + $SendSale_PcsAllDCP + $SendSale_PcsAllDCY + $SendSale_PcsAllCountry;
        $SendSale_PriceAllTotal =  $SendSale_PriceAllDC1 + $SendSale_PriceAllDCP + $SendSale_PriceAllDCY + $SendSale_PriceAllCountry;
        $ReciveTranOut_PcsAllTotal =  $ReciveTranOut_PcsAllDC1 + $ReciveTranOut_PcsAllDCP + $ReciveTranOut_PcsAllDCY + $ReciveTranOut_PcsAllCountry;
        $ReciveTranOut_PriceAllTotal =  $ReciveTranOut_PriceAllDC1 + $ReciveTranOut_PriceAllDCP + $ReciveTranOut_PriceAllDCY + $ReciveTranOut_PriceAllCountry;
        $ReturnStore_PcsAllTotal =  $ReturnStore_PcsAllDC1 + $ReturnStore_PcsAllDCP + $ReturnStore_PcsAllDCY + $ReturnStore_PcsAllCountry;
        $ReturnStore_PriceAllTotal =  $ReturnStore_PriceAllDC1 + $ReturnStore_PriceAllDCP + $ReturnStore_PriceAllDCY + $ReturnStore_PriceAllCountry;
        $AllOut_PcsAllTotal =  $AllOut_PcsAllDC1 + $AllOut_PcsAllDCP + $AllOut_PcsAllDCY + $AllOut_PcsAllCountry;
        $AllOut_PriceAllTotal =  $AllOut_PriceAllDC1 + $AllOut_PriceAllDCP + $AllOut_PriceAllDCY + $AllOut_PriceAllCountry;
        $Calculate_PcsAllTotal =  $Calculate_PcsAllDC1 + $Calculate_PcsAllDCP + $Calculate_PcsAllDCY + $Calculate_PcsAllCountry;
        $Calculate_PriceAllTotal =  $Calculate_PriceAllDC1 + $Calculate_PriceAllDCP + $Calculate_PriceAllDCY + $Calculate_PriceAllCountry;
        $NewCalculate_PcsAllTotal = $NewCalculate_PcsAllDC1 + $NewCalculate_PcsAllDCP + $NewCalculate_PcsAllDCY + $NewCalculate_PcsAllCountry;
        $NewCalculate_PriceAllTotal = $NewCalculate_PriceAllDC1 + $NewCalculate_PriceAllDCP + $NewCalculate_PriceAllDCY + $NewCalculate_PriceAllCountry;
        $Diff_PcsAllTotal = $Diff_PcsAllDC1 + $Diff_PcsAllDCP + $Diff_PcsAllDCY + $Diff_PcsAllCountry;
        $Diff_PriceAllTotal = $Diff_PriceAllDC1 + $Diff_PriceAllDCP + $Diff_PriceAllDCY + $Diff_PriceAllCountry;
        $NewTotal_PcsAllTotal = $NewTotal_PcsAllDC1 + $NewTotal_PcsAllDCP + $NewTotal_PcsAllDCY + $NewTotal_PcsAllCountry;
        $NewTotal_PriceAllTotal = $NewTotal_PriceAllDC1 + $NewTotal_PriceAllDCP + $NewTotal_PriceAllDCY + $NewTotal_PriceAllCountry;
        $NewTotalDiff_NavAllTotal = $NewTotalDiff_NavAllDC1 + $NewTotalDiff_NavAllDCP + $NewTotalDiff_NavAllDCY + $NewTotalDiff_NavAllCountry;
        $NewTotalDiff_CalAllTotal = $NewTotalDiff_CalAllDC1 + $NewTotalDiff_CalAllDCP + $NewTotalDiff_CalAllDCY + $NewTotalDiff_CalAllCountry;
        $a7f1fgbu02s_PcsAllTotal = $a7f1fgbu02s_PcsAllDC1 + $a7f1fgbu02s_PcsAllDCP + $a7f1fgbu02s_PcsAllDCY + $a7f1fgbu02s_PcsAllCountry;
        $a7f1fgbu02s_PriceAllTotal = $a7f1fgbu02s_PriceAllDC1 + $a7f1fgbu02s_PriceAllDCP + $a7f1fgbu02s_PriceAllDCY + $a7f1fgbu02s_PriceAllCountry;
        $a7f2fgbu10s_PcsAllTotal = $a7f2fgbu10s_PcsAllDC1 + $a7f2fgbu10s_PcsAllDCP + $a7f2fgbu10s_PcsAllDCY + $a7f2fgbu10s_PcsAllCountry;
        $a7f2fgbu10s_PriceAllTotal = $a7f2fgbu10s_PriceAllDC1 + $a7f2fgbu10s_PriceAllDCP + $a7f2fgbu10s_PriceAllDCY + $a7f2fgbu10s_PriceAllCountry;
        $a7f2thbu05s_PcsAllTotal = $a7f2thbu05s_PcsAllDC1 + $a7f2thbu05s_PcsAllDCP + $a7f2thbu05s_PcsAllDCY + $a7f2thbu05s_PcsAllCountry;
        $a7f2thbu05s_PriceAllTotal = $a7f2thbu05s_PriceAllDC1 + $a7f2thbu05s_PriceAllDCP + $a7f2thbu05s_PriceAllDCY + $a7f2thbu05s_PriceAllCountry;
        $a7f2debu10s_PcsAllTotal = $a7f2debu10s_PcsAllDC1 + $a7f2debu10s_PcsAllDCP + $a7f2debu10s_PcsAllDCY + $a7f2debu10s_PcsAllCountry;
        $a7f2debu10s_PriceAllTotal = $a7f2debu10s_PriceAllDC1 + $a7f2debu10s_PriceAllDCP + $a7f2debu10s_PriceAllDCY + $a7f2debu10s_PriceAllCountry;
        $a7f2exbu11s_PcsAllTotal = $a7f2exbu11s_PcsAllDC1 + $a7f2exbu11s_PcsAllDCP + $a7f2exbu11s_PcsAllDCY + $a7f2exbu11s_PcsAllCountry;
        $a7f2exbu11s_PriceAllTotal = $a7f2exbu11s_PriceAllDC1 + $a7f2exbu11s_PriceAllDCP + $a7f2exbu11s_PriceAllDCY + $a7f2exbu11s_PriceAllCountry;
        $a7f2twbu04s_PcsAllTotal = $a7f2twbu04s_PcsAllDC1 + $a7f2twbu04s_PcsAllDCP + $a7f2twbu04s_PcsAllDCY + $a7f2twbu04s_PcsAllCountry;
        $a7f2twbu04s_PriceAllTotal = $a7f2twbu04s_PriceAllDC1 + $a7f2twbu04s_PriceAllDCP + $a7f2twbu04s_PriceAllDCY + $a7f2twbu04s_PriceAllCountry;
        $a7f2twbu07s_PcsAllTotal = $a7f2twbu07s_PcsAllDC1 + $a7f2twbu07s_PcsAllDCP + $a7f2twbu07s_PcsAllDCY + $a7f2twbu07s_PcsAllCountry;
        $a7f2twbu07s_PriceAllTotal = $a7f2twbu07s_PriceAllDC1 + $a7f2twbu07s_PriceAllDCP + $a7f2twbu07s_PriceAllDCY + $a7f2twbu07s_PriceAllCountry;
        $a7f2cebu10s_PcsAllTotal = $a7f2cebu10s_PcsAllDC1 + $a7f2cebu10s_PcsAllDCP + $a7f2cebu10s_PcsAllDCY + $a7f2cebu10s_PcsAllCountry;
        $a7f2cebu10s_PriceAllTotal = $a7f2cebu10s_PriceAllDC1 + $a7f2cebu10s_PriceAllDCP + $a7f2cebu10s_PriceAllDCY + $a7f2cebu10s_PriceAllCountry;
        $a8f1fgbu02s_PcsAllTotal = $a8f1fgbu02s_PcsAllDC1 + $a8f1fgbu02s_PcsAllDCP + $a8f1fgbu02s_PcsAllDCY + $a8f1fgbu02s_PcsAllCountry;
        $a8f1fgbu02s_PriceAllTotal = $a8f1fgbu02s_PriceAllDC1 + $a8f1fgbu02s_PriceAllDCP + $a8f1fgbu02s_PriceAllDCY + $a8f1fgbu02s_PriceAllCountry;
        $a8f2fgbu10s_PcsAllTotal = $a8f2fgbu10s_PcsAllDC1 + $a8f2fgbu10s_PcsAllDCP + $a8f2fgbu10s_PcsAllDCY + $a8f2fgbu10s_PcsAllCountry;
        $a8f2fgbu10s_PriceAllTotal = $a8f2fgbu10s_PriceAllDC1 + $a8f2fgbu10s_PriceAllDCP + $a8f2fgbu10s_PriceAllDCY + $a8f2fgbu10s_PriceAllCountry;
        $a8f2thbu05s_PcsAllTotal = $a8f2thbu05s_PcsAllDC1 + $a8f2thbu05s_PcsAllDCP + $a8f2thbu05s_PcsAllDCY + $a8f2thbu05s_PcsAllCountry;
        $a8f2thbu05s_PriceAllTotal = $a8f2thbu05s_PriceAllDC1 + $a8f2thbu05s_PriceAllDCP + $a8f2thbu05s_PriceAllDCY + $a8f2thbu05s_PriceAllCountry;
        $a8f2debu10s_PcsAllTotal = $a8f2debu10s_PcsAllDC1 + $a8f2debu10s_PcsAllDCP + $a8f2debu10s_PcsAllDCY + $a8f2debu10s_PcsAllCountry;
        $a8f2debu10s_PriceAllTotal = $a8f2debu10s_PriceAllDC1 + $a8f2debu10s_PriceAllDCP + $a8f2debu10s_PriceAllDCY + $a8f2debu10s_PriceAllCountry;
        $a8f2exbu11s_PcsAllTotal = $a8f2exbu11s_PcsAllDC1 + $a8f2exbu11s_PcsAllDCP + $a8f2exbu11s_PcsAllDCY + $a8f2exbu11s_PcsAllCountry;
        $a8f2exbu11s_PriceAllTotal = $a8f2exbu11s_PriceAllDC1 + $a8f2exbu11s_PriceAllDCP + $a8f2exbu11s_PriceAllDCY + $a8f2exbu11s_PriceAllCountry;
        $a8f2twbu04s_PcsAllTotal = $a8f2twbu04s_PcsAllDC1 + $a8f2twbu04s_PcsAllDCP + $a8f2twbu04s_PcsAllDCY + $a8f2twbu04s_PcsAllCountry;
        $a8f2twbu04s_PriceAllTotal = $a8f2twbu04s_PriceAllDC1 + $a8f2twbu04s_PriceAllDCP + $a8f2twbu04s_PriceAllDCY + $a8f2twbu04s_PriceAllCountry;
        $a8f2twbu07s_PcsAllTotal = $a8f2twbu07s_PcsAllDC1 + $a8f2twbu07s_PcsAllDCP + $a8f2twbu07s_PcsAllDCY + $a8f2twbu07s_PcsAllCountry;
        $a8f2twbu07s_PriceAllTotal = $a8f2twbu07s_PriceAllDC1 + $a8f2twbu07s_PriceAllDCP + $a8f2twbu07s_PriceAllDCY + $a8f2twbu07s_PriceAllCountry;
        $a8f2cebu10s_PcsAllTotal = $a8f2cebu10s_PcsAllDC1 + $a8f2cebu10s_PcsAllDCP + $a8f2cebu10s_PcsAllDCY + $a8f2cebu10s_PcsAllCountry;
        $a8f2cebu10s_PriceAllTotal = $a8f2cebu10s_PriceAllDC1 + $a8f2cebu10s_PriceAllDCP + $a8f2cebu10s_PriceAllDCY + $a8f2cebu10s_PriceAllCountry;
        $DC1_PcsAllTotal = $DC1_PcsAllDC1 + $DC1_PcsAllDCP + $DC1_PcsAllDCY + $DC1_PcsAllCountry;
        $DC1_PriceAllTotal = $DC1_PriceAllDC1 + $DC1_PriceAllDCP + $DC1_PriceAllDCY + $DC1_PriceAllCountry;
        $DCP_PcsAllTotal = $DCP_PcsAllDC1 + $DCP_PcsAllDCP + $DCP_PcsAllDCY + $DCP_PcsAllCountry;
        $DCP_PriceAllTotal = $DCP_PriceAllDC1 + $DCP_PriceAllDCP + $DCP_PriceAllDCY + $DCP_PriceAllCountry;
        $DCY_PcsAllTotal = $DCY_PcsAllDC1 + $DCY_PcsAllDCP + $DCY_PcsAllDCY + $DCY_PcsAllCountry;
        $DCY_PriceAllTotal = $DCY_PriceAllDC1 + $DCY_PriceAllDCP + $DCY_PriceAllDCY + $DCY_PriceAllCountry;
        $DEX_PcsAllTotal = $DEX_PcsAllDC1 + $DEX_PcsAllDCP + $DEX_PcsAllDCY + $DEX_PcsAllCountry;
        $DEX_PriceAllTotal = $DEX_PriceAllDC1 + $DEX_PriceAllDCP + $DEX_PriceAllDCY + $DEX_PriceAllCountry;

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

        $Pcs_AfterNTDCP = number_format($Pcs_AfterNTDCP, 0);
        $Price_AfterNTDCP = number_format($Price_AfterNTDCP, 0);
        $Po_PcsNTDCP = number_format($Po_PcsNTDCP, 0);
        $Po_PriceNTDCP = number_format($Po_PriceNTDCP, 0);
        $Neg_PcsNTDCP = number_format($Neg_PcsNTDCP, 0);
        $Neg_PriceNTDCP = number_format($Neg_PriceNTDCP, 0);
        $BackChange_PcsNTDCP = number_format($BackChange_PcsNTDCP, 0);
        $BackChange_PriceNTDCP = number_format($BackChange_PriceNTDCP, 0);
        $Purchase_PcsNTDCP = number_format($Purchase_PcsNTDCP, 0);
        $Purchase_PriceNTDCP = number_format($Purchase_PriceNTDCP, 0);
        $ReciveTranfer_PcsNTDCP = number_format($ReciveTranfer_PcsNTDCP, 0);
        $ReciveTranfer_PriceNTDCP = number_format($ReciveTranfer_PriceNTDCP, 0);
        $ReturnItem_PCSNTDCP = number_format($ReturnItem_PCSNTDCP, 0);
        $ReturnItem_PriceNTDCP = number_format($ReturnItem_PriceNTDCP, 0);
        $AllIn_PcsNTDCP = number_format($AllIn_PcsNTDCP, 0);
        $AllIn_PriceNTDCP = number_format($AllIn_PriceNTDCP, 0);
        $SendSale_PcsNTDCP = number_format($SendSale_PcsNTDCP, 0);
        $SendSale_PriceNTDCP = number_format($SendSale_PriceNTDCP, 0);
        $ReciveTranOut_PcsNTDCP = number_format($ReciveTranOut_PcsNTDCP, 0);
        $ReciveTranOut_PriceNTDCP = number_format($ReciveTranOut_PriceNTDCP, 0);
        $ReturnStore_PcsNTDCP = number_format($ReturnStore_PcsNTDCP, 0);
        $ReturnStore_PriceNTDCP = number_format($ReturnStore_PriceNTDCP, 0);
        $AllOut_PcsNTDCP = number_format($AllOut_PcsNTDCP, 0);
        $AllOut_PriceNTDCP = number_format($AllOut_PriceNTDCP, 0);
        $Calculate_PcsNTDCP = number_format($Calculate_PcsNTDCP, 0);
        $Calculate_PriceNTDCP = number_format($Calculate_PriceNTDCP, 0);
        $NewCalculate_PcsNTDCP = number_format($NewCalculate_PcsNTDCP, 0);
        $NewCalculate_PriceNTDCP = number_format($NewCalculate_PriceNTDCP, 0);
        $Diff_PcsNTDCP = number_format($Diff_PcsNTDCP, 0);
        $Diff_PriceNTDCP = number_format($Diff_PriceNTDCP, 0);
        $NewTotal_PcsNTDCP = number_format($NewTotal_PcsNTDCP, 0);
        $NewTotal_PriceNTDCP = number_format($NewTotal_PriceNTDCP, 0);
        $NewTotalDiff_NavNTDCP = number_format($NewTotalDiff_NavNTDCP, 0);
        $NewTotalDiff_CalNTDCP = number_format($NewTotalDiff_CalNTDCP, 0);
        $a7f1fgbu02s_PcsNTDCP = number_format($a7f1fgbu02s_PcsNTDCP, 0);
        $a7f1fgbu02s_PriceNTDCP = number_format($a7f1fgbu02s_PriceNTDCP, 0);
        $a7f2fgbu10s_PcsNTDCP = number_format($a7f2fgbu10s_PcsNTDCP, 0);
        $a7f2fgbu10s_PriceNTDCP = number_format($a7f2fgbu10s_PriceNTDCP, 0);
        $a7f2thbu05s_PcsNTDCP = number_format($a7f2thbu05s_PcsNTDCP, 0);
        $a7f2thbu05s_PriceNTDCP = number_format($a7f2thbu05s_PriceNTDCP, 0);
        $a7f2debu10s_PcsNTDCP = number_format($a7f2debu10s_PcsNTDCP, 0);
        $a7f2debu10s_PriceNTDCP = number_format($a7f2debu10s_PriceNTDCP, 0);
        $a7f2exbu11s_PcsNTDCP = number_format($a7f2exbu11s_PcsNTDCP, 0);
        $a7f2exbu11s_PriceNTDCP = number_format($a7f2exbu11s_PriceNTDCP, 0);
        $a7f2twbu04s_PcsNTDCP = number_format($a7f2twbu04s_PcsNTDCP, 0);
        $a7f2twbu04s_PriceNTDCP = number_format($a7f2twbu04s_PriceNTDCP, 0);
        $a7f2twbu07s_PcsNTDCP = number_format($a7f2twbu07s_PcsNTDCP, 0);
        $a7f2twbu07s_PriceNTDCP = number_format($a7f2twbu07s_PriceNTDCP, 0);
        $a7f2cebu10s_PcsNTDCP = number_format($a7f2cebu10s_PcsNTDCP, 0);
        $a7f2cebu10s_PriceNTDCP = number_format($a7f2cebu10s_PriceNTDCP, 0);
        $a8f1fgbu02s_PcsNTDCP = number_format($a8f1fgbu02s_PcsNTDCP, 0);
        $a8f1fgbu02s_PriceNTDCP = number_format($a8f1fgbu02s_PriceNTDCP, 0);
        $a8f2fgbu10s_PcsNTDCP = number_format($a8f2fgbu10s_PcsNTDCP, 0);
        $a8f2fgbu10s_PriceNTDCP = number_format($a8f2fgbu10s_PriceNTDCP, 0);
        $a8f2thbu05s_PcsNTDCP = number_format($a8f2thbu05s_PcsNTDCP, 0);
        $a8f2thbu05s_PriceNTDCP = number_format($a8f2thbu05s_PriceNTDCP, 0);
        $a8f2debu10s_PcsNTDCP = number_format($a8f2debu10s_PcsNTDCP, 0);
        $a8f2debu10s_PriceNTDCP = number_format($a8f2debu10s_PriceNTDCP, 0);
        $a8f2exbu11s_PcsNTDCP = number_format($a8f2exbu11s_PcsNTDCP, 0);
        $a8f2exbu11s_PriceNTDCP = number_format($a8f2exbu11s_PriceNTDCP, 0);
        $a8f2twbu04s_PcsNTDCP = number_format($a8f2twbu04s_PcsNTDCP, 0);
        $a8f2twbu04s_PriceNTDCP = number_format($a8f2twbu04s_PriceNTDCP, 0);
        $a8f2twbu07s_PcsNTDCP = number_format($a8f2twbu07s_PcsNTDCP, 0);
        $a8f2twbu07s_PriceNTDCP = number_format($a8f2twbu07s_PriceNTDCP, 0);
        $a8f2cebu10s_PcsNTDCP = number_format($a8f2cebu10s_PcsNTDCP, 0);
        $a8f2cebu10s_PriceNTDCP = number_format($a8f2cebu10s_PriceNTDCP, 0);
        $DC1_PcsNTDCP = number_format($DC1_PcsNTDCP, 0);
        $DC1_PriceNTDCP = number_format($DC1_PriceNTDCP, 0);
        $DCP_PcsNTDCP = number_format($DCP_PcsNTDCP, 0);
        $DCP_PriceNTDCP = number_format($DCP_PriceNTDCP, 0);
        $DCY_PcsNTDCP = number_format($DCY_PcsNTDCP, 0);
        $DCY_PriceNTDCP = number_format($DCY_PriceNTDCP, 0);
        $DEX_PcsNTDCP = number_format($DEX_PcsNTDCP, 0);
        $DEX_PriceNTDCP = number_format($DEX_PriceNTDCP, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTWDCP = number_format($Pcs_AfterTWDCP, 0);
        $Price_AfterTWDCP = number_format($Price_AfterTWDCP, 0);
        $Po_PcsTWDCP = number_format($Po_PcsTWDCP, 0);
        $Po_PriceTWDCP = number_format($Po_PriceTWDCP, 0);
        $Neg_PcsTWDCP = number_format($Neg_PcsTWDCP, 0);
        $Neg_PriceTWDCP = number_format($Neg_PriceTWDCP, 0);
        $BackChange_PcsTWDCP = number_format($BackChange_PcsTWDCP, 0);
        $BackChange_PriceTWDCP = number_format($BackChange_PriceTWDCP, 0);
        $Purchase_PcsTWDCP = number_format($Purchase_PcsTWDCP, 0);
        $Purchase_PriceTWDCP = number_format($Purchase_PriceTWDCP, 0);
        $ReciveTranfer_PcsTWDCP = number_format($ReciveTranfer_PcsTWDCP, 0);
        $ReciveTranfer_PriceTWDCP = number_format($ReciveTranfer_PriceTWDCP, 0);
        $ReturnItem_PCSTWDCP = number_format($ReturnItem_PCSTWDCP, 0);
        $ReturnItem_PriceTWDCP = number_format($ReturnItem_PriceTWDCP, 0);
        $AllIn_PcsTWDCP = number_format($AllIn_PcsTWDCP, 0);
        $AllIn_PriceTWDCP = number_format($AllIn_PriceTWDCP, 0);
        $SendSale_PcsTWDCP = number_format($SendSale_PcsTWDCP, 0);
        $SendSale_PriceTWDCP = number_format($SendSale_PriceTWDCP, 0);
        $ReciveTranOut_PcsTWDCP = number_format($ReciveTranOut_PcsTWDCP, 0);
        $ReciveTranOut_PriceTWDCP = number_format($ReciveTranOut_PriceTWDCP, 0);
        $ReturnStore_PcsTWDCP = number_format($ReturnStore_PcsTWDCP, 0);
        $ReturnStore_PriceTWDCP = number_format($ReturnStore_PriceTWDCP, 0);
        $AllOut_PcsTWDCP = number_format($AllOut_PcsTWDCP, 0);
        $AllOut_PriceTWDCP = number_format($AllOut_PriceTWDCP, 0);
        $Calculate_PcsTWDCP = number_format($Calculate_PcsTWDCP, 0);
        $Calculate_PriceTWDCP = number_format($Calculate_PriceTWDCP, 0);
        $NewCalculate_PcsTWDCP = number_format($NewCalculate_PcsTWDCP, 0);
        $NewCalculate_PriceTWDCP = number_format($NewCalculate_PriceTWDCP, 0);
        $Diff_PcsTWDCP = number_format($Diff_PcsTWDCP, 0);
        $Diff_PriceTWDCP = number_format($Diff_PriceTWDCP, 0);
        $NewTotal_PcsTWDCP = number_format($NewTotal_PcsTWDCP, 0);
        $NewTotal_PriceTWDCP = number_format($NewTotal_PriceTWDCP, 0);
        $NewTotalDiff_NavTWDCP = number_format($NewTotalDiff_NavTWDCP, 0);
        $NewTotalDiff_CalTWDCP = number_format($NewTotalDiff_CalTWDCP, 0);
        $a7f1fgbu02s_PcsTWDCP = number_format($a7f1fgbu02s_PcsTWDCP, 0);
        $a7f1fgbu02s_PriceTWDCP = number_format($a7f1fgbu02s_PriceTWDCP, 0);
        $a7f2fgbu10s_PcsTWDCP = number_format($a7f2fgbu10s_PcsTWDCP, 0);
        $a7f2fgbu10s_PriceTWDCP = number_format($a7f2fgbu10s_PriceTWDCP, 0);
        $a7f2thbu05s_PcsTWDCP = number_format($a7f2thbu05s_PcsTWDCP, 0);
        $a7f2thbu05s_PriceTWDCP = number_format($a7f2thbu05s_PriceTWDCP, 0);
        $a7f2debu10s_PcsTWDCP = number_format($a7f2debu10s_PcsTWDCP, 0);
        $a7f2debu10s_PriceTWDCP = number_format($a7f2debu10s_PriceTWDCP, 0);
        $a7f2exbu11s_PcsTWDCP = number_format($a7f2exbu11s_PcsTWDCP, 0);
        $a7f2exbu11s_PriceTWDCP = number_format($a7f2exbu11s_PriceTWDCP, 0);
        $a7f2twbu04s_PcsTWDCP = number_format($a7f2twbu04s_PcsTWDCP, 0);
        $a7f2twbu04s_PriceTWDCP = number_format($a7f2twbu04s_PriceTWDCP, 0);
        $a7f2twbu07s_PcsTWDCP = number_format($a7f2twbu07s_PcsTWDCP, 0);
        $a7f2twbu07s_PriceTWDCP = number_format($a7f2twbu07s_PriceTWDCP, 0);
        $a7f2cebu10s_PcsTWDCP = number_format($a7f2cebu10s_PcsTWDCP, 0);
        $a7f2cebu10s_PriceTWDCP = number_format($a7f2cebu10s_PriceTWDCP, 0);
        $a8f1fgbu02s_PcsTWDCP = number_format($a8f1fgbu02s_PcsTWDCP, 0);
        $a8f1fgbu02s_PriceTWDCP = number_format($a8f1fgbu02s_PriceTWDCP, 0);
        $a8f2fgbu10s_PcsTWDCP = number_format($a8f2fgbu10s_PcsTWDCP, 0);
        $a8f2fgbu10s_PriceTWDCP = number_format($a8f2fgbu10s_PriceTWDCP, 0);
        $a8f2thbu05s_PcsTWDCP = number_format($a8f2thbu05s_PcsTWDCP, 0);
        $a8f2thbu05s_PriceTWDCP = number_format($a8f2thbu05s_PriceTWDCP, 0);
        $a8f2debu10s_PcsTWDCP = number_format($a8f2debu10s_PcsTWDCP, 0);
        $a8f2debu10s_PriceTWDCP = number_format($a8f2debu10s_PriceTWDCP, 0);
        $a8f2exbu11s_PcsTWDCP = number_format($a8f2exbu11s_PcsTWDCP, 0);
        $a8f2exbu11s_PriceTWDCP = number_format($a8f2exbu11s_PriceTWDCP, 0);
        $a8f2twbu04s_PcsTWDCP = number_format($a8f2twbu04s_PcsTWDCP, 0);
        $a8f2twbu04s_PriceTWDCP = number_format($a8f2twbu04s_PriceTWDCP, 0);
        $a8f2twbu07s_PcsTWDCP = number_format($a8f2twbu07s_PcsTWDCP, 0);
        $a8f2twbu07s_PriceTWDCP = number_format($a8f2twbu07s_PriceTWDCP, 0);
        $a8f2cebu10s_PcsTWDCP = number_format($a8f2cebu10s_PcsTWDCP, 0);
        $a8f2cebu10s_PriceTWDCP = number_format($a8f2cebu10s_PriceTWDCP, 0);
        $DC1_PcsTWDCP = number_format($DC1_PcsTWDCP, 0);
        $DC1_PriceTWDCP = number_format($DC1_PriceTWDCP, 0);
        $DCP_PcsTWDCP = number_format($DCP_PcsTWDCP, 0);
        $DCP_PriceTWDCP = number_format($DCP_PriceTWDCP, 0);
        $DCY_PcsTWDCP = number_format($DCY_PcsTWDCP, 0);
        $DCY_PriceTWDCP = number_format($DCY_PriceTWDCP, 0);
        $DEX_PcsTWDCP = number_format($DEX_PcsTWDCP, 0);
        $DEX_PriceTWDCP = number_format($DEX_PriceTWDCP, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterLNDCP = number_format($Pcs_AfterLNDCP, 0);
        $Price_AfterLNDCP = number_format($Price_AfterLNDCP, 0);
        $Po_PcsLNDCP = number_format($Po_PcsLNDCP, 0);
        $Po_PriceLNDCP = number_format($Po_PriceLNDCP, 0);
        $Neg_PcsLNDCP = number_format($Neg_PcsLNDCP, 0);
        $Neg_PriceLNDCP = number_format($Neg_PriceLNDCP, 0);
        $BackChange_PcsLNDCP = number_format($BackChange_PcsLNDCP, 0);
        $BackChange_PriceLNDCP = number_format($BackChange_PriceLNDCP, 0);
        $Purchase_PcsLNDCP = number_format($Purchase_PcsLNDCP, 0);
        $Purchase_PriceLNDCP = number_format($Purchase_PriceLNDCP, 0);
        $ReciveTranfer_PcsLNDCP = number_format($ReciveTranfer_PcsLNDCP, 0);
        $ReciveTranfer_PriceLNDCP = number_format($ReciveTranfer_PriceLNDCP, 0);
        $ReturnItem_PCSLNDCP = number_format($ReturnItem_PCSLNDCP, 0);
        $ReturnItem_PriceLNDCP = number_format($ReturnItem_PriceLNDCP, 0);
        $AllIn_PcsLNDCP = number_format($AllIn_PcsLNDCP, 0);
        $AllIn_PriceLNDCP = number_format($AllIn_PriceLNDCP, 0);
        $SendSale_PcsLNDCP = number_format($SendSale_PcsLNDCP, 0);
        $SendSale_PriceLNDCP = number_format($SendSale_PriceLNDCP, 0);
        $ReciveTranOut_PcsLNDCP = number_format($ReciveTranOut_PcsLNDCP, 0);
        $ReciveTranOut_PriceLNDCP = number_format($ReciveTranOut_PriceLNDCP, 0);
        $ReturnStore_PcsLNDCP = number_format($ReturnStore_PcsLNDCP, 0);
        $ReturnStore_PriceLNDCP = number_format($ReturnStore_PriceLNDCP, 0);
        $AllOut_PcsLNDCP = number_format($AllOut_PcsLNDCP, 0);
        $AllOut_PriceLNDCP = number_format($AllOut_PriceLNDCP, 0);
        $Calculate_PcsLNDCP = number_format($Calculate_PcsLNDCP, 0);
        $Calculate_PriceLNDCP = number_format($Calculate_PriceLNDCP, 0);
        $NewCalculate_PcsLNDCP = number_format($NewCalculate_PcsLNDCP, 0);
        $NewCalculate_PriceLNDCP = number_format($NewCalculate_PriceLNDCP, 0);
        $Diff_PcsLNDCP = number_format($Diff_PcsLNDCP, 0);
        $Diff_PriceLNDCP = number_format($Diff_PriceLNDCP, 0);
        $NewTotal_PcsLNDCP = number_format($NewTotal_PcsLNDCP, 0);
        $NewTotal_PriceLNDCP = number_format($NewTotal_PriceLNDCP, 0);
        $NewTotalDiff_NavLNDCP = number_format($NewTotalDiff_NavLNDCP, 0);
        $NewTotalDiff_CalLNDCP = number_format($NewTotalDiff_CalLNDCP, 0);
        $a7f1fgbu02s_PcsLNDCP = number_format($a7f1fgbu02s_PcsLNDCP, 0);
        $a7f1fgbu02s_PriceLNDCP = number_format($a7f1fgbu02s_PriceLNDCP, 0);
        $a7f2fgbu10s_PcsLNDCP = number_format($a7f2fgbu10s_PcsLNDCP, 0);
        $a7f2fgbu10s_PriceLNDCP = number_format($a7f2fgbu10s_PriceLNDCP, 0);
        $a7f2thbu05s_PcsLNDCP = number_format($a7f2thbu05s_PcsLNDCP, 0);
        $a7f2thbu05s_PriceLNDCP = number_format($a7f2thbu05s_PriceLNDCP, 0);
        $a7f2debu10s_PcsLNDCP = number_format($a7f2debu10s_PcsLNDCP, 0);
        $a7f2debu10s_PriceLNDCP = number_format($a7f2debu10s_PriceLNDCP, 0);
        $a7f2exbu11s_PcsLNDCP = number_format($a7f2exbu11s_PcsLNDCP, 0);
        $a7f2exbu11s_PriceLNDCP = number_format($a7f2exbu11s_PriceLNDCP, 0);
        $a7f2twbu04s_PcsLNDCP = number_format($a7f2twbu04s_PcsLNDCP, 0);
        $a7f2twbu04s_PriceLNDCP = number_format($a7f2twbu04s_PriceLNDCP, 0);
        $a7f2twbu07s_PcsLNDCP = number_format($a7f2twbu07s_PcsLNDCP, 0);
        $a7f2twbu07s_PriceLNDCP = number_format($a7f2twbu07s_PriceLNDCP, 0);
        $a7f2cebu10s_PcsLNDCP = number_format($a7f2cebu10s_PcsLNDCP, 0);
        $a7f2cebu10s_PriceLNDCP = number_format($a7f2cebu10s_PriceLNDCP, 0);
        $a8f1fgbu02s_PcsLNDCP = number_format($a8f1fgbu02s_PcsLNDCP, 0);
        $a8f1fgbu02s_PriceLNDCP = number_format($a8f1fgbu02s_PriceLNDCP, 0);
        $a8f2fgbu10s_PcsLNDCP = number_format($a8f2fgbu10s_PcsLNDCP, 0);
        $a8f2fgbu10s_PriceLNDCP = number_format($a8f2fgbu10s_PriceLNDCP, 0);
        $a8f2thbu05s_PcsLNDCP = number_format($a8f2thbu05s_PcsLNDCP, 0);
        $a8f2thbu05s_PriceLNDCP = number_format($a8f2thbu05s_PriceLNDCP, 0);
        $a8f2debu10s_PcsLNDCP = number_format($a8f2debu10s_PcsLNDCP, 0);
        $a8f2debu10s_PriceLNDCP = number_format($a8f2debu10s_PriceLNDCP, 0);
        $a8f2exbu11s_PcsLNDCP = number_format($a8f2exbu11s_PcsLNDCP, 0);
        $a8f2exbu11s_PriceLNDCP = number_format($a8f2exbu11s_PriceLNDCP, 0);
        $a8f2twbu04s_PcsLNDCP = number_format($a8f2twbu04s_PcsLNDCP, 0);
        $a8f2twbu04s_PriceLNDCP = number_format($a8f2twbu04s_PriceLNDCP, 0);
        $a8f2twbu07s_PcsLNDCP = number_format($a8f2twbu07s_PcsLNDCP, 0);
        $a8f2twbu07s_PriceLNDCP = number_format($a8f2twbu07s_PriceLNDCP, 0);
        $a8f2cebu10s_PcsLNDCP = number_format($a8f2cebu10s_PcsLNDCP, 0);
        $a8f2cebu10s_PriceLNDCP = number_format($a8f2cebu10s_PriceLNDCP, 0);
        $DC1_PcsLNDCP = number_format($DC1_PcsLNDCP, 0);
        $DC1_PriceLNDCP = number_format($DC1_PriceLNDCP, 0);
        $DCP_PcsLNDCP = number_format($DCP_PcsLNDCP, 0);
        $DCP_PriceLNDCP = number_format($DCP_PriceLNDCP, 0);
        $DCY_PcsLNDCP = number_format($DCY_PcsLNDCP, 0);
        $DCY_PriceLNDCP = number_format($DCY_PriceLNDCP, 0);
        $DEX_PcsLNDCP = number_format($DEX_PcsLNDCP, 0);
        $DEX_PriceLNDCP = number_format($DEX_PriceLNDCP, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllDCP = number_format($Pcs_AfterAllDCP, 0);
        $Price_AfterAllDCP = number_format($Price_AfterAllDCP, 0);
        $Po_PcsAllDCP = number_format($Po_PcsAllDCP, 0);
        $Po_PriceAllDCP = number_format($Po_PriceAllDCP, 0);
        $Neg_PcsAllDCP = number_format($Neg_PcsAllDCP, 0);
        $Neg_PriceAllDCP = number_format($Neg_PriceAllDCP, 0);
        $BackChange_PcsAllDCP = number_format($BackChange_PcsAllDCP, 0);
        $BackChange_PriceAllDCP = number_format($BackChange_PriceAllDCP, 0);
        $Purchase_PcsAllDCP = number_format($Purchase_PcsAllDCP, 0);
        $Purchase_PriceAllDCP = number_format($Purchase_PriceAllDCP, 0);
        $ReciveTranfer_PcsAllDCP = number_format($ReciveTranfer_PcsAllDCP, 0);
        $ReciveTranfer_PriceAllDCP = number_format($ReciveTranfer_PriceAllDCP, 0);
        $ReturnItem_PCSAllDCP = number_format($ReturnItem_PCSAllDCP, 0);
        $ReturnItem_PriceAllDCP = number_format($ReturnItem_PriceAllDCP, 0);
        $AllIn_PcsAllDCP = number_format($AllIn_PcsAllDCP, 0);
        $AllIn_PriceAllDCP = number_format($AllIn_PriceAllDCP, 0);
        $SendSale_PcsAllDCP = number_format($SendSale_PcsAllDCP, 0);
        $SendSale_PriceAllDCP = number_format($SendSale_PriceAllDCP, 0);
        $ReciveTranOut_PcsAllDCP = number_format($ReciveTranOut_PcsAllDCP, 0);
        $ReciveTranOut_PriceAllDCP = number_format($ReciveTranOut_PriceAllDCP, 0);
        $ReturnStore_PcsAllDCP = number_format($ReturnStore_PcsAllDCP, 0);
        $ReturnStore_PriceAllDCP = number_format($ReturnStore_PriceAllDCP, 0);
        $AllOut_PcsAllDCP = number_format($AllOut_PcsAllDCP, 0);
        $AllOut_PriceAllDCP = number_format($AllOut_PriceAllDCP, 0);
        $Calculate_PcsAllDCP = number_format($Calculate_PcsAllDCP, 0);
        $Calculate_PriceAllDCP = number_format($Calculate_PriceAllDCP, 0);
        $NewCalculate_PcsAllDCP = number_format($NewCalculate_PcsAllDCP, 0);
        $NewCalculate_PriceAllDCP = number_format($NewCalculate_PriceAllDCP, 0);
        $Diff_PcsAllDCP = number_format($Diff_PcsAllDCP, 0);
        $Diff_PriceAllDCP = number_format($Diff_PriceAllDCP, 0);
        $NewTotal_PcsAllDCP = number_format($NewTotal_PcsAllDCP, 0);
        $NewTotal_PriceAllDCP = number_format($NewTotal_PriceAllDCP, 0);
        $NewTotalDiff_NavAllDCP = number_format($NewTotalDiff_NavAllDCP, 0);
        $NewTotalDiff_CalAllDCP = number_format($NewTotalDiff_CalAllDCP, 0);
        $a7f1fgbu02s_PcsAllDCP = number_format($a7f1fgbu02s_PcsAllDCP, 0);
        $a7f1fgbu02s_PriceAllDCP = number_format($a7f1fgbu02s_PriceAllDCP, 0);
        $a7f2fgbu10s_PcsAllDCP = number_format($a7f2fgbu10s_PcsAllDCP, 0);
        $a7f2fgbu10s_PriceAllDCP = number_format($a7f2fgbu10s_PriceAllDCP, 0);
        $a7f2thbu05s_PcsAllDCP = number_format($a7f2thbu05s_PcsAllDCP, 0);
        $a7f2thbu05s_PriceAllDCP = number_format($a7f2thbu05s_PriceAllDCP, 0);
        $a7f2debu10s_PcsAllDCP = number_format($a7f2debu10s_PcsAllDCP, 0);
        $a7f2debu10s_PriceAllDCP = number_format($a7f2debu10s_PriceAllDCP, 0);
        $a7f2exbu11s_PcsAllDCP = number_format($a7f2exbu11s_PcsAllDCP, 0);
        $a7f2exbu11s_PriceAllDCP = number_format($a7f2exbu11s_PriceAllDCP, 0);
        $a7f2twbu04s_PcsAllDCP = number_format($a7f2twbu04s_PcsAllDCP, 0);
        $a7f2twbu04s_PriceAllDCP = number_format($a7f2twbu04s_PriceAllDCP, 0);
        $a7f2twbu07s_PcsAllDCP = number_format($a7f2twbu07s_PcsAllDCP, 0);
        $a7f2twbu07s_PriceAllDCP = number_format($a7f2twbu07s_PriceAllDCP, 0);
        $a7f2cebu10s_PcsAllDCP = number_format($a7f2cebu10s_PcsAllDCP, 0);
        $a7f2cebu10s_PriceAllDCP = number_format($a7f2cebu10s_PriceAllDCP, 0);
        $a8f1fgbu02s_PcsAllDCP = number_format($a8f1fgbu02s_PcsAllDCP, 0);
        $a8f1fgbu02s_PriceAllDCP = number_format($a8f1fgbu02s_PriceAllDCP, 0);
        $a8f2fgbu10s_PcsAllDCP = number_format($a8f2fgbu10s_PcsAllDCP, 0);
        $a8f2fgbu10s_PriceAllDCP = number_format($a8f2fgbu10s_PriceAllDCP, 0);
        $a8f2thbu05s_PcsAllDCP = number_format($a8f2thbu05s_PcsAllDCP, 0);
        $a8f2thbu05s_PriceAllDCP = number_format($a8f2thbu05s_PriceAllDCP, 0);
        $a8f2debu10s_PcsAllDCP = number_format($a8f2debu10s_PcsAllDCP, 0);
        $a8f2debu10s_PriceAllDCP = number_format($a8f2debu10s_PriceAllDCP, 0);
        $a8f2exbu11s_PcsAllDCP = number_format($a8f2exbu11s_PcsAllDCP, 0);
        $a8f2exbu11s_PriceAllDCP = number_format($a8f2exbu11s_PriceAllDCP, 0);
        $a8f2twbu04s_PcsAllDCP = number_format($a8f2twbu04s_PcsAllDCP, 0);
        $a8f2twbu04s_PriceAllDCP = number_format($a8f2twbu04s_PriceAllDCP, 0);
        $a8f2twbu07s_PcsAllDCP = number_format($a8f2twbu07s_PcsAllDCP, 0);
        $a8f2twbu07s_PriceAllDCP = number_format($a8f2twbu07s_PriceAllDCP, 0);
        $a8f2cebu10s_PcsAllDCP = number_format($a8f2cebu10s_PcsAllDCP, 0);
        $a8f2cebu10s_PriceAllDCP = number_format($a8f2cebu10s_PriceAllDCP, 0);
        $DC1_PcsAllDCP = number_format($DC1_PcsAllDCP, 0);
        $DC1_PriceAllDCP = number_format($DC1_PriceAllDCP, 0);
        $DCP_PcsAllDCP = number_format($DCP_PcsAllDCP, 0);
        $DCP_PriceAllDCP = number_format($DCP_PriceAllDCP, 0);
        $DCY_PcsAllDCP = number_format($DCY_PcsAllDCP, 0);
        $DCY_PriceAllDCP = number_format($DCY_PriceAllDCP, 0);
        $DEX_PcsAllDCP = number_format($DEX_PcsAllDCP, 0);
        $DEX_PriceAllDCP = number_format($DEX_PriceAllDCP, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterNTCountry = number_format($Pcs_AfterNTCountry, 0);
        $Price_AfterNTCountry = number_format($Price_AfterNTCountry, 0);
        $Po_PcsNTCountry = number_format($Po_PcsNTCountry, 0);
        $Po_PriceNTCountry = number_format($Po_PriceNTCountry, 0);
        $Neg_PcsNTCountry = number_format($Neg_PcsNTCountry, 0);
        $Neg_PriceNTCountry = number_format($Neg_PriceNTCountry, 0);
        $BackChange_PcsNTCountry = number_format($BackChange_PcsNTCountry, 0);
        $BackChange_PriceNTCountry = number_format($BackChange_PriceNTCountry, 0);
        $Purchase_PcsNTCountry = number_format($Purchase_PcsNTCountry, 0);
        $Purchase_PriceNTCountry = number_format($Purchase_PriceNTCountry, 0);
        $ReciveTranfer_PcsNTCountry = number_format($ReciveTranfer_PcsNTCountry, 0);
        $ReciveTranfer_PriceNTCountry = number_format($ReciveTranfer_PriceNTCountry, 0);
        $ReturnItem_PCSNTCountry = number_format($ReturnItem_PCSNTCountry, 0);
        $ReturnItem_PriceNTCountry = number_format($ReturnItem_PriceNTCountry, 0);
        $AllIn_PcsNTCountry = number_format($AllIn_PcsNTCountry, 0);
        $AllIn_PriceNTCountry = number_format($AllIn_PriceNTCountry, 0);
        $SendSale_PcsNTCountry = number_format($SendSale_PcsNTCountry, 0);
        $SendSale_PriceNTCountry = number_format($SendSale_PriceNTCountry, 0);
        $ReciveTranOut_PcsNTCountry = number_format($ReciveTranOut_PcsNTCountry, 0);
        $ReciveTranOut_PriceNTCountry = number_format($ReciveTranOut_PriceNTCountry, 0);
        $ReturnStore_PcsNTCountry = number_format($ReturnStore_PcsNTCountry, 0);
        $ReturnStore_PriceNTCountry = number_format($ReturnStore_PriceNTCountry, 0);
        $AllOut_PcsNTCountry = number_format($AllOut_PcsNTCountry, 0);
        $AllOut_PriceNTCountry = number_format($AllOut_PriceNTCountry, 0);
        $Calculate_PcsNTCountry = number_format($Calculate_PcsNTCountry, 0);
        $Calculate_PriceNTCountry = number_format($Calculate_PriceNTCountry, 0);
        $NewCalculate_PcsNTCountry = number_format($NewCalculate_PcsNTCountry, 0);
        $NewCalculate_PriceNTCountry = number_format($NewCalculate_PriceNTCountry, 0);
        $Diff_PcsNTCountry = number_format($Diff_PcsNTCountry, 0);
        $Diff_PriceNTCountry = number_format($Diff_PriceNTCountry, 0);
        $NewTotal_PcsNTCountry = number_format($NewTotal_PcsNTCountry, 0);
        $NewTotal_PriceNTCountry = number_format($NewTotal_PriceNTCountry, 0);
        $NewTotalDiff_NavNTCountry = number_format($NewTotalDiff_NavNTCountry, 0);
        $NewTotalDiff_CalNTCountry = number_format($NewTotalDiff_CalNTCountry, 0);
        $a7f1fgbu02s_PcsNTCountry = number_format($a7f1fgbu02s_PcsNTCountry, 0);
        $a7f1fgbu02s_PriceNTCountry = number_format($a7f1fgbu02s_PriceNTCountry, 0);
        $a7f2fgbu10s_PcsNTCountry = number_format($a7f2fgbu10s_PcsNTCountry, 0);
        $a7f2fgbu10s_PriceNTCountry = number_format($a7f2fgbu10s_PriceNTCountry, 0);
        $a7f2thbu05s_PcsNTCountry = number_format($a7f2thbu05s_PcsNTCountry, 0);
        $a7f2thbu05s_PriceNTCountry = number_format($a7f2thbu05s_PriceNTCountry, 0);
        $a7f2debu10s_PcsNTCountry = number_format($a7f2debu10s_PcsNTCountry, 0);
        $a7f2debu10s_PriceNTCountry = number_format($a7f2debu10s_PriceNTCountry, 0);
        $a7f2exbu11s_PcsNTCountry = number_format($a7f2exbu11s_PcsNTCountry, 0);
        $a7f2exbu11s_PriceNTCountry = number_format($a7f2exbu11s_PriceNTCountry, 0);
        $a7f2twbu04s_PcsNTCountry = number_format($a7f2twbu04s_PcsNTCountry, 0);
        $a7f2twbu04s_PriceNTCountry = number_format($a7f2twbu04s_PriceNTCountry, 0);
        $a7f2twbu07s_PcsNTCountry = number_format($a7f2twbu07s_PcsNTCountry, 0);
        $a7f2twbu07s_PriceNTCountry = number_format($a7f2twbu07s_PriceNTCountry, 0);
        $a7f2cebu10s_PcsNTCountry = number_format($a7f2cebu10s_PcsNTCountry, 0);
        $a7f2cebu10s_PriceNTCountry = number_format($a7f2cebu10s_PriceNTCountry, 0);
        $a8f1fgbu02s_PcsNTCountry = number_format($a8f1fgbu02s_PcsNTCountry, 0);
        $a8f1fgbu02s_PriceNTCountry = number_format($a8f1fgbu02s_PriceNTCountry, 0);
        $a8f2fgbu10s_PcsNTCountry = number_format($a8f2fgbu10s_PcsNTCountry, 0);
        $a8f2fgbu10s_PriceNTCountry = number_format($a8f2fgbu10s_PriceNTCountry, 0);
        $a8f2thbu05s_PcsNTCountry = number_format($a8f2thbu05s_PcsNTCountry, 0);
        $a8f2thbu05s_PriceNTCountry = number_format($a8f2thbu05s_PriceNTCountry, 0);
        $a8f2debu10s_PcsNTCountry = number_format($a8f2debu10s_PcsNTCountry, 0);
        $a8f2debu10s_PriceNTCountry = number_format($a8f2debu10s_PriceNTCountry, 0);
        $a8f2exbu11s_PcsNTCountry = number_format($a8f2exbu11s_PcsNTCountry, 0);
        $a8f2exbu11s_PriceNTCountry = number_format($a8f2exbu11s_PriceNTCountry, 0);
        $a8f2twbu04s_PcsNTCountry = number_format($a8f2twbu04s_PcsNTCountry, 0);
        $a8f2twbu04s_PriceNTCountry = number_format($a8f2twbu04s_PriceNTCountry, 0);
        $a8f2twbu07s_PcsNTCountry = number_format($a8f2twbu07s_PcsNTCountry, 0);
        $a8f2twbu07s_PriceNTCountry = number_format($a8f2twbu07s_PriceNTCountry, 0);
        $a8f2cebu10s_PcsNTCountry = number_format($a8f2cebu10s_PcsNTCountry, 0);
        $a8f2cebu10s_PriceNTCountry = number_format($a8f2cebu10s_PriceNTCountry, 0);
        $DC1_PcsNTCountry = number_format($DC1_PcsNTCountry, 0);
        $DC1_PriceNTCountry = number_format($DC1_PriceNTCountry, 0);
        $DCP_PcsNTCountry = number_format($DCP_PcsNTCountry, 0);
        $DCP_PriceNTCountry = number_format($DCP_PriceNTCountry, 0);
        $DCY_PcsNTCountry = number_format($DCY_PcsNTCountry, 0);
        $DCY_PriceNTCountry = number_format($DCY_PriceNTCountry, 0);
        $DEX_PcsNTCountry = number_format($DEX_PcsNTCountry, 0);
        $DEX_PriceNTCountry = number_format($DEX_PriceNTCountry, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterMTCountry = number_format($Pcs_AfterMTCountry, 0);
        $Price_AfterMTCountry = number_format($Price_AfterMTCountry, 0);
        $Po_PcsMTCountry = number_format($Po_PcsMTCountry, 0);
        $Po_PriceMTCountry = number_format($Po_PriceMTCountry, 0);
        $Neg_PcsMTCountry = number_format($Neg_PcsMTCountry, 0);
        $Neg_PriceMTCountry = number_format($Neg_PriceMTCountry, 0);
        $BackChange_PcsMTCountry = number_format($BackChange_PcsMTCountry, 0);
        $BackChange_PriceMTCountry = number_format($BackChange_PriceMTCountry, 0);
        $Purchase_PcsMTCountry = number_format($Purchase_PcsMTCountry, 0);
        $Purchase_PriceMTCountry = number_format($Purchase_PriceMTCountry, 0);
        $ReciveTranfer_PcsMTCountry = number_format($ReciveTranfer_PcsMTCountry, 0);
        $ReciveTranfer_PriceMTCountry = number_format($ReciveTranfer_PriceMTCountry, 0);
        $ReturnItem_PCSMTCountry = number_format($ReturnItem_PCSMTCountry, 0);
        $ReturnItem_PriceMTCountry = number_format($ReturnItem_PriceMTCountry, 0);
        $AllIn_PcsMTCountry = number_format($AllIn_PcsMTCountry, 0);
        $AllIn_PriceMTCountry = number_format($AllIn_PriceMTCountry, 0);
        $SendSale_PcsMTCountry = number_format($SendSale_PcsMTCountry, 0);
        $SendSale_PriceMTCountry = number_format($SendSale_PriceMTCountry, 0);
        $ReciveTranOut_PcsMTCountry = number_format($ReciveTranOut_PcsMTCountry, 0);
        $ReciveTranOut_PriceMTCountry = number_format($ReciveTranOut_PriceMTCountry, 0);
        $ReturnStore_PcsMTCountry = number_format($ReturnStore_PcsMTCountry, 0);
        $ReturnStore_PriceMTCountry = number_format($ReturnStore_PriceMTCountry, 0);
        $AllOut_PcsMTCountry = number_format($AllOut_PcsMTCountry, 0);
        $AllOut_PriceMTCountry = number_format($AllOut_PriceMTCountry, 0);
        $Calculate_PcsMTCountry = number_format($Calculate_PcsMTCountry, 0);
        $Calculate_PriceMTCountry = number_format($Calculate_PriceMTCountry, 0);
        $NewCalculate_PcsMTCountry = number_format($NewCalculate_PcsMTCountry, 0);
        $NewCalculate_PriceMTCountry = number_format($NewCalculate_PriceMTCountry, 0);
        $Diff_PcsMTCountry = number_format($Diff_PcsMTCountry, 0);
        $Diff_PriceMTCountry = number_format($Diff_PriceMTCountry, 0);
        $NewTotal_PcsMTCountry = number_format($NewTotal_PcsMTCountry, 0);
        $NewTotal_PriceMTCountry = number_format($NewTotal_PriceMTCountry, 0);
        $NewTotalDiff_NavMTCountry = number_format($NewTotalDiff_NavMTCountry, 0);
        $NewTotalDiff_CalMTCountry = number_format($NewTotalDiff_CalMTCountry, 0);
        $a7f1fgbu02s_PcsMTCountry = number_format($a7f1fgbu02s_PcsMTCountry, 0);
        $a7f1fgbu02s_PriceMTCountry = number_format($a7f1fgbu02s_PriceMTCountry, 0);
        $a7f2fgbu10s_PcsMTCountry = number_format($a7f2fgbu10s_PcsMTCountry, 0);
        $a7f2fgbu10s_PriceMTCountry = number_format($a7f2fgbu10s_PriceMTCountry, 0);
        $a7f2thbu05s_PcsMTCountry = number_format($a7f2thbu05s_PcsMTCountry, 0);
        $a7f2thbu05s_PriceMTCountry = number_format($a7f2thbu05s_PriceMTCountry, 0);
        $a7f2debu10s_PcsMTCountry = number_format($a7f2debu10s_PcsMTCountry, 0);
        $a7f2debu10s_PriceMTCountry = number_format($a7f2debu10s_PriceMTCountry, 0);
        $a7f2exbu11s_PcsMTCountry = number_format($a7f2exbu11s_PcsMTCountry, 0);
        $a7f2exbu11s_PriceMTCountry = number_format($a7f2exbu11s_PriceMTCountry, 0);
        $a7f2twbu04s_PcsMTCountry = number_format($a7f2twbu04s_PcsMTCountry, 0);
        $a7f2twbu04s_PriceMTCountry = number_format($a7f2twbu04s_PriceMTCountry, 0);
        $a7f2twbu07s_PcsMTCountry = number_format($a7f2twbu07s_PcsMTCountry, 0);
        $a7f2twbu07s_PriceMTCountry = number_format($a7f2twbu07s_PriceMTCountry, 0);
        $a7f2cebu10s_PcsMTCountry = number_format($a7f2cebu10s_PcsMTCountry, 0);
        $a7f2cebu10s_PriceMTCountry = number_format($a7f2cebu10s_PriceMTCountry, 0);
        $a8f1fgbu02s_PcsMTCountry = number_format($a8f1fgbu02s_PcsMTCountry, 0);
        $a8f1fgbu02s_PriceMTCountry = number_format($a8f1fgbu02s_PriceMTCountry, 0);
        $a8f2fgbu10s_PcsMTCountry = number_format($a8f2fgbu10s_PcsMTCountry, 0);
        $a8f2fgbu10s_PriceMTCountry = number_format($a8f2fgbu10s_PriceMTCountry, 0);
        $a8f2thbu05s_PcsMTCountry = number_format($a8f2thbu05s_PcsMTCountry, 0);
        $a8f2thbu05s_PriceMTCountry = number_format($a8f2thbu05s_PriceMTCountry, 0);
        $a8f2debu10s_PcsMTCountry = number_format($a8f2debu10s_PcsMTCountry, 0);
        $a8f2debu10s_PriceMTCountry = number_format($a8f2debu10s_PriceMTCountry, 0);
        $a8f2exbu11s_PcsMTCountry = number_format($a8f2exbu11s_PcsMTCountry, 0);
        $a8f2exbu11s_PriceMTCountry = number_format($a8f2exbu11s_PriceMTCountry, 0);
        $a8f2twbu04s_PcsMTCountry = number_format($a8f2twbu04s_PcsMTCountry, 0);
        $a8f2twbu04s_PriceMTCountry = number_format($a8f2twbu04s_PriceMTCountry, 0);
        $a8f2twbu07s_PcsMTCountry = number_format($a8f2twbu07s_PcsMTCountry, 0);
        $a8f2twbu07s_PriceMTCountry = number_format($a8f2twbu07s_PriceMTCountry, 0);
        $a8f2cebu10s_PcsMTCountry = number_format($a8f2cebu10s_PcsMTCountry, 0);
        $a8f2cebu10s_PriceMTCountry = number_format($a8f2cebu10s_PriceMTCountry, 0);
        $DC1_PcsMTCountry = number_format($DC1_PcsMTCountry, 0);
        $DC1_PriceMTCountry = number_format($DC1_PriceMTCountry, 0);
        $DCP_PcsMTCountry = number_format($DCP_PcsMTCountry, 0);
        $DCP_PriceMTCountry = number_format($DCP_PriceMTCountry, 0);
        $DCY_PcsMTCountry = number_format($DCY_PcsMTCountry, 0);
        $DCY_PriceMTCountry = number_format($DCY_PriceMTCountry, 0);
        $DEX_PcsMTCountry = number_format($DEX_PcsMTCountry, 0);
        $DEX_PriceMTCountry = number_format($DEX_PriceMTCountry, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterTWCountry = number_format($Pcs_AfterTWCountry, 0);
        $Price_AfterTWCountry = number_format($Price_AfterTWCountry, 0);
        $Po_PcsTWCountry = number_format($Po_PcsTWCountry, 0);
        $Po_PriceTWCountry = number_format($Po_PriceTWCountry, 0);
        $Neg_PcsTWCountry = number_format($Neg_PcsTWCountry, 0);
        $Neg_PriceTWCountry = number_format($Neg_PriceTWCountry, 0);
        $BackChange_PcsTWCountry = number_format($BackChange_PcsTWCountry, 0);
        $BackChange_PriceTWCountry = number_format($BackChange_PriceTWCountry, 0);
        $Purchase_PcsTWCountry = number_format($Purchase_PcsTWCountry, 0);
        $Purchase_PriceTWCountry = number_format($Purchase_PriceTWCountry, 0);
        $ReciveTranfer_PcsTWCountry = number_format($ReciveTranfer_PcsTWCountry, 0);
        $ReciveTranfer_PriceTWCountry = number_format($ReciveTranfer_PriceTWCountry, 0);
        $ReturnItem_PCSTWCountry = number_format($ReturnItem_PCSTWCountry, 0);
        $ReturnItem_PriceTWCountry = number_format($ReturnItem_PriceTWCountry, 0);
        $AllIn_PcsTWCountry = number_format($AllIn_PcsTWCountry, 0);
        $AllIn_PriceTWCountry = number_format($AllIn_PriceTWCountry, 0);
        $SendSale_PcsTWCountry = number_format($SendSale_PcsTWCountry, 0);
        $SendSale_PriceTWCountry = number_format($SendSale_PriceTWCountry, 0);
        $ReciveTranOut_PcsTWCountry = number_format($ReciveTranOut_PcsTWCountry, 0);
        $ReciveTranOut_PriceTWCountry = number_format($ReciveTranOut_PriceTWCountry, 0);
        $ReturnStore_PcsTWCountry = number_format($ReturnStore_PcsTWCountry, 0);
        $ReturnStore_PriceTWCountry = number_format($ReturnStore_PriceTWCountry, 0);
        $AllOut_PcsTWCountry = number_format($AllOut_PcsTWCountry, 0);
        $AllOut_PriceTWCountry = number_format($AllOut_PriceTWCountry, 0);
        $Calculate_PcsTWCountry = number_format($Calculate_PcsTWCountry, 0);
        $Calculate_PriceTWCountry = number_format($Calculate_PriceTWCountry, 0);
        $NewCalculate_PcsTWCountry = number_format($NewCalculate_PcsTWCountry, 0);
        $NewCalculate_PriceTWCountry = number_format($NewCalculate_PriceTWCountry, 0);
        $Diff_PcsTWCountry = number_format($Diff_PcsTWCountry, 0);
        $Diff_PriceTWCountry = number_format($Diff_PriceTWCountry, 0);
        $NewTotal_PcsTWCountry = number_format($NewTotal_PcsTWCountry, 0);
        $NewTotal_PriceTWCountry = number_format($NewTotal_PriceTWCountry, 0);
        $NewTotalDiff_NavTWCountry = number_format($NewTotalDiff_NavTWCountry, 0);
        $NewTotalDiff_CalTWCountry = number_format($NewTotalDiff_CalTWCountry, 0);
        $a7f1fgbu02s_PcsTWCountry = number_format($a7f1fgbu02s_PcsTWCountry, 0);
        $a7f1fgbu02s_PriceTWCountry = number_format($a7f1fgbu02s_PriceTWCountry, 0);
        $a7f2fgbu10s_PcsTWCountry = number_format($a7f2fgbu10s_PcsTWCountry, 0);
        $a7f2fgbu10s_PriceTWCountry = number_format($a7f2fgbu10s_PriceTWCountry, 0);
        $a7f2thbu05s_PcsTWCountry = number_format($a7f2thbu05s_PcsTWCountry, 0);
        $a7f2thbu05s_PriceTWCountry = number_format($a7f2thbu05s_PriceTWCountry, 0);
        $a7f2debu10s_PcsTWCountry = number_format($a7f2debu10s_PcsTWCountry, 0);
        $a7f2debu10s_PriceTWCountry = number_format($a7f2debu10s_PriceTWCountry, 0);
        $a7f2exbu11s_PcsTWCountry = number_format($a7f2exbu11s_PcsTWCountry, 0);
        $a7f2exbu11s_PriceTWCountry = number_format($a7f2exbu11s_PriceTWCountry, 0);
        $a7f2twbu04s_PcsTWCountry = number_format($a7f2twbu04s_PcsTWCountry, 0);
        $a7f2twbu04s_PriceTWCountry = number_format($a7f2twbu04s_PriceTWCountry, 0);
        $a7f2twbu07s_PcsTWCountry = number_format($a7f2twbu07s_PcsTWCountry, 0);
        $a7f2twbu07s_PriceTWCountry = number_format($a7f2twbu07s_PriceTWCountry, 0);
        $a7f2cebu10s_PcsTWCountry = number_format($a7f2cebu10s_PcsTWCountry, 0);
        $a7f2cebu10s_PriceTWCountry = number_format($a7f2cebu10s_PriceTWCountry, 0);
        $a8f1fgbu02s_PcsTWCountry = number_format($a8f1fgbu02s_PcsTWCountry, 0);
        $a8f1fgbu02s_PriceTWCountry = number_format($a8f1fgbu02s_PriceTWCountry, 0);
        $a8f2fgbu10s_PcsTWCountry = number_format($a8f2fgbu10s_PcsTWCountry, 0);
        $a8f2fgbu10s_PriceTWCountry = number_format($a8f2fgbu10s_PriceTWCountry, 0);
        $a8f2thbu05s_PcsTWCountry = number_format($a8f2thbu05s_PcsTWCountry, 0);
        $a8f2thbu05s_PriceTWCountry = number_format($a8f2thbu05s_PriceTWCountry, 0);
        $a8f2debu10s_PcsTWCountry = number_format($a8f2debu10s_PcsTWCountry, 0);
        $a8f2debu10s_PriceTWCountry = number_format($a8f2debu10s_PriceTWCountry, 0);
        $a8f2exbu11s_PcsTWCountry = number_format($a8f2exbu11s_PcsTWCountry, 0);
        $a8f2exbu11s_PriceTWCountry = number_format($a8f2exbu11s_PriceTWCountry, 0);
        $a8f2twbu04s_PcsTWCountry = number_format($a8f2twbu04s_PcsTWCountry, 0);
        $a8f2twbu04s_PriceTWCountry = number_format($a8f2twbu04s_PriceTWCountry, 0);
        $a8f2twbu07s_PcsTWCountry = number_format($a8f2twbu07s_PcsTWCountry, 0);
        $a8f2twbu07s_PriceTWCountry = number_format($a8f2twbu07s_PriceTWCountry, 0);
        $a8f2cebu10s_PcsTWCountry = number_format($a8f2cebu10s_PcsTWCountry, 0);
        $a8f2cebu10s_PriceTWCountry = number_format($a8f2cebu10s_PriceTWCountry, 0);
        $DC1_PcsTWCountry = number_format($DC1_PcsTWCountry, 0);
        $DC1_PriceTWCountry = number_format($DC1_PriceTWCountry, 0);
        $DCP_PcsTWCountry = number_format($DCP_PcsTWCountry, 0);
        $DCP_PriceTWCountry = number_format($DCP_PriceTWCountry, 0);
        $DCY_PcsTWCountry = number_format($DCY_PcsTWCountry, 0);
        $DCY_PriceTWCountry = number_format($DCY_PriceTWCountry, 0);
        $DEX_PcsTWCountry = number_format($DEX_PcsTWCountry, 0);
        $DEX_PriceTWCountry = number_format($DEX_PriceTWCountry, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterLNCountry = number_format($Pcs_AfterLNCountry, 0);
        $Price_AfterLNCountry = number_format($Price_AfterLNCountry, 0);
        $Po_PcsLNCountry = number_format($Po_PcsLNCountry, 0);
        $Po_PriceLNCountry = number_format($Po_PriceLNCountry, 0);
        $Neg_PcsLNCountry = number_format($Neg_PcsLNCountry, 0);
        $Neg_PriceLNCountry = number_format($Neg_PriceLNCountry, 0);
        $BackChange_PcsLNCountry = number_format($BackChange_PcsLNCountry, 0);
        $BackChange_PriceLNCountry = number_format($BackChange_PriceLNCountry, 0);
        $Purchase_PcsLNCountry = number_format($Purchase_PcsLNCountry, 0);
        $Purchase_PriceLNCountry = number_format($Purchase_PriceLNCountry, 0);
        $ReciveTranfer_PcsLNCountry = number_format($ReciveTranfer_PcsLNCountry, 0);
        $ReciveTranfer_PriceLNCountry = number_format($ReciveTranfer_PriceLNCountry, 0);
        $ReturnItem_PCSLNCountry = number_format($ReturnItem_PCSLNCountry, 0);
        $ReturnItem_PriceLNCountry = number_format($ReturnItem_PriceLNCountry, 0);
        $AllIn_PcsLNCountry = number_format($AllIn_PcsLNCountry, 0);
        $AllIn_PriceLNCountry = number_format($AllIn_PriceLNCountry, 0);
        $SendSale_PcsLNCountry = number_format($SendSale_PcsLNCountry, 0);
        $SendSale_PriceLNCountry = number_format($SendSale_PriceLNCountry, 0);
        $ReciveTranOut_PcsLNCountry = number_format($ReciveTranOut_PcsLNCountry, 0);
        $ReciveTranOut_PriceLNCountry = number_format($ReciveTranOut_PriceLNCountry, 0);
        $ReturnStore_PcsLNCountry = number_format($ReturnStore_PcsLNCountry, 0);
        $ReturnStore_PriceLNCountry = number_format($ReturnStore_PriceLNCountry, 0);
        $AllOut_PcsLNCountry = number_format($AllOut_PcsLNCountry, 0);
        $AllOut_PriceLNCountry = number_format($AllOut_PriceLNCountry, 0);
        $Calculate_PcsLNCountry = number_format($Calculate_PcsLNCountry, 0);
        $Calculate_PriceLNCountry = number_format($Calculate_PriceLNCountry, 0);
        $NewCalculate_PcsLNCountry = number_format($NewCalculate_PcsLNCountry, 0);
        $NewCalculate_PriceLNCountry = number_format($NewCalculate_PriceLNCountry, 0);
        $Diff_PcsLNCountry = number_format($Diff_PcsLNCountry, 0);
        $Diff_PriceLNCountry = number_format($Diff_PriceLNCountry, 0);
        $NewTotal_PcsLNCountry = number_format($NewTotal_PcsLNCountry, 0);
        $NewTotal_PriceLNCountry = number_format($NewTotal_PriceLNCountry, 0);
        $NewTotalDiff_NavLNCountry = number_format($NewTotalDiff_NavLNCountry, 0);
        $NewTotalDiff_CalLNCountry = number_format($NewTotalDiff_CalLNCountry, 0);
        $a7f1fgbu02s_PcsLNCountry = number_format($a7f1fgbu02s_PcsLNCountry, 0);
        $a7f1fgbu02s_PriceLNCountry = number_format($a7f1fgbu02s_PriceLNCountry, 0);
        $a7f2fgbu10s_PcsLNCountry = number_format($a7f2fgbu10s_PcsLNCountry, 0);
        $a7f2fgbu10s_PriceLNCountry = number_format($a7f2fgbu10s_PriceLNCountry, 0);
        $a7f2thbu05s_PcsLNCountry = number_format($a7f2thbu05s_PcsLNCountry, 0);
        $a7f2thbu05s_PriceLNCountry = number_format($a7f2thbu05s_PriceLNCountry, 0);
        $a7f2debu10s_PcsLNCountry = number_format($a7f2debu10s_PcsLNCountry, 0);
        $a7f2debu10s_PriceLNCountry = number_format($a7f2debu10s_PriceLNCountry, 0);
        $a7f2exbu11s_PcsLNCountry = number_format($a7f2exbu11s_PcsLNCountry, 0);
        $a7f2exbu11s_PriceLNCountry = number_format($a7f2exbu11s_PriceLNCountry, 0);
        $a7f2twbu04s_PcsLNCountry = number_format($a7f2twbu04s_PcsLNCountry, 0);
        $a7f2twbu04s_PriceLNCountry = number_format($a7f2twbu04s_PriceLNCountry, 0);
        $a7f2twbu07s_PcsLNCountry = number_format($a7f2twbu07s_PcsLNCountry, 0);
        $a7f2twbu07s_PriceLNCountry = number_format($a7f2twbu07s_PriceLNCountry, 0);
        $a7f2cebu10s_PcsLNCountry = number_format($a7f2cebu10s_PcsLNCountry, 0);
        $a7f2cebu10s_PriceLNCountry = number_format($a7f2cebu10s_PriceLNCountry, 0);
        $a8f1fgbu02s_PcsLNCountry = number_format($a8f1fgbu02s_PcsLNCountry, 0);
        $a8f1fgbu02s_PriceLNCountry = number_format($a8f1fgbu02s_PriceLNCountry, 0);
        $a8f2fgbu10s_PcsLNCountry = number_format($a8f2fgbu10s_PcsLNCountry, 0);
        $a8f2fgbu10s_PriceLNCountry = number_format($a8f2fgbu10s_PriceLNCountry, 0);
        $a8f2thbu05s_PcsLNCountry = number_format($a8f2thbu05s_PcsLNCountry, 0);
        $a8f2thbu05s_PriceLNCountry = number_format($a8f2thbu05s_PriceLNCountry, 0);
        $a8f2debu10s_PcsLNCountry = number_format($a8f2debu10s_PcsLNCountry, 0);
        $a8f2debu10s_PriceLNCountry = number_format($a8f2debu10s_PriceLNCountry, 0);
        $a8f2exbu11s_PcsLNCountry = number_format($a8f2exbu11s_PcsLNCountry, 0);
        $a8f2exbu11s_PriceLNCountry = number_format($a8f2exbu11s_PriceLNCountry, 0);
        $a8f2twbu04s_PcsLNCountry = number_format($a8f2twbu04s_PcsLNCountry, 0);
        $a8f2twbu04s_PriceLNCountry = number_format($a8f2twbu04s_PriceLNCountry, 0);
        $a8f2twbu07s_PcsLNCountry = number_format($a8f2twbu07s_PcsLNCountry, 0);
        $a8f2twbu07s_PriceLNCountry = number_format($a8f2twbu07s_PriceLNCountry, 0);
        $a8f2cebu10s_PcsLNCountry = number_format($a8f2cebu10s_PcsLNCountry, 0);
        $a8f2cebu10s_PriceLNCountry = number_format($a8f2cebu10s_PriceLNCountry, 0);
        $DC1_PcsLNCountry = number_format($DC1_PcsLNCountry, 0);
        $DC1_PriceLNCountry = number_format($DC1_PriceLNCountry, 0);
        $DCP_PcsLNCountry = number_format($DCP_PcsLNCountry, 0);
        $DCP_PriceLNCountry = number_format($DCP_PriceLNCountry, 0);
        $DCY_PcsLNCountry = number_format($DCY_PcsLNCountry, 0);
        $DCY_PriceLNCountry = number_format($DCY_PriceLNCountry, 0);
        $DEX_PcsLNCountry = number_format($DEX_PcsLNCountry, 0);
        $DEX_PriceLNCountry = number_format($DEX_PriceLNCountry, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterSNTCountry = number_format($Pcs_AfterSNTCountry, 0);
        $Price_AfterSNTCountry = number_format($Price_AfterSNTCountry, 0);
        $Po_PcsSNTCountry = number_format($Po_PcsSNTCountry, 0);
        $Po_PriceSNTCountry = number_format($Po_PriceSNTCountry, 0);
        $Neg_PcsSNTCountry = number_format($Neg_PcsSNTCountry, 0);
        $Neg_PriceSNTCountry = number_format($Neg_PriceSNTCountry, 0);
        $BackChange_PcsSNTCountry = number_format($BackChange_PcsSNTCountry, 0);
        $BackChange_PriceSNTCountry = number_format($BackChange_PriceSNTCountry, 0);
        $Purchase_PcsSNTCountry = number_format($Purchase_PcsSNTCountry, 0);
        $Purchase_PriceSNTCountry = number_format($Purchase_PriceSNTCountry, 0);
        $ReciveTranfer_PcsSNTCountry = number_format($ReciveTranfer_PcsSNTCountry, 0);
        $ReciveTranfer_PriceSNTCountry = number_format($ReciveTranfer_PriceSNTCountry, 0);
        $ReturnItem_PCSSNTCountry = number_format($ReturnItem_PCSSNTCountry, 0);
        $ReturnItem_PriceSNTCountry = number_format($ReturnItem_PriceSNTCountry, 0);
        $AllIn_PcsSNTCountry = number_format($AllIn_PcsSNTCountry, 0);
        $AllIn_PriceSNTCountry = number_format($AllIn_PriceSNTCountry, 0);
        $SendSale_PcsSNTCountry = number_format($SendSale_PcsSNTCountry, 0);
        $SendSale_PriceSNTCountry = number_format($SendSale_PriceSNTCountry, 0);
        $ReciveTranOut_PcsSNTCountry = number_format($ReciveTranOut_PcsSNTCountry, 0);
        $ReciveTranOut_PriceSNTCountry = number_format($ReciveTranOut_PriceSNTCountry, 0);
        $ReturnStore_PcsSNTCountry = number_format($ReturnStore_PcsSNTCountry, 0);
        $ReturnStore_PriceSNTCountry = number_format($ReturnStore_PriceSNTCountry, 0);
        $AllOut_PcsSNTCountry = number_format($AllOut_PcsSNTCountry, 0);
        $AllOut_PriceSNTCountry = number_format($AllOut_PriceSNTCountry, 0);
        $Calculate_PcsSNTCountry = number_format($Calculate_PcsSNTCountry, 0);
        $Calculate_PriceSNTCountry = number_format($Calculate_PriceSNTCountry, 0);
        $NewCalculate_PcsSNTCountry = number_format($NewCalculate_PcsSNTCountry, 0);
        $NewCalculate_PriceSNTCountry = number_format($NewCalculate_PriceSNTCountry, 0);
        $Diff_PcsSNTCountry = number_format($Diff_PcsSNTCountry, 0);
        $Diff_PriceSNTCountry = number_format($Diff_PriceSNTCountry, 0);
        $NewTotal_PcsSNTCountry = number_format($NewTotal_PcsSNTCountry, 0);
        $NewTotal_PriceSNTCountry = number_format($NewTotal_PriceSNTCountry, 0);
        $NewTotalDiff_NavSNTCountry = number_format($NewTotalDiff_NavSNTCountry, 0);
        $NewTotalDiff_CalSNTCountry = number_format($NewTotalDiff_CalSNTCountry, 0);
        $a7f1fgbu02s_PcsSNTCountry = number_format($a7f1fgbu02s_PcsSNTCountry, 0);
        $a7f1fgbu02s_PriceSNTCountry = number_format($a7f1fgbu02s_PriceSNTCountry, 0);
        $a7f2fgbu10s_PcsSNTCountry = number_format($a7f2fgbu10s_PcsSNTCountry, 0);
        $a7f2fgbu10s_PriceSNTCountry = number_format($a7f2fgbu10s_PriceSNTCountry, 0);
        $a7f2thbu05s_PcsSNTCountry = number_format($a7f2thbu05s_PcsSNTCountry, 0);
        $a7f2thbu05s_PriceSNTCountry = number_format($a7f2thbu05s_PriceSNTCountry, 0);
        $a7f2debu10s_PcsSNTCountry = number_format($a7f2debu10s_PcsSNTCountry, 0);
        $a7f2debu10s_PriceSNTCountry = number_format($a7f2debu10s_PriceSNTCountry, 0);
        $a7f2exbu11s_PcsSNTCountry = number_format($a7f2exbu11s_PcsSNTCountry, 0);
        $a7f2exbu11s_PriceSNTCountry = number_format($a7f2exbu11s_PriceSNTCountry, 0);
        $a7f2twbu04s_PcsSNTCountry = number_format($a7f2twbu04s_PcsSNTCountry, 0);
        $a7f2twbu04s_PriceSNTCountry = number_format($a7f2twbu04s_PriceSNTCountry, 0);
        $a7f2twbu07s_PcsSNTCountry = number_format($a7f2twbu07s_PcsSNTCountry, 0);
        $a7f2twbu07s_PriceSNTCountry = number_format($a7f2twbu07s_PriceSNTCountry, 0);
        $a7f2cebu10s_PcsSNTCountry = number_format($a7f2cebu10s_PcsSNTCountry, 0);
        $a7f2cebu10s_PriceSNTCountry = number_format($a7f2cebu10s_PriceSNTCountry, 0);
        $a8f1fgbu02s_PcsSNTCountry = number_format($a8f1fgbu02s_PcsSNTCountry, 0);
        $a8f1fgbu02s_PriceSNTCountry = number_format($a8f1fgbu02s_PriceSNTCountry, 0);
        $a8f2fgbu10s_PcsSNTCountry = number_format($a8f2fgbu10s_PcsSNTCountry, 0);
        $a8f2fgbu10s_PriceSNTCountry = number_format($a8f2fgbu10s_PriceSNTCountry, 0);
        $a8f2thbu05s_PcsSNTCountry = number_format($a8f2thbu05s_PcsSNTCountry, 0);
        $a8f2thbu05s_PriceSNTCountry = number_format($a8f2thbu05s_PriceSNTCountry, 0);
        $a8f2debu10s_PcsSNTCountry = number_format($a8f2debu10s_PcsSNTCountry, 0);
        $a8f2debu10s_PriceSNTCountry = number_format($a8f2debu10s_PriceSNTCountry, 0);
        $a8f2exbu11s_PcsSNTCountry = number_format($a8f2exbu11s_PcsSNTCountry, 0);
        $a8f2exbu11s_PriceSNTCountry = number_format($a8f2exbu11s_PriceSNTCountry, 0);
        $a8f2twbu04s_PcsSNTCountry = number_format($a8f2twbu04s_PcsSNTCountry, 0);
        $a8f2twbu04s_PriceSNTCountry = number_format($a8f2twbu04s_PriceSNTCountry, 0);
        $a8f2twbu07s_PcsSNTCountry = number_format($a8f2twbu07s_PcsSNTCountry, 0);
        $a8f2twbu07s_PriceSNTCountry = number_format($a8f2twbu07s_PriceSNTCountry, 0);
        $a8f2cebu10s_PcsSNTCountry = number_format($a8f2cebu10s_PcsSNTCountry, 0);
        $a8f2cebu10s_PriceSNTCountry = number_format($a8f2cebu10s_PriceSNTCountry, 0);
        $DC1_PcsSNTCountry = number_format($DC1_PcsSNTCountry, 0);
        $DC1_PriceSNTCountry = number_format($DC1_PriceSNTCountry, 0);
        $DCP_PcsSNTCountry = number_format($DCP_PcsSNTCountry, 0);
        $DCP_PriceSNTCountry = number_format($DCP_PriceSNTCountry, 0);
        $DCY_PcsSNTCountry = number_format($DCY_PcsSNTCountry, 0);
        $DCY_PriceSNTCountry = number_format($DCY_PriceSNTCountry, 0);
        $DEX_PcsSNTCountry = number_format($DEX_PcsSNTCountry, 0);
        $DEX_PriceSNTCountry = number_format($DEX_PriceSNTCountry, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllCountry = number_format($Pcs_AfterAllCountry, 0);
        $Price_AfterAllCountry = number_format($Price_AfterAllCountry, 0);
        $Po_PcsAllCountry = number_format($Po_PcsAllCountry, 0);
        $Po_PriceAllCountry = number_format($Po_PriceAllCountry, 0);
        $Neg_PcsAllCountry = number_format($Neg_PcsAllCountry, 0);
        $Neg_PriceAllCountry = number_format($Neg_PriceAllCountry, 0);
        $BackChange_PcsAllCountry = number_format($BackChange_PcsAllCountry, 0);
        $BackChange_PriceAllCountry = number_format($BackChange_PriceAllCountry, 0);
        $Purchase_PcsAllCountry = number_format($Purchase_PcsAllCountry, 0);
        $Purchase_PriceAllCountry = number_format($Purchase_PriceAllCountry, 0);
        $ReciveTranfer_PcsAllCountry = number_format($ReciveTranfer_PcsAllCountry, 0);
        $ReciveTranfer_PriceAllCountry = number_format($ReciveTranfer_PriceAllCountry, 0);
        $ReturnItem_PCSAllCountry = number_format($ReturnItem_PCSAllCountry, 0);
        $ReturnItem_PriceAllCountry = number_format($ReturnItem_PriceAllCountry, 0);
        $AllIn_PcsAllCountry = number_format($AllIn_PcsAllCountry, 0);
        $AllIn_PriceAllCountry = number_format($AllIn_PriceAllCountry, 0);
        $SendSale_PcsAllCountry = number_format($SendSale_PcsAllCountry, 0);
        $SendSale_PriceAllCountry = number_format($SendSale_PriceAllCountry, 0);
        $ReciveTranOut_PcsAllCountry = number_format($ReciveTranOut_PcsAllCountry, 0);
        $ReciveTranOut_PriceAllCountry = number_format($ReciveTranOut_PriceAllCountry, 0);
        $ReturnStore_PcsAllCountry = number_format($ReturnStore_PcsAllCountry, 0);
        $ReturnStore_PriceAllCountry = number_format($ReturnStore_PriceAllCountry, 0);
        $AllOut_PcsAllCountry = number_format($AllOut_PcsAllCountry, 0);
        $AllOut_PriceAllCountry = number_format($AllOut_PriceAllCountry, 0);
        $Calculate_PcsAllCountry = number_format($Calculate_PcsAllCountry, 0);
        $Calculate_PriceAllCountry = number_format($Calculate_PriceAllCountry, 0);
        $NewCalculate_PcsAllCountry = number_format($NewCalculate_PcsAllCountry, 0);
        $NewCalculate_PriceAllCountry = number_format($NewCalculate_PriceAllCountry, 0);
        $Diff_PcsAllCountry = number_format($Diff_PcsAllCountry, 0);
        $Diff_PriceAllCountry = number_format($Diff_PriceAllCountry, 0);
        $NewTotal_PcsAllCountry = number_format($NewTotal_PcsAllCountry, 0);
        $NewTotal_PriceAllCountry = number_format($NewTotal_PriceAllCountry, 0);
        $NewTotalDiff_NavAllCountry = number_format($NewTotalDiff_NavAllCountry, 0);
        $NewTotalDiff_CalAllCountry = number_format($NewTotalDiff_CalAllCountry, 0);
        $a7f1fgbu02s_PcsAllCountry = number_format($a7f1fgbu02s_PcsAllCountry, 0);
        $a7f1fgbu02s_PriceAllCountry = number_format($a7f1fgbu02s_PriceAllCountry, 0);
        $a7f2fgbu10s_PcsAllCountry = number_format($a7f2fgbu10s_PcsAllCountry, 0);
        $a7f2fgbu10s_PriceAllCountry = number_format($a7f2fgbu10s_PriceAllCountry, 0);
        $a7f2thbu05s_PcsAllCountry = number_format($a7f2thbu05s_PcsAllCountry, 0);
        $a7f2thbu05s_PriceAllCountry = number_format($a7f2thbu05s_PriceAllCountry, 0);
        $a7f2debu10s_PcsAllCountry = number_format($a7f2debu10s_PcsAllCountry, 0);
        $a7f2debu10s_PriceAllCountry = number_format($a7f2debu10s_PriceAllCountry, 0);
        $a7f2exbu11s_PcsAllCountry = number_format($a7f2exbu11s_PcsAllCountry, 0);
        $a7f2exbu11s_PriceAllCountry = number_format($a7f2exbu11s_PriceAllCountry, 0);
        $a7f2twbu04s_PcsAllCountry = number_format($a7f2twbu04s_PcsAllCountry, 0);
        $a7f2twbu04s_PriceAllCountry = number_format($a7f2twbu04s_PriceAllCountry, 0);
        $a7f2twbu07s_PcsAllCountry = number_format($a7f2twbu07s_PcsAllCountry, 0);
        $a7f2twbu07s_PriceAllCountry = number_format($a7f2twbu07s_PriceAllCountry, 0);
        $a7f2cebu10s_PcsAllCountry = number_format($a7f2cebu10s_PcsAllCountry, 0);
        $a7f2cebu10s_PriceAllCountry = number_format($a7f2cebu10s_PriceAllCountry, 0);
        $a8f1fgbu02s_PcsAllCountry = number_format($a8f1fgbu02s_PcsAllCountry, 0);
        $a8f1fgbu02s_PriceAllCountry = number_format($a8f1fgbu02s_PriceAllCountry, 0);
        $a8f2fgbu10s_PcsAllCountry = number_format($a8f2fgbu10s_PcsAllCountry, 0);
        $a8f2fgbu10s_PriceAllCountry = number_format($a8f2fgbu10s_PriceAllCountry, 0);
        $a8f2thbu05s_PcsAllCountry = number_format($a8f2thbu05s_PcsAllCountry, 0);
        $a8f2thbu05s_PriceAllCountry = number_format($a8f2thbu05s_PriceAllCountry, 0);
        $a8f2debu10s_PcsAllCountry = number_format($a8f2debu10s_PcsAllCountry, 0);
        $a8f2debu10s_PriceAllCountry = number_format($a8f2debu10s_PriceAllCountry, 0);
        $a8f2exbu11s_PcsAllCountry = number_format($a8f2exbu11s_PcsAllCountry, 0);
        $a8f2exbu11s_PriceAllCountry = number_format($a8f2exbu11s_PriceAllCountry, 0);
        $a8f2twbu04s_PcsAllCountry = number_format($a8f2twbu04s_PcsAllCountry, 0);
        $a8f2twbu04s_PriceAllCountry = number_format($a8f2twbu04s_PriceAllCountry, 0);
        $a8f2twbu07s_PcsAllCountry = number_format($a8f2twbu07s_PcsAllCountry, 0);
        $a8f2twbu07s_PriceAllCountry = number_format($a8f2twbu07s_PriceAllCountry, 0);
        $a8f2cebu10s_PcsAllCountry = number_format($a8f2cebu10s_PcsAllCountry, 0);
        $a8f2cebu10s_PriceAllCountry = number_format($a8f2cebu10s_PriceAllCountry, 0);
        $DC1_PcsAllCountry = number_format($DC1_PcsAllCountry, 0);
        $DC1_PriceAllCountry = number_format($DC1_PriceAllCountry, 0);
        $DCP_PcsAllCountry = number_format($DCP_PcsAllCountry, 0);
        $DCP_PriceAllCountry = number_format($DCP_PriceAllCountry, 0);
        $DCY_PcsAllCountry = number_format($DCY_PcsAllCountry, 0);
        $DCY_PriceAllCountry = number_format($DCY_PriceAllCountry, 0);
        $DEX_PcsAllCountry = number_format($DEX_PcsAllCountry, 0);
        $DEX_PriceAllCountry = number_format($DEX_PriceAllCountry, 0);

        //////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////

        $Pcs_AfterAllTotal = number_format($Pcs_AfterAllTotal, 0);
        $Price_AfterAllTotal = number_format($Price_AfterAllTotal, 0);
        $Po_PcsAllTotal = number_format($Po_PcsAllTotal, 0);
        $Po_PriceAllTotal = number_format($Po_PriceAllTotal, 0);
        $Neg_PcsAllTotal = number_format($Neg_PcsAllTotal, 0);
        $Neg_PriceAllTotal = number_format($Neg_PriceAllTotal, 0);
        $BackChange_PcsAllTotal = number_format($BackChange_PcsAllTotal, 0);
        $BackChange_PriceAllTotal = number_format($BackChange_PriceAllTotal, 0);
        $Purchase_PcsAllTotal = number_format($Purchase_PcsAllTotal, 0);
        $Purchase_PriceAllTotal = number_format($Purchase_PriceAllTotal, 0);
        $ReciveTranfer_PcsAllTotal = number_format($ReciveTranfer_PcsAllTotal, 0);
        $ReciveTranfer_PriceAllTotal = number_format($ReciveTranfer_PriceAllTotal, 0);
        $ReturnItem_PCSAllTotal = number_format($ReturnItem_PCSAllTotal, 0);
        $ReturnItem_PriceAllTotal = number_format($ReturnItem_PriceAllTotal, 0);
        $AllIn_PcsAllTotal = number_format($AllIn_PcsAllTotal, 0);
        $AllIn_PriceAllTotal = number_format($AllIn_PriceAllTotal, 0);
        $SendSale_PcsAllTotal = number_format($SendSale_PcsAllTotal, 0);
        $SendSale_PriceAllTotal = number_format($SendSale_PriceAllTotal, 0);
        $ReciveTranOut_PcsAllTotal = number_format($ReciveTranOut_PcsAllTotal, 0);
        $ReciveTranOut_PriceAllTotal = number_format($ReciveTranOut_PriceAllTotal, 0);
        $ReturnStore_PcsAllTotal = number_format($ReturnStore_PcsAllTotal, 0);
        $ReturnStore_PriceAllTotal = number_format($ReturnStore_PriceAllTotal, 0);
        $AllOut_PcsAllTotal = number_format($AllOut_PcsAllTotal, 0);
        $AllOut_PriceAllTotal = number_format($AllOut_PriceAllTotal, 0);
        $Calculate_PcsAllTotal = number_format($Calculate_PcsAllTotal, 0);
        $Calculate_PriceAllTotal = number_format($Calculate_PriceAllTotal, 0);
        $NewCalculate_PcsAllTotal = number_format($NewCalculate_PcsAllTotal, 0);
        $NewCalculate_PriceAllTotal = number_format($NewCalculate_PriceAllTotal, 0);
        $Diff_PcsAllTotal = number_format($Diff_PcsAllTotal, 0);
        $Diff_PriceAllTotal = number_format($Diff_PriceAllTotal, 0);
        $NewTotal_PcsAllTotal = number_format($NewTotal_PcsAllTotal, 0);
        $NewTotal_PriceAllTotal = number_format($NewTotal_PriceAllTotal, 0);
        $NewTotalDiff_NavAllTotal = number_format($NewTotalDiff_NavAllTotal, 0);
        $NewTotalDiff_CalAllTotal = number_format($NewTotalDiff_CalAllTotal, 0);
        $a7f1fgbu02s_PcsAllTotal = number_format($a7f1fgbu02s_PcsAllTotal, 0);
        $a7f1fgbu02s_PriceAllTotal = number_format($a7f1fgbu02s_PriceAllTotal, 0);
        $a7f2fgbu10s_PcsAllTotal = number_format($a7f2fgbu10s_PcsAllTotal, 0);
        $a7f2fgbu10s_PriceAllTotal = number_format($a7f2fgbu10s_PriceAllTotal, 0);
        $a7f2thbu05s_PcsAllTotal = number_format($a7f2thbu05s_PcsAllTotal, 0);
        $a7f2thbu05s_PriceAllTotal = number_format($a7f2thbu05s_PriceAllTotal, 0);
        $a7f2debu10s_PcsAllTotal = number_format($a7f2debu10s_PcsAllTotal, 0);
        $a7f2debu10s_PriceAllTotal = number_format($a7f2debu10s_PriceAllTotal, 0);
        $a7f2exbu11s_PcsAllTotal = number_format($a7f2exbu11s_PcsAllTotal, 0);
        $a7f2exbu11s_PriceAllTotal = number_format($a7f2exbu11s_PriceAllTotal, 0);
        $a7f2twbu04s_PcsAllTotal = number_format($a7f2twbu04s_PcsAllTotal, 0);
        $a7f2twbu04s_PriceAllTotal = number_format($a7f2twbu04s_PriceAllTotal, 0);
        $a7f2twbu07s_PcsAllTotal = number_format($a7f2twbu07s_PcsAllTotal, 0);
        $a7f2twbu07s_PriceAllTotal = number_format($a7f2twbu07s_PriceAllTotal, 0);
        $a7f2cebu10s_PcsAllTotal = number_format($a7f2cebu10s_PcsAllTotal, 0);
        $a7f2cebu10s_PriceAllTotal = number_format($a7f2cebu10s_PriceAllTotal, 0);
        $a8f1fgbu02s_PcsAllTotal = number_format($a8f1fgbu02s_PcsAllTotal, 0);
        $a8f1fgbu02s_PriceAllTotal = number_format($a8f1fgbu02s_PriceAllTotal, 0);
        $a8f2fgbu10s_PcsAllTotal = number_format($a8f2fgbu10s_PcsAllTotal, 0);
        $a8f2fgbu10s_PriceAllTotal = number_format($a8f2fgbu10s_PriceAllTotal, 0);
        $a8f2thbu05s_PcsAllTotal = number_format($a8f2thbu05s_PcsAllTotal, 0);
        $a8f2thbu05s_PriceAllTotal = number_format($a8f2thbu05s_PriceAllTotal, 0);
        $a8f2debu10s_PcsAllTotal = number_format($a8f2debu10s_PcsAllTotal, 0);
        $a8f2debu10s_PriceAllTotal = number_format($a8f2debu10s_PriceAllTotal, 0);
        $a8f2exbu11s_PcsAllTotal = number_format($a8f2exbu11s_PcsAllTotal, 0);
        $a8f2exbu11s_PriceAllTotal = number_format($a8f2exbu11s_PriceAllTotal, 0);
        $a8f2twbu04s_PcsAllTotal = number_format($a8f2twbu04s_PcsAllTotal, 0);
        $a8f2twbu04s_PriceAllTotal = number_format($a8f2twbu04s_PriceAllTotal, 0);
        $a8f2twbu07s_PcsAllTotal = number_format($a8f2twbu07s_PcsAllTotal, 0);
        $a8f2twbu07s_PriceAllTotal = number_format($a8f2twbu07s_PriceAllTotal, 0);
        $a8f2cebu10s_PcsAllTotal = number_format($a8f2cebu10s_PcsAllTotal, 0);
        $a8f2cebu10s_PriceAllTotal = number_format($a8f2cebu10s_PriceAllTotal, 0);
        $DC1_PcsAllTotal = number_format($DC1_PcsAllTotal, 0);
        $DC1_PriceAllTotal = number_format($DC1_PriceAllTotal, 0);
        $DCP_PcsAllTotal = number_format($DCP_PcsAllTotal, 0);
        $DCP_PriceAllTotal = number_format($DCP_PriceAllTotal, 0);
        $DCY_PcsAllTotal = number_format($DCY_PcsAllTotal, 0);
        $DCY_PriceAllTotal = number_format($DCY_PriceAllTotal, 0);
        $DEX_PcsAllTotal = number_format($DEX_PcsAllTotal, 0);
        $DEX_PriceAllTotal = number_format($DEX_PriceAllTotal, 0);

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

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterNTDCP,
            $Price_AfterNTDCP,
            $Pcs_AfterNTDCP,
            $Price_AfterNTDCP,
            $Po_PcsNTDCP,
            $Po_PriceNTDCP,
            $Neg_PcsNTDCP,
            $Neg_PriceNTDCP,
            $BackChange_PcsNTDCP,
            $BackChange_PriceNTDCP,
            $Purchase_PcsNTDCP,
            $Purchase_PriceNTDCP,
            $ReciveTranfer_PcsNTDCP,
            $ReciveTranfer_PriceNTDCP,
            $ReturnItem_PCSNTDCP,
            $ReturnItem_PriceNTDCP,
            $AllIn_PcsNTDCP,
            $AllIn_PriceNTDCP,
            $SendSale_PcsNTDCP,
            $SendSale_PriceNTDCP,
            $ReciveTranOut_PcsNTDCP,
            $ReciveTranOut_PriceNTDCP,
            $ReturnStore_PcsNTDCP,
            $ReturnStore_PriceNTDCP,
            $AllOut_PcsNTDCP,
            $AllOut_PriceNTDCP,
            $Calculate_PcsNTDCP,
            $Calculate_PriceNTDCP,
            $NewCalculate_PcsNTDCP,
            $NewCalculate_PriceNTDCP,
            $Diff_PcsNTDCP,
            $Diff_PriceNTDCP,
            $NewTotal_PcsNTDCP,
            $NewTotal_PriceNTDCP,
            $NewTotalDiff_NavNTDCP,
            $NewTotalDiff_CalNTDCP,
            $a7f1fgbu02s_PcsNTDCP,
            $a7f1fgbu02s_PriceNTDCP,
            $a7f2fgbu10s_PcsNTDCP,
            $a7f2fgbu10s_PriceNTDCP,
            $a7f2thbu05s_PcsNTDCP,
            $a7f2thbu05s_PriceNTDCP,
            $a7f2debu10s_PcsNTDCP,
            $a7f2debu10s_PriceNTDCP,
            $a7f2exbu11s_PcsNTDCP,
            $a7f2exbu11s_PriceNTDCP,
            $a7f2twbu04s_PcsNTDCP,
            $a7f2twbu04s_PriceNTDCP,
            $a7f2twbu07s_PcsNTDCP,
            $a7f2twbu07s_PriceNTDCP,
            $a7f2cebu10s_PcsNTDCP,
            $a7f2cebu10s_PriceNTDCP,
            $a8f1fgbu02s_PcsNTDCP,
            $a8f1fgbu02s_PriceNTDCP,
            $a8f2fgbu10s_PcsNTDCP,
            $a8f2fgbu10s_PriceNTDCP,
            $a8f2thbu05s_PcsNTDCP,
            $a8f2thbu05s_PriceNTDCP,
            $a8f2debu10s_PcsNTDCP,
            $a8f2debu10s_PriceNTDCP,
            $a8f2exbu11s_PcsNTDCP,
            $a8f2exbu11s_PriceNTDCP,
            $a8f2twbu04s_PcsNTDCP,
            $a8f2twbu04s_PriceNTDCP,
            $a8f2twbu07s_PcsNTDCP,
            $a8f2twbu07s_PriceNTDCP,
            $a8f2cebu10s_PcsNTDCP,
            $a8f2cebu10s_PriceNTDCP,
            $DC1_PcsNTDCP,
            $DC1_PriceNTDCP,
            $DCP_PcsNTDCP,
            $DCP_PriceNTDCP,
            $DCY_PcsNTDCP,
            $DCY_PriceNTDCP,
            $DEX_PcsNTDCP,
            $DEX_PriceNTDCP,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterTWDCP,
            $Price_AfterTWDCP,
            $Pcs_AfterTWDCP,
            $Price_AfterTWDCP,
            $Po_PcsTWDCP,
            $Po_PriceTWDCP,
            $Neg_PcsTWDCP,
            $Neg_PriceTWDCP,
            $BackChange_PcsTWDCP,
            $BackChange_PriceTWDCP,
            $Purchase_PcsTWDCP,
            $Purchase_PriceTWDCP,
            $ReciveTranfer_PcsTWDCP,
            $ReciveTranfer_PriceTWDCP,
            $ReturnItem_PCSTWDCP,
            $ReturnItem_PriceTWDCP,
            $AllIn_PcsTWDCP,
            $AllIn_PriceTWDCP,
            $SendSale_PcsTWDCP,
            $SendSale_PriceTWDCP,
            $ReciveTranOut_PcsTWDCP,
            $ReciveTranOut_PriceTWDCP,
            $ReturnStore_PcsTWDCP,
            $ReturnStore_PriceTWDCP,
            $AllOut_PcsTWDCP,
            $AllOut_PriceTWDCP,
            $Calculate_PcsTWDCP,
            $Calculate_PriceTWDCP,
            $NewCalculate_PcsTWDCP,
            $NewCalculate_PriceTWDCP,
            $Diff_PcsTWDCP,
            $Diff_PriceTWDCP,
            $NewTotal_PcsTWDCP,
            $NewTotal_PriceTWDCP,
            $NewTotalDiff_NavTWDCP,
            $NewTotalDiff_CalTWDCP,
            $a7f1fgbu02s_PcsTWDCP,
            $a7f1fgbu02s_PriceTWDCP,
            $a7f2fgbu10s_PcsTWDCP,
            $a7f2fgbu10s_PriceTWDCP,
            $a7f2thbu05s_PcsTWDCP,
            $a7f2thbu05s_PriceTWDCP,
            $a7f2debu10s_PcsTWDCP,
            $a7f2debu10s_PriceTWDCP,
            $a7f2exbu11s_PcsTWDCP,
            $a7f2exbu11s_PriceTWDCP,
            $a7f2twbu04s_PcsTWDCP,
            $a7f2twbu04s_PriceTWDCP,
            $a7f2twbu07s_PcsTWDCP,
            $a7f2twbu07s_PriceTWDCP,
            $a7f2cebu10s_PcsTWDCP,
            $a7f2cebu10s_PriceTWDCP,
            $a8f1fgbu02s_PcsTWDCP,
            $a8f1fgbu02s_PriceTWDCP,
            $a8f2fgbu10s_PcsTWDCP,
            $a8f2fgbu10s_PriceTWDCP,
            $a8f2thbu05s_PcsTWDCP,
            $a8f2thbu05s_PriceTWDCP,
            $a8f2debu10s_PcsTWDCP,
            $a8f2debu10s_PriceTWDCP,
            $a8f2exbu11s_PcsTWDCP,
            $a8f2exbu11s_PriceTWDCP,
            $a8f2twbu04s_PcsTWDCP,
            $a8f2twbu04s_PriceTWDCP,
            $a8f2twbu07s_PcsTWDCP,
            $a8f2twbu07s_PriceTWDCP,
            $a8f2cebu10s_PcsTWDCP,
            $a8f2cebu10s_PriceTWDCP,
            $DC1_PcsTWDCP,
            $DC1_PriceTWDCP,
            $DCP_PcsTWDCP,
            $DCP_PriceTWDCP,
            $DCY_PcsTWDCP,
            $DCY_PriceTWDCP,
            $DEX_PcsTWDCP,
            $DEX_PriceTWDCP,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterLNDCP,
            $Price_AfterLNDCP,
            $Pcs_AfterLNDCP,
            $Price_AfterLNDCP,
            $Po_PcsLNDCP,
            $Po_PriceLNDCP,
            $Neg_PcsLNDCP,
            $Neg_PriceLNDCP,
            $BackChange_PcsLNDCP,
            $BackChange_PriceLNDCP,
            $Purchase_PcsLNDCP,
            $Purchase_PriceLNDCP,
            $ReciveTranfer_PcsLNDCP,
            $ReciveTranfer_PriceLNDCP,
            $ReturnItem_PCSLNDCP,
            $ReturnItem_PriceLNDCP,
            $AllIn_PcsLNDCP,
            $AllIn_PriceLNDCP,
            $SendSale_PcsLNDCP,
            $SendSale_PriceLNDCP,
            $ReciveTranOut_PcsLNDCP,
            $ReciveTranOut_PriceLNDCP,
            $ReturnStore_PcsLNDCP,
            $ReturnStore_PriceLNDCP,
            $AllOut_PcsLNDCP,
            $AllOut_PriceLNDCP,
            $Calculate_PcsLNDCP,
            $Calculate_PriceLNDCP,
            $NewCalculate_PcsLNDCP,
            $NewCalculate_PriceLNDCP,
            $Diff_PcsLNDCP,
            $Diff_PriceLNDCP,
            $NewTotal_PcsLNDCP,
            $NewTotal_PriceLNDCP,
            $NewTotalDiff_NavLNDCP,
            $NewTotalDiff_CalLNDCP,
            $a7f1fgbu02s_PcsLNDCP,
            $a7f1fgbu02s_PriceLNDCP,
            $a7f2fgbu10s_PcsLNDCP,
            $a7f2fgbu10s_PriceLNDCP,
            $a7f2thbu05s_PcsLNDCP,
            $a7f2thbu05s_PriceLNDCP,
            $a7f2debu10s_PcsLNDCP,
            $a7f2debu10s_PriceLNDCP,
            $a7f2exbu11s_PcsLNDCP,
            $a7f2exbu11s_PriceLNDCP,
            $a7f2twbu04s_PcsLNDCP,
            $a7f2twbu04s_PriceLNDCP,
            $a7f2twbu07s_PcsLNDCP,
            $a7f2twbu07s_PriceLNDCP,
            $a7f2cebu10s_PcsLNDCP,
            $a7f2cebu10s_PriceLNDCP,
            $a8f1fgbu02s_PcsLNDCP,
            $a8f1fgbu02s_PriceLNDCP,
            $a8f2fgbu10s_PcsLNDCP,
            $a8f2fgbu10s_PriceLNDCP,
            $a8f2thbu05s_PcsLNDCP,
            $a8f2thbu05s_PriceLNDCP,
            $a8f2debu10s_PcsLNDCP,
            $a8f2debu10s_PriceLNDCP,
            $a8f2exbu11s_PcsLNDCP,
            $a8f2exbu11s_PriceLNDCP,
            $a8f2twbu04s_PcsLNDCP,
            $a8f2twbu04s_PriceLNDCP,
            $a8f2twbu07s_PcsLNDCP,
            $a8f2twbu07s_PriceLNDCP,
            $a8f2cebu10s_PcsLNDCP,
            $a8f2cebu10s_PriceLNDCP,
            $DC1_PcsLNDCP,
            $DC1_PriceLNDCP,
            $DCP_PcsLNDCP,
            $DCP_PriceLNDCP,
            $DCY_PcsLNDCP,
            $DCY_PriceLNDCP,
            $DEX_PcsLNDCP,
            $DEX_PriceLNDCP,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllDCP,
            $Price_AfterAllDCP,
            $Pcs_AfterAllDCP,
            $Price_AfterAllDCP,
            $Po_PcsAllDCP,
            $Po_PriceAllDCP,
            $Neg_PcsAllDCP,
            $Neg_PriceAllDCP,
            $BackChange_PcsAllDCP,
            $BackChange_PriceAllDCP,
            $Purchase_PcsAllDCP,
            $Purchase_PriceAllDCP,
            $ReciveTranfer_PcsAllDCP,
            $ReciveTranfer_PriceAllDCP,
            $ReturnItem_PCSAllDCP,
            $ReturnItem_PriceAllDCP,
            $AllIn_PcsAllDCP,
            $AllIn_PriceAllDCP,
            $SendSale_PcsAllDCP,
            $SendSale_PriceAllDCP,
            $ReciveTranOut_PcsAllDCP,
            $ReciveTranOut_PriceAllDCP,
            $ReturnStore_PcsAllDCP,
            $ReturnStore_PriceAllDCP,
            $AllOut_PcsAllDCP,
            $AllOut_PriceAllDCP,
            $Calculate_PcsAllDCP,
            $Calculate_PriceAllDCP,
            $NewCalculate_PcsAllDCP,
            $NewCalculate_PriceAllDCP,
            $Diff_PcsAllDCP,
            $Diff_PriceAllDCP,
            $NewTotal_PcsAllDCP,
            $NewTotal_PriceAllDCP,
            $NewTotalDiff_NavAllDCP,
            $NewTotalDiff_CalAllDCP,
            $a7f1fgbu02s_PcsAllDCP,
            $a7f1fgbu02s_PriceAllDCP,
            $a7f2fgbu10s_PcsAllDCP,
            $a7f2fgbu10s_PriceAllDCP,
            $a7f2thbu05s_PcsAllDCP,
            $a7f2thbu05s_PriceAllDCP,
            $a7f2debu10s_PcsAllDCP,
            $a7f2debu10s_PriceAllDCP,
            $a7f2exbu11s_PcsAllDCP,
            $a7f2exbu11s_PriceAllDCP,
            $a7f2twbu04s_PcsAllDCP,
            $a7f2twbu04s_PriceAllDCP,
            $a7f2twbu07s_PcsAllDCP,
            $a7f2twbu07s_PriceAllDCP,
            $a7f2cebu10s_PcsAllDCP,
            $a7f2cebu10s_PriceAllDCP,
            $a8f1fgbu02s_PcsAllDCP,
            $a8f1fgbu02s_PriceAllDCP,
            $a8f2fgbu10s_PcsAllDCP,
            $a8f2fgbu10s_PriceAllDCP,
            $a8f2thbu05s_PcsAllDCP,
            $a8f2thbu05s_PriceAllDCP,
            $a8f2debu10s_PcsAllDCP,
            $a8f2debu10s_PriceAllDCP,
            $a8f2exbu11s_PcsAllDCP,
            $a8f2exbu11s_PriceAllDCP,
            $a8f2twbu04s_PcsAllDCP,
            $a8f2twbu04s_PriceAllDCP,
            $a8f2twbu07s_PcsAllDCP,
            $a8f2twbu07s_PriceAllDCP,
            $a8f2cebu10s_PcsAllDCP,
            $a8f2cebu10s_PriceAllDCP,
            $DC1_PcsAllDCP,
            $DC1_PriceAllDCP,
            $DCP_PcsAllDCP,
            $DCP_PriceAllDCP,
            $DCY_PcsAllDCP,
            $DCY_PriceAllDCP,
            $DEX_PcsAllDCP,
            $DEX_PriceAllDCP,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterNTCountry,
            $Price_AfterNTCountry,
            $Pcs_AfterNTCountry,
            $Price_AfterNTCountry,
            $Po_PcsNTCountry,
            $Po_PriceNTCountry,
            $Neg_PcsNTCountry,
            $Neg_PriceNTCountry,
            $BackChange_PcsNTCountry,
            $BackChange_PriceNTCountry,
            $Purchase_PcsNTCountry,
            $Purchase_PriceNTCountry,
            $ReciveTranfer_PcsNTCountry,
            $ReciveTranfer_PriceNTCountry,
            $ReturnItem_PCSNTCountry,
            $ReturnItem_PriceNTCountry,
            $AllIn_PcsNTCountry,
            $AllIn_PriceNTCountry,
            $SendSale_PcsNTCountry,
            $SendSale_PriceNTCountry,
            $ReciveTranOut_PcsNTCountry,
            $ReciveTranOut_PriceNTCountry,
            $ReturnStore_PcsNTCountry,
            $ReturnStore_PriceNTCountry,
            $AllOut_PcsNTCountry,
            $AllOut_PriceNTCountry,
            $Calculate_PcsNTCountry,
            $Calculate_PriceNTCountry,
            $NewCalculate_PcsNTCountry,
            $NewCalculate_PriceNTCountry,
            $Diff_PcsNTCountry,
            $Diff_PriceNTCountry,
            $NewTotal_PcsNTCountry,
            $NewTotal_PriceNTCountry,
            $NewTotalDiff_NavNTCountry,
            $NewTotalDiff_CalNTCountry,
            $a7f1fgbu02s_PcsNTCountry,
            $a7f1fgbu02s_PriceNTCountry,
            $a7f2fgbu10s_PcsNTCountry,
            $a7f2fgbu10s_PriceNTCountry,
            $a7f2thbu05s_PcsNTCountry,
            $a7f2thbu05s_PriceNTCountry,
            $a7f2debu10s_PcsNTCountry,
            $a7f2debu10s_PriceNTCountry,
            $a7f2exbu11s_PcsNTCountry,
            $a7f2exbu11s_PriceNTCountry,
            $a7f2twbu04s_PcsNTCountry,
            $a7f2twbu04s_PriceNTCountry,
            $a7f2twbu07s_PcsNTCountry,
            $a7f2twbu07s_PriceNTCountry,
            $a7f2cebu10s_PcsNTCountry,
            $a7f2cebu10s_PriceNTCountry,
            $a8f1fgbu02s_PcsNTCountry,
            $a8f1fgbu02s_PriceNTCountry,
            $a8f2fgbu10s_PcsNTCountry,
            $a8f2fgbu10s_PriceNTCountry,
            $a8f2thbu05s_PcsNTCountry,
            $a8f2thbu05s_PriceNTCountry,
            $a8f2debu10s_PcsNTCountry,
            $a8f2debu10s_PriceNTCountry,
            $a8f2exbu11s_PcsNTCountry,
            $a8f2exbu11s_PriceNTCountry,
            $a8f2twbu04s_PcsNTCountry,
            $a8f2twbu04s_PriceNTCountry,
            $a8f2twbu07s_PcsNTCountry,
            $a8f2twbu07s_PriceNTCountry,
            $a8f2cebu10s_PcsNTCountry,
            $a8f2cebu10s_PriceNTCountry,
            $DC1_PcsNTCountry,
            $DC1_PriceNTCountry,
            $DCP_PcsNTCountry,
            $DCP_PriceNTCountry,
            $DCY_PcsNTCountry,
            $DCY_PriceNTCountry,
            $DEX_PcsNTCountry,
            $DEX_PriceNTCountry,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterMTCountry,
            $Price_AfterMTCountry,
            $Pcs_AfterMTCountry,
            $Price_AfterMTCountry,
            $Po_PcsMTCountry,
            $Po_PriceMTCountry,
            $Neg_PcsMTCountry,
            $Neg_PriceMTCountry,
            $BackChange_PcsMTCountry,
            $BackChange_PriceMTCountry,
            $Purchase_PcsMTCountry,
            $Purchase_PriceMTCountry,
            $ReciveTranfer_PcsMTCountry,
            $ReciveTranfer_PriceMTCountry,
            $ReturnItem_PCSMTCountry,
            $ReturnItem_PriceMTCountry,
            $AllIn_PcsMTCountry,
            $AllIn_PriceMTCountry,
            $SendSale_PcsMTCountry,
            $SendSale_PriceMTCountry,
            $ReciveTranOut_PcsMTCountry,
            $ReciveTranOut_PriceMTCountry,
            $ReturnStore_PcsMTCountry,
            $ReturnStore_PriceMTCountry,
            $AllOut_PcsMTCountry,
            $AllOut_PriceMTCountry,
            $Calculate_PcsMTCountry,
            $Calculate_PriceMTCountry,
            $NewCalculate_PcsMTCountry,
            $NewCalculate_PriceMTCountry,
            $Diff_PcsMTCountry,
            $Diff_PriceMTCountry,
            $NewTotal_PcsMTCountry,
            $NewTotal_PriceMTCountry,
            $NewTotalDiff_NavMTCountry,
            $NewTotalDiff_CalMTCountry,
            $a7f1fgbu02s_PcsMTCountry,
            $a7f1fgbu02s_PriceMTCountry,
            $a7f2fgbu10s_PcsMTCountry,
            $a7f2fgbu10s_PriceMTCountry,
            $a7f2thbu05s_PcsMTCountry,
            $a7f2thbu05s_PriceMTCountry,
            $a7f2debu10s_PcsMTCountry,
            $a7f2debu10s_PriceMTCountry,
            $a7f2exbu11s_PcsMTCountry,
            $a7f2exbu11s_PriceMTCountry,
            $a7f2twbu04s_PcsMTCountry,
            $a7f2twbu04s_PriceMTCountry,
            $a7f2twbu07s_PcsMTCountry,
            $a7f2twbu07s_PriceMTCountry,
            $a7f2cebu10s_PcsMTCountry,
            $a7f2cebu10s_PriceMTCountry,
            $a8f1fgbu02s_PcsMTCountry,
            $a8f1fgbu02s_PriceMTCountry,
            $a8f2fgbu10s_PcsMTCountry,
            $a8f2fgbu10s_PriceMTCountry,
            $a8f2thbu05s_PcsMTCountry,
            $a8f2thbu05s_PriceMTCountry,
            $a8f2debu10s_PcsMTCountry,
            $a8f2debu10s_PriceMTCountry,
            $a8f2exbu11s_PcsMTCountry,
            $a8f2exbu11s_PriceMTCountry,
            $a8f2twbu04s_PcsMTCountry,
            $a8f2twbu04s_PriceMTCountry,
            $a8f2twbu07s_PcsMTCountry,
            $a8f2twbu07s_PriceMTCountry,
            $a8f2cebu10s_PcsMTCountry,
            $a8f2cebu10s_PriceMTCountry,
            $DC1_PcsMTCountry,
            $DC1_PriceMTCountry,
            $DCP_PcsMTCountry,
            $DCP_PriceMTCountry,
            $DCY_PcsMTCountry,
            $DCY_PriceMTCountry,
            $DEX_PcsMTCountry,
            $DEX_PriceMTCountry,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterTWCountry,
            $Price_AfterTWCountry,
            $Pcs_AfterTWCountry,
            $Price_AfterTWCountry,
            $Po_PcsTWCountry,
            $Po_PriceTWCountry,
            $Neg_PcsTWCountry,
            $Neg_PriceTWCountry,
            $BackChange_PcsTWCountry,
            $BackChange_PriceTWCountry,
            $Purchase_PcsTWCountry,
            $Purchase_PriceTWCountry,
            $ReciveTranfer_PcsTWCountry,
            $ReciveTranfer_PriceTWCountry,
            $ReturnItem_PCSTWCountry,
            $ReturnItem_PriceTWCountry,
            $AllIn_PcsTWCountry,
            $AllIn_PriceTWCountry,
            $SendSale_PcsTWCountry,
            $SendSale_PriceTWCountry,
            $ReciveTranOut_PcsTWCountry,
            $ReciveTranOut_PriceTWCountry,
            $ReturnStore_PcsTWCountry,
            $ReturnStore_PriceTWCountry,
            $AllOut_PcsTWCountry,
            $AllOut_PriceTWCountry,
            $Calculate_PcsTWCountry,
            $Calculate_PriceTWCountry,
            $NewCalculate_PcsTWCountry,
            $NewCalculate_PriceTWCountry,
            $Diff_PcsTWCountry,
            $Diff_PriceTWCountry,
            $NewTotal_PcsTWCountry,
            $NewTotal_PriceTWCountry,
            $NewTotalDiff_NavTWCountry,
            $NewTotalDiff_CalTWCountry,
            $a7f1fgbu02s_PcsTWCountry,
            $a7f1fgbu02s_PriceTWCountry,
            $a7f2fgbu10s_PcsTWCountry,
            $a7f2fgbu10s_PriceTWCountry,
            $a7f2thbu05s_PcsTWCountry,
            $a7f2thbu05s_PriceTWCountry,
            $a7f2debu10s_PcsTWCountry,
            $a7f2debu10s_PriceTWCountry,
            $a7f2exbu11s_PcsTWCountry,
            $a7f2exbu11s_PriceTWCountry,
            $a7f2twbu04s_PcsTWCountry,
            $a7f2twbu04s_PriceTWCountry,
            $a7f2twbu07s_PcsTWCountry,
            $a7f2twbu07s_PriceTWCountry,
            $a7f2cebu10s_PcsTWCountry,
            $a7f2cebu10s_PriceTWCountry,
            $a8f1fgbu02s_PcsTWCountry,
            $a8f1fgbu02s_PriceTWCountry,
            $a8f2fgbu10s_PcsTWCountry,
            $a8f2fgbu10s_PriceTWCountry,
            $a8f2thbu05s_PcsTWCountry,
            $a8f2thbu05s_PriceTWCountry,
            $a8f2debu10s_PcsTWCountry,
            $a8f2debu10s_PriceTWCountry,
            $a8f2exbu11s_PcsTWCountry,
            $a8f2exbu11s_PriceTWCountry,
            $a8f2twbu04s_PcsTWCountry,
            $a8f2twbu04s_PriceTWCountry,
            $a8f2twbu07s_PcsTWCountry,
            $a8f2twbu07s_PriceTWCountry,
            $a8f2cebu10s_PcsTWCountry,
            $a8f2cebu10s_PriceTWCountry,
            $DC1_PcsTWCountry,
            $DC1_PriceTWCountry,
            $DCP_PcsTWCountry,
            $DCP_PriceTWCountry,
            $DCY_PcsTWCountry,
            $DCY_PriceTWCountry,
            $DEX_PcsTWCountry,
            $DEX_PriceTWCountry,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterLNCountry,
            $Price_AfterLNCountry,
            $Pcs_AfterLNCountry,
            $Price_AfterLNCountry,
            $Po_PcsLNCountry,
            $Po_PriceLNCountry,
            $Neg_PcsLNCountry,
            $Neg_PriceLNCountry,
            $BackChange_PcsLNCountry,
            $BackChange_PriceLNCountry,
            $Purchase_PcsLNCountry,
            $Purchase_PriceLNCountry,
            $ReciveTranfer_PcsLNCountry,
            $ReciveTranfer_PriceLNCountry,
            $ReturnItem_PCSLNCountry,
            $ReturnItem_PriceLNCountry,
            $AllIn_PcsLNCountry,
            $AllIn_PriceLNCountry,
            $SendSale_PcsLNCountry,
            $SendSale_PriceLNCountry,
            $ReciveTranOut_PcsLNCountry,
            $ReciveTranOut_PriceLNCountry,
            $ReturnStore_PcsLNCountry,
            $ReturnStore_PriceLNCountry,
            $AllOut_PcsLNCountry,
            $AllOut_PriceLNCountry,
            $Calculate_PcsLNCountry,
            $Calculate_PriceLNCountry,
            $NewCalculate_PcsLNCountry,
            $NewCalculate_PriceLNCountry,
            $Diff_PcsLNCountry,
            $Diff_PriceLNCountry,
            $NewTotal_PcsLNCountry,
            $NewTotal_PriceLNCountry,
            $NewTotalDiff_NavLNCountry,
            $NewTotalDiff_CalLNCountry,
            $a7f1fgbu02s_PcsLNCountry,
            $a7f1fgbu02s_PriceLNCountry,
            $a7f2fgbu10s_PcsLNCountry,
            $a7f2fgbu10s_PriceLNCountry,
            $a7f2thbu05s_PcsLNCountry,
            $a7f2thbu05s_PriceLNCountry,
            $a7f2debu10s_PcsLNCountry,
            $a7f2debu10s_PriceLNCountry,
            $a7f2exbu11s_PcsLNCountry,
            $a7f2exbu11s_PriceLNCountry,
            $a7f2twbu04s_PcsLNCountry,
            $a7f2twbu04s_PriceLNCountry,
            $a7f2twbu07s_PcsLNCountry,
            $a7f2twbu07s_PriceLNCountry,
            $a7f2cebu10s_PcsLNCountry,
            $a7f2cebu10s_PriceLNCountry,
            $a8f1fgbu02s_PcsLNCountry,
            $a8f1fgbu02s_PriceLNCountry,
            $a8f2fgbu10s_PcsLNCountry,
            $a8f2fgbu10s_PriceLNCountry,
            $a8f2thbu05s_PcsLNCountry,
            $a8f2thbu05s_PriceLNCountry,
            $a8f2debu10s_PcsLNCountry,
            $a8f2debu10s_PriceLNCountry,
            $a8f2exbu11s_PcsLNCountry,
            $a8f2exbu11s_PriceLNCountry,
            $a8f2twbu04s_PcsLNCountry,
            $a8f2twbu04s_PriceLNCountry,
            $a8f2twbu07s_PcsLNCountry,
            $a8f2twbu07s_PriceLNCountry,
            $a8f2cebu10s_PcsLNCountry,
            $a8f2cebu10s_PriceLNCountry,
            $DC1_PcsLNCountry,
            $DC1_PriceLNCountry,
            $DCP_PcsLNCountry,
            $DCP_PriceLNCountry,
            $DCY_PcsLNCountry,
            $DCY_PriceLNCountry,
            $DEX_PcsLNCountry,
            $DEX_PriceLNCountry,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterSNTCountry,
            $Price_AfterSNTCountry,
            $Pcs_AfterSNTCountry,
            $Price_AfterSNTCountry,
            $Po_PcsSNTCountry,
            $Po_PriceSNTCountry,
            $Neg_PcsSNTCountry,
            $Neg_PriceSNTCountry,
            $BackChange_PcsSNTCountry,
            $BackChange_PriceSNTCountry,
            $Purchase_PcsSNTCountry,
            $Purchase_PriceSNTCountry,
            $ReciveTranfer_PcsSNTCountry,
            $ReciveTranfer_PriceSNTCountry,
            $ReturnItem_PCSSNTCountry,
            $ReturnItem_PriceSNTCountry,
            $AllIn_PcsSNTCountry,
            $AllIn_PriceSNTCountry,
            $SendSale_PcsSNTCountry,
            $SendSale_PriceSNTCountry,
            $ReciveTranOut_PcsSNTCountry,
            $ReciveTranOut_PriceSNTCountry,
            $ReturnStore_PcsSNTCountry,
            $ReturnStore_PriceSNTCountry,
            $AllOut_PcsSNTCountry,
            $AllOut_PriceSNTCountry,
            $Calculate_PcsSNTCountry,
            $Calculate_PriceSNTCountry,
            $NewCalculate_PcsSNTCountry,
            $NewCalculate_PriceSNTCountry,
            $Diff_PcsSNTCountry,
            $Diff_PriceSNTCountry,
            $NewTotal_PcsSNTCountry,
            $NewTotal_PriceSNTCountry,
            $NewTotalDiff_NavSNTCountry,
            $NewTotalDiff_CalSNTCountry,
            $a7f1fgbu02s_PcsSNTCountry,
            $a7f1fgbu02s_PriceSNTCountry,
            $a7f2fgbu10s_PcsSNTCountry,
            $a7f2fgbu10s_PriceSNTCountry,
            $a7f2thbu05s_PcsSNTCountry,
            $a7f2thbu05s_PriceSNTCountry,
            $a7f2debu10s_PcsSNTCountry,
            $a7f2debu10s_PriceSNTCountry,
            $a7f2exbu11s_PcsSNTCountry,
            $a7f2exbu11s_PriceSNTCountry,
            $a7f2twbu04s_PcsSNTCountry,
            $a7f2twbu04s_PriceSNTCountry,
            $a7f2twbu07s_PcsSNTCountry,
            $a7f2twbu07s_PriceSNTCountry,
            $a7f2cebu10s_PcsSNTCountry,
            $a7f2cebu10s_PriceSNTCountry,
            $a8f1fgbu02s_PcsSNTCountry,
            $a8f1fgbu02s_PriceSNTCountry,
            $a8f2fgbu10s_PcsSNTCountry,
            $a8f2fgbu10s_PriceSNTCountry,
            $a8f2thbu05s_PcsSNTCountry,
            $a8f2thbu05s_PriceSNTCountry,
            $a8f2debu10s_PcsSNTCountry,
            $a8f2debu10s_PriceSNTCountry,
            $a8f2exbu11s_PcsSNTCountry,
            $a8f2exbu11s_PriceSNTCountry,
            $a8f2twbu04s_PcsSNTCountry,
            $a8f2twbu04s_PriceSNTCountry,
            $a8f2twbu07s_PcsSNTCountry,
            $a8f2twbu07s_PriceSNTCountry,
            $a8f2cebu10s_PcsSNTCountry,
            $a8f2cebu10s_PriceSNTCountry,
            $DC1_PcsSNTCountry,
            $DC1_PriceSNTCountry,
            $DCP_PcsSNTCountry,
            $DCP_PriceSNTCountry,
            $DCY_PcsSNTCountry,
            $DCY_PriceSNTCountry,
            $DEX_PcsSNTCountry,
            $DEX_PriceSNTCountry,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllCountry,
            $Price_AfterAllCountry,
            $Pcs_AfterAllCountry,
            $Price_AfterAllCountry,
            $Po_PcsAllCountry,
            $Po_PriceAllCountry,
            $Neg_PcsAllCountry,
            $Neg_PriceAllCountry,
            $BackChange_PcsAllCountry,
            $BackChange_PriceAllCountry,
            $Purchase_PcsAllCountry,
            $Purchase_PriceAllCountry,
            $ReciveTranfer_PcsAllCountry,
            $ReciveTranfer_PriceAllCountry,
            $ReturnItem_PCSAllCountry,
            $ReturnItem_PriceAllCountry,
            $AllIn_PcsAllCountry,
            $AllIn_PriceAllCountry,
            $SendSale_PcsAllCountry,
            $SendSale_PriceAllCountry,
            $ReciveTranOut_PcsAllCountry,
            $ReciveTranOut_PriceAllCountry,
            $ReturnStore_PcsAllCountry,
            $ReturnStore_PriceAllCountry,
            $AllOut_PcsAllCountry,
            $AllOut_PriceAllCountry,
            $Calculate_PcsAllCountry,
            $Calculate_PriceAllCountry,
            $NewCalculate_PcsAllCountry,
            $NewCalculate_PriceAllCountry,
            $Diff_PcsAllCountry,
            $Diff_PriceAllCountry,
            $NewTotal_PcsAllCountry,
            $NewTotal_PriceAllCountry,
            $NewTotalDiff_NavAllCountry,
            $NewTotalDiff_CalAllCountry,
            $a7f1fgbu02s_PcsAllCountry,
            $a7f1fgbu02s_PriceAllCountry,
            $a7f2fgbu10s_PcsAllCountry,
            $a7f2fgbu10s_PriceAllCountry,
            $a7f2thbu05s_PcsAllCountry,
            $a7f2thbu05s_PriceAllCountry,
            $a7f2debu10s_PcsAllCountry,
            $a7f2debu10s_PriceAllCountry,
            $a7f2exbu11s_PcsAllCountry,
            $a7f2exbu11s_PriceAllCountry,
            $a7f2twbu04s_PcsAllCountry,
            $a7f2twbu04s_PriceAllCountry,
            $a7f2twbu07s_PcsAllCountry,
            $a7f2twbu07s_PriceAllCountry,
            $a7f2cebu10s_PcsAllCountry,
            $a7f2cebu10s_PriceAllCountry,
            $a8f1fgbu02s_PcsAllCountry,
            $a8f1fgbu02s_PriceAllCountry,
            $a8f2fgbu10s_PcsAllCountry,
            $a8f2fgbu10s_PriceAllCountry,
            $a8f2thbu05s_PcsAllCountry,
            $a8f2thbu05s_PriceAllCountry,
            $a8f2debu10s_PcsAllCountry,
            $a8f2debu10s_PriceAllCountry,
            $a8f2exbu11s_PcsAllCountry,
            $a8f2exbu11s_PriceAllCountry,
            $a8f2twbu04s_PcsAllCountry,
            $a8f2twbu04s_PriceAllCountry,
            $a8f2twbu07s_PcsAllCountry,
            $a8f2twbu07s_PriceAllCountry,
            $a8f2cebu10s_PcsAllCountry,
            $a8f2cebu10s_PriceAllCountry,
            $DC1_PcsAllCountry,
            $DC1_PriceAllCountry,
            $DCP_PcsAllCountry,
            $DCP_PriceAllCountry,
            $DCY_PcsAllCountry,
            $DCY_PriceAllCountry,
            $DEX_PcsAllCountry,
            $DEX_PriceAllCountry,

            ///////////////////////////
            ///////////////////////////

            $Pcs_AfterAllTotal,
            $Price_AfterAllTotal,
            $Pcs_AfterAllTotal,
            $Price_AfterAllTotal,
            $Po_PcsAllTotal,
            $Po_PriceAllTotal,
            $Neg_PcsAllTotal,
            $Neg_PriceAllTotal,
            $BackChange_PcsAllTotal,
            $BackChange_PriceAllTotal,
            $Purchase_PcsAllTotal,
            $Purchase_PriceAllTotal,
            $ReciveTranfer_PcsAllTotal,
            $ReciveTranfer_PriceAllTotal,
            $ReturnItem_PCSAllTotal,
            $ReturnItem_PriceAllTotal,
            $AllIn_PcsAllTotal,
            $AllIn_PriceAllTotal,
            $SendSale_PcsAllTotal,
            $SendSale_PriceAllTotal,
            $ReciveTranOut_PcsAllTotal,
            $ReciveTranOut_PriceAllTotal,
            $ReturnStore_PcsAllTotal,
            $ReturnStore_PriceAllTotal,
            $AllOut_PcsAllTotal,
            $AllOut_PriceAllTotal,
            $Calculate_PcsAllTotal,
            $Calculate_PriceAllTotal,
            $NewCalculate_PcsAllTotal,
            $NewCalculate_PriceAllTotal,
            $Diff_PcsAllTotal,
            $Diff_PriceAllTotal,
            $NewTotal_PcsAllTotal,
            $NewTotal_PriceAllTotal,
            $NewTotalDiff_NavAllTotal,
            $NewTotalDiff_CalAllTotal,
            $a7f1fgbu02s_PcsAllTotal,
            $a7f1fgbu02s_PriceAllTotal,
            $a7f2fgbu10s_PcsAllTotal,
            $a7f2fgbu10s_PriceAllTotal,
            $a7f2thbu05s_PcsAllTotal,
            $a7f2thbu05s_PriceAllTotal,
            $a7f2debu10s_PcsAllTotal,
            $a7f2debu10s_PriceAllTotal,
            $a7f2exbu11s_PcsAllTotal,
            $a7f2exbu11s_PriceAllTotal,
            $a7f2twbu04s_PcsAllTotal,
            $a7f2twbu04s_PriceAllTotal,
            $a7f2twbu07s_PcsAllTotal,
            $a7f2twbu07s_PriceAllTotal,
            $a7f2cebu10s_PcsAllTotal,
            $a7f2cebu10s_PriceAllTotal,
            $a8f1fgbu02s_PcsAllTotal,
            $a8f1fgbu02s_PriceAllTotal,
            $a8f2fgbu10s_PcsAllTotal,
            $a8f2fgbu10s_PriceAllTotal,
            $a8f2thbu05s_PcsAllTotal,
            $a8f2thbu05s_PriceAllTotal,
            $a8f2debu10s_PcsAllTotal,
            $a8f2debu10s_PriceAllTotal,
            $a8f2exbu11s_PcsAllTotal,
            $a8f2exbu11s_PriceAllTotal,
            $a8f2twbu04s_PcsAllTotal,
            $a8f2twbu04s_PriceAllTotal,
            $a8f2twbu07s_PcsAllTotal,
            $a8f2twbu07s_PriceAllTotal,
            $a8f2cebu10s_PcsAllTotal,
            $a8f2cebu10s_PriceAllTotal,
            $DC1_PcsAllTotal,
            $DC1_PriceAllTotal,
            $DCP_PcsAllTotal,
            $DCP_PriceAllTotal,
            $DCY_PcsAllTotal,
            $DCY_PriceAllTotal,
            $DEX_PcsAllTotal,
            $DEX_PriceAllTotal,
        ];

        return response()->json($Data);
    }
}
