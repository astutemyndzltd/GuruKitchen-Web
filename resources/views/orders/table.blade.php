@push('css_lib')
@include('layouts.datatables_css')
@endpush

{!! $dataTable->table(['width' => '100%']) !!}

@push('scripts_lib')
@include('layouts.datatables_js')
{!! $dataTable->scripts() !!}

<script>
 $(window).on('load', () => {

    const $table = $('#dataTableBuilder').DataTable();
    let showLiveOrders = true;

    let $divForCheckbox = $('<div class="col-lg-4 col-xs-12 live-order"></div>');
    $divForCheckbox.insertBefore('#dataTableBuilder_wrapper div.ml-auto');

    let html = `<label class="lbl-live-order"><input type="checkbox">Show Live Orders</label>`;
    const $checkbox = $(html).appendTo($divForCheckbox);
    $checkbox.iCheck({ checkboxClass: 'icheckbox_flat-blue' });

    $checkbox.on('ifChecked', () => { showLiveOrders = true; $table.ajax.reload(); });
    $checkbox.on('ifUnchecked', () => { showLiveOrders = false; $tabe.ajax.reload(); });

    $table.DataTable({ajax: { data: (d) => d.showLive = showLiveOrders }});

    window.dt = $table;


 });
</script>
@endpush