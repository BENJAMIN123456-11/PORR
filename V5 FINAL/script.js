document.addEventListener('DOMContentLoaded', function() {
    // Get all nav links
    const navLinks = document.querySelectorAll('.nav-container a');
    // Get the current page's file name from the URL
    const currentPage = window.location.pathname.split("/").pop();

    // Loop through each link and add the 'active' class if the href matches the current page
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });
});
