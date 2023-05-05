<h1>Calculator</h1>
<?php sc1(); ?>
<div id="main">
	<h3>Simple Calculator</h3>
	<textarea name="" id="inp" cols="26" rows="4" onkeypress="handleKey(event)"></textarea>
	<div class="line">
	</div>
	<div class="line">
		<button onclick="ad('1')">1</button>
		<button onclick="ad('2')">2</button>
		<button onclick="ad('3')">3</button>
		<button onclick="ad('+')">+</button>
	</div>
	<div class="line">
		<button onclick="ad('4')">4</button>
		<button onclick="ad('5')">5</button>
		<button onclick="ad('6')">6</button>
		<button onclick="ad('-')">-</button>
	</div>
	<div class="line">
		<button onclick="ad('7')">7</button>
		<button onclick="ad('8')">8</button>
		<button onclick="ad('9')">9</button>
		<button onclick="ad('*')">*</button>
	</div>
	<div class="line">
		<button class="ac" onclick="ac()">AC</button>
		<button onclick="ad('0')">0</button>
		<button onclick="ad('/')">/</button>
		<button class="result" onclick="ans()">=</button>
	</div>
</div>
<script>
	inp = document.getElementById('inp');
	function ad(x) {
		inp.value = inp.value + x
	}
	function ans() {
		inp.value = eval(inp.value)
	}
	function ac() {
		inp.value = ''
	}
	function handleKey(event) {
		if (event.key == 'Enter') {
			event.preventDefault();
			ans()
		}
	}
</script>
<style>
	* {
		font-size: 20px;
		font-family: Arial;
	}

	#main {
		width: 300px;
		border: 1px solid;
		padding: 15px 0 15px 15px;
		background-color: rgb(199, 239, 255);
	}

	.line {
		margin: 5px 0;
	}

	.line button {
		width: 22%;
	}

	.ac {
		background-color: red;
		color: white;
	}

	.result {
		background-color: green;
		color: white;
	}

	h3 {
		text-align: center;
		margin: 0;
	}
</style>
<?php sc2(); ?>