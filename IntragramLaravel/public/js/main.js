var url = 'http://localhost/course/IntragramLaravel/public/'

window.addEventListener("load", function()
{
    console.log("Evento Escuchado");

    function like ()
    {
        
        $('.btn-like').unbind('click').click(function(){
            $(this).addClass('btn-dislike').removeClass('btn-like');
            $(this).attr('src', url+'img/heart-red.png')
            console.log("Like");

            $.ajax({
                url: url+'like/'+$(this).data('id'),
                type: 'GET',
                success: function (res) 
                {
                    if(res.like)
                    {
                        console.log("LIKE A POST");
                    }
                    else
                    {
                        console.log("LIKE A POST");
                    } 
                }
            });

            dislike();
        });
    }
    like();

    function dislike ()
    {
        // No repite ni encadena clicks PROBLEMA QUE TUVE CUANDO COMENZE
        $('.btn-dislike').unbind('click').click(function(){
            $(this).addClass('btn-like').removeClass('btn-dislike');
            $(this).attr('src', url+'img/heart-black.png')
            console.log("Dislike");

            $.ajax({
                url: url+'dislike/'+$(this).data('id'),
                type: 'GET',
                success: function (res) 
                {
                    if(res.like)
                    {
                        console.log("DSILIKE A POST");
                    }
                    else
                    {
                        console.log("DISLIKE A POST");
                    } 
                }
            });

            like();
        });
    }
    dislike();
});