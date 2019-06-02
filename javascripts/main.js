$(document).ready(function(){

    // STARS FUNCTION
    $('#star1').on({
        'click' : function(){
            $('#star2').attr('src', '../assets/emptyStar.svg');
            $('#star3').attr('src', '../assets/emptyStar.svg');
            $('#star4').attr('src', '../assets/emptyStar.svg');
            $('#star5').attr('src', '../assets/emptyStar.svg');
            
            if($('#star1').attr('src') == '../assets/emptyStar.svg'){
                $('#star1').attr('src', '../assets/halfStar.svg');
                $('#points').val('0.5');

            }else{
                if($('#star1').attr('src') == '../assets/halfStar.svg'){
                    $('#star1').attr('src', '../assets/fullStar.svg');
                    $('#points').val('1');

                }else{
                    if($('#star1').attr('src') == '../assets/fullStar.svg'){
                        $('#star1').attr('src', '../assets/emptyStar.svg');
                        $('#points').val('0');
                    }
                }
            }        
        }
    });

    $('#star2').on({
        'click' : function(){
            $('#star1').attr('src', '../assets/fullStar.svg');
            $('#star3').attr('src', '../assets/emptyStar.svg');
            $('#star4').attr('src', '../assets/emptyStar.svg');
            $('#star5').attr('src', '../assets/emptyStar.svg');

            if($('#star2').attr('src') == '../assets/emptyStar.svg'){
                $('#star2').attr('src', '../assets/halfStar.svg');
                $('#points').val('1.5');

            }else{
                if($('#star2').attr('src') == '../assets/halfStar.svg'){
                    $('#star2').attr('src', '../assets/fullStar.svg');
                    $('#points').val('2');

                }else{
                    if($('#star2').attr('src') == '../assets/fullStar.svg'){
                        $('#star2').attr('src', '../assets/emptyStar.svg');
                        $('#points').val('1');
                    }
                }
            }        
        }
    });

    $('#star3').on({
        'click' : function(){
            $('#star1').attr('src', '../assets/fullStar.svg');
            $('#star2').attr('src', '../assets/fullStar.svg');
            $('#star4').attr('src', '../assets/emptyStar.svg');
            $('#star5').attr('src', '../assets/emptyStar.svg');

            if($('#star3').attr('src') == '../assets/emptyStar.svg'){
                $('#star3').attr('src', '../assets/halfStar.svg');
                $('#points').val('2.5');

            }else{
                if($('#star3').attr('src') == '../assets/halfStar.svg'){
                    $('#star3').attr('src', '../assets/fullStar.svg');
                    $('#points').val('3');

                }else{
                    if($('#star3').attr('src') == '../assets/fullStar.svg'){
                        $('#star3').attr('src', '../assets/emptyStar.svg');
                        $('#points').val('2');
                    }
                }
            }        
        }
    });

    $('#star4').on({
        'click' : function(){
            $('#star1').attr('src', '../assets/fullStar.svg');
            $('#star2').attr('src', '../assets/fullStar.svg');
            $('#star3').attr('src', '../assets/fullStar.svg');
            $('#star5').attr('src', '../assets/emptyStar.svg');

            if($('#star4').attr('src') == '../assets/emptyStar.svg'){
                $('#star4').attr('src', '../assets/halfStar.svg');
                $('#points').val('3.5');

            }else{
                if($('#star4').attr('src') == '../assets/halfStar.svg'){
                    $('#star4').attr('src', '../assets/fullStar.svg');
                    $('#points').val('4');

                }else{
                    if($('#star4').attr('src') == '../assets/fullStar.svg'){
                        $('#star4').attr('src', '../assets/emptyStar.svg');
                        $('#points').val('3');
                    }
                }
            }        
        }
    });

    $('#star5').on({
        'click' : function(){
            $('#star1').attr('src', '../assets/fullStar.svg');
            $('#star2').attr('src', '../assets/fullStar.svg');
            $('#star3').attr('src', '../assets/fullStar.svg');
            $('#star4').attr('src', '../assets/fullStar.svg');

            if($('#star5').attr('src') == '../assets/emptyStar.svg'){
                $('#star5').attr('src', '../assets/halfStar.svg');
                $('#points').val('4.5');

            }else{
                if($('#star5').attr('src') == '../assets/halfStar.svg'){
                    $('#star5').attr('src', '../assets/fullStar.svg');
                    $('#points').val('5');

                }else{
                    if($('#star5').attr('src') == '../assets/fullStar.svg'){
                        $('#star5').attr('src', '../assets/emptyStar.svg');
                        $('#points').val('4');
                    }
                }
            }        
        }
    });

    // Desactivamos la tecla enter
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});