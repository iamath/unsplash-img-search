<template>
  <div>
    <div class="d-flex w-50 mx-auto">
      <input type="text" class="form-control form-control-lg" v-model="query" />
      <button type="submit" class="btn btn-primary btn-lg" @click="getImageUrl">
        search
      </button>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      query: ''
    }
  },
  methods: {
    async getImageUrl() {
      if (!this.query) return

      this.$emit(
        'clicked',
        'https://miro.medium.com/max/882/1*9EBHIOzhE1XfMYoKz1JcsQ.gif'
      )

      const req = await axios.get('http://localhost:8080/?action=showSearch', {
        params: { query: this.query }
      })

      if (req.data !== 404) {
        this.$emit('clicked', req.data.photoUrl)
      } else {
        this.$emit('clicked', 'https://mycity.com/assets/images/404.png')
      }
    }
  }
}
</script>
