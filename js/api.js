const API_URL = "http://ubgradio.chisdealhd.xyz/api/"

function API_song(elem,time)
{
    jQuery.get(API_URL+"song",function(song){
        jQuery(elem).html(song);
    });
    setInterval(function(){
    jQuery.get(API_URL+"song",function(song){
        jQuery(elem).html(song);
    })},time);
}


function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}

function API_artwork(elem,time)
{
    jQuery(elem).attr("src",API_URL+"artwork/?"+btoa(new Date()));
    setInterval(function(){
    jQuery(elem).attr("src","http://ubgradio.chisdealhd.xyz/api/artwork/index.php?"+getRandomInt(0, 999999);
},time);
}