<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <div class="mt-1 mx-1 active">
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
            <div class="navbar" id="navbar">
                <button class="btn-menu" id="AS">AS</button>
                <button class="btn-menu" id="FN">FN-SFN</button>
                <button class="btn-menu" id="LN">LN-SLN</button>
                <button class="btn-menu" id="MT">MT-SMT</button>
                <button class="btn-menu" id="NT">NT</button>
                <button class="btn-menu" id="SNT">SNT</button>
                <button class="btn-menu" id="TW">TW-STW</button>
            </div>
            <div>
                <div class="mg-1">
                    <input type="text" class="input-search" placeholder="Item No เช่น NT-000001" id="searchItemNo">
                    <button class="btn-search" onclick="SearchItemNo()">ค้นหา</button>
                </div>
                <div class="table-block">
                    <table class="table-tabledata" id="table-data">
                        <thead>
                            <tr>
                                <td colspan="45"></td>
                                <td colspan="16">รับโอน</td>
                                <td colspan="16">โอนออก</td>
                                <td colspan="8">ส่งขาย</td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td>ราคาเฉลี่ย</td>
                                <td colspan="2">ยกมา</td>
                                <td colspan="2">ยกมาใหม่</td>
                                <td colspan="4"></td>
                                <td colspan="2">คงเหลือ</td>
                                <td colspan="8">รับเข้า</td>
                                <td colspan="8">จ่ายออก</td>
                                <td colspan="2">คงเหลือ คำนวณ</td>
                                <td>ราคาเฉลี่ย</td>
                                <td colspan="2">คงเหลือ NAV</td>
                                <td colspan="4"></td>
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
                                <td>ลูกค้า</td>
                                <td>PI</td>
                                <td>Item</td>
                                <td>ประเภท</td>
                                <td>No.</td>
                                <td>{{ $d_before }}/{{ $m_before }}/{{ $y_before }}</td>
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
                                <td>{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                                <td colspan="2">{{ $d_after }}/{{ $m_after }}/{{ $y_after }}</td>
                                <td>Cost per Unit</td>
                                <td>Unit Cost(Decha)</td>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>บ/ผ</td>
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
                                <td>บาท/ผืน</td>
                                <td>pcs</td>
                                <td>มูลค่า</td>
                                <td></td>
                                <td></td>
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
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div id="Page" class="Number-Page" align="center">
                    <button class="btn-NextPage" id="prev-arrow">
                        <div class="prev-arrow"></div>
                    </button>
                    <button class="btn-PrevPage" id="next-arrow">
                        <div class="next-arrow"></div>
                    </button>
                </div>
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
var searchItemNo = document.getElementById('searchItemNo');
var btnNextPage = document.querySelector(".btn-PrevPage");
var btnPrevPage = document.querySelector(".btn-NextPage");

searchItemNo.addEventListener('keydown', function(event) {
    if (event.key == "Enter") {
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
        var ItemNo = searchItemNo.value;
        $.ajax({
            type: "POST",
            url: "{{ Route('searchItemNo') }}",
            data: {
                ItemNo: ItemNo,
            },
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            success: function(response) {
                btnNextPage.style.display = "none"
                btnPrevPage.style.display = "none"
                updateTable(response);
            },
            error: function(error) {
                var modeloading = document.querySelector(".loading-data");
                modeloading.style.display = "none";
            }
        });

    }
});

function SearchItemNo() {
    var ItemNo = document.getElementById('searchItemNo').value;
    $.ajax({
        type: "POST",
        url: "{{ Route('searchItemNo') }}",
        data: {
            ItemNo: ItemNo,
        },
        headers: {
            "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
        },
        success: function(response) {
            btnNextPage.style.display = "none"
            btnPrevPage.style.display = "none"
            updateTable(response);
        },
        error: function(error) {
            var modeloading = document.querySelector(".loading-data");
            modeloading.style.display = "none";
        }
    });
}

$(document).ready(function() {
    // Declare Data outside of the event listeners
    var Data;
    var Page = 0

    $('#AS').click(function() {
        Data = "AS";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#FN').click(function() {
        Data = "FN";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#LN').click(function() {
        Data = "LN";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#MT').click(function() {
        Data = "MT";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#NT').click(function() {
        Data = "NT";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#SNT').click(function() {
        Data = "SNT";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#TW').click(function() {
        Data = "TW";
        Page = 0
        btnNextPage.style.display = "inline"
        sendData(Data, Page);
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    });

    $('#prev-arrow').click(function() {
        if (Page === 1000) {
            Page = 0
            var modeloading = document.querySelector(".loading-data");
            modeloading.style.display = "block";
            btnPrevPage.style.display = "none";
        } else {
            Page -= 1000;
            var modeloading = document.querySelector(".loading-data");
            modeloading.style.display = "block";
        }
        sendData(Data, Page);
    })

    $('#next-arrow').click(function() {
        Page += 1000;
        sendData(Data, Page);
        btnNextPage.style.display = "inline"
        btnPrevPage.style.display = "inline"
        var modeloading = document.querySelector(".loading-data");
        modeloading.style.display = "block";
    })

    function sendData(Data, Page) {
        $.ajax({
            type: "POST",
            url: "{{ route('DataAs') }}",
            data: {
                Data: Data,
                Page: Page,
            },
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            success: function(response) {
                updateTable(response)
            },
            error: function(error) {
                var modeloading = document.querySelector(".loading-data");
                modeloading.style.display = "none";
            }
        });
    }
});

function updateTable(response) {

    var modeloading = document.querySelector(".loading-data");
    modeloading.style.display = "none";

    const table = document.getElementById('table-data');
    const tbody = table.querySelector('tbody');

    tbody.innerHTML = '';

    response.forEach(element => {
        var Customer = element[0];
        var PI = element[1];
        var Item = element[2];
        var Category = element[3];
        var No = element[4];
        var PriceAvg = element[5];
        var pcsafter = element[6];
        var priceafter = element[7];
        var Po = element[8];
        var PoPrice = element[9];
        var Neg = element[10];
        var NegPrice = element[11];
        var backpcs = element[12];
        var backprice = element[13];
        var purchasepcs = element[14];
        var purchaseprice = element[15];
        var retranferpcs = element[16];
        var retranferprice = element[17];
        var ItemReuturnpcs = element[18];
        var ItemReuturnPrice = element[19];
        var TotalPcsIn = element[20];
        var TotalPriceIn = element[21];
        var Sale_SendPcs = element[22];
        var Sale_SendPrice = element[23];
        var TranferOutPcs = element[24];
        var TranferOutPrice = element[25];
        var ItemReturnPcs = element[26];
        var ItemReturnPrice = element[27];
        var TotalOutPcs = element[28];
        var TotalOutPrice = element[29];
        var remainingPcs = element[30];
        var remainingPrice = element[31];
        var NewPriceAvg = element[32];
        var RemainNAVPcs = element[33];
        var RemainNAVPrice = element[34];
        var CostPerUnit = element[35];
        var UnitCost = element[36];
        var DeffiPcs = element[37];
        var DeffiPrice = element[38]
        var NewTotalPcs = element[39];
        var NewTotalPrice = element[40];
        var NewTotalDefNav = element[41];
        var NewTotalDefCal = element[42];

        var F1FGBU02Pcs = element[43];
        var F1FGBU02Price = element[44];
        var F2FGBU10Pcs = element[45];
        var F2FGBU10Price = element[46];
        var F2THBU05Pcs = element[47];
        var F2THBU05Price = element[48];
        var F2DEBU10Pcs = element[49];
        var F2DEBU10Price = element[50];
        var F2EXBU11Pcs = element[51];
        var F2EXBU11Price = element[52];
        var F2TWBU04Pcs = element[53];
        var F2TWBU04Price = element[54];
        var F2TWBU07Pcs = element[55];
        var F2TWBU07Price = element[56];
        var F2CEBU10Pcs = element[57];
        var F2CEBU10Price = element[58];

        var A8F1FGBU02Pcs = element[59];
        var A8F1FGBU02Price = element[60];
        var A8F2FGBU10Pcs = element[61];
        var A8F2FGBU10Price = element[62];
        var A8F2THBU05Pcs = element[63];
        var A8F2THBU05Price = element[64];
        var A8F2DEBU10Pcs = element[65];
        var A8F2DEBU10Price = element[66];
        var A8F2EXBU11Pcs = element[67];
        var A8F2EXBU11Price = element[68];
        var A8F2TWBU04Pcs = element[69];
        var A8F2TWBU04Price = element[70];
        var A8F2TWBU07Pcs = element[71];
        var A8F2TWBU07Price = element[72];
        var A8F2CEBU10Pcs = element[73];
        var A8F2CEBU10Price = element[74];

        var DC1Pcs = element[75];
        var DC1Price = element[76];
        var DCYPcs = element[77];
        var DCYPrice = element[78];
        var DCPPcs = element[79];
        var DCPPrice = element[80];
        var DEXPcs = element[81];
        var DEXPrice = element[82];

        const row = document.createElement('tr');

        const CustomerCell = document.createElement('td');
        CustomerCell.textContent = Customer

        const PICell = document.createElement('td');
        PICell.textContent = PI

        const ItemCell = document.createElement('td');
        ItemCell.textContent = Item

        const CategoryCell = document.createElement('td');
        CategoryCell.textContent = Category;

        const NoCell = document.createElement('td');
        NoCell.textContent = No;

        const PriceAvgCell = document.createElement('td');
        PriceAvgCell.textContent = PriceAvg;

        const pcsafterCell = document.createElement('td');
        pcsafterCell.textContent = pcsafter;

        const priceafterCell = document.createElement('td');
        priceafterCell.textContent = priceafter;

        const NewpcsAfterCell = document.createElement('td');
        NewpcsAfterCell.textContent = pcsafter;

        const NewpriceAfterCell = document.createElement('td');
        NewpriceAfterCell.textContent = priceafter;

        const PoCell = document.createElement('td');
        PoCell.textContent = Po;

        const PoPriceCell = document.createElement('td');
        PoPriceCell.textContent = PoPrice;

        const NegCell = document.createElement('td');
        NegCell.textContent = Neg;

        const NegPriceCell = document.createElement('td');
        NegPriceCell.textContent = NegPrice;

        const backpcsCell = document.createElement('td');
        backpcsCell.textContent = backpcs;

        const backpriceCell = document.createElement('td');
        backpriceCell.textContent = backprice;

        const purchasepcsCell = document.createElement('td');
        purchasepcsCell.textContent = purchasepcs;

        const purchasepriceCell = document.createElement('td');
        purchasepriceCell.textContent = purchaseprice;

        const retranferpcsCell = document.createElement('td');
        retranferpcsCell.textContent = retranferpcs;

        const retranferpriceCell = document.createElement('td');
        retranferpriceCell.textContent = retranferprice;

        const ItemReuturnpcsCell = document.createElement('td');
        ItemReuturnpcsCell.textContent = ItemReuturnpcs;

        const ItemReuturnPriceCell = document.createElement('td');
        ItemReuturnPriceCell.textContent = ItemReuturnPrice;

        const TotalPcsInCell = document.createElement('td');
        TotalPcsInCell.textContent = TotalPcsIn;

        const TotalPriceInCell = document.createElement('td');
        TotalPriceInCell.textContent = TotalPriceIn;

        const Sale_SendPcsCell = document.createElement('td');
        Sale_SendPcsCell.textContent = Sale_SendPcs;

        const Sale_SendPriceCell = document.createElement('td');
        Sale_SendPriceCell.textContent = Sale_SendPrice;

        const TranferOutPcsCell = document.createElement('td');
        TranferOutPcsCell.textContent = TranferOutPcs;

        const TranferOutPriceCell = document.createElement('td');
        TranferOutPriceCell.textContent = TranferOutPrice;

        const ItemReturnPcsCell = document.createElement('td');
        ItemReturnPcsCell.textContent = ItemReturnPcs;

        const ItemReturnPriceCell = document.createElement('td');
        ItemReturnPriceCell.textContent = ItemReturnPrice;

        const TotalOutPcsCell = document.createElement('td');
        TotalOutPcsCell.textContent = TotalOutPcs;

        const TotalOutPriceCell = document.createElement('td');
        TotalOutPriceCell.textContent = TotalOutPrice;

        const remainingPcsCell = document.createElement('td');
        remainingPcsCell.textContent = remainingPcs;

        const remainingPriceCell = document.createElement('td');
        remainingPriceCell.textContent = remainingPrice;

        const NewPriceAvgCell = document.createElement('td');
        NewPriceAvgCell.textContent = NewPriceAvg;

        const RemainNAVPcsCell = document.createElement('td');
        RemainNAVPcsCell.textContent = RemainNAVPcs;

        const RemainNAVPriceCell = document.createElement('td');
        RemainNAVPriceCell.textContent = RemainNAVPrice;

        const CostPerUnitCell = document.createElement('td');
        CostPerUnitCell.textContent = CostPerUnit;

        const UnitCostCell = document.createElement('td');
        UnitCostCell.textContent = UnitCost;

        const DeffiPcsCell = document.createElement('td');
        DeffiPcsCell.textContent = DeffiPcs;

        const DeffiPriceCell = document.createElement('td');
        DeffiPriceCell.textContent = DeffiPrice;

        const NewTotalPcsCell = document.createElement('td');
        NewTotalPcsCell.textContent = NewTotalPcs;

        const NewTotalPriceCell = document.createElement('td');
        NewTotalPriceCell.textContent = NewTotalPrice;

        const NewTotalDefNavCell = document.createElement('td');
        NewTotalDefNavCell.textContent = NewTotalDefNav;

        const NewTotalDefCalCell = document.createElement('td');
        NewTotalDefCalCell.textContent = NewTotalDefCal;

        const F1FGBU02PcsCell = document.createElement('td');
        F1FGBU02PcsCell.textContent = F1FGBU02Pcs;

        const F1FGBU02PriceCell = document.createElement('td');
        F1FGBU02PriceCell.textContent = F1FGBU02Price;

        const F2FGBU10PcsCell = document.createElement('td');
        F2FGBU10PcsCell.textContent = F2FGBU10Pcs;

        const F2FGBU10PriceCell = document.createElement('td');
        F2FGBU10PriceCell.textContent = F2FGBU10Price;

        const F2THBU05PcsCell = document.createElement('td');
        F2THBU05PcsCell.textContent = F2THBU05Pcs;

        const F2THBU05PriceCell = document.createElement('td');
        F2THBU05PriceCell.textContent = F2THBU05Price;

        const F2DEBU10PcsCell = document.createElement('td');
        F2DEBU10PcsCell.textContent = F2DEBU10Pcs;

        const F2DEBU10PriceCell = document.createElement('td');
        F2DEBU10PriceCell.textContent = F2DEBU10Price;

        const F2EXBU11PcsCell = document.createElement('td');
        F2EXBU11PcsCell.textContent = F2EXBU11Pcs;

        const F2EXBU11PriceCell = document.createElement('td');
        F2EXBU11PriceCell.textContent = F2EXBU11Price;

        const F2TWBU04PcsCell = document.createElement('td');
        F2TWBU04PcsCell.textContent = F2TWBU04Pcs;

        const F2TWBU04PriceCell = document.createElement('td');
        F2TWBU04PriceCell.textContent = F2TWBU04Price;

        const F2TWBU07PcsCell = document.createElement('td');
        F2TWBU07PcsCell.textContent = F2TWBU07Pcs;

        const F2TWBU07PriceCell = document.createElement('td');
        F2TWBU07PriceCell.textContent = F2TWBU07Price;

        const F2CEBU10PcsCell = document.createElement('td');
        F2CEBU10PcsCell.textContent = F2CEBU10Pcs;

        const F2CEBU10PriceCell = document.createElement('td');
        F2CEBU10PriceCell.textContent = F2CEBU10Price;

        //////////////////////////////////////////////////////

        const A8F1FGBU02PcsCell = document.createElement('td');
        A8F1FGBU02PcsCell.textContent = A8F1FGBU02Pcs;

        const A8F1FGBU02PriceCell = document.createElement('td');
        A8F1FGBU02PriceCell.textContent = A8F1FGBU02Price;

        const A8F2FGBU10PcsCell = document.createElement('td');
        A8F2FGBU10PcsCell.textContent = A8F2FGBU10Pcs;

        const A8F2FGBU10PriceCell = document.createElement('td');
        A8F2FGBU10PriceCell.textContent = A8F2FGBU10Price;

        const A8F2THBU05PcsCell = document.createElement('td');
        A8F2THBU05PcsCell.textContent = A8F2THBU05Pcs;

        const A8F2THBU05PriceCell = document.createElement('td');
        A8F2THBU05PriceCell.textContent = A8F2THBU05Price;

        const A8F2DEBU10PcsCell = document.createElement('td');
        A8F2DEBU10PcsCell.textContent = A8F2DEBU10Pcs;

        const A8F2DEBU10PriceCell = document.createElement('td');
        A8F2DEBU10PriceCell.textContent = A8F2DEBU10Price;

        const A8F2EXBU11PcsCell = document.createElement('td');
        A8F2EXBU11PcsCell.textContent = A8F2EXBU11Pcs;

        const A8F2EXBU11PriceCell = document.createElement('td');
        A8F2EXBU11PriceCell.textContent = A8F2EXBU11Price;

        const A8F2TWBU04PcsCell = document.createElement('td');
        A8F2TWBU04PcsCell.textContent = A8F2TWBU04Pcs;

        const A8F2TWBU04PriceCell = document.createElement('td');
        A8F2TWBU04PriceCell.textContent = A8F2TWBU04Price;

        const A8F2TWBU07PcsCell = document.createElement('td');
        A8F2TWBU07PcsCell.textContent = A8F2TWBU07Pcs;

        const A8F2TWBU07PriceCell = document.createElement('td');
        A8F2TWBU07PriceCell.textContent = A8F2TWBU07Price;

        const A8F2CEBU10PcsCell = document.createElement('td');
        A8F2CEBU10PcsCell.textContent = A8F2CEBU10Pcs;

        const A8F2CEBU10PriceCell = document.createElement('td');
        A8F2CEBU10PriceCell.textContent = A8F2CEBU10Price;

        const DC1PcsCell = document.createElement('td');
        DC1PcsCell.textContent = DC1Pcs;

        const DC1PriceCell = document.createElement('td');
        DC1PriceCell.textContent = DC1Price;

        const DCYPcsCell = document.createElement('td');
        DCYPcsCell.textContent = DCYPcs;

        const DCYPriceCell = document.createElement('td');
        DCYPriceCell.textContent = DCYPrice;

        const DCPPcsCell = document.createElement('td');
        DCPPcsCell.textContent = DCPPcs;

        const DCPPriceCell = document.createElement('td');
        DCPPriceCell.textContent = DCPPrice;

        const DEXPcsCell = document.createElement('td');
        DEXPcsCell.textContent = DEXPcs;

        const DEXPriceCell = document.createElement('td');
        DEXPriceCell.textContent = DEXPrice;

        row.appendChild(CustomerCell);
        row.appendChild(PICell);
        row.appendChild(ItemCell);
        row.appendChild(CategoryCell);
        row.appendChild(NoCell);
        row.appendChild(PriceAvgCell);
        row.appendChild(pcsafterCell);
        row.appendChild(priceafterCell);
        row.appendChild(NewpcsAfterCell);
        row.appendChild(NewpriceAfterCell);
        row.appendChild(PoCell);
        row.appendChild(PoPriceCell);
        row.appendChild(NegCell);
        row.appendChild(NegPriceCell);
        row.appendChild(backpcsCell);
        row.appendChild(backpriceCell);
        row.appendChild(purchasepcsCell);
        row.appendChild(purchasepriceCell);
        row.appendChild(retranferpcsCell);
        row.appendChild(retranferpriceCell);
        row.appendChild(ItemReuturnpcsCell);
        row.appendChild(ItemReuturnPriceCell);
        row.appendChild(TotalPcsInCell);
        row.appendChild(TotalPriceInCell);
        row.appendChild(Sale_SendPcsCell);
        row.appendChild(Sale_SendPriceCell);
        row.appendChild(TranferOutPcsCell);
        row.appendChild(TranferOutPriceCell);
        row.appendChild(ItemReturnPcsCell);
        row.appendChild(ItemReturnPriceCell);
        row.appendChild(TotalOutPcsCell);
        row.appendChild(TotalOutPriceCell);
        row.appendChild(remainingPcsCell);
        row.appendChild(remainingPriceCell);
        row.appendChild(NewPriceAvgCell);
        row.appendChild(RemainNAVPcsCell);
        row.appendChild(RemainNAVPriceCell);
        row.appendChild(CostPerUnitCell);
        row.appendChild(UnitCostCell);
        row.appendChild(DeffiPcsCell);
        row.appendChild(DeffiPriceCell);
        row.appendChild(NewTotalPcsCell);
        row.appendChild(NewTotalPriceCell);
        row.appendChild(NewTotalDefNavCell);
        row.appendChild(NewTotalDefCalCell);
        row.appendChild(F1FGBU02PcsCell);
        row.appendChild(F1FGBU02PriceCell);
        row.appendChild(F2FGBU10PcsCell);
        row.appendChild(F2FGBU10PriceCell);
        row.appendChild(F2THBU05PcsCell);
        row.appendChild(F2THBU05PriceCell);
        row.appendChild(F2DEBU10PcsCell);
        row.appendChild(F2DEBU10PriceCell);
        row.appendChild(F2EXBU11PcsCell);
        row.appendChild(F2EXBU11PriceCell);
        row.appendChild(F2TWBU04PcsCell);
        row.appendChild(F2TWBU04PriceCell);
        row.appendChild(F2TWBU07PcsCell);
        row.appendChild(F2TWBU07PriceCell);
        row.appendChild(F2CEBU10PcsCell);
        row.appendChild(F2CEBU10PriceCell);
        row.appendChild(A8F1FGBU02PcsCell);
        row.appendChild(A8F1FGBU02PriceCell);
        row.appendChild(A8F2FGBU10PcsCell);
        row.appendChild(A8F2FGBU10PriceCell);
        row.appendChild(A8F2THBU05PcsCell);
        row.appendChild(A8F2THBU05PriceCell);
        row.appendChild(A8F2DEBU10PcsCell);
        row.appendChild(A8F2DEBU10PriceCell);
        row.appendChild(A8F2EXBU11PcsCell);
        row.appendChild(A8F2EXBU11PriceCell);
        row.appendChild(A8F2TWBU04PcsCell);
        row.appendChild(A8F2TWBU04PriceCell);
        row.appendChild(A8F2TWBU07PcsCell);
        row.appendChild(A8F2TWBU07PriceCell);
        row.appendChild(A8F2CEBU10PcsCell);
        row.appendChild(A8F2CEBU10PriceCell);
        row.appendChild(DC1PcsCell);
        row.appendChild(DC1PriceCell);
        row.appendChild(DCYPcsCell);
        row.appendChild(DCYPriceCell);
        row.appendChild(DCPPcsCell);
        row.appendChild(DCPPriceCell);
        row.appendChild(DEXPcsCell);
        row.appendChild(DEXPriceCell);

        tbody.appendChild(row);
    });
}
</script>