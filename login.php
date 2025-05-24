<?php include "./header.php"?>
    <style>
        .login{
            max-width: 1000px;
            margin: auto;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
       margin: 100px auto;
        }
        .login img{
            width: 100%;
            height: auto;
        }
        .login  .row{
         display: flex;
        }
        .login  .col{
            width: 50%;
        }
      
        .login  .login-form-wrapper h2{
            text-align: center;
            font-weight: 700;
            font-size: 50px;
            margin-top: 100px;
        }
        #loginForm{
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: auto;
        }
        input{
           margin-bottom: 20px; 
        }
        input[type="text"] {
            height: 40px;
            border-radius: 25px;
            border-color: #01AA90;
            padding-left: 10px;
        }
        input[type="text"]::placeholder{
            padding-left: 10px;
        } 
         .login  .login-form-wrapper h2 span{
            color:#01AA90;
         }
         .login button {
    width: 100px;
    font-size: 16px;
    text-transform: uppercase;
    margin: auto;
    background: #01AA90;
    border: unset;
    height: 50px;
    color: #fff;
    border-radius: 25px;
    margin-bottom: 50px;
}
.login button:hover{
    background: #000;
    cursor: pointer;
}
.login  .social-wrapper {
    display: flex
;
    justify-content: center;
    gap: 30px;
    font-size: 25px;
}
.login  .social-wrapper i{
    background: #fff;
    width: 50px;
    height: 50px;
    display: flex
;
    align-items: center;
    justify-content: center;
    border-radius: 20px 0;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    transition-duration: 0.6s;
}
.login  .social-wrapper i:hover{
    background: #01AA90;
    color: #fff;
    transition-duration: 0.6s;
}
.text-center{
    text-align: center;
    margin: 20px 0;
}
@media only screen and (max-width:991px) {
    .login .login-form-wrapper h2{
        margin-top: 20px;
    }
}
@media only screen and (max-width:600px) {
.login .row{
    flex-wrap: wrap;
}
.login .col{
    width: 100%;
}
}
    </style>

    <div class=" login">
        <div class="row">
            <div class="col">
                <img src="./img/travel.jpg" alt="Beautiful woman">
            </div>
            <div class="col">
              <div class="login-form-wrapper">
              <h2>Travel <span>Login</span> </h2>
              <form id="loginForm">
                <input type="text" name="username" placeholder="Username">

                <input type="text" name="password" placeholder="Password">

                <button type="submit"> Login </button>
              </form>

              <div class="social-wrapper">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-linkedin"></i>
              </div>
              <p class="text-center"> <small>Developed by Web Advisor</small> </p>
              </div>
            </div>
        </div>
    </div>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e){
        e.preventDefault();

        const formData = new FormData(this);
        fetch('login-back.php', {
            method: 'POST',
            body:formData
        })
        .then(res=>res.json())
        .then(data => {
    if (data.success) {
        Swal.fire('Success', data.message, 'success').then(() => {
               window.location.href = "Dashboard/index.html";
           });
    } else {
        Swal.fire('Error', data.message, 'error');
    }
});

    });
  </script>
    <?php include "footer.php"?>