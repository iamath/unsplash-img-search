<template>
  <button class="btn btn-primary btn-lg" @click="getRandomImageUrl">
    show random image
  </button>
</template>

<script>
import axios from 'axios'

export default {
  methods: {
    async getRandomImageUrl() {
      this.$emit(
        'clicked',
        'https://miro.medium.com/max/882/1*9EBHIOzhE1XfMYoKz1JcsQ.gif'
      )
      const req = await axios.get('http://localhost:8080/?action=showRandom')
      this.$emit('clicked', req.data.photoUrl)
    }
  }
}
</script>
