@extends('frontend.layout.master') 
@section('title', 'Website Documents And Policies')
@section('description', 'Join Now to Draft Website Documents and Policies; choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!')
@section('keywords', 'Website Documents and Policies, Draft Website Documents and Policies')
<!-- Page Content --> 
@section('content')
<div class="section-empty no-paddings">
  <div class="section-slider row-8 white">
    <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
      <ul class="slides">
        <li data-slider-anima="fade-left" data-time="1000">
          <div class="section-slide">
            <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide1.jpg') !!})"></div>
            <div class="container">
              <div class="container-middle">
                <div class="container-inner text-center">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                      <div class="col-md-12 anima">
                        <h1 class="text-white text-l heading_one">Draft Website Documents And Policies For <br>
                          <span>Just INR 24999/-</span></h1>
                        <p class="text-whit"><a class="btn btn-transparent" href="website-policy-and-terms.html"> Know More </a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="section-empty">
<div class="container content">
  <div class="main-content-area">
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Join Now to Draft Website Documents And Policies</h1>
            <p>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</p>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li class="active">Draft Website Documents And Policies</li>
              </ol>
            </div>
            <!-- end bread --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    
    <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h2 class="text-center">Draft Website Documents And Policies</h2>
            <p class="text-center">Submit your details to begin now</p>
            <div class="box-panel"> 
              <!-- form login -->
              <form name="LoginForm" action="#" onsubmit="return login()" method="post">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name"placeholder="Your Name" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" name="mobile" placeholder="Your Mobile" class="form-control">
                </div>
                <button name="submit" class="btn btn-primary btn-lg btn-block">Connect Now</button>
                <br>
                <p>No Spam. No Sharing. 100% Confidentiality</p>
              </form>
              <!-- form login --> 
              
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container --> 
    </section>
    <section class="custom-padding" id="how-it-work">
      <div class="container">
        <div class="main-heading text-center" style="color:black;">
          <h2>Website Documents And Policies</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;">Every business that has an online presence in form of a website needs to have certain legal documents in place for its users and visitors. These website documents lay down down the terms of using the website, details about the information of users collected by the website,any disclaimers and other policies and procedures of the website.</p>
            <p style="color:black;">Website policies and terms include the Privacy policy, Terms of Use, Disclaimer and Refund and Return Policy. Businesses with a website or app require these website documents to reduce their liability in case of any dispute that might arise about the use of the website, user data collected and used, and the content posted by a third party.</p>
          </div>
        </div>
        <div class="row">
          <div class="main-heading text-center" >
            <h2>What You will Get In The Package</h2>
          </div>
          <hr style="color:#612f31;">
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Included</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Telephonic consultation with the lawyer for 30 minutes.</p>
            <p>- Drafting of Privacy Policy.</p>
            <p>- Drafting of Terms of Use.</p>
            <p>- Drafting of Disclaimer.</p>
            <p>- Drafting of Refund and Return Policy, if applicable.</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Additional documentation work for the startup.</p>
            <p>- Other legal assistance or litigation work.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <section class="custom-padding" id="how-it-work">
      <div class="container">
        <div class="main-heading text-center" >
          <h2>Indias First Online Case Tracking And Management</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p> Nations first ever tech enabled online case management and tracking tool for your ongoing matters at one single place!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 left-responsive">
            <h4>End-To-End Case Management</h4>
            <p>Manage your ongoing matters with our state-of-the-art tool for invoice, calendar and task management.</p>
            <h4>Cloud-Based File Management</h4>
            <p>Easily track your files on the go with our double encrypted cloud-based records management system.</p>
            <h4>24*7 Communication Tracking With Dedicated SPOC</h4>
            <p>Connect with your Single Point of Contact any time and track all communications hassle-free.</p>
          </div>
          <div class="col-md-6 left-responsive"> <img src="images//track.png" alt="track"> </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Documents required to draft Website Policies and Terms</h4>
            <ul>
              <li>1. Details about the website.</li>
              <li>2. Details relevant for drafting of website policies.Information about Goods & Services to be provided</li>
            </ul>
            <br>
            <h4 style="color:black;">Procedure to draft Website Policies and Terms</h4>
            <p> Once the requisite documents and information are submitted, the lawyer proceeds to draft the website policies. The draft of website documents is shared for approval. After the documents are approved, the policies can be posted on the website. </p>
          </div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b>Cybersecurity For Startups</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>10 Agreements For Startups</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>GDPR: Effect On Indian Startups</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Cybersecurity In Banking Sector</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Cyber Crimes In Corporate Sector</b></h4>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
  </div>
</div>
@stop 