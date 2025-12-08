<!-- <!DOCTYPE html>
<html>

<body>
    <h2>A new user has registered</h2>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    <footer class="bg-gray-800 p-6 text-center">
        <a href="https://allyva.com/">
            <img src="https://allyva.com/images/logo.png" alt="AllyVa Company Logo"
                class="mx-auto h-12 rounded-lg shadow-md"
                onerror="this.onerror=null; this.src='https://placehold.co/180x60/D1FAE5/10B981?text=AllyVa';">
        </a>
    </footer>
</body>

</html> -->

<!DOCTYPE html>
<html>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" style="padding: 20px 10px;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0"
                    style="max-width: 600px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <tr>
                        <td style="padding: 40px 30px;">

                            <div style="text-align: center; margin-bottom: 25px;">
                                <!-- <img src="https://allyva.com/images/logo.png" alt="AllyVa Company Logo" width="120" style="max-width: 120px; height: auto;"> -->
                                <a href="https://allyva.com/">
                                    <img src="https://allyva.com/images/logo.png" alt="AllyVa Company Logo"
                                        class="mx-auto h-12 rounded-lg shadow-md"
                                        onerror="this.onerror=null; this.src='https://placehold.co/180x60/D1FAE5/10B981?text=AllyVa';">
                                </a>
                            </div>

                            <h1 style="color: #333333; font-size: 20px; margin-bottom: 30px; text-align: center;">A new
                                user has registered</h1>

                            <div
                                style="background-color: #f6fbff; padding: 20px; border-radius: 5px; border-left: 5px solid #288feb;">
                                <p style="font-size: 16px; line-height: 1.6; color: #333333; margin: 0 0 10px 0;">
                                    <strong>Full Name:</strong> {{ $user->name }}
                                </p>
                                <p style="font-size: 16px; line-height: 1.6; color: #333333; margin: 0 0 10px 0;">
                                    <strong>Email Address:</strong> <a href="mailto:[SUBMITTED_EMAIL]"
                                        style="color: #288feb; text-decoration: none;"> {{ $user->email }}</a>
                                </p>
                                <p style="font-size: 16px; line-height: 1.6; color: #333333; margin: 0 0 10px 0;">
                                    <strong>Phone Number:</strong> {{ $user->phone }}
                            </div>

                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>

</html>