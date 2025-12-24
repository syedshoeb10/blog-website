<!-- Fonts -->
<!-- links.php -->
<!-- Fonts -->


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
  integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
  crossorigin="anonymous"
  media="print"
  onload="this.media='all'" />

<!-- OverlayScrollbars -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
  crossorigin="anonymous" />

<link rel="preload" href="../css/adminlte.css" as="style" />

<!-- Bootstrap Icons -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
  crossorigin="anonymous" />

<!-- AdminLTE -->
<link rel="stylesheet" href="./dist/css/adminlte.css" />

<!-- CUSTOM LAYOUT CSS (important: keeps sidebar fixed, removes extra scrollbar) -->
<style>
  /* Blog Form Styling */

  .blog-form {
    border-radius: 12px;
    background: #ffffff;
    max-width: 650px;
    margin: auto;
  }

  .blog-form .form-label {
    font-weight: 600;
    color: #333;
  }

  .blog-form input,
  .blog-form select,
  .blog-form textarea {
    border-radius: 8px;
  }

  .blog-form input:focus,
  .blog-form textarea:focus,
  .blog-form select:focus {
    box-shadow: none !important;
    border: 1px solid #0d6efd;
  }

  .btn-primary,
  .btn-success {
    padding: 10px 20px;
    border-radius: 8px;
  }

  .container h3 {
    font-weight: 700;
    color: #222;
  }

  .top-btn {
    margin-bottom: 20px;
  }

  body {
    background: #f4f6f9;
  }

  :root {
    --sidebar-width: 250px;
    --header-height: 60px;
  }

  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    /* prevent horizontal scrollbar */
    background: #f4f6f9;
    font-family: "Source Sans 3", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  }

  /* Fixed header */
  .app-header {
    position: fixed;
    top: 0;
    left: var(--sidebar-width);
    right: 0;
    height: var(--header-height);
    z-index: 1030;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    background: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.06);
  }

  /* Fixed sidebar */
  .app-sidebar {
    width: var(--sidebar-width);
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    overflow-y: auto;
    padding-top: var(--header-height);
    /* so first items sit below header if any overlap */
    background: #1e293b;
    /* dark background */
    color: #cbd5e1;
  }

  .sidebar-brand {
    padding: 0.85rem 1rem;
    background: rgba(255, 255, 255, 0.02);
  }

  .sidebar-brand .brand-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #fff;
    text-decoration: none;
  }

  .sidebar-wrapper {
    padding: 0.5rem 0;
  }

  .sidebar-menu .nav-link {
    color: #cbd5e1;
    padding: 0.6rem 1rem;
    font-size: 0.95rem;
    border-radius: 6px;
    margin: 0.2rem 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.6rem;
  }

  .sidebar-menu .nav-link.active,
  .sidebar-menu .nav-link:hover {
    background: #334155;
    color: #fff;
    text-decoration: none;
  }

  /* main content offset so it doesn't sit under the sidebar/header */
  main.app-main {
    margin-left: var(--sidebar-width);
    margin-top: var(--header-height);
    padding: 1.5rem;
    min-height: calc(100vh - var(--header-height));
    box-sizing: border-box;
  }

  /* small-box helper to look nice */
  .small-box {
    border-radius: 0.6rem;
    padding: 1rem;
    color: #fff;
  }

  .small-box .inner h3 {
    margin: 0;
    font-size: 1.75rem;
  }

  .small-box.text-bg-primary {
    background: #0d6efd;
  }

  .small-box.text-bg-warning {
    background: #ffc107;
    color: #000;
  }

  .small-box.text-bg-danger {
    background: #dc3545;
  }

  /* ensure footer (if any) doesn't overlap */
  footer {
    margin-left: var(--sidebar-width);
    padding: 1rem;
  }

  /* mobile tweaks */
  @media (max-width: 992px) {
    .app-sidebar {
      left: -100%;
      transform: translateX(0);
      width: 220px;
    }

    .app-header {
      left: 0;
    }

    main.app-main {
      margin-left: 0;
      margin-top: var(--header-height);
    }
  }

  /* ----------- Page Layout ----------- */
  body {
    font-family: Arial, sans-serif;
    background: #f7f7f7;
    margin: 0;
    padding: 0;
  }

  /* Page container */
  .edit-container {
    width: 60%;
    margin: 30px auto;
    background: #fff;
    padding: 25px 35px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  /* Page Title */
  .edit-container h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
    font-size: 28px;
  }

  /* ----------- Form Styling ----------- */
  form label {
    font-size: 16px;
    color: #555;
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
  }

  form input[type="text"],
  form input[type="file"],
  form textarea,
  form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 15px;
    transition: border 0.3s ease;
  }

  form input[type="text"]:focus,
  form textarea:focus,
  form select:focus {
    border-color: #007bff;
    outline: none;
  }

  /* ----------- Image Preview ----------- */
  .current-image img {
    border-radius: 6px;
    margin-top: 10px;
    border: 1px solid #ddd;
  }

  /* ----------- Submit Button ----------- */
  form input[type="submit"] {
    background: #28a745;
    border: none;
    padding: 12px 20px;
    width: 100%;
    font-size: 17px;
    border-radius: 6px;
    color: white;
    cursor: pointer;
    transition: 0.3s ease;
  }

  form input[type="submit"]:hover {
    background: #218838;
  }

  /* ----------- Responsive ----------- */
  @media (max-width: 768px) {
    .edit-container {
      width: 90%;
      padding: 20px;
    }
  }

  .center-table {
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    /* adjust as needed */
  }
</style>

<!-- JS PLUGINS (keep at end of body in production; it's okay here for demo) -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../js/adminlte.js"></script>

<!-- Scrollbar Config -->

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
  integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
  crossorigin="anonymous"
  media="print"
  onload="this.media='all'" />

<!-- OverlayScrollbars -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
  crossorigin="anonymous" />

<link rel="preload" href="../css/adminlte.css" as="style" />

<!-- Bootstrap Icons -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
  crossorigin="anonymous" />

<!-- AdminLTE -->
<link rel="stylesheet" href="./dist/css/adminlte.css" />

<!-- JS PLUGINS -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../js/adminlte.js"></script>

<!-- Scrollbar Config -->
<script>
  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
  const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
  };
  document.addEventListener('DOMContentLoaded', function() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
          theme: Default.scrollbarTheme,
          autoHide: Default.scrollbarAutoHide,
          clickScroll: Default.scrollbarClickScroll,
        },
      });
    }
  });
</script>