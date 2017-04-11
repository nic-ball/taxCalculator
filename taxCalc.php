<?php
// UK Tax Calculator 2017/2018

function taxCalc($income)
{
    $personalAllowance = 11500;

    // Started with the highest tax band of 45% to remove it from later equations
    if ($income >= 150001)
    {
        $tax45 = ($income - 150000) * 0.45;
        $tax40 = (105000 * 0.40);
        $tax20 = (33500 * 0.20);

        echo "Gross Salary is: " . $income;
        echo "Tax Paid @ 45% is: " . $tax45;
        echo "Tax Paid @40% is: " . $tax40;
        echo "Tax Paid @20% is: " . $tax20;
        echo "Net Salary is: " . $tax45 . $tax40 . $tax20;
    }
    // Then Higher rate  of %40 which is split into two sections to allow for the personal allowance of 11500
    // If earnings are under 100000
    elseif ($income >= 45001 && $income <= 150000)
    {
        if ($income < 100000) {
            $tax40 = ($income - 45000) * 0.40;
            $tax20 = (22500 * 0.2);

            echo "Gross Salary is: " . $income;
            echo "Tax Paid @40% is: " . $tax40;
            echo "Tax Paid @20% is: " . $tax20;
            echo "Tax Paid @0% is: " . $personalAllowance;
            echo "Net Salary is: " . $tax40 . $tax20 . $personalAllowance;

        } else {

            $tax40 = ($income - 45000) * 0.40;
            $tax20 = (33500 * 0.2);

            echo "Gross Salary is: " . $income;
            echo "Tax Paid @40% is: " . $tax40;
            echo "Tax Paid @20% is: " . $tax20;
            echo "Net Salary is: " . $tax40 . $tax20;
        }

    }
    // 20% Tax Band
    elseif ($income >= 11501 && $income <=45000)
    {
        $tax20 = ($income - 11500) * 0.2;

        echo "Gross Salary is: " . $income;
        echo "Tax Paid @20% is: " . $tax20;
        echo "Tax Paid @0% is: " . $personalAllowance;
        echo "Net Salary is: " . $tax20;
    }
    // Personal allowance
    elseif ($income <= 11500)
    {
        echo "Gross Salary is: " . $income;
        echo "Tax Paid @0% is: " . $personalAllowance;
        echo "Net Salary is: " . $personalAllowance;
    }

}