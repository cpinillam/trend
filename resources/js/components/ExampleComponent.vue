<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <ul>
                        <li  v-for="profile in profiles" :key="profile.id">
                            {{profile.username}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data()  {
            return {
                profiles:"",
            }
        },
         
        mounted() {
            console.log('Component mounted.'),
            this.fetchData()
        },

        methods : {
            fetchData(){
                axios.get('/api/fetchProfile').then((response)=>{
                    this.profiles = response.data.profiles
                })
            }
        }
    }
</script>
