<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Conduit</title>
  
      <link rel="stylesheet" href="css/style.css">
      <meta http-equiv="refresh" content="">
      <link href="../cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/font-awesome.min020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
</head>

<body>

  <div class="login-page">
  <div class="form">
    <center><img style="max-height: 80px; margin-top: -35px; margin-left: -10px" src="../img/drugconsultlogo.jpg" /></center>
    <form class="register-form" action="../app/process.php" method="post">
      <input type="text" name="name" placeholder="Your Name" required/>

      <input type="email" name="email" id="username" placeholder="Your Email Address" onkeyup="setTimeout(checknow, 1,'checkusername','username','usernameMSG');" required/>
       <div class="help-block" id="usernameMSG"></div>

      <input type="phone" name="mobile" placeholder="Your Mobile No" required/>

      <select name="location" placeholder="Select Your Location">
      <option value=''>Where are you located?</option>
      <option value="Abuja">Abuja FCT</option><option value="Anambra">Anambra</option><option value="Akwa Ibom">Akwa Ibom</option><option value="Adamawa">Adamawa</option><option value="Abia">Abia</option><option value="Bauchi">Bauchi</option><option value="Bayelsa">Bayelsa</option><option value="Benue">Benue</option><option value="Borno">Borno</option><option value="Cross River">Cross River</option><option value="Delta">Delta</option><option value="Ebonyi">Ebonyi</option><option value="Enugu">Enugu</option><option value="Edo">Edo</option><option value="Ekiti">Ekiti</option><option value="Gombe">Gombe</option><option value="Imo">Imo</option><option value="Jigawa">Jigawa</option><option value="Kaduna">Kaduna</option><option value="Kano">Kano</option><option value="Katsina">Katsina</option><option value="Kebbi">Kebbi</option><option value="Kogi">Kogi</option><option value="Kwara">Kwara</option><option value="Lagos">Lagos</option><option value="Nasarawa">Nasarawa</option><option value="Niger">Niger</option><option value="Ogun">Ogun</option><option value="Ondo">Ondo</option><option value="Osun">Osun</option><option value="Oyo">Oyo</option><option value="Plateau">Plateau</option><option value="Rivers">Rivers</option><option value="Sokoto">Sokoto</option><option value="Taraba">Taraba</option><option value="Yobe">Yobe</option><option value="Zamfara">Zamfara</option>
      </select>

      <input type="password" name="password" id="password1" placeholder="Choose Password" onkeyup="setTimeout(checknow, 1,'checkpassword','password1','pwdMeter');" required/>
      <div class="help-block" id="pwdMeter"></div>

      <input type="password" name="re_password" id="password2" placeholder="Re-Type Password" onkeyup="setTimeout(checknow, 1,'matchpassword','password2','password_match_span');" required/>
      <div class="help-block" id="password_match_span"></div>

      <button type="submit" name="signup">create account</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action="../app/process.php" method="post" class="login-form">
      <input name="email" type="email" placeholder="Email Address"/>
      <input type="password" name="password" placeholder="Your Password"/>
      <button name="login" type="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='js/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
    <script  src="js/script.js"></script>



</body>

</html>
