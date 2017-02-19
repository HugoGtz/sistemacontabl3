  <footer class="page-footer white " >
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">Rigasa S.C. Bio</h5>
          <p class="black-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>
        <div class="col l3 s12 offset-l3">
          <h5>Redes Sociales</h5>
          <ul class="soc">
            <li><a class="soc-twitter" href="https://www.facebook.com/tusaludfiscal/?fref=ts"></a></li>
            <li><a class="soc-facebook soc-icon-last" href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <a class="black-text text-lighten-3" href="#"> <strong>Made by</strong> DowowLabs</a>
      </div>
    </div>
  </footer>
<button id="loginBtn" class="btn blue" onclick="FB.login();">Facebook Login</button>
<div id="response"></div>

<script type="text/javascript" >
  document.getElementById('loginBtn').addEventListener('click', function() {
	//do the login
	FB.login(function(response) {
		if (response.authResponse) {
			//user just authorized your app
			document.getElementById('loginBtn').style.display = 'none';
			
			getUserData();
		}
	}, {scope: 'email,public_profile', return_scopes: true});
}, false);
 
</script>
 </body>

</html>