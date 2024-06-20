function showDate() {
  let x = document.getElementById("return-date-input");
  let label = document.getElementById("return-date-label");
  label.hidden = false;
  x.hidden = false;
}

function hideDate() {
  let x = document.getElementById("return-date-input");
  let label = document.getElementById("return-date-label");
  label.hidden = true;
  x.hidden = true;
}
