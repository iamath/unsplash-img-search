<template>
  <div class="position-relative mb-3">
    <img :src="img.urls.small" />
    <div class="overlay">
      <div class="row d-flex align-items-end h-100">
        <div class="col py-3">
          <a
            class="text-white font-weight-bold text-decoration-none"
            :href="img.user.portfolio_url"
          >
            <img :src="img.user.profile_image.small" class="profile-pic" />
            {{ img.user.name }}
          </a>
        </div>
        <div class="col-4 py-3">
          <a :href="img.links.download" title="download">
            <i class="fas fa-download fa-lg text-white pb-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['img']
}
</script>

<style scoped>
img {
  object-fit: contain;
  width: 100%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.2s;
  background-color: rgba(0, 0, 0, 0.2);
}

.overlay:hover {
  opacity: 1;
}

.profile-pic {
  border-radius: 50%;
  width: 36px;
}
</style>
