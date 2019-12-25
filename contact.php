<?php 
require ('includes/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" type="text/css" href="css/about.css">
<div id="google_translate_element"></div>

<script type="text/javascript">
  function googleTranslateElementInit() { 
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>

<div id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
				<h2>Keep in touch</h2>
			</div>
      <form id="email" name="email" onsubmit="return validateForm(this)"  action="email.php" method="post" >
        <div id="form_fname">
          <label for="fname"></label>
        <input type="text" name="fname" id="fname" placeholder="firstname" />  
        </div>
        <div id="form_lname">
          <label for="lname"></label>
          <input type="text" name="lname" id="lname" placeholder="lastname" />  
        </div>
        <div id="form_email">
          <label for="email"></label>
          <input type="text" name="email" id="email" placeholder="email" />   
        </div>
        <div id="form_message">   
          <label for="Message"></label>
          <textarea name="message" id="message" cols="45" rows="5"></textarea>  
        </div>
        <div id="form_submit"> 
          <input type="submit" name="submit" id="submit" value="" placeholder="send message" style="color: blue;" />
        </div>
      </form>

      <script> 
        function validateForm() {  
          if (document.forms['email'].fname.value == ""){ 
            alert("First name must be filled out"); 
            return false;
          } 
          if (document.forms['email'].lname.value == ""){
            alert("Last name must be filled out");
            return false;
          }
          if (document.forms['email'].email.value == ""){
            alert("Email name must be filled out");
            return false;
          }
            if (document.forms['email'].message.value == ""){
            alert(" Message is missing!");
            return false;
          } 
          else{
            alert("Thank you! Your message was recieved!"); 
            return true;                      
          }
        };
      </script>
      <?php 
// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  
</script>
  </div>
</div>
</div>


<?php	
require ('includes/footer.php');
?>
