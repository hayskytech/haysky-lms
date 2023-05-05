<h1>CSV Import using Javascript</h1>
<?php sc1(); ?>
<input type="file" name="file" id="file" accept=".csv"> <br><br>
<input type="button" id="btnsubmit" value="Submit" onclick="readCSVFile();">
<br><br>
<table id="tblcsvdata" border="1" style="border-collapse: collapse;">
	<tbody>
	</tbody>
</table>
<script>
	function readCSVFile() {
		var files = document.querySelector('#file').files;
		if (files.length > 0) {
			var file = files[0];
			var reader = new FileReader();
			reader.readAsText(file);
			reader.onload = function (event) {
				var csvdata = event.target.result;
				var rowData = csvdata.split('\n');
				var tbodyEl = document.getElementById('tblcsvdata').getElementsByTagName('tbody')[0];
				tbodyEl.innerHTML = "";
				// Loop on the row Array (change row=1 if you want to skip 1st row)
				for (var row = 0; row < rowData.length; row++) {
					// Skip loop if row is empty (last row)
					if (rowData[row] == '') {
						continue
					}
					// Split by comma (,) to get column Array
					rowColData = rowData[row].split(',');
					// Insert a row at the end of table
					var newRow = tbodyEl.insertRow();
					// Loop on the row column Array
					for (var col = 0; col < rowColData.length; col++) {
						// Insert a cell at the end of the row
						var newCell = newRow.insertCell();
						newCell.innerHTML = rowColData[col];
					}
				}
			};
		} else {
			alert("Please select a file.");
		}
	}
</script>
<style type="text/css">
	table th,
	table td {
		padding: 5px;
	}

	tr:first-child td {
		font-weight: bold;
		text-align: center;
	}
</style>
<?php sc2(); ?>