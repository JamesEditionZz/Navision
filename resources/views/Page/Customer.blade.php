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
                    <tr>
                        <td colspan="2">รวมทั้งหมด</td>
                        <td>
                            <div id="PcsAfterAll_Cus"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAll_Cus"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAll_Cus"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAll_Cus"></div>
                        </td>
                        <td>
                            <div id="PoPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="PoPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NegPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NegPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="BackPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="BackPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAll_Cus"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAll_Cus"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAll_Cus"></div>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="table-print table-print1Cus">
                <tr>
                    <td colspan="20" align="left">สรุปข้อมูล FG ในระบบ NAV</td>
                </tr>
                <tr>
                    <td rowspan="4">เดือน</td>
                    <td rowspan="4">กลุ่ม</td>
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
                    <td rowspan="4">{{ $m_after }} {{ $y_after }}</td>
                    <td>รวม DC1</td>
                    <td>
                        <div id="PcsAfterDC1Print"></div>
                    </td>
                    <td>
                        <div id="PriceAfterDC1Print"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterDC1Print"></div>
                    </td>
                    <td>
                        <div id="Price_AfterDC1Print"></div>
                    </td>
                    <td>
                        <div id="PoPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="PoPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="NegPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="NegPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="BackPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="BackPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="AllInPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="AllInPriceDC1Print"></div>
                    </td>

                </tr>
                <tr>
                    <td>รวม DCY</td>
                    <td>
                        <div id="PcsAfterDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterDCYPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceDCYPrint"></div>
                    </td>

                </tr>
                <tr>
                    <td>รวม DCP</td>
                    <td>
                        <div id="PcsAfterDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterDCPPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceDCPPrint"></div>
                    </td>

                </tr>
                <tr>
                    <td>รวม ตปท.</td>
                    <td>
                        <div id="PcsAfterDEXPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterDEXPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterDEXPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterDEXPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceDEXPrint"></div>
                    </td>

                </tr>
                <tr>
                    <td colspan="2">รวมทั้งหมด</td>
                    <td>
                        <div id="PcsAfterAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="PriceAfterAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="Pcs_AfterAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="Price_AfterAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="PoPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="PoPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NegPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NegPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="BackPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="BackPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="PurchasePriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranferPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnItemPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="AllInPriceAll_CusPrint"></div>
                    </td>
                </tr>
            </table>
            <table class="table-print table-print2Cus">
                <tr>
                    <td colspan="18" style="height: 3vh;"></td>
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
                        <div id="SendSalePcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="DiffPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="DiffPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavDC1Print"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalDC1Print"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavDCYPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavDCPPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavDEXPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalDEXPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="SendSalePcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="SendSalePriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReciveTranOutPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="ReturnStorePriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="AllOutPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="CalculatePriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NewCalculatePriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DiffPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffNavAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="NewTotalDiffCalAll_CusPrint"></div>
                    </td>
                </tr>
            </table>
            <table class="table-print table-print3Cus">
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
                        <div id="a8f1fgbu02sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="DC1PcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="DC1PriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCPPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCPPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCYPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="DCYPriceDC1Print"></div>
                    </td>
                    <td>
                        <div id="DEXPcsDC1Print"></div>
                    </td>
                    <td>
                        <div id="DEXPriceDC1Print"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsDCYPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceDCYPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsDCPPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceDCPPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsDEXPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceDEXPrint"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="a7f1fgbu02sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f1fgbu02sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2fgbu10sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2thbu05sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2debu10sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2exbu11sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu04sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2twbu07sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a7f2cebu10sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f1fgbu02sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2fgbu10sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2thbu05sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2debu10sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2exbu11sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu04sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2twbu07sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="a8f2cebu10sPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DC1PriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DCPPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DCYPriceAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPcsAll_CusPrint"></div>
                    </td>
                    <td>
                        <div id="DEXPriceAll_CusPrint"></div>
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

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAll_Cus', 'PriceAfterAll_Cus', 'Pcs_AfterAll_Cus', 'Price_AfterAll_Cus',
                'PoPcsAll_Cus', 'PoPriceAll_Cus', 'NegPcsAll_Cus', 'NegPriceAll_Cus', 'BackPcsAll_Cus',
                'BackPriceAll_Cus', 'PurchasePcsAll_Cus', 'PurchasePriceAll_Cus', 'ReciveTranferPcsAll_Cus',
                'ReciveTranferPriceAll_Cus', 'ReturnItemPcsAll_Cus', 'ReturnItemPriceAll_Cus',
                'AllInPcsAll_Cus', 'AllInPriceAll_Cus', 'SendSalePcsAll_Cus', 'SendSalePriceAll_Cus',
                'ReciveTranOutPcsAll_Cus', 'ReciveTranOutPriceAll_Cus', 'ReturnStorePcsAll_Cus',
                'ReturnStorePriceAll_Cus', 'AllOutPcsAll_Cus', 'AllOutPriceAll_Cus', 'CalculatePcsAll_Cus',
                'CalculatePriceAll_Cus', 'NewCalculatePcsAll_Cus', 'NewCalculatePriceAll_Cus',
                'DiffPcsAll_Cus', 'DiffPriceAll_Cus', 'NewTotalPcsAll_Cus', 'NewTotalPriceAll_Cus',
                'NewTotalDiffNavAll_Cus', 'NewTotalDiffCalAll_Cus',
                'a7f1fgbu02sPcsAll_Cus', 'a7f1fgbu02sPriceAll_Cus', 'a7f2fgbu10sPcsAll_Cus',
                'a7f2fgbu10sPriceAll_Cus',
                'a7f2thbu05sPcsAll_Cus', 'a7f2thbu05sPriceAll_Cus', 'a7f2debu10sPcsAll_Cus',
                'a7f2debu10sPriceAll_Cus',
                'a7f2exbu11sPcsAll_Cus', 'a7f2exbu11sPriceAll_Cus', 'a7f2twbu04sPcsAll_Cus',
                'a7f2twbu04sPriceAll_Cus',
                'a7f2twbu07sPcsAll_Cus', 'a7f2twbu07sPriceAll_Cus', 'a7f2cebu10sPcsAll_Cus',
                'a7f2cebu10sPriceAll_Cus',
                'a8f1fgbu02sPcsAll_Cus', 'a8f1fgbu02sPriceAll_Cus', 'a8f2fgbu10sPcsAll_Cus',
                'a8f2fgbu10sPriceAll_Cus',
                'a8f2thbu05sPcsAll_Cus', 'a8f2thbu05sPriceAll_Cus', 'a8f2debu10sPcsAll_Cus',
                'a8f2debu10sPriceAll_Cus',
                'a8f2exbu11sPcsAll_Cus', 'a8f2exbu11sPriceAll_Cus', 'a8f2twbu04sPcsAll_Cus',
                'a8f2twbu04sPriceAll_Cus',
                'a8f2twbu07sPcsAll_Cus', 'a8f2twbu07sPriceAll_Cus', 'a8f2cebu10sPcsAll_Cus',
                'a8f2cebu10sPriceAll_Cus',
                'DC1PcsAll_Cus', 'DC1PriceAll_Cus', 'DCPPcsAll_Cus', 'DCPPriceAll_Cus',
                'DCYPcsAll_Cus', 'DCYPriceAll_Cus', 'DEXPcsAll_Cus', 'DEXPriceAll_Cus',
            ];

            ////////////////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////

            var DataPrint = [
                'PcsAfterDC1Print', 'PriceAfterDC1Print', 'Pcs_AfterDC1Print', 'Price_AfterDC1Print',
                'PoPcsDC1Print', 'PoPriceDC1Print', 'NegPcsDC1Print', 'NegPriceDC1Print', 'BackPcsDC1Print',
                'BackPriceDC1Print', 'PurchasePcsDC1Print', 'PurchasePriceDC1Print', 'ReciveTranferPcsDC1Print',
                'ReciveTranferPriceDC1Print', 'ReturnItemPcsDC1Print', 'ReturnItemPriceDC1Print',
                'AllInPcsDC1Print', 'AllInPriceDC1Print', 'SendSalePcsDC1Print', 'SendSalePriceDC1Print',
                'ReciveTranOutPcsDC1Print', 'ReciveTranOutPriceDC1Print', 'ReturnStorePcsDC1Print',
                'ReturnStorePriceDC1Print', 'AllOutPcsDC1Print', 'AllOutPriceDC1Print', 'CalculatePcsDC1Print',
                'CalculatePriceDC1Print', 'NewCalculatePcsDC1Print', 'NewCalculatePriceDC1Print',
                'DiffPcsDC1Print', 'DiffPriceDC1Print', 'NewTotalPcsDC1Print', 'NewTotalPriceDC1Print',
                'NewTotalDiffNavDC1Print', 'NewTotalDiffCalDC1Print',
                'a7f1fgbu02sPcsDC1Print', 'a7f1fgbu02sPriceDC1Print', 'a7f2fgbu10sPcsDC1Print', 'a7f2fgbu10sPriceDC1Print',
                'a7f2thbu05sPcsDC1Print', 'a7f2thbu05sPriceDC1Print', 'a7f2debu10sPcsDC1Print', 'a7f2debu10sPriceDC1Print',
                'a7f2exbu11sPcsDC1Print', 'a7f2exbu11sPriceDC1Print', 'a7f2twbu04sPcsDC1Print', 'a7f2twbu04sPriceDC1Print',
                'a7f2twbu07sPcsDC1Print', 'a7f2twbu07sPriceDC1Print', 'a7f2cebu10sPcsDC1Print', 'a7f2cebu10sPriceDC1Print',
                'a8f1fgbu02sPcsDC1Print', 'a8f1fgbu02sPriceDC1Print', 'a8f2fgbu10sPcsDC1Print', 'a8f2fgbu10sPriceDC1Print',
                'a8f2thbu05sPcsDC1Print', 'a8f2thbu05sPriceDC1Print', 'a8f2debu10sPcsDC1Print', 'a8f2debu10sPriceDC1Print',
                'a8f2exbu11sPcsDC1Print', 'a8f2exbu11sPriceDC1Print', 'a8f2twbu04sPcsDC1Print', 'a8f2twbu04sPriceDC1Print',
                'a8f2twbu07sPcsDC1Print', 'a8f2twbu07sPriceDC1Print', 'a8f2cebu10sPcsDC1Print', 'a8f2cebu10sPriceDC1Print',
                'DC1PcsDC1Print', 'DC1PriceDC1Print', 'DCPPcsDC1Print', 'DCPPriceDC1Print',
                'DCYPcsDC1Print', 'DCYPriceDC1Print', 'DEXPcsDC1Print', 'DEXPriceDC1Print',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterDCYPrint', 'PriceAfterDCYPrint', 'Pcs_AfterDCYPrint', 'Price_AfterDCYPrint',
                'PoPcsDCYPrint', 'PoPriceDCYPrint', 'NegPcsDCYPrint', 'NegPriceDCYPrint', 'BackPcsDCYPrint',
                'BackPriceDCYPrint', 'PurchasePcsDCYPrint', 'PurchasePriceDCYPrint', 'ReciveTranferPcsDCYPrint',
                'ReciveTranferPriceDCYPrint', 'ReturnItemPcsDCYPrint', 'ReturnItemPriceDCYPrint',
                'AllInPcsDCYPrint', 'AllInPriceDCYPrint', 'SendSalePcsDCYPrint', 'SendSalePriceDCYPrint',
                'ReciveTranOutPcsDCYPrint', 'ReciveTranOutPriceDCYPrint', 'ReturnStorePcsDCYPrint',
                'ReturnStorePriceDCYPrint', 'AllOutPcsDCYPrint', 'AllOutPriceDCYPrint', 'CalculatePcsDCYPrint',
                'CalculatePriceDCYPrint', 'NewCalculatePcsDCYPrint', 'NewCalculatePriceDCYPrint',
                'DiffPcsDCYPrint', 'DiffPriceDCYPrint', 'NewTotalPcsDCYPrint', 'NewTotalPriceDCYPrint',
                'NewTotalDiffNavDCYPrint', 'NewTotalDiffCalDCYPrint',
                'a7f1fgbu02sPcsDCYPrint', 'a7f1fgbu02sPriceDCYPrint', 'a7f2fgbu10sPcsDCYPrint', 'a7f2fgbu10sPriceDCYPrint',
                'a7f2thbu05sPcsDCYPrint', 'a7f2thbu05sPriceDCYPrint', 'a7f2debu10sPcsDCYPrint', 'a7f2debu10sPriceDCYPrint',
                'a7f2exbu11sPcsDCYPrint', 'a7f2exbu11sPriceDCYPrint', 'a7f2twbu04sPcsDCYPrint', 'a7f2twbu04sPriceDCYPrint',
                'a7f2twbu07sPcsDCYPrint', 'a7f2twbu07sPriceDCYPrint', 'a7f2cebu10sPcsDCYPrint', 'a7f2cebu10sPriceDCYPrint',
                'a8f1fgbu02sPcsDCYPrint', 'a8f1fgbu02sPriceDCYPrint', 'a8f2fgbu10sPcsDCYPrint', 'a8f2fgbu10sPriceDCYPrint',
                'a8f2thbu05sPcsDCYPrint', 'a8f2thbu05sPriceDCYPrint', 'a8f2debu10sPcsDCYPrint', 'a8f2debu10sPriceDCYPrint',
                'a8f2exbu11sPcsDCYPrint', 'a8f2exbu11sPriceDCYPrint', 'a8f2twbu04sPcsDCYPrint', 'a8f2twbu04sPriceDCYPrint',
                'a8f2twbu07sPcsDCYPrint', 'a8f2twbu07sPriceDCYPrint', 'a8f2cebu10sPcsDCYPrint', 'a8f2cebu10sPriceDCYPrint',
                'DC1PcsDCYPrint', 'DC1PriceDCYPrint', 'DCPPcsDCYPrint', 'DCPPriceDCYPrint',
                'DCYPcsDCYPrint', 'DCYPriceDCYPrint', 'DEXPcsDCYPrint', 'DEXPriceDCYPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterDCPPrint', 'PriceAfterDCPPrint', 'Pcs_AfterDCPPrint', 'Price_AfterDCPPrint',
                'PoPcsDCPPrint', 'PoPriceDCPPrint', 'NegPcsDCPPrint', 'NegPriceDCPPrint', 'BackPcsDCPPrint',
                'BackPriceDCPPrint', 'PurchasePcsDCPPrint', 'PurchasePriceDCPPrint', 'ReciveTranferPcsDCPPrint',
                'ReciveTranferPriceDCPPrint', 'ReturnItemPcsDCPPrint', 'ReturnItemPriceDCPPrint',
                'AllInPcsDCPPrint', 'AllInPriceDCPPrint', 'SendSalePcsDCPPrint', 'SendSalePriceDCPPrint',
                'ReciveTranOutPcsDCPPrint', 'ReciveTranOutPriceDCPPrint', 'ReturnStorePcsDCPPrint',
                'ReturnStorePriceDCPPrint', 'AllOutPcsDCPPrint', 'AllOutPriceDCPPrint', 'CalculatePcsDCPPrint',
                'CalculatePriceDCPPrint', 'NewCalculatePcsDCPPrint', 'NewCalculatePriceDCPPrint',
                'DiffPcsDCPPrint', 'DiffPriceDCPPrint', 'NewTotalPcsDCPPrint', 'NewTotalPriceDCPPrint',
                'NewTotalDiffNavDCPPrint', 'NewTotalDiffCalDCPPrint',
                'a7f1fgbu02sPcsDCPPrint', 'a7f1fgbu02sPriceDCPPrint', 'a7f2fgbu10sPcsDCPPrint', 'a7f2fgbu10sPriceDCPPrint',
                'a7f2thbu05sPcsDCPPrint', 'a7f2thbu05sPriceDCPPrint', 'a7f2debu10sPcsDCPPrint', 'a7f2debu10sPriceDCPPrint',
                'a7f2exbu11sPcsDCPPrint', 'a7f2exbu11sPriceDCPPrint', 'a7f2twbu04sPcsDCPPrint', 'a7f2twbu04sPriceDCPPrint',
                'a7f2twbu07sPcsDCPPrint', 'a7f2twbu07sPriceDCPPrint', 'a7f2cebu10sPcsDCPPrint', 'a7f2cebu10sPriceDCPPrint',
                'a8f1fgbu02sPcsDCPPrint', 'a8f1fgbu02sPriceDCPPrint', 'a8f2fgbu10sPcsDCPPrint', 'a8f2fgbu10sPriceDCPPrint',
                'a8f2thbu05sPcsDCPPrint', 'a8f2thbu05sPriceDCPPrint', 'a8f2debu10sPcsDCPPrint', 'a8f2debu10sPriceDCPPrint',
                'a8f2exbu11sPcsDCPPrint', 'a8f2exbu11sPriceDCPPrint', 'a8f2twbu04sPcsDCPPrint', 'a8f2twbu04sPriceDCPPrint',
                'a8f2twbu07sPcsDCPPrint', 'a8f2twbu07sPriceDCPPrint', 'a8f2cebu10sPcsDCPPrint', 'a8f2cebu10sPriceDCPPrint',
                'DC1PcsDCPPrint', 'DC1PriceDCPPrint', 'DCPPcsDCPPrint', 'DCPPriceDCPPrint',
                'DCYPcsDCPPrint', 'DCYPriceDCPPrint', 'DEXPcsDCPPrint', 'DEXPriceDCPPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterDEXPrint', 'PriceAfterDEXPrint', 'Pcs_AfterDEXPrint', 'Price_AfterDEXPrint',
                'PoPcsDEXPrint', 'PoPriceDEXPrint', 'NegPcsDEXPrint', 'NegPriceDEXPrint', 'BackPcsDEXPrint',
                'BackPriceDEXPrint', 'PurchasePcsDEXPrint', 'PurchasePriceDEXPrint', 'ReciveTranferPcsDEXPrint',
                'ReciveTranferPriceDEXPrint', 'ReturnItemPcsDEXPrint', 'ReturnItemPriceDEXPrint',
                'AllInPcsDEXPrint', 'AllInPriceDEXPrint', 'SendSalePcsDEXPrint', 'SendSalePriceDEXPrint',
                'ReciveTranOutPcsDEXPrint', 'ReciveTranOutPriceDEXPrint', 'ReturnStorePcsDEXPrint',
                'ReturnStorePriceDEXPrint', 'AllOutPcsDEXPrint', 'AllOutPriceDEXPrint', 'CalculatePcsDEXPrint',
                'CalculatePriceDEXPrint', 'NewCalculatePcsDEXPrint', 'NewCalculatePriceDEXPrint',
                'DiffPcsDEXPrint', 'DiffPriceDEXPrint', 'NewTotalPcsDEXPrint', 'NewTotalPriceDEXPrint',
                'NewTotalDiffNavDEXPrint', 'NewTotalDiffCalDEXPrint',
                'a7f1fgbu02sPcsDEXPrint', 'a7f1fgbu02sPriceDEXPrint', 'a7f2fgbu10sPcsDEXPrint', 'a7f2fgbu10sPriceDEXPrint',
                'a7f2thbu05sPcsDEXPrint', 'a7f2thbu05sPriceDEXPrint', 'a7f2debu10sPcsDEXPrint', 'a7f2debu10sPriceDEXPrint',
                'a7f2exbu11sPcsDEXPrint', 'a7f2exbu11sPriceDEXPrint', 'a7f2twbu04sPcsDEXPrint', 'a7f2twbu04sPriceDEXPrint',
                'a7f2twbu07sPcsDEXPrint', 'a7f2twbu07sPriceDEXPrint', 'a7f2cebu10sPcsDEXPrint', 'a7f2cebu10sPriceDEXPrint',
                'a8f1fgbu02sPcsDEXPrint', 'a8f1fgbu02sPriceDEXPrint', 'a8f2fgbu10sPcsDEXPrint', 'a8f2fgbu10sPriceDEXPrint',
                'a8f2thbu05sPcsDEXPrint', 'a8f2thbu05sPriceDEXPrint', 'a8f2debu10sPcsDEXPrint', 'a8f2debu10sPriceDEXPrint',
                'a8f2exbu11sPcsDEXPrint', 'a8f2exbu11sPriceDEXPrint', 'a8f2twbu04sPcsDEXPrint', 'a8f2twbu04sPriceDEXPrint',
                'a8f2twbu07sPcsDEXPrint', 'a8f2twbu07sPriceDEXPrint', 'a8f2cebu10sPcsDEXPrint', 'a8f2cebu10sPriceDEXPrint',
                'DC1PcsDEXPrint', 'DC1PriceDEXPrint', 'DCPPcsDEXPrint', 'DCPPriceDEXPrint',
                'DCYPcsDEXPrint', 'DCYPriceDEXPrint', 'DEXPcsDEXPrint', 'DEXPriceDEXPrint',

                //////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////

                'PcsAfterAll_CusPrint', 'PriceAfterAll_CusPrint', 'Pcs_AfterAll_CusPrint', 'Price_AfterAll_CusPrint',
                'PoPcsAll_CusPrint', 'PoPriceAll_CusPrint', 'NegPcsAll_CusPrint', 'NegPriceAll_CusPrint', 'BackPcsAll_CusPrint',
                'BackPriceAll_CusPrint', 'PurchasePcsAll_CusPrint', 'PurchasePriceAll_CusPrint', 'ReciveTranferPcsAll_CusPrint',
                'ReciveTranferPriceAll_CusPrint', 'ReturnItemPcsAll_CusPrint', 'ReturnItemPriceAll_CusPrint',
                'AllInPcsAll_CusPrint', 'AllInPriceAll_CusPrint', 'SendSalePcsAll_CusPrint', 'SendSalePriceAll_CusPrint',
                'ReciveTranOutPcsAll_CusPrint', 'ReciveTranOutPriceAll_CusPrint', 'ReturnStorePcsAll_CusPrint',
                'ReturnStorePriceAll_CusPrint', 'AllOutPcsAll_CusPrint', 'AllOutPriceAll_CusPrint', 'CalculatePcsAll_CusPrint',
                'CalculatePriceAll_CusPrint', 'NewCalculatePcsAll_CusPrint', 'NewCalculatePriceAll_CusPrint',
                'DiffPcsAll_CusPrint', 'DiffPriceAll_CusPrint', 'NewTotalPcsAll_CusPrint', 'NewTotalPriceAll_CusPrint',
                'NewTotalDiffNavAll_CusPrint', 'NewTotalDiffCalAll_CusPrint',
                'a7f1fgbu02sPcsAll_CusPrint', 'a7f1fgbu02sPriceAll_CusPrint', 'a7f2fgbu10sPcsAll_CusPrint',
                'a7f2fgbu10sPriceAll_CusPrint',
                'a7f2thbu05sPcsAll_CusPrint', 'a7f2thbu05sPriceAll_CusPrint', 'a7f2debu10sPcsAll_CusPrint',
                'a7f2debu10sPriceAll_CusPrint',
                'a7f2exbu11sPcsAll_CusPrint', 'a7f2exbu11sPriceAll_CusPrint', 'a7f2twbu04sPcsAll_CusPrint',
                'a7f2twbu04sPriceAll_CusPrint',
                'a7f2twbu07sPcsAll_CusPrint', 'a7f2twbu07sPriceAll_CusPrint', 'a7f2cebu10sPcsAll_CusPrint',
                'a7f2cebu10sPriceAll_CusPrint',
                'a8f1fgbu02sPcsAll_CusPrint', 'a8f1fgbu02sPriceAll_CusPrint', 'a8f2fgbu10sPcsAll_CusPrint',
                'a8f2fgbu10sPriceAll_CusPrint',
                'a8f2thbu05sPcsAll_CusPrint', 'a8f2thbu05sPriceAll_CusPrint', 'a8f2debu10sPcsAll_CusPrint',
                'a8f2debu10sPriceAll_CusPrint',
                'a8f2exbu11sPcsAll_CusPrint', 'a8f2exbu11sPriceAll_CusPrint', 'a8f2twbu04sPcsAll_CusPrint',
                'a8f2twbu04sPriceAll_CusPrint',
                'a8f2twbu07sPcsAll_CusPrint', 'a8f2twbu07sPriceAll_CusPrint', 'a8f2cebu10sPcsAll_CusPrint',
                'a8f2cebu10sPriceAll_CusPrint',
                'DC1PcsAll_CusPrint', 'DC1PriceAll_CusPrint', 'DCPPcsAll_CusPrint', 'DCPPriceAll_CusPrint',
                'DCYPcsAll_CusPrint', 'DCYPriceAll_CusPrint', 'DEXPcsAll_CusPrint', 'DEXPriceAll_CusPrint',
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