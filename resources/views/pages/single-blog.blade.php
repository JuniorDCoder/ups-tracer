@extends('welcome')

@section('title')
    Blog
@endsection

@section('header')
    <h1 class="text-white display-3">Blog Detail</h1>
    <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="{{route('home')}}">Home</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0">Blog Detail</p>
    </div>
@endsection

@section('content')

    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="pb-3">
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
                        <h4 class="font-weight-bold mb-3">The Evolution of Logistics Tracking</h4>
                        <p>Logistics tracking has undergone significant changes over the years. From manual processes to automated systems, the industry has seen a massive shift in how operations are conducted. The advent of technology has made it possible to track shipments in real-time, ensuring efficiency and transparency in the supply chain.</p>
                        <p>With the rise of e-commerce, the demand for efficient logistics tracking systems has increased. Businesses need to ensure that their products reach customers on time and in perfect condition. This has led to the development of sophisticated tracking systems that provide accurate and timely information about the location and status of shipments.</p>
                        <h4 class="mb-3">The Role of Technology in Logistics Tracking</h4>
                        <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-1.jpg">
                        <p>Technology plays a crucial role in modern logistics tracking. GPS tracking, RFID tags, and barcode scanners are some of the technologies used in tracking shipments. These technologies provide real-time updates about the location of the shipment, helping businesses manage their supply chain more effectively.</p>
                        <h5 class="mb-3">The Future of Logistics Tracking</h5>
                        <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-2.jpg">
                        <p>The future of logistics tracking looks promising with the advent of technologies like IoT and AI. These technologies can provide more accurate and timely information about shipments, helping businesses improve their operations. Moreover, they can also help in predicting potential issues in the supply chain, allowing businesses to take proactive measures.</p>
                    </div>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="bg-secondary" style="padding: 30px; margin-bottom: 30px;">
                    <h3 class="mb-4">3 Comments</h3>
                    <div class="media mb-4">
                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Great article! It's fascinating to see how technology has transformed logistics tracking. Looking forward to more insights on this topic.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">Jane Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Thanks for sharing this information. It's interesting to learn about the role of AI and IoT in logistics tracking.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Indeed, Jane. The future of logistics tracking is exciting with these technologies. Can't wait to see what's next.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-secondary mb-3" style="padding: 30px;">
                    <h3 class="mb-4">Leave a comment</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control border-0" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control border-0" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control border-0" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave a comment"
                                class="btn btn-primary font-weight-semi-bold py-2 px-3">
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Search">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary border-primary text-white"><i
                                        class="fa fa-search"></i></span>
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
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Warehouse Management</a>
                                <span class="badge badge-secondary badge-pill">56</span>
                            </li>
                            <li class="py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Inventory Control</a>
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
                            The Future of Logistics Management
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            How to Optimize Your Supply Chain
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            The Role of Transportation in Logistics
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Effective Warehouse Management Strategies
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            The Importance of Inventory Control in Logistics
                        </a>
                    </div>
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
                        <a href="" class="btn btn-secondary m-1">Warehouse</a>
                        <a href="" class="btn btn-secondary m-1">Inventory</a>
                        <a href="" class="btn btn-secondary m-1">Management</a>
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
                        <p>We are dedicated to providing the best logistics solutions. Our expertise in logistics management, supply chain, transportation, warehouse management, and inventory control ensures your business runs smoothly and efficiently.</p>
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
