

var max = $("#horizontal-chart").width();

var budget = 920;
var tender = 900;
var award = 750;
var contract = 700;

var highest = Math.max(budget, tender, award, contract);

$("#chart-budget-amount").width((budget/highest)*max);
$("#chart-budget-amount").append(budget);

$("#chart-tender-amount").width((tender/highest)*max);
$("#chart-tender-amount").append(tender);

$("#chart-awards-amount").width((award/highest)*max);
$("#chart-awards-amount").append(award);

$("#chart-contract-amount").width((contract/highest)*max);
$("#chart-contract-amount").append(contract);


 
