<template>
    <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
        <div
            class="card"
            style="width: 18rem;cursor: pointer;height:18rem"
            v-on:click="toMessages"
        >
            <img
                class="card-img-top "
                style="height: 14rem"
                :src="thread.image"
                alt="Card image cap"
            />
            <div class="card-body">
                <p class="card-title">{{ thread.title }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["thread"],
    methods: {
        toMessages() {
            window.location = `/thread/${this.thread.id}`;
        }
    }
};
</script>
