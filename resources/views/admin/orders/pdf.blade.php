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
                {{--                <div class="img-view" style='background: url("{{$url}}") no-repeat center;background-size: contain'></div>--}}
                <div class="img-view" id="pdf-viewer{{$id}}"></div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-info m-auto" href="{{route('get-pdf', ['id' => $appId, 'type' => $type])}}" download>Скачать</a>
                <button type="button" class="btn btn-info m-auto" data-bs-dismiss="modal">Ок</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.7/pdfobject.min.js" integrity="sha512-g16L6hyoieygYYZrtuzScNFXrrbJo/lj9+1AYsw+0CYYYZ6lx5J3x9Yyzsm+D37/7jMIGh0fDqdvyYkNWbuYuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        PDFObject.embed("{{ route('get-pdf', ['id' => $appId, 'type' => $type]) }}", "#pdf-viewer{{$id}}");
    </script>
@endpush
