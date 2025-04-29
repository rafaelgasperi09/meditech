function loadFile(event,preview_name='preview') {
    const image = document.getElementById(preview_name);
    image.src = URL.createObjectURL(event.target.files[0]);
    image.onload = () => URL.revokeObjectURL(image.src); // liberar memoria
}
