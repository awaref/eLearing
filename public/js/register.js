var role = document.getElementById('inputRole');
role.onchange = function(){
    if((this.value !== 'Student')){
        document.getElementById('inputLevel').disabled = true;
        document.getElementById('inputGPA').disabled = true;

    }else{
        document.getElementById('inputLevel').disabled = false;
        document.getElementById('inputGPA').disabled = false;
    }

    if(this.value !== 'Instructor'){
        document.getElementById('inputEducation').disabled = true;
    }else{
        document.getElementById('inputEducation').disabled = false;
    }
};
