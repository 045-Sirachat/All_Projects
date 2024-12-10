<template>
  <div class="employee-list">
    <h2>Employee Directory</h2>
    <div class="person-container">
      <PersonI name="Nattaworn" :salary="10000" />
      <PersonI name="Sirachatt" :salary="20000" />
      <PersonI name="Ittikron" :salary="30000" />
      <PersonI name="Kornchawan" :salary="40000" />
      <PersonI 
        v-for="(item, index) in employees"
        :key="index"
        :name="item.name"
        :salary="item.salary"
      />
    </div>
  </div>
</template>

<script>
import PersonI from './PersonI.vue';

export default {
  name: 'ListComponent',
  components: {
    PersonI
  },
  props: ["employees"]
}
</script>

<style scoped>
.employee-list {
  text-align: center;
  background-image: url('@/assets/background.jpg'); 
  background-position: center; 
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
  color: #ffffff; 
  margin-bottom: 20px;
}

.person-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr); 
  gap: 20px; 
  justify-items: center; 
  justify-content: center; 
  margin: 0 auto; 
  max-width: 800px; 
}
</style>
  