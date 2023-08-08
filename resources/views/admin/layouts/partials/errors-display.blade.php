<!-- Span to show the message to user-->
@if(Session::has('error'))
    <div class="alert alert-danger" style="text-align: center;">
        {!! Session::get('error') !!}
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        {!! Session::get('success') !!}
    </div>
@endif

@if ( Session::has('errors') && $errors->any())
    <div class="alert alert-danger">
        <strong>There are errors:</strong>
        <ul id="form-errors">
            @foreach ($errors->all() as $message)
                <li>{!! $message !!}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- /Span to show the message to user -->
