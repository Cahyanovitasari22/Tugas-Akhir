@foreach (['success', 'warning', 'danger'] as $status)
    @if (session($status))
        <div
            class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box mt-2 my-0 mb-0 text-{{ $status }}">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong> {{ session($status) }} </strong>
        </div>
    @endif
@endforeach