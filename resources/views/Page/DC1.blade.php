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
                        <td>
                            <div id="PcsAfterSNT_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSNT_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSNT_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSNT_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSNT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSNT_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSNT_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSNT_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>SNT</td>
                        <td>อวนโพลี</td>
                        <td>
                            <div id="PcsAfterSNT_2"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSNT_2"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSNT_2"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSNT_2"></div>
                        </td>
                        <td>
                            <div id="PoPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="PoPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="NegPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="NegPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="BackPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="BackPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSNT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSNT_2"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSNT_2"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSNT_2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                        <td>
                            <div id="PcsAfterNT_All"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNT_All"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNT_All"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNT_All"></div>
                        </td>
                        <td>
                            <div id="PoPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="PoPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="NegPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="NegPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="BackPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="BackPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNT_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNT_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNT_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNT_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNT_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNT_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNT_All"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNT_All"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNT_All"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNT_All"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNT_All"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNT_All"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="7">อวนรุม</td>
                    </tr>
                    <tr>
                        <td>MT</td>
                        <td>อวนรุม</td>
                        <td>
                            <div id="PcsAfterMT_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนแห</td>
                        <td>
                            <div id="PcsAfterMT_2"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_2"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_2"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_2"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_2"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_2"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_2"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_2"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_2"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนยอสำเร็จรูป</td>
                        <td>
                            <div id="PcsAfterMT_3"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_3"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_3"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_3"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_3"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_3"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_3"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_3"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_3"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_3"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_3"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_3"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_3"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_3"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_3"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_3"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนสามชั้นสำเร็จรูป</td>
                        <td>
                            <div id="PcsAfterMT_4"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_4"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_4"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_4"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_4"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_4"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_4"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_4"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_4"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_4"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_4"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_4"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_4"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_4"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_4"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_4"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT</td>
                        <td>ข่ายนกสำเร็จรูป</td>
                        <td>
                            <div id="PcsAfterMT_5"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_5"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_5"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_5"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_5"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_5"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_5"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_5"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_5"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_5"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_5"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_5"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_5"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_5"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_5"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_5"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_5"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT+SMT</td>
                        <td>อวนกระชัง</td>
                        <td>
                            <div id="PcsAfterMT_6"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_6"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_6"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_6"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_6"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_6"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_6"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_6"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_6"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_6"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_6"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_6"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_6"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_6"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_6"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_6"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_6"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                        <td>
                            <div id="PcsAfterMT_All"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT_All"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT_All"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT_All"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT_All"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT_All"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT_All"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT_All"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT_All"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT_All"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="7">ด้ายโพลี</td>
                    </tr>
                    <tr>
                        <td>TW</td>
                        <td>ด้ายไนลอน</td>
                        <td>
                            <div id="PcsAfterTW_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTW_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTW_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTW_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTW_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTW_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTW_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTW_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTW_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTW_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTW_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTW_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTW_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTW_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTW_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTW_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>TW</td>
                        <td>ด้ายโพลี</td>
                        <td>
                            <div id="PcsAfterTW_2"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTW_2"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTW_2"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTW_2"></div>
                        </td>
                        <td>
                            <div id="PoPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="PoPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="NegPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="NegPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="BackPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="BackPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTW_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTW_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTW_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTW_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTW_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTW_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTW_2"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTW_2"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTW_2"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTW_2"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTW_2"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTW_2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>STW</td>
                        <td>ด้ายไนลอน</td>
                        <td>
                            <div id="PcsAfterSTW_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSTW_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSTW_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSTW_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSTW_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSTW_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSTW_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSTW_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>STW</td>
                        <td>ด้ายโพลี</td>
                        <td>
                            <div id="PcsAfterSTW_2"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSTW_2"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSTW_2"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSTW_2"></div>
                        </td>
                        <td>
                            <div id="PoPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="PoPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="NegPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="NegPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="BackPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="BackPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSTW_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSTW_2"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSTW_2"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSTW_2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>LN</td>
                        <td>ด้ายโมโน</td>
                        <td>
                            <div id="PcsAfterLN_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterLN_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterLN_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterLN_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsLN_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsLN_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceLN_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsLN_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceLN_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsLN_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceLN_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsLN_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceLN_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceLN_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsLN_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceLN_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>SLN</td>
                        <td>ด้ายโมโน</td>
                        <td>
                            <div id="PcsAfterSLN_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSLN_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSLN_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSLN_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSLN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSLN_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSLN_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSLN_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                        <td>
                            <div id="PcsAfterTW_All"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTW_All"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTW_All"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTW_All"></div>
                        </td>
                        <td>
                            <div id="PoPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="PoPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="NegPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="NegPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="BackPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="BackPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTW_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTW_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTW_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTW_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTW_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTW_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTW_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTW_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTW_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTW_All"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTW_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTW_All"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTW_All"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTW_All"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTW_All"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTW_All"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="11">อื่นๆ</td>
                    </tr>
                    <tr>
                        <td>FN+SFN</td>
                        <td>ผ้ามุ้ง</td>
                        <td>
                            <div id="PcsAfterFN_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterFN_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterFN_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterFN_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsFN_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceFN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsFN_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceFN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsFN_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceFN_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsFN_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceFN_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsFN_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceFN_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavFN_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsFN_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceFN_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceFN_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsFN_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceFN_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>กระชังผ้ามุ้ง</td>
                        <td>
                            <div id="PcsAfterAS_1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_1"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>เชือก-ด้าย</td>
                        <td>
                            <div id="PcsAfterAS_2"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_2"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_2"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_2"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_2"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_2"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_2"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_2"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_2"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_2"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_2"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_2"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_2"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_2"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_2"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ดะกั่ว-ทุ่นลอย</td>
                        <td>
                            <div id="PcsAfterAS_3"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_3"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_3"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_3"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_3"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_3"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_3"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_3"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_3"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_3"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_3"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_3"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_3"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_3"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_3"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_3"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_3"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ตาข่าย PVC</td>
                        <td>
                            <div id="PcsAfterAS_4"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_4"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_4"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_4"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_4"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_4"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_4"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_4"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_4"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_4"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_4"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_4"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_4"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_4"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_4"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_4"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_4"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ผ้าพลางแสง</td>
                        <td>
                            <div id="PcsAfterAS_5"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_5"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_5"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_5"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_5"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_5"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_5"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_5"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_5"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_5"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_5"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_5"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_5"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_5"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_5"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_5"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_5"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_5"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>อวนลากกุ้ง</td>
                        <td>
                            <div id="PcsAfterAS_6"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_6"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_6"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_6"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_6"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_6"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_6"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_6"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_6"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_6"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_6"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_6"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_6"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_6"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_6"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_6"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_6"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_6"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>คอนโด</td>
                        <td>
                            <div id="PcsAfterAS_7"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_7"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_7"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_7"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_7"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_7"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_7"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_7"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_7"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_7"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_7"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_7"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_7"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_7"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_7"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_7"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_7"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_7"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_7"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_7"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ลอบปู</td>
                        <td>
                            <div id="PcsAfterAS_8"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_8"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_8"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_8"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_8"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_8"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_8"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_8"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_8"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_8"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_8"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_8"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_8"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_8"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_8"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_8"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_8"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_8"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_8"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_8"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>AS</td>
                        <td>ตาข่ายกรงไก่</td>
                        <td>
                            <div id="PcsAfterAS_9"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_9"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_9"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_9"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_9"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_9"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_9"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_9"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_9"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_9"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_9"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_9"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_9"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_9"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_9"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_9"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_9"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_9"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_9"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_9"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม</td>
                        <td>
                            <div id="PcsAfterAS_All"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS_All"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS_All"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS_All"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS_All"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS_All"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS_All"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS_All"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS_All"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS_All"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">รวมทั้งหมด</td>
                        <td>
                            <div id="PcsAfterTotal_All"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTotal_All"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTotal_All"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTotal_All"></div>
                        </td>
                        <td>
                            <div id="PoPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="PoPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="NegPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="NegPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="BackPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="BackPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTotal_All"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTotal_All"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTotal_All"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTotal_All"></div>
                        </td>
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

        var Data = [
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

            'PcsAfterSNT_1', 'PriceAfterSNT_1', 'Pcs_AfterSNT_1', 'Price_AfterSNT_1',
            'PoPcsSNT_1', 'PoPriceSNT_1', 'NegPcsSNT_1', 'NegPriceSNT_1', 'BackPcsSNT_1',
            'BackPriceSNT_1', 'PurchasePcsSNT_1', 'PurchasePriceSNT_1', 'ReciveTranferPcsSNT_1',
            'ReciveTranferPriceSNT_1', 'ReturnItemPcsSNT_1', 'ReturnItemPriceSNT_1',
            'AllInPcsSNT_1', 'AllInPriceSNT_1', 'SendSalePcsSNT_1', 'SendSalePriceSNT_1',
            'ReciveTranOutPcsSNT_1', 'ReciveTranOutPriceSNT_1', 'ReturnStorePcsSNT_1',
            'ReturnStorePriceSNT_1', 'AllOutPcsSNT_1', 'AllOutPriceSNT_1', 'CalculatePcsSNT_1',
            'CalculatePriceSNT_1', 'NewCalculatePcsSNT_1', 'NewCalculatePriceSNT_1',
            'DiffPcsSNT_1', 'DiffPriceSNT_1', 'NewTotalPcsSNT_1', 'NewTotalPriceSNT_1',
            'NewTotalDiffNavSNT_1', 'NewTotalDiffCalSNT_1',
            'a7f1fgbu02sPcsSNT_1', 'a7f1fgbu02sPriceSNT_1', 'a7f2fgbu10sPcsSNT_1', 'a7f2fgbu10sPriceSNT_1',
            'a7f2thbu05sPcsSNT_1', 'a7f2thbu05sPriceSNT_1', 'a7f2debu10sPcsSNT_1', 'a7f2debu10sPriceSNT_1',
            'a7f2exbu11sPcsSNT_1', 'a7f2exbu11sPriceSNT_1', 'a7f2twbu04sPcsSNT_1', 'a7f2twbu04sPriceSNT_1',
            'a7f2twbu07sPcsSNT_1', 'a7f2twbu07sPriceSNT_1', 'a7f2cebu10sPcsSNT_1', 'a7f2cebu10sPriceSNT_1',
            'a8f1fgbu02sPcsSNT_1', 'a8f1fgbu02sPriceSNT_1', 'a8f2fgbu10sPcsSNT_1', 'a8f2fgbu10sPriceSNT_1',
            'a8f2thbu05sPcsSNT_1', 'a8f2thbu05sPriceSNT_1', 'a8f2debu10sPcsSNT_1', 'a8f2debu10sPriceSNT_1',
            'a8f2exbu11sPcsSNT_1', 'a8f2exbu11sPriceSNT_1', 'a8f2twbu04sPcsSNT_1', 'a8f2twbu04sPriceSNT_1',
            'a8f2twbu07sPcsSNT_1', 'a8f2twbu07sPriceSNT_1', 'a8f2cebu10sPcsSNT_1', 'a8f2cebu10sPriceSNT_1',
            'DC1PcsSNT_1', 'DC1PriceSNT_1', 'DCPPcsSNT_1', 'DCPPriceSNT_1',
            'DCYPcsSNT_1', 'DCYPriceSNT_1', 'DEXPcsSNT_1', 'DEXPriceSNT_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterSNT_2', 'PriceAfterSNT_2', 'Pcs_AfterSNT_2', 'Price_AfterSNT_2',
            'PoPcsSNT_2', 'PoPriceSNT_2', 'NegPcsSNT_2', 'NegPriceSNT_2', 'BackPcsSNT_2',
            'BackPriceSNT_2', 'PurchasePcsSNT_2', 'PurchasePriceSNT_2', 'ReciveTranferPcsSNT_2',
            'ReciveTranferPriceSNT_2', 'ReturnItemPcsSNT_2', 'ReturnItemPriceSNT_2',
            'AllInPcsSNT_2', 'AllInPriceSNT_2', 'SendSalePcsSNT_2', 'SendSalePriceSNT_2',
            'ReciveTranOutPcsSNT_2', 'ReciveTranOutPriceSNT_2', 'ReturnStorePcsSNT_2',
            'ReturnStorePriceSNT_2', 'AllOutPcsSNT_2', 'AllOutPriceSNT_2', 'CalculatePcsSNT_2',
            'CalculatePriceSNT_2', 'NewCalculatePcsSNT_2', 'NewCalculatePriceSNT_2',
            'DiffPcsSNT_2', 'DiffPriceSNT_2', 'NewTotalPcsSNT_2', 'NewTotalPriceSNT_2',
            'NewTotalDiffNavSNT_2', 'NewTotalDiffCalSNT_2',
            'a7f1fgbu02sPcsSNT_2', 'a7f1fgbu02sPriceSNT_2', 'a7f2fgbu10sPcsSNT_2', 'a7f2fgbu10sPriceSNT_2',
            'a7f2thbu05sPcsSNT_2', 'a7f2thbu05sPriceSNT_2', 'a7f2debu10sPcsSNT_2', 'a7f2debu10sPriceSNT_2',
            'a7f2exbu11sPcsSNT_2', 'a7f2exbu11sPriceSNT_2', 'a7f2twbu04sPcsSNT_2', 'a7f2twbu04sPriceSNT_2',
            'a7f2twbu07sPcsSNT_2', 'a7f2twbu07sPriceSNT_2', 'a7f2cebu10sPcsSNT_2', 'a7f2cebu10sPriceSNT_2',
            'a8f1fgbu02sPcsSNT_2', 'a8f1fgbu02sPriceSNT_2', 'a8f2fgbu10sPcsSNT_2', 'a8f2fgbu10sPriceSNT_2',
            'a8f2thbu05sPcsSNT_2', 'a8f2thbu05sPriceSNT_2', 'a8f2debu10sPcsSNT_2', 'a8f2debu10sPriceSNT_2',
            'a8f2exbu11sPcsSNT_2', 'a8f2exbu11sPriceSNT_2', 'a8f2twbu04sPcsSNT_2', 'a8f2twbu04sPriceSNT_2',
            'a8f2twbu07sPcsSNT_2', 'a8f2twbu07sPriceSNT_2', 'a8f2cebu10sPcsSNT_2', 'a8f2cebu10sPriceSNT_2',
            'DC1PcsSNT_2', 'DC1PriceSNT_2', 'DCPPcsSNT_2', 'DCPPriceSNT_2',
            'DCYPcsSNT_2', 'DCYPriceSNT_2', 'DEXPcsSNT_2', 'DEXPriceSNT_2',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterNT_All', 'PriceAfterNT_All', 'Pcs_AfterNT_All', 'Price_AfterNT_All',
            'PoPcsNT_All', 'PoPriceNT_All', 'NegPcsNT_All', 'NegPriceNT_All', 'BackPcsNT_All',
            'BackPriceNT_All', 'PurchasePcsNT_All', 'PurchasePriceNT_All', 'ReciveTranferPcsNT_All',
            'ReciveTranferPriceNT_All', 'ReturnItemPcsNT_All', 'ReturnItemPriceNT_All',
            'AllInPcsNT_All', 'AllInPriceNT_All', 'SendSalePcsNT_All', 'SendSalePriceNT_All',
            'ReciveTranOutPcsNT_All', 'ReciveTranOutPriceNT_All', 'ReturnStorePcsNT_All',
            'ReturnStorePriceNT_All', 'AllOutPcsNT_All', 'AllOutPriceNT_All', 'CalculatePcsNT_All',
            'CalculatePriceNT_All', 'NewCalculatePcsNT_All', 'NewCalculatePriceNT_All',
            'DiffPcsNT_All', 'DiffPriceNT_All', 'NewTotalPcsNT_All', 'NewTotalPriceNT_All',
            'NewTotalDiffNavNT_All', 'NewTotalDiffCalNT_All',
            'a7f1fgbu02sPcsNT_All', 'a7f1fgbu02sPriceNT_All', 'a7f2fgbu10sPcsNT_All', 'a7f2fgbu10sPriceNT_All',
            'a7f2thbu05sPcsNT_All', 'a7f2thbu05sPriceNT_All', 'a7f2debu10sPcsNT_All', 'a7f2debu10sPriceNT_All',
            'a7f2exbu11sPcsNT_All', 'a7f2exbu11sPriceNT_All', 'a7f2twbu04sPcsNT_All', 'a7f2twbu04sPriceNT_All',
            'a7f2twbu07sPcsNT_All', 'a7f2twbu07sPriceNT_All', 'a7f2cebu10sPcsNT_All', 'a7f2cebu10sPriceNT_All',
            'a8f1fgbu02sPcsNT_All', 'a8f1fgbu02sPriceNT_All', 'a8f2fgbu10sPcsNT_All', 'a8f2fgbu10sPriceNT_All',
            'a8f2thbu05sPcsNT_All', 'a8f2thbu05sPriceNT_All', 'a8f2debu10sPcsNT_All', 'a8f2debu10sPriceNT_All',
            'a8f2exbu11sPcsNT_All', 'a8f2exbu11sPriceNT_All', 'a8f2twbu04sPcsNT_All', 'a8f2twbu04sPriceNT_All',
            'a8f2twbu07sPcsNT_All', 'a8f2twbu07sPriceNT_All', 'a8f2cebu10sPcsNT_All', 'a8f2cebu10sPriceNT_All',
            'DC1PcsNT_All', 'DC1PriceNT_All', 'DCPPcsNT_All', 'DCPPriceNT_All',
            'DCYPcsNT_All', 'DCYPriceNT_All', 'DEXPcsNT_All', 'DEXPriceNT_All',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_1', 'PriceAfterMT_1', 'Pcs_AfterMT_1', 'Price_AfterMT_1',
            'PoPcsMT_1', 'PoPriceMT_1', 'NegPcsMT_1', 'NegPriceMT_1', 'BackPcsMT_1',
            'BackPriceMT_1', 'PurchasePcsMT_1', 'PurchasePriceMT_1', 'ReciveTranferPcsMT_1',
            'ReciveTranferPriceMT_1', 'ReturnItemPcsMT_1', 'ReturnItemPriceMT_1',
            'AllInPcsMT_1', 'AllInPriceMT_1', 'SendSalePcsMT_1', 'SendSalePriceMT_1',
            'ReciveTranOutPcsMT_1', 'ReciveTranOutPriceMT_1', 'ReturnStorePcsMT_1',
            'ReturnStorePriceMT_1', 'AllOutPcsMT_1', 'AllOutPriceMT_1', 'CalculatePcsMT_1',
            'CalculatePriceMT_1', 'NewCalculatePcsMT_1', 'NewCalculatePriceMT_1',
            'DiffPcsMT_1', 'DiffPriceMT_1', 'NewTotalPcsMT_1', 'NewTotalPriceMT_1',
            'NewTotalDiffNavMT_1', 'NewTotalDiffCalMT_1',
            'a7f1fgbu02sPcsMT_1', 'a7f1fgbu02sPriceMT_1', 'a7f2fgbu10sPcsMT_1', 'a7f2fgbu10sPriceMT_1',
            'a7f2thbu05sPcsMT_1', 'a7f2thbu05sPriceMT_1', 'a7f2debu10sPcsMT_1', 'a7f2debu10sPriceMT_1',
            'a7f2exbu11sPcsMT_1', 'a7f2exbu11sPriceMT_1', 'a7f2twbu04sPcsMT_1', 'a7f2twbu04sPriceMT_1',
            'a7f2twbu07sPcsMT_1', 'a7f2twbu07sPriceMT_1', 'a7f2cebu10sPcsMT_1', 'a7f2cebu10sPriceMT_1',
            'a8f1fgbu02sPcsMT_1', 'a8f1fgbu02sPriceMT_1', 'a8f2fgbu10sPcsMT_1', 'a8f2fgbu10sPriceMT_1',
            'a8f2thbu05sPcsMT_1', 'a8f2thbu05sPriceMT_1', 'a8f2debu10sPcsMT_1', 'a8f2debu10sPriceMT_1',
            'a8f2exbu11sPcsMT_1', 'a8f2exbu11sPriceMT_1', 'a8f2twbu04sPcsMT_1', 'a8f2twbu04sPriceMT_1',
            'a8f2twbu07sPcsMT_1', 'a8f2twbu07sPriceMT_1', 'a8f2cebu10sPcsMT_1', 'a8f2cebu10sPriceMT_1',
            'DC1PcsMT_1', 'DC1PriceMT_1', 'DCPPcsMT_1', 'DCPPriceMT_1',
            'DCYPcsMT_1', 'DCYPriceMT_1', 'DEXPcsMT_1', 'DEXPriceMT_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_2', 'PriceAfterMT_2', 'Pcs_AfterMT_2', 'Price_AfterMT_2',
            'PoPcsMT_2', 'PoPriceMT_2', 'NegPcsMT_2', 'NegPriceMT_2', 'BackPcsMT_2',
            'BackPriceMT_2', 'PurchasePcsMT_2', 'PurchasePriceMT_2', 'ReciveTranferPcsMT_2',
            'ReciveTranferPriceMT_2', 'ReturnItemPcsMT_2', 'ReturnItemPriceMT_2',
            'AllInPcsMT_2', 'AllInPriceMT_2', 'SendSalePcsMT_2', 'SendSalePriceMT_2',
            'ReciveTranOutPcsMT_2', 'ReciveTranOutPriceMT_2', 'ReturnStorePcsMT_2',
            'ReturnStorePriceMT_2', 'AllOutPcsMT_2', 'AllOutPriceMT_2', 'CalculatePcsMT_2',
            'CalculatePriceMT_2', 'NewCalculatePcsMT_2', 'NewCalculatePriceMT_2',
            'DiffPcsMT_2', 'DiffPriceMT_2', 'NewTotalPcsMT_2', 'NewTotalPriceMT_2',
            'NewTotalDiffNavMT_2', 'NewTotalDiffCalMT_2',
            'a7f1fgbu02sPcsMT_2', 'a7f1fgbu02sPriceMT_2', 'a7f2fgbu10sPcsMT_2', 'a7f2fgbu10sPriceMT_2',
            'a7f2thbu05sPcsMT_2', 'a7f2thbu05sPriceMT_2', 'a7f2debu10sPcsMT_2', 'a7f2debu10sPriceMT_2',
            'a7f2exbu11sPcsMT_2', 'a7f2exbu11sPriceMT_2', 'a7f2twbu04sPcsMT_2', 'a7f2twbu04sPriceMT_2',
            'a7f2twbu07sPcsMT_2', 'a7f2twbu07sPriceMT_2', 'a7f2cebu10sPcsMT_2', 'a7f2cebu10sPriceMT_2',
            'a8f1fgbu02sPcsMT_2', 'a8f1fgbu02sPriceMT_2', 'a8f2fgbu10sPcsMT_2', 'a8f2fgbu10sPriceMT_2',
            'a8f2thbu05sPcsMT_2', 'a8f2thbu05sPriceMT_2', 'a8f2debu10sPcsMT_2', 'a8f2debu10sPriceMT_2',
            'a8f2exbu11sPcsMT_2', 'a8f2exbu11sPriceMT_2', 'a8f2twbu04sPcsMT_2', 'a8f2twbu04sPriceMT_2',
            'a8f2twbu07sPcsMT_2', 'a8f2twbu07sPriceMT_2', 'a8f2cebu10sPcsMT_2', 'a8f2cebu10sPriceMT_2',
            'DC1PcsMT_2', 'DC1PriceMT_2', 'DCPPcsMT_2', 'DCPPriceMT_2',
            'DCYPcsMT_2', 'DCYPriceMT_2', 'DEXPcsMT_2', 'DEXPriceMT_2',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_3', 'PriceAfterMT_3', 'Pcs_AfterMT_3', 'Price_AfterMT_3',
            'PoPcsMT_3', 'PoPriceMT_3', 'NegPcsMT_3', 'NegPriceMT_3', 'BackPcsMT_3',
            'BackPriceMT_3', 'PurchasePcsMT_3', 'PurchasePriceMT_3', 'ReciveTranferPcsMT_3',
            'ReciveTranferPriceMT_3', 'ReturnItemPcsMT_3', 'ReturnItemPriceMT_3',
            'AllInPcsMT_3', 'AllInPriceMT_3', 'SendSalePcsMT_3', 'SendSalePriceMT_3',
            'ReciveTranOutPcsMT_3', 'ReciveTranOutPriceMT_3', 'ReturnStorePcsMT_3',
            'ReturnStorePriceMT_3', 'AllOutPcsMT_3', 'AllOutPriceMT_3', 'CalculatePcsMT_3',
            'CalculatePriceMT_3', 'NewCalculatePcsMT_3', 'NewCalculatePriceMT_3',
            'DiffPcsMT_3', 'DiffPriceMT_3', 'NewTotalPcsMT_3', 'NewTotalPriceMT_3',
            'NewTotalDiffNavMT_3', 'NewTotalDiffCalMT_3',
            'a7f1fgbu02sPcsMT_3', 'a7f1fgbu02sPriceMT_3', 'a7f2fgbu10sPcsMT_3', 'a7f2fgbu10sPriceMT_3',
            'a7f2thbu05sPcsMT_3', 'a7f2thbu05sPriceMT_3', 'a7f2debu10sPcsMT_3', 'a7f2debu10sPriceMT_3',
            'a7f2exbu11sPcsMT_3', 'a7f2exbu11sPriceMT_3', 'a7f2twbu04sPcsMT_3', 'a7f2twbu04sPriceMT_3',
            'a7f2twbu07sPcsMT_3', 'a7f2twbu07sPriceMT_3', 'a7f2cebu10sPcsMT_3', 'a7f2cebu10sPriceMT_3',
            'a8f1fgbu02sPcsMT_3', 'a8f1fgbu02sPriceMT_3', 'a8f2fgbu10sPcsMT_3', 'a8f2fgbu10sPriceMT_3',
            'a8f2thbu05sPcsMT_3', 'a8f2thbu05sPriceMT_3', 'a8f2debu10sPcsMT_3', 'a8f2debu10sPriceMT_3',
            'a8f2exbu11sPcsMT_3', 'a8f2exbu11sPriceMT_3', 'a8f2twbu04sPcsMT_3', 'a8f2twbu04sPriceMT_3',
            'a8f2twbu07sPcsMT_3', 'a8f2twbu07sPriceMT_3', 'a8f2cebu10sPcsMT_3', 'a8f2cebu10sPriceMT_3',
            'DC1PcsMT_3', 'DC1PriceMT_3', 'DCPPcsMT_3', 'DCPPriceMT_3',
            'DCYPcsMT_3', 'DCYPriceMT_3', 'DEXPcsMT_3', 'DEXPriceMT_3',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_4', 'PriceAfterMT_4', 'Pcs_AfterMT_4', 'Price_AfterMT_4',
            'PoPcsMT_4', 'PoPriceMT_4', 'NegPcsMT_4', 'NegPriceMT_4', 'BackPcsMT_4',
            'BackPriceMT_4', 'PurchasePcsMT_4', 'PurchasePriceMT_4', 'ReciveTranferPcsMT_4',
            'ReciveTranferPriceMT_4', 'ReturnItemPcsMT_4', 'ReturnItemPriceMT_4',
            'AllInPcsMT_4', 'AllInPriceMT_4', 'SendSalePcsMT_4', 'SendSalePriceMT_4',
            'ReciveTranOutPcsMT_4', 'ReciveTranOutPriceMT_4', 'ReturnStorePcsMT_4',
            'ReturnStorePriceMT_4', 'AllOutPcsMT_4', 'AllOutPriceMT_4', 'CalculatePcsMT_4',
            'CalculatePriceMT_4', 'NewCalculatePcsMT_4', 'NewCalculatePriceMT_4',
            'DiffPcsMT_4', 'DiffPriceMT_4', 'NewTotalPcsMT_4', 'NewTotalPriceMT_4',
            'NewTotalDiffNavMT_4', 'NewTotalDiffCalMT_4',
            'a7f1fgbu02sPcsMT_4', 'a7f1fgbu02sPriceMT_4', 'a7f2fgbu10sPcsMT_4', 'a7f2fgbu10sPriceMT_4',
            'a7f2thbu05sPcsMT_4', 'a7f2thbu05sPriceMT_4', 'a7f2debu10sPcsMT_4', 'a7f2debu10sPriceMT_4',
            'a7f2exbu11sPcsMT_4', 'a7f2exbu11sPriceMT_4', 'a7f2twbu04sPcsMT_4', 'a7f2twbu04sPriceMT_4',
            'a7f2twbu07sPcsMT_4', 'a7f2twbu07sPriceMT_4', 'a7f2cebu10sPcsMT_4', 'a7f2cebu10sPriceMT_4',
            'a8f1fgbu02sPcsMT_4', 'a8f1fgbu02sPriceMT_4', 'a8f2fgbu10sPcsMT_4', 'a8f2fgbu10sPriceMT_4',
            'a8f2thbu05sPcsMT_4', 'a8f2thbu05sPriceMT_4', 'a8f2debu10sPcsMT_4', 'a8f2debu10sPriceMT_4',
            'a8f2exbu11sPcsMT_4', 'a8f2exbu11sPriceMT_4', 'a8f2twbu04sPcsMT_4', 'a8f2twbu04sPriceMT_4',
            'a8f2twbu07sPcsMT_4', 'a8f2twbu07sPriceMT_4', 'a8f2cebu10sPcsMT_4', 'a8f2cebu10sPriceMT_4',
            'DC1PcsMT_4', 'DC1PriceMT_4', 'DCPPcsMT_4', 'DCPPriceMT_4',
            'DCYPcsMT_4', 'DCYPriceMT_4', 'DEXPcsMT_4', 'DEXPriceMT_4',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_5', 'PriceAfterMT_5', 'Pcs_AfterMT_5', 'Price_AfterMT_5',
            'PoPcsMT_5', 'PoPriceMT_5', 'NegPcsMT_5', 'NegPriceMT_5', 'BackPcsMT_5',
            'BackPriceMT_5', 'PurchasePcsMT_5', 'PurchasePriceMT_5', 'ReciveTranferPcsMT_5',
            'ReciveTranferPriceMT_5', 'ReturnItemPcsMT_5', 'ReturnItemPriceMT_5',
            'AllInPcsMT_5', 'AllInPriceMT_5', 'SendSalePcsMT_5', 'SendSalePriceMT_5',
            'ReciveTranOutPcsMT_5', 'ReciveTranOutPriceMT_5', 'ReturnStorePcsMT_5',
            'ReturnStorePriceMT_5', 'AllOutPcsMT_5', 'AllOutPriceMT_5', 'CalculatePcsMT_5',
            'CalculatePriceMT_5', 'NewCalculatePcsMT_5', 'NewCalculatePriceMT_5',
            'DiffPcsMT_5', 'DiffPriceMT_5', 'NewTotalPcsMT_5', 'NewTotalPriceMT_5',
            'NewTotalDiffNavMT_5', 'NewTotalDiffCalMT_5',
            'a7f1fgbu02sPcsMT_5', 'a7f1fgbu02sPriceMT_5', 'a7f2fgbu10sPcsMT_5', 'a7f2fgbu10sPriceMT_5',
            'a7f2thbu05sPcsMT_5', 'a7f2thbu05sPriceMT_5', 'a7f2debu10sPcsMT_5', 'a7f2debu10sPriceMT_5',
            'a7f2exbu11sPcsMT_5', 'a7f2exbu11sPriceMT_5', 'a7f2twbu04sPcsMT_5', 'a7f2twbu04sPriceMT_5',
            'a7f2twbu07sPcsMT_5', 'a7f2twbu07sPriceMT_5', 'a7f2cebu10sPcsMT_5', 'a7f2cebu10sPriceMT_5',
            'a8f1fgbu02sPcsMT_5', 'a8f1fgbu02sPriceMT_5', 'a8f2fgbu10sPcsMT_5', 'a8f2fgbu10sPriceMT_5',
            'a8f2thbu05sPcsMT_5', 'a8f2thbu05sPriceMT_5', 'a8f2debu10sPcsMT_5', 'a8f2debu10sPriceMT_5',
            'a8f2exbu11sPcsMT_5', 'a8f2exbu11sPriceMT_5', 'a8f2twbu04sPcsMT_5', 'a8f2twbu04sPriceMT_5',
            'a8f2twbu07sPcsMT_5', 'a8f2twbu07sPriceMT_5', 'a8f2cebu10sPcsMT_5', 'a8f2cebu10sPriceMT_5',
            'DC1PcsMT_5', 'DC1PriceMT_5', 'DCPPcsMT_5', 'DCPPriceMT_5',
            'DCYPcsMT_5', 'DCYPriceMT_5', 'DEXPcsMT_5', 'DEXPriceMT_5',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_6', 'PriceAfterMT_6', 'Pcs_AfterMT_6', 'Price_AfterMT_6',
            'PoPcsMT_6', 'PoPriceMT_6', 'NegPcsMT_6', 'NegPriceMT_6', 'BackPcsMT_6',
            'BackPriceMT_6', 'PurchasePcsMT_6', 'PurchasePriceMT_6', 'ReciveTranferPcsMT_6',
            'ReciveTranferPriceMT_6', 'ReturnItemPcsMT_6', 'ReturnItemPriceMT_6',
            'AllInPcsMT_6', 'AllInPriceMT_6', 'SendSalePcsMT_6', 'SendSalePriceMT_6',
            'ReciveTranOutPcsMT_6', 'ReciveTranOutPriceMT_6', 'ReturnStorePcsMT_6',
            'ReturnStorePriceMT_6', 'AllOutPcsMT_6', 'AllOutPriceMT_6', 'CalculatePcsMT_6',
            'CalculatePriceMT_6', 'NewCalculatePcsMT_6', 'NewCalculatePriceMT_6',
            'DiffPcsMT_6', 'DiffPriceMT_6', 'NewTotalPcsMT_6', 'NewTotalPriceMT_6',
            'NewTotalDiffNavMT_6', 'NewTotalDiffCalMT_6',
            'a7f1fgbu02sPcsMT_6', 'a7f1fgbu02sPriceMT_6', 'a7f2fgbu10sPcsMT_6', 'a7f2fgbu10sPriceMT_6',
            'a7f2thbu05sPcsMT_6', 'a7f2thbu05sPriceMT_6', 'a7f2debu10sPcsMT_6', 'a7f2debu10sPriceMT_6',
            'a7f2exbu11sPcsMT_6', 'a7f2exbu11sPriceMT_6', 'a7f2twbu04sPcsMT_6', 'a7f2twbu04sPriceMT_6',
            'a7f2twbu07sPcsMT_6', 'a7f2twbu07sPriceMT_6', 'a7f2cebu10sPcsMT_6', 'a7f2cebu10sPriceMT_6',
            'a8f1fgbu02sPcsMT_6', 'a8f1fgbu02sPriceMT_6', 'a8f2fgbu10sPcsMT_6', 'a8f2fgbu10sPriceMT_6',
            'a8f2thbu05sPcsMT_6', 'a8f2thbu05sPriceMT_6', 'a8f2debu10sPcsMT_6', 'a8f2debu10sPriceMT_6',
            'a8f2exbu11sPcsMT_6', 'a8f2exbu11sPriceMT_6', 'a8f2twbu04sPcsMT_6', 'a8f2twbu04sPriceMT_6',
            'a8f2twbu07sPcsMT_6', 'a8f2twbu07sPriceMT_6', 'a8f2cebu10sPcsMT_6', 'a8f2cebu10sPriceMT_6',
            'DC1PcsMT_6', 'DC1PriceMT_6', 'DCPPcsMT_6', 'DCPPriceMT_6',
            'DCYPcsMT_6', 'DCYPriceMT_6', 'DEXPcsMT_6', 'DEXPriceMT_6',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterMT_All', 'PriceAfterMT_All', 'Pcs_AfterMT_All', 'Price_AfterMT_All',
            'PoPcsMT_All', 'PoPriceMT_All', 'NegPcsMT_All', 'NegPriceMT_All', 'BackPcsMT_All',
            'BackPriceMT_All', 'PurchasePcsMT_All', 'PurchasePriceMT_All', 'ReciveTranferPcsMT_All',
            'ReciveTranferPriceMT_All', 'ReturnItemPcsMT_All', 'ReturnItemPriceMT_All',
            'AllInPcsMT_All', 'AllInPriceMT_All', 'SendSalePcsMT_All', 'SendSalePriceMT_All',
            'ReciveTranOutPcsMT_All', 'ReciveTranOutPriceMT_All', 'ReturnStorePcsMT_All',
            'ReturnStorePriceMT_All', 'AllOutPcsMT_All', 'AllOutPriceMT_All', 'CalculatePcsMT_All',
            'CalculatePriceMT_All', 'NewCalculatePcsMT_All', 'NewCalculatePriceMT_All',
            'DiffPcsMT_All', 'DiffPriceMT_All', 'NewTotalPcsMT_All', 'NewTotalPriceMT_All',
            'NewTotalDiffNavMT_All', 'NewTotalDiffCalMT_All',
            'a7f1fgbu02sPcsMT_All', 'a7f1fgbu02sPriceMT_All', 'a7f2fgbu10sPcsMT_All', 'a7f2fgbu10sPriceMT_All',
            'a7f2thbu05sPcsMT_All', 'a7f2thbu05sPriceMT_All', 'a7f2debu10sPcsMT_All', 'a7f2debu10sPriceMT_All',
            'a7f2exbu11sPcsMT_All', 'a7f2exbu11sPriceMT_All', 'a7f2twbu04sPcsMT_All', 'a7f2twbu04sPriceMT_All',
            'a7f2twbu07sPcsMT_All', 'a7f2twbu07sPriceMT_All', 'a7f2cebu10sPcsMT_All', 'a7f2cebu10sPriceMT_All',
            'a8f1fgbu02sPcsMT_All', 'a8f1fgbu02sPriceMT_All', 'a8f2fgbu10sPcsMT_All', 'a8f2fgbu10sPriceMT_All',
            'a8f2thbu05sPcsMT_All', 'a8f2thbu05sPriceMT_All', 'a8f2debu10sPcsMT_All', 'a8f2debu10sPriceMT_All',
            'a8f2exbu11sPcsMT_All', 'a8f2exbu11sPriceMT_All', 'a8f2twbu04sPcsMT_All', 'a8f2twbu04sPriceMT_All',
            'a8f2twbu07sPcsMT_All', 'a8f2twbu07sPriceMT_All', 'a8f2cebu10sPcsMT_All', 'a8f2cebu10sPriceMT_All',
            'DC1PcsMT_All', 'DC1PriceMT_All', 'DCPPcsMT_All', 'DCPPriceMT_All',
            'DCYPcsMT_All', 'DCYPriceMT_All', 'DEXPcsMT_All', 'DEXPriceMT_All',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterTW_1', 'PriceAfterTW_1', 'Pcs_AfterTW_1', 'Price_AfterTW_1',
            'PoPcsTW_1', 'PoPriceTW_1', 'NegPcsTW_1', 'NegPriceTW_1', 'BackPcsTW_1',
            'BackPriceTW_1', 'PurchasePcsTW_1', 'PurchasePriceTW_1', 'ReciveTranferPcsTW_1',
            'ReciveTranferPriceTW_1', 'ReturnItemPcsTW_1', 'ReturnItemPriceTW_1',
            'AllInPcsTW_1', 'AllInPriceTW_1', 'SendSalePcsTW_1', 'SendSalePriceTW_1',
            'ReciveTranOutPcsTW_1', 'ReciveTranOutPriceTW_1', 'ReturnStorePcsTW_1',
            'ReturnStorePriceTW_1', 'AllOutPcsTW_1', 'AllOutPriceTW_1', 'CalculatePcsTW_1',
            'CalculatePriceTW_1', 'NewCalculatePcsTW_1', 'NewCalculatePriceTW_1',
            'DiffPcsTW_1', 'DiffPriceTW_1', 'NewTotalPcsTW_1', 'NewTotalPriceTW_1',
            'NewTotalDiffNavTW_1', 'NewTotalDiffCalTW_1',
            'a7f1fgbu02sPcsTW_1', 'a7f1fgbu02sPriceTW_1', 'a7f2fgbu10sPcsTW_1', 'a7f2fgbu10sPriceTW_1',
            'a7f2thbu05sPcsTW_1', 'a7f2thbu05sPriceTW_1', 'a7f2debu10sPcsTW_1', 'a7f2debu10sPriceTW_1',
            'a7f2exbu11sPcsTW_1', 'a7f2exbu11sPriceTW_1', 'a7f2twbu04sPcsTW_1', 'a7f2twbu04sPriceTW_1',
            'a7f2twbu07sPcsTW_1', 'a7f2twbu07sPriceTW_1', 'a7f2cebu10sPcsTW_1', 'a7f2cebu10sPriceTW_1',
            'a8f1fgbu02sPcsTW_1', 'a8f1fgbu02sPriceTW_1', 'a8f2fgbu10sPcsTW_1', 'a8f2fgbu10sPriceTW_1',
            'a8f2thbu05sPcsTW_1', 'a8f2thbu05sPriceTW_1', 'a8f2debu10sPcsTW_1', 'a8f2debu10sPriceTW_1',
            'a8f2exbu11sPcsTW_1', 'a8f2exbu11sPriceTW_1', 'a8f2twbu04sPcsTW_1', 'a8f2twbu04sPriceTW_1',
            'a8f2twbu07sPcsTW_1', 'a8f2twbu07sPriceTW_1', 'a8f2cebu10sPcsTW_1', 'a8f2cebu10sPriceTW_1',
            'DC1PcsTW_1', 'DC1PriceTW_1', 'DCPPcsTW_1', 'DCPPriceTW_1',
            'DCYPcsTW_1', 'DCYPriceTW_1', 'DEXPcsTW_1', 'DEXPriceTW_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterTW_2', 'PriceAfterTW_2', 'Pcs_AfterTW_2', 'Price_AfterTW_2',
            'PoPcsTW_2', 'PoPriceTW_2', 'NegPcsTW_2', 'NegPriceTW_2', 'BackPcsTW_2',
            'BackPriceTW_2', 'PurchasePcsTW_2', 'PurchasePriceTW_2', 'ReciveTranferPcsTW_2',
            'ReciveTranferPriceTW_2', 'ReturnItemPcsTW_2', 'ReturnItemPriceTW_2',
            'AllInPcsTW_2', 'AllInPriceTW_2', 'SendSalePcsTW_2', 'SendSalePriceTW_2',
            'ReciveTranOutPcsTW_2', 'ReciveTranOutPriceTW_2', 'ReturnStorePcsTW_2',
            'ReturnStorePriceTW_2', 'AllOutPcsTW_2', 'AllOutPriceTW_2', 'CalculatePcsTW_2',
            'CalculatePriceTW_2', 'NewCalculatePcsTW_2', 'NewCalculatePriceTW_2',
            'DiffPcsTW_2', 'DiffPriceTW_2', 'NewTotalPcsTW_2', 'NewTotalPriceTW_2',
            'NewTotalDiffNavTW_2', 'NewTotalDiffCalTW_2',
            'a7f1fgbu02sPcsTW_2', 'a7f1fgbu02sPriceTW_2', 'a7f2fgbu10sPcsTW_2', 'a7f2fgbu10sPriceTW_2',
            'a7f2thbu05sPcsTW_2', 'a7f2thbu05sPriceTW_2', 'a7f2debu10sPcsTW_2', 'a7f2debu10sPriceTW_2',
            'a7f2exbu11sPcsTW_2', 'a7f2exbu11sPriceTW_2', 'a7f2twbu04sPcsTW_2', 'a7f2twbu04sPriceTW_2',
            'a7f2twbu07sPcsTW_2', 'a7f2twbu07sPriceTW_2', 'a7f2cebu10sPcsTW_2', 'a7f2cebu10sPriceTW_2',
            'a8f1fgbu02sPcsTW_2', 'a8f1fgbu02sPriceTW_2', 'a8f2fgbu10sPcsTW_2', 'a8f2fgbu10sPriceTW_2',
            'a8f2thbu05sPcsTW_2', 'a8f2thbu05sPriceTW_2', 'a8f2debu10sPcsTW_2', 'a8f2debu10sPriceTW_2',
            'a8f2exbu11sPcsTW_2', 'a8f2exbu11sPriceTW_2', 'a8f2twbu04sPcsTW_2', 'a8f2twbu04sPriceTW_2',
            'a8f2twbu07sPcsTW_2', 'a8f2twbu07sPriceTW_2', 'a8f2cebu10sPcsTW_2', 'a8f2cebu10sPriceTW_2',
            'DC1PcsTW_2', 'DC1PriceTW_2', 'DCPPcsTW_2', 'DCPPriceTW_2',
            'DCYPcsTW_2', 'DCYPriceTW_2', 'DEXPcsTW_2', 'DEXPriceTW_2',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterSTW_1', 'PriceAfterSTW_1', 'Pcs_AfterSTW_1', 'Price_AfterSTW_1',
            'PoPcsSTW_1', 'PoPriceSTW_1', 'NegPcsSTW_1', 'NegPriceSTW_1', 'BackPcsSTW_1',
            'BackPriceSTW_1', 'PurchasePcsSTW_1', 'PurchasePriceSTW_1', 'ReciveTranferPcsSTW_1',
            'ReciveTranferPriceSTW_1', 'ReturnItemPcsSTW_1', 'ReturnItemPriceSTW_1',
            'AllInPcsSTW_1', 'AllInPriceSTW_1', 'SendSalePcsSTW_1', 'SendSalePriceSTW_1',
            'ReciveTranOutPcsSTW_1', 'ReciveTranOutPriceSTW_1', 'ReturnStorePcsSTW_1',
            'ReturnStorePriceSTW_1', 'AllOutPcsSTW_1', 'AllOutPriceSTW_1', 'CalculatePcsSTW_1',
            'CalculatePriceSTW_1', 'NewCalculatePcsSTW_1', 'NewCalculatePriceSTW_1',
            'DiffPcsSTW_1', 'DiffPriceSTW_1', 'NewTotalPcsSTW_1', 'NewTotalPriceSTW_1',
            'NewTotalDiffNavSTW_1', 'NewTotalDiffCalSTW_1',
            'a7f1fgbu02sPcsSTW_1', 'a7f1fgbu02sPriceSTW_1', 'a7f2fgbu10sPcsSTW_1', 'a7f2fgbu10sPriceSTW_1',
            'a7f2thbu05sPcsSTW_1', 'a7f2thbu05sPriceSTW_1', 'a7f2debu10sPcsSTW_1', 'a7f2debu10sPriceSTW_1',
            'a7f2exbu11sPcsSTW_1', 'a7f2exbu11sPriceSTW_1', 'a7f2twbu04sPcsSTW_1', 'a7f2twbu04sPriceSTW_1',
            'a7f2twbu07sPcsSTW_1', 'a7f2twbu07sPriceSTW_1', 'a7f2cebu10sPcsSTW_1', 'a7f2cebu10sPriceSTW_1',
            'a8f1fgbu02sPcsSTW_1', 'a8f1fgbu02sPriceSTW_1', 'a8f2fgbu10sPcsSTW_1', 'a8f2fgbu10sPriceSTW_1',
            'a8f2thbu05sPcsSTW_1', 'a8f2thbu05sPriceSTW_1', 'a8f2debu10sPcsSTW_1', 'a8f2debu10sPriceSTW_1',
            'a8f2exbu11sPcsSTW_1', 'a8f2exbu11sPriceSTW_1', 'a8f2twbu04sPcsSTW_1', 'a8f2twbu04sPriceSTW_1',
            'a8f2twbu07sPcsSTW_1', 'a8f2twbu07sPriceSTW_1', 'a8f2cebu10sPcsSTW_1', 'a8f2cebu10sPriceSTW_1',
            'DC1PcsSTW_1', 'DC1PriceSTW_1', 'DCPPcsSTW_1', 'DCPPriceSTW_1',
            'DCYPcsSTW_1', 'DCYPriceSTW_1', 'DEXPcsSTW_1', 'DEXPriceSTW_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterSTW_2', 'PriceAfterSTW_2', 'Pcs_AfterSTW_2', 'Price_AfterSTW_2',
            'PoPcsSTW_2', 'PoPriceSTW_2', 'NegPcsSTW_2', 'NegPriceSTW_2', 'BackPcsSTW_2',
            'BackPriceSTW_2', 'PurchasePcsSTW_2', 'PurchasePriceSTW_2', 'ReciveTranferPcsSTW_2',
            'ReciveTranferPriceSTW_2', 'ReturnItemPcsSTW_2', 'ReturnItemPriceSTW_2',
            'AllInPcsSTW_2', 'AllInPriceSTW_2', 'SendSalePcsSTW_2', 'SendSalePriceSTW_2',
            'ReciveTranOutPcsSTW_2', 'ReciveTranOutPriceSTW_2', 'ReturnStorePcsSTW_2',
            'ReturnStorePriceSTW_2', 'AllOutPcsSTW_2', 'AllOutPriceSTW_2', 'CalculatePcsSTW_2',
            'CalculatePriceSTW_2', 'NewCalculatePcsSTW_2', 'NewCalculatePriceSTW_2',
            'DiffPcsSTW_2', 'DiffPriceSTW_2', 'NewTotalPcsSTW_2', 'NewTotalPriceSTW_2',
            'NewTotalDiffNavSTW_2', 'NewTotalDiffCalSTW_2',
            'a7f1fgbu02sPcsSTW_2', 'a7f1fgbu02sPriceSTW_2', 'a7f2fgbu10sPcsSTW_2', 'a7f2fgbu10sPriceSTW_2',
            'a7f2thbu05sPcsSTW_2', 'a7f2thbu05sPriceSTW_2', 'a7f2debu10sPcsSTW_2', 'a7f2debu10sPriceSTW_2',
            'a7f2exbu11sPcsSTW_2', 'a7f2exbu11sPriceSTW_2', 'a7f2twbu04sPcsSTW_2', 'a7f2twbu04sPriceSTW_2',
            'a7f2twbu07sPcsSTW_2', 'a7f2twbu07sPriceSTW_2', 'a7f2cebu10sPcsSTW_2', 'a7f2cebu10sPriceSTW_2',
            'a8f1fgbu02sPcsSTW_2', 'a8f1fgbu02sPriceSTW_2', 'a8f2fgbu10sPcsSTW_2', 'a8f2fgbu10sPriceSTW_2',
            'a8f2thbu05sPcsSTW_2', 'a8f2thbu05sPriceSTW_2', 'a8f2debu10sPcsSTW_2', 'a8f2debu10sPriceSTW_2',
            'a8f2exbu11sPcsSTW_2', 'a8f2exbu11sPriceSTW_2', 'a8f2twbu04sPcsSTW_2', 'a8f2twbu04sPriceSTW_2',
            'a8f2twbu07sPcsSTW_2', 'a8f2twbu07sPriceSTW_2', 'a8f2cebu10sPcsSTW_2', 'a8f2cebu10sPriceSTW_2',
            'DC1PcsSTW_2', 'DC1PriceSTW_2', 'DCPPcsSTW_2', 'DCPPriceSTW_2',
            'DCYPcsSTW_2', 'DCYPriceSTW_2', 'DEXPcsSTW_2', 'DEXPriceSTW_2',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterLN_1', 'PriceAfterLN_1', 'Pcs_AfterLN_1', 'Price_AfterLN_1',
            'PoPcsLN_1', 'PoPriceLN_1', 'NegPcsLN_1', 'NegPriceLN_1', 'BackPcsLN_1',
            'BackPriceLN_1', 'PurchasePcsLN_1', 'PurchasePriceLN_1', 'ReciveTranferPcsLN_1',
            'ReciveTranferPriceLN_1', 'ReturnItemPcsLN_1', 'ReturnItemPriceLN_1',
            'AllInPcsLN_1', 'AllInPriceLN_1', 'SendSalePcsLN_1', 'SendSalePriceLN_1',
            'ReciveTranOutPcsLN_1', 'ReciveTranOutPriceLN_1', 'ReturnStorePcsLN_1',
            'ReturnStorePriceLN_1', 'AllOutPcsLN_1', 'AllOutPriceLN_1', 'CalculatePcsLN_1',
            'CalculatePriceLN_1', 'NewCalculatePcsLN_1', 'NewCalculatePriceLN_1',
            'DiffPcsLN_1', 'DiffPriceLN_1', 'NewTotalPcsLN_1', 'NewTotalPriceLN_1',
            'NewTotalDiffNavLN_1', 'NewTotalDiffCalLN_1',
            'a7f1fgbu02sPcsLN_1', 'a7f1fgbu02sPriceLN_1', 'a7f2fgbu10sPcsLN_1', 'a7f2fgbu10sPriceLN_1',
            'a7f2thbu05sPcsLN_1', 'a7f2thbu05sPriceLN_1', 'a7f2debu10sPcsLN_1', 'a7f2debu10sPriceLN_1',
            'a7f2exbu11sPcsLN_1', 'a7f2exbu11sPriceLN_1', 'a7f2twbu04sPcsLN_1', 'a7f2twbu04sPriceLN_1',
            'a7f2twbu07sPcsLN_1', 'a7f2twbu07sPriceLN_1', 'a7f2cebu10sPcsLN_1', 'a7f2cebu10sPriceLN_1',
            'a8f1fgbu02sPcsLN_1', 'a8f1fgbu02sPriceLN_1', 'a8f2fgbu10sPcsLN_1', 'a8f2fgbu10sPriceLN_1',
            'a8f2thbu05sPcsLN_1', 'a8f2thbu05sPriceLN_1', 'a8f2debu10sPcsLN_1', 'a8f2debu10sPriceLN_1',
            'a8f2exbu11sPcsLN_1', 'a8f2exbu11sPriceLN_1', 'a8f2twbu04sPcsLN_1', 'a8f2twbu04sPriceLN_1',
            'a8f2twbu07sPcsLN_1', 'a8f2twbu07sPriceLN_1', 'a8f2cebu10sPcsLN_1', 'a8f2cebu10sPriceLN_1',
            'DC1PcsLN_1', 'DC1PriceLN_1', 'DCPPcsLN_1', 'DCPPriceLN_1',
            'DCYPcsLN_1', 'DCYPriceLN_1', 'DEXPcsLN_1', 'DEXPriceLN_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterSLN_1', 'PriceAfterSLN_1', 'Pcs_AfterSLN_1', 'Price_AfterSLN_1',
            'PoPcsSLN_1', 'PoPriceSLN_1', 'NegPcsSLN_1', 'NegPriceSLN_1', 'BackPcsSLN_1',
            'BackPriceSLN_1', 'PurchasePcsSLN_1', 'PurchasePriceSLN_1', 'ReciveTranferPcsSLN_1',
            'ReciveTranferPriceSLN_1', 'ReturnItemPcsSLN_1', 'ReturnItemPriceSLN_1',
            'AllInPcsSLN_1', 'AllInPriceSLN_1', 'SendSalePcsSLN_1', 'SendSalePriceSLN_1',
            'ReciveTranOutPcsSLN_1', 'ReciveTranOutPriceSLN_1', 'ReturnStorePcsSLN_1',
            'ReturnStorePriceSLN_1', 'AllOutPcsSLN_1', 'AllOutPriceSLN_1', 'CalculatePcsSLN_1',
            'CalculatePriceSLN_1', 'NewCalculatePcsSLN_1', 'NewCalculatePriceSLN_1',
            'DiffPcsSLN_1', 'DiffPriceSLN_1', 'NewTotalPcsSLN_1', 'NewTotalPriceSLN_1',
            'NewTotalDiffNavSLN_1', 'NewTotalDiffCalSLN_1',
            'a7f1fgbu02sPcsSLN_1', 'a7f1fgbu02sPriceSLN_1', 'a7f2fgbu10sPcsSLN_1', 'a7f2fgbu10sPriceSLN_1',
            'a7f2thbu05sPcsSLN_1', 'a7f2thbu05sPriceSLN_1', 'a7f2debu10sPcsSLN_1', 'a7f2debu10sPriceSLN_1',
            'a7f2exbu11sPcsSLN_1', 'a7f2exbu11sPriceSLN_1', 'a7f2twbu04sPcsSLN_1', 'a7f2twbu04sPriceSLN_1',
            'a7f2twbu07sPcsSLN_1', 'a7f2twbu07sPriceSLN_1', 'a7f2cebu10sPcsSLN_1', 'a7f2cebu10sPriceSLN_1',
            'a8f1fgbu02sPcsSLN_1', 'a8f1fgbu02sPriceSLN_1', 'a8f2fgbu10sPcsSLN_1', 'a8f2fgbu10sPriceSLN_1',
            'a8f2thbu05sPcsSLN_1', 'a8f2thbu05sPriceSLN_1', 'a8f2debu10sPcsSLN_1', 'a8f2debu10sPriceSLN_1',
            'a8f2exbu11sPcsSLN_1', 'a8f2exbu11sPriceSLN_1', 'a8f2twbu04sPcsSLN_1', 'a8f2twbu04sPriceSLN_1',
            'a8f2twbu07sPcsSLN_1', 'a8f2twbu07sPriceSLN_1', 'a8f2cebu10sPcsSLN_1', 'a8f2cebu10sPriceSLN_1',
            'DC1PcsSLN_1', 'DC1PriceSLN_1', 'DCPPcsSLN_1', 'DCPPriceSLN_1',
            'DCYPcsSLN_1', 'DCYPriceSLN_1', 'DEXPcsSLN_1', 'DEXPriceSLN_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterTW_All', 'PriceAfterTW_All', 'Pcs_AfterTW_All', 'Price_AfterTW_All',
            'PoPcsTW_All', 'PoPriceTW_All', 'NegPcsTW_All', 'NegPriceTW_All', 'BackPcsTW_All',
            'BackPriceTW_All', 'PurchasePcsTW_All', 'PurchasePriceTW_All', 'ReciveTranferPcsTW_All',
            'ReciveTranferPriceTW_All', 'ReturnItemPcsTW_All', 'ReturnItemPriceTW_All',
            'AllInPcsTW_All', 'AllInPriceTW_All', 'SendSalePcsTW_All', 'SendSalePriceTW_All',
            'ReciveTranOutPcsTW_All', 'ReciveTranOutPriceTW_All', 'ReturnStorePcsTW_All',
            'ReturnStorePriceTW_All', 'AllOutPcsTW_All', 'AllOutPriceTW_All', 'CalculatePcsTW_All',
            'CalculatePriceTW_All', 'NewCalculatePcsTW_All', 'NewCalculatePriceTW_All',
            'DiffPcsTW_All', 'DiffPriceTW_All', 'NewTotalPcsTW_All', 'NewTotalPriceTW_All',
            'NewTotalDiffNavTW_All', 'NewTotalDiffCalTW_All',
            'a7f1fgbu02sPcsTW_All', 'a7f1fgbu02sPriceTW_All', 'a7f2fgbu10sPcsTW_All', 'a7f2fgbu10sPriceTW_All',
            'a7f2thbu05sPcsTW_All', 'a7f2thbu05sPriceTW_All', 'a7f2debu10sPcsTW_All', 'a7f2debu10sPriceTW_All',
            'a7f2exbu11sPcsTW_All', 'a7f2exbu11sPriceTW_All', 'a7f2twbu04sPcsTW_All', 'a7f2twbu04sPriceTW_All',
            'a7f2twbu07sPcsTW_All', 'a7f2twbu07sPriceTW_All', 'a7f2cebu10sPcsTW_All', 'a7f2cebu10sPriceTW_All',
            'a8f1fgbu02sPcsTW_All', 'a8f1fgbu02sPriceTW_All', 'a8f2fgbu10sPcsTW_All', 'a8f2fgbu10sPriceTW_All',
            'a8f2thbu05sPcsTW_All', 'a8f2thbu05sPriceTW_All', 'a8f2debu10sPcsTW_All', 'a8f2debu10sPriceTW_All',
            'a8f2exbu11sPcsTW_All', 'a8f2exbu11sPriceTW_All', 'a8f2twbu04sPcsTW_All', 'a8f2twbu04sPriceTW_All',
            'a8f2twbu07sPcsTW_All', 'a8f2twbu07sPriceTW_All', 'a8f2cebu10sPcsTW_All', 'a8f2cebu10sPriceTW_All',
            'DC1PcsTW_All', 'DC1PriceTW_All', 'DCPPcsTW_All', 'DCPPriceTW_All',
            'DCYPcsTW_All', 'DCYPriceTW_All', 'DEXPcsTW_All', 'DEXPriceTW_All',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterFN_1', 'PriceAfterFN_1', 'Pcs_AfterFN_1', 'Price_AfterFN_1',
            'PoPcsFN_1', 'PoPriceFN_1', 'NegPcsFN_1', 'NegPriceFN_1', 'BackPcsFN_1',
            'BackPriceFN_1', 'PurchasePcsFN_1', 'PurchasePriceFN_1', 'ReciveTranferPcsFN_1',
            'ReciveTranferPriceFN_1', 'ReturnItemPcsFN_1', 'ReturnItemPriceFN_1',
            'AllInPcsFN_1', 'AllInPriceFN_1', 'SendSalePcsFN_1', 'SendSalePriceFN_1',
            'ReciveTranOutPcsFN_1', 'ReciveTranOutPriceFN_1', 'ReturnStorePcsFN_1',
            'ReturnStorePriceFN_1', 'AllOutPcsFN_1', 'AllOutPriceFN_1', 'CalculatePcsFN_1',
            'CalculatePriceFN_1', 'NewCalculatePcsFN_1', 'NewCalculatePriceFN_1',
            'DiffPcsFN_1', 'DiffPriceFN_1', 'NewTotalPcsFN_1', 'NewTotalPriceFN_1',
            'NewTotalDiffNavFN_1', 'NewTotalDiffCalFN_1',
            'a7f1fgbu02sPcsFN_1', 'a7f1fgbu02sPriceFN_1', 'a7f2fgbu10sPcsFN_1', 'a7f2fgbu10sPriceFN_1',
            'a7f2thbu05sPcsFN_1', 'a7f2thbu05sPriceFN_1', 'a7f2debu10sPcsFN_1', 'a7f2debu10sPriceFN_1',
            'a7f2exbu11sPcsFN_1', 'a7f2exbu11sPriceFN_1', 'a7f2twbu04sPcsFN_1', 'a7f2twbu04sPriceFN_1',
            'a7f2twbu07sPcsFN_1', 'a7f2twbu07sPriceFN_1', 'a7f2cebu10sPcsFN_1', 'a7f2cebu10sPriceFN_1',
            'a8f1fgbu02sPcsFN_1', 'a8f1fgbu02sPriceFN_1', 'a8f2fgbu10sPcsFN_1', 'a8f2fgbu10sPriceFN_1',
            'a8f2thbu05sPcsFN_1', 'a8f2thbu05sPriceFN_1', 'a8f2debu10sPcsFN_1', 'a8f2debu10sPriceFN_1',
            'a8f2exbu11sPcsFN_1', 'a8f2exbu11sPriceFN_1', 'a8f2twbu04sPcsFN_1', 'a8f2twbu04sPriceFN_1',
            'a8f2twbu07sPcsFN_1', 'a8f2twbu07sPriceFN_1', 'a8f2cebu10sPcsFN_1', 'a8f2cebu10sPriceFN_1',
            'DC1PcsFN_1', 'DC1PriceFN_1', 'DCPPcsFN_1', 'DCPPriceFN_1',
            'DCYPcsFN_1', 'DCYPriceFN_1', 'DEXPcsFN_1', 'DEXPriceFN_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_1', 'PriceAfterAS_1', 'Pcs_AfterAS_1', 'Price_AfterAS_1',
            'PoPcsAS_1', 'PoPriceAS_1', 'NegPcsAS_1', 'NegPriceAS_1', 'BackPcsAS_1',
            'BackPriceAS_1', 'PurchasePcsAS_1', 'PurchasePriceAS_1', 'ReciveTranferPcsAS_1',
            'ReciveTranferPriceAS_1', 'ReturnItemPcsAS_1', 'ReturnItemPriceAS_1',
            'AllInPcsAS_1', 'AllInPriceAS_1', 'SendSalePcsAS_1', 'SendSalePriceAS_1',
            'ReciveTranOutPcsAS_1', 'ReciveTranOutPriceAS_1', 'ReturnStorePcsAS_1',
            'ReturnStorePriceAS_1', 'AllOutPcsAS_1', 'AllOutPriceAS_1', 'CalculatePcsAS_1',
            'CalculatePriceAS_1', 'NewCalculatePcsAS_1', 'NewCalculatePriceAS_1',
            'DiffPcsAS_1', 'DiffPriceAS_1', 'NewTotalPcsAS_1', 'NewTotalPriceAS_1',
            'NewTotalDiffNavAS_1', 'NewTotalDiffCalAS_1',
            'a7f1fgbu02sPcsAS_1', 'a7f1fgbu02sPriceAS_1', 'a7f2fgbu10sPcsAS_1', 'a7f2fgbu10sPriceAS_1',
            'a7f2thbu05sPcsAS_1', 'a7f2thbu05sPriceAS_1', 'a7f2debu10sPcsAS_1', 'a7f2debu10sPriceAS_1',
            'a7f2exbu11sPcsAS_1', 'a7f2exbu11sPriceAS_1', 'a7f2twbu04sPcsAS_1', 'a7f2twbu04sPriceAS_1',
            'a7f2twbu07sPcsAS_1', 'a7f2twbu07sPriceAS_1', 'a7f2cebu10sPcsAS_1', 'a7f2cebu10sPriceAS_1',
            'a8f1fgbu02sPcsAS_1', 'a8f1fgbu02sPriceAS_1', 'a8f2fgbu10sPcsAS_1', 'a8f2fgbu10sPriceAS_1',
            'a8f2thbu05sPcsAS_1', 'a8f2thbu05sPriceAS_1', 'a8f2debu10sPcsAS_1', 'a8f2debu10sPriceAS_1',
            'a8f2exbu11sPcsAS_1', 'a8f2exbu11sPriceAS_1', 'a8f2twbu04sPcsAS_1', 'a8f2twbu04sPriceAS_1',
            'a8f2twbu07sPcsAS_1', 'a8f2twbu07sPriceAS_1', 'a8f2cebu10sPcsAS_1', 'a8f2cebu10sPriceAS_1',
            'DC1PcsAS_1', 'DC1PriceAS_1', 'DCPPcsAS_1', 'DCPPriceAS_1',
            'DCYPcsAS_1', 'DCYPriceAS_1', 'DEXPcsAS_1', 'DEXPriceAS_1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_2', 'PriceAfterAS_2', 'Pcs_AfterAS_2', 'Price_AfterAS_2',
            'PoPcsAS_2', 'PoPriceAS_2', 'NegPcsAS_2', 'NegPriceAS_2', 'BackPcsTW_All',
            'BackPriceAS_2', 'PurchasePcsAS_2', 'PurchasePriceAS_2', 'ReciveTranferPcsAS_2',
            'ReciveTranferPriceAS_2', 'ReturnItemPcsAS_2', 'ReturnItemPriceAS_2',
            'AllInPcsAS_2', 'AllInPriceAS_2', 'SendSalePcsAS_2', 'SendSalePriceAS_2',
            'ReciveTranOutPcsAS_2', 'ReciveTranOutPriceAS_2', 'ReturnStorePcsAS_2',
            'ReturnStorePriceAS_2', 'AllOutPcsAS_2', 'AllOutPriceAS_2', 'CalculatePcsAS_2',
            'CalculatePriceAS_2', 'NewCalculatePcsAS_2', 'NewCalculatePriceAS_2',
            'DiffPcsAS_2', 'DiffPriceAS_2', 'NewTotalPcsAS_2', 'NewTotalPriceAS_2',
            'NewTotalDiffNavAS_2', 'NewTotalDiffCalAS_2',
            'a7f1fgbu02sPcsAS_2', 'a7f1fgbu02sPriceAS_2', 'a7f2fgbu10sPcsAS_2', 'a7f2fgbu10sPriceAS_2',
            'a7f2thbu05sPcsAS_2', 'a7f2thbu05sPriceAS_2', 'a7f2debu10sPcsAS_2', 'a7f2debu10sPriceAS_2',
            'a7f2exbu11sPcsAS_2', 'a7f2exbu11sPriceAS_2', 'a7f2twbu04sPcsAS_2', 'a7f2twbu04sPriceAS_2',
            'a7f2twbu07sPcsAS_2', 'a7f2twbu07sPriceAS_2', 'a7f2cebu10sPcsAS_2', 'a7f2cebu10sPriceAS_2',
            'a8f1fgbu02sPcsAS_2', 'a8f1fgbu02sPriceAS_2', 'a8f2fgbu10sPcsAS_2', 'a8f2fgbu10sPriceAS_2',
            'a8f2thbu05sPcsAS_2', 'a8f2thbu05sPriceAS_2', 'a8f2debu10sPcsAS_2', 'a8f2debu10sPriceAS_2',
            'a8f2exbu11sPcsAS_2', 'a8f2exbu11sPriceAS_2', 'a8f2twbu04sPcsAS_2', 'a8f2twbu04sPriceAS_2',
            'a8f2twbu07sPcsAS_2', 'a8f2twbu07sPriceAS_2', 'a8f2cebu10sPcsAS_2', 'a8f2cebu10sPriceAS_2',
            'DC1PcsAS_2', 'DC1PriceAS_2', 'DCPPcsAS_2', 'DCPPriceAS_2',
            'DCYPcsAS_2', 'DCYPriceAS_2', 'DEXPcsAS_2', 'DEXPriceAS_2',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_3', 'PriceAfterAS_3', 'Pcs_AfterAS_3', 'Price_AfterAS_3',
            'PoPcsAS_3', 'PoPriceAS_3', 'NegPcsAS_3', 'NegPriceAS_3', 'BackPcsAS_3',
            'BackPriceAS_3', 'PurchasePcsAS_3', 'PurchasePriceAS_3', 'ReciveTranferPcsAS_3',
            'ReciveTranferPriceAS_3', 'ReturnItemPcsAS_3', 'ReturnItemPriceAS_3',
            'AllInPcsAS_3', 'AllInPriceAS_3', 'SendSalePcsAS_3', 'SendSalePriceAS_3',
            'ReciveTranOutPcsAS_3', 'ReciveTranOutPriceAS_3', 'ReturnStorePcsAS_3',
            'ReturnStorePriceAS_3', 'AllOutPcsAS_3', 'AllOutPriceAS_3', 'CalculatePcsAS_3',
            'CalculatePriceAS_3', 'NewCalculatePcsAS_3', 'NewCalculatePriceAS_3',
            'DiffPcsAS_3', 'DiffPriceAS_3', 'NewTotalPcsAS_3', 'NewTotalPriceAS_3',
            'NewTotalDiffNavAS_3', 'NewTotalDiffCalAS_3',
            'a7f1fgbu02sPcsAS_3', 'a7f1fgbu02sPriceAS_3', 'a7f2fgbu10sPcsAS_3', 'a7f2fgbu10sPriceAS_3',
            'a7f2thbu05sPcsAS_3', 'a7f2thbu05sPriceAS_3', 'a7f2debu10sPcsAS_3', 'a7f2debu10sPriceAS_3',
            'a7f2exbu11sPcsAS_3', 'a7f2exbu11sPriceAS_3', 'a7f2twbu04sPcsAS_3', 'a7f2twbu04sPriceAS_3',
            'a7f2twbu07sPcsAS_3', 'a7f2twbu07sPriceAS_3', 'a7f2cebu10sPcsAS_3', 'a7f2cebu10sPriceAS_3',
            'a8f1fgbu02sPcsAS_3', 'a8f1fgbu02sPriceAS_3', 'a8f2fgbu10sPcsAS_3', 'a8f2fgbu10sPriceAS_3',
            'a8f2thbu05sPcsAS_3', 'a8f2thbu05sPriceAS_3', 'a8f2debu10sPcsAS_3', 'a8f2debu10sPriceAS_3',
            'a8f2exbu11sPcsAS_3', 'a8f2exbu11sPriceAS_3', 'a8f2twbu04sPcsAS_3', 'a8f2twbu04sPriceAS_3',
            'a8f2twbu07sPcsAS_3', 'a8f2twbu07sPriceAS_3', 'a8f2cebu10sPcsAS_3', 'a8f2cebu10sPriceAS_3',
            'DC1PcsAS_3', 'DC1PriceAS_3', 'DCPPcsAS_3', 'DCPPriceAS_3',
            'DCYPcsAS_3', 'DCYPriceAS_3', 'DEXPcsAS_3', 'DEXPriceAS_3',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_4', 'PriceAfterAS_4', 'Pcs_AfterAS_4', 'Price_AfterAS_4',
            'PoPcsAS_4', 'PoPriceAS_4', 'NegPcsAS_4', 'NegPriceAS_4', 'BackPcsAS_4',
            'BackPriceAS_4', 'PurchasePcsAS_4', 'PurchasePriceAS_4', 'ReciveTranferPcsAS_4',
            'ReciveTranferPriceAS_4', 'ReturnItemPcsAS_4', 'ReturnItemPriceAS_4',
            'AllInPcsAS_4', 'AllInPriceAS_4', 'SendSalePcsAS_4', 'SendSalePriceAS_4',
            'ReciveTranOutPcsAS_4', 'ReciveTranOutPriceAS_4', 'ReturnStorePcsAS_4',
            'ReturnStorePriceAS_4', 'AllOutPcsAS_4', 'AllOutPriceAS_4', 'CalculatePcsAS_4',
            'CalculatePriceAS_4', 'NewCalculatePcsAS_4', 'NewCalculatePriceAS_4',
            'DiffPcsAS_4', 'DiffPriceAS_4', 'NewTotalPcsAS_4', 'NewTotalPriceAS_4',
            'NewTotalDiffNavAS_4', 'NewTotalDiffCalAS_4',
            'a7f1fgbu02sPcsAS_4', 'a7f1fgbu02sPriceAS_4', 'a7f2fgbu10sPcsAS_4', 'a7f2fgbu10sPriceAS_4',
            'a7f2thbu05sPcsAS_4', 'a7f2thbu05sPriceAS_4', 'a7f2debu10sPcsAS_4', 'a7f2debu10sPriceAS_4',
            'a7f2exbu11sPcsAS_4', 'a7f2exbu11sPriceAS_4', 'a7f2twbu04sPcsAS_4', 'a7f2twbu04sPriceAS_4',
            'a7f2twbu07sPcsAS_4', 'a7f2twbu07sPriceAS_4', 'a7f2cebu10sPcsAS_4', 'a7f2cebu10sPriceAS_4',
            'a8f1fgbu02sPcsAS_4', 'a8f1fgbu02sPriceAS_4', 'a8f2fgbu10sPcsAS_4', 'a8f2fgbu10sPriceAS_4',
            'a8f2thbu05sPcsAS_4', 'a8f2thbu05sPriceAS_4', 'a8f2debu10sPcsAS_4', 'a8f2debu10sPriceAS_4',
            'a8f2exbu11sPcsAS_4', 'a8f2exbu11sPriceAS_4', 'a8f2twbu04sPcsAS_4', 'a8f2twbu04sPriceAS_4',
            'a8f2twbu07sPcsAS_4', 'a8f2twbu07sPriceAS_4', 'a8f2cebu10sPcsAS_4', 'a8f2cebu10sPriceAS_4',
            'DC1PcsAS_4', 'DC1PriceAS_4', 'DCPPcsAS_4', 'DCPPriceAS_4',
            'DCYPcsAS_4', 'DCYPriceAS_4', 'DEXPcsAS_4', 'DEXPriceAS_4',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_5', 'PriceAfterAS_5', 'Pcs_AfterAS_5', 'Price_AfterAS_5',
            'PoPcsAS_5', 'PoPriceAS_5', 'NegPcsAS_5', 'NegPriceAS_5', 'BackPcsAS_5',
            'BackPriceAS_5', 'PurchasePcsAS_5', 'PurchasePriceAS_5', 'ReciveTranferPcsAS_5',
            'ReciveTranferPriceAS_5', 'ReturnItemPcsAS_5', 'ReturnItemPriceAS_5',
            'AllInPcsAS_5', 'AllInPriceAS_5', 'SendSalePcsAS_5', 'SendSalePriceAS_5',
            'ReciveTranOutPcsAS_5', 'ReciveTranOutPriceAS_5', 'ReturnStorePcsAS_5',
            'ReturnStorePriceAS_5', 'AllOutPcsAS_5', 'AllOutPriceAS_5', 'CalculatePcsAS_5',
            'CalculatePriceAS_5', 'NewCalculatePcsAS_5', 'NewCalculatePriceAS_5',
            'DiffPcsAS_5', 'DiffPriceAS_5', 'NewTotalPcsAS_5', 'NewTotalPriceAS_5',
            'NewTotalDiffNavAS_5', 'NewTotalDiffCalAS_5',
            'a7f1fgbu02sPcsAS_5', 'a7f1fgbu02sPriceAS_5', 'a7f2fgbu10sPcsAS_5', 'a7f2fgbu10sPriceAS_5',
            'a7f2thbu05sPcsAS_5', 'a7f2thbu05sPriceAS_5', 'a7f2debu10sPcsAS_5', 'a7f2debu10sPriceAS_5',
            'a7f2exbu11sPcsAS_5', 'a7f2exbu11sPriceAS_5', 'a7f2twbu04sPcsAS_5', 'a7f2twbu04sPriceAS_5',
            'a7f2twbu07sPcsAS_5', 'a7f2twbu07sPriceAS_5', 'a7f2cebu10sPcsAS_5', 'a7f2cebu10sPriceAS_5',
            'a8f1fgbu02sPcsAS_5', 'a8f1fgbu02sPriceAS_5', 'a8f2fgbu10sPcsAS_5', 'a8f2fgbu10sPriceAS_5',
            'a8f2thbu05sPcsAS_5', 'a8f2thbu05sPriceAS_5', 'a8f2debu10sPcsAS_5', 'a8f2debu10sPriceAS_5',
            'a8f2exbu11sPcsAS_5', 'a8f2exbu11sPriceAS_5', 'a8f2twbu04sPcsAS_5', 'a8f2twbu04sPriceAS_5',
            'a8f2twbu07sPcsAS_5', 'a8f2twbu07sPriceAS_5', 'a8f2cebu10sPcsAS_5', 'a8f2cebu10sPriceAS_5',
            'DC1PcsAS_5', 'DC1PriceAS_5', 'DCPPcsAS_5', 'DCPPriceAS_5',
            'DCYPcsAS_5', 'DCYPriceAS_5', 'DEXPcsAS_5', 'DEXPriceAS_5',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_6', 'PriceAfterAS_6', 'Pcs_AfterAS_6', 'Price_AfterAS_6',
            'PoPcsAS_6', 'PoPriceAS_6', 'NegPcsAS_6', 'NegPriceAS_6', 'BackPcsAS_6',
            'BackPriceAS_6', 'PurchasePcsAS_6', 'PurchasePriceAS_6', 'ReciveTranferPcsAS_6',
            'ReciveTranferPriceAS_6', 'ReturnItemPcsAS_6', 'ReturnItemPriceAS_6',
            'AllInPcsAS_6', 'AllInPriceAS_6', 'SendSalePcsAS_6', 'SendSalePriceAS_6',
            'ReciveTranOutPcsAS_6', 'ReciveTranOutPriceAS_6', 'ReturnStorePcsAS_6',
            'ReturnStorePriceAS_6', 'AllOutPcsAS_6', 'AllOutPriceAS_6', 'CalculatePcsAS_6',
            'CalculatePriceAS_6', 'NewCalculatePcsAS_6', 'NewCalculatePriceAS_6',
            'DiffPcsAS_6', 'DiffPriceAS_6', 'NewTotalPcsAS_6', 'NewTotalPriceAS_6',
            'NewTotalDiffNavAS_6', 'NewTotalDiffCalAS_6',
            'a7f1fgbu02sPcsAS_6', 'a7f1fgbu02sPriceAS_6', 'a7f2fgbu10sPcsAS_6', 'a7f2fgbu10sPriceAS_6',
            'a7f2thbu05sPcsAS_6', 'a7f2thbu05sPriceAS_6', 'a7f2debu10sPcsAS_6', 'a7f2debu10sPriceAS_6',
            'a7f2exbu11sPcsAS_6', 'a7f2exbu11sPriceAS_6', 'a7f2twbu04sPcsAS_6', 'a7f2twbu04sPriceAS_6',
            'a7f2twbu07sPcsAS_6', 'a7f2twbu07sPriceAS_6', 'a7f2cebu10sPcsAS_6', 'a7f2cebu10sPriceAS_6',
            'a8f1fgbu02sPcsAS_6', 'a8f1fgbu02sPriceAS_6', 'a8f2fgbu10sPcsAS_6', 'a8f2fgbu10sPriceAS_6',
            'a8f2thbu05sPcsAS_6', 'a8f2thbu05sPriceAS_6', 'a8f2debu10sPcsAS_6', 'a8f2debu10sPriceAS_6',
            'a8f2exbu11sPcsAS_6', 'a8f2exbu11sPriceAS_6', 'a8f2twbu04sPcsAS_6', 'a8f2twbu04sPriceAS_6',
            'a8f2twbu07sPcsAS_6', 'a8f2twbu07sPriceAS_6', 'a8f2cebu10sPcsAS_6', 'a8f2cebu10sPriceAS_6',
            'DC1PcsAS_6', 'DC1PriceAS_6', 'DCPPcsAS_6', 'DCPPriceAS_6',
            'DCYPcsAS_6', 'DCYPriceAS_6', 'DEXPcsAS_6', 'DEXPriceAS_6',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_7', 'PriceAfterAS_7', 'Pcs_AfterAS_7', 'Price_AfterAS_7',
            'PoPcsAS_7', 'PoPriceAS_7', 'NegPcsAS_7', 'NegPriceAS_7', 'BackPcsAS_7',
            'BackPriceAS_7', 'PurchasePcsAS_7', 'PurchasePriceAS_7', 'ReciveTranferPcsAS_7',
            'ReciveTranferPriceAS_7', 'ReturnItemPcsAS_7', 'ReturnItemPriceAS_7',
            'AllInPcsAS_7', 'AllInPriceAS_7', 'SendSalePcsAS_7', 'SendSalePriceAS_7',
            'ReciveTranOutPcsAS_7', 'ReciveTranOutPriceAS_7', 'ReturnStorePcsAS_7',
            'ReturnStorePriceAS_7', 'AllOutPcsAS_7', 'AllOutPriceAS_7', 'CalculatePcsAS_7',
            'CalculatePriceAS_7', 'NewCalculatePcsAS_7', 'NewCalculatePriceAS_7',
            'DiffPcsAS_7', 'DiffPriceAS_7', 'NewTotalPcsAS_7', 'NewTotalPriceAS_7',
            'NewTotalDiffNavAS_7', 'NewTotalDiffCalAS_7',
            'a7f1fgbu02sPcsAS_7', 'a7f1fgbu02sPriceAS_7', 'a7f2fgbu10sPcsAS_7', 'a7f2fgbu10sPriceAS_7',
            'a7f2thbu05sPcsAS_7', 'a7f2thbu05sPriceAS_7', 'a7f2debu10sPcsAS_7', 'a7f2debu10sPriceAS_7',
            'a7f2exbu11sPcsAS_7', 'a7f2exbu11sPriceAS_7', 'a7f2twbu04sPcsAS_7', 'a7f2twbu04sPriceAS_7',
            'a7f2twbu07sPcsAS_7', 'a7f2twbu07sPriceAS_7', 'a7f2cebu10sPcsAS_7', 'a7f2cebu10sPriceAS_7',
            'a8f1fgbu02sPcsAS_7', 'a8f1fgbu02sPriceAS_7', 'a8f2fgbu10sPcsAS_7', 'a8f2fgbu10sPriceAS_7',
            'a8f2thbu05sPcsAS_7', 'a8f2thbu05sPriceAS_7', 'a8f2debu10sPcsAS_7', 'a8f2debu10sPriceAS_7',
            'a8f2exbu11sPcsAS_7', 'a8f2exbu11sPriceAS_7', 'a8f2twbu04sPcsAS_7', 'a8f2twbu04sPriceAS_7',
            'a8f2twbu07sPcsAS_7', 'a8f2twbu07sPriceAS_7', 'a8f2cebu10sPcsAS_7', 'a8f2cebu10sPriceAS_7',
            'DC1PcsAS_7', 'DC1PriceAS_7', 'DCPPcsAS_7', 'DCPPriceAS_7',
            'DCYPcsAS_7', 'DCYPriceAS_7', 'DEXPcsAS_7', 'DEXPriceAS_7',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_8', 'PriceAfterAS_8', 'Pcs_AfterAS_8', 'Price_AfterAS_8',
            'PoPcsAS_8', 'PoPriceAS_8', 'NegPcsAS_8', 'NegPriceAS_8', 'BackPcsAS_8',
            'BackPriceAS_8', 'PurchasePcsAS_8', 'PurchasePriceAS_8', 'ReciveTranferPcsAS_8',
            'ReciveTranferPriceAS_8', 'ReturnItemPcsAS_8', 'ReturnItemPriceAS_8',
            'AllInPcsAS_8', 'AllInPriceAS_8', 'SendSalePcsAS_8', 'SendSalePriceAS_8',
            'ReciveTranOutPcsAS_8', 'ReciveTranOutPriceAS_8', 'ReturnStorePcsAS_8',
            'ReturnStorePriceAS_8', 'AllOutPcsAS_8', 'AllOutPriceAS_8', 'CalculatePcsAS_8',
            'CalculatePriceAS_8', 'NewCalculatePcsAS_8', 'NewCalculatePriceAS_8',
            'DiffPcsAS_8', 'DiffPriceAS_8', 'NewTotalPcsAS_8', 'NewTotalPriceAS_8',
            'NewTotalDiffNavAS_8', 'NewTotalDiffCalAS_8',
            'a7f1fgbu02sPcsAS_8', 'a7f1fgbu02sPriceAS_8', 'a7f2fgbu10sPcsAS_8', 'a7f2fgbu10sPriceAS_8',
            'a7f2thbu05sPcsAS_8', 'a7f2thbu05sPriceAS_8', 'a7f2debu10sPcsAS_8', 'a7f2debu10sPriceAS_8',
            'a7f2exbu11sPcsAS_8', 'a7f2exbu11sPriceAS_8', 'a7f2twbu04sPcsAS_8', 'a7f2twbu04sPriceAS_8',
            'a7f2twbu07sPcsAS_8', 'a7f2twbu07sPriceAS_8', 'a7f2cebu10sPcsAS_8', 'a7f2cebu10sPriceAS_8',
            'a8f1fgbu02sPcsAS_8', 'a8f1fgbu02sPriceAS_8', 'a8f2fgbu10sPcsAS_8', 'a8f2fgbu10sPriceAS_8',
            'a8f2thbu05sPcsAS_8', 'a8f2thbu05sPriceAS_8', 'a8f2debu10sPcsAS_8', 'a8f2debu10sPriceAS_8',
            'a8f2exbu11sPcsAS_8', 'a8f2exbu11sPriceAS_8', 'a8f2twbu04sPcsAS_8', 'a8f2twbu04sPriceAS_8',
            'a8f2twbu07sPcsAS_8', 'a8f2twbu07sPriceAS_8', 'a8f2cebu10sPcsAS_8', 'a8f2cebu10sPriceAS_8',
            'DC1PcsAS_8', 'DC1PriceAS_8', 'DCPPcsAS_8', 'DCPPriceAS_8',
            'DCYPcsAS_8', 'DCYPriceAS_8', 'DEXPcsAS_8', 'DEXPriceAS_8',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_9', 'PriceAfterAS_9', 'Pcs_AfterAS_9', 'Price_AfterAS_9',
            'PoPcsAS_9', 'PoPriceAS_9', 'NegPcsAS_9', 'NegPriceAS_9', 'BackPcsAS_9',
            'BackPriceAS_9', 'PurchasePcsAS_9', 'PurchasePriceAS_9', 'ReciveTranferPcsAS_9',
            'ReciveTranferPriceAS_9', 'ReturnItemPcsAS_9', 'ReturnItemPriceAS_9',
            'AllInPcsAS_9', 'AllInPriceAS_9', 'SendSalePcsAS_9', 'SendSalePriceAS_9',
            'ReciveTranOutPcsAS_9', 'ReciveTranOutPriceAS_9', 'ReturnStorePcsAS_9',
            'ReturnStorePriceAS_9', 'AllOutPcsAS_9', 'AllOutPriceAS_9', 'CalculatePcsAS_9',
            'CalculatePriceAS_9', 'NewCalculatePcsAS_9', 'NewCalculatePriceAS_9',
            'DiffPcsAS_9', 'DiffPriceAS_9', 'NewTotalPcsAS_9', 'NewTotalPriceAS_9',
            'NewTotalDiffNavAS_9', 'NewTotalDiffCalAS_9',
            'a7f1fgbu02sPcsAS_9', 'a7f1fgbu02sPriceAS_9', 'a7f2fgbu10sPcsAS_9', 'a7f2fgbu10sPriceAS_9',
            'a7f2thbu05sPcsAS_9', 'a7f2thbu05sPriceAS_9', 'a7f2debu10sPcsAS_9', 'a7f2debu10sPriceAS_9',
            'a7f2exbu11sPcsAS_9', 'a7f2exbu11sPriceAS_9', 'a7f2twbu04sPcsAS_9', 'a7f2twbu04sPriceAS_9',
            'a7f2twbu07sPcsAS_9', 'a7f2twbu07sPriceAS_9', 'a7f2cebu10sPcsAS_9', 'a7f2cebu10sPriceAS_9',
            'a8f1fgbu02sPcsAS_9', 'a8f1fgbu02sPriceAS_9', 'a8f2fgbu10sPcsAS_9', 'a8f2fgbu10sPriceAS_9',
            'a8f2thbu05sPcsAS_9', 'a8f2thbu05sPriceAS_9', 'a8f2debu10sPcsAS_9', 'a8f2debu10sPriceAS_9',
            'a8f2exbu11sPcsAS_9', 'a8f2exbu11sPriceAS_9', 'a8f2twbu04sPcsAS_9', 'a8f2twbu04sPriceAS_9',
            'a8f2twbu07sPcsAS_9', 'a8f2twbu07sPriceAS_9', 'a8f2cebu10sPcsAS_9', 'a8f2cebu10sPriceAS_9',
            'DC1PcsAS_9', 'DC1PriceAS_9', 'DCPPcsAS_9', 'DCPPriceAS_9',
            'DCYPcsAS_9', 'DCYPriceAS_9', 'DEXPcsAS_9', 'DEXPriceAS_9',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAS_All', 'PriceAfterAS_All', 'Pcs_AfterAS_All', 'Price_AfterAS_All',
            'PoPcsAS_All', 'PoPriceAS_All', 'NegPcsAS_All', 'NegPriceAS_All', 'BackPcsAS_All',
            'BackPriceAS_All', 'PurchasePcsAS_All', 'PurchasePriceAS_All', 'ReciveTranferPcsAS_All',
            'ReciveTranferPriceAS_All', 'ReturnItemPcsAS_All', 'ReturnItemPriceAS_All',
            'AllInPcsAS_All', 'AllInPriceAS_All', 'SendSalePcsAS_All', 'SendSalePriceAS_All',
            'ReciveTranOutPcsAS_All', 'ReciveTranOutPriceAS_All', 'ReturnStorePcsAS_All',
            'ReturnStorePriceAS_All', 'AllOutPcsAS_All', 'AllOutPriceAS_All', 'CalculatePcsAS_All',
            'CalculatePriceAS_All', 'NewCalculatePcsAS_All', 'NewCalculatePriceAS_All',
            'DiffPcsAS_All', 'DiffPriceAS_All', 'NewTotalPcsAS_All', 'NewTotalPriceAS_All',
            'NewTotalDiffNavAS_All', 'NewTotalDiffCalAS_All',
            'a7f1fgbu02sPcsAS_All', 'a7f1fgbu02sPriceAS_All', 'a7f2fgbu10sPcsAS_All', 'a7f2fgbu10sPriceAS_All',
            'a7f2thbu05sPcsAS_All', 'a7f2thbu05sPriceAS_All', 'a7f2debu10sPcsAS_All', 'a7f2debu10sPriceAS_All',
            'a7f2exbu11sPcsAS_All', 'a7f2exbu11sPriceAS_All', 'a7f2twbu04sPcsAS_All', 'a7f2twbu04sPriceAS_All',
            'a7f2twbu07sPcsAS_All', 'a7f2twbu07sPriceAS_All', 'a7f2cebu10sPcsAS_All', 'a7f2cebu10sPriceAS_All',
            'a8f1fgbu02sPcsAS_All', 'a8f1fgbu02sPriceAS_All', 'a8f2fgbu10sPcsAS_All', 'a8f2fgbu10sPriceAS_All',
            'a8f2thbu05sPcsAS_All', 'a8f2thbu05sPriceAS_All', 'a8f2debu10sPcsAS_All', 'a8f2debu10sPriceAS_All',
            'a8f2exbu11sPcsAS_All', 'a8f2exbu11sPriceAS_All', 'a8f2twbu04sPcsAS_All', 'a8f2twbu04sPriceAS_All',
            'a8f2twbu07sPcsAS_All', 'a8f2twbu07sPriceAS_All', 'a8f2cebu10sPcsAS_All', 'a8f2cebu10sPriceAS_All',
            'DC1PcsAS_All', 'DC1PriceAS_All', 'DCPPcsAS_All', 'DCPPriceAS_All',
            'DCYPcsAS_All', 'DCYPriceAS_All', 'DEXPcsAS_All', 'DEXPriceAS_All',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterTotal_All', 'PriceAfterTotal_All', 'Pcs_AfterTotal_All', 'Price_AfterTotal_All',
            'PoPcsTotal_All', 'PoPriceTotal_All', 'NegPcsTotal_All', 'NegPriceTotal_All', 'BackPcsTotal_All',
            'BackPriceTotal_All', 'PurchasePcsTotal_All', 'PurchasePriceTotal_All', 'ReciveTranferPcsTotal_All',
            'ReciveTranferPriceTotal_All', 'ReturnItemPcsTotal_All', 'ReturnItemPriceTotal_All',
            'AllInPcsTotal_All', 'AllInPriceTotal_All', 'SendSalePcsTotal_All', 'SendSalePriceTotal_All',
            'ReciveTranOutPcsTotal_All', 'ReciveTranOutPriceTotal_All', 'ReturnStorePcsTotal_All',
            'ReturnStorePriceTotal_All', 'AllOutPcsTotal_All', 'AllOutPriceTotal_All', 'CalculatePcsTotal_All',
            'CalculatePriceTotal_All', 'NewCalculatePcsTotal_All', 'NewCalculatePriceTotal_All',
            'DiffPcsTotal_All', 'DiffPriceTotal_All', 'NewTotalPcsTotal_All', 'NewTotalPriceTotal_All',
            'NewTotalDiffNavTotal_All', 'NewTotalDiffCalTotal_All',
            'a7f1fgbu02sPcsTotal_All', 'a7f1fgbu02sPriceTotal_All', 'a7f2fgbu10sPcsTotal_All', 'a7f2fgbu10sPriceTotal_All',
            'a7f2thbu05sPcsTotal_All', 'a7f2thbu05sPriceTotal_All', 'a7f2debu10sPcsTotal_All', 'a7f2debu10sPriceTotal_All',
            'a7f2exbu11sPcsTotal_All', 'a7f2exbu11sPriceTotal_All', 'a7f2twbu04sPcsTotal_All', 'a7f2twbu04sPriceTotal_All',
            'a7f2twbu07sPcsTotal_All', 'a7f2twbu07sPriceTotal_All', 'a7f2cebu10sPcsTotal_All', 'a7f2cebu10sPriceTotal_All',
            'a8f1fgbu02sPcsTotal_All', 'a8f1fgbu02sPriceTotal_All', 'a8f2fgbu10sPcsTotal_All', 'a8f2fgbu10sPriceTotal_All',
            'a8f2thbu05sPcsTotal_All', 'a8f2thbu05sPriceTotal_All', 'a8f2debu10sPcsTotal_All', 'a8f2debu10sPriceTotal_All',
            'a8f2exbu11sPcsTotal_All', 'a8f2exbu11sPriceTotal_All', 'a8f2twbu04sPcsTotal_All', 'a8f2twbu04sPriceTotal_All',
            'a8f2twbu07sPcsTotal_All', 'a8f2twbu07sPriceTotal_All', 'a8f2cebu10sPcsTotal_All', 'a8f2cebu10sPriceTotal_All',
            'DC1PcsTotal_All', 'DC1PriceTotal_All', 'DCPPcsTotal_All', 'DCPPriceTotal_All',
            'DCYPcsTotal_All', 'DCYPriceTotal_All', 'DEXPcsTotal_All', 'DEXPriceTotal_All',

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