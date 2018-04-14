var date = document.getElementById("date");
var datee= document.getElementById("datee");
var day;
var month;
var year;
var d;
var m;
var y;

// day
day = window.prompt("enter the day");
// month
month = window.prompt("enter the month");
// year
year = window.prompt("enter the year");

d = parseInt(day);
m = parseInt(month);
y = parseInt (year);

{date.textContent = (+ d +"/"+ m +"/" + y+ ".");}
{datee.textContent=(+ d +"/"+ m +"/" + y+ ".");}