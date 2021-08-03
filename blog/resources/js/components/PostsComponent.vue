<template>

    <div class="container d-flex flex-wrap">

        <div class="card text-left" v-for="post in posts">
            <img class="card-img-top" :src="post.image_url" alt="">
            <div class="card-body">
                <h4 class="card-title">{{post.title}}</h4>
                <p class="card-text">{{post.paragraph}}</p>
            </div>
        </div>
    </div>
</template>

<script>
const { default: Axios } = require('axios');

    export default {
        data () {
            return {
                posts: null,
            }
        },
        mounted() {
            console.log('Component mounted.')

            Axios.get('/api/blogs').then(resp => {
                this.posts = resp.data.data;
                console.log(this.posts);
            }).catch(e => {
                console.error('Sorry!' + e);
            })
        }
    }
</script>
<style lang="scss" scoped>
.card {
    .card-title {
        color: palevioletred;
    }
}
</style>
