<div class="list photographer">
    <ul>
    @foreach($fotografers as $res)
      <li>
        <div class="item-content">
          <div class="item-media photographer"><img src="{{ asset('UploadedFile/fotografer_profile/'.$res->profile) }}" alt="profile"></div>
          <div class="item-inner">
            <div class="item-title">{{ $res->nama_lengkap }}</div>
            <div class="item-after">
              <span class="badge">
                @php
                    $i = 0;
                @endphp
                @foreach($fotos as $res_)
                  @if($res_->fotografer->id == $res->id)
                    @php
                        $i++;
                    @endphp
                  @endif
                @endforeach
                {{$i}}
              </span>
            </div>
          </div>
        </div>
      </li>
    @endforeach
    </ul>
</div>