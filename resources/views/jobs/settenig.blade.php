<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Settings Page</title>
   <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
  <link href="{{ asset('css/adminlte.css.map') }}" rel="stylesheet">
  <link href="{{ asset('css/alt/adminlte.components.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      margin-bottom: 80px;
    }

    .settings-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 15px 10px;
    }

    .settings-title {
      font-weight: bold;
      font-size: 20px;
      color: #009688;
    }

    .section-title {
      padding: 0 15px;
      font-weight: 600;
      margin-top: 10px;
      color: #444;
    }

    .settings-item {
      background-color: #eaf2f3;
      border-radius: 10px;
      padding: 15px;
      margin: 10px 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: 0.3s ease;
    }

    .settings-item:hover {
      background-color: #dceef0;
      cursor: pointer;
    }

    .settings-icon {
      margin-right: 10px;
      color: #009688;
    }

    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      height: 60px;
      background-color:#48A7A5;
      display: flex;
      justify-content: space-around;
      align-items: center;
      color: white;
      font-size: 14px;
      z-index: 1000;
    }

    .nav-item i {
      display: block;
      font-size: 20px;
    }

    .active-tab {
      border-top: 3px solid white;
      padding-top: 5px;
    }

    .modal-body img {
      width: 24px;
      height: 16px;
      margin-right: 8px;
    }

    .language-option {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
    }

    .switch-label {
      display: flex;
      flex-direction: column;
    }
     .nav-item i {
      display: block;
      font-size: 20px;
      color: white;
    }


    /* Modal Bottom Style */
    .modal-bottom .modal-dialog {
      position: fixed;
      bottom: 0;
      margin: 0;
      width: 100%;
      max-width: 100%;
    }

    .modal-bottom .modal-content {
      border-radius: 20px 20px 0 0;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
 @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if(session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif
  <div class="settings-header">
    <div class="settings-title">Setting</div>
    <i class="fas fa-bell fa-lg text-secondary"></i>
  </div>
  
 

  <div class="section-title">General Settings</div>
<a href="{{route('jobs.index')}}" class="text-decoration-none text-dark">
  <div class="settings-item" data-bs-toggle="modal" data-bs-target="#jobModal">
    <div><i class="fas fa-flag settings-icon"></i> Job Preference Country</div>
    <i class="fas fa-chevron-right"></i>
  </div>
</a>
<a href="{{ url('f') }}" class="text-decoration-none text-dark">
  <div class="settings-item">
    <div><i class="fas fa-question-circle settings-icon"></i> FAQs</div>
    <i class="fas fa-chevron-right"></i>
  </div>
</a>

  <a href="{{route('feedback.form')}}" class="text-decoration-none text-dark">
    <div class="settings-item">
      <div><i class="fas fa-headset settings-icon"></i> Help & Feedback</div>
      <i class="fas fa-chevron-right"></i>
    </div>
  </a>

  <div class="settings-item" data-bs-toggle="modal" data-bs-target="#privacyModal">
    <div><i class="fas fa-lock settings-icon"></i> Privacy Policy</div>
    <i class="fas fa-chevron-right"></i>
  </div>

   
<div class="settings-item" data-bs-toggle="modal" data-bs-target="#languageModal" style="cursor: pointer;">
  <div><i class="fas fa-globe settings-icon"></i> Language Preference</div>
  <i class="fas fa-chevron-right"></i>
</div>

<div class="modal fade modal-bottom" id="languageModal" tabindex="-1">
  <div class="modal-dialog modal-fullscreen-sm-down m-0">
    <div class="modal-content rounded-top-4">
      <div class="modal-header">
        <h5 class="modal-title">Language Preference</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
       <form method="POST" action="{{ route('settings.language.update') }}">
    @csrf
          <div class="language-option d-flex justify-content-between align-items-center mb-3">
            <div><img src="https://flagcdn.com/w40/sa.png" alt="Arabic" /> العربية</div>
            <input type="radio" name="language" value="ar">
          </div>
          <div class="language-option d-flex justify-content-between align-items-center">
            <div><img src="https://flagcdn.com/w40/gb.png" alt="English" /> English</div>
            <input type="radio" name="language" value="en">
          </div>
          <button class="btn btn-primary w-100 mt-3" type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Notification Settings -->
<div class="settings-item" data-bs-toggle="modal" data-bs-target="#notificationModal" style="cursor: pointer;">
  <div><i class="fas fa-bell settings-icon"></i> Notification Settings</div>
  <i class="fas fa-chevron-right"></i>
</div>
 

</div>


    

</div>

 <div class="bottom-nav" >
    <div class="nav-item   "> <a href="{{route('jobs.index')}}"><i class="fas fa-briefcase" style="position: relative; left:6px"></i> </a> jobs</div>
    <div style="position: relative; left:120px" class="nav-item"> <a href="{{route('jobs.saved')}}"><i class="fas fa-bookmark" style="position: relative; left:18px"></i></a> Bookmark</div>
    <div  style="position: relative; left:170px" class="nav-item active-tab "> <a href="{{route('settings.show')}}"><i class="fas fa-cog" style="position: relative; left:10px"></i> <a>settings</div>
    <div class="nav-item ">  <a href="{{route('company.page')}}"><i class="fas fa-user" style="position: relative; left:7px"></i></a>   Profile</div>
  </div>
  <!-- Language Preference Modal -->
 


  <!-- Privacy Policy Modal -->
  <div class="modal fade modal-bottom" id="privacyModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen-sm-down m-0">
      <div class="modal-content rounded-top-4">
        <div class="modal-header">
          <h5 class="modal-title">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born...</p>
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born...</p>
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born...</p>
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Notification Modal -->


<!-- Notification Modal -->
<div class="modal fade modal-bottom" id="notificationModal" tabindex="-1">
  <div class="modal-dialog modal-fullscreen-sm-down m-0">
    <div class="modal-content rounded-top-4">
      <div class="modal-header">
        <h5 class="modal-title">Notification Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('settings.notifications.update') }}" class="d-flex justify-content-between align-items-center">
          @csrf
          <div class="switch-label">
            <strong>General Push Notifications</strong>
            <small class="text-muted">Receive general updates and notifications</small>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="enabled" id="notifSwitch" {{ $user->notifications_enabled ? 'checked' : '' }}>
          </div>
          <button type="submit" class="btn btn-primary ms-2">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
