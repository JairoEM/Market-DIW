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

            }else{
                if($('#star1').attr('src') == '../assets/halfStar.svg'){
                    $('#star1').attr('src', '../assets/fullStar.svg');

                }else{
                    if($('#star1').attr('src') == '../assets/fullStar.svg'){
                        $('#star1').attr('src', '../assets/emptyStar.svg');
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

            }else{
                if($('#star2').attr('src') == '../assets/halfStar.svg'){
                    $('#star2').attr('src', '../assets/fullStar.svg');

                }else{
                    if($('#star2').attr('src') == '../assets/fullStar.svg'){
                        $('#star2').attr('src', '../assets/emptyStar.svg');
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

            }else{
                if($('#star3').attr('src') == '../assets/halfStar.svg'){
                    $('#star3').attr('src', '../assets/fullStar.svg');

                }else{
                    if($('#star3').attr('src') == '../assets/fullStar.svg'){
                        $('#star3').attr('src', '../assets/emptyStar.svg');
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

            }else{
                if($('#star4').attr('src') == '../assets/halfStar.svg'){
                    $('#star4').attr('src', '../assets/fullStar.svg');

                }else{
                    if($('#star4').attr('src') == '../assets/fullStar.svg'){
                        $('#star4').attr('src', '../assets/emptyStar.svg');
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

            }else{
                if($('#star5').attr('src') == '../assets/halfStar.svg'){
                    $('#star5').attr('src', '../assets/fullStar.svg');

                }else{
                    if($('#star5').attr('src') == '../assets/fullStar.svg'){
                        $('#star5').attr('src', '../assets/emptyStar.svg');
                    }
                }
            }        
        }
    });

});