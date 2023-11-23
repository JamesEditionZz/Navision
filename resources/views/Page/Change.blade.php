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
                <label for=""><a href="{{ Route('index') }}">Navition</a></label>
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
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('DC1') }}">อวน DC1</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1 active">
                <label for=""><a href="{{ Route('Change') }}">แก้ไขลูกค้า/ประเภท</a></label>
            </div>
            <hr>
            <div class="mt-1 mx-1">
                <label for=""><a href="{{ Route('importfile') }}">Import File</a></label>
            </div>
            <hr>
        </div>
        <div align="center" class="mt-3">
            <div>
                <label for="">ค้นหาออเดอร์</label>
                <form action="{{ Route('SearchItemNo') }}" method="post">
                    @csrf
                    <input type="text" class="input-search" name="ItemNo" placeholder="รหัส NT-000001">
                    <button type="submit" class="btn-search">ค้นหา</button>
                </form>
            </div>
            <div class="mt-2">
                <div class="table-block">
                    <table class="table-edit">
                        @if(isset($ItemNo))
                        <tr>
                            <td>Item No</td>
                            <td>ลูกค้า</td>
                            <td>Pcs ยกมา</td>
                            <td>มูลค่า ยกมา</td>
                            <td>ประเภทอวน</td>
                        </tr>
                        @foreach($ItemNo as $row)
                        <tr>
                            <td id="ItemNo" class="dblclickable" data-itemno="{{ $row->ItemNo }}">{{ $row->ItemNo }}
                            </td>
                            <td id="Customer" class="dblclickable" data-itemno="{{ $row->ItemNo }}" data-Customer="{{ $row->Customer }}">
                                <span>{{ $row->Customer }}</span>
                                <div>
                                    <input type="text" class="edit-inputCus edit-input" value="{{ $row->Customer }}" style="display: none;" id="InputCustomer">
                                </div>
                            </td>
                            <td id="PcsAfter" class="dblclickable" data-itemno="{{ $row->ItemNo }}" data-PcsAfter="{{ $row->PcsAfter }}">
                                <span>{{ $row->PcsAfter }}</span>
                                <div>
                                    <input type="text" class="edit-inputPcs edit-input" value="{{ $row->PcsAfter }}" style="display: none;" id="InputPcsAfter">
                                </div>
                            </td>
                            <td id="PriceAfter" class="dblclickable" data-itemno="{{ $row->ItemNo }}" data-PriceAfter="{{ $row->PriceAfter }}">
                                <span>{{ $row->PriceAfter }}</span>
                                <div>
                                    <input type="text" class="edit-inputPrice edit-input" value="{{ $row->PriceAfter }}" style="display: none;" id="InputPriceAfter">
                                </div>
                            </td>
                            <td id="Category" class="dblclickable" data-itemno="{{ $row->ItemNo }}" data-Category="{{ $row->Category }}">
                                <span>{{ $row->Category }}</span>
                                <div>
                                    <input type="text" class="edit-inputCate edit-input" value="{{ $row->Category }}" style="display: none;" id="InputCategory">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $('.dblclickable').dblclick(function() {

            var itemNo = $(this).data('itemno');

            var inputCus = $(this).find('.edit-inputCus');
            inputCus.show().focus();

            var inputPcs = $(this).find('.edit-inputPcs');
            inputPcs.show().focus();

            var inputPrice = $(this).find('.edit-inputPrice');
            inputPrice.show().focus();

            var inputCate = $(this).find('.edit-inputCate');
            inputCate.show().focus();

            inputCus.on('blur', function() {
                var fixCustomer = $(this).val();
                inputCus.hide()

                $(this).parent('div').siblings('span').text(fixCustomer).show();

                $.ajax({
                    type: "POST",
                    url: "{{ route('UpdateItemNo') }}",
                    data: {
                        itemNo: itemNo,
                        fixCustomer: fixCustomer,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            inputPcs.on('blur', function() {
                var fixPcs = $(this).val();
                inputPcs.hide()

                $(this).parent('div').siblings('span').text(fixPcs).show();

                $.ajax({
                    type: "POST",
                    url: "{{ route('UpdateItemNo') }}",
                    data: {
                        itemNo: itemNo,
                        fixPcs: fixPcs,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            inputPrice.on('blur', function() {
                var fixPrice = $(this).val();
                inputPrice.hide()

                $(this).parent('div').siblings('span').text(fixPrice).show();

                $.ajax({
                    type: "POST",
                    url: "{{ route('UpdateItemNo') }}",
                    data: {
                        itemNo: itemNo,
                        fixPrice: fixPrice,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            inputCate.on('blur', function() {
                var fixCategory = $(this).val();
                inputCate.hide()

                $(this).parent('div').siblings('span').text(fixCategory).show();

                $.ajax({
                    type: "POST",
                    url: "{{ route('UpdateItemNo') }}",
                    data: {
                        itemNo: itemNo,
                        fixCategory: fixCategory,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    });
</script>