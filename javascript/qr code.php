<h1>QR Code Generator</h1>
<?php sc1(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<input id="text" type="text" value="https://www.google.com" style="width:450px;font-size: 22px;"
	onkeypress="handleKey(event)" />
<button onclick="makeCode()">Submit</button>
<br />
<div id="qrcode" style="width:300px; height:300px; margin-top:15px;"></div>
<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById("qrcode"), {
		width: 300,
		height: 300
	});
	function makeCode() {
		var elText = document.getElementById("text");
		if (!elText.value) {
			alert("Input a text");
			elText.focus();
			return;
		}
		qrcode.makeCode(elText.value);
	}
	makeCode();
	document.getElementById('text').addEventListener('click', makeCode)
	function handleKey(event) {
		if (event.key == 'Enter') {
			makeCode()
		}
	}
</script>
<?php sc2(); ?>
<h2>vCard Generator (Contact Info)</h2>
<?php sc1(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<input type="text" id="fn" value="Ramesh Kumar" /><br />
<input type="text" id="num" value="+912345678900">
<button onclick="makeCode()">Generate</button>
<div id="qrcode" style="width:300px; height:300px; margin-top:15px;"></div>
<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById("qrcode"), {
		width: 300,
		height: 300
	});
	var fn = document.getElementById("fn");
	var num = document.getElementById("num");
	function makeCode() {
		var text = `BEGIN:VCARD\nVERSION:3.0\nN:;\nFN:${fn.value}\nTEL:${num.value}\nEND:VCARD`;
		qrcode.makeCode(text);
	}
	makeCode();
	fn.addEventListener('keypress', makeCode)
	num.addEventListener('keypress', makeCode)
</script>
<?php sc2(); ?>

<h2>UPI Payment QR Code</h2>
<?php sc1(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<table>
	<tr>
		<td>UPI ID:</td>
		<td><input type="text" id="pa" value="mdsufyan71@ybl" /></td>
	</tr>
	<tr>
		<td>Full Name:</td>
		<td><input type="text" id="pn" value="SHAIK MOHAMMAD SUFYAN" /></td>
	</tr>
	<tr>
		<td>Amount: </td>
		<td><input type="text" id="am" value="200" /></td>
	</tr>
</table>
<button onclick="makeCode()">Generate</button>
<div id="qrcode" style="width:300px; height:300px; margin-top:15px;"></div>
<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById("qrcode"), {
		width: 300,
		height: 300
	});
	function makeCode() {
		var pa = document.getElementById("pa").value;
		var pn = document.getElementById("pn").value;
		var am = document.getElementById("am").value;
		var text = `upi://pay?pa=${pa}&pn=${pn}&am=${am}&cu=INR`;
		qrcode.makeCode(text);
	}
	makeCode();
</script>
<?php sc2(); ?>