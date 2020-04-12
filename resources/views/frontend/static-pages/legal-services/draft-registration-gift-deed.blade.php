@extends('frontend.layout.master') 
<!-- Dynamic Tiltile  --> 
@section('title', 'Family Law') 
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
                        <h1 class="text-white text-l heading_one">Draft and Register Gift Deed Online For <br>
                          <span>Just INR 17999/-</span></h1>
                        <p class="text-whit"><a class="btn btn-transparent" href="draft-and-register-gift-deed.html"> Know More </a></p>
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
              <h1>Join Now to Draft and Register Gift Deed Online</h1>
              <p>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</p>
            </div>
            <!-- end col -->
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
              <div class="bread">
                <ol class="breadcrumb">
                  <li><a href="index.html">Home</a> </li>
                  <li class="active">Draft and Register Gift Deed Online</li>
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
              <h2 class="text-center">Draft and Register Gift Deed Online</h2>
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
            <h2>Draft And Register Gift Deed</h2>
            <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
              <p style="color:black;">A gift deed is essentially a legal instrument used for transferring immovable property without any exchange of money. The transfer should be voluntarily carried out while the donor is solvent. Also, a gift deed should not be executed for tax evasion or illegal gains. Registration of the gift deed is mandatory for the transfer to be valid. Also, registration is necessary for transfer in the title of the property which is important for the transfer of all utility connections.</p>
              <p style="color:black;">You must get your gift deed drafted and registered the most experienced property lawyers in your locality. The advocate shall help you in getting the deed registered in your locality.</p>
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
              <p>- 20 minutes introduction call with a lawyer to get acquainted and to discuss the work that is to be done together.</p>
              <p>- Documents Checklist</p>
              <p>- Verification of necessary documents</p>
              <p>- Drafting of the Gift Deed</p>
              <p>- Registrar in the Registrar/Sub-Registrar’s office</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
              <hr style="border:2px solid #612f31;">
              <p>- Any payments to be made such as gift duty or stamp duty</p>
              <p>- Resolution of any disputes over the property that is to be gifted. You may hire the lawyer for any further help with property matters.</p>
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
              <h4 style="color:black;">Documents required for drafting and registration of Gift Deed</h4>
              <ul>
                <li>1. Title deed of the property</li>
                <li>2. Share certificate</li>
                <li>3. Maintenance Bill</li>
                <li>4. Electricity Bill</li>
                <li>5. Allotment Letter</li>
                <li>6. Occupation and Commencement Certificate</li>
              </ul>
              <br>
              <h4 style="color:black;">Procedure for drafting and registration of Gift Deed</h4>
              <ul>
                <li>1. Verification of documents and drafting of gift deed accordingly.</li>
                <li>2. The gift deed document must be signed by the donor.</li>
                <li>3. Attestation of the deed by two witnesses.</li>
                <li>4. Requisite duty to be paid. (Gift duty and Stamp Duty)</li>
                <li>5. Allotment Letter</li>
                <li>6. Necessary documents to be submitted to the sub-registrar.</li>
              </ul>
            </div>
            <div class="col-md-6 left-responsive">
              <div class="card">
                <div class="card-container">
                  <h4><b>Gift Under Muslim Law</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Succession Certificate In India</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Benami Property In India</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Selling Property Through GPA</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Property Documents To Be Checked</b></h4>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
</div>
@stop 