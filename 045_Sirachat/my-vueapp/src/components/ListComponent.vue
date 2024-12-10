<template>
    <div class="person-container">
        <PersonI name="Sirachat" :salary="10000"/>
        <PersonI name="Siriporn" :salary="20000"/>
        <PersonI name="Kornchawan" :salary="30000"/>
        <PersonI name="Siriwong" :salary="40000"/>
      <PersonI 
        v-for="(item, index) in employees"
        :key="index"
        :name="item.name"
        :salary="item.salary"
      />
    </div>
  </template>
  
  <script>
  import PersonI from './PersonI.vue';
  
  export default {
    name: 'ListComponent',
    components: {
      PersonI
    },
    props:["employees"]
  }
  </script>
  
  <style scoped>
  .person-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px; /* ระยะห่างระหว่างกล่อง */
    justify-items: center;
    margin: 20px;
  }
  </style>
  