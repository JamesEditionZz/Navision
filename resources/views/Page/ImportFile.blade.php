<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Navition</title>
  <link rel="shortcut icon" href="{{ asset('icon/icon.png') }}">
  <link rel="stylesheet" href="{{ asset('css/navition.css') }}">
  <link rel="stylesheet" href="{{ asset('css/modalloading.css') }}">
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
      <div class="mt-1 mx-1">
        <label for=""><a href="{{ Route('Change') }}">แก้ไขลูกค้า/ประเภท</a></label>
      </div>
      <hr>
      <div class="mt-1 mx-1 active">
        <label for=""><a href="{{ Route('importfile') }}">อัพโหลดไฟล์/ดูย้อนหลัง</a></label>
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
          <div class="form-return" align="right">
            <label for="" id="btn-return">เรียกดูข้อมูลย้อนหลัง</label>
          </div>
          <div class="form-btn" align="left">
            <button type="submit" id="btnupload">อัพโหลด</button>
          </div>
        </div>
      </div>
    </form>
    <div class="modal-content" id="modal-content">
      <div class="modal-dialog" role="document">
        <div class="modal">
          <div id="text10" class="img-load10">ยอดยกมา<img class="img10" align="right" src="{{ asset('/icon/rotate.png') }}" id="img10">
            <hr>
          </div>
          <div id="text0" class="img-load0">สรุป Item<img class="img0" align="right" src="{{ asset('/icon/rotate.png') }}" id="img0">
            <hr>
          </div>
          <div id="text1" class="img-load1">ปรับเข้า<img class="img1" align="right" src="{{ asset('/icon/rotate.png') }}" id="img1">
            <hr>
          </div>
          <div id="text2" class="img-load2">ปรับออก<img class="img2" align="right" src="{{ asset('/icon/rotate.png') }}" id="img2">
            <hr>
          </div>
          <div id="text3" class="img-load3">ซื้อเข้า<img class="img3" align="right" src="{{ asset('/icon/rotate.png') }}" id="img3">
            <hr>
          </div>
          <div id="text4" class="img-load4">รับคืน<img class="img4" align="right" src="{{ asset('/icon/rotate.png') }}" id="img4">
            <hr>
          </div>
          <div id="text5" class="img-load5">รับโอน<img class="img5" align="right" src="{{ asset('/icon/rotate.png') }}" id="img5">
            <hr>
          </div>
          <div id="text6" class="img-load6">คืนของร้านค้า<img class="img6" align="right" src="{{ asset('/icon/rotate.png') }}" id="img6">
            <hr>
          </div>
          <div id="text7" class="img-load7">โอนออก<img class="img7" align="right" src="{{ asset('/icon/rotate.png') }}" id="img7">
            <hr>
          </div>
          <div id="text8" class="img-load8">ขายออก<img class="img8" align="right" src="{{ asset('/icon/rotate.png') }}" id="img8">
            <hr>
          </div>
          <div id="text9" class="img-load9">สรุปมูลค่า<img class="img9" align="right" src="{{ asset('/icon/rotate.png') }}" id="img9">
            <hr>
          </div>
          <div align="center">
            <button class="btn-success" id="btn-success">OK</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-confirm">
    <div class="modal-con p-1">
      ต้องการยกยอดเดือนที่แล้วด้วยไหม ?
      <div align="right" class="mt-1">
        <button class="btn-submit" id="Priceafter">ใช่</button>
        <button class="btn-close" id="close">ไม่</button>
      </div>
    </div>
  </div>
  <div class="modal-return">
    <div class="modal-re p-1">
      <div class="block-modal">
        <p align="center">ต้องการย้อนข้อมูลเดือน</p>
        @foreach($Date as $rowDate)
        <div class="mt-1 data_date" onclick="checkclick('{{ $rowDate }}')" align="center">{{ $rowDate }}</div>
        @endforeach
      </div>
      <div class="upload-file">
        <br>
        <label>ยอดยกมาของเดือน : </label><label id="selectdate"></label><label>?</label>
        <div align="center">
          <button class="btn-submit" id="backdatasubmit">ใช่</button>
          <button class="btn-close" id="backdataclose">ไม่</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-loading">
    <div class="modal-load">
      <img class="img-backdata" src="{{ asset('/icon/rotate.png') }}" id="imgbackdata">
      <h2 align="center">กำลังโหลดข้อมูล</h2>
    </div>
  </div>
  <div class="modal-success">
    <div class="load-success">
      <img class="img-success" align="center" src="{{ asset('/icon/success.png') }}">
      <h3 align="center">โหลดเสร็จแล้ว</h3>
      <div align="center">
        <button class="btn-success" id="close-success">OK</button>
      </div>
    </div>
  </div>
</body>

</html>
<script>
  var btnreturn = document.getElementById('btn-return');
  var modalreturn = document.querySelector('.modal-return');

  btnreturn.addEventListener('click', function() {
    modalreturn.style.display = "block";
  });

  function checkclick(date) {
    var alertuploadfile = document.querySelector('.upload-file');
    $('#selectdate').text(date);
    alertuploadfile.style.display = "block"

    var backdatasubmit = document.getElementById('backdatasubmit');
    var backdataclose = document.getElementById('backdataclose');

    backdatasubmit.addEventListener('click', function() {
      var modalreturn = document.querySelector('.modal-return');
      var modalBackData = document.querySelector('.modal-loading');

      modalreturn.style.display = "none";
      modalBackData.style.display = "block";

      $.ajax({
        type: "post",
        url: "{{ Route('backdata') }}",
        data: {
          date: date
        },
        headers: {
          "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
        },
        success: function(response) {
          var modalsuccessData = document.querySelector('.modal-success');
          modalsuccessData.style.display = "block";
        },
        error: function(error) {
          console.error(error);
        }
      })

    });

    backdataclose.addEventListener('click', function() {
      var modalreturn = document.querySelector('.modal-return');
      modalreturn.style.display = "none";
    })
  }

  var closesuccess = document.getElementById('close-success');
  closesuccess.addEventListener('click', function() {
    var modalsuccessData = document.querySelector('.modal-success');
	var modalBackData = document.querySelector('.modal-loading');
    modalsuccessData.style.display = "none";
	modalBackData.style.display = "none";
  });


  $('form').submit(function(e) {
    e.preventDefault();

    var modalcontent = document.querySelector('.modal-content');
    var file0 = document.getElementById('file0');
    var file1 = document.getElementById('file1');
    var file2 = document.getElementById('file2');
    var file3 = document.getElementById('file3');
    var file4 = document.getElementById('file4');
    var file5 = document.getElementById('file5');
    var file6 = document.getElementById('file6');
    var file7 = document.getElementById('file7');
    var file8 = document.getElementById('file8');
    var file9 = document.getElementById('file9');

    var text1 = document.getElementById('text1');
    var text2 = document.getElementById('text2');
    var text3 = document.getElementById('text3');
    var text4 = document.getElementById('text4');
    var text5 = document.getElementById('text5');
    var text6 = document.getElementById('text6');
    var text7 = document.getElementById('text7');
    var text8 = document.getElementById('text8');
    var text9 = document.getElementById('text9');
    var text10 = document.getElementById('text10');

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
    var imgloadcss10 = document.querySelector('.img10');

    var btnupload = document.getElementById('btnupload');
    var modalconfirm = document.querySelector('.modal-confirm');
    var Priceafter = document.getElementById('Priceafter');
    var closeafter = document.getElementById('close');

    if (btnupload) {
      modalconfirm.style.display = "block";
      var confirm = 0;

      Priceafter.addEventListener('click', function() {
        confirm = 1;
        modalconfirm.style.display = "none";
        modalcontent.style.display = "block"

        if (confirm === 1) {
          text10.style.display = "block";

          $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile10') }}",
            data: {
              confirm: confirm
            },
            headers: {
              "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            success: function(response) {
              const imgload10 = document.getElementById('img10');
              imgload10.src = '{{ asset("/icon/success.png") }}'
              imgloadcss10.style.animation = "success";

              var Inputfile0 = file0.files[0];
              var Inputfile1 = file1.files[0];
              var Inputfile2 = file2.files[0];
              var Inputfile3 = file3.files[0];
              var Inputfile4 = file4.files[0];
              var Inputfile5 = file5.files[0];
              var Inputfile6 = file6.files[0];
              var Inputfile7 = file7.files[0];
              var Inputfile8 = file8.files[0];
              var Inputfile9 = file9.files[0];

              if (Inputfile0) {
                text0.style.display = "block";

                var formData0 = new FormData();
                formData0.append('Inputfile0', Inputfile0);

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

                    console.log(response);
                  },
                  error: function(error) {
                    const imgload0 = document.getElementById(
                      'img0');
                    imgload0.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss0.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile1) {
                text1.style.display = "block";

                var formData1 = new FormData();
                formData1.append('Inputfile1', Inputfile1);

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
                    const imgload1 = document.getElementById(
                      'img1');
                    imgload1.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss1.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile2) {
                text2.style.display = "block";

                var formData2 = new FormData();
                formData2.append('Inputfile2', Inputfile2);

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
                    const imgload2 = document.getElementById(
                      'img2');
                    imgload2.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss2.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile3) {
                text3.style.display = "block";

                var formData3 = new FormData();
                formData3.append('Inputfile3', Inputfile3);

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
                    const imgload3 = document.getElementById(
                      'img3');
                    imgload3.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss3.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile4) {
                text4.style.display = "block";

                var formData4 = new FormData();
                formData4.append('Inputfile4', Inputfile4);

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
                    const imgload4 = document.getElementById(
                      'img4');
                    imgload4.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss4.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile5) {
                text5.style.display = "block";

                var formData5 = new FormData();
                formData5.append('Inputfile5', Inputfile5);

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
                    const imgload5 = document.getElementById(
                      'img5');
                    imgload5.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss5.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile6) {
                text6.style.display = "block";

                var formData6 = new FormData();
                formData6.append('Inputfile6', Inputfile6);

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
                    const imgload6 = document.getElementById(
                      'img6');
                    imgload6.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss6.style.animation = "cancel";
                  }
                });
              }
              if (Inputfile7) {
                text7.style.display = "block";

                var formData7 = new FormData();
                formData7.append('Inputfile7', Inputfile7);

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
                    const imgload7 = document.getElementById(
                      'img7');
                    imgload7.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss7.style.animation = "cancel";

                    console.error(error);
                  }
                });
              }

              if (Inputfile8) {
                text8.style.display = "block";

                var formData8 = new FormData();
                formData8.append('Inputfile8', Inputfile8);

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
                    const imgload8 = document.getElementById(
                      'img8');
                    imgload8.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss8.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile9) {
                text9.style.display = "block";

                var formData9 = new FormData();
                formData9.append('Inputfile9', Inputfile9);

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

                    console.log(response);
                  },
                  error: function(error) {
                    const imgload9 = document.getElementById(
                      'img9');
                    imgload9.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss9.style.animation = "cancel";
                  }
                });
              }
            },
            error: function(error) {
              const imgload10 = document.getElementById('img10');
              imgload10.src = '{{ asset("/icon/cancel.png") }}'
              imgloadcss10.style.animation = "cancel";
            }
          });
        }
      })

      closeafter.addEventListener('click', function() {
        confirm = 0;
        modalconfirm.style.display = "none";
        modalcontent.style.display = "block";

        if (confirm === 0) {
          text10.style.display = "none";

          $.ajax({
            type: 'POST',
            url: "{{ Route('uploadfile10') }}",
            data: {
              confirm: confirm
            },
            headers: {
              "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr('content')
            },
            success: function(response) {
              const imgload10 = document.getElementById('img10');
              imgload10.src = '{{ asset("/icon/success.png") }}'
              imgloadcss10.style.animation = "success";

              var Inputfile0 = file0.files[0];
              var Inputfile1 = file1.files[0];
              var Inputfile2 = file2.files[0];
              var Inputfile3 = file3.files[0];
              var Inputfile4 = file4.files[0];
              var Inputfile5 = file5.files[0];
              var Inputfile6 = file6.files[0];
              var Inputfile7 = file7.files[0];
              var Inputfile8 = file8.files[0];
              var Inputfile9 = file9.files[0];

              if (Inputfile0) {
                text0.style.display = "block";

                var formData0 = new FormData();
                formData0.append('Inputfile0', Inputfile0);

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

                    console.log(response);
                  },
                  error: function(error) {
                    const imgload0 = document.getElementById(
                      'img0');
                    imgload0.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss0.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile1) {
                text1.style.display = "block";

                var formData1 = new FormData();
                formData1.append('Inputfile1', Inputfile1);

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
                    const imgload1 = document.getElementById(
                      'img1');
                    imgload1.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss1.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile2) {
                text2.style.display = "block";

                var formData2 = new FormData();
                formData2.append('Inputfile2', Inputfile2);

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
                    const imgload2 = document.getElementById(
                      'img2');
                    imgload2.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss2.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile3) {
                text3.style.display = "block";

                var formData3 = new FormData();
                formData3.append('Inputfile3', Inputfile3);

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
                    const imgload3 = document.getElementById(
                      'img3');
                    imgload3.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss3.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile4) {
                text4.style.display = "block";

                var formData4 = new FormData();
                formData4.append('Inputfile4', Inputfile4);

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
                    const imgload4 = document.getElementById(
                      'img4');
                    imgload4.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss4.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile5) {
                text5.style.display = "block";

                var formData5 = new FormData();
                formData5.append('Inputfile5', Inputfile5);

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
                    const imgload5 = document.getElementById(
                      'img5');
                    imgload5.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss5.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile6) {
                text6.style.display = "block";

                var formData6 = new FormData();
                formData6.append('Inputfile6', Inputfile6);

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
                    const imgload6 = document.getElementById(
                      'img6');
                    imgload6.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss6.style.animation = "cancel";
                  }
                });
              }
              if (Inputfile7) {
                text7.style.display = "block";

                var formData7 = new FormData();
                formData7.append('Inputfile7', Inputfile7);

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
                    const imgload7 = document.getElementById(
                      'img7');
                    imgload7.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss7.style.animation = "cancel";

                    console.error(error);
                  }
                });
              }

              if (Inputfile8) {
                text8.style.display = "block";

                var formData8 = new FormData();
                formData8.append('Inputfile8', Inputfile8);

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
                    const imgload8 = document.getElementById(
                      'img8');
                    imgload8.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss8.style.animation = "cancel";
                  }
                });
              }

              if (Inputfile9) {
                text9.style.display = "block";

                var formData9 = new FormData();
                formData9.append('Inputfile9', Inputfile9);

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

                    console.log(response);
                  },
                  error: function(error) {
                    const imgload9 = document.getElementById(
                      'img9');
                    imgload9.src =
                      '{{ asset("/icon/cancel.png") }}'
                    imgloadcss9.style.animation = "cancel";
                  }
                });
              }
            },
            error: function(error) {
              const imgload10 = document.getElementById('img10');
              imgload10.src = '{{ asset("/icon/cancel.png") }}'
              imgloadcss10.style.animation = "cancel";
            }
          });
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