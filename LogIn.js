
function checker(){

    var getemail  = document.getElementById('inputEmail4').value
    var getpass  = document.getElementById("inputPassword4").value
    
    

    if(getemail == "Maro" && getpass == "1317"){

        
        window.location.href = "./project.php"
       
        

    }
    else{

        alert("Try again ")
    }
}

