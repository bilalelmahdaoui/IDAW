let selectedRow = null;
let formData = {};
let backendurl = "http://localhost/IDAW/TP4/2-AJAX/";
$(document).ready(importData);

function importData() {
  rowData = {};
  $.get("getUsers.php", function (dbUsers) {
    results = JSON.parse(dbUsers);
    results.forEach((row) => {
      rowData.nom = row.nom;
      rowData.prenom = row.prenom;
      rowData.date_naissance = row.date_naissance;
      rowData.aime_cours = row.aime_cours;
      rowData.remarques = row.remarques;
      insertData(rowData);
      rowData = {};
    });
  });
}

function readForm() {
  formData.nom = $("#nom").val();
  formData.prenom = $("#prenom").val();
  formData.date_naissance = $("#date_naissance").val();
  formData.aime_cours = $("#aime_cours").prop("checked") ? "Oui" : "Non";
  formData.remarques = $("#remarques").val();
}

function insertData(data) {
  let table = document
    .getElementById("studentsTableBody")
    .getElementsByTagName("tbody")[0];
  let newRow = table.insertRow(table.length);
  let cells = {};

  cells["nom"] = newRow.insertCell(0);
  cells["prenom"] = newRow.insertCell(1);
  cells["date_naissance"] = newRow.insertCell(2);
  cells["aime_cours"] = newRow.insertCell(3);
  cells["remarques"] = newRow.insertCell(4);
  cells["crud"] = newRow.insertCell(5);

  cells["nom"].innerHTML = data.nom;
  cells["prenom"].innerHTML = data.prenom;
  cells["date_naissance"].innerHTML = data.date_naissance;
  cells["aime_cours"].innerHTML = data.aime_cours;
  cells["remarques"].innerHTML = data.remarques;
  cells[
    "crud"
  ].innerHTML = `<a onClick="onEditRow(this)" style="color: #4690E9; cursor: pointer !important;">Modifier</a> |
   <a onClick="onDeleteRow(this)" style="color: #DC143C; cursor: pointer !important;">Supprimer</a>`;
}

function resetForm() {
  document.getElementById("nom").value = "";
  document.getElementById("prenom").value = "";
  document.getElementById("date_naissance").value = "";
  document.getElementById("aime_cours").checked = false;
  document.getElementById("remarques").value = "";
  selectedRow = null;
}

function onEditRow(td) {
  selectedRow = td.parentElement.parentElement;
  document.getElementById("nom").value = selectedRow.cells[0].innerHTML;
  document.getElementById("prenom").value = selectedRow.cells[1].innerHTML;
  document.getElementById("date_naissance").value =
    selectedRow.cells[2].innerHTML;
  document.getElementById("aime_cours").checked =
    selectedRow.cells[3].innerHTML == "Oui";
  document.getElementById("remarques").value = selectedRow.cells[4].innerHTML;
}

function updateRow() {
  let table = document.getElementById("studentsTableBody");
  rowIndex = selectedRow.rowIndex;
  nom = table.rows[rowIndex].cells[0].innerHTML;
  prenom = table.rows[rowIndex].cells[1].innerHTML;

  console.log("updateRow | nom = " + nom + " - prenom = " + prenom);
  console.log(formData);
  updateUserAjax(nom, prenom);

  selectedRow.cells[0].innerHTML = formData.nom;
  selectedRow.cells[1].innerHTML = formData.prenom;
  selectedRow.cells[2].innerHTML = formData.date_naissance;
  selectedRow.cells[3].innerHTML = formData.aime_cours;
  selectedRow.cells[4].innerHTML = formData.remarques;
}

function updateUserAjax(ancien_nom, ancien_prenom) {
  $.ajax({
    url: backendurl + "updateUser.php",
    type: "POST",
    data:
      "ancien_nom=" +
      ancien_nom +
      "&ancien_prenom=" +
      ancien_prenom +
      "&nom=" +
      formData.nom +
      "&prenom=" +
      formData.prenom +
      "&date_naissance=" +
      formData.date_naissance +
      "&remarques=" +
      formData.remarques,
    dataType: "application/json",
  });
}

function onDeleteRow(td) {
  if (confirm("Êtes-vous sûr de vouloir supprimer cette ligne ?")) {
    let table = document.getElementById("studentsTableBody");
    rowIndex = td.parentElement.parentElement.rowIndex;
    nom = table.rows[rowIndex].cells[0].innerHTML;
    prenom = table.rows[rowIndex].cells[1].innerHTML;
    console.log("onDeleteRow - nom : " + nom + " - prenom : " + prenom);
    deleteUserAjax(nom, prenom);
    document.getElementById("studentsTableBody").deleteRow(rowIndex);
    resetForm();
  }
}

function deleteUserAjax(nom, prenom) {
  $.ajax({
    url: backendurl + "deleteUser.php",
    type: "POST",
    data: "nom=" + nom + "&prenom=" + prenom,
    dataType: "application/json",
  });
}

function addUserAjax() {
  $.ajax({
    url: backendurl + "addUser.php",
    type: "POST",
    data:
      "prenom=" +
      formData.prenom +
      "&nom=" +
      formData.nom +
      "&date_naissance=" +
      formData.date_naissance +
      "&remarques=" +
      formData.remarques,
    dataType: "application/json",
  });
}

function onFormSubmit() {
  event.preventDefault();
  readForm();
  if (selectedRow == null) {
    console.log("added!");
    insertData(formData);
    addUserAjax();
  } else {
    console.log("edited!");
    updateRow();
  }
  resetForm();
}
