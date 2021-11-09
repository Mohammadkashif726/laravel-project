<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no" />
</head>
<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" style="-webkit-text-size-adjust:none;">
<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
    <tbody>
    <tr>
        <td style="background-color:#f5f4fb; padding:30px 0 40px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px;" valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px"; align="center">
                <tr>
                    <td style="padding-bottom:20px;">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td align="center"><img src="https://image.ibb.co/m6D0Ep/ilmyst_logo1_04.png" height="80px"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%" style="background: #5c17cf; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;">
                            <tr>
                                <td align="center" style="font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; padding:20px;">
                                    <h3 style="color:#24fbff; font-size:36px; font-weight: normal; margin:0; padding:0;">Hey! {{ $first_name }}</h3>
                                    <p style="font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:15px; line-height:1.7em; color:#ffffff; margin-bottom:0;">We received a request to reset your password.</p>
                                    <p style="font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:15px; line-height:1.7em; color:#ffffff;  margin-top:10px;">You can use the given button for enter your password.</p>
                                    <a href="{{ App::environment() === 'development' ? config('constants.REACT_APP_BASE_URL') : 'https://ilmyst.com'.'/reset-password/'.$token.'/'. $email }}" style="display:inline-block; background:#2cbd50; font-size:20px; color:#ffffff; padding:20px 12px; margin-top:14px; min-width:240px; text-decoration: none; -webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px;">Reset your password</a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="background: #4a12a7; font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:15px; line-height:1.7em; color:#ffffff; padding:12px 20px;">
                                    This link and code will expire in 2 hours.
                                </td>
                            </tr>
                            <tr>
                                <td style="background: #5c17cf; color:#ffffff; border-radius: 0 0 10px 10px; padding:20px; ">
                                    <p style="font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:15px; line-height:1.7em; color:#ffffff;">After you click the button above, you'll be prompted to complete the following steps:</p>
                                    <ol style="font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:15px; line-height:1.6em;">
                                        <li>Enter new password</li>
                                        <li>Confirm your new password</li>
                                        <li>Hit Submit</li>
                                    </ol>
                                </td>
                            </tr>
                        </table>
                        <table cellspacing="0" cellpadding="8" align="center" style="margin-top:15px;">
                            <tr>
                                <td><a href="#"><img src="https://image.ibb.co/iLRqco/logo1_09.png" alt="" width="55px" style="-webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;"></a></td>
                                <td><a href="#"><img src="https://image.ibb.co/h42Vco/logo1_10.png" alt="" width="55px" style="-webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;"></a></td>
                                <td><a href="#"><img src="https://image.ibb.co/k2HwHo/logo1_11.png" alt="" width="55px" style="-webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;"></a></td>
                                <td><a href="#"><img src="https://image.ibb.co/fBcwHo/logo1_12.png" alt="" width="55px" style="-webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;"></a></td>
                                <td><a href="#"><img src="https://image.ibb.co/f4fGHo/logo1_13.png" alt="" width="55px" style="-webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); box-shadow:0 1px 3px rgba(0, 0, 0, 0.05); -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;"></a></td>
                            </tr>
                        </table>
                        <table cellspacing="0" cellpadding="0" width="100%" style="border-top:solid 1px #dddddd; margin-top:20px;">
                            <tr>
                                <td align="center" style="padding-top:20px;">
                                    <span style="font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:14px; color:#9793ae;">&copy; 2018 <a href="#" style="color:#5c17cf; text-decoration: underline;">ilmyst.com</a> <span style="color:#c2bfd4;">|</span> All rights reserved</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-top:30px;">
                                    <img src="https://image.ibb.co/m6D0Ep/ilmyst_logo1_04.png" height="80px" alt="" style="opacity: 0.3;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>