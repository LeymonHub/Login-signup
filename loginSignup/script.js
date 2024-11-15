document.getElementById("createAccount").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("loginFormContainer").style.display = "none";
    document.getElementById("signupFormContainer").style.display = "block";
});

document.getElementById("showLogin").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("signupFormContainer").style.display = "none";
    document.getElementById("loginFormContainer").style.display = "block";
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
    const email = event.target.email.value;
    const password = event.target.password.value;

    if (email === "" || password === "") {
        alert("Please fill out all fields.");
        event.preventDefault(); 
    }
});

document.getElementById("signupForm").addEventListener("submit", function(event) {
    const fullName = event.target.fullName.value;
    const email = event.target.email.value;
    const password = event.target.password.value;

    if (fullName === "" || email === "" || password === "") {
        alert("Please fill out all fields.");
        event.preventDefault();
    }
});
