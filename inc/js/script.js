function sos(){
        
        if(sessionStorage.benvenuto == 1)
        {
            $('.pagina').css('display','block');
        }
        
    };

$(document).ready(
    
    function() {
        
        var asideOpen = 0;
        
        
        $('#toggle').click(
            //funzione che permette di rendere opaco al 50% tutta la pagina appena aperta la aside (forse da modificare in futuro)
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
        
        //se non si è cliccato su goosebumps nella pagina iniziale mostro lo sfondo e nascondo la barra laterale
        if(sessionStorage.benvenuto !=1)
        {
            $('#bg-goosebumps').css('display','inherit');
            $('#body').css('overflow-y','hidden');
        }
        
        
        //Zoom pagina iniziale
        
        $('#benvenuto').click(
            function(){
                
                $('#bg-goosebumps').css('transform','scale3d(4,4,2)'); //zoom
                $('#bg-goosebumps').fadeTo(1300,0); //fa scomparire l'immagine entro 1,3 secondi
                $('#body').css('overflow-y','hidden');
                sessionStorage.benvenuto = 1; //salvo 1 nella session benvenuto come flag, per capire poi se ho già fatto il click su goosebumps nell'index
                
                window.setTimeout(entra,1300); //richiama la funzione entra dopo 1,3 secondi
        });
        
        //funzione per nascondere lo sfondo iniziale e far comparire il sito vero e proprio
        function entra(){
            $('#bg-goosebumps').css('display','none');
            $('.pagina').fadeTo(1000,1);
            $('#body').css('overflow-y','visible');//faccio tornare visibile la barra di scorrimento laterale
        };
        
        
        $('#DivAutori').hover(
            function(){
                $('#AutoriDropUp').css({
                    bottom: '100%',
                    transform: 'scaleY(1)'
                });
                
            
            },
            function(){
                $('#AutoriDropUp').css({
                    transform: 'scaleY(0)'
                });
                
            });
        
        
        $('#account-dropdown').css({
            height: $('#nav').height() - 4
        });

        $('#account-name').css({
            right: 5 + $('#account-dropdown').width(),
            height: $('#nav').height() - 7
        });

        $('#account-image').css({
            height: $('#nav').height() - 7,
            width: $('#nav').height() - 7
        });
        
        $('#trailer').on('click', 
            
            function(e){
                
            e.preventDefault();
            $('#trailer-modal').modal('show').find('.modal-content').load($(this).attr('href'));
            
            });
        
    });


