@if(Session::has('flash_error'))
    <div class="alert alert-danger alert-block alert-dismissible fade show text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong style="font-size: 18px">{!! session('flash_error') !!}</strong>
    </div>
@endif
@if(Session::has('flash'))
    <div class="alert alert-success alert-block alert-dismissible fade show text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong style="font-size: 18px">{!! session('flash') !!}</strong>
    </div>
@endif