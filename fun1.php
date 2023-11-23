<?php

/*Q1***********Len********** */
require_once('fun2.php');

function lenString($sentence){
  
    $tmp='';
    $lenSentence=0;
    while (true){
        if($tmp==$sentence){
            return $lenSentence;
            break;
        }
        else{
            $tmp.=$sentence[$lenSentence];
          
            $lenSentence++;
        }
        
    } 
}
echo lenString("raghad AE");
function lenArr($arr){
  
   
    $lenArr=0;
    foreach($arr as $item){
        $lenArr++;
    }
      return $lenArr   ;
    
}
echo " len array ====".lenArr([1,5,9,7,3]).'<br>';
/**Q2*************strlower(s)************************ */

// $sentence="Hello World";


function SwapLowerCaracter($sentence){
    $lowerCarcter='abcdefghijklmnopqrstuvwxyz';
    $UperCarcter='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $newSentence='';
    for($i=0; $i<lenString($sentence);$i++){

        if($sentence[$i]>='A' && $sentence[$i]<='Z'){
            for($j=0 ;$j<lenString($UperCarcter);$j++){
                if ($sentence[$i]==$UperCarcter[$j]){
                    $newSentence.=$lowerCarcter[$j];
                    break;
                }
            }
        }
        else{
            $newSentence.=$sentence[$i];
        }
    
    }
    return  $newSentence;
}

echo SwapLowerCaracter("HellO World");

///Q3///////////////////****************stryoupper*************************** */



function SwapUperCaracter($sentence){
    $lowerCarcter='abcdefghijklmnopqrstuvwxyz';
    $UperCarcter='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $newSentence='';
    for($i=0; $i<lenString($sentence);$i++){
  
        if($sentence[$i]>='a' && $sentence[$i]<='z'){
            for($j=0 ;$j<lenString($lowerCarcter);$j++){
                if ($sentence[$i]==$lowerCarcter[$j]){
                    $newSentence.=$UperCarcter[$j];
                    break;
                }
            }
        }
        else{
            $newSentence.=$sentence[$i];
        }
    
    }
    return  $newSentence;
}

echo SwapUperCaracter("HellO World");

echo '<br>';
/**Q4*********************************************** */
   


function subOfString($Sentence,$fromIndex,$toIndex){
    $tmpword = '';

    for ($i = $fromIndex; $i <$toIndex; $i++) {
   
        $tmpword.= $Sentence[$i];
    }
    return $tmpword;
    


}



$Sentence = 'raghad ali alattas';

$fromIndex = 3;
$toIndex = lenString($Sentence);
echo subOfString($Sentence,$fromIndex,$toIndex);



// $Sentence = 'raghad ali alattas';
// $substring = 'ali';
// $fromIndex = 0;
// $toIndex = -1;

// $subLen = lenString($substring);
// $tmpnum = 1;
// $tmpword = '';

// for ($i = 0; $i < lenString($Sentence); $i++) {
//     if ($tmpnum == $subLen) {
//         if ($tmpword == $substring) {
//             for ($j = $i; $j < lenString($Sentence); $j++) {
//                 $tmpword .= $Sentence[$j];
//             }
//             break;
//         }
//         $tmpnum = 1;
//         $tmpword = '';
//     } else {
//         $tmpnum++;
//         $tmpword .= $Sentence[$i];
//     }
// }

// echo $tmpword;
$Progressive='Progressive';
$Descending='Descending';
// function sortDescArr($a,...$arr){
    
//     foreach($arr as $item){
//         if()
//     }
    
echo '<br>';



// }
$arr=[3,5,1,8];
$convertToString="";

/***************************is number */
function isNumber($arr){
    
    foreach($arr as $item){
        if(!($item >=0 && $item <=9)){
            return 'false';
        }
    }
        return 'true';

}
/***************************is caracter */
function isCaracter($arr) {
    foreach ($arr as $item) {
        echo $item . '>>';
        for ($i = 0; $i < lenString($item); $i++) {
            // echo "is ==] " . $item[$i] . 'i=' . $i . "<br>";

            if (!(($item[$i] >= 'A' && $item[$i] <= 'Z') || ($item[$i] >= 'a' && $item[$i] <= 'z'))) {
                return 'false';
            }
        }
    }
    return 'true';
}

echo "is number " . isNumber([null, 5, 5, 8]) . "<br>";
echo "is Caracter " . isCaracter(['p', 'A6n', 'ckjkj']) . "<br>";

// foreach ($arr as $item){
//     $convertToString.=$item .' , ';

 
// }
// echo $convertToString;
/******************min number*************************** */

function minNumber($arr){
    $minnum=$arr[0];
    foreach($arr as $item){
        if($minnum>=$item){
            $minnum=$item;
        }
    }
    return  'min = '.$minnum;
}
/**********************************max**********************/
function maxNumber($arr){
    $maxnum=$arr[0];
    foreach($arr as $item){
        if($maxnum<=$item){
            $maxnum=$item;
        }
    }
    return  'max = '.$maxnum;
}
$arr2=[3,5,1,8];
echo  minNumber($arr2);

echo  maxNumber($arr2);

/*********************************pop********************* */

function popInArr($arr, $index)
{
    $arr2 = [];
    
    for ($i = 0; $i < count($arr); $i++)
    {
        if ($i !== $index)
        {
            $arr2[] = $arr[$i];
        }
    }
    
    return $arr2;
}

echo "arr pop: ";
print_r(popInArr([1, 5, "p", 8], 3));
/**************************push   */
function pushInArr($arr, ...$elements)
{
    $arr2 = [];
    foreach ($elements as $element) {
        $arr2[] = $element;
        $arr[] = $element;
    }
    
    return $arr2;
}

print_r(pushInArr([1, 5, "p", 8], "qq", 1,8));
     echo "<br>";
//     for ($i=0 ;$i <len($arr);$i++){
//         for ($j=$i; $j<lenString($arr);$j++){
//             if($arr[$j]>$arr[$j-1]){
//                 $tmp=$arr2[$j-1];
//                 $arr2[$j-1]=$arr2[$j];
//                 $arr2[$j]=$tmp;
 
//             }
//         }
//     }


/*************************************************search */
function searchInArr($arr,$value){
    for($i=0; $i<lenArr($arr);$i++){
        if($arr[$i]==$value){
            return $i;
        }
    }
}
echo '<br>'.'Search';
echo searchInArr([1,5,9],5);
echo '<br>';
// function sortarr($arr)
// {
//     $arr2=[];
  
//     while (true)
//     {
//         if (empty($arr))
//             {
//                 return $arr2;
//                 break;
//             }
//         else{
//             $minnum=minNumber($arr);
//             pushInArr($arr2,$minnum);
//             $minIndex = searchInArr($arr, $minnum);
//             popInArr($arr,$minIndex);
//             // $count+=1;
//         }
//     }

// }
// echo 'sort =='.sortarr([3,5,1,8]);





function sortarr($arr)
{
    $arr2 = [];

    while (true)
    {
        if (empty($arr))
        {
            return $arr2;
            break;
        }
        else {
            $minnum = min($arr);
            $minIndex = searchInArr($minnum, $arr); 
            $arr2[] = $minnum; 
            unset($arr[$minIndex]); 
        }
    } 

    return $arr2;
}

echo 'sort ==';
// print_r(sortarr([3, 5, 1, 8]));






/******************************avrge */

function average($a,...$b){
    $count=0;
    $sum=0;
    foreach ($b as $val)
    {
        $sum+=$val;
        $count+=1;

    }
    
    $average = $sum / $count;

    return $average;
}

/*****************************internet***************pos */
function strposition($haystack, $needle)
{
    $haystackLength = strlen($haystack);
    $needleLength = strlen($needle);

    for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
        $found = true;

        for ($j = 0; $j < $needleLength; $j++) {
            if ($haystack[$i + $j] != $needle[$j]) {
                $found = false;
                break;
            }
        }

        if ($found) {
            return $i;
        }
    }

    return false;
}

$haystack = "Hello, World!";
$needle = "World";
$result = strposition($haystack, $needle);
echo'<br>';
echo "Position: " . $result.'<br>';





/****************************************is empty */

 function isempty($text){
    // for($i=0; $i<lenString(t))
    if($text==''){
        return true;
    }
    else{
        return false;
    }


 }
$text='';
$text1='A';

 echo 'emp= '.isempty($text);
 echo false;


 /*****************array merge**************************** */


 function mergeArrS($arr,... $arr2)
 {
    $arrMerge=[];
    foreach($arr as $item){
        $arrMerge.=$item;
    }
    foreach ($arr2 as $array) 
    {
        foreach($array as $item2)
        {
         $arrMerge.=$item2;

        }
    }
    return $arrMerge;
    
 }

 $arr=[1,2,3,4];
 $arr2=['A',"b","c"];
 $arr3=[false, true];


 echo 'arrMerge= '.mergeArrS($arr,$arr2,$arr3).'<br>';





 /************in_array******************************************* */

 function inArr($arr,$itemArr)
 {

    foreach($arr as $item)
    {
        if($itemArr ==$item)
        {
            return true;
        }
        
    }
    return false;
 }

echo 'in arr'.inArr($arr,'5').'<br>';
echo 'in arr'.inArr($arr,1).'<br>';

/************************************arraykey***************************** */
function getKeys($arr)
{
    $arrKeys = [];
    foreach ($arr as $key => $value) {
        $arrKeys[] = $key;
    }
    return $arrKeys;
}

$array = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);

$keys = getKeys($array);
echo 'keys == ' . implode(', ', $keys).'<br>';

/************************************arrayValuse***************************** */
function getValues($arr)
{
    $arrVals = [];
    foreach ($arr as $key => $value) {
        $arrVals[] = $value;
    }
    return $arrVals;
}



$Vals = getValues($array);
echo 'valuse == ' . implode(', ', $Vals).'<br>';
/***************************************key exit********** */

function isKeyExits($arr,$keypars)
{
    
    foreach ($arr as $key => $value) {
        if($keypars==$key)
        {
            return true;
        }
        
    }
    return false;
}

/********************array product******************************** */
function productArr($arr)
{
    $prod=1;
    if(isNumber($arr)){
        foreach ($arr as $item) {
           $prod*=$item;
            
        }
        return $prod;
    }
    else{
        return 'error';
    }
   
}
echo productArr([2,3,4,5]).'<br>';

/******************************first key********************************** */

function firstKey($arr)
{
    
    $keys = getKeys($arr);
    return $keys[0];

    
}
/******************************************last key */
function lasttKey($arr)
{
    $count=lenArr($arr);
    $keys = getKeys($arr);
    return $keys[$count-1];
}

echo 'firstKey='.firstKey($array).'<br>';
echo 'lastKey='.lasttKey($array).'<br>';


/*****************array is list************************ */

function isListKey($arr){
    $keys = getKeys($arr);
    if(isNumber( $keys)){
        $index=0;
       
        foreach($arr as $key=>$val)
         {
            if ($index !=  $key ) 
            {
                return false;
            }
            else{
                $index++;
            }
            // {
            //     $index++;
            //     continue;
            // }
          
            // elseif (($key - $index) != 1) 
            //  {
            //     return false;
            //  }
             
          }
          return true;
    }
    

}
$arraynum=array(
    0 => 'value1',
    4 => 'value2',
    2 => 'value3'
);

echo isListKey($arraynum);




/***************************************array_count_values******/

    function countValInArr($arr)
    {   $arrvalueCount=array();
        foreach($arr as $item)
        {
            if(!isKeyExits($arrvalueCount,$item))
            {
                $arrvalueCount[$item]=1;
            }
            else{
                $arrvalueCount[$item]+=1;

            }
        }
        return $arrvalueCount;
    }
    $arrcount=array('Nan',2,"Hello","Hello",2,2,'Nan');
   $x=countValInArr($arrcount);
    foreach ($x as $key => $value) {
        echo "$key: $value<br>";
    }

    /********************date************************random */
    

function monthofdate($date)
{
    $month = subOfString($date, 5, 7);
    return  $month;

}
echo monthofdate('2023-05-06').'<br>';

function yearofdate($date)
{
    $year = subOfString($date, 0, 4);
    return  $year;

}
echo yearofdate('2023-05-06').'<br>';
function dayofdate($date)
{
    $day = subOfString($date, 8, 10);
    return  $day;

}
echo dayofdate('2023-05-06').'<br>';

/***********************transfrom ********************* */

function bytesToKilobytes($bytes)
{
    $kilobytes = $bytes / 1024;
    return $kilobytes;
}

$bytes = 1024; 
$kilobytes = bytesToKilobytes($bytes);
function bytesToMegabytes($bytes)
{
    $megabytes = $bytes / 1048576;
    return $megabytes;
}

$bytes = 1024; 
$megabytes = bytesToMegabytes($bytes);

/****************************************check date */
echo 'date=='.checkdate(3,22,1); 

function isdatevalid($month,$day,$year)
{
    if(($month>=1 && $month<=12)&&($day>=1 &&$day<=31)&&($year>0 ))
    {
        return true;
    }
    else{
        return false;
    }
}
echo "d".isdatevalid(12,31,2000).'<br>';



/*********************************date diff************** */

// function isdatevalid($date1,$date2)
// {
//     if(!($date1 instanceof DateTime && $date1 instanceof DateTime ))
//         {
//             return 'error should give data type';
//         }
//     elseif($date1->format('Y-m-d H:i:s');)
//     {
//         return true;
//     }
//     else{
//         return false;
//     }
// }
// echo "d".isdatevalid(12,31,2000).'<br>';
// $date1 = new DateTime('2000-02-02');
// $date2 = new DateTime('1200-03-03');
// // echo $date1."<br>";
// $interval = date_diff($date1, $date2);

// echo $interval->format('%y years, %m months, %d days');




?>

