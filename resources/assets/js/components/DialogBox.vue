
<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="confirmClockInModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm clock in</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to clock in?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" @click=" saveClockIntime()">Yes, clock in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [],

    data: () => ({

    }),

    methods: {  
            saveClockInTime() {
            axios.post('/TimecardsController/store')
                .then(response => {
                    console.log('logged clock in');
                });
        }        
    }
}
</script>