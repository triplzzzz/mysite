document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector(".u-inner-form");
    var successMessage = form.querySelector(".u-form-send-success");
    var errorMessage = form.querySelector(".u-form-send-error");
    var closeButtonSuccess = successMessage.querySelector(".u-close-button");
    var closeButtonError = errorMessage.querySelector(".u-close-button");
    var submitButton = form.querySelector(".u-btn-submit");
    var polaExistsError = form.querySelector(".pola-exists-error");

    function hideSuccessMessage() {
        successMessage.style.display = "none";
    }

    function hideErrorMessage() {
        errorMessage.style.display = "none";
        polaExistsError.style.display = "none"; 
    }

    closeButtonSuccess.addEventListener("click", hideSuccessMessage);
    closeButtonError.addEventListener("click", hideErrorMessage);

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
        .then(text  => {
            if (text === "success") {
                successMessage.style.display = "block";
                form.reset();
            } else {
                console.error("Ошибка отправки формы:", text );
            }
        })
        .catch(error => {
            console.error("Ошибка:", error);
        });
    });
});

