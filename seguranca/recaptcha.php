<script src="//www.google.com/recaptcha/api.js"></script>
    
<form action="cadastrar.php" method="POST">
    <div class="g-recaptcha" data-sitekey="6LeCdJMUAAAAAHaPWvGgEk09EpJP8ne6nHmglDzb"></div>
    <input type="email" name="inputEmail">
    <button type="submit">Enviar</button>
</form>
<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>