function wb_copy(shortcode) {
if (document.selection) { 
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(shortcode));
    range.select().createTextRange();
    document.execCommand("Copy"); 

} else if (window.getSelection) {
    var range = document.createRange();
     range.selectNode(document.getElementById(shortcode));
     window.getSelection().addRange(range);
     document.execCommand("Copy");
     alert("Text copied") 
}}