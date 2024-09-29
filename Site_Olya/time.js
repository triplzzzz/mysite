
function addLeadingZero(num) {
    return (num < 10 ? '0' : '') + num;
}


function updateDateTime() {
    var currentDate = new Date();
    var dateString = addLeadingZero(currentDate.getDate()) + '.' + addLeadingZero(currentDate.getMonth() + 1) + '.' + currentDate.getFullYear();
    var timeString = addLeadingZero(currentDate.getHours()) + ':' + addLeadingZero(currentDate.getMinutes()) + ':' + addLeadingZero(currentDate.getSeconds());
    var dateTimeString = dateString + ' ' + timeString;
    document.getElementById('dateTime').textContent = dateTimeString;
}

setInterval(updateDateTime, 1000);

updateDateTime();
