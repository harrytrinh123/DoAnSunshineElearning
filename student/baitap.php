<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 
  include("./partials/session.php");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chọn lớp phù hợp với bạn</title>
  <meta name="robots" content="noindex">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
  <link type="text/css" href="../student/public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/style.css" rel="stylesheet">

  <link type="text/css" href="../student/public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/fontawesome.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/preloader.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/app.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4197e7d2f0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../student/assets/css/testnangluc.css">

</head>
<style>
  .labl {
    width: 90%;
    background-color: forestgreen;
  }

  .labl>input {
    /* HIDE RADIO */
    visibility: hidden;
    /* Makes input not-clickable */
    position: absolute;
    /* Remove input from document flow */
  }

  .labl>input+div {
    /* DIV STYLES */
    cursor: pointer;
    border: 2px solid transparent;
  }

  .labl>input:checked+div {
    /* (RADIO CHECKED) DIV STYLES */
    background-color: #ffd6cc;
    border: 1px solid #ff6600;
  }
</style>

<body class="layout-app ">

  <div class="preloader">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
  </div>
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">


      <?php include("./partials/header1.php") ?>
      <div class="container page__container">
      <h4 class="text-center" style="padding: 10px; font-size: 35px; font-weight: bold;">Bài kiểm tra giữa kì</h4>
    <div class="row">
      <div class="col-md-10">

        <div class="card">
          <div class="card-header">
            <div class="col-sm-12 text-right">
              <button onclick="clickToRunTimer()" type="button" name="button" class="btn btn-success" id="btnStart">Bắt đầu</button>
            </div>
          </div>
          <div class="card-body">
            <div class="row" id="allQuestions">
              <!-- Load cau hoi -->

            </div>
            <!-- btn nop bai -->
            <div class="row">
              <div class="col-md-12 text-center">
                <button style="width: 200px; background-color: green;" id="btnFinish" class="btn btn-primary ">Nộp bài</button>
              </div>
              <div class="col-md-12 text-center">
                <h4 id="mark"></h4>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-2">
        <h2 style="font-size: 20px;">Thời gian làm bài</h2>
        <div class="row">
          <div class="item col-sm-6">
            <p>MINUTE</p>
            <span id="minute">15</span>
          </div>
          <div class="item col-sm-6">
            <p>SECONDS</p>
            <span id="second">00</span>
          </div>
        </div>
      </div>
    </div>
      </div>
      <?php include("./partials/footer.php") ?>

    </div>

    <?php include("./partials/sidebar.php") ?>
    <!-- My script -->
    <script>
      $(document).ready(function(){
        
      });

      $('#btn-DangKy').click(function(){
        let da = $(v).find('input[type="radio"]:checked').attr('value');
        console.log(da);
      })
    </script>

    <!-- jQuery -->
    <script src="../student/public/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../student/public/vendor/popper.min.js"></script>
    <script src="../student/public/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="../student/public/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="../student/public/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="../student/public/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="../student/public/js/app.js"></script>

    <!-- Preloader -->
    <script src="../student/public/js/preloader.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {
    $('#btnFinish').hide();
  });


  $("#btnStart").click(function() {
    GetQuestion();
    $('#btnFinish').show();
    $(this).hide();
    $('#mark').hide();
    //SET thoi gian lam bai
    sec = 900;
  });

  $('#btnFinish').click(function() {
    $(this).hide();
    $('#btnStart').show();
    CheckResult();
    $('#mark').show();
    clearInterval(inter);
  });

  var questions;

  function CheckResult() {
    let cauDung = 0;
    // Lay dap an dung cua cau hoi
    $('#allQuestions .question').each(function(k, v) {
      let id = $(v).find('.py-2.h5').attr('id');
      let que = questions.find(fruit => fruit[0] === id);
      let answer = que[7];

      // Lay dap an cua nguoi dung
      let da = $(v).find('input[type="radio"]:checked').attr('class');
      let choice = '';
      switch (da) {
        case 'rdOptionA':
          choice = 'A';
          break;
        case 'rdOptionB':
          choice = 'B';
          break;
        case 'rdOptionC':
          choice = 'C';
          break;
        case 'rdOptionD':
          choice = 'D';
          break;

      }
      if (choice == answer) {
        console.log("Cau co id: " + id + " DUNG");
        cauDung++;
      } else {
        console.log("Cau co id: " + id + " SAI");
      }

      let idDA = 'dapAn' + id;
      $('#' + idDA).text('Đáp án đúng là : ' + que[7]);
    });
    // Tinh diem
    let mark = (cauDung / 10) * 100;
    mark = Math.floor(mark);
    console.log(mark);
    $("#mark").text("Bạn đạt được " + mark + "/100 điểm");
    $.ajax({
      type: "POST", //type of method
      url: "ketqua.php", //your page
      data: {
        mark: mark
      }, // passing the values
      success: function(res) {
        // alert("Cap nhat diem thanh cong");      
      }
    });

  }

  function GetQuestion() {
    $.ajax({
      url: 'baitaphandler.php',
      type: 'get',
      success: function(data) {
        questions = jQuery.parseJSON(data);
        let d = '';
        let index = 1;
        $.each(questions, function(i, v) {
          d += '<div class="question pl-5 pr-5">';
          d += '<div class="py-2 h5" id="' + v[0] + '"><b>Câu ' + index + ': ' + v[1] + '</b></div>';
          d += '<div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">';
          d += '<div class="row">';
          d += '<div class="col-md-4">'
          d += '<fieldset id="group' + index + '">';
          d += '<label class="options">' + v[3] + ' <input type="radio" name="group' + index + '" class="rdOptionA"> <span class="checkmark"></span> </label>';
          d += '<label class="options">' + v[4] + '<input type="radio" name="group' + index + '" class="rdOptionB"> <span class="checkmark"></span> </label>';
          d += '<label class="options">' + v[5] + ' <input type="radio" name="group' + index + '" class="rdOptionC"> <span class="checkmark"></span> </label>';
          d += '<label class="options">' + v[6] + ' <input type="radio" name="group' + index + '" class="rdOptionD"> <span class="checkmark"></span> </label>';
          d += '<p style="background-color: yellow;" id="dapAn' + v[0] + '"></p>';
          d += '</fieldset>';
          d += '</div>';
          d += '<div class="col-md-6">';
          if (v[8] != '') {
            d += '<img class="imgCauHoi" src="./images/cauhoi/' + v[8] + '" alt="">';
          }
          d += '</div>';
          d += '</div>'
          d += '</div></div>';
          index++;
        });

        $('#allQuestions').html(d);
      }
    });
  }

  // Thoi gian lam bai
  var sec;
  mins = $('#minute'),
    secs = $('#second');
  var inter;

  function clickToRunTimer() {
    inter =
      setInterval(function() {
        secpass();
      }, 1000)
  }

  function secpass() {
    var min = Math.floor(sec / 60),
      remSec = sec % 60;

    if (remSec < 10) {

      remSec = '0' + remSec;

    }
    if (min < 10) {

      min = '0' + min;

    }
    mins.text(min);
    secs.text(remSec);

    if (sec > 0) {

      sec = sec - 1;

    } else {
      alert("Het thoi gian lam bai");
      clearInterval(inter);
      $('#btnFinish').hide();
      $('#btnStart').show();
      CheckResult();
      $('#mark').show();
    }
  }
</script>
<!-- Contact bar -->
<ul class="contact-bar">
    <li class="facebook">
      <a href="https://m.me" target="_blank" rel="nofollow"></a>
    </li>
    <li class="zalo">
      <a href="https://zalo.me" target="_blank" rel="nofollow"></a>
    </li>
  </ul>
</body>

</html>
