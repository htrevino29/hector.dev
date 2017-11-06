





document.getElementById("para1").innerHTML = formatAMPM();

function formatAMPM() {
var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? 'pm' : 'am',
    months = ['1','2','3','4','5','6','7','8','9','10','11','12'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
return months[d.getMonth()]+'/'+d.getDate()+'/'+d.getFullYear()+' '+hours+':'+minutes+ampm+' CST';

};



// mobile responsive JS class swaps for bootstrap.
$(window).resize(function () {
    var viewportWidth = $(window).width();
    if (viewportWidth < 750) {
            $("#aboutImg").removeClass("pull-right");
            $(".aboutImg").addClass("text-center");
            $("#textBoxDiv").removeClass("textBox");
    }
});







