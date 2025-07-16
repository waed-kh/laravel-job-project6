
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>

  <!-- CSS الأصلي -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
  <link href="{{ asset('css/adminlte.css.map') }}" rel="stylesheet">
  <link href="{{ asset('css/alt/adminlte.components.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
<style>


.bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      height: 60px;
      background-color: #48A7A5;
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
      color: white;
    }

    .active-tab {
      border-top: 3px solid white;
      padding-top: 5px;
    }

.blue {
  background-color: #48A7A5;
  width: 100%;
  height: 70px;
  position: fixed;   /* بدل absolute */
  bottom: 0;         /* ثبّته بأسفل الشاشة */
  left: 0;           /* تأكد يكون بمحاذاة اليسار */
  display: flex;
  z-index: 9999;     /* عشان يظل فوق كل العناصر */
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
  background-color:#F7F7F7;
  width: 85%;
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
{
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
  gap: 40px;
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
#v{
    font-size: 20px;
     color: #00000091;
     position: absolute;
     top: 60px;
     left: 950px;
     
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

       <div class="nav">
        <p class="text">Bookmarks</p>
          <i class="n fas fa-comments"></i>
           <i class="nav-icon fas fa-search"></i>
             <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
          </a>
         
    </div>
  
    <div class="container">
        <p class="text2">Wolcome</p>
        <h3>Mr/Mam Visitor</h3>


</div>
<br>
<br>

    

    @foreach ($jobs as $job)
    <div class="container">
      <div class="dev1">
        <div class="big">
          @foreach(['#A748A1', '#C9C92F', '#48A7A5'] as $color)
            <div style="width: 20%; height: 60%; background-color: {{ $color }}; border-bottom-right-radius: 50px; border-bottom-left-radius: 50px; position: absolute; left: {{ 20 + $loop->index * 40 }}px;">
              <i class="far fa-star" style="position: absolute; left: 7px; top: 5px; color: white;"></i>
            </div>
          @endforeach
        </div>

        <h6><i id="i" class="fas fa-globe"> {{ $job->posted_time ?? '30min' }} </i></h6>
        <h5>{{ $job->title }}</h5>

        <img class="hj" src="{{ asset('img/image.png') }}" alt="Job Image" />
        <p class="bb">{{ $job->company_name ?? 'PURE for IT Solutions' }}</p>

        <div class="dig">
          <h6 class="e"><i id="u" class="fas fa-eye"></i>({{ $job->views ?? 0 }})</h6>
        </div>
  <i id="v" class="fas fa-bookmark" style="color:#48A7A5; font-size: 24px;"></i>



      <!-- زر المشاركة (موجود عندك) -->
<i id="v2" class="fas fa-share" data-bs-toggle="modal" data-bs-target="#shareModal"></i>

<!-- مودال المشاركة -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
    <div class="modal-content bottom-sheet p-4">
      <div class="text-center">
        <h6 class="text-muted mb-3">Share via</h6>
        <div class="d-flex justify-content-around flex-wrap">

          <!-- Gmail -->
          <div class="text-center">
            <a href="#">
              <img src="https://mail.google.com" />
            </a>
            <p class="small mt-1">Gmail</p>
          </div>

          <!-- Facebook -->
          <div class="text-center">
            <a href="https://www.facebook.com">
              <img src="https://img.icons8.com/color/48/000000/facebook.png" />
            </a>
            <p class="small mt-1">Facebook</p>
          </div>

          <!-- Messenger -->
          <div class="text-center">
            <a href="https://www.messenger.com">
              <img src="https://img.icons8.com/color/48/000000/facebook-messenger.png" />
            </a>
            <p class="small mt-1">Messenger</p>
          </div>

          <!-- WhatsApp -->
          <div class="text-center">
            <a href="https://web.whatsapp.com">
              <img src="https://img.icons8.com/color/48/000000/whatsapp.png" />
            </a>
            <p class="small mt-1">WhatsApp</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


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
              <p class="ht3">{{ $job->days_remaining ?? '3daysrem' }}</p>
            </i>
          </div>
        </div>

        <div class="text3">
          <p>{{ $job->description ?? 'Lorem ipsum...' }}</p>
          <br>
          <div class="div">
            @foreach($job->tags ?? ['java', 'javascript', 'bootstrap(5)'] as $tag)
              <button class="btn" style="background-color: #DBECEC; color: #48A7A5; width: 250px; ">{{ $tag }}</button>
            @endforeach
          </div>
          <p style="position: absolute; bottom: -74px; left: 10px; font-size: 13px;">
            Expire In {{ $job->expire_days ?? 14 }} days
          </p>
        </div>
      </div>
    </div>
    <br><br>
</body>
  @endforeach












 <div class="bottom-nav" >
    <div class="nav-item"> <a href="{{route('jobs.index')}}"><i class="fas fa-briefcase" style="position: relative; left:6px"></i> </a> jobs</div>
     <div style="position: relative; left:120px" class="nav-item  active-tab"> <a href="{{route('jobs.saved')}}"><i class="fas fa-bookmark" style="position: relative; left:18px"></i></a> Bookmark</div>
    <div  style="position: relative; left:170px" class="nav-item "> <a href="{{route('settings.show')}}"><i class="fas fa-cog" style="position: relative; left:10px"></i> <a>settings</div>
    <div class="nav-item">  <a href="{{route('company.page')}}"><i class="fas fa-user" style="position: relative; left:7px"></i></a>   Profile</div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

