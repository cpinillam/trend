<h2>{{$profileDetails->username}}</h2>

@if(isset($profileDetails->first_name))
<p>Firstname: {{$profileDetails->first_name}}</p>
@endif


@if(isset($profileDetails->bio))
<p>{{$profileDetails->bio}}</p>
@endif

@if(isset($profileDetails->address))
<p>{{$profileDetails->address}}</p>
@endif

@if(isset($profileDetails->post_code))
<p>Postal code: {{$profileDetails->post_code}}</p>
@endif

@if(isset($profileDetails->facebook) || isset($profileDetails->instagram) || isset($profileDetails->youtube) || isset($profileDetails->twitch))
<h2>Follow me at:</h2>
@endif

@if(isset($profileDetails->facebook))
<a class="socialNetwork" href="{{$profileDetails->facebook}}"><i class="fab fa-facebook-square"></i></a>
@endif

@if(isset($profileDetails->instagram))
<a class="socialNetwork" href="{{$profileDetails->instagram}}"><i class="fab fa-instagram"></i></a>
@endif

@if(isset($profileDetails->youtube))
<a class="socialNetwork" href="{{$profileDetails->youtube}}"><i class="fab fa-youtube"></i></a>
@endif

@if(isset($profileDetails->twitch))
<a class="socialNetwork" href="{{$profileDetails->twitch}}"><i class="fab fa-twitch"></i></a>
@endif