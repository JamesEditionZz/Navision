<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Navition</title>
    <link rel="stylesheet" href="{{ asset('css/navition.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modalloading.css') }}">
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
            <div class="mt-1 mx-1 active">
                <label for=""><a href="{{ Route('importfile') }}">Import File</a></label>
            </div>
            <hr>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="import-file">
                <h2 align="center">Import File .xlsx</h2>
                <div class="progress-bar">
                    <div class="progress" style="width: 0%"></div>
                </div>
                <div id="status"></div>
                <div class="col-3">
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">สรุป Item</label>
                            <input type="file" name="file0" id="file0">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">ปรับเข้า</label>
                            <input type="file" name="file1" id="file1">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">ปรับออก</label>
                            <input type="file" name="file2" id="file2">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">ซื้อเข้า</label>
                            <input type="file" name="file3" id="file3">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">รับคืน</label>
                            <input type="file" name="file4" id="file4">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">รับโอน</label>
                            <input type="file" name="file5" id="file5">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">คืนของร้านค้า</label>
                            <input type="file" name="file6" id="file6">
                        </div>
                    </div>
                    <div class="form-file">
                        <div class="text-center">
                            <label for="">โอนออก</label>
                            <input type="file" name="file7" id="file7">
                        </div>
                    </div>
                    <div class="form-file active">
                        <div class="text-center">
                            <label for="">ขายออก</label>
                            <input type="file" name="file8" id="file8">
                        </div>
                    </div>
                    <div class="form-file active">
                        <div class="text-center">
                            <label for="">สรุปมูลค่า</label>
                            <input type="file" name="file9" id="file9">
                        </div>
                    </div>
                    <div></div>
                    <div class="form-btn" align="right">
                        <button type="submit">อัพโหลด</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-content" id="modal-content">
            <div class="modal-dialog" role="document">
                <div class="modal">
                    <div id="text0" class="img-load0">สรุป Item<img class="img0" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img0">
                        <hr>
                    </div>
                    <div id="text1" class="img-load1">ปรับเข้า<img class="img1" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img1">
                        <hr>
                    </div>

                    <div id="text2" class="img-load2">ปรับออก<img class="img2" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img2">
                        <hr>
                    </div>
                    <div id="text3" class="img-load3">ซื้อเข้า<img class="img3" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img3">
                        <hr>
                    </div>
                    <div id="text4" class="img-load4">รับคืน<img class="img4" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img4">
                        <hr>
                    </div>
                    <div id="text5" class="img-load5">รับโอน<img class="img5" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img5">
                        <hr>
                    </div>
                    <div id="text6" class="img-load6">คืนของร้านค้า<img class="img6" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img6">
                        <hr>
                    </div>
                    <div id="text7" class="img-load7">โอนออก<img class="img7" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img7">
                        <hr>
                    </div>
                    <div id="text8" class="img-load8">ขายออก<img class="img8" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img8">
                        <hr>
                    </div>
                    <div id="text9" class="img-load9">สรุปมูลค่า<img class="img9" align="right"
                            src="{{ asset('/icon/rotate.png') }}" id="img9">
                        <hr>
                    </div>
                    <div align="center">
                        <button class="btn-success" id="btn-success">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$('form').submit(function(e) {
    e.preventDefault();

    var modalcontent = document.querySelector('.modal-content');
    const file0 = document.getElementById('file0').value;
    const file1 = document.getElementById('file1').value;
    const file2 = document.getElementById('file2').value;
    const file3 = document.getElementById('file3').value;
    const file4 = document.getElementById('file4').value;
    const file5 = document.getElementById('file5').value;
    const file6 = document.getElementById('file6').value;
    const file7 = document.getElementById('file7').value;
    const file8 = document.getElementById('file8').value;
    const file9 = document.getElementById('file9').value;
    const text0 = document.getElementById('text0');
    const text1 = document.getElementById('text1');
    const text2 = document.getElementById('text2');
    const text3 = document.getElementById('text3');
    const text4 = document.getElementById('text4');
    const text5 = document.getElementById('text5');
    const text6 = document.getElementById('text6');
    const text7 = document.getElementById('text7');
    const text8 = document.getElementById('text8');
    const text9 = document.getElementById('text9');
    var imgloadcss0 = document.querySelector('.img0');
    var imgloadcss1 = document.querySelector('.img1');
    var imgloadcss2 = document.querySelector('.img2');
    var imgloadcss3 = document.querySelector('.img3');
    var imgloadcss4 = document.querySelector('.img4');
    var imgloadcss5 = document.querySelector('.img5');
    var imgloadcss6 = document.querySelector('.img6');
    var imgloadcss7 = document.querySelector('.img7');
    var imgloadcss8 = document.querySelector('.img8');
    var imgloadcss9 = document.querySelector('.img9');

    if (file0 || file1 || file2 || file3 || file4 || file5 || file6 || file7 || file8 || file9) {
        modalcontent.style.display = "block";
    }

    if (file0) {
        text0.style.display = "block";

        var formData0 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile0') }}",
            data: formData0,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload0 = document.getElementById('img0');
                imgload0.src = '{{ asset("/icon/success.png") }}'
                imgloadcss0.style.animation = "success";
            },
            error: function(error) {
                imgload0.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss0.style.animation = "cancel";
            }
        });
    }
    if (file1) {
        text1.style.display = "block";

        var formData1 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile1') }}",
            data: formData1,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload1 = document.getElementById('img1');
                imgload1.src = '{{ asset("/icon/success.png") }}'
                imgloadcss1.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload1.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss1.style.animation = "cancel";
            }
        });
    }
    if (file2) {
        text2.style.display = "block";

        var formData2 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile2') }}",
            data: formData2,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload2 = document.getElementById('img2');
                imgload2.src = '{{ asset("/icon/success.png") }}'
                imgloadcss2.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload2.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss2.style.animation = "cancel";
            }
        });
    }
    if (file3) {
        text3.style.display = "block";

        var formData3 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile3') }}",
            data: formData3,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload3 = document.getElementById('img3');
                imgload3.src = '{{ asset("/icon/success.png") }}'
                imgloadcss3.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload3.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss3.style.animation = "cancel";
            }
        });
    }
    if (file4) {
        text4.style.display = "block";
        var formData4 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile4') }}",
            data: formData4,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload4 = document.getElementById('img4');
                imgload4.src = '{{ asset("/icon/success.png") }}'
                imgloadcss4.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload4.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss4.style.animation = "cancel";
            }
        });
    }
    if (file5) {
        text5.style.display = "block";
        var formData5 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile5') }}",
            data: formData5,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload5 = document.getElementById('img5');
                imgload5.src = '{{ asset("/icon/success.png") }}'
                imgloadcss5.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload5.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss5.style.animation = "cancel";
            }
        });
    }
    if (file6) {
        text6.style.display = "block";

        var formData6 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile6') }}",
            data: formData6,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload6 = document.getElementById('img6');
                imgload6.src = '{{ asset("/icon/success.png") }}'
                imgloadcss6.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload6.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss6.style.animation = "cancel";
            }
        });
    }
    if (file7) {
        text7.style.display = "block";

        var formData7 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile7') }}",
            data: formData7,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload7 = document.getElementById('img7');
                imgload7.src = '{{ asset("/icon/success.png") }}'
                imgloadcss7.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload7.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss7.style.animation = "cancel";
            }
        });
    }
    if (file8) {
        text8.style.display = "block";

        var formData8 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile8') }}",
            data: formData8,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload8 = document.getElementById('img8');
                imgload8.src = '{{ asset("/icon/success.png") }}'
                imgloadcss8.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload8.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss8.style.animation = "cancel";
            }
        });
    }
    if (file9) {
        text9.style.display = "block";

        var formData9 = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile9') }}",
            data: formData9,
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                const imgload9 = document.getElementById('img9');
                imgload9.src = '{{ asset("/icon/success.png") }}'
                imgloadcss9.style.animation = "success";
            },
            error: function(error) {
                const imgload1 = document.getElementById('img1');
                imgload9.src = '{{ asset("/icon/cancel.png") }}'
                imgloadcss9.style.animation = "cancel";
            }
        });
    }

    const btnsuccess = document.querySelector(".btn-success")
    btnsuccess.addEventListener('click', function() {
        const modalContent = document.getElementById('modal-content');
        modalcontent.style.display = "none";
    })
});
</script>