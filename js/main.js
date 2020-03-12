function setCookie(cname, cvalue) {
    var expires = "expires=2147483647";
    document.cookie = cname + "=" + cvalue + ";" + expires;
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function chatbotPrevention() {
    // Change the form action to the real submission page
    document.getElementById('comment-form').action = "/add_comment.php";
    // Submit the form
    document.getElementById('comment-form').submit();
}