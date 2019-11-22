<template>
  <div>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
      <a class="navbar-brand mx-auto" href="#">Unsplash Search</a>
    </nav>
    <div class="container text-center">
      <h1 class="mt-5 mb-4">Find some images</h1>
      <UnspSearch @clicked="changeImage" />
      <h1 class="mt-3 mb-3">or</h1>
      <UnspRandom @clicked="changeImage" />
      <hr />
      <UnspImage :url="url" />
    </div>
  </div>
</template>

<script>
import 'bootstrap'
import 'bootswatch/dist/minty/bootstrap.min.css'
import '@fortawesome/fontawesome-free/css/all.min.css'

import UnspImage from './components/UnspImage'
import UnspSearch from './components/UnspSearch'
import UnspRandom from './components/UnspRandom'

export default {
  components: {
    UnspImage,
    UnspSearch,
    UnspRandom
  },
  data() {
    return {
      url: ''
    }
  },
  methods: {
    changeImage(url) {
      this.url = url
    }
  }
}
</script>
