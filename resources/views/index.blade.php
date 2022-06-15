{{-- This is the first page a user lands into and confess their thoughts --}}

<h1>Whats on your mind</h1>

{{-- so here is how a session is implied to send verification to user that data is uploaded --}}
@if (session('confession'))
    <h3 style="color: green">confession received</h3>
@endif

{{-- span to show the error message on blank publishing --}}
<span style="color: red">

    {{-- this is how you display the validation error --}}
    @error('confession')
    {{ $message = "Please do fill in your confession" }}
    @enderror

{{-- the action comes from the route of the controller for the form to pass through --}}
<form action="published" method="POST" >
    @csrf
    <input type="text" name="confession" placeholder="whats on your mind.....">
    <button type="submit">publish</button>
</form>
