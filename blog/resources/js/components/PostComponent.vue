<template>
    <div class="">
        <h2>Test Component</h2>
        <p>{{text}}</p>
    </div>
</template>

<script>

    export default {
        props: ['text'],
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

