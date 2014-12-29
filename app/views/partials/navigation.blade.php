<nav class="mainMenu mainNav" id="mainNav">
  <ul class="navTabs">
    <li><a href="/" class="active">Accueil</a></li>
    <li><a href="{{ url('about') }}">A propos</a></li>
    <li><a href="{{ url('contact') }}">Contact</a> </li>
    <li class="divider-menu"></li>
    <li class="login formTop">
      <button class="formSwitcher" data-toggle="modal" data-target="#loginModal">Login</button>
      <div class="modal loginModal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">
          <ol class="formWrapper loginFormWrapper" id="loginFormWrapper">
            <li><h5><i class="fa fa-user"></i>Login Area</h5></li>
            <li>
              <form class="loginForm" method="POST">
                <input class="loginName" id="loginName" name="loginName" placeholder="Name" type="text">
                <input class="loginPassword" id="loginPassword" name="loginPassword" placeholder="Password" type="password">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">Remember Me</label>
                <button class="generalBtn loginBtn" type="submit">Login</button>
              </form>
            </li>
            <li class="register"><p><a href="register.html">Create A new Account</a></p></li>
          </ol>
        </div><!-- end of container -->
      </div><!-- end of modal -->
      <a href="login.html">Login</a>
    </li>
  </ul><!-- end of nav tabs -->
</nav><!-- end of main nav -->

<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
<div class="clearfix"></div><!-- end of clearfix -->
<div class="responsiveMainNav"></div><!-- end of responsive main nav -->