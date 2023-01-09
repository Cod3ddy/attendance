const form = document.querySelector('.modal-content .modalForm-body .formModal');
const submitBtn = document.querySelector('.modalForm-content .modalForm-body .formModal .form-items .btnSubmit');

 console.log(form.elements.fullName.value);

// submitBtn.addEventListener("click", (e)=>{
//     e.preventDefault();
//     console.log('its working');
// })

function verifyForm() {
    form.onsubmit =function (){
        let name = form.elements.fullName.value;

        if (name === "")
        {
            alert("Name is required");
            return false;
        }
        return true;

    }
}