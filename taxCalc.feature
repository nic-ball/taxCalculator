//Create a Tax Calculating program in php
//That shows tax free allowance @ 0% <=11500
//Basic rate @20% >11500 <33500
//Higher rate @40% >33500 <=45000
//Additional rate @45% >45000


Feature: UK Income Tax Calculator
  In order to calculate amount of tax to be paid
  As a customer
  I need to be able to input my gross salary and calculate the tax

  Rules:
  - Personal Allowance of £11500 at 0%
  - Basic Rate between 11500 and 33500 at 20%
  - Higher Rate between 33501 and 45000 at 40%
  - Additional Rate over 45001 at 45%

Scenario: Calculate tax from gross salary
