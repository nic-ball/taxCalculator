//Create a Tax Calculating program in php
//That shows tax free allowance @ 0% <=11500
//Basic rate @20% >11501 <=45000
//Higher rate @40% >45000 <=150000
//Additional rate @45% >150000


Feature: UK Income Tax Calculator
  In order to calculate amount of tax to be paid
  As a customer
  I need to be able to input my gross salary and calculate the tax

  Rules:
  - Personal Allowance of £11500 at 0%
  - Basic Rate between 11500 and 45000 at 20%
  - Higher Rate 45000 at 40%
  - Additional Rate over 150001 at 45%

Scenario: Calculate tax from gross salary
  Given there is a person called "Nic"
  And there is a gross salary to input
  And "Nic" has inputted a gross salary
  When "Nic" presses the submit button
  Then "Nic" should receive the amount of tax he should pay

Scenario: Attempting to calculate tax without inputting a gross salary
  Given there is a person called "Jim"
  And there is no gross salary to input
  And "Jim" has not inputted a gross salary
  When "Jim" presses the submit button
  Then "Jim" should not receive the amount of tax to pay
