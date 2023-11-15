<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navition</title>
    <link rel="stylesheet" href="{{ asset('css/navition.css') }}">
    <script src="{{ asset('/js/ajax.js') }}"></script>
</head>

<body>
    <div class="container col-1">
        <div class="header print-review">
            <div class="mx-1 mt-1">
                <label for="">Navition</label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('datalist') }}">DataList</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('Product') }}">แยกประเภทสินค้า</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('Customer') }}">แยกลูกค้า</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1 active">
                <label for=""><a href="{{ Route('DC1') }}">อวน DC1</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('Change') }}">แก้ไขลูกค้า/ประเภท</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('importfile') }}">Import File</a></label>
            </div>
            <hr>
        </div>
        <div>
            <h2 align="center">แยกลูกค้า</h2><button class="btn-Print" onclick="Print()">Print</button>
            <div class="table-block">
                <table class="table-tabledata" id="table-data">
                    <thead>
                        <tr>
                            <td rowspan="4">กลุ่มสินค้า</td>
                            <td rowspan="4">รหัส</td>
                            <td rowspan="4">ประเภท</td>
                            <td colspan="36"></td>
                            <td colspan="16">รับโอน</td>
                            <td colspan="16">โอนออก</td>
                            <td colspan="8">ส่งขาย</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background-color: rgb(200,155,255);">ยกมา</td>
                            <td colspan="2" style="background-color: rgb(200,155,255);">ยกมาใหม่</td>
                            <td colspan="4" style="background-color: rgb(200,155,255);"></td>
                            <td colspan="2" style="background-color: rgb(200,155,255);">คงเหลือ</td>
                            <td colspan="8" style="background-color: rgb(160,255,200);">รับเข้า</td>
                            <td colspan="8" style="background-color: rgb(255,155,155);">จ่ายออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,255);">คงเหลือ คำนวณ</td>
                            <td colspan="2" style="background-color: rgb(255,120,120);">คงเหลือ NAV</td>
                            <td colspan="2" style="background-color: rgb(255,120,120);"></td>
                            <td colspan="4" style="background-color: rgb(200,100,255);">คงเหลือ มูลค่าใหม่</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ทออวนโรงงาน 1</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ทออวนโรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ต่อแห โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับคืน TD อ.10</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">เส้นใย โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตีด้าย 2 โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตีด้าย 3 โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตีด้าย 4 อ.11</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ทออวนโรงงาน 1</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ทออวนโรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ต่อแห โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับคืน TD อ.10</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">เส้นใย โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตีด้าย 2 โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตีด้าย 3 โรงงาน 2</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตีด้าย 4 อ.11</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">DC1</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">DCY</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">DCP</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ตปท</td>
                        </tr>
                        <tr>
                            <td colspan="2">{{ $d_before }}/{{ $m_before }}/{{ $y_before }}</td>
                            <td colspan="2">{{ $d_before }}/{{ $m_before }}/{{ $y_before }}</td>
                            <td colspan="2" style="background-color: rgb(200,155,255);">ปรับเข้า</td>
                            <td colspan="2" style="background-color: rgb(200,155,255);">ปรับออก</td>
                            <td colspan="2" style="background-color: rgb(200,155,255);">หลังปรับ</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ซื้อเข้า</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับคืน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รวม</td>
                            <td colspan="2" style="background-color: rgb(255,155,155);">ส่งขาย</td>
                            <td colspan="2" style="background-color: rgb(255,155,155);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(245,255,89);">คืนของร้านค้า</td>
                            <td colspan="2" style="background-color: rgb(255,155,155);">รวม</td>
                            <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                            <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                            <td colspan="2" style="background-color: rgb(255,155,155);">ผลต่างคำนวน/NAV</td>
                            <td colspan="4">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">โอนออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                            <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                        </tr>
                        <tr>
                            <td style="background-color: rgb(200,155,255);">pcs</td>
                            <td style="background-color: rgb(200,155,255);">มูลค่า</td>
                            <td style="background-color: rgb(200,155,255);">pcs</td>
                            <td style="background-color: rgb(200,155,255);">มูลค่า</td>
                            <td style="background-color: rgb(200,155,255);">pcs</td>
                            <td style="background-color: rgb(200,155,255);">มูลค่า</td>
                            <td style="background-color: rgb(200,155,255);">pcs</td>
                            <td style="background-color: rgb(200,155,255);">มูลค่า</td>
                            <td style="background-color: rgb(200,155,255);">pcs</td>
                            <td style="background-color: rgb(200,155,255);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(255,155,155);">pcs</td>
                            <td style="background-color: rgb(255,155,155);">มูลค่า</td>
                            <td style="background-color: rgb(255,155,155);">pcs</td>
                            <td style="background-color: rgb(255,155,155);">มูลค่า</td>
                            <td style="background-color: rgb(245,255,89);">pcs</td>
                            <td style="background-color: rgb(245,255,89);">มูลค่า</td>
                            <td style="background-color: rgb(255,155,155);">pcs</td>
                            <td style="background-color: rgb(255,155,155);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,255);">pcs</td>
                            <td style="background-color: rgb(160,255,255);">มูลค่า</td>
                            <td style="background-color: rgb(255,155,155);">pcs</td>
                            <td style="background-color: rgb(255,155,155);">มูลค่า</td>
                            <td style="background-color: rgb(255,155,155);">pcs</td>
                            <td style="background-color: rgb(255,155,155);">มูลค่า</td>
                            <td style="background-color: rgb(130,170,255);">pcs</td>
                            <td style="background-color: rgb(130,170,255);">มูลค่า</td>
                            <td style="background-color: rgb(130,170,255);">ผลต่างNAV</td>
                            <td style="background-color: rgb(130,170,255);">ผลต่างคำนวน</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                            <td style="background-color: rgb(160,255,200);">pcs</td>
                            <td style="background-color: rgb(160,255,200);">มูลค่า</td>
                        </tr>
                    </thead>
                    <tr>
                        <td rowspan="7">อวนกำ</td>
                    </tr>
                    <tr>
                        <td>NT</td>
                        <td>อวนกำโมโน</td>
                        <td>
                            <div id="PcsAfterNT_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNT_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNT_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNT_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNT_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNT_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNT_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNT_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNT_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNT_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNT_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNT_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNT_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNT_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNT_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNT_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>NT</td>
                        <td>อวนกำไนลอน</td>
                    </tr>
                    <tr>
                        <td>NT</td>
                        <td>อวนมัลติโมโน</td>
                    </tr>
                    <tr>
                        <td>NT</td>
                        <td>อวนโพลี</td>
                    </tr>
                    <tr>
                        <td>SNT</td>
                        <td>อวนโมโน,ไนลอน</td>
                    </tr>
                    <tr>
                        <td>SNT</td>
                        <td>อวนโพลี</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                    </tr>
                    <tr>
                        <td rowspan="7">อวนรุม</td>
                    </tr>
                    <tr>
                        <td>MT</td>
                        <td>อวนรุม</td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนแห</td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนยอสำเร็จรูป</td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนสามชั้นสำเร็จรูป</td>
                    </tr>
                    <tr>
                        <td>MT</td>
                        <td>ข่ายนกสำเร็จรูป</td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนกระชัง</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                    </tr>
                    <tr>
                        <td rowspan="7">ด้ายโพลี</td>
                    </tr>
                    <tr>
                        <td>TW</td>
                        <td>ด้ายไนลอน</td>
                    </tr>
                    <tr>
                        <td>TW</td>
                        <td>ด้ายโพลี</td>
                    </tr>
                    <tr>
                        <td>STW</td>
                        <td>ด้ายไนลอน</td>
                    </tr>
                    <tr>
                        <td>STW</td>
                        <td>ด้ายโพลี</td>
                    </tr>
                    <tr>
                        <td>LN</td>
                        <td>ด้ายโมโน</td>
                    </tr>
                    <tr>
                        <td>SLN</td>
                        <td>ด้ายโมโน</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                    </tr>
                    <tr>
                        <td rowspan="11">อื่นๆ</td>
                    </tr>
                    <tr>
                        <td>FN+SFN</td>
                        <td>ผ้ามุ้ง</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>กระชังผ้ามุ้ง</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>เชือก-ด้าย</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ดะกั่ว-ทุ่นลอย</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ตาข่าย PVC</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ผ้าพลางแสง</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>อวนลากกุ้ง</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>คอนโด</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ลอบปู</td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ตาข่ายกรงไก่</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="loading-data">
        <div class="loading"></div>
        <h1>Loading</h1>
    </div>
</body>

</html>
<script>
var modeloading = document.querySelector(".loading-data");
modeloading.style.display = "block";

$.ajax({
    type: "GET",
    url: "{{ Route('DataDC1') }}",
    success: function(response) {
        
        modeloading.style.display = "none";

        Data = [
            'PcsAfterNT_1', 'PriceAfterNT_1', 'Pcs_AfterNT_1', 'Price_AfterNT_1',
            'PoPcsNT_1', 'PoPriceNT_1', 'NegPcsNT_1', 'NegPriceNT_1', 'BackPcsNT_1',
            'BackPriceNT_1', 'PurchasePcsNT_1', 'PurchasePriceNT_1', 'ReciveTranferPcsNT_1',
            'ReciveTranferPriceNT_1', 'ReturnItemPcsNT_1', 'ReturnItemPriceNT_1',
            'AllInPcsNT_1', 'AllInPriceNT_1', 'SendSalePcsNT_1', 'SendSalePriceNT_1',
            'ReciveTranOutPcsNT_1', 'ReciveTranOutPriceNT_1', 'ReturnStorePcsNT_1',
            'ReturnStorePriceNT_1', 'AllOutPcsNT_1', 'AllOutPriceNT_1', 'CalculatePcsNT_1',
            'CalculatePriceNT_1', 'NewCalculatePcsNT_1', 'NewCalculatePriceNT_1',
            'DiffPcsNT_1', 'DiffPriceNT_1', 'NewTotalPcsNT_1', 'NewTotalPriceNT_1',
            'NewTotalDiffNavNT_1', 'NewTotalDiffCalNT_1',
            'a7f1fgbu02sPcsNT_1', 'a7f1fgbu02sPriceNT_1', 'a7f2fgbu10sPcsNT_1', 'a7f2fgbu10sPriceNT_1',
            'a7f2thbu05sPcsNT_1', 'a7f2thbu05sPriceNT_1', 'a7f2debu10sPcsNT_1', 'a7f2debu10sPriceNT_1',
            'a7f2exbu11sPcsNT_1', 'a7f2exbu11sPriceNT_1', 'a7f2twbu04sPcsNT_1', 'a7f2twbu04sPriceNT_1',
            'a7f2twbu07sPcsNT_1', 'a7f2twbu07sPriceNT_1', 'a7f2cebu10sPcsNT_1', 'a7f2cebu10sPriceNT_1',
            'a8f1fgbu02sPcsNT_1', 'a8f1fgbu02sPriceNT_1', 'a8f2fgbu10sPcsNT_1', 'a8f2fgbu10sPriceNT_1',
            'a8f2thbu05sPcsNT_1', 'a8f2thbu05sPriceNT_1', 'a8f2debu10sPcsNT_1', 'a8f2debu10sPriceNT_1',
            'a8f2exbu11sPcsNT_1', 'a8f2exbu11sPriceNT_1', 'a8f2twbu04sPcsNT_1', 'a8f2twbu04sPriceNT_1',
            'a8f2twbu07sPcsNT_1', 'a8f2twbu07sPriceNT_1', 'a8f2cebu10sPcsNT_1', 'a8f2cebu10sPriceNT_1',
            'DC1PcsNT_1', 'DC1PriceNT_1', 'DCPPcsNT_1', 'DCPPriceNT_1',
            'DCYPcsNT_1', 'DCYPriceNT_1', 'DEXPcsNT_1', 'DEXPriceNT_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////
        ];

        response.forEach((elementData, index) => {
            var element = Data[index];
            $('#' + element).text(elementData);
        });
    },
    error: function(error) {
        console.error(error);
    }
});
</script>