<template>
    <div class="col-sm-12 col-md-6 col-lg-4 mt-2" v-on:click="toMessages"  >
        <div class="card" style="width: 18rem;cursor: pointer;">  
            <img class="card-img-top" :src="thread.image" alt="Card image cap" />
            <div class="card-body">
                <p class="card-text">{{thread.title}}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['thread'],
    mounted() {
       // console.log("Component mounted.");
    },
    methods:{
        toMessages(){
            window.location = `/thread/${this.thread.id}`
        }
    }
};
</script>

