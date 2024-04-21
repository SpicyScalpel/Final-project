<h2>Registration</h2>
    <form id="registration" action="Register.php" method="post">
        <div class="mb-3">
            <label for="firstName" class="form-label">Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Surname</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Date of birth</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>
        <?php
        $url = 'https://restcountries.com/v3.1/all';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        // Проверка на успешное получение данных
        if ($data) {
            // Создание выпадающего списка
            echo '<div class="mb-3">';
            echo '<label for="location" class="form-label">Country</label>';
            echo '<select class="form-control" id="location" name="location" required>';

            // Перебор полученных данных о странах
            foreach ($data as $country) {
                // Добавление вариантов в выпадающий список
                echo '<option value="' . $country['name']['common'] . '">' . $country['name']['common'] . '</option>';
            }

            echo '</select>';
            echo '</div>';
        } else {
            // Обработка ошибки получения данных
            echo '<p>Error fetching data from API</p>';
        }
        ?>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
<script src="../js/ValidateForm.js"></script>