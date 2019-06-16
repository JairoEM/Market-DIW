$(document).ready(function(){
    // Stars functionality
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

    // Turn off the key "enter"
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });

    // Function to back to "employees.php"
    $("#backEmployees").click(function () {
        location.href = "./employees.php";
    });

    // Functions to show the differents kind of playes on "orders.php"
    $("#newOrder").click(function(){
        $("#createOrder").show(1000);
        $("#showOrders").hide(1000);
    });

    $("#oldOrder").click(function(){
        $("#createOrder").hide(1000);
        $("#showOrders").show(1000);
    });

    $(".buttonID").click(function(){
        $(".idUpdated").val("" + this.id);
        $("#createOrder").hide(1000);
        $("#showOrders").hide(1000);
        $(".tabContent").show(1000);
    });

    // Functions to show the plates of different status
    $("#showAll").click(function(){
        $("#needToCook").show(1000);
        $("#alreadyDone").show(1000);
    });

    $("#showCookeds").click(function(){
        $("#needToCook").hide(1000);
        $("#alreadyDone").show(1000);
    });

    $("#showGreens").click(function(){
        $("#needToCook").show(1000);
        $("#alreadyDone").hide(1000);
    });
    
    // Function to make a form works into a dialog (NOT WORKING)
    // function submitForm(){
    //     $.ajax({
    //        type: "POST",
    //        url: "../php/changeStatus.php",
    //        cache:false,
    //        data: $('form#changeForm').serialize(),
    //        success: function(response){
    //            $("#contact").html(response);
    //            $("#changeDialog").modal('hide');
    //        },
    //        error: function(){
    //            alert("Error");
    //        }
    //    });
    // };

    // $("#changeForm").submit(function(event){
    //     submitForm();
    //     return false;
    // });

    // Function to make the submit button on bills show the iframe of the bill
    $("#billSubmit").click(function(){
        $("#iFrameBillDiv").show();
    });

    // Script to print only the iFrameBill in case we press the print button
    $("#buttonPrint").click(function(){
        window.frames["iFrameBill"].focus();
        window.frames["iFrameBill"].print();
    });
});