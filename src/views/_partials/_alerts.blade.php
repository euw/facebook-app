@foreach(['success', 'info', 'warning', 'danger'] as $alertType)
@if(Session::has($alertType))
<div class="alert alert-{{ $alertType }} text-left">

    <p>{{ Session::get($alertType) }}</p>

    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('
        <li class="error">:message</li>
        ')) }}
    </ul>
    @endif
</div>
@endif
@endforeach
