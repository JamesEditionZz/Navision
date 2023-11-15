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
            <div class="mt-1 mx-1 active">
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
            <h2 align="center">แยกลูกค้า</h2><button class="btn-Print" onclick="Print()">Print</button>
            <div class="table-block">
                <table class="table-tabledata" id="table-data">
                    <thead>
                        <tr>
                            <td rowspan="4">เดือน</td>
                            <td rowspan="4">กลุ่ม</td>
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
                        <td rowspan="5">{{ $m_after }} {{ $y_after }}</td>
                    </tr>
                    <tr>
                        <td>รวม DC 1</td>
                        <td>
                            <div id="PcsAfterDC1"></div>
                        </td>
                        <td>
                            <div id="PriceAfterDC1"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterDC1"></div>
                        </td>
                        <td>
                            <div id="Price_AfterDC1"></div>
                        </td>
                        <td>
                            <div id="PoPcsDC1"></div>
                        </td>
                        <td>
                            <div id="PoPriceDC1"></div>
                        </td>
                        <td>
                            <div id="NegPcsDC1"></div>
                        </td>
                        <td>
                            <div id="NegPriceDC1"></div>
                        </td>
                        <td>
                            <div id="BackPcsDC1"></div>
                        </td>
                        <td>
                            <div id="BackPriceDC1"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsDC1"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceDC1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsDC1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceDC1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsDC1"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceDC1"></div>
                        </td>
                        <td>
                            <div id="AllInPcsDC1"></div>
                        </td>
                        <td>
                            <div id="AllInPriceDC1"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsDC1"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceDC1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsDC1"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceDC1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsDC1"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceDC1"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsDC1"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceDC1"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsDC1"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceDC1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsDC1"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceDC1"></div>
                        </td>
                        <td>
                            <div id="DiffPcsDC1"></div>
                        </td>
                        <td>
                            <div id="DiffPriceDC1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsDC1"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceDC1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavDC1"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalDC1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsDC1"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceDC1"></div>
                        </td>
                        <td>
                            <div id="DC1PcsDC1"></div>
                        </td>
                        <td>
                            <div id="DC1PriceDC1"></div>
                        </td>
                        <td>
                            <div id="DCPPcsDC1"></div>
                        </td>
                        <td>
                            <div id="DCPPriceDC1"></div>
                        </td>
                        <td>
                            <div id="DCYPcsDC1"></div>
                        </td>
                        <td>
                            <div id="DCYPriceDC1"></div>
                        </td>
                        <td>
                            <div id="DEXPcsDC1"></div>
                        </td>
                        <td>
                            <div id="DEXPriceDC1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>รวม DCY</td>
                        <td>
                            <div id="PcsAfterDCY"></div>
                        </td>
                        <td>
                            <div id="PriceAfterDCY"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterDCY"></div>
                        </td>
                        <td>
                            <div id="Price_AfterDCY"></div>
                        </td>
                        <td>
                            <div id="PoPcsDCY"></div>
                        </td>
                        <td>
                            <div id="PoPriceDCY"></div>
                        </td>
                        <td>
                            <div id="NegPcsDCY"></div>
                        </td>
                        <td>
                            <div id="NegPriceDCY"></div>
                        </td>
                        <td>
                            <div id="BackPcsDCY"></div>
                        </td>
                        <td>
                            <div id="BackPriceDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsDCY"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPcsDCY"></div>
                        </td>
                        <td>
                            <div id="AllInPriceDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsDCY"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsDCY"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsDCY"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsDCY"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsDCY"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsDCY"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPcsDCY"></div>
                        </td>
                        <td>
                            <div id="DiffPriceDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavDCY"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsDCY"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PcsDCY"></div>
                        </td>
                        <td>
                            <div id="DC1PriceDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPcsDCY"></div>
                        </td>
                        <td>
                            <div id="DCPPriceDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPcsDCY"></div>
                        </td>
                        <td>
                            <div id="DCYPriceDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPcsDCY"></div>
                        </td>
                        <td>
                            <div id="DEXPriceDCY"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>รวม DCP</td>
                        <td>
                            <div id="PcsAfterDCP"></div>
                        </td>
                        <td>
                            <div id="PriceAfterDCP"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterDCP"></div>
                        </td>
                        <td>
                            <div id="Price_AfterDCP"></div>
                        </td>
                        <td>
                            <div id="PoPcsDCP"></div>
                        </td>
                        <td>
                            <div id="PoPriceDCP"></div>
                        </td>
                        <td>
                            <div id="NegPcsDCP"></div>
                        </td>
                        <td>
                            <div id="NegPriceDCP"></div>
                        </td>
                        <td>
                            <div id="BackPcsDCP"></div>
                        </td>
                        <td>
                            <div id="BackPriceDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsDCP"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPcsDCP"></div>
                        </td>
                        <td>
                            <div id="AllInPriceDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsDCP"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsDCP"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsDCP"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsDCP"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsDCP"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsDCP"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPcsDCP"></div>
                        </td>
                        <td>
                            <div id="DiffPriceDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavDCP"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsDCP"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PcsDCP"></div>
                        </td>
                        <td>
                            <div id="DC1PriceDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPcsDCP"></div>
                        </td>
                        <td>
                            <div id="DCPPriceDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPcsDCP"></div>
                        </td>
                        <td>
                            <div id="DCYPriceDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPcsDCP"></div>
                        </td>
                        <td>
                            <div id="DEXPriceDCP"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>รวม ตปท.</td>
                        <td>
                            <div id="PcsAfterDEX"></div>
                        </td>
                        <td>
                            <div id="PriceAfterDEX"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterDEX"></div>
                        </td>
                        <td>
                            <div id="Price_AfterDEX"></div>
                        </td>
                        <td>
                            <div id="PoPcsDEX"></div>
                        </td>
                        <td>
                            <div id="PoPriceDEX"></div>
                        </td>
                        <td>
                            <div id="NegPcsDEX"></div>
                        </td>
                        <td>
                            <div id="NegPriceDEX"></div>
                        </td>
                        <td>
                            <div id="BackPcsDEX"></div>
                        </td>
                        <td>
                            <div id="BackPriceDEX"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsDEX"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceDEX"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsDEX"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceDEX"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsDEX"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceDEX"></div>
                        </td>
                        <td>
                            <div id="AllInPcsDEX"></div>
                        </td>
                        <td>
                            <div id="AllInPriceDEX"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsDEX"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceDEX"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsDEX"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceDEX"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsDEX"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceDEX"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsDEX"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceDEX"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsDEX"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceDEX"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsDEX"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceDEX"></div>
                        </td>
                        <td>
                            <div id="DiffPcsDEX"></div>
                        </td>
                        <td>
                            <div id="DiffPriceDEX"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsDEX"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceDEX"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavDEX"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalDEX"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsDEX"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceDEX"></div>
                        </td>
                        <td>
                            <div id="DC1PcsDEX"></div>
                        </td>
                        <td>
                            <div id="DC1PriceDEX"></div>
                        </td>
                        <td>
                            <div id="DCPPcsDEX"></div>
                        </td>
                        <td>
                            <div id="DCPPriceDEX"></div>
                        </td>
                        <td>
                            <div id="DCYPcsDEX"></div>
                        </td>
                        <td>
                            <div id="DCYPriceDEX"></div>
                        </td>
                        <td>
                            <div id="DEXPcsDEX"></div>
                        </td>
                        <td>
                            <div id="DEXPriceDEX"></div>
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
    url: "{{ Route('DataCustomer') }}",
    success: function(response) {

        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "none";

        var Data = [
            'PcsAfterDC1', 'PriceAfterDC1', 'Pcs_AfterDC1', 'Price_AfterDC1',
            'PoPcsDC1', 'PoPriceDC1', 'NegPcsDC1', 'NegPriceDC1', 'BackPcsDC1',
            'BackPriceDC1', 'PurchasePcsDC1', 'PurchasePriceDC1', 'ReciveTranferPcsDC1',
            'ReciveTranferPriceDC1', 'ReturnItemPcsDC1', 'ReturnItemPriceDC1',
            'AllInPcsDC1', 'AllInPriceDC1', 'SendSalePcsDC1', 'SendSalePriceDC1',
            'ReciveTranOutPcsDC1', 'ReciveTranOutPriceDC1', 'ReturnStorePcsDC1',
            'ReturnStorePriceDC1', 'AllOutPcsDC1', 'AllOutPriceDC1', 'CalculatePcsDC1',
            'CalculatePriceDC1', 'NewCalculatePcsDC1', 'NewCalculatePriceDC1',
            'DiffPcsDC1', 'DiffPriceDC1', 'NewTotalPcsDC1', 'NewTotalPriceDC1',
            'NewTotalDiffNavDC1', 'NewTotalDiffCalDC1',
            'a7f1fgbu02sPcsDC1', 'a7f1fgbu02sPriceDC1', 'a7f2fgbu10sPcsDC1', 'a7f2fgbu10sPriceDC1',
            'a7f2thbu05sPcsDC1', 'a7f2thbu05sPriceDC1', 'a7f2debu10sPcsDC1', 'a7f2debu10sPriceDC1',
            'a7f2exbu11sPcsDC1', 'a7f2exbu11sPriceDC1', 'a7f2twbu04sPcsDC1', 'a7f2twbu04sPriceDC1',
            'a7f2twbu07sPcsDC1', 'a7f2twbu07sPriceDC1', 'a7f2cebu10sPcsDC1', 'a7f2cebu10sPriceDC1',
            'a8f1fgbu02sPcsDC1', 'a8f1fgbu02sPriceDC1', 'a8f2fgbu10sPcsDC1', 'a8f2fgbu10sPriceDC1',
            'a8f2thbu05sPcsDC1', 'a8f2thbu05sPriceDC1', 'a8f2debu10sPcsDC1', 'a8f2debu10sPriceDC1',
            'a8f2exbu11sPcsDC1', 'a8f2exbu11sPriceDC1', 'a8f2twbu04sPcsDC1', 'a8f2twbu04sPriceDC1',
            'a8f2twbu07sPcsDC1', 'a8f2twbu07sPriceDC1', 'a8f2cebu10sPcsDC1', 'a8f2cebu10sPriceDC1',
            'DC1PcsDC1', 'DC1PriceDC1', 'DCPPcsDC1', 'DCPPriceDC1',
            'DCYPcsDC1', 'DCYPriceDC1', 'DEXPcsDC1', 'DEXPriceDC1',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterDCY', 'PriceAfterDCY', 'Pcs_AfterDCY', 'Price_AfterDCY',
            'PoPcsDCY', 'PoPriceDCY', 'NegPcsDCY', 'NegPriceDCY', 'BackPcsDCY',
            'BackPriceDCY', 'PurchasePcsDCY', 'PurchasePriceDCY', 'ReciveTranferPcsDCY',
            'ReciveTranferPriceDCY', 'ReturnItemPcsDCY', 'ReturnItemPriceDCY',
            'AllInPcsDCY', 'AllInPriceDCY', 'SendSalePcsDCY', 'SendSalePriceDCY',
            'ReciveTranOutPcsDCY', 'ReciveTranOutPriceDCY', 'ReturnStorePcsDCY',
            'ReturnStorePriceDCY', 'AllOutPcsDCY', 'AllOutPriceDCY', 'CalculatePcsDCY',
            'CalculatePriceDCY', 'NewCalculatePcsDCY', 'NewCalculatePriceDCY',
            'DiffPcsDCY', 'DiffPriceDCY', 'NewTotalPcsDCY', 'NewTotalPriceDCY',
            'NewTotalDiffNavDCY', 'NewTotalDiffCalDCY',
            'a7f1fgbu02sPcsDCY', 'a7f1fgbu02sPriceDCY', 'a7f2fgbu10sPcsDCY', 'a7f2fgbu10sPriceDCY',
            'a7f2thbu05sPcsDCY', 'a7f2thbu05sPriceDCY', 'a7f2debu10sPcsDCY', 'a7f2debu10sPriceDCY',
            'a7f2exbu11sPcsDCY', 'a7f2exbu11sPriceDCY', 'a7f2twbu04sPcsDCY', 'a7f2twbu04sPriceDCY',
            'a7f2twbu07sPcsDCY', 'a7f2twbu07sPriceDCY', 'a7f2cebu10sPcsDCY', 'a7f2cebu10sPriceDCY',
            'a8f1fgbu02sPcsDCY', 'a8f1fgbu02sPriceDCY', 'a8f2fgbu10sPcsDCY', 'a8f2fgbu10sPriceDCY',
            'a8f2thbu05sPcsDCY', 'a8f2thbu05sPriceDCY', 'a8f2debu10sPcsDCY', 'a8f2debu10sPriceDCY',
            'a8f2exbu11sPcsDCY', 'a8f2exbu11sPriceDCY', 'a8f2twbu04sPcsDCY', 'a8f2twbu04sPriceDCY',
            'a8f2twbu07sPcsDCY', 'a8f2twbu07sPriceDCY', 'a8f2cebu10sPcsDCY', 'a8f2cebu10sPriceDCY',
            'DC1PcsDCY', 'DC1PriceDCY', 'DCPPcsDCY', 'DCPPriceDCY',
            'DCYPcsDCY', 'DCYPriceDCY', 'DEXPcsDCY', 'DEXPriceDCY',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterDCP', 'PriceAfterDCP', 'Pcs_AfterDCP', 'Price_AfterDCP',
            'PoPcsDCP', 'PoPriceDCP', 'NegPcsDCP', 'NegPriceDCP', 'BackPcsDCP',
            'BackPriceDCP', 'PurchasePcsDCP', 'PurchasePriceDCP', 'ReciveTranferPcsDCP',
            'ReciveTranferPriceDCP', 'ReturnItemPcsDCP', 'ReturnItemPriceDCP',
            'AllInPcsDCP', 'AllInPriceDCP', 'SendSalePcsDCP', 'SendSalePriceDCP',
            'ReciveTranOutPcsDCP', 'ReciveTranOutPriceDCP', 'ReturnStorePcsDCP',
            'ReturnStorePriceDCP', 'AllOutPcsDCP', 'AllOutPriceDCP', 'CalculatePcsDCP',
            'CalculatePriceDCP', 'NewCalculatePcsDCP', 'NewCalculatePriceDCP',
            'DiffPcsDCP', 'DiffPriceDCP', 'NewTotalPcsDCP', 'NewTotalPriceDCP',
            'NewTotalDiffNavDCP', 'NewTotalDiffCalDCP',
            'a7f1fgbu02sPcsDCP', 'a7f1fgbu02sPriceDCP', 'a7f2fgbu10sPcsDCP', 'a7f2fgbu10sPriceDCP',
            'a7f2thbu05sPcsDCP', 'a7f2thbu05sPriceDCP', 'a7f2debu10sPcsDCP', 'a7f2debu10sPriceDCP',
            'a7f2exbu11sPcsDCP', 'a7f2exbu11sPriceDCP', 'a7f2twbu04sPcsDCP', 'a7f2twbu04sPriceDCP',
            'a7f2twbu07sPcsDCP', 'a7f2twbu07sPriceDCP', 'a7f2cebu10sPcsDCP', 'a7f2cebu10sPriceDCP',
            'a8f1fgbu02sPcsDCP', 'a8f1fgbu02sPriceDCP', 'a8f2fgbu10sPcsDCP', 'a8f2fgbu10sPriceDCP',
            'a8f2thbu05sPcsDCP', 'a8f2thbu05sPriceDCP', 'a8f2debu10sPcsDCP', 'a8f2debu10sPriceDCP',
            'a8f2exbu11sPcsDCP', 'a8f2exbu11sPriceDCP', 'a8f2twbu04sPcsDCP', 'a8f2twbu04sPriceDCP',
            'a8f2twbu07sPcsDCP', 'a8f2twbu07sPriceDCP', 'a8f2cebu10sPcsDCP', 'a8f2cebu10sPriceDCP',
            'DC1PcsDCP', 'DC1PriceDCP', 'DCPPcsDCP', 'DCPPriceDCP',
            'DCYPcsDCP', 'DCYPriceDCP', 'DEXPcsDCP', 'DEXPriceDCP',

            //////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////

            'PcsAfterDEX', 'PriceAfterDEX', 'Pcs_AfterDEX', 'Price_AfterDEX',
            'PoPcsDEX', 'PoPriceDEX', 'NegPcsDEX', 'NegPriceDEX', 'BackPcsDEX',
            'BackPriceDEX', 'PurchasePcsDEX', 'PurchasePriceDEX', 'ReciveTranferPcsDEX',
            'ReciveTranferPriceDEX', 'ReturnItemPcsDEX', 'ReturnItemPriceDEX',
            'AllInPcsDEX', 'AllInPriceDEX', 'SendSalePcsDEX', 'SendSalePriceDEX',
            'ReciveTranOutPcsDEX', 'ReciveTranOutPriceDEX', 'ReturnStorePcsDEX',
            'ReturnStorePriceDEX', 'AllOutPcsDEX', 'AllOutPriceDEX', 'CalculatePcsDEX',
            'CalculatePriceDEX', 'NewCalculatePcsDEX', 'NewCalculatePriceDEX',
            'DiffPcsDEX', 'DiffPriceDEX', 'NewTotalPcsDEX', 'NewTotalPriceDEX',
            'NewTotalDiffNavDEX', 'NewTotalDiffCalDEX',
            'a7f1fgbu02sPcsDEX', 'a7f1fgbu02sPriceDEX', 'a7f2fgbu10sPcsDEX', 'a7f2fgbu10sPriceDEX',
            'a7f2thbu05sPcsDEX', 'a7f2thbu05sPriceDEX', 'a7f2debu10sPcsDEX', 'a7f2debu10sPriceDEX',
            'a7f2exbu11sPcsDEX', 'a7f2exbu11sPriceDEX', 'a7f2twbu04sPcsDEX', 'a7f2twbu04sPriceDEX',
            'a7f2twbu07sPcsDEX', 'a7f2twbu07sPriceDEX', 'a7f2cebu10sPcsDEX', 'a7f2cebu10sPriceDEX',
            'a8f1fgbu02sPcsDEX', 'a8f1fgbu02sPriceDEX', 'a8f2fgbu10sPcsDEX', 'a8f2fgbu10sPriceDEX',
            'a8f2thbu05sPcsDEX', 'a8f2thbu05sPriceDEX', 'a8f2debu10sPcsDEX', 'a8f2debu10sPriceDEX',
            'a8f2exbu11sPcsDEX', 'a8f2exbu11sPriceDEX', 'a8f2twbu04sPcsDEX', 'a8f2twbu04sPriceDEX',
            'a8f2twbu07sPcsDEX', 'a8f2twbu07sPriceDEX', 'a8f2cebu10sPcsDEX', 'a8f2cebu10sPriceDEX',
            'DC1PcsDEX', 'DC1PriceDEX', 'DCPPcsDEX', 'DCPPriceDEX',
            'DCYPcsDEX', 'DCYPriceDEX', 'DEXPcsDEX', 'DEXPriceDEX',
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