<!DOCTYPE html>
<html>

<body style="font-family: Arial, sans-serif;">
  <h2>A site visitor just submitted an Inquiry</h2>

  <p><strong>Name:</strong> {{ $data['full_name'] }}</p>
  <p><strong>Email:</strong> {{ $data['email'] }}</p>
  @if(!empty($data['phone']))
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
  @endif
  @if(!empty($data['company_name']))
    <p><strong>Company Name:</strong> {{ $data['company_name'] }}</p>
  @endif

  <p><strong>Project Description:</strong></p>
  <p style="white-space: pre-wrap;">{{ $data['project_desc'] }}</p>
  <!-- 
    <hr>
    <p style="font-size: 13px; color: #888;">Sent from {{ config('app.name') }}</p> -->
</body>

</html>