<div class="modal-header"><h4 class="modal-title">Додати</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
</div>
{!! Lte3::formOpen(['action' => route('admin.categories.store')]) !!}
<div class="modal-body">
    @include('admin.categories.form')
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
    {!! Lte3::btnSubmit('Зберегти') !!}
</div>
{!! Lte3::formClose() !!}
