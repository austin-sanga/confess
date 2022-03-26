{{-- This is the first page a user lands into and confess their thoughts --}}

<h1>Confession page</h1>
{{-- so here is how a session is implied to send verification to user that data is uploaded --}}
@if (session('confession'))
    <h3 style="color: green">confession received</h3>
@endif

{{-- the action comes from the route of the controller for the form to pass through --}}
<form action="published" method="POST" >
    @csrf
    <input type="text" name="confession" placeholder="Confess here.....">
    <button type="submit">publish</button>
</form>