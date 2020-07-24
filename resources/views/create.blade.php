@extends('layouts.layout');

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Create Event
        </div>
        <p>{{ $event }}</p>
        @php
            echo("Hello world");
        @endphp    


        @if ($type == 0)
            <p>This is the create event page</p>
        @elseif ($type == 1)
            <p>This is the view event page</p>
        @else
            <p>Page unavailable</p>
        @endif

        @unless ($event == 'create')
            <p>Do you want to visist the create page?</p>
        @endunless
        <p>
        @for($i = 0; $i < 3; $i++)
            {{ $i }}
        @endfor
        </p>
        <div class="links">

        </div>
    </div>
</div>
@endsection
