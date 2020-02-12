<?php 
session_start();
if($_SESSION["hname"]!="")
{?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>chat app</title>
        <link rel="stylesheet" href="resources/style.css">
        <script type="text/javascript" src="resources/jquery.js"></script>
    </head>
    <body>

        <div id="wrapper">
            <div class="chat_wrapper">
                <div id="chat"></div>
                <form class="" id="msgform" action="index.php" method="post">
                    <textarea name="message" class="textarea" placeholder="Enter you message here...(max 40 words)"></textarea>
                </form>
            </div>
        </div>

<script type="text/javascript">
    LoadChat();
    setInterval(function () {
        LoadChat();
    }, 1000);
    function LoadChat() {
        $.post('handlers/messages.php?action=getMessages', function (response) {

            var scrollpos = $('#chat').scrollTop();
            var scrollpos = parseInt(scrollpos) + 420;
            var scrollHeight = $('#chat').prop('scrollHeight');

            $('#chat').html(response);
            if (scrollpos < scrollHeight){

            } else{
                $('#chat').scrollTop($('#chat').prop('scrollHeight'));
            }

        })
    }
    $('.textarea').keyup(function(e){
            //alert(e.which);
        if (e.which == 13){
            //alert('enter is pressed')
            $('form').submit();
        }
        });
    $('form').submit(function () {
        //alert('form is submit jquery');
        var message = $('.textarea').val();
        $.post('handlers/messages.php?action=sendMessage&message='+message, function (response) {
            //alert(response);
            if (response==1){
                LoadChat();
                document.getElementById('msgform').reset();
            }
        });
        return false;
    })
</script>

    </body>
</html>
<?php
                 }

            else{
                    echo ('<meta http-equiv="refresh" content="0; URL= ../logout_connect">');
                }
?>