<?php
$temp=25.6;
$age=21;
$welcomeMassage="Good morning";
$isTodayWednesday=true;
$array=[
    $temp,
    $age,
    $welcomeMassage,
    $isTodayWednesday
];
/*
for($i=0;$i<=3;$i++){
    echo $array[$i];
    echo "<br>";
}*/

//еднакъв с for цикъла
$i=0;
//while ($i<=3){
//    echo $array[$i];
//    echo "<br>";
//    $i++;
//}
//$animals=["cat","dog","mouse"];
//$lookingforDog=true;
//while($lookingforDog){
//    echo $animals[$i];
//    echo "<br>";
//    $i++;
//    if($animals[$i]==="dog"){
//        echo "Dog not found";
//        echo "<br>";
//        $lookingforDog=false;
//    }
//}

//асоциативен масив. С индексите отпред се извежда променливата
$assocArray=[
    "welcome"=>$welcomeMassage,
    "istodayWednesday"=>$isTodayWednesday,
    "age"=>$age,
    "temp"=>$temp,
];
// изавеждане на асоциативни масиви(sus kluchovete(indexite))
//foreach ($assocArray as $key=>$item) {
//    echo $key;
//    echo "<br>";
//    echo $item;
//    echo "<br>";
//}
//$tmyAge=25;
//$myFrAge=25;
//if($tmyAge > $myFrAge){
//    echo"I'm older";
//
//}elseif ($tmyAge===$myFrAge){
//    echo "We are the same age";
//}
//else{
//    echo"I'm younger";
//}


//print_r(array_keys($assocArray["welcome"]));


//$username="drago";
//switch ($username){
//    case "dr":
//        echo "Pass: 2113";
//        break;
//    case "drag":
//        echo "Pass: dadas";
//        break;
//
//    default:
//        echo "pass:sukaa";
//}

function whatIsTheWeather($dayOfTheWeek){
    Switch ($dayOfTheWeek){
        case "Monday";
        echo "Today is 24 degrees";
        break;
        case "Tuesday":
            echo "Today is 25 degrees";
            break;
        case"Wednesday":
            echo "Today is 2 degrees";
            break;
        case"Thursday":
            echo "Today is 4 degrees";
            break;

    }
}
$dayOfTheWeek= "Monday";