@extends('front.master')

@section('title')
    Contact
@endsection


@section('content')
    <main id="page-content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Contacts</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="contacts.html" class="breadcrumbs__item-link">Contacts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Breadcrumbs  -->
        <section class="contact-map">
            <div id="contacts-map"></div>
            <div class="contact-info-block">
                <div class="logo-contacts">
                    <div class="logo">
                        <a href="index.html">
                            <i class="icon-logo"></i>
                            <span>Rental</span>Cars
                        </a>
                    </div>
                </div>
                <div class="contact-info">
                    <span class="phone_number"><i class="icon-telephone"></i> 1-800-123-4567</span>
                    <span class="location_info">
					<i class="icon-placeholder-for-map"></i>
					<em>The Company Name Inc.</em>
					<em>9870 St Vincent Place,</em>
					<em>Glasgow, DC 45 Fr 45.</em> </span>
                </div>
                <div class="social-list">
                    <ul class="social-list__icons">
                        <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                        <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wrap-form">
                        <h1>Leave a Message</h1>
                        <form role="form" action="{{ url('/new-comment') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="input-wrapper first-child">
                                <input type="text" class="input-custom input-full" name="comentator_name" placeholder="Your name">
                            </div>
                            <div class="input-wrapper last-child">
                                <input type="email" class="input-custom input-full" name="comentator_email" placeholder="E-mail">
                            </div>
                            <div class="textarea-wrapper">
                                <textarea class="textarea-custom input-full" name="comentator_comment" placeholder="Comment"></textarea>
                            </div>
                            <div class="btn-wrapper">
                                <button type="submit"  class="btn btn-form">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
