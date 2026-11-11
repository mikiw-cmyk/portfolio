// =========================================================
// 1. MOBILE MENU (hamburger button)
// =========================================================
const menuToggle = document.querySelector(".menu-toggle");
const navMenu = document.querySelector(".navbar nav");

// Click the button: open the menu if closed, close it if open
menuToggle.addEventListener("click", () => {
  const isOpen = navMenu.classList.toggle("open");
  menuToggle.setAttribute("aria-expanded", isOpen);
});

// Click any link inside the menu: close it (so it doesn't cover the page)
navMenu.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    navMenu.classList.remove("open");
    menuToggle.setAttribute("aria-expanded", "false");
  });
});

// =========================================================
// 2. HIGHLIGHT THE NAVBAR LINK OF THE SECTION YOU'RE VIEWING
// =========================================================
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".navbar nav a");

// This "watcher" tells us when a section is in the middle of the screen
const sectionWatcher = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        navLinks.forEach((link) => {
          // Add "active" only to the link that matches this section
          link.classList.toggle(
            "active",
            link.getAttribute("href") === "#" + entry.target.id,
          );
        });
      }
    });
  },
  {
    rootMargin: "-40% 0px -55% 0px", // only counts the middle strip of the screen
  },
);

sections.forEach((section) => sectionWatcher.observe(section));

// =========================================================
// 3. FADE-IN WHEN SECTIONS SCROLL INTO VIEW
// =========================================================
const revealItems = document.querySelectorAll(".section");

// JavaScript adds the "reveal" class, so if JS ever fails the page still shows normally
revealItems.forEach((item) => item.classList.add("reveal"));

const revealWatcher = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // only animate once
      }
    });
  },
  {
    threshold: 0.05,
  },
);

revealItems.forEach((item) => revealWatcher.observe(item));
