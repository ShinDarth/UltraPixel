<div id="morefoot"><center>
<?php
 if (get_option('footbar'))
 {
   echo get_option('footbar');
 }
else
{
  echo "<hr>";
}
 
?>
</center>
<div class="cleared"></div>
</div><!-- Closes morefoot -->



<div id="footer">
<div id="footerleft">
<p>Powered by <a href="http://www.wordpress.org/">WordPress</a>. Theme <a href="http://ultrapixel.altervista.org/">UltraPixel</a> <font color="#00fff2">Cyan Light</font> 2.5<font color="#00fff2">.0</font> designed by <a href="http://www.shinworld.altervista.org">Shin Darth</a> & <a href="http://www.shinworld.altervista.org"><font color="lightblue">Helias</font></a>.
<!-- Numerose persone hanno lavorato gratuitamente per lo sviluppo di WordPress, pixel e UltraPixel. Per favore non rimuovere i crediti.-->
</div>

<div id="footerright">
 <a href="#main">torna sopra &uarr;</a></p>
</div>

<div class="cleared"></div>
<?php wp_footer(); ?>
</div><!-- Closes footer -->

</div><!-- Closes wrapper -->

</body>
</html>
