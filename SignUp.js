var daylo = "";
var monthlo = ["jan",'feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'];
var yearlo = "";
var monthSt = "";
var dayElem = document.getElementById("day");
var monElem = document.getElementById("month");
var yrElem = document.getElementById("year");

for(let i = 1900; i <= 2023 ; i++){

    yearlo = yearlo + '<option value = " '+ i + '">' + i + '</option>';
    
}
yrElem.innerHTML = '<option value=""> Select year</option>' + yearlo;


    

for(let i =0; i<12; i++){
    var num = 1;
    num = num + i;
    monthSt = monthSt + '<option  value = " '+ num + '">' + monthlo[i] + '</option>';

}

monElem.innerHTML = '<option value=""> Select year</option>' + monthSt;


   

    
function filldays(){
    var daylo = "";
    var e = document.getElementById("month");
    var monthNum = e.value;
    
    if(monthNum == 4 || monthNum == 6 || monthNum == 9 || monthNum == 11){

        days = 30;

    }
    else if(monthNum == 2){
        var e = document.getElementById("year");
        var yearNum = e.value;
        if(yearNum % 4 == 0){

            days = 29;

        }
        else{

            days = 28;
        }

    }
    else{

        days = 31;
    }

    for(let i = 1; i<=days ; i++){
        
        daylo = daylo + '<option value = " '+ i + '">' + i + '</option>';
        
    }
    dayElem.innerHTML = '<option value=""> Select day</option>' + daylo;

}
    

