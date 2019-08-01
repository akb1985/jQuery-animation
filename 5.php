<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <script src =  "jquery-3.4.1.min.js"></script>
    <script src = "bootstrap/jquery.min.js"></script>
    <script src = "bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel = "stylesheet" href = "style.css">
    
</head>
<body>
    <button id ="a">Home</button>
    <button id ="b">About</button>
    <button id ="c">Login</button>
    <div class = "div1">
        <h1 class = ".h">Welcome</h1>
        <div class="slide1"></div>
        <div class="slide2"></div>
    </div>
    <div class="div2">
        <div class="animate"></div>
        <div class="animate1"></div>
    </div>
    <div class="div3">
        <div class = "row">
            <h1>Login</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6">
            
                <form method = "POST" class = "form">
                <table class ="table">
                    <tr><td><label>UserName</label>
                            <input type="text" class = "form-control"></td></tr>
                    <tr><td><label>Password</label>
                            <input type="password" class = "form-control"></td></tr>
                    <tr><td align = center><input type = "submit" class = "btn btn-primary" value = "Login"></td></tr>
                </table>
                </form>
            
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="dot1"></div><div class="dot2"></div><div class="dot3"></div> <div class="dot4"></div><div class="dot5"></div>
    </div>
</body>
</html>


<script>
    var c = 0;
    var a =0 ;
    var b =0;
    $(document).ready(function(){
        $(".slide1").hide();
        $(".slide2").hide();

        $("#a").click(function(){
            $("#a").animate({left:'300px'}).animate({top:'50px'}).animate({left:'50rem'},function(){$(".div1").css({"visibility":"visible"});
                                                                                                    setInterval(function(){
                                                                                                    $(".slide1").fadeToggle(3000);
                                                                                                    $(".slide2").slideToggle(3000);
                                                                                                },500);
                                                                                                    });
            
            b++;
            if(c > 0)
            {
                    $("#c").animate({left:'300px'}).animate({top:'300px'}).animate({left:'7px'});
                    $(".div3").css({"visibility":"hidden"});
                    c--;
            }
            if(a > 0)
            {
                $("#b").animate({left:'300px'}).animate({top:'250px'}).animate({left:'7px'});
                $(".div2").css({"visibility":"hidden"});
                a--;
            }
        });
        $("#b").click(function(){
            $("#b").animate({left:'300px'}).animate({top:'50px'}).animate({left:'50rem'},function(){$(".div2").css({"visibility":"visible"});
                                                                                                    setInterval(function(){
                                                                                                    $(".animate").animate({"top":"300px"},1000,function(){$(".div2").css({"background-color":"blue"},1000)});
                                                                                                    $(".animate1").animate({"left":"80px"},1000);
                                                                                                    $(".animate").animate({"top":"0px"},1000,function(){$(".div2").css({"background-color":"white"},1000)});
                                                                                                    $(".animate1").animate({"left":"583px"},1000);
                                                                                                    $(".animate").animate({"left":"513px"},1000,function(){$(".div2").css({"background-color":"orange"},1000)});
                                                                                                    $(".animate1").animate({"top":"70px"},1000);
                                                                                                    $(".animate").animate({"left":"0px"},1000,function(){$(".div2").css({"background-color":"white"},1000)});
                                                                                                    $(".animate1").animate({"top":"360px"},1000);
                                                                                                    $(".animate").animate({"top":"130px","left":"250px"},1000,function(){$(".div2").css({"background-color":"yellow"},1000)});
                                                                                                    $(".animate1").animate({"top":"200px","left":"320px"},1000);
                                                                                                    $(".animate").animate({"top":"0px","left":"0px"},1000,function(){$(".div2").css({"background-color":"white"},1000)});
                                                                                                    $(".animate1").animate({"top":"360px","left":"583px"},1000);},500);
                                                                                                                });
            
            a++;
            if(b > 0)
            {
                $("#a").animate({left:'7px'}).animate({top:'200px'}).animate({left:'7px'});
                $(".div1").css({"visibility":"hidden"});
                b--;
            }
            if(c > 0)
            {
                $("#c").animate({left:'300px'}).animate({top:'300px'}).animate({left:'7px'});
                $(".div3").css({"visibility":"hidden"});
                c--;
            }
        });
        $("#c").click(function(){
            $("#c").animate({left:'300px'}).animate({top:'50px'}).animate({left:'50rem'},function(){$(".div3").css({"visibility":"visible"});
                                                                                                    setInterval(function(){
                                                                                                    $(".dot1").animate({"top":"0px","left":"300px"},1000).animate({"top":"250px","left":"675px"},1000).animate({"top":"450px","left":"400px"},1000);
                                                                                                    $(".dot2").animate({"left":"670px"},1000).animate({"top":"0px","left":"200px"},1000).animate({"top":"450px","left":"300px"},1000);
                                                                                                    $(".dot3").animate({"left":"670px","top":"0px"},1000).animate({"top":"120px","left":"290px"},1000).animate({"top":"270px","left":"100px"},1000);
                                                                                                    $(".dot4").animate({"left":"60px"},1000).animate({"top":"334px","left":"280px"},1000).animate({"top":"50px","left":"30px"},1000);
                                                                                                    $(".dot5").animate({"left":"70px"},1000).animate({"top":"90px","left":"300px"},1000).animate({"top":"60px","left":"300px"},1000);

                                                                                                
                                                                                                },500);
                                                                                                        });

            
            c++;
            if(a > 0 )
            {
                $("#b").animate({left:'300px'}).animate({top:'250px'}).animate({left:'7px'});
                $(".div2").css({"visibility":"hidden"});
                a--;
            }
            if(b > 0)
            {
                $("#a").animate({left:'7px'}).animate({top:'200px'}).animate({left:'7px'});
                $(".div1").css({"visibility":"hidden"});
                b--;
            }
        });

    });
</script>



<!-- <script>
    $(document).ready(function(){
        $("button").click(function(){
            
            $("#a").animate({top:'200px'},1000);
            $("#a").animate({left:'8px'},500);
            
            $("#b").animate({top:'250px'},500);
            $("#b").animate({left:'8px'},500);

            $("#c").animate({top:'300px'},500);
            $("#c").animate({left:'8px'},500);

            
            
            
            $(this).animate({left:'300px'}).animate({top:'50px'}).animate({left:'50rem'});
            });
        $("#a").click(function(){
            
            $(".div1").css({"visibility":"visible"})
        }) 
        $("#b").click(function(){
            $(".div2").css({"visibility":"visible"})
            $(".div1").css({"visibility":"hidden"})
        })
        $("#c").click(function(){
            $(".div3").css({"visibility":"visible"})
            $(".div2").css({"visibility":"hidden"})
        })   
            
        
    });
</script> -->