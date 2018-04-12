<div class="mt-3">

    <table class="table table-striped" id="journal-table">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Type</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
    </table>

</div>

<div class="modal fade" id="mail-modal" tabindex="-1" role="dialog" aria-labelledby="mail-modal-subject" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function(){
            $(function() {

                var table = $('#journal-table').DataTable({
                    processing: true,
                    serverSide: true,
                    select: {
                        items: 'row'
                    },
                    autoWidth: false,
                    ajax: '{!! route('character.journal', $character) !!}',
                    columns: [
                        { data: 'date', name: 'date' },
                        { data: 'ref_type', name: 'ref_type' },
                        { data: 'amount', name: 'amount' }
                    ]

                });
            });
        });

    </script>
@endpush