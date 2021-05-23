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
</head>

<body>
  <?php include("./partials/header.php") ?>
  <div class="container">
    <h1 class="text-center" style="padding: 10px; font-size: 35px;">BÀI KIỂM TRA ĐÁNH GIÁ NĂNG LỰC - Đề thi dựa theo chứng chỉ Cambrige - Số câu hỏi: 20</h1>
    <div class="row">
      <div class="col-md-10">

        <div class="card">
          <div class="card-header">Làm bài thi</div>
          <div class="card-header">
            <div class="col-sm-12 text-right">
              <button type="button" name="button" class="btn btn-success" id="btnStart">Bắt đầu</button>
            </div>
          </div>
          <div class="card-body">
            <div class="row" id="allQuestions">
              <!-- Load cau hoi -->

            </div>
            <!-- btn nop bai -->
            <div class="row">
              <div class="col-md-12 text-center">
                <button id="btnFinish" class="btn btn-primary ">Nộp bài</button>
              </div>
              <div class="col-md-12 text-center">
                <h4 id ="mark"></h4>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-2">
        <h2 style="font-size: 20px;">Thời gian làm bài</h2>
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
</body>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btnFinish').hide();
  });


  $("#btnStart").click(function() {
    GetQuestion();
    $('#btnFinish').show();
    $(this).hide();
  });

  $('#btnFinish').click(function() {
    $(this).hide();
    $('#btnStart').show();
    CheckResult();
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
      // Tinh diem
      let mark = (cauDung / 5) * 100;
      mark = Math.floor(mark);
      console.log(mark);
      $("#mark").text("Bạn đạt được " + mark + "/100 điểm");
    });


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
          d += '<fieldset id="group' + index + '">';
          d += '<label class="options">' + v[3] + ' <input type="radio" name="group' + index + '" class="rdOptionA"> <span class="checkmark"></span> </label>';
          d += '<label class="options">' + v[4] + '<input type="radio" name="group' + index + '" class="rdOptionB"> <span class="checkmark"></span> </label>';
          d += '<label class="options">' + v[5] + ' <input type="radio" name="group' + index + '" class="rdOptionC"> <span class="checkmark"></span> </label>';
          d += '<label class="options">' + v[6] + ' <input type="radio" name="group' + index + '" class="rdOptionD"> <span class="checkmark"></span> </label>';
          d += '</fieldset>';
          d += '</div></div>';
          index++;
        });

        $('#allQuestions').html(d);
      }
    });
  }
</script>

</html>