$(document).ready(

    function() {
        var asideOpen = 0;
        $('.pagina').css('opacity','0');
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
            
        
        $('#benvenuto').click(
            function(){
                $('#benvenuto').css('display', 'none');
                $('#bg-goosebumps').css('transform','scale3d(4,4,2)');
                $('body').css('overflow-y','hidden');
                $('#bg-goosebumps').fadeTo(1500,0);
                window.setTimeout(entra,2000);
                
        });
        
        function entra(){
            
            $('#bg-goosebumps').css('display','none');
            
            $('.pagina').css('display','inherit').fadeTo(1000,1);
        };
        
    });
