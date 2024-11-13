<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Service!</title>
</head>
<body style="width: 100% !important; height: 100% !important; margin: 0 !important; padding: 0 !important; font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <center>
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border: 1px solid #ddd;">
            <tr>
                <td style="padding: 20px; text-align: left;">
                    <h1 style="font-size: 24px; color: #333; margin: 0 0 10px;">Hello, {{ $user->name }}!</h1>
                    <p style="font-size: 16px; color: #666; line-height: 1.5; margin: 0 0 10px;">
                        Thank you for registering with us. We're thrilled to have you on board!
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.5; margin: 0 0 10px;">
                        Feel free to explore our services and let us know if you have any questions.
                    </p>
                    <p style="font-size: 16px; color: #666; line-height: 1.5; margin: 0 0 10px;">
                        Best regards,<br>Your Company Team
                    </p>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 12px; color: #999; margin-top: 20px;">
                    <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
                </td>
            </tr>
        </table>
    </center>

</body>
</html>