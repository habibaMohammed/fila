@extends('layout')

@section('content')
   <!-- Contact Start -->
   <div class=" text-center bg-primary  hero-header bg-header">
                    <h1 class="text-white animated zoomIn mb-3">Request A quote</h1>
                    <nav aria-label="breadcrumb">
                        <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol> -->
                    </nav>
                </div>

   
        
        
        <!-- Quote Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Free Quote</div>
                    <h2 class="mb-5">Request A Free Quote</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                            <option selected="">Financial Consultancy</option>
                                            <option value="1">Strategy Consultancy</option>
                                            <option value="2">Tax Consultancy</option>
                                        </select>
                                        <label for="floatingSelect">Select A Service</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Comments</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Request Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->
        


        

@endsection