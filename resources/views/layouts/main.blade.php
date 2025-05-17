<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="logo" href="index.html">
                <img class="logo__img" src="images/logo.png" alt="logo">
            </a>
            <nav class="menu">
                <button class="menu__btn">
                </button>
                <ul class="menu__list">
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="index.html">home</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="shop.html">shop</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="#">page</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="#">blog</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="#">contact</a>
                    </li>
                </ul>
            </nav>
            <div class="user-nav">
                <a class="user-nav__link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path fill="#29282d" fill-rule="evenodd"
                              d="M1392.07,57.928a9.923,9.923,0,0,0-3.8-2.383,5.78,5.78,0,1,0-6.54,0A10.018,10.018,0,0,0,1375,65h1.56a8.44,8.44,0,0,1,16.88,0H1395A9.931,9.931,0,0,0,1392.07,57.928Zm-11.29-7.148A4.22,4.22,0,1,1,1385,55,4.222,4.222,0,0,1,1380.78,50.78Z"
                              transform="translate(-1375 -45)" />
                    </svg>
                </a>
                <a class="user-nav__link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.03" height="20" viewBox="0 0 20.03 20">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #29282d;
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <path id="search" class="cls-1" d="M1439.89,63.7l-5.81-5.81a7.944,7.944,0,1,0-1.18,1.178l5.81,5.81a0.417,0.417,0,0,0,.59,0l0.59-.589A0.421,0.421,0,0,0,1439.89,63.7Zm-11.96-4.533a6.25,6.25,0,1,1,6.25-6.25A6.254,6.254,0,0,1,1427.93,59.163Z" transform="translate(-1420 -45)"/>
                    </svg>
                </a>
                <a class="user-nav__link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #29282d;
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <path id="heart_icon" class="cls-1" d="M1484.78,49.589a6.683,6.683,0,0,0-4.17-4.371c-1.71-.595-3.75,0-5.58,1.611-1.83-1.569-3.88-2.122-5.58-1.569a6.884,6.884,0,0,0-4.17,4.371c-0.47,1.57-.51,4.117,1.95,7.215,1.11,1.4,2.82,3.4,4.22,4.965,2.68,3.014,3.11,3.183,3.49,3.183h0.17c0.39,0,.77-0.168,3.45-3.224,1.41-1.613,3.11-3.609,4.22-4.966C1485.25,53.706,1485.25,51.159,1484.78,49.589Zm-3.28,6.2c-1.96,2.462-5.32,6.324-6.47,7.385-1.15-1.061-4.52-4.924-6.48-7.385-1.61-1.994-2.21-3.947-1.7-5.687a4.986,4.986,0,0,1,3.11-3.225c1.23-.467,2.9.169,4.43,1.655a0.84,0.84,0,0,0,1.06.126,0.447,0.447,0,0,0,.22-0.17c1.53-1.443,3.19-2.079,4.42-1.655a5.168,5.168,0,0,1,3.11,3.268C1483.71,51.8,1483.12,53.79,1481.5,55.784Z" transform="translate(-1465.03 -45)"/>
                    </svg>

                    <span class="user-nav__num">3</span>
                </a>
                <a class="user-nav__link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #29282d;
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <path id="cart_icon" class="cls-1" d="M1527.44,65a2.724,2.724,0,1,1,2.74-2.724A2.738,2.738,0,0,1,1527.44,65Zm0-3.814a1.09,1.09,0,1,0,1.09,1.09A1.094,1.094,0,0,0,1527.44,61.183Zm1.75-2.806h-12.81a0.823,0.823,0,0,1-.8-0.628l-2.68-11.115h-2.06a0.817,0.817,0,1,1,0-1.634h2.71a0.824,0.824,0,0,1,.8.627l0.74,3.078h16.1a0.818,0.818,0,0,1,.8,1.014l-2,8.038A0.822,0.822,0,0,1,1529.19,58.377Zm-12.16-1.635h11.52l1.59-6.4h-14.65ZM1517.48,65a2.724,2.724,0,1,1,2.74-2.724A2.738,2.738,0,0,1,1517.48,65Zm0-3.814a1.09,1.09,0,1,0,1.09,1.09A1.094,1.094,0,0,0,1517.48,61.183Z" transform="translate(-1510 -45)"/>
                    </svg>
                    <span class="user-nav__num">7</span>
                </a>
            </div>
        </div>
    </div>
</header>
<main>
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @yield('content')
</main>
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-top__contact">
                <a class="logo footer-top__contact-logo" href="index.html">
                    <img class="logo__img" src="images/logo.png" alt="logo">
                </a>
                <p class="footer-top__contact-adress">No. 342 - London Oxford Street,
                    012 United States</p>
                <a class="footer-top__contact-email" href="mailto:Youremail@gmail.com">Youremail@gmail.com</a>
                <a class="footer-top__contact-phone" href="tel:+02838388393">+0283 838 8393</a>

                <ul class="footer-top__social-list">
                    <li class="footer-top__social-item">
                        <a class="footer-top__social-link" href="#">
                            <svg width="11px" height="18px" viewBox="0 0 11 17" version="1.1">
                                <g>
                                    <path
                                        d="M 9.59375 9.5625 L 10.085938 6.484375 L 7.027344 6.484375 L 7.027344 4.488281 C 7.027344 3.648438 7.453125 2.828125 8.824219 2.828125 L 10.214844 2.828125 L 10.214844 0.207031 C 10.214844 0.207031 8.953125 0 7.746094 0 C 5.230469 0 3.585938 1.472656 3.585938 4.140625 L 3.585938 6.484375 L 0.785156 6.484375 L 0.785156 9.5625 L 3.585938 9.5625 L 3.585938 17 L 7.027344 17 L 7.027344 9.5625 Z M 9.59375 9.5625 " />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-top__social-item">
                        <a class="footer-top__social-link" href="#">
                            <svg width="15px" height="15px" viewBox="0 0 15 15" version="1.1">
                                <g>
                                    <path
                                        d="M 13.457031 4.445312 C 13.46875 4.578125 13.46875 4.710938 13.46875 4.84375 C 13.46875 8.910156 10.375 13.589844 4.722656 13.589844 C 2.980469 13.589844 1.359375 13.085938 0 12.210938 C 0.246094 12.238281 0.484375 12.25 0.742188 12.25 C 2.179688 12.25 3.503906 11.765625 4.558594 10.9375 C 3.207031 10.90625 2.074219 10.023438 1.683594 8.804688 C 1.875 8.832031 2.066406 8.851562 2.265625 8.851562 C 2.542969 8.851562 2.816406 8.8125 3.074219 8.746094 C 1.664062 8.460938 0.609375 7.222656 0.609375 5.730469 L 0.609375 5.691406 C 1.019531 5.921875 1.496094 6.0625 2 6.082031 C 1.171875 5.53125 0.628906 4.585938 0.628906 3.523438 C 0.628906 2.949219 0.78125 2.425781 1.046875 1.96875 C 2.558594 3.835938 4.835938 5.054688 7.386719 5.1875 C 7.339844 4.957031 7.308594 4.722656 7.308594 4.484375 C 7.308594 2.789062 8.679688 1.410156 10.382812 1.410156 C 11.269531 1.410156 12.070312 1.78125 12.628906 2.378906 C 13.324219 2.246094 13.992188 1.988281 14.582031 1.636719 C 14.351562 2.351562 13.867188 2.949219 13.230469 3.332031 C 13.847656 3.265625 14.449219 3.09375 15 2.855469 C 14.582031 3.464844 14.058594 4.007812 13.457031 4.445312 Z M 13.457031 4.445312 " />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-top__social-item">
                        <a class="footer-top__social-link" href="#">
                            <svg width="14px" height="16px" viewBox="0 0 14 16" version="1.1">
                                <g>
                                    <path
                                        d="M 3.132812 14 L 0.230469 14 L 0.230469 4.652344 L 3.132812 4.652344 Z M 1.679688 3.378906 C 0.753906 3.378906 0 2.609375 0 1.679688 C 0 0.753906 0.753906 0 1.679688 0 C 2.609375 0 3.363281 0.753906 3.363281 1.679688 C 3.363281 2.609375 2.609375 3.378906 1.679688 3.378906 Z M 13.996094 14 L 11.101562 14 L 11.101562 9.449219 C 11.101562 8.367188 11.078125 6.976562 9.589844 6.976562 C 8.082031 6.976562 7.851562 8.152344 7.851562 9.371094 L 7.851562 14 L 4.953125 14 L 4.953125 4.652344 L 7.734375 4.652344 L 7.734375 5.929688 L 7.777344 5.929688 C 8.164062 5.195312 9.109375 4.417969 10.523438 4.417969 C 13.460938 4.417969 14 6.351562 14 8.867188 L 14 14 Z M 13.996094 14 " />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-top__social-item">
                        <a class="footer-top__social-link" href="#">
                            <svg width="16px" height="17px" viewBox="0 0 16 16" version="1.1">
                                <g>
                                    <path
                                        d="M 16 8.179688 C 16 12.601562 12.824219 15.75 8.132812 15.75 C 3.632812 15.75 0 12.289062 0 8 C 0 3.710938 3.632812 0.25 8.132812 0.25 C 10.320312 0.25 12.164062 1.015625 13.582031 2.277344 L 11.371094 4.304688 C 8.476562 1.644531 3.09375 3.644531 3.09375 8 C 3.09375 10.703125 5.355469 12.894531 8.132812 12.894531 C 11.351562 12.894531 12.558594 10.695312 12.746094 9.554688 L 8.132812 9.554688 L 8.132812 6.886719 L 15.871094 6.886719 C 15.949219 7.285156 16 7.664062 16 8.179688 Z M 16 8.179688 " />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-top__social-item">
                        <a class="footer-top__social-link" href="#">
                            <svg width="14px" height="18px" viewBox="0 0 14 18" version="1.1">
                                <g>
                                    <path
                                        d="M 7.4375 0.226562 C 3.695312 0.226562 0 2.632812 0 6.523438 C 0 9 1.445312 10.40625 2.320312 10.40625 C 2.679688 10.40625 2.886719 9.4375 2.886719 9.160156 C 2.886719 8.835938 2.023438 8.140625 2.023438 6.777344 C 2.023438 3.953125 4.253906 1.949219 7.140625 1.949219 C 9.625 1.949219 11.460938 3.308594 11.460938 5.808594 C 11.460938 7.675781 10.6875 11.175781 8.171875 11.175781 C 7.261719 11.175781 6.484375 10.542969 6.484375 9.636719 C 6.484375 8.308594 7.449219 7.019531 7.449219 5.648438 C 7.449219 3.320312 4.023438 3.742188 4.023438 6.554688 C 4.023438 7.148438 4.101562 7.800781 4.375 8.339844 C 3.871094 10.425781 2.84375 13.539062 2.84375 15.691406 C 2.84375 16.355469 2.941406 17.007812 3.007812 17.671875 C 3.132812 17.804688 3.070312 17.792969 3.257812 17.726562 C 5.097656 15.300781 5.03125 14.824219 5.863281 11.652344 C 6.3125 12.472656 7.46875 12.917969 8.390625 12.917969 C 12.261719 12.917969 14 9.277344 14 5.996094 C 14 2.507812 10.871094 0.226562 7.4375 0.226562 Z M 7.4375 0.226562 " />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-top__nav">
                <h6 class="footer-top__title">
                    Useful Links
                </h6>
                <ul class="footer-top__nav-list">
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">About Us</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">Terms & Conditions</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">Help & Support</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top__nav">
                <h6 class="footer-top__title">
                    My Account
                </h6>
                <ul class="footer-top__nav-list">
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">My Account</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">My Cart</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">My Wishlist</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">Registration</a>
                    </li>
                    <li class="footer-top__nav-li">
                        <a class="footer-top__nav-link" href="#">Check Out</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top__form-wrapper">
                <h6 class="footer-top__title">
                    Subscribe Our Newsletter
                </h6>
                <p class="footer-top__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna
                    aliqua. Quis ipsum suspendisse ultrices gravida.
                </p>
                <form class="footer-top__form" action="#">
                    <input class="footer-top__form-input" type="email" placeholder="Your email address" required>
                    <button class="footer-top__form-btn" type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-bottom__text">
                © 2019 CodeAstrology. All Rights Reserved.
            </p>
            <div class="footer-bottom__box">
                We Accept
                <img class="footer-bottom__box-img" src="images/icons/mastercard.png" alt="we accept mastercard">
                <img class="footer-bottom__box-img" src="images/icons/visa.png" alt="we accept visa">
                <img class="footer-bottom__box-img" src="images/icons/paypal.png" alt="we accept paypal">
            </div>
        </div>
    </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>
