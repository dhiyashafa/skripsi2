@extends('layouts.user')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('alternatif.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.alternatif.title_singular') }}
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.alternatif.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.alternatif.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.alternatif.fields.nama') }}
                        </th>
                        <th>
                            {{ trans('cruds.alternatif.fields.alamat') }}
                        </th>
                        <th>
                            {{ trans('cruds.alternatif.fields.nomer') }}
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
                    @foreach($alternatif as $key => $alternatifs)
                    <tr data-entry-id="{{ $alternatifs->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $alternatifs->id ?? '' }}
                        </td>
                        <td>
                            {{ $alternatifs->nama ?? '' }}
                        </td>
                        <td>
                            {{ $alternatifs->alamat ?? '' }}
                        </td>
                        <td>
                            {{ $alternatifs->nomer ?? '' }}
                        </td>
                        <td>
                            <button type="button" class="btn btn-xs btn-info" href="{{ route('alternatif.edit',$alternatifs->id) }}">
                                {{ trans('global.edit') }}</button>
                            <button type="button" class="btn btn-xs btn-danger" href="{{ route('alternatif.destroy',$alternatifs->id) }}">
                                {{ trans('global.delete') }}</button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
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