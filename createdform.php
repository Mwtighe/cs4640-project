<?php

//created by Mariah Tighe (mwt9dc)

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //initializing values with what the user entered 
    $title = $_POST['title']; 

    $category1 = $_POST['category1'];
    $category2 = $_POST['category2'];
    $category3 = $_POST['category3'];
    $category4 = $_POST['category4'];
    $category5 = $_POST['category5'];

    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];

    $question12 = $_POST['question12'];
    $question13 = $_POST['question13'];
    $question14 = $_POST['question14'];
    $question15 = $_POST['question15'];

    $question22 = $_POST['question22'];
    $question23 = $_POST['question23'];
    $question24 = $_POST['question24'];
    $question25 = $_POST['question25'];

    $question32 = $_POST['question32'];
    $question33 = $_POST['question33'];
    $question34 = $_POST['question34'];
    $question35 = $_POST['question35'];

    $question42 = $_POST['question42'];
    $question43 = $_POST['question43'];
    $question44 = $_POST['question44'];
    $question45 = $_POST['question45'];

    $category = array("$category1", "$category2", "$category3", "$category4", "$category5"); 

    //making arrays to help keep all the information entered organized 
    $cat1ques = array("$question1", "$question2", "$question3", "$question4");
    $cat2ques = array("$question12", "$question22", "$question32", "$question42");
    $cat3ques = array("$question13", "$question23", "$question33", "$question43");
    $cat4ques = array("$question14", "$question24", "$question34", "$question44");
    $cat5ques = array("$question15", "$question25", "$question35", "$question45");

    $questions["$200"] = array("$question1", "$question12", "$question13", "$question14", "$question15");
    $questions["$400"] = array("$question2", "$question22", "$question23", "$question24", "$question25");
    $questions["$800"] = array("$question3", "$question32", "$question33", "$question34", "$question35");
    $questions["$1000"] = array("$question4", "$question42", "$question43", "$question44", "$question45");

    echo "Your game title: " . $title . "<br/>"; 
    echo "Here are the categories and questions you entered: <br/>"; 

    foreach ($category as $cat) 
    {   
        echo $cat . "<br/>";
    }

    echo "$200 Questions: " . "<br/>"; 
    foreach($questions["$200"] as $itemTwo)
    {
        echo $itemTwo . "<br/>"; 
    }

    echo "$400 Questions: " . "<br/>"; 
    foreach($questions["$400"] as $itemFour)
    {
        echo $itemFour . "<br/>"; 
    }

    echo "$800 Questions: " . "<br/>"; 
    foreach($questions["$400"] as $itemEight)
    {
        echo $itemEight . "<br/>"; 
    }

    echo "$1000 Questions: " . "<br/>"; 
    foreach($questions["$400"] as $itemTen)
    {
        echo $itemTen . "<br/>"; 
    }

    echo "Game created: " . date(r) . "<br/>"; 

}
