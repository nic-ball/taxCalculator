<?php

function getTax($salary) {
    $taxRate = 0;

    if ($salary >= 0 && $salary <=11500) {
        $taxRate = 0;
    } elseif ($salary >= 11501 && $salary <= 33500) {
        $taxRate = 20;
    } elseif ($salary >= 33501 && $salary <= 45000) {
        $taxRate = 40;
    } else {
        $taxRate = 45;
    }

    // Calculating tax to pay
    $total = $salary * $taxRate / 100;
    return $total;
}