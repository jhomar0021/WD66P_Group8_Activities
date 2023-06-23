let defUser = "admin";
let defPass = "password";




function signIn(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;


    if(username === defUser && password === defPass){
        document.getElementById("alert").innerHTML= "Successfully signed-in";
    }
    else if(username === null || password === null || password === "" || username === ""){
        document.getElementById("alert").innerHTML= "Username/Password is empty";
    }
    else{
        document.getElementById("alert").innerHTML= "Invalid Account, Please try again.";
    }  
}