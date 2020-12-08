<?php
function cleanSalary(int $hardSalary, bool $isStudent = FALSE):int {
    if($isStudent == TRUE) {
        $cleanSalary = $hardSalary;
    } else {
        $cleanSalary = $hardSalary * 0.90;
    }

    return $cleanSalary;
}
 
function cleanSalaryComplex(int $hardSalary, string $type = '') {
     
    switch ($type) {
        case 'student':
            $tax = 0;
            break;
        case 'corona':
            $tax = 0.05;
            break;
        default:
            $tax = 0.10;
            break;
    }
    $cleanSalary = $hardSalary * (1 - $tax);
    return $cleanSalary;
}
