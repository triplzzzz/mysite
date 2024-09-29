

window.onload = function() {
    var successKey = "<?php echo $_GET['success']; ?>";
    if (successKey === "true") {
        setTimeout(function() {
            window.location.reload();
        }, 3000); 
    }
};
