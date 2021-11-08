$('#inovaDatatables').DataTable({
  "pageLength": qtdLinhas,
  "bLengthChange": false,
  "bFilter": true,
  "bInfo": true,
  "bAutoWidth": false,
  "pagingType": "full_numbers", // Pagination button display options.
  "language": {
    "search": "Pesquisar 123",
    "zeroRecords": "Nenhum dado encontrado.",
    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
    "infoFiltered": "(Filtrados de _MAX_ registros)",
    "infoThousands": ".",
    "loadingRecords": "Carregando...",
    "processing": "Processando...",
    "paginate": {
      "first": '<i class="fas fa-angle-double-left"></i>',
      "last": '<i class="fas fa-angle-double-right"></i>',
      "previous": '<i class="fas fa-angle-left"></i>',
      "next": '<i class="fas fa-angle-right"></i>',
    },
  },
  "order": ordem,
  "columnDefs": definicoes,
  "dom": '<"card-body table-responsive p-0"tr>' +
    '<"card-footer clearfix"<"row view-pager"<"col-md-6"i><"col-md-6 pagination-sm m-0"p>>>',
});

$.fn.DataTable.ext.pager.numbers_length = 5;
oTable = $('#inovaDatatables').DataTable(); //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#pesquisar').keyup(function() {
  oTable.search($(this).val()).draw();
})