$(function () {
  // holds the id when button delete click
  let this_id;
  // modal
  let deleteModal = $('#delete-user-modal');
	// start => datatable
	let table = $("#user-table").DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		searching: true,
		pageLength: 5,
		ajax: {
			method: "GET",
			url: "/users/table",
			dataType: "json",
			error: function (errors) {
				toast.fire({
					icon: 'error',
					title: 'Invalid Data Token.',
				})
			},
		},
		columns: [
			{ data: "first_name", name: "first_name" },
			{ data: "last_name", name: "last_name" },
			{ data: "email", name: "email" },
			{ data: "role", name: "role" },
			{ data: "created_at", name: "created_at", searchable: false },
			{ data: "action", name: "action", orderable: false, searchable: false, },
		],
	});
	// end
	// custom search
	$("#user-search-field").keyup(function () {
		table.search($(this).val()).draw();
	});
	// custom page length
	$("#user-page-length").change(function () {
		table.page.len($(this).val()).draw();
	});
  // select role filter
	$('#user-role-filter').on('change', function(){
		table.column(3).search( $(this).val() ).draw();
	});
  // start => button delete
	$('body').on('click', '.delete-user', function () {
		this_id = $(this).attr('data-id');
		deleteModal.modal('show');
	});
	// end
	//start => modal button delete
	$('body').on('click', '#destroy-user', function () {
		$.ajax({
			type: 'DELETE',
			url: '/users/' + this_id,
			dataType: 'json',
			beforeSend : function() {
				buttons('destroy-user', 'start');
			}
		})
		.done(function (response) {
			table.ajax.reload();
			toast.fire({
				icon: 'success',
				title: response.message,
			});
		})
		.fail(function (jqXHR, textStatus, errorThrown) {
			toast.fire({
				icon: 'error',
				title: jqXHR.responseJSON.message,
			});
		})
		.always(function (jqXHROrData, textStatus, jqXHROrErrorThrown){
			buttons('destroy-user', 'finish');
			deleteModal.modal('hide');
		});
	});
	// end
});
