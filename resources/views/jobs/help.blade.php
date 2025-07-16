<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Help & Feedback</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <style>
    body {
      background-color: #f5f5f5;
      padding: 30px;
    }
    .form-section {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .upload-box {
      border: 2px dashed #ccc;
      text-align: center;
      padding: 20px;
      border-radius: 10px;
      color: #888;
      margin-bottom: 20px;
    }
    .btn-submit {
      background-color: #009688;
      color: white;
      width: 100%;
    }
    .j {
        color: #009688;
    }

    .dev-header {
      background-color: #48A7A5;
      color: white;
      padding: 10px 20px;
      border-bottom-left-radius: 30px;
      border-bottom-right-radius: 30px;
      font-weight: bold;
      font-size: 1.25rem;
      position: relative;
      bottom: 30px;
    }

  </style>
</head>
<body>

    <div class="dev-header">
  <a href="{{route('jobs.index')}}" style="color:white; text-decoration:none">&larr; Help & Feedback</a>
</div>
  <div class="form-section">
    
    <p class="text-muted text-center small">Please explain your issue or feedback below. We will get back to you shortly.</p>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

  <form method="POST" action="{{ route('feedback.submit') }}" enctype="multipart/form-data">

      @csrf
      <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="subject" placeholder="Subject">
      </div>
      <div class="mb-3">
        <textarea class="form-control" name="details" rows="4" placeholder="Details"></textarea>
      </div>
      <div class="mb-3">
    <label class="form-label">Upload The Offer Image/Video (up to 5 files)</label>
    <input type="file" name="attachments[]" class="form-control" multiple accept="image/*,video/*">
</div>

      <button type="submit" class="btn btn-submit">Send</button>
    </form>
  </div>

</body>
</html>
