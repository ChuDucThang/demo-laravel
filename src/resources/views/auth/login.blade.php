<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login -Register</title>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/backend/uikit/css/uikit.min.css">
    <style>
        body {
                background-image: url('img/background.jpg');
        }
    </style>
</head>
<body>
    <div class="uk-section uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                                <li><a href="#">Log In</a></li>
                                <li><a href="#">Sign Up</a></li>
                                <li class="uk-hidden">Forgot Password?</li>
                            </ul>
                            <ul class="uk-switcher uk-margin">
                            <li>
                                    <h3 class="uk-card-title uk-text-center">Welcome !</h3>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="uk-margin">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                                <input class="uk-input uk-form-large" id="email" type="email" name="email">
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                                <input class="uk-input uk-form-large" id="password" type="password" name="password">	
                                            </div>
                                        </div>
                                        <div class="uk-margin uk-text-right@s uk-text-center uk-text-small">
                                            <a href="#" uk-switcher-item="2">Forgot Password?</a>
                                        </div>
                                        <div class="uk-margin">
                                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit">{{ __('Login') }}</button>
                                        </div>
                                        <div class="uk-text-small uk-text-center">
                                            Not registered? <a href="#" uk-switcher-item="0">Create an account</a>
                                        </div>
                                    </form>
                                </li>
                                <li>
                                    <h3 class="uk-card-title uk-text-center">Sign up today. It's free!</h3>
                                    <form>
                                        <div class="uk-margin">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                <input class="uk-input uk-form-large" type="text" placeholder="First and last name">
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                                <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                                <input class="uk-input uk-form-large" type="password" placeholder="Set a password">	
                                            </div>
                                        </div>
                                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                            <label><input class="uk-checkbox" type="checkbox"> I agree the Terms and Conditions.</label>
                                        </div>
                                        <div class="uk-margin">
                                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                                        </div>
                                        <div class="uk-text-small uk-text-center">
                                            Already have an account? <a href="#" uk-switcher-item="1">Log in</a>
                                        </div>
                                    </form>
                                </li>
                                <li>
                                    <h3 class="uk-card-title uk-text-center">Forgot your password?</h3>
                                    <p class="uk-text-center uk-width-medium@s uk-margin-auto">Enter your email address and we will send you a link to reset your password.</p>
                                    <form>
                                        <div class="uk-margin">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                                <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Send Email</button>
                                        </div>
                                        <div class="uk-text-small uk-text-center">
                                            <a href="#" uk-switcher-item="1">Back to login</a>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <script src="{{url('/')}}/backend/uikit/js/uikit.min.js"></script>
    <script src="{{url('/')}}/backend/uikit/js/uikit-icons.min.js"></script>
</body>
</html>