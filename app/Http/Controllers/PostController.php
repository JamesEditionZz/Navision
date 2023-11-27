<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Search;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PostController extends Controller
{
  public function uploadfile0(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile0')) {
      $file0 = $request->file('Inputfile0');
      $filePath = $file0->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("ITEM NO");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "ITEM NO" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow = DB::table('item_all_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('item_all_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('item_all_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('item_all')->delete();

      foreach (array_slice($data, 1) as $row) {
        $UnitCost = str_replace(',', '', trim($row[1]));
        $UnitCost = str_replace(['(', ')'], '', $UnitCost);

        DB::table('item_all')->insert([
          'No' => $row[0],
          'Unit Cost Decha' => $UnitCost,
          'Inventory Posting Group' => $row[2],
          'Full Description' => $row[3],
          'Item Search Description 1' => $row[4],
          'Item Search Description 2' => $row[5],
          'Item Search Description 3' => $row[6],
        ]);

        DB::table('item_all_old')->insert([
          'No' => $row[0],
          'Unit Cost Decha' => $UnitCost,
          'Inventory Posting Group' => $row[2],
          'Full Description' => $row[3],
          'Item Search Description 1' => $row[4],
          'Item Search Description 2' => $row[5],
          'Item Search Description 3' => $row[6],
          'DateUpdate_Old' => $SearchDate_af,
        ]);
      }
    }
  }

  public function uploadfile1(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile1')) {
      $file1 = $request->file('Inputfile1');
      $filePath = $file1->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("1.ปรับเข้า");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "1.ปรับเข้า" ไม่พบในไฟล์ Excel');
      }
      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow = DB::table('po_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('po_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('po_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('po')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[9]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

        $checkData = DB::table('po')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();

        if (!empty($checkData->ItemNo) && $checkData->ItemNo == $row[0]) {
          DB::table('po')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount
          ]);

          DB::table('po_old')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount
          ]);
        } else {
          DB::table('po')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
          ]);

          DB::table('po_old')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'DateUpdate_Old' => $SearchDate_af,
          ]);
        }
      }
      return response()->json(['success' => 'อัพโหลดข้อมูลเรียบร้อยแล้ว']);
    }
    return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
  }

  public function uploadfile2(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile2')) {
      $file2 = $request->file('Inputfile2');
      $filePath = $file2->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("2.ปรับออก");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "2.ปรับออก" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow = DB::table('neg_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('neg_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('neg_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('neg')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[9]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

        $checkData = DB::table('neg')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();

        if (!empty($checkData->ItemNo) && $checkData->ItemNo == $row[0]) {
          DB::table('neg')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount
          ]);

          DB::table('neg_old')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount
          ]);
        } else {
          DB::table('neg')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
          ]);

          DB::table('neg_old')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'DateUpdate_Old' => $SearchDate_af,
          ]);
        }
      }
      return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
    }
    return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
  }

  public function uploadfile3(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile3')) {
      $file3 = $request->file('Inputfile3');
      $filePath = $file3->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("3.ซื้อเข้า");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "3.ซื้อเข้า" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow = DB::table('purchase_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('purchase_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('purchase_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('purchase')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[9]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

        $checkData = DB::table('purchase')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();

        if (!empty($checkData->ItemNo) && $checkData->ItemNo == $row[0]) {
          DB::table('purchase')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount
          ]);

          DB::table('purchase_old')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount
          ]);
        } else {
          DB::table('purchase')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
          ]);

          DB::table('purchase_old')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'DateUpdate_Old' => $SearchDate_af,
          ]);
        }
      }
      return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
    }
    // return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
  }

  public function uploadfile4(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile4')) {
      $file4 = $request->file('Inputfile4');
      $filePath = $file4->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("4.รับคืน");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "4.รับคืน" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow = DB::table('returncuses_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('returncuses_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('returncuses_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('returncuses')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[9]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);
        $sales_Amount_Actual = str_replace(',', '', trim($row[21]));
        $sales_Amount_Actual = str_replace(['(', ')'], '', $sales_Amount_Actual);

        $checkData = DB::table('returncuses')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();

        if (!empty($checkData->ItemNo) && $checkData->ItemNo == $row[0]) {
          DB::table('returncuses')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount,
            'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData->SalesAmount
          ]);

          DB::table('returncuses_old')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount,
            'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData->SalesAmount
          ]);
        } else {
          DB::table('returncuses')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'Sales Amount (Actual)' => $sales_Amount_Actual,
          ]);

          DB::table('returncuses_old')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'Sales Amount (Actual)' => $sales_Amount_Actual,
            'DateUpdate_Old' => $SearchDate_af,
          ]);
        }
      }
      return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
    } else {
      return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
    }
  }

  public function uploadfile5(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile5')) {
      $file5 = $request->file('Inputfile5');
      $filePath = $file5->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("5.รับโอน");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "5.รับโอน" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow71 = DB::table('a71__f1_fg_bu02s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow72 = DB::table('a72__f2_fg_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow73 = DB::table('a73__f2_th_bu05s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow74 = DB::table('a74__f2_de_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow75 = DB::table('a75__f2_ex_bu11s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow76 = DB::table('a76__f2_tw_bu04s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow77 = DB::table('a77__f2_tw_bu07s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow78 = DB::table('a78__f2_ce_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow71 > 0) {
        DB::table('a71__f1_fg_bu02s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a71__f1_fg_bu02s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow72 > 0) {
        DB::table('a72__f2_fg_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a72__f2_fg_bu10s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow73 > 0) {
        DB::table('a73__f2_th_bu05s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a73__f2_th_bu05s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow74 > 0) {
        DB::table('a74__f2_de_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a74__f2_de_bu10s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow75 > 0) {
        DB::table('a75__f2_ex_bu11s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a75__f2_ex_bu11s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow76 > 0) {
        DB::table('a76__f2_tw_bu04s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a76__f2_tw_bu04s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow77 > 0) {
        DB::table('a77__f2_tw_bu07s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a77__f2_tw_bu07s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow78 > 0) {
        DB::table('a78__f2_ce_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a78__f2_ce_bu10s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('a71__f1_fg_bu02s')->delete();
      DB::table('a72__f2_fg_bu10s')->delete();
      DB::table('a73__f2_th_bu05s')->delete();
      DB::table('a74__f2_de_bu10s')->delete();
      DB::table('a75__f2_ex_bu11s')->delete();
      DB::table('a76__f2_tw_bu04s')->delete();
      DB::table('a77__f2_tw_bu07s')->delete();
      DB::table('a78__f2_ce_bu10s')->delete();

      ///  วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[11]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[19]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

        $checkData1 = DB::table('a71__f1_fg_bu02s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData2 = DB::table('a72__f2_fg_bu10s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData3 = DB::table('a73__f2_th_bu05s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData4 = DB::table('a74__f2_de_bu10s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData5 = DB::table('a75__f2_ex_bu11s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData6 = DB::table('a76__f2_tw_bu04s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData7 = DB::table('a77__f2_tw_bu07s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData8 = DB::table('a78__f2_ce_bu10s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();

        if ($row[9] == 'F1-FG-BU02') {
          if (!empty($checkData1->ItemNo) && $checkData1->ItemNo == $row[1]) {
            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData1->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData1->CostAmount,
            ]);

            DB::table('a71__f1_fg_bu02s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData1->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData1->CostAmount,
            ]);
          } else {
            DB::table('a71__f1_fg_bu02s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a71__f1_fg_bu02s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] == 'F2-FG-BU10') {
          if (!empty($checkData2->ItemNo) && $checkData2->ItemNo == $row[1]) {
            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData2->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData2->CostAmount,
            ]);

            DB::table('a72__f2_fg_bu10s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData2->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData2->CostAmount,
            ]);
          } else {
            DB::table('a72__f2_fg_bu10s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a72__f2_fg_bu10s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] == 'F2-TH-BU05') {
          if (!empty($checkData3->ItemNo) && $checkData3->ItemNo == $row[1]) {
            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData3->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData3->CostAmount,
            ]);

            DB::table('a73__f2_th_bu05s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData3->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData3->CostAmount,
            ]);
          } else {
            DB::table('a73__f2_th_bu05s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a73__f2_th_bu05s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] == 'F2-DE-BU10') {
          if (!empty($checkData4->ItemNo) && $checkData4->ItemNo == $row[1]) {
            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData4->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData4->CostAmount,
            ]);

            DB::table('a74__f2_de_bu10s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData4->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData4->CostAmount,
            ]);
          } else {

            DB::table('a74__f2_de_bu10s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a74__f2_de_bu10s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] == 'F2-EX-BU11') {
          if (!empty($checkData5->ItemNo) && $checkData5->ItemNo == $row[1]) {
            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData5->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData5->CostAmount,
            ]);

            DB::table('a75__f2_ex_bu11s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData5->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData5->CostAmount,
            ]);
          } else {
            DB::table('a75__f2_ex_bu11s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a75__f2_ex_bu11s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] == 'F2-TW-BU04') {
          if (!empty($checkData6->ItemNo) && $checkData6->ItemNo == $row[1]) {
            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData6->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData6->CostAmount,
            ]);

            DB::table('a76__f2_tw_bu04s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData6->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData6->CostAmount,
            ]);
          } else {
            DB::table('a76__f2_tw_bu04s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a76__f2_tw_bu04s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] === 'F2-TW-BU07') {
          if (!empty($checkData7->ItemNo) && $checkData7->ItemNo == $row[1]) {
            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData7->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData7->CostAmount,
            ]);

            DB::table('a77__f2_tw_bu07s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData7->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData7->CostAmount,
            ]);
          } else {
            DB::table('a77__f2_tw_bu07s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a77__f2_tw_bu07s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        } elseif ($row[9] === 'F2-CE-BU10') {
          if (!empty($checkData8->ItemNo) && $checkData8->ItemNo == $row[1]) {
            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData8->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData8->CostAmount,
            ]);

            DB::table('a78__f2_ce_bu10s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData8->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData8->CostAmount,
            ]);
          } else {
            DB::table('a78__f2_ce_bu10s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a78__f2_ce_bu10s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'DateUpdate_Old' => $SearchDate_af,
            ]);
          }
        }
      }
      return response()->json(['error' => 'อัปโหลดข้อมูลเรียบร้อยแล้ว']);
    } else {
      return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
    }
  }

  public function uploadfile6(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile6')) {
      $file6 = $request->file('Inputfile6');
      $filePath = $file6->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("6.คืนของร้านค้า");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "6.คืนของร้านค้า" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow = DB::table('คืนของs_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('คืนของs_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('คืนของs_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }


      DB::table('คืนของs')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[9]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);
        $purchase_Amount_Actual = str_replace(',', '', trim($row[19]));
        $purchase_Amount_Actual = str_replace(['(', ')'], '', $purchase_Amount_Actual);

        $checkData = DB::table('คืนของs')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as PurchaseAmount')->where('Item No', $row[0])->first();

        if (!empty($checkData->ItemNo) && $checkData->ItemNo == $row[0]) {
          DB::table('คืนของs')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + +$checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount,
            'Purchase Amount (Actual)' => $purchase_Amount_Actual + +$checkData->PurchaseAmount,
          ]);

          DB::table('คืนของs_old')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + +$checkData->Quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData->CostAmount,
            'Purchase Amount (Actual)' => $purchase_Amount_Actual + +$checkData->PurchaseAmount,
          ]);
        } else {
          DB::table('คืนของs')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
          ]);

          DB::table('คืนของs_old')->insert([
            'Item No' => $row[0],
            'Global Dimension 2 Code' => $row[14],
            'Full Description' => $row[1],
            'Unit of Measure Code' => $row[12],
            'Quantity' => $quantity,
            'Cost Amount (Actual)' => $cost_Amount_Actual,
            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
            'DateUpdate_Old' => $SearchDate_af,
          ]);
        }
      }
      return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
    } else {
      return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
    }
  }

  public function uploadfile7(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile7')) {
      $file7 = $request->file('Inputfile7');
      $filePath = $file7->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("7.โอนออก");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "7.โอนออก" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m') - 1;
      $y_af = date('Y') + 543;

      $y_Old = date('Y') + 542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af . '/' . $y_af;
      $SearchDate_Old = $m_af . '/' . $y_Old;

      $Numrow71 = DB::table('a81__f1_fg_bu02s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow72 = DB::table('a82__f2_fg_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow73 = DB::table('a83__f2_th_bu05s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow74 = DB::table('a84__f2_de_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow75 = DB::table('a85__f2_ex_bu11s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow76 = DB::table('a86__f2_tw_bu04s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow77 = DB::table('a87__f2_tw_bu07s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $Numrow78 = DB::table('a88__f2_ce_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow71 > 0) {
        DB::table('a81__f1_fg_bu02s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a81__f1_fg_bu02s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow72 > 0) {
        DB::table('a82__f2_fg_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a82__f2_fg_bu10s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow73 > 0) {
        DB::table('a83__f2_th_bu05s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a83__f2_th_bu05s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow74 > 0) {
        DB::table('a84__f2_de_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a84__f2_de_bu10s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow75 > 0) {
        DB::table('a85__f2_ex_bu11s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a85__f2_ex_bu11s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow76 > 0) {
        DB::table('a86__f2_tw_bu04s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a86__f2_tw_bu04s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow77 > 0) {
        DB::table('a87__f2_tw_bu07s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a87__f2_tw_bu07s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($Numrow78 > 0) {
        DB::table('a88__f2_ce_bu10s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      } else {
        DB::table('a88__f2_ce_bu10s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('a81__f1_fg_bu02s')->delete();
      DB::table('a82__f2_fg_bu10s')->delete();
      DB::table('a83__f2_th_bu05s')->delete();
      DB::table('a84__f2_de_bu10s')->delete();
      DB::table('a85__f2_ex_bu11s')->delete();
      DB::table('a86__f2_tw_bu04s')->delete();
      DB::table('a87__f2_tw_bu07s')->delete();
      DB::table('a88__f2_ce_bu10s')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[11]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[19]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

        $checkData1 = DB::table('a81__f1_fg_bu02s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData2 = DB::table('a82__f2_fg_bu10s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData3 = DB::table('a83__f2_th_bu05s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData4 = DB::table('a84__f2_de_bu10s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData5 = DB::table('a85__f2_ex_bu11s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData6 = DB::table('a86__f2_tw_bu04s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData7 = DB::table('a87__f2_tw_bu07s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
        $checkData8 = DB::table('a88__f2_ce_bu10s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();

        if ($row[9] == 'F1-FG-BU02') {
          if (!empty($checkData1->ItemNo) && $checkData1->ItemNo == $row[1]) {
            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData1->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData1->CostAmount,
            ]);

            DB::table('a81__f1_fg_bu02s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData1->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData1->CostAmount,
            ]);
          } else {
            DB::table('a81__f1_fg_bu02s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a81__f1_fg_bu02s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] == 'F2-FG-BU10') {
          if (!empty($checkData2->ItemNo) && $checkData2->ItemNo == $row[1]) {
            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData2->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData2->CostAmount,
            ]);

            DB::table('a82__f2_fg_bu10s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData2->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData2->CostAmount,
            ]);
          } else {
            DB::table('a82__f2_fg_bu10s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a82__f2_fg_bu10s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] == 'F2-TH-BU05') {
          if (!empty($checkData3->ItemNo) && $checkData3->ItemNo == $row[1]) {
            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData3->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData3->CostAmount,
            ]);

            DB::table('a83__f2_th_bu05s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData3->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData3->CostAmount,
            ]);
          } else {
            DB::table('a83__f2_th_bu05s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a83__f2_th_bu05s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] == 'F2-DE-BU10') {
          if (!empty($checkData4->ItemNo) && $checkData4->ItemNo == $row[1]) {
            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData4->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData4->CostAmount,
            ]);

            DB::table('a84__f2_de_bu10s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData4->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData4->CostAmount,
            ]);
          } else {

            DB::table('a84__f2_de_bu10s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a84__f2_de_bu10s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] == 'F2-EX-BU11') {
          if (!empty($checkData5->ItemNo) && $checkData5->ItemNo == $row[1]) {
            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData5->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData5->CostAmount,
            ]);

            DB::table('a85__f2_ex_bu11s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData5->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData5->CostAmount,
            ]);
          } else {
            DB::table('a85__f2_ex_bu11s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a85__f2_ex_bu11s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] == 'F2-TW-BU04') {
          if (!empty($checkData6->ItemNo) && $checkData6->ItemNo == $row[1]) {
            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData6->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData6->CostAmount,
            ]);

            DB::table('a86__f2_tw_bu04s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData6->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData6->CostAmount,
            ]);
          } else {
            DB::table('a86__f2_tw_bu04s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a86__f2_tw_bu04s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] === 'F2-TW-BU07') {
          if (!empty($checkData7->ItemNo) && $checkData7->ItemNo == $row[1]) {
            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData7->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData7->CostAmount,
            ]);

            DB::table('a87__f2_tw_bu07s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData7->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData7->CostAmount,
            ]);
          } else {
            DB::table('a87__f2_tw_bu07s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a87__f2_tw_bu07s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        } elseif ($row[9] === 'F2-CE-BU10') {
          if (!empty($checkData8->ItemNo) && $checkData8->ItemNo == $row[1]) {
            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData8->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData8->CostAmount,
            ]);

            DB::table('a88__f2_ce_bu10s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData8->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData8->CostAmount,
            ]);
          } else {
            DB::table('a88__f2_ce_bu10s')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);

            DB::table('a88__f2_ce_bu10s_old')->insert([
              'A' => $row[0],
              'Location' => $row[9],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[16],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[14],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
            ]);
          }
        }
      }
      return response()->json(['success' => 'อัปโหลดข้อมูลเรียบร้อยแล้ว']);
    } else {
      return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
    }
  }

  public function uploadfile8(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile8')) {
      $file8 = $request->file('Inputfile8');
      $filePath = $file8->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("8.ขายออก");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "8.ขายออก" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m')-1;
      $y_af = date('Y')+543;

      $y_Old = date('Y')+542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af.'/'.$y_af;
      $SearchDate_Old = $m_af.'/'.$y_Old;

      $NumrowDC1 = DB::table('dc1_s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $NumrowDCP = DB::table('dcp_s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $NumrowDCY = DB::table('dcy_s_old')->where('DateUpdate_Old', $SearchDate_af)->count();
      $NumrowDEX = DB::table('dex_s_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($NumrowDC1 > 0) {
        DB::table('dc1_s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      }else{
        DB::table('dc1_s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($NumrowDCP > 0) {
        DB::table('dcp_s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      }else{
        DB::table('dcp_s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($NumrowDCY > 0) {
        DB::table('dcy_s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      }else{
        DB::table('dcy_s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      if ($NumrowDEX > 0) {
        DB::table('dex_s_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      }else{
        DB::table('dex_s_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('dc1_s')->delete();
      DB::table('dcp_s')->delete();
      DB::table('dcy_s')->delete();
      DB::table('dex_s')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 1) as $row) {
        $quantity = str_replace(',', '', trim($row[10]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $cost_Amount_Actual = str_replace(',', '', trim($row[18]));
        $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);
        $sales_Amount_Actual = str_replace(',', '', trim($row[22]));
        $sales_Amount_Actual = str_replace(['(', ')'], '', $sales_Amount_Actual);

        $checkData1 = DB::table('dc1_s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
        $checkData2 = DB::table('dcy_s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
        $checkData3 = DB::table('dcp_s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
        $checkData4 = DB::table('dex_s')->select('Item No as ItemNo', 'Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();

        if (strpos($row[0], "DC1")) {
          if (!empty($checkData1->ItemNo) && $checkData1->ItemNo == $row[1]) {
            DB::table('dc1_s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData1->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData1->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData1->SalesAmount,
            ]);

            DB::table('dc1_s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData1->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData1->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData1->SalesAmount,
            ]);
          } else {
            DB::table('dc1_s')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);

            DB::table('dc1_s_old')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);
          }
        } elseif (strpos($row[0], "DCY")) {
          if (!empty($checkData2->ItemNo) && $checkData2->ItemNo == $row[1]) {
            DB::table('dcy_s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData2->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData2->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData2->SalesAmount,
            ]);

            DB::table('dcy_s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData2->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData2->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData2->SalesAmount,
            ]);
          } else {
            DB::table('dcy_s')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);

            DB::table('dcy_s_old')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);
          }
        } elseif (strpos($row[0], "DCP")) {
          if (!empty($checkData3->ItemNo) && $checkData3->ItemNo == $row[1]) {
            DB::table('dcp_s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData3->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData3->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData3->SalesAmount,
            ]);

            DB::table('dcp_s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData3->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData3->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData3->SalesAmount,
            ]);
          } else {
            DB::table('dcp_s')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);

            DB::table('dcp_s_old')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);
          }
        } elseif (strpos($row[0], "DEX")) {
          if (!empty($checkData4->ItemNo) && $checkData4->ItemNo == $row[1]) {
            DB::table('dex_s')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData4->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData4->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData4->SalesAmount,
            ]);

            DB::table('dex_s_old')->where('Item No', $row[1])->update([
              'Quantity' => $quantity + $checkData4->Quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual + $checkData4->CostAmount,
              'Sales Amount (Actual)' => $sales_Amount_Actual + $checkData4->SalesAmount,
            ]);
          } else {
            DB::table('dex_s')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);

            DB::table('dex_s_old')->insert([
              'Item&Branch' => $row[0],
              'Item No' => $row[1],
              'Global Dimension 2 Code' => $row[15],
              'Full Description' => $row[2],
              'Unit of Measure Code' => $row[13],
              'Quantity' => $quantity,
              'Cost Amount (Actual)' => $cost_Amount_Actual,
              'Sales Amount (Actual)' => $sales_Amount_Actual,
            ]);
          }
        }
      }
      return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
    } else {
      return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
    }
  }
  public function uploadfile9(Request $request)
  {
    set_time_limit(3600);
    if ($request->hasFile('Inputfile9')) {
      $file9 = $request->file('Inputfile9');
      $filePath = $file9->getRealPath();

      $spreadsheet = IOFactory::load($filePath);
      $worksheet = $spreadsheet->getSheetByName("Inventory Balance");

      if (!$worksheet instanceof Worksheet) {
        return redirect()->back()->with('error', 'Sheet "Inventory Balance" ไม่พบในไฟล์ Excel');
      }

      $data = $worksheet->toArray();

      $m_af = date('m')-1;
      $y_af = date('Y')+543;

      $y_Old = date('Y')+542;

      if ($m_af === 0) {
        $m_af = 12;
      }

      $SearchDate_af = $m_af.'/'.$y_af;
      $SearchDate_Old = $m_af.'/'.$y_Old;

      $Numrow = DB::table('item_stock_old')->where('DateUpdate_Old', $SearchDate_af)->count();

      if ($Numrow > 0) {
        DB::table('item_stock_old')->where('DateUpdate_Old', $SearchDate_af)->delete();
      }else{
        DB::table('item_stock_old')->where('DateUpdate_Old', $SearchDate_Old)->delete();
      }

      DB::table('item_stock')->delete();

      // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
      foreach (array_slice($data, 6) as $row) {
        $quantity = str_replace(',', '', trim($row[7]));
        $quantity = str_replace(['(', ')'], '', $quantity);
        $Cost_Unit = str_replace(',', '', trim($row[8]));
        $Cost_Unit = str_replace(['(', ')'], '', $Cost_Unit);
        $Amount = str_replace(',', '', trim($row[9]));
        $Amount = str_replace(['(', ')'], '', $Amount);
        $Estimate_Amount = str_replace(',', '', trim($row[10]));
        $Estimate_Amount = str_replace(['(', ')'], '', $Estimate_Amount);
        $Inventory = str_replace(',', '', trim($row[11]));
        $Inventory = str_replace(['(', ')'], '', $Inventory);

        $checkData = DB::table('item_stock')->select('Item No as ItemNo', 'Quantity', 'Cost per Unit as CostUnit', 'Amount', 'Estimate Amount as EstimateAmount', 'Inventory')->where('Item No', $row[0])->first();

        if (!empty($checkData->ItemNo) && $checkData->ItemNo == $row[0]) {
          DB::table('item_stock')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost per Unit' => $Cost_Unit + $checkData->CostUnit,
            'Amount' => $Amount + $checkData->Amount,
            'Estimate Amount' => $Estimate_Amount + $checkData->EstimateAmount,
            'Inventory' => $Inventory + $checkData->Inventory,
          ]);

          DB::table('item_stock_old')->where('Item No', $row[0])->update([
            'Quantity' => $quantity + $checkData->Quantity,
            'Cost per Unit' => $Cost_Unit + $checkData->CostUnit,
            'Amount' => $Amount + $checkData->Amount,
            'Estimate Amount' => $Estimate_Amount + $checkData->EstimateAmount,
            'Inventory' => $Inventory + $checkData->Inventory,
          ]);
        } else {
          DB::table('item_stock')->insert([
            'Item No' => $row[0],
            'goodname1' => $row[2],
            'branchcode' => $row[5],
            'groupname' => $row[6],
            'Quantity' => $quantity,
            'Cost per Unit' => $Cost_Unit,
            'Amount' => $Amount,
            'Estimate Amount' => $Estimate_Amount,
            'Inventory' => $Inventory,
            'Last Stock-In' => $row[12],
            'Entry Type' => $row[13],
          ]);

          DB::table('item_stock_old')->insert([
            'Item No' => $row[0],
            'goodname1' => $row[2],
            'branchcode' => $row[5],
            'groupname' => $row[6],
            'Quantity' => $quantity,
            'Cost per Unit' => $Cost_Unit,
            'Amount' => $Amount,
            'Estimate Amount' => $Estimate_Amount,
            'Inventory' => $Inventory,
            'Last Stock-In' => $row[12],
            'Entry Type' => $row[13],
          ]);
        }
      }
      return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
    } else {
      return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
    }
  }

  public function uploadfile10(Request $request)
  {
    set_time_limit(3600);
    $upload10 = $request->input('confirm');

    if ($upload10 == 1) {
      $ItemNo = DB::table('item_all')
        ->select(
          'dataother.Item No as ItemCode',
          'item_all.No as Item_No',
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
        ->orderBy('item_all.No')
        ->get();

        $m_af = date('m')-1;
        $y_af = date('Y')+543;
  
        $y_Old = date('Y')+542;
  
        if ($m_af === 0) {
          $m_af = 12;
        }
  
        $SearchDate_af = $m_af.'/'.$y_af;
        $SearchDate_Old = $m_af.'/'.$y_Old;
  
        $Numrow = DB::table('log_price')->where('DateUpdate_Old', $SearchDate_af)->count();
  
        if ($Numrow > 0) {
          DB::table('log_price')->where('DateUpdate_Old', $SearchDate_af)->delete();
        }else{
          DB::table('log_price')->where('DateUpdate_Old', $SearchDate_Old)->delete();
        }

      foreach ($ItemNo as $rowlog) {
        DB::table('log_price')->insert([
          'Item No_Old' => $rowlog->Item_No,
          'Customer_Old' => $rowlog->Customer,
          'Pcs_After_Old' => $rowlog->PcsAfter,
          'Price_After_Old' => $rowlog->PriceAfter,
          'Category_Old' => $rowlog->Category,
          'DateUpdate_Old' => $SearchDate_af
        ]);
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

        $arrayinsert[] = [$row->Item_No, $row->Customer, $TotalCalPcs, $TotalCalPrice, $row->Category];
      }
      DB::table('dataother')->delete();

      foreach ($arrayinsert as $resultInsert) {
        DB::table('dataother')->insert([
          'Item No' => $resultInsert[0],
          'Customer' => $resultInsert[1],
          'PcsAfter' => $resultInsert[2],
          'PriceAfter' => $resultInsert[3],
          'Category' => $resultInsert[4],
        ]);
      }

      return response()->json($arrayinsert);
    } else {
      return response()->json('ข้อมูลไม่ต้องการอัพเดท');
    }
  }
}
