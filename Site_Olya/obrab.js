function showResultMessage(result, answers) {
    console.log("Функция showResultMessage вызвана.");
    var messageBox = document.getElementById('result-message');

    if (messageBox) {
        var resultSpan = document.getElementById('result');
        
        if (result > 2) {
            messageBox.style.backgroundColor = 'lime';

        } else {
            messageBox.style.backgroundColor = '#E3242B';

        }
        

        resultSpan.textContent = result;


        messageBox.style.display = 'block';
    } else {
        console.error("Элемент с id 'result-message' не найден.");
    }
}


document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('survey-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 


        var formData = new FormData(this);

 
        var answers = [
            formData.get('вопрос1'),
            formData.get('вопрос2'),
            formData.get('вопрос3')
        ];


        var result = answers.reduce((total, answer) => total + parseInt(answer), 0);


        fetch(this.action, {
            method: this.method,
            body: formData
        })
        .then(response => response.text())
        .then(resultText => {

            showResultMessage(result, answers);
        })
        .catch(error => {
            console.error('Ошибка отправки формы:', error);
        });
    });
});
