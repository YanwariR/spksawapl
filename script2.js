document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.querySelector('.add');
    
    const closeBtn2 = document.querySelector('.show-close-criteria');
    const closeBtn = document.querySelector('.show-close');
    const overlay = document.querySelector('.overlay');
    const overlay2 = document.querySelector('.overlay2');

    addBtn.addEventListener('click', function() {
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    closeBtn.addEventListener('click', function() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    });

    
});
