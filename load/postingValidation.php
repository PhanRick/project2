<script>
$(function(){
  $("#blog_post").submit(function(e){
    var validated = true,
    title = $("input[name='title']");
    comment = $("textarea[name='comment']"),
    $(this).find(".error").remove();

if(title.val().length < 1){
  validated = false;
    title.css("border-color", "red");
      title.parent().append("<span class='error'>Please write something befored posting</span>");
        $(".error").fadeIn(500);

}else{
  title.css("border-color", "green");
    title.parent().find(".error").remove();
}
if(comment.val().length < 1){
  validated = false;
    comment.css("border-color", "red");
      comment.parent().append("<span class='error'>Please write something befored posting</span>");
        $(".error").fadeIn(500);
}else{
  comment.css("border-color", "green");
    comment.parent().find(".error").remove();
}

if(validated){
    msg = "Title\n\n";
    msg +=  title.val() + "\n";
    msg += "Comments: "   + "\n";
    msg +=  comment.val() + "\n";

var confirmed= confirm(msg);
  if (confirmed)
    return true;
  else
    return false;
}
  return false;
})
});

</script>