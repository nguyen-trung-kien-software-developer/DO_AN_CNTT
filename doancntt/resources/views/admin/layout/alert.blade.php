@if (Session::has('error'))
    <div class="alert alert-danger text text-blue">
        {{ Session::get('error') }}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success text text-blue">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning">
        {{ Session::get('warning') }}
        {{ Session::forget('warning') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            {{-- @php
                echo $errors->first('name');
            @endphp --}}
        </ul>
    </div>
@endif
