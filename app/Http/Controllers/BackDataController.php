<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Redirect;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BackDataController extends Controller
{
    public function backdata(Request $request)
    {
        $date = $request->input('date');

        $log_price = DB::table('log_price')->where('DateUpdate_Old', $date)->count();
        $item_all = DB::table('item_all_old')->where('DateUpdate_Old', $date)->count();
        $po = DB::table('po_old')->where('DateUpdate_Old', $date)->count();
        $neg = DB::table('neg_old')->where('DateUpdate_Old', $date)->count();
        $purchase = DB::table('purchase_old')->where('DateUpdate_Old', $date)->count();
        $returncuses = DB::table('returncuses_old')->where('DateUpdate_Old', $date)->count();
        $a71__f1_fg_bu02s = DB::table('a71__f1_fg_bu02s_old')->where('DateUpdate_Old', $date)->count();
        $a72__f2_fg_bu10s = DB::table('a72__f2_fg_bu10s_old')->where('DateUpdate_Old', $date)->count();
        $a73__f2_th_bu05s = DB::table('a73__f2_th_bu05s_old')->where('DateUpdate_Old', $date)->count();
        $a74__f2_de_bu10s = DB::table('a74__f2_de_bu10s_old')->where('DateUpdate_Old', $date)->count();
        $a75__f2_ex_bu11s = DB::table('a75__f2_ex_bu11s_old')->where('DateUpdate_Old', $date)->count();
        $a76__f2_tw_bu04s = DB::table('a76__f2_tw_bu04s_old')->where('DateUpdate_Old', $date)->count();
        $a77__f2_tw_bu07s = DB::table('a77__f2_tw_bu07s_old')->where('DateUpdate_Old', $date)->count();
        $a78__f2_ce_bu10s = DB::table('a78__f2_ce_bu10s_old')->where('DateUpdate_Old', $date)->count();
        $returnitem = DB::table('คืนของs_old')->where('DateUpdate_Old', $date)->count();
        $a81__f1_fg_bu02s = DB::table('a81__f1_fg_bu02s_old')->where('DateUpdate_Old', $date)->count();
        $a82__f2_fg_bu10s = DB::table('a82__f2_fg_bu10s_old')->where('DateUpdate_Old', $date)->count();
        $a83__f2_th_bu05s = DB::table('a83__f2_th_bu05s_old')->where('DateUpdate_Old', $date)->count();
        $a84__f2_de_bu10s = DB::table('a84__f2_de_bu10s_old')->where('DateUpdate_Old', $date)->count();
        $a85__f2_ex_bu11s = DB::table('a85__f2_ex_bu11s_old')->where('DateUpdate_Old', $date)->count();
        $a86__f2_tw_bu04s = DB::table('a86__f2_tw_bu04s_old')->where('DateUpdate_Old', $date)->count();
        $a87__f2_tw_bu07s = DB::table('a87__f2_tw_bu07s_old')->where('DateUpdate_Old', $date)->count();
        $a88__f2_ce_bu10s = DB::table('a88__f2_ce_bu10s_old')->where('DateUpdate_Old', $date)->count();
        $dc1_s = DB::table('dc1_s_old')->where('DateUpdate_Old', $date)->count();
        $dcp_s = DB::table('dcp_s_old')->where('DateUpdate_Old', $date)->count();
        $dcy_s = DB::table('dcy_s_old')->where('DateUpdate_Old', $date)->count();
        $dex_s = DB::table('dex_s_old')->where('DateUpdate_Old', $date)->count();
        $item_stock = DB::table('item_stock_old')->where('DateUpdate_Old', $date)->count();
		
		DB::table('dataother')->delete();
		DB::table('item_all')->delete();
		DB::table('po')->delete();
		DB::table('neg')->delete();
		DB::table('purchase')->delete();
		DB::table('returncuses')->delete();
		DB::table('a71__f1_fg_bu02s')->delete();
		DB::table('a72__f2_fg_bu10s')->delete();
		DB::table('a73__f2_th_bu05s')->delete();
		DB::table('a74__f2_de_bu10s')->delete();
		DB::table('a75__f2_ex_bu11s')->delete();
		DB::table('a76__f2_tw_bu04s')->delete();
		DB::table('a77__f2_tw_bu07s')->delete();
		DB::table('a78__f2_ce_bu10s')->delete();
		DB::table('คืนของs')->delete();
		DB::table('a81__f1_fg_bu02s')->delete();
		DB::table('a82__f2_fg_bu10s')->delete();
		DB::table('a83__f2_th_bu05s')->delete();
		DB::table('a84__f2_de_bu10s')->delete();
		DB::table('a85__f2_ex_bu11s')->delete();
		DB::table('a86__f2_tw_bu04s')->delete();
		DB::table('a87__f2_tw_bu07s')->delete();
		DB::table('a88__f2_ce_bu10s')->delete();
		DB::table('dc1_s')->delete();
		DB::table('dcp_s')->delete();
		DB::table('dcy_s')->delete();
		DB::table('dex_s')->delete();
		DB::table('item_stock')->delete();

        if ($log_price > 0) {
			
            $log_price_Data = DB::table('log_price')
            ->select(
                'Item No_Old as ItemNo', 'Customer_Old as Customer', 'PcsAfter_Old as PcsAfter',
                'PriceAfter_Old as PriceAfter', 'Category_Old as  Category',
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($log_price_Data as $row) {
                DB::table('dataother')->insert([
                    'Item No' => $row->ItemNo,
                    'Customer' => $row->Customer,
                    'PcsAfter' => $row->PcsAfter,
                    'PriceAfter' => $row->PriceAfter,
                    'Category' => $row->Category,
                ]);
            }
        }

        if ($item_all > 0) {
			
            $Item_all_data = DB::table('item_all_old')
            ->select(
                'No', 'Unit Cost Decha as Unit', 'Inventory Posting Group as Group', 'Full Description as Full',
                'Item Search Description 1 as item1', 'Item Search Description 2 as item2', 'Item Search Description 3 as item3'    
                )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($Item_all_data as $row) {
                DB::table('item_all')->insert([
                    'No' => $row->No,
                    'Unit Cost Decha' => $row->Unit,
                    'Inventory Posting Group' => $row->Group,
                    'Full Description' => $row->Full,
                    'Item Search Description 1' => $row->item1,
                    'Item Search Description 2' => $row->item2,
                    'Item Search Description 3' => $row->item3,
                ]);
            }
        }

        if ($po > 0) {
			
            $po_data = DB::table('po_old')
            ->select(
                'Item No as ItemNo','Global Dimension 2 Code as Global', 'Full Description as Full',
                'Unit of Measure Code as Unit', 'Quantity', 'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($po_data as $row) {
                DB::table('po')->insert([
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($neg  > 0) {
			
            $neg_data = DB::table('neg_old')
            ->select(
                'Item No as ItemNo','Global Dimension 2 Code as Global', 'Full Description as Full',
                'Unit of Measure Code as Unit', 'Quantity', 'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($neg_data as $row) {
                DB::table('neg')->insert([
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($purchase  > 0) {
			
            $purchase_data = DB::table('purchase_old')
            ->select(
                'Item No as ItemNo','Global Dimension 2 Code as Global', 'Full Description as Full',
                'Unit of Measure Code as Unit', 'Quantity', 'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($purchase_data as $row) {
                DB::table('purchase')->insert([
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($returncuses  > 0) {
			
            $returncuses_data = DB::table('returncuses_old')
            ->select(
                'Item No as ItemNo','Global Dimension 2 Code as Global', 'Full Description as Full',
                'Unit of Measure Code as Unit', 'Quantity', 'Cost Amount (Actual) as Cost', 'Sales Amount (Actual) as Sale'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($returncuses_data as $row) {
                DB::table('returncuses')->insert([
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                    'Sales Amount (Actual)' => $row->Sale,
                ]);
            }
        }

        if ($a71__f1_fg_bu02s  > 0) {
			
            $a71__f1_fg_bu02s_data = DB::table('a71__f1_fg_bu02s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a71__f1_fg_bu02s_data as $row) {
                DB::table('a71__f1_fg_bu02s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a72__f2_fg_bu10s  > 0) {
			
            $a72__f2_fg_bu10s_data = DB::table('a72__f2_fg_bu10s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a72__f2_fg_bu10s_data as $row) {
                DB::table('a72__f2_fg_bu10s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a73__f2_th_bu05s  > 0) {
			
            $a73__f2_th_bu05s_data = DB::table('a73__f2_th_bu05s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a73__f2_th_bu05s_data as $row) {
                DB::table('a73__f2_th_bu05s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a74__f2_de_bu10s  > 0) {
			
            $a74__f2_de_bu10s_data = DB::table('a74__f2_de_bu10s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a74__f2_de_bu10s_data as $row) {
                DB::table('a74__f2_de_bu10s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a75__f2_ex_bu11s  > 0) {
			
            $a75__f2_ex_bu11s_data = DB::table('a75__f2_ex_bu11s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a75__f2_ex_bu11s_data as $row) {
                DB::table('a75__f2_ex_bu11s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a76__f2_tw_bu04s  > 0) {
			
            $a76__f2_tw_bu04s_data = DB::table('a76__f2_tw_bu04s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a76__f2_tw_bu04s_data as $row) {
                DB::table('a76__f2_tw_bu04s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a77__f2_tw_bu07s  > 0) {
			
            $a77__f2_tw_bu07s_data = DB::table('a77__f2_tw_bu07s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a77__f2_tw_bu07s_data as $row) {
                DB::table('a77__f2_tw_bu07s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a78__f2_ce_bu10s  > 0) {
			
            $a78__f2_ce_bu10s_data = DB::table('a78__f2_ce_bu10s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a78__f2_ce_bu10s_data as $row) {
                DB::table('a78__f2_ce_bu10s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($returnitem  > 0) {
			
            $returnitem_data = DB::table('คืนของs_old')
            ->select(
                'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost', 'Purchase Amount (Actual) as Amount'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($returnitem_data as $row) {
                DB::table('คืนของs')->insert([
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                    'Purchase Amount (Actual)' => $row->Amount,
                ]);
            }
        }

        if ($a81__f1_fg_bu02s  > 0) {
			
            $a81__f1_fg_bu02s_data = DB::table('a81__f1_fg_bu02s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a81__f1_fg_bu02s_data as $row) {
                DB::table('a81__f1_fg_bu02s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a82__f2_fg_bu10s  > 0) {
			
            $a82__f2_fg_bu10s_data = DB::table('a82__f2_fg_bu10s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a82__f2_fg_bu10s_data as $row) {
                DB::table('a82__f2_fg_bu10s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a83__f2_th_bu05s  > 0) {
			
            $a83__f2_th_bu05s_data = DB::table('a83__f2_th_bu05s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a83__f2_th_bu05s_data as $row) {
                DB::table('a83__f2_th_bu05s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a84__f2_de_bu10s  > 0) {
			
            $a84__f2_de_bu10s_data = DB::table('a84__f2_de_bu10s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a84__f2_de_bu10s_data as $row) {
                DB::table('a84__f2_de_bu10s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a85__f2_ex_bu11s  > 0) {
			
            $a85__f2_ex_bu11s_data = DB::table('a85__f2_ex_bu11s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a85__f2_ex_bu11s_data as $row) {
                DB::table('a85__f2_ex_bu11s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a86__f2_tw_bu04s  > 0) {
			
            $a86__f2_tw_bu04s_data = DB::table('a86__f2_tw_bu04s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a86__f2_tw_bu04s_data as $row) {
                DB::table('a86__f2_tw_bu04s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a87__f2_tw_bu07s  > 0) {
			
            $a87__f2_tw_bu07s_data = DB::table('a87__f2_tw_bu07s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a87__f2_tw_bu07s_data as $row) {
                DB::table('a87__f2_tw_bu07s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($a88__f2_ce_bu10s  > 0) {
			
            $a88__f2_ce_bu10s_data = DB::table('a88__f2_ce_bu10s_old')
            ->select(
                'A', 'Location', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($a88__f2_ce_bu10s_data as $row) {
                DB::table('a88__f2_ce_bu10s')->insert([
                    'A' => $row->A,
                    'Location' => $row->Location,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                ]);
            }
        }

        if ($dc1_s  > 0) {
			
            $dc1_s_data = DB::table('dc1_s_old')
            ->select(
                'Item&Branch as Branch', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost', 'Sales Amount (Actual) as Sale'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($dc1_s_data as $row) {
                DB::table('dc1_s')->insert([
                    'Item&Branch' => $row->Branch,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                    'Sales Amount (Actual)' => $row->Sale,
                ]);
            }
        }

        if ($dcp_s  > 0) {
			
            $dcp_s_data = DB::table('dcp_s_old')
            ->select(
                'Item&Branch as Branch', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost', 'Sales Amount (Actual) as Sale'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($dcp_s_data as $row) {
                DB::table('dcp_s')->insert([
                    'Item&Branch' => $row->Branch,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                    'Sales Amount (Actual)' => $row->Sale,
                ]);
            }
        }

        if ($dcy_s  > 0) {
			
            $dcy_s_data = DB::table('dcy_s_old')
            ->select(
                'Item&Branch as Branch', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost', 'Sales Amount (Actual) as Sale'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($dcy_s_data as $row) {
                DB::table('dcy_s')->insert([
                    'Item&Branch' => $row->Branch,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                    'Sales Amount (Actual)' => $row->Sale,
                ]);
            }
        }

        if ($dex_s  > 0) {
			
            $dex_s_data = DB::table('dex_s_old')
            ->select(
                'Item&Branch as Branch', 'Item No as ItemNo', 'Global Dimension 2 Code as Global',
                'Full Description as Full', 'Unit of Measure Code as Unit', 'Quantity',
                'Cost Amount (Actual) as Cost', 'Sales Amount (Actual) as Sale'
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($dex_s_data as $row) {
                DB::table('dex_s')->insert([
                    'Item&Branch' => $row->Branch,
                    'Item No' => $row->ItemNo,
                    'Global Dimension 2 Code' => $row->Global,
                    'Full Description' => $row->Full,
                    'Unit of Measure Code' => $row->Unit,
                    'Quantity' => $row->Quantity,
                    'Cost Amount (Actual)' => $row->Cost,
                    'Sales Amount (Actual)' => $row->Sale,
                ]);
            }
        }

        if ($item_stock > 0) {
			
            $item_stock_data = DB::table('item_stock_old')
            ->select(
                'item no as ItemNo', 'goodname1', 'branchcode', 'groupname', 'Quantity',
                'Cost per Unit as Cost', 'Amount', 'Estimate Amount as estimate_amount', 'Inventory',
                'Last Stock-In as last_stock_in', 'Entry Type as entry_type',
            )
            ->where('DateUpdate_Old', $date)
            ->get();

            foreach ($item_stock_data as $row) {
                DB::table('item_stock')->insert([
                    'Item No' => $row->ItemNo,
                    'goodname1' => $row->goodname1,
                    'branchcode' => $row->branchcode,
                    'groupname' => $row->groupname,
                    'Quantity' => $row->Quantity,
                    'Cost per Unit' => $row->Cost,
                    'Amount' => $row->Amount,
                    'Estimate Amount' => $row->estimate_amount,
                    'Inventory' => $row->Inventory,
                    'Last Stock-In' => $row->last_stock_in,
                    'Entry Type' => $row->entry_type,
                ]);
            }
        }
		
		if($date){
			
			$dateComponents = explode('/', $date);
			
			$m_after = $dateComponents[0];
			$y_after = $dateComponents[1];
			
			$d_after = cal_days_in_month(CAL_GREGORIAN, $m_after, $y_after);
			
			switch ($m_after) {
            case 1:
                $m_after = 'ม.ค.';
                break;
            case 2:
                $m_after = 'ก.พ.';
                break;
            case 3:
                $m_after = 'มี.ค.';
                break;
            case 4:
                $m_after = 'เม.ย.';
                break;
            case 5:
                $m_after = 'พ.ค.';
                break;
            case 6:
                $m_after = 'มิ.ย';
                break;
            case 7:
                $m_after = 'ก.ค.';
                break;
            case 8:
                $m_after = 'ส.ค.';
                break;
            case 9:
                $m_after = 'ก.ย.';
                break;
            case 10:
                $m_after = 'ต.ค.';
                break;
            case 11:
                $m_after = 'พ.ย.';
                break;
            case 12:
                $m_after = 'ธ.ค.';
                break;
        }
		
		$m_before = intval($dateComponents[0]) + 1;
		$y_before = intval($dateComponents[1]);
		
		if($y_before == 12){
			$y_before = $y_before + 1;
		}
		$d_before = cal_days_in_month(CAL_GREGORIAN, $m_before, $y_before);
		$y_after = substr($y_after, 2, 2);
		$y_before = substr($y_before, 2, 2);
		
		switch ($m_before) {
            case 1:
                $m_before = 'ม.ค.';
                break;
            case 2:
                $m_before = 'ก.พ.';
                break;
            case 3:
                $m_before = 'มี.ค.';
                break;
            case 4:
                $m_before = 'เม.ย.';
                break;
            case 5:
                $m_before = 'พ.ค.';
                break;
            case 6:
                $m_before = 'มิ.ย';
                break;
            case 7:
                $m_before = 'ก.ค.';
                break;
            case 8:
                $m_before = 'ส.ค.';
                break;
            case 9:
                $m_before = 'ก.ย.';
                break;
            case 10:
                $m_before = 'ต.ค.';
                break;
            case 11:
                $m_before = 'พ.ย.';
                break;
            case 12:
                $m_before = 'ธ.ค.';
                break;
        }
		
		session(['d_after' => $d_after]);
		session(['m_after' => $m_after]);
		session(['y_after' => $y_after]);
		
		session(['d_before' => $d_before]);
		session(['m_before' => $m_before]);
		session(['y_before' => $y_before]);
		}
		
		return response()->json();


    }
}
