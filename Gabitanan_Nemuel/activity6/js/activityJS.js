let mainEmail = "admin";
let mainPassword = "password";

function login(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let result = document.getElementById("alert");
    let resultTxt = document.getElementById("alert-txt");
    result.classList.add("py-3");

    if(username === mainEmail && password === mainPassword){
       resultTxt.innerText= "Successfully signed-in";
       result.classList.add("bg-success");
       result.classList.remove("bg-warning");
       result.classList.remove("bg-danger");
    }
    else if(username === null || password === null || password === "" || username === ""){
       resultTxt.innerText= "Username/Password is empty";
       result.classList.remove("bg-success");
       result.classList.add("bg-warning");
       result.classList.remove("bg-danger");
    }
    else{
       resultTxt.innerText= "Invalid Account, Please try again.";
       result.classList.remove("bg-success");
       result.classList.remove("bg-warning");
       result.classList.add("bg-danger");
    }  
}

document.addEventListener("keydown",function(event) {

    if (event.key === "Enter") {

      signIn();
    }
  });