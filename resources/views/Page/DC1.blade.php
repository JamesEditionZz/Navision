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

        // console.log(response);

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