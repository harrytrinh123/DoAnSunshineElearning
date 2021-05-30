<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include("./partials/headlibs.php") ?>
  <link rel="stylesheet" href="../student/assets/css/testnangluc.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
  <?php include("./partials/header.php") ?>
  <div class="container">
    <h4 class="text-center" style="padding: 10px; font-size: 35px; font-weight: bold;">Bài kiểm tra đánh giá năng lực - Đề thi dựa theo chứng chỉ Cambrige - Số câu hỏi: 20</h4>
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
                <button id="btnGoiY" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Xem khóa học phù hợp với bạn
                </button>
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
  <!-- Contact bar -->
  <ul class="contact-bar">
    <li class="facebook">
      <a href="https://m.me" target="_blank" rel="nofollow"></a>
    </li>
    <li class="zalo">
      <a href="https://zalo.me" target="_blank" rel="nofollow"></a>
    </li>
  </ul>

  <!-- Modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Khóa học gợi ý cho bạn</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h6>Bạn được xếp vào lớp moviers</h6>
          <p>Các lớp gợi ý dành cho bạn</p>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
              <input type="radio" name="options" id="option1">
              <p>Lớp moviers MV01</p>
              <p>Lịch học: 2-4-6</p>
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option2">
              <p>Lớp moviers MV01</p>
              <p>Lịch học: 2-4-6</p>
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option3">
              <p>Lớp moviers MV01</p>
              <p>Lịch học: 2-4-6</p>
            </label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đăng ký sau</button>
        <button type="button" class="btn btn-primary">Đăng ký ngay</button>
      </div>
    </div>
  </div>
  </div>
</body>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btnFinish').hide();
    $('#btnGoiY').hide();
  });


  $("#btnStart").click(function() {
    GetQuestion();
    $('#btnFinish').show();
    $(this).hide();
    $('#mark').hide();
    $('#btnGoiY').hide();
    //SET thoi gian lam bai
    sec = 900;
  });

  $('#btnFinish').click(function() {
    $(this).hide();
    $('#btnStart').show();
    CheckResult();
    $('#mark').show();
    $('#btnGoiY').show();
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

  }

  function GetQuestion() {
    $.ajax({
      url: 'questions.php',
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
      $('#btnGoiY').show();
    }
  }
</script>

</html>