



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js"></script> -->
<script src="../js/scripts.js"></script>
<script>
function myFunction(x) {
  x.classList.toggle("change");
};
$(function(){
    $(".menubox").click(function(){
        $(".menu-wrap").slideToggle(1500);
        $(".logo-block").slideToggle(1000);
    });
});
</script>
