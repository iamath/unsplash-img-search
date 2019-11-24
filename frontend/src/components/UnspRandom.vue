<template>
  <button
    class="btn btn-primary btn-lg d-block mx-auto"
    @click="getRandomImage"
  >
    show random image
    <i class="fas fa-random"></i>
  </button>
</template>

<script>
import axios from 'axios'

export default {
  methods: {
    async getRandomImage() {
      const req = await axios.get('http://localhost:8080/?action=showRandom')
      this.$emit('clicked', [req.data])
    }
  }
}
</script>
