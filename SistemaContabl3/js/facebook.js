 
function getUserData() {
	FB.api('/me', function(response) {
	    "...?fields={fieldname_of_type_CoverPhoto}",
		document.getElementById('response').innerHTML = 'Hello ' + response.id;
		var d = new Date();
        var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
	    var id_user_facebook = response.id, name = response.name, user_name = null, password = null, phone = null, email = response.email, user_range = 1, registration_date = strDate;
		$.get('users/datas', {id_user_facebook: id_user_facebook, name: name, user_name: user_name, password:password, phone: phone, email: email, user_range: user_range, registration_date: registration_date}, function(data) {
		    console.log(data);
		});
		
	});
}
function logout(){
    FB.logout(function(response) {
   // Person is now logged out
});
}


window.fbAsyncInit = function() {
	//SDK loaded, initialize it
	FB.init({
		appId      : '1782554552035319',
		xfbml      : true,
		version    : 'v2.2'
	});
 
	//check user session and refresh it
	FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			//user is authorized
			alert("Hola");
			document.getElementById('loginBtn').style.display = 'none';
			getUserData();
			
		} else {
			//user is not authorized
		}
	});
	

};
 
//load the JavaScript SDK
(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.com/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
//add event listener to login button

function containers(){
	
}