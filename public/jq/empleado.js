$(function () {
    $('.js-example-basic-single').select2();

    $('.js-example-basic-single').select2({
        dropdownParent: $("#exampleModalCenter"),
        placeholder: 'Contrato',
        allowClear: true,}
    ).val('').trigger('change');

    $('#empleados').DataTable();
});
