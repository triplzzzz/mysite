function fillTable() {
    fetch('arenda_sam.php')
    .then(response => response.json())
    .then(data => {
        var tbody = document.querySelector(".u-table-entity tbody");

        data.forEach(function(rowData) {
            var row = document.createElement("tr");
            row.style.height = "65px";


            for (var key in rowData) {
                if (key !== 'id_arenda') {
                    var cell = document.createElement("td");
                    cell.className = "u-border-4 u-border-white u-table-cell";
                    cell.textContent = rowData[key];
                    row.appendChild(cell);
                }
            }


            var rentButtonCell = document.createElement("td");
            rentButtonCell.className = "u-border-4 u-border-white u-table-cell";
            var rentButton = document.createElement("button");
            rentButton.textContent = "Арендовать";
            rentButton.className = "u-btn u-btn-black"; 
            rentButton.style.color = "white"; 
            

            rentButton.setAttribute("data-id", rowData.id_arenda);

            rentButton.addEventListener("click", function() {
                var id_arenda = this.getAttribute("data-id");

                fetch('obrab_arenda.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ id_arenda: id_arenda })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Самокат с id_arenda " + id_arenda + " арендован!");
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Ошибка:', error));
            });
            rentButtonCell.appendChild(rentButton);
            row.appendChild(rentButtonCell);

            tbody.appendChild(row);
        });
    })
    .catch(error => console.error('Ошибка:', error));
}

document.addEventListener("DOMContentLoaded", fillTable);
