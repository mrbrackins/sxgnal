 <template>
  <div class="card-footer bg-light pt-0">
    <div class="border-bottom border-200 fs--1 py-3">
      <!-- <a class="text-700" href="#!">34 Comments</a> -->
    </div>
    <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
      <div class="col-auto">
        <a class="rounded d-flex align-items-center mr-3 text-700" href="#!">
          <img src="assets/img/illustrations/like-inactive.png" width="20" alt />
          <span class="ml-1">Like</span>
        </a>
      </div>
      <div class="col-auto">
        <a class="rounded d-flex align-items-center mr-3" href="#!">
          <img src="assets/img/illustrations/comment-active.png" width="20" alt />
          <span class="ml-1">Comment</span>
        </a>
      </div>
      <div class="col-auto d-flex align-items-center">
        <a class="rounded text-700 d-flex align-items-center" href="#!">
          <img src="assets/img/illustrations/share-inactive.png" width="20" alt />
          <span class="ml-1">Share</span>
        </a>
      </div>
    </div>
    <form class="d-flex align-items-center border-top border-200 pt-3">
      <div class="avatar avatar-xl">
        <img class="rounded-circle" src="assets/img/team/3.jpg" alt />
      </div>
      <input
        class="form-control rounded-capsule ml-2 fs--1"
        type="text"
        placeholder="Write a comment..."
      />
    </form>
    <div class="media mt-3">
      <div class="avatar avatar-xl">
        <img class="rounded-circle" src="assets/img/team/4.jpg" alt />
      </div>
      <div class="media-body ml-2 fs--1">
        <p class="mb-1 bg-200 rounded-soft p-2" style="    text-align: left;">
          <a class="font-weight-semi-bold" href="pages/profile.html">Username</a>
          Tanya Vanderpoel in Whiskey
        </p>
        <div class="px-2">
          <a href="#!">Like</a> •
          <a href="#!">Reply</a> • 23min
        </div>
      </div>
    </div>

    <!-- <a class="fs--1 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a> -->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Show comments mountedbra.");
  },
};
</script>
