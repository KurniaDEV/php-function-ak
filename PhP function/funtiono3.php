<?php 

function hello()
{
    echo "function body";
}

hello();

$current_user=="mikess";

function is_mike()
{
    global $current_user;
if($current_user=="mikess")
{
    echo "You Is Mike";

}else
{
    echo "nope, You not Mike";
}
}

echo PHP_EOL;

function hellon($nam)
{
    if(is_array($nam)&& !empty($nam))
    {
        foreach($nam as $key)
        {
            echo "hello,$key \n";

        }
    }else
    {
        echo "wtf dude!!";

    }
}

hellon(["mike","andi","buya"]);

echo PHP_EOL;
function Get_info($name,$title=null)
{
    if($title)
    {
        echo "$name was arrived, and came as $title";
    }else
    {
        echo "$name was arrived,Welcome";
    }
}

Get_info("Mike","frog");

echo PHP_EOL;


function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;

    }
    return $result;
}

var_dump(sumArray([1,4,5,5]));

echo PHP_EOL;

function answer()
{
    return "you answer the question";

}

$answer=answer();


echo PHP_EOL;

// callback function

$answer_cal="answer";
echo $answer_cal(). "dude you did it";

// anonimous function

$askName1="what is Your name";

echo PHP_EOL;

$ask=function()use($askName1)
{
    return "ask the question, $askName1 ? ";

};

echo $ask();

echo PHP_EOL;

$magang="Magang TOP jos";

echo strlen($magang);



$team=["Mike"=>"Devloper","chris"=>"Desiner","Hompton"=>",manager"];

print_r(array_keys($team));

var_dump(array_key_exists("John",$team));// array key exists untuk menampilkan bahwah value yang ada itu true or false

array_walk($team,function($value,$key){
    echo "$key is a $value \n";
});