@extends('frontend.layout.master') 
<!-- Dynamic Tiltile  --> 
@section('title', 'Draft Rent Agreement Online | Rental agreement')
@section('description', 'Kanoonvala offers Draft Rent Agreement Online, house rent agreement, residential rental agreement, rent agreement renewal & lease agreement services in UP India. ')
@section('keywords', 'Draft Rent Agreement Online, Rent agreement online India, house rent agreement, residential rent agreement, rent agreement renewal, lease agreement, rent agreement online up')
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
                        <h1 class="text-white text-l heading_one">Draft Your Rent Agreement Online For <br>
                          <span>Just INR 6999/-</span></h1>
                        <p class="text-whit"><a class="btn btn-transparent" href="residential-rental-agreement.html"> Know More </a></p>
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
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Join Now to Draft Your Rent Agreement Online</h1>
            <p>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</p>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li class="active">Draft Your Rent Agreement Online</li>
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
            <h2 class="text-center">Draft Your Rent Agreement Online</h2>
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
          <h2>Rental Agreement</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;">A rental agreement is a legal document which lays out the terms and conditions under which the rented property is rented by the property owner to the tenant. The rent agreement lays down the manner in which the relationship between the landlord (owner) and the tenant would be regulated.</p>
            <p style="color:black;">The agreement is a crucial piece of document as it enumerates the period for which the property is given on rent, the rent amount to be paid, security amount to be submitted, the conditions in which the agreement can be terminated and tenant can be evicted, dispute resolution and the law applicable.</p>
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
            <p>- Telephonic conversation with the lawyer for 20 minutes.</p>
            <p>- Drafting of rent agreement.</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Additional legal drafting apart from rent agreement.</p>
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
            <h4 style="color:black;">Documents required to draft a Rent Agreement</h4>
            <ul>
              <li>1. ID proof of landlord and tenant like Voter ID card, Aadhar Card, driving license, passport, etc.</li>
              <li>2. Residential proof such as electricity bill, telephone bill or mobile phone bill registered to the address.</li>
              <li>3. Details pertaining to the clauses of rental agreement.</li>
            </ul>
            <h4 style="color:black;">Procedure to draft a Rent Agreement</h4>
            <p> After the relevant documents are submitted, the lawyer prepares a draft rental agreement and sends it for approval. The agreement is finalised after any changes, if required and notarised by the lawyer. The document is ready to be signed by the landlord and tenant after notarisation. </p>
          </div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b> Important Clauses Of Rent Agreement</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>How To Deal With Illegal Possession</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>How To Send A Legal Notice</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>How To Send A Reply To Legal Notice</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Eviction Proceedings By Landlord</b></h4>
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