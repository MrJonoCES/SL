$(function() {
    $('#my-element').textfill({
        maxFontPixels: 36
    });
});

$(function() {
    $('#my-element').textfill({
        success: function() {
		    console.log("yay!")
		},
		fail: function() {
		    alert("boo hoo!")
		}
    });
});