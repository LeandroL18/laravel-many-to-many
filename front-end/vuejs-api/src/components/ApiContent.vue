<script>
import axios from 'axios'

export default{
  name:'ApiContent',
  data(){
    return{
      technologies: [],
      createActive: false,
      newTechnology:{
        name:''
      }
    }
  },

  mounted(){
    axios.get('http://localhost:8000/api/v1/technologies')
    .then(res => {
      const data = res.data;
        this.technologies = data.technologies;
        console.log("technologies:", this.technologies)
    })
    .catch(err => {
      console.err(err);
    })
  },

  methods:{
    createNewTechnology(){
      this.createActive = true;
    },
    submitNewTechnology(){
      console.log("submit with:", this.newTechnology);

      axios.post('http://localhost:8000/api/v1/technologies', this.newTechnology)
      .then(res => {
        const data = res.data;
        this.technologies.push(data.technology);
        this.createActive = false;
        console.log("technologies:", this.technologies)
      })
      .catch(err => {
        console.err(err);
      })
    }
  }
}
</script>

<template>
  <h1>Tecnologie</h1>
  
  <form v-if="createActive" @submit.prevent="submitNewTechnology">
    <label for="name">Nome</label><br>
    <input type="text" name="name" id="name" v-model="newTechnology.name"><br><br>

    <input type="submit" value="CREA">
  </form>

  <div v-else>
    <button @click="createNewTechnology">CREA NUOVA TECNOLOGIA</button><br><br>
    <ol>
      <li v-for="technology in technologies" :key="technology.id">
          {{ technology.name }}
      </li>
    </ol>
  </div>
</template>

<style scoped>

</style>
