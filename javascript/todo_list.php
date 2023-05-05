<h1>Todo List</h1>
<?php sc1(); ?>
<input type="text" onkeypress="handleKey(event)" autofocus>
<button onclick="addItem()">OK</button>
<ol></ol>
<script>
	input = document.getElementsByTagName('input')[0];
	function addItem() {
		val = input.value
		if (val == '') {
			return
		}
		list = document.getElementsByTagName('ol')[0]
		li = document.createElement('li')
		li.innerHTML = val + ' <button onclick="del(this)">x</button>'
		list.appendChild(li)
		input.value = ''
		input.focus()
	}
	function handleKey(event) {
		if (event.key == 'Enter') {
			addItem()
		}
	}
	function del(btn) {
		btn.parentElement.remove()
	}
</script>
<style>
	ol li {
		max-width: 300px;
		height: 25px;
		font-size: 22px;
	}

	ol button {
		float: right;
	}
</style>
<?php sc2(); ?>
<h2>Todo List using <b>Local storage</b></h2>
<?php sc1(); ?>
<h2>Todo List using Local storage</h2>
<div>
	Enter text: <input id="input" autofocus />
	<button id="button">ADD Item</button>
	<button id="removeAll">Remove All</button>
</div>
<ol id="main_list"></ol>

<script type="text/javascript">
	const btn = document.getElementById("button");
	const removeAllBtn = document.getElementById("removeAll");
	const input = document.getElementById("input");
	const ol = document.getElementById("main_list");
	raw = localStorage.getItem("list")
	if (raw) {
		list = JSON.parse(raw);
		render_items();
	} else {
		list = [];
	}
	btn.addEventListener("click", add_item);
	removeAllBtn.addEventListener("click", function () {
		if (list.length == 0) {
			return;
		}
		if (confirm("Remove all items?")) {
			list = [];
			render_items();
		}
	});
	input.addEventListener("keypress", function (event) {
		if (event.key === "Enter") {
			event.preventDefault();
			add_item();
		}
	});

	function add_item() {
		input.focus();
		if (input.value == "") {
			return;
		}
		list.push(input.value);
		render_items();
		input.value = "";
	}

	function render_items() {
		icon = `<button class="remove" onclick="remove_this(this)" title="Remove this">x</button>`;
		var str = "";
		for (var i = 0; i < list.length; i++) {
			str += `<li index="${i}">${list[i]} ${icon}</li>`;
		}
		ol.innerHTML = str;
		const myJSON = JSON.stringify(list);
		localStorage.setItem("list", myJSON);
	}

	function remove_this(e) {
		const id = e.parentElement.getAttribute("index");
		list.splice(id, 1);
		render_items();
	}
</script>

<style type="text/css">
	* {
		font-family: Arial;
	}

	li {
		max-width: 300px;
		background: pink;
		margin: 5px;
		padding: 5px;
		border-radius: 5px;
		border: 1px solid;
	}

	div,
	li,
	#button,
	#removeAll,
	input {
		font-size: 20px;
	}

	li:hover {
		background: skyblue;
	}

	ol {
		list-style-position: inside;
		padding: 0;
	}

	.remove {
		float: right;
		cursor: pointer;
	}
</style>
<?php sc2(); ?>