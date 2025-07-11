<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thevenot Landscaping & Lawncare</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Hero Image -->
  <header class="hero">
    <nav class="top-nav">
      <div class="logo">Thevenot Landscaping</div>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="quote.php" class="cta">Contact Us</a></li>
      </ul>
    </nav>

    <div class="hero-content">
      <h1>Best Lawn and Landscaping Services in Floyd County</h1>
      <p>
        A business built on friendly service and reliable results. We're committed to
        giving your property the care it deserves.
      </p>
    </div>
  </header>

  <!-- Quote Form (below hero) -->
  <section id="quote" class="quote-section">
    <form class="quote-form" action="form/send_quote.php" method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="text" name="address" placeholder="Address, City (Service Location)" required>
      <textarea name="details" placeholder="How can we help you?" required></textarea>
      <button type="submit">Get a Free Quote </button>
    </form>
  </section>
</body>
</html>
