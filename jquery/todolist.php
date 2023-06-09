<h1>Todo List (Normal)</h1>
<?php sc1(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
  $(document).ready(function () {
    $("button").click(function () {
      i = $(".item");
      x = i.val();
      if (x != "") {
        $("ol").append("<li>" + x + "</li>");
      } else {
        alert("Please enter a value.");
      }
      i.val("");
      i.focus();
    });

    $(".item").keypress(function (e) {
      var key = e.which;
      if (key == 13) {
        $("button").click();
        return false;
      }
    });
  });
</script>

<input type="text" class="item" />
<button>Add</button>
<h1>List</h1>
<ol></ol>
<?php sc2(); ?>
<h1>Todo List (Advanced)</h1>
<?php sc1(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/icon.min.css"/>
<script>
  $(document).ready(function () {
    $(".plus.icon").click(function () {
      $('ol').show()
      i = $(".item");
      x = i.val();
      if (x != "") {
        $("ol").append(
          "<li>" + x + "<i class='check blue square icon'></i></li>"
        );
      } else {
        alert("Please enter a value.");
      }
      i.val("");
      i.focus();
      $(".check.icon").click(function () {
        $(this).parent().remove();
      });
    });

    $(".item").keypress(function (e) {
      var key = e.which;
      if (key == 13) {
        $(".plus.icon").click();
        return false;
      }
    });
  });
</script>

<input type="text" class="item" />
<i class="plus green large square icon"></i>
<h1>Todo List</h1>
<ol></ol>

<style>
  .check {
    float: right;
  }
  li {
    margin: 10px;
    padding: 10px;
    background: pink;
    border: 1px solid black;
  }
  li:hover{
    background: hotpink;
  }
  ol{
    padding: 10px 10px 10px 20px;
    border: 2px solid black;
    background: skyblue;
    max-width: 300px;
    display: none;
  }
  ol,li,input{
    font-size: 22px;
  }
</style>

<?php sc2(); ?>