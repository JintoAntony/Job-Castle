// JavaScript Document
$("#rightArrow").click(function(e) {
        var curr =  $("#itemsListBox ul li:last");
        curr.parent().prepend(curr);
    });
$("#leftArrow").click(function(e) {
        var curr =  $("#itemsListBox ul li:first");
        curr.parent().append(curr);
    });