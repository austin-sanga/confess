
<form action="sema" method="POST">
    @csrf
    <input type="text" name="party" value="1" hidden>
    <input type="text" name="message">
    <button type="submit">try</button>

</form>


<table border="1">

    {{-- tr for the headings of the confessions --}}
    <tr>
        <td>message</td>
        <td>created at +3hrs</td>
    </tr>

    {{-- Here is a loop to which will show the data --}}
    {{-- the as lets you choose what you want to use down below --}}
   @foreach ($sematext as $item)
    <tr>
        {{-- so the data within comes as a result of following the controller instructions --}}
         {{-- <td>{{ $item['party'] }}</td> --}}
        <td>{{ $item['message'] }}</td>
        <td>{{ $item['created_at'] }}</td>
    </tr>
    @endforeach
</table>
