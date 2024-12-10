<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  <section>
    <h1>Sirachat Siriporn</h1>
    <p>My name is {{ firstname }}.</p>
    <p>Family name is {{ familyname }}.</p>
    <input type="text" v-on:input="nkname">
    <p>My nickname is {{ nickname }}.</p>
    <p>I am majoring in {{ major }}.</p>
    <p>Email: <span v-html="email"></span></p>
    <p>My full name is {{ getfullname() }}.</p>
    <p ><img :width="imageWidth" height=":imageHeight" v-bind:src ="image"></p>
    <a :href="fb" target="_blank">My Facebook</a>
    <ul>
      <li v-for="(item,index) in food" :key="index">{{ item }}</li>    
    </ul>
    <p>gender: {{ info.gender }}</p>
    <p>age: {{ info.age }}</p>
    <p>weight: {{ info.weight }}</p>
    <p>height: {{ info.height }}</p>
    <p>nationality: {{ info.nationality }}</p>
    <button @click="Show">My info</button>
    <button @click="agenoi">-age-</button>
    <button @click="agemaa">+age+</button>
  </section>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  data() {
    return {
      firstname: "Sirachat",
      familyname: "Siriporn",
      nickname: " ",
      major: "IT",
      email: "Itsjz@example.com",
      image: "https://th.bing.com/th/id/OIP.xX0l4WDND4t2nF-KOI4BWwHaHa?w=200&h=199&c=7&r=0&o=5&dpr=1.3&pid=1.7",
      imageWidth: 150,
      imageHeight: 150,
      fb: "https://www.facebook.com/",
      food: ["ไข่เจีนวเต๋าหู้", "ไก่ทอดกรอบๆ", "หมูย่างติดมัน"],
      info:{gender:"male", age:"25",weight:"51 kg",height:"198 cm",nationality:"China No.1"}
    }
  },
  methods: {
    getfullname() {
      return this.firstname + " " + this.familyname; 
    },
    Show() {
      alert("My info");
    },
    agenoi(){
      this.info.age--;
    },
    agemaa(){
      this.info.age++;
    },
    nkname(event){
      this.nickname = event.target.value;
      console.log(this.nickname);
    }
  },

  // components: {
  //   HelloWorld
  // }
}
</script>

<style>
/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
} */
</style>
