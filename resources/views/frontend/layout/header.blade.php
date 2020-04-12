<!-- header -->
<header class="fixed-top scroll-change" data-menu-anima="fade-in">
  <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
    <div class="navbar-mini scroll-hide">
      <div class="container">
        <div class="nav navbar-nav navbar-left"> <span>&nbsp;<i class="fa fa-phone"></i> +91-9354438542</span>
          <hr />
          <span><a href="mailto:info@kanoonvala.com"><i class="fa fa-envelope"></i> contact@kanoonvala.com</a></span>
          <hr />
          @if (Auth::check())
            <span><a href="{!! url('logout') !!}"><i class="fa fa-sign-out"></i> Logout</a></span>

          @else

            @if( ! request()->is('advocate-signup') )
              <span><a href="{!! url('signin') !!}"><i class="fa fa-sign-in"></i> Sign In</a></span>
              <hr />
              <span><a href="{!! url('signup') !!}"><i class="fa fa-user"></i> Sign Up</a></span> </div>
            @endif
          @endif
          
        <div class="nav navbar-nav pull-right">
          <div class="minisocial-group"> <a target="_blank" href="https://www.facebook.com/Kanoonvala"><i class="fa fa-facebook first"></i></a> <a target="_blank" href="https://twitter.com/kanoonvala"><i class="fa fa-twitter"></i></a> <a target="_blank" href="http://www.inkedin.com"><i class="fa fa-linkedin"></i></a></div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-main">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
          <a class="navbar-brand" href="{{ url('/') }}"> <img class="logo-default" src="{{ asset('assets/images/logo.png') }}" alt="Kanoon Vala" title="Kanoon Vala" /></a> </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('/') ? 'active' : '' }}"> <a href="{!! url('/') !!}">Home</a></li>
            <li class="dropdown mega-dropdown {{ Request::segment(1) == 'legal-advice' ? 'active' : '' }}"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Legal Advice <span class="caret"></span></a>
              <div class="mega-menu dropdown-menu multi-level row bg-menu">
                <div class="col">
                  <h4 class="text-danger"><strong>Personal</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li class="{{ Request::segment(2) == 'divorce' ? 'active' : '' }}">
                      <a href="{{ url('legal-advice/divorce') }}">Divorce</a>
                    </li>
                    <li class="{{ Request::segment(2) == 'marriage-registration' ? 'active' : '' }}">
                      <a href="{{ url('legal-advice/marriage-registration') }}">Marriage Registration</a>
                    </li>
                    <li class="{{ Request::segment(2) == 'family-law' ? 'active' : '' }}">
                      <a href="{{ url('legal-advice/family-law') }}">Family Law</a>
                    </li>
                    <li class="{{ Request::segment(2) == 'immigration' ? 'active' : '' }}">
                      <a href="{{ url('legal-advice/immigration') }}">Immigration</a>
                    </li>
                    <li class="{{ Request::segment(2) == 'insurance' ? 'active' : '' }}">
                      <a href="{{ url('legal-advice/insurance') }}">Insurance</a>
                    </li>
                  </ul>
                </div>
                <div class="col">
                  <h4 class="text-danger"><strong>Corporate</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li class="{{ Request::segment(2) == 'startup' ? 'active' : '' }}">
                      <a href="{{ url('legal-advice/startup') }}">Startup</a>
                    </li>
                    <li><a href="corporate-law.html">Corporate Law</a></li>
                    <li><a href="arbitration.html">Arbitration</a></li>
                    <li><a href="employement.html">Employment</a></li>
                    <li><a href="contract-law.html">Contract Law</a></li>
                  </ul>
                </div>
                <div class="col">
                  <h4 class="text-danger"><strong>Property</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li><a href="rera.html">RERA</a></li>
                    <li><a href="property-real-estate-law.html">Property/Real Estate Law</a></li>
                    <li><a href="ipr.html">IPR</a></li>
                    <li><a href="drafting.html">Drafting</a></li>
                    <li><a href="taxation-duty.html">Taxation and Duty</a></li>
                  </ul>
                </div>
                <div class="col">
                  <h4 class="text-danger"><strong>Debt Recovery</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li><a href="cheque-bounce.html">Cheque Bounce</a></li>
                    <li><a href="default-fraud.html">Default or Fraud</a></li>
                    <li><a href="criminal-law.html">Criminal Law</a></li>
                    <li><a href="cyber-crime.html">Cyber Crime</a></li>
                    <li><a href="consumer-protection.html">Consumer Protection</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="dropdown mega-dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Legal Service <span class="caret"></span></a>
              <div class="mega-menu dropdown-menu multi-level row bg-menu">
                <div class="col">
                  <h4 class="text-danger"><strong>Family</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li><a href="{{ url('legal-services/mutual-consent-divorce') }}">Mutual Consent Divorce</a></li>
                    <li><a href="{{ url('legal-services/succession-certificate') }}">Succession Certificate</a></li>
                    <li><a href="{{ url('legal-services/draft-registration-will') }}">Draft &amp; Register Will</a></li>
                    <li><a href="{{ url('legal-services/court-marriage') }}">Court Marriage</a></li>
                    <li><a href="marriage-registration.html">Marriage Registration</a></li>
                  </ul>
                </div>
                <div class="col">
                  <h4 class="text-danger"><strong>Property</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li><a href="{{ url('legal-services/property-registration') }}">Property Registration</a></li>
                    <li><a href="{{ url('legal-services/legal-notice-to-builder') }}">Legal Notice To Builder</a></li>
                    <li><a href="{{ url('legal-services/draft-registration-gift-deed') }}">Draft &amp; Register Gift Deed</a></li>
                    <li><a href="{{ url('legal-services/residential-rental-aggreement') }}">Residential Rental Agreement</a></li>
                    <li><a href="{{ url('legal-services/complaint-under-rera') }}">Complaint under RERA</a></li>
                  </ul>
                </div>
                <div class="col">
                  <h4 class="text-danger"><strong>Startup</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li><a href="{{ url('legal-services/company-hr-documentation') }}">Company HR Documentation</a></li>
                    <li><a href="{{ url('legal-services/website-policy-and-terms') }}">Website Policy &amp; Terms</a></li>
                    <li><a href="{{ url('legal-services/non-disclosure-agreement') }}">Non Disclosure Agreement</a></li>
                    <li><a href="{{ url('legal-services/founders-agreement-drafting') }}">Founders Agreement Drafting</a></li>
                    <li><a href="{{ url('legal-services/vendor-agreement-drafting') }}">Vendor Agreement Drafting</a></li>
                  </ul>
                </div>
                <div class="col">
                  <h4 class="text-danger"><strong>Legal Notice</strong></h4>
                  <ul class="fa-ul no-icons text-s">
                    <li><a href="{{ url('legal-services/tenant-eviction') }}">Tenant Eviction </a></li>
                    <li><a href="{{ url('legal-services/cheque-bounce-notice') }}">Cheque Bounce Notice</a></li>
                    <li><a href="{{ url('legal-services/consumer-complaint-notice') }}">Consumer Complaint Notice</a></li>
                    <li><a href="{{ url('legal-services/debt-recovery-notice') }}">Debt Recovery Notice</a></li>
                    <li><a href="{{ url('legal-services/refund-of-security-notice') }}">Refund of Security Notice</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li><a href="{{ url('legal/ask-for-query') }}">Ask For Query</a></li>
            <li><a href="{{ url('legal/for-corporates') }}">For Corporates</a></li>
            <li><a href="{{ url('contactus') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header end -->
