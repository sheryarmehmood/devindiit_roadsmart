<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>RoadSmart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('user/assets/media/logos/favicon1.png') }}" />
</head>
<body>
    <style>
    @media only screen and (max-width: 600px) {
        .inner-body {
            width: 100% !important;
        }

        .footer {
            width: 100% !important;
        }
    }

    @media only screen and (max-width: 500px) {
        .button {
            width: 100% !important;
        }
    }


    /* Base */

    body,
    body *:not(html):not(style):not(br):not(tr):not(code) {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif,
        'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
        position: relative;
    }

    body {
        -webkit-text-size-adjust: none;
        background-color: #ffffff;
        color: #718096;
        height: 100%;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        width: 100% !important;
    }

    p,
    ul,
    ol,
    blockquote {
        text-align: left;
    }

    a {
        color: #3869d4;
    }

    a img {
        border: none;
    }

    /* Typography */

    h1 {
        color: #000000;
        font-size: 21px;
        font-weight: bold;
        margin-bottom: 25px;
    }
    h1 span{
        color: #000000;
        font-size: 21px;
        font-weight: 500;
    }

    h2 {
        font-size: 16px;
        font-weight: bold;
        margin-top: 0;
        text-align: left;
    }

    h3 {
        font-size: 14px;
        font-weight: bold;
        margin-top: 0;
        text-align: left;
    }

    p {
        font-size: 16px;
        line-height: 150%;
        margin-top: 0;
        text-align: left;
        color: black;
        font-weight: 500;
        margin: 0px !important;
    }

    p.sub {
        font-size: 12px;
    }

    img {
        max-width: 100%;
    }
    .first{
        color: #0a003a;
    }
    .head-p{
        margin-bottom: 30px;
    }
    /* Layout */


}




/* Subcopy */



.subcopy p {
    font-size: 14px;
}


.footer p {
    color: #b0adc5;
    font-size: 12px;
    text-align: center;
}

.footer a {
    color: #b0adc5;
    text-decoration: underline;
}

/* Tables */

.table table {
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
    margin: 30px auto;
    width: 100%;
}

.table th {
    border-bottom: 1px solid #edeff2;
    margin: 0;
    padding-bottom: 8px;
}

.table td {
    color: #74787e;
    font-size: 15px;
    line-height: 18px;
    margin: 0;
    padding: 10px 0;
}


/* Buttons */

.action {
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
    margin: 30px auto;
    padding: 0;
    text-align: center;
    width: 100%;
}

.button {
    -webkit-text-size-adjust: none;
    border-radius: 4px;
    color: #fff;
    display: inline-block;
    overflow: hidden;
    text-decoration: none;
}

.button-blue,
.button-primary {
    background-color: #0a003a;
    border-bottom: 8px solid #0a003a;
    border-left: 18px solid #0a003a;
    border-right: 18px solid #0a003a;
    border-top: 8px solid #0a003a;
}

.button-green,
.button-success {
    background-color: #48bb78;
    border-bottom: 8px solid #48bb78;
    border-left: 18px solid #48bb78;
    border-right: 18px solid #48bb78;
    border-top: 8px solid #48bb78;
}

.button-red,
.button-error {
    background-color: #e53e3e;
    border-bottom: 8px solid #e53e3e;
    border-left: 18px solid #e53e3e;
    border-right: 18px solid #e53e3e;
    border-top: 8px solid #e53e3e;
}

/* Panels */

.panel {
    border-left: #2d3748 solid 4px;
    margin: 21px 0;
}

.panel-content {
    background-color: #edf2f7;
    color: #718096;
    padding: 16px;
}

.panel-content p {
    color: #718096;
}

.panel-item {
    padding: 0;
}

.panel-item p:last-of-type {
    margin-bottom: 0;
    padding-bottom: 0;
}

/* Utilities */

.break-all {
    word-break: break-all;
}

.msg-body{
    border-bottom: 1px solid #80808026;
    padding-bottom: 50px;
    margin-bottom: 35px;
}

.msg-footer{
    padding-bottom: 30px;
}
.foot-head{
    margin-bottom: 20px;
    font-size: 16px;
}
.foot-msg{
    color: grey;
    font-weight: 400;
    font-size: 15px;
}
.main-footer{
    display:flex;
}
.app-info{
   width: 50%;
}
.app-info p{
    font-weight: 400;
    color: grey;
    font-size: 14px;
}
.social-icons{
    text-align: end;
    width: 50%;
}
.social-icons .fa-facebook{
    padding: 8px 12px;
    background: #4267B2;
    color: #fff;
    border-radius: 20px;
    margin-right:3px;
}
.social-icons .fa-instagram{
    padding: 8px 9px;
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
    color: #fff;
    border-radius: 20px;
}

.main-header{
    text-align:center;
    margin-bottom: 40px;
}
.head-img img{
    max-width: 200px;
    max-height: 200px;
    width: 200px;
    height: 200px;
    margin: auto;
}
.main-header h1{
    text-align:center;
    color: #0a003a;
    margin-bottom: 10px;
    margin-top:0px;
}
.main-header p{
    text-align:center;
    color: #0a003a;
}
</style>

<table style="-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 100%;background-color: #edf2f7;margin: 0;padding: 0;width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table style="-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 100%;margin: 0;padding: 0;width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            


            <!-- Email Body -->
            <tr>
                <td style="-premailer-cellpadding: 0;
                -premailer-cellspacing: 0;
                -premailer-width: 100%;
                background-color: #edf2f7;
                border-bottom: 1px solid #edf2f7;
                border-top: 1px solid #edf2f7;
                margin: 0;
                padding: 0;
                width: 100%;" width="100%" cellpadding="0" cellspacing="0">
                <table style="-premailer-cellpadding: 0;
                -premailer-cellspacing: 0;
                -premailer-width: 570px;
                background-color: #ffffff;
                border-color: #e8e5ef;
                border-radius: 2px;
                border-width: 1px;
                box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015);
                margin: 0 auto;
                padding: 0;
                width: 570px;" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                <!-- Body content -->
                <tr>
                    <td style="max-width: 100vw;padding: 20px;">
                     <div style="margin:0px auto;max-width:640px;">
                        <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
                            <tbody>
                                <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 5%;">
                                       <div aria-labelledby="mj-column-per-100" class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                                <tr>
                                                    <td style="word-break:break-word;font-size:0px;padding:0px 0px 20px;" align="left">
                                                        <div style="cursor:auto;font-family:Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;font-size:16px;line-height:24px;text-align:left;">

                                                           <!--    Custom view-->
                                                           <div class="main-header" style="text-align:center;margin-bottom: 40px;">
                                                             
                                                              <h2 style="text-align:center;color: #08537a; margin-bottom: 0px;font-size: 30px;margin-top:0px;">Reset your password<br><br>
                                                               <!--  <span style="color: black;font-size: 20px;"> Your account created successfully.</span> -->
                                                              </h2>
                                                              <!--  <p style="text-align:center;color: #0a003a;    margin-top: 1px;margin-bottom: 0px;font-size: 14px;">We always love to hear from you</p> -->
                                                          </div>
                                                          <h2 style="color: #000000;font-size: 18px;font-weight: bold;    margin-bottom: 10px;">
                                                            <span style="color: #000000;font-size: 18px;font-weight: 500;">Hi there! </span>
                                                        </h2>
                                                        <!-- <p class="head-p" style="    margin-bottom: 14px;font-size: 14px;font-weight: 500;color: #000;">Here are your updated login details: </p> -->
                                                        <div class="msg-body" style="border-bottom: 1px solid #80808026;padding-bottom: 40px;margin-bottom: 35px;">
                                                            <p style="font-size: 14px;font-weight: 500;color: #333333;margin: 0px !important;">
                                                                <span class="first" style="color: #333333;">You recently asked to reset your password — it happens to the best of us!
                                                                </span>
                                                            </p>
                                                            <br>
                                                            <p style="font-size: 14px;font-weight: 500;color: #333333;margin: 0px !important;"><span class="first" style="color: #9d471f;"></span>To complete your request, click the button below. Note that this link is only valid for 1 hour. If you don’t use it, nothing will happen — but you will need to request another password reset.</p>
                                                            <br>
                                                            <a href="{{$reset_url}}" class="action" style="text-decoration: none;color: #fff;font-weight: 500;background: #08537a;padding: 8px 25px;font-weight: 600;border-radius: 20px;    font-size: 14px;">Reset Password</a>
                                                            <br><br>
                                                            <p style="font-size: 14px;font-weight: 500;color: #333333;margin: 0px !important;"><span class="first" style="color: #333333;">If you didn’t request a new password, please contact us immediately</span></p>
                                                            <!-- <a href="javascript:void(0);" class="action" style="text-decoration: none;color: #fff;font-weight: 500;background: #9d471f;padding: 8px 25px;font-weight: 600;border-radius: 20px;    font-size: 14px;">Login</a> -->
                                                        </div>
                                                        <div class="msg-footer" style="padding-bottom: 30px;">
                                                            <p class="foot-head" style="    margin-bottom: 0px;font-size: 14px;font-weight: 600;    color: black;">Regards!</p>
                                                            <p class="foot-msg" style="color: grey; font-weight: 400;font-size: 14px;    margin-top: 0px; margin-bottom: 0px;">Road Smart Team</p>
                                                        </div>
                                                        <div class="main-footer" style="display:flex;align-items: center;">
                                                           <span style="width: 50%;">
                                                            <p style="font-weight: 400;color: grey;font-size: 13px;    line-height: 12px;margin-bottom: 0px;margin-top: 0px;">© Copyright {{ date('Y')}}, RoadSmart
                                                             </p>
                                                         </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </td>
</tr>
</table>
</td>
</table>
</td>
</tr>
</table>
</body>
</html>
