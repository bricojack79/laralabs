@extends('layouts.app')

@section('content')
<body>


  <!-- Page header -->
  <div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
      <div class="page-info">
        <h2>Services</h2>
        <div class="page-links">
          <a href="#">Home</a>
          <span>Services</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Page header end-->


  <!-- services section -->
  <div class="services-section spad">
    <div class="container">
      <div class="section-title dark">
        <h2>Get in <span>the Lab</span> and see the services</h2>
      </div>
      <div class="row">
        @foreach ($services as $service)
            <!-- single service -->
        <div class="col-md-4 col-sm-6">
            <div class="service">
              <div class="icon">
                <i class="{{$service->icone}}"></i>
              </div>
              <div class="service-text">
                <h2>{{$service->titre}}</h2>
                <p>{{$service->texte}}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      {{$services->links()}}
      <div class="text-center">
        <a href="" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- services section end -->


  <!-- features section -->
  <div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2>Get in <span>the Lab</span> and discover the world</h2>
      </div>
      <div class="row">
        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
          <div class="icon-box light left">
            <div class="service-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
            <div class="icon">
              <i class="flaticon-002-caliper"></i>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light left">
            <div class="service-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
            <div class="icon">
              <i class="flaticon-019-coffee-cup"></i>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light left">
            <div class="service-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
            <div class="icon">
              <i class="flaticon-020-creativity"></i>
            </div>
          </div>
        </div>
        <!-- Devices -->
        <div class="col-md-4 col-sm-4 devices">
          <div class="text-center">
            <img src="img/device.png" alt="">
          </div>
        </div>
        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
          <div class="icon-box light">
            <div class="icon">
              <i class="flaticon-037-idea"></i>
            </div>
            <div class="service-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light">
            <div class="icon">
              <i class="flaticon-025-imagination"></i>
            </div>
            <div class="service-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light">
            <div class="icon">
              <i class="flaticon-008-team"></i>
            </div>
            <div class="service-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt100">
        <a href="" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- features section end-->


  <!-- services card section-->
  <div class="services-card-section spad">
    <div class="container">
      <div class="row">
        <!-- Single Card -->
        @foreach (App\Projects::latest()->take(3)->get() as $project)
        <div class="col-md-4 col-sm-6">
          <div class="sv-card">
            <div class="card-img">
              <img src="storage/uploads/projects/{{$project->image}}" alt="">
            </div>
            <div class="card-text">
              <h2>{{$project->name}}</h2>
              <p>{{$project->message}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- services card section end-->


  <!-- newsletter section -->
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <!-- newsletter form -->
          <form method="POST" action="/newsletter" class="nl-form">
            @csrf
            <input name="email" type="text" placeholder="Your e-mail here">
            <button class="site-btn btn-2">Newsletter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->


  <!-- Contact section -->
  <div class="contact-section spad fix">
    <div class="container">
      <div class="row">
        <!-- contact info -->
        <div class="col-md-5 col-md-offset-1 contact-info col-push">
          <div class="section-title left">
            <h2>Contact us</h2>
          </div>
          <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
          <h3 class="mt60">Main Office</h3>
          <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
          <p class="con-item">0034 37483 2445 322</p>
          <p class="con-item">hello@company.com</p>
        </div>
        <!-- contact form -->
        <div class="col-md-6 col-pull">
          <form class="form-class" id="con_form">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name">
              </div>
              <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email">
              </div>
              <div class="col-sm-12">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button class="site-btn">send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end-->


  <!-- Footer section -->
  <footer class="footer-section">
    <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
  </footer>
  <!-- Footer section end -->

</html>

@endsection