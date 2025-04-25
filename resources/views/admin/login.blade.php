<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fujigraphic</title>
  <link rel="stylesheet" href="../css/admin/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <div class="container">
      <br>
      <br>
      <br>
      <br>
        <img width="70%" height="auto" class="logo" alt="logo" src="{{ asset('images/fujigraphicjakarta.png') }}">
        <br>
        <br>
        <h1 style="font-weight: bold;">CV. FUJIGRAPHIC JAKARTA</h1>
		
	  <form action="{{ route('admin.login') }}" method="POST"> 
          @csrf
          <input id="email" placeholder="Masukan Email" class="form-content" type="email"
          name="email" autocomplete="on" required/>
          <div class="form-border"></div>
          <input id="password" placeholder="Masukan Kata Sandi" class="form-content" type="password"
          name="password" required/>
          <a href="#">
          </a>
			<button type="submit" name= "submit" id="login-button">Masuk</button>
	  </form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script  src="{{ asset('./script/admin/admin.js') }}"></script>

</body>
</html>