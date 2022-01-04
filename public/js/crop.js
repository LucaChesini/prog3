const cropper = new Cropper(document.querySelector('#img-crop'), {
    zoomable : false
});

document.getElementById('cortar').addEventListener('submit', function(e){
    e.preventDefault();
    document.querySelector('#img').value = cropper.getCroppedCanvas().toDataURL('image/jpeg');
    this.submit();
})