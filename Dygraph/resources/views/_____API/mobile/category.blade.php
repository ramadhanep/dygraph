    <div class="row">
        @foreach($categories as $res)
        <div class="card card-outline col">
            <div class="card-content category card-content-padding">
                <img src="{{ asset('UploadedFile/img_category/'.$res->img_category) }}" class="img-category" alt="">
            </div>
            <div class="card-footer category no-before">{{ $res->category }}</div>
        </div>
        @if($loop->iteration % 2 == 0)
            </div><div class="row">
        @endif
        @endforeach
    </div>