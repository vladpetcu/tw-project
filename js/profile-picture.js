
function submitPicForm(){
    let picForm = document.getElementById("profile-form");
    picForm.submit();
}

var picInput = document.getElementById("profile-pic-input");
picInput.onchange = submitPicForm;