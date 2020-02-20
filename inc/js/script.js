$(document).ready(

    function() {
        var asideOpen = 0;
        
        $('#toggle').click(
            
            function(){
                
                if (asideOpen == 0) {
                    
                    $('.Opacizable').css('opacity', '0.5');
                    asideOpen = 1;
                } 
                else {
                    $('.Opacizable').css('opacity', '1');
                    asideOpen = 0;
                }
                
            });
        
        $('#nascondiRegister').click(
            
            function(){
                $('#pcNav').css('display','none');
                
            });
        
        $('.rimettiNav').click(
        
            function(){
                $('#pcNav').css('display','flex');
            });

    });
