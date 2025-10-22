<!DOCTYPE html>
<html>
  <body style="font-family: Arial, sans-serif;">
    <h2>📩 New Contact Form Submission</h2>

    <p><strong>Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    @if(!empty($data['phone']))
      <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    @endif
    @if(!empty($data['company_name']))
      <p><strong>Subject:</strong> {{ $data['company_name'] }}</p>
    @endif

    <p><strong>Message:</strong></p>
    <p style="white-space: pre-wrap;">{{ $data['project_desc'] }}</p>

    <hr>
    <p style="font-size: 13px; color: #888;">Sent from {{ config('app.name') }}</p>
  </body>
</html>
