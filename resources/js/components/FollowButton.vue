<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText" ></button>
    </div>
</template>

<script>
    export default {
        props: ['userId','follower'],
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                status: this.follower
            }
        },
        methods: {
            followUser() {
                axios.post('/follow/'+this.userId)
                .then(response=> {
                    // alert(response.data);
                    this.status = !this.status;
                    console.log(response.data);
                })
                .catch(erros=>{
                    if(erros.response.status === 401){
                        window.location = '/login';
                    }
                })

                ;
            }
        },
        computed: {
            buttonText() {
                return this.status ? 'Unfollow' : 'Follow';
            }
        }

    }
</script>
