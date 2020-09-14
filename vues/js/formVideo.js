// code repris et modifé de:
// https://developer.mozilla.org/en-US/docs/Web/API/File/name
//code pour afficher le nom du fichier dans la barre input
function processSelectedFiles(fileInput) {
    var files = fileInput.files;
    var fileNameClean = files[0].name.replace(/\.[^/.]+$/, "");
    videoName.value = fileNameClean;
  }