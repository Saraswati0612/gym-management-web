<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<a href="admin-panel.php" class="btn btn-light ">Go Back</a>
<div class="about-section">
  <h1>CONTACT US</h1>
  <p>Please check out us on following social media platforms.</p>
  <p>we available on the all the mobile platforms for more information please checkout .</p>
  <h2>CONTACT ME</h2>
  <ul>
  <p>1. 3rd Floor, Prime Square Building, Above Federal Bank, Pimple Saudagar,Pune , Maharastra</p>
  <p>2. Datta Mandir Rd, Pune, Maharashtra 411057</p>
  </ul>
  
</div>




</body>
</html>
