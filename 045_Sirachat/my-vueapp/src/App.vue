<template>
  <h1>My Vue App</h1>
  <ListComponent :employees="employees"/>

</template>

<script>

import ListComponent from './components/ListComponent.vue';
export default {
  name: 'App',
  components: {
    ListComponent
  },
  data(){
    return {
      employees: [
        {name : "พี่แจ็ค คอร์เนีย", salary : 10000},
        {name : "พี่เปี้ยก เอกชน", salary : 20000},
        {name : "พี่หมัด พเนจร", salary : 30000},
        {name : "พี่น็อต ยังบอย", salary : 40000}
      ]
    }
  }
  
}
</script>

<style>
#app {
  text-align: center;
  border: 5px solid red;
  border-radius: 10px;
  margin: 5.5%;
  padding: 10px;

  background-image: url('./assets/black-red.png');
  background-size: cover; 
  background-position: center; 
  
}
h1{
  color: white;
}

</style>
