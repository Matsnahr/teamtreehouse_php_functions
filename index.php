<?php

function hello()
{
    echo "Hello, woeld";
}

hello(); //Hello, World

// function is mike()
{
    if($current_user=="mike")
    {
    echo "You is mike";
    }else
    {
    echo "Nope, you not Mike";
    }
}


function helloNne($name)
{
    if(i_array($name) && !empety($name))
    {
        foreach($nama as $key)
        {
            echo "Hello, $key /n";
        }
    }else
    {
        echo "Hello Friend !";
    }
}

halloName(["Mike","Mohede","Bromton"]);

var_dump(empty("0"));


function get_info($name,$title=Null)
{
    if($title)
    {
        echo "$name was arrived,and came as $title";
    }else
    {
        echo "$name was arrived,welcome";
    }
}

get_info("mike","frog");

function hello_world()
{
  return "\nHello, World";  
}

$hello=helloWorld("are you ready to lose ?");

echo $hello;

// ehco PHP_EOL;

function add_up($a,$b)
{
    return [$a,$b,$a+$b];
}

print_r(addUp(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;
    }

    return $result;
}

echo (sumArray([1,4,5,5]));

function answer()
{
    return "You answer the question";
}

$answer=answer();

echo  PHP_EOL;

// callback Function

$answer_cal="answer";

echo $answer_cal()."!!"; //call function

// Anonymous Function

$askName="What is your name ?";

echo PHP_EOL;

$ask=function()use($askName,$name)
{
    return "Ask the question, $askName $nama";
};

echo $ask();

// Build-in string function

$magang="Magang TOP";

echo strlen($magang); //14

br();

echo substr($magang,7); //TOP jos

br();

echo substr($magang,7,6); //TOP jo

br();

echo strpos($magang,"j"); //11

br();

echo $magang[11]; //j

$team=["Mike"=>"Developer","Chirs"=>"Designer","Brompton"=>"Manager"];

print_r(array_key_exists("john",$team));

array_walk($team,function($value,$key){

    echo " $key is a $value \n";
});




print_r

?>