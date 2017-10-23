<template>
    <button type="submit" class="btn btn-xs btn-default" @click="toggle">
        <span :class="classes"></span>
        <span v-text="count"></span>
    </button>
</template>

<script>
    export default {
        props: ['reply'],

        data() {
            return {
                count: this.reply.likesCount,
                active: this.reply.isLiked
            }
        },

        computed: {
            classes() {
                return [
                    'glyphicon',
                    this.active ? 'glyphicon-heart' : 'glyphicon-heart-empty'
                ];
            },

            endpoint() {
                return '/replies/' + this.reply.id + '/likes';
            }
        },

        methods: {
            toggle() {
                this.active ? this.destroy() : this.create();
            },

            create() {
                axios.post(this.endpoint);

                this.active = true;
                this.count++;            },

            destroy() {
                axios.delete(this.endpoint);

                this.active = false;
                this.count--;
            }
        }
    }
</script>