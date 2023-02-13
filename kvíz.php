<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
  <title>Uhádni hrdinu z hry League of Legends</title>
</head>
<body>
  <h1>Uhádni hrdinu z hry League of Legends</h1>
  <p>Vieš uhádnuť hrdinu podľa týchto rád?</p>

  <div id="hints">
    <p>Región: <span id="region"></span></p>
    <p>Pohlavie: <span id="gender"></span></p>
    <p>Rok vydania: <span id="age"></span></p>
    <p>Používa: <span id="cost"></span></p>
  </div>

  <form id="guess-form">
    <label for="guess">Zadaj svoj tip:</label>
    <input type="text" id="guess" placeholder="Meno hrdinu">
    <button type="submit">Potvrdiť</button>
  </form>

  <div style="text-align: center">
    <button style="margin: auto" onclick="location.reload()">Skús to znova!</button>
  </div>

  <div style="text-align: center">
  <a href="user_page.php"><button class="späť">Späť na hlavnú stránku</button></a>
  </div>

  <p id="result"></p>
 
 

  <script>
    const champions = [
      { name: "Ahri", region: "Demacia", gender: "Žena", age: "2009", cost: "Mana" },
    { name: "Annie", region: "Noxus", gender: "Žena", age: "2009", cost: "Mana" },
    { name: "Ashe", region: "Freljord", gender: "Žena", age: "2009", cost: "Mana" },
    { name: "Garen", region: "Demacia", gender: "Muž", age: "2010", cost: "Mana" },
    { name: "Jinx", region: "Piltover", gender: "Žena", age: "2013", cost: "Mana" },
    { name: "Katarina", region: "Noxus", gender: "Žena", age: "2009", cost: "Mana" },
    { name: "Lee Sin", region: "Ionia", gender: "Muž", age: "2011", cost: "Mana" },
    { name: "Malphite", region: "Shurima", gender: "Muž", age: "2010", cost: "Mana" },
    { name: "Nami", region: "Runeterra", gender: "Žena", age: "2012", cost: "Mana" },
    { name: "Riven", region: "Noxus", gender: "Žena", age: "2011", cost: "Mana" }
    ];

    // Select the elements we'll need to update
    const regionElement = document.querySelector("#region");
    const genderElement = document.querySelector("#gender");
    const ageElement = document.querySelector("#age");
    const costElement = document.querySelector("#cost");
    const resultElement = document.querySelector("#result");

    // Pick a random champion to be the answer
    const answer = champions[Math.floor(Math.random() * champions.length)];

    
    regionElement.textContent = answer.region;
    genderElement.textContent = answer.gender;
    ageElement.textContent = answer.age;
    costElement.textContent = answer.cost;

    // Handle form submission
    const form = document.querySelector("#guess-form");
    form.addEventListener("submit", (event) => {
      event.preventDefault();

      // Get the player's guess
      const guess = document.querySelector("#guess").value;

      // Check if the guess is correct
      if (guess.toLowerCase() === answer.name.toLowerCase()) {
        resultElement.textContent = "Správne! Vyhral si!";
      } else {
        resultElement.textContent = "Nesprávne. Správna odpoveď bola: " + answer.name;
      }
    });
  </script>
  <style>
   body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  background-color: white;
  border-radius: 10px;
  padding: 20px;
}

h1 {
  text-align: center;
  color: #333;
}

p {
  text-align: center;
  color: #333;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.myElement {
  text-align: center;
}

input[type="text"] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

button[onclick="location.reload()"] {
  width: 20%;
  background-color: #ff0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: center;
  text-align: center;
}

button[onclick="location.reload()"]:hover {
  background-color: #eb0a0a;
}


.späť{
  width: 20%;
  background-color: #0000ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: center;
  text-align: center;
}

.späť:hover{
  background-color: #3366ff;
}

.message {
  margin: 20px 0;
  text-align: center;
  font-size: 18px;
  color: #333;
}

.message.success {
  color: green;
}

.message.error {
  color: red;
}

  </style>
</body>
</html>