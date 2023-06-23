let defUser = "admin";
let defPass = "password";




function signIn(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let result = document.getElementById("alert");


    if(username === defUser && password === defPass){
       result.innerText= "Successfully signed-in";
       result.classList.add("bg-success");
    }
    else if(username === null || password === null || password === "" || username === ""){
       result.innerText= "Username/Password is empty";
       result.classList.add("bg-warning");
    }
    else{
       result.innerText= "Invalid Account, Please try again.";
       result.classList.add("bg-danger");
    }  
}