@push('css_lib')
@include('layouts.datatables_css')
@endpush

{!! $dataTable->table(['width' => '100%']) !!}

@push('scripts_lib')
@include('layouts.datatables_js')
{!! $dataTable->scripts() !!}

<script>
 $(window).on('load', () => {

    console.log('my name is anik banerjee');

    const table = $('#dataTableBuilder').DataTable();

    let $divForCheckbox = $('<div class="col-lg-4 col-xs-12"></div>');
    $divForCheckbox.insertBefore('#dataTableBuilder_wrapper div.ml-auto');


    let html = `<label>
                    <input type="checkbox" name="quux[1]" disabled>
                    Show Live Orders
                </label>`;


    const $checkbox = $(html);
    $checkbox.appendTo($divForCheckbox);
    $checkbox.iCheck();

 });
</script>
@endpush