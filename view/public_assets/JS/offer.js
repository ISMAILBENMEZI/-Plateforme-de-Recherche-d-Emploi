document.querySelectorAll('.menu-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const dropdown = btn.nextElementSibling;
        dropdown.style.display =
            dropdown.style.display === 'block' ? 'none' : 'block';
    });
});


document.addEventListener('click', (e) => {
    if (!e.target.closest('.card-menu')) {
        document.querySelectorAll('.menu-dropdown')
            .forEach(d => d.style.display = 'none');
    }
});