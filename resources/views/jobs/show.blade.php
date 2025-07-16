<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
  <link href="{{ asset('css/adminlte.css.map') }}" rel="stylesheet">
  <link href="{{ asset('css/alt/adminlte.components.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />


 <style>
    body {
      background-color: #f3f4f6;
    }
    .skill-badge {
      background-color: #b2dfdb;
      color: #48A7A5;
      padding: 0.5rem 1rem;
      border-radius: 2rem;
      font-weight: 500;
      font-size: 1rem;
      margin: 0.25rem;
      display: inline-block;
    }
    .textj { color: #48A7A5; }
    .custom-box {
      background-color: #f7f7f7;
      border-radius: 20px;
      padding: 15px 20px;
      margin-bottom: 20px;
    }
    .dev-header {
      background-color: #48A7A5;
      color: white;
      padding: 10px 20px;
      border-bottom-left-radius: 30px;
      border-bottom-right-radius: 30px;
      font-weight: bold;
      font-size: 1.25rem;
    }
    .dev1 {
      background-color: #F7F7F7;
      width: 94%;
      height: 200px;
      position: relative;
      top: 50px;
      border-radius: 5px;
      display: flex !important;
    }
    .modal-content.bottom-sheet {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      background-color: #fff;
      animation: slideUp 0.3s ease-out;
    }
    @keyframes slideUp {
      from { transform: translateY(100%); }
      to { transform: translateY(0); }
    }

</style>
</head>

<body>
<div class="dev-header">
  <a href="{{route('jobs.index')}}" style="color:white; text-decoration:none">&larr; Back</a>
</div>

<div class="container">
 <div class="dev1 shadow-sm p-3 rounded d-flex align-items-center gap-4 mb-4">

  <div style="position: absolute; top: 10px; right: 20px; display: flex; gap: 8px;">
      <div style="width: 28px; height: 50px; background-color: #A748A1; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; display: flex; justify-content: center; align-items: center; color: white;">
        <i class="far fa-star"></i>
      </div>
      <div style="width: 28px; height: 50px; background-color: #C9C92F; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; display: flex; justify-content: center; align-items: center; color: white;">
        <i class="far fa-star"></i>
      </div>
      <div style="width: 28px; height: 50px; background-color: #48A7A5; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; display: flex; justify-content: center; align-items: center; color: white;">
        <i class="far fa-star"></i>
      </div>
    </div>
  <img src="{{ asset('img/image.png') }}" alt="Job Image" class="rounded-circle" style="width: 70px; height: 70px; object-fit: cover;">
  
  <div style="flex-grow: 1;">
    <h5 class="fw-bold mb-1 textj">{{ $job->title }}</h5>
    <p class="text-muted mb-1">{{ $job->company_name ?? 'PURE for IT Solutions' }}</p>
    <small class="text-muted">
      <i class="fas fa-eye me-1"></i> {{ $job->views ?? 0 }} views
      <span  style="position: absolute; top:30px ; left:40px; font-size:15px;" class="ms-3"><i class="fas fa-globe me-1"></i>{{ $job->posted_time ?? '30min' }}</span>

      <span><i class="fas fa-globe"></i> </span>

    </small>
  </div>

  <div class="d-flex flex-column align-items-center ms-auto">
    <i class="far fa-bookmark text-muted fs-5 mb-2" style="cursor:pointer;"></i>
    <i class="fas fa-share text-muted fs-5" data-bs-toggle="modal" data-bs-target="#shareModal" style="cursor:pointer;"></i>
  </div>
</div>


  <!-- Bottom Sheet Modal -->
  <div class="modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
      <div class="modal-content bottom-sheet p-4">
        <div class="text-center">
          <h6 class="text-muted mb-3">Share via</h6>
          <div class="d-flex justify-content-around">
            <div><a href="#"><img src="https://img.icons8.com/color/48/000000/gmail.png" /></a><p class="small mt-1">Gmail</p></div>
            <div><a href="#"><img src="https://img.icons8.com/color/48/000000/facebook.png" /></a><p class="small mt-1">Facebook</p></div>
            <div><a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-messenger.png" /></a><p class="small mt-1">Messenger</p></div>
            <div><a href="#"><img src="https://img.icons8.com/color/48/000000/whatsapp.png" /></a><p class="small mt-1">WhatsApp</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-5">
    <h4 class="mb-4 fw-bold">Details</h4>
    <div class="custom-box d-flex justify-content-between">
      <span class="fw-semibold">Job Type</span>
      <span>{{ $job->job_type ?? 'Full-time' }}</span>
    </div>
    <div class="custom-box d-flex justify-content-between">
      <span class="fw-semibold">Work Field</span>
      <span>{{ $job->category ?? 'Information Technology' }}</span>
    </div>
    <div class="custom-box d-flex justify-content-between">
      <span class="fw-semibold">Country of Employment</span>
      <span>{{ $job->work_place ?? 'Kuwait' }}</span>
    </div>
    <div class="custom-box d-flex justify-content-between">
      <span class="fw-semibold">Salary/Wage</span>
      <span>{{ $job->salary_range ?? 'Negotiable' }}</span>
    </div>
    <div class="custom-box d-flex justify-content-between">
      <span class="fw-semibold">Required Experience</span>
      <span>{{ $job->work_experience ?? '1-2 Years' }}</span>
    </div>

    <h4 class="fw-bold mt-5 mb-3">Skills</h4>
    <div class="mb-4">
 
   @foreach($job->tags ?? [] as $tag)
      <span class="skill-badge">{{ $tag }}</span>
   @endforeach
</div>




    <h4 class="fw-bold mb-3">Job Description</h4>
    <div class="bg-light p-4 rounded-4 mb-5">
      <p class="mb-2">{{ $job->description }}</p>
    </div>

    <h4 class="fw-bold mb-3">Candidate Requirements</h4>
    <ul class="list-unstyled fs-5">
      <li><strong class="textj">Nationality:</strong> {{ $job->nationality ?? 'Any' }}</li>
      <li><strong class="textj">Country Residence:</strong> {{ $job->residency_country ?? 'Any' }}</li>
      <li><strong class="textj">Gender:</strong> {{ $job->gender_preference ?? 'All' }}</li>
    </ul>

    <div class="mt-5">
     
  <div class="container mt-5">
 <button type="button" class="btn btn-lg w-100 text-white" style="background-color: #009688;" data-bs-toggle="modal" data-bs-target="#authModal">
  Apply
</button>
  </div>


  


<!-- مودال سفلي شبيه بالصورة -->
<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
    <div class="modal-content bottom-sheet p-4" style="border-radius: 1.5rem 1.5rem 0 0;">
      <div class="text-center">

        <!-- العنوان -->
        <h6 class="text-success mb-2" style="font-weight: 600;">NOT Registered</h6>

        <!-- الوصف -->
        <p class="text-muted mb-4">You Are not a member Yet, Do you have an account?</p>

        <!-- أزرار -->
        <div class="d-grid gap-2">
          <a href="{{ route('login') }}" class="btn text-white" style="background-color: #009688;">LOGIN</a>
          <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
        </div>
      </div>
    </div>
  </div>
</div>

    
  </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

