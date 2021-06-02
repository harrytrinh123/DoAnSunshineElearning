<?php    
    include("./partials/connect.php");
    session_start();
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM account JOIN student ON account.Username = student.Username
                                    JOIN class ON student.ClassID = class.ID
                                    JOIN schedule ON class.ScheduleID = schedule.ID
                                    WHERE account.Username = '$username'
    ";
    $result = $connect->query($sql);
    $final = $result->fetch_assoc();
    $stack = array($final['LichHoc'], $final['ZoomID'], $final['ZoomPassword'], $final['ClassName']);
    echo json_encode($stack, JSON_UNESCAPED_UNICODE);
    
?>
