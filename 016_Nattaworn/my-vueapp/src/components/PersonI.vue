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
  background-color: #6a1b9a; /* สีพื้นหลังม่วงเข้ม */
  border: 5px solid #9c27b0; /* สีขอบม่วงอ่อน */
  border-radius: 10px;
  padding: 20px;
  margin: 15px auto;
  width: 250px;
  text-align: center;
  color: #ffffff; /* สีข้อความ */
  font-weight: bold;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* เงา */
}

.person-card h2 {
  margin: 0;
  font-size: 24px;
  color: #e0e0e0; /* สีหัวข้อหลัก */
}

.person-card p {
  margin: 5px 0 0;
  font-size: 18px;
  color: #ffffff; /* สีข้อความ */
}
</style>
