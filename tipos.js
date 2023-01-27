document.getElementById("tables").onchange = function(){
    var selectedTable = this.value;
    var selectFields = document.getElementById("fields");
    selectFields.innerHTML = "";
    fetch("tipos.php?eleccion=" + selectedTable)
      .then(response => response.json())
      .then(tipos => {
        tipos.forEach(function(tipo) {
          var option = document.createElement("option");
          option.value = tipo;
          option.text = tipo;
          selectFields.appendChild(option);
        });
      });
}

