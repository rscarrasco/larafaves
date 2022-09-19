@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class='list-unstyled'>
  @foreach($tags as $tag)
  <li class='badge bg-secondary me-1'>{{ $tag }}</li>
  @endforeach
</ul>
