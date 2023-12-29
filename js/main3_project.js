// Main Object  Student
function Student(fname, lname, email, dob){
    this.fname = fname;
    this.lname = lname;
    this.email = email;
    this.dob = dob;
}



// Object UI
function StudentUi(){}

StudentUi.prototype.AddStudent = (students)=>{
    let trow = document.createElement("tr");
    let tbody = document.querySelector("#tbody");
    trow.innerHTML = 
    `
        <td>${Math.floor(Math.random() * 10000)}</td>
        <td>${students.fname}</td>
        <td>${students.lname}</td>
        <td>${students.email}</td>
        <td>${students.dob}</td>
        <td><a href="#"><i class="bi bi-x-circle delete"></i></a></td>
    `
    tbody.appendChild(trow);
}


StudentUi.prototype.ClearInputs = ()=>{
    document.querySelector("#fname").value = '';
    document.querySelector("#lname").value = '';
    document.querySelector("#email").value = '';
    document.querySelector("#dob").value = '';
}


StudentUi.prototype.DeleteItems = (target)=>{
    if(target.className == 'bi bi-x-circle delete'){
        target.parentElement.parentElement.parentElement.remove()
    }
}



// Evenet Listener

document.querySelector("#formname").addEventListener('submit', function(e){
    let fname = document.querySelector("#fname").value;
    let lname = document.querySelector("#lname").value;
    let email = document.querySelector("#email").value;
    let dob = document.querySelector("#dob").value;


    let Std = new Student(fname, lname, email, dob);

    let StdUi = new StudentUi();

    StdUi.AddStudent(Std);

    StdUi.ClearInputs();
    e.preventDefault();
})


document.querySelector("#tbody").addEventListener('click', function(e){
    let StdUi = new StudentUi();
    StdUi.DeleteItems(e.target)
})