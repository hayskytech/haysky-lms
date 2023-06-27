menu = {
	"htmlcss": [
		"index",
		"02 basic tags",
		"03 html table",
		"04 html list",
		"05 css basics",
		"06 box model",
		"07 grid layout",
		"08 css table",
		"09 form fields",
		"10 form attributes",
		"11 other tags",
		"12 display",
		"13 position",
		"14 combinators",
		"15 fixed sidebar",
		"16 structure",
		"17 css flex",
		"19 flex page"
	],
	"javascript": [
		"index",
		"02 operators",
		"03 conditions",
		"04 loops",
		"05 data types",
		"06 functions",
		"07 dom",
		"08 dom Examples",
		"09 eventlistener",
		"10 examples",
		"11 calculator",
		"12 todo list",
		"13 ajax",
		"14 tabs",
		"15 qr code",
		"16 csv import",
		"17 csv upi qrcode",
		"18 students",
		"19 json menu",
		"20 fecth from url"
	],
	"react": [
		"index",
		"news from api",
		"arithmetic",
		"tables"
	],
	"general": [
		"index"
	],
	"python": [
		"index",
		'02 data types',
		'03 strings',
		'04 boolean',
		'05 operators',
		'06 list',
		'07 tuple',
		'08 set',
		'09 dictionaries',
		'10 if else',
		'11 loops',
		'12 functions',
		'django',
		'mysql',
		'sqlite'
	]
}

if (typeof wordpress === "undefined") {
	nav = document.createElement('nav')
	str = '<ul>'
	pathArray = window.location.pathname.split('/');
	folder = pathArray[pathArray.length - 2]
	filename = pathArray[pathArray.length - 1]
	for (let i = 0; i < menu[folder].length; i++) {
		str += `<li id="${menu[folder][i]}"><a href="${menu[folder][i]}.html">${menu[folder][i]}</a></li>`;
	}
	str += "<ul>"
	nav.innerHTML = str
	document.body.prepend(nav)

	header = document.createElement("header")
	h = ''
	Object.keys(menu).forEach(key => {
		h += `<a href="../${key}/index.html">${key}</a>`
	});
	header.innerHTML = h
	document.getElementsByTagName("main")[0].prepend(header)
	filename = filename.slice(0, -5)
	filename = filename.replace(/%20/g, " ");
}