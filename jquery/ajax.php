<h1>AJAX</h1>
<?php sc1(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<h1 id="loading">Loading...</h1>
<div id="main"></div>
<script type="text/javascript">
$.ajax({
  url: 'https://telugunewsadda.com/wp-json/wp/v2/posts?fields=id&per_page=20',
  type: 'GET',
  dataType: 'json',
  success: function(data) {
    $('#loading').hide()
		x = $("#main");
  	for(item of data){
			var txt3 = $('<div class="item"></div>');  // Create with DOM
	  	txt3.append('<img src="'+item.jetpack_featured_media_url+'"><div class="text">'+item.title.rendered+'</div>');
			x.append(txt3);
  	}
    // console.log(data);
  },
  error: function(xhr, status, error) {
    // Handle error
    console.log('Error:', error);
  }
});
</script>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Mandali&family=NTR&family=Noto+Serif+Telugu&family=Suranna&family=Tenali+Ramakrishna&display=swap');
#main img {
    width: 300px;
    height: 240px;
    object-fit: contain;
}
#main .item {
    border: 2px solid;
    padding: 5px;
    margin: 5px;
    background: #c8efff;
    border-radius: 20px;
    border-collapse: collapse;
    display: inline-block;
    width: 300px;
    height: 320px;
    float: left;
}
.text {
	font-family: 'Noto Serif Telugu';
	overflow: hidden;
	display: -webkit-box;
	font-size: 20px;
	-webkit-line-clamp: 3; /* number of lines to show */
	line-clamp: 2;
	-webkit-box-orient: vertical;
}
#loading {
    position: fixed;
    right: 50%;
    top: 40%;
}
</style>
<?php sc2(); ?>


<h1>QR CODE JS</h1>

<?php sc1(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>

<input id="text" type="text" value="http://jindo.dev.naver.com/collie" style="width:80%"><br>
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>


<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
  width : 100,
  height : 100
});

function makeCode () {    
  var elText = document.getElementById("text");
  
  if (!elText.value) {
    alert("Input a text");
    elText.focus();
    return;
  }
  
  qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
  on("blur", function () {
    makeCode();
  }).
  on("keydown", function (e) {
    if (e.keyCode == 13) {
      makeCode();
    }
  });
</script>
<?php sc2(); ?>