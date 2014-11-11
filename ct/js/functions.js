$(document).ready(function() {
	$.ajax({
			url: './include/process.php',
			type: 'post',
			data: { tag: 'getData'},
			dataType: 'json',
			success: function (data) {
				if (data.success) {
					$.each(data, function (index, record) {
						if ($.isNumeric(index)) { 
							var row = $("<tr />");
							
							$("<td />").text(record.carnet).appendTo(row);
							$("<td />").text(record.identificacion).appendTo(row);
							$("<td />").text(record.nombre).appendTo(row);
							$("<td />").text(record.dia).appendTo(row);
							$("<td />").text(record.doctor).appendTo(row);

							row.appendTo("table");
						}
					})
				}

				$('table').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				})
			}
		});
})