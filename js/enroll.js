function enroll(){
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var name = document.getElementById("name").value;
    var major= document.getElementById("major").value;
    console.log(user);
    console.log(pass);
    console.log(name);
    console.log(major);
    $.ajax({ // start an ajax request to get data.php()
        type: 'POST',
        url: '../php/enroll.php',
        data: {username: user, password: pass, fullname: name, Newmajor: major},
        success: function(msg){
            document.getElementById('enroll').innerHTML =msg
            console.log("enrolled successfully");
        }
    });//end of ajax request

}
