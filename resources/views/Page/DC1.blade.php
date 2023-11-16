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
                        <td>
                            <div id="PcsAfterNT_2"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNT_2"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNT_2"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNT_2"></div>
                        </td>
                        <td>
                            <div id="PoPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="PoPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="NegPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="NegPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="BackPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="BackPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNT_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNT_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNT_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNT_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNT_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNT_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNT_2"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNT_2"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNT_2"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNT_2"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNT_2"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNT_2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>NT</td>
                        <td>อวนมัลติโมโน</td>
                        <td>
                            <div id="PcsAfterNT_3"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNT_3"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNT_3"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNT_3"></div>
                        </td>
                        <td>
                            <div id="PoPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="PoPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="NegPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="NegPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="BackPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="BackPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNT_3"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNT_3"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNT_3"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNT_3"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNT_3"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNT_3"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNT_3"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNT_3"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNT_3"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNT_3"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNT_3"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNT_3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>NT</td>
                        <td>อวนโพลี</td>
                        <td>
                            <div id="PcsAfterNT_4"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNT_4"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNT_4"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNT_4"></div>
                        </td>
                        <td>
                            <div id="PoPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="PoPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="NegPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="NegPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="BackPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="BackPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNT_4"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNT_4"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNT_4"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNT_4"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNT_4"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNT_4"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNT_4"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNT_4"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNT_4"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNT_4"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNT_4"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNT_4"></div>
                        </td>
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

            'PcsAfterNT_2', 'PriceAfterNT_2', 'Pcs_AfterNT_2', 'Price_AfterNT_2',
            'PoPcsNT_2', 'PoPriceNT_2', 'NegPcsNT_2', 'NegPriceNT_2', 'BackPcsNT_2',
            'BackPriceNT_2', 'PurchasePcsNT_2', 'PurchasePriceNT_2', 'ReciveTranferPcsNT_2',
            'ReciveTranferPriceNT_2', 'ReturnItemPcsNT_2', 'ReturnItemPriceNT_2',
            'AllInPcsNT_2', 'AllInPriceNT_2', 'SendSalePcsNT_2', 'SendSalePriceNT_2',
            'ReciveTranOutPcsNT_2', 'ReciveTranOutPriceNT_2', 'ReturnStorePcsNT_2',
            'ReturnStorePriceNT_2', 'AllOutPcsNT_2', 'AllOutPriceNT_2', 'CalculatePcsNT_2',
            'CalculatePriceNT_2', 'NewCalculatePcsNT_2', 'NewCalculatePriceNT_2',
            'DiffPcsNT_2', 'DiffPriceNT_2', 'NewTotalPcsNT_2', 'NewTotalPriceNT_2',
            'NewTotalDiffNavNT_2', 'NewTotalDiffCalNT_2',
            'a7f1fgbu02sPcsNT_2', 'a7f1fgbu02sPriceNT_2', 'a7f2fgbu10sPcsNT_2', 'a7f2fgbu10sPriceNT_2',
            'a7f2thbu05sPcsNT_2', 'a7f2thbu05sPriceNT_2', 'a7f2debu10sPcsNT_2', 'a7f2debu10sPriceNT_2',
            'a7f2exbu11sPcsNT_2', 'a7f2exbu11sPriceNT_2', 'a7f2twbu04sPcsNT_2', 'a7f2twbu04sPriceNT_2',
            'a7f2twbu07sPcsNT_2', 'a7f2twbu07sPriceNT_2', 'a7f2cebu10sPcsNT_2', 'a7f2cebu10sPriceNT_2',
            'a8f1fgbu02sPcsNT_2', 'a8f1fgbu02sPriceNT_2', 'a8f2fgbu10sPcsNT_2', 'a8f2fgbu10sPriceNT_2',
            'a8f2thbu05sPcsNT_2', 'a8f2thbu05sPriceNT_2', 'a8f2debu10sPcsNT_2', 'a8f2debu10sPriceNT_2',
            'a8f2exbu11sPcsNT_2', 'a8f2exbu11sPriceNT_2', 'a8f2twbu04sPcsNT_2', 'a8f2twbu04sPriceNT_2',
            'a8f2twbu07sPcsNT_2', 'a8f2twbu07sPriceNT_2', 'a8f2cebu10sPcsNT_2', 'a8f2cebu10sPriceNT_2',
            'DC1PcsNT_2', 'DC1PriceNT_2', 'DCPPcsNT_2', 'DCPPriceNT_2',
            'DCYPcsNT_2', 'DCYPriceNT_2', 'DEXPcsNT_2', 'DEXPriceNT_2',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterNT_3', 'PriceAfterNT_3', 'Pcs_AfterNT_3', 'Price_AfterNT_3',
            'PoPcsNT_3', 'PoPriceNT_3', 'NegPcsNT_3', 'NegPriceNT_3', 'BackPcsNT_3',
            'BackPriceNT_3', 'PurchasePcsNT_3', 'PurchasePriceNT_3', 'ReciveTranferPcsNT_3',
            'ReciveTranferPriceNT_3', 'ReturnItemPcsNT_3', 'ReturnItemPriceNT_3',
            'AllInPcsNT_3', 'AllInPriceNT_3', 'SendSalePcsNT_3', 'SendSalePriceNT_3',
            'ReciveTranOutPcsNT_3', 'ReciveTranOutPriceNT_3', 'ReturnStorePcsNT_3',
            'ReturnStorePriceNT_3', 'AllOutPcsNT_3', 'AllOutPriceNT_3', 'CalculatePcsNT_3',
            'CalculatePriceNT_3', 'NewCalculatePcsNT_3', 'NewCalculatePriceNT_3',
            'DiffPcsNT_3', 'DiffPriceNT_3', 'NewTotalPcsNT_3', 'NewTotalPriceNT_3',
            'NewTotalDiffNavNT_3', 'NewTotalDiffCalNT_3',
            'a7f1fgbu02sPcsNT_3', 'a7f1fgbu02sPriceNT_3', 'a7f2fgbu10sPcsNT_3', 'a7f2fgbu10sPriceNT_3',
            'a7f2thbu05sPcsNT_3', 'a7f2thbu05sPriceNT_3', 'a7f2debu10sPcsNT_3', 'a7f2debu10sPriceNT_3',
            'a7f2exbu11sPcsNT_3', 'a7f2exbu11sPriceNT_3', 'a7f2twbu04sPcsNT_3', 'a7f2twbu04sPriceNT_3',
            'a7f2twbu07sPcsNT_3', 'a7f2twbu07sPriceNT_3', 'a7f2cebu10sPcsNT_3', 'a7f2cebu10sPriceNT_3',
            'a8f1fgbu02sPcsNT_3', 'a8f1fgbu02sPriceNT_3', 'a8f2fgbu10sPcsNT_3', 'a8f2fgbu10sPriceNT_3',
            'a8f2thbu05sPcsNT_3', 'a8f2thbu05sPriceNT_3', 'a8f2debu10sPcsNT_3', 'a8f2debu10sPriceNT_3',
            'a8f2exbu11sPcsNT_3', 'a8f2exbu11sPriceNT_3', 'a8f2twbu04sPcsNT_3', 'a8f2twbu04sPriceNT_3',
            'a8f2twbu07sPcsNT_3', 'a8f2twbu07sPriceNT_3', 'a8f2cebu10sPcsNT_3', 'a8f2cebu10sPriceNT_3',
            'DC1PcsNT_3', 'DC1PriceNT_3', 'DCPPcsNT_3', 'DCPPriceNT_3',
            'DCYPcsNT_3', 'DCYPriceNT_3', 'DEXPcsNT_3', 'DEXPriceNT_3',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterNT_4', 'PriceAfterNT_4', 'Pcs_AfterNT_4', 'Price_AfterNT_4',
            'PoPcsNT_4', 'PoPriceNT_4', 'NegPcsNT_4', 'NegPriceNT_4', 'BackPcsNT_4',
            'BackPriceNT_4', 'PurchasePcsNT_4', 'PurchasePriceNT_4', 'ReciveTranferPcsNT_4',
            'ReciveTranferPriceNT_4', 'ReturnItemPcsNT_4', 'ReturnItemPriceNT_4',
            'AllInPcsNT_4', 'AllInPriceNT_4', 'SendSalePcsNT_4', 'SendSalePriceNT_4',
            'ReciveTranOutPcsNT_4', 'ReciveTranOutPriceNT_4', 'ReturnStorePcsNT_4',
            'ReturnStorePriceNT_4', 'AllOutPcsNT_4', 'AllOutPriceNT_4', 'CalculatePcsNT_4',
            'CalculatePriceNT_4', 'NewCalculatePcsNT_4', 'NewCalculatePriceNT_4',
            'DiffPcsNT_4', 'DiffPriceNT_4', 'NewTotalPcsNT_4', 'NewTotalPriceNT_4',
            'NewTotalDiffNavNT_4', 'NewTotalDiffCalNT_4',
            'a7f1fgbu02sPcsNT_4', 'a7f1fgbu02sPriceNT_4', 'a7f2fgbu10sPcsNT_4', 'a7f2fgbu10sPriceNT_4',
            'a7f2thbu05sPcsNT_4', 'a7f2thbu05sPriceNT_4', 'a7f2debu10sPcsNT_4', 'a7f2debu10sPriceNT_4',
            'a7f2exbu11sPcsNT_4', 'a7f2exbu11sPriceNT_4', 'a7f2twbu04sPcsNT_4', 'a7f2twbu04sPriceNT_4',
            'a7f2twbu07sPcsNT_4', 'a7f2twbu07sPriceNT_4', 'a7f2cebu10sPcsNT_4', 'a7f2cebu10sPriceNT_4',
            'a8f1fgbu02sPcsNT_4', 'a8f1fgbu02sPriceNT_4', 'a8f2fgbu10sPcsNT_4', 'a8f2fgbu10sPriceNT_4',
            'a8f2thbu05sPcsNT_4', 'a8f2thbu05sPriceNT_4', 'a8f2debu10sPcsNT_4', 'a8f2debu10sPriceNT_4',
            'a8f2exbu11sPcsNT_4', 'a8f2exbu11sPriceNT_4', 'a8f2twbu04sPcsNT_4', 'a8f2twbu04sPriceNT_4',
            'a8f2twbu07sPcsNT_4', 'a8f2twbu07sPriceNT_4', 'a8f2cebu10sPcsNT_4', 'a8f2cebu10sPriceNT_4',
            'DC1PcsNT_4', 'DC1PriceNT_4', 'DCPPcsNT_4', 'DCPPriceNT_4',
            'DCYPcsNT_4', 'DCYPriceNT_4', 'DEXPcsNT_4', 'DEXPriceNT_4',

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