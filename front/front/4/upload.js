// returns the first element in the doc that matches selector (element id)
const photoInput = document.querySelector("#photoInput");
var uploadedPhoto;

// sets up function that will be called 
photoInput.addEventListener('change', function() {
  const reader = new FileReader();
  reader.addEventListener('load', () => {
    uploadedPhoto = reader.result;
    document.querySelector("#displayPhoto").style.backgroundImage = `url(${uploadedPhoto})`;
  });
  // read content of file 
  reader.readAsDataURL(this.files[0]);
});
