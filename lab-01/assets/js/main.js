document.addEventListener('DOMContentLoaded', function() {
    // Load Header
    fetch('components/header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-placeholder').innerHTML = data;
            checkAuth();
        });

    // Load Footer
    fetch('components/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
});

function checkAuth() {
    fetch('backend/auth_status.php')
        .then(response => response.json())
        .then(data => {
            const authButtons = document.getElementById('auth-buttons');
            if (data.loggedIn) {
                authButtons.innerHTML = `<a href="backend/logout.php" class="login-btn">Logout</a>`;
            } else {
                authButtons.innerHTML = `<a href="signin.html" class="login-btn">Sign In</a>`;
            }
        });
}
