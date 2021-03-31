@extends('backend.index')

@section('content_backend')
<button uk-toggle="target: #my-id" type="button">Open canvas</button>

<!-- This is an anchor toggling the off-canvas -->
<a href="#my-id" uk-toggle></a>

<!-- This is the off-canvas -->
<div id="my-id" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

    </div>
</div>
@endsection