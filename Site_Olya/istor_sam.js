function fillTable() {
    fetch('istor_sam.php') 
    .then(response => response.json())
    .then(data => {
        var tbody = document.querySelector(".u-table-entity tbody");

        data.forEach(function(rowData) {
            var row = document.createElement("tr");
            row.style.height = "65px";

            for (var key in rowData) {
                var cell = document.createElement("td");
                cell.className = "u-border-4 u-border-white u-table-cell";
                cell.textContent = rowData[key];
                row.appendChild(cell);
            }

            tbody.appendChild(row);
        });
    })
    .catch(error => console.error('Ошибка:', error));
}

document.addEventListener("DOMContentLoaded", fillTable);
