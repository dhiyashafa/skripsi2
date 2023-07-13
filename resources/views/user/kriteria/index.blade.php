@extends('layouts.user')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('kriteria.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.kriteria.title_singular') }}
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.kriteria.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.kriteria.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.kriteria.fields.nama') }}
                        </th>
                        <th>
                            {{ trans('cruds.kriteria.fields.weight') }}
                        </th>
                        <th>
                            {{ trans('cruds.kriteria.fields.eigen') }}
                        </th>
                        <th>
                            Aksi
                        </th>
                        <!-- <th>

                        </th>
                        <th>
                            &nbsp;
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($kriteria as $key => $kriterias)
                    <tr data-entry-id="{{ $kriterias->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $kriterias->id ?? '' }}
                        </td>
                        <td>
                            {{ $kriterias->nama ?? '' }}
                        </td>
                        <td>
                            {{ $kriterias->weight ?? '' }}
                        </td>
                        <td>
                            {{ $kriterias->eigen ?? '' }}
                        </td>
                        <td>
                            <a class="btn btn-xs btn-info" href="{{ route('kriteria.edit',$kriterias->id) }}">
                                {{ trans('global.edit') }}</a>

                            <form action="{{ route('kriteria.destroy', $kriterias->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-center">
                            Total
                        </td>
                        <td class="text-center">
                            {{ $kriteria->sum('weight') }}
                        </td>
                        <td class="text-center">
                            {{ $kriteria->sum('eigen') }}
                        </td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>



@endsection
<!-- @section('scripts')
@parent
<script>
    $(function() {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('user_delete')
        let deleteButtonTrans = '{{ trans('
        global.datatables.delete ') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.users.massDestroy') }}",
            className: 'btn-danger',
            action: function(e, dt, node, config) {
                var ids = $.map(dt.rows({
                    selected: true
                }).nodes(), function(entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('
                        global.datatables.zero_selected ') }}')

                    return
                }

                if (confirm('{{ trans('
                        global.areYouSure ') }}')) {
                    $.ajax({
                            headers: {
                                'x-csrf-token': _token
                            },
                            method: 'POST',
                            url: config.url,
                            data: {
                                ids: ids,
                                _method: 'DELETE'
                            }
                        })
                        .done(function() {
                            location.reload()
                        })
                }
            }
        }
        dtButtons.push(deleteButton)
        @endcan

        $.extend(true, $.fn.dataTable.defaults, {
            orderCellsTop: true,
            order: [
                [1, 'desc']
            ],
            pageLength: 100,
        });
        let table = $('.datatable-User:not(.ajaxTable)').DataTable({
            buttons: dtButtons
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });

    })
</script>
@endsection -->