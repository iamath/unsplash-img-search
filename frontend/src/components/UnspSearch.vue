<template>
  <div>
    <div class="d-flex w-50 mx-auto">
      <input class="form-control form-control-lg" v-model="query" />
      <button class="btn btn-primary btn-lg" @click="getImageUrl">
        <i class="fas fa-search"></i>
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

      const req = await axios.get('http://localhost:8080/?action=showSearch', {
        params: { query: this.query }
      })

      if (req.data.length === 0) {
      } else {
        this.$emit('clicked', req.data)
      }
    }
  }
}
</script>
