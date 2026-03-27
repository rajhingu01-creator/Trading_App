@extends('web.header-footer')
@section('content')
    <main class="main-wrapper contact-page">
        <section class="banner">
            <div class="custom--container" bis_skin_checked="1">
                <div class="banner-div" bis_skin_checked="1">
                    <div class="banner-fir-div" bis_skin_checked="1">
                        <div class="banner__content py-60" bis_skin_checked="1">
                            <h2 class="banner__title dynamicColor" data-color_word="[4]">Connecting People With <span
                                    class="text--base">Knowledge</span></h2>
                            <p class="banner__subtitle ">Escape Financial Struggle and Take Control of Your Future in our 12
                                Week Transformation Course</p>
                        </div>
                    </div>
                    <div class="banner-sec-div" bis_skin_checked="1">
                        <div class="banner__img" bis_skin_checked="1">
                            <img class="thumb"
                                src="https://script.viserlab.com/tutolab/assets/images/frontend/contact_us/64e492f9403261692701433.png"
                                alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="custom--container" bis_skin_checked="1">
                <div class="contact-div-row-first" bis_skin_checked="1">
                    <div class="contact-section__content">
                        <h4 class="contact-section__title">Send us a message</h4>
                        <p class="contact-section__desc">Escape Financial Struggle and Take Control of Your Future in our 12
                            Week Transformation Course</p>
                    </div>
                </div>
                <div class="contact-div-row-second" bis_skin_checked="1">
                    <div class="contact-section-form" bis_skin_checked="1">
                        <form class="contact-form verify-gcaptcha" method="POST">
                            <input type="hidden" name="_token" value="ujsbzSqiODwCcSYU8vKe4lnGOfAgrrC4KlaDmdGC"
                                autocomplete="off">
                            <div class="form-group" bis_skin_checked="1">
                                <input class="form--control" type="text" name="name" placeholder="Name" value=""
                                    required="">
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <input class="form--control" type="email" name="email" placeholder="Email"
                                    value="" required="">
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <input class="form--control" type="text" name="subject" placeholder="Subject"
                                    required="">
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <textarea class="form--control" name="message" placeholder="Type your message..."></textarea>
                            </div>
                         

                            <button class="btn btn--base rounded-pill w-100" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="contact-section-address" bis_skin_checked="1">
                        <div class="address-card" bis_skin_checked="1">
                            <span class="address-card__icon flex-center">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <div class="address-card__content" bis_skin_checked="1">
                                <h5 class="address-card__title">Office Address</h5>
                                <p class="address-card__desc">67 Brooklands Avenue, Manchester, Greater Manchester, M23 9LB</p>

                            </div>
                        </div>
                        <div class="address-card" bis_skin_checked="1">
                            <span class="address-card__icon flex-center">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <div class="address-card__content" bis_skin_checked="1">
                                <h5 class="address-card__title">Email us</h5>
                                <p class="address-card__desc">We’re usually replying within 24 hours</p>
                                <a href="mailto:contact@site.com" class="address-card__link">contact@site.com</a>
                            </div>
                        </div>
                        <div class="address-card" bis_skin_checked="1">
                            <span class="address-card__icon flex-center">
                               <i class="fa fa-phone"></i>
                            </span>
                            <div class="address-card__content" bis_skin_checked="1">
                                <h5 class="address-card__title">Call us</h5>
                                <p class="address-card__desc">Talk to us and see how we can work together</p>
                                <a href="tel:(013) 456-7890" class="address-card__link">(013) 456-7890</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
