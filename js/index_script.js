$(document).ready(function(){
            

            $(".styling").hide(0).delay(100).fadeIn("3000");
            var scroll_pos = 0;
            $(document).scroll(function() {
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 60) {
                    $(".nope").css('opacity','1');
                    $(".nope").css('transition-duration','0.4s');
                } else {
                    $(".nope").css('opacity','0');
                }
            });
            $('.carousel').carousel('cycle');

        });
