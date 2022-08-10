
$(document).ready(function () {
  // $('#table_id').DataTable();
  $('#table_id').DataTable({
    'ajax' : './assets/language/data.json',
    'columns' : [
      {'data' : 'language'},
      {'data' : 'opi'},
      {'data' : 'vri'}
    ]
  });
});