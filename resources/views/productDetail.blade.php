<h1>:::: {{$productDetails->name}} ::::</h1>
<br>
<h2>Description</h2>
<br>
{{$productDetails->description}}
<br>
<h3>Last update</h3>
<br>
{{$productDetails->created_at}}

<form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
    @csrf
    <input type="submit" class="btn btn-outline-primary btn-sm " value="Edit">
</form>

