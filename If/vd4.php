<?php
$student_name = 'Nguyễn Văn A';
$test_score = array(70, 85, 92, 78, 89);
$sum = array_sum($test_score);
$average = $sum / count($test_score);

if ($average >= 90) {
    $grade = "A";
} else {

    if ($average >= 80) {

        $grade = "B";
    } else {

        if ($grade >= 70) {

            $grade = "C";
        } else {

            if ($grade >= 60) {

                $grade = "D";
            } else {

                $grade = "F";
            }
        }
    }
}
echo " Sinh viên $student_name có điểm trung bình là $average , xếp loại học lực $grade ";