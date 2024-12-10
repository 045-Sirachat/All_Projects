<template>
  <div id="app">
    <h1>My Vue App</h1>
    <ListComponent :employees="employees"/>
  </div>
</template>

<script>
import ListComponent from './components/ListComponent.vue';

export default {
  name: 'App',
  components: {
    ListComponent
  },
  data() {
    return {
      employees: [
        { name: "เกม หลาดปาง", salary: 100000 },
        { name: "อิท สตูล", salary: 200000 },
        { name: "นนท์ สตูล", salary: 300000 },
        { name: "แจ็ค แมนดาลิน", salary: 400000 }
      ]
    }
  }
}
</script>

<style>
#app {
  text-align: center;
  border: 5px solid #9c27b0; 
  border-radius: 10px;
  margin: 5.5%;
  padding: 10px;
  
  background-color: #6a1b9a; 
  background-image: url('./assets/background.jpg'); 
  background-size: cover; 
  background-position: center; 
}

h1 {
  color: #ffffff; 
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}
</style>
