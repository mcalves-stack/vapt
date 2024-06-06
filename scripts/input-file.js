document.addEventListener('DOMContentLoaded', function() {
  const importButton = document.getElementById('import-button');
  const fileInput = document.getElementById('file-input');
  const fileNameDisplay = document.getElementById('file-name-display');

  importButton.addEventListener('click', function() {
    fileInput.click();
  });

  fileInput.addEventListener('change', function() {
    const fileName = fileInput.files[0] ? fileInput.files[0].name : '';
    fileNameDisplay.value = fileName;
  });
});