$(document).on('click', '#btn-edit', function (){
	$('.modal-body #id').val($(this).data('id'));
	$('.modal-body #jabatan').val($(this).data('jabatan'));

})