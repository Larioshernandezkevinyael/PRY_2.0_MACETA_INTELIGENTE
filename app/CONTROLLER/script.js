document.getElementById("maceta-form").addEventListener("submit", function(event) {
  event.preventDefault();


  const tipo = Array.from(document.getElementById("tipo").selectedOptions).map(option => option.value);
  const color = document.getElementById("color").value;
  const tamano = Array.from(document.getElementById("tamano").selectedOptions).map(option => option.value);
  const cantidad = document.getElementById("cantidad").value;



  alert(`Has seleccionado:\nTipo: ${tipo.join(", ")}\nColor: ${color}\nTamaño: ${tamano.join(", ")}\nCantidad: ${cantidad}`);
});
