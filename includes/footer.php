<div class="container group">
    <img class="footer-nelly" src="../images/nelly-footer.png" alt="Meet Nelly">
  <div class="footer-content group">

    <div class="six pull-right">
      <p>Contact Declan at: <a href="mailto:declan@nellyandfriends.com">declan@nellyandfriends.com</a></p>
    </div><!-- end six columns -->
  </div><!-- footer-content -->
</div><!-- end container -->

<script src="../js/modernizr.js"></script>
<script>
  //SVG fallback
  if (!Modernizr.svg) {
        var imgs = document.getElementsByTagName('img');
        var svgExtension = /.*\.svg$/
        var l = imgs.length;
        for(var i = 0; i < l; i++) {
            if(imgs[i].src.match(svgExtension)) {
                imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
                console.log(imgs[i].src);
            }
        }
    };
</script>