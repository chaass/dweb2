$(document).ready(function() {
	$.ajax({
			url: './include/processlibre.php',
			type: 'post',
			data: { tag: 'getData'},
			dataType: 'json',
			success: function (data) {
				if (data.success) {
					$.each(data, function (index, record) {
						if ($.isNumeric(index)) { 
							var row = $("<tr />");
							
							$("<td />").text(record.Equipo).appendTo(row);
							$("<td />").text(record.Estado).appendTo(row);
							$("<td />").text(record.Fecha).appendTo(row);
							$("<td />").text(record.Horaet).appendTo(row);
							$("<td />").text(record.Horasa).appendTo(row);

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