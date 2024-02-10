<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test document</title>
</head>
<body>

<form action="recieving_action.php" method="POST" id="contactForm">
                      <div class="form-group">
                          <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                      </div>
                      
                      <div class="form-group">
                          <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" id="message" name="message" placeholder="Your message"></textarea>
                      </div>
                       
                      <div class="form-group mb-0">
                        <!-- <button type="submit" class="btn puprple_btn">SEND MESSAGE</button> -->
                        <button type="submit" class="btn puprple_btn" onclick="window.location.assign('recieving_action.php')">SEND MESSAGE</button>
                        <!-- onclick="window.location.assign('contact_email_action.php')" -->

                      </div>
                    </form>    
</body>

</html>