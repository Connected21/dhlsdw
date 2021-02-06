<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<title></title>
</head>
<style type="text/css">
	html{
		 background-image: url("wallpaper.jpg");
         background-repeat: no-repeat;
         width: 100%;
         height: 100%;
	}


section{
	margin-top: 60px;
	 background-color: rgba(255, 255, 255, .1);
	
}


h1{
	color: #ffffff;
}

h2{
	color: #ffffff;
}

p{
	color: #ffffff;
	font-family: garamond, verdana;
	text-align: justify;
	font-size: 16px;
}
</style>
<body>
<center>
<h1>сохранить себя</h1>
</center>
<section>
<center>
  <h2>THE TRUE STORY OF SUICIDE MOUSE</h2>
  </center>
  <div class="truncate">

    <p> The cartoon was actually nine minutes and four seconds long.

This is what my source, an acquaintance of Mr. Maltin and a personal assistant to one of the higher Disney executives, emailed to me, in full. After it cut to black, it stayed like that until the sixth minute before going back to Mickey walking. The sound was different this time, though. Instead of the piano, there was a murmuring. It wasn't actual talking, but more like a gurgled cry. Do you remember those Mickey Mouse cartoons from the 1930s? The ones put out on DVD a few years ago? Well, I hear there's one that was unreleased, even to the most avid classic Disney fans.</p>

    <audio controls>
  <source src="screen.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio> 

    <p> According to most sources, it's nothing special. it's just a continuous loop (like in the Flintstones) of Mickey walking past six buildings for two or three minutes before fading out.Unlike the cutesy tunes put in other cartoons, however, the song on this cartoon wasn't a song at all. It was just a constant banging on a piano's keys for a minute and a half before going to white noise for the remainder of the film.It wasn't the jolly old Mickey we've come to love, either. Mickey wasn't dancing or even smiling. He was just kind of walking as if you or I would walk, with his head tilted to the side as he kept this dismal look upon his face. Up until a year or two ago, everyone believed that after it cut to black, that was it.</p>

    <p> When Leonard Maltin was reviewing the cartoon to be put in the complete series, he decided it was too junk to be included. However, he wanted to have a digital copy due to the fact that it was a creation of Walt's. When he had a digitized version on his computer, he noticed something As the noise got more indistinguishable and loud over the next minute, the picture began to get strange. The sidewalk started to go in directions that seemed impossible based on how Mickey was walking. The dismal face of the mouse was slowly curling into a smirk, too. On the seventh minute, the murmur turned into a blood-curdling scream and the picture was becoming more obscure. Colors were happening that shouldn't have been possible at the time. Mickey's face began to fall apart, with his eyes rolling to the bottom of his chin and his curled smile pointing upward on the left side of his face.</p>

     <audio controls>
  <source src="suicide.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio> 

    <p> The buildings became rubble floating in midair and the sidewalk was still impossibly navigating in warped directions. Mr. Maltin became disturbed and left the room, sending an employee to finish the video and take notes of everything happening up until the last second and immediately store the disc of the cartoon in the vault afterward. The distorted screaming lasted until eight minutes and a few seconds in, when it abruptly cuts to the Mickey Mouse face at the end of every video with what sounded like an out of tune music box playing in the background. This happened until the last thirty seconds, but I haven't been able to find out what happened in those final seconds. From a security guard under me who was making rounds outside that room, I was told what happened after. After the video ended, the employee stumbled out of the room looking pale. He repeated, "Real suffering is not known," seven times before taking the guard's pistol and shooting himself.</p>

    <p>  The only thing I could get out of Leonard Maltin was that the last frame was a piece of Russian text that roughly said, "The sights of Hell bring its viewers back in." As far as I know, no one else has seen it. However, there have been dozens of attempts to get the file onto the internet by employees inside the studios, all of whom were promptly terminated of their jobs. Whether or not it got online is up for debate, but if rumors serve me right it's online under the name 'suicidemouse.avi.' If you ever find a copy of it, I want you to never view it. Contact me by phone immediately, regardless of the time. When a Disney death is covered up as well as this, it means this has to be something huge.</p>
  </div>
</section>
</body>
<script type="text/javascript">
	$(document).ready(function() {
  (function() {
    var showChar = 400;
    var ellipsestext = "...";

    $(".truncate").each(function() {
      var content = $(this).html();
      if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content;
        var html =
          '<div class="truncate-text" style="display:block">' +
          c +
          '<span class="moreellipses">' +
          ellipsestext +
          '&nbsp;&nbsp;<a href="" class="moreless more">more</a></span></span></div><div class="truncate-text" style="display:none">' +
          h +
          '<a href="" class="moreless less">Less</a></span></div>';

        $(this).html(html);
      }
    });

    $(".moreless").click(function() {
      var thisEl = $(this);
      var cT = thisEl.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisEl.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).fadeToggle();
      }
      return false;
    });
    /* end iffe */
  })();

  /* end ready */
});

</script>
</html>