// Display image preview for question
document.getElementById('questionImage').addEventListener('change', function () {
    displayImagePreview(this, 'questionPreview');
});

// Display image preview for options
document.getElementById('optionsImage').addEventListener('change', function () {
    displayImagePreview(this, 'optionsPreview');
});

function displayImagePreview(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = '';

    const file = input.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'img-fluid';
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
}
