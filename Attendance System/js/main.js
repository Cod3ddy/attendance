const barsMenu = document.querySelector('.nav-container-top .top-nav-item .fa-bars');
const closeBtn = document.querySelector('.nav-container .closeBtn')

const sideNav = document.querySelector('.sideNavigation');
const titleSelect = document.querySelector(".nav-container-top .title");
const getDate = document.querySelector('.menu-boxes .footer .datePresent');
// modalForm variables
const modalForm = document.querySelector('#addStudent');
const modalOpenBtn = document.querySelector('.addStudent');
const modalCloseBtn = document.querySelector('.modalForm-content .modalForm-header .modalHeader-items .modalCloseBtn');

// animators
const gearspin = document.getElementById('gearSpin');


console.log("what");

//functions
function startSpinning(){
   
    gearspin.style.animation = 'spin 2s linear infinite';

}
function stopSpinning (){
    gearspin.style.anaimtion = 'none';
}


// buttons
barsMenu.addEventListener("click", ()=>{
    sideNav.classList.add('show');
    titleSelect.style.display="none";

});
closeBtn.addEventListener("click", ()=>{
    sideNav.classList.remove('show');
    titleSelect.style.display= "block";
});

// modal 
modalOpenBtn.addEventListener("click", ()=>{
    modalForm.style.display="block";
});
modalCloseBtn.addEventListener('click', () =>{
    modalForm.style.display="none";
});
window.addEventListener('click', (e) => {
    if (e.target === modalForm) {
        modalForm.style.display = "none";
    }
});

// set date
let date = new Date ();
let gettingDate = date.getMonth();
getDate.innerText = gettingDate;