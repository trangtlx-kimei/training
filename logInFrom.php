<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="logInFrom.css">
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form method="POST" id="login_data">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input type="text" class="input"  id="userLogin" required>

                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input type="password" class="input" data-type="password"  id="passLogin" required>
                            <br/>
                            <?php include('login.php');?>
                            <span><?php echo $passLogin_error?></span>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                        <button type="button" class="button" value="Log-In" id="btn_login">Log-In</button>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </div>
                </form>
                <form method="POST" id="insert_data">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input type="text" class="input" id="userName" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input type="password" class="input" data-type="password" id="password" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label" >Repeat Password</label>
                            <input type="password" class="input" data-type="password" id="repeatPassword" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input type="text" class="input" id="email" required> 
                        </div>
                        <div class="group">
                        <button type="button" class="button" value="Insert" id="btn_insert">Insert</button>
                        </div>
                        <div class="hr"></div>
                    </div>
                </form>
                <!--  Load data bang ajax !-->
                <div id="load_data"></div>
            </div>
        </div>
    </div>
    <!--  Load data tu from dang ky sign up !-->
    <script>
      $(document).ready(function(){
        $('#btn_insert').on('click', function(){
            var userName = $('#userName').val();
            var password =$('#password').val();
            var repeatPassword =$('#repeatPassword').val();
            var email =$('#email').val();

            console.log(userName);
            console.log(password);
            console.log(repeatPassword);
            console.log(email);

            
            if(userName === ''|| password === ''|| repeatPassword ==='' || email===''){
                // alert('khong duoc bo trong');
            }else{
                $.ajax({
                    url:'logIn_ajax.php',
                    method:'POST',
                    data:{userName:userName, password:password, repeatPassword:repeatPassword, email:email},
                    success:function(data){
                        console.log(data);
                        // alert ('insert thanh cong');
                        $('insert_data')[0].reset();
                        fetch_data();
                    },
                });
            };
        });
      })

      
      $(document).ready(function(){
         $('#btn_login').on('click', function(){
            var userLogin =$('#userLogin').val();
            var passLogin =$('#passLogin').val();

            console.log(userLogin);
            console.log(passLogin);

            if(userLogin === ''|| passLogin === ''){
                alert('khong duoc bo trong');
            }else{
                $.ajax({
                    url:'login.php',
                    method:'POST',
                    data:{userLogin:userLogin, passLogin:passLogin},
                    success:function(data){
                        console.log(data);
                        // alert ('Log-In thanh cong');
                        $('login_data')[0].reset();
                        fetch_data();
                    }
                });
            }
        });
      });
    </script>
</body>
</html>