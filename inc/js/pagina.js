$(document).ready(
    function(){
        if(sessionStorage.marketing == 0)
        {
            $('.pagina').fadeTo(1000,1);
            sessionStorage.marketing = 1;
        }
        else
        {
            $('.pagina').fadeTo(0,1);
        }
});