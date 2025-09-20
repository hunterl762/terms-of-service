<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    padding: 20px;
  }

  .container {
    max-width: 600px;
    margin: 0 auto;
    background: white;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
  }

  .header {
    background: linear-gradient(135deg, #ff6b6b, #ee5a52);
    padding: 30px;
    text-align: center;
    color: white;
  }

  .header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
  }

  .form-container {
    padding: 40px;
  }

  .form-group {
    margin-bottom: 25px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 15px;
    border: 2px solid #e1e5e9;
    border-radius: 10px;
    font-size: 16px;
    transition: all 0.3s ease;
    font-family: inherit;
  }

  input:focus,
  textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
  }

  textarea {
    min-height: 120px;
    resize: vertical;
  }

  .submit-btn {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border: none;
    padding: 18px 40px;
    border-radius: 50px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
  }

  .submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
  }

  /* Easter Egg Styles */
  .konami-activated {
    animation: rainbow 2s linear infinite;
  }

  @keyframes rainbow {
    0% {
      filter: hue-rotate(0deg);
    }

    100% {
      filter: hue-rotate(360deg);
    }
  }

  .secret-message {
    display: none;
    background: #2ecc71;
    color: white;
    padding: 15px;
    border-radius: 10px;
    margin: 20px 0;
    text-align: center;
    animation: slideIn 0.5s ease;
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .php-love {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #8e44ad;
    color: white;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    z-index: 1000;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
  }

  .floating-php {
    position: absolute;
    font-size: 20px;
    color: #8e44ad;
    pointer-events: none;
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {

    0%,
    100% {
      transform: translateY(0px) rotate(0deg);
      opacity: 1;
    }

    50% {
      transform: translateY(-20px) rotate(180deg);
      opacity: 0.7;
    }
  }

  .success-message,
  .error-message {
    padding: 15px;
    border-radius: 10px;
    margin: 20px 0;
    text-align: center;
  }

  .success-message {
    background: #2ecc71;
    color: white;
  }

  .error-message {
    background: #e74c3c;
    color: white;
  }
  </style>
</head>

<body>
  <div class="container" id="mainContainer">
    <div class="header">
      <h1>Get in Touch! 🚀</h1>
      <p>We'd love to hear from you</p>
    </div>

    <div class="form-container">
      <!-- Easter Egg: Secret message for developers -->
      <div id="secretMessage" class="secret-message">
        🎉 Konami Code activated! You found the secret developer mode! 🎉
      </div>

      <!-- Easter Egg: PHP love message -->
      <div id="phpLove" class="php-love">
        <h2>💜 PHP LOVE DETECTED! 💜</h2>
        <p>Someone mentioned the magic word! PHP developers unite! 🐘</p>
        <button onclick="closePHPLove()"
          style="margin-top: 15px; padding: 10px 20px; background: white; color: #8e44ad; border: none; border-radius: 10px; cursor: pointer;">Close</button>
      </div>

      <?php
            // Easter Egg: Funny error messages
            $funnyErrors = [
                "Oops! Looks like the hamsters powering our servers took a coffee break ☕",
                "Error 404: Your message is in another castle 🏰",
                "Houston, we have a problem... but it's probably just a semicolon 🚀",
                "The message fairies are on strike today 🧚‍♀️",
                "Our servers are doing the Macarena instead of processing your form 💃"
            ];
            
            $successMessages = [
                "Your message has been launched into cyberspace! 🚀",
                "Message received! Our notification ninjas are on it! 🥷",
                "Success! Your words have been digitally bottled and sent! 📧",
                "Boom! Message delivered faster than a caffeinated developer! ⚡",
                "Your message is now part of the matrix... in a good way! 🕶️"
            ];
            
            $showMessage = '';
            $messageType = '';
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = trim($_POST['name'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $message = trim($_POST['message'] ?? '');
                
                // Easter Egg: Special responses for certain inputs
                if (stripos($message, 'php') !== false || stripos($name, 'php') !== false) {
                    echo "<script>showPHPLove();</script>";
                }
                
                if (stripos($message, 'bug') !== false) {
                    $showMessage = "🐛 Bug report detected! Don't worry, it's not a bug, it's a feature! 😄";
                    $messageType = 'success';
                } elseif (stripos($message, 'coffee') !== false || stripos($message, 'caffeine') !== false) {
                    $showMessage = "☕ Fellow coffee lover detected! Your message has been prioritized! ⚡";
                    $messageType = 'success';
                } elseif (stripos($message, 'hello world') !== false) {
                    $showMessage = "👋 Classic! Every developer's first words. Your message has been compiled successfully! 💻";
                    $messageType = 'success';
                } elseif (empty($name) || empty($email) || empty($message)) {
                    $showMessage = $funnyErrors[array_rand($funnyErrors)];
                    $messageType = 'error';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $showMessage = "🤖 Beep boop! That email address looks suspicious to our robots!";
                    $messageType = 'error';
                } else {
                    // Here you would typically send the email or save to database
                    // For demo purposes, we'll just show a success message
                    $showMessage = $successMessages[array_rand($successMessages)];
                    $messageType = 'success';
                    
                    // Easter Egg: Log funny message for developers
                    error_log("🎉 New contact form submission from: $name (Email: $email) - Message length: " . strlen($message) . " characters. PHP rocks! 🐘");
                }
            }
            ?>

      <?php if ($showMessage): ?>
      <div class="<?php echo $messageType; ?>-message">
        <?php echo htmlspecialchars($showMessage); ?>
      </div>
      <?php endif; ?>

      <form method="POST" action="">
        <div class="form-group">
          <label for="name">Name *</label>
          <input type="text" id="name" name="name" required
            value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" placeholder="Enter your awesome name...">
        </div>

        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" required
            value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" placeholder="your.email@awesome.com">
        </div>

        <div class="form-group">
          <label for="message">Message *</label>
          <textarea id="message" name="message" required
            placeholder="Tell us something amazing... (Hint: try mentioning 'php', 'coffee', or 'hello world')"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
        </div>

        <button type="submit" class="submit-btn">
          Send Message 🚀
        </button>
      </form>

      <!-- Easter Egg: Hidden developer info -->
      <div
        style="margin-top: 30px; padding: 20px; background: #f8f9fa; border-radius: 10px; font-size: 14px; color: #666;">
        <strong>Developer Easter Eggs:</strong>
        <ul style="margin-top: 10px; margin-left: 20px;">
          <li>Try the Konami Code: ↑↑↓↓←→←→BA</li>
          <li>Mention "php" in your message</li>
          <li>Try "hello world", "coffee", or "bug" in your message</li>
          <li>Double-click the header</li>
          <li>Check the browser console for hidden messages!</li>
        </ul>
      </div>
    </div>
  </div>

  <script>
  // Easter Egg: Konami Code
  let konamiCode = [];
  const konamiSequence = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65]; // ↑↑↓↓←→←→BA

  document.addEventListener('keydown', function(e) {
    konamiCode.push(e.keyCode);
    if (konamiCode.length > konamiSequence.length) {
      konamiCode.shift();
    }

    if (JSON.stringify(konamiCode) === JSON.stringify(konamiSequence)) {
      activateKonamiMode();
    }
  });

  function activateKonamiMode() {
    document.getElementById('mainContainer').classList.add('konami-activated');
    document.getElementById('secretMessage').style.display = 'block';
    console.log('🎮 KONAMI CODE ACTIVATED! You are a true developer! 🎮');

    // Spawn floating PHP elephants
    for (let i = 0; i < 10; i++) {
      setTimeout(() => createFloatingPHP(), i * 200);
    }
  }

  function createFloatingPHP() {
    const php = document.createElement('div');
    php.className = 'floating-php';
    php.innerHTML = '🐘';
    php.style.left = Math.random() * window.innerWidth + 'px';
    php.style.top = Math.random() * window.innerHeight + 'px';
    document.body.appendChild(php);

    setTimeout(() => {
      php.remove();
    }, 3000);
  }

  // Easter Egg: Header double-click
  document.querySelector('.header h1').addEventListener('dblclick', function() {
    this.innerHTML = '🎉 You found a secret! 🎉';
    console.log('🔍 Secret header message activated! Keep exploring!');
  });

  // Easter Egg: PHP love detector
  function showPHPLove() {
    document.getElementById('phpLove').style.display = 'block';
    console.log('💜 PHP LOVE DETECTED! Welcome, fellow PHP developer! 🐘');
  }

  function closePHPLove() {
    document.getElementById('phpLove').style.display = 'none';
  }

  // Easter Egg: Console messages
  console.log('%c🚀 Welcome to our Contact Form! 🚀', 'color: #667eea; font-size: 20px; font-weight: bold;');
  console.log('%cHidden developer messages await...', 'color: #ff6b6b; font-size: 14px;');
  console.log('%c🐘 Made with PHP love by awesome developers!', 'color: #8e44ad; font-size: 16px;');

  // Easter Egg: Special message detector
  document.getElementById('message').addEventListener('input', function() {
    const value = this.value.toLowerCase();
    if (value.includes('42')) {
      console.log('🌌 The answer to the ultimate question of life, the universe, and everything!');
    }
    if (value.includes('stackoverflow')) {
      console.log('📚 Every developer\'s best friend detected!');
    }
  });

  // Easter Egg: Success animation
  <?php if ($messageType === 'success'): ?>
  setTimeout(() => {
    for (let i = 0; i < 5; i++) {
      setTimeout(() => createFloatingPHP(), i * 300);
    }
  }, 500);
  <?php endif; ?>
  </script>
</body>

</html>