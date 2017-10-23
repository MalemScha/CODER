<template>
    <div :id="'comment-'+id" class="panel panel-default">
        <div class="panel-heading">
            <div class="level">
                <h5 class="flex">
                    <a :href="'/@'+data.owner.name"  v-text="data.owner.name">
                    </a> <span v-text="ago"></span>
                </h5>

                <div v-if="signedIn">
                    <like :reply="data"></like>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <div v-if="editing">
                <div class="form-group">
                    <textarea class="form-control" v-model="body"></textarea>
                </div>

                <button class="btn btn-xs btn-primary" @click="update">Update</button>
                <button class="btn btn-xs btn-link" @click="editing = false">Cancel</button>
            </div>

            <div v-else v-text="body"></div>
        </div>

        <div class="panel-footer level" v-if="canUpdate">
            <button class="btn btn-xs mr-1" @click="editing = true">Edit</button>
            <button class="btn btn-xs btn-danger mr-1" @click="destroy">Delete</button>
        </div>
    </div>
</template>


<script>
    import Like from './Like.vue';
    import moment from 'moment';

    export default {
        props: ['data'],

        components: { Like },

        data() {
            return {
                editing: false,
                id: this.data.id,
                body: this.data.body
            };
        },
        computed: {
            ago() {
               return  moment(this.data.updated_at).fromNow();
            },
            signedIn() {
                return window.App.signedIn;
            },

            canUpdate() {
                return this.authorize(user => this.data.user_id == user.id);
            }
        },

        methods: {
            update() {
                axios.patch('/replies/' + this.data.id, {
                    body: this.body
                });
                this.editing = false;
            },

            destroy() {
                axios.delete('/replies/' + this.data.id);
                this.$emit('deleted', this.data.id);
            }
        }
    }
</script>