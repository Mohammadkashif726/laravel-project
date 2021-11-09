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
        <td style="background-color:#f5f4fb; padding:10px 0 20px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px;" valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 700px;" align="center">
                <tr>
                    <td style="padding:10px 0;">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td>
                                    <img src="https://image.ibb.co/m6D0Ep/ilmyst_logo1_04.png" height="55px">
                                </td>
                                <td align="right">
                                    <a href="https://www.instagram.com/ilmyst_education" style="display: block; float: right; text-align: center; width: 42px; padding: 10px 0; background: #ffffff; margin-left: 8px; border-radius: 6px;">
                                        <img src="{{url('https://api.ilmyst.com/images/instagram.png')}}" alt="" width="20px" style="display: block; margin: 0 auto;"></a>
                                    <a href="https://www.linkedin.com/company/14435923" style="display: block; float: right; text-align: center; width: 42px; padding: 10px 0; background: #ffffff; margin-left: 8px; border-radius: 6px;">
                                        <img src="{{url('https://api.ilmyst.com/images/linkedin.png')}}" alt="" width="20px" style="display: block; margin: 0 auto;"></a>
                                    <a href="https://www.facebook.com/ilmyst" style="display: block; float: right; text-align: center; width: 42px; padding: 10px 0; background: #ffffff; margin-left: 8px; border-radius: 6px;">
                                        <img src="{{url('https://api.ilmyst.com/images/facebook.png')}}" alt="" width="20px" style="display: block; margin: 0 auto;"></a>
                                    <a href="https://www.youtube.com/channel/UCt41gK4Kdp0EPxwfivBeF0A?sub_confirmation=1" style="display: block; float: right; text-align: center; width: 42px; padding: 10px 0; background: #ffffff; margin-left: 8px; border-radius: 6px;">
                                        <img src="{{url('https://api.ilmyst.com/images/youtube.png')}}" alt="" width="20px" style="display: block; margin: 0 auto;"></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%" style="background: #ffffff; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;">
                            <tr>
                                <td style="background: url(https://api.ilmyst.com/images/vector-1.png) no-repeat bottom right; background-size: 65% auto; border-bottom: solid 1px #e5e4ed; font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; padding:30px 20px 70px 20px;">
                                    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 340px;">
                                        <tr>
                                            <td>
                                                <h3 style="color:#5c17cf; font-size:26px; font-weight: normal; margin:0 0 14px; padding:0;">You are just one step away to enroll!</h3>

                                                <p style="color:#5c5666; font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: normal; margin:0; padding:0; line-height: 1.6em;">
                                                    Please proceed to the payment using one of the following options
                                                </p>

                                                <h6 style="font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; color:#848294; font-size:15px; font-weight: normal; margin:25px 0 0; padding:0;">Order Reference: </h6>
                                                <p style="color:#5c17cf; font-family: Helvetica, Arial, sans-serif; font-size:22px; font-weight: normal; margin:0; padding:0; line-height: 1.6em;">
                                                    {{$order->order_reference}}
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 20px; border-bottom: solid 1px #e5e4ed;">
                                    <h3 style="font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; color:#5c17cf; font-size:20px; font-weight: normal; margin:0 0 12px; padding:0;">Payment Details</h3>
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td style="border-bottom: solid 1px #e5e4ed; padding: 8px 0; color:#848294; text-align: left;font-family: Helvetica, Arial, sans-serif;">Sub total: </td>
                                            <td style="border-bottom: solid 1px #e5e4ed; padding: 8px 0; color:#848294; text-align: left;font-family: Helvetica, Arial, sans-serif;">
                                                PKR <?php echo number_format($order->billing_subtotal, 0, '.', ',')?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: solid 1px #e5e4ed; padding: 8px 0; color:#379e4b; text-align: left;font-family: Helvetica, Arial, sans-serif;">Discount: </td>
                                            <td style="border-bottom: solid 1px #e5e4ed; padding: 8px 0; color:#379e4b; text-align: left;font-family: Helvetica, Arial, sans-serif;">PKR {{$order->billing_discount . '%'}} &nbsp;<span style="color: #e5e4ed;">|</span>&nbsp;<span>Saving Rs. <?php echo number_format($order->billing_subtotal-$order->billing_total)?></span></td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 8px 0; color:#5c17cf; font-weight: bold; font-size: 18px; text-align: left;font-family: Helvetica, Arial, sans-serif;">Total: </td>
                                            <td style=" padding: 8px 0; color:#5c17cf; font-weight: bold; font-size: 18px; text-align: left;font-family: Helvetica, Arial, sans-serif;">PKR <?php echo number_format($order->billing_total, 0, '.', ',')?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 20px;">
                                    <h3 style="font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; color:#5c17cf; font-size:20px; font-weight: normal; margin:0 0 12px; padding:0;">Payment options</h3>
                                    @foreach($payment_options as $payment_option)
                                        <h3 style="font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; color:#5c17cf; font-size:16px; font-weight: normal; margin:0; padding:0 0 3px;">{{$payment_option->name}}</h3>
                                        <p style="color:#5c5666; font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: normal; margin:0 0 8px; padding:0 0 8px; line-height: 1.6em;"><?php echo $payment_option->description ?></p>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 20px; border-top: solid 1px #e5e4ed;">
                                    <h3 style="font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif; color:#5c17cf; font-size:20px; font-weight: normal; margin:0; padding:0;">What's Next?</h3>
                                    <p style="color:#5c5666; font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: normal; margin:0; padding:7px 0; line-height: 1.6em;">Once you are done with the payment, please send us confirmation email at <a href="mailto:payments@ilmyst.com" style="color: #5c17cf;">payments@ilmyst.com</a> along with order reference and receipt <strong>{{$order->order_reference}}</strong> or you may contact us using WhatsApp or call (<a href="tel:+923452975338" style="color: #5c17cf;">+92 345 2975338</a>) to inform us. Your enrollment will be successful immediately.</p>
                                </td>
                            </tr>
                        </table>

                        <table cellspacing="0" cellpadding="0" width="100%" style="border-top:solid 1px #dddddd; margin-top:20px;">
                            <tr>
                                <td align="center" style="padding-top:20px;">
                                    <span style="font-family: Arial, sans-serif, Arial Rounded MT Bold, Helvetica Rounded; font-size:14px; color:#9793ae;">&copy; <?php echo date("Y"); ?> <a href="#" style="color:#5c17cf; text-decoration: underline;">ilmyst.com</a> <span style="color:#c2bfd4;">|</span> All rights reserved</span>
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