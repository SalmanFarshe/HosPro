function install_progress() {
    let progressBar = document.querySelector('.progress-bar');
    let width = 0;

    const interval = setInterval(() => {
        if (width >= 100) {
            clearInterval(interval);
            progressBar.textContent = 'Installation Complete!';
            document.getElementById('runProgramButton').style.display = 'block';
        } else {
            width++;
            progressBar.style.width = width + '%';
            progressBar.setAttribute('aria-valuenow', width);
            progressBar.textContent = width + '%';
        }
    }, 10);
}
function runProgram() {
    window.location.href = 'pages/log-in.php'; 
}