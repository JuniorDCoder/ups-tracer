@extends('welcome')

@section('title')
    Blog
@endsection

@section('header')
    <h1 class="text-white display-3">Latest Blog</h1>
    <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">Blog</p>
    </div>
@endsection

@section('content')

    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-secondary mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                    <a class="text-muted ml-2" href="">John Doe</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                    <a class="text-muted ml-2" href="">Logistics</a>
                                </div>
                            </div>
                            <h4 class="font-weight-bold mb-3">Improving Efficiency in Logistics</h4>
                            <p>Discover how we are improving efficiency in logistics. We are using innovative technology to streamline operations and deliver superior service.</p>
                            <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- Repeat the above structure for each blog post -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Blog Grid End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary border-primary text-white"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Categories</h3>
                    <div class="bg-secondary" style="padding: 30px;">
                        <ul class="list-inline m-0">
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Logistics Management</a>
                                <span class="badge badge-secondary badge-pill">150</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Supply Chain</a>
                                <span class="badge badge-secondary badge-pill">131</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Transportation</a>
                                <span class="badge badge-secondary badge-pill">78</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Warehousing</a>
                                <span class="badge badge-secondary badge-pill">56</span>
                            </li>
                            <li class="py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Inventory Management</a>
                                <span class="badge badge-secondary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Recent Posts</h3>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            How to Improve Your Supply Chain Efficiency
                        </a>
                    </div>
                    <!-- Repeat the above structure for each recent post -->
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-secondary m-1">Logistics</a>
                        <a href="" class="btn btn-secondary m-1">Supply Chain</a>
                        <a href="" class="btn btn-secondary m-1">Transportation</a>
                        <a href="" class="btn btn-secondary m-1">Warehousing</a>
                        <a href="" class="btn btn-secondary m-1">Inventory</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="mb-4">About Us</h3>
                    <div class="bg-secondary text-center" style="padding: 30px;">
                        <p>We are a leading logistics company providing end-to-end supply chain solutions. Our mission is to streamline logistics with innovative solutions.</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

@endsection
