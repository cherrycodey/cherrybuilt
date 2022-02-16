<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>subscriber form</title>
</head>

<body>
 

<form method="post" action="subscriberform.php">

<textarea name="message"></textarea>

<input type="submit">

</form>
<p><input id="subject" type="text" placeholder="type your subject here" 
    class="form-control"></p>
<p><input id="message" type="text" placeholder="type your message here" 
    class="form-control"></p>
<p><a id="mail-link" class="btn btn-primary">Create email</a></p>
<script type="text/javascript">
    function loadEvents() {
        var mailString;
        function updateMailString() {
            mailString = '?subject=' + encodeURIComponent($('#subject').val())
                + '&body=' + encodeURIComponent($('#message').val());
            $('#mail-link').attr('href',  'mailto:person@email.com' + mailString);
        }
        $( "#subject" ).focusout(function() { updateMailString(); });
        $( "#message" ).focusout(function() { updateMailString(); });
        updateMailString();
    }
</script>
<a href="mailto:YourMail@Mail.com"<button>E-Mail me</a>

<form action="mailto:contact@yourdomain.com" method="POST" enctype="multipart/form-data" name="EmailForm">

Name:<br> <input type="text" size="19" name="ContactName"><br><br>
Message:<br> <textarea name="ContactCommentt" rows="6" cols="20"></textarea><br><br> 
<input type="submit" value="Submit"> </form>

<a href="mailto:EMAILADDRESS">

</body>
</html>