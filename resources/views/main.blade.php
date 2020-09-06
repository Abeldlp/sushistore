@extends('layouts.app')

@section('content')
    <div>
        <!-- Banner section-->
        <div class="container-fluid">
            <div class="front-container">
                <h1 class="text-center">AKUMA sushi store</h1>
            </div>
            <div class="row">
                <div class="col pt-5 pb-3">
                    <h1 class="text-center">Something HERE</h1>
                    <h3 class="text-center">Everything that you need to know</h3>
                </div>
            </div>
        </div>

        <!-- Image and explanation section-->
        <div class="container mt-2">
            <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <img class="w-100" src="/storage/images/sushi.jpg" alt="image positioninit">
                </div>
                
                <div class="col text-center bg-dark text-light d-flex flex-column pt-5">
                    <h1>Vivid</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum rem sunt illo id atque debitis porro rerum sequi tempore quibusdam at culpa quaerat eius omnis beatae magni, repudiandae vero. Rem repellendus ut, obcaecati doloribus aperiam exercitationem? Dignissimos distinctio deserunt explicabo, architecto id numquam saepe cum accusamus cumque dolorum error?</p>
                </div>
            </div>

            <!-- Time section-->
            <div class="row">
                <div class="col-sm-12 col-md-4 pt-5">
                    <h1 class="text-center">Title</h1>
                    <div class="d-flex align-items-center justify-content-center pb-2">
                        <img class="w-50" src="/storage/images/time.png" alt="">
                    </div>
                    <p  class="w-75 m-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eum expedita laudantium rem placeat. Unde soluta eius quisquam ex iusto.</p>
                </div>
                <div class="col-sm-12 col-md-4 pt-5">
                    <h1  class="text-center">Title</h1>
                    <div class="d-flex align-items-center justify-content-center pb-2">
                        <img class="w-50" src="/storage/images/time.png" alt="">
                    </div>
                    <p  class="w-75 m-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eum expedita laudantium rem placeat. Unde soluta eius quisquam ex iusto.</p>
                </div>
                <div class="col-sm-12 col-md-4 pt-5">
                    <h1  class="text-center">Title</h1>
                    <div class="d-flex align-items-center justify-content-center pb-2">
                        <img class="w-50" src="/storage/images/time.png" alt="">
                    </div>
                    <p class="w-75 m-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eum expedita laudantium rem placeat. Unde soluta eius quisquam ex iusto.</p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="second-banner" ></div>
        </div>

    </div>
@endsection