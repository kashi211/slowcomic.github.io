


<!DOCTYPE html>
<html>
<head><title>sadasdasd</title></head>
<body>        <div style="background-color:#edf1f5; width:80%;
    height:auto;
    min-height:100vh;
    margin:0 auto;
    padding:50px 10px 0px 10px;" class="page-container">
            <h1>All Comments ('400')</h1>
            <form style="width:45%;
    margin:0 auto;
    margin-top:5px;" action="" method="post" class="main">
                <label style="font-size:13px;
    text-transform: uppercase;
    vertical-align: bottom;">enter a brief comment</label>
                <textarea style="border:1px solid rgba(1,1,1,0.3);
        width:100%;
        padding:4px 7px;
        margin-top:5px;
        font-size:13px;
        line-height:24px;
        resize:none;
        transition:ease 0.2s all;
        outline:none !important;" class="form-text" name="comment" id="comment"></textarea>
                <br />
                <input type="submit" class="form-submit" name="new_comment" value="post">
            </form>
       
<div style="width:45%;
    height:auto;
    padding:7px 23px;
    margin:0px auto;
    margin-bottom:10px;
    text-align:justify;" class="comment" id="'.$par_code.'">'
                    <p class="user">' META'</p>
                    <p class="time">'24-4-23'</p>
                    <p class="comment-text">'This is a comment'</p>
                    <a class="link-reply" id="reply" name="'.$par_code.'">Reply</a>
                   
                   

                    <a style="font-size:11.2px;
    text-transform: uppercase;
    text-decoration: none;
    color:#222;
    cursor:pointer;
    transition:ease 0.3s all;" class="link-reply" id="children" name="'.$par_code.'"><span id="tog_text">replies</span> ('34')</a>
                        <div style="border-left:1px solid rgba(1,1,1,0.2);" class="child-comments" id="C-'.$par_code.'">

                        <div style="margin-top:10px;
    margin-left:30px;
    padding-left:5px;" class="child" id="'.$par_code.'-C">
                        <p class="user">'META mina'</p>
                                <p class="time">'23-4-56'</p>
                                <p class="comment-text">'reply madafaka'</p>
                            </div>
                   
                    </div>
        </div>
        </div>
<script type="text/javascript">$(document).ready(function() {
    $(".child-comments").hide();

    $("a#children").click(function() {
        var section = $(this).attr("name");
        var togTxt = $("#tog_text").text();
        $("#C-" + section).toggle();
    });

    $(".form-submit").click(function() {
        var commentBox = $("#comment");
        var commentCheck = commentBox.val();
        if(commentCheck == '' || commentCheck == NULL) {
            commentBox.addClass("form-text-error");
            return false;
        }
    });

    $(".form-reply").click(function() {
        var replyBox = $("#new-reply");
        var replyCheck = replyBox.val();
        if(replyCheck == '' || replyCheck == NULL) {
            replyBox.addClass("form-text-error");
            return false;
        }
    });

    $("a#reply").one("click", function() {
        var comCode = $(this).attr("name");
        var parent = $(this).parent();

        parent.append("<br /><form action='' method='post'><textarea class='form-text' name='new-reply' id='new-reply' required='required'></textarea><input type='hidden' name='code' value='"+comCode+"' /><input type='submit' class='form-submit' id='form-reply' name='new_reply' value='Reply' /></form>")
    });

})
</script>

        <style type="text/css">
            /*    Updated stylesheet for YouTube Comment System video */

/* imports */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);

/* resets */
* {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    font-family:'Calibri', sans-serif;
    outline:none;
}

/* Animations */
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }
  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }
  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}

/* body, html */

.child {
    margin-top:10px;
    margin-left:30px;
    padding-left:5px;
}
.child-comments {
    border-left:1px solid rgba(1,1,1,0.2);
}

    .form-input {
        border:1px solid rgba(1,1,1,0.3);
        width:50%;
        padding:4px 7px;
        font-size:13px;
        line-height:24px;
        resize:none;
    }
    .form-text {
        border:1px solid rgba(1,1,1,0.3);
        width:100%;
        padding:4px 7px;
        margin-top:5px;
        font-size:13px;
        line-height:24px;
        resize:none;
        transition:ease 0.2s all;
        outline:none !important;
    }
        .form-text-error {
            border-color:rgba(237,28,36,0.7);
            animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
        }
        .form-text:focus {
            border-color:rgba(0,114,188,0.7);
        }
    .form-submit {
        text-transform: uppercase;
        border:1px solid rgba(1,1,1,0.3);
        cursor:pointer;
        padding:5px 13px;
        margin-top:5px;
    }

/* fonts */
.user, .time {
    display:inline-block;
}
.user {
    font-size:13px;
    color:#0072bc;
    text-decoration: none;
    word-break: break-all;
    line-height:17px;
}
.time {
    font-size:11px;
    color:#b2b1b1;
    transition:ease 0.2s all;
}
    .comment:hover .time {
        color:#767676;
    }
.comment-text {
    font-size:13px;
    line-height:17px;
    color:#222;
    margin:0px 10px;
}


    .link-reply {
        color:#767676;
        margin-left:20px;
    }

h1 {
    width:45%;
    height:auto;
    margin:0px auto;
    font-size:16px;
    font-weight:300;
    text-transform: uppercase;
    border-bottom:1px solid rgba(1,1,1,0.2);
}


        </style>
</body></html>
