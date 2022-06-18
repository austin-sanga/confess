{{-- This is the first page a user lands into and confess their thoughts --}}

{{-- extends the master layout file --}}
@extends('master')

@section('content')

{{-- this div centers the staffs --}}
<div class="container-lg my-5 border border-primary p-5 border-3" >
<h1 class=" text-center">Whats on your mind ?</h1>

{{-- so here is how a session is implied to send verification to user that data is uploaded --}}
@if (session('confession'))
    <h3 style="color: green" class=" text-center">Thoughts received</h3>
@endif

{{-- span to show the error message on blank publishing --}}
<span style="color: red" class=" text-center">

    {{-- this is how you display the validation error --}}
    @error('confession')
    {{ $message = "Please do fill in whats in your mind" }}
    @enderror
</span>

{{-- the action comes from the route of the controller for the form to pass through --}}
<form action="published" method="POST">
    @csrf
    {{-- <input type="text" name="confession" placeholder="whats on your mind.....">
    <button type="submit">publish</button> --}}

    <div class="mb-3 text-center  ms-5  "   >
        <textarea class="form-control mb-2 " id="confession" name="confession" rows="3" maxlength="280" placeholder="write your thoughts here ..... max 280 characters" ></textarea>
        <button type="submit" class="btn btn-primary mb-2 ">Publish Thoughts</button>
      </div>

</form>



<div class="mx-auto" style="width: 400px;">
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         How it works ?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>Get a short description</strong> Here we expect you to share whats on your mind, maybe it a confession or some stuff you really need to share and remain anonymous to the public
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Data Sharing..
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          We actually might post your concern on twitter (tzsocials) or instagram, and get your concern to get public opinion.<BR>
         YOU'LL ALWAYS STAY UNKNOWN TO US AND THE PUBLIC
        </div>
      </div>
    </div>
    {{-- <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div> --}}
  </div>

</div>
<div class="text-center pt-3">
<a href="https://twitter.com/tzsocials" class="btn btn-success" >Back to TZ_socials</a>
</div>
</div>

@stop



