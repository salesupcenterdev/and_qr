//по клику на всю панель-блок срабатывал акордион
$(document).ready(function(){
    $("#accordion .panel").click(function(){
        $(".collapse").collapse('toggle');
    });
});