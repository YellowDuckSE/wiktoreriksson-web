function chatbotPrevention() {
    // Change the form action to the real submission page
    document.getElementById('comment-form').action = "/add_comment.php";
    // Submit the form
    document.getElementById('comment-form').submit();
}