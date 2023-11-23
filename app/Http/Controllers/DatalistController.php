<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatalistController extends Controller
{
    public function dataAS(Request $request)
    {
        $SendData = $request->input('Data');
        $Page = $request->input('Page');

        if ($SendData === "") {
            return response()->json();
        } elseif ($SendData === "AS") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where(function ($query) {
                    $query->where('dataother.Item No', 'LIKE', 'AS%')
                        ->orWhere('dataother.Item No', 'LIKE', 'RM%')
                        ->orWhere('dataother.Item No', 'LIKE', 'RMT%');
                })
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = "";
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        } elseif ($SendData === "FN") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where(function ($query) {
                    $query->where('dataother.Item No', 'LIKE', 'FN%')
                        ->orWhere('dataother.Item No', 'LIKE', 'SFN%');
                })
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = floatval("");
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($Unit_Decha == 0) {
                    $Unit_Decha = "-";
                } else {
                    $Unit_Decha = number_format($Unit_Decha, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        } elseif ($SendData === "LN") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where(function ($query) {
                    $query->where('dataother.Item No', 'LIKE', 'LN%')
                        ->orWhere('dataother.Item No', 'LIKE', 'SLN%');
                })
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = floatval("");
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($Unit_Decha == 0) {
                    $Unit_Decha = "-";
                } else {
                    $Unit_Decha = number_format($Unit_Decha, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        } elseif ($SendData === "MT") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where(function ($query) {
                    $query->where('dataother.Item No', 'LIKE', 'MT%')
                        ->orWhere('dataother.Item No', 'LIKE', 'SMT%');
                })
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = floatval("");
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($Unit_Decha == 0) {
                    $Unit_Decha = "-";
                } else {
                    $Unit_Decha = number_format($Unit_Decha, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        } elseif ($SendData === "NT") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where('dataother.Item No', 'LIKE', 'NT%')
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = floatval("");
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Unit_Decha == 0) {
                    $Unit_Decha = "-";
                } else {
                    $Unit_Decha = number_format($Unit_Decha, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        } elseif ($SendData === "SNT") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->Where('dataother.Item No', 'LIKE', 'SNT%')
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = floatval("");
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($Unit_Decha == 0) {
                    $Unit_Decha = "-";
                } else {
                    $Unit_Decha = number_format($Unit_Decha, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        } elseif ($SendData === "TW") {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where(function ($query) {
                    $query->where('dataother.Item No', 'LIKE', 'TW%')
                        ->orWhere('dataother.Item No', 'LIKE', 'STW%');
                })
                ->orderBy('item_all.No')
                ->offset($Page)
                ->limit(1000)
                ->get();

            foreach ($ItemNo as $row) {
                $PcsAf = floatval($row->PcsAfter);
                $PriceAf = floatval($row->PriceAfter);
                if ($PcsAf > 0 && $PriceAf > 0) {
                    $Avg = $PriceAf / $PcsAf;
                } else {
                    $Avg = $row->PriceAvg;
                }

                if ($row->Po_Quantity == "") {
                    $PoQuantity = 0;
                    $PoPrice = 0;
                } else {
                    $PoQuantity = floatval($row->Po_Quantity);
                    $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->Neg_Quantity == "") {
                    $NegQuantity = 0;
                    $NegPrice = 0;
                } else {
                    $NegQuantity = floatval($row->Neg_Quantity);
                    $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
                }

                if ($row->purchase_Quantity == "") {
                    $purchaseQuantity = 0;
                    $purchasePrice = 0;
                } else {
                    $purchaseQuantity = floatval($row->purchase_Quantity);
                    $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
                }

                if ($row->returnitem_Quantity == "") {
                    $ReturnItemQuantity = 0;
                } else {
                    $ReturnItemQuantity = floatval($row->returnitem_Quantity);
                }

                if ($row->item_stock_Quantity == "") {
                    $item_stockQuantity = 0;
                    $item_stockPrice = 0;
                } else {
                    $item_stockQuantity = floatval($row->item_stock_Quantity);
                    $item_stockPrice = floatval($row->item_stock_Amount);
                }

                if ($row->a7f1fgbu02s_Quantity == "") {
                    $a7f1fgbu02sQuantity = 0;
                } else {
                    $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
                }

                if ($row->a7f2fgbu10s_Quantity == "") {
                    $a7f2fgbu10sQuantity = 0;
                } else {
                    $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
                }

                if ($row->a7f2thbu05s_Quantity == "") {
                    $a7f2thbu05sQuantity = 0;
                } else {
                    $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
                }

                if ($row->a7f2debu10s_Quantity == "") {
                    $a7f2debu10sQuantity = 0;
                } else {
                    $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
                }

                if ($row->a7f2exbu11s_Quantity == "") {
                    $a7f2exbu11sQuantity = 0;
                } else {
                    $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
                }

                if ($row->a7f2twbu04s_Quantity == "") {
                    $a7f2twbu04sQuantity = 0;
                } else {
                    $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
                }

                if ($row->a7f2twbu07s_Quantity == "") {
                    $a7f2twbu07sQuantity = 0;
                } else {
                    $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
                }

                if ($row->a7f2cebu10s_Quantity == "") {
                    $a7f2cebu10sQuantity = 0;
                } else {
                    $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
                }

                if ($row->returncuses_Quantity == "") {
                    $ReturnQuantity = 0;
                } else {
                    $ReturnQuantity = floatval($row->returncuses_Quantity);
                }

                if ($row->a8f1fgbu02s_Quantity == "") {
                    $a8f1fgbu02sQuantity = 0;
                } else {
                    $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
                }

                if ($row->a8f2fgbu10s_Quantity == "") {
                    $a8f2fgbu10sQuantity = 0;
                } else {
                    $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
                }

                if ($row->a8f2thbu05s_Quantity == "") {
                    $a8f2thbu05sQuantity = 0;
                } else {
                    $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
                }

                if ($row->a8f2debu10s_Quantity == "") {
                    $a8f2debu10sQuantity = 0;
                } else {
                    $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
                }

                if ($row->a8f2exbu11s_Quantity == "") {
                    $a8f2exbu11sQuantity = 0;
                } else {
                    $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
                }

                if ($row->a8f2twbu04s_Quantity == "") {
                    $a8f2twbu04sQuantity = 0;
                } else {
                    $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
                }

                if ($row->a8f2twbu07s_Quantity == "") {
                    $a8f2twbu07sQuantity = 0;
                } else {
                    $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
                }

                if ($row->a8f2cebu10s_Quantity == "") {
                    $a8f2cebu10sQuantity = 0;
                } else {
                    $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
                }

                if ($row->dc1_s_Quantity == "") {
                    $DC1Quantity = 0;
                } else {
                    $DC1Quantity = floatval($row->dc1_s_Quantity);
                }

                if ($row->dcp_s_Quantity == "") {
                    $DCPQuantity = 0;
                } else {
                    $DCPQuantity = floatval($row->dcp_s_Quantity);
                }

                if ($row->dcy_s_Quantity == "") {
                    $DCYQuantity = 0;
                } else {
                    $DCYQuantity = floatval($row->dcy_s_Quantity);
                }

                if ($row->dex_s_Quantity == "") {
                    $DEXQuantity = 0;
                } else {
                    $DEXQuantity = floatval($row->dex_s_Quantity);
                }

                $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
                $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
                $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
                $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
                $ReturnPrice = $ReturnQuantity * floatval($Avg);
                $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
                $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
                $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
                $denominator = $BackChagePcs + $TotalInPcs;
                $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

                if ($denominator > 0) {
                    $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
                } else {
                    $SendSalePrice = 0;
                }

                if ($denominator > 0) {
                    $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
                } else {
                    $ReciveTranOutPrice = 0;
                }

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
                $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

                if ($denominator > 0) {
                    $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
                } else {
                    $ReturnItemPrice = 0;
                }

                $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
                $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

                if ($TotalCalPcs > 0) {
                    $TotalAvg = $TotalCalPrice / $TotalCalPcs;
                } else {
                    $TotalAvg = floatval($row->PriceAvg);
                }

                if ($item_stockQuantity > 0) {
                    $CostUnit = $item_stockPrice / $item_stockQuantity;
                } else {
                    $CostUnit = 0;
                }

                $DiffPcs = $item_stockQuantity - $TotalCalPcs;
                $DiffPrice = $item_stockPrice - $TotalCalPrice;
                $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
                $DiffNav = $NewTotalPrice - $item_stockPrice;
                $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

                $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
                $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
                $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
                $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
                $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
                $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
                $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
                $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
                $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
                $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
                $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
                $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
                $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
                $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
                $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
                $DC1Price = $DC1Quantity * floatval($Avg);
                $DCPPrice = $DCPQuantity * floatval($Avg);
                $DCYPrice = $DCYQuantity * floatval($Avg);
                $DEXPrice = $DEXQuantity * floatval($Avg);

                $Customer = $row->Customer;
                $PI = "";
                $Item = "";
                $Category = $row->Category;
                $ItemNo = $row->No;
                $PriceAvg = floatval($Avg);
                $PcsAfter = floatval($row->PcsAfter);
                $PriceAfter = floatval($row->PriceAfter);
                $Po_Pcs = floatval($PoQuantity);
                $Po_Price = floatval($PoPrice);
                $Neg_Pcs = floatval($NegQuantity);
                $Neg_Price = floatval($NegPrice);
                $BackChage_Pcs = floatval($BackChagePcs);
                $BackChage_Price = floatval($BackChagePrice);
                $purchase_Pcs = floatval($purchaseQuantity);
                $purchase_Price = floatval($purchasePrice);
                $Recive_TranferPcs = floatval($ReciveTranferPcs);
                $Recive_TranferPrice = floatval($ReciveTranferPrice);
                $Return_QuantityPcs = floatval($ReturnQuantity);
                $Return_QuantityPrice = floatval($ReturnPrice);
                $TotalIn_Pcs = floatval($TotalInPcs);
                $TotalIn_Price = floatval($TotalInPrice);
                $SendSale_Pcs = floatval($SendSalePcs);
                $SendSale_Price = floatval($SendSalePrice);
                $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
                $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
                $Returnitem_Pcs = floatval($ReturnItemQuantity);
                $Returnitem_Price = floatval($ReturnItemPrice);
                $totalOut_Pcs = floatval($totalOutPcs);
                $totalOut_Price = floatval($totalOutPrice);
                $TotalCal_Pcs = floatval($TotalCalPcs);
                $TotalCal_Price = floatval($TotalCalPrice);
                $Total_Avg = floatval($TotalAvg);
                $TotalNav_Pcs = floatval($item_stockQuantity);
                $TotalNav_Price = floatval($item_stockPrice);
                $Cost_Unit = floatval($CostUnit);
                $Unit_Decha = floatval("");
                $Diff_Pcs = floatval($DiffPcs);
                $Diff_Price = floatval($DiffPrice);
                $NewTotal_Pcs = floatval($TotalCalPcs);
                $NewTotal_Price = floatval($NewTotalPrice);
                $Diff_Nav = floatval($DiffNav);
                $Diff_CalNav = floatval($DiffCalNav);
                $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
                $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
                $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
                $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
                $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
                $A7F2THBU05_Price = floatval($A7F2THBU05Price);
                $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
                $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
                $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
                $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
                $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
                $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
                $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
                $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
                $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
                $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
                $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
                $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
                $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
                $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
                $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
                $A8F2THBU05_Price = floatval($A8F2THBU05Price);
                $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
                $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
                $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
                $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
                $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
                $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
                $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
                $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
                $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
                $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
                $DC1_Pcs = floatval($DC1Quantity);
                $DC1_Price = floatval($DC1Price);
                $DCP_Pcs = floatval($DCPQuantity);
                $DCP_Price = floatval($DCPPrice);
                $DCY_Pcs = floatval($DCYQuantity);
                $DCY_Price = floatval($DCYPrice);
                $DEX_Pcs = floatval($DEXQuantity);
                $DEX_Price = floatval($DEXPrice);

                if ($PriceAvg == 0) {
                    $PriceAvg = "-";
                } else {
                    $PriceAvg = number_format($PriceAvg, 2);
                }

                if ($PcsAfter == 0) {
                    $PcsAfter = "-";
                } else {
                    $PcsAfter = number_format($PcsAfter, 2);
                }

                if ($PriceAfter == 0) {
                    $PriceAfter = "-";
                } else {
                    $PriceAfter = number_format($PriceAfter, 2);
                }

                if ($Po_Pcs == 0) {
                    $Po_Pcs = "-";
                } else {
                    $Po_Pcs = number_format($Po_Pcs, 2);
                }

                if ($Po_Price == 0) {
                    $Po_Price = "-";
                } else {
                    $Po_Price = number_format($Po_Price, 2);
                }

                if ($Neg_Pcs == 0) {
                    $Neg_Pcs = "-";
                } else {
                    $Neg_Pcs = number_format($Neg_Pcs, 2);
                }

                if ($Neg_Price == 0) {
                    $Neg_Price = "-";
                } else {
                    $Neg_Price = number_format($Neg_Price, 2);
                }

                if ($BackChage_Pcs == 0) {
                    $BackChage_Pcs = "-";
                } else {
                    $BackChage_Pcs = number_format($BackChage_Pcs, 2);
                }

                if ($BackChage_Price == 0) {
                    $BackChage_Price = "-";
                } else {
                    $BackChage_Price = number_format($BackChage_Price, 2);
                }

                if ($purchase_Pcs == 0) {
                    $purchase_Pcs = "-";
                } else {
                    $purchase_Pcs = number_format($purchase_Pcs, 2);
                }

                if ($purchase_Price == 0) {
                    $purchase_Price = "-";
                } else {
                    $purchase_Price = number_format($purchase_Price, 2);
                }

                if ($Recive_TranferPcs == 0) {
                    $Recive_TranferPcs = "-";
                } else {
                    $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
                }

                if ($Recive_TranferPrice == 0) {
                    $Recive_TranferPrice = "-";
                } else {
                    $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
                }

                if ($Return_QuantityPcs == 0) {
                    $Return_QuantityPcs = "-";
                } else {
                    $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
                }

                if ($Return_QuantityPrice == 0) {
                    $Return_QuantityPrice = "-";
                } else {
                    $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
                }

                if ($TotalIn_Pcs == 0) {
                    $TotalIn_Pcs = "-";
                } else {
                    $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
                }

                if ($TotalIn_Price == 0) {
                    $TotalIn_Price = "-";
                } else {
                    $TotalIn_Price = number_format($TotalIn_Price, 2);
                }

                if ($SendSale_Pcs == 0) {
                    $SendSale_Pcs = "-";
                } else {
                    $SendSale_Pcs = number_format($SendSale_Pcs, 2);
                }

                if ($SendSale_Price == 0) {
                    $SendSale_Price = "-";
                } else {
                    $SendSale_Price = number_format($SendSale_Price, 2);
                }

                if ($ReciveTranOut_Pcs == 0) {
                    $ReciveTranOut_Pcs = "-";
                } else {
                    $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
                }

                if ($ReciveTranOut_Price == 0) {
                    $ReciveTranOut_Price = "-";
                } else {
                    $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
                }

                if ($Returnitem_Pcs == 0) {
                    $Returnitem_Pcs = "-";
                } else {
                    $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
                }

                if ($Returnitem_Price == 0) {
                    $Returnitem_Price = "-";
                } else {
                    $Returnitem_Price = number_format($Returnitem_Price, 2);
                }

                if ($totalOut_Pcs == 0) {
                    $totalOut_Pcs = "-";
                } else {
                    $totalOut_Pcs = number_format($totalOut_Pcs, 2);
                }

                if ($totalOut_Price == 0) {
                    $totalOut_Price = "-";
                } else {
                    $totalOut_Price = number_format($totalOut_Price, 2);
                }

                if ($TotalCal_Pcs == 0) {
                    $TotalCal_Pcs = "-";
                } else {
                    $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
                }

                if ($TotalCal_Price == 0) {
                    $TotalCal_Price = "-";
                } else {
                    $TotalCal_Price = number_format($TotalCal_Price, 2);
                }

                if ($Total_Avg == 0) {
                    $Total_Avg = "-";
                } else {
                    $Total_Avg = number_format($Total_Avg, 2);
                }

                if ($TotalNav_Pcs == 0) {
                    $TotalNav_Pcs = "-";
                } else {
                    $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
                }

                if ($TotalNav_Price == 0) {
                    $TotalNav_Price = "-";
                } else {
                    $TotalNav_Price = number_format($TotalNav_Price, 2);
                }

                if ($Cost_Unit == 0) {
                    $Cost_Unit = "-";
                } else {
                    $Cost_Unit = number_format($Cost_Unit, 2);
                }

                if ($Unit_Decha == 0) {
                    $Unit_Decha = "-";
                } else {
                    $Unit_Decha = number_format($Unit_Decha, 2);
                }

                if ($Diff_Pcs == 0) {
                    $Diff_Pcs = "-";
                } else {
                    $Diff_Pcs = number_format($Diff_Pcs, 2);
                }

                if ($Diff_Price == 0) {
                    $Diff_Price = "-";
                } else {
                    $Diff_Price = number_format($Diff_Price, 2);
                }

                if ($NewTotal_Pcs == 0) {
                    $NewTotal_Pcs = "-";
                } else {
                    $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
                }

                if ($NewTotal_Price == 0) {
                    $NewTotal_Price = "-";
                } else {
                    $NewTotal_Price = number_format($NewTotal_Price, 2);
                }

                if ($Diff_Nav == 0) {
                    $Diff_Nav = "-";
                } else {
                    $Diff_Nav = number_format($Diff_Nav, 2);
                }

                if ($Diff_CalNav == 0) {
                    $Diff_CalNav = "-";
                } else {
                    $Diff_CalNav = number_format($Diff_CalNav, 2);
                }

                if ($A7F1FGBU02_Pcs == 0) {
                    $A7F1FGBU02_Pcs = "-";
                } else {
                    $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
                }

                if ($A7F1FGBU02_Price == 0) {
                    $A7F1FGBU02_Price = "-";
                } else {
                    $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
                }

                if ($A7F2FGBU10_Pcs == 0) {
                    $A7F2FGBU10_Pcs = "-";
                } else {
                    $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
                }

                if ($A7F2FGBU10_Price == 0) {
                    $A7F2FGBU10_Price = "-";
                } else {
                    $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
                }

                if ($A7F2THBU05_Pcs == 0) {
                    $A7F2THBU05_Pcs = "-";
                } else {
                    $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
                }

                if ($A7F2THBU05_Price == 0) {
                    $A7F2THBU05_Price = "-";
                } else {
                    $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
                }

                if ($A7F2DEBU10_Pcs == 0) {
                    $A7F2DEBU10_Pcs = "-";
                } else {
                    $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
                }

                if ($A7F2DEBU10_Price == 0) {
                    $A7F2DEBU10_Price = "-";
                } else {
                    $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
                }

                if ($A7F2EXBU11_Pcs == 0) {
                    $A7F2EXBU11_Pcs = "-";
                } else {
                    $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
                }

                if ($A7F2EXBU11_Price == 0) {
                    $A7F2EXBU11_Price = "-";
                } else {
                    $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
                }

                if ($A7F2TWBU04_Pcs == 0) {
                    $A7F2TWBU04_Pcs = "-";
                } else {
                    $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
                }

                if ($A7F2TWBU04__Price == 0) {
                    $A7F2TWBU04__Price = "-";
                } else {
                    $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
                }

                if ($A7F2TWBU07_Pcs == 0) {
                    $A7F2TWBU07_Pcs = "-";
                } else {
                    $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
                }

                if ($A7F2TWBU07_Price == 0) {
                    $A7F2TWBU07_Price = "-";
                } else {
                    $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
                }

                if ($A7F2CEBU10_Pcs == 0) {
                    $A7F2CEBU10_Pcs = "-";
                } else {
                    $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
                }

                if ($A7F2CEBU10_Price == 0) {
                    $A7F2CEBU10_Price = "-";
                } else {
                    $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
                }

                if ($A8F1FGBU02_Pcs == 0) {
                    $A8F1FGBU02_Pcs = "-";
                } else {
                    $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
                }

                if ($A8F1FGBU02_Price == 0) {
                    $A8F1FGBU02_Price = "-";
                } else {
                    $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
                }

                if ($A8F2FGBU10_Pcs == 0) {
                    $A8F2FGBU10_Pcs = "-";
                } else {
                    $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
                }

                if ($A8F2FGBU10_Price == 0) {
                    $A8F2FGBU10_Price = "-";
                } else {
                    $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
                }

                if ($A8F2THBU05_Pcs == 0) {
                    $A8F2THBU05_Pcs = "-";
                } else {
                    $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
                }

                if ($A8F2THBU05_Price == 0) {
                    $A8F2THBU05_Price = "-";
                } else {
                    $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
                }

                if ($A8F2DEBU10_Pcs == 0) {
                    $A8F2DEBU10_Pcs = "-";
                } else {
                    $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
                }

                if ($A8F2DEBU10_Price == 0) {
                    $A8F2DEBU10_Price = "-";
                } else {
                    $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
                }

                if ($A8F2EXBU11_Pcs == 0) {
                    $A8F2EXBU11_Pcs = "-";
                } else {
                    $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
                }

                if ($A8F2EXBU11_Price == 0) {
                    $A8F2EXBU11_Price = "-";
                } else {
                    $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
                }

                if ($A8F2TWBU04_Pcs == 0) {
                    $A8F2TWBU04_Pcs = "-";
                } else {
                    $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
                }

                if ($A8F2TWBU04__Price == 0) {
                    $A8F2TWBU04__Price = "-";
                } else {
                    $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
                }

                if ($A8F2TWBU07_Pcs == 0) {
                    $A8F2TWBU07_Pcs = "-";
                } else {
                    $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
                }

                if ($A8F2TWBU07_Price == 0) {
                    $A8F2TWBU07_Price = "-";
                } else {
                    $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
                }

                if ($A8F2CEBU10_Pcs == 0) {
                    $A8F2CEBU10_Pcs = "-";
                } else {
                    $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
                }

                if ($A8F2CEBU10_Price == 0) {
                    $A8F2CEBU10_Price = "-";
                } else {
                    $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
                }

                if ($DC1_Pcs == 0) {
                    $DC1_Pcs = "-";
                } else {
                    $DC1_Pcs = number_format($DC1_Pcs, 2);
                }

                if ($DC1_Price == 0) {
                    $DC1_Price = "-";
                } else {
                    $DC1_Price = number_format($DC1_Price, 2);
                }

                if ($DCP_Pcs == 0) {
                    $DCP_Pcs = "-";
                } else {
                    $DCP_Pcs = number_format($DCP_Pcs, 2);
                }

                if ($DCP_Price == 0) {
                    $DCP_Price = "-";
                } else {
                    $DCP_Price = number_format($DCP_Price, 2);
                }

                if ($DCY_Pcs == 0) {
                    $DCY_Pcs = "-";
                } else {
                    $DCY_Pcs = number_format($DCY_Pcs, 2);
                }

                if ($DCY_Price == 0) {
                    $DCY_Price = "-";
                } else {
                    $DCY_Price = number_format($DCY_Price, 2);
                }

                if ($DEX_Pcs == 0) {
                    $DEX_Pcs = "-";
                } else {
                    $DEX_Pcs = number_format($DEX_Pcs, 2);
                }

                if ($DEX_Price == 0) {
                    $DEX_Price = "-";
                } else {
                    $DEX_Price = number_format($DEX_Price, 2);
                }

                $Data[] = [
                    $DataCustomer = $Customer,
                    $DataPI = $PI,
                    $DataItem = $Item,
                    $DataCategory = $Category,
                    $DataItemNo = $ItemNo,
                    $DataPriceAvg = $PriceAvg,
                    $DataPcsAfter = $PcsAfter,
                    $DataPriceAfter = $PriceAfter,
                    $DataPo_Pcs = $Po_Pcs,
                    $DataPo_Price = $Po_Price,
                    $DataNeg_Pcs = $Neg_Pcs,
                    $DataNeg_Price = $Neg_Price,
                    $DataBackChage_Pcs = $BackChage_Pcs,
                    $DataBackChage_Price = $BackChage_Price,
                    $Datapurchase_Pcs = $purchase_Pcs,
                    $Datapurchase_Price = $purchase_Price,
                    $DataRecive_TranferPcs = $Recive_TranferPcs,
                    $DataRecive_TranferPrice = $Recive_TranferPrice,
                    $DataReturn_QuantityPcs = $Return_QuantityPcs,
                    $DataReturn_QuantityPrice = $Return_QuantityPrice,
                    $DataTotalIn_Pcs = $TotalIn_Pcs,
                    $DataTotalIn_Price = $TotalIn_Price,
                    $DataSendSale_Pcs = $SendSale_Pcs,
                    $DataSendSale_Price = $SendSale_Price,
                    $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                    $DataReciveTranOut_Price = $ReciveTranOut_Price,
                    $DataReturnitem_Pcs = $Returnitem_Pcs,
                    $DataReturnitem_Price = $Returnitem_Price,
                    $DatatotalOut_Pcs = $totalOut_Pcs,
                    $DatatotalOut_Price = $totalOut_Price,
                    $DataTotalCal_Pcs = $TotalCal_Pcs,
                    $DataTotalCal_Price = $TotalCal_Price,
                    $DataTotal_Avg = $Total_Avg,
                    $DataTotalNav_Pcs = $TotalNav_Pcs,
                    $DataTotalNav_Price = $TotalNav_Price,
                    $DataCost_Unit = $Cost_Unit,
                    $DataUnit_Decha = $Unit_Decha,
                    $DataDiff_Pcs = $Diff_Pcs,
                    $DataDiff_Price = $Diff_Price,
                    $DataNewTotal_Pcs = $NewTotal_Pcs,
                    $DataNewTotal_Price = $NewTotal_Price,
                    $DataDiff_Nav = $Diff_Nav,
                    $DataDiff_CalNav = $Diff_CalNav,
                    $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                    $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                    $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                    $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                    $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                    $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                    $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                    $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                    $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                    $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                    $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                    $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                    $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                    $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                    $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                    $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                    $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                    $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                    $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                    $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                    $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                    $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                    $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                    $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                    $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                    $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                    $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                    $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                    $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                    $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                    $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                    $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                    $DataDC1_Pcs = $DC1_Pcs,
                    $DataDC1_Price = $DC1_Price,
                    $DataDCP_Pcs = $DCP_Pcs,
                    $DataDCP_Price = $DCP_Price,
                    $DataDCY_Pcs = $DCY_Pcs,
                    $DataDCY_Price = $DCY_Price,
                    $DataDEX_Pcs = $DEX_Pcs,
                    $DataDEX_Price = $DEX_Price,
                ];
            }
            return response()->json($Data);
        }
    }

    public function searchItemNo(Request $request)
    {
        $No = $request->input('ItemNo');

        $No = preg_replace('/\s+/', '', trim($No));

        if (strpos($No, '*') !== false) {

            $No = explode('*', $No);

            $ItemNo = DB::table('dataother')
                ->select('Item No as ItemNo', 'Customer', 'item_all.Unit Cost Decha as PriceAvg', 'PriceAfter', 'PcsAfter', 'Category')
                ->leftjoin('item_all', 'dataother.Item No', 'item_all.No')
                ->where('Item No', 'LIKE', $No[0] . '%')
                ->orderBy('Item No')
                ->limit(500)
                ->get();
        } elseif (strpos($No, '...') !== false) {

            $No = explode('...', $No);

            $ItemNo = DB::table('dataother')
                ->select('Item No as ItemNo', 'Customer', 'item_all.Unit Cost Decha as PriceAvg', 'PriceAfter', 'PcsAfter', 'Category')
                ->leftjoin('item_all', 'dataother.Item No', 'item_all.No')
                ->whereBetween('Item No', [$No[0], $No[1]])
                ->orderBy('Item No')
                ->get();
        } elseif ($No) {
            $ItemNo = DB::table('dataother')
                ->select('Item No as ItemNo', 'Customer', 'item_all.Unit Cost Decha as PriceAvg', 'PriceAfter', 'PcsAfter', 'Category')
                ->leftjoin('item_all', 'dataother.Item No', 'item_all.No')
                ->where('Item No', '=', $No)
                ->get();
        }

        if ($No == "") {
            return view('Page.Change');
        }
        return view('Page.Change', compact('ItemNo'));
    }

    public function searchDatalist(Request $request)
    {

        $ItemCode = $request->input('ItemNo');

        $ItemCode = preg_replace('/\s+/', '', trim($ItemCode));

        if (strpos($ItemCode, '*') !== false) {

            $ItemCode = explode('*', $ItemCode);

                $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where('dataother.Item No', 'LIKE', $ItemCode[0].'%')
                ->orderBy('item_all.No')
                ->limit(1000)
                ->get();

        } elseif (strpos($ItemCode, '...') !== false) {

            $ItemCode = explode('...', $ItemCode);

            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->whereBetween('dataother.Item No', [$ItemCode[0], $ItemCode[1]])
                ->orderBy('item_all.No')
                ->limit(1000)
                ->get();
        } elseif ($ItemCode) {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where('dataother.Item No', $ItemCode)
                ->orderBy('item_all.No')
                ->limit(1000)
                ->get();
        }

        foreach ($ItemNo as $row) {
            $PcsAf = floatval($row->PcsAfter);
            $PriceAf = floatval($row->PriceAfter);
            if ($PcsAf > 0 && $PriceAf > 0) {
                $Avg = $PriceAf / $PcsAf;
            } else {
                $Avg = $row->PriceAvg;
            }

            if ($row->Po_Quantity == "") {
                $PoQuantity = 0;
                $PoPrice = 0;
            } else {
                $PoQuantity = floatval($row->Po_Quantity);
                $PoPrice = floatval($row->Po_Quantity) * floatval($row->PriceAvg);
            }

            if ($row->Neg_Quantity == "") {
                $NegQuantity = 0;
                $NegPrice = 0;
            } else {
                $NegQuantity = floatval($row->Neg_Quantity);
                $NegPrice = floatval($row->Neg_Quantity) * floatval($Avg);
            }

            if ($row->purchase_Quantity == "") {
                $purchaseQuantity = 0;
                $purchasePrice = 0;
            } else {
                $purchaseQuantity = floatval($row->purchase_Quantity);
                $purchasePrice = floatval($row->purchase_Quantity) * floatval($row->PriceAvg);
            }

            if ($row->returnitem_Quantity == "") {
                $ReturnItemQuantity = 0;
            } else {
                $ReturnItemQuantity = floatval($row->returnitem_Quantity);
            }

            if ($row->item_stock_Quantity == "") {
                $item_stockQuantity = 0;
                $item_stockPrice = 0;
            } else {
                $item_stockQuantity = floatval($row->item_stock_Quantity);
                $item_stockPrice = floatval($row->item_stock_Amount);
            }

            if ($row->a7f1fgbu02s_Quantity == "") {
                $a7f1fgbu02sQuantity = 0;
            } else {
                $a7f1fgbu02sQuantity = floatval($row->a7f1fgbu02s_Quantity);
            }

            if ($row->a7f2fgbu10s_Quantity == "") {
                $a7f2fgbu10sQuantity = 0;
            } else {
                $a7f2fgbu10sQuantity = floatval($row->a7f2fgbu10s_Quantity);
            }

            if ($row->a7f2thbu05s_Quantity == "") {
                $a7f2thbu05sQuantity = 0;
            } else {
                $a7f2thbu05sQuantity = floatval($row->a7f2thbu05s_Quantity);
            }

            if ($row->a7f2debu10s_Quantity == "") {
                $a7f2debu10sQuantity = 0;
            } else {
                $a7f2debu10sQuantity = floatval($row->a7f2debu10s_Quantity);
            }

            if ($row->a7f2exbu11s_Quantity == "") {
                $a7f2exbu11sQuantity = 0;
            } else {
                $a7f2exbu11sQuantity = floatval($row->a7f2exbu11s_Quantity);
            }

            if ($row->a7f2twbu04s_Quantity == "") {
                $a7f2twbu04sQuantity = 0;
            } else {
                $a7f2twbu04sQuantity = floatval($row->a7f2twbu04s_Quantity);
            }

            if ($row->a7f2twbu07s_Quantity == "") {
                $a7f2twbu07sQuantity = 0;
            } else {
                $a7f2twbu07sQuantity = floatval($row->a7f2twbu07s_Quantity);
            }

            if ($row->a7f2cebu10s_Quantity == "") {
                $a7f2cebu10sQuantity = 0;
            } else {
                $a7f2cebu10sQuantity = floatval($row->a7f2cebu10s_Quantity);
            }

            if ($row->returncuses_Quantity == "") {
                $ReturnQuantity = 0;
            } else {
                $ReturnQuantity = floatval($row->returncuses_Quantity);
            }

            if ($row->a8f1fgbu02s_Quantity == "") {
                $a8f1fgbu02sQuantity = 0;
            } else {
                $a8f1fgbu02sQuantity = floatval($row->a8f1fgbu02s_Quantity);
            }

            if ($row->a8f2fgbu10s_Quantity == "") {
                $a8f2fgbu10sQuantity = 0;
            } else {
                $a8f2fgbu10sQuantity = floatval($row->a8f2fgbu10s_Quantity);
            }

            if ($row->a8f2thbu05s_Quantity == "") {
                $a8f2thbu05sQuantity = 0;
            } else {
                $a8f2thbu05sQuantity = floatval($row->a8f2thbu05s_Quantity);
            }

            if ($row->a8f2debu10s_Quantity == "") {
                $a8f2debu10sQuantity = 0;
            } else {
                $a8f2debu10sQuantity = floatval($row->a8f2debu10s_Quantity);
            }

            if ($row->a8f2exbu11s_Quantity == "") {
                $a8f2exbu11sQuantity = 0;
            } else {
                $a8f2exbu11sQuantity = floatval($row->a8f2exbu11s_Quantity);
            }

            if ($row->a8f2twbu04s_Quantity == "") {
                $a8f2twbu04sQuantity = 0;
            } else {
                $a8f2twbu04sQuantity = floatval($row->a8f2twbu04s_Quantity);
            }

            if ($row->a8f2twbu07s_Quantity == "") {
                $a8f2twbu07sQuantity = 0;
            } else {
                $a8f2twbu07sQuantity = floatval($row->a8f2twbu07s_Quantity);
            }

            if ($row->a8f2cebu10s_Quantity == "") {
                $a8f2cebu10sQuantity = 0;
            } else {
                $a8f2cebu10sQuantity = floatval($row->a8f2cebu10s_Quantity);
            }

            if ($row->dc1_s_Quantity == "") {
                $DC1Quantity = 0;
            } else {
                $DC1Quantity = floatval($row->dc1_s_Quantity);
            }

            if ($row->dcp_s_Quantity == "") {
                $DCPQuantity = 0;
            } else {
                $DCPQuantity = floatval($row->dcp_s_Quantity);
            }

            if ($row->dcy_s_Quantity == "") {
                $DCYQuantity = 0;
            } else {
                $DCYQuantity = floatval($row->dcy_s_Quantity);
            }

            if ($row->dex_s_Quantity == "") {
                $DEXQuantity = 0;
            } else {
                $DEXQuantity = floatval($row->dex_s_Quantity);
            }

            $BackChagePcs = floatval($row->PcsAfter) + floatval($row->Po_Quantity) + floatval($row->Neg_Quantity);
            $BackChagePrice = floatval($row->PriceAfter) + $PoPrice + $NegPrice;
            $ReciveTranferPcs = $a7f1fgbu02sQuantity + $a7f2fgbu10sQuantity + $a7f2thbu05sQuantity + $a7f2debu10sQuantity + $a7f2exbu11sQuantity + $a7f2twbu04sQuantity + $a7f2twbu07sQuantity + $a7f2cebu10sQuantity;
            $ReciveTranferPrice = $ReciveTranferPcs * floatval($row->PriceAvg);
            $ReturnPrice = $ReturnQuantity * floatval($Avg);
            $TotalInPcs = $purchaseQuantity + $ReciveTranferPcs + $ReturnQuantity;
            $TotalInPrice = $purchasePrice + $ReciveTranferPrice + $ReturnPrice;
            $SendSalePcs = $DC1Quantity + $DCPQuantity + $DCYQuantity + $DEXQuantity;
            $denominator = $BackChagePcs + $TotalInPcs;
            $ReciveTranOutPcs = $a8f1fgbu02sQuantity + $a8f2fgbu10sQuantity + $a8f2thbu05sQuantity + $a8f2debu10sQuantity + $a8f2exbu11sQuantity + $a8f2twbu04sQuantity + $a8f2twbu07sQuantity + $a8f2cebu10sQuantity;

            if ($denominator > 0) {
                $SendSalePrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $SendSalePcs;
            } else {
                $SendSalePrice = 0;
            }

            if ($denominator > 0) {
                $ReciveTranOutPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReciveTranOutPcs;
            } else {
                $ReciveTranOutPrice = 0;
            }

            if ($denominator > 0) {
                $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
            } else {
                $ReturnItemPrice = 0;
            }

            $totalOutPcs = $SendSalePcs + $ReciveTranOutPcs + $ReturnItemQuantity;
            $totalOutPrice = $SendSalePrice + $ReciveTranOutPrice + $ReturnItemPrice;

            if ($denominator > 0) {
                $ReturnItemPrice = (($BackChagePrice + $TotalInPrice) / $denominator) * $ReturnItemQuantity;
            } else {
                $ReturnItemPrice = 0;
            }

            $TotalCalPcs = $BackChagePcs + $TotalInPcs + $totalOutPcs;
            $TotalCalPrice = $BackChagePrice + $TotalInPrice + $totalOutPrice;

            if ($TotalCalPcs > 0) {
                $TotalAvg = $TotalCalPrice / $TotalCalPcs;
            } else {
                $TotalAvg = floatval($row->PriceAvg);
            }

            if ($item_stockQuantity > 0) {
                $CostUnit = $item_stockPrice / $item_stockQuantity;
            } else {
                $CostUnit = 0;
            }

            $DiffPcs = $item_stockQuantity - $TotalCalPcs;
            $DiffPrice = $item_stockPrice - $TotalCalPrice;
            $NewTotalPrice = $TotalCalPcs * floatval($row->PriceAvg);
            $DiffNav = $NewTotalPrice - $item_stockPrice;
            $DiffCalNav = $NewTotalPrice - $TotalCalPrice;

            $A7F1FGBU02Price = $a7f1fgbu02sQuantity * floatval($row->PriceAvg);
            $A7F2FGBU10Price = $a7f2fgbu10sQuantity * floatval($row->PriceAvg);
            $A7F2THBU05Price = $a7f2thbu05sQuantity * floatval($row->PriceAvg);
            $A7F2DEBU10Price = $a7f2debu10sQuantity * floatval($row->PriceAvg);
            $A7F2EXBU11Price = $a7f2exbu11sQuantity * floatval($row->PriceAvg);
            $A7F2TWBU04Price = $a7f2twbu04sQuantity * floatval($row->PriceAvg);
            $A7F2TWBU07Price = $a7f2twbu07sQuantity * floatval($row->PriceAvg);
            $A7F2CEBU10Price = $a7f2cebu10sQuantity * floatval($row->PriceAvg);
            $A8F1FGBU02Price = $a8f1fgbu02sQuantity * floatval($Avg);
            $A8F2FGBU10Price = $a8f2fgbu10sQuantity * floatval($Avg);
            $A8F2THBU05Price = $a8f2thbu05sQuantity * floatval($Avg);
            $A8F2DEBU10Price = $a8f2debu10sQuantity * floatval($Avg);
            $A8F2EXBU11Price = $a8f2exbu11sQuantity * floatval($Avg);
            $A8F2TWBU04Price = $a8f2twbu04sQuantity * floatval($Avg);
            $A8F2TWBU07Price = $a8f2twbu07sQuantity * floatval($Avg);
            $A8F2CEBU10Price = $a8f2cebu10sQuantity * floatval($Avg);
            $DC1Price = $DC1Quantity * floatval($Avg);
            $DCPPrice = $DCPQuantity * floatval($Avg);
            $DCYPrice = $DCYQuantity * floatval($Avg);
            $DEXPrice = $DEXQuantity * floatval($Avg);

            $Customer = $row->Customer;
            $PI = "";
            $Item = "";
            $Category = $row->Category;
            $ItemNo = $row->No;
            $PriceAvg = floatval($Avg);
            $PcsAfter = floatval($row->PcsAfter);
            $PriceAfter = floatval($row->PriceAfter);
            $Po_Pcs = floatval($PoQuantity);
            $Po_Price = floatval($PoPrice);
            $Neg_Pcs = floatval($NegQuantity);
            $Neg_Price = floatval($NegPrice);
            $BackChage_Pcs = floatval($BackChagePcs);
            $BackChage_Price = floatval($BackChagePrice);
            $purchase_Pcs = floatval($purchaseQuantity);
            $purchase_Price = floatval($purchasePrice);
            $Recive_TranferPcs = floatval($ReciveTranferPcs);
            $Recive_TranferPrice = floatval($ReciveTranferPrice);
            $Return_QuantityPcs = floatval($ReturnQuantity);
            $Return_QuantityPrice = floatval($ReturnPrice);
            $TotalIn_Pcs = floatval($TotalInPcs);
            $TotalIn_Price = floatval($TotalInPrice);
            $SendSale_Pcs = floatval($SendSalePcs);
            $SendSale_Price = floatval($SendSalePrice);
            $ReciveTranOut_Pcs = floatval($ReciveTranOutPcs);
            $ReciveTranOut_Price = floatval($ReciveTranOutPrice);
            $Returnitem_Pcs = floatval($ReturnItemQuantity);
            $Returnitem_Price = floatval($ReturnItemPrice);
            $totalOut_Pcs = floatval($totalOutPcs);
            $totalOut_Price = floatval($totalOutPrice);
            $TotalCal_Pcs = floatval($TotalCalPcs);
            $TotalCal_Price = floatval($TotalCalPrice);
            $Total_Avg = floatval($TotalAvg);
            $TotalNav_Pcs = floatval($item_stockQuantity);
            $TotalNav_Price = floatval($item_stockPrice);
            $Cost_Unit = floatval($CostUnit);
            $Unit_Decha = floatval("");
            $Diff_Pcs = floatval($DiffPcs);
            $Diff_Price = floatval($DiffPrice);
            $NewTotal_Pcs = floatval($TotalCalPcs);
            $NewTotal_Price = floatval($NewTotalPrice);
            $Diff_Nav = floatval($DiffNav);
            $Diff_CalNav = floatval($DiffCalNav);
            $A7F1FGBU02_Pcs = floatval($a7f1fgbu02sQuantity);
            $A7F1FGBU02_Price = floatval($A7F1FGBU02Price);
            $A7F2FGBU10_Pcs = floatval($a7f2fgbu10sQuantity);
            $A7F2FGBU10_Price = floatval($A7F2FGBU10Price);
            $A7F2THBU05_Pcs = floatval($a7f2thbu05sQuantity);
            $A7F2THBU05_Price = floatval($A7F2THBU05Price);
            $A7F2DEBU10_Pcs = floatval($a7f2debu10sQuantity);
            $A7F2DEBU10_Price = floatval($A7F2DEBU10Price);
            $A7F2EXBU11_Pcs = floatval($a7f2exbu11sQuantity);
            $A7F2EXBU11_Price = floatval($A7F2EXBU11Price);
            $A7F2TWBU04_Pcs = floatval($a7f2twbu04sQuantity);
            $A7F2TWBU04__Price = floatval($A7F2TWBU04Price);
            $A7F2TWBU07_Pcs = floatval($a7f2twbu07sQuantity);
            $A7F2TWBU07_Price = floatval($A7F2TWBU07Price);
            $A7F2CEBU10_Pcs = floatval($a7f2cebu10sQuantity);
            $A7F2CEBU10_Price = floatval($A7F2CEBU10Price);
            $A8F1FGBU02_Pcs = floatval($a8f1fgbu02sQuantity);
            $A8F1FGBU02_Price = floatval($A8F1FGBU02Price);
            $A8F2FGBU10_Pcs = floatval($a8f2fgbu10sQuantity);
            $A8F2FGBU10_Price = floatval($A8F2FGBU10Price);
            $A8F2THBU05_Pcs = floatval($a8f2thbu05sQuantity);
            $A8F2THBU05_Price = floatval($A8F2THBU05Price);
            $A8F2DEBU10_Pcs = floatval($a8f2debu10sQuantity);
            $A8F2DEBU10_Price = floatval($A8F2DEBU10Price);
            $A8F2EXBU11_Pcs = floatval($a8f2exbu11sQuantity);
            $A8F2EXBU11_Price = floatval($A8F2EXBU11Price);
            $A8F2TWBU04_Pcs = floatval($a8f2twbu04sQuantity);
            $A8F2TWBU04__Price = floatval($A8F2TWBU04Price);
            $A8F2TWBU07_Pcs = floatval($a8f2twbu07sQuantity);
            $A8F2TWBU07_Price = floatval($A8F2TWBU07Price);
            $A8F2CEBU10_Pcs = floatval($a8f2cebu10sQuantity);
            $A8F2CEBU10_Price = floatval($A8F2CEBU10Price);
            $DC1_Pcs = floatval($DC1Quantity);
            $DC1_Price = floatval($DC1Price);
            $DCP_Pcs = floatval($DCPQuantity);
            $DCP_Price = floatval($DCPPrice);
            $DCY_Pcs = floatval($DCYQuantity);
            $DCY_Price = floatval($DCYPrice);
            $DEX_Pcs = floatval($DEXQuantity);
            $DEX_Price = floatval($DEXPrice);

            if ($PriceAvg == 0) {
                $PriceAvg = "-";
            } else {
                $PriceAvg = number_format($PriceAvg, 2);
            }

            if ($PcsAfter == 0) {
                $PcsAfter = "-";
            } else {
                $PcsAfter = number_format($PcsAfter, 2);
            }

            if ($PriceAfter == 0) {
                $PriceAfter = "-";
            } else {
                $PriceAfter = number_format($PriceAfter, 2);
            }

            if ($Po_Pcs == 0) {
                $Po_Pcs = "-";
            } else {
                $Po_Pcs = number_format($Po_Pcs, 2);
            }

            if ($Po_Price == 0) {
                $Po_Price = "-";
            } else {
                $Po_Price = number_format($Po_Price, 2);
            }

            if ($Neg_Pcs == 0) {
                $Neg_Pcs = "-";
            } else {
                $Neg_Pcs = number_format($Neg_Pcs, 2);
            }

            if ($Neg_Price == 0) {
                $Neg_Price = "-";
            } else {
                $Neg_Price = number_format($Neg_Price, 2);
            }

            if ($BackChage_Pcs == 0) {
                $BackChage_Pcs = "-";
            } else {
                $BackChage_Pcs = number_format($BackChage_Pcs, 2);
            }

            if ($BackChage_Price == 0) {
                $BackChage_Price = "-";
            } else {
                $BackChage_Price = number_format($BackChage_Price, 2);
            }

            if ($purchase_Pcs == 0) {
                $purchase_Pcs = "-";
            } else {
                $purchase_Pcs = number_format($purchase_Pcs, 2);
            }

            if ($purchase_Price == 0) {
                $purchase_Price = "-";
            } else {
                $purchase_Price = number_format($purchase_Price, 2);
            }

            if ($Recive_TranferPcs == 0) {
                $Recive_TranferPcs = "-";
            } else {
                $Recive_TranferPcs = number_format($Recive_TranferPcs, 2);
            }

            if ($Recive_TranferPrice == 0) {
                $Recive_TranferPrice = "-";
            } else {
                $Recive_TranferPrice = number_format($Recive_TranferPrice, 2);
            }

            if ($Return_QuantityPcs == 0) {
                $Return_QuantityPcs = "-";
            } else {
                $Return_QuantityPcs = number_format($Return_QuantityPcs, 2);
            }

            if ($Return_QuantityPrice == 0) {
                $Return_QuantityPrice = "-";
            } else {
                $Return_QuantityPrice = number_format($Return_QuantityPrice, 2);
            }

            if ($TotalIn_Pcs == 0) {
                $TotalIn_Pcs = "-";
            } else {
                $TotalIn_Pcs = number_format($TotalIn_Pcs, 2);
            }

            if ($TotalIn_Price == 0) {
                $TotalIn_Price = "-";
            } else {
                $TotalIn_Price = number_format($TotalIn_Price, 2);
            }

            if ($SendSale_Pcs == 0) {
                $SendSale_Pcs = "-";
            } else {
                $SendSale_Pcs = number_format($SendSale_Pcs, 2);
            }

            if ($SendSale_Price == 0) {
                $SendSale_Price = "-";
            } else {
                $SendSale_Price = number_format($SendSale_Price, 2);
            }

            if ($ReciveTranOut_Pcs == 0) {
                $ReciveTranOut_Pcs = "-";
            } else {
                $ReciveTranOut_Pcs = number_format($ReciveTranOut_Pcs, 2);
            }

            if ($ReciveTranOut_Price == 0) {
                $ReciveTranOut_Price = "-";
            } else {
                $ReciveTranOut_Price = number_format($ReciveTranOut_Price, 2);
            }

            if ($Returnitem_Pcs == 0) {
                $Returnitem_Pcs = "-";
            } else {
                $Returnitem_Pcs = number_format($Returnitem_Pcs, 2);
            }

            if ($Returnitem_Price == 0) {
                $Returnitem_Price = "-";
            } else {
                $Returnitem_Price = number_format($Returnitem_Price, 2);
            }

            if ($totalOut_Pcs == 0) {
                $totalOut_Pcs = "-";
            } else {
                $totalOut_Pcs = number_format($totalOut_Pcs, 2);
            }

            if ($totalOut_Price == 0) {
                $totalOut_Price = "-";
            } else {
                $totalOut_Price = number_format($totalOut_Price, 2);
            }

            if ($TotalCal_Pcs == 0) {
                $TotalCal_Pcs = "-";
            } else {
                $TotalCal_Pcs = number_format($TotalCal_Pcs, 2);
            }

            if ($TotalCal_Price == 0) {
                $TotalCal_Price = "-";
            } else {
                $TotalCal_Price = number_format($TotalCal_Price, 2);
            }

            if ($Total_Avg == 0) {
                $Total_Avg = "-";
            } else {
                $Total_Avg = number_format($Total_Avg, 2);
            }

            if ($TotalNav_Pcs == 0) {
                $TotalNav_Pcs = "-";
            } else {
                $TotalNav_Pcs = number_format($TotalNav_Pcs, 2);
            }

            if ($TotalNav_Price == 0) {
                $TotalNav_Price = "-";
            } else {
                $TotalNav_Price = number_format($TotalNav_Price, 2);
            }

            if ($Cost_Unit == 0) {
                $Cost_Unit = "-";
            } else {
                $Cost_Unit = number_format($Cost_Unit, 2);
            }

            if ($Unit_Decha == 0) {
                $Unit_Decha = "-";
            } else {
                $Unit_Decha = number_format($Unit_Decha, 2);
            }

            if ($Diff_Pcs == 0) {
                $Diff_Pcs = "-";
            } else {
                $Diff_Pcs = number_format($Diff_Pcs, 2);
            }

            if ($Diff_Price == 0) {
                $Diff_Price = "-";
            } else {
                $Diff_Price = number_format($Diff_Price, 2);
            }

            if ($NewTotal_Pcs == 0) {
                $NewTotal_Pcs = "-";
            } else {
                $NewTotal_Pcs = number_format($NewTotal_Pcs, 2);
            }

            if ($NewTotal_Price == 0) {
                $NewTotal_Price = "-";
            } else {
                $NewTotal_Price = number_format($NewTotal_Price, 2);
            }

            if ($Diff_Nav == 0) {
                $Diff_Nav = "-";
            } else {
                $Diff_Nav = number_format($Diff_Nav, 2);
            }

            if ($Diff_CalNav == 0) {
                $Diff_CalNav = "-";
            } else {
                $Diff_CalNav = number_format($Diff_CalNav, 2);
            }

            if ($A7F1FGBU02_Pcs == 0) {
                $A7F1FGBU02_Pcs = "-";
            } else {
                $A7F1FGBU02_Pcs = number_format($A7F1FGBU02_Pcs, 2);
            }

            if ($A7F1FGBU02_Price == 0) {
                $A7F1FGBU02_Price = "-";
            } else {
                $A7F1FGBU02_Price = number_format($A7F1FGBU02_Price, 2);
            }

            if ($A7F2FGBU10_Pcs == 0) {
                $A7F2FGBU10_Pcs = "-";
            } else {
                $A7F2FGBU10_Pcs = number_format($A7F2FGBU10_Pcs, 2);
            }

            if ($A7F2FGBU10_Price == 0) {
                $A7F2FGBU10_Price = "-";
            } else {
                $A7F2FGBU10_Price = number_format($A7F2FGBU10_Price, 2);
            }

            if ($A7F2THBU05_Pcs == 0) {
                $A7F2THBU05_Pcs = "-";
            } else {
                $A7F2THBU05_Pcs = number_format($A7F2THBU05_Pcs, 2);
            }

            if ($A7F2THBU05_Price == 0) {
                $A7F2THBU05_Price = "-";
            } else {
                $A7F2THBU05_Price = number_format($A7F2THBU05_Price, 2);
            }

            if ($A7F2DEBU10_Pcs == 0) {
                $A7F2DEBU10_Pcs = "-";
            } else {
                $A7F2DEBU10_Pcs = number_format($A7F2DEBU10_Pcs, 2);
            }

            if ($A7F2DEBU10_Price == 0) {
                $A7F2DEBU10_Price = "-";
            } else {
                $A7F2DEBU10_Price = number_format($A7F2DEBU10_Price, 2);
            }

            if ($A7F2EXBU11_Pcs == 0) {
                $A7F2EXBU11_Pcs = "-";
            } else {
                $A7F2EXBU11_Pcs = number_format($A7F2EXBU11_Pcs, 2);
            }

            if ($A7F2EXBU11_Price == 0) {
                $A7F2EXBU11_Price = "-";
            } else {
                $A7F2EXBU11_Price = number_format($A7F2EXBU11_Price, 2);
            }

            if ($A7F2TWBU04_Pcs == 0) {
                $A7F2TWBU04_Pcs = "-";
            } else {
                $A7F2TWBU04_Pcs = number_format($A7F2TWBU04_Pcs, 2);
            }

            if ($A7F2TWBU04__Price == 0) {
                $A7F2TWBU04__Price = "-";
            } else {
                $A7F2TWBU04__Price = number_format($A7F2TWBU04__Price, 2);
            }

            if ($A7F2TWBU07_Pcs == 0) {
                $A7F2TWBU07_Pcs = "-";
            } else {
                $A7F2TWBU07_Pcs = number_format($A7F2TWBU07_Pcs, 2);
            }

            if ($A7F2TWBU07_Price == 0) {
                $A7F2TWBU07_Price = "-";
            } else {
                $A7F2TWBU07_Price = number_format($A7F2TWBU07_Price, 2);
            }

            if ($A7F2CEBU10_Pcs == 0) {
                $A7F2CEBU10_Pcs = "-";
            } else {
                $A7F2CEBU10_Pcs = number_format($A7F2CEBU10_Pcs, 2);
            }

            if ($A7F2CEBU10_Price == 0) {
                $A7F2CEBU10_Price = "-";
            } else {
                $A7F2CEBU10_Price = number_format($A7F2CEBU10_Price, 2);
            }

            if ($A8F1FGBU02_Pcs == 0) {
                $A8F1FGBU02_Pcs = "-";
            } else {
                $A8F1FGBU02_Pcs = number_format($A8F1FGBU02_Pcs, 2);
            }

            if ($A8F1FGBU02_Price == 0) {
                $A8F1FGBU02_Price = "-";
            } else {
                $A8F1FGBU02_Price = number_format($A8F1FGBU02_Price, 2);
            }

            if ($A8F2FGBU10_Pcs == 0) {
                $A8F2FGBU10_Pcs = "-";
            } else {
                $A8F2FGBU10_Pcs = number_format($A8F2FGBU10_Pcs, 2);
            }

            if ($A8F2FGBU10_Price == 0) {
                $A8F2FGBU10_Price = "-";
            } else {
                $A8F2FGBU10_Price = number_format($A8F2FGBU10_Price, 2);
            }

            if ($A8F2THBU05_Pcs == 0) {
                $A8F2THBU05_Pcs = "-";
            } else {
                $A8F2THBU05_Pcs = number_format($A8F2THBU05_Pcs, 2);
            }

            if ($A8F2THBU05_Price == 0) {
                $A8F2THBU05_Price = "-";
            } else {
                $A8F2THBU05_Price = number_format($A8F2THBU05_Price, 2);
            }

            if ($A8F2DEBU10_Pcs == 0) {
                $A8F2DEBU10_Pcs = "-";
            } else {
                $A8F2DEBU10_Pcs = number_format($A8F2DEBU10_Pcs, 2);
            }

            if ($A8F2DEBU10_Price == 0) {
                $A8F2DEBU10_Price = "-";
            } else {
                $A8F2DEBU10_Price = number_format($A8F2DEBU10_Price, 2);
            }

            if ($A8F2EXBU11_Pcs == 0) {
                $A8F2EXBU11_Pcs = "-";
            } else {
                $A8F2EXBU11_Pcs = number_format($A8F2EXBU11_Pcs, 2);
            }

            if ($A8F2EXBU11_Price == 0) {
                $A8F2EXBU11_Price = "-";
            } else {
                $A8F2EXBU11_Price = number_format($A8F2EXBU11_Price, 2);
            }

            if ($A8F2TWBU04_Pcs == 0) {
                $A8F2TWBU04_Pcs = "-";
            } else {
                $A8F2TWBU04_Pcs = number_format($A8F2TWBU04_Pcs, 2);
            }

            if ($A8F2TWBU04__Price == 0) {
                $A8F2TWBU04__Price = "-";
            } else {
                $A8F2TWBU04__Price = number_format($A8F2TWBU04__Price, 2);
            }

            if ($A8F2TWBU07_Pcs == 0) {
                $A8F2TWBU07_Pcs = "-";
            } else {
                $A8F2TWBU07_Pcs = number_format($A8F2TWBU07_Pcs, 2);
            }

            if ($A8F2TWBU07_Price == 0) {
                $A8F2TWBU07_Price = "-";
            } else {
                $A8F2TWBU07_Price = number_format($A8F2TWBU07_Price, 2);
            }

            if ($A8F2CEBU10_Pcs == 0) {
                $A8F2CEBU10_Pcs = "-";
            } else {
                $A8F2CEBU10_Pcs = number_format($A8F2CEBU10_Pcs, 2);
            }

            if ($A8F2CEBU10_Price == 0) {
                $A8F2CEBU10_Price = "-";
            } else {
                $A8F2CEBU10_Price = number_format($A8F2CEBU10_Price, 2);
            }

            if ($DC1_Pcs == 0) {
                $DC1_Pcs = "-";
            } else {
                $DC1_Pcs = number_format($DC1_Pcs, 2);
            }

            if ($DC1_Price == 0) {
                $DC1_Price = "-";
            } else {
                $DC1_Price = number_format($DC1_Price, 2);
            }

            if ($DCP_Pcs == 0) {
                $DCP_Pcs = "-";
            } else {
                $DCP_Pcs = number_format($DCP_Pcs, 2);
            }

            if ($DCP_Price == 0) {
                $DCP_Price = "-";
            } else {
                $DCP_Price = number_format($DCP_Price, 2);
            }

            if ($DCY_Pcs == 0) {
                $DCY_Pcs = "-";
            } else {
                $DCY_Pcs = number_format($DCY_Pcs, 2);
            }

            if ($DCY_Price == 0) {
                $DCY_Price = "-";
            } else {
                $DCY_Price = number_format($DCY_Price, 2);
            }

            if ($DEX_Pcs == 0) {
                $DEX_Pcs = "-";
            } else {
                $DEX_Pcs = number_format($DEX_Pcs, 2);
            }

            if ($DEX_Price == 0) {
                $DEX_Price = "-";
            } else {
                $DEX_Price = number_format($DEX_Price, 2);
            }
            $Data[] = [
                $DataCustomer = $Customer,
                $DataPI = $PI,
                $DataItem = $Item,
                $DataCategory = $Category,
                $DataItemNo = $ItemNo,
                $DataPriceAvg = $PriceAvg,
                $DataPcsAfter = $PcsAfter,
                $DataPriceAfter = $PriceAfter,
                $DataPo_Pcs = $Po_Pcs,
                $DataPo_Price = $Po_Price,
                $DataNeg_Pcs = $Neg_Pcs,
                $DataNeg_Price = $Neg_Price,
                $DataBackChage_Pcs = $BackChage_Pcs,
                $DataBackChage_Price = $BackChage_Price,
                $Datapurchase_Pcs = $purchase_Pcs,
                $Datapurchase_Price = $purchase_Price,
                $DataRecive_TranferPcs = $Recive_TranferPcs,
                $DataRecive_TranferPrice = $Recive_TranferPrice,
                $DataReturn_QuantityPcs = $Return_QuantityPcs,
                $DataReturn_QuantityPrice = $Return_QuantityPrice,
                $DataTotalIn_Pcs = $TotalIn_Pcs,
                $DataTotalIn_Price = $TotalIn_Price,
                $DataSendSale_Pcs = $SendSale_Pcs,
                $DataSendSale_Price = $SendSale_Price,
                $DataReciveTranOut_Pcs = $ReciveTranOut_Pcs,
                $DataReciveTranOut_Price = $ReciveTranOut_Price,
                $DataReturnitem_Pcs = $Returnitem_Pcs,
                $DataReturnitem_Price = $Returnitem_Price,
                $DatatotalOut_Pcs = $totalOut_Pcs,
                $DatatotalOut_Price = $totalOut_Price,
                $DataTotalCal_Pcs = $TotalCal_Pcs,
                $DataTotalCal_Price = $TotalCal_Price,
                $DataTotal_Avg = $Total_Avg,
                $DataTotalNav_Pcs = $TotalNav_Pcs,
                $DataTotalNav_Price = $TotalNav_Price,
                $DataCost_Unit = $Cost_Unit,
                $DataUnit_Decha = $Unit_Decha,
                $DataDiff_Pcs = $Diff_Pcs,
                $DataDiff_Price = $Diff_Price,
                $DataNewTotal_Pcs = $NewTotal_Pcs,
                $DataNewTotal_Price = $NewTotal_Price,
                $DataDiff_Nav = $Diff_Nav,
                $DataDiff_CalNav = $Diff_CalNav,
                $DataA7F1FGBU02_Pcs = $A7F1FGBU02_Pcs,
                $DataA7F1FGBU02_Price = $A7F1FGBU02_Price,
                $DataA7F2FGBU10_Pcs = $A7F2FGBU10_Pcs,
                $DataA7F2FGBU10_Price = $A7F2FGBU10_Price,
                $DataA7F2THBU05_Pcs = $A7F2THBU05_Pcs,
                $DataA7F2THBU05_Price = $A7F2THBU05_Price,
                $DataA7F2DEBU10_Pcs = $A7F2DEBU10_Pcs,
                $DataA7F2DEBU10_Price = $A7F2DEBU10_Price,
                $DataA7F2EXBU11_Pcs = $A7F2EXBU11_Pcs,
                $DataA7F2EXBU11_Price = $A7F2EXBU11_Price,
                $DataA7F2TWBU04_Pcs = $A7F2TWBU04_Pcs,
                $DataA7F2TWBU04__Price = $A7F2TWBU04__Price,
                $DataA7F2TWBU07_Pcs = $A7F2TWBU07_Pcs,
                $DataA7F2TWBU07_Price = $A7F2TWBU07_Price,
                $DataA7F2CEBU10_Pcs = $A7F2CEBU10_Pcs,
                $DataA7F2CEBU10_Price = $A7F2CEBU10_Price,
                $DataA8F1FGBU02_Pcs = $A8F1FGBU02_Pcs,
                $DataA8F1FGBU02_Price = $A8F1FGBU02_Price,
                $DataA8F2FGBU10_Pcs = $A8F2FGBU10_Pcs,
                $DataA8F2FGBU10_Price = $A8F2FGBU10_Price,
                $DataA8F2THBU05_Pcs = $A8F2THBU05_Pcs,
                $DataA8F2THBU05_Price = $A8F2THBU05_Price,
                $DataA8F2DEBU10_Pcs = $A8F2DEBU10_Pcs,
                $DataA8F2DEBU10_Price = $A8F2DEBU10_Price,
                $DataA8F2EXBU11_Pcs = $A8F2EXBU11_Pcs,
                $DataA8F2EXBU11_Price = $A8F2EXBU11_Price,
                $DataA8F2TWBU04_Pcs = $A8F2TWBU04_Pcs,
                $DataA8F2TWBU04__Price = $A8F2TWBU04__Price,
                $DataA8F2TWBU07_Pcs = $A8F2TWBU07_Pcs,
                $DataA8F2TWBU07_Price = $A8F2TWBU07_Price,
                $DataA8F2CEBU10_Pcs = $A8F2CEBU10_Pcs,
                $DataA8F2CEBU10_Price = $A8F2CEBU10_Price,
                $DataDC1_Pcs = $DC1_Pcs,
                $DataDC1_Price = $DC1_Price,
                $DataDCP_Pcs = $DCP_Pcs,
                $DataDCP_Price = $DCP_Price,
                $DataDCY_Pcs = $DCY_Pcs,
                $DataDCY_Price = $DCY_Price,
                $DataDEX_Pcs = $DEX_Pcs,
                $DataDEX_Price = $DEX_Price,
            ];
        }
        return response()->json($Data);
    }
}
