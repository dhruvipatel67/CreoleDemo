document.addEventListener("DOMContentLoaded", function () {
    const registerForm = document.getElementById("registerForm");
    if (registerForm) {
        registerForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const profilePhoto = document.getElementById("profilePhoto").value;
            const firstName = document.getElementById("firstName").value.trim();
            const lastName = document.getElementById("lastName").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const phone = document.getElementById("phone").value.trim();
            const address = document.getElementById("address").value.trim();

            const nameRegex = /^[A-Za-z]+$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^[0-9]{10}$/;

            if (!profilePhoto) {
                alert("Please upload a profile photo.");
                return;
            }
            if (!nameRegex.test(firstName)) {
                alert("First name should contain only letters.");
                return;
            }
            if (!nameRegex.test(lastName)) {
                alert("Last name should contain only letters.");
                return;
            }
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return;
            }
            if (!phoneRegex.test(phone)) {
                alert("Phone number must be exactly 10 digits.");
                return;
            }
            if (address === "") {
                alert("Address cannot be empty.");
                return;
            }

            const formData = new FormData(registerForm);
            fetch("register.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.success) {
                    window.location.href = "login.html";
                }
            })
            .catch(error => console.error("Error:", error));
        });
    }


    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
    e.preventDefault();
    
    const email = document.getElementById("loginEmail").value.trim();
    const password = document.getElementById("loginPassword").value;
    
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return;
    }
    
    const formData = new FormData(loginForm);
        fetch("login.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        if (data.success) {
        setTimeout(() => {
        window.location.href = "admin.php";
        }, 1500); 
        }
    })
        .catch(error => console.error("Error:", error));
    });
}
});


