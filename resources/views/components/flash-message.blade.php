@if(session()->has('message'))
<div><p> {{ session('message') }}</p></div>
@endif