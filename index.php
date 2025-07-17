<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Thevenot Landscaping & Lawncare</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <!-- Hero Section -->
  <header class="hero">
    <div class="overlay"></div>

    <!-- Top Navigation -->
    <div class="top-nav">
      <div class="logo">
        <img src="images/TLL-logo.png" alt="TLL Logo" />
      </div>
      <div class="phone">
        <a href="tel:8125551234">(812) 555-1234</a>
        <a href="#services" class="nav-button">Services</a>
        <a href="#showcases" class="nav-button">Showcases</a>
      </div>
    </div>

    <!-- Hero Content and Form -->
    <div class="hero-flex-container">
      <div class="hero-content">
        <h1>Best Lawn and Landscaping Services in Floyd County</h1>
        <p>
          A business built on friendly service and reliable results.
          We're committed to giving your property the care it deserves.
        </p>
      </div>

      <form class="quote-form glass-card" action="form/send_quote.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="tel" name="phone" placeholder="Phone Number" required />
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="text" name="address" placeholder="Address, City (Service Location)" required />

        <label>What services are you interested in?</label>
        <div class="services">
          <label><input type="checkbox" name="services[]" value="Mowing" /> Mowing</label>
          <label><input type="checkbox" name="services[]" value="Mulching" /> Mulching</label>
          <label><input type="checkbox" name="services[]" value="Trimming" /> Trimming</label>
          <label><input type="checkbox" name="services[]" value="Landscape Design" /> Landscape Design</label>
          <label><input type="checkbox" name="services[]" value="Leaf Removal" /> Leaf Removal</label>
          <label><input type="checkbox" name="services[]" value="Snow Removal" /> Snow Removal</label>
        </div>

        <label for="budget">Estimated Budget</label>
        <select name="budget" id="budget" required>
          <option value="">Select your budget</option>
          <option value="under-500">$0 - $500</option>
          <option value="500-1000">$500 - $1,000</option>
          <option value="1000-5000">$1,000 - $5,000</option>
          <option value="5000+">$5,000+</option>
        </select>

        <textarea name="details" placeholder="Any additional details?"></textarea>
        <button type="submit">Get a Free Quote</button>
      </form>
    </div>
  </header>
</body>
</html>
