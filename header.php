<!doctype HTML>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="GJ Lee" />
        <meta name="keyword" content="대우, 도서관, 행복, 미, 창조, 지식, 즐거움, 책, 도서, 대여, 반납, 대우도서관" />
        <meta name="description" content="행복을 주고 미래를 창조하는 도서관, 대우도서관입니다." />
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <title>도서관 정보 시스템</title>
        <link href="css/common.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <header class="container mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">도서관 정보 시스템 <?php echo $var;?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="???.php">도서정보</a>
                        </li>
                        
                        <li class="nav-item">
                            
                        <?php
                        if($_SESSION['log']){
                            echo "<a id='logout' class='btnblock btn btn-primary' href='#'>Logout({$_SESSION['컬럼명']})</a>";
                            echo "<a class='btnblock btn btn-info' href='???.php'>회원정보 수정</a>";
                        }else{
                            echo "<a class='btnblock btn btn-primary' href='???.php'>로그인</a>";
                            echo "<a class='btnblock btn btn-primary' href='???.php'>회원가입</a>";
                        }

                        if($_SESSION['userlv'] >= 8){
                            echo "<a class='btnblock btn btn-warning' href='???.php'>관리자</a>";
                        }
                        ?>

                        <script>
                            $(document).ready(function(){
                                $("#logout").click(function(){
                                    if(confirm("정말로 로그아웃 하시겠습니까?")){
                                        location.href='logout.php';
                                    }
                                });
                            });
                        </script>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section class="container">
            