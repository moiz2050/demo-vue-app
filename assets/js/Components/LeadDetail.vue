<template>
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">{{lead.name}}</h5>
            <h6 class="card-subtitle pb-3 text-muted">{{lead.email.replace('/[^a-z]/gmi', '*')}}</h6>
            <h6 class="card-subtitle pb-2 text-muted">{{lead.phone}}</h6>
            <h6 class="card-subtitle pb-2 text-muted">{{lead.location.name}}</h6>
            <h6 class="card-subtitle pb-2 text-muted">{{lead.service.name}}</h6>
            <p class="card-text">{{lead.more_info}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LeadDetail",
        props: {
            'lead':{required:true}
        }
    }
</script>

<style scoped>

</style>