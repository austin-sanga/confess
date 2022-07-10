<h1>Confessions</h1>

{{-- this view is passed via the unconfessions controller --}}

{{-- logout  --}}
<a href="/logout">logout</a><br><br>

{{-- table to show the confessions --}}
<table border="1">

    {{-- tr for the headings of the confessions --}}
    <tr>
        <td>id</td>
        <td>Confession</td>
    </tr>

    {{-- Here is a loop to which will show the data --}}
    {{-- the as lets you choose what you want to use down below --}}
    @foreach ($confession as $item)
    <tr>
        {{-- so the data within comes as a result of following the controller instructions --}}
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['confession'] }}</td>
        <td>{{ $item['created_at'] }}</td>
    </tr>
    @endforeach
</table>
