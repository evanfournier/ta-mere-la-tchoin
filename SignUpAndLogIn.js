const xhr = new XMLHttpRequest();

const passwordLogInInput = document.getElementById("passwordLogIn"),
    logInPasswordImage = document.getElementById("showLogInPassword"),
    emailLogInError = document.getElementById("emailLogInError"),
    passwordLogInError = document.getElementById("passwordLogInError");

document.getElementById("logInForm").addEventListener("submit", function (e) {
    e.preventDefault();
    let datas = new FormData(this);
    xhr.open("POST", "LogIn.php", true);
    xhr.responseType = "json";
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 & this.status == 200) {
            let error = this.response;
            emailLogInError.innerHTML = error.email;
            passwordLogInError.innerHTML = error.password;
            console.log(error);
            //Afficher l'erreur principale
            if (error.success == true) {
                window.location.href = "Main.php";
            };
        };
    };
    xhr.send(datas);
});

const oeil = document.querySelectorAll('.see_img')
oeil.forEach((eyes) => {
    eyes.addEventListener('click', function(e) {
        e.preventDefault()
        if (eyes.getAttribute('src') === 'Images/oeilFermé.png'){
            eyes.src = 'Images/oeilOuvert.png';
            document.getElementById(eyes.parentNode.parentNode.getAttribute('for')).type = 'text';
            document.getElementById(eyes.parentNode.parentNode.getAttribute('for')).focus();
        }else{
            eyes.src = 'Images/oeilFermé.png';
            document.getElementById(eyes.parentNode.parentNode.getAttribute('for')).type = 'password';
            document.getElementById(eyes.parentNode.parentNode.getAttribute('for')).focus();
        }
    })
})



document.getElementById("signUpForm").addEventListener("submit", function (e) {
    e.preventDefault();
    let datas = new FormData(this);
    xhr.open("POST", "SignUp.php", true);
    xhr.responseType = "text";
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 & this.status == 200) {
            let error = this.response;
            console.log(error);
            nameSignUpError.innerHTML = error.name;
            emailSignUpError.innerHTML = error.email;
            passwordSignUpError.innerHTML = error.password;
            passwordConfirmationSignUpError.innerHTML = error.passwordConfirmation;
            if (error.success == true) {
                window.location.href = "Main.php";
            };
        };
    };
    xhr.send(datas);
});