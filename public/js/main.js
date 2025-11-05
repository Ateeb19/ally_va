
//Dont write any code in this file its a temporary file


// ===== Mobile menu toggle =====
const toggle = document.getElementById("menu-toggle");
const menu = document.getElementById("mobile-menu");

if (toggle) {
  toggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
}

// ===== Active nav link highlight =====
let currentPage = window.location.pathname.split("/").pop();

// Agar homepage root URL hai, to index.html consider karo
if (currentPage === "" || currentPage === "/") {
  currentPage = "index.html";
}

const navLinks = document.querySelectorAll(".nav-link");

// navLinks.forEach(link => {
//   const linkPage = link.getAttribute("href");
//   if (linkPage === currentPage) {
//     link.style.color = "#2563EB"; // Tailwind blue-600
//     link.classList.add("font-semibold");
//   } else {
//     link.style.color = "#1F2937"; // Tailwind gray-800
//     link.classList.remove("font-semibold");
//   }
// });
navLinks.forEach(link => {
  const linkPage = link.getAttribute("href");
  if (linkPage === currentPage) {
    link.style.color = "#2563EB"; // Tailwind blue-600
    link.classList.add("font-semibold");
    link.style.borderBottom = "2px solid #2563EB"; // ✅ blue border bottom
    link.style.paddingBottom = "2px"; // thoda space ke liye
    link.style.width = "fit-content"; // thoda space ke liye
  } else {
    link.style.color = "#1F2937"; // Tailwind gray-800
    link.classList.remove("font-semibold");
    link.style.borderBottom = "none"; // remove border from non-active
  }
});


// ===== Sticky Header on scroll =====
const header = document.querySelector("header");
if (header) {
  const stickyOffset = header.offsetTop;

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > stickyOffset) {
      header.classList.add("fixed", "top-0", "left-0", "right-0", "z-50", "bg-white", "shadow-lg");
    } else {
      header.classList.remove("fixed", "top-0", "left-0", "right-0", "z-50", "bg-white", "shadow-lg");
    }
  });
}


document.querySelectorAll(".faq-question").forEach((question) => {
  question.addEventListener("click", () => {
    const answer = question.nextElementSibling;

    // Toggle open class
    answer.classList.toggle("open");
    question.classList.toggle("active");
  });
});

const modal = document.getElementById("authModal");
const openBtnDesktop = document.getElementById("openModalDesktop");
const openBtnMobile = document.getElementById("openModalMobile");
const closeBtn = document.getElementById("closeModal");

if (openBtnDesktop) {
  // Desktop button
  openBtnDesktop.addEventListener("click", () => {
    modal.classList.remove("hidden");
  });
}

if (openBtnMobile) {
  // Mobile button
  openBtnMobile.addEventListener("click", () => {
    modal.classList.remove("hidden");
  });
}

if (closeBtn) {
  // Close modal
  closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
  });
}

// Close modal on background click
modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.classList.add("hidden");
  }
});

document.addEventListener('DOMContentLoaded', function () {
  function normalizePath(p) {
    try {
      const url = new URL(p, location.origin);
      let pathname = url.pathname.replace(/\/+$/, '');
      return pathname === '' ? '/' : pathname;
    } catch {
      return p === '/' ? '/' : p.replace(/\/+$/, '');
    }
  }

  const current = normalizePath(window.location.pathname);
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  navLinks.forEach(link => link.classList.remove('active'));

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (!href || href === '#' || href.startsWith('javascript:')) return;

    const linkPath = normalizePath(href);

    if ((current === '/' || current === '/home') &&
      (linkPath === '/' || linkPath === '/home')) {
      link.classList.add('active');
      return;
    }

    if (linkPath === '/dashboard' && current === '/dashboard') {
      link.classList.add('active');
      return;
    }

    if (linkPath.includes('blogs') && current.startsWith('/blogs')) {
      link.classList.add('active');
      return;
    }

    if ((linkPath.includes('taskhistory') && current.includes('taskhistory')) ||
      (linkPath.includes('tasks') && current.includes('tasks'))) {
      link.classList.add('active');
      return;
    }

    if (linkPath.includes('edit') && current.includes('edit')) {
      link.classList.add('active');
      return;
    }

    if (linkPath !== '/' && (current === linkPath || current.startsWith(linkPath + '/'))) {
      link.classList.add('active');
      return;
    }
  });
}); 