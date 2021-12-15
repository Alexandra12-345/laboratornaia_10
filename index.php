<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа 10</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);


        //Поиск минимального по модулю элемента
        $min=0;
            for($i=1; $i<count($myArray); $i++){
                if(abs($myArray[$i])<abs($myArray[$min])){
                    $min=$i;
                }
            }
        $minim = $myArray[$min];

        //подсчет суммы модулей чисел после первого нуля
        $ind0;
        for($h=0; $h<count($myArray); $h++){
            if($myArray[$h]==0){
                $ind0=$h;
                break;
            }
        }
        $sumModuls = 0;
        for($k = $ind0+1; $k<count($myArray); $k++){
            $sumModuls+=abs($myArray[$k]);
        }

    
        //массив, где сначала стоят элементы, которые стояли в четных позициях, а затем элементы, стоявшие на нечетных позициях
        $chet=[];
        $nechet=[];
        for($l = 0;$l<count($myArray); $l++){
            if($l%2==0){
                $chet[]=$myArray[$l];
            }
            else{
                $nechet[]=$myArray[$l];
            }
        }
        $myArray=array_merge($chet, $nechet);

        echo "Минимальный по модулю элемент: ".$minim."; Сумма модулей чисел после первого нуля ".$sumModuls."; Массив, где сначала стоят элементы, которые стояли в четных позициях, а затем элементы, стоявшие на нечетных позициях: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>