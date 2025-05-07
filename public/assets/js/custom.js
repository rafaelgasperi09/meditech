function loadFile(event,preview_name='preview') {
    const image = document.getElementById(preview_name);
    image.src = URL.createObjectURL(event.target.files[0]);
    image.onload = () => URL.revokeObjectURL(image.src); // liberar memoria
}

$('.datetimepicker3').datetimepicker({
    format: 'LT',
    icons: {
        up: "fas fa-angle-up",
        down: "fas fa-angle-down",
        next: 'fas fa-angle-right',
        previous: 'fas fa-angle-left'
    }
});

$('.datetimepicker4').datetimepicker({
    format: 'LT',
    icons: {
        up: "fas fa-angle-up",
        down: "fas fa-angle-down",
        next: 'fas fa-angle-right',
        previous: 'fas fa-angle-left'
    }
});
