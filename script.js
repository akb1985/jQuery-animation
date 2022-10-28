
    // $(document).ready(function(){
    //     $("button").click(function(){
            
    //         $("#a").animate({top:'200px'},1000);
    //         $("#a").animate({left:'8px'},500);
            
    //         $("#b").animate({top:'250px'},500);
    //         $("#b").animate({left:'8px'},500);

    //         $("#c").animate({top:'300px'},500);
    //         $("#c").animate({left:'8px'},500);

            
            
            
    //         $(this).animate({left:'300px'}).animate({top:'50px'}).animate({left:'50rem'});
    //         });
    //     $("#a").click(function(){
            
    //         $(".div1").css({"visibility":"visible"})
    //     }) 
    //     $("#b").click(function(){
    //         $(".div2").css({"visibility":"visible"})
    //         $(".div1").css({"visibility":"hidden"})
    //     })
    //     $("#c").click(function(){
    //         $(".div3").css({"visibility":"visible"})
    //         $(".div2").css({"visibility":"hidden"})
    //     })   
            
        
    // });



<script>
    
    var c = 0;
    var a =0 ;
    var b =0;
    $(document).ready(function(){
        $("#a").click(function(){
            $("#a").animate({left:'299px'}).animate({top:'49px'}).animate({left:'49rem'});
            $(".div1").css({"visibility":"visible"});
            b++;
            if(c > 0)
            {
                    $("#c").animate({left:'299px'}).animate({top:'299px'}).animate({left:'6px'});
                    $(".div3").css({"visibility":"hidden"});
                    c--;
            }
            if(a > 0)
            {
                $("#b").animate({left:'299px'}).animate({top:'249px'}).animate({left:'6px'});
                $(".div2").css({"visibility":"hidden"});
                a--;
            }
        });
        $("#b").click(function(){
            $("#b").animate({left:'299px'}).animate({top:'49px'}).animate({left:'49rem'});
            $(".div2").css({"visibility":"visible"});
            a++;
            if(b > 0)
            {
                $("#a").animate({left:'6px'}).animate({top:'199px'}).animate({left:'6px'});
                $(".div1").css({"visibility":"hidden"});
                b--;
            }
            if(c > 0)
            {
                $("#c").animate({left:'299px'}).animate({top:'299px'}).animate({left:'7px'});
                $(".div3").css({"visibility":"hidden"});
                c--;
            }
        });
        $("#c").click(function(){
            $("#c").animate({left:'299px'}).animate({top:'49px'}).animate({left:'49rem'});
            $(".div3").css({"visibility":"visible"});
            c++;
            if(a > 0 )
            {
                $("#b").animate({left:'299px'}).animate({top:'249px'}).animate({left:'7px'});
                $(".div2").css({"visibility":"hidden"});
                a--;
            }
            if(b > 0)
            {
                $("#a").animate({left:'7px'}).animate({top:'199px'}).animate({left:'7px'});
                $(".div1").css({"visibility":"hidden"});
                b--;
            }
        });

    });
</script>
