<?php
// header() utf-8 설정
header("Content-Type:text/html; charset=utf-8");

// sql접속 / db선택
$conn = mysqli_connect("localhost", "DB아이디", "DB비밀번호") or die("sql접속이 실패했습니다.");
$select = mysqli_select_db($conn, "DB명") or die("db선택에 실패했습니다.");

// db에서 utf-8설정
mysqli_query($conn,"SET SESSION CHARACTER_SET_CONNECTION=utf8");
mysqli_query($conn,"SET SESSION CHARACTER_SET_RESULTS=utf8");
mysqli_query($conn,"SET SESSION CHARACTER_SET_CLIENT=utf8");

// 세션기능 활성화
session_start();

// 로그인 여부 확인 => 초기화
if(!isset($_SESSION['log'])){
    $_SESSION['log'] = false;
    $_SESSION['id'] = "";
    $_SESSION['userlv'] = 0;
}

// 게시판 설정값

// 한 페이지 당 보여줄 게시물 개수
$postlen = 10;
// 한 블록당 넣을 페이지번호의 개수
$pbtnlen = 5;

// 각 게시판 별 권한 설정
// 리스트보기 권한 / 글 보기 권한 / 글쓰기,수정,삭제하기 권한

//도서정보 리스트 게시판 권한설정(회원가입 필수)
$bookinfo_list = 1;
$bookinfo_view = 1;

// 사용자 변수
$var = "v.0.01";

// 사용자 함수
$today = date("Y-m-d"); // 오늘 날짜 찍기

function warning($message, $move){
    echo "<script>";
    echo "alert('$message');";
    if(is_numeric($move)){
        //숫자
        echo "history.go($move);";
    }else{
        //숫자가 아닐 경우
        echo "location.href='$move';";
    }
    echo "</script>";
    exit;
}

function txtini($text){
    $text = addslashes($text);
    $text = htmlentities($text);
    return $text;
}

function sqlfilter($txt){
    $txt = str_replace("%' or%", "", $txt);
    $txt = str_replace("%' OR%", "", $txt);
    $txt = str_replace("%' oR%", "", $txt);
    $txt = str_replace("%' Or%", "", $txt);
    $txt = str_replace("%\" or%", "", $txt);
    $txt = str_replace("%\" OR%", "", $txt);
    $txt = str_replace("%\" oR%", "", $txt);
    $txt = str_replace("%\" Or%", "", $txt);
    $txt = str_replace("% or%", "", $txt);
    $txt = str_replace("% OR%", "", $txt);
    $txt = str_replace("% oR%", "", $txt);
    $txt = str_replace("% Or%", "", $txt);
    $txt = str_replace("% and%", "", $txt);
    $txt = str_replace("% AND%", "", $txt);
    $txt = str_replace("% And%", "", $txt);
    return $txt;
}

function qr($qq){
    $conn = $GLOBALS['conn'];
    return mysqli_query($conn, $qq);
}
$data = mysqli_query($conn, "SELECT * FROM asdf");
$data = qr("SELECT * FROM asdf");

?>