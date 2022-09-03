window.addEventListener('DOMContentLoaded', () => {
    const btnToggleFind = document.querySelectorAll('.toggle-find-btn');
    const findWindow = document.querySelector('.find-container');

    btnToggleFind.forEach(b => {
        b.addEventListener('click', () => {
            findWindow.classList.toggle('hidden')
        });
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (!findWindow.classList.contains('hidden')) {
                findWindow.classList.add('hidden')                
            };
        }
    });
})