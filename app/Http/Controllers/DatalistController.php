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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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

        if ($No) {
            $ItemNo = DB::table('item_all')
                ->select(
                    'dataother.Customer',
                    'dataother.Category',
                    'item_all.No',
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
                ->where('dataother.Item No', 'LIKE', $No . '%')
                ->orderBy('item_all.No')
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

                if ($row->returncuses_Quantity == "") {
                    $returncusesQuantity = 0;
                } else {
                    $returncusesQuantity = floatval($row->returncuses_Quantity);
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
        }
    }

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
            ->where(function ($query) {
                $query->where('dataother.Item No', 'LIKE', 'SLN%')
                    ->orWhere('dataother.Item No', 'LIKE', 'LN%');
            })
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
            ->where(function ($query) {
                $query->where('dataother.Item No', 'LIKE', 'SFN%')
                    ->orWhere('dataother.Item No', 'LIKE', 'FN%');
            })
            ->get();


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

        $Pcs_After = 0;
        $Price_After = 0;
        $Po_Pcs = 0;
        $Po_Price = 0;
        $Neg_Pcs = 0;
        $Neg_Price = 0;
        $Purchase_Pcs = 0;
        $Purchase_Price = 0;
        $BackChange_Pcs = 0;
        $BackChange_Price = 0;
        $ReciveTranfer_Pcs = 0;
        $ReciveTranfer_Price = 0;
        $ReturnItem_PCS = 0;
        $ReturnItem_Price = 0;
        $AllIn_Pcs = 0;
        $AllIn_Price = 0;
        $SendSale_Pcs = 0;
        $SendSale_Price = 0;
        $ReciveTranOut_Pcs = 0;
        $ReciveTranOut_Price = 0;
        $ReturnStore_Pcs = 0;
        $ReturnStore_Price = 0;
        $AllOut_Pcs = 0;
        $AllOut_Price = 0;
        $Calculate_Pcs = 0;
        $Calculate_Price = 0;
        $NewCalculate_Pcs = 0;
        $NewCalculate_Price = 0;
        $Diff_Pcs = 0;
        $Diff_Price = 0;
        $NewTotal_Pcs = 0;
        $NewTotal_Price = 0;
        $NewTotalDiff_Nav = 0;
        $NewTotalDiff_Cal = 0;
        $a7f1fgbu02s_Pcs = 0;
        $a7f1fgbu02s_Price = 0;
        $a7f2fgbu10s_Pcs = 0;
        $a7f2fgbu10s_Price = 0;
        $a7f2thbu05s_Pcs = 0;
        $a7f2thbu05s_Price = 0;
        $a7f2debu10s_Pcs = 0;
        $a7f2debu10s_Price = 0;
        $a7f2exbu11s_Pcs = 0;
        $a7f2exbu11s_Price = 0;
        $a7f2twbu04s_Pcs = 0;
        $a7f2twbu04s_Price = 0;
        $a7f2twbu07s_Pcs = 0;
        $a7f2twbu07s_Price = 0;
        $a7f2cebu10s_Pcs = 0;
        $a7f2cebu10s_Price = 0;
        $a8f1fgbu02s_Pcs = 0;
        $a8f1fgbu02s_Price = 0;
        $a8f2fgbu10s_Pcs = 0;
        $a8f2fgbu10s_Price = 0;
        $a8f2thbu05s_Pcs = 0;
        $a8f2thbu05s_Price = 0;
        $a8f2debu10s_Pcs = 0;
        $a8f2debu10s_Price = 0;
        $a8f2exbu11s_Pcs = 0;
        $a8f2exbu11s_Price = 0;
        $a8f2twbu04s_Pcs = 0;
        $a8f2twbu04s_Price = 0;
        $a8f2twbu07s_Pcs = 0;
        $a8f2twbu07s_Price = 0;
        $a8f2cebu10s_Pcs = 0;
        $a8f2cebu10s_Price = 0;
        $DC1_Pcs = 0;
        $DC1_Price = 0;
        $DCP_Pcs = 0;
        $DCP_Price = 0;
        $DCY_Pcs = 0;
        $DCY_Price = 0;
        $DEX_Pcs = 0;
        $DEX_Price = 0;

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

        foreach ($ItemNoSFN as $SFN) {
            if ($SFN->PcsAfter > 0 && $SFN->PriceAfter > 0) {
                $Number = ($SFN->PriceAfter / $SFN->PcsAfter);
            }
            /////////////////////////////////////////////////// ยกมา ///////////////////////////////////////////
            $PCSAfter = $SFN->PcsAfter;
            $Pcs_After = $Pcs_After + $PCSAfter;

            $PriceAfter = $SFN->PriceAfter;
            $Price_After = $Price_After + $PriceAfter;

            /////////////////////////////////////////////////// ปรับเข้า ///////////////////////////////////////////
            $PoPcs = $SFN->Po_Quantity;
            $Po_Pcs = $Po_Pcs + $PoPcs;

            $PoPrice = $SFN->PriceAvg * $SFN->Po_Quantity;
            $Po_Price = $Po_Price + $PoPrice;

            /////////////////////////////////////////////////// ปรับออก ///////////////////////////////////////////
            $NegPcs = $SFN->Neg_Quantity;
            $Neg_Pcs = $Neg_Pcs + $NegPcs;


            $NegPrice = $Number * $SFN->Neg_Quantity;
            $Neg_Price = $Neg_Price + $NegPrice;

            /////////////////////////////////////////////////// หลังปรับ ///////////////////////////////////////////

            $BackChangePcs = $PCSAfter + $PoPcs + $NegPcs;
            $BackChange_Pcs = $BackChange_Pcs + $BackChangePcs;

            $BackChangePrice = $PriceAfter + $PoPrice + $NegPrice;
            $BackChange_Price = $BackChange_Price + $BackChangePrice;

            /////////////////////////////////////////////////// ซื้อเข้า ///////////////////////////////////////////
            $PurchasePcs = $SFN->purchase_Quantity;
            $Purchase_Pcs = $Purchase_Pcs + $PurchasePcs;

            $PurchasePrice = $SFN->purchase_Cost;
            $Purchase_Price = $Purchase_Price + $PurchasePrice;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranferPcs = $SFN->a7f1fgbu02s_Quantity + $SFN->a7f2fgbu10s_Quantity + $SFN->a7f2thbu05s_Quantity + $SFN->a7f2debu10s_Quantity + $SFN->a7f2exbu11s_Quantity + $SFN->a7f2twbu04s_Quantity + $SFN->a7f2twbu07s_Quantity + $SFN->a7f2cebu10s_Quantity;
            $ReciveTranfer_Pcs = $ReciveTranfer_Pcs + $ReciveTranferPcs;

            $ReciveTranferPrice = $ReciveTranferPcs * $SFN->PriceAvg;
            $ReciveTranfer_Price = $ReciveTranfer_Price + $ReciveTranferPrice;

            /////////////////////////////////////////////////// รับคืน ///////////////////////////////////////////

            $ReturnItemQuantity = $SFN->returncuses_Quantity;
            $ReturnItem_PCS = $ReturnItem_PCS + $ReturnItemQuantity;

            $ReturnItemPrice = $ReturnItemQuantity * $Number;
            $ReturnItem_Price = $ReturnItem_Price + $ReturnItemPrice;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllInPcs = $SFN->purchase_Quantity + $ReciveTranferPcs + $ReturnItemQuantity;
            $AllIn_Pcs = $AllIn_Pcs + $AllInPcs;

            $AllInPrice = $PurchasePrice + $ReciveTranferPrice + $ReturnItemPrice;
            $AllIn_Price = $AllIn_Price + $AllInPrice;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $SendSalePcs = $SFN->dc1_s_Quantity + $SFN->dcp_s_Quantity + $SFN->dcy_s_Quantity + $SFN->dex_s_Quantity;
            $SendSale_Pcs = $SendSale_Pcs + $SendSalePcs;

            if ($BackChangePcs > 0 && $AllInPcs > 0) {
                $SendSalePrice = (($AllInPrice + $BackChangePrice) / ($AllInPcs + $BackChangePcs)) * $SendSalePcs;
                $SendSale_Price = $SendSale_Price + $SendSalePrice;
            }

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReciveTranOutPcs = $SFN->a8f1fgbu02s_Quantity + $SFN->a8f2fgbu10s_Quantity + $SFN->a8f2thbu05s_Quantity + $SFN->a8f2debu10s_Quantity + $SFN->a8f2exbu11s_Quantity + $SFN->a8f2twbu04s_Quantity + $SFN->a8f2twbu07s_Quantity + $SFN->a8f2cebu10s_Quantity;
            $ReciveTranOut_Pcs = $ReciveTranOut_Pcs + $ReciveTranOutPcs;

            if ($AllInPcs > 0 && $BackChangePcs > 0) {
                $ReciveTranOutPrice = (($AllInPrice + $BackChangePrice) / ($AllInPcs + $BackChangePcs)) * $ReciveTranOutPcs;
                $ReciveTranOut_Price = $ReciveTranOut_Price + $ReciveTranOutPrice;
            }

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////

            $ReturnStorePcs = $SFN->returnitem_Quantity;
            $ReturnStore_Pcs = $ReturnStore_Pcs + $ReturnStorePcs;

            if ($AllInPcs > 0 && $BackChangePcs > 0) {
                $ReturnStorePrice = (($AllInPrice + $BackChangePrice) / ($AllInPcs + $BackChangePcs)) * $ReturnStorePcs;
                $ReturnStore_Price = $ReturnStore_Price + $ReturnStorePrice;
            }

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $AllOutPcs = $ReturnStorePcs + $ReciveTranOutPcs + $SendSalePcs;
            $AllOut_Pcs = $AllOut_Pcs + $AllOutPcs;

            $AllOutPrice = $SendSale_Price + $ReciveTranOut_Price + $ReturnStore_Price;
            $AllOut_Price = $AllOut_Price + $AllOutPrice;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $CalculatePcs = $BackChangePcs + $AllInPcs + $AllOutPcs;
            $Calculate_Pcs = $Calculate_Pcs + $CalculatePcs;

            $CalculatePrice = $BackChangePrice + $AllInPrice + $AllOutPrice;
            $Calculate_Price = $Calculate_Price + $CalculatePrice;

            /////////////////////////////////////////////////// รวม ///////////////////////////////////////////

            $NewCalculatePcs = $SFN->item_stock_Quantity;
            $NewCalculate_Pcs = $NewCalculate_Pcs + $NewCalculatePcs;

            $NewCalculatePrice = $SFN->item_stock_Amount;
            $NewCalculate_Price = $NewCalculate_Price + $NewCalculatePrice;

            /////////////////////////////////////////////////// ผลต่าง ///////////////////////////////////////////

            $DiffPcs = $NewCalculatePcs - $CalculatePcs;
            $Diff_Pcs = $Diff_Pcs + $DiffPcs;

            $DiffPrice = $NewCalculatePrice - $CalculatePrice;
            $Diff_Price = $Diff_Price + $DiffPrice;

            /////////////////////////////////////////////////// คงเหลือ มูลค่าใหม่ ///////////////////////////////////////////

            $NewTotalPcs = $CalculatePcs;
            $NewTotal_Pcs = $NewTotal_Pcs + $CalculatePcs;

            $NewTotalPrice = $NewTotalPcs * $SFN->PriceAvg;
            $NewTotal_Price = $NewTotal_Price + $NewTotalPrice;

            $NewTotalDiffNav = $NewTotalPrice - $NewCalculatePrice;
            $NewTotalDiff_Nav = $NewTotalDiff_Nav + $NewTotalDiffNav;

            $NewTotalDiffCal = $NewTotalPrice - $CalculatePrice;
            $NewTotalDiff_Cal = $NewTotalDiff_Cal + $NewTotalDiffCal;

            /////////////////////////////////////////////////// รับโอน ///////////////////////////////////////////


            $a7f1fgbu02sPcs = $SFN->a7f1fgbu02s_Quantity;
            $a7f1fgbu02s_Pcs = $a7f1fgbu02s_Pcs + $a7f1fgbu02sPcs;

            $a7f1fgbu02sPrice = $a7f1fgbu02sPcs * $SFN->PriceAvg;
            $a7f1fgbu02s_Price = $a7f1fgbu02s_Price + $a7f1fgbu02sPrice;

            $a7f2fgbu10sPcs = $SFN->a7f2fgbu10s_Quantity;
            $a7f2fgbu10s_Pcs = $a7f2fgbu10s_Pcs + $a7f2fgbu10sPcs;

            $a7f2fgbu10sPrice = $a7f2fgbu10sPcs * $SFN->PriceAvg;
            $a7f2fgbu10s_Price = $a7f2fgbu10s_Price + $a7f2fgbu10sPrice;

            $a7f2thbu05sPcs = $SFN->a7f2thbu05s_Quantity;
            $a7f2thbu05s_Pcs = $a7f2thbu05s_Pcs + $a7f2thbu05sPcs;

            $a7f2thbu05sPrice = $a7f2thbu05sPcs * $SFN->PriceAvg;
            $a7f2thbu05s_Price = $a7f2thbu05s_Price + $a7f2thbu05sPcs;

            $a7f2debu10sPcs = $SFN->a7f2debu10s_Quantity;
            $a7f2debu10s_Pcs = $a7f2debu10s_Pcs + $a7f2debu10sPcs;

            $a7f2debu10sPrice = $a7f2debu10sPcs * $SFN->PriceAvg;
            $a7f2debu10s_Price = $a7f2debu10s_Price + $a7f2debu10sPrice;

            $a7f2exbu11sPcs = $SFN->a7f2exbu11s_Quantity;
            $a7f2exbu11s_Pcs = $a7f2exbu11s_Pcs + $a7f2exbu11sPcs;

            $a7f2exbu11sPrice = $a7f2exbu11sPcs * $SFN->PriceAvg;
            $a7f2exbu11s_Price = $a7f2exbu11s_Price + $a7f2exbu11sPrice;

            $a7f2twbu04sPcs = $SFN->a7f2twbu04s_Quantity;
            $a7f2twbu04s_Pcs = $a7f2twbu04s_Pcs + $a7f2twbu04sPcs;

            $a7f2twbu04sPrice = $a7f2twbu04sPcs * $SFN->PriceAvg;
            $a7f2twbu04s_Price = $a7f2twbu04s_Price + $a7f2twbu04sPrice;

            $a7f2twbu07sPcs = $SFN->a7f2twbu07s_Quantity;
            $a7f2twbu07s_Pcs = $a7f2twbu07s_Pcs + $a7f2twbu07sPcs;

            $a7f2twbu07sPrice = $a7f2twbu07sPcs * $SFN->PriceAvg;
            $a7f2twbu07s_Price = $a7f2twbu07s_Price + $a7f2twbu07sPrice;

            $a7f2cebu10sPcs = $SFN->a7f2cebu10s_Quantity;
            $a7f2cebu10s_Pcs = $a7f2cebu10s_Pcs + $a7f2cebu10sPcs;

            $a7f2cebu10sPrice = $a7f2cebu10sPcs * $SFN->PriceAvg;
            $a7f2cebu10s_Price = $a7f2cebu10s_Price + $a7f2cebu10sPrice;

            /////////////////////////////////////////////////// โอนออก ///////////////////////////////////////////

            $a8f1fgbu02sPcs = $SFN->a8f1fgbu02s_Quantity;
            $a8f1fgbu02s_Pcs = $a8f1fgbu02s_Pcs + $a8f1fgbu02sPcs;

            $a8f1fgbu02sPrice = $a8f1fgbu02sPcs * $Number;
            $a8f1fgbu02s_Price = $a8f1fgbu02s_Price + $a8f1fgbu02sPrice;

            $a8f2fgbu10sPcs = $SFN->a8f2fgbu10s_Quantity;
            $a8f2fgbu10s_Pcs = $a8f2fgbu10s_Pcs + $a8f2fgbu10sPcs;

            $a8f2fgbu10sPrice = $a8f2fgbu10sPcs * $Number;
            $a8f2fgbu10s_Price = $a8f2fgbu10s_Price + $a8f2fgbu10sPrice;

            $a8f2thbu05sPcs = $SFN->a8f2thbu05s_Quantity;
            $a8f2thbu05s_Pcs = $a8f2thbu05s_Pcs + $a8f2thbu05sPcs;

            $a8f2thbu05sPrice = $a8f2thbu05sPcs * $Number;
            $a8f2thbu05s_Price = $a8f2thbu05s_Price + $a8f2thbu05sPcs;

            $a8f2debu10sPcs = $SFN->a8f2debu10s_Quantity;
            $a8f2debu10s_Pcs = $a8f2debu10s_Pcs + $a8f2debu10sPcs;

            $a8f2debu10sPrice = $a8f2debu10sPcs * $Number;
            $a8f2debu10s_Price = $a8f2debu10s_Price + $a8f2debu10sPrice;

            $a8f2exbu11sPcs = $SFN->a8f2exbu11s_Quantity;
            $a8f2exbu11s_Pcs = $a8f2exbu11s_Pcs + $a8f2exbu11sPcs;

            $a8f2exbu11sPrice = $a8f2exbu11sPcs * $Number;
            $a8f2exbu11s_Price = $a8f2exbu11s_Price + $a8f2exbu11sPrice;

            $a8f2twbu04sPcs = $SFN->a8f2twbu04s_Quantity;
            $a8f2twbu04s_Pcs = $a8f2twbu04s_Pcs + $a8f2twbu04sPcs;

            $a8f2twbu04sPrice = $a8f2twbu04sPcs * $Number;
            $a8f2twbu04s_Price = $a8f2twbu04s_Price + $a8f2twbu04sPrice;

            $a8f2twbu07sPcs = $SFN->a8f2twbu07s_Quantity;
            $a8f2twbu07s_Pcs = $a8f2twbu07s_Pcs + $a8f2twbu07sPcs;

            $a8f2twbu07sPrice = $a8f2twbu07sPcs * $Number;
            $a8f2twbu07s_Price = $a8f2twbu07s_Price + $a8f2twbu07sPrice;

            $a8f2cebu10sPcs = $SFN->a8f2cebu10s_Quantity;
            $a8f2cebu10s_Pcs = $a8f2cebu10s_Pcs + $a8f2cebu10sPcs;

            $a8f2cebu10sPrice = $a8f2cebu10sPcs * $Number;
            $a8f2cebu10s_Price = $a8f2cebu10s_Price + $a8f2cebu10sPrice;

            /////////////////////////////////////////////////// ส่งขาย ///////////////////////////////////////////

            $DC1Pcs = $SFN->dc1_s_Quantity;
            $DC1_Pcs = $DC1_Pcs + $DC1Pcs;

            $DC1Price = $DC1Pcs * $Number;
            $DC1_Price = $DC1_Price + $DC1Price;

            $DCPPcs = $SFN->dcp_s_Quantity;
            $DCP_Pcs = $DCP_Pcs + $DCPPcs;

            $DCPPrice = $DCPPcs * $Number;
            $DCP_Price = $DCP_Price + $DCPPrice;

            $DCYPcs = $SFN->dcy_s_Quantity;
            $DCY_Pcs = $DCY_Pcs + $DCYPcs;

            $DCYPrice = $DCYPcs * $Number;
            $DCY_Price = $DCY_Price + $DCYPrice;

            $DEXPcs = $SFN->dex_s_Quantity;
            $DEX_Pcs = $DEX_Pcs + $DEXPcs;

            $DEXPrice = $DEXPcs * $Number;
            $DEX_Price = $DEX_Price + $DEXPrice;

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
        $DCP_PcsAllProduct = $DCP_PcsMT + $DCP_PcsMT + $DCP_PcsLN + $DCP_PcsTW;
        $DCP_PriceAllProduct = $DCP_PriceMT + $DCP_PriceNT + $DCP_PriceLN + $DCP_PriceTW;
        $DCY_PcsAllProduct = $DCY_PcsMT + $DCY_PcsNT + $DCY_PcsLN + $DCY_PcsTW;
        $DCY_PriceAllProduct = $DCY_PriceMT + $DCY_PriceNT + $DCY_PriceLN + $DCY_PriceTW;
        $DEX_PcsAllProduct = $DEX_PcsMT + $DEX_PcsNT + $DEX_PcsLN + $DEX_PcsTW;
        $DEX_PriceAllProduct = $DEX_PriceMT + $DEX_PriceNT + $DEX_PriceLN + $DEX_PriceTW;

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

        //////////////////////////////////////////////////////////////////////////////////////////
        $Pcs_AfterSFN = number_format($Pcs_After, 0);
        $Price_AfterSFN = number_format($Price_After, 0);
        $Po_PcsSFN = number_format($Po_Pcs, 0);
        $Po_PriceSFN = number_format($Po_Price, 0);
        $Neg_PcsSFN = number_format($Neg_Pcs, 0);
        $Neg_PriceSFN = number_format($Neg_Price, 0);
        $BackChange_PcsSFN = number_format($BackChange_Pcs, 0);
        $BackChange_PriceSFN = number_format($BackChange_Price, 0);
        $Purchase_PcsSFN = number_format($Purchase_Pcs, 0);
        $Purchase_PriceSFN = number_format($Purchase_Price, 0);
        $ReciveTranfer_PcsSFN = number_format($ReciveTranfer_Pcs, 0);
        $ReciveTranfer_PriceSFN = number_format($ReciveTranfer_Price, 0);
        $ReturnItem_PCSSFN = number_format($ReturnItem_PCS, 0);
        $ReturnItem_PriceSFN = number_format($ReturnItem_Price, 0);
        $AllIn_PcsSFN = number_format($AllIn_Pcs, 0);
        $AllIn_PriceSFN = number_format($AllIn_Price, 0);
        $SendSale_PcsSFN = number_format($SendSale_Pcs, 0);
        $SendSale_PriceSFN = number_format($SendSale_Price, 0);
        $ReciveTranOut_PcsSFN = number_format($ReciveTranOut_Pcs, 0);
        $ReciveTranOut_PriceSFN = number_format($ReciveTranOut_Price, 0);
        $ReturnStore_PcsSFN = number_format($ReturnStore_Pcs, 0);
        $ReturnStore_PriceSFN = number_format($ReturnStore_Price, 0);
        $AllOut_PcsSFN = number_format($AllOut_Pcs, 0);
        $AllOut_PriceSFN = number_format($AllOut_Price, 0);
        $Calculate_PcsSFN = number_format($Calculate_Pcs, 0);
        $Calculate_PriceSFN = number_format($Calculate_Price, 0);
        $NewCalculate_PcsSFN = number_format($NewCalculate_Pcs, 0);
        $NewCalculate_PriceSFN = number_format($NewCalculate_Price, 0);
        $Diff_PcsSFN = number_format($Diff_Pcs, 0);
        $Diff_PriceSFN = number_format($Diff_Price, 0);
        $NewTotal_PcsSFN = number_format($NewTotal_Pcs, 0);
        $NewTotal_PriceSFN = number_format($NewTotal_Price, 0);
        $NewTotalDiff_NavSFN = number_format($NewTotalDiff_Nav, 0);
        $NewTotalDiff_CalSFN = number_format($NewTotalDiff_Cal, 0);
        $a7f1fgbu02s_PcsSFN = number_format($a7f1fgbu02s_Pcs, 0);
        $a7f1fgbu02s_PriceSFN = number_format($a7f1fgbu02s_Price, 0);
        $a7f2fgbu10s_PcsSFN = number_format($a7f2fgbu10s_Pcs, 0);
        $a7f2fgbu10s_PriceSFN = number_format($a7f2fgbu10s_Price, 0);
        $a7f2thbu05s_PcsSFN = number_format($a7f2thbu05s_Pcs, 0);
        $a7f2thbu05s_PriceSFN = number_format($a7f2thbu05s_Price, 0);
        $a7f2debu10s_PcsSFN = number_format($a7f2debu10s_Pcs, 0);
        $a7f2debu10s_PriceSFN = number_format($a7f2debu10s_Price, 0);
        $a7f2exbu11s_PcsSFN = number_format($a7f2exbu11s_Pcs, 0);
        $a7f2exbu11s_PriceSFN = number_format($a7f2exbu11s_Price, 0);
        $a7f2twbu04s_PcsSFN = number_format($a7f2twbu04s_Pcs, 0);
        $a7f2twbu04s_PriceSFN = number_format($a7f2twbu04s_Price, 0);
        $a7f2twbu07s_PcsSFN = number_format($a7f2twbu07s_Pcs, 0);
        $a7f2twbu07s_PriceSFN = number_format($a7f2twbu07s_Price, 0);
        $a7f2cebu10s_PcsSFN = number_format($a7f2cebu10s_Pcs, 0);
        $a7f2cebu10s_PriceSFN = number_format($a7f2cebu10s_Price, 0);
        $a8f1fgbu02s_PcsSFN = number_format($a8f1fgbu02s_Pcs, 0);
        $a8f1fgbu02s_PriceSFN = number_format($a8f1fgbu02s_Price, 0);
        $a8f2fgbu10s_PcsSFN = number_format($a8f2fgbu10s_Pcs, 0);
        $a8f2fgbu10s_PriceSFN = number_format($a8f2fgbu10s_Price, 0);
        $a8f2thbu05s_PcsSFN = number_format($a8f2thbu05s_Pcs, 0);
        $a8f2thbu05s_PriceSFN = number_format($a8f2thbu05s_Price, 0);
        $a8f2debu10s_PcsSFN = number_format($a8f2debu10s_Pcs, 0);
        $a8f2debu10s_PriceSFN = number_format($a8f2debu10s_Price, 0);
        $a8f2exbu11s_PcsSFN = number_format($a8f2exbu11s_Pcs, 0);
        $a8f2exbu11s_PriceSFN = number_format($a8f2exbu11s_Price, 0);
        $a8f2twbu04s_PcsSFN = number_format($a8f2twbu04s_Pcs, 0);
        $a8f2twbu04s_PriceSFN = number_format($a8f2twbu04s_Price, 0);
        $a8f2twbu07s_PcsSFN = number_format($a8f2twbu07s_Pcs, 0);
        $a8f2twbu07s_PriceSFN = number_format($a8f2twbu07s_Price, 0);
        $a8f2cebu10s_PcsSFN = number_format($a8f2cebu10s_Pcs, 0);
        $a8f2cebu10s_PriceSFN = number_format($a8f2cebu10s_Price, 0);
        $DC1_PcsSFN = number_format($DC1_Pcs, 0);
        $DC1_PriceSFN = number_format($DC1_Price, 0);
        $DCP_PcsSFN = number_format($DCP_Pcs, 0);
        $DCP_PriceSFN = number_format($DCP_Price, 0);
        $DCY_PcsSFN = number_format($DCY_Pcs, 0);
        $DCY_PriceSFN = number_format($DCY_Price, 0);
        $DEX_PcsSFN = number_format($DEX_Pcs, 0);
        $DEX_PriceSFN = number_format($DEX_Price, 0);

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
        ];

        return response()->json($Data);

    }
}