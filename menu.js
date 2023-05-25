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
		"07 ajax",
		"08 dom",
		"09 dom examples",
		"10 eventlistener",
		"11 examples",
		"12 calculator",
		"13 todo list",
		"14 tabs",
		"15 qr code",
		"16 csv import",
		"17 csv upi qrcode",
		"18 students",
		"19 json menu",
		"20 fecth from url.html"
	]
}
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
console.log(filename)
document.getElementById(filename).scrollIntoView()