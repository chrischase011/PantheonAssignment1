<!-- Header Section -->
<?php //include('layout/header.php'); ?>
<!-- Body Section -->
<button class="position-fixed btn btn-dark" style="right:5px;" id="togBtn" onclick="toggleMode()" data-value="0" title="Dark Mode"><i id="togIcon" class="fa fa-moon"></i></button>
<div class="container my-2">
    <!-- Jumbotron -->
   <div class="jumbotron bg-dark bg-img">
       <div class="row">
           <div class="col-12 col-sm-12 col-md-6 col-lg-3 ">
                <img src="https://scontent.fmnl17-4.fna.fbcdn.net/v/t1.6435-9/84604037_2746183982084603_453506863799992320_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=174925&_nc_eui2=AeETIwxqj1CTyLZ1sFwAPO6yi2RnnzEzIweLZGefMTMjByYzWfabn26fGRna3hifRfZ4_s3FPDk9kzn_ZbUj884M&_nc_ohc=qeI6gOeWkGkAX_-6-9s&tn=XiQY1HixNz5AOYMT&_nc_ht=scontent.fmnl17-4.fna&oh=9dfabaea9193a41032628de3720a9a63&oe=612E4879"
                alt="" class="w-100 w-xs-75 rounded-circle">
           </div>
           <div class="col-12 col-sm-12 col-md-6 col-lg-9">
               <div class="clearfix my-5 text-white">
                    <h1 class="text-capitalize text-center" style="font-size:3.5em;">Christopher Robin Chase</h1>
                    <h1 class="text-monospace text-center" id="typed-pos"></h1>
               </div>
           </div>
       </div>
   </div> 
   <!-- Information -->
   <div id="trigger1"></div>
   <div class="row" id="reveal1">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-header">
                    <h2 class="card-title text-center">Basic Information</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 p-5">
                                <blockquote class="blockquote text-justify">
                                    <b>Christopher Robin Chase</b> is a Computer Science student from University
                                    of Makati. He really loves programming especially on <i>Back-end Programming</i>.
                                    He is also a <i>Game Developer</i> and currently working on his Game thesis on his
                                    4<sup>th</sup> year in college. Christopher Robin Chase loves to program in 
                                    <i>PHP</i> programming language using <i>Laravel PHP Framework</i>.<br><br>
                                    To know him more, check out more below. 
                                </blockquote>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
   </div>
  <!-- Other info -->
  

  <div id="trigger2"></div>
  <div id="reveal2">
  <h2 class="h1">Other Information</h2>
   <div class="row py-2">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <img src="https://www.unisdr.org/campaign/resilientcities/uploads/city/photo/627.png" class="card-img-top">
                <div class="info">
                    <h4 class="text-center">He lives at <b>Makati City</b></h4><br>
                    <p class="card-text text-center">
                        <b>Christopher Robin Chase</b> grew up in Makati City and currently lives at <i>
                            Barangay Rizal, Makati City</i>. He was raised by his grandparents on his mother side
                            here in Makati City.

                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card bg-primary" style="max-height:376.58px;">
                <img src="data:image/png;base64,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"
                    class="card-img-top" style="width:540px;max-height:375px;">
                <div class="info">
                    <h4 class="text-center">He was born on <b>July 11, 1997</b></h4><br>
                    <p class="card-text text-center">
                        <b>Christopher Robin Chase</b> is 24 years old today and still doing his best to 
                        graduate in college. By the way, he is <i>Year of the Ox.</i> &#128516;
                    </p>
                </div>
            </div>
            
        </div>
   </div>
   <div class="row py-2">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card" style="max-height:376.58px;">
                <img src="https://media4.giphy.com/media/1Fjxzv70Zvyqk/giphy.gif" class="card-img-top" 
                style="width:540px;max-height:375px;">
                <div class="info">
                    <h4 class="text-center">Yeah! A <b>Burger</b> lover</h4><br>
                    <p class="card-text text-center">
                         He is a burger lover although he loves to eat any foods but when it comes to burger,
                        <i>Talo-talo muna raw.</i> Hahahaha

                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card bg-primary" style="max-height:376.58px;">
                <img src="https://www.pngitem.com/pimgs/m/172-1727941_cross-roman-catholic-hd-png-download.png"
                    class="card-img-top" style="width:540px;max-height:375px;">
                <div class="info">
                    <h4 class="text-center">He is a <b>Roman Catholic</b></h4><br>
                    <p class="card-text text-center">
                        <b>Christopher Robin Chase</b> was baptized as a Roman Catholic.  
                </div>
            </div>  
        </div>
   </div>
   <div class="row py-2">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card" style="max-height:376.58px;">
                <img src="https://toppng.com/uploads/preview/fire-guitar-light-wallpaper-11555109664wro79sflpy.jpg" class="card-img-top" 
                style="width:540px;max-height:375px;">
                <div class="info">
                    <h4 class="text-center">He is a <b>Guitar</b> player</h4><br>
                    <p class="card-text text-center">
                        <b>Christopher Robin Chase</b> plays a guitar. His genre are mostly metal, rock and other sub-genres of metal and hardcore punk. He is also the lead guitarist of UMak Jammers, an organization founded by <i>CCA</i> in University of Makati.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card bg-primary" style="max-height:376.58px;">
                <img src="https://pbs.twimg.com/media/Ao9nMJJCQAAuzcM.jpg"
                    class="card-img-top" style="width:540px;height: 375px;max-height:375px;">
                <div class="info">
                    <h4 class="text-center">A proud <b>Heron</b></h4><br>
                    <p class="card-text text-center">
                        Yes! <b>Christopher Robin Chase</b> is a Heron. He is a University of Makati student and now an incoming 4<sup>th</sup> year college. 
                    </p>
                </div>
            </div>  
        </div>
   </div>
   <div class="row py-2">
       <div class="col-12">
           <div class="card bg-dark">
               <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" class="card-img-top w-100" style="height:400px;">
               <div class="info">
                   <h4 class="text-center my-4">A Developer</h4>
                    <p class="card-text text-center">
                        <b>Christopher Robin Chase</b> loves to code, especially on Back-end Web Development where he mostly code the core functionalities of the website. PHP is his most used tool for server-side programming language and now using the Laravel PHP framework for most of his projects. He loves to code games to where he mostly uses Unity and C#. He wants to be a Software Engineer someday once he graduates.
                    </p>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
<?php include('layout/footer.php'); ?>