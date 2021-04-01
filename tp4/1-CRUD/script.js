let selectedRow = null;
let formData = {};

function readForm() {
  formData["prenom"] = document.getElementById("prenom").value;
  formData["nom"] = document.getElementById("nom").value;
  formData["dateNaissance"] = document.getElementById("dateNaissance").value;
  formData["aimeCours"] = document.getElementById("aimeCours").value;
  formData["remarques"] = document.getElementById("remarques").value;
  return formData;
}

function insertData(data) {
  let table = document
    .getElementById("studentsTableBody")
    .getElementsByTagName("tbody")[0];
  let newRow = table.insertRow(table.length);
  let cells = {};

  cells["nom"] = newRow.insertCell(0);
  cells["prenom"] = newRow.insertCell(1);
  cells["dateNaissance"] = newRow.insertCell(2);
  cells["aimeCours"] = newRow.insertCell(3);
  cells["remarques"] = newRow.insertCell(4);
  cells["crud"] = newRow.insertCell(5);

  cells["nom"].innerHTML = data.nom;
  cells["prenom"].innerHTML = data.prenom;
  cells["dateNaissance"].innerHTML = data.dateNaissance;
  cells["aimeCours"].innerHTML = data.aimeCours;
  cells["remarques"].innerHTML = data.remarques;
  cells["crud"].innerHTML = `<a onClick="onEditRow(this)">Modifier</a> |
   <a onClick="onDeleteRow(this)">Supprimer</a>`;
}

function resetForm() {
  document.getElementById("nom").value = "";
  document.getElementById("prenom").value = "";
  document.getElementById("dateNaissance").value = "";
  document.getElementById("remarques").value = "";
  selectedRow = null;
}

function onEditRow(td) {
  selectedRow = td.parentElement.parentElement;
  document.getElementById("nom").value = selectedRow.cells[0].innerHTML;
  document.getElementById("prenom").value = selectedRow.cells[1].innerHTML;
  document.getElementById("dateNaissance").value =
    selectedRow.cells[2].innerHTML;
  document.getElementById("aimeCours").value = selectedRow.cells[3].innerHTML;
  document.getElementById("remarques").value = selectedRow.cells[4].innerHTML;
}

function updateRow(inputData) {
  selectedRow.cells[0].innerHTML = inputData.nom;
  selectedRow.cells[1].innerHTML = inputData.prenom;
  selectedRow.cells[2].innerHTML = inputData.dateNaissance;
  selectedRow.cells[3].innerHTML = inputData.aimeCours;
  selectedRow.cells[4].innerHTML = inputData.remarques;
}

function onDeleteRow(td) {
  if (confirm("Êtes-vous sûr de vouloir supprimer cette ligne ?")) {
    row = td.parentElement.parentElement;
    document.getElementById("studentsTableBody").deleteRow(row.rowIndex);
    resetForm();
  }
}

function onFormSubmit() {
  event.preventDefault();
  let inputData = readForm();
  if (selectedRow == null) {
    insertData(inputData);
  } else {
    updateRow(inputData);
  }
  resetForm();
}
