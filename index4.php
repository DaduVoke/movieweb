<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
                 <title></title>
                 
                     <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/lightslider.css">
    <!---javas-linkebi------------->
     <script src="js/JQuery3.3.1.js"></script>   
       <script src="js/lightslider.js"></script>            
<!--fav-icon---------->
<link rel="shortcut icon" href="FAV Srati logo.PNG"/>

                </head>
<body background="az.svg">
    <php lang="en">
<head>
    <meta charset="UTF-8">
      <title></title>
      <link rel="shortcut icon" href="FAV Srati logo.PNG"/>
   
</head>
<body>
    <br><br><br><br>
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
            <li><a href="index.php">სახლი</a></li>
            <li><a href="index2.php">ფილმები</a></li>
            <li><a href="index3.php">სერიალები</a></li>
            <li><a href="index4.php">ანიმე</a></li>
           
        </ul>
        <a href="კატეგორიები search.php">
            <button type="submit" class="btn1" id="search">
              მოძებნე ფილმი
            </button></a>
        </nav>
        <br><br>
        <center><img src="რეკლამის აბრა.png" style="height: 150px; width: 700px;"></center>
        <center> 
            <li class="card-view">    
                
                <div class="card-header ტომიე">
                    <div class="card-header-icon">
                        <a href="ტომიე.php">
                            <i class="material-icons header-icon">play_arrow</i>
                        </a>
                    </div>
                </div>
                <div class="card-movie-content">
                    <div class="card-movie-content-head">
                        <a href="ტომიე.php">
                            <h3 class="card-movie-title">ტომიე</h3>
                        </a>
                        <br>
                        <a href="https://www.imdb.com/title/tt7814574/"><div class="ratings"><span>7.7</span>/10<br>IMDB</div></a>
    
                    </div>
                    <div class="card-movie-info">
                        <div class="movie-running-time">
                            <label  style="font-size: 0.8rem;">გამოშვების წელი</label>
                            <span>2019</span>
                        </div>
                        <div class="movie-running-time">
                            <label  style="font-size: 0.8rem;">ხანგრძლივობა</label>
                            <span>35წთ</span>
                        </div>
                    </div>
                </div>
            
        </div></li>
       
        <br><br><br><br><br><br><br><br><br><br>

        <div class="btn">
            <a href="index3.php">უკან</a>
            <a href="index5.php">შემდეგი</a>
        </div>
        <footer class="content">
            <div class="navbar">
              <a href="index5.php" style="color:white;">კონტაქტი</a>
              <a href="index.php" style="color:white;">მთავარი</a>
              
            </div>
            
            <div class="main">
              <p>© Copyright 2021 დორამა ტვ</2021></p>
            </div>
          </footer>
    
    


</ul>

  

</body>
</html>
<script>
    function myFunction() {
      
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');
    
      
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
    $(document).ready(function() {
$('#autowidth,#autowidth2').lightSlider({
    autowidth:true,
    loop:true,
    onSliderLoad: function() {
        $('#autowidth,autowidth2').removeClass('cS-hidden');
      }
    });
  }); 
    </script>
<style>
    .movies-box a{
    text-align: center;
    display: block;
    font-weight: 600;
    display: -webkit-box;
    max-width: 80%;
    -webkit-line-clamp: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #3a3a3a;
    margin: 20px;
}
     .p-text{
    display: block;
      visibility: hidden;
  }
 a {
    text-decoration: none;
    color: inherit;
}
 

 
a:hover {
    color: #6ABCEA;
}
 
.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    
}

.navbar-dark {
    padding: 15px !important;
    background: #13191d !important;
}
 
.sidebar {
    line-height: 26px;
    padding-top: 50px;
}
 
.sidebar ul {
    margin: 30px 0px;
}
 
.sidebar .nav-link {
    display: block;
    text-align: center;
}

@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(font.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  
  -webkit-font-smoothing: antialiased;
}
 
.sidebar .nav-link i {
    display: block;
    text-align: center;
}
 
.sidebar .nav-link.active {
    color: #ffffff;
}
 
.movie_list {
    margin-top: 5rem;
    padding-left: 4rem !important;
}
 
.card-view {
    background: #891094;
    box-shadow: 0px 6px 18px rgba(253, 0, 0, 0.1);
    width: 100%;
    max-width: 276px;
    margin: 2em;
    border-radius: 10px;
    display: inline-block;
    
}
 
.card-header {
    padding: 0;
    margin: 0;
    height: 367px;
    width: 100%;
    display: block;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
 

.ტომიე {
    background: url("ს\ ტომიე.PNG");
    background-size: cover;
}
.card-header-icon {
    position: relative;
}
 
.header-icon {
    width: 100%;
    height: 367px;
    line-height: 367px;
    text-align: center;
    vertical-align: middle;
    margin: 0 auto;
    color: #ffffff;
    font-size: 54px;
    text-shadow: 0px 0px 20px #6abcea, 0px 5px 20px #6ABCEA;
    opacity: .85;
}
 
.header-icon:hover {
    background: rgba(252, 248, 248, 0.15);
    font-size: 74px;
    text-shadow: 0px 0px 20px #6abcea, 0px 5px 30px #6ABCEA;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    opacity: 1;
}
 
.card-view:hover {
    -webkit-transform: scale(1.03);
    transform: scale(1.03);
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.08);
}
 
.card-movie-content {
    padding: 18px 18px 24px 18px;
    margin: 0;
}
 
.card-movie-content-head,
.card-movie-info {
    display: table;
    width: 100%;
    color: white;
}
 
.card-movie-title {
    font-size: 22px;
    margin: 0;
    display: table-cell;
    color: white;
}
 
.ratings {
    width: 50px;
    height: 15px;
    background-size: contain;
    display: table-cell;
    text-align: right;
    position: relative;
    margin-top: 5px;
    font-weight: 600;
}
 
.ratings span {
    color: #2196F3;
}
 
.card-movie-info {
    margin-top: 1em;
    color: white;
}
 
.movie-running-time {
    display: table-cell;
    text-transform: uppercase;
    text-align: center;
    color: white;
}
 
.movie-running-time:first-of-type {
    text-align: left;
    color: white;
}
 
.movie-running-time:last-of-type {
    text-align: right;
    color: white;
}
 
.movie-running-time label {
    display: block;
    color: rgba(255, 255, 255, 0.5);
    margin-bottom: .5em;
    font-size: 9px;
}
 
.movie-running-time span {
    font-weight: 700;
    font-size: 11px;
}
#myInput {
  
  background-position: 10px 12px; 
  background-repeat: no-repeat; 
  width: 100%; 
  font-size: 16px; 
  padding: 12px 20px 12px 40px; 
  border: 1px solid rgb(255, 255, 255);
  margin-bottom: 12px;
  

}

#myUL {
  
  list-style-type: none;
  padding: 0;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  margin: 0;
}


</style>

   


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
</script>
<script src="index.js"></script>
</body> 
</php>  
