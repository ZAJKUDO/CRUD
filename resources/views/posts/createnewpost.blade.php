@extends ('layout.app')
@section('content')
<!-- Contact Section-->
<section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h1 class=" masthead page-section-heading text-center text-uppercase text-secondary mb-0">DODAJ NOWY WPIS</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{route('zapisz')}}" method="POST">
                            {{ csrf_field() }}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="title" name="title" type="text" placeholder="Wpisz tytuł wpisu..." data-sb-validations="required" required="required" />
                                <label for="name">Tytuł wpisu</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Tytuł jest wymagany!</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="post" name="post" type="text" placeholder="Wprowadź tekst posta tutaj..." style="height: 10rem" data-sb-validations="required"required="required"></textarea>
                                <label for="message">Treść</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Treść jest wymagana!</div>
                            </div>
                            
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="addressee" name="addressee"t ype="text" placeholder="Wykonawca?" data-sb-validations="required" required="required" />
                                <label for="phone">Autor wpisu</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Autor jest wymagany!</div>
                            </div>
                            
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                        
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl " id="submitButton" type="submit">DODAJ WPIS</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection