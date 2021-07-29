$(document).ready(function(){
    
    
$('#bid_submit').click(function(e){
    console.log($('.iti__selected-flag').attr('title'))
//    console.log($('.iti__selected-dial-code').text())
    var fname = $('#f_name').val()
    var oname = $('#o_name').val()
    var sname = $('#s_name').val()
    var email = $('#_email').val()
    var phone = $('#phone').val()
    var bname = $('#b_name').val()
    var btype = $('#b_type').val()
    var bdes = $('#b_des').val()
    phone=($('.iti__selected-dial-code').text())+phone+"";
    var country = $('.iti__selected-flag').attr('title')
    
     $.ajax({
                url:"main.php",
                type:"post",
                async:false,
                data:{
                    "bid_now":1,  
                    "fname":fname,  
                    "oname":oname,  
                    "sname":sname,  
                    "email":email,  
                    "country":country,  
                    "contact":phone,  
                    "bname":bname,  
                    "btype":btype,  
                    "bdes":bdes  
                },
                success:function(data){
                   $("#loaded_here").html(data);
                }
                                
            })
})
    
 $('#contact_submit').click(function(e){
     console.log("lllllll")
//    console.log($('.iti__selected-flag').attr('title'))
//    console.log($('.iti__selected-dial-code').text())
    var fname = $('#f_name_').val()
    var oname = $('#o_name_').val()
    var email = $('#email_').val()
    var message = $('#message_').val()
    
     $.ajax({
                url:"main.php",
                type:"post",
                async:false,
                data:{
                    "contact":1,  
                    "fname":fname,  
                    "oname":oname,  
                    "email":email,  
                    "message":message  
                },
                success:function(data1){
                   $("#loaded_here_").html(data1);
                }
                                
            })
})
    
    
     $(window).scroll(function(e){
        
//        console.log($(this).scrollTop())
        current = $(this).scrollTop()
        console.log( current)
         if(current>75){
            $("#nav1").addClass('navv')
            
            
        }
        else{
             $("#nav1").removeClass('navv')
           
        }
        
            
        
    }),500
    

//     $('.navigation>ul>li>ul').hide()
    $('.navigation>ul>li').hover(function(e){
        $(e.target.firstElementChild.nextElementSibling).show() 
        
    })
    
    $('.navigation>ul>li').mouseleave(function(e){
        $('.navigation>ul>li>ul').hide()
    })
    
    $('.player').click(function(e){
        var music=$(e.target).attr('music')
        console.log(music)
        $('.music_here').attr('src',music)
        $('.music_here').get(0).play()
        
    })
    
    $('.stop').click(function(e){
        var music=$(e.target).attr('music')
        console.log(music)
        $('.music_here').get(0).pause()
        $('.music_here').currentTime=0
        
    })

    $('#menu').click(function(e){
        $('.nav2>ul>li>ul').toggle()
    })
    
    $('#menu_main').click(function(e){
        console.log(e.target.firstElementChild)
        $(e.target.firstElementChild).toggle()
    })
    
    
   
    
 
   
    
   $('.loader').hide() 
    
})