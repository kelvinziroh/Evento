@if ($crud->hasAccess('update'))
<a href="{{ url($crud->route.'/'.$entry->getKey().'/disable') }}" class="btn btn-sm btn-danger"><i class="la la-ban">Disable</i></a>
{{-- class="btn btn-sm btn-link"><i class="la la-edit --}}
@endif