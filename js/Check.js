document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("check").onsubmit = function () {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        if (username === '' || password === '') {
            document.getElementById('error_message').innerText = 'Please fill in all fields';
            return false;
        }

        // Если все поля заполнены, возвращаем true для отправки формы
        return true;
    }
});