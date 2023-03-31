const dropBtn1 = document.getElementById('dropdown1');
const dropBox1 = document.getElementById('dropbox1');
function droptoggle(dropbox){
    dropbox.classList.toggle('hidden');
}
dropBtn1.addEventListener('click',() =>{droptoggle(dropBox1);});