
@if(\Illuminate\Support\Facades\Session::has('info'))
    <div class="alert alert-info w3-margin-top">
        <i class="fa fa-check-info"></i> {{ \Illuminate\Support\Facades\Session::get('info') }}

    </div>
@endif

@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success w3-margin-top" role="alert">
        <i class="fa fa-check-circle"></i> {{ \Illuminate\Support\Facades\Session::get('success') }}

    </div>
@endif

@if(\Illuminate\Support\Facades\Session::has('danger'))
    <div class="alert alert-danger w3-margin-top" role="alert">
        <i class="fa fa-exclamation-triangle"></i> {{ \Illuminate\Support\Facades\Session::get('danger') }}

    </div>
@endif