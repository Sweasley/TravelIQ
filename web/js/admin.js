{
  /* // Function to toggle section visibility based on scroll position */
}
window.addEventListener("scroll", function () {
  const sections = document.querySelectorAll(".section");
  const scrollPosition = window.scrollY;

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;

    if (scrollPosition >= sectionTop - sectionHeight / 3) {
      section.classList.add("active");
    } else {
      section.classList.remove("active");
    }
  });
});

{
  /* // Function to handle click events on navigation links */
}
document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault();
    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);
    if (targetSection) {
      // Remove 'active' class from all navigation links
      document.querySelectorAll(".nav-link").forEach((navLink) => {
        navLink.classList.remove("active");
      });
      // Add 'active' class to the clicked navigation link
      this.classList.add("active");
      // Remove 'active' class from all sections
      document.querySelectorAll(".section").forEach((section) => {
        section.classList.remove("active");
      });
      // Add 'active' class to the target section
      targetSection.classList.add("active");
      // Hide content of other sections
      document.querySelectorAll(".section:not(.active)").forEach((section) => {
        section.style.display = "none";
      });
      // Show content of the target section
      targetSection.style.display = "block";
      // Scroll to the target section without smooth scrolling
      window.scrollTo({
        top: targetSection.offsetTop,
        behavior: "auto", // Change behavior to 'auto' for instant scrolling
      });
    }
  });
});
