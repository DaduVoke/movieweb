<?php

$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'dbase';

$con= mysqli_connect($host,$user,$pass,$db);

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
    <head>
<!-----D4aDuv0ke---->
        <meta charset="utf-8">
                 <title>Dorama Tv</title>
                 
                     <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/lightslider.css">
    <!---javas-linkebi------------->
     <script src="js/JQuery3.3.1.js"></script>   
       <script src="js/lightslider.js"></script>
         
                
<!--fav-icon---------->
<link rel="shortcut icon" href="FAV Srati logo.PNG"/>

                </head>
       
<body background="az.svg">
    
    
    <!--navigation--------------->
    <nav>
        <!--logo------->
        <a href="index.php" class="logo">
            <img src="FAV Srati logo.PNG"/>
        </a>
        <!--menu-----btn------------->
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
         <!--menu-------------->
         <ul class="menu">
            <center><li><a href="index.php">მთავარი</a></li></center>
            <center><li><a href="index2.php">ფილმები</a></li></center>
            <center><li><a href="index3.php">სერიალები</a></li></center>
            <center><li><a href="index4.php">ანიმე</a></li></center>
        </ul>
        <!----რეგისტრაცია--->
        <a href="login.php"><h1 class="registration">შესვლა</h1></a>
        <!--საძიებო-ველი------------->
          
        <a href="კატეგორიები search.php">
            <button type="submit" class="btn1" id="search">
              მოძებნე ფილმი
            </button></a>
        </form>
        
        <div id="movies-searchable"></div>
        <div id="movies-container"></div>
        </div>
        
    
    </nav>
    
   


<br><br><br><br><br><br>

<center>
<section id="main">
    <!----ვიტრინა--------------------------------->
    <!----სათაური-------------->
     <h1 class="showcase-heading" style="color: white;">სერიალები ქართულად</h1>

     <ul id="autowidth" class="cs-hidden">
         <!---box-1-->
         <li class="item-a">        
            <!---სერიალი-box--->
            <a href="გვირაბი.php"><div class="showcase-box">
               <img src="გვირაბი.png"/>
           </div></a>

                </li>
                    <!---box-2-->
                    <li class="item-b">        
                       <!---სერიალი-box--->
                       
                         <a href="ყველაფერი რიგზეა ეს სიყვარულია.php"> <div class="showcase-box">
                          <img src="ყველაფერი რიგზეა ეს სიყვარულია.png">
                        </div></a>

                           </li>
                            <!---box-3-->
                            <li class="item-c">        
                               <!---სერიალი-box--->
                              <a href="ჩემი შეყვარებული გემიჰოა.php"><div class="showcase-box">
                                  <img src="ჩემი შეყვარებული გემიჰოა.PNG"/>
                              </div></a>

                                   </li>
                                    <!---box-4------>
                                    <li class="item-d">        
                                       <!---სერიალი-box--->
                                       <a href="ჩამოცვენილ ვარსკვლავთა ბაღი.php"> <div class="showcase-box">
                                          <img src="ჩამოცვენილ ვარსკვლავთა ბაღი-1.PNG"/>
                                      </div></a>
                                           </li>
                                        </li>
                                        
                                            <!---box-5------>
                                            <li class="item-f">        
                                               <!---სერიალი-box--->
                                               <a href="მეფე მარადიული მონაქრი.php">  <div class="showcase-box">
                                                  <img src="მეფე მარადიული მონაქრი.PNG"/>
                                              </div></a>
                                                   </li>
        
     </ul>
    
</section></center>
<!-----რეკლამის აბრა--><!---iframe-->
<center><img src="რეკლამის აბრა.png" style="height: 150px;"></center>

<br><br>

<center><section id="latest">
    <h2 class="h2-2" style="color: white;">ფილმები</h2>
    <ul id="autowidth2" class="cs-hidden">
       
                <!--------slide-box-4---------->
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header ">
                                <div class="card-header-icon">
                                    <a href="რეალური.php">
                                      <i class="material-icons header-icon"><img src="რეალური.png"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="რეალური.php">
                                        <h3 class="card-movie-title">რეალური</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt6904062/"><div class="ratings"><span>4.9</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოშვები წელი</label>
                                        <span>2017</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>2სთ 17წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header">
                                <div class="card-header-icon">
                                    <a href="ვალდებულება.php">
                                      <i class="material-icons header-icon"><img src="ვალდებულება ქართულად.PNG"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="ვალდებულება.php">
                                        <h3 class="card-movie-title">ვალდებულება</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt3144098/?ref_=nv_sr_srsg_3"><div class="ratings"><span>6.7</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოშვების წელი</label>
                                        <span>2013 </span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანნგრძლივობა</label>
                                        <span>1სთ 53წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header ">
                                <div class="card-header-icon">
                                    <a href="არ ისუნთქო.php">
                                      <i class="material-icons header-icon"><img src="არ ისუნთქო.PNG"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="#">
                                        <h3 class="card-movie-title">არ ისუნთქო</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt2917646/?ref_=nv_sr_srsg_0"><div class="ratings"><span>7.4</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოშვების წელი</label>
                                        <span>2013</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>1სთ 58წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header ">
                                <div class="card-header-icon">
                                    <a href="მეფე და ჯამბაზი.php">
                                      <i class="material-icons header-icon"><img src="მეფე და ჯამბაზი.PNG"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="მეფე და ჯამბაზი.php">
                                        <h3 class="card-movie-title">მეფე და ჯამბაზი</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt0492835/?ref_=nv_sr_srsg_0"><div class="ratings"><span>7.4</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოშვების წელი</label>
                                        <span>2005</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>1სთ 59წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header">
                                <div class="card-header-icon">
                                    <a href="ბინძური კარნავალი.php">
                                      <i class="material-icons header-icon"><img src="ფილმი ბინძური კარნავალი.jpg"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                    
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="ბინძური კარნავალი.php">
                                        <h3 class="card-movie-title">ბინძური კარნავალი</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt0821442/?ref_=nv_sr_srsg_0"><div class="ratings"><span>7.3</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოშვების წელი</label>
                                        <span>2006</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>2სთ 20წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
        </ul>
</section></center>

 <center><section id="latest">
    
    <ul id="autowidth2" class="cs-hidden">
        
                <!--------slide-box-4---------->
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header deadPool">
                                <div class="card-header-icon">
                                    <a href="ჰითმენი.php">
                                      <i class="material-icons header-icon"><img src="ფილმი ჰითმენი.PNG"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="ჰითმენი.php">
                                        <h3 class="card-movie-title">დაქირავებული მკვლელი</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt11649614/?ref_=nv_sr_srsg_0"><div class="ratings"><span>6.3</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოსვლის წელი</label>
                                        <span>2020</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>1სთ 50წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header deadPool">
                                <div class="card-header-icon">
                                    <a href="ასე მოვიყვანე აიტი ფანი ცოლად.php">
                                      <i class="material-icons header-icon"><img src="ასე მოვიყვანე აიტი ფანი ცოლად.png"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="ასე მოვიყვანე აიტი ფანი ცოლად.php">
                                        <h3 class="card-movie-title">ასე მოვიყვანე ანტი ფანი ცოლად</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt5240372/?ref_=nv_sr_srsg_3"><div class="ratings"><span>5.9</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">გამოსვლის წელი</label>
                                        <span>2016</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>2სთ 0წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header deadPool">
                                <div class="card-header-icon">
                                    <a href="მშვიდეობით ზაფხულო.php">
                                      <i class="material-icons header-icon"><img src="მშვიდობით ზაფხულო.PNG"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="მშვიდეობით ზაფხულო.php">
                                        <h3 class="card-movie-title">მშვიდობით ზაფხულო</h3>
                                    </a>
                                    <a href="https://www.imdb.com/title/tt9530420/?ref_=nv_sr_srsg_0"><div class="ratings"><span>6.0</span>/10<br>IMDB</div></a>
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                        <label style=" font-size: 0.8rem;color:blanchedalmond;">გამოსვლის წელი</label>
                                        <span>2019</span>
                                    </div>
                                    <div class="movie-running-time">
                                        <label style="font-size: 0.8rem;color:blanchedalmond;">ხანგრძლივობა</label>
                                        <span>1სთ 7წთ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
        </ul>
</section></center>

<!-----reklama------------>
<center><img src="რეკლამის აბრა.png" style="height: 150px;"></center>
<!---ანიმე-------->
<div class="h2-2">
   <center> <h2 style="color: white;"></h2></center>
</div>
<section id="movies-list">
    <!---box-1------------------------>
    <a href="უცნობი ექიმი.php">
    <div class="movies-box">
        <!--img--------->
        <div class="movies-img">
            <div class="quality">GEO</div> 
            <img src="ს უცნობი ექიმი.PNG">
        </div>
        <!--ტექსტი------>
        <a href="უცნობი ექიმი.php">უცნობი ექიმი</a>
    </div></a>

        <!---box-2------------------------>
        <a href="ფერთა მოზღვავება.php">
        <div class="movies-box">
            <!--img--------->
            <div class="movies-img">
                <div class="quality">GEO</div>
                <img src="ს ფერთა მოზღვავება.PNG">
            </div>
            <!--ტექსტი------>
            <a href="ფერთა მოზღვავება.php">ფერთა მოზღვავება</a>
        </div></a>
            <!---box-3------------------------>
            <a href="სიყვარული მთვარის შუქზე.php">
    <div class="movies-box">
        <!--img--------->
        <div class="movies-img">
            <div class="quality">GEO</div>
            <img src="სიყვარული მთვარის შუქზე.PNG">
        </div>
        <!--ტექსტი------>
        <a href="სიყვარული მთვარის შუქზე.php">სიყვარული მთვარის შუქზე</a>
    </div></a>
        <!---box-4------------------------>
        <a href="ერთი მშვენიერი დღე.php">
        <div class="movies-box">
            <!--img--------->
            <div class="movies-img">
                <div class="quality">GEO</div>
                <img src="ერთი მშვენიერი დღე.png">
               </div>
            <!--ტექსტი------>
            <a href="ერთი მშვენიერი დღე.php"> ერთი მშვენიერი დღე</a>
        </div></a>
        <!---box-5------------------------>
        <a href="საეჭვო პარტნიორი.php">
    <div class="movies-box">
        <!--img--------->
        <div class="movies-img">
            <div class="quality">GEO</div>
            <img src="ს საეჭვო პარტნიორი.PNG">
        </div>
        <!--ტექსტი------>
        <a href="საეჭვო პარტნიორი.php">საეჭვო პარტნიორი</a>
    </div></a>
    <!---box-6------------------------>
    <a href="ჩემი საიდუმლო რომანი.php">
    <div class="movies-box">
        <!--img--------->
        <div class="movies-img">
            <div class="quality">GEO</div>
            <img src="ჩემი საიდუმლო რომანი.PNG">
        </div>
        <!--ტექსტი------>
        <a href="ჩემი საიდუმლო რომანი.php">ჩემი საიდუმლო რომანი</a>
    </div></a>
    <!---box-7------------------------>
    <a href="ანგელოზის უკანასკნელი მისია სიყვარული.php">
    <div class="movies-box">
        <!--img--------->
        <div class="movies-img">
            <div class="quality">GEO</div>
            <img src="ს ანგელოზის უკანასკნელი მისია სიყვარული.PNG">
        </div>
        <!--ტექსტი------>
        <a href="ანგელოზის უკანასკნელი მისია სიყვარული.php">ანგელოზის უკანასკნელი მისია სიყვარული</a>
    </div></a>

</section>
<!--რეკლამა-->
<center><img src="რეკლამის აბრა.png" style="height: 150px;"></center>
<!----anime---->
<center><section id="latest">
    <h2 class="h2-2" style="color: white;"> <br>ანიმე</h2>
    <ul id="autowidth2" class="cs-hidden">
       
                <!--------slide-box-4---------->
                <li class="item-d">
                    <div >
                        <!-------ფოტო-->
                        <div class="card-view">
                            <div class="card-header ">
                                <div class="card-header-icon">
                                    <a href="ტომიე.php">
                                      <i class="material-icons header-icon"><img src="ს ტომიე.PNG"  style="width: 315px;height: 400px;"></i>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="card-movie-content">
                                <div class="card-movie-content-head">
                                    <a href="ს ტომიე.PNG">
                                        <h3 class="card-movie-title">ტომიე</h3>
                                    </a>
                                    
                                </div>
                                <div class="card-movie-info">
                                    <div class="movie-running-time">
                                       <center> <label style="color: white;">გამოშვები წელი</label>
                                        <span>2017</span></center>
                                    </div>
                                    <div class="movie-running-time">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

</section></center>

<!--btn------------------------------------------------------------->
    <div class="btn">
        <a href="index.php">უკან</a>
        <a href="index2.php">შემდეგი</a>
    </div>
    <!--footer------------>
    <footer class="content">
        <div class="navbar">
          <a href="index5.php">კონტაქტი</a>
          <a href="/">მთავარი</a>
          
        </div>
        
        <div class="main">
          <p>© Copyright 2021 დორამა ტვ</2021></p>
        </div>
      </footer>
    

<!--slider-script--------->
<script>
          $(document).ready(function() {
    $('#autowidth,#autowidth2').lightSlider({
        autowidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autowidth,autowidth2').removeClass('cS-hidden');
          }
        });
      });
      var scrollDistance = function (callback) {


if (!callback || typeof callback !== 'function') return;

}; 

</script>

</body> 
</html>  