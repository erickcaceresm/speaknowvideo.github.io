///// carga datos en datatable start
$(document).ready(function () {
  // $('#table_id').DataTable();
  $('#table_id').DataTable({
    'ajax' : './assets/language/data.json',
    'columns' : [
      {'data' : 'language'},
      {'data' : 'opi'}
    ]
  });

});
///// carga datos en datatable end

$(document).ready(function () {
  // $('#table_id').DataTable();
  $('#table_id2').DataTable({
    'ajax' : './assets/language/data2.json',
    'columns' : [
      {'data' : 'language'},
      {'data' : 'vri'}
    ]
  });

});



///// video start
// $('#myModal').on('shown.bs.modal', function () {
//   $('#myvideo')[0].play();
// })
// $('#myModal').on('hidden.bs.modal', function () {
//   $('#myvideo')[0].pause();
// })
///// video end