<?php
include __DIR__.'/layout/header.php';
echo '
    <link rel="stylesheet" href="/assets/css/login.css">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="loginForm" class="form">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email ID:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button id="loginFormSubmit" type="submit" class="btn btn-info btn-md">Login</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="/signup" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/assets/js/login.js"></script>    
';

include __DIR__.'/layout/footer.php';