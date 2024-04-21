fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
        // Обработка данных
        console.log(data); // Вывод данных в консоль для примера
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
