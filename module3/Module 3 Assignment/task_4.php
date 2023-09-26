<?php 
 $studentGrades= [
                    "Student1"=>["Math"=>5.0,"English"=>4.5,"Science"=>4.5],
                    "Student2"=>["Math"=>4.5,"English"=>5.0,"Science"=>4.0],
                    "Student3"=>["Math"=>3.5,"English"=>4,"Science"=>3.5]
                 ];
fnAverageGrade($studentGrades);
function fnAverageGrade($studentGrades){
    foreach($studentGrades  as $key=>$arr){
        $result[$key] = number_format(array_sum($arr)/3,2);
    }
    print_r($result);
}  