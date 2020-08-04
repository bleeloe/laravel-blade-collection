@foreach([
'alert-primary',
'alert-secondary',
'alert-success',
'alert-danger',
'alert-warning',
'alert-info',
'alert-light',
'alert-dark',
] as $alert)
@if (session($alert))
<div class="animate__animated animate__bounceIn alert {{$alert}}" role="alert">
    {{ session($alert) }}
</div>
@endif
@endforeach