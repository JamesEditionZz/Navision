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
        <div class="header">
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
            <h2 align="center">แยกประเภทสินค้า</h2>
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
                            <td colspan="2">ยกมา</td>
                            <td colspan="2">ยกมาใหม่</td>
                            <td colspan="4"></td>
                            <td colspan="2">คงเหลือ</td>
                            <td colspan="8">รับเข้า</td>
                            <td colspan="8">จ่ายออก</td>
                            <td colspan="2">คงเหลือ คำนวณ</td>
                            <td colspan="2">คงเหลือ NAV</td>
                            <td colspan="2"></td>
                            <td colspan="4">คงเหลือ มูลค่าใหม่</td>
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
                            <td colspan="2">{{ $d_before }}/{{ $m_before }}/{{ $y_before }}</td>
                            <td colspan="2">{{ $d_before }}/{{ $m_before }}/{{ $y_before }}</td>
                            <td colspan="2">ปรับเข้า</td>
                            <td colspan="2">ปรับออก</td>
                            <td colspan="2">หลังปรับ</td>
                            <td colspan="2">ซื้อเข้า</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับคืน</td>
                            <td colspan="2">รวม</td>
                            <td colspan="2">ส่งขาย</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">คืนของร้านค้า</td>
                            <td colspan="2">รวม</td>
                            <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                            <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                            <td colspan="2">ผลต่างคำนวน/NAV</td>
                            <td colspan="4">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">รับโอน</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">โอนออก</td>
                            <td colspan="2">ขายออก</td>
                            <td colspan="2">ขายออก</td>
                            <td colspan="2">ขายออก</td>
                            <td colspan="2">ขายออก</td>
                        </tr>
                        <tr>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>ผลต่างNAV</td>
                            <td>ผลต่างคำนวน</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
                            <td>pcs</td>
                            <td>มูลค่า</td>
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
                            <div id="PcsAfterAllProduct"></div>
                        </td>
                        <td>
                            <div id="PriceAfterAllProduct"></div>
                        </td>
                        <td>
                            <div id="Pcs_AfterAllProduct"></div>
                        </td>
                        <td>
                            <div id="Price_AfterAllProduct"></div>
                        </td>
                        <td>
                            <div id="PoPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="PoPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="NegPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="NegPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="BackPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="BackPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="PurchasePcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="PurchasePriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReciveTranferPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReturnItemPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="AllInPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="AllInPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="SendSalePcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="SendSalePriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReciveTranOutPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="ReturnStorePriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="AllOutPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="AllOutPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="CalculatePcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="CalculatePriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="NewCalculatePriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="DiffPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="DiffPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="NewTotalPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="NewTotalPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffNavAllProduct"></div>
                        </td>
                        <td>
                            <div id="NewTotalDiffCalAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f1fgbu02sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2fgbu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2thbu05sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2debu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2exbu11sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu04sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2twbu07sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a7f2cebu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f1fgbu02sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2fgbu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2thbu05sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2debu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2exbu11sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu04sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2twbu07sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="a8f2cebu10sPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="DC1PcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="DC1PriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="DCPPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="DCPPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="DCYPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="DCYPriceAllProduct"></div>
                        </td>
                        <td>
                            <div id="DEXPcsAllProduct"></div>
                        </td>
                        <td>
                            <div id="DEXPriceAllProduct"></div>
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
                    </tr>
                    <tr>
                        <td>SLN เส้นใย</td>
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
                    </tr>
                    <tr>
                        <td>SNT อวนกำ</td>
                    </tr>
                    <tr>
                        <td colspan="2">รวมสินค้าซื้อมา-ขายไป</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม DC 1</td>
                    </tr>
                    <tr>
                        <td rowspan="5">DCY</td>
                    </tr>
                    <tr>
                        <td rowspan="3">สินค้าผลิต</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                    </tr>
                    <tr>
                        <td>สินค้าซื้อมา-ขายไป</td>
                        <td>SNT อวนกำ</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม DCY</td>
                    </tr>
                    <tr>
                        <td rowspan="5">DCP</td>
                    </tr>
                    <tr>
                        <td rowspan="4">สินค้าผลิต</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                    </tr>
                    <tr>
                        <td>LN เส้นใย อวนกำ</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม DCP</td>
                    </tr>
                    <tr>
                        <td rowspan="7">ตปท</td>
                    </tr>
                    <tr>
                        <td rowspan="5">สินค้าผลิต</td>
                    </tr>
                    <tr>
                        <td>NT อวนกำ</td>
                    </tr>
                    <tr>
                        <td>MT อวนรุม</td>
                    </tr>
                    <tr>
                        <td>TW ตีด้าย</td>
                    </tr>
                    <tr>
                        <td>LN เส้นใย</td>
                    </tr>
                    <tr>
                        <td>สินค้าซื้อมา-ขายไป</td>
                        <td>SNT อวนกำ</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวม ตปท.</td>
                    </tr>
                    <tr>
                        <td colspan="3">รวมทั้งหมด</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$.ajax({
    type: "GET",
    url: "{{ Route('DataProduct') }}",
    success: function(response) {

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

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            'PcsAfterAllProduct', 'PriceAfterAllProduct', 'Pcs_AfterAllProduct', 'Price_AfterAllProduct',
            'PoPcsAllProduct', 'PoPriceAllProduct', 'NegPcsAllProduct', 'NegPriceAllProduct', 'BackPcsAllProduct',
            'BackPriceAllProduct', 'PurchasePcsAllProduct', 'PurchasePriceAllProduct', 'ReciveTranferPcsAllProduct',
            'ReciveTranferPriceAllProduct', 'ReturnItemPcsAllProduct', 'ReturnItemPriceAllProduct',
            'AllInPcsAllProduct', 'AllInPriceAllProduct', 'SendSalePcsAllProduct', 'SendSalePriceAllProduct',
            'ReciveTranOutPcsAllProduct', 'ReciveTranOutPriceAllProduct', 'ReturnStorePcsAllProduct',
            'ReturnStorePriceAllProduct', 'AllOutPcsAllProduct', 'AllOutPriceAllProduct', 'CalculatePcsAllProduct',
            'CalculatePriceAllProduct', 'NewCalculatePcsAllProduct', 'NewCalculatePriceAllProduct',
            'DiffPcsAllProduct', 'DiffPriceAllProduct', 'NewTotalPcsAllProduct', 'NewTotalPriceAllProduct',
            'NewTotalDiffNavAllProduct', 'NewTotalDiffCalAllProduct',
            'a7f1fgbu02sPcsAllProduct', 'a7f1fgbu02sPriceAllProduct', 'a7f2fgbu10sPcsAllProduct', 'a7f2fgbu10sPriceAllProduct',
            'a7f2thbu05sPcsAllProduct', 'a7f2thbu05sPriceAllProduct', 'a7f2debu10sPcsAllProduct', 'a7f2debu10sPriceAllProduct',
            'a7f2exbu11sPcsAllProduct', 'a7f2exbu11sPriceAllProduct', 'a7f2twbu04sPcsAllProduct', 'a7f2twbu04sPriceAllProduct',
            'a7f2twbu07sPcsAllProduct', 'a7f2twbu07sPriceAllProduct', 'a7f2cebu10sPcsAllProduct', 'a7f2cebu10sPriceAllProduct',
            'a8f1fgbu02sPcsAllProduct', 'a8f1fgbu02sPriceAllProduct', 'a8f2fgbu10sPcsAllProduct', 'a8f2fgbu10sPriceAllProduct',
            'a8f2thbu05sPcsAllProduct', 'a8f2thbu05sPriceAllProduct', 'a8f2debu10sPcsAllProduct', 'a8f2debu10sPriceAllProduct',
            'a8f2exbu11sPcsAllProduct', 'a8f2exbu11sPriceAllProduct', 'a8f2twbu04sPcsAllProduct', 'a8f2twbu04sPriceAllProduct',
            'a8f2twbu07sPcsAllProduct', 'a8f2twbu07sPriceAllProduct', 'a8f2cebu10sPcsAllProduct', 'a8f2cebu10sPriceAllProduct',
            'DC1PcsAllProduct', 'DC1PriceAllProduct', 'DCPPcsAllProduct', 'DCPPriceAllProduct',
            'DCYPcsAllProduct', 'DCYPriceAllProduct', 'DEXPcsAllProduct', 'DEXPriceAllProduct',

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
        ];

        response.forEach((elementData, index) => {
            var element = Data[index];
            $('#' + element).text(elementData);
        });

        // response.forEach(element => {
        //     $('#PcsAfterNT').text(element[0]);
        //     $('#PriceAfterNT').text(element[1]);
        //     $('#Pcs_AfterNT').text(element[0]);
        //     $('#Price_AfterNT').text(element[1]);
        //     $('#PoPcsNT').text(element[2]);
        //     $('#PoPriceNT').text(element[3]);
        //     $('#NegPcsNT').text(element[4]);
        //     $('#NegPriceNT').text(element[5]);
        //     $('#BackPcsNT').text(element[6]);
        //     $('#BackPriceNT').text(element[7]);
        //     $('#PurchasePcsNT').text(element[8]);
        //     $('#PurchasePriceNT').text(element[9]);
        //     $('#ReciveTranferPcsNT').text(element[10]);
        //     $('#ReciveTranferPriceNT').text(element[11]);
        //     $('#ReturnItemPcsNT').text(element[12]);
        //     $('#ReturnItemPriceNT').text(element[13]);
        //     $('#AllInPcsNT').text(element[14]);
        //     $('#AllInPriceNT').text(element[15]);
        //     $('#SendSalePcsNT').text(element[16]);
        //     $('#SendSalePriceNT').text(element[17]);
        //     $('#ReciveTranOutPcsNT').text(element[18]);
        //     $('#ReciveTranOutPriceNT').text(element[19]);
        //     $('#ReturnStorePcsNT').text(element[20]);
        //     $('#ReturnStorePriceNT').text(element[21]);
        //     $('#AllOutPcsNT').text(element[22]);
        //     $('#AllOutPriceNT').text(element[23]);
        //     $('#CalculatePcsNT').text(element[24]);
        //     $('#CalculatePriceNT').text(element[25]);
        //     $('#NewCalculatePcsNT').text(element[26]);
        //     $('#NewCalculatePriceNT').text(element[27]);
        //     $('#DiffPcsNT').text(element[28]);
        //     $('#DiffPriceNT').text(element[29]);
        //     $('#NewTotalPcsNT').text(element[30]);
        //     $('#NewTotalPriceNT').text(element[31]);
        //     $('#NewTotalDiffNavNT').text(element[32]);
        //     $('#NewTotalDiffCalNT').text(element[33]);
        //     $('#a7f1fgbu02sPcsNT').text(element[34]);
        //     $('#a7f1fgbu02sPriceNT').text(element[35]);
        //     $('#a7f2fgbu10sPcsNT').text(element[36]);
        //     $('#a7f2fgbu10sPriceNT').text(element[37]);
        //     $('#a7f2thbu05sPcsNT').text(element[38]);
        //     $('#a7f2thbu05sPriceNT').text(element[39]);
        //     $('#a7f2debu10sPcsNT').text(element[40]);
        //     $('#a7f2debu10sPriceNT').text(element[41]);
        //     $('#a7f2exbu11sPcsNT').text(element[42]);
        //     $('#a7f2exbu11sPriceNT').text(element[43]);
        //     $('#a7f2twbu04sPcsNT').text(element[44]);
        //     $('#a7f2twbu04sPriceNT').text(element[45]);
        //     $('#a7f2twbu07sPcsNT').text(element[46]);
        //     $('#a7f2twbu07sPriceNT').text(element[47]);
        //     $('#a7f2cebu10sPcsNT').text(element[48]);
        //     $('#a7f2cebu10sPriceNT').text(element[49]);
        //     $('#a8f1fgbu02sPcsNT').text(element[50]);
        //     $('#a8f1fgbu02sPriceNT').text(element[51]);
        //     $('#a8f2fgbu10sPcsNT').text(element[52]);
        //     $('#a8f2fgbu10sPriceNT').text(element[53]);
        //     $('#a8f2thbu05sPcsNT').text(element[54]);
        //     $('#a8f2thbu05sPriceNT').text(element[55]);
        //     $('#a8f2debu10sPcsNT').text(element[56]);
        //     $('#a8f2debu10sPriceNT').text(element[57]);
        //     $('#a8f2exbu11sPcsNT').text(element[58]);
        //     $('#a8f2exbu11sPriceNT').text(element[59]);
        //     $('#a8f2twbu04sPcsNT').text(element[60]);
        //     $('#a8f2twbu04sPriceNT').text(element[61]);
        //     $('#a8f2twbu07sPcsNT').text(element[62]);
        //     $('#a8f2twbu07sPriceNT').text(element[63]);
        //     $('#a8f2cebu10sPcsNT').text(element[64]);
        //     $('#a8f2cebu10sPriceNT').text(element[65]);
        //     $('#DC1PcsNT').text(element[66]);
        //     $('#DC1PriceNT').text(element[67]);
        //     $('#DCPPcsNT').text(element[68]);
        //     $('#DCPPriceNT').text(element[69]);
        //     $('#DCYPcsNT').text(element[70]);
        //     $('#DCYPriceNT').text(element[71]);
        //     $('#DEXPcsNT').text(element[72]);
        //     $('#DEXPriceNT').text(element[73]);

        //     /////////////////////////////////////////////////////////////////////////////////////////////

        //     $('#PcsAfterMT').text(element[74]);
        //     $('#PriceAfterMT').text(element[75]);
        //     $('#Pcs_AfterMT').text(element[74]);
        //     $('#Price_AfterMT').text(element[75]);
        //     $('#PoPcsMT').text(element[76]);
        //     $('#PoPriceMT').text(element[77]);
        //     $('#NegPcsMT').text(element[78]);
        //     $('#NegPriceMT').text(element[79]);
        //     $('#BackPcsMT').text(element[80]);
        //     $('#BackPriceMT').text(element[81]);
        //     $('#PurchasePcsMT').text(element[82]);
        //     $('#PurchasePriceMT').text(element[83]);
        //     $('#ReciveTranferPcsMT').text(element[84]);
        //     $('#ReciveTranferPriceMT').text(element[85]);
        //     $('#ReturnItemPcsMT').text(element[86]);
        //     $('#ReturnItemPriceMT').text(element[87]);
        //     $('#AllInPcsMT').text(element[88]);
        //     $('#AllInPriceMT').text(element[89]);
        //     $('#SendSalePcsMT').text(element[90]);
        //     $('#SendSalePriceMT').text(element[91]);
        //     $('#ReciveTranOutPcsMT').text(element[92]);
        //     $('#ReciveTranOutPriceMT').text(element[93]);
        //     $('#ReturnStorePcsMT').text(element[94]);
        //     $('#ReturnStorePriceMT').text(element[95]);
        //     $('#AllOutPcsMT').text(element[96]);
        //     $('#AllOutPriceMT').text(element[97]);
        //     $('#CalculatePcsMT').text(element[98]);
        //     $('#CalculatePriceMT').text(element[99]);
        //     $('#NewCalculatePcsMT').text(element[100]);
        //     $('#NewCalculatePriceMT').text(element[101]);
        //     $('#DiffPcsMT').text(element[102]);
        //     $('#DiffPriceMT').text(element[103]);
        //     $('#NewTotalPcsMT').text(element[104]);
        //     $('#NewTotalPriceMT').text(element[105]);
        //     $('#NewTotalDiffNavMT').text(element[106]);
        //     $('#NewTotalDiffCalMT').text(element[107]);
        //     $('#a7f1fgbu02sPcsMT').text(element[108]);
        //     $('#a7f1fgbu02sPriceMT').text(element[109]);
        //     $('#a7f2fgbu10sPcsMT').text(element[110]);
        //     $('#a7f2fgbu10sPriceMT').text(element[111]);
        //     $('#a7f2thbu05sPcsMT').text(element[112]);
        //     $('#a7f2thbu05sPriceMT').text(element[113]);
        //     $('#a7f2debu10sPcsMT').text(element[114]);
        //     $('#a7f2debu10sPriceMT').text(element[115]);
        //     $('#a7f2exbu11sPcsMT').text(element[116]);
        //     $('#a7f2exbu11sPriceMT').text(element[117]);
        //     $('#a7f2twbu04sPcsMT').text(element[118]);
        //     $('#a7f2twbu04sPriceMT').text(element[119]);
        //     $('#a7f2twbu07sPcsMT').text(element[120]);
        //     $('#a7f2twbu07sPriceMT').text(element[121]);
        //     $('#a7f2cebu10sPcsMT').text(element[122]);
        //     $('#a7f2cebu10sPriceMT').text(element[123]);
        //     $('#a8f1fgbu02sPcsMT').text(element[124]);
        //     $('#a8f1fgbu02sPriceMT').text(element[125]);
        //     $('#a8f2fgbu10sPcsMT').text(element[126]);
        //     $('#a8f2fgbu10sPriceMT').text(element[127]);
        //     $('#a8f2thbu05sPcsMT').text(element[128]);
        //     $('#a8f2thbu05sPriceMT').text(element[129]);
        //     $('#a8f2debu10sPcsMT').text(element[130]);
        //     $('#a8f2debu10sPriceMT').text(element[131]);
        //     $('#a8f2exbu11sPcsMT').text(element[132]);
        //     $('#a8f2exbu11sPriceMT').text(element[133]);
        //     $('#a8f2twbu04sPcsMT').text(element[134]);
        //     $('#a8f2twbu04sPriceMT').text(element[135]);
        //     $('#a8f2twbu07sPcsMT').text(element[136]);
        //     $('#a8f2twbu07sPriceMT').text(element[137]);
        //     $('#a8f2cebu10sPcsMT').text(element[138]);
        //     $('#a8f2cebu10sPriceMT').text(element[139]);
        //     $('#DC1PcsMT').text(element[140]);
        //     $('#DC1PriceMT').text(element[141]);
        //     $('#DCPPcsMT').text(element[142]);
        //     $('#DCPPriceMT').text(element[143]);
        //     $('#DCYPcsMT').text(element[144]);
        //     $('#DCYPriceMT').text(element[145]);
        //     $('#DEXPcsMT').text(element[146]);
        //     $('#DEXPriceMT').text(element[147]);

        //     /////////////////////////////////////////////////////////////////////////////////////////////
        //     $('#PcsAfterSFN').text(element[0]);
        //     $('#PriceAfterSFN').text(element[1]);
        //     $('#Pcs_AfterSFN').text(element[0]);
        //     $('#Price_AfterSFN').text(element[1]);
        //     $('#PoPcsSFN').text(element[2]);
        //     $('#PoPriceSFN').text(element[3]);
        //     $('#NegPcsSFN').text(element[4]);
        //     $('#NegPriceSFN').text(element[5]);
        //     $('#BackPcsSFN').text(element[6]);
        //     $('#BackPriceSFN').text(element[7]);
        //     $('#PurchasePcsSFN').text(element[8]);
        //     $('#PurchasePriceSFN').text(element[9]);
        //     $('#ReciveTranferPcsSFN').text(element[10]);
        //     $('#ReciveTranferPriceSFN').text(element[11]);
        //     $('#ReturnItemPcsSFN').text(element[12]);
        //     $('#ReturnItemPriceSFN').text(element[13]);
        //     $('#AllInPcsSFN').text(element[14]);
        //     $('#AllInPriceSFN').text(element[15]);
        //     $('#SendSalePcsSFN').text(element[16]);
        //     $('#SendSalePriceSFN').text(element[17]);
        //     $('#ReciveTranOutPcsSFN').text(element[18]);
        //     $('#ReciveTranOutPriceSFN').text(element[19]);
        //     $('#ReturnStorePcsSFN').text(element[20]);
        //     $('#ReturnStorePriceSFN').text(element[21]);
        //     $('#AllOutPcsSFN').text(element[22]);
        //     $('#AllOutPriceSFN').text(element[23]);
        //     $('#CalculatePcsSFN').text(element[24]);
        //     $('#CalculatePriceSFN').text(element[25]);
        //     $('#NewCalculatePcsSFN').text(element[26]);
        //     $('#NewCalculatePriceSFN').text(element[27]);
        //     $('#DiffPcsSFN').text(element[28]);
        //     $('#DiffPriceSFN').text(element[29]);
        //     $('#NewTotalPcsSFN').text(element[30]);
        //     $('#NewTotalPriceSFN').text(element[31]);
        //     $('#NewTotalDiffNavSFN').text(element[32]);
        //     $('#NewTotalDiffCalSFN').text(element[33]);
        //     $('#a7f1fgbu02sPcsSFN').text(element[34]);
        //     $('#a7f1fgbu02sPriceSFN').text(element[35]);
        //     $('#a7f2fgbu10sPcsSFN').text(element[36]);
        //     $('#a7f2fgbu10sPriceSFN').text(element[37]);
        //     $('#a7f2thbu05sPcsSFN').text(element[38]);
        //     $('#a7f2thbu05sPriceSFN').text(element[39]);
        //     $('#a7f2debu10sPcsSFN').text(element[40]);
        //     $('#a7f2debu10sPriceSFN').text(element[41]);
        //     $('#a7f2exbu11sPcsSFN').text(element[42]);
        //     $('#a7f2exbu11sPriceSFN').text(element[43]);
        //     $('#a7f2twbu04sPcsSFN').text(element[44]);
        //     $('#a7f2twbu04sPriceSFN').text(element[45]);
        //     $('#a7f2twbu07sPcsSFN').text(element[46]);
        //     $('#a7f2twbu07sPriceSFN').text(element[47]);
        //     $('#a7f2cebu10sPcsSFN').text(element[48]);
        //     $('#a7f2cebu10sPriceSFN').text(element[49]);
        //     $('#a8f1fgbu02sPcsSFN').text(element[50]);
        //     $('#a8f1fgbu02sPriceSFN').text(element[51]);
        //     $('#a8f2fgbu10sPcsSFN').text(element[52]);
        //     $('#a8f2fgbu10sPriceSFN').text(element[53]);
        //     $('#a8f2thbu05sPcsSFN').text(element[54]);
        //     $('#a8f2thbu05sPriceSFN').text(element[55]);
        //     $('#a8f2debu10sPcsSFN').text(element[56]);
        //     $('#a8f2debu10sPriceSFN').text(element[57]);
        //     $('#a8f2exbu11sPcsSFN').text(element[58]);
        //     $('#a8f2exbu11sPriceSFN').text(element[59]);
        //     $('#a8f2twbu04sPcsSFN').text(element[60]);
        //     $('#a8f2twbu04sPriceSFN').text(element[61]);
        //     $('#a8f2twbu07sPcsSFN').text(element[62]);
        //     $('#a8f2twbu07sPriceSFN').text(element[63]);
        //     $('#a8f2cebu10sPcsSFN').text(element[64]);
        //     $('#a8f2cebu10sPriceSFN').text(element[65]);
        //     $('#DC1PcsSFN').text(element[66]);
        //     $('#DC1PriceSFN').text(element[67]);
        //     $('#DCPPcsSFN').text(element[68]);
        //     $('#DCPPriceSFN').text(element[69]);
        //     $('#DCYPcsSFN').text(element[70]);
        //     $('#DCYPriceSFN').text(element[71]);
        //     $('#DEXPcsSFN').text(element[72]);
        //     $('#DEXPriceSFN').text(element[73]);
        // });
    },
    error: function(error) {
        console.error(error);
    }
});
</script>