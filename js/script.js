$(document).ready(function() {
  $("#submit").on("click", function() {
    var name = $("#name").val();
    var shout = $("#shout").val();
    console.log("name is", name);
    console.log("shout is ", shout);
    var dataString = "name=" + name + "&shout=" + shout;
    if (name == "" || shout == "") {
      alert("Please fill your name and shout");
    } else {
      $.ajax({
        type: "POST",
        url: "../shoutbox.php",
        data: dataString,
        cache: false,
        success: function(html) {
          $("#shouts ul").prepend(html);
        }
      });
    }

    return false;
  });
});
