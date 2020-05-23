function getQuestion(){
    $.ajax({ // start an ajax request to get data.php()
	type: 'POST',
	url: 'getQuestion.php',
	dataType: 'html',
	success: function(msg){
	    document.getElementById('querstion').innerHTML = msg;
	    console.log("Got the question successfully");
	}
    });//end of ajax request

}
