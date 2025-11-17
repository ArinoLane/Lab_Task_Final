
let name = document.getElementById('name');
let id = document.getElementById('studentID');
let error = document.getElementById("error");
let ok = document.getElementById("pass");



function js(){

    if(id.value == "" || name.value == "" ){
        error.innerHTML = "<strong>Please fill out everything</string>";
        
    }

    ok.innerHTML = `ALL OK! <br> your name: ${name.value} and id: ${id.value}`;

    return false;

}