@extends('layouts.app')

@section('content')
     <div class="container-fluid banner">
          <div class="row align-items-center justify-content-center" style="height: 575px; width: 100%;">
               <div class="banner-label">
                    <p>The first few steps in going digital are shaky,<br>that's why we're here.</p>
                    <h2 style>Find out how
                              <span style="font-size: 0.8em; color: #fde3c7;">
                                   <i class="far fa-play-circle"></i>
                              </span>
                    </h2>
               </div>
          </div>
     </div>
     <div class="container my-5 ">
          <div class="row my-3">
               <p class="Whats-Possible">What's Possible?</p>
          </div>
          <div class="row mt-5">
               <div class="col-7">
                    <div class="row">
                         <p class="Grow-with-tailored-t">Grow with tailored to fit solutions</p>
                    </div>
                    <div class="row">
                         <p class="Whether-you-have-an">Whether you have an idea or not, we’re here to walk you through. Our engineers and consultants take you through the process, helping you understand why we do what we do for you. Digital doesn’t have to be rocket science, we’re here to demystify it!</p>
                         <br>
                         <p class="Learn-More">Learn More<p>
                    </div>
               </div>
               <div class="col-2 ">
                         <img class="growth-icon-2 float-right" src="./jpg/growth-icon.png" alt="growth-icon"/>
               </div>
               {{-- <div class="col">
                    
               </div> --}}
          </div>
          {{-- //2 --}}
          <div class="row mt-5">
               <div class="col">
                    <img src="jpg/high-five-icon.png" alt="High-five-icon" class="high-five-icon-2">
               </div>
               <div class="col-2">
                    
               </div>
               <div class="col-7">
                    <div class="row my-2">
                         <p class="Grow-with-tailored-t">Become your customers’ best friend!</p>
                    </div>
                    <div class="row">
                         <p class="Whether-you-have-an">We want you to take advantage of all the time people spend online and connect with them. Your customers value you more when they know the experience in person and online tally. We are here to ensure that happens for all the people you treasure!</p>
                         <br>
                         <p class="Learn-More">Learn More<p>
                    </div>
               </div>
          </div>
     </div>
     <div class="container-fluid banner2">
          <div class="row align-items-center justify-content-center" style="height: 431px; width: 100%;">
               <div class="banner2-label">
                    <p class="Know-the-right-thing my-5">Know the right thing. Do the right thing!</p>
                    <p class="Sometimes-you-want-t mx-5 px-5">Sometimes you want to do the right thing, but don’t know how to. Or maybe you’ve started something, but </p><p class="Sometimes-you-want-t mx-5 px-5">don’t know if you’re on the right path. Let’s help you analyse  your efforts so far and give you some </p><p class="Sometimes-you-want-t mx-5 px-5">pointers to do best! 
                    </p>
               </div>
               <div class="rectangle">
                    <p class="Get-Quote mt-4">START HERE</p>
               </div>
          </div>
     </div>
     <div class="container my-5 ">
          <div class="row my-3">
               <p class="Whats-Possible">There’s More…</p>
          </div>
               <div class="row mt-5">
                    <div class="col">
                         <div class="row">
                              <p class="Grow-with-tailored-t">Get to Understand Digital.</p>
                         </div>
                         <div class="row">
                              <p class="Whether-you-have-an">The best gift you have to make a decision is information. We share with you some of what has worked for us and our clients. More importantly, we let you really understand the many terms you hear about digital everyday.</p>
                              <br>
                              <p class="Learn-More">Visit Blog<p>
                         </div>
                    </div>
               </div>
               <div class="row mt-5">
                    <div class="col">
                         <div class="row">
                              <p class="Grow-with-tailored-t">Drop a message yeah?</p>
                         </div>
                         <div class="row">
                              <p class="Whether-you-have-an">You can talk to us about you and your business, let’s grow together.</p>
                              <br>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <form>
                    <div class="form-group row my-5">
                         <div class="col-12">
                              <input type="text" class="form-control" name="chat" id="chat" placeholder="I'd like to chat about">
                         </div>
                    </div>
                    <div class="form-group row mb-5">
                         <div class="col-6">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                         </div>
                         <div class="col-6">
                              <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                         </div>
                    </div>
                    <div class="form-group row mb-5">
                              <div class="col-12">
                                   <textarea style="height:206px; width: 100%;" class="text-control" name="message" id="message" placeholder="Message"></textarea>
                              </div>
                         </div>  
                    <div class="form-group row mb-5">
                         <div class="col-12">
                              <button type="submit" class="sub">SEND</button>
                         </div>
                    </div>
               </form>
          </div>
@endsection
