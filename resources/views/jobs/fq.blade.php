<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FAQs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
  <link href="{{ asset('css/adminlte.css.map') }}" rel="stylesheet">
  <link href="{{ asset('css/alt/adminlte.components.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <style>
    body {
      background-color: #f8f9fa;
      padding-bottom: 80px;
    }

    .header {
      background-color: #009688;
      color: white;
      padding: 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .header h5 {
      margin: 0;
      font-weight: bold;
      font-size: 18px;
    }

    .faq-item {
      background-color: #ffffff;
      padding: 15px;
      margin: 10px 15px;
      border-radius: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s;
    }

    .faq-item:hover {
      background-color: #f0f0f0;
      cursor: pointer;
    }

    .faq-question {
      font-weight: 500;
    }

    .back-icon {
      font-size: 18px;
      color: white;
      cursor: pointer;
    }

    /* Bottom Sheet Modal */
    .modal.bottom-sheet .modal-dialog {
      position: fixed;
      bottom: 0;
      left: 0;
      margin: 0;
      width: 100%;
      max-width: 100%;
      transition: transform 0.3s ease-out;
    }

    .modal.bottom-sheet .modal-content {
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      padding: 20px;
    }

    .modal.fade.bottom-sheet .modal-dialog {
      transform: translateY(100%);
    }

    .modal.fade.bottom-sheet.show .modal-dialog {
      transform: translateY(0);
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

  
  <!-- Header -->
  <div class="header">
    <div class="back-icon" onclick="history.back()">
      <i class="fas fa-arrow-left"></i>
    </div>
    <h5 class="text-center flex-grow-1">FAQs</h5>
    <div style="width: 24px;"></div>
  </div>

  <!-- FAQ Items -->
  <div class="faq-item" data-bs-toggle="modal" data-bs-target="#fursaModal">
    <div class="faq-question">What is Fursa</div>
    <i class="fas fa-chevron-right text-muted"></i>
  </div>

  <div class="faq-item">
    <div class="faq-question">What is Benefit</div>
    <i class="fas fa-chevron-right text-muted"></i>
  </div>

  <div class="faq-item">
    <div class="faq-question">How do post on fursa platform by using business account</div>
    <i class="fas fa-chevron-right text-muted"></i>
  </div>

  <!-- Modal for What is Fursa -->
  <div class="modal fade bottom-sheet" id="fursaModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">What is Fursa?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          Fursa is a platform that connects job seekers with employers and business opportunities in a fast and easy way.
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
