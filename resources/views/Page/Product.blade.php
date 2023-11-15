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
            'PoPcsNTCountry', 'PoPriceNTCountry', 'NegPcsNTCountry', 'NegPriceNTCountry', 'BackPcsNTCountry',
            'BackPriceNTCountry', 'PurchasePcsNTCountry', 'PurchasePriceNTCountry', 'ReciveTranferPcsNTCountry',
            'ReciveTranferPriceNTCountry', 'ReturnItemPcsNTCountry', 'ReturnItemPriceNTCountry',
            'AllInPcsNTCountry', 'AllInPriceNTCountry', 'SendSalePcsNTCountry', 'SendSalePriceNTCountry',
            'ReciveTranOutPcsNTCountry', 'ReciveTranOutPriceNTCountry', 'ReturnStorePcsNTCountry',
            'ReturnStorePriceNTCountry', 'AllOutPcsNTCountry', 'AllOutPriceNTCountry', 'CalculatePcsNTCountry',
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
            'PoPcsMTCountry', 'PoPriceMTCountry', 'NegPcsMTCountry', 'NegPriceMTCountry', 'BackPcsMTCountry',
            'BackPriceMTCountry', 'PurchasePcsMTCountry', 'PurchasePriceMTCountry', 'ReciveTranferPcsMTCountry',
            'ReciveTranferPriceMTCountry', 'ReturnItemPcsMTCountry', 'ReturnItemPriceMTCountry',
            'AllInPcsMTCountry', 'AllInPriceMTCountry', 'SendSalePcsMTCountry', 'SendSalePriceMTCountry',
            'ReciveTranOutPcsMTCountry', 'ReciveTranOutPriceMTCountry', 'ReturnStorePcsMTCountry',
            'ReturnStorePriceMTCountry', 'AllOutPcsMTCountry', 'AllOutPriceMTCountry', 'CalculatePcsMTCountry',
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
            'PoPcsTWCountry', 'PoPriceTWCountry', 'NegPcsTWCountry', 'NegPriceTWCountry', 'BackPcsTWCountry',
            'BackPriceTWCountry', 'PurchasePcsTWCountry', 'PurchasePriceTWCountry', 'ReciveTranferPcsTWCountry',
            'ReciveTranferPriceTWCountry', 'ReturnItemPcsTWCountry', 'ReturnItemPriceTWCountry',
            'AllInPcsTWCountry', 'AllInPriceTWCountry', 'SendSalePcsTWCountry', 'SendSalePriceTWCountry',
            'ReciveTranOutPcsTWCountry', 'ReciveTranOutPriceTWCountry', 'ReturnStorePcsTWCountry',
            'ReturnStorePriceTWCountry', 'AllOutPcsTWCountry', 'AllOutPriceTWCountry', 'CalculatePcsTWCountry',
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
            'PoPcsLNCountry', 'PoPriceLNCountry', 'NegPcsLNCountry', 'NegPriceLNCountry', 'BackPcsLNCountry',
            'BackPriceLNCountry', 'PurchasePcsLNCountry', 'PurchasePriceLNCountry', 'ReciveTranferPcsLNCountry',
            'ReciveTranferPriceLNCountry', 'ReturnItemPcsLNCountry', 'ReturnItemPriceLNCountry',
            'AllInPcsLNCountry', 'AllInPriceLNCountry', 'SendSalePcsLNCountry', 'SendSalePriceLNCountry',
            'ReciveTranOutPcsLNCountry', 'ReciveTranOutPriceLNCountry', 'ReturnStorePcsLNCountry',
            'ReturnStorePriceLNCountry', 'AllOutPcsLNCountry', 'AllOutPriceLNCountry', 'CalculatePcsLNCountry',
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

            'PcsAfterSNTCountry', 'PriceAfterSNTCountry', 'Pcs_AfterSNTCountry', 'Price_AfterSNTCountry',
            'PoPcsSNTCountry', 'PoPriceSNTCountry', 'NegPcsSNTCountry', 'NegPriceSNTCountry', 'BackPcsSNTCountry',
            'BackPriceSNTCountry', 'PurchasePcsSNTCountry', 'PurchasePriceSNTCountry', 'ReciveTranferPcsSNTCountry',
            'ReciveTranferPriceSNTCountry', 'ReturnItemPcsSNTCountry', 'ReturnItemPriceSNTCountry',
            'AllInPcsSNTCountry', 'AllInPriceSNTCountry', 'SendSalePcsSNTCountry', 'SendSalePriceSNTCountry',
            'ReciveTranOutPcsSNTCountry', 'ReciveTranOutPriceSNTCountry', 'ReturnStorePcsSNTCountry',
            'ReturnStorePriceSNTCountry', 'AllOutPcsSNTCountry', 'AllOutPriceSNTCountry', 'CalculatePcsSNTCountry',
            'CalculatePriceSNTCountry', 'NewCalculatePcsSNTCountry', 'NewCalculatePriceSNTCountry',
            'DiffPcsSNTCountry', 'DiffPriceSNTCountry', 'NewTotalPcsSNTCountry', 'NewTotalPriceSNTCountry',
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

            'PcsAfterAllCountry', 'PriceAfterAllCountry', 'Pcs_AfterAllCountry', 'Price_AfterAllCountry',
            'PoPcsAllCountry', 'PoPriceAllCountry', 'NegPcsAllCountry', 'NegPriceAllCountry', 'BackPcsAllCountry',
            'BackPriceAllCountry', 'PurchasePcsAllCountry', 'PurchasePriceAllCountry', 'ReciveTranferPcsAllCountry',
            'ReciveTranferPriceAllCountry', 'ReturnItemPcsAllCountry', 'ReturnItemPriceAllCountry',
            'AllInPcsAllCountry', 'AllInPriceAllCountry', 'SendSalePcsAllCountry', 'SendSalePriceAllCountry',
            'ReciveTranOutPcsAllCountry', 'ReciveTranOutPriceAllCountry', 'ReturnStorePcsAllCountry',
            'ReturnStorePriceAllCountry', 'AllOutPcsAllCountry', 'AllOutPriceAllCountry', 'CalculatePcsAllCountry',
            'CalculatePriceAllCountry', 'NewCalculatePcsAllCountry', 'NewCalculatePriceAllCountry',
            'DiffPcsAllCountry', 'DiffPriceAllCountry', 'NewTotalPcsAllCountry', 'NewTotalPriceAllCountry',
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
            'BackPriceAllTotal', 'PurchasePcsAllTotal', 'PurchasePriceAllTotal', 'ReciveTranferPcsAllTotal',
            'ReciveTranferPriceAllTotal', 'ReturnItemPcsAllTotal', 'ReturnItemPriceAllTotal',
            'AllInPcsAllTotal', 'AllInPriceAllTotal', 'SendSalePcsAllTotal', 'SendSalePriceAllTotal',
            'ReciveTranOutPcsAllTotal', 'ReciveTranOutPriceAllTotal', 'ReturnStorePcsAllTotal',
            'ReturnStorePriceAllTotal', 'AllOutPcsAllTotal', 'AllOutPriceAllTotal', 'CalculatePcsAllTotal',
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

        response.forEach((elementData, index) => {
            var element = Data[index];
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