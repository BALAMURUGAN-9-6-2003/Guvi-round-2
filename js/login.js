


const userCredential = {
  email: '',
  password: '',
}

function checkEmail(userInput) {
  console.log(userInput)
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (userInput.match(validRegex)) {
    console.log("Valid email address!");
    userCredential.email = userInput
  } else {
    console.log("Invalid email address!");
    document.form1.text1.focus();
    return false;
  } 
}

const checkPassowrd = (userInput)=>{
  console.log(userInput)
  userCredential.password = userInput
}



const login = ()=>{
  console.log(userCredential)
 
    $.ajax({
        type: 'POST',
        url: 'http://localhost/login.php',
        data: {
          email: userCredential.email,
          password: userCredential.password,
        },
        scache: false,
        success: function(data) {
        console.log(data);
        },
        error: function(xhr, status, error) {
        console.error(xhr, status, error.message);
        }
    });


}





// const eyeIcons = document.querySelectorAll(".show-hide");

// eyeIcons.forEach((eyeIcon) => {
//   eyeIcon.addEventListener("click", () => {
//     const pInput = eyeIcon.parentElement.querySelector("input"); 
//     if (pInput.type === "password") {
//       eyeIcon.classList.replace("bx-hide", "bx-show");
//       return (pInput.type = "text");
//     }
//     eyeIcon.classList.replace("bx-show", "bx-hide");
//     pInput.type = "password";
//   });
// });

// form.addEventListener("SIGN IN", (e) => {
//   e.preventDefault(); 
//   checkEmail();
//   createPass();
 
//   emailInput.addEventListener("keyup", checkEmail);
//   passInput.addEventListener("keyup", createPass);

//   if (
//     !emailField.classList.contains("invalid") &&
//     !passField.classList.contains("invalid")
//     )
//   {
//     location.href = form.getAttribute("action");
//   }
// });