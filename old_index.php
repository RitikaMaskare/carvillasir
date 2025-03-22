<?php
/*
$marks=60;
$color="red";
$message="Student Failed...";
$tag="h1";
if($marks>=0 && $marks<35)
{
    echo "<$tag style='color:$color'> $message </$tag>";
}else if($marks>=35 && $marks<65){
    echo "<h1 style='color:green'>Pass</h1>";
}else if($marks>=65 && $marks<=100){
    echo "Destinction";
}else{
    echo "Invalid Marks";
}*/
/*
$i=0;
$colors=["red","green","blue","yellow","violet","red","green","blue","yellow","violet"];
//print_r($colors) ;
// print_r($colors[2]);
while($i<=9)
{
    $color=$colors[$i];
    echo " <h3 style='color:$color'> $i </h3>";
    $i++;
}
    */

$cities = array("Amt", "Akl", "Pune", "Delhi");
/*for($i=0; $i<count($cities);$i++)
{
    echo $cities[$i];
    echo "<br>";
}*/
/*$i=0;
while($i<count($cities))
{
    echo $cities[$i];
    echo "<br>";
    $i++;
}
*/
/*
$student1=array("name"=>"RAJ","age"=>25);
$student2=array("name"=>"SIMRAN","age"=>20);
$student3=array("name"=>"SAYALI","age"=>20);
$student4=array("name"=>"OM","age"=>18);
$students=array($student1,$student2,$student3,$student4);
$school=array("students"=>$students);

//print_r($school["students"][2]["name"]);


foreach($school as $key=>$std)
{
    for($i=0; $i<h1 count($std); $i++)
    {
        $s=$std[$i];
            print_r($s["name"]  . " - ". $s["age"] );
            echo "<br>";
    }

}*/


/*
foreach($student as $key=>$value)
{
    echo "$key => $value" ;
    echo "<br>";
}
*/
/*
$add=addition(10,20);
addition($add,$add);


function addition($num1,$num2)
{
    $add=$num1+$num2;
    echo "Adddition of $num1 and $num2 is $add";
    echo "<br>";
    return $add;
}*/

//Super Global Variable 
/*
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "admin" && $password == "admin") {
    $result=array("result"=>1,"message"=>"Login Success");
    $result=json_encode($result);
    print_r($result);



} else {
    $result=array("result"=>0,"message"=>"Login Failed");
    $result=json_encode($result);
    print_r($result);

}
*/

print_r(json_encode($_POST));