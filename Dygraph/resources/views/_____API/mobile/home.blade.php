  
  @include('_____API.time-ago')
  <div class="photograph">
    <div class="row-custom">
      @foreach($fotografers as $res)
      <div class="person">
        <img src="{{ asset('UploadedFile/fotografer_profile/'.$res->profile) }}" alt="">
        <p>
          @if(strlen($res->nama_lengkap) > 7)
          {{ substr($res->nama_lengkap,0,7) }}..
          @else
          {{ $res->nama_lengkap }}
          @endif
        </p>
      </div>
      @endforeach
    </div>
  </div>
  <div class="content-photograph">
    @foreach($fotos as $res_)
    <div class="card no-box-shadow photography demo-facebook-card">
      <div class="card-header">
        <div class="demo-facebook-avatar"><img src="{{ asset('UploadedFile/fotografer_profile/'.$res_->fotografer->profile) }}" width="34" height="34" style="border-radius: 50%;"/></div>
        <div class="demo-facebook-name">{{ $res_->fotografer->nama_lengkap }}</div>
        <div class="demo-facebook-date">{{ timeAgo($res_->time) }}</div>
      </div>
      <div class="card-content card-content-padding">
        <img src="{{ asset('UploadedFile/foto/'.$res_->foto) }}" width="100%"/>
        <p>@php echo $res_->deskripsi_foto @endphp</p>
        <div class="indicators-user">
          @foreach($likes as $res__)
          @if($res__->id_foto == $res_->id)
          <span class="likes">
            <i class="icon f7-icons ios-only">heart</i>
            <i class="icon material-icons md-only">favorite_border</i>
            <span class="likeCount-{{ $res_->id }}" id="{{ $res__->like_count }}">{{ $res__->like_count }}</span>
          </span>
          <div>
            @php $foto_check_user = explode(", ",$res__->id_user); @endphp
            @if(in_array($id_user, $foto_check_user))
            <a href="#" class="link" id="{{ $res_->id }}">
              <i class="icon f7-icons ios-only">heart_fill</i>
              <i class="icon material-icons md-only">favorite</i>
            </a>
            <a href="{{ asset('UploadedFile/foto/'.$res_->foto) }}" class="link savePhoto" download="photo" id="downloadImage">
              <i class="icon f7-icons ios-only">save</i>
              <i class="icon material-icons md-only">save</i>
            </a>
            @else
            <a href="#" class="link likePhoto" id="{{ $res_->id }}">
              <i class="icon f7-icons ios-only likePhotoF7-{{ $res_->id }}">heart</i>
              <i class="icon material-icons md-only likePhotoF7-{{ $res_->id }}">favorite_border</i>
            </a>
            <a href="{{ asset('UploadedFile/foto/'.$res_->foto) }}" class="link savePhoto" download="photo" id="downloadImage">
              <i class="icon f7-icons ios-only">save</i>
              <i class="icon material-icons md-only">save</i>
            </a>
            @endif
          @endif
          @endforeach
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>