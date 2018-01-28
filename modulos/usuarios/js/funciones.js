

$('#datatable-buttons').DataTable({
	dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
});

function guardar_datos(){
  $('#form_users').parsley().validate();
  validateFront();
}


$('#btnGuadar').on('click',guardar_datos);