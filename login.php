<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <style>
        body {
            margin: 0;
            color: hwb(276 98% 0%);
            background: #000000;
            font: 600 16px/18px 'Open Sans', sans-serif;
        }

        .login-box {
            width: 100%;
            margin: auto;
            max-width: 525px;
            min-height: 670px;
            position: relative;
            background: url(https://www.goodmorninghdloveimages.com/wp-content/uploads/2021/10/Free-Download-Instagram-Modern-Stylish-Dp-4.jpg) no-repeat center;
			

			background-size: cover;
    

	filter: brightness(2) contrast(1); /* Increase brightness and contrast */
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0), 0 17px 50px 0 rgba(0, 0, 0, 0);
        }

        .login-snip {
            width: 100%;
            height: 100%;
            position: absolute;
            padding: 90px 70px 50px 70px;
            background: rgba(10, 10, 10, 0.9);
        }

        .login-snip .login,
        .login-snip .sign-up-form {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            transition: all .4s linear;
        }

        .login-snip .sign-in:checked + .tab,
        .login-snip .sign-up:checked + .tab {
            color: #fff;
            border-color: #341e35;
        }

        .login-snip .tab {
            font-size: 22px;
            margin-right: 15px;
            padding-bottom: 5px;
            margin: 0 15px 10px 0;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }

        .login-space {
            min-height: 345px;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        .login-space .group {
            margin-bottom: 15px;
        }

        .login-space .group .label,
        .login-space .group .input,
        .login-space .group .button {
            width: 100%;
            color: #fff;
            display: block;
        }

        .login-space .group .input,
        .login-space .group .button {
            border: none;
            padding: 15px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, .1);
        }

        .login-space .group input[data-type="password"] {
            text-security: circle;
            -webkit-text-security: circle;
        }

        .login-space .group .label {
            color: #aaa;
            font-size: 12px;
        }

        .login-space .group .button {
            background: #341e35;
        }

        .login-space .group input[type="checkbox"] {
            display: none;
        }

        .login-space .group label .icon {
            width: 15px;
            height: 15px;
            border-radius: 2px;
            position: relative;
            display: inline-block;
            background: rgba(255, 255, 255, .1);
        }

        .login-space .group label .icon:before,
        .login-space .group label .icon:after {
            content: '';
            width: 10px;
            height: 2px;
            background: #fff;
            position: absolute;
            transition: all .2s ease-in-out 0s;
        }

        .login-space .group label .icon:before {
            left: 3px;
            width: 5px;
            bottom: 6px;
            transform: scale(0) rotate(0);
        }

        .login-space .group label .icon:after {
            top: 6px;
            right: 0;
            transform: scale(0) rotate(0);
        }

        .login-space .group input[type="checkbox"]:checked + label .icon {
            background: #341e35;
        }

        .login-space .group input[type="checkbox"]:checked + label .icon:before {
            transform: scale(1) rotate(45deg);
        }

        .login-space .group input[type="checkbox"]:checked + label .icon:after {
            transform: scale(1) rotate(-45deg);
        }

        .login-snip .sign-in:checked + .tab + .sign-up + .tab + .login-space .login {
            transform: rotate(0);
        }

        .login-snip .sign-up:checked + .tab + .login-space .sign-up-form {
            transform: rotate(0);
        }

        .hr {
            height: 3px;
            margin: 60px 0 50px 0;
            background: rgba(255, 255, 255, .2);
        }

        .foot {
            text-align: center;
			
			
        }




		.foot a {
    color:  #ec82f2; /* Change this to your desired color */
    text-decoration: none; /* Optional: removes the underline */
}

.foot a:hover {
    color: #d1a3ff; /* Change this to your desired hover color */
}



    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                        <label for="tab-1" class="tab">Login</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up">
                        <label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-space">
                            <div class="login">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" placeholder="Enter your username" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password" required>
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="sign-up-form">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" placeholder="Create your Username" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Repeat Password</label>
                                    <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input" placeholder="Enter your email address" required>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <label for="tab-1">Already Member?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>
