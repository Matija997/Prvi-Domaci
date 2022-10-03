<DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Prijava</button>

                <button type="button" class="toggle-btn" onclick="register()">Registracija</button>
            </div>
            <form id="logIn"  action="log.php" method="POST" class="user-pass" >
                <input type="email" class="username" name="email" id="email" placeholder="Email" required>
                <input type="password" class="password" name="password" id="password" placeholder="Unesi lozinku" required>
                <input type="checkbox" class="check"><span>Zapamti lozinku</span>
                <button type="submit" class="submit-btn">Prijavi se</button>

            </form>
            <form id="regis" action="sing.php" method="POST" class="user-passR" >
                <input type="text" class="userR" name="name" id="name"placeholder="Korisničko ime"  require>
                <input type="email" class="email" name="email" id="email" placeholder="Email"   require>
                <input type="password" class="passR" name="password" id="password" placeholder="Unesi lozinku" require >
                <input type="checkbox" class="check" required><span>Prihvatam uslove korišćenja</span>
            
                <button type="submit" class="submit-btn">Registruj se</button>

            </form>

        </div>
        
       
    </div>
    <script>
        var x=document.getElementById("logIn");
        var y=document.getElementById("regis");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }


    </script>

</body>
</html>