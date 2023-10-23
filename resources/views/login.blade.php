<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWebSoc</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Montserrat:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <main class="main"> 
    <aside class="left_side">
        <div class="left_side-logo">
            <img src="img/logo.svg" alt="" class="left_side_logo-img">
        </div>
        <p class="left_side-text">
            The universe is in your hands
        </p>
    </aside>

    <aside class="rigt_side">
        <p class="right_side-title" id="accountTitle">
            Log In

        </p>
        <p class="right_side-subtitle" id="accountSubtitle">
            Log in your account
        </p>


        <form action="/login" method="post" class="login" id="loginForm">
            @csrf
            <input type="email" class="log__email" name="email" id="email" placeholder="E-mail">
            @error('email')
              <p class="log__email">{{ $message }}</p>
             @enderror
           <label class="inp_password" for="">
               <input type="password" class="login__pas" name="password" id="password" placeholder="Password">
               <button class="password_visible">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                       <g clip-path="url(#clip0_54_39)">
                           <path
                               d="M11.9601 11.9594C10.8205 12.828 9.43282 13.3093 8.00008 13.3327C3.33341 13.3327 0.666748 7.99937 0.666748 7.99937C1.49601 6.45396 2.64617 5.10377 4.04008 4.03937M6.60008 2.82603C7.05897 2.71862 7.52879 2.66492 8.00008 2.66603C12.6667 2.66603 15.3334 7.99937 15.3334 7.99937C14.9287 8.75644 14.4461 9.46919 13.8934 10.126M9.41341 9.4127C9.23032 9.6092 9.00951 9.7668 8.76418 9.87611C8.51885 9.98543 8.25402 10.0442 7.98548 10.0489C7.71693 10.0537 7.45019 10.0043 7.20115 9.90369C6.95212 9.8031 6.7259 9.65338 6.53598 9.46347C6.34606 9.27355 6.19634 9.04733 6.09575 8.79829C5.99516 8.54926 5.94577 8.28251 5.9505 8.01397C5.95524 7.74543 6.01402 7.4806 6.12333 7.23526C6.23264 6.98993 6.39025 6.76913 6.58675 6.58603"
                               stroke="#999999" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M0.666748 0.666016L15.3334 15.3327" stroke="#999999" fill="none"
                               stroke-linecap="round" stroke-linejoin="round" />
                       </g>
                       <defs>
                           <clipPath id="clip0_54_39">
                               <rect width="16" height="16" fill="#Ffff" />
                           </clipPath>
                       </defs>
                   </svg>
               </button>
           </label>
           @error('password')
            <p class="log__password">{{ $message }}</p>
           @enderror
            <button type="submit" class="log_in">Log In</button>
        </form>
        <div class="subform">
        <p class="subform__text" id="subformText">Don`t have account?</p>
        <a href='{{'/'}}' class="log__in" id="logInLink">Sing In</a>
        </div>
    </aside>

    </main>
    <script src="js/script.js"></script>
</body>
</html>