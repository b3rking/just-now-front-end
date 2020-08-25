<?php
require_once "header.php";
?>
<div class="m-container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="#" class="sign-in-form">
                <h2 class="heading-primary u-margin-bottom">Sign In</h2>
                <div class="input-field">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn btn-solid">

                <p class="social-text">Or sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon"><i class="fa fa-google"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-youtube"></i></a>
                </div>
            </form>

            <form action="#" class="sign-up-form">
                <h2 class="heading-primary u-margin-bottom">Sign Up</h2>
                <div class="input-field">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fa fa-email"></i>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn btn-solid">

                <p class="social-text">Or sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon"><i class="fa fa-google"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-youtube"></i></a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3 class="title">New here?</h3>
                <p class="paragraphe">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla dolores est neque accusamus numquam magni soluta enim illo sequi. Doloribus suscipit cum ullam dolor nulla iste quis iure libero culpa.</p>
                <button class="btn btn-transparent" id="sign-up-btn">Sign Up</button>

                <img src="../vendor/image/8.svg" class="image" alt="image">
            </div>
            
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3 class="title">One of us?</h3>
                <p class="paragraphe">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla dolores est neque accusamus numquam magni soluta enim illo sequi. Doloribus suscipit cum ullam dolor nulla iste quis iure libero culpa.</p>
                <button class="btn btn-transparent" id="sign-in-btn">Sign In</button>

                <img src="../vendor/image/9.svg" class="image" alt="image">
            </div>
        </div>
    </div>
</div>

<script src="../js/app.js"></script>

<?php 
require_once "footer.php";
?>