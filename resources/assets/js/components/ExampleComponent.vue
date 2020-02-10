<template>
    <div class="panel panel-default">
        <div class="panel-heading">Example Component</div>

        <div class="panel-body">
            I'm an example component!
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            Echo.chanel('post-chanel').listen('PostCreated', event => {
                console.log(event.title);
            })
        }
    }
</script>
