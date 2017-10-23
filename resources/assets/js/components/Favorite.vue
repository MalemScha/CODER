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
                count: this.reply.favoritesCount,
                active: this.reply.isFavorited
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
                return '/comments/' + this.reply.id + '/favorites';
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