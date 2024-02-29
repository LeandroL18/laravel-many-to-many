<script>
import axios from 'axios'

export default{
  name:'ApiContent',
  data(){
    return{
      technologies: []
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
  }
}
</script>

<template>
  <h1>Tecnologie</h1>
  <ul>
    <li v-for="technology in technologies" :key="technology.id">
        {{ technology.name }}
    </li>
  </ul>
</template>

<style scoped>

</style>
