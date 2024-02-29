<div id="errorModal" class="modal-error">
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-close">&times;</span>
            <h2>Aviso</h2>
        </div>
        <div class="modal-body">
            <ul id="listaErroresModal" class="p-0 m-0" style="list-style: none;">
            </ul>
        </div>
        <div class="modal-footer">
            <h3></h3>
        </div>
    </div>
</div>
<script src="/js/modal.js"></script>
 @if(count($errors) > 0 )
 <script>
    let errors = {!!$errors!!};
    showErrors(errors);
</script>
 @endif
 @if($errors->any())
 <script>
     $(document).ready(function(){
         showErrors(["{{$errors->first()}}"]);
     });
 </script>
@endif
 @if(Session::has('error'))
    <script>
        $(document).ready(function(){
            showErrors(["{{Session::get('error')}}"]);
        });
    </script>
@endif
@if(Session::has('errors'))
    <script>
        $(document).ready(function(){
            showErrors({{json_encode(Session::get('errors'))}});
        });
    </script>
@endif
@if(Session::has('message'))
    <script>
        $(document).ready(function(){
            showErrors(["{{Session::get('message')}}"]);
        });
    </script>
@endif
