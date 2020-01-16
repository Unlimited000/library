<?php
include "common.php";
include "header.php";

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<h3>관리자 페이지</h3>
<hr />
<div class="btn-group" style="width:100%!important">
    <a style="width:25%!important" href="???.php" class="btn btn-primary">회원관리</a>
    <a style="width:25%!important" href="???.php" class="btn btn-secondary">도서정보 입력/수정/삭제</a>
    <a style="width:25%!important" href="???.php" class="btn btn-success">도서대여</a>
    <a style="width:25%!important" href="???.php" class="btn btn-warning">도서반납</a>
</div>

<div class="row mt-2 mb-2">
    <div class="col-12">
        <?php
        for($h=0 ; $h<7 ; $h++){
            ${"t".$h} = date("Y-m-d", strtotime("-".$h." days"));
            $m = ${"t".$h};
            
            $n = mysqli_query($conn,"SELECT no FROM 테이블명 WHERE 컬럼명='$m';");
            ${"n".$h} = mysqli_num_rows($n);
            
            $j = mysqli_query($conn, "SELECT no FROM 테이블명 WHERE 컬럼명='$m';");
            ${"j".$h} = mysqli_num_rows($j);
            
            $p = mysqli_query($conn, "SELECT no FROM 테이블명 WHERE 컬럼명='$m';");
            ${"p".$h} = mysqli_num_rows($p);
            
            $o = mysqli_query($conn, "SELECT no FROM 테이블명 WHERE 컬럼명='$m';");
            ${"o".$h} = mysqli_num_rows($o);
        }
        ?>
        <canvas id="myChart1" width="100%"></canvas>
        <script>
        var ctx = document.getElementById('myChart1');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['<?php echo $t6;?>', '<?php echo $t5;?>', '<?php echo $t4;?>', '<?php echo $t3;?>', '<?php echo $t2;?>', '<?php echo $t1;?>', '<?php echo $t0;?>'],
                datasets: [{
                    label: '가입자 추이',
                    data: [<?php echo $n6;?>,<?php echo $n5;?>,<?php echo $n4;?>,<?php echo $n3;?>,<?php echo $n2;?>,<?php echo $n1;?>, <?php echo $n0;?>],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                },{
                    label: '도서 입고 추이',
                    data: [<?php echo $j6;?>,<?php echo $j5;?>,<?php echo $j4;?>,<?php echo $j3;?>,<?php echo $j2;?>,<?php echo $j1;?>, <?php echo $j0;?>],
                    backgroundColor: 'rgba(255, 255, 99, 0.2)',
                    borderColor: 'rgba(255, 255, 99, 1)',
                    borderWidth: 2
                },{
                    label: '도서 대여 추이',
                    data: [<?php echo $p6;?>,<?php echo $p5;?>,<?php echo $p4;?>,<?php echo $p3;?>,<?php echo $p2;?>,<?php echo $p1;?>, <?php echo $p0;?>],
                    backgroundColor: 'rgba(132, 255, 99, 0.2)',
                    borderColor: 'rgba(132, 255, 99, 1)',
                    borderWidth: 2
                },{
                    label: '도서 반납 추이',
                    data: [<?php echo $o6;?>,<?php echo $o5;?>,<?php echo $o4;?>,<?php echo $o3;?>,<?php echo $o2;?>,<?php echo $o1;?>, <?php echo $o0;?>],
                    backgroundColor: 'rgba(99, 132, 255, 0.2)',
                    borderColor: 'rgba(99, 132, 255, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
    </div>
</div>

<div class="row mt-2">
    <div class="col-4">
        <h3>최근 입고 목록</h3>
        <ul class="list-group">
            <?php
            $data1 = mysqli_query($conn, "SELECT 컬럼명 FROM 테이블명 ORDER BY no DESC LIMIT 5;");
            for($i=0; $i<5; $i++){
                $row1 = mysqli_fetch_assoc($data1);
                echo "<li class='list-group-item'><a href='???.php?bookno={$row1['컬럼명']}'>{$row1['컬럼명']}</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="col-4">
        <h3>최근 대여 목록</h3>
        <ul class="list-group">
            <?php
            $data2 = mysqli_query($conn, "SELECT * FROM 테이블명 ORDER BY no DESC LIMIT 5;");
            for($j=0; $j<5; $j++){
                $row2 = mysqli_fetch_assoc($data2);
                if(!empty($row2['컬럼명'])){
                    $data3 = mysqli_query($conn, "SELECT 컬럼명 FROM 테이블명 WHERE no={$row2['컬럼명']};");
                    $row3 = mysqli_fetch_assoc($data3);
                    echo "<li class='list-group-item'><a href='???.php?bookno={$row2['컬럼명']}'>{$row3['컬럼명']}</a></li>";
                }
            }
            ?>
        </ul>
    </div>
    <div class="col-4">
        <h3>최근 반납 목록</h3>
        <ul class="list-group">
            <?php
            $data4 = mysqli_query($conn, "SELECT * FROM 테이블명 ORDER BY no DESC LIMIT 5;");
            for($k=0; $k<5; $k++){
                $row4 = mysqli_fetch_assoc($data4);
                if(!empty($row4['컬럼명'])){
                    $data5 = mysqli_query($conn, "SELECT 컬럼명 FROM 테이블명 WHERE no={$row4['컬럼명']};");
                    $row5 = mysqli_fetch_assoc($data5);
                    echo "<li class='list-group-item'><a href='???.php?bookno={$row4['컬럼명']}'>{$row5['컬럼명']}</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>

<?php
include "footer.php";
?>