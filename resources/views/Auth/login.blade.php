<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="google" value="notranslate"/>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleside.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="css/menu.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #688EF2;
        }
        .show-password{
            position: relative;
            left: 225px;
            bottom: 30px;
            cursor: pointer;
            color: #92203f;
        }

        .passwordInput{
            margin-top: 5%; 
            text-align :center;
        }

        .displayBadge{
            margin-top: 5%; 
            display: none; 
            text-align :center;
        }

    </style>
</head>
<body>
    <div class="container d-flex justify-content-center" style="margin-top: 3.5%; margin-bottom: 10px; vertical-align: middle;">
       
        <div class="card" style="width: 25rem;">
            <div class="card-body" style="align-items: center;">
               
                        <form method="post" action="{{url('login')}}">
                            @csrf
                        <div class="row d-flex items-center">
                            <div class="ms-6">
                                <div class="form-group justify-content-center ms-3" ><br>
                                    <img src="img/3966983-removebg-preview.png" style="height: 150px;"> 
                                </div>
                                <span class="h1 ms-6"><b>
                                    LOGIN
                                </b>
                                </span>
                                <div class="form-group"><br>
                                    <label>Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" style="width: 250px;" name="username" />
                                </div>
                                <div class="form-group"><br>
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror password-input" style="width: 250px;" name="password" id="PassEntry"/>
                                    <i class="fa-solid fa-eye show-password"></i>
                                    <br>
                                    <span id="StrengthDisp" class="badge displayBadge" style="width:250px;">Weak</span>
                                </div>
                                <!-- <div class="form-group mt-2"><br> -->
                                    <!-- <label>Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="operator" class="form-control">Operator</option>
                                    </select> -->
                          
                                <!-- </div> -->
                                <br>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4" style="margin-left: 9rem;">
                                <button type="submit" class="btn btn-success">LOGIN</button>
                            </div>
                            
                            <p>
                        </div>
                        </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">

    let timeout;
    let password = document.getElementById('PassEntry');
    let strengthBadge = document.getElementById('StrengthDisp');

    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
    let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');

    function isStrongPassword(password) {
        return strongPassword.test(password);
    }

    function StrengthChecker(PasswordParameter) {
        if (PasswordParameter.length <= 8) {
            strengthBadge.style.backgroundColor = 'red';
            strengthBadge.textContent = 'Weak or Medium';
            strengthBadge.style.display = 'block';
            alert("Password should be at least 8 characters long.");
            return;
        }

        if (isStrongPassword(PasswordParameter)) {
            strengthBadge.style.backgroundColor = 'green';
            strengthBadge.textContent = 'Strong';
        } else if (mediumPassword.test(PasswordParameter)) {
            strengthBadge.style.backgroundColor = 'yellow';
            strengthBadge.textContent = 'Medium';
        } else {
            strengthBadge.style.backgroundColor = 'red';
            strengthBadge.textContent = 'Weak';
        }
        strengthBadge.style.display = 'block';
    }

    password.addEventListener('input', () => {
        clearTimeout(timeout);

        timeout = setTimeout(() => {
            StrengthChecker(password.value);
        }, 500);
    });




    let showPasswordBtn = document.querySelector('.show-password');
    let passwordInp = document.querySelector('.password-input');

    showPasswordBtn.addEventListener('click', () => {

        // toggle icon 

        // font awesome class for eye icon
        showPasswordBtn.classList.toggle('fa-eye'); 

        // font awesome class for slashed eye icon
        showPasswordBtn.classList.toggle('fa-eye-slash');

        // ternary operator a shorthand for if and else to change the type of password input
        passwordInp.type = passwordInp.type === 'password' ? 'text' : 'password';

    })
    
</script>
</html>