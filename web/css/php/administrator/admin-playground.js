// nav bar script
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".section").forEach((section) => {
    if (section.id !== "Sales") {
      section.style.display = "none"; // Hide all sections except "Sales"
    }
  });

  document.querySelectorAll(".list-group-item").forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);
      const pageTitle = document.getElementById("page-title");

      if (targetSection) {
        // Remove 'active' class from all navigation links
        document.querySelectorAll(".list-group-item").forEach((navLink) => {
          navLink.classList.remove("active", "nav-active");
        });
        // Add 'active' class to the clicked navigation link
        this.classList.add("active", "nav-active");

        // Hide all sections
        document.querySelectorAll(".section").forEach((section) => {
          section.style.display = "none";
        });
        // Show the target section
        targetSection.style.display = "block";

        // Update the page title based on the clicked link
        pageTitle.textContent = this.textContent.trim();

        // Scroll to the target section without smooth scrolling
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: "auto", // Change behavior to 'auto' for instant scrolling
        });
      }
    });
  });

  // Add event listener for promote buttons
  document.querySelectorAll(".promote-button").forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const targetId = this.getAttribute("data-target").substring(1);
      const targetSection = document.getElementById(targetId);
      const pageTitle = document.getElementById("page-title");

      if (targetSection) {
        // Hide all sections
        document.querySelectorAll(".section").forEach((section) => {
          section.style.display = "none";
        });
        // Show the target section
        targetSection.style.display = "block";

        // Scroll to the target section with smooth scrolling
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: "smooth",
        });

        // Optionally update the page title if needed
        if (pageTitle) {
          pageTitle.textContent = "Booking";
        }

        // Remove 'active' class from all navigation links
        document.querySelectorAll(".list-group-item").forEach((navLink) => {
          navLink.classList.remove("active", "nav-active");
        });

        // Add 'active' class to the booking navigation link
        document
          .querySelector(`.list-group-item[href="#${targetId}"]`)
          .classList.add("active", "nav-active");
      }
    });
  });
});

var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
  el.classList.toggle("toggled");
};

// hiding the form
document.addEventListener("DOMContentLoaded", function () {
  // Promo buttons and form
  const promoAddButton = document.getElementById("promoAddButton");
  const promoCancelButton = document.getElementById("promoCancelButton");
  const promoBookingForm = document.getElementById("promoBookingForm");

  promoAddButton.addEventListener("click", function () {
    promoBookingForm.style.display = "block";
  });

  promoCancelButton.addEventListener("click", function () {
    promoBookingForm.style.display = "none";
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Booking buttons and form
  const bookingAddButton = document.getElementById("bookingAddButton");
  const bookingCancelButton = document.getElementById("bookingCancelButton");
  const bookingForm = document.getElementById("bookingForm");
  const chooseButton = document.getElementById("chooseButton");

  bookingAddButton.addEventListener("click", function () {
    // Show checkboxes and Choose button
    document.getElementById("checkboxes").style.display = "block";
    chooseButton.style.display = "block";
  });

  // Event listener for Choose button
  chooseButton.addEventListener("click", function () {
    // Check which checkboxes are selected
    const checkboxes = document.querySelectorAll(
      'input[name="type[]"]:checked' // Corrected the name here
    );

    // If at least one checkbox is selected
    if (checkboxes.length === 0) {
      // Inform the user to select at least one checkbox
      alert("Please select at least one checkbox.");
    }
  });

  bookingCancelButton.addEventListener("click", function () {
    // Hide checkboxes, Choose button, and rest of the form
    document.getElementById("checkboxes").style.display = "none";
    chooseButton.style.display = "none";
  });
});
