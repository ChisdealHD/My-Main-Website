<!DOCTYPE html>
<html>
<head>
</head>
<body>
<audio id="UBGradio" src=" http://streaming.radionomy.com/UBGRadio?lang=en-GB" autoplay="1"></audio>

<script>
  function setVolume(vol) { 
    document.getElementById("UBGradio").volume = vol;
  }
</script>

<script type="text/javascript"> setVolume(); </script>
</body>
</html>