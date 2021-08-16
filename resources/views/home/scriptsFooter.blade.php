@include('home.components.reqsAjax')
@include('home.components.responses')
@include('home.components.mNewTournament')
<script type="text/javascript">

    $(document).ready(function () {
        $('.phone').mask('(00) 0 0000-0000')

        $('#btn-add-comp').click(function (event) {
            $('#add-tournament-date-modal').modal('show');
        });
    });
</script>
