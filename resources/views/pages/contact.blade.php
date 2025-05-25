@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <main class="main">
        <section class="top">
            <div class="top__container" style="background-image: url('/images/top-bg.jpg');">
                <div class="container">
                    <h2 class="top__title title">CONTACT</h2>
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div id="map"></div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <div class="contact__inner">
                    <div class="contact__info">
                        <h3 class="contact__info-title">
                            Feel Free Don’t Hesitate To Contact With Us
                        </h3>
                        <p class="contact__info-text">
                            Lorem ipsum dolor sit amet, consectetur adingn elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo maecnaacnrao cumsan lacus vel facilisis.
                        </p>
                        <ul class="contact__info-list">
                            <li class="contact__info-item">
                                <a class="contact__info-phone" href="tel:+01234567896">+0-123-456-7896</a>
                                <a class="contact__info-phone" href="tel:+01234567896">+0-123-456-7896</a>
                            </li>
                            <li class="contact__info-item contact__info-item--location">
                                Ranlon Market 789 Road, Market Street, Newyork
                            </li>
                            <li class="contact__info-item contact__info-item--mail">
                                <a class="contact__info-mail" href="mailto:yourmailaddress@gmail.com">yourmailaddress@gmail.com</a>
                                <a class="contact__info-mail" href="mailto:companymail@gmail.com">companymail@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <form action="#" class="contact__form">
                        <p class="contact__form-title">
                            Contact Form
                        </p>
                        <div class="contact__form-box">
                            <input class="contact__form-input" type="text" placeholder="Your Name">
                            <input class="contact__form-input" type="text" placeholder="Your E-mail Address">
                        </div>
                        <input class="contact__form-input" type="text" placeholder="Subject">
                        <textarea class="contact__form-textarea" placeholder="Message here"></textarea>
                        <button class="contact__form-btn" type="submit">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection
