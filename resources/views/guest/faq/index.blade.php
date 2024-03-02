@extends('layouts.guest.main')

@section('content')
    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
            <div class="text-center mt-5 mb-3 pb-1">
                <span class="badge bg-label-primary">FAQ</span>
            </div>
            <h3 class="text-center mb-1">Frequently asked questions</h3>
            <p class="text-center mb-5 pb-3">
                Browse through these FAQs to find answers to commonly
                asked questions.
            </p>
            <div class="row gy-5">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/landing-page/faq-boy-with-logos.png') }}"
                            alt="faq boy with logos"
                            class="faq-image"
                        />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2
                                class="accordion-header"
                                id="headingOne"
                            >
                                <button
                                    type="button"
                                    class="accordion-button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne"
                                    aria-expanded="true"
                                    aria-controls="accordionOne"
                                >
                                    Do you charge for each upgrade?
                                </button>
                            </h2>

                            <div
                                id="accordionOne"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Lemon drops chocolate cake gummies
                                    carrot cake chupa chups muffin
                                    topping. Sesame snaps icing marzipan
                                    gummi bears macaroon dragée danish
                                    caramels powder. Bear claw dragée
                                    pastry topping soufflé. Wafer gummi
                                    bears marshmallow pastry pie.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2
                                class="accordion-header"
                                id="headingTwo"
                            >
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo"
                                    aria-expanded="false"
                                    aria-controls="accordionTwo"
                                >
                                    Do I need to purchase a license for
                                    each website?
                                </button>
                            </h2>
                            <div
                                id="accordionTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Dessert ice cream donut oat cake
                                    jelly-o pie sugar plum cheesecake.
                                    Bear claw dragée oat cake dragée ice
                                    cream halvah tootsie roll. Danish
                                    cake oat cake pie macaroon tart
                                    donut gummies. Jelly beans candy
                                    canes carrot cake. Fruitcake
                                    chocolate chupa chups.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2
                                class="accordion-header"
                                id="headingThree"
                            >
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree"
                                    aria-expanded="false"
                                    aria-controls="accordionThree"
                                >
                                    What is regular license?
                                </button>
                            </h2>
                            <div
                                id="accordionThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Regular license can be used for end
                                    products that do not charge users
                                    for access or service(access is free
                                    and there will be no monthly
                                    subscription fee). Single regular
                                    license can be used for single end
                                    product and end product can be used
                                    by you or your client. If you want
                                    to sell end product to multiple
                                    clients then you will need to
                                    purchase separate license for each
                                    client. The same rule applies if you
                                    want to use the same end product on
                                    multiple domains(unique setup). For
                                    more info on regular license you can
                                    check official description.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2
                                class="accordion-header"
                                id="headingFour"
                            >
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour"
                                    aria-expanded="false"
                                    aria-controls="accordionFour"
                                >
                                    What is extended license?
                                </button>
                            </h2>
                            <div
                                id="accordionFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Nobis
                                    et aliquid quaerat possimus maxime!
                                    Mollitia reprehenderit neque
                                    repellat delenibx delectus
                                    architecto dolorum maxime,
                                    blanditiis earum ea, incidunt quam
                                    possimus cumque.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2
                                class="accordion-header"
                                id="headingFive"
                            >
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFive"
                                    aria-expanded="false"
                                    aria-controls="accordionFive"
                                >
                                    Which license is applicable for SASS
                                    application?
                                </button>
                            </h2>
                            <div
                                id="accordionFive"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Sequi
                                    molestias exercitationem ab cum nemo
                                    facere voluptates veritatis quia,
                                    eveniet veniam at et repudiandae
                                    mollitia ipsam quasi labore enim
                                    architecto non!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- FAQ: End -->
@endsection