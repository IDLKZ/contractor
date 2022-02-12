<a data-bs-toggle="modal" data-bs-target="#exampleModal{{$id}}" href="javascript:void (0)">
    Посмотреть
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title m-auto" id="exampleModalLabel">{{$title}}</h5>
            </div>
            <div class="modal-body px-4">
                <div class="img-view" style='background: url("{{$url}}") no-repeat center;background-size: contain'></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info m-auto" data-bs-dismiss="modal">Ок</button>
            </div>
        </div>
    </div>
</div>
