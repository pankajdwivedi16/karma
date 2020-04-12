@extends('frontend.layout.master')
<!-- Dynamic Tiltile  --> 
@section('title', 'Legal Advice from Top Lawyers India ')
@section('description', 'Legal Advice from top Lawyers India for criminal cases, property, marriage, divorce, 498A & civil matters etc. from kanoonvala.com. Get legal advice now.')
@section('keywords', 'Legal Advice from Top Lawyers India, Mutual Consent Divorce Lawyer in India, Lawyer for Court Marriage in India')
<!-- Page Content -->
@section('content')
    
    <!-- Slider  DOM -->
	@include('frontend.home.section.slider')
	<!-- Attorneys  DOM -->
	@include('frontend.home.section.attorneys')
	<!-- Service Area DOM -->
	@include('frontend.home.section.service-area')
	<!-- Legal News Area DOM -->
	@include('frontend.home.section.legal-news')
	<!-- Legal Service Area DOM -->
	@include('frontend.home.section.legal-services')
	<!-- Legal Service Area DOM -->
	@include('frontend.home.section.about-us')

@stop


