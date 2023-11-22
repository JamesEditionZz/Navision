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
                <label for=""><a href="{{ Route('index') }}">Navition</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('datalist') }}">DataList</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1 active">
                <label for=""><a href="{{ Route('Product') }}">แยกประเภทสินค้า</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('Customer') }}">แยกลูกค้า</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
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
            <h2 align="center">แยกประเภทสินค้า</h2><button class="btn-Print" onclick="Print()">Print</button>
            <div class="table-block">
                <table class="table-tabledata" id="table-data">
                    <thead>
                        <tr>
                            <td colspan="2" rowspan="4">กลุ่มลูกค้า</td>
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
                        <td rowspan="14">DC1</td>
                        <td rowspan="5">สินค้า</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                        <td>
                            <div id="PcsAfterNT"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNT"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNT"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNT"></div>
                        </td>
                        <td>
                            <div id="PoPcsNT"></div>
                        </td>
                        <td>
                            <div id="PoPriceNT"></div>
                        </td>
                        <td>
                            <div id="NegPcsNT"></div>
                        </td>
                        <td>
                            <div id="NegPriceNT"></div>
                        </td>
                        <td>
                            <div id="BackPcsNT"></div>
                        </td>
                        <td>
                            <div id="BackPriceNT"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNT"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNT"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNT"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNT"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNT"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNT"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNT"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNT"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNT"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNT"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNT"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNT"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNT"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNT"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNT"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNT"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNT"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNT"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNT"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNT"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT อวนรุม</td>
                        <td>
                            <div id="PcsAfterMT"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMT"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMT"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMT"></div>
                        </td>
                        <td>
                            <div id="PoPcsMT"></div>
                        </td>
                        <td>
                            <div id="PoPriceMT"></div>
                        </td>
                        <td>
                            <div id="NegPcsMT"></div>
                        </td>
                        <td>
                            <div id="NegPriceMT"></div>
                        </td>
                        <td>
                            <div id="BackPcsMT"></div>
                        </td>
                        <td>
                            <div id="BackPriceMT"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMT"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMT"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMT"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMT"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMT"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMT"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMT"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMT"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMT"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMT"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMT"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMT"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMT"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMT"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMT"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMT"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMT"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMT"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMT"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMT"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                        <td>
                            <div id="PcsAfterTW"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTW"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTW"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTW"></div>
                        </td>
                        <td>
                            <div id="PoPcsTW"></div>
                        </td>
                        <td>
                            <div id="PoPriceTW"></div>
                        </td>
                        <td>
                            <div id="NegPcsTW"></div>
                        </td>
                        <td>
                            <div id="NegPriceTW"></div>
                        </td>
                        <td>
                            <div id="BackPcsTW"></div>
                        </td>
                        <td>
                            <div id="BackPriceTW"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTW"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTW"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTW"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTW"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTW"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTW"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTW"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTW"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTW"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTW"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTW"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTW"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTW"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTW"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTW"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTW"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTW"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTW"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTW"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTW"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTW"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTW"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTW"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTW"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTW"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTW"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTW"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTW"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTW"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>LN เส้นใย</td>
                        <td>
                            <div id="PcsAfterLN"></div>
                        </td>
                        <td>
                            <div id="PriceAfterLN"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterLN"></div>
                        </td>
                        <td>
                            <div id="Price_AfterLN"></div>
                        </td>
                        <td>
                            <div id="PoPcsLN"></div>
                        </td>
                        <td>
                            <div id="PoPriceLN"></div>
                        </td>
                        <td>
                            <div id="NegPcsLN"></div>
                        </td>
                        <td>
                            <div id="NegPriceLN"></div>
                        </td>
                        <td>
                            <div id="BackPcsLN"></div>
                        </td>
                        <td>
                            <div id="BackPriceLN"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsLN"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceLN"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsLN"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceLN"></div>
                        </td>
                        <td>
                            <div id="AllInPcsLN"></div>
                        </td>
                        <td>
                            <div id="AllInPriceLN"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsLN"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceLN"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsLN"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceLN"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsLN"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceLN"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsLN"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceLN"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsLN"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceLN"></div>
                        </td>
                        <td>
                            <div id="DiffPcsLN"></div>
                        </td>
                        <td>
                            <div id="DiffPriceLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalLN"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceLN"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsLN"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceLN"></div>
                        </td>
                        <td>
                            <div id="DC1PcsLN"></div>
                        </td>
                        <td>
                            <div id="DC1PriceLN"></div>
                        </td>
                        <td>
                            <div id="DCPPcsLN"></div>
                        </td>
                        <td>
                            <div id="DCPPriceLN"></div>
                        </td>
                        <td>
                            <div id="DCYPcsLN"></div>
                        </td>
                        <td>
                            <div id="DCYPriceLN"></div>
                        </td>
                        <td>
                            <div id="DEXPcsLN"></div>
                        </td>
                        <td>
                            <div id="DEXPriceLN"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">รวมสินค้า</td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PcsAfterAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PriceAfterAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="Pcs_AfterAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="Price_AfterAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PoPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PoPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NegPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NegPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="BackPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="BackPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PurchasePcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PurchasePriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranferPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranferPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnItemPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnItemPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllInPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllInPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="SendSalePcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="SendSalePriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranOutPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranOutPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnStorePcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnStorePriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllOutPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllOutPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="CalculatePcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="CalculatePriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewCalculatePcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewCalculatePriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DiffPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DiffPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalDiffNavAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalDiffCalAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f1fgbu02sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f1fgbu02sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2fgbu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2fgbu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2thbu05sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2thbu05sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2debu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2debu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2exbu11sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2exbu11sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu04sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu04sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu07sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu07sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2cebu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2cebu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f1fgbu02sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f1fgbu02sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2fgbu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2fgbu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2thbu05sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2thbu05sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2debu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2debu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2exbu11sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2exbu11sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu04sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu04sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu07sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu07sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2cebu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2cebu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DC1PcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DC1PriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCPPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCPPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCYPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCYPriceAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DEXPcsAllProduct"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DEXPriceAllProduct"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="7">สินค้าซื้อมา-ขายไป</td>
                    </tr>
                    <tr>
                        <td>AS อุปกรเสริม</td>
                        <td>
                            <div id="PcsAfterAS"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAS"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAS"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAS"></div>
                        </td>
                        <td>
                            <div id="PoPcsAS"></div>
                        </td>
                        <td>
                            <div id="PoPriceAS"></div>
                        </td>
                        <td>
                            <div id="NegPcsAS"></div>
                        </td>
                        <td>
                            <div id="NegPriceAS"></div>
                        </td>
                        <td>
                            <div id="BackPcsAS"></div>
                        </td>
                        <td>
                            <div id="BackPriceAS"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAS"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAS"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAS"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAS"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAS"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAS"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAS"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAS"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAS"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAS"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAS"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAS"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAS"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAS"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAS"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAS"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAS"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAS"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAS"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAS"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAS"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAS"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAS"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAS"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAS"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAS"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAS"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAS"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAS"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAS"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAS"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAS"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAS"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAS"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAS"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAS"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAS"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>STW ตีด้าย</td>
                        <td>
                            <div id="PcsAfterSTW"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSTW"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSTW"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSTW"></div>
                        </td>
                        <td>
                            <div id="PoPcsSTW"></div>
                        </td>
                        <td>
                            <div id="PoPriceSTW"></div>
                        </td>
                        <td>
                            <div id="NegPcsSTW"></div>
                        </td>
                        <td>
                            <div id="NegPriceSTW"></div>
                        </td>
                        <td>
                            <div id="BackPcsSTW"></div>
                        </td>
                        <td>
                            <div id="BackPriceSTW"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSTW"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSTW"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSTW"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSTW"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSTW"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSTW"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSTW"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSTW"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSTW"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSTW"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSTW"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSTW"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSTW"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSTW"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSTW"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSTW"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSTW"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSTW"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSTW"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSTW"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSTW"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSTW"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSTW"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSTW"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSTW"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSTW"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSTW"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSTW"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSTW"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSTW"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>SLN เส้นใย</td>
                        <td>
                            <div id="PcsAfterSLN"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSLN"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSLN"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSLN"></div>
                        </td>
                        <td>
                            <div id="PoPcsSLN"></div>
                        </td>
                        <td>
                            <div id="PoPriceSLN"></div>
                        </td>
                        <td>
                            <div id="NegPcsSLN"></div>
                        </td>
                        <td>
                            <div id="NegPriceSLN"></div>
                        </td>
                        <td>
                            <div id="BackPcsSLN"></div>
                        </td>
                        <td>
                            <div id="BackPriceSLN"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSLN"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSLN"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSLN"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSLN"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSLN"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSLN"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSLN"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSLN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSLN"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSLN"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSLN"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSLN"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSLN"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSLN"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSLN"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSLN"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSLN"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSLN"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSLN"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSLN"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSLN"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSLN"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSLN"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSLN"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSLN"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSLN"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSLN"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSLN"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSLN"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSLN"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>FN+SFN ผ้ามุ้ง</td>
                        <td>
                            <div id="PcsAfterSFN"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSFN"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSFN"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSFN"></div>
                        </td>
                        <td>
                            <div id="PoPcsSFN"></div>
                        </td>
                        <td>
                            <div id="PoPriceSFN"></div>
                        </td>
                        <td>
                            <div id="NegPcsSFN"></div>
                        </td>
                        <td>
                            <div id="NegPriceSFN"></div>
                        </td>
                        <td>
                            <div id="BackPcsSFN"></div>
                        </td>
                        <td>
                            <div id="BackPriceSFN"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSFN"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSFN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSFN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSFN"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSFN"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSFN"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSFN"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSFN"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSFN"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSFN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSFN"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSFN"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSFN"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSFN"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSFN"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSFN"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSFN"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSFN"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSFN"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSFN"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSFN"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSFN"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSFN"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSFN"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSFN"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSFN"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSFN"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSFN"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSFN"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSFN"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSFN"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSFN"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSFN"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSFN"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSFN"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSFN"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>SMT อวนรุม</td>
                        <td>
                            <div id="PcsAfterSMT"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSMT"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSMT"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSMT"></div>
                        </td>
                        <td>
                            <div id="PoPcsSMT"></div>
                        </td>
                        <td>
                            <div id="PoPriceSMT"></div>
                        </td>
                        <td>
                            <div id="NegPcsSMT"></div>
                        </td>
                        <td>
                            <div id="NegPriceSMT"></div>
                        </td>
                        <td>
                            <div id="BackPcsSMT"></div>
                        </td>
                        <td>
                            <div id="BackPriceSMT"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSMT"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSMT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSMT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSMT"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSMT"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSMT"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSMT"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSMT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSMT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSMT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSMT"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSMT"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSMT"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSMT"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSMT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSMT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSMT"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSMT"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSMT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSMT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSMT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSMT"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSMT"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSMT"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSMT"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSMT"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSMT"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSMT"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSMT"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSMT"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>SNT อวนกำ</td>
                        <td>
                            <div id="PcsAfterSNT"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSNT"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSNT"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSNT"></div>
                        </td>
                        <td>
                            <div id="PoPcsSNT"></div>
                        </td>
                        <td>
                            <div id="PoPriceSNT"></div>
                        </td>
                        <td>
                            <div id="NegPcsSNT"></div>
                        </td>
                        <td>
                            <div id="NegPriceSNT"></div>
                        </td>
                        <td>
                            <div id="BackPcsSNT"></div>
                        </td>
                        <td>
                            <div id="BackPriceSNT"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSNT"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSNT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSNT"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSNT"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSNT"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSNT"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSNT"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSNT"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSNT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSNT"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSNT"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSNT"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSNT"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSNT"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSNT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSNT"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSNT"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSNT"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSNT"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSNT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSNT"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSNT"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSNT"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSNT"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSNT"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSNT"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSNT"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSNT"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSNT"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSNT"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">รวมสินค้าซื้อมา-ขายไป</td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PcsAfterAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PriceAfterAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="Pcs_AfterAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="Price_AfterAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PoPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PoPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NegPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NegPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="BackPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="BackPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PurchasePcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="PurchasePriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranferPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranferPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnItemPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnItemPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllInPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllInPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="SendSalePcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="SendSalePriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranOutPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReciveTranOutPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnStorePcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="ReturnStorePriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllOutPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="AllOutPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="CalculatePcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="CalculatePriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewCalculatePcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewCalculatePriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DiffPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DiffPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalDiffNavAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="NewTotalDiffCalAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f1fgbu02sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f1fgbu02sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2fgbu10sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2fgbu10sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2thbu05sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2thbu05sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2debu10sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2debu10sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2exbu11sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2exbu11sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu04sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu04sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu07sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2twbu07sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2cebu10sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a7f2cebu10sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f1fgbu02sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f1fgbu02sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2fgbu10sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2fgbu10sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2thbu05sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2thbu05sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2debu10sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2debu10sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2exbu11sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2exbu11sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu04sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu04sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu07sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2twbu07sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2cebu10sPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="a8f2cebu10sPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DC1PcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DC1PriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCPPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCPPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCYPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DCYPriceAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DEXPcsAllSale"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,150,255);" id="DEXPriceAllSale"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="color: rgb(0,80,255);">รวม DC 1</td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PcsAfterAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PriceAfterAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Pcs_AfterAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Price_AfterAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffNavAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffCalAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPriceAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPcsAllDC1"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPriceAllDC1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="5">DCY</td>
                    </tr>
                    <tr>
                        <td rowspan="3">สินค้าผลิต</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                        <td>
                            <div id="PcsAfterNTDCY"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNTDCY"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNTDCY"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNTDCY"></div>
                        </td>
                        <td>
                            <div id="PoPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="PoPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="NegPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="NegPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="BackPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="BackPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNTDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNTDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNTDCY"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                        <td>
                            <div id="PcsAfterTWDCY"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTWDCY"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTWDCY"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTWDCY"></div>
                        </td>
                        <td>
                            <div id="PoPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="PoPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="NegPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="NegPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="BackPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="BackPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTWDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTWDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTWDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTWDCY"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>สินค้าซื้อมา-ขายไป</td>
                        <td>SNT อวนกำ</td>
                        <td>
                            <div id="PcsAfterSNTDCY"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSNTDCY"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSNTDCY"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSNTDCY"></div>
                        </td>
                        <td>
                            <div id="PoPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="PoPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NegPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NegPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="BackPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="BackPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSNTDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSNTDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSNTDCY"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="color: rgb(0,80,255);">รวม DCY</td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PcsAfterAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PriceAfterAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Pcs_AfterAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Price_AfterAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffNavAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffCalAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPriceAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPcsAllDCY"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPriceAllDCY"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="5">DCP</td>
                    </tr>
                    <tr>
                        <td rowspan="4">สินค้าผลิต</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                        <td>
                            <div id="PcsAfterNTDCP"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNTDCP"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNTDCP"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNTDCP"></div>
                        </td>
                        <td>
                            <div id="PoPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="PoPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="NegPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="NegPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="BackPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="BackPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNTDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNTDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNTDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNTDCP"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                        <td>
                            <div id="PcsAfterTWDCP"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTWDCP"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTWDCP"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTWDCP"></div>
                        </td>
                        <td>
                            <div id="PoPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="PoPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="NegPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="NegPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="BackPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="BackPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTWDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTWDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTWDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTWDCP"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>LN เส้นใย อวนกำ</td>
                        <td>
                            <div id="PcsAfterLNDCP"></div>
                        </td>
                        <td>
                            <div id="PriceAfterLNDCP"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterLNDCP"></div>
                        </td>
                        <td>
                            <div id="Price_AfterLNDCP"></div>
                        </td>
                        <td>
                            <div id="PoPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="PoPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="NegPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="NegPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="BackPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="BackPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavLNDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPriceLNDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPcsLNDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPriceLNDCP"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="color: rgb(0,80,255);">รวม DCP</td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PcsAfterAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PriceAfterAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Pcs_AfterAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Price_AfterAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffNavAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffCalAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPriceAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPcsAllDCP"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPriceAllDCP"></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="7">ตปท</td>
                    </tr>
                    <tr>
                        <td rowspan="5">สินค้าผลิต</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                        <td>
                            <div id="PcsAfterNTCountry"></div>
                        </td>
                        <td>
                            <div id="PriceAfterNTCountry"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterNTCountry"></div>
                        </td>
                        <td>
                            <div id="Price_AfterNTCountry"></div>
                        </td>
                        <td>
                            <div id="PoPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="PoPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="NegPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="NegPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="BackPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="BackPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPriceNTCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPcsNTCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPriceNTCountry"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>MT อวนรุม</td>
                        <td>
                            <div id="PcsAfterMTCountry"></div>
                        </td>
                        <td>
                            <div id="PriceAfterMTCountry"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterMTCountry"></div>
                        </td>
                        <td>
                            <div id="Price_AfterMTCountry"></div>
                        </td>
                        <td>
                            <div id="PoPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="PoPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="NegPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="NegPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="BackPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="BackPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavMTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPriceMTCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPcsMTCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPriceMTCountry"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                        <td>
                            <div id="PcsAfterTWCountry"></div>
                        </td>
                        <td>
                            <div id="PriceAfterTWCountry"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterTWCountry"></div>
                        </td>
                        <td>
                            <div id="Price_AfterTWCountry"></div>
                        </td>
                        <td>
                            <div id="PoPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="PoPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="NegPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="NegPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="BackPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="BackPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavTWCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPriceTWCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPcsTWCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPriceTWCountry"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>LN เส้นใย</td>
                        <td>
                            <div id="PcsAfterLNCountry"></div>
                        </td>
                        <td>
                            <div id="PriceAfterLNCountry"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterLNCountry"></div>
                        </td>
                        <td>
                            <div id="Price_AfterLNCountry"></div>
                        </td>
                        <td>
                            <div id="PoPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="PoPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="NegPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="NegPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="BackPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="BackPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavLNCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPriceLNCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPcsLNCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPriceLNCountry"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>สินค้าซื้อมา-ขายไป</td>
                        <td>SNT อวนกำ</td>
                        <td>
                            <div id="PcsAfterSNTCountry"></div>
                        </td>
                        <td>
                            <div id="PriceAfterSNTCountry"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterSNTCountry"></div>
                        </td>
                        <td>
                            <div id="Price_AfterSNTCountry"></div>
                        </td>
                        <td>
                            <div id="PoPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="PoPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NegPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NegPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="BackPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="BackPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllInPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DiffPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavSNTCountry"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DC1PriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCPPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DCYPriceSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPcsSNTCountry"></div>
                        </td>
                        <td>
                            <div id="DEXPriceSNTCountry"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="color: rgb(0,80,255);">รวม ตปท.</td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PcsAfterAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PriceAfterAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Pcs_AfterAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="Price_AfterAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PoPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NegPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="BackPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="PurchasePriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranferPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnItemPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllInPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="SendSalePriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReciveTranOutPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="ReturnStorePriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="AllOutPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="CalculatePriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewCalculatePriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DiffPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffNavAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="NewTotalDiffCalAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f1fgbu02sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2fgbu10sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2thbu05sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2debu10sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2exbu11sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu04sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2twbu07sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a7f2cebu10sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f1fgbu02sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2fgbu10sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2thbu05sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2debu10sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2exbu11sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu04sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2twbu07sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="a8f2cebu10sPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DC1PriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCPPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DCYPriceAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPcsAllCountry"></div>
                        </td>
                        <td>
                            <div style="color: rgb(0,80,255);" id="DEXPriceAllCountry"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="color: rgb(255,25,0);">รวมทั้งหมด</td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="PcsAfterAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="PriceAfterAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="Pcs_AfterAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="Price_AfterAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="PoPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="PoPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NegPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NegPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="BackPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="BackPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="PurchasePcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="PurchasePriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReciveTranferPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReciveTranferPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReturnItemPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReturnItemPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="AllInPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="AllInPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="SendSalePcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="SendSalePriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReciveTranOutPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReciveTranOutPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReturnStorePcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="ReturnStorePriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="AllOutPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="AllOutPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="CalculatePcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="CalculatePriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NewCalculatePcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NewCalculatePriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DiffPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DiffPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NewTotalPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NewTotalPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NewTotalDiffNavAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="NewTotalDiffCalAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f1fgbu02sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f1fgbu02sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2fgbu10sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2fgbu10sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2thbu05sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2thbu05sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2debu10sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2debu10sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2exbu11sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2exbu11sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2twbu04sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2twbu04sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2twbu07sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2twbu07sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2cebu10sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a7f2cebu10sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f1fgbu02sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f1fgbu02sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2fgbu10sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2fgbu10sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2thbu05sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2thbu05sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2debu10sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2debu10sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2exbu11sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2exbu11sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2twbu04sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2twbu04sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2twbu07sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2twbu07sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2cebu10sPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="a8f2cebu10sPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DC1PcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DC1PriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DCPPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DCPPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DCYPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DCYPriceAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DEXPcsAllTotal"></div>
                        </td>
                        <td>
                            <div style="color: rgb(255,25,0);" id="DEXPriceAllTotal"></div>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="table-print table-print1">
                <tr>
                    <td colspan="2" rowspan="4" width="5px">กลุ่มลูกค้า</td>
                    <td rowspan="4">ประเภท</td>
                    <td colspan="19" style="height: 3vh;"></td>
                </tr>
                <tr>

                    <td colspan="2" style="background-color: rgb(200,155,255)">ยกมา</td>
                    <td colspan="2" style="background-color: rgb(200,155,255)">ยกมา ปรับใหม่</td>
                    <td colspan="4" style="background-color: rgb(200,155,255)"></td>
                    <td colspan="2" style="background-color: rgb(200,155,255)">คงเหลือ</td>
                    <td colspan="8" style="background-color: rgb(160,255,200)">รับเข้า</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $d_before }}/{{$m_before}}/{{ $y_before }}</td>
                    <td colspan="2">{{ $d_before }}/{{$m_before}}/{{ $y_before }}</td>
                    <td colspan="2" style="background-color: rgb(200,155,255)">ปรับเข้า</td>
                    <td colspan="2" style="background-color: rgb(200,155,255)">ปรับออก</td>
                    <td colspan="2" style="background-color: rgb(200,155,255)">หลังปรับ</td>
                    <td colspan="2" style="background-color: rgb(160,255,200)">ซื้อเข้า</td>
                    <td colspan="2" style="background-color: rgb(160,255,200)">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200)">รับคืน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200)">รวม</td>

                </tr>
                <tr>
                    <td style="background-color: rgb(200,155,255)">PCS</td>
                    <td style="background-color: rgb(200,155,255)">มูลค่า</td>
                    <td style="background-color: rgb(200,155,255)">PCS</td>
                    <td style="background-color: rgb(200,155,255)">มูลค่า</td>
                    <td style="background-color: rgb(200,155,255)">PCS</td>
                    <td style="background-color: rgb(200,155,255)">มูลค่า</td>
                    <td style="background-color: rgb(200,155,255)">PCS</td>
                    <td style="background-color: rgb(200,155,255)">มูลค่า</td>
                    <td style="background-color: rgb(200,155,255)">PCS</td>
                    <td style="background-color: rgb(200,155,255)">มูลค่า</td>
                    <td style="background-color: rgb(160,255,200)">PCS</td>
                    <td style="background-color: rgb(160,255,200)">มูลค่า</td>
                    <td style="background-color: rgb(160,255,200)">PCS</td>
                    <td style="background-color: rgb(160,255,200)">มูลค่า</td>
                    <td style="background-color: rgb(160,255,200)">PCS</td>
                    <td style="background-color: rgb(160,255,200)">มูลค่า</td>
                    <td style="background-color: rgb(160,255,200)">PCS</td>
                    <td style="background-color: rgb(160,255,200)">มูลค่า</td>

                </tr>
                <tr>
                    <td rowspan="12">DC1</td>
                    <td rowspan="4">สินค้าผลิต</td>
                    <td>NT อวนกำ</td>
                    <td>
                        <div id="PcsAfterNTPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterNTPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterNTPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterNTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceNTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>MT อวนรุม</td>
                    <td>
                        <div id="PcsAfterMTPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterMTPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterMTPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterMTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceMTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>TW ตีด้าย</td>
                    <td>
                        <div id="PcsAfterTWPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterTWPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterTWPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterTWPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceTWPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>LN เส้นใย</td>
                    <td>
                        <div id="PcsAfterLNPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterLNPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterLNPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterLNPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceLNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">รวมสินค้าผลิต</td>
                    <td>
                        <div id="PcsAfterAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllProductPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="6">สินค้าซื้อมา-ขายไป</td>
                    <td>AS อุปกรณ์เสริม</td>
                    <td>
                        <div id="PcsAfterASPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterASPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterASPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterASPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsASPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceASPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceASPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>STW ตีด้าย</td>
                    <td>
                        <div id="PcsAfterSTWPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSTWPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSTWPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSTWPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSTWPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>SLN เส้นใย</td>
                    <td>
                        <div id="PcsAfterSLNPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSLNPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSLNPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSLNPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSLNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>FN+SFN ผ้ามุ้ง</td>
                    <td>
                        <div id="PcsAfterSFNPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSFNPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSFNPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSFNPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSFNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>SMT อวนรุม</td>
                    <td>
                        <div id="PcsAfterSMTPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSMTPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSMTPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSMTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSMTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>SNT อวนกำ</td>
                    <td>
                        <div id="PcsAfterSNTPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSNTPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSNTPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSNTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSNTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">รวมสินค้าซื้อมา-ขายไป</td>
                    <td>
                        <div id="PcsAfterAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllSalePrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">รวม DC1</td>
                    <td>
                        <div id="PcsAfterAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllDC1Print"></div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">DCY</td>
                    <td rowspan="2">สินค้าผลิต</td>
                    <td>NT อวนกำ</td>
                    <td>
                        <div id="PcsAfterNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceNTDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>TW ตีด้าย</td>
                    <td>
                        <div id="PcsAfterTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceTWDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>สินค้าซื้อมา-ขายไป</td>
                    <td>SNT อวนกำ</td>
                    <td>
                        <div id="PcsAfterSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSNTDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">รวม DCY</td>
                    <td>
                        <div id="PcsAfterAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">DCP</td>
                    <td rowspan="3">สินค้าผลิต</td>
                    <td>NT อวนกำ</td>
                    <td>
                        <div id="PcsAfterNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceNTDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>TW ตีด้าย</td>
                    <td>
                        <div id="PcsAfterTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceTWDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>LN อวนกำ</td>
                    <td>
                        <div id="PcsAfterLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceLNDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">รวม DCP</td>
                    <td>
                        <div id="PcsAfterAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="5">ตปท</td>
                    <td rowspan="4">สินค้าผลิต</td>
                    <td>NT อวนกำ</td>
                    <td>
                        <div id="PcsAfterNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceNTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>MT อวนรุม</td>
                    <td>
                        <div id="PcsAfterMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceMTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>TW ตีด้าย</td>
                    <td>
                        <div id="PcsAfterTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceTWCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>LN เส้นใย</td>
                    <td>
                        <div id="PcsAfterLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceLNCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>สินค้าซื้อมา-ขายไป</td>
                    <td>SNT อวนกำ</td>
                    <td>
                        <div id="PcsAfterSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceSNTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">รวม ตปท.</td>
                    <td>
                        <div id="PcsAfterAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">รวมทั้งหมด</td>
                    <td>
                        <div id="PcsAfterAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAllTotalPrint"></div>
                    </td>
                </tr>
            </table>
            <table class="table-print table-print2">
                <tr>
                    <td colspan="10" style="height: 3vh;"></td>
                    <td colspan="16">รับโอน</td>
                </tr>
                <tr>
                    <td colspan="8" style="background-color: rgb(255,155,155)">จ่ายออก</td>
                    <td colspan="2" style="background-color: rgb(160,255,255);">คงเหลือ คำนวณ</td>
                    <td colspan="2" style="background-color: rgb(255,155,155);">คงเหลือ NAV</td>
                    <td colspan="2" style="background-color: rgb(255,155,155);"></td>
                    <td colspan="4" style="background-color: rgb(200,100,255);">คงเหลือ มูลค่าใหม่</td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: rgb(255,155,155)">ส่งขาย</td>
                    <td colspan="2" style="background-color: rgb(255,155,155)">โอนออก</td>
                    <td colspan="2" style="background-color: rgb(245,255,89)">คืนของร้านค้า</td>
                    <td colspan="2" style="background-color: rgb(255,155,155)">รวม</td>
                    <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                    <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                    <td colspan="2" style="background-color: rgb(255,155,155);">ผลต่างคำนวณ NAV</td>
                    <td colspan="4">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                </tr>
                <tr>
                    <td style="background-color: rgb(255,155,155)">PCS</td>
                    <td style="background-color: rgb(255,155,155)">มูลค่า</td>
                    <td style="background-color: rgb(255,155,155)">PCS</td>
                    <td style="background-color: rgb(255,155,155)">มูลค่า</td>
                    <td style="background-color: rgb(245,255,89)">PCS</td>
                    <td style="background-color: rgb(245,255,89)">มูลค่า</td>
                    <td style="background-color: rgb(255,155,155)">PCS</td>
                    <td style="background-color: rgb(255,155,155)">มูลค่า</td>
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
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalNTPrint"></div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalMTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalTWPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalLNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAllProductPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsASPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceASPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsASPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceASPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsASPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceASPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsASPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceASPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavASPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalASPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSTWPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSTWPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSLNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSLNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSFNPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSFNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSMTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSMTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSNTPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSNTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAllSalePrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalNTDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalTWDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSNTDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAllDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalNTDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalTWDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalLNDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAllDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalNTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalMTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalTWCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalLNCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalSNTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAllCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAllTotalPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAllTotalPrint"></div>
                    </td>
                </tr>
            </table>
            <table class="table-print table-print3">
                <tr>
                    <td colspan="16">รับโอน</td>
                    <td colspan="16">โอนออก</td>
                    <td colspan="8">ส่งขาย</td>
                </tr>
                <tr>
                    <td colspan="2">ทออวนโรงงาน 1</td>
                    <td colspan="2">ทออวนโรงงาน 2</td>
                    <td colspan="2">ต่อแห โรงงาน 2</td>
                    <td colspan="2">รับคืน TD อ.10</td>
                    <td colspan="2">เส้นใย โรงงาน 2</td>
                    <td colspan="2">ตีด้าย 2 โรงงาน 2</td>
                    <td colspan="2">ตีด้าย 3 โรงงาน 2</td>
                    <td colspan="2">ตีด้าย 4 อ.11</td>
                    <td colspan="2">ทออวนโรงงาน 1</td>
                    <td colspan="2">ทออวนโรงงาน 2</td>
                    <td colspan="2">ต่อแห โรงงาน 2</td>
                    <td colspan="2">รับคืน TD อ.10</td>
                    <td colspan="2">เส้นใย โรงงาน 2</td>
                    <td colspan="2">ตีด้าย 2 โรงงาน 2</td>
                    <td colspan="2">ตีด้าย 3 โรงงาน 2</td>
                    <td colspan="2">ตีด้าย 4 อ.11</td>
                    <td colspan="2">DC1</td>
                    <td colspan="2">DCY</td>
                    <td colspan="2">DCP</td>
                    <td colspan="2">ตปท</td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">รับโอน</td>

                    <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                    <td colspan="2" style="background-color: rgb(160,255,200);">ขายออก</td>
                </tr>
                <tr>
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
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceNTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsNTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceNTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceMTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsMTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceMTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceTWPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsTWPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceTWPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceLNPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsLNPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceLNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAllProductPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAllProductPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsASPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceASPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceASPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsASPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceASPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSTWPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSTWPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSLNPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSLNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSFNPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSFNPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSMTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSMTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSNTPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSNTPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAllSalePrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAllSalePrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAllDC1Print"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAllDC1Print"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceNTDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsTWDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceTWDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSNTDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSNTDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAllDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAllDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsNTDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceNTDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsTWDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceTWDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsLNDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceLNDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAllDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAllDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceNTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsMTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceMTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsTWCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceTWCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsLNCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceLNCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsSNTCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceSNTCountryPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAllCountryPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAllCountryPrint"></div>
                    </td>
                </tr>
            </table>
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
        url: "{{ Route('DataProduct') }}",
        success: function(response) {

            console.log(response)

            var modeloading = document.querySelector(".loading-data");
            modeloading.style.display = "none";

            var Data = [
                'PcsAfterNT', 'PriceAfterNT', 'Pcs_AfterNT', 'Price_AfterNT',
                'PoPcsNT', 'PoPriceNT', 'NegPcsNT', 'NegPriceNT', 'BackPcsNT',
                'BackPriceNT', 'PurchasePcsNT', 'PurchasePriceNT', 'ReciveTranferPcsNT',
                'ReciveTranferPriceNT', 'ReturnItemPcsNT', 'ReturnItemPriceNT',
                'AllInPcsNT', 'AllInPriceNT', 'SendSalePcsNT', 'SendSalePriceNT',
                'ReciveTranOutPcsNT', 'ReciveTranOutPriceNT', 'ReturnStorePcsNT',
                'ReturnStorePriceNT', 'AllOutPcsNT', 'AllOutPriceNT', 'CalculatePcsNT',
                'CalculatePriceNT', 'NewCalculatePcsNT', 'NewCalculatePriceNT',
                'DiffPcsNT', 'DiffPriceNT', 'NewTotalPcsNT', 'NewTotalPriceNT',
                'NewTotalDiffNavNT', 'NewTotalDiffCalNT',
                'a7f1fgbu02sPcsNT', 'a7f1fgbu02sPriceNT', 'a7f2fgbu10sPcsNT', 'a7f2fgbu10sPriceNT',
                'a7f2thbu05sPcsNT', 'a7f2thbu05sPriceNT', 'a7f2debu10sPcsNT', 'a7f2debu10sPriceNT',
                'a7f2exbu11sPcsNT', 'a7f2exbu11sPriceNT', 'a7f2twbu04sPcsNT', 'a7f2twbu04sPriceNT',
                'a7f2twbu07sPcsNT', 'a7f2twbu07sPriceNT', 'a7f2cebu10sPcsNT', 'a7f2cebu10sPriceNT',
                'a8f1fgbu02sPcsNT', 'a8f1fgbu02sPriceNT', 'a8f2fgbu10sPcsNT', 'a8f2fgbu10sPriceNT',
                'a8f2thbu05sPcsNT', 'a8f2thbu05sPriceNT', 'a8f2debu10sPcsNT', 'a8f2debu10sPriceNT',
                'a8f2exbu11sPcsNT', 'a8f2exbu11sPriceNT', 'a8f2twbu04sPcsNT', 'a8f2twbu04sPriceNT',
                'a8f2twbu07sPcsNT', 'a8f2twbu07sPriceNT', 'a8f2cebu10sPcsNT', 'a8f2cebu10sPriceNT',
                'DC1PcsNT', 'DC1PriceNT', 'DCPPcsNT', 'DCPPriceNT',
                'DCYPcsNT', 'DCYPriceNT', 'DEXPcsNT', 'DEXPriceNT',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterMT', 'PriceAfterMT', 'Pcs_AfterMT', 'Price_AfterMT',
                'PoPcsMT', 'PoPriceMT', 'NegPcsMT', 'NegPriceMT', 'BackPcsMT',
                'BackPriceMT', 'PurchasePcsMT', 'PurchasePriceMT', 'ReciveTranferPcsMT',
                'ReciveTranferPriceMT', 'ReturnItemPcsMT', 'ReturnItemPriceMT',
                'AllInPcsMT', 'AllInPriceMT', 'SendSalePcsMT', 'SendSalePriceMT',
                'ReciveTranOutPcsMT', 'ReciveTranOutPriceMT', 'ReturnStorePcsMT',
                'ReturnStorePriceMT', 'AllOutPcsMT', 'AllOutPriceMT', 'CalculatePcsMT',
                'CalculatePriceMT', 'NewCalculatePcsMT', 'NewCalculatePriceMT',
                'DiffPcsMT', 'DiffPriceMT', 'NewTotalPcsMT', 'NewTotalPriceMT',
                'NewTotalDiffNavMT', 'NewTotalDiffCalMT',
                'a7f1fgbu02sPcsMT', 'a7f1fgbu02sPriceMT', 'a7f2fgbu10sPcsMT', 'a7f2fgbu10sPriceMT',
                'a7f2thbu05sPcsMT', 'a7f2thbu05sPriceMT', 'a7f2debu10sPcsMT', 'a7f2debu10sPriceMT',
                'a7f2exbu11sPcsMT', 'a7f2exbu11sPriceMT', 'a7f2twbu04sPcsMT', 'a7f2twbu04sPriceMT',
                'a7f2twbu07sPcsMT', 'a7f2twbu07sPriceMT', 'a7f2cebu10sPcsMT', 'a7f2cebu10sPriceMT',
                'a8f1fgbu02sPcsMT', 'a8f1fgbu02sPriceMT', 'a8f2fgbu10sPcsMT', 'a8f2fgbu10sPriceMT',
                'a8f2thbu05sPcsMT', 'a8f2thbu05sPriceMT', 'a8f2debu10sPcsMT', 'a8f2debu10sPriceMT',
                'a8f2exbu11sPcsMT', 'a8f2exbu11sPriceMT', 'a8f2twbu04sPcsMT', 'a8f2twbu04sPriceMT',
                'a8f2twbu07sPcsMT', 'a8f2twbu07sPriceMT', 'a8f2cebu10sPcsMT', 'a8f2cebu10sPriceMT',
                'DC1PcsMT', 'DC1PriceMT', 'DCPPcsMT', 'DCPPriceMT',
                'DCYPcsMT', 'DCYPriceMT', 'DEXPcsMT', 'DEXPriceMT',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTW', 'PriceAfterTW', 'Pcs_AfterTW', 'Price_AfterTW',
                'PoPcsTW', 'PoPriceTW', 'NegPcsTW', 'NegPriceTW', 'BackPcsTW',
                'BackPriceTW', 'PurchasePcsTW', 'PurchasePriceTW', 'ReciveTranferPcsTW',
                'ReciveTranferPriceTW', 'ReturnItemPcsTW', 'ReturnItemPriceTW',
                'AllInPcsTW', 'AllInPriceTW', 'SendSalePcsTW', 'SendSalePriceTW',
                'ReciveTranOutPcsTW', 'ReciveTranOutPriceTW', 'ReturnStorePcsTW',
                'ReturnStorePriceTW', 'AllOutPcsTW', 'AllOutPriceTW', 'CalculatePcsTW',
                'CalculatePriceTW', 'NewCalculatePcsTW', 'NewCalculatePriceTW',
                'DiffPcsTW', 'DiffPriceTW', 'NewTotalPcsTW', 'NewTotalPriceTW',
                'NewTotalDiffNavTW', 'NewTotalDiffCalTW',
                'a7f1fgbu02sPcsTW', 'a7f1fgbu02sPriceTW', 'a7f2fgbu10sPcsTW', 'a7f2fgbu10sPriceTW',
                'a7f2thbu05sPcsTW', 'a7f2thbu05sPriceTW', 'a7f2debu10sPcsTW', 'a7f2debu10sPriceTW',
                'a7f2exbu11sPcsTW', 'a7f2exbu11sPriceTW', 'a7f2twbu04sPcsTW', 'a7f2twbu04sPriceTW',
                'a7f2twbu07sPcsTW', 'a7f2twbu07sPriceTW', 'a7f2cebu10sPcsTW', 'a7f2cebu10sPriceTW',
                'a8f1fgbu02sPcsTW', 'a8f1fgbu02sPriceTW', 'a8f2fgbu10sPcsTW', 'a8f2fgbu10sPriceTW',
                'a8f2thbu05sPcsTW', 'a8f2thbu05sPriceTW', 'a8f2debu10sPcsTW', 'a8f2debu10sPriceTW',
                'a8f2exbu11sPcsTW', 'a8f2exbu11sPriceTW', 'a8f2twbu04sPcsTW', 'a8f2twbu04sPriceTW',
                'a8f2twbu07sPcsTW', 'a8f2twbu07sPriceTW', 'a8f2cebu10sPcsTW', 'a8f2cebu10sPriceTW',
                'DC1PcsTW', 'DC1PriceTW', 'DCPPcsTW', 'DCPPriceTW',
                'DCYPcsTW', 'DCYPriceTW', 'DEXPcsTW', 'DEXPriceTW',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterLN', 'PriceAfterLN', 'Pcs_AfterLN', 'Price_AfterLN',
                'PoPcsLN', 'PoPriceLN', 'NegPcsLN', 'NegPriceLN', 'BackPcsLN',
                'BackPriceLN', 'PurchasePcsLN', 'PurchasePriceLN', 'ReciveTranferPcsLN',
                'ReciveTranferPriceLN', 'ReturnItemPcsLN', 'ReturnItemPriceLN',
                'AllInPcsLN', 'AllInPriceLN', 'SendSalePcsLN', 'SendSalePriceLN',
                'ReciveTranOutPcsLN', 'ReciveTranOutPriceLN', 'ReturnStorePcsLN',
                'ReturnStorePriceLN', 'AllOutPcsLN', 'AllOutPriceLN', 'CalculatePcsLN',
                'CalculatePriceLN', 'NewCalculatePcsLN', 'NewCalculatePriceLN',
                'DiffPcsLN', 'DiffPriceLN', 'NewTotalPcsLN', 'NewTotalPriceLN',
                'NewTotalDiffNavLN', 'NewTotalDiffCalLN',
                'a7f1fgbu02sPcsLN', 'a7f1fgbu02sPriceLN', 'a7f2fgbu10sPcsLN', 'a7f2fgbu10sPriceLN',
                'a7f2thbu05sPcsLN', 'a7f2thbu05sPriceLN', 'a7f2debu10sPcsLN', 'a7f2debu10sPriceLN',
                'a7f2exbu11sPcsLN', 'a7f2exbu11sPriceLN', 'a7f2twbu04sPcsLN', 'a7f2twbu04sPriceLN',
                'a7f2twbu07sPcsLN', 'a7f2twbu07sPriceLN', 'a7f2cebu10sPcsLN', 'a7f2cebu10sPriceLN',
                'a8f1fgbu02sPcsLN', 'a8f1fgbu02sPriceLN', 'a8f2fgbu10sPcsLN', 'a8f2fgbu10sPriceLN',
                'a8f2thbu05sPcsLN', 'a8f2thbu05sPriceLN', 'a8f2debu10sPcsLN', 'a8f2debu10sPriceLN',
                'a8f2exbu11sPcsLN', 'a8f2exbu11sPriceLN', 'a8f2twbu04sPcsLN', 'a8f2twbu04sPriceLN',
                'a8f2twbu07sPcsLN', 'a8f2twbu07sPriceLN', 'a8f2cebu10sPcsLN', 'a8f2cebu10sPriceLN',
                'DC1PcsLN', 'DC1PriceLN', 'DCPPcsLN', 'DCPPriceLN',
                'DCYPcsLN', 'DCYPriceLN', 'DEXPcsLN', 'DEXPriceLN',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllProduct', 'PriceAfterAllProduct', 'Pcs_AfterAllProduct',
                'Price_AfterAllProduct',
                'PoPcsAllProduct', 'PoPriceAllProduct', 'NegPcsAllProduct', 'NegPriceAllProduct',
                'BackPcsAllProduct',
                'BackPriceAllProduct', 'PurchasePcsAllProduct', 'PurchasePriceAllProduct',
                'ReciveTranferPcsAllProduct',
                'ReciveTranferPriceAllProduct', 'ReturnItemPcsAllProduct', 'ReturnItemPriceAllProduct',
                'AllInPcsAllProduct', 'AllInPriceAllProduct', 'SendSalePcsAllProduct',
                'SendSalePriceAllProduct',
                'ReciveTranOutPcsAllProduct', 'ReciveTranOutPriceAllProduct', 'ReturnStorePcsAllProduct',
                'ReturnStorePriceAllProduct', 'AllOutPcsAllProduct', 'AllOutPriceAllProduct',
                'CalculatePcsAllProduct',
                'CalculatePriceAllProduct', 'NewCalculatePcsAllProduct', 'NewCalculatePriceAllProduct',
                'DiffPcsAllProduct', 'DiffPriceAllProduct', 'NewTotalPcsAllProduct',
                'NewTotalPriceAllProduct',
                'NewTotalDiffNavAllProduct', 'NewTotalDiffCalAllProduct',
                'a7f1fgbu02sPcsAllProduct', 'a7f1fgbu02sPriceAllProduct', 'a7f2fgbu10sPcsAllProduct',
                'a7f2fgbu10sPriceAllProduct',
                'a7f2thbu05sPcsAllProduct', 'a7f2thbu05sPriceAllProduct', 'a7f2debu10sPcsAllProduct',
                'a7f2debu10sPriceAllProduct',
                'a7f2exbu11sPcsAllProduct', 'a7f2exbu11sPriceAllProduct', 'a7f2twbu04sPcsAllProduct',
                'a7f2twbu04sPriceAllProduct',
                'a7f2twbu07sPcsAllProduct', 'a7f2twbu07sPriceAllProduct', 'a7f2cebu10sPcsAllProduct',
                'a7f2cebu10sPriceAllProduct',
                'a8f1fgbu02sPcsAllProduct', 'a8f1fgbu02sPriceAllProduct', 'a8f2fgbu10sPcsAllProduct',
                'a8f2fgbu10sPriceAllProduct',
                'a8f2thbu05sPcsAllProduct', 'a8f2thbu05sPriceAllProduct', 'a8f2debu10sPcsAllProduct',
                'a8f2debu10sPriceAllProduct',
                'a8f2exbu11sPcsAllProduct', 'a8f2exbu11sPriceAllProduct', 'a8f2twbu04sPcsAllProduct',
                'a8f2twbu04sPriceAllProduct',
                'a8f2twbu07sPcsAllProduct', 'a8f2twbu07sPriceAllProduct', 'a8f2cebu10sPcsAllProduct',
                'a8f2cebu10sPriceAllProduct',
                'DC1PcsAllProduct', 'DC1PriceAllProduct', 'DCPPcsAllProduct', 'DCPPriceAllProduct',
                'DCYPcsAllProduct', 'DCYPriceAllProduct', 'DEXPcsAllProduct', 'DEXPriceAllProduct',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAS', 'PriceAfterAS', 'Pcs_AfterAS', 'Price_AfterAS',
                'PoPcsAS', 'PoPriceAS', 'NegPcsAS', 'NegPriceAS', 'BackPcsAS',
                'BackPriceAS', 'PurchasePcsAS', 'PurchasePriceAS', 'ReciveTranferPcsAS',
                'ReciveTranferPriceAS', 'ReturnItemPcsAS', 'ReturnItemPriceAS',
                'AllInPcsAS', 'AllInPriceAS', 'SendSalePcsAS', 'SendSalePriceAS',
                'ReciveTranOutPcsAS', 'ReciveTranOutPriceAS', 'ReturnStorePcsAS',
                'ReturnStorePriceAS', 'AllOutPcsAS', 'AllOutPriceAS', 'CalculatePcsAS',
                'CalculatePriceAS', 'NewCalculatePcsAS', 'NewCalculatePriceAS',
                'DiffPcsAS', 'DiffPriceAS', 'NewTotalPcsAS', 'NewTotalPriceAS',
                'NewTotalDiffNavAS', 'NewTotalDiffCalAS',
                'a7f1fgbu02sPcsAS', 'a7f1fgbu02sPriceAS', 'a7f2fgbu10sPcsAS', 'a7f2fgbu10sPriceAS',
                'a7f2thbu05sPcsAS', 'a7f2thbu05sPriceAS', 'a7f2debu10sPcsAS', 'a7f2debu10sPriceAS',
                'a7f2exbu11sPcsAS', 'a7f2exbu11sPriceAS', 'a7f2twbu04sPcsAS', 'a7f2twbu04sPriceAS',
                'a7f2twbu07sPcsAS', 'a7f2twbu07sPriceAS', 'a7f2cebu10sPcsAS', 'a7f2cebu10sPriceAS',
                'a8f1fgbu02sPcsAS', 'a8f1fgbu02sPriceAS', 'a8f2fgbu10sPcsAS', 'a8f2fgbu10sPriceAS',
                'a8f2thbu05sPcsAS', 'a8f2thbu05sPriceAS', 'a8f2debu10sPcsAS', 'a8f2debu10sPriceAS',
                'a8f2exbu11sPcsAS', 'a8f2exbu11sPriceAS', 'a8f2twbu04sPcsAS', 'a8f2twbu04sPriceAS',
                'a8f2twbu07sPcsAS', 'a8f2twbu07sPriceAS', 'a8f2cebu10sPcsAS', 'a8f2cebu10sPriceAS',
                'DC1PcsAS', 'DC1PriceAS', 'DCPPcsAS', 'DCPPriceAS',
                'DCYPcsAS', 'DCYPriceAS', 'DEXPcsAS', 'DEXPriceAS',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSTW', 'PriceAfterSTW', 'Pcs_AfterSTW', 'Price_AfterSTW',
                'PoPcsSTW', 'PoPriceSTW', 'NegPcsSTW', 'NegPriceSTW', 'BackPcsSTW',
                'BackPriceSTW', 'PurchasePcsSTW', 'PurchasePriceSTW', 'ReciveTranferPcsSTW',
                'ReciveTranferPriceSTW', 'ReturnItemPcsSTW', 'ReturnItemPriceSTW',
                'AllInPcsSTW', 'AllInPriceSTW', 'SendSalePcsSTW', 'SendSalePriceSTW',
                'ReciveTranOutPcsSTW', 'ReciveTranOutPriceSTW', 'ReturnStorePcsSTW',
                'ReturnStorePriceSTW', 'AllOutPcsSTW', 'AllOutPriceSTW', 'CalculatePcsSTW',
                'CalculatePriceSTW', 'NewCalculatePcsSTW', 'NewCalculatePriceSTW',
                'DiffPcsSTW', 'DiffPriceSTW', 'NewTotalPcsSTW', 'NewTotalPriceSTW',
                'NewTotalDiffNavSTW', 'NewTotalDiffCalSTW',
                'a7f1fgbu02sPcsSTW', 'a7f1fgbu02sPriceSTW', 'a7f2fgbu10sPcsSTW', 'a7f2fgbu10sPriceSTW',
                'a7f2thbu05sPcsSTW', 'a7f2thbu05sPriceSTW', 'a7f2debu10sPcsSTW', 'a7f2debu10sPriceSTW',
                'a7f2exbu11sPcsSTW', 'a7f2exbu11sPriceSTW', 'a7f2twbu04sPcsSTW', 'a7f2twbu04sPriceSTW',
                'a7f2twbu07sPcsSTW', 'a7f2twbu07sPriceSTW', 'a7f2cebu10sPcsSTW', 'a7f2cebu10sPriceSTW',
                'a8f1fgbu02sPcsSTW', 'a8f1fgbu02sPriceSTW', 'a8f2fgbu10sPcsSTW', 'a8f2fgbu10sPriceSTW',
                'a8f2thbu05sPcsSTW', 'a8f2thbu05sPriceSTW', 'a8f2debu10sPcsSTW', 'a8f2debu10sPriceSTW',
                'a8f2exbu11sPcsSTW', 'a8f2exbu11sPriceSTW', 'a8f2twbu04sPcsSTW', 'a8f2twbu04sPriceSTW',
                'a8f2twbu07sPcsSTW', 'a8f2twbu07sPriceSTW', 'a8f2cebu10sPcsSTW', 'a8f2cebu10sPriceSTW',
                'DC1PcsSTW', 'DC1PriceSTW', 'DCPPcsSTW', 'DCPPriceSTW',
                'DCYPcsSTW', 'DCYPriceSTW', 'DEXPcsSTW', 'DEXPriceAllProduct',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSLN', 'PriceAfterSLN', 'Pcs_AfterSLN', 'Price_AfterSLN',
                'PoPcsSLN', 'PoPriceSLN', 'NegPcsSLN', 'NegPriceSLN', 'BackPcsSLN',
                'BackPriceSLN', 'PurchasePcsSLN', 'PurchasePriceSLN', 'ReciveTranferPcsSLN',
                'ReciveTranferPriceSLN', 'ReturnItemPcsSLN', 'ReturnItemPriceSLN',
                'AllInPcsSLN', 'AllInPriceSLN', 'SendSalePcsSLN', 'SendSalePriceSLN',
                'ReciveTranOutPcsSLN', 'ReciveTranOutPriceSLN', 'ReturnStorePcsSLN',
                'ReturnStorePriceSLN', 'AllOutPcsSLN', 'AllOutPriceSLN', 'CalculatePcsSLN',
                'CalculatePriceSLN', 'NewCalculatePcsSLN', 'NewCalculatePriceSLN',
                'DiffPcsSLN', 'DiffPriceSLN', 'NewTotalPcsSLN', 'NewTotalPriceSLN',
                'NewTotalDiffNavSLN', 'NewTotalDiffCalSLN',
                'a7f1fgbu02sPcsSLN', 'a7f1fgbu02sPriceSLN', 'a7f2fgbu10sPcsSLN', 'a7f2fgbu10sPriceSLN',
                'a7f2thbu05sPcsSLN', 'a7f2thbu05sPriceSLN', 'a7f2debu10sPcsSLN', 'a7f2debu10sPriceSLN',
                'a7f2exbu11sPcsSLN', 'a7f2exbu11sPriceSLN', 'a7f2twbu04sPcsSLN', 'a7f2twbu04sPriceSLN',
                'a7f2twbu07sPcsSLN', 'a7f2twbu07sPriceSLN', 'a7f2cebu10sPcsSLN', 'a7f2cebu10sPriceSLN',
                'a8f1fgbu02sPcsSLN', 'a8f1fgbu02sPriceSLN', 'a8f2fgbu10sPcsSLN', 'a8f2fgbu10sPriceSLN',
                'a8f2thbu05sPcsSLN', 'a8f2thbu05sPriceSLN', 'a8f2debu10sPcsSLN', 'a8f2debu10sPriceSLN',
                'a8f2exbu11sPcsSLN', 'a8f2exbu11sPriceSLN', 'a8f2twbu04sPcsSLN', 'a8f2twbu04sPriceSLN',
                'a8f2twbu07sPcsSLN', 'a8f2twbu07sPriceSLN', 'a8f2cebu10sPcsSLN', 'a8f2cebu10sPriceSLN',
                'DC1PcsSLN', 'DC1PriceSLN', 'DCPPcsSLN', 'DCPPriceSLN',
                'DCYPcsSLN', 'DCYPriceSLN', 'DEXPcsSLN', 'DEXPriceSLN',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSFN', 'PriceAfterSFN', 'Pcs_AfterSFN', 'Price_AfterSFN',
                'PoPcsSFN', 'PoPriceSFN', 'NegPcsSFN', 'NegPriceSFN', 'BackPcsSFN',
                'BackPriceSFN', 'PurchasePcsSFN', 'PurchasePriceSFN', 'ReciveTranferPcsSFN',
                'ReciveTranferPriceSFN', 'ReturnItemPcsSFN', 'ReturnItemPriceSFN',
                'AllInPcsSFN', 'AllInPriceSFN', 'SendSalePcsSFN', 'SendSalePriceSFN',
                'ReciveTranOutPcsSFN', 'ReciveTranOutPriceSFN', 'ReturnStorePcsSFN',
                'ReturnStorePriceSFN', 'AllOutPcsSFN', 'AllOutPriceSFN', 'CalculatePcsSFN',
                'CalculatePriceSFN', 'NewCalculatePcsSFN', 'NewCalculatePriceSFN',
                'DiffPcsSFN', 'DiffPriceSFN', 'NewTotalPcsSFN', 'NewTotalPriceSFN',
                'NewTotalDiffNavSFN', 'NewTotalDiffCalSFN',
                'a7f1fgbu02sPcsSFN', 'a7f1fgbu02sPriceSFN', 'a7f2fgbu10sPcsSFN', 'a7f2fgbu10sPriceSFN',
                'a7f2thbu05sPcsSFN', 'a7f2thbu05sPriceSFN', 'a7f2debu10sPcsSFN', 'a7f2debu10sPriceSFN',
                'a7f2exbu11sPcsSFN', 'a7f2exbu11sPriceSFN', 'a7f2twbu04sPcsSFN', 'a7f2twbu04sPriceSFN',
                'a7f2twbu07sPcsSFN', 'a7f2twbu07sPriceSFN', 'a7f2cebu10sPcsSFN', 'a7f2cebu10sPriceSFN',
                'a8f1fgbu02sPcsSFN', 'a8f1fgbu02sPriceSFN', 'a8f2fgbu10sPcsSFN', 'a8f2fgbu10sPriceSFN',
                'a8f2thbu05sPcsSFN', 'a8f2thbu05sPriceSFN', 'a8f2debu10sPcsSFN', 'a8f2debu10sPriceSFN',
                'a8f2exbu11sPcsSFN', 'a8f2exbu11sPriceSFN', 'a8f2twbu04sPcsSFN', 'a8f2twbu04sPriceSFN',
                'a8f2twbu07sPcsSFN', 'a8f2twbu07sPriceSFN', 'a8f2cebu10sPcsSFN', 'a8f2cebu10sPriceSFN',
                'DC1PcsSFN', 'DC1PriceSFN', 'DCPPcsSFN', 'DCPPriceSFN',
                'DCYPcsSFN', 'DCYPriceSFN', 'DEXPcsSFN', 'DEXPriceSFN',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSMT', 'PriceAfterSMT', 'Pcs_AfterSMT', 'Price_AfterSMT',
                'PoPcsSMT', 'PoPriceSMT', 'NegPcsSMT', 'NegPriceSMT', 'BackPcsSMT',
                'BackPriceSMT', 'PurchasePcsSMT', 'PurchasePriceSMT', 'ReciveTranferPcsSMT',
                'ReciveTranferPriceSMT', 'ReturnItemPcsSMT', 'ReturnItemPriceSMT',
                'AllInPcsSMT', 'AllInPriceSMT', 'SendSalePcsSMT', 'SendSalePriceSMT',
                'ReciveTranOutPcsSMT', 'ReciveTranOutPriceSMT', 'ReturnStorePcsSMT',
                'ReturnStorePriceSMT', 'AllOutPcsSMT', 'AllOutPriceSMT', 'CalculatePcsSMT',
                'CalculatePriceSMT', 'NewCalculatePcsSMT', 'NewCalculatePriceSMT',
                'DiffPcsSMT', 'DiffPriceSMT', 'NewTotalPcsSMT', 'NewTotalPriceSMT',
                'NewTotalDiffNavSMT', 'NewTotalDiffCalSMT',
                'a7f1fgbu02sPcsSMT', 'a7f1fgbu02sPriceSMT', 'a7f2fgbu10sPcsSMT', 'a7f2fgbu10sPriceSMT',
                'a7f2thbu05sPcsSMT', 'a7f2thbu05sPriceSMT', 'a7f2debu10sPcsSMT', 'a7f2debu10sPriceSMT',
                'a7f2exbu11sPcsSMT', 'a7f2exbu11sPriceSMT', 'a7f2twbu04sPcsSMT', 'a7f2twbu04sPriceSMT',
                'a7f2twbu07sPcsSMT', 'a7f2twbu07sPriceSMT', 'a7f2cebu10sPcsSMT', 'a7f2cebu10sPriceSMT',
                'a8f1fgbu02sPcsSMT', 'a8f1fgbu02sPriceSMT', 'a8f2fgbu10sPcsSMT', 'a8f2fgbu10sPriceSMT',
                'a8f2thbu05sPcsSMT', 'a8f2thbu05sPriceSMT', 'a8f2debu10sPcsSMT', 'a8f2debu10sPriceSMT',
                'a8f2exbu11sPcsSMT', 'a8f2exbu11sPriceSMT', 'a8f2twbu04sPcsSMT', 'a8f2twbu04sPriceSMT',
                'a8f2twbu07sPcsSMT', 'a8f2twbu07sPriceSMT', 'a8f2cebu10sPcsSMT', 'a8f2cebu10sPriceSMT',
                'DC1PcsSMT', 'DC1PriceSMT', 'DCPPcsSMT', 'DCPPriceSMT',
                'DCYPcsSMT', 'DCYPriceSMT', 'DEXPcsSMT', 'DEXPriceSMT',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSNT', 'PriceAfterSNT', 'Pcs_AfterSNT', 'Price_AfterSNT',
                'PoPcsSNT', 'PoPriceSNT', 'NegPcsSNT', 'NegPriceSNT', 'BackPcsSNT',
                'BackPriceSNT', 'PurchasePcsSNT', 'PurchasePriceSNT', 'ReciveTranferPcsSNT',
                'ReciveTranferPriceSNT', 'ReturnItemPcsSNT', 'ReturnItemPriceSNT',
                'AllInPcsSNT', 'AllInPriceSNT', 'SendSalePcsSNT', 'SendSalePriceSNT',
                'ReciveTranOutPcsSNT', 'ReciveTranOutPriceSNT', 'ReturnStorePcsSNT',
                'ReturnStorePriceSNT', 'AllOutPcsSNT', 'AllOutPriceSNT', 'CalculatePcsSNT',
                'CalculatePriceSNT', 'NewCalculatePcsSNT', 'NewCalculatePriceSNT',
                'DiffPcsSNT', 'DiffPriceSNT', 'NewTotalPcsSNT', 'NewTotalPriceSNT',
                'NewTotalDiffNavSNT', 'NewTotalDiffCalSNT',
                'a7f1fgbu02sPcsSNT', 'a7f1fgbu02sPriceSNT', 'a7f2fgbu10sPcsSNT', 'a7f2fgbu10sPriceSNT',
                'a7f2thbu05sPcsSNT', 'a7f2thbu05sPriceSNT', 'a7f2debu10sPcsSNT', 'a7f2debu10sPriceSNT',
                'a7f2exbu11sPcsSNT', 'a7f2exbu11sPriceSNT', 'a7f2twbu04sPcsSNT', 'a7f2twbu04sPriceSNT',
                'a7f2twbu07sPcsSNT', 'a7f2twbu07sPriceSNT', 'a7f2cebu10sPcsSNT', 'a7f2cebu10sPriceSNT',
                'a8f1fgbu02sPcsSNT', 'a8f1fgbu02sPriceSNT', 'a8f2fgbu10sPcsSNT', 'a8f2fgbu10sPriceSNT',
                'a8f2thbu05sPcsSNT', 'a8f2thbu05sPriceSNT', 'a8f2debu10sPcsSNT', 'a8f2debu10sPriceSNT',
                'a8f2exbu11sPcsSNT', 'a8f2exbu11sPriceSNT', 'a8f2twbu04sPcsSNT', 'a8f2twbu04sPriceSNT',
                'a8f2twbu07sPcsSNT', 'a8f2twbu07sPriceSNT', 'a8f2cebu10sPcsSNT', 'a8f2cebu10sPriceSNT',
                'DC1PcsSNT', 'DC1PriceSNT', 'DCPPcsSNT', 'DCPPriceSNT',
                'DCYPcsSNT', 'DCYPriceSNT', 'DEXPcsSNT', 'DEXPriceSNT',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllSale', 'PriceAfterAllSale', 'Pcs_AfterAllSale', 'Price_AfterAllSale',
                'PoPcsAllSale', 'PoPriceAllSale', 'NegPcsAllSale', 'NegPriceAllSale', 'BackPcsAllSale',
                'BackPriceAllSale', 'PurchasePcsAllSale', 'PurchasePriceAllSale', 'ReciveTranferPcsAllSale',
                'ReciveTranferPriceAllSale', 'ReturnItemPcsAllSale', 'ReturnItemPriceAllSale',
                'AllInPcsAllSale', 'AllInPriceAllSale', 'SendSalePcsAllSale', 'SendSalePriceAllSale',
                'ReciveTranOutPcsAllSale', 'ReciveTranOutPriceAllSale', 'ReturnStorePcsAllSale',
                'ReturnStorePriceAllSale', 'AllOutPcsAllSale', 'AllOutPriceAllSale', 'CalculatePcsAllSale',
                'CalculatePriceAllSale', 'NewCalculatePcsAllSale', 'NewCalculatePriceAllSale',
                'DiffPcsAllSale', 'DiffPriceAllSale', 'NewTotalPcsAllSale', 'NewTotalPriceAllSale',
                'NewTotalDiffNavAllSale', 'NewTotalDiffCalAllSale',
                'a7f1fgbu02sPcsAllSale', 'a7f1fgbu02sPriceAllSale', 'a7f2fgbu10sPcsAllSale',
                'a7f2fgbu10sPriceAllSale',
                'a7f2thbu05sPcsAllSale', 'a7f2thbu05sPriceAllSale', 'a7f2debu10sPcsAllSale',
                'a7f2debu10sPriceAllSale',
                'a7f2exbu11sPcsAllSale', 'a7f2exbu11sPriceAllSale', 'a7f2twbu04sPcsAllSale',
                'a7f2twbu04sPriceAllSale',
                'a7f2twbu07sPcsAllSale', 'a7f2twbu07sPriceAllSale', 'a7f2cebu10sPcsAllSale',
                'a7f2cebu10sPriceAllSale',
                'a8f1fgbu02sPcsAllSale', 'a8f1fgbu02sPriceAllSale', 'a8f2fgbu10sPcsAllSale',
                'a8f2fgbu10sPriceAllSale',
                'a8f2thbu05sPcsAllSale', 'a8f2thbu05sPriceAllSale', 'a8f2debu10sPcsAllSale',
                'a8f2debu10sPriceAllSale',
                'a8f2exbu11sPcsAllSale', 'a8f2exbu11sPriceAllSale', 'a8f2twbu04sPcsAllSale',
                'a8f2twbu04sPriceAllSale',
                'a8f2twbu07sPcsAllSale', 'a8f2twbu07sPriceAllSale', 'a8f2cebu10sPcsAllSale',
                'a8f2cebu10sPriceAllSale',
                'DC1PcsAllSale', 'DC1PriceAllSale', 'DCPPcsAllSale', 'DCPPriceAllSale',
                'DCYPcsAllSale', 'DCYPriceAllSale', 'DEXPcsAllSale', 'DEXPriceAllSale',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllDC1', 'PriceAfterAllDC1', 'Pcs_AfterAllDC1', 'Price_AfterAllDC1',
                'PoPcsAllDC1', 'PoPriceAllDC1', 'NegPcsAllDC1', 'NegPriceAllDC1', 'BackPcsAllDC1',
                'BackPriceAllDC1', 'PurchasePcsAllDC1', 'PurchasePriceAllDC1', 'ReciveTranferPcsAllDC1',
                'ReciveTranferPriceAllDC1', 'ReturnItemPcsAllDC1', 'ReturnItemPriceAllDC1',
                'AllInPcsAllDC1', 'AllInPriceAllDC1', 'SendSalePcsAllDC1', 'SendSalePriceAllDC1',
                'ReciveTranOutPcsAllDC1', 'ReciveTranOutPriceAllDC1', 'ReturnStorePcsAllDC1',
                'ReturnStorePriceAllDC1', 'AllOutPcsAllDC1', 'AllOutPriceAllDC1', 'CalculatePcsAllDC1',
                'CalculatePriceAllDC1', 'NewCalculatePcsAllDC1', 'NewCalculatePriceAllDC1',
                'DiffPcsAllDC1', 'DiffPriceAllDC1', 'NewTotalPcsAllDC1', 'NewTotalPriceAllDC1',
                'NewTotalDiffNavAllDC1', 'NewTotalDiffCalAllDC1',
                'a7f1fgbu02sPcsAllDC1', 'a7f1fgbu02sPriceAllDC1', 'a7f2fgbu10sPcsAllDC1',
                'a7f2fgbu10sPriceAllDC1',
                'a7f2thbu05sPcsAllDC1', 'a7f2thbu05sPriceAllDC1', 'a7f2debu10sPcsAllDC1',
                'a7f2debu10sPriceAllDC1',
                'a7f2exbu11sPcsAllDC1', 'a7f2exbu11sPriceAllDC1', 'a7f2twbu04sPcsAllDC1',
                'a7f2twbu04sPriceAllDC1',
                'a7f2twbu07sPcsAllDC1', 'a7f2twbu07sPriceAllDC1', 'a7f2cebu10sPcsAllDC1',
                'a7f2cebu10sPriceAllDC1',
                'a8f1fgbu02sPcsAllDC1', 'a8f1fgbu02sPriceAllDC1', 'a8f2fgbu10sPcsAllDC1',
                'a8f2fgbu10sPriceAllDC1',
                'a8f2thbu05sPcsAllDC1', 'a8f2thbu05sPriceAllDC1', 'a8f2debu10sPcsAllDC1',
                'a8f2debu10sPriceAllDC1',
                'a8f2exbu11sPcsAllDC1', 'a8f2exbu11sPriceAllDC1', 'a8f2twbu04sPcsAllDC1',
                'a8f2twbu04sPriceAllDC1',
                'a8f2twbu07sPcsAllDC1', 'a8f2twbu07sPriceAllDC1', 'a8f2cebu10sPcsAllDC1',
                'a8f2cebu10sPriceAllDC1',
                'DC1PcsAllDC1', 'DC1PriceAllDC1', 'DCPPcsAllDC1', 'DCPPriceAllDC1',
                'DCYPcsAllDC1', 'DCYPriceAllDC1', 'DEXPcsAllDC1', 'DEXPriceAllDC1',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterNTDCY', 'PriceAfterNTDCY', 'Pcs_AfterNTDCY', 'Price_AfterNTDCY',
                'PoPcsNTDCY', 'PoPriceNTDCY', 'NegPcsNTDCY', 'NegPriceNTDCY', 'BackPcsNTDCY',
                'BackPriceNTDCY', 'PurchasePcsNTDCY', 'PurchasePriceNTDCY', 'ReciveTranferPcsNTDCY',
                'ReciveTranferPriceNTDCY', 'ReturnItemPcsNTDCY', 'ReturnItemPriceNTDCY',
                'AllInPcsNTDCY', 'AllInPriceNTDCY', 'SendSalePcsNTDCY', 'SendSalePriceNTDCY',
                'ReciveTranOutPcsNTDCY', 'ReciveTranOutPriceNTDCY', 'ReturnStorePcsNTDCY',
                'ReturnStorePriceNTDCY', 'AllOutPcsNTDCY', 'AllOutPriceNTDCY', 'CalculatePcsNTDCY',
                'CalculatePriceNTDCY', 'NewCalculatePcsNTDCY', 'NewCalculatePriceNTDCY',
                'DiffPcsNTDCY', 'DiffPriceNTDCY', 'NewTotalPcsNTDCY', 'NewTotalPriceNTDCY',
                'NewTotalDiffNavNTDCY', 'NewTotalDiffCalNTDCY',
                'a7f1fgbu02sPcsNTDCY', 'a7f1fgbu02sPriceNTDCY', 'a7f2fgbu10sPcsNTDCY',
                'a7f2fgbu10sPriceNTDCY',
                'a7f2thbu05sPcsNTDCY', 'a7f2thbu05sPriceNTDCY', 'a7f2debu10sPcsNTDCY',
                'a7f2debu10sPriceNTDCY',
                'a7f2exbu11sPcsNTDCY', 'a7f2exbu11sPriceNTDCY', 'a7f2twbu04sPcsNTDCY',
                'a7f2twbu04sPriceNTDCY',
                'a7f2twbu07sPcsNTDCY', 'a7f2twbu07sPriceNTDCY', 'a7f2cebu10sPcsNTDCY',
                'a7f2cebu10sPriceNTDCY',
                'a8f1fgbu02sPcsNTDCY', 'a8f1fgbu02sPriceNTDCY', 'a8f2fgbu10sPcsNTDCY',
                'a8f2fgbu10sPriceNTDCY',
                'a8f2thbu05sPcsNTDCY', 'a8f2thbu05sPriceNTDCY', 'a8f2debu10sPcsNTDCY',
                'a8f2debu10sPriceNTDCY',
                'a8f2exbu11sPcsNTDCY', 'a8f2exbu11sPriceNTDCY', 'a8f2twbu04sPcsNTDCY',
                'a8f2twbu04sPriceNTDCY',
                'a8f2twbu07sPcsNTDCY', 'a8f2twbu07sPriceNTDCY', 'a8f2cebu10sPcsNTDCY',
                'a8f2cebu10sPriceNTDCY',
                'DC1PcsNTDCY', 'DC1PriceNTDCY', 'DCPPcsNTDCY', 'DCPPriceNTDCY',
                'DCYPcsNTDCY', 'DCYPriceNTDCY', 'DEXPcsNTDCY', 'DEXPriceNTDCY',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWDCY', 'PriceAfterTWDCY', 'Pcs_AfterTWDCY', 'Price_AfterTWDCY',
                'PoPcsTWDCY', 'PoPriceTWDCY', 'NegPcsTWDCY', 'NegPriceTWDCY', 'BackPcsTWDCY',
                'BackPriceTWDCY', 'PurchasePcsTWDCY', 'PurchasePriceTWDCY', 'ReciveTranferPcsTWDCY',
                'ReciveTranferPriceTWDCY', 'ReturnItemPcsTWDCY', 'ReturnItemPriceTWDCY',
                'AllInPcsTWDCY', 'AllInPriceTWDCY', 'SendSalePcsTWDCY', 'SendSalePriceTWDCY',
                'ReciveTranOutPcsTWDCY', 'ReciveTranOutPriceTWDCY', 'ReturnStorePcsTWDCY',
                'ReturnStorePriceTWDCY', 'AllOutPcsTWDCY', 'AllOutPriceTWDCY', 'CalculatePcsTWDCY',
                'CalculatePriceTWDCY', 'NewCalculatePcsTWDCY', 'NewCalculatePriceTWDCY',
                'DiffPcsTWDCY', 'DiffPriceTWDCY', 'NewTotalPcsTWDCY', 'NewTotalPriceTWDCY',
                'NewTotalDiffNavTWDCY', 'NewTotalDiffCalTWDCY',
                'a7f1fgbu02sPcsTWDCY', 'a7f1fgbu02sPriceTWDCY', 'a7f2fgbu10sPcsTWDCY',
                'a7f2fgbu10sPriceTWDCY',
                'a7f2thbu05sPcsTWDCY', 'a7f2thbu05sPriceTWDCY', 'a7f2debu10sPcsTWDCY',
                'a7f2debu10sPriceTWDCY',
                'a7f2exbu11sPcsTWDCY', 'a7f2exbu11sPriceTWDCY', 'a7f2twbu04sPcsTWDCY',
                'a7f2twbu04sPriceTWDCY',
                'a7f2twbu07sPcsTWDCY', 'a7f2twbu07sPriceTWDCY', 'a7f2cebu10sPcsTWDCY',
                'a7f2cebu10sPriceTWDCY',
                'a8f1fgbu02sPcsTWDCY', 'a8f1fgbu02sPriceTWDCY', 'a8f2fgbu10sPcsTWDCY',
                'a8f2fgbu10sPriceTWDCY',
                'a8f2thbu05sPcsTWDCY', 'a8f2thbu05sPriceTWDCY', 'a8f2debu10sPcsTWDCY',
                'a8f2debu10sPriceTWDCY',
                'a8f2exbu11sPcsTWDCY', 'a8f2exbu11sPriceTWDCY', 'a8f2twbu04sPcsTWDCY',
                'a8f2twbu04sPriceTWDCY',
                'a8f2twbu07sPcsTWDCY', 'a8f2twbu07sPriceTWDCY', 'a8f2cebu10sPcsTWDCY',
                'a8f2cebu10sPriceTWDCY',
                'DC1PcsTWDCY', 'DC1PriceTWDCY', 'DCPPcsTWDCY', 'DCPPriceTWDCY',
                'DCYPcsTWDCY', 'DCYPriceTWDCY', 'DEXPcsTWDCY', 'DEXPriceTWDCY',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSNTDCY', 'PriceAfterSNTDCY', 'Pcs_AfterSNTDCY', 'Price_AfterSNTDCY',
                'PoPcsSNTDCY', 'PoPriceSNTDCY', 'NegPcsSNTDCY', 'NegPriceSNTDCY', 'BackPcsSNTDCY',
                'BackPriceSNTDCY', 'PurchasePcsSNTDCY', 'PurchasePriceSNTDCY', 'ReciveTranferPcsSNTDCY',
                'ReciveTranferPriceSNTDCY', 'ReturnItemPcsSNTDCY', 'ReturnItemPriceSNTDCY',
                'AllInPcsSNTDCY', 'AllInPriceSNTDCY', 'SendSalePcsSNTDCY', 'SendSalePriceSNTDCY',
                'ReciveTranOutPcsSNTDCY', 'ReciveTranOutPriceSNTDCY', 'ReturnStorePcsSNTDCY',
                'ReturnStorePriceSNTDCY', 'AllOutPcsSNTDCY', 'AllOutPriceSNTDCY', 'CalculatePcsSNTDCY',
                'CalculatePriceSNTDCY', 'NewCalculatePcsSNTDCY', 'NewCalculatePriceSNTDCY',
                'DiffPcsSNTDCY', 'DiffPriceSNTDCY', 'NewTotalPcsSNTDCY', 'NewTotalPriceSNTDCY',
                'NewTotalDiffNavSNTDCY', 'NewTotalDiffCalSNTDCY',
                'a7f1fgbu02sPcsSNTDCY', 'a7f1fgbu02sPriceSNTDCY', 'a7f2fgbu10sPcsSNTDCY',
                'a7f2fgbu10sPriceSNTDCY',
                'a7f2thbu05sPcsSNTDCY', 'a7f2thbu05sPriceSNTDCY', 'a7f2debu10sPcsSNTDCY',
                'a7f2debu10sPriceSNTDCY',
                'a7f2exbu11sPcsSNTDCY', 'a7f2exbu11sPriceSNTDCY', 'a7f2twbu04sPcsSNTDCY',
                'a7f2twbu04sPriceSNTDCY',
                'a7f2twbu07sPcsSNTDCY', 'a7f2twbu07sPriceSNTDCY', 'a7f2cebu10sPcsSNTDCY',
                'a7f2cebu10sPriceSNTDCY',
                'a8f1fgbu02sPcsSNTDCY', 'a8f1fgbu02sPriceSNTDCY', 'a8f2fgbu10sPcsSNTDCY',
                'a8f2fgbu10sPriceSNTDCY',
                'a8f2thbu05sPcsSNTDCY', 'a8f2thbu05sPriceSNTDCY', 'a8f2debu10sPcsSNTDCY',
                'a8f2debu10sPriceSNTDCY',
                'a8f2exbu11sPcsSNTDCY', 'a8f2exbu11sPriceSNTDCY', 'a8f2twbu04sPcsSNTDCY',
                'a8f2twbu04sPriceSNTDCY',
                'a8f2twbu07sPcsSNTDCY', 'a8f2twbu07sPriceSNTDCY', 'a8f2cebu10sPcsSNTDCY',
                'a8f2cebu10sPriceSNTDCY',
                'DC1PcsSNTDCY', 'DC1PriceSNTDCY', 'DCPPcsSNTDCY', 'DCPPriceSNTDCY',
                'DCYPcsSNTDCY', 'DCYPriceSNTDCY', 'DEXPcsSNTDCY', 'DEXPriceSNTDCY',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllDCY', 'PriceAfterAllDCY', 'Pcs_AfterAllDCY', 'Price_AfterAllDCY',
                'PoPcsAllDCY', 'PoPriceAllDCY', 'NegPcsAllDCY', 'NegPriceAllDCY', 'BackPcsAllDCY',
                'BackPriceAllDCY', 'PurchasePcsAllDCY', 'PurchasePriceAllDCY', 'ReciveTranferPcsAllDCY',
                'ReciveTranferPriceAllDCY', 'ReturnItemPcsAllDCY', 'ReturnItemPriceAllDCY',
                'AllInPcsAllDCY', 'AllInPriceAllDCY', 'SendSalePcsAllDCY', 'SendSalePriceAllDCY',
                'ReciveTranOutPcsAllDCY', 'ReciveTranOutPriceAllDCY', 'ReturnStorePcsAllDCY',
                'ReturnStorePriceAllDCY', 'AllOutPcsAllDCY', 'AllOutPriceAllDCY', 'CalculatePcsAllDCY',
                'CalculatePriceAllDCY', 'NewCalculatePcsAllDCY', 'NewCalculatePriceAllDCY',
                'DiffPcsAllDCY', 'DiffPriceAllDCY', 'NewTotalPcsAllDCY', 'NewTotalPriceAllDCY',
                'NewTotalDiffNavAllDCY', 'NewTotalDiffCalAllDCY',
                'a7f1fgbu02sPcsAllDCY', 'a7f1fgbu02sPriceAllDCY', 'a7f2fgbu10sPcsAllDCY',
                'a7f2fgbu10sPriceAllDCY',
                'a7f2thbu05sPcsAllDCY', 'a7f2thbu05sPriceAllDCY', 'a7f2debu10sPcsAllDCY',
                'a7f2debu10sPriceAllDCY',
                'a7f2exbu11sPcsAllDCY', 'a7f2exbu11sPriceAllDCY', 'a7f2twbu04sPcsAllDCY',
                'a7f2twbu04sPriceAllDCY',
                'a7f2twbu07sPcsAllDCY', 'a7f2twbu07sPriceAllDCY', 'a7f2cebu10sPcsAllDCY',
                'a7f2cebu10sPriceAllDCY',
                'a8f1fgbu02sPcsAllDCY', 'a8f1fgbu02sPriceAllDCY', 'a8f2fgbu10sPcsAllDCY',
                'a8f2fgbu10sPriceAllDCY',
                'a8f2thbu05sPcsAllDCY', 'a8f2thbu05sPriceAllDCY', 'a8f2debu10sPcsAllDCY',
                'a8f2debu10sPriceAllDCY',
                'a8f2exbu11sPcsAllDCY', 'a8f2exbu11sPriceAllDCY', 'a8f2twbu04sPcsAllDCY',
                'a8f2twbu04sPriceAllDCY',
                'a8f2twbu07sPcsAllDCY', 'a8f2twbu07sPriceAllDCY', 'a8f2cebu10sPcsAllDCY',
                'a8f2cebu10sPriceAllDCY',
                'DC1PcsAllDCY', 'DC1PriceAllDCY', 'DCPPcsAllDCY', 'DCPPriceAllDCY',
                'DCYPcsAllDCY', 'DCYPriceAllDCY', 'DEXPcsAllDCY', 'DEXPriceAllDCY',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterNTDCP', 'PriceAfterNTDCP', 'Pcs_AfterNTDCP', 'Price_AfterNTDCP',
                'PoPcsNTDCP', 'PoPriceNTDCP', 'NegPcsNTDCP', 'NegPriceNTDCP', 'BackPcsNTDCP',
                'BackPriceNTDCP', 'PurchasePcsNTDCP', 'PurchasePriceNTDCP', 'ReciveTranferPcsNTDCP',
                'ReciveTranferPriceNTDCP', 'ReturnItemPcsNTDCP', 'ReturnItemPriceNTDCP',
                'AllInPcsNTDCP', 'AllInPriceNTDCP', 'SendSalePcsNTDCP', 'SendSalePriceNTDCP',
                'ReciveTranOutPcsNTDCP', 'ReciveTranOutPriceNTDCP', 'ReturnStorePcsNTDCP',
                'ReturnStorePriceNTDCP', 'AllOutPcsNTDCP', 'AllOutPriceNTDCP', 'CalculatePcsNTDCP',
                'CalculatePriceNTDCP', 'NewCalculatePcsNTDCP', 'NewCalculatePriceNTDCP',
                'DiffPcsNTDCP', 'DiffPriceNTDCP', 'NewTotalPcsNTDCP', 'NewTotalPriceNTDCP',
                'NewTotalDiffNavNTDCP', 'NewTotalDiffCalNTDCP',
                'a7f1fgbu02sPcsNTDCP', 'a7f1fgbu02sPriceNTDCP', 'a7f2fgbu10sPcsNTDCP',
                'a7f2fgbu10sPriceNTDCP',
                'a7f2thbu05sPcsNTDCP', 'a7f2thbu05sPriceNTDCP', 'a7f2debu10sPcsNTDCP',
                'a7f2debu10sPriceNTDCP',
                'a7f2exbu11sPcsNTDCP', 'a7f2exbu11sPriceNTDCP', 'a7f2twbu04sPcsNTDCP',
                'a7f2twbu04sPriceNTDCP',
                'a7f2twbu07sPcsNTDCP', 'a7f2twbu07sPriceNTDCP', 'a7f2cebu10sPcsNTDCP',
                'a7f2cebu10sPriceNTDCP',
                'a8f1fgbu02sPcsNTDCP', 'a8f1fgbu02sPriceNTDCP', 'a8f2fgbu10sPcsNTDCP',
                'a8f2fgbu10sPriceNTDCP',
                'a8f2thbu05sPcsNTDCP', 'a8f2thbu05sPriceNTDCP', 'a8f2debu10sPcsNTDCP',
                'a8f2debu10sPriceNTDCP',
                'a8f2exbu11sPcsNTDCP', 'a8f2exbu11sPriceNTDCP', 'a8f2twbu04sPcsNTDCP',
                'a8f2twbu04sPriceNTDCP',
                'a8f2twbu07sPcsNTDCP', 'a8f2twbu07sPriceNTDCP', 'a8f2cebu10sPcsNTDCP',
                'a8f2cebu10sPriceNTDCP',
                'DC1PcsNTDCP', 'DC1PriceNTDCP', 'DCPPcsNTDCP', 'DCPPriceNTDCP',
                'DCYPcsNTDCP', 'DCYPriceNTDCP', 'DEXPcsNTDCP', 'DEXPriceAllDCY',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWDCP', 'PriceAfterTWDCP', 'Pcs_AfterTWDCP', 'Price_AfterTWDCP',
                'PoPcsTWDCP', 'PoPriceTWDCP', 'NegPcsTWDCP', 'NegPriceTWDCP', 'BackPcsTWDCP',
                'BackPriceTWDCP', 'PurchasePcsTWDCP', 'PurchasePriceTWDCP', 'ReciveTranferPcsTWDCP',
                'ReciveTranferPriceTWDCP', 'ReturnItemPcsTWDCP', 'ReturnItemPriceTWDCP',
                'AllInPcsTWDCP', 'AllInPriceTWDCP', 'SendSalePcsTWDCP', 'SendSalePriceTWDCP',
                'ReciveTranOutPcsTWDCP', 'ReciveTranOutPriceTWDCP', 'ReturnStorePcsTWDCP',
                'ReturnStorePriceTWDCP', 'AllOutPcsTWDCP', 'AllOutPriceTWDCP', 'CalculatePcsTWDCP',
                'CalculatePriceTWDCP', 'NewCalculatePcsTWDCP', 'NewCalculatePriceTWDCP',
                'DiffPcsTWDCP', 'DiffPriceTWDCP', 'NewTotalPcsTWDCP', 'NewTotalPriceTWDCP',
                'NewTotalDiffNavTWDCP', 'NewTotalDiffCalTWDCP',
                'a7f1fgbu02sPcsTWDCP', 'a7f1fgbu02sPriceTWDCP', 'a7f2fgbu10sPcsTWDCP',
                'a7f2fgbu10sPriceTWDCP',
                'a7f2thbu05sPcsTWDCP', 'a7f2thbu05sPriceTWDCP', 'a7f2debu10sPcsTWDCP',
                'a7f2debu10sPriceTWDCP',
                'a7f2exbu11sPcsTWDCP', 'a7f2exbu11sPriceTWDCP', 'a7f2twbu04sPcsTWDCP',
                'a7f2twbu04sPriceTWDCP',
                'a7f2twbu07sPcsTWDCP', 'a7f2twbu07sPriceTWDCP', 'a7f2cebu10sPcsTWDCP',
                'a7f2cebu10sPriceTWDCP',
                'a8f1fgbu02sPcsTWDCP', 'a8f1fgbu02sPriceTWDCP', 'a8f2fgbu10sPcsTWDCP',
                'a8f2fgbu10sPriceTWDCP',
                'a8f2thbu05sPcsTWDCP', 'a8f2thbu05sPriceTWDCP', 'a8f2debu10sPcsTWDCP',
                'a8f2debu10sPriceTWDCP',
                'a8f2exbu11sPcsTWDCP', 'a8f2exbu11sPriceTWDCP', 'a8f2twbu04sPcsTWDCP',
                'a8f2twbu04sPriceTWDCP',
                'a8f2twbu07sPcsTWDCP', 'a8f2twbu07sPriceTWDCP', 'a8f2cebu10sPcsTWDCP',
                'a8f2cebu10sPriceTWDCP',
                'DC1PcsTWDCP', 'DC1PriceTWDCP', 'DCPPcsTWDCP', 'DCPPriceTWDCP',
                'DCYPcsTWDCP', 'DCYPriceTWDCP', 'DEXPcsTWDCP', 'DEXPriceTWDCP',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterLNDCP', 'PriceAfterLNDCP', 'Pcs_AfterLNDCP', 'Price_AfterLNDCP',
                'PoPcsLNDCP', 'PoPriceLNDCP', 'NegPcsLNDCP', 'NegPriceLNDCP', 'BackPcsLNDCP',
                'BackPriceLNDCP', 'PurchasePcsLNDCP', 'PurchasePriceLNDCP', 'ReciveTranferPcsLNDCP',
                'ReciveTranferPriceLNDCP', 'ReturnItemPcsLNDCP', 'ReturnItemPriceLNDCP',
                'AllInPcsLNDCP', 'AllInPriceLNDCP', 'SendSalePcsLNDCP', 'SendSalePriceLNDCP',
                'ReciveTranOutPcsLNDCP', 'ReciveTranOutPriceLNDCP', 'ReturnStorePcsLNDCP',
                'ReturnStorePriceLNDCP', 'AllOutPcsLNDCP', 'AllOutPriceLNDCP', 'CalculatePcsLNDCP',
                'CalculatePriceLNDCP', 'NewCalculatePcsLNDCP', 'NewCalculatePriceLNDCP',
                'DiffPcsLNDCP', 'DiffPriceLNDCP', 'NewTotalPcsLNDCP', 'NewTotalPriceLNDCP',
                'NewTotalDiffNavLNDCP', 'NewTotalDiffCalLNDCP',
                'a7f1fgbu02sPcsLNDCP', 'a7f1fgbu02sPriceLNDCP', 'a7f2fgbu10sPcsLNDCP',
                'a7f2fgbu10sPriceLNDCP',
                'a7f2thbu05sPcsLNDCP', 'a7f2thbu05sPriceLNDCP', 'a7f2debu10sPcsLNDCP',
                'a7f2debu10sPriceLNDCP',
                'a7f2exbu11sPcsLNDCP', 'a7f2exbu11sPriceLNDCP', 'a7f2twbu04sPcsLNDCP',
                'a7f2twbu04sPriceLNDCP',
                'a7f2twbu07sPcsLNDCP', 'a7f2twbu07sPriceLNDCP', 'a7f2cebu10sPcsLNDCP',
                'a7f2cebu10sPriceLNDCP',
                'a8f1fgbu02sPcsLNDCP', 'a8f1fgbu02sPriceLNDCP', 'a8f2fgbu10sPcsLNDCP',
                'a8f2fgbu10sPriceLNDCP',
                'a8f2thbu05sPcsLNDCP', 'a8f2thbu05sPriceLNDCP', 'a8f2debu10sPcsLNDCP',
                'a8f2debu10sPriceLNDCP',
                'a8f2exbu11sPcsLNDCP', 'a8f2exbu11sPriceLNDCP', 'a8f2twbu04sPcsLNDCP',
                'a8f2twbu04sPriceLNDCP',
                'a8f2twbu07sPcsLNDCP', 'a8f2twbu07sPriceLNDCP', 'a8f2cebu10sPcsLNDCP',
                'a8f2cebu10sPriceLNDCP',
                'DC1PcsLNDCP', 'DC1PriceLNDCP', 'DCPPcsLNDCP', 'DCPPriceLNDCP',
                'DCYPcsLNDCP', 'DCYPriceLNDCP', 'DEXPcsLNDCP', 'DEXPriceLNDCP',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllDCP', 'PriceAfterAllDCP', 'Pcs_AfterAllDCP', 'Price_AfterAllDCP',
                'PoPcsAllDCP', 'PoPriceAllDCP', 'NegPcsAllDCP', 'NegPriceAllDCP', 'BackPcsAllDCP',
                'BackPriceAllDCP', 'PurchasePcsAllDCP', 'PurchasePriceAllDCP', 'ReciveTranferPcsAllDCP',
                'ReciveTranferPriceAllDCP', 'ReturnItemPcsAllDCP', 'ReturnItemPriceAllDCP',
                'AllInPcsAllDCP', 'AllInPriceAllDCP', 'SendSalePcsAllDCP', 'SendSalePriceAllDCP',
                'ReciveTranOutPcsAllDCP', 'ReciveTranOutPriceAllDCP', 'ReturnStorePcsAllDCP',
                'ReturnStorePriceAllDCP', 'AllOutPcsAllDCP', 'AllOutPriceAllDCP', 'CalculatePcsAllDCP',
                'CalculatePriceAllDCP', 'NewCalculatePcsAllDCP', 'NewCalculatePriceAllDCP',
                'DiffPcsAllDCP', 'DiffPriceAllDCP', 'NewTotalPcsAllDCP', 'NewTotalPriceAllDCP',
                'NewTotalDiffNavAllDCP', 'NewTotalDiffCalAllDCP',
                'a7f1fgbu02sPcsAllDCP', 'a7f1fgbu02sPriceAllDCP', 'a7f2fgbu10sPcsAllDCP',
                'a7f2fgbu10sPriceAllDCP',
                'a7f2thbu05sPcsAllDCP', 'a7f2thbu05sPriceAllDCP', 'a7f2debu10sPcsAllDCP',
                'a7f2debu10sPriceAllDCP',
                'a7f2exbu11sPcsAllDCP', 'a7f2exbu11sPriceAllDCP', 'a7f2twbu04sPcsAllDCP',
                'a7f2twbu04sPriceAllDCP',
                'a7f2twbu07sPcsAllDCP', 'a7f2twbu07sPriceAllDCP', 'a7f2cebu10sPcsAllDCP',
                'a7f2cebu10sPriceAllDCP',
                'a8f1fgbu02sPcsAllDCP', 'a8f1fgbu02sPriceAllDCP', 'a8f2fgbu10sPcsAllDCP',
                'a8f2fgbu10sPriceAllDCP',
                'a8f2thbu05sPcsAllDCP', 'a8f2thbu05sPriceAllDCP', 'a8f2debu10sPcsAllDCP',
                'a8f2debu10sPriceAllDCP',
                'a8f2exbu11sPcsAllDCP', 'a8f2exbu11sPriceAllDCP', 'a8f2twbu04sPcsAllDCP',
                'a8f2twbu04sPriceAllDCP',
                'a8f2twbu07sPcsAllDCP', 'a8f2twbu07sPriceAllDCP', 'a8f2cebu10sPcsAllDCP',
                'a8f2cebu10sPriceAllDCP',
                'DC1PcsAllDCP', 'DC1PriceAllDCP', 'DCPPcsAllDCP', 'DCPPriceAllDCP',
                'DCYPcsAllDCP', 'DCYPriceAllDCP', 'DEXPcsAllDCP', 'DEXPriceAllDCP',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterNTCountry', 'PriceAfterNTCountry', 'Pcs_AfterNTCountry', 'Price_AfterNTCountry',
                'PoPcsNTCountry', 'PoPriceNTCountry', 'NegPcsNTCountry', 'NegPriceNTCountry',
                'BackPcsNTCountry',
                'BackPriceNTCountry', 'PurchasePcsNTCountry', 'PurchasePriceNTCountry',
                'ReciveTranferPcsNTCountry',
                'ReciveTranferPriceNTCountry', 'ReturnItemPcsNTCountry', 'ReturnItemPriceNTCountry',
                'AllInPcsNTCountry', 'AllInPriceNTCountry', 'SendSalePcsNTCountry',
                'SendSalePriceNTCountry',
                'ReciveTranOutPcsNTCountry', 'ReciveTranOutPriceNTCountry', 'ReturnStorePcsNTCountry',
                'ReturnStorePriceNTCountry', 'AllOutPcsNTCountry', 'AllOutPriceNTCountry',
                'CalculatePcsNTCountry',
                'CalculatePriceNTCountry', 'NewCalculatePcsNTCountry', 'NewCalculatePriceNTCountry',
                'DiffPcsNTCountry', 'DiffPriceNTCountry', 'NewTotalPcsNTCountry', 'NewTotalPriceNTCountry',
                'NewTotalDiffNavNTCountry', 'NewTotalDiffCalNTCountry',
                'a7f1fgbu02sPcsNTCountry', 'a7f1fgbu02sPriceNTCountry', 'a7f2fgbu10sPcsNTCountry',
                'a7f2fgbu10sPriceNTCountry',
                'a7f2thbu05sPcsNTCountry', 'a7f2thbu05sPriceNTCountry', 'a7f2debu10sPcsNTCountry',
                'a7f2debu10sPriceNTCountry',
                'a7f2exbu11sPcsNTCountry', 'a7f2exbu11sPriceNTCountry', 'a7f2twbu04sPcsNTCountry',
                'a7f2twbu04sPriceNTCountry',
                'a7f2twbu07sPcsNTCountry', 'a7f2twbu07sPriceNTCountry', 'a7f2cebu10sPcsNTCountry',
                'a7f2cebu10sPriceNTCountry',
                'a8f1fgbu02sPcsNTCountry', 'a8f1fgbu02sPriceNTCountry', 'a8f2fgbu10sPcsNTCountry',
                'a8f2fgbu10sPriceNTCountry',
                'a8f2thbu05sPcsNTCountry', 'a8f2thbu05sPriceNTCountry', 'a8f2debu10sPcsNTCountry',
                'a8f2debu10sPriceNTCountry',
                'a8f2exbu11sPcsNTCountry', 'a8f2exbu11sPriceNTCountry', 'a8f2twbu04sPcsNTCountry',
                'a8f2twbu04sPriceNTCountry',
                'a8f2twbu07sPcsNTCountry', 'a8f2twbu07sPriceNTCountry', 'a8f2cebu10sPcsNTCountry',
                'a8f2cebu10sPriceNTCountry',
                'DC1PcsNTCountry', 'DC1PriceNTCountry', 'DCPPcsNTCountry', 'DCPPriceNTCountry',
                'DCYPcsNTCountry', 'DCYPriceNTCountry', 'DEXPcsNTCountry', 'DEXPriceNTCountry',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterMTCountry', 'PriceAfterMTCountry', 'Pcs_AfterMTCountry', 'Price_AfterMTCountry',
                'PoPcsMTCountry', 'PoPriceMTCountry', 'NegPcsMTCountry', 'NegPriceMTCountry',
                'BackPcsMTCountry',
                'BackPriceMTCountry', 'PurchasePcsMTCountry', 'PurchasePriceMTCountry',
                'ReciveTranferPcsMTCountry',
                'ReciveTranferPriceMTCountry', 'ReturnItemPcsMTCountry', 'ReturnItemPriceMTCountry',
                'AllInPcsMTCountry', 'AllInPriceMTCountry', 'SendSalePcsMTCountry',
                'SendSalePriceMTCountry',
                'ReciveTranOutPcsMTCountry', 'ReciveTranOutPriceMTCountry', 'ReturnStorePcsMTCountry',
                'ReturnStorePriceMTCountry', 'AllOutPcsMTCountry', 'AllOutPriceMTCountry',
                'CalculatePcsMTCountry',
                'CalculatePriceMTCountry', 'NewCalculatePcsMTCountry', 'NewCalculatePriceMTCountry',
                'DiffPcsMTCountry', 'DiffPriceMTCountry', 'NewTotalPcsMTCountry', 'NewTotalPriceMTCountry',
                'NewTotalDiffNavMTCountry', 'NewTotalDiffCalMTCountry',
                'a7f1fgbu02sPcsMTCountry', 'a7f1fgbu02sPriceMTCountry', 'a7f2fgbu10sPcsMTCountry',
                'a7f2fgbu10sPriceMTCountry',
                'a7f2thbu05sPcsMTCountry', 'a7f2thbu05sPriceMTCountry', 'a7f2debu10sPcsMTCountry',
                'a7f2debu10sPriceMTCountry',
                'a7f2exbu11sPcsMTCountry', 'a7f2exbu11sPriceMTCountry', 'a7f2twbu04sPcsMTCountry',
                'a7f2twbu04sPriceMTCountry',
                'a7f2twbu07sPcsMTCountry', 'a7f2twbu07sPriceMTCountry', 'a7f2cebu10sPcsMTCountry',
                'a7f2cebu10sPriceMTCountry',
                'a8f1fgbu02sPcsMTCountry', 'a8f1fgbu02sPriceMTCountry', 'a8f2fgbu10sPcsMTCountry',
                'a8f2fgbu10sPriceMTCountry',
                'a8f2thbu05sPcsMTCountry', 'a8f2thbu05sPriceMTCountry', 'a8f2debu10sPcsMTCountry',
                'a8f2debu10sPriceMTCountry',
                'a8f2exbu11sPcsMTCountry', 'a8f2exbu11sPriceMTCountry', 'a8f2twbu04sPcsMTCountry',
                'a8f2twbu04sPriceMTCountry',
                'a8f2twbu07sPcsMTCountry', 'a8f2twbu07sPriceMTCountry', 'a8f2cebu10sPcsMTCountry',
                'a8f2cebu10sPriceMTCountry',
                'DC1PcsMTCountry', 'DC1PriceMTCountry', 'DCPPcsMTCountry', 'DCPPriceMTCountry',
                'DCYPcsMTCountry', 'DCYPriceMTCountry', 'DEXPcsMTCountry', 'DEXPriceMTCountry',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWCountry', 'PriceAfterTWCountry', 'Pcs_AfterTWCountry', 'Price_AfterTWCountry',
                'PoPcsTWCountry', 'PoPriceTWCountry', 'NegPcsTWCountry', 'NegPriceTWCountry',
                'BackPcsTWCountry',
                'BackPriceTWCountry', 'PurchasePcsTWCountry', 'PurchasePriceTWCountry',
                'ReciveTranferPcsTWCountry',
                'ReciveTranferPriceTWCountry', 'ReturnItemPcsTWCountry', 'ReturnItemPriceTWCountry',
                'AllInPcsTWCountry', 'AllInPriceTWCountry', 'SendSalePcsTWCountry',
                'SendSalePriceTWCountry',
                'ReciveTranOutPcsTWCountry', 'ReciveTranOutPriceTWCountry', 'ReturnStorePcsTWCountry',
                'ReturnStorePriceTWCountry', 'AllOutPcsTWCountry', 'AllOutPriceTWCountry',
                'CalculatePcsTWCountry',
                'CalculatePriceTWCountry', 'NewCalculatePcsTWCountry', 'NewCalculatePriceTWCountry',
                'DiffPcsTWCountry', 'DiffPriceTWCountry', 'NewTotalPcsTWCountry', 'NewTotalPriceTWCountry',
                'NewTotalDiffNavTWCountry', 'NewTotalDiffCalTWCountry',
                'a7f1fgbu02sPcsTWCountry', 'a7f1fgbu02sPriceTWCountry', 'a7f2fgbu10sPcsTWCountry',
                'a7f2fgbu10sPriceTWCountry',
                'a7f2thbu05sPcsTWCountry', 'a7f2thbu05sPriceTWCountry', 'a7f2debu10sPcsTWCountry',
                'a7f2debu10sPriceTWCountry',
                'a7f2exbu11sPcsTWCountry', 'a7f2exbu11sPriceTWCountry', 'a7f2twbu04sPcsTWCountry',
                'a7f2twbu04sPriceTWCountry',
                'a7f2twbu07sPcsTWCountry', 'a7f2twbu07sPriceTWCountry', 'a7f2cebu10sPcsTWCountry',
                'a7f2cebu10sPriceTWCountry',
                'a8f1fgbu02sPcsTWCountry', 'a8f1fgbu02sPriceTWCountry', 'a8f2fgbu10sPcsTWCountry',
                'a8f2fgbu10sPriceTWCountry',
                'a8f2thbu05sPcsTWCountry', 'a8f2thbu05sPriceTWCountry', 'a8f2debu10sPcsTWCountry',
                'a8f2debu10sPriceTWCountry',
                'a8f2exbu11sPcsTWCountry', 'a8f2exbu11sPriceTWCountry', 'a8f2twbu04sPcsTWCountry',
                'a8f2twbu04sPriceTWCountry',
                'a8f2twbu07sPcsTWCountry', 'a8f2twbu07sPriceTWCountry', 'a8f2cebu10sPcsTWCountry',
                'a8f2cebu10sPriceTWCountry',
                'DC1PcsTWCountry', 'DC1PriceTWCountry', 'DCPPcsTWCountry', 'DCPPriceTWCountry',
                'DCYPcsTWCountry', 'DCYPriceTWCountry', 'DEXPcsTWCountry', 'DEXPriceTWCountry',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterLNCountry', 'PriceAfterLNCountry', 'Pcs_AfterLNCountry', 'Price_AfterLNCountry',
                'PoPcsLNCountry', 'PoPriceLNCountry', 'NegPcsLNCountry', 'NegPriceLNCountry',
                'BackPcsLNCountry',
                'BackPriceLNCountry', 'PurchasePcsLNCountry', 'PurchasePriceLNCountry',
                'ReciveTranferPcsLNCountry',
                'ReciveTranferPriceLNCountry', 'ReturnItemPcsLNCountry', 'ReturnItemPriceLNCountry',
                'AllInPcsLNCountry', 'AllInPriceLNCountry', 'SendSalePcsLNCountry',
                'SendSalePriceLNCountry',
                'ReciveTranOutPcsLNCountry', 'ReciveTranOutPriceLNCountry', 'ReturnStorePcsLNCountry',
                'ReturnStorePriceLNCountry', 'AllOutPcsLNCountry', 'AllOutPriceLNCountry',
                'CalculatePcsLNCountry',
                'CalculatePriceLNCountry', 'NewCalculatePcsLNCountry', 'NewCalculatePriceLNCountry',
                'DiffPcsLNCountry', 'DiffPriceLNCountry', 'NewTotalPcsLNCountry', 'NewTotalPriceLNCountry',
                'NewTotalDiffNavLNCountry', 'NewTotalDiffCalLNCountry',
                'a7f1fgbu02sPcsLNCountry', 'a7f1fgbu02sPriceLNCountry', 'a7f2fgbu10sPcsLNCountry',
                'a7f2fgbu10sPriceLNCountry',
                'a7f2thbu05sPcsLNCountry', 'a7f2thbu05sPriceLNCountry', 'a7f2debu10sPcsLNCountry',
                'a7f2debu10sPriceLNCountry',
                'a7f2exbu11sPcsLNCountry', 'a7f2exbu11sPriceLNCountry', 'a7f2twbu04sPcsLNCountry',
                'a7f2twbu04sPriceLNCountry',
                'a7f2twbu07sPcsLNCountry', 'a7f2twbu07sPriceLNCountry', 'a7f2cebu10sPcsLNCountry',
                'a7f2cebu10sPriceLNCountry',
                'a8f1fgbu02sPcsLNCountry', 'a8f1fgbu02sPriceLNCountry', 'a8f2fgbu10sPcsLNCountry',
                'a8f2fgbu10sPriceLNCountry',
                'a8f2thbu05sPcsLNCountry', 'a8f2thbu05sPriceLNCountry', 'a8f2debu10sPcsLNCountry',
                'a8f2debu10sPriceLNCountry',
                'a8f2exbu11sPcsLNCountry', 'a8f2exbu11sPriceLNCountry', 'a8f2twbu04sPcsLNCountry',
                'a8f2twbu04sPriceLNCountry',
                'a8f2twbu07sPcsLNCountry', 'a8f2twbu07sPriceLNCountry', 'a8f2cebu10sPcsLNCountry',
                'a8f2cebu10sPriceLNCountry',
                'DC1PcsLNCountry', 'DC1PriceLNCountry', 'DCPPcsLNCountry', 'DCPPriceLNCountry',
                'DCYPcsLNCountry', 'DCYPriceLNCountry', 'DEXPcsLNCountry', 'DEXPriceLNCountry',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSNTCountry', 'PriceAfterSNTCountry', 'Pcs_AfterSNTCountry',
                'Price_AfterSNTCountry',
                'PoPcsSNTCountry', 'PoPriceSNTCountry', 'NegPcsSNTCountry', 'NegPriceSNTCountry',
                'BackPcsSNTCountry',
                'BackPriceSNTCountry', 'PurchasePcsSNTCountry', 'PurchasePriceSNTCountry',
                'ReciveTranferPcsSNTCountry',
                'ReciveTranferPriceSNTCountry', 'ReturnItemPcsSNTCountry', 'ReturnItemPriceSNTCountry',
                'AllInPcsSNTCountry', 'AllInPriceSNTCountry', 'SendSalePcsSNTCountry',
                'SendSalePriceSNTCountry',
                'ReciveTranOutPcsSNTCountry', 'ReciveTranOutPriceSNTCountry', 'ReturnStorePcsSNTCountry',
                'ReturnStorePriceSNTCountry', 'AllOutPcsSNTCountry', 'AllOutPriceSNTCountry',
                'CalculatePcsSNTCountry',
                'CalculatePriceSNTCountry', 'NewCalculatePcsSNTCountry', 'NewCalculatePriceSNTCountry',
                'DiffPcsSNTCountry', 'DiffPriceSNTCountry', 'NewTotalPcsSNTCountry',
                'NewTotalPriceSNTCountry',
                'NewTotalDiffNavSNTCountry', 'NewTotalDiffCalSNTCountry',
                'a7f1fgbu02sPcsSNTCountry', 'a7f1fgbu02sPriceSNTCountry', 'a7f2fgbu10sPcsSNTCountry',
                'a7f2fgbu10sPriceSNTCountry',
                'a7f2thbu05sPcsSNTCountry', 'a7f2thbu05sPriceSNTCountry', 'a7f2debu10sPcsSNTCountry',
                'a7f2debu10sPriceSNTCountry',
                'a7f2exbu11sPcsSNTCountry', 'a7f2exbu11sPriceSNTCountry', 'a7f2twbu04sPcsSNTCountry',
                'a7f2twbu04sPriceSNTCountry',
                'a7f2twbu07sPcsSNTCountry', 'a7f2twbu07sPriceSNTCountry', 'a7f2cebu10sPcsSNTCountry',
                'a7f2cebu10sPriceSNTCountry',
                'a8f1fgbu02sPcsSNTCountry', 'a8f1fgbu02sPriceSNTCountry', 'a8f2fgbu10sPcsSNTCountry',
                'a8f2fgbu10sPriceSNTCountry',
                'a8f2thbu05sPcsSNTCountry', 'a8f2thbu05sPriceSNTCountry', 'a8f2debu10sPcsSNTCountry',
                'a8f2debu10sPriceSNTCountry',
                'a8f2exbu11sPcsSNTCountry', 'a8f2exbu11sPriceSNTCountry', 'a8f2twbu04sPcsSNTCountry',
                'a8f2twbu04sPriceSNTCountry',
                'a8f2twbu07sPcsSNTCountry', 'a8f2twbu07sPriceSNTCountry', 'a8f2cebu10sPcsSNTCountry',
                'a8f2cebu10sPriceSNTCountry',
                'DC1PcsSNTCountry', 'DC1PriceSNTCountry', 'DCPPcsSNTCountry', 'DCPPriceSNTCountry',
                'DCYPcsSNTCountry', 'DCYPriceSNTCountry', 'DEXPcsSNTCountry', 'DEXPriceSNTCountry',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllCountry', 'PriceAfterAllCountry', 'Pcs_AfterAllCountry',
                'Price_AfterAllCountry',
                'PoPcsAllCountry', 'PoPriceAllCountry', 'NegPcsAllCountry', 'NegPriceAllCountry',
                'BackPcsAllCountry',
                'BackPriceAllCountry', 'PurchasePcsAllCountry', 'PurchasePriceAllCountry',
                'ReciveTranferPcsAllCountry',
                'ReciveTranferPriceAllCountry', 'ReturnItemPcsAllCountry', 'ReturnItemPriceAllCountry',
                'AllInPcsAllCountry', 'AllInPriceAllCountry', 'SendSalePcsAllCountry',
                'SendSalePriceAllCountry',
                'ReciveTranOutPcsAllCountry', 'ReciveTranOutPriceAllCountry', 'ReturnStorePcsAllCountry',
                'ReturnStorePriceAllCountry', 'AllOutPcsAllCountry', 'AllOutPriceAllCountry',
                'CalculatePcsAllCountry',
                'CalculatePriceAllCountry', 'NewCalculatePcsAllCountry', 'NewCalculatePriceAllCountry',
                'DiffPcsAllCountry', 'DiffPriceAllCountry', 'NewTotalPcsAllCountry',
                'NewTotalPriceAllCountry',
                'NewTotalDiffNavAllCountry', 'NewTotalDiffCalAllCountry',
                'a7f1fgbu02sPcsAllCountry', 'a7f1fgbu02sPriceAllCountry', 'a7f2fgbu10sPcsAllCountry',
                'a7f2fgbu10sPriceAllCountry',
                'a7f2thbu05sPcsAllCountry', 'a7f2thbu05sPriceAllCountry', 'a7f2debu10sPcsAllCountry',
                'a7f2debu10sPriceAllCountry',
                'a7f2exbu11sPcsAllCountry', 'a7f2exbu11sPriceAllCountry', 'a7f2twbu04sPcsAllCountry',
                'a7f2twbu04sPriceAllCountry',
                'a7f2twbu07sPcsAllCountry', 'a7f2twbu07sPriceAllCountry', 'a7f2cebu10sPcsAllCountry',
                'a7f2cebu10sPriceAllCountry',
                'a8f1fgbu02sPcsAllCountry', 'a8f1fgbu02sPriceAllCountry', 'a8f2fgbu10sPcsAllCountry',
                'a8f2fgbu10sPriceAllCountry',
                'a8f2thbu05sPcsAllCountry', 'a8f2thbu05sPriceAllCountry', 'a8f2debu10sPcsAllCountry',
                'a8f2debu10sPriceAllCountry',
                'a8f2exbu11sPcsAllCountry', 'a8f2exbu11sPriceAllCountry', 'a8f2twbu04sPcsAllCountry',
                'a8f2twbu04sPriceAllCountry',
                'a8f2twbu07sPcsAllCountry', 'a8f2twbu07sPriceAllCountry', 'a8f2cebu10sPcsAllCountry',
                'a8f2cebu10sPriceAllCountry',
                'DC1PcsAllCountry', 'DC1PriceAllCountry', 'DCPPcsAllCountry', 'DCPPriceAllCountry',
                'DCYPcsAllCountry', 'DCYPriceAllCountry', 'DEXPcsAllCountry', 'DEXPriceAllCountry',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllTotal', 'PriceAfterAllTotal', 'Pcs_AfterAllTotal', 'Price_AfterAllTotal',
                'PoPcsAllTotal', 'PoPriceAllTotal', 'NegPcsAllTotal', 'NegPriceAllTotal', 'BackPcsAllTotal',
                'BackPriceAllTotal', 'PurchasePcsAllTotal', 'PurchasePriceAllTotal',
                'ReciveTranferPcsAllTotal',
                'ReciveTranferPriceAllTotal', 'ReturnItemPcsAllTotal', 'ReturnItemPriceAllTotal',
                'AllInPcsAllTotal', 'AllInPriceAllTotal', 'SendSalePcsAllTotal', 'SendSalePriceAllTotal',
                'ReciveTranOutPcsAllTotal', 'ReciveTranOutPriceAllTotal', 'ReturnStorePcsAllTotal',
                'ReturnStorePriceAllTotal', 'AllOutPcsAllTotal', 'AllOutPriceAllTotal',
                'CalculatePcsAllTotal',
                'CalculatePriceAllTotal', 'NewCalculatePcsAllTotal', 'NewCalculatePriceAllTotal',
                'DiffPcsAllTotal', 'DiffPriceAllTotal', 'NewTotalPcsAllTotal', 'NewTotalPriceAllTotal',
                'NewTotalDiffNavAllTotal', 'NewTotalDiffCalAllTotal',
                'a7f1fgbu02sPcsAllTotal', 'a7f1fgbu02sPriceAllTotal', 'a7f2fgbu10sPcsAllTotal',
                'a7f2fgbu10sPriceAllTotal',
                'a7f2thbu05sPcsAllTotal', 'a7f2thbu05sPriceAllTotal', 'a7f2debu10sPcsAllTotal',
                'a7f2debu10sPriceAllTotal',
                'a7f2exbu11sPcsAllTotal', 'a7f2exbu11sPriceAllTotal', 'a7f2twbu04sPcsAllTotal',
                'a7f2twbu04sPriceAllTotal',
                'a7f2twbu07sPcsAllTotal', 'a7f2twbu07sPriceAllTotal', 'a7f2cebu10sPcsAllTotal',
                'a7f2cebu10sPriceAllTotal',
                'a8f1fgbu02sPcsAllTotal', 'a8f1fgbu02sPriceAllTotal', 'a8f2fgbu10sPcsAllTotal',
                'a8f2fgbu10sPriceAllTotal',
                'a8f2thbu05sPcsAllTotal', 'a8f2thbu05sPriceAllTotal', 'a8f2debu10sPcsAllTotal',
                'a8f2debu10sPriceAllTotal',
                'a8f2exbu11sPcsAllTotal', 'a8f2exbu11sPriceAllTotal', 'a8f2twbu04sPcsAllTotal',
                'a8f2twbu04sPriceAllTotal',
                'a8f2twbu07sPcsAllTotal', 'a8f2twbu07sPriceAllTotal', 'a8f2cebu10sPcsAllTotal',
                'a8f2cebu10sPriceAllTotal',
                'DC1PcsAllTotal', 'DC1PriceAllTotal', 'DCPPcsAllTotal', 'DCPPriceAllTotal',
                'DCYPcsAllTotal', 'DCYPriceAllTotal', 'DEXPcsAllTotal', 'DEXPriceAllTotal',
            ];

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////


            var DataPrint = [
                'PcsAfterNTPrint', 'PriceAfterNTPrint', 'Pcs_AfterNTPrint', 'Price_AfterNTPrint',
                'PoPcsNTPrint', 'PoPriceNTPrint', 'NegPcsNTPrint', 'NegPriceNTPrint', 'BackPcsNTPrint',
                'BackPriceNTPrint', 'PurchasePcsNTPrint', 'PurchasePriceNTPrint', 'ReciveTranferPcsNTPrint',
                'ReciveTranferPriceNTPrint', 'ReturnItemPcsNTPrint', 'ReturnItemPriceNTPrint',
                'AllInPcsNTPrint', 'AllInPriceNTPrint', 'SendSalePcsNTPrint', 'SendSalePriceNTPrint',
                'ReciveTranOutPcsNTPrint', 'ReciveTranOutPriceNTPrint', 'ReturnStorePcsNTPrint',
                'ReturnStorePriceNTPrint', 'AllOutPcsNTPrint', 'AllOutPriceNTPrint', 'CalculatePcsNTPrint',
                'CalculatePriceNTPrint', 'NewCalculatePcsNTPrint', 'NewCalculatePriceNTPrint',
                'DiffPcsNTPrint', 'DiffPriceNTPrint', 'NewTotalPcsNTPrint', 'NewTotalPriceNTPrint',
                'NewTotalDiffNavNTPrint', 'NewTotalDiffCalNTPrint',
                'a7f1fgbu02sPcsNTPrint', 'a7f1fgbu02sPriceNTPrint', 'a7f2fgbu10sPcsNTPrint', 'a7f2fgbu10sPriceNTPrint',
                'a7f2thbu05sPcsNTPrint', 'a7f2thbu05sPriceNTPrint', 'a7f2debu10sPcsNTPrint', 'a7f2debu10sPriceNTPrint',
                'a7f2exbu11sPcsNTPrint', 'a7f2exbu11sPriceNTPrint', 'a7f2twbu04sPcsNTPrint', 'a7f2twbu04sPriceNTPrint',
                'a7f2twbu07sPcsNTPrint', 'a7f2twbu07sPriceNTPrint', 'a7f2cebu10sPcsNTPrint', 'a7f2cebu10sPriceNTPrint',
                'a8f1fgbu02sPcsNTPrint', 'a8f1fgbu02sPriceNTPrint', 'a8f2fgbu10sPcsNTPrint', 'a8f2fgbu10sPriceNTPrint',
                'a8f2thbu05sPcsNTPrint', 'a8f2thbu05sPriceNTPrint', 'a8f2debu10sPcsNTPrint', 'a8f2debu10sPriceNTPrint',
                'a8f2exbu11sPcsNTPrint', 'a8f2exbu11sPriceNTPrint', 'a8f2twbu04sPcsNTPrint', 'a8f2twbu04sPriceNTPrint',
                'a8f2twbu07sPcsNTPrint', 'a8f2twbu07sPriceNTPrint', 'a8f2cebu10sPcsNTPrint', 'a8f2cebu10sPriceNTPrint',
                'DC1PcsNTPrint', 'DC1PriceNTPrint', 'DCPPcsNTPrint', 'DCPPriceNTPrint',
                'DCYPcsNTPrint', 'DCYPriceNTPrint', 'DEXPcsNTPrint', 'DEXPriceNTPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterMTPrint', 'PriceAfterMTPrint', 'Pcs_AfterMTPrint', 'Price_AfterMTPrint',
                'PoPcsMTPrint', 'PoPriceMTPrint', 'NegPcsMTPrint', 'NegPriceMTPrint', 'BackPcsMTPrint',
                'BackPriceMTPrint', 'PurchasePcsMTPrint', 'PurchasePriceMTPrint', 'ReciveTranferPcsMTPrint',
                'ReciveTranferPriceMTPrint', 'ReturnItemPcsMTPrint', 'ReturnItemPriceMTPrint',
                'AllInPcsMTPrint', 'AllInPriceMTPrint', 'SendSalePcsMTPrint', 'SendSalePriceMTPrint',
                'ReciveTranOutPcsMTPrint', 'ReciveTranOutPriceMTPrint', 'ReturnStorePcsMTPrint',
                'ReturnStorePriceMTPrint', 'AllOutPcsMTPrint', 'AllOutPriceMTPrint', 'CalculatePcsMTPrint',
                'CalculatePriceMTPrint', 'NewCalculatePcsMTPrint', 'NewCalculatePriceMTPrint',
                'DiffPcsMTPrint', 'DiffPriceMTPrint', 'NewTotalPcsMTPrint', 'NewTotalPriceMTPrint',
                'NewTotalDiffNavMTPrint', 'NewTotalDiffCalMTPrint',
                'a7f1fgbu02sPcsMTPrint', 'a7f1fgbu02sPriceMTPrint', 'a7f2fgbu10sPcsMTPrint', 'a7f2fgbu10sPriceMTPrint',
                'a7f2thbu05sPcsMTPrint', 'a7f2thbu05sPriceMTPrint', 'a7f2debu10sPcsMTPrint', 'a7f2debu10sPriceMTPrint',
                'a7f2exbu11sPcsMTPrint', 'a7f2exbu11sPriceMTPrint', 'a7f2twbu04sPcsMTPrint', 'a7f2twbu04sPriceMTPrint',
                'a7f2twbu07sPcsMTPrint', 'a7f2twbu07sPriceMTPrint', 'a7f2cebu10sPcsMTPrint', 'a7f2cebu10sPriceMTPrint',
                'a8f1fgbu02sPcsMTPrint', 'a8f1fgbu02sPriceMTPrint', 'a8f2fgbu10sPcsMTPrint', 'a8f2fgbu10sPriceMTPrint',
                'a8f2thbu05sPcsMTPrint', 'a8f2thbu05sPriceMTPrint', 'a8f2debu10sPcsMTPrint', 'a8f2debu10sPriceMTPrint',
                'a8f2exbu11sPcsMTPrint', 'a8f2exbu11sPriceMTPrint', 'a8f2twbu04sPcsMTPrint', 'a8f2twbu04sPriceMTPrint',
                'a8f2twbu07sPcsMTPrint', 'a8f2twbu07sPriceMTPrint', 'a8f2cebu10sPcsMTPrint', 'a8f2cebu10sPriceMTPrint',
                'DC1PcsMTPrint', 'DC1PriceMTPrint', 'DCPPcsMTPrint', 'DCPPriceMTPrint',
                'DCYPcsMTPrint', 'DCYPriceMTPrint', 'DEXPcsMTPrint', 'DEXPriceMTPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWPrint', 'PriceAfterTWPrint', 'Pcs_AfterTWPrint', 'Price_AfterTWPrint',
                'PoPcsTWPrint', 'PoPriceTWPrint', 'NegPcsTWPrint', 'NegPriceTWPrint', 'BackPcsTWPrint',
                'BackPriceTWPrint', 'PurchasePcsTWPrint', 'PurchasePriceTWPrint', 'ReciveTranferPcsTWPrint',
                'ReciveTranferPriceTWPrint', 'ReturnItemPcsTWPrint', 'ReturnItemPriceTWPrint',
                'AllInPcsTWPrint', 'AllInPriceTWPrint', 'SendSalePcsTWPrint', 'SendSalePriceTWPrint',
                'ReciveTranOutPcsTWPrint', 'ReciveTranOutPriceTWPrint', 'ReturnStorePcsTWPrint',
                'ReturnStorePriceTWPrint', 'AllOutPcsTWPrint', 'AllOutPriceTWPrint', 'CalculatePcsTWPrint',
                'CalculatePriceTWPrint', 'NewCalculatePcsTWPrint', 'NewCalculatePriceTWPrint',
                'DiffPcsTWPrint', 'DiffPriceTWPrint', 'NewTotalPcsTWPrint', 'NewTotalPriceTWPrint',
                'NewTotalDiffNavTWPrint', 'NewTotalDiffCalTWPrint',
                'a7f1fgbu02sPcsTWPrint', 'a7f1fgbu02sPriceTWPrint', 'a7f2fgbu10sPcsTWPrint', 'a7f2fgbu10sPriceTWPrint',
                'a7f2thbu05sPcsTWPrint', 'a7f2thbu05sPriceTWPrint', 'a7f2debu10sPcsTWPrint', 'a7f2debu10sPriceTWPrint',
                'a7f2exbu11sPcsTWPrint', 'a7f2exbu11sPriceTWPrint', 'a7f2twbu04sPcsTWPrint', 'a7f2twbu04sPriceTWPrint',
                'a7f2twbu07sPcsTWPrint', 'a7f2twbu07sPriceTWPrint', 'a7f2cebu10sPcsTWPrint', 'a7f2cebu10sPriceTWPrint',
                'a8f1fgbu02sPcsTWPrint', 'a8f1fgbu02sPriceTWPrint', 'a8f2fgbu10sPcsTWPrint', 'a8f2fgbu10sPriceTWPrint',
                'a8f2thbu05sPcsTWPrint', 'a8f2thbu05sPriceTWPrint', 'a8f2debu10sPcsTWPrint', 'a8f2debu10sPriceTWPrint',
                'a8f2exbu11sPcsTWPrint', 'a8f2exbu11sPriceTWPrint', 'a8f2twbu04sPcsTWPrint', 'a8f2twbu04sPriceTWPrint',
                'a8f2twbu07sPcsTWPrint', 'a8f2twbu07sPriceTWPrint', 'a8f2cebu10sPcsTWPrint', 'a8f2cebu10sPriceTWPrint',
                'DC1PcsTWPrint', 'DC1PriceTWPrint', 'DCPPcsTWPrint', 'DCPPriceTWPrint',
                'DCYPcsTWPrint', 'DCYPriceTWPrint', 'DEXPcsTWPrint', 'DEXPriceTWPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterLNPrint', 'PriceAfterLNPrint', 'Pcs_AfterLNPrint', 'Price_AfterLNPrint',
                'PoPcsLNPrint', 'PoPriceLNPrint', 'NegPcsLNPrint', 'NegPriceLNPrint', 'BackPcsLNPrint',
                'BackPriceLNPrint', 'PurchasePcsLNPrint', 'PurchasePriceLNPrint', 'ReciveTranferPcsLNPrint',
                'ReciveTranferPriceLNPrint', 'ReturnItemPcsLNPrint', 'ReturnItemPriceLNPrint',
                'AllInPcsLNPrint', 'AllInPriceLNPrint', 'SendSalePcsLNPrint', 'SendSalePriceLNPrint',
                'ReciveTranOutPcsLNPrint', 'ReciveTranOutPriceLNPrint', 'ReturnStorePcsLNPrint',
                'ReturnStorePriceLNPrint', 'AllOutPcsLNPrint', 'AllOutPriceLNPrint', 'CalculatePcsLNPrint',
                'CalculatePriceLNPrint', 'NewCalculatePcsLNPrint', 'NewCalculatePriceLNPrint',
                'DiffPcsLNPrint', 'DiffPriceLNPrint', 'NewTotalPcsLNPrint', 'NewTotalPriceLNPrint',
                'NewTotalDiffNavLNPrint', 'NewTotalDiffCalLNPrint',
                'a7f1fgbu02sPcsLNPrint', 'a7f1fgbu02sPriceLNPrint', 'a7f2fgbu10sPcsLNPrint', 'a7f2fgbu10sPriceLNPrint',
                'a7f2thbu05sPcsLNPrint', 'a7f2thbu05sPriceLNPrint', 'a7f2debu10sPcsLNPrint', 'a7f2debu10sPriceLNPrint',
                'a7f2exbu11sPcsLNPrint', 'a7f2exbu11sPriceLNPrint', 'a7f2twbu04sPcsLNPrint', 'a7f2twbu04sPriceLNPrint',
                'a7f2twbu07sPcsLNPrint', 'a7f2twbu07sPriceLNPrint', 'a7f2cebu10sPcsLNPrint', 'a7f2cebu10sPriceLNPrint',
                'a8f1fgbu02sPcsLNPrint', 'a8f1fgbu02sPriceLNPrint', 'a8f2fgbu10sPcsLNPrint', 'a8f2fgbu10sPriceLNPrint',
                'a8f2thbu05sPcsLNPrint', 'a8f2thbu05sPriceLNPrint', 'a8f2debu10sPcsLNPrint', 'a8f2debu10sPriceLNPrint',
                'a8f2exbu11sPcsLNPrint', 'a8f2exbu11sPriceLNPrint', 'a8f2twbu04sPcsLNPrint', 'a8f2twbu04sPriceLNPrint',
                'a8f2twbu07sPcsLNPrint', 'a8f2twbu07sPriceLNPrint', 'a8f2cebu10sPcsLNPrint', 'a8f2cebu10sPriceLNPrint',
                'DC1PcsLNPrint', 'DC1PriceLNPrint', 'DCPPcsLNPrint', 'DCPPriceLNPrint',
                'DCYPcsLNPrint', 'DCYPriceLNPrint', 'DEXPcsLNPrint', 'DEXPriceLNPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllProductPrint', 'PriceAfterAllProductPrint', 'Pcs_AfterAllProductPrint',
                'Price_AfterAllProductPrint',
                'PoPcsAllProductPrint', 'PoPriceAllProductPrint', 'NegPcsAllProductPrint', 'NegPriceAllProductPrint',
                'BackPcsAllProductPrint',
                'BackPriceAllProductPrint', 'PurchasePcsAllProductPrint', 'PurchasePriceAllProductPrint',
                'ReciveTranferPcsAllProductPrint',
                'ReciveTranferPriceAllProductPrint', 'ReturnItemPcsAllProductPrint', 'ReturnItemPriceAllProductPrint',
                'AllInPcsAllProductPrint', 'AllInPriceAllProductPrint', 'SendSalePcsAllProductPrint',
                'SendSalePriceAllProductPrint',
                'ReciveTranOutPcsAllProductPrint', 'ReciveTranOutPriceAllProductPrint', 'ReturnStorePcsAllProductPrint',
                'ReturnStorePriceAllProductPrint', 'AllOutPcsAllProductPrint', 'AllOutPriceAllProductPrint',
                'CalculatePcsAllProductPrint',
                'CalculatePriceAllProductPrint', 'NewCalculatePcsAllProductPrint', 'NewCalculatePriceAllProductPrint',
                'DiffPcsAllProductPrint', 'DiffPriceAllProductPrint', 'NewTotalPcsAllProductPrint',
                'NewTotalPriceAllProductPrint',
                'NewTotalDiffNavAllProductPrint', 'NewTotalDiffCalAllProductPrint',
                'a7f1fgbu02sPcsAllProductPrint', 'a7f1fgbu02sPriceAllProductPrint', 'a7f2fgbu10sPcsAllProductPrint',
                'a7f2fgbu10sPriceAllProductPrint',
                'a7f2thbu05sPcsAllProductPrint', 'a7f2thbu05sPriceAllProductPrint', 'a7f2debu10sPcsAllProductPrint',
                'a7f2debu10sPriceAllProductPrint',
                'a7f2exbu11sPcsAllProductPrint', 'a7f2exbu11sPriceAllProductPrint', 'a7f2twbu04sPcsAllProductPrint',
                'a7f2twbu04sPriceAllProductPrint',
                'a7f2twbu07sPcsAllProductPrint', 'a7f2twbu07sPriceAllProductPrint', 'a7f2cebu10sPcsAllProductPrint',
                'a7f2cebu10sPriceAllProductPrint',
                'a8f1fgbu02sPcsAllProductPrint', 'a8f1fgbu02sPriceAllProductPrint', 'a8f2fgbu10sPcsAllProductPrint',
                'a8f2fgbu10sPriceAllProductPrint',
                'a8f2thbu05sPcsAllProductPrint', 'a8f2thbu05sPriceAllProductPrint', 'a8f2debu10sPcsAllProductPrint',
                'a8f2debu10sPriceAllProductPrint',
                'a8f2exbu11sPcsAllProductPrint', 'a8f2exbu11sPriceAllProductPrint', 'a8f2twbu04sPcsAllProductPrint',
                'a8f2twbu04sPriceAllProductPrint',
                'a8f2twbu07sPcsAllProductPrint', 'a8f2twbu07sPriceAllProductPrint', 'a8f2cebu10sPcsAllProductPrint',
                'a8f2cebu10sPriceAllProductPrint',
                'DC1PcsAllProductPrint', 'DC1PriceAllProductPrint', 'DCPPcsAllProductPrint', 'DCPPriceAllProductPrint',
                'DCYPcsAllProductPrint', 'DCYPriceAllProductPrint', 'DEXPcsAllProductPrint', 'DEXPriceAllProductPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterASPrint', 'PriceAfterASPrint', 'Pcs_AfterASPrint', 'Price_AfterASPrint',
                'PoPcsASPrint', 'PoPriceASPrint', 'NegPcsASPrint', 'NegPriceASPrint', 'BackPcsASPrint',
                'BackPriceASPrint', 'PurchasePcsASPrint', 'PurchasePriceASPrint', 'ReciveTranferPcsASPrint',
                'ReciveTranferPriceASPrint', 'ReturnItemPcsASPrint', 'ReturnItemPriceASPrint',
                'AllInPcsASPrint', 'AllInPriceASPrint', 'SendSalePcsASPrint', 'SendSalePriceASPrint',
                'ReciveTranOutPcsASPrint', 'ReciveTranOutPriceASPrint', 'ReturnStorePcsASPrint',
                'ReturnStorePriceASPrint', 'AllOutPcsASPrint', 'AllOutPriceASPrint', 'CalculatePcsASPrint',
                'CalculatePriceASPrint', 'NewCalculatePcsASPrint', 'NewCalculatePriceASPrint',
                'DiffPcsASPrint', 'DiffPriceASPrint', 'NewTotalPcsASPrint', 'NewTotalPriceASPrint',
                'NewTotalDiffNavASPrint', 'NewTotalDiffCalASPrint',
                'a7f1fgbu02sPcsASPrint', 'a7f1fgbu02sPriceASPrint', 'a7f2fgbu10sPcsASPrint', 'a7f2fgbu10sPriceASPrint',
                'a7f2thbu05sPcsASPrint', 'a7f2thbu05sPriceASPrint', 'a7f2debu10sPcsASPrint', 'a7f2debu10sPriceASPrint',
                'a7f2exbu11sPcsASPrint', 'a7f2exbu11sPriceASPrint', 'a7f2twbu04sPcsASPrint', 'a7f2twbu04sPriceASPrint',
                'a7f2twbu07sPcsASPrint', 'a7f2twbu07sPriceASPrint', 'a7f2cebu10sPcsASPrint', 'a7f2cebu10sPriceASPrint',
                'a8f1fgbu02sPcsASPrint', 'a8f1fgbu02sPriceASPrint', 'a8f2fgbu10sPcsASPrint', 'a8f2fgbu10sPriceASPrint',
                'a8f2thbu05sPcsASPrint', 'a8f2thbu05sPriceASPrint', 'a8f2debu10sPcsASPrint', 'a8f2debu10sPriceASPrint',
                'a8f2exbu11sPcsASPrint', 'a8f2exbu11sPriceASPrint', 'a8f2twbu04sPcsASPrint', 'a8f2twbu04sPriceASPrint',
                'a8f2twbu07sPcsASPrint', 'a8f2twbu07sPriceASPrint', 'a8f2cebu10sPcsASPrint', 'a8f2cebu10sPriceASPrint',
                'DC1PcsASPrint', 'DC1PriceASPrint', 'DCPPcsASPrint', 'DCPPriceASPrint',
                'DCYPcsASPrint', 'DCYPriceASPrint', 'DEXPcsASPrint', 'DEXPriceASPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSTWPrint', 'PriceAfterSTWPrint', 'Pcs_AfterSTWPrint', 'Price_AfterSTWPrint',
                'PoPcsSTWPrint', 'PoPriceSTWPrint', 'NegPcsSTWPrint', 'NegPriceSTWPrint', 'BackPcsSTWPrint',
                'BackPriceSTWPrint', 'PurchasePcsSTWPrint', 'PurchasePriceSTWPrint', 'ReciveTranferPcsSTWPrint',
                'ReciveTranferPriceSTWPrint', 'ReturnItemPcsSTWPrint', 'ReturnItemPriceSTWPrint',
                'AllInPcsSTWPrint', 'AllInPriceSTWPrint', 'SendSalePcsSTWPrint', 'SendSalePriceSTWPrint',
                'ReciveTranOutPcsSTWPrint', 'ReciveTranOutPriceSTWPrint', 'ReturnStorePcsSTWPrint',
                'ReturnStorePriceSTWPrint', 'AllOutPcsSTWPrint', 'AllOutPriceSTWPrint', 'CalculatePcsSTWPrint',
                'CalculatePriceSTWPrint', 'NewCalculatePcsSTWPrint', 'NewCalculatePriceSTWPrint',
                'DiffPcsSTWPrint', 'DiffPriceSTWPrint', 'NewTotalPcsSTWPrint', 'NewTotalPriceSTWPrint',
                'NewTotalDiffNavSTWPrint', 'NewTotalDiffCalSTWPrint',
                'a7f1fgbu02sPcsSTWPrint', 'a7f1fgbu02sPriceSTWPrint', 'a7f2fgbu10sPcsSTWPrint', 'a7f2fgbu10sPriceSTWPrint',
                'a7f2thbu05sPcsSTWPrint', 'a7f2thbu05sPriceSTWPrint', 'a7f2debu10sPcsSTWPrint', 'a7f2debu10sPriceSTWPrint',
                'a7f2exbu11sPcsSTWPrint', 'a7f2exbu11sPriceSTWPrint', 'a7f2twbu04sPcsSTWPrint', 'a7f2twbu04sPriceSTWPrint',
                'a7f2twbu07sPcsSTWPrint', 'a7f2twbu07sPriceSTWPrint', 'a7f2cebu10sPcsSTWPrint', 'a7f2cebu10sPriceSTWPrint',
                'a8f1fgbu02sPcsSTWPrint', 'a8f1fgbu02sPriceSTWPrint', 'a8f2fgbu10sPcsSTWPrint', 'a8f2fgbu10sPriceSTWPrint',
                'a8f2thbu05sPcsSTWPrint', 'a8f2thbu05sPriceSTWPrint', 'a8f2debu10sPcsSTWPrint', 'a8f2debu10sPriceSTWPrint',
                'a8f2exbu11sPcsSTWPrint', 'a8f2exbu11sPriceSTWPrint', 'a8f2twbu04sPcsSTWPrint', 'a8f2twbu04sPriceSTWPrint',
                'a8f2twbu07sPcsSTWPrint', 'a8f2twbu07sPriceSTWPrint', 'a8f2cebu10sPcsSTWPrint', 'a8f2cebu10sPriceSTWPrint',
                'DC1PcsSTWPrint', 'DC1PriceSTWPrint', 'DCPPcsSTWPrint', 'DCPPriceSTWPrint',
                'DCYPcsSTWPrint', 'DCYPriceSTWPrint', 'DEXPcsSTWPrint', 'DEXPriceAllProductPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSLNPrint', 'PriceAfterSLNPrint', 'Pcs_AfterSLNPrint', 'Price_AfterSLNPrint',
                'PoPcsSLNPrint', 'PoPriceSLNPrint', 'NegPcsSLNPrint', 'NegPriceSLNPrint', 'BackPcsSLNPrint',
                'BackPriceSLNPrint', 'PurchasePcsSLNPrint', 'PurchasePriceSLNPrint', 'ReciveTranferPcsSLNPrint',
                'ReciveTranferPriceSLNPrint', 'ReturnItemPcsSLNPrint', 'ReturnItemPriceSLNPrint',
                'AllInPcsSLNPrint', 'AllInPriceSLNPrint', 'SendSalePcsSLNPrint', 'SendSalePriceSLNPrint',
                'ReciveTranOutPcsSLNPrint', 'ReciveTranOutPriceSLNPrint', 'ReturnStorePcsSLNPrint',
                'ReturnStorePriceSLNPrint', 'AllOutPcsSLNPrint', 'AllOutPriceSLNPrint', 'CalculatePcsSLNPrint',
                'CalculatePriceSLNPrint', 'NewCalculatePcsSLNPrint', 'NewCalculatePriceSLNPrint',
                'DiffPcsSLNPrint', 'DiffPriceSLNPrint', 'NewTotalPcsSLNPrint', 'NewTotalPriceSLNPrint',
                'NewTotalDiffNavSLNPrint', 'NewTotalDiffCalSLNPrint',
                'a7f1fgbu02sPcsSLNPrint', 'a7f1fgbu02sPriceSLNPrint', 'a7f2fgbu10sPcsSLNPrint', 'a7f2fgbu10sPriceSLNPrint',
                'a7f2thbu05sPcsSLNPrint', 'a7f2thbu05sPriceSLNPrint', 'a7f2debu10sPcsSLNPrint', 'a7f2debu10sPriceSLNPrint',
                'a7f2exbu11sPcsSLNPrint', 'a7f2exbu11sPriceSLNPrint', 'a7f2twbu04sPcsSLNPrint', 'a7f2twbu04sPriceSLNPrint',
                'a7f2twbu07sPcsSLNPrint', 'a7f2twbu07sPriceSLNPrint', 'a7f2cebu10sPcsSLNPrint', 'a7f2cebu10sPriceSLNPrint',
                'a8f1fgbu02sPcsSLNPrint', 'a8f1fgbu02sPriceSLNPrint', 'a8f2fgbu10sPcsSLNPrint', 'a8f2fgbu10sPriceSLNPrint',
                'a8f2thbu05sPcsSLNPrint', 'a8f2thbu05sPriceSLNPrint', 'a8f2debu10sPcsSLNPrint', 'a8f2debu10sPriceSLNPrint',
                'a8f2exbu11sPcsSLNPrint', 'a8f2exbu11sPriceSLNPrint', 'a8f2twbu04sPcsSLNPrint', 'a8f2twbu04sPriceSLNPrint',
                'a8f2twbu07sPcsSLNPrint', 'a8f2twbu07sPriceSLNPrint', 'a8f2cebu10sPcsSLNPrint', 'a8f2cebu10sPriceSLNPrint',
                'DC1PcsSLNPrint', 'DC1PriceSLNPrint', 'DCPPcsSLNPrint', 'DCPPriceSLNPrint',
                'DCYPcsSLNPrint', 'DCYPriceSLNPrint', 'DEXPcsSLNPrint', 'DEXPriceSLNPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSFNPrint', 'PriceAfterSFNPrint', 'Pcs_AfterSFNPrint', 'Price_AfterSFNPrint',
                'PoPcsSFNPrint', 'PoPriceSFNPrint', 'NegPcsSFNPrint', 'NegPriceSFNPrint', 'BackPcsSFNPrint',
                'BackPriceSFNPrint', 'PurchasePcsSFNPrint', 'PurchasePriceSFNPrint', 'ReciveTranferPcsSFNPrint',
                'ReciveTranferPriceSFNPrint', 'ReturnItemPcsSFNPrint', 'ReturnItemPriceSFNPrint',
                'AllInPcsSFNPrint', 'AllInPriceSFNPrint', 'SendSalePcsSFNPrint', 'SendSalePriceSFNPrint',
                'ReciveTranOutPcsSFNPrint', 'ReciveTranOutPriceSFNPrint', 'ReturnStorePcsSFNPrint',
                'ReturnStorePriceSFNPrint', 'AllOutPcsSFNPrint', 'AllOutPriceSFNPrint', 'CalculatePcsSFNPrint',
                'CalculatePriceSFNPrint', 'NewCalculatePcsSFNPrint', 'NewCalculatePriceSFNPrint',
                'DiffPcsSFNPrint', 'DiffPriceSFNPrint', 'NewTotalPcsSFNPrint', 'NewTotalPriceSFNPrint',
                'NewTotalDiffNavSFNPrint', 'NewTotalDiffCalSFNPrint',
                'a7f1fgbu02sPcsSFNPrint', 'a7f1fgbu02sPriceSFNPrint', 'a7f2fgbu10sPcsSFNPrint', 'a7f2fgbu10sPriceSFNPrint',
                'a7f2thbu05sPcsSFNPrint', 'a7f2thbu05sPriceSFNPrint', 'a7f2debu10sPcsSFNPrint', 'a7f2debu10sPriceSFNPrint',
                'a7f2exbu11sPcsSFNPrint', 'a7f2exbu11sPriceSFNPrint', 'a7f2twbu04sPcsSFNPrint', 'a7f2twbu04sPriceSFNPrint',
                'a7f2twbu07sPcsSFNPrint', 'a7f2twbu07sPriceSFNPrint', 'a7f2cebu10sPcsSFNPrint', 'a7f2cebu10sPriceSFNPrint',
                'a8f1fgbu02sPcsSFNPrint', 'a8f1fgbu02sPriceSFNPrint', 'a8f2fgbu10sPcsSFNPrint', 'a8f2fgbu10sPriceSFNPrint',
                'a8f2thbu05sPcsSFNPrint', 'a8f2thbu05sPriceSFNPrint', 'a8f2debu10sPcsSFNPrint', 'a8f2debu10sPriceSFNPrint',
                'a8f2exbu11sPcsSFNPrint', 'a8f2exbu11sPriceSFNPrint', 'a8f2twbu04sPcsSFNPrint', 'a8f2twbu04sPriceSFNPrint',
                'a8f2twbu07sPcsSFNPrint', 'a8f2twbu07sPriceSFNPrint', 'a8f2cebu10sPcsSFNPrint', 'a8f2cebu10sPriceSFNPrint',
                'DC1PcsSFNPrint', 'DC1PriceSFNPrint', 'DCPPcsSFNPrint', 'DCPPriceSFNPrint',
                'DCYPcsSFNPrint', 'DCYPriceSFNPrint', 'DEXPcsSFNPrint', 'DEXPriceSFNPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSMTPrint', 'PriceAfterSMTPrint', 'Pcs_AfterSMTPrint', 'Price_AfterSMTPrint',
                'PoPcsSMTPrint', 'PoPriceSMTPrint', 'NegPcsSMTPrint', 'NegPriceSMTPrint', 'BackPcsSMTPrint',
                'BackPriceSMTPrint', 'PurchasePcsSMTPrint', 'PurchasePriceSMTPrint', 'ReciveTranferPcsSMTPrint',
                'ReciveTranferPriceSMTPrint', 'ReturnItemPcsSMTPrint', 'ReturnItemPriceSMTPrint',
                'AllInPcsSMTPrint', 'AllInPriceSMTPrint', 'SendSalePcsSMTPrint', 'SendSalePriceSMTPrint',
                'ReciveTranOutPcsSMTPrint', 'ReciveTranOutPriceSMTPrint', 'ReturnStorePcsSMTPrint',
                'ReturnStorePriceSMTPrint', 'AllOutPcsSMTPrint', 'AllOutPriceSMTPrint', 'CalculatePcsSMTPrint',
                'CalculatePriceSMTPrint', 'NewCalculatePcsSMTPrint', 'NewCalculatePriceSMTPrint',
                'DiffPcsSMTPrint', 'DiffPriceSMTPrint', 'NewTotalPcsSMTPrint', 'NewTotalPriceSMTPrint',
                'NewTotalDiffNavSMTPrint', 'NewTotalDiffCalSMTPrint',
                'a7f1fgbu02sPcsSMTPrint', 'a7f1fgbu02sPriceSMTPrint', 'a7f2fgbu10sPcsSMTPrint', 'a7f2fgbu10sPriceSMTPrint',
                'a7f2thbu05sPcsSMTPrint', 'a7f2thbu05sPriceSMTPrint', 'a7f2debu10sPcsSMTPrint', 'a7f2debu10sPriceSMTPrint',
                'a7f2exbu11sPcsSMTPrint', 'a7f2exbu11sPriceSMTPrint', 'a7f2twbu04sPcsSMTPrint', 'a7f2twbu04sPriceSMTPrint',
                'a7f2twbu07sPcsSMTPrint', 'a7f2twbu07sPriceSMTPrint', 'a7f2cebu10sPcsSMTPrint', 'a7f2cebu10sPriceSMTPrint',
                'a8f1fgbu02sPcsSMTPrint', 'a8f1fgbu02sPriceSMTPrint', 'a8f2fgbu10sPcsSMTPrint', 'a8f2fgbu10sPriceSMTPrint',
                'a8f2thbu05sPcsSMTPrint', 'a8f2thbu05sPriceSMTPrint', 'a8f2debu10sPcsSMTPrint', 'a8f2debu10sPriceSMTPrint',
                'a8f2exbu11sPcsSMTPrint', 'a8f2exbu11sPriceSMTPrint', 'a8f2twbu04sPcsSMTPrint', 'a8f2twbu04sPriceSMTPrint',
                'a8f2twbu07sPcsSMTPrint', 'a8f2twbu07sPriceSMTPrint', 'a8f2cebu10sPcsSMTPrint', 'a8f2cebu10sPriceSMTPrint',
                'DC1PcsSMTPrint', 'DC1PriceSMTPrint', 'DCPPcsSMTPrint', 'DCPPriceSMTPrint',
                'DCYPcsSMTPrint', 'DCYPriceSMTPrint', 'DEXPcsSMTPrint', 'DEXPriceSMTPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSNTPrint', 'PriceAfterSNTPrint', 'Pcs_AfterSNTPrint', 'Price_AfterSNTPrint',
                'PoPcsSNTPrint', 'PoPriceSNTPrint', 'NegPcsSNTPrint', 'NegPriceSNTPrint', 'BackPcsSNTPrint',
                'BackPriceSNTPrint', 'PurchasePcsSNTPrint', 'PurchasePriceSNTPrint', 'ReciveTranferPcsSNTPrint',
                'ReciveTranferPriceSNTPrint', 'ReturnItemPcsSNTPrint', 'ReturnItemPriceSNTPrint',
                'AllInPcsSNTPrint', 'AllInPriceSNTPrint', 'SendSalePcsSNTPrint', 'SendSalePriceSNTPrint',
                'ReciveTranOutPcsSNTPrint', 'ReciveTranOutPriceSNTPrint', 'ReturnStorePcsSNTPrint',
                'ReturnStorePriceSNTPrint', 'AllOutPcsSNTPrint', 'AllOutPriceSNTPrint', 'CalculatePcsSNTPrint',
                'CalculatePriceSNTPrint', 'NewCalculatePcsSNTPrint', 'NewCalculatePriceSNTPrint',
                'DiffPcsSNTPrint', 'DiffPriceSNTPrint', 'NewTotalPcsSNTPrint', 'NewTotalPriceSNTPrint',
                'NewTotalDiffNavSNTPrint', 'NewTotalDiffCalSNTPrint',
                'a7f1fgbu02sPcsSNTPrint', 'a7f1fgbu02sPriceSNTPrint', 'a7f2fgbu10sPcsSNTPrint', 'a7f2fgbu10sPriceSNTPrint',
                'a7f2thbu05sPcsSNTPrint', 'a7f2thbu05sPriceSNTPrint', 'a7f2debu10sPcsSNTPrint', 'a7f2debu10sPriceSNTPrint',
                'a7f2exbu11sPcsSNTPrint', 'a7f2exbu11sPriceSNTPrint', 'a7f2twbu04sPcsSNTPrint', 'a7f2twbu04sPriceSNTPrint',
                'a7f2twbu07sPcsSNTPrint', 'a7f2twbu07sPriceSNTPrint', 'a7f2cebu10sPcsSNTPrint', 'a7f2cebu10sPriceSNTPrint',
                'a8f1fgbu02sPcsSNTPrint', 'a8f1fgbu02sPriceSNTPrint', 'a8f2fgbu10sPcsSNTPrint', 'a8f2fgbu10sPriceSNTPrint',
                'a8f2thbu05sPcsSNTPrint', 'a8f2thbu05sPriceSNTPrint', 'a8f2debu10sPcsSNTPrint', 'a8f2debu10sPriceSNTPrint',
                'a8f2exbu11sPcsSNTPrint', 'a8f2exbu11sPriceSNTPrint', 'a8f2twbu04sPcsSNTPrint', 'a8f2twbu04sPriceSNTPrint',
                'a8f2twbu07sPcsSNTPrint', 'a8f2twbu07sPriceSNTPrint', 'a8f2cebu10sPcsSNTPrint', 'a8f2cebu10sPriceSNTPrint',
                'DC1PcsSNTPrint', 'DC1PriceSNTPrint', 'DCPPcsSNTPrint', 'DCPPriceSNTPrint',
                'DCYPcsSNTPrint', 'DCYPriceSNTPrint', 'DEXPcsSNTPrint', 'DEXPriceSNTPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllSalePrint', 'PriceAfterAllSalePrint', 'Pcs_AfterAllSalePrint', 'Price_AfterAllSalePrint',
                'PoPcsAllSalePrint', 'PoPriceAllSalePrint', 'NegPcsAllSalePrint', 'NegPriceAllSalePrint', 'BackPcsAllSalePrint',
                'BackPriceAllSalePrint', 'PurchasePcsAllSalePrint', 'PurchasePriceAllSalePrint', 'ReciveTranferPcsAllSalePrint',
                'ReciveTranferPriceAllSalePrint', 'ReturnItemPcsAllSalePrint', 'ReturnItemPriceAllSalePrint',
                'AllInPcsAllSalePrint', 'AllInPriceAllSalePrint', 'SendSalePcsAllSalePrint', 'SendSalePriceAllSalePrint',
                'ReciveTranOutPcsAllSalePrint', 'ReciveTranOutPriceAllSalePrint', 'ReturnStorePcsAllSalePrint',
                'ReturnStorePriceAllSalePrint', 'AllOutPcsAllSalePrint', 'AllOutPriceAllSalePrint', 'CalculatePcsAllSalePrint',
                'CalculatePriceAllSalePrint', 'NewCalculatePcsAllSalePrint', 'NewCalculatePriceAllSalePrint',
                'DiffPcsAllSalePrint', 'DiffPriceAllSalePrint', 'NewTotalPcsAllSalePrint', 'NewTotalPriceAllSalePrint',
                'NewTotalDiffNavAllSalePrint', 'NewTotalDiffCalAllSalePrint',
                'a7f1fgbu02sPcsAllSalePrint', 'a7f1fgbu02sPriceAllSalePrint', 'a7f2fgbu10sPcsAllSalePrint',
                'a7f2fgbu10sPriceAllSalePrint',
                'a7f2thbu05sPcsAllSalePrint', 'a7f2thbu05sPriceAllSalePrint', 'a7f2debu10sPcsAllSalePrint',
                'a7f2debu10sPriceAllSalePrint',
                'a7f2exbu11sPcsAllSalePrint', 'a7f2exbu11sPriceAllSalePrint', 'a7f2twbu04sPcsAllSalePrint',
                'a7f2twbu04sPriceAllSalePrint',
                'a7f2twbu07sPcsAllSalePrint', 'a7f2twbu07sPriceAllSalePrint', 'a7f2cebu10sPcsAllSalePrint',
                'a7f2cebu10sPriceAllSalePrint',
                'a8f1fgbu02sPcsAllSalePrint', 'a8f1fgbu02sPriceAllSalePrint', 'a8f2fgbu10sPcsAllSalePrint',
                'a8f2fgbu10sPriceAllSalePrint',
                'a8f2thbu05sPcsAllSalePrint', 'a8f2thbu05sPriceAllSalePrint', 'a8f2debu10sPcsAllSalePrint',
                'a8f2debu10sPriceAllSalePrint',
                'a8f2exbu11sPcsAllSalePrint', 'a8f2exbu11sPriceAllSalePrint', 'a8f2twbu04sPcsAllSalePrint',
                'a8f2twbu04sPriceAllSalePrint',
                'a8f2twbu07sPcsAllSalePrint', 'a8f2twbu07sPriceAllSalePrint', 'a8f2cebu10sPcsAllSalePrint',
                'a8f2cebu10sPriceAllSalePrint',
                'DC1PcsAllSalePrint', 'DC1PriceAllSalePrint', 'DCPPcsAllSalePrint', 'DCPPriceAllSalePrint',
                'DCYPcsAllSalePrint', 'DCYPriceAllSalePrint', 'DEXPcsAllSalePrint', 'DEXPriceAllSalePrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllDC1Print', 'PriceAfterAllDC1Print', 'Pcs_AfterAllDC1Print', 'Price_AfterAllDC1Print',
                'PoPcsAllDC1Print', 'PoPriceAllDC1Print', 'NegPcsAllDC1Print', 'NegPriceAllDC1Print', 'BackPcsAllDC1Print',
                'BackPriceAllDC1Print', 'PurchasePcsAllDC1Print', 'PurchasePriceAllDC1Print', 'ReciveTranferPcsAllDC1Print',
                'ReciveTranferPriceAllDC1Print', 'ReturnItemPcsAllDC1Print', 'ReturnItemPriceAllDC1Print',
                'AllInPcsAllDC1Print', 'AllInPriceAllDC1Print', 'SendSalePcsAllDC1Print', 'SendSalePriceAllDC1Print',
                'ReciveTranOutPcsAllDC1Print', 'ReciveTranOutPriceAllDC1Print', 'ReturnStorePcsAllDC1Print',
                'ReturnStorePriceAllDC1Print', 'AllOutPcsAllDC1Print', 'AllOutPriceAllDC1Print', 'CalculatePcsAllDC1Print',
                'CalculatePriceAllDC1Print', 'NewCalculatePcsAllDC1Print', 'NewCalculatePriceAllDC1Print',
                'DiffPcsAllDC1Print', 'DiffPriceAllDC1Print', 'NewTotalPcsAllDC1Print', 'NewTotalPriceAllDC1Print',
                'NewTotalDiffNavAllDC1Print', 'NewTotalDiffCalAllDC1Print',
                'a7f1fgbu02sPcsAllDC1Print', 'a7f1fgbu02sPriceAllDC1Print', 'a7f2fgbu10sPcsAllDC1Print',
                'a7f2fgbu10sPriceAllDC1Print',
                'a7f2thbu05sPcsAllDC1Print', 'a7f2thbu05sPriceAllDC1Print', 'a7f2debu10sPcsAllDC1Print',
                'a7f2debu10sPriceAllDC1Print',
                'a7f2exbu11sPcsAllDC1Print', 'a7f2exbu11sPriceAllDC1Print', 'a7f2twbu04sPcsAllDC1Print',
                'a7f2twbu04sPriceAllDC1Print',
                'a7f2twbu07sPcsAllDC1Print', 'a7f2twbu07sPriceAllDC1Print', 'a7f2cebu10sPcsAllDC1Print',
                'a7f2cebu10sPriceAllDC1Print',
                'a8f1fgbu02sPcsAllDC1Print', 'a8f1fgbu02sPriceAllDC1Print', 'a8f2fgbu10sPcsAllDC1Print',
                'a8f2fgbu10sPriceAllDC1Print',
                'a8f2thbu05sPcsAllDC1Print', 'a8f2thbu05sPriceAllDC1Print', 'a8f2debu10sPcsAllDC1Print',
                'a8f2debu10sPriceAllDC1Print',
                'a8f2exbu11sPcsAllDC1Print', 'a8f2exbu11sPriceAllDC1Print', 'a8f2twbu04sPcsAllDC1Print',
                'a8f2twbu04sPriceAllDC1Print',
                'a8f2twbu07sPcsAllDC1Print', 'a8f2twbu07sPriceAllDC1Print', 'a8f2cebu10sPcsAllDC1Print',
                'a8f2cebu10sPriceAllDC1Print',
                'DC1PcsAllDC1Print', 'DC1PriceAllDC1Print', 'DCPPcsAllDC1Print', 'DCPPriceAllDC1Print',
                'DCYPcsAllDC1Print', 'DCYPriceAllDC1Print', 'DEXPcsAllDC1Print', 'DEXPriceAllDC1Print',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterNTDCYPrint', 'PriceAfterNTDCYPrint', 'Pcs_AfterNTDCYPrint', 'Price_AfterNTDCYPrint',
                'PoPcsNTDCYPrint', 'PoPriceNTDCYPrint', 'NegPcsNTDCYPrint', 'NegPriceNTDCYPrint', 'BackPcsNTDCYPrint',
                'BackPriceNTDCYPrint', 'PurchasePcsNTDCYPrint', 'PurchasePriceNTDCYPrint', 'ReciveTranferPcsNTDCYPrint',
                'ReciveTranferPriceNTDCYPrint', 'ReturnItemPcsNTDCYPrint', 'ReturnItemPriceNTDCYPrint',
                'AllInPcsNTDCYPrint', 'AllInPriceNTDCYPrint', 'SendSalePcsNTDCYPrint', 'SendSalePriceNTDCYPrint',
                'ReciveTranOutPcsNTDCYPrint', 'ReciveTranOutPriceNTDCYPrint', 'ReturnStorePcsNTDCYPrint',
                'ReturnStorePriceNTDCYPrint', 'AllOutPcsNTDCYPrint', 'AllOutPriceNTDCYPrint', 'CalculatePcsNTDCYPrint',
                'CalculatePriceNTDCYPrint', 'NewCalculatePcsNTDCYPrint', 'NewCalculatePriceNTDCYPrint',
                'DiffPcsNTDCYPrint', 'DiffPriceNTDCYPrint', 'NewTotalPcsNTDCYPrint', 'NewTotalPriceNTDCYPrint',
                'NewTotalDiffNavNTDCYPrint', 'NewTotalDiffCalNTDCYPrint',
                'a7f1fgbu02sPcsNTDCYPrint', 'a7f1fgbu02sPriceNTDCYPrint', 'a7f2fgbu10sPcsNTDCYPrint',
                'a7f2fgbu10sPriceNTDCYPrint',
                'a7f2thbu05sPcsNTDCYPrint', 'a7f2thbu05sPriceNTDCYPrint', 'a7f2debu10sPcsNTDCYPrint',
                'a7f2debu10sPriceNTDCYPrint',
                'a7f2exbu11sPcsNTDCYPrint', 'a7f2exbu11sPriceNTDCYPrint', 'a7f2twbu04sPcsNTDCYPrint',
                'a7f2twbu04sPriceNTDCYPrint',
                'a7f2twbu07sPcsNTDCYPrint', 'a7f2twbu07sPriceNTDCYPrint', 'a7f2cebu10sPcsNTDCYPrint',
                'a7f2cebu10sPriceNTDCYPrint',
                'a8f1fgbu02sPcsNTDCYPrint', 'a8f1fgbu02sPriceNTDCYPrint', 'a8f2fgbu10sPcsNTDCYPrint',
                'a8f2fgbu10sPriceNTDCYPrint',
                'a8f2thbu05sPcsNTDCYPrint', 'a8f2thbu05sPriceNTDCYPrint', 'a8f2debu10sPcsNTDCYPrint',
                'a8f2debu10sPriceNTDCYPrint',
                'a8f2exbu11sPcsNTDCYPrint', 'a8f2exbu11sPriceNTDCYPrint', 'a8f2twbu04sPcsNTDCYPrint',
                'a8f2twbu04sPriceNTDCYPrint',
                'a8f2twbu07sPcsNTDCYPrint', 'a8f2twbu07sPriceNTDCYPrint', 'a8f2cebu10sPcsNTDCYPrint',
                'a8f2cebu10sPriceNTDCYPrint',
                'DC1PcsNTDCYPrint', 'DC1PriceNTDCYPrint', 'DCPPcsNTDCYPrint', 'DCPPriceNTDCYPrint',
                'DCYPcsNTDCYPrint', 'DCYPriceNTDCYPrint', 'DEXPcsNTDCYPrint', 'DEXPriceNTDCYPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWDCYPrint', 'PriceAfterTWDCYPrint', 'Pcs_AfterTWDCYPrint', 'Price_AfterTWDCYPrint',
                'PoPcsTWDCYPrint', 'PoPriceTWDCYPrint', 'NegPcsTWDCYPrint', 'NegPriceTWDCYPrint', 'BackPcsTWDCYPrint',
                'BackPriceTWDCYPrint', 'PurchasePcsTWDCYPrint', 'PurchasePriceTWDCYPrint', 'ReciveTranferPcsTWDCYPrint',
                'ReciveTranferPriceTWDCYPrint', 'ReturnItemPcsTWDCYPrint', 'ReturnItemPriceTWDCYPrint',
                'AllInPcsTWDCYPrint', 'AllInPriceTWDCYPrint', 'SendSalePcsTWDCYPrint', 'SendSalePriceTWDCYPrint',
                'ReciveTranOutPcsTWDCYPrint', 'ReciveTranOutPriceTWDCYPrint', 'ReturnStorePcsTWDCYPrint',
                'ReturnStorePriceTWDCYPrint', 'AllOutPcsTWDCYPrint', 'AllOutPriceTWDCYPrint', 'CalculatePcsTWDCYPrint',
                'CalculatePriceTWDCYPrint', 'NewCalculatePcsTWDCYPrint', 'NewCalculatePriceTWDCYPrint',
                'DiffPcsTWDCYPrint', 'DiffPriceTWDCYPrint', 'NewTotalPcsTWDCYPrint', 'NewTotalPriceTWDCYPrint',
                'NewTotalDiffNavTWDCYPrint', 'NewTotalDiffCalTWDCYPrint',
                'a7f1fgbu02sPcsTWDCYPrint', 'a7f1fgbu02sPriceTWDCYPrint', 'a7f2fgbu10sPcsTWDCYPrint',
                'a7f2fgbu10sPriceTWDCYPrint',
                'a7f2thbu05sPcsTWDCYPrint', 'a7f2thbu05sPriceTWDCYPrint', 'a7f2debu10sPcsTWDCYPrint',
                'a7f2debu10sPriceTWDCYPrint',
                'a7f2exbu11sPcsTWDCYPrint', 'a7f2exbu11sPriceTWDCYPrint', 'a7f2twbu04sPcsTWDCYPrint',
                'a7f2twbu04sPriceTWDCYPrint',
                'a7f2twbu07sPcsTWDCYPrint', 'a7f2twbu07sPriceTWDCYPrint', 'a7f2cebu10sPcsTWDCYPrint',
                'a7f2cebu10sPriceTWDCYPrint',
                'a8f1fgbu02sPcsTWDCYPrint', 'a8f1fgbu02sPriceTWDCYPrint', 'a8f2fgbu10sPcsTWDCYPrint',
                'a8f2fgbu10sPriceTWDCYPrint',
                'a8f2thbu05sPcsTWDCYPrint', 'a8f2thbu05sPriceTWDCYPrint', 'a8f2debu10sPcsTWDCYPrint',
                'a8f2debu10sPriceTWDCYPrint',
                'a8f2exbu11sPcsTWDCYPrint', 'a8f2exbu11sPriceTWDCYPrint', 'a8f2twbu04sPcsTWDCYPrint',
                'a8f2twbu04sPriceTWDCYPrint',
                'a8f2twbu07sPcsTWDCYPrint', 'a8f2twbu07sPriceTWDCYPrint', 'a8f2cebu10sPcsTWDCYPrint',
                'a8f2cebu10sPriceTWDCYPrint',
                'DC1PcsTWDCYPrint', 'DC1PriceTWDCYPrint', 'DCPPcsTWDCYPrint', 'DCPPriceTWDCYPrint',
                'DCYPcsTWDCYPrint', 'DCYPriceTWDCYPrint', 'DEXPcsTWDCYPrint', 'DEXPriceTWDCYPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSNTDCYPrint', 'PriceAfterSNTDCYPrint', 'Pcs_AfterSNTDCYPrint', 'Price_AfterSNTDCYPrint',
                'PoPcsSNTDCYPrint', 'PoPriceSNTDCYPrint', 'NegPcsSNTDCYPrint', 'NegPriceSNTDCYPrint', 'BackPcsSNTDCYPrint',
                'BackPriceSNTDCYPrint', 'PurchasePcsSNTDCYPrint', 'PurchasePriceSNTDCYPrint', 'ReciveTranferPcsSNTDCYPrint',
                'ReciveTranferPriceSNTDCYPrint', 'ReturnItemPcsSNTDCYPrint', 'ReturnItemPriceSNTDCYPrint',
                'AllInPcsSNTDCYPrint', 'AllInPriceSNTDCYPrint', 'SendSalePcsSNTDCYPrint', 'SendSalePriceSNTDCYPrint',
                'ReciveTranOutPcsSNTDCYPrint', 'ReciveTranOutPriceSNTDCYPrint', 'ReturnStorePcsSNTDCYPrint',
                'ReturnStorePriceSNTDCYPrint', 'AllOutPcsSNTDCYPrint', 'AllOutPriceSNTDCYPrint', 'CalculatePcsSNTDCYPrint',
                'CalculatePriceSNTDCYPrint', 'NewCalculatePcsSNTDCYPrint', 'NewCalculatePriceSNTDCYPrint',
                'DiffPcsSNTDCYPrint', 'DiffPriceSNTDCYPrint', 'NewTotalPcsSNTDCYPrint', 'NewTotalPriceSNTDCYPrint',
                'NewTotalDiffNavSNTDCYPrint', 'NewTotalDiffCalSNTDCYPrint',
                'a7f1fgbu02sPcsSNTDCYPrint', 'a7f1fgbu02sPriceSNTDCYPrint', 'a7f2fgbu10sPcsSNTDCYPrint',
                'a7f2fgbu10sPriceSNTDCYPrint',
                'a7f2thbu05sPcsSNTDCYPrint', 'a7f2thbu05sPriceSNTDCYPrint', 'a7f2debu10sPcsSNTDCYPrint',
                'a7f2debu10sPriceSNTDCYPrint',
                'a7f2exbu11sPcsSNTDCYPrint', 'a7f2exbu11sPriceSNTDCYPrint', 'a7f2twbu04sPcsSNTDCYPrint',
                'a7f2twbu04sPriceSNTDCYPrint',
                'a7f2twbu07sPcsSNTDCYPrint', 'a7f2twbu07sPriceSNTDCYPrint', 'a7f2cebu10sPcsSNTDCYPrint',
                'a7f2cebu10sPriceSNTDCYPrint',
                'a8f1fgbu02sPcsSNTDCYPrint', 'a8f1fgbu02sPriceSNTDCYPrint', 'a8f2fgbu10sPcsSNTDCYPrint',
                'a8f2fgbu10sPriceSNTDCYPrint',
                'a8f2thbu05sPcsSNTDCYPrint', 'a8f2thbu05sPriceSNTDCYPrint', 'a8f2debu10sPcsSNTDCYPrint',
                'a8f2debu10sPriceSNTDCYPrint',
                'a8f2exbu11sPcsSNTDCYPrint', 'a8f2exbu11sPriceSNTDCYPrint', 'a8f2twbu04sPcsSNTDCYPrint',
                'a8f2twbu04sPriceSNTDCYPrint',
                'a8f2twbu07sPcsSNTDCYPrint', 'a8f2twbu07sPriceSNTDCYPrint', 'a8f2cebu10sPcsSNTDCYPrint',
                'a8f2cebu10sPriceSNTDCYPrint',
                'DC1PcsSNTDCYPrint', 'DC1PriceSNTDCYPrint', 'DCPPcsSNTDCYPrint', 'DCPPriceSNTDCYPrint',
                'DCYPcsSNTDCYPrint', 'DCYPriceSNTDCYPrint', 'DEXPcsSNTDCYPrint', 'DEXPriceSNTDCYPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllDCYPrint', 'PriceAfterAllDCYPrint', 'Pcs_AfterAllDCYPrint', 'Price_AfterAllDCYPrint',
                'PoPcsAllDCYPrint', 'PoPriceAllDCYPrint', 'NegPcsAllDCYPrint', 'NegPriceAllDCYPrint', 'BackPcsAllDCYPrint',
                'BackPriceAllDCYPrint', 'PurchasePcsAllDCYPrint', 'PurchasePriceAllDCYPrint', 'ReciveTranferPcsAllDCYPrint',
                'ReciveTranferPriceAllDCYPrint', 'ReturnItemPcsAllDCYPrint', 'ReturnItemPriceAllDCYPrint',
                'AllInPcsAllDCYPrint', 'AllInPriceAllDCYPrint', 'SendSalePcsAllDCYPrint', 'SendSalePriceAllDCYPrint',
                'ReciveTranOutPcsAllDCYPrint', 'ReciveTranOutPriceAllDCYPrint', 'ReturnStorePcsAllDCYPrint',
                'ReturnStorePriceAllDCYPrint', 'AllOutPcsAllDCYPrint', 'AllOutPriceAllDCYPrint', 'CalculatePcsAllDCYPrint',
                'CalculatePriceAllDCYPrint', 'NewCalculatePcsAllDCYPrint', 'NewCalculatePriceAllDCYPrint',
                'DiffPcsAllDCYPrint', 'DiffPriceAllDCYPrint', 'NewTotalPcsAllDCYPrint', 'NewTotalPriceAllDCYPrint',
                'NewTotalDiffNavAllDCYPrint', 'NewTotalDiffCalAllDCYPrint',
                'a7f1fgbu02sPcsAllDCYPrint', 'a7f1fgbu02sPriceAllDCYPrint', 'a7f2fgbu10sPcsAllDCYPrint',
                'a7f2fgbu10sPriceAllDCYPrint',
                'a7f2thbu05sPcsAllDCYPrint', 'a7f2thbu05sPriceAllDCYPrint', 'a7f2debu10sPcsAllDCYPrint',
                'a7f2debu10sPriceAllDCYPrint',
                'a7f2exbu11sPcsAllDCYPrint', 'a7f2exbu11sPriceAllDCYPrint', 'a7f2twbu04sPcsAllDCYPrint',
                'a7f2twbu04sPriceAllDCYPrint',
                'a7f2twbu07sPcsAllDCYPrint', 'a7f2twbu07sPriceAllDCYPrint', 'a7f2cebu10sPcsAllDCYPrint',
                'a7f2cebu10sPriceAllDCYPrint',
                'a8f1fgbu02sPcsAllDCYPrint', 'a8f1fgbu02sPriceAllDCYPrint', 'a8f2fgbu10sPcsAllDCYPrint',
                'a8f2fgbu10sPriceAllDCYPrint',
                'a8f2thbu05sPcsAllDCYPrint', 'a8f2thbu05sPriceAllDCYPrint', 'a8f2debu10sPcsAllDCYPrint',
                'a8f2debu10sPriceAllDCYPrint',
                'a8f2exbu11sPcsAllDCYPrint', 'a8f2exbu11sPriceAllDCYPrint', 'a8f2twbu04sPcsAllDCYPrint',
                'a8f2twbu04sPriceAllDCYPrint',
                'a8f2twbu07sPcsAllDCYPrint', 'a8f2twbu07sPriceAllDCYPrint', 'a8f2cebu10sPcsAllDCYPrint',
                'a8f2cebu10sPriceAllDCYPrint',
                'DC1PcsAllDCYPrint', 'DC1PriceAllDCYPrint', 'DCPPcsAllDCYPrint', 'DCPPriceAllDCYPrint',
                'DCYPcsAllDCYPrint', 'DCYPriceAllDCYPrint', 'DEXPcsAllDCYPrint', 'DEXPriceAllDCYPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterNTDCPPrint', 'PriceAfterNTDCPPrint', 'Pcs_AfterNTDCPPrint', 'Price_AfterNTDCPPrint',
                'PoPcsNTDCPPrint', 'PoPriceNTDCPPrint', 'NegPcsNTDCPPrint', 'NegPriceNTDCPPrint', 'BackPcsNTDCPPrint',
                'BackPriceNTDCPPrint', 'PurchasePcsNTDCPPrint', 'PurchasePriceNTDCPPrint', 'ReciveTranferPcsNTDCPPrint',
                'ReciveTranferPriceNTDCPPrint', 'ReturnItemPcsNTDCPPrint', 'ReturnItemPriceNTDCPPrint',
                'AllInPcsNTDCPPrint', 'AllInPriceNTDCPPrint', 'SendSalePcsNTDCPPrint', 'SendSalePriceNTDCPPrint',
                'ReciveTranOutPcsNTDCPPrint', 'ReciveTranOutPriceNTDCPPrint', 'ReturnStorePcsNTDCPPrint',
                'ReturnStorePriceNTDCPPrint', 'AllOutPcsNTDCPPrint', 'AllOutPriceNTDCPPrint', 'CalculatePcsNTDCPPrint',
                'CalculatePriceNTDCPPrint', 'NewCalculatePcsNTDCPPrint', 'NewCalculatePriceNTDCPPrint',
                'DiffPcsNTDCPPrint', 'DiffPriceNTDCPPrint', 'NewTotalPcsNTDCPPrint', 'NewTotalPriceNTDCPPrint',
                'NewTotalDiffNavNTDCPPrint', 'NewTotalDiffCalNTDCPPrint',
                'a7f1fgbu02sPcsNTDCPPrint', 'a7f1fgbu02sPriceNTDCPPrint', 'a7f2fgbu10sPcsNTDCPPrint',
                'a7f2fgbu10sPriceNTDCPPrint',
                'a7f2thbu05sPcsNTDCPPrint', 'a7f2thbu05sPriceNTDCPPrint', 'a7f2debu10sPcsNTDCPPrint',
                'a7f2debu10sPriceNTDCPPrint',
                'a7f2exbu11sPcsNTDCPPrint', 'a7f2exbu11sPriceNTDCPPrint', 'a7f2twbu04sPcsNTDCPPrint',
                'a7f2twbu04sPriceNTDCPPrint',
                'a7f2twbu07sPcsNTDCPPrint', 'a7f2twbu07sPriceNTDCPPrint', 'a7f2cebu10sPcsNTDCPPrint',
                'a7f2cebu10sPriceNTDCPPrint',
                'a8f1fgbu02sPcsNTDCPPrint', 'a8f1fgbu02sPriceNTDCPPrint', 'a8f2fgbu10sPcsNTDCPPrint',
                'a8f2fgbu10sPriceNTDCPPrint',
                'a8f2thbu05sPcsNTDCPPrint', 'a8f2thbu05sPriceNTDCPPrint', 'a8f2debu10sPcsNTDCPPrint',
                'a8f2debu10sPriceNTDCPPrint',
                'a8f2exbu11sPcsNTDCPPrint', 'a8f2exbu11sPriceNTDCPPrint', 'a8f2twbu04sPcsNTDCPPrint',
                'a8f2twbu04sPriceNTDCPPrint',
                'a8f2twbu07sPcsNTDCPPrint', 'a8f2twbu07sPriceNTDCPPrint', 'a8f2cebu10sPcsNTDCPPrint',
                'a8f2cebu10sPriceNTDCPPrint',
                'DC1PcsNTDCPPrint', 'DC1PriceNTDCPPrint', 'DCPPcsNTDCPPrint', 'DCPPriceNTDCPPrint',
                'DCYPcsNTDCPPrint', 'DCYPriceNTDCPPrint', 'DEXPcsNTDCPPrint', 'DEXPriceAllDCYPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWDCPPrint', 'PriceAfterTWDCPPrint', 'Pcs_AfterTWDCPPrint', 'Price_AfterTWDCPPrint',
                'PoPcsTWDCPPrint', 'PoPriceTWDCPPrint', 'NegPcsTWDCPPrint', 'NegPriceTWDCPPrint', 'BackPcsTWDCPPrint',
                'BackPriceTWDCPPrint', 'PurchasePcsTWDCPPrint', 'PurchasePriceTWDCPPrint', 'ReciveTranferPcsTWDCPPrint',
                'ReciveTranferPriceTWDCPPrint', 'ReturnItemPcsTWDCPPrint', 'ReturnItemPriceTWDCPPrint',
                'AllInPcsTWDCPPrint', 'AllInPriceTWDCPPrint', 'SendSalePcsTWDCPPrint', 'SendSalePriceTWDCPPrint',
                'ReciveTranOutPcsTWDCPPrint', 'ReciveTranOutPriceTWDCPPrint', 'ReturnStorePcsTWDCPPrint',
                'ReturnStorePriceTWDCPPrint', 'AllOutPcsTWDCPPrint', 'AllOutPriceTWDCPPrint', 'CalculatePcsTWDCPPrint',
                'CalculatePriceTWDCPPrint', 'NewCalculatePcsTWDCPPrint', 'NewCalculatePriceTWDCPPrint',
                'DiffPcsTWDCPPrint', 'DiffPriceTWDCPPrint', 'NewTotalPcsTWDCPPrint', 'NewTotalPriceTWDCPPrint',
                'NewTotalDiffNavTWDCPPrint', 'NewTotalDiffCalTWDCPPrint',
                'a7f1fgbu02sPcsTWDCPPrint', 'a7f1fgbu02sPriceTWDCPPrint', 'a7f2fgbu10sPcsTWDCPPrint',
                'a7f2fgbu10sPriceTWDCPPrint',
                'a7f2thbu05sPcsTWDCPPrint', 'a7f2thbu05sPriceTWDCPPrint', 'a7f2debu10sPcsTWDCPPrint',
                'a7f2debu10sPriceTWDCPPrint',
                'a7f2exbu11sPcsTWDCPPrint', 'a7f2exbu11sPriceTWDCPPrint', 'a7f2twbu04sPcsTWDCPPrint',
                'a7f2twbu04sPriceTWDCPPrint',
                'a7f2twbu07sPcsTWDCPPrint', 'a7f2twbu07sPriceTWDCPPrint', 'a7f2cebu10sPcsTWDCPPrint',
                'a7f2cebu10sPriceTWDCPPrint',
                'a8f1fgbu02sPcsTWDCPPrint', 'a8f1fgbu02sPriceTWDCPPrint', 'a8f2fgbu10sPcsTWDCPPrint',
                'a8f2fgbu10sPriceTWDCPPrint',
                'a8f2thbu05sPcsTWDCPPrint', 'a8f2thbu05sPriceTWDCPPrint', 'a8f2debu10sPcsTWDCPPrint',
                'a8f2debu10sPriceTWDCPPrint',
                'a8f2exbu11sPcsTWDCPPrint', 'a8f2exbu11sPriceTWDCPPrint', 'a8f2twbu04sPcsTWDCPPrint',
                'a8f2twbu04sPriceTWDCPPrint',
                'a8f2twbu07sPcsTWDCPPrint', 'a8f2twbu07sPriceTWDCPPrint', 'a8f2cebu10sPcsTWDCPPrint',
                'a8f2cebu10sPriceTWDCPPrint',
                'DC1PcsTWDCPPrint', 'DC1PriceTWDCPPrint', 'DCPPcsTWDCPPrint', 'DCPPriceTWDCPPrint',
                'DCYPcsTWDCPPrint', 'DCYPriceTWDCPPrint', 'DEXPcsTWDCPPrint', 'DEXPriceTWDCPPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterLNDCPPrint', 'PriceAfterLNDCPPrint', 'Pcs_AfterLNDCPPrint', 'Price_AfterLNDCPPrint',
                'PoPcsLNDCPPrint', 'PoPriceLNDCPPrint', 'NegPcsLNDCPPrint', 'NegPriceLNDCPPrint', 'BackPcsLNDCPPrint',
                'BackPriceLNDCPPrint', 'PurchasePcsLNDCPPrint', 'PurchasePriceLNDCPPrint', 'ReciveTranferPcsLNDCPPrint',
                'ReciveTranferPriceLNDCPPrint', 'ReturnItemPcsLNDCPPrint', 'ReturnItemPriceLNDCPPrint',
                'AllInPcsLNDCPPrint', 'AllInPriceLNDCPPrint', 'SendSalePcsLNDCPPrint', 'SendSalePriceLNDCPPrint',
                'ReciveTranOutPcsLNDCPPrint', 'ReciveTranOutPriceLNDCPPrint', 'ReturnStorePcsLNDCPPrint',
                'ReturnStorePriceLNDCPPrint', 'AllOutPcsLNDCPPrint', 'AllOutPriceLNDCPPrint', 'CalculatePcsLNDCPPrint',
                'CalculatePriceLNDCPPrint', 'NewCalculatePcsLNDCPPrint', 'NewCalculatePriceLNDCPPrint',
                'DiffPcsLNDCPPrint', 'DiffPriceLNDCPPrint', 'NewTotalPcsLNDCPPrint', 'NewTotalPriceLNDCPPrint',
                'NewTotalDiffNavLNDCPPrint', 'NewTotalDiffCalLNDCPPrint',
                'a7f1fgbu02sPcsLNDCPPrint', 'a7f1fgbu02sPriceLNDCPPrint', 'a7f2fgbu10sPcsLNDCPPrint',
                'a7f2fgbu10sPriceLNDCPPrint',
                'a7f2thbu05sPcsLNDCPPrint', 'a7f2thbu05sPriceLNDCPPrint', 'a7f2debu10sPcsLNDCPPrint',
                'a7f2debu10sPriceLNDCPPrint',
                'a7f2exbu11sPcsLNDCPPrint', 'a7f2exbu11sPriceLNDCPPrint', 'a7f2twbu04sPcsLNDCPPrint',
                'a7f2twbu04sPriceLNDCPPrint',
                'a7f2twbu07sPcsLNDCPPrint', 'a7f2twbu07sPriceLNDCPPrint', 'a7f2cebu10sPcsLNDCPPrint',
                'a7f2cebu10sPriceLNDCPPrint',
                'a8f1fgbu02sPcsLNDCPPrint', 'a8f1fgbu02sPriceLNDCPPrint', 'a8f2fgbu10sPcsLNDCPPrint',
                'a8f2fgbu10sPriceLNDCPPrint',
                'a8f2thbu05sPcsLNDCPPrint', 'a8f2thbu05sPriceLNDCPPrint', 'a8f2debu10sPcsLNDCPPrint',
                'a8f2debu10sPriceLNDCPPrint',
                'a8f2exbu11sPcsLNDCPPrint', 'a8f2exbu11sPriceLNDCPPrint', 'a8f2twbu04sPcsLNDCPPrint',
                'a8f2twbu04sPriceLNDCPPrint',
                'a8f2twbu07sPcsLNDCPPrint', 'a8f2twbu07sPriceLNDCPPrint', 'a8f2cebu10sPcsLNDCPPrint',
                'a8f2cebu10sPriceLNDCPPrint',
                'DC1PcsLNDCPPrint', 'DC1PriceLNDCPPrint', 'DCPPcsLNDCPPrint', 'DCPPriceLNDCPPrint',
                'DCYPcsLNDCPPrint', 'DCYPriceLNDCPPrint', 'DEXPcsLNDCPPrint', 'DEXPriceLNDCPPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllDCPPrint', 'PriceAfterAllDCPPrint', 'Pcs_AfterAllDCPPrint', 'Price_AfterAllDCPPrint',
                'PoPcsAllDCPPrint', 'PoPriceAllDCPPrint', 'NegPcsAllDCPPrint', 'NegPriceAllDCPPrint', 'BackPcsAllDCPPrint',
                'BackPriceAllDCPPrint', 'PurchasePcsAllDCPPrint', 'PurchasePriceAllDCPPrint', 'ReciveTranferPcsAllDCPPrint',
                'ReciveTranferPriceAllDCPPrint', 'ReturnItemPcsAllDCPPrint', 'ReturnItemPriceAllDCPPrint',
                'AllInPcsAllDCPPrint', 'AllInPriceAllDCPPrint', 'SendSalePcsAllDCPPrint', 'SendSalePriceAllDCPPrint',
                'ReciveTranOutPcsAllDCPPrint', 'ReciveTranOutPriceAllDCPPrint', 'ReturnStorePcsAllDCPPrint',
                'ReturnStorePriceAllDCPPrint', 'AllOutPcsAllDCPPrint', 'AllOutPriceAllDCPPrint', 'CalculatePcsAllDCPPrint',
                'CalculatePriceAllDCPPrint', 'NewCalculatePcsAllDCPPrint', 'NewCalculatePriceAllDCPPrint',
                'DiffPcsAllDCPPrint', 'DiffPriceAllDCPPrint', 'NewTotalPcsAllDCPPrint', 'NewTotalPriceAllDCPPrint',
                'NewTotalDiffNavAllDCPPrint', 'NewTotalDiffCalAllDCPPrint',
                'a7f1fgbu02sPcsAllDCPPrint', 'a7f1fgbu02sPriceAllDCPPrint', 'a7f2fgbu10sPcsAllDCPPrint',
                'a7f2fgbu10sPriceAllDCPPrint',
                'a7f2thbu05sPcsAllDCPPrint', 'a7f2thbu05sPriceAllDCPPrint', 'a7f2debu10sPcsAllDCPPrint',
                'a7f2debu10sPriceAllDCPPrint',
                'a7f2exbu11sPcsAllDCPPrint', 'a7f2exbu11sPriceAllDCPPrint', 'a7f2twbu04sPcsAllDCPPrint',
                'a7f2twbu04sPriceAllDCPPrint',
                'a7f2twbu07sPcsAllDCPPrint', 'a7f2twbu07sPriceAllDCPPrint', 'a7f2cebu10sPcsAllDCPPrint',
                'a7f2cebu10sPriceAllDCPPrint',
                'a8f1fgbu02sPcsAllDCPPrint', 'a8f1fgbu02sPriceAllDCPPrint', 'a8f2fgbu10sPcsAllDCPPrint',
                'a8f2fgbu10sPriceAllDCPPrint',
                'a8f2thbu05sPcsAllDCPPrint', 'a8f2thbu05sPriceAllDCPPrint', 'a8f2debu10sPcsAllDCPPrint',
                'a8f2debu10sPriceAllDCPPrint',
                'a8f2exbu11sPcsAllDCPPrint', 'a8f2exbu11sPriceAllDCPPrint', 'a8f2twbu04sPcsAllDCPPrint',
                'a8f2twbu04sPriceAllDCPPrint',
                'a8f2twbu07sPcsAllDCPPrint', 'a8f2twbu07sPriceAllDCPPrint', 'a8f2cebu10sPcsAllDCPPrint',
                'a8f2cebu10sPriceAllDCPPrint',
                'DC1PcsAllDCPPrint', 'DC1PriceAllDCPPrint', 'DCPPcsAllDCPPrint', 'DCPPriceAllDCPPrint',
                'DCYPcsAllDCPPrint', 'DCYPriceAllDCPPrint', 'DEXPcsAllDCPPrint', 'DEXPriceAllDCPPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterNTCountryPrint', 'PriceAfterNTCountryPrint', 'Pcs_AfterNTCountryPrint', 'Price_AfterNTCountryPrint',
                'PoPcsNTCountryPrint', 'PoPriceNTCountryPrint', 'NegPcsNTCountryPrint', 'NegPriceNTCountryPrint',
                'BackPcsNTCountryPrint',
                'BackPriceNTCountryPrint', 'PurchasePcsNTCountryPrint', 'PurchasePriceNTCountryPrint',
                'ReciveTranferPcsNTCountryPrint',
                'ReciveTranferPriceNTCountryPrint', 'ReturnItemPcsNTCountryPrint', 'ReturnItemPriceNTCountryPrint',
                'AllInPcsNTCountryPrint', 'AllInPriceNTCountryPrint', 'SendSalePcsNTCountryPrint',
                'SendSalePriceNTCountryPrint',
                'ReciveTranOutPcsNTCountryPrint', 'ReciveTranOutPriceNTCountryPrint', 'ReturnStorePcsNTCountryPrint',
                'ReturnStorePriceNTCountryPrint', 'AllOutPcsNTCountryPrint', 'AllOutPriceNTCountryPrint',
                'CalculatePcsNTCountryPrint',
                'CalculatePriceNTCountryPrint', 'NewCalculatePcsNTCountryPrint', 'NewCalculatePriceNTCountryPrint',
                'DiffPcsNTCountryPrint', 'DiffPriceNTCountryPrint', 'NewTotalPcsNTCountryPrint', 'NewTotalPriceNTCountryPrint',
                'NewTotalDiffNavNTCountryPrint', 'NewTotalDiffCalNTCountryPrint',
                'a7f1fgbu02sPcsNTCountryPrint', 'a7f1fgbu02sPriceNTCountryPrint', 'a7f2fgbu10sPcsNTCountryPrint',
                'a7f2fgbu10sPriceNTCountryPrint',
                'a7f2thbu05sPcsNTCountryPrint', 'a7f2thbu05sPriceNTCountryPrint', 'a7f2debu10sPcsNTCountryPrint',
                'a7f2debu10sPriceNTCountryPrint',
                'a7f2exbu11sPcsNTCountryPrint', 'a7f2exbu11sPriceNTCountryPrint', 'a7f2twbu04sPcsNTCountryPrint',
                'a7f2twbu04sPriceNTCountryPrint',
                'a7f2twbu07sPcsNTCountryPrint', 'a7f2twbu07sPriceNTCountryPrint', 'a7f2cebu10sPcsNTCountryPrint',
                'a7f2cebu10sPriceNTCountryPrint',
                'a8f1fgbu02sPcsNTCountryPrint', 'a8f1fgbu02sPriceNTCountryPrint', 'a8f2fgbu10sPcsNTCountryPrint',
                'a8f2fgbu10sPriceNTCountryPrint',
                'a8f2thbu05sPcsNTCountryPrint', 'a8f2thbu05sPriceNTCountryPrint', 'a8f2debu10sPcsNTCountryPrint',
                'a8f2debu10sPriceNTCountryPrint',
                'a8f2exbu11sPcsNTCountryPrint', 'a8f2exbu11sPriceNTCountryPrint', 'a8f2twbu04sPcsNTCountryPrint',
                'a8f2twbu04sPriceNTCountryPrint',
                'a8f2twbu07sPcsNTCountryPrint', 'a8f2twbu07sPriceNTCountryPrint', 'a8f2cebu10sPcsNTCountryPrint',
                'a8f2cebu10sPriceNTCountryPrint',
                'DC1PcsNTCountryPrint', 'DC1PriceNTCountryPrint', 'DCPPcsNTCountryPrint', 'DCPPriceNTCountryPrint',
                'DCYPcsNTCountryPrint', 'DCYPriceNTCountryPrint', 'DEXPcsNTCountryPrint', 'DEXPriceNTCountryPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterMTCountryPrint', 'PriceAfterMTCountryPrint', 'Pcs_AfterMTCountryPrint', 'Price_AfterMTCountryPrint',
                'PoPcsMTCountryPrint', 'PoPriceMTCountryPrint', 'NegPcsMTCountryPrint', 'NegPriceMTCountryPrint',
                'BackPcsMTCountryPrint',
                'BackPriceMTCountryPrint', 'PurchasePcsMTCountryPrint', 'PurchasePriceMTCountryPrint',
                'ReciveTranferPcsMTCountryPrint',
                'ReciveTranferPriceMTCountryPrint', 'ReturnItemPcsMTCountryPrint', 'ReturnItemPriceMTCountryPrint',
                'AllInPcsMTCountryPrint', 'AllInPriceMTCountryPrint', 'SendSalePcsMTCountryPrint',
                'SendSalePriceMTCountryPrint',
                'ReciveTranOutPcsMTCountryPrint', 'ReciveTranOutPriceMTCountryPrint', 'ReturnStorePcsMTCountryPrint',
                'ReturnStorePriceMTCountryPrint', 'AllOutPcsMTCountryPrint', 'AllOutPriceMTCountryPrint',
                'CalculatePcsMTCountryPrint',
                'CalculatePriceMTCountryPrint', 'NewCalculatePcsMTCountryPrint', 'NewCalculatePriceMTCountryPrint',
                'DiffPcsMTCountryPrint', 'DiffPriceMTCountryPrint', 'NewTotalPcsMTCountryPrint', 'NewTotalPriceMTCountryPrint',
                'NewTotalDiffNavMTCountryPrint', 'NewTotalDiffCalMTCountryPrint',
                'a7f1fgbu02sPcsMTCountryPrint', 'a7f1fgbu02sPriceMTCountryPrint', 'a7f2fgbu10sPcsMTCountryPrint',
                'a7f2fgbu10sPriceMTCountryPrint',
                'a7f2thbu05sPcsMTCountryPrint', 'a7f2thbu05sPriceMTCountryPrint', 'a7f2debu10sPcsMTCountryPrint',
                'a7f2debu10sPriceMTCountryPrint',
                'a7f2exbu11sPcsMTCountryPrint', 'a7f2exbu11sPriceMTCountryPrint', 'a7f2twbu04sPcsMTCountryPrint',
                'a7f2twbu04sPriceMTCountryPrint',
                'a7f2twbu07sPcsMTCountryPrint', 'a7f2twbu07sPriceMTCountryPrint', 'a7f2cebu10sPcsMTCountryPrint',
                'a7f2cebu10sPriceMTCountryPrint',
                'a8f1fgbu02sPcsMTCountryPrint', 'a8f1fgbu02sPriceMTCountryPrint', 'a8f2fgbu10sPcsMTCountryPrint',
                'a8f2fgbu10sPriceMTCountryPrint',
                'a8f2thbu05sPcsMTCountryPrint', 'a8f2thbu05sPriceMTCountryPrint', 'a8f2debu10sPcsMTCountryPrint',
                'a8f2debu10sPriceMTCountryPrint',
                'a8f2exbu11sPcsMTCountryPrint', 'a8f2exbu11sPriceMTCountryPrint', 'a8f2twbu04sPcsMTCountryPrint',
                'a8f2twbu04sPriceMTCountryPrint',
                'a8f2twbu07sPcsMTCountryPrint', 'a8f2twbu07sPriceMTCountryPrint', 'a8f2cebu10sPcsMTCountryPrint',
                'a8f2cebu10sPriceMTCountryPrint',
                'DC1PcsMTCountryPrint', 'DC1PriceMTCountryPrint', 'DCPPcsMTCountryPrint', 'DCPPriceMTCountryPrint',
                'DCYPcsMTCountryPrint', 'DCYPriceMTCountryPrint', 'DEXPcsMTCountryPrint', 'DEXPriceMTCountryPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterTWCountryPrint', 'PriceAfterTWCountryPrint', 'Pcs_AfterTWCountryPrint', 'Price_AfterTWCountryPrint',
                'PoPcsTWCountryPrint', 'PoPriceTWCountryPrint', 'NegPcsTWCountryPrint', 'NegPriceTWCountryPrint',
                'BackPcsTWCountryPrint',
                'BackPriceTWCountryPrint', 'PurchasePcsTWCountryPrint', 'PurchasePriceTWCountryPrint',
                'ReciveTranferPcsTWCountryPrint',
                'ReciveTranferPriceTWCountryPrint', 'ReturnItemPcsTWCountryPrint', 'ReturnItemPriceTWCountryPrint',
                'AllInPcsTWCountryPrint', 'AllInPriceTWCountryPrint', 'SendSalePcsTWCountryPrint',
                'SendSalePriceTWCountryPrint',
                'ReciveTranOutPcsTWCountryPrint', 'ReciveTranOutPriceTWCountryPrint', 'ReturnStorePcsTWCountryPrint',
                'ReturnStorePriceTWCountryPrint', 'AllOutPcsTWCountryPrint', 'AllOutPriceTWCountryPrint',
                'CalculatePcsTWCountryPrint',
                'CalculatePriceTWCountryPrint', 'NewCalculatePcsTWCountryPrint', 'NewCalculatePriceTWCountryPrint',
                'DiffPcsTWCountryPrint', 'DiffPriceTWCountryPrint', 'NewTotalPcsTWCountryPrint', 'NewTotalPriceTWCountryPrint',
                'NewTotalDiffNavTWCountryPrint', 'NewTotalDiffCalTWCountryPrint',
                'a7f1fgbu02sPcsTWCountryPrint', 'a7f1fgbu02sPriceTWCountryPrint', 'a7f2fgbu10sPcsTWCountryPrint',
                'a7f2fgbu10sPriceTWCountryPrint',
                'a7f2thbu05sPcsTWCountryPrint', 'a7f2thbu05sPriceTWCountryPrint', 'a7f2debu10sPcsTWCountryPrint',
                'a7f2debu10sPriceTWCountryPrint',
                'a7f2exbu11sPcsTWCountryPrint', 'a7f2exbu11sPriceTWCountryPrint', 'a7f2twbu04sPcsTWCountryPrint',
                'a7f2twbu04sPriceTWCountryPrint',
                'a7f2twbu07sPcsTWCountryPrint', 'a7f2twbu07sPriceTWCountryPrint', 'a7f2cebu10sPcsTWCountryPrint',
                'a7f2cebu10sPriceTWCountryPrint',
                'a8f1fgbu02sPcsTWCountryPrint', 'a8f1fgbu02sPriceTWCountryPrint', 'a8f2fgbu10sPcsTWCountryPrint',
                'a8f2fgbu10sPriceTWCountryPrint',
                'a8f2thbu05sPcsTWCountryPrint', 'a8f2thbu05sPriceTWCountryPrint', 'a8f2debu10sPcsTWCountryPrint',
                'a8f2debu10sPriceTWCountryPrint',
                'a8f2exbu11sPcsTWCountryPrint', 'a8f2exbu11sPriceTWCountryPrint', 'a8f2twbu04sPcsTWCountryPrint',
                'a8f2twbu04sPriceTWCountryPrint',
                'a8f2twbu07sPcsTWCountryPrint', 'a8f2twbu07sPriceTWCountryPrint', 'a8f2cebu10sPcsTWCountryPrint',
                'a8f2cebu10sPriceTWCountryPrint',
                'DC1PcsTWCountryPrint', 'DC1PriceTWCountryPrint', 'DCPPcsTWCountryPrint', 'DCPPriceTWCountryPrint',
                'DCYPcsTWCountryPrint', 'DCYPriceTWCountryPrint', 'DEXPcsTWCountryPrint', 'DEXPriceTWCountryPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterLNCountryPrint', 'PriceAfterLNCountryPrint', 'Pcs_AfterLNCountryPrint', 'Price_AfterLNCountryPrint',
                'PoPcsLNCountryPrint', 'PoPriceLNCountryPrint', 'NegPcsLNCountryPrint', 'NegPriceLNCountryPrint',
                'BackPcsLNCountryPrint',
                'BackPriceLNCountryPrint', 'PurchasePcsLNCountryPrint', 'PurchasePriceLNCountryPrint',
                'ReciveTranferPcsLNCountryPrint',
                'ReciveTranferPriceLNCountryPrint', 'ReturnItemPcsLNCountryPrint', 'ReturnItemPriceLNCountryPrint',
                'AllInPcsLNCountryPrint', 'AllInPriceLNCountryPrint', 'SendSalePcsLNCountryPrint',
                'SendSalePriceLNCountryPrint',
                'ReciveTranOutPcsLNCountryPrint', 'ReciveTranOutPriceLNCountryPrint', 'ReturnStorePcsLNCountryPrint',
                'ReturnStorePriceLNCountryPrint', 'AllOutPcsLNCountryPrint', 'AllOutPriceLNCountryPrint',
                'CalculatePcsLNCountryPrint',
                'CalculatePriceLNCountryPrint', 'NewCalculatePcsLNCountryPrint', 'NewCalculatePriceLNCountryPrint',
                'DiffPcsLNCountryPrint', 'DiffPriceLNCountryPrint', 'NewTotalPcsLNCountryPrint', 'NewTotalPriceLNCountryPrint',
                'NewTotalDiffNavLNCountryPrint', 'NewTotalDiffCalLNCountryPrint',
                'a7f1fgbu02sPcsLNCountryPrint', 'a7f1fgbu02sPriceLNCountryPrint', 'a7f2fgbu10sPcsLNCountryPrint',
                'a7f2fgbu10sPriceLNCountryPrint',
                'a7f2thbu05sPcsLNCountryPrint', 'a7f2thbu05sPriceLNCountryPrint', 'a7f2debu10sPcsLNCountryPrint',
                'a7f2debu10sPriceLNCountryPrint',
                'a7f2exbu11sPcsLNCountryPrint', 'a7f2exbu11sPriceLNCountryPrint', 'a7f2twbu04sPcsLNCountryPrint',
                'a7f2twbu04sPriceLNCountryPrint',
                'a7f2twbu07sPcsLNCountryPrint', 'a7f2twbu07sPriceLNCountryPrint', 'a7f2cebu10sPcsLNCountryPrint',
                'a7f2cebu10sPriceLNCountryPrint',
                'a8f1fgbu02sPcsLNCountryPrint', 'a8f1fgbu02sPriceLNCountryPrint', 'a8f2fgbu10sPcsLNCountryPrint',
                'a8f2fgbu10sPriceLNCountryPrint',
                'a8f2thbu05sPcsLNCountryPrint', 'a8f2thbu05sPriceLNCountryPrint', 'a8f2debu10sPcsLNCountryPrint',
                'a8f2debu10sPriceLNCountryPrint',
                'a8f2exbu11sPcsLNCountryPrint', 'a8f2exbu11sPriceLNCountryPrint', 'a8f2twbu04sPcsLNCountryPrint',
                'a8f2twbu04sPriceLNCountryPrint',
                'a8f2twbu07sPcsLNCountryPrint', 'a8f2twbu07sPriceLNCountryPrint', 'a8f2cebu10sPcsLNCountryPrint',
                'a8f2cebu10sPriceLNCountryPrint',
                'DC1PcsLNCountryPrint', 'DC1PriceLNCountryPrint', 'DCPPcsLNCountryPrint', 'DCPPriceLNCountryPrint',
                'DCYPcsLNCountryPrint', 'DCYPriceLNCountryPrint', 'DEXPcsLNCountryPrint', 'DEXPriceLNCountryPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterSNTCountryPrint', 'PriceAfterSNTCountryPrint', 'Pcs_AfterSNTCountryPrint',
                'Price_AfterSNTCountryPrint',
                'PoPcsSNTCountryPrint', 'PoPriceSNTCountryPrint', 'NegPcsSNTCountryPrint', 'NegPriceSNTCountryPrint',
                'BackPcsSNTCountryPrint',
                'BackPriceSNTCountryPrint', 'PurchasePcsSNTCountryPrint', 'PurchasePriceSNTCountryPrint',
                'ReciveTranferPcsSNTCountryPrint',
                'ReciveTranferPriceSNTCountryPrint', 'ReturnItemPcsSNTCountryPrint', 'ReturnItemPriceSNTCountryPrint',
                'AllInPcsSNTCountryPrint', 'AllInPriceSNTCountryPrint', 'SendSalePcsSNTCountryPrint',
                'SendSalePriceSNTCountryPrint',
                'ReciveTranOutPcsSNTCountryPrint', 'ReciveTranOutPriceSNTCountryPrint', 'ReturnStorePcsSNTCountryPrint',
                'ReturnStorePriceSNTCountryPrint', 'AllOutPcsSNTCountryPrint', 'AllOutPriceSNTCountryPrint',
                'CalculatePcsSNTCountryPrint',
                'CalculatePriceSNTCountryPrint', 'NewCalculatePcsSNTCountryPrint', 'NewCalculatePriceSNTCountryPrint',
                'DiffPcsSNTCountryPrint', 'DiffPriceSNTCountryPrint', 'NewTotalPcsSNTCountryPrint',
                'NewTotalPriceSNTCountryPrint',
                'NewTotalDiffNavSNTCountryPrint', 'NewTotalDiffCalSNTCountryPrint',
                'a7f1fgbu02sPcsSNTCountryPrint', 'a7f1fgbu02sPriceSNTCountryPrint', 'a7f2fgbu10sPcsSNTCountryPrint',
                'a7f2fgbu10sPriceSNTCountryPrint',
                'a7f2thbu05sPcsSNTCountryPrint', 'a7f2thbu05sPriceSNTCountryPrint', 'a7f2debu10sPcsSNTCountryPrint',
                'a7f2debu10sPriceSNTCountryPrint',
                'a7f2exbu11sPcsSNTCountryPrint', 'a7f2exbu11sPriceSNTCountryPrint', 'a7f2twbu04sPcsSNTCountryPrint',
                'a7f2twbu04sPriceSNTCountryPrint',
                'a7f2twbu07sPcsSNTCountryPrint', 'a7f2twbu07sPriceSNTCountryPrint', 'a7f2cebu10sPcsSNTCountryPrint',
                'a7f2cebu10sPriceSNTCountryPrint',
                'a8f1fgbu02sPcsSNTCountryPrint', 'a8f1fgbu02sPriceSNTCountryPrint', 'a8f2fgbu10sPcsSNTCountryPrint',
                'a8f2fgbu10sPriceSNTCountryPrint',
                'a8f2thbu05sPcsSNTCountryPrint', 'a8f2thbu05sPriceSNTCountryPrint', 'a8f2debu10sPcsSNTCountryPrint',
                'a8f2debu10sPriceSNTCountryPrint',
                'a8f2exbu11sPcsSNTCountryPrint', 'a8f2exbu11sPriceSNTCountryPrint', 'a8f2twbu04sPcsSNTCountryPrint',
                'a8f2twbu04sPriceSNTCountryPrint',
                'a8f2twbu07sPcsSNTCountryPrint', 'a8f2twbu07sPriceSNTCountryPrint', 'a8f2cebu10sPcsSNTCountryPrint',
                'a8f2cebu10sPriceSNTCountryPrint',
                'DC1PcsSNTCountryPrint', 'DC1PriceSNTCountryPrint', 'DCPPcsSNTCountryPrint', 'DCPPriceSNTCountryPrint',
                'DCYPcsSNTCountryPrint', 'DCYPriceSNTCountryPrint', 'DEXPcsSNTCountryPrint', 'DEXPriceSNTCountryPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllCountryPrint', 'PriceAfterAllCountryPrint', 'Pcs_AfterAllCountryPrint',
                'Price_AfterAllCountryPrint',
                'PoPcsAllCountryPrint', 'PoPriceAllCountryPrint', 'NegPcsAllCountryPrint', 'NegPriceAllCountryPrint',
                'BackPcsAllCountryPrint',
                'BackPriceAllCountryPrint', 'PurchasePcsAllCountryPrint', 'PurchasePriceAllCountryPrint',
                'ReciveTranferPcsAllCountryPrint',
                'ReciveTranferPriceAllCountryPrint', 'ReturnItemPcsAllCountryPrint', 'ReturnItemPriceAllCountryPrint',
                'AllInPcsAllCountryPrint', 'AllInPriceAllCountryPrint', 'SendSalePcsAllCountryPrint',
                'SendSalePriceAllCountryPrint',
                'ReciveTranOutPcsAllCountryPrint', 'ReciveTranOutPriceAllCountryPrint', 'ReturnStorePcsAllCountryPrint',
                'ReturnStorePriceAllCountryPrint', 'AllOutPcsAllCountryPrint', 'AllOutPriceAllCountryPrint',
                'CalculatePcsAllCountryPrint',
                'CalculatePriceAllCountryPrint', 'NewCalculatePcsAllCountryPrint', 'NewCalculatePriceAllCountryPrint',
                'DiffPcsAllCountryPrint', 'DiffPriceAllCountryPrint', 'NewTotalPcsAllCountryPrint',
                'NewTotalPriceAllCountryPrint',
                'NewTotalDiffNavAllCountryPrint', 'NewTotalDiffCalAllCountryPrint',
                'a7f1fgbu02sPcsAllCountryPrint', 'a7f1fgbu02sPriceAllCountryPrint', 'a7f2fgbu10sPcsAllCountryPrint',
                'a7f2fgbu10sPriceAllCountryPrint',
                'a7f2thbu05sPcsAllCountryPrint', 'a7f2thbu05sPriceAllCountryPrint', 'a7f2debu10sPcsAllCountryPrint',
                'a7f2debu10sPriceAllCountryPrint',
                'a7f2exbu11sPcsAllCountryPrint', 'a7f2exbu11sPriceAllCountryPrint', 'a7f2twbu04sPcsAllCountryPrint',
                'a7f2twbu04sPriceAllCountryPrint',
                'a7f2twbu07sPcsAllCountryPrint', 'a7f2twbu07sPriceAllCountryPrint', 'a7f2cebu10sPcsAllCountryPrint',
                'a7f2cebu10sPriceAllCountryPrint',
                'a8f1fgbu02sPcsAllCountryPrint', 'a8f1fgbu02sPriceAllCountryPrint', 'a8f2fgbu10sPcsAllCountryPrint',
                'a8f2fgbu10sPriceAllCountryPrint',
                'a8f2thbu05sPcsAllCountryPrint', 'a8f2thbu05sPriceAllCountryPrint', 'a8f2debu10sPcsAllCountryPrint',
                'a8f2debu10sPriceAllCountryPrint',
                'a8f2exbu11sPcsAllCountryPrint', 'a8f2exbu11sPriceAllCountryPrint', 'a8f2twbu04sPcsAllCountryPrint',
                'a8f2twbu04sPriceAllCountryPrint',
                'a8f2twbu07sPcsAllCountryPrint', 'a8f2twbu07sPriceAllCountryPrint', 'a8f2cebu10sPcsAllCountryPrint',
                'a8f2cebu10sPriceAllCountryPrint',
                'DC1PcsAllCountryPrint', 'DC1PriceAllCountryPrint', 'DCPPcsAllCountryPrint', 'DCPPriceAllCountryPrint',
                'DCYPcsAllCountryPrint', 'DCYPriceAllCountryPrint', 'DEXPcsAllCountryPrint', 'DEXPriceAllCountryPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAllTotalPrint', 'PriceAfterAllTotalPrint', 'Pcs_AfterAllTotalPrint', 'Price_AfterAllTotalPrint',
                'PoPcsAllTotalPrint', 'PoPriceAllTotalPrint', 'NegPcsAllTotalPrint', 'NegPriceAllTotalPrint', 'BackPcsAllTotalPrint',
                'BackPriceAllTotalPrint', 'PurchasePcsAllTotalPrint', 'PurchasePriceAllTotalPrint',
                'ReciveTranferPcsAllTotalPrint',
                'ReciveTranferPriceAllTotalPrint', 'ReturnItemPcsAllTotalPrint', 'ReturnItemPriceAllTotalPrint',
                'AllInPcsAllTotalPrint', 'AllInPriceAllTotalPrint', 'SendSalePcsAllTotalPrint', 'SendSalePriceAllTotalPrint',
                'ReciveTranOutPcsAllTotalPrint', 'ReciveTranOutPriceAllTotalPrint', 'ReturnStorePcsAllTotalPrint',
                'ReturnStorePriceAllTotalPrint', 'AllOutPcsAllTotalPrint', 'AllOutPriceAllTotalPrint',
                'CalculatePcsAllTotalPrint',
                'CalculatePriceAllTotalPrint', 'NewCalculatePcsAllTotalPrint', 'NewCalculatePriceAllTotalPrint',
                'DiffPcsAllTotalPrint', 'DiffPriceAllTotalPrint', 'NewTotalPcsAllTotalPrint', 'NewTotalPriceAllTotalPrint',
                'NewTotalDiffNavAllTotalPrint', 'NewTotalDiffCalAllTotalPrint',
                'a7f1fgbu02sPcsAllTotalPrint', 'a7f1fgbu02sPriceAllTotalPrint', 'a7f2fgbu10sPcsAllTotalPrint',
                'a7f2fgbu10sPriceAllTotalPrint',
                'a7f2thbu05sPcsAllTotalPrint', 'a7f2thbu05sPriceAllTotalPrint', 'a7f2debu10sPcsAllTotalPrint',
                'a7f2debu10sPriceAllTotalPrint',
                'a7f2exbu11sPcsAllTotalPrint', 'a7f2exbu11sPriceAllTotalPrint', 'a7f2twbu04sPcsAllTotalPrint',
                'a7f2twbu04sPriceAllTotalPrint',
                'a7f2twbu07sPcsAllTotalPrint', 'a7f2twbu07sPriceAllTotalPrint', 'a7f2cebu10sPcsAllTotalPrint',
                'a7f2cebu10sPriceAllTotalPrint',
                'a8f1fgbu02sPcsAllTotalPrint', 'a8f1fgbu02sPriceAllTotalPrint', 'a8f2fgbu10sPcsAllTotalPrint',
                'a8f2fgbu10sPriceAllTotalPrint',
                'a8f2thbu05sPcsAllTotalPrint', 'a8f2thbu05sPriceAllTotalPrint', 'a8f2debu10sPcsAllTotalPrint',
                'a8f2debu10sPriceAllTotalPrint',
                'a8f2exbu11sPcsAllTotalPrint', 'a8f2exbu11sPriceAllTotalPrint', 'a8f2twbu04sPcsAllTotalPrint',
                'a8f2twbu04sPriceAllTotalPrint',
                'a8f2twbu07sPcsAllTotalPrint', 'a8f2twbu07sPriceAllTotalPrint', 'a8f2cebu10sPcsAllTotalPrint',
                'a8f2cebu10sPriceAllTotalPrint',
                'DC1PcsAllTotalPrint', 'DC1PriceAllTotalPrint', 'DCPPcsAllTotalPrint', 'DCPPriceAllTotalPrint',
                'DCYPcsAllTotalPrint', 'DCYPriceAllTotalPrint', 'DEXPcsAllTotalPrint', 'DEXPriceAllTotalPrint',
            ];

            response.forEach((elementData, index) => {
                var element = Data[index];
                $('#' + element).text(elementData);
            });

            response.forEach((elementData, index) => {
                var element = DataPrint[index];
                $('#' + element).text(elementData);
            });
        },
        error: function(error) {
            console.error(error);
        }
    });

    function Print() {
        window.print();
    }
</script>