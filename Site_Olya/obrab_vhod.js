document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector(".u-inner-form");
    var log_passw = document.querySelector(".u-form-send-error");
    var closeButtonError = log_passw.querySelector(".u-close-button");

    function hideErrorMessage() {
        log_passw.style.display = "none";
    }

    closeButtonError.addEventListener("click", hideErrorMessage);

    var submitButton = form.querySelector(".u-btn-submit");
    submitButton.addEventListener("click", function(event) {
        event.preventDefault();

        var formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            body: formData
        })
        .then(response => {
            if (response.ok) {
                return response.text();
            } else {
                console.error("Ошибка отправки формы:", response.statusText);
                throw new Error("Ошибка отправки формы:", response.statusText);
            }
        })
        .then(text => {
            if (text === "error") {
                log_passw.style.display = "block";
            } else if (text === "success") { 

                window.location.href = "Главная.php"; 
            }
        })
        .catch(error => {
            console.error("Ошибка:", error);
        });
    });
});
