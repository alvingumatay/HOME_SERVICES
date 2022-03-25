function deleteRow(row) {
  var index = row.parentNode.parentNode.rowIndex;
  document.getElementById("table").deleteRow(index);
}