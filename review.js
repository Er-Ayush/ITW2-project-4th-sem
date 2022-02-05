const input = document.getElementById('file-input');
const label = document.getElementsByClassName("custom-file-input")[0];

input.addEventListener("change", () => {
  const file = input.value;  
  const [fileName] = file.match(/\w+.\w+$/);
  
  if (fileName.trim()) {
    label.classList.add("with-file");
    label.innerText = fileName;
  }
})



const btnHam = document.querySelector('.ham-btn');
const btnTimes = document.querySelector('.times-btn');
const navBar = document.getElementById('nav-bar');

btnHam.addEventListener('click', function(){
    if(btnHam.className !== ""){
        btnHam.style.display = "none";
        btnTimes.style.display = "block";
        navBar.classList.add("show-nav");
    }
})

btnTimes.addEventListener('click', function(){
    if(btnHam.className !== ""){
        this.style.display = "none";
        btnHam.style.display = "block";
        navBar.classList.remove("show-nav");
    }
})