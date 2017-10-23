<script>
    import Comments from '../components/Comments.vue';

    export default {
        props: ['initialCount'],

        components: {Comments},

        data() {
            return {
                repliesCount: this.initialCount
            };
        }
    }
</script>