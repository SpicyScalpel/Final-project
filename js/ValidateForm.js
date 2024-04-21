document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registration").onsubmit = function() {
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var birthdate = document.getElementById('birthdate').value;
        var location = document.getElementById('location').value;
        var phone = document.getElementById('phone').value;
        var email = document.getElementById('email').value;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Проверка наличия данных в каждом поле
        if (firstName === "" || lastName === "" || birthdate === "" || location === "" || phone === "" || email === "" || username === "" || password === "") {
            alert("All fields are required");
            return false; // Предотвращает отправку формы, если какое-то поле не заполнено
        }

        // Предположим, что формат даты рождения - гггг-мм-дд
        var birthdatePattern = /^\d{4}-\d{2}-\d{2}$/;
        if (!birthdate.match(birthdatePattern)) {
            alert("Invalid date of birth format");
            return false;
        }

        var phonePattern = /^\+?\d{7,}$/;
        if (!phone.match(phonePattern)) {
            alert("Invalid phone number format");
            return false;
        }

        // Проверка формата email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailPattern)) {
            alert("Invalid email format");
            return false;
        }

        if (password.length < 8) {
            alert("Password must be at least 8 characters long");
            return false;
        }
        // Если все проверки пройдены, форма отправляется
        return true;
    }
});
