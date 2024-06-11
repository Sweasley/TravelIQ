function togglePassword() {
  var passwordField = document.getElementById("password");
  var toggleBtnIcon = document.querySelector(".toggle-btn i");
  if (passwordField.type === "password") {
    passwordField.type = "text";
    toggleBtnIcon.classList.remove("fa-eye");
    toggleBtnIcon.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    toggleBtnIcon.classList.remove("fa-eye-slash");
    toggleBtnIcon.classList.add("fa-eye");
  }
}

function goBack() {
  window.history.back();
}
