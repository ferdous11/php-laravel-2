<?php 
 $studentGrades= [
                    "Student1"=>["Math"=>5.0,"English"=>5,"Science"=>5],
                    "Student2"=>["Math"=>4.5,"English"=>5.0,"Science"=>4.0],
                    "Student3"=>["Math"=>3.5,"English"=>4,"Science"=>3.5]
                 ];
fnAverageGrade($studentGrades);
function fnAverageGrade($studentGrades){
    foreach($studentGrades  as $key=>$arr){
        $result = number_format(array_sum($arr)/3,2);
        if($result==5)
            echo $key." A+\n";
        else if($result>=4.5)
            echo $key." A\n";
        else if($result>=4)
            echo $key." A-\n";
        else if($result>=3.5)
            echo $key." B\n";
        else if($result>=3)
            echo $key." C\n";
        else if($result>=2.5)
            echo $key." D\n";
        else
            echo $key." F\n";
    }
}  