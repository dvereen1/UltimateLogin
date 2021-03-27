/*const docWidth = document.documentElement.offsetWidth;
////console.log(docWidth);*/
/*[].forEach.call(
    document.querySelectorAll("*"),
    function(el) {
        if(el.offsetWidth > docWidth){
            ////console.log(el);
        }
    }
);*/
//=========Navigation=============/
(function toggleNav(){
    const nav = document.querySelector(".nav-menu");
    const navToggle = document.querySelector(".nav-toggle");
    
    ////console.log("this is the navigation height: ", navHeight);
    let navShowing = false;

    navToggle.addEventListener("click", function(){
        nav.classList.toggle("active");
        navShowing ? nav.style.height = 0 : nav.style.height = nav.scrollHeight + "px";
        navShowing = !navShowing;
    });
})();
//Define references to HTML Form Elements
let form = document.getElementById("reg-form");
let firstName = document.getElementById("firstName");
let lastName = document.getElementById("lastName");
let email = document.getElementById("email");
let username = document.getElementById("username");
let password = document.getElementById("password"); 
let confirmPassword = document.getElementById("confirmPassword");
let subBtn = document.querySelector(".sub-btn");
let smallsArr = document.getElementsByTagName("small");
//const formGrp1 = [firstName, lastName, email];
const formArr = [firstName, lastName, email, username, password, confirmPassword];

let validator = new Validator();
let valid;
//===========Next Button Event Handling==========//
(function handleNextBtn(){
    const nextBtn = document.querySelector(".next-btn");
    const group1 = document.querySelector(".input-group-1");
    const group2 = document.querySelector(".input-group-2");
    nextBtn.addEventListener("click", function(event){
        event.preventDefault();
        //Process inputs with functions held in the Validator class
        valid = validator.check([formArr[0], formArr[1], formArr[2]], true);
        if(valid){
            //group 1 inputs are valid, hide group 1 input fields and next button and reveal the group 2 input fields and submit button
            group1.classList.add("hider");
            nextBtn.classList.add("hider");
            const timeId = setTimeout(function(){
                group1.style.display = "none";
                nextBtn.style.display = "none";
                group2.classList.add("revealer");
                group2.style.width = "inherit";
                subBtn.classList.add("revealer");
                clearTimeout(timeId);
            }, 750);    

        }
    });
})();
//============ Submit Button Event Handling =================//
subBtn.addEventListener("click", event => { 
     event.preventDefault();
     //Process inputs with functions held in the Validator class
     valid = validator.check([formArr[3], formArr[4], formArr[5]], true);
     if(valid){
         const formData = new FormData(form);
         fetch("registerLogic.php", {
            method: "post",
            body: formData
         }).then(response => response.json()
            //response => response.text()
            /*function(response){
                //console.log(response);
                return response.text();
            }*/
        ).then( data => {
             //Defining scenarios for the data received
             //console.log(data); 
             //let proceed = false;
             if(typeof data === 'string'){
                switch(data){
                    case "Name":
                        alert("Invalid name.");
                        break;
                    case "Username":
                        alert("Invalid username.")
                        break;
                    case "Username Taken":
                        alert("Use different username");
                        break;
                    case "Email":
                        alert("Invalid email.");
                        break;
                    case "Email Taken":
                        alert("Use different email.");
                        break;
                    case "Password":
                        alert("Invalid password.");
                        break;
                    case "Non-match":
                        alert("Passwords must match.");
                        break;
                    case "Empty":
                        alert("All fields must be filled");
                        break;
                    case "Success":
                         //No errors encountered. Redirect to login page.
                         window.location.href = "../Login/login.php";
                        break;
                }
             }else if(data.dbConnError || data.queryError || data.prepStatError){// values defined in a php database connection class
                alert("Encountered database error.\nPlease try again later.");
             }
            }
         ).catch(error =>{
             console.error(error);
         });
         
     }
     
});



