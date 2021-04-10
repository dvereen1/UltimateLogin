const docWidth = document.documentElement.offsetWidth;
//console.log(docWidth);

[].forEach.call(
    document.querySelectorAll("*"),
    function(el) {
        if(el.offsetWidth > docWidth){
            //console.log(el);
        }
    }

);

//=========Navigation=============/
(function toggleNav(){
    const nav = document.querySelector(".nav-menu");
    const navToggle = document.querySelector(".nav-toggle");
    const navHeight = nav.scrollHeight;
    let navShowing = false;

    navToggle.addEventListener("click", function(){
        nav.classList.toggle("active");
        navShowing ? nav.style.height = 0 : nav.style.height = navHeight + "px";
        navShowing = !navShowing;
    });
})();



let loginForm = document.getElementById("login-form");
let username = document.getElementById("username");
let password = document.getElementById("password");
let loginBtn = document.getElementById("login-btn");
const formArr = [username, password];

let validator = new Validator();

loginBtn.addEventListener("click", event => {

    event.preventDefault();
   
    let valid = validator.check(formArr, false);
    ////console.log("is the form valid? " + valid);
    let redirect = true;
    //console.log("Should we redirect?", redirect);
    if(valid){//send form data to php script
        const formData = new FormData(loginForm);
        
       fetch("loginLogic.php", {
            method: "post",
            body: formData
         }).then(response => response.json())
          //response => response.text())
        .then(data => {
            ////console.log("This is the data from php: " + data);
            if(typeof data === "string"){
                switch(data){
                    case "Username":
                        //console.log("user name doesn't exist");
                        //alert("Invalid username");
                         //there is a <small> element adjacent to each input field
                         username.nextElementSibling.textContent = "Invalid Username";
                         username.nextElementSibling.classList.toggle("active");
                    break;
                    case "Password":
                        //alert("Invalid password");
                        password.nextElementSibling.textContent = "Invalid Password";
                        password.nextElementSibling.classList.toggle("active");
                    break;
                    case "Valid Password":
                        //redirect to homepage;
                        location.replace("/ultimLogin/profile");
                    break;
                }
            }else if(data.dbConnError || data.queryError || data.prepStatError){// data... values are defined in a php database connection class
                alert("Encountered database error.\nPlease try again later.");
             }
        }).catch(error => {
            //console.log("Error: " + error);
            alert("Authenticaiton error \nPlease try again later.");
            redirect = false;
        });
    }

});