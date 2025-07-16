<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $company->name ?? 'PURE for IT Solutions' }}</title>

  {{-- الروابط تبعت التنسيقات نفسها --}}
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
  <link href="{{ asset('css/adminlte.css.map') }}" rel="stylesheet">
  <link href="{{ asset('css/alt/adminlte.components.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  {{-- نفس الستايل --}}
 <style>
    body {
      background-color: white;
      margin: 0;
    }

    .banner-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .company-info {
      background-color: #fff;
      padding: 30px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .label {
      font-weight: 600;
      color: #00a6a6;
    }

    .info-box {
      background-color: #f0f4f7;
      padding: 15px 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .flag-icon {
      width: 24px;
      height: 16px;
      object-fit: cover;
      margin-right: 5px;
    }

    .read-more {
      color: #007bff;
      cursor: pointer;
      font-weight: 500;
    }

    .section-title {
      margin-top: 40px;
      font-weight: bold;
      color: #333;
    }

    @media (max-width: 768px) {
      .company-info {
        padding: 20px;
      }
    }

    
.blue{
  background-color:#48A7A5 ;
  width: 100%;
  height: 70px;
  position: absolute;
  display: flex;



}

    .gw{
width: 20%;
height: 35px;
background-color:#A748A1;
border-bottom-right-radius: 50px;
border-bottom-left-radius: 50px;
position: absolute;
left: 20px;
color: white;
}
    .nav{
        width: 100%;
        height:40px ;
       display: flex;;
       background-color: white;
      
    }
    .text{
        color: #48A7A5;
        font-size: 40px;
        font-weight: bolder;
        padding-left:15px;
        font-family:Arial, Helvetica, sans-serif;
    }
    .nav-icon{
        color:#A0B6B4;
     font-size: 20px;
     padding-left:92% ;
 position: absolute;
 top: 21px;
    }
    .nav-link{
       color:#A0B6B4;
     font-size: x-large;
     padding-left:90%  ;
 position: absolute;
 top: 7px;
    }
  .n{
     color:#A0B6B4;
     font-size: x-large;
     padding-left:94%;
 position: absolute;
 top: 20px;
  }
 
  .dev1{
  background-color:#f7f7f7c4;
  width: 94%;
  height: 400px;
position: relative;
top: 50px;
border-radius: 5px;
display: flex !important;


  }
  .d1{
    width: 450px;
    height: 70px;
   background-color:#FFFFFF;
position: absolute;
top:  20px;
left: 50px;
border-radius: 5px;
box-shadow: 0 0 1px;
  }
   .d2{
    width: 450px;
    height: 70px;
  background-color:#FFFFFF;
position: absolute;
top:  100px;
left: 50px;
border-radius: 5px;
box-shadow: 0 0 1px;
  }


   .d3{
    width: 450px;
    height: 70px;
  background-color:#FFFFFF;
position: absolute;
top:  20px;
left: 550px;
border-radius: 5px;
box-shadow: 0 0 1px;
  }
   .d4{
    width: 450px;
    height: 70px;
    background-color:#FFFFFF;
position: absolute;
top:  100px;
left: 550px;
border-radius: 5px;
box-shadow: 0 0 1px;
  }
  .text2{
    color: #A0B6B4;
    font-size: 25px;
   position: relative;
   top: 30px;
  }
  h3{
    color:  #48A7A5;
    position: relative;
    top: 15px;
  }
  h6{
    color: #000 !important;
    padding-left: 70px;
    padding-top: 20px;
    
  }

.dd{
  position: absolute;
  top: 115px;
}
#i{
  font-size: 20px;
     color: #00000091;
     position: absolute;
     top: 30px;
}
h5{
  padding-top: 60px;
  font-size: 15px;
  padding-left: 15px;
  font-family:Arial, Helvetica, sans-serif
}
.hj{
  width: 40px;
  height: 35px;
  position: absolute;
  top: 85px;
  left: 80px;
}


.bb{
  padding-top:90px;
  padding-right:1px;
  position: absolute;
  left: 130px;
  font-weight: 200;
}
#v{
    font-size: 20px;
     color: #00000091;
     position: absolute;
     top: 60px;
     left: 950px;
     
}
#v2{
    font-size: 20px;
     color: #00000091;
     position: absolute;
     top: 60px;
     left: 900px;
    
}
.vv1{
  width: 100px;
  height: 50px;
  background-color: black;
  position: absolute;
}

.dig{
  position: absolute;
  left: 60px;
top: 93px;


}
#u{
  color:black;
}
.e{
  font-size: xx-small;
}
.big{
  display: flex;
  width: 160px;
  height: 15%;
  background-color:#F7F7F7;
position: absolute;
left: 894px;

}
.gw{
width: 20%;
height: 60%;
background-color:#A748A1;
border-bottom-right-radius: 50px;
border-bottom-left-radius: 50px;
position: absolute;
left: 20px;
color: white;
}
.gw2{
width: 20%;
height: 60%;
background-color:#C9C92F;
border-bottom-right-radius: 50px;
border-bottom-left-radius: 50px;
position: absolute;
left: 60px;
color: white;

}
.gw3{
width: 20%;
height: 90%;
background-color:#48A7A5;
border-bottom-right-radius: 50px;
border-bottom-left-radius: 50px;
position: absolute;
left: 105px;
color: white;

}
.fa-star{
  position: absolute;
  left: 7px;
  top: 5px;
  color: white;
}
.text3{
  width: 90%;
  height: 10%;
  background-color: #F7F7F7;
  font-size:small;
  position: absolute;
top: 294px;
left: 45px;

}
.div{
display: flex;
position: absolute;
top: 40px;
margin-left: 2px;
}
#i1{
  position: absolute;
  left: 20px;
top:25px ;
  font-size: x-large;
color:  #48A7A5;
}
.ht{
color: #2C3E50; 
position: absolute; 
left: 40px;
 top: -2px;

 font-weight: normal;

}
.ht1{
color: black; 
position: absolute; 
left: 35px;
 top: 6px;
 font-family: Arial, Helvetica, sans-serif;
 font-size: smaller;
 font-weight: normal;
 

}
.ht3{
  color: #2C3E50; 
position: absolute; 
left: 40px;
 top: -2px;
font-size: 20px;
 font-weight: normal;

}
#b1{
color: white;
font-size: x-large;
position: absolute;
left: 200px;
top: 20px;

}
#b2{
color: white;
  font-size: x-large;
  position: absolute;
left: 540px;
top: 20px;
}
#b3{
color: white;
  font-size: x-large;
  position: absolute;
left: 900px;
top: 20px;
}
#b4{
color: white;
  font-size: x-large;
  position: absolute;
left: 1200px;
top: 20px;
}
.h2{
  width: 45px;
  height: 40px;
  position: absolute;
  top:275px;
  left: 710px;

  border-radius: 30px;
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
  box-shadow: 0 -4px 12px rgba(0,0,0,0.15);
  max-height: 40vh; /* تحدد ارتفاع مناسب عشان ما يغطي كل الشاشة */
  overflow-y: auto; /* للسماح بالتمرير داخل المودال إذا المحتوى طويل */
  z-index: 1055; /* لتكون فوق الخلفية */
}
.modal-content.bottom-sheet2 {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  background-color: #fff;
  animation: slideUp 0.3s ease-out;
  box-shadow: 0 -4px 12px rgba(0,0,0,0.15);
  max-height: 30vh; /* تحدد ارتفاع مناسب عشان ما يغطي كل الشاشة */
  overflow-y: auto; /* للسماح بالتمرير داخل المودال إذا المحتوى طويل */
  z-index: 1055; /* لتكون فوق الخلفية */
}




@keyframes slideUp {
  from { transform: translateY(100%); }
  to { transform: translateY(0); }
}

/* لمنع مودال البوتستراب الأساسي من الإظهار عشوائياً */
.modal.fade .modal-dialog {
  transform: translate(0, 0) !important;
  transition: none !important;

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
 

  </style>
</head>
<body>

  <!-- Banner Image -->

  <div class="dev-header">
  <a href="{{route('jobs.index')}}" style="color:white; text-decoration:none">&larr; Back</a>
</div>

  <section>
    <img src="{{ asset('img/technology-code-coding-computer.jpg') }}" class="banner-img" alt="Banner">
    <img class="h2" src="{{ asset('img/image.png') }}">
  </section>

<!-- زر لفتح المودال -->

<!-- مودال سفلي بتصميم مشابه للصورة -->





  <!-- Company Info Section -->
  <section class="company-info">
    <div class="container">
      <div class="text-center ">
        <a style="h2;  position: relative;
      left: -30px;"   data-bs-toggle="modal" data-bs-target="#actionModal" >{{ $company->name ?? 'PURE for IT Solutions' }}</a>

      <!-- مودال سفلي بتصميم bottom sheet مثل المودال الثاني -->
<div class="modal fade" id="actionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog  modal-fullscreen modal-dialog-centered">
   

    <div class="modal-content bottom-sheet p-4">

      <div class="text-start">
        <!-- العنوان -->
        <h6 class="text-success mb-4 fw-semibold">Take Action</h6>

        <!-- العناصر -->
        <div class="list-group">

          <!-- اتصال -->
          <a href="tel:123456789" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mb-2 rounded shadow-sm border-0" style="background-color: #f8f9fa;">
            <div class="d-flex align-items-center">
              <img src="https://img.icons8.com/color/28/000000/phone.png" class="me-2" />
              <span>Call</span>
            </div>
            <span>&rsaquo;</span>
          </a>

          <!-- SMS -->
          <a href="sms:123456789" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mb-2 rounded shadow-sm border-0" style="background-color: #f8f9fa;">
            <div class="d-flex align-items-center">
              <img src="https://img.icons8.com/color/28/000000/sms.png" class="me-2" />
              <span>Send SMS</span>
            </div>
            <span>&rsaquo;</span>
          </a>

          <!-- واتساب -->
          <a href="https://web.whatsapp.com" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center rounded shadow-sm border-0" style="background-color: #f8f9fa;">
            <div class="d-flex align-items-center">
              <img src="https://img.icons8.com/color/28/000000/whatsapp.png" class="me-2" />
              <span>WhatsApp</span>
            </div>
            <span>&rsaquo;</span>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>


        <p class="text-muted" style=" position: relative; left: -30px; ">({{ $company->registration_number ?? '1012416' }})</p>
      </div>

      <div class="info-box">
        <span class="label">Type of Business</span><br>
        {{ $company->business_type ?? 'Web Development' }}
      </div>

      <div class="info-box">
        <span class="label">No. of Employees</span><br>
        {{ $company->employees_count ?? '1500+' }}
      </div>

      <div class="info-box">
        <span class="label">Country</span><br>
        {{ $company->country }}
      </div>

      <div class="mt-4">
  <p class="label">BIO</p>
  <div class="info-box">
    <p id="bio-short">
      {{ Str::limit($company->bio, 100, '...') }}
     <a href="#" data-bs-toggle="modal" data-bs-target="#bioModal" style="text-decoration: none; color: #00a6a6;">
  Read more
</a>

    </p>
  </div>
</div>
<div class="modal fade" id="bioModal" tabindex="-1" aria-labelledby="bioModalLabel" aria-hidden="true">
 <div class="modal-dialog  modal-fullscreen modal-dialog-centered">
    <div class="modal-content bottom-sheet2">
      <div class="modal-header" style="height: 13vh">
        <h5 class="modal-title" style="color: #00a6a6;font-weight: 500 ; font-size:30px;" id="bioModalLabel"> bio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <p>{{ $company->bio }}</p>
      </div>
    </div>
  </div>
</div>

    </div>
  </section>

  {{-- عرض الوظائف --}}
  <div class="container" style="background-color: white po">
    <h3>Recent jobs</h3>


    @foreach($projects as $job)
    <div class="dev1" style="border: #000">
      <div class="big">
        <div class="gw"><i class="far fa-star"></i></div>
        <div class="gw2"><i class="far fa-star"></i></div>
        <div class="gw3"><i class="far fa-star"></i></div>
      </div>

      <h6><i id="i" class="fas fa-globe"> 30min </i></h6>
      <h5>{{ $job->title }}</h5>
      <img class="hj" src="{{ asset('img/image.png') }}">
      <p class="bb">{{ $job->name ?? 'PURE for IT Solutions' }}</p>

      <div class="dig">
        <h6 class="e"><i id="u" class="fas fa-eye"></i>({{ $job->views ?? '0' }})</h6>
      </div>

    @auth
    <form method="POST" action="{{ route('jobs.save', $job->id) }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
            <i id="v" class="far fa-bookmark"></i>
        </button>
    </form>
@endauth
      <i id="v2" class="fas fa-share"></i>

      <div class="dd">
        <div class="d1">
          <i class="fas fa-book mr-1" id="i1">
            <p class="ht">{{ $job->category ?? 'Engineering' }}</p>
          </i>
        </div>
        <div class="d2">
          <i class="fas fa-clock bg-gray" id="i1">
            <p class="ht">{{ $job->work_experience ?? '3year' }}</p>
          </i>
        </div>
        <div class="d3">
          <span style="font-weight: bolder; font-size: x-large; position: absolute; left: 20px; top: 16px; color: #48A7A5;">
            $ <p class="ht1">{{ $job->salary_range ?? '100$-250$' }}</p>
          </span>
        </div>
        <div class="d4">
          <i class="far fa-calendar-alt" id="i1">
            <p class="ht3">3daysrem</p>
          </i>
        </div>
      </div>

      <div class="text3">
        <p>{{ $job->description }}</p>

        <br>
        <div class="div">
        @foreach($job->tags ?? [] as $tag)
          <button class="btn" style="background-color: #DBECEC; color: #48A7A5; width: 250px;">{{ $tag }}</button>
          @endforeach
        </div>

        <p style="position: absolute; bottom: -74px; left: 10px; font-size: 13px;">Expire In 14 days</p>
      </div>
    </div>
    <br><br>
    @endforeach
  </div>
  </div>
  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
