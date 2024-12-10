<template>
    <div class="person-card">
      <h2>{{ name }}</h2>
      <p>Salary: {{ salary }} บาท</p>
    </div>
  </template>
  
  <script>
  export default {
    name: "PersonI",
    props: ["name", "salary"]
  }
  </script>
  
  <style scoped>
  .person-card {
    background-color: #000;
    border: 5px solid red;
    border-radius: 10px;
    padding: 20px;
    margin: 15px auto;
    width: 250px;
    text-align: center;
    color: red;
    font-weight: bold;
    
  }
  
  .person-card h2 {
    margin: 0;
    font-size: 24px;
  }
  
  .person-card p {
    margin: 5px 0 0;
    font-size: 18px;
    color: #fff;
  }
  </style>
  