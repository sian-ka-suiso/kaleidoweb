const items = document.querySelectorAll('.work-item a');

items.forEach((img) => {
    img.addEventListener('mousemove', (e) => {

        const rect = img.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const px = x / rect.width - 0.5;
        const py = y / rect.height - 0.5;

        const max = 6; //最大角度
        const ry = px * max * -2;
        const rx = py * max * 2;

        img.style.setProperty('--rx', rx+'deg');
        img.style.setProperty('--ry', ry+'deg');
    });

    img.addEventListener('mouseleave', () => {
        img.style.setProperty('--rx', '0deg');
        img.style.setProperty('--ry', '0deg');
    });
});