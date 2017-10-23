<script>
    import Replies from '../components/Replies.vue';

    export default {
        props: ['initialCount'],

        components: {Replies},

        data() {
            return {
                repliesCount: this.initialCount
            };
        }
    }
</script>