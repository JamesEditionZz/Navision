<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PostController extends Controller
{
    public function uploadfile0(Request $request){
        if ($request->hasFile('file0')) {
            $file0 = $request->file('file0');
            $filePath = $file0->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("ITEM NO");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "ITEM NO" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('item_All')->delete();

            foreach (array_slice($data, 1) as $row) {
                $UnitCost = str_replace(',', '', trim($row[1]));
                $UnitCost = str_replace(['(', ')'], '', $UnitCost);

                DB::table('item_All')->insert([
                    'No' => $row[0],
                    'Unit Cost Decha' => $UnitCost,
                    'Inventory Posting Group' => $row[2],
                    'Full Description' => $row[3],
                    'Item Search Description 1' => $row[4],
                    'Item Search Description 2' => $row[5],
                    'Item Search Description 3' => $row[6],
                ]);
            }
        }
    }

    public function uploadfile1(Request $request)
    {
        if ($request->hasFile('file1')) {
            $file1 = $request->file('file1');
            $filePath = $file1->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("Positive");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "PO" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('po')->delete();

            // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
            foreach (array_slice($data, 1) as $row) {
                $quantity = str_replace(',', '', trim($row[9]));
                $quantity = str_replace(['(', ')'], '', $quantity);
                $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
                $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

                if (strpos($row[0], "AS") === 0) {
                    $numAS = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numAS > 0) {
                        $AS = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $AS->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "FN") === 0) {
                    $numFN = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numFN > 0) {
                        $FN = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $FN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SFN") === 0) {
                    $numSFN = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numSFN > 0) {
                        $SFN = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SFN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "LN") === 0) {
                    $numLN = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numLN > 0) {
                        $LN = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $LN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SLN") === 0) {
                    $numSLN = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numSLN > 0) {
                        $SLN = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SLN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "MT") === 0) {
                    $numMT = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numMT > 0) {
                        $MT = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $MT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SMT") === 0) {
                    $numSMT = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numSMT > 0) {
                        $SMT = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SMT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "NT") === 0) {
                    $numNT = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numNT > 0) {
                        $NT = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $NT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SNT") === 0) {
                    $numSNT = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numSNT > 0) {
                        $SNT = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SNT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "TW") === 0) {
                    $numTW = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numTW > 0) {
                        $TW = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $TW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "STW") === 0) {
                    $numSTW = DB::table('po')->where('Item No', $row[0])->count();
                    if ($numSTW > 0) {
                        $STW = DB::table('po')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $STW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                        DB::table('po')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile2(Request $request)
    {
        if ($request->hasFile('file2')) {
            $file2 = $request->file('file2');
            $filePath = $file2->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("Negative");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "Negative" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('neg')->delete();

            // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
            foreach (array_slice($data, 1) as $row) {
                $quantity = str_replace(',', '', trim($row[9]));
                $quantity = str_replace(['(', ')'], '', $quantity);
                $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
                $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

                if (strpos($row[0], "AS") === 0) {
                    $numAS = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numAS > 0) {
                        $AS = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $AS->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "FN") === 0) {
                    $numFN = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numFN > 0) {
                        $FN = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $FN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SFN") === 0) {
                    $numSFN = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numSFN > 0) {
                        $SFN = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SFN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "LN") === 0) {
                    $numLN = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numLN > 0) {
                        $LN = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $LN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SLN") === 0) {
                    $numSLN = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numSLN > 0) {
                        $SLN = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SLN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "MT") === 0) {
                    $numMT = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numMT > 0) {
                        $MT = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $MT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SMT") === 0) {
                    $numSMT = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numSMT > 0) {
                        $SMT = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SMT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "NT") === 0) {
                    $numNT = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numNT > 0) {
                        $NT = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $NT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SNT") === 0) {
                    $numSNT = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numSNT > 0) {
                        $SNT = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SNT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "TW") === 0) {
                    $numTW = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numTW > 0) {
                        $TW = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $TW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "STW") === 0) {
                    $numSTW = DB::table('neg')->where('Item No', $row[0])->count();
                    if ($numSTW > 0) {
                        $STW = DB::table('neg')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $STW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                        DB::table('neg')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile3(Request $request)
    {
        if ($request->hasFile('file3')) {
            $file3 = $request->file('file3');
            $filePath = $file3->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("PC");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "PC" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('purchase')->delete();

            // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
            foreach (array_slice($data, 1) as $row) {
                $quantity = str_replace(',', '', trim($row[9]));
                $quantity = str_replace(['(', ')'], '', $quantity);
                $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
                $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

                if (strpos($row[0], "AS") === 0) {
                    $numAS = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numAS > 0) {
                        $AS = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $AS->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "FN") === 0) {
                    $numFN = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numFN > 0) {
                        $FN = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $FN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SFN") === 0) {
                    $numSFN = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numSFN > 0) {
                        $SFN = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SFN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "LN") === 0) {
                    $numLN = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numLN > 0) {
                        $LN = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $LN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SLN") === 0) {
                    $numSLN = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numSLN > 0) {
                        $SLN = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SLN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "MT") === 0) {
                    $numMT = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numMT > 0) {
                        $MT = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $MT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SMT") === 0) {
                    $numSMT = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numSMT > 0) {
                        $SMT = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SMT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "NT") === 0) {
                    $numNT = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numNT > 0) {
                        $NT = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $NT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SNT") === 0) {
                    $numSNT = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numSNT > 0) {
                        $SNT = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SNT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "TW") === 0) {
                    $numTW = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numTW > 0) {
                        $TW = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $TW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "STW") === 0) {
                    $numSTW = DB::table('purchase')->where('Item No', $row[0])->count();
                    if ($numSTW > 0) {
                        $STW = DB::table('purchase')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $STW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                        DB::table('purchase')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile4(Request $request)
    {
        if ($request->hasFile('file4')) {
            $file4 = $request->file('file4');
            $filePath = $file4->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("SRR");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "SRR" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('returncuses')->delete();

            // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
            foreach (array_slice($data, 1) as $row) {
                $quantity = str_replace(',', '', trim($row[9]));
                $quantity = str_replace(['(', ')'], '', $quantity);
                $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
                $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);
                $sales_Amount_Actual = str_replace(',', '', trim($row[21]));
                $sales_Amount_Actual = str_replace(['(', ')'], '', $sales_Amount_Actual);

                if (strpos($row[0], "AS") === 0) {
                    $numAS = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numAS > 0) {
                        $AS = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $AS->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $AS->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "FN") === 0) {
                    $numFN = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numFN > 0) {
                        $FN = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $FN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $FN->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SFN") === 0) {
                    $numSFN = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numSFN > 0) {
                        $SFN = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SFN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $SFN->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "LN") === 0) {
                    $numLN = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numLN > 0) {
                        $LN = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $LN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $LN->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SLN") === 0) {
                    $numSLN = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numSLN > 0) {
                        $SLN = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SLN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $SLN->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "MT") === 0) {
                    $numMT = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numMT > 0) {
                        $MT = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $MT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $MT->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SMT") === 0) {
                    $numSMT = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numSMT > 0) {
                        $SMT = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SMT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $SMT->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "NT") === 0) {
                    $numNT = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numNT > 0) {
                        $NT = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $NT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $NT->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SNT") === 0) {
                    $numSNT = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numSNT > 0) {
                        $SNT = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SNT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $SNT->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "TW") === 0) {
                    $numTW = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numTW > 0) {
                        $TW = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $TW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $TW->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "STW") === 0) {
                    $numSTW = DB::table('returncuses')->where('Item No', $row[0])->count();
                    if ($numSTW > 0) {
                        $STW = DB::table('returncuses')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $STW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;
                        $sales_Amount_Actual = $sales_Amount_Actual + $STW->SalesAmount;

                        DB::table('returncuses')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile5(Request $request)
    {
        if ($request->hasFile('file5')) {
            $file5 = $request->file('file5');
            $filePath = $file5->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("TFRC");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "TFRC" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('a71__f1_fg_bu02s')->delete();
            DB::table('a72__f2_fg_bu10s')->delete();
            DB::table('a73__f2_th_bu05s')->delete();
            DB::table('a74__f2_de_bu10s')->delete();
            DB::table('a75__f2_ex_bu11s')->delete();
            DB::table('a76__f2_tw_bu04s')->delete();
            DB::table('a77__f2_tw_bu07s')->delete();
            DB::table('a78__f2_ce_bu10s')->delete();

            // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
            foreach (array_slice($data, 1) as $row) {
                $quantity = str_replace(',', '', trim($row[11]));
                $quantity = str_replace(['(', ')'], '', $quantity);
                $cost_Amount_Actual = str_replace(',', '', trim($row[19]));
                $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);

                if ($row[9] === "F1-FG-BU02") {
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a71__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a71__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-FG-BU10"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a72__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a72__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-TH-BU05"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a73__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a73__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-DE-BU10"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a74__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a74__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-EX-BU11"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a75__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a75__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-TW-BU04"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a76__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a76__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-TW-BU07"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a77__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a77__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-CE-BU10"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a78__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a78__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile6(Request $request)
    {
        if ($request->hasFile('file6')) {
            $file6 = $request->file('file6');
            $filePath = $file6->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("6.คืนของร้านค้า");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "6.คืนของร้านค้า" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

            DB::table('คืนของs')->delete();

            // วนลูปผ่านข้อมูลและบันทึกในฐานข้อมูล
            foreach (array_slice($data, 1) as $row) {
                $quantity = str_replace(',', '', trim($row[9]));
                $quantity = str_replace(['(', ')'], '', $quantity);
                $cost_Amount_Actual = str_replace(',', '', trim($row[17]));
                $cost_Amount_Actual = str_replace(['(', ')'], '', $cost_Amount_Actual);
                $purchase_Amount_Actual = str_replace(',', '', trim($row[19]));
                $purchase_Amount_Actual = str_replace(['(', ')'], '', $purchase_Amount_Actual);

                if (strpos($row[0], "AS") === 0) {
                    $numAS = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numAS > 0) {
                        $AS = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $AS->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $AS->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "FN") === 0) {
                    $numFN = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numFN > 0) {
                        $FN = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $FN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $FN->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SFN") === 0) {
                    $numSFN = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numSFN > 0) {
                        $SFN = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SFN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $SFN->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "LN") === 0) {
                    $numLN = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numLN > 0) {
                        $LN = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $LN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $LN->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SLN") === 0) {
                    $numSLN = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numSLN > 0) {
                        $SLN = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SLN->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $SLN->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "MT") === 0) {
                    $numMT = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numMT > 0) {
                        $MT = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $MT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $MT->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SMT") === 0) {
                    $numSMT = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numSMT > 0) {
                        $SMT = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SMT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $SMT->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "NT") === 0) {
                    $numNT = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numNT > 0) {
                        $NT = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $NT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $NT->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "SNT") === 0) {
                    $numSNT = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numSNT > 0) {
                        $SNT = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SNT->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $SNT->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "TW") === 0) {
                    $numTW = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numTW > 0) {
                        $TW = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $TW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $TW->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
                if (strpos($row[0], "STW") === 0) {
                    $numSTW = DB::table('คืนของs')->where('Item No', $row[0])->count();
                    if ($numSTW > 0) {
                        $STW = DB::table('คืนของs')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Purchase Amount (Actual) as Purchase')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $STW->Quantity;
                        $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;
                        $purchase_Amount_Actual = $purchase_Amount_Actual + $STW->Purchase;

                        DB::table('คืนของs')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost Amount (Actual)' => $cost_Amount_Actual,
                            'Purchase Amount (Actual)' => $purchase_Amount_Actual,
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
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile7(Request $request)
    {
        if ($request->hasFile('file7')) {
            $file7 = $request->file('file7');
            $filePath = $file7->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("TFSM");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "TFSM" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

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

                if ($row[9] === "F1-FG-BU02") {
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a81__f1_fg_bu02s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a81__f1_fg_bu02s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-FG-BU10"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a82__f2_fg_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a82__f2_fg_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-TH-BU05"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a83__f2_th_bu05s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a83__f2_th_bu05s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-DE-BU10"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a84__f2_de_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a84__f2_de_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-EX-BU11"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a85__f2_ex_bu11s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a85__f2_ex_bu11s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-TW-BU04"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a86__f2_tw_bu04s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a86__f2_tw_bu04s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-TW-BU07"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a87__f2_tw_bu07s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a87__f2_tw_bu07s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }else if($row[9] === "F2-CE-BU10"){
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('a88__f2_ce_bu10s')->select('Quantity', 'Cost Amount (Actual) as CostAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;

                            DB::table('a88__f2_ce_bu10s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
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
                        }
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }

    public function uploadfile8(Request $request)
    {
        if ($request->hasFile('file8')) {
            $file8 = $request->file('file8');
            $filePath = $file8->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("SHH");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "SHH" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

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

                if (strpos($row[0], "DC1")) {
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $AS->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $FN->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SFN->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $LN->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SLN->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $MT->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SMT->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $NT->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SNT->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $TW->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('dc1_s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('dc1_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $STW->SalesAmount;
    
                            DB::table('dc1_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                }
                if (strpos($row[0], "DCP")) {
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $AS->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $FN->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SFN->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $LN->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SLN->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $MT->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SMT->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $NT->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SNT->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $TW->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('dcp_s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('dcp_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $STW->SalesAmount;
    
                            DB::table('dcp_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                }
                if (strpos($row[0], "DCY")) {
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $AS->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $FN->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SFN->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $LN->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SLN->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $MT->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SMT->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $NT->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SNT->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $TW->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('dcy_s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('dcy_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $STW->SalesAmount;
    
                            DB::table('dcy_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                }
                if (strpos($row[0], "DEX")) {
                    if (strpos($row[1], "AS") === 0) {
                        $numAS = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numAS > 0) {
                            $AS = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $AS->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $AS->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $AS->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "FN") === 0) {
                        $numFN = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numFN > 0) {
                            $FN = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $FN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $FN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $FN->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SFN") === 0) {
                        $numSFN = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numSFN > 0) {
                            $SFN = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SFN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SFN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SFN->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "LN") === 0) {
                        $numLN = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numLN > 0) {
                            $LN = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $LN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $LN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $LN->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SLN") === 0) {
                        $numSLN = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numSLN > 0) {
                            $SLN = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SLN->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SLN->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SLN->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "MT") === 0) {
                        $numMT = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numMT > 0) {
                            $MT = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $MT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $MT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $MT->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SMT") === 0) {
                        $numSMT = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numSMT > 0) {
                            $SMT = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SMT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SMT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SMT->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "NT") === 0) {
                        $numNT = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numNT > 0) {
                            $NT = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $NT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $NT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $NT->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "SNT") === 0) {
                        $numSNT = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numSNT > 0) {
                            $SNT = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $SNT->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $SNT->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $SNT->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "TW") === 0) {
                        $numTW = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numTW > 0) {
                            $TW = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $TW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $TW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $TW->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
                    }
                    if (strpos($row[1], "STW") === 0) {
                        $numSTW = DB::table('dex_s')->where('Item No', $row[1])->count();
                        if ($numSTW > 0) {
                            $STW = DB::table('dex_s')->select('Quantity', 'Cost Amount (Actual) as CostAmount', 'Sales Amount (Actual) as SalesAmount')->where('Item No', $row[1])->first();
                            $quantity = $quantity + $STW->Quantity;
                            $cost_Amount_Actual = $cost_Amount_Actual + $STW->CostAmount;
                            $sales_Amount_Actual = $sales_Amount_Actual + $STW->SalesAmount;
    
                            DB::table('dex_s')->where('Item No', $row[1])->update([
                                'Quantity' => $quantity,
                                'Cost Amount (Actual)' => $cost_Amount_Actual,
                                'Sales Amount (Actual)' => $sales_Amount_Actual,
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
                        }
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
        if ($request->hasFile('file9')) {
            $file9 = $request->file('file9');
            $filePath = $file9->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getSheetByName("Inventory Balance");

            if (!$worksheet instanceof Worksheet) {
                return redirect()->back()->with('error', 'Sheet "Inventory Balance" ไม่พบในไฟล์ Excel');
            }

            $data = $worksheet->toArray();

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

                if (strpos($row[0], "AS") === 0) {
                    $numAS = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numAS > 0) {
                        $AS = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $AS->Quantity;
                        $Cost_Unit = $Cost_Unit + $AS->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $AS->estimate;
                        $Inventory = $Inventory + $AS->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "FN") === 0) {
                    $numFN = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numFN > 0) {
                        $FN = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $FN->Quantity;
                        $Cost_Unit = $Cost_Unit + $FN->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $FN->estimate;
                        $Inventory = $Inventory + $FN->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "SFN") === 0) {
                    $numSFN = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numSFN > 0) {
                        $SFN = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SFN->Quantity;
                        $Cost_Unit = $Cost_Unit + $SFN->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $SFN->estimate;
                        $Inventory = $Inventory + $SFN->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "LN") === 0) {
                    $numLN = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numLN > 0) {
                        $LN = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $LN->Quantity;
                        $Cost_Unit = $Cost_Unit + $LN->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $LN->estimate;
                        $Inventory = $Inventory + $LN->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "SLN") === 0) {
                    $numSLN = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numSLN > 0) {
                        $SLN = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SLN->Quantity;
                        $Cost_Unit = $Cost_Unit + $SLN->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $SLN->estimate;
                        $Inventory = $Inventory + $SLN->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "MT") === 0) {
                    $numMT = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numMT > 0) {
                        $MT = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $MT->Quantity;
                        $Cost_Unit = $Cost_Unit + $MT->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $MT->estimate;
                        $Inventory = $Inventory + $MT->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "SMT") === 0) {
                    $numSMT = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numSMT > 0) {
                        $SMT = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SMT->Quantity;
                        $Cost_Unit = $Cost_Unit + $SMT->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $SMT->estimate;
                        $Inventory = $Inventory + $SMT->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "NT") === 0) {
                    $numNT = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numNT > 0) {
                        $NT = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $NT->Quantity;
                        $Cost_Unit = $Cost_Unit + $NT->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $NT->estimate;
                        $Inventory = $Inventory + $NT->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "SNT") === 0) {
                    $numSNT = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numSNT > 0) {
                        $SNT = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $SNT->Quantity;
                        $Cost_Unit = $Cost_Unit + $SNT->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $SNT->estimate;
                        $Inventory = $Inventory + $SNT->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "TW") === 0) {
                    $numTW = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numTW > 0) {
                        $TW = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $TW->Quantity;
                        $Cost_Unit = $Cost_Unit + $TW->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $TW->estimate;
                        $Inventory = $Inventory + $TW->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
                if (strpos($row[0], "STW") === 0) {
                    $numSTW = DB::table('item_stock')->where('Item No', $row[0])->count();
                    if ($numSTW > 0) {
                        $STW = DB::table('item_stock')->select('Quantity', 'Cost per Unit as CostUnit', 'Estimate Amount as estimate', 'Inventory', 'Amount')->where('Item No', $row[0])->first();
                        $quantity = $quantity + $STW->Quantity;
                        $Cost_Unit = $Cost_Unit + $STW->CostUnit;
                        $Amount = $Amount + $AS->Amount;
                        $Estimate_Amount = $Estimate_Amount + $STW->estimate;
                        $Inventory = $Inventory + $STW->Inventory;

                        DB::table('item_stock')->where('Item No', $row[0])->update([
                            'Quantity' => $quantity,
                            'Cost per Unit' => $Cost_Unit,
                            'Amount' => $Amount,
                            'Estimate Amount' => $Estimate_Amount,
                            'Inventory' => $Inventory,
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
                    }
                }
            }
            return response()->json(['message' => 'อัปโหลดและประมวลผลข้อมูลเสร็จสิ้น']);
        } else {
            return response()->json(['error' => 'ไม่มีไฟล์ถูกอัปโหลด'], 400);
        }
    }
}