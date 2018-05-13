

<div id="slider-wrapper"><div id="slider"><a href="javascript:void();" style="display: block;"><img src="https://lh6.googleusercontent.com/-jUaHIEYN54Y/T3uDK4rgI0I/AAAAAAAACdE/BQwnSJSIQ04/s1600/ejemplo7.jpg"><p>No sabe hablar, pero se fija mucho</p></a><a href="javascript:void();" style="display: none;"><img src="https://lh3.googleusercontent.com/-6qmXITahg04/TYEE3OaVDfI/AAAAAAAAABI/zoQvYPZWq6U/s1600/alice+in+wonderland.jpg"><p>Alice in Wonderland</p></a><a href="javascript:void();" style="display: none;"><img src="https://lh6.googleusercontent.com/proxy/dnyburlUnh8w9rWlnSu8wbs6-VgpT5Qz8_ptdBqgzeBniEb4hVOU82nkFHsCw2tRsaLpp14Spg0mnNMM=s0-d"><p>Rino &amp; Rino Jr.</p></a></div><a class="mas" href="javascript:void();">›</a><a class="menos" href="javascript:void();">‹</a></div>









<script>
$(function(){
$('#slider a:gt(0)').hide();
var interval = setInterval(changeDiv, 100);
function changeDiv(){
$('#slider a:first-child').fadeOut(1000).next('a').fadeIn(1000).end().appendTo('#slider');
};
$('.mas').click(function(){
changeDiv();
clearInterval(interval);
interval = setInterval(changeDiv, 100);
});
$('.menos').click(function(){
$('#slider a:first-child').fadeOut(1000);
$('#slider a:last-child').fadeIn(1000).prependTo('#slider');
clearInterval(interval);
interval = setInterval(changeDiv, 100);
});
});
</script>

<style>
/* Contenedor general */
#slider-wrapper {
  position: relative;
overflow: hidden;
  width: 800px;
  max-width: 100%;
  margin: 0 auto;
  padding: 0 10px;
  font-family: arial, sans-serif;
  font-size: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* Contenedor slider */
#slider { 
  position: relative;
  width: 100%;
  padding-bottom: 50%; /* Aspect ratio */
  overflow: hidden;
  border:10px solid #333;
  border-radius: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#slider > a {
  position:absolute;
  top:0;
  left:0;
  width: 100%;
  min-height: 100%;
}
/* Ajuste de las imágenes */
#slider img {
  width: 100%;
max-width: 100% !important;
  min-height: 100%;
  position: absolute;
  margin:0;
  padding:0; 
  border:0;
}
/* Texto que acompaña a cada imagen */
#slider p {
  position: absolute;
  bottom: 5%;
  left: 0;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  width: 80%;
  height: 18px;
  margin:0;
  padding: 5px 0;
  border-radius: 0 20px 20px 0;
  color: #eee;
  background: #333;
  font-size: 18px;
  line-height: 18px;
  text-align:center;
}
/* Flechas de navegación */
a.mas, a.menos {
  position: absolute;
  top: 50%;
  left: 0px;
  z-index: 10;
  width: 20px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  font-size: 30px;
  color:  white;
  background: #333;
  text-decoration: none;
  transition: .5s margin ease;
}
a.mas {
left: 100%;
margin-left: 100px;
}
#slider-wrapper:hover a.mas {
  margin-left: -40px;
}
a.menos {
  left: 0;
  margin-left: -100px;
}
#slider-wrapper:hover a.menos {
  margin-left: 10px;
}</style><script>$(function(){
  $('#slider a:gt(0)').hide();
  var interval = setInterval(changeDiv, 6000);
  function changeDiv(){
      $('#slider a:first-child').fadeOut(1000)
      .next('a').fadeIn(1000)
      .end().appendTo('#slider');
  }
  $('.mas').click(function(){
    changeDiv();
    clearInterval(interval);
    interval = setInterval(changeDiv, 6000);
  });
  $('.menos').click(function(){
    $('#slider a:first-child').fadeOut(1000);
    $('#slider a:last-child').fadeIn(1000).prependTo('#slider');
    clearInterval(interval);
    interval = setInterval(changeDiv, 6000);
  });
});</script><br />