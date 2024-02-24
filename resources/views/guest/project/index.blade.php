@extends('layouts.guest.main')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
</div>
<div class="row gx-5 justify-content-center">
    <div class="col-sm-11 col-md-11 col-lg-11 col-xl-9 col-xxl-8">
        <!-- Project Card 1-->
        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
            <div class="card-body p-0">
                <div class="d-flex align-items-center">
                    <div class="p-5">
                        <h2 class="fw-bolder">Project Name 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                    </div>
                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                </div>
            </div>
        </div>
        <!-- Project Card 2-->
        <div class="card overflow-hidden shadow rounded-4 border-0">
            <div class="card-body p-0">
                <div class="d-flex align-items-center">
                    <div class="p-5">
                        <h2 class="fw-bolder">Project Name 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                    </div>
                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <h2 class="display-4 fw-bolder mb-4 mt-4">Let's build something together</h2>
    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="http://project-laravel-1.test/contact">Contact me</a>
</div>
@endsection