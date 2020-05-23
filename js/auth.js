function auth() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var goAhead = 0;
        $.ajax({
	    type: 'POST',
	    url: '../php/auth.php',
	    data: {username: user, password: pass},
	    success: function(msg){
		console.log(msg);
		goAhead = msg;
		changeState(msg);
	    }// end of successs
       }); // end of ajax
    console.log("goAhead is equal to " + goAhead);
   function changeState(x){
    if (x ==1){
	window.location.replace("https://classdb.it.mtu.edu/~mrpainte/final/html/selection.html");
    }
   }
	
}
//auth.js
