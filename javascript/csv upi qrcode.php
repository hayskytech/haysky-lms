<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CSV Import</title>
</head>

<body>
	<h1>CSV Import using Javascript</h1>
	<unf><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<input type="file" name="file" id="inp" accept=".csv"> <br><br>
<input type="button" id="btnsubmit" value="Submit" onclick="readCSVFile();">
<br><br>
<table id="tblcsvdata"></table>
<script>
	function readCSVFile() {
		files = document.getElementById('inp').files;
		if (files.length > 0) {
			file = files[0];
			reader = new FileReader();
			reader.readAsText(file);
			reader.onload = function (event) {
				csvdata = event.target.result;
				rowData = csvdata.split('\n');
				tbodyEl = document.getElementById('tblcsvdata');
				tbodyEl.innerHTML = "";
				// Loop on the row Array (change i=1 if you want to skip 1st row)
				for (i = 0; i < rowData.length; i++) {
					// Skip loop if row is empty (last row)
					if (rowData[i] == '') {
						continue
					}
					// Split by comma (,) to get values
					values = rowData[i].split(',');
					// Insert a row at the end of table
					newRow = tbodyEl.insertRow();
					for (j = 0; j < values.length; j++) {
						// Insert a cell at the end of the row
						newCell = newRow.insertCell();
						newCell.innerHTML = values[j];
					}
					var pn = values[0];
					var am = values[1];
					upi_id = values[2].replace(/(\r\n|\n|\r)/gm, "");
					var pa = upi_id;
					var url = `upi://pay?pa=${pa}&pn=${pn}&am=${am}&cu=INR`;
					newCell = newRow.insertCell()
					newCell.innerHTML =
						`<div id="qr${i}"></div>
					<button onclick="showqr('qr${i}','${url}')">Show QR</button>
					<button onclick="hideqr('qr${i}')">Hide QR</button>`;
				}
			};
		} else {
			alert("Please select a file.");
		}
	}
	function showqr(qr_id, url) {
		document.getElementById(qr_id).innerHTML = ""
		new QRCode(document.getElementById(qr_id), url);
	}
	function hideqr(qr_id) {
		document.getElementById(qr_id).innerHTML = ""
	}
</script>
<style type="text/css">
	table,
	table th,
	table td {
		padding: 5px;
		border-collapse: collapse;
		border: 1px solid black;
	}

	tr:first-child td {
		font-weight: bold;
		text-align: center;
	}
</style>
</unf>
	<pre></pre>
	<script>
		unf = document.getElementsByTagName("unf");
		pre = document.getElementsByTagName("pre");
		for (var i = 0; i < unf.length; i++) {
			pre[i].innerText = unf[i].innerHTML
		}
	</script>
	<link rel="stylesheet" href="../style.css">
</body>