
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

// if (openBtnDesktop) {
//   // Desktop button
//   openBtnDesktop.addEventListener("click", () => {
//     modal.classList.remove("hidden");
//   });
// }
function reloadOnceAfterModalClose() {
  if (!sessionStorage.getItem('authModalReloaded')) {
    sessionStorage.setItem('authModalReloaded', 'true');
    location.reload();
  }
}


function closeAuthModalCompletely() {
  const modalEl = document.getElementById("authModal");

  if (!modalEl) return;

  // ✅ Close Bootstrap modal properly
  const instance = bootstrap.Modal.getInstance(modalEl);
  if (instance) {
    instance.hide();
  }

  // ✅ Hide custom modal wrapper
  modalEl.classList.add("hidden");

  // ✅ FORCE remove backdrop (Bootstrap bug-safe)
  setTimeout(() => {
    document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());
    document.body.classList.remove('modal-open');
    document.body.style.removeProperty('padding-right');
  }, 50);
}





if (!openBtnDesktop && !openBtnMobile) {
  modal.classList.add("hidden");
}

if (openBtnDesktop) {
  openBtnDesktop.addEventListener("click", () => {
    if (window.location.pathname !== "/password/reset" &&
      !window.location.pathname.startsWith("/password/reset/")) {
      modal.classList.remove("hidden");
    }
  });
}

if (openBtnMobile) {
  openBtnMobile.addEventListener("click", () => {
    if (window.location.pathname !== "/password/reset" &&
      !window.location.pathname.startsWith("/password/reset/")) {
      modal.classList.remove("hidden");
    }
  });
}
// if (openBtnMobile) {
//   // Mobile button
//   openBtnMobile.addEventListener("click", () => {
//     modal.classList.remove("hidden");
//   });
// }

if (closeBtn) {
  // Close modal
  closeBtn.addEventListener("click", () => {
    // modal.classList.add("hidden");
    // closeAuthModalCompletely();
    const instance = bootstrap.Modal.getInstance(modal);
    reloadOnceAfterModalClose
    if (instance) instance.hide();
  });
}

// Close modal on background click
// modal.addEventListener("click", (e) => {
//   if (e.target === modal) {
//     modal.classList.add("hidden");
//     closeAuthModalCompletely();
//   }
// });
// modal.addEventListener("click", (e) => {
//   if (e.target === modal) {
//     const instance = bootstrap.Modal.getInstance(modal);
//     if (instance) instance.hide();
//   }
// });


if (modal) {
  modal.addEventListener('hidden.bs.modal', function () {

    document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());

    document.body.classList.remove('modal-open');
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';

    if (!sessionStorage.getItem('authModalReloaded')) {
      sessionStorage.setItem('authModalReloaded', 'true');
      location.reload();
    }
    closeAuthModalCompletely();

  });
}

// if (modal) {
//   modal.addEventListener('hidden.bs.modal', () => {
//     closeAuthModalCompletely();

//     if (!sessionStorage.getItem('authModalReloaded')) {
//       sessionStorage.setItem('authModalReloaded', 'true');
//       location.reload();
//     }
//   });
// }

// if (modal) {
//   modal.addEventListener('hidden.bs.modal', () => {
//     closeAuthModalCompletely();
//   });
// }

// Close login modal when Add User modal closes
const userCreateModal = document.getElementById("userCreateModal");
const authModal = document.getElementById("authModal");

if (userCreateModal) {
  userCreateModal.addEventListener("hidden.bs.modal", function () {
    if (authModal) {
      const modalInstance = bootstrap.Modal.getInstance(authModal) || new bootstrap.Modal(authModal);
      modalInstance.hide();
    }
  });
}

document.addEventListener('DOMContentLoaded', function () {

  const current = window.location.pathname.replace(/\/+$/, '') || '/';
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  navLinks.forEach(link => link.classList.remove('active'));

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (!href || href === '#' || href.startsWith('javascript')) return;

    const linkPath = new URL(href, location.origin).pathname
      .replace(/\/+$/, '') || '/';

    /* ---------------- HOME ---------------- */
    if ((current === '/' || current === '/home') &&
      (linkPath === '/' || linkPath === '/home')) {
      link.classList.add('active');
      return;
    }

    /* ---------------- PUBLIC STATIC PAGES ---------------- */
    const staticPages = [
      '/about',
      '/services',
      '/pricing',
      '/contact'
    ];

    if (staticPages.includes(current) && linkPath === current) {
      link.classList.add('active');
      return;
    }

    /* ---------------- DASHBOARD (USER) ---------------- */
    if (
      current === '/dashboard' &&
      linkPath === '/dashboard'
    ) {
      link.classList.add('active');
      return;
    }

    /* ---------------- TASK HISTORY (USER) ---------------- */
    if (
      /^\/user\/taskhistory\/\d+$/.test(current) &&
      linkPath.includes('taskhistory')
    ) {
      link.classList.add('active');
      return;
    }


    /* ---------------- PROFILE (USER) ---------------- */
    if (
      /^\/user\/\d+\/edit$/.test(current) &&
      linkPath.includes('/user') &&
      linkPath.includes('edit')
    ) {
      link.classList.add('active');
      return;
    }

    /* ---------------- INSIGHTS ---------------- */
    if (
      (current === '/insights' || current.startsWith('/blogs')) &&
      linkPath === '/insights'
    ) {
      link.classList.add('active');
      return;
    }

    /* ---------------- ADMIN BLOGS (INSIGHTS) ---------------- */
    if (
      current.startsWith('/admin/blogs') &&
      linkPath.includes('blogs')
    ) {
      link.classList.add('active');
      return;
    }

    /* ---------------- ADMIN USER DASHBOARD ---------------- */
    if (
      /^\/admin\/users\/\d+\/dashboard$/.test(current) &&
      linkPath.endsWith('/dashboard')
    ) {
      link.classList.add('active');
      return;
    }

    /* ADMIN USER TASKS */
    if (
      /^\/admin\/users\/\d+\/tasks$/.test(current) &&
      linkPath.includes('tasks')
    ) {
      link.classList.add('active');
      return;
    }

    /* ---------------- ADMIN USER PROFILE ---------------- */
    if (
      /^\/admin\/users\/\d+\/userprofile\/\d+\/edit$/.test(current) &&
      linkPath.includes('userprofile')
    ) {
      link.classList.add('active');
      return;
    }

    /* ---------------- SERVICE DETAIL PAGES ---------------- */
    const servicePages = [
      '/website-development',
      '/operations-oversight',
      '/ecommerce-services',
      '/crm-bookkeeping',
      '/social-media-management',
      '/essential-seo',
      '/graphic-design',
      '/it-solutions',
      '/privacy-policy'
    ];

    // If on a service page, DO NOT activate Insights
    if (servicePages.includes(current)) {
      return;
    }


    /* ---------------- BLOG SLUG PAGE ---------------- */
    const publicPages = [
      '/', '/home', '/about', '/services',
      '/pricing', '/contact', '/login', '/insights'
    ];

    const isBlogSlug =
      current.split('/').length === 2 &&
      !publicPages.includes(current) &&
      !servicePages.includes(current) &&
      !current.startsWith('/dashboard') &&
      !current.startsWith('/user') &&
      !current.startsWith('/admin');

    if (isBlogSlug && linkPath === '/insights') {
      link.classList.add('active');
      return;
    }
  });
});



//Copyright year update
document.getElementById("year").textContent = new Date().getFullYear();