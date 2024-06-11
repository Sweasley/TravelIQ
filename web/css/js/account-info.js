document.addEventListener("DOMContentLoaded", function () {
  // Get elements
  var userInfo = document.getElementById("userInfo");
  var editForm = document.getElementById("editForm");
  var editModeBtn = document.getElementById("editModeBtn");
  var saveBtn = document.querySelector('#editForm button[type="submit"]');
  var editBtn = document.getElementById("editModeBtn");
  var editBtnbck = document.getElementById("editModeBck");

  // Hide save button initially
  saveBtn.style.display = "none";
  editBtnbck.style.display = "none";

  // Toggle edit mode
  editModeBtn.addEventListener("click", function () {
    // Toggle display of user info and edit form
    userInfo.style.display =
      userInfo.style.display === "none" ? "block" : "none";
    editForm.style.display =
      editForm.style.display === "none" ? "block" : "none";

    // Toggle visibility of save button and back button
    saveBtn.style.display = saveBtn.style.display === "none" ? "block" : "none";
    editBtnbck.style.display =
      editBtnbck.style.display === "none" ? "block" : "none";

    // Hide edit button
    editBtn.style.display = "none";
  });

  editBtnbck.addEventListener("click", function () {
    // Toggle display of user info and edit form
    userInfo.style.display =
      userInfo.style.display === "none" ? "block" : "none";
    editForm.style.display =
      editForm.style.display === "none" ? "block" : "none";

    // Toggle visibility of edit button and back button
    editBtn.style.display = editBtn.style.display === "none" ? "block" : "none";
    saveBtn.style.display = saveBtn.style.display === "none" ? "block" : "none";
    editBtnbck.style.display = "none";
  });
});

// for small screens
// Function to toggle the navbar background color class
function toggleNavbarBackground() {
  var navbar = document.querySelector(".navbar");
  navbar.classList.toggle("navbar-expanded");
}

// Add an event listener to the navbar toggle button
document
  .querySelector(".navbar-toggler")
  .addEventListener("click", function () {
    toggleNavbarBackground();
  });

//   for drop down gender
function changeGender() {
  var genderSelect = document.getElementById("gender");
  var genderOtherContainer = document.getElementById("genderOtherContainer");

  // If "Other" is selected, show the genderOtherContainer; otherwise, hide it
  if (genderSelect.value === "Other") {
    genderOtherContainer.removeAttribute("hidden");
  } else {
    genderOtherContainer.setAttribute("hidden", true);
  }
}
