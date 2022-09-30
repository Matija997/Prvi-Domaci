
<DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Dobrodošli</title>
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
            <form id="logIn" class="user-pass" method="POST" action="#">
            <input type="text" class="username" placeholder="Korisnićko ime" required>
            <input type="password" class="password" placeholder="Unesi lozinku" required>
            <input type="checkbox" class="check"><span>Zapamti lozinku</span>
            <button type="submit" class="submit-btn">Prijavi se</button>

            </form>
            <form id="regis" class="user-passR">
            <input type="text" class="userR" placeholder="Korisničko ime" required>
            <input type="text" class="email" placeholder="Email" required>
            <input type="password" class="passR" placeholder="Unesi lozinku" required>
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