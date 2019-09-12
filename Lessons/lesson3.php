<?php
//==================================================Foreach

//$arr = [
//    [1,2,3,4,5,6,7,8,9,0],
//    [1,2,3,4,5,6,7,8,9,0]
//];
//foreach ($arr as &$i){
//    foreach ($i as &$j){
//        $j *= 2;
//    }
//}
//var_dump($arr);

//$arr = [
//    "name" => "Leha",
//    "lNam" => "petrov"
//];
//foreach ($arr as $key => $value){
//    echo $key . " = " . $value;
//}

//==================================================Function

//function add($a, $b): double{
//    return $a + $b;
//}
//
//echo add(2,2);

//$num = 4;
//function pow2(int &$a){
//    $a = $a*$a;
//}
//pow2($num);
//echo $num;


//function charCount(string $arr): int
//{
//    $count = 0;
//    while (isset($arr[$count])) {
//        $count++;
//    }
//    return $count;
//}
//$arr = [];
//for ($i = 0; $i < 10; $i++) {
//    $arr[] = rand(0, 10);
//}
//$str = "97987987";
//var_dump($str);
//echo charCount($str);

//$str = "kjhgbfuiy";
//function charReplace(string $search, string $replace, string $str):string{
//    $arr = str_split($str);
//    $ans = "";
//    foreach ($arr as $i){
//        implode($arr);
//        if ($i == $search){
//            $ans .= $replace;
//        }
//        else{
//            $ans .= $i;
//        }
//    }
//    return $ans;
//}
//echo charReplace("kj", "0", $str);

//function fib($index){
//    ($index[0] != count($index)-1 ? $index[] = $index[count($index)-3] + $index[count($index)-1]: return $index[count($index)-1]);
//}
//echo fib(7);

//$arr = [];
//$arr = array_fill(0, 10, rand(0, 100));
//var_dump($arr);

function sortString(string $str): string{
    $x = "";
    for ($i = 0; $i < strlen($str); $i++){
        for ($j = strlen($str)-1; $j > $i; $j--){
            if ($str[$j-1] > $str[$j]){
                $x = $str[$j-1];
                $str[$j-1] = $str[$j];
                $str[$j] = $x;
            }
        }
    }
    return $str;
}
echo sortString("kfghwkjfghabwkfcjvh");