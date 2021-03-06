@extends('frontend.layout.master') 
<!-- Dynamic Tiltile  --> 
@section('title', 'IPR Services') 
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
                        <h1 class="text-white text-l heading_one">Trademark Renewal</h1>
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
    <ul>
      <li><a href="javascript://" id="a1" onclick="fp_show('tab_1','a1')" class="active">Overview</a></li>
      <li><a href="javascript://" id="a2" onclick="fp_show('tab_2','a2')">Documents Needed</a></li>
      <li><a href="javascript://" id="a3" onclick="fp_show('tab_3','a3')">How the Processing is done</a></li>
      <li><a href="javascript://" id="a4" onclick="fp_show('tab_4','a4')">FAQs</a></li>
    </ul>
    Renewal of any services refers to extend the term period within the specific term period. Trademark should also be renewed from time to time. Trademark can be renewed after every 10 years of renewal. If the renewal fees of the Trademark are paid on time, the trademark can be renewed for unlimited time in India. It can be filed within the six months of before the date of renewal. Failure to renew the Trademark on time removes the Trademark from the directory.<br>
    <br>
    For the smooth running of the organisation, the renewal is very important as managing of the portfolio is very important. The Authorities of the Trademark registration sends a notice prior to the last date of the renewal. It is to remind the Trademark owner about the expiration and the conditions as to relate to the Trademark Registration of the organisation. If in case there is late submission of the renewal fees, it would be registered after the payment of the late fee.<br>
    <br>
    <strong>Procedure for the renewal of the Form</strong><br>
    <br>
    <ul>
      <li>One can apply renewal to change in any sign or words in the existing trade mark; or</li>
      <li>One can apply renewal without any change.</li>
    </ul>
    <strong>Process and Renewal Forms:</strong><br>
    <br>
    <ul>
      <li>Application of renewal shall be made in form TM-12</li>
      <li>Application shall be made by either registered owner of the trade mark or his authorised agent.</li>
    </ul>
    <br>
    <h2>Documents Needed</h2>
    <ul>
      <li>Authorization Documents</li>
    </ul>
    <br>
    <h2>How the Processing is done?</h2>
    First Step: Collecting Information 1 Day<br>
    <br>
    Second Step: Drafting Application for Trademark 2 Days<br>
    <br>
    Third Step: Changes and Confirmation 2 Days<br>
    <br>
    Fourth Strep: Filing of Application 3 Days<br>
    <br>
    <br>
    <h2>FAQs</h2>
    QusWhat is the procedure to renew the Trademark?<br>
    <br>
    AnsIt needs to file a form TM-12 for the renewal of Trademark within six months before or after the expiry of Trademark with the prescribed fee.<br>
    <br>
    QusWhen should be the trademark be renewed?<br>
    <br>
    AnsThe trademark has to renew after every ten years.<br>
    <br>
    QusCan the renewal be done after the expiration of the date?<br>
    <br>
    AnsYes, it can be renewed after the last date by paying a late fee to the Authorised department.<br>
    <br>
  </div>
</div>
@stop 