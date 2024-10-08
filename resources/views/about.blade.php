<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

* {
  box-sizing: border-box;
}

.container {
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.column {
  float: left;
  width: 50%;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    margin-top: 0;
  }
}

.about-section {
  background-image: linear-gradient(to bottom, #f2f2f2, #fff);
  padding: 40px;
  text-align: center;
}

.about-section h2 {
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
}

.about-section p {
  font-size: 18px;
  color: #666;
  margin-bottom: 40px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  transition: background-color 0.3s;
}

.topnav a:hover {
  background-color: #444;
  color: white;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
  <div class="topnav">
    <a href="/home">Home</a>
    <a href="/contact">Contact</a>
    <a href="/about">About</a>
  </div>
  <div class="container">
    <div class="about-section">
      <h2>About Me</h2>
      <p>Hello! My name is Davelyn Grace I. Obejero, and I'm a student in the Bachelor of Science in Computer Science program.</p>
    </div>
    <div class="row">
      <div class="column">
        <h3>Interests</h3>
        <p>I'm interested in software development, artificial intelligence, etc.</p>
      </div>
      <div class="column">
        <h3>Skills</h3>
        <p>I have skills in programming languages.</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <h3>Goals</h3>
        <p>My goal is to become a software engineer so that I can intergate the things that I have learned.</p>
      </div>
    </div>
  </div>
</body>
</html>